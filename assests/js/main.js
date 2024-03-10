// Wait for the page to load
window.addEventListener("load", function () {
    // Simulate a delay of 2 seconds (2000 milliseconds) before hiding the preloader
    setTimeout(function () {
        hidePreloader();
    }, 2000); // Adjust the time delay as needed

    function hidePreloader() {
        var preloader = document.querySelector(".preloader");
        var content = document.querySelector(".content");

        // Hide the preloader
        preloader.style.display = "none";

        // Show the content
        content.style.display = "block";
    }
});

// slider
let slideIndex = 0;

function moveSlide(n) {
    const slides = document.querySelectorAll(".slides img");
    slideIndex += n;

    if (slideIndex >= slides.length) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    const slideWidth = slides[0].clientWidth;
    const offset = -slideIndex * slideWidth;

    document.querySelector(
        ".slides"
    ).style.transform = `translateX(${offset}px)`;
}

function showSlides() {
    const slides = document.querySelectorAll(".slides img");
    const dotsContainer = document.querySelector(".dots");

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    const dots = document.querySelectorAll(".dot");
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove("active");
    }

    if (slideIndex >= slides.length) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    slides[slideIndex].style.display = "block";
    dots[slideIndex].classList.add("active");
}

function moveSlide(n) {
    slideIndex += n;
    showSlides();
}

document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".slides img");

    // Create dots based on the number of slides
    const dotsContainer = document.querySelector(".dots");
    for (let i = 0; i < slides.length; i++) {
        const dot = document.createElement("span");
        dot.classList.add("dot");
        dot.addEventListener("click", function () {
            slideIndex = i;
            showSlides();
        });
        dotsContainer.appendChild(dot);
    }

    showSlides();
});

// owl carousel slider

$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true, // Enable autoplay
        autoplayTimeout: 3000, // Set autoplay interval in milliseconds (e.g., 3000ms = 3 seconds)
        autoplayHoverPause: true, // Pause autoplay on mouse hover
        responsive: {
            0: {
                items: 1.5,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 3,
            },
        },
    });
});

// sidebar js

function showSidebar() {
    document.querySelector(".sidebar").classList.add("sidebar-show");
}
function closeSidebar() {
    document.querySelector(".sidebar").classList.remove("sidebar-show");
}

const buttons = document.querySelectorAll('.event-detail button');

buttons.forEach(button => {
    button.addEventListener('click', function () {
        buttons.forEach(btn => {
            if (btn !== this) {
                btn.classList.remove('active', 'active-left', 'active-right');
            }
        });
        this.classList.toggle('active');

        if (this.classList.contains('active')) {
            if (this.classList.contains('active-left')) {
                this.classList.remove('active-left');
                this.classList.add('active-right');
            } else {
                this.classList.remove('active-right');
                this.classList.add('active-left');
            }
        } else {
            this.classList.remove('active-left', 'active-right');
        }
    });
});

const detailsButton = document.getElementById('details-btn');
const descriptionButton = document.getElementById('description-btn');
const completedButton = document.getElementById('completed-btn');

const completed = document.getElementById('completed');
const details = document.getElementById('details');
const description = document.getElementById('description');

detailsButton.addEventListener('click', function () {
    details.classList.add('visible');
    description.classList.remove('visible');
    completed.classList.remove('visible');
});

descriptionButton.addEventListener('click', function () {
    description.classList.add('visible');
    details.classList.remove('visible');
    completed.classList.remove('visible')
});
completedButton.addEventListener('click', function () {
    completed.classList.add('visible')
    description.classList.remove('visible');
    details.classList.remove('visible');

});
$(document).ready(function () {
    // Get the button element by its ID
    var myButton = $("#details-btn");


    myButton.addClass("active");
});