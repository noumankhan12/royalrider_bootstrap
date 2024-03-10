<?php
include('assests/header.php');
?>
<center>
    <div id="splashModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="splashModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content" style="background-color: orange;">
                <!-- Center the image and text in the splash screen -->
                <div class="modal-body text-center " style="border-radius: 20px; overflow: hidden; margin-top: 100px;">
                    <!-- Use a small logo image within a div -->
                    <div class="mx-auto">
                        <img src="assests/img/im-1.jpg" alt="Logo" class="img-fluid rounded-circle" style="width: 40%; height: 40%;">
                    </div>
                    <!-- Additional content below the image with space -->
                    <p class="mt-3 text-white">Bringing Your Dreams to Life, one event at a click</p>
                </div>
            </div>
        </div>
    </div>
</center>






<main data-aos="fade-up" data-aos-offset="200">
    <div class="slider" style="height:45vh">
        <div class="slides">
            <div class="img">
                <img src="assests/img/im-1.jpg" alt="Image 1" />
            </div>
            <div class="img">
                <img src="assests/img/im-2.jpg" alt="Image 2" />
            </div>
            <div class="img">
                <img src="assests/img/im-3.jpg" alt="Image 3" />
            </div>
            <!-- Add more images as needed -->
        </div>
    </div>
    <div class="dots"></div>

    <div class="container-fluid mt-4" style="height:45vh">
        <div class="card">
            <div class="card-title">
                <h5 style="font-weight: 700">
                    Explore Upcoming and Nearby Events
                </h5>
            </div>
            <div class="card-text">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Delectus alias asperiores incidunt!
                </p>
            </div>
            <button class="btn p-3" onclick="handleSliderClick()" style="
                background: linear-gradient(180deg, #e2c448, #bf8944);
                color: aliceblue;
              ">
                Continue
            </button>
        </div>
        <div class="skip">
            <a href="home.php" style="text-decoration:none;color:#555">Skip</a>
        </div>
    </div>
</main>

<script>
    let interactionCount = 0;
    const images = ['im-1.jpg', 'im-2.jpg', 'im-3.jpg']; // Add more image names as needed

    function handleSliderClick() {
        interactionCount++;

        console.log('Interaction Count:', interactionCount);
        if (interactionCount === 3) {
            // Redirect to the choose category page
            window.location.href = 'choose_category.php';
        } else {
            // Change the image displayed in the slider
            const currentSlideImage = document.querySelector('.slider .slides .img img');
            const newIndex = interactionCount % images.length; // Calculate the index of the next image
            currentSlideImage.src = 'assests/img/' + images[newIndex];
        }


    }
</script>
<script>
    // Show splash modal on page load
    $(document).ready(function() {
        $('#splashModal').modal('show');

        // Hide splash modal after 3 seconds (3000 milliseconds)
        setTimeout(function() {
            $('#splashModal').modal('hide');
        }, 3000);
    });
</script>

<?php
include('assests/footer.php');
?>