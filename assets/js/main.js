/* ===================================================================
    
    Author          : Valid Theme
    Template Name   : MediHub - Medical & Health Template
    Version         : 1.1
    
* ================================================================= */

(function($) {
    "use strict";

    $(document).on('ready', function() {


        /* ==================================================
            # Wow Init
         ===============================================*/
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();


        /* ==================================================
            # Smooth Scroll
         ===============================================*/
        $("body").scrollspy({
            target: ".navbar-collapse",
            offset: 200
        });
        $('a.smooth-menu').on('click', function(event) {
            var $anchor = $(this);
            var headerH = '75';
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });


        /* ==================================================
            # Banner Animation
        ===============================================*/
        function doAnimations(elems) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';
            elems.each(function() {
                var $this = $(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function() {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $immortalCarousel = $('.animate_text'),
            $firstAnimatingElems = $immortalCarousel.find('.item:first').find("[data-animation ^= 'animated']");
        //Initialize carousel
        $immortalCarousel.carousel();
        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);
        //Other slides to be animated on carousel slide event
        $immortalCarousel.on('slide.bs.carousel', function(e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });


        /* ==================================================
            # Equal Height Init
        ===============================================*/
        $(window).on('resize', function() {
            $(".equal-height").equalHeights();
        });

        $(".equal-height").equalHeights().find("img, iframe, object").on('load', function() {
            $(".equal-height").equalHeights();
        });


        /* ==================================================
            # imagesLoaded active
        ===============================================*/
        $('#portfolio-grid,.blog-masonry').imagesLoaded(function() {

            /* Filter menu */
            $('.mix-item-menu').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });

            /* filter menu active class  */
            $('.mix-item-menu button').on('click', function(event) {
                $(this).siblings('.active').removeClass('active');
                $(this).addClass('active');
                event.preventDefault();
            });

            /* Filter active */
            var $grid = $('#portfolio-grid').isotope({
                itemSelector: '.pf-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.pf-item',
                }
            });

            /* Filter active */
            $('.blog-masonry').isotope({
                itemSelector: '.blog-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.blog-item',
                }
            });

        });


         /* ==================================================
            # Fun Factor Init
        ===============================================*/
        $('.timer').countTo();
        $('.fun-fact').appear(function() {
            $('.timer').countTo();
        }, {
            accY: -100
        });
        

        /* ==================================================
            # Youtube Video Init
         ===============================================*/
        $('.player').mb_YTPlayer();



        /* ==================================================
            # Magnific popup init
         ===============================================*/
        $(".popup-link").magnificPopup({
            type: 'image',
            // other options
        });

        $(".popup-gallery").magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
            // other options
        });

        $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        $('.magnific-mix-gallery').each(function() {
            var $container = $(this);
            var $imageLinks = $container.find('.item');

            var items = [];
            $imageLinks.each(function() {
                var $item = $(this);
                var type = 'image';
                if ($item.hasClass('magnific-iframe')) {
                    type = 'iframe';
                }
                var magItem = {
                    src: $item.attr('href'),
                    type: type
                };
                magItem.title = $item.data('title');
                items.push(magItem);
            });

            $imageLinks.magnificPopup({
                mainClass: 'mfp-fade',
                items: items,
                gallery: {
                    enabled: true,
                    tPrev: $(this).data('prev-text'),
                    tNext: $(this).data('next-text')
                },
                type: 'image',
                callbacks: {
                    beforeOpen: function() {
                        var index = $imageLinks.index(this.st.el);
                        if (-1 !== index) {
                            this.goTo(index);
                        }
                    }
                }
            });
        });


        /* ==================================================
            # Doctor Carousel
         ===============================================*/
        $('.doctor-carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });


        /* ==================================================
            # Services Carousel
         ===============================================*/
        $('.services-carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });

        /* ==================================================
            # Testimonials Carousel
         ===============================================*/
        $('.testimonial-carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items:2
                }
            }
        });


        /* ==================================================
            # Health Tips Carousel
         ===============================================*/
        $('.tips-carousel').owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            items: 1,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
        });


        /* ==================================================
            Preloader Init
         ===============================================*/
         $(window).on('load', function () {
            $('.preloader').fadeOut('slow', function () {
              $(this).remove();
            });
          });

           /* ==================================================
            Cart Function
         ===============================================*/
         let cart = [];
         const ongkir = 5000; // Shipping cost
         
         function updateCartUI() {
             const cartItemsContainer = $('#cart-items');
             const cartSubtotalElement = $('#cart-subtotal');
             const cartOngkirElement = $('#cart-ongkir');
             const cartGrandtotalElement = $('#cart-grandtotal');
             const badgeElement = $('.badge-custom'); // Select the badge element
             
             const emptyCartWidget = $('#empty-cart');
             const filledCartWidget = $('#filled-cart');
             
             cartItemsContainer.empty();
             
             let subtotal = 0;
             let totalQuantity = 0; // Initialize total quantity
             
             cart.forEach(item => {
                 subtotal += item.price * item.quantity;
                 totalQuantity += item.quantity; // Sum up the quantity of each item
                 
                 const itemElement = `
                     <div class="cart-item">
                         <img src="${item.image}" alt="Product Image" width="80" height="80">
                         <div class="item-details">
                             <a href="#" class="item-name">${item.name}</a>
                             <div class="quantity">
                                 <button class="quantity-btn" onclick="changeQuantity(${item.id}, -1)" ${item.quantity <= 5 ? 'disabled' : ''}>-</button>
                                 <input type="text" readonly value="${item.quantity}" min="1">
                                 <button class="quantity-btn" onclick="changeQuantity(${item.id}, 1)">+</button>
                             </div>
                             <span class="item-price">Rp. ${item.price.toLocaleString('id-ID')}</span>
                         </div>
                         <span class="remove-item" onclick="removeFromCart(${item.id})"><i class="fa fa-trash"></i></span>
                     </div>
                 `;
                 cartItemsContainer.append(itemElement);
             });
         
             cartSubtotalElement.text(`Rp. ${subtotal.toLocaleString('id-ID')}`);
             cartOngkirElement.text(`Rp. ${ongkir.toLocaleString('id-ID')}`);
             const grandtotal = subtotal + ongkir;
             cartGrandtotalElement.text(`Rp. ${grandtotal.toLocaleString('id-ID')}`);
             badgeElement.text(totalQuantity); // Update the badge with the total quantity
         
             // Toggle visibility based on cart items
             if (cart.length === 0) {
                 emptyCartWidget.show();
                 filledCartWidget.hide();
             } else {
                 emptyCartWidget.hide();
                 filledCartWidget.show();
             }
         }
         
         function changeQuantity(productId, delta) {
             const cartItem = cart.find(item => item.id === productId);
             if (cartItem) {
                 const newQuantity = cartItem.quantity + delta;
                 if (newQuantity >= 5) {
                     cartItem.quantity = newQuantity;
                 }
                 updateCartUI();
             }
         }
         
         function removeFromCart(productId) {
             cart = cart.filter(item => item.id !== productId);
             updateCartUI();
         }
         
         $(document).on('click', '.add-to-cart', function(e) {
             e.preventDefault();
             
             const isSideNavOpen = $("nav.navbar.bootsnav > .side").hasClass("on");
             
             if (!isSideNavOpen) {
                 $("nav.navbar.bootsnav > .side").addClass("on");
                 $("body").addClass("on-side");
             }
             
             const productId = $(this).data('id');
             const productName = $(this).data('name');
             const productPrice = $(this).data('price');
             const productImage = $(this).data('image');
         
             const cartItem = cart.find(item => item.id === productId);
             
             if (cartItem) {
                 cartItem.quantity += 5; // Add 5 to the existing quantity
             } else {
                 cart.push({
                     id: productId,
                     name: productName,
                     price: productPrice,
                     quantity: 5, // Initialize with 5
                     image: productImage
                 });
             }
             
             updateCartUI();
         });
         
         $('#cart-form').submit(function(e) {
             e.preventDefault();
         
             if (cart.length === 0) {
                 alert('Keranjang kosong. Tambahkan produk sebelum checkout.');
                 return;
             }
         
             const nama = $('#nama').val();
             const phoneNumber = $('#phone_number').val();
             const address = $('#address').val();
         
             if (!nama || !phoneNumber || !address) {
                 alert('Silakan isi semua informasi pengiriman.');
                 return;
             }
         
             let orderDetails = `Nama: ${nama}\nTelfon: ${phoneNumber}\nAlamat: ${address}\n-----------------------------\nDATA ORDER RICO\n`;
         
             cart.forEach(item => {
                 orderDetails += `${item.name}: ${item.quantity} crt\n`; // You can replace 'crt' with the unit of the item if needed
             });
         
             const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
             const grandtotal = subtotal + ongkir;
         
             orderDetails += `-----------------------------\n`;
             orderDetails += `Subtotal: Rp. ${subtotal.toLocaleString('id-ID')}\n`;
             orderDetails += `Ongkir: Rp. ${ongkir.toLocaleString('id-ID')}\n`;
             orderDetails += `**Grandtotal: Rp. ${grandtotal.toLocaleString('id-ID')}**\n`;
         
             const whatsappUrl = `https://api.whatsapp.com/send?phone=6282192059768&text=${encodeURIComponent(orderDetails)}`;
             window.open(whatsappUrl, '_blank');
         });
         
     
            window.changeQuantity = changeQuantity;
            window.removeFromCart = removeFromCart;

        /* ==================================================
            Nice Select Init
         ===============================================*/
        $('select').niceSelect();


        /* ==================================================
            Contact Form Validations
        ================================================== */
        $('.contact-form').each(function() {
            var formInstance = $(this);
            formInstance.submit(function() {

                var action = $(this).attr('action');

                $("#message").slideUp(750, function() {
                    $('#message').hide();

                    $('#submit')
                        .after('<img src="assets/img/ajax-loader.gif" class="loader" />')
                        .attr('disabled', 'disabled');

                    $.post(action, {
                            name: $('#name').val(),
                            email: $('#email').val(),
                            phone: $('#phone').val(),
                            comments: $('#comments').val()
                        },
                        function(data) {
                            document.getElementById('message').innerHTML = data;
                            $('#message').slideDown('slow');
                            $('.contact-form img.loader').fadeOut('slow', function() {
                                $(this).remove()
                            });
                            $('#submit').removeAttr('disabled');
                        }
                    );
                });
                return false;
            });
        });

         /* ==================================================
            Appointment Form Validations
        ================================================== */
        $('#appointment-form').on('submit', function(e) {
            e.preventDefault();
    
            var department = $('#department').val();
            var name = $('#name').val();
            var message = `Halo, Nama saya ${name}. Saya dari pihak ${department}. Saya ingin membuat janji untuk penjelasan produk. Kira-kira kapan pihak RICO bisa bertemu? Terima kasih!`;
            var whatsappUrl = `https://wa.me/6282192059768?text=${message}`;
    
            window.open(whatsappUrl, '_blank');
        });

    }); // end document ready function
})(jQuery); // End jQuery