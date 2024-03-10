<?php include('assests/header.php'); ?>

<main data-aos="fade-up" data-aos-offset="200">
    <div class="container-fluid">
        <div class="row">
            <a href="home.php" class="col-3">
                <img src="assests/img/left-chevron.png" height="25px" class="mt-4" style="float:left">
            </a>
            <span class="text-center col-6 mt-4" style="font-size:20px;font-weight:600">Create Event</span>
        </div>

        <div class="container-fluid mt-4" style="margin-bottom:12vh">
            <h5><b>Event Name</b></h5>
            <div class="form-control p-3 mb-3">

                <i class="fa-solid fa-heart" height="25px" style="float:left;"></i>
                <span style="margin-left:27px;font-size:16px">Enter Event Name</span>

            </div>
            <h5><b>Event Time</b></h5>
            <div class="form-control p-3 mb-3">
                <i class="fa-solid fa-calendar" height="25px" style="float:left;"></i>
                <span style="margin-left:27px;font-size:16px">Enter Time</span>

            </div>
            <h5><b>Event Location</b></h5>
            <div class="form-control p-3 mb-3">
                <i class="fa-solid fa-location" height="25px" style="float:left;"></i>
                <span style="margin-left:27px;font-size:16px">Enter Location</span>

            </div>
            <h5><b>Event Picture</b></h5>
            <div class="form-control p-3 mb-3">
                <img class="" src="assests/img/tickets.png" alt="" height="25px" style="float:left;">
                <span style="margin-left:27px;font-size:16px">Upload Image</span>


            </div>
            <div class="mt-2 container">
                <a href="all_events.php" class="btn container" style="background: linear-gradient(180deg, #E2C448, #BF8944);color: aliceblue;padding: 10px;border-radius: 30px;">Create Event</a>
            </div>
        </div>
    </div>

</main>
<?php

include('assests/footer.php');
?>