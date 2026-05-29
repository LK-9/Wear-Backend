<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

test('public pages are accessible', function () {
    $category = Category::create([
        'name' => 'Test Category',
        'slug' => 'test-category',
        'description' => 'A sample category.',
    ]);

    $product = Product::create([
        'category_id' => $category->id,
        'name' => 'Test Product',
        'slug' => 'test-product',
        'description' => 'A product for testing.',
        'price' => 49.99,
        'stock' => 10,
        'is_active' => true,
    ]);

    $this->get('/')->assertOk();
    $this->get('/shop')->assertOk();
    $this->get('/shop-details/' . $product->slug)->assertOk();
    $this->get('/blog')->assertOk();
    $this->get('/blog-details')->assertOk();
    $this->get('/contact')->assertOk();
    $this->get('/faq')->assertOk();
    $this->get('/404-error')->assertOk();
});

test('guest is redirected from cart page', function () {
    $this->get('/cart')->assertRedirect('/login');
});

test('authenticated user can view and update cart page', function () {
    $user = User::factory()->create();

    $category = Category::create([
        'name' => 'Test Category',
        'slug' => 'test-category',
        'description' => 'A sample category.',
    ]);

    $product = Product::create([
        'category_id' => $category->id,
        'name' => 'Test Product',
        'slug' => 'test-product',
        'description' => 'A product for testing.',
        'price' => 49.99,
        'stock' => 10,
        'is_active' => true,
    ]);

    $this->actingAs($user)
        ->post('/cart/add', [
            'product_id' => $product->id,
            'quantity' => 2,
        ])
        ->assertSessionHas('success');

    $this->actingAs($user)
        ->get('/cart')
        ->assertOk()
        ->assertSee('Cart Page')
        ->assertSee('Test Product');

    $cartItem = $user->cart->items()->first();

    $this->actingAs($user)
        ->patch('/cart/' . $cartItem->id, [
            'quantity' => 3,
        ])
        ->assertSessionHas('success');

    $this->assertDatabaseHas('cart_items', [
        'id' => $cartItem->id,
        'quantity' => 3,
    ]);
});

test('authenticated user can remove and clear cart items', function () {
    $user = User::factory()->create();

    $category = Category::create([
        'name' => 'Test Category',
        'slug' => 'test-category',
        'description' => 'A sample category.',
    ]);

    $product = Product::create([
        'category_id' => $category->id,
        'name' => 'Test Product',
        'slug' => 'test-product',
        'description' => 'A product for testing.',
        'price' => 49.99,
        'stock' => 10,
        'is_active' => true,
    ]);

    $this->actingAs($user)
        ->post('/cart/add', [
            'product_id' => $product->id,
            'quantity' => 1,
        ])
        ->assertSessionHas('success');

    $cartItem = $user->cart->items()->first();

    $this->actingAs($user)
        ->delete('/cart/' . $cartItem->id)
        ->assertSessionHas('success');

    $this->assertDatabaseMissing('cart_items', [
        'id' => $cartItem->id,
    ]);

    $this->actingAs($user)
        ->post('/cart/add', [
            'product_id' => $product->id,
            'quantity' => 1,
        ]);

    $this->actingAs($user)
        ->delete('/cart')
        ->assertSessionHas('success');

    $this->assertDatabaseCount('cart_items', 0);
});

test('checkout page redirects when cart is empty', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/checkout')
        ->assertRedirect('/cart');
});
