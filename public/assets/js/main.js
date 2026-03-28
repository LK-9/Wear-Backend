(function ($) {
  "use strict";

  // Use native DOMContentLoaded instead of jQuery .ready()
  document.addEventListener("DOMContentLoaded", function () {
    /*---------- Mobile Menu  ----------*/
    $.fn.globalmobilemenu = function (options) {
      var opt = $.extend(
        {
          menuToggleBtn: ".global-menu-toggle",
          bodyToggleClass: "global-body-visible",
          subMenuClass: "global-submenu",
          subMenuParent: "menu-item-has-children",
          globalSubMenuParent: "menu-item-has-children",
          subMenuParentToggle: "global-active",
          meanExpandClass: "global-mean-expand",
          appendElement: '<span class="global-mean-expand"></span>',
          subMenuToggleClass: "global-open",
          toggleSpeed: 400,
        },
        options
      );

      return this.each(function () {
        var menu = $(this); // Select menu

        // Menu Show & Hide
        function menuToggle() {
          menu.toggleClass(opt.bodyToggleClass);

          // collapse submenu on menu hide or show
          var subMenu = "." + opt.subMenuClass;
          $(subMenu).each(function () {
            if ($(this).hasClass(opt.subMenuToggleClass)) {
              $(this).removeClass(opt.subMenuToggleClass);
              $(this).css("display", "none");
              $(this).parent().removeClass(opt.subMenuParentToggle);
            }
          });
        }

        // Class Set Up for every submenu
        menu.find("." + opt.subMenuParent).each(function () {
          var submenu = $(this).find("ul");
          submenu.addClass(opt.subMenuClass);
          submenu.css("display", "none");
          $(this).addClass(opt.subMenuParent);
          $(this).addClass(opt.globalSubMenuParent); // Add menu-item-has-children class
          $(this).children("a").append(opt.appendElement);
        });

        // Toggle Submenu
        function toggleDropDown($element) {
          var submenu = $element.children("ul");
          if (submenu.length > 0) {
            $element.toggleClass(opt.subMenuParentToggle);
            submenu.slideToggle(opt.toggleSpeed);
            submenu.toggleClass(opt.subMenuToggleClass);
          }
        }

        // Submenu toggle (DELEGATED)
        var itemHasChildren = "." + opt.globalSubMenuParent + " > a";
        $(document).on("click", itemHasChildren, function (e) {
          e.preventDefault();
          toggleDropDown($(this).parent());
        });

        // Menu Show & Hide On Toggle Btn click
        $(document).on("click", opt.menuToggleBtn, function () {
          menuToggle();
        });

        // Stop Hide full menu on menu click
        menu.on("click", function (e) {
          e.stopPropagation();
        });

        // Hide Menu On outside click (proper outside click handler)
        $(document).on("click", function (e) {
          var $target = $(e.target);
          var clickedInsideMenu = $target.closest(menu).length > 0;
          var clickedToggle = $target.closest(opt.menuToggleBtn).length > 0;
          if (!clickedInsideMenu && !clickedToggle && menu.hasClass(opt.bodyToggleClass)) {
            menuToggle();
          }
        });

        // Prevent submenu from hiding when clicking inside the menu
        menu.find("div").on("click", function (e) {
          e.stopPropagation();
        });
      });
    };

    $(".global-menu-wrapper").globalmobilemenu();

    /*---------- Sticky fix ----------*/
    $(window).on("scroll", function () {
      var topPos = $(this).scrollTop();
      if (topPos > 10) {
        $(".sticky-wrapper").addClass("sticky");
        $(".category-menu").addClass("close-category");
      } else {
        $(".sticky-wrapper").removeClass("sticky");
        $(".category-menu").removeClass("close-category");
      }
    });

    $(window).on("scroll", function () {
      var topPos = $(this).scrollTop();
      if (topPos > 10) {
        $(".sticky-wrapper2").addClass("sticky");
        $(".category-menu").addClass("close-category");
      } else {
        $(".sticky-wrapper2").removeClass("sticky");
        $(".category-menu").removeClass("close-category");
      }
    });

    // After
    $(".menu-expand").on("click", function (e) {
      e.preventDefault();
      $(".category-menu").toggleClass("open-category");
    });

    /*---------- Popup Sidemenu ----------*/
    function popupSideMenu($sideMenu, $sideMunuOpen, $sideMenuCls, $toggleCls) {
      $($sideMunuOpen).on("click", function (e) {
        e.preventDefault();
        $($sideMenu).addClass($toggleCls);
      });
      $($sideMenu).on("click", function (e) {
        e.stopPropagation();
        $($sideMenu).removeClass($toggleCls);
      });
      var sideMenuChild = $sideMenu + " > div";
      $(sideMenuChild).on("click", function (e) {
        e.stopPropagation();
        $($sideMenu).addClass($toggleCls);
      });

      $($sideMenuCls).on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        $($sideMenu).removeClass($toggleCls);
      });
    }

    popupSideMenu(".sidemenu-cart", ".sideMenuToggler", ".sideMenuCls", "show");
    popupSideMenu(".sidemenu-info", ".sideMenuInfo", ".sideMenuCls", "show");

    /*-----------------------------------
           Wow Animation 
    -----------------------------------*/
    new WOW().init();

    /*-----------------------------------
          Custom select
    -----------------------------------*/
    const $dropdown = $(".select-dropdown");
    const $selected = $dropdown.find(".select-dropdown__selected");
    const $list = $dropdown.find(".select-dropdown__list");
    const $items = $dropdown.find(".select-dropdown__item");

    // Toggle dropdown
    $selected.on("click", function () {
      $list.toggleClass("select-dropdown__list--active");
    });

    // Item click
    $items.on("click", function () {
      const value = $(this).data("value");
      const text = $(this).text();

      $selected.text(text).attr("data-value", value);
      $list.removeClass("select-dropdown__list--active");
    });

    // Close dropdown if clicked outside
    $(document).on("click", function (e) {
      if (!$(e.target).closest(".select-dropdown").length) {
        $list.removeClass("select-dropdown__list--active");
      }
    });

    /*-----------------------------------
           Set Background Image & Mask   
    -----------------------------------*/
    if ($("[data-bg-src]").length > 0) {
      $("[data-bg-src]").each(function () {
        var src = $(this).attr("data-bg-src");
        $(this).css("background-image", "url(" + src + ")");
        $(this).removeAttr("data-bg-src").addClass("background-image");
      });
    }

    if ($("[data-mask-src]").length > 0) {
      $("[data-mask-src]").each(function () {
        var mask = $(this).attr("data-mask-src");
        $(this).css({
          "mask-image": "url(" + mask + ")",
          "-webkit-mask-image": "url(" + mask + ")",
        });
        $(this).addClass("bg-mask");
        $(this).removeAttr("data-mask-src");
      });
    }

    /*-----------------------------------
           Back to top    
    -----------------------------------*/
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 20) {
        $("#back-top").addClass("show");
      } else {
        $("#back-top").removeClass("show");
      }
    });

    $(document).on("click", "#back-top", function () {
      $("html, body").animate({ scrollTop: 0 }, 800);
      return false;
    });

    /*-----------------------------------
            MagnificPopup  view    
    -----------------------------------*/
    $(".video-popup").magnificPopup({
      type: "iframe",
      removalDelay: 260,
      mainClass: "mfp-zoom-in",
    });

    $(".popup-img").magnificPopup({
      type: "image",
      gallery: {
        enabled: true,
      },
    });

    /*-----------------------------------
             NiceSelect     
    -----------------------------------*/
    if ($(".nice-select").length) {
      $(".nice-select").niceSelect();
    }

    /*-----------------------------------
           Mouse Cursor    
    -----------------------------------*/
    function mousecursor() {
      if ($("body")) {
        const e = document.querySelector(".cursor-inner"),
          t = document.querySelector(".cursor-outer");
        let n,
          i = 0,
          o = !1;
        (window.onmousemove = function (s) {
          o ||
            (t.style.transform =
              "translate(" + s.clientX + "px, " + s.clientY + "px)"),
            (e.style.transform =
              "translate(" + s.clientX + "px, " + s.clientY + "px)"),
            (n = s.clientY),
            (i = s.clientX);
        }),
          $("body").on("mouseenter", "a, .cursor-pointer", function () {
            e.classList.add("cursor-hover");
            t.classList.add("cursor-hover");
          }),
          $("body").on("mouseleave", "a, .cursor-pointer", function () {
            ($(this).is("a") && $(this).closest(".cursor-pointer").length) ||
              (e.classList.remove("cursor-hover"),
              t.classList.remove("cursor-hover"));
          }),
          (e.style.visibility = "visible"),
          (t.style.visibility = "visible");
      }
    }
    $(function () {
      mousecursor();
    });

    /*-----------------------------------
          Text Splitting
    -----------------------------------*/
    Splitting();

    // Tab Slider
    var swiper = new Swiper(".tabs-slider", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 20,

      breakpoints: {
        320: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },
    });

    $(".cart2-items__info-quantity").each(function () {
      const $input = $(this).find(".qty-input");
      const $btnPlus = $(this).find(".quantity-plus");
      const $btnMinus = $(this).find(".quantity-minus");

      $btnPlus.on("click", function () {
        let currentValue = parseInt($input.val(), 10);
        currentValue = Number.isNaN(currentValue) ? 0 : currentValue;

        const maxAttr = parseInt($input.attr("max"), 10);
        const max = Number.isNaN(maxAttr) ? 100 : maxAttr;

        if (currentValue < max) {
          $input.val(currentValue + 1);
        }
      });

      $btnMinus.on("click", function () {
        let currentValue = parseInt($input.val(), 10);
        currentValue = Number.isNaN(currentValue) ? 0 : currentValue;

        const minAttr = parseInt($input.attr("min"), 10);
        const min = Number.isNaN(minAttr) ? 1 : minAttr;

        if (currentValue > min) {
          $input.val(currentValue - 1);
        }
      });
    });

    //  Range Slider
    const $rangeMin = $(".range-min");
    const $rangeMax = $(".range-max");
    const $priceText = $("#minPrice");

    function updatePrice() {
      let minVal = parseInt($rangeMin.val(), 10);
      let maxVal = parseInt($rangeMax.val(), 10);

      minVal = Number.isNaN(minVal) ? 0 : minVal;
      maxVal = Number.isNaN(maxVal) ? minVal : maxVal;

      // Prevent overlap
      if (minVal > maxVal) {
        const tmp = minVal;
        minVal = maxVal;
        maxVal = tmp;
      }

      $priceText.html(`<span>Price:</span> $${minVal} — $${maxVal}`);
    }

    $rangeMin.on("input", updatePrice);
    $rangeMax.on("input", updatePrice);

    updatePrice();

    //  Comparison Slider
    function initComparisons() {
      var x, i;
      /* Find all elements with an "overlay" class: */
      x = document.getElementsByClassName("img-comp-overlay");
      for (i = 0; i < x.length; i++) {
        /* Once for each "overlay" element:
           pass the "overlay" element as a parameter when executing the compareImages function: */
        compareImages(x[i]);
      }
      function compareImages(img) {
        var slider,
          // removed duplicate 'img' declaration to avoid shadowing
          clicked = 0,
          w,
          h;
        /* Get the width and height of the img element */
        w = img.offsetWidth;
        h = img.offsetHeight;
        /* Set the width of the img element to 50%: */
        img.style.width = w / 2 + "px";
        /* Create slider: */
        slider = document.createElement("DIV");
        slider.setAttribute("class", "img-comp-slider");
        /* Insert slider */
        img.parentElement.insertBefore(slider, img);
        /* Position the slider in the middle: */
        slider.style.top = h / 2 - slider.offsetHeight / 2 + "px";
        slider.style.left = w / 2 - slider.offsetWidth / 2 + "px";
        /* Execute a function when the mouse button is pressed: */
        slider.addEventListener("mousedown", slideReady);
        /* And another function when the mouse button is released: */
        window.addEventListener("mouseup", slideFinish);
        /* Or touched (for touch screens: */
        slider.addEventListener("touchstart", slideReady);
        /* And released (for touch screens: */
        window.addEventListener("touchend", slideFinish);
        function slideReady(e) {
          /* Prevent any other actions that may occur when moving over the image: */
          e.preventDefault();
          /* The slider is now clicked and ready to move: */
          clicked = 1;
          /* Execute a function when the slider is moved: */
          window.addEventListener("mousemove", slideMove);
          window.addEventListener("touchmove", slideMove);
        }
        function slideFinish() {
          /* The slider is no longer clicked: */
          clicked = 0;
        }
        function slideMove(e) {
          var pos;
          /* If the slider is no longer clicked, exit this function: */
          if (clicked === 0) return false;
          /* Get the cursor's x position: */
          pos = getCursorPos(e);
          /* Prevent the slider from being positioned outside the image: */
          if (pos < 0) pos = 0;
          if (pos > w) pos = w;
          /* Execute a function that will resize the overlay image according to the cursor: */
          slide(pos);
        }
        function getCursorPos(e) {
          var a,
            x = 0;
          e = e.changedTouches ? e.changedTouches[0] : e;
          /* Get the x positions of the image: */
          a = img.getBoundingClientRect();
          /* Calculate the cursor's x coordinate, relative to the image: */
          x = e.pageX - a.left;
          /* Consider any page scrolling: */
          x = x - window.pageXOffset;
          return x;
        }
        function slide(x) {
          /* Resize the image: */
          img.style.width = x + "px";
          /* Position the slider: */
          slider.style.left = img.offsetWidth - slider.offsetWidth / 2 + "px";
        }
      }
    }

    initComparisons();

    // Set your target date here
    var targetDate = new Date("2025-12-31 23:59:59").getTime();

    function updateTimer() {
      var now = new Date().getTime();
      var distance = targetDate - now;

      if (distance < 0) {
        clearInterval(timerInterval);
        $(".category2__items-time-info-subtitle").text("00");
        return;
      }

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Update HTML
      $(".category2__items-time-info-subtitle.days").text(
        String(days).padStart(2, "0")
      );
      $(".category2__items-time-info-subtitle.hours").text(
        String(hours).padStart(2, "0")
      );
      $(".category2__items-time-info-subtitle.minutes").text(
        String(minutes).padStart(2, "0")
      );
      $(".category2__items-time-info-subtitle.seconds").text(
        String(seconds).padStart(2, "0")
      );
    }

    // Update every second
    var timerInterval = setInterval(updateTimer, 1000);
    updateTimer();
  }); // End DOMContentLoaded
})(jQuery); // End jQuery IIFE
