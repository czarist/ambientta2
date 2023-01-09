function updateViewportDimensions() {
    var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName('body')[0],
        x = w.innerWidth || e.clientWidth || g.clientWidth,
        y = w.innerHeight || e.clientHeight || g.clientHeight;
    return { width: x, height: y };
}
var viewport = updateViewportDimensions();

var waitForFinalEvent = (function () {
    var timers = {};
    return function (callback, ms, uniqueId) {
        if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
        if (timers[uniqueId]) { clearTimeout(timers[uniqueId]); }
        timers[uniqueId] = setTimeout(callback, ms);
    };
})();

var timeToWaitForLast = 100;

function loadGravatars() {
    viewport = updateViewportDimensions();
    if (viewport.width >= 768) {
        jQuery('.comment img[data-gravatar]').each(function () {
            jQuery(this).attr('src', jQuery(this).attr('data-gravatar'));
        });
    }
}

const home_url = document.getElementById('home_url').value;
const get_template_directory_uri = document.getElementById('get_template_directory_uri').value;


jQuery(document).ready(function ($) {

    AOS.init({
        disable: function () {
            var maxWidth = 800;
            return window.innerWidth < maxWidth;
        },
    });


    // open menu
    function openmenu() {
        document.getElementById("close-menu").classList.remove("d-none");
        document.getElementById("close-menu").classList.add("d-flex");
        document.getElementById("open-menu").classList.add("d-none");
        document.getElementById("open-menu").classList.remove("d-flex");
        document.getElementById("menu-mobile").classList.remove("d-none");
        document.getElementById("menu-mobile").classList.add("d-flex");
    };

    document.getElementById("open-menu").onclick = function () {
        openmenu();
    }

    // close menu
    function closemenu() {
        document.getElementById("open-menu").classList.remove("d-none");
        document.getElementById("open-menu").classList.add("d-flex");
        document.getElementById("close-menu").classList.add("d-none");
        document.getElementById("close-menu").classList.remove("d-flex");
        document.getElementById("menu-mobile").classList.add("d-none");
        document.getElementById("menu-mobile").classList.remove("d-flex");
    };

    document.getElementById("close-menu").onclick = function () {
        closemenu();
    }

    $('a[href^="#"]').on("click", function (e) {
        e.preventDefault();

        if (document.getElementById("menu-mobile").classList.contains('d-flex')) {
            closemenu();
        }

        var id = $(this).attr("href"),
            targetOffset = $(id).offset().top;

        $("html, body").animate({
            scrollTop: targetOffset - 100,
        },
            500
        );
    });

    window.onload = function () {

        // mata load da página
        let timeout;
        let fundo = document.getElementById('loadContent');

        function timeKill() {
            timeout = setTimeout(deletLoadContent, 2500);
        }

        function deletLoadContent() {
            fundo.remove();
        }

        timeKill();

        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 12000,
            },
            slidesPerView: 1,
            spaceBetween: 20,
            slidesPerGroup: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        const swiper2 = new Swiper('.swiper2', {
            slidesPerView: 1,
            spaceBetween: 40,
            slidesPerGroup: 1,
            pagination: {
                el: '#s2a.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '#s2b',
                prevEl: '#s2c',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 20
                },
                480: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 20
                },
                640: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 20
                }
            }

        });
    }



    document.addEventListener("scroll", () => {
        let imgLogo = document.getElementById('imgLogo');
        let header = document.getElementById("header");

        //transition for mobile (will work only in mobile)
        if (window.pageYOffset === 0) {
            header.classList.remove("header-menor");
            header.classList.add("header-maior");
            imgLogo.src = `${get_template_directory_uri}/library/images/logo.png`;
        } else {
            header.classList.add("header-menor");
            header.classList.remove("header-maior");
            imgLogo.src = `${get_template_directory_uri}/library/images/logo2.png`;
        }

    });

    loadGravatars();

});