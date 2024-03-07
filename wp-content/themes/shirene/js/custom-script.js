window.onscroll = function () {
    var header = document.getElementById("main-header");

    if (window.pageYOffset > 100) {
        header.classList.add("fixed");
    } else {
        header.classList.remove("fixed");
    }
};

//Scroll
$(document).ready(function () {
    $('.slider').slick({
        vertical: true,
        verticalSwiping: true,
        dots: true,
        arrows: false,
        infinite: false,
    });

    // Adjust slider position on scroll
    $(window).on('scroll', function () {
        var scrollTop = $(this).scrollTop();
        $('.slider').slick('slickGoTo', scrollTop);
    });
});


// 
$('.bg-mains').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
});
$('.bg-main').slick({
    centerMode: true,
    centerPadding: '60px',
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToScroll: 1,
    slidesToShow: 5,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});

//   splash screen 

document.addEventListener('DOMContentLoaded', function () {
    var splashScreen = document.getElementById('splash-screen');
    var cursorClickOpen = document.querySelector('.cursor-click-open');

    // Function to handle click event on cursor-click-open
    cursorClickOpen.addEventListener('click', function (event) {
        event.preventDefault();
        hideSplashScreen();
    });

    // Function to handle scroll event
    window.addEventListener('scroll', function () {
        hideSplashScreen();
    });

    // Function to hide the splash screen
    function hideSplashScreen() {
        splashScreen.style.transform = 'translateY(-100%)';
        setTimeout(function () {
            splashScreen.style.display = 'none';
        }, 500); // Adjust the delay as needed
    }
});


$(document).ready(function () {
    $('.content').hover(function () {
        var randomColor = getRandomColor();
        $(this).find('.content-overlay').css('background', randomColor);
    }, function () {
        // Reset the background color on hover out if needed
        // $(this).find('.content-overlay').css('background', '#1B998B');
    });

    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
});
const icons = document.querySelectorAll('.hamburger');
const menuItem = document.querySelectorAll('.mob-menu-wrap');
icons.forEach(icon => {
    icon.addEventListener('click', (event) => {
        icon.classList.toggle("open");
        menuItem.forEach(item => {
            item.classList.toggle("menu-open");
        });
    });
});
