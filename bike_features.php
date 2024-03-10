<?php include('assests/header.php'); ?>

<main data-aos="fade-up" data-aos-offset="200">
    <div class="container-fluid">
        <div class="row">
            <a href="home.php" class="col-3">
                <img src="assests/img/left-chevron.png" height="25px" class="mt-4" style="float:left">
            </a>
            <span class="text-center col-6 mt-4" style="font-size:20px;font-weight:600">My Bike Features</span>
        </div>

        <div class="container-fluid mt-4" style="margin-bottom:12vh">
            <h7><b>Enter Bike Name</b></h7>
            <div class="form-control p-3 mb-3">

                <i class="fa-solid fa-heart" height="25px" style="float:left;"></i>
                <span style="margin-left:27px;font-size:16px">Enter Bike Name</span>

            </div>
            <h7><b>Enter Bike Model</b></h7>
            <div class="form-control p-3 mb-3">
                <i class="fa-solid fa-calendar" height="25px" style="float:left;"></i>
                <span style="margin-left:27px;font-size:16px">Enter Bike Model</span>

            </div>

            <h7><b>Add Picture Of Bike</b></h7>
            <div class="form-control p-3 mb-3">
                <img class="" src="assests/img/tickets.png" alt="" height="25px" style="float:left;">
                <span style="margin-left:27px;font-size:16px">Upload Image</span>


            </div>
            <div class="mt-2 container">
                <a href="all_events.php" class="btn container" style="background: linear-gradient(180deg, #E2C448, #BF8944);color: aliceblue;padding: 10px;border-radius: 30px;">Save</a>
            </div>
        </div>
    </div>

</main>
<?php
include('assests/footer-menu.php');
include('assests/footer.php');
?>