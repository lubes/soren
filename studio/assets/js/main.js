$(document).ready(function() {
	$('a[rel="relativeanchor"]').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top - 150
	    }, 500);
	    return false;
	});

    // Parallax Functino
    function parallax() {
        var start = null;
        var scrollPosition = window.scrollY;
        var halfWindowHeight = window.innerHeight * 4;
        var rAFstarted = false;
        var scrollnimates = [].slice.call(document.getElementsByClassName('p_el'));
        scrollnimates.forEach(function (sn) {
            var clientOffsets = sn.getBoundingClientRect();
            sn.animationOffset = clientOffsets.top + scrollPosition;
            sn.magicNumber = sn.dataset.magicNumber || sn.getAttribute("data-scroll") || "-2";
        });
        function step(timestamp) {
            if (!start) start = timestamp;
            var progress = timestamp - start;
            var scrollPoint = window.scrollY;
            scrollnimates.forEach(function (sn) {
                if (scrollPoint > (sn.animationOffset - halfWindowHeight * 1) && scrollPoint < (sn.animationOffset + halfWindowHeight)) {
                    var magicPoint = (scrollPoint - (sn.animationOffset - halfWindowHeight)) / sn.magicNumber;
                    var up = magicPoint + 'px';
                    sn.style.webkitTransform = 'translateY(' + up + ')';
                    sn.style.MozTransform = 'translateY(' + up + ')';
                    sn.style.msTransform = 'translateY(' + up + ')';
                    sn.style.OTransform = 'translateY(' + up + ')';
                    sn.style.transform = 'translateY(' + up + ')';
                }
            });
            window.requestAnimationFrame(step);
        }
        window.requestAnimationFrame(step);
    }  
    parallax();

    // INVIEW Functions
    function inView( opt ) {
        if( opt.selector === undefined ) {
            console.log( 'Valid selector required for inView' );
            return false;
        }
        var elems = [].slice.call( document.querySelectorAll( opt.selector ) ),
            once = opt.once === undefined ? true : opt.once,
            offsetTop = opt.offsetTop === undefined ? 0 : opt.offsetTop,
            offsetBot = opt.offsetBot === undefined ? 0 : opt.offsetBot,
            count = elems.length,
            winHeight = 0,
            ticking = false;
        function update() {
            var i = count;
            while( i-- ) {
                var elem = elems[ i ],
                    rect = elem.getBoundingClientRect();
                if( rect.bottom >= offsetTop && rect.top <= winHeight - offsetBot ) {
                    elem.classList.add( 'in-view' );
                    if( once ) {
                        count--;
                        elems.splice( i, 1 );
                    }
                } else {
                    elem.classList.remove( 'in-view' );
                }
            }
            ticking = false;
        }
        function onResize() {
            winHeight = window.innerHeight;
            requestTick();
        }

        function setBGColor() {
            var bodyBG = $('body');
            // Projects Section
            if($('.projects').hasClass('in-view')) {
                bodyBG.addClass('darkest');
            } else {
                bodyBG.removeClass('darkest');
            }
            // Contact Section
            if($('.contact').hasClass('in-view')) {
                bodyBG.addClass('dark');
            } else {
                bodyBG.removeClass('dark');
            }
        }

        function onScroll() {
            requestTick();
            // setBGColor();
        }
        function requestTick() {
            if( !ticking ) {
                requestAnimationFrame( update );
                ticking = true;
            }
        }
        window.addEventListener( 'resize', onResize, false );
        document.addEventListener( 'scroll', onScroll, false );
        document.addEventListener( 'touchmove', onScroll, false );
        onResize();
    }
    // InView
    inView({
        selector: '.inview-item', // an .in-view class will get toggled on these elements
        once: false, // set this to false to have the .in-view class be toggled on AND off
        offsetTop: 400, // top threshold to be considered "in view"
        offsetBot: 0 // bottom threshold to be considered "in view"
    });





    $(window).on("scroll touchmove", function() {

        if ($(document).scrollTop() >= $("#soren").position().top -400) {
            $('body').removeClass('dark');
            $('.projects').removeClass('in-view');
            $('.contact').removeClass('in-view');
        };
        if ($(document).scrollTop() > $("#projects").position().top -400) {
            // $('body').css('background', $("#projects").attr("data-color"));
            var this_color = $("#projects").attr("data-color");
            $('body').addClass('dark');
            $('.projects').addClass('in-view');
            $('.contact').removeClass('in-view');
        };
        if ($(document).scrollTop() > $("#contact_sec").position().top -400) {
            $('body').removeClass('dark');
            $('.projects').removeClass('in-view');
            $('.contact').addClass('in-view');
        };

    });


    $('.faux-login').submit(function (e) {
        e.preventDefault();
        $('.error_msg').fadeIn();
    });

    $('#login').on('shown.bs.modal', function () {
      $('.error_msg').hide();
    })




});
