<?php
include('assests/header.php');
?>

<main data-aos="fade-up" data-aos-offset="200">
    <div class="container-fluid">
        <a href="signup.php">
            <img src="assests/img/left-chevron.png" alt="" height="25px" class="mt-4">
        </a>

        <div class="container mt-3 text-center">
            <img src="assests/img/RoyalRiderLogo.png" style="background: linear-gradient(180deg, #2A1F0D, #332f29);height:110px;width:110px;border-radius:50%;padding:10px" />
        </div>
        <div class="text-center mt-3">
            <h2><b>Successfully Registered</b></h2>
        </div>
        <form action="" class="mt-3" method="post">

            <div class="mb-3">
                <div class="text-center form-label" style="font-size:16px">
                    <p>Congratulations! You Have Registered </p>
                </div>

                <div class="text-center form-label" style="font-size:16px">
                    <p>in This Application</p>
                </div>


            </div>
            <div class="mt-5 container">
                <a href="login.php" class="btn container" style="background: linear-gradient(180deg, #E2C448, #BF8944);color: aliceblue;padding: 10px;border-radius: 30px;">Next</a>
            </div>


        </form>

    </div>
</main>


<?php
include('assests/footer.php');
?>