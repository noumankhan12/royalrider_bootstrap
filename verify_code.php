<?php
include('assests/header.php');
?>

<main data-aos="fade-up" data-aos-offset="200">
    <div class="container-fluid">
        <a href="forgot.php">
            <img src="assests/img/left-chevron.png" alt="" height="25px" class="mt-4">
        </a>

        <div class="container mt-3 text-center">
            <img src="assests/img/RoyalRiderLogo.png" style="background: linear-gradient(180deg, #2A1F0D, #332f29);height:110px;width:110px;border-radius:50%;padding:10px" />
        </div>
        <div class="text-center mt-3">
            <h3><b>Verify Code</b></h3>
        </div>
        <form action="verify_code.php" method="POST">
            <div class="mb-3 ">
                <div class="text-center form-label" style="font-size: 16px;">
                    <p>Enter the verification code sent to your Email</p>
                </div>
                <div class="container mb-4">
                    <div class="text-center ">
                        <!-- Input box for the first digit -->
                        <span class="p-3">
                            <input type="text" class="p-3" maxlength="1" name="digit1" id="digit1" placeholder="7" style="border: 1px solid #ccc; border-radius: 5px; width: 50px;">
                        </span>
                        <!-- Input box for the second digit -->
                        <span class="p-3">
                            <input type="text" class="p-3" maxlength="1" name="digit2" id="digit2" placeholder="8" style="border: 1px solid #ccc; border-radius: 5px; width: 50px;">
                        </span>
                        <!-- Input box for the third digit -->
                        <span class="p-3">
                            <input type="text" class="p-3" maxlength="1" name="digit3" id="digit3" placeholder="9" style="border: 1px solid #ccc; border-radius: 5px; width: 50px;">
                        </span>
                        <!-- Input box for the fourth digit -->
                        <span class="p-3 ">
                            <input type="text" class="p-3" maxlength="1" name="digit4" id="digit4" placeholder="6" style="border: 1px solid #ccc; border-radius: 5px; width: 50px;">
                        </span>
                    </div>
                </div>

            </div>


            <div class="mt-5 container">
                <a href="create_password.php" class="btn container" style="background: linear-gradient(180deg, #E2C448, #BF8944);color: aliceblue;padding: 10px;border-radius: 30px;">Continue</a>
            </div>


            <div class="text-center mt-4 mb-5">
                <p style="font-size:17px">Didn't Recieve Code?<a href="signup.php" style="color:#E2c448;text-decoration:none">Resend</a></p>
            </div>

    </div>
</main>


<?php
include('assests/footer.php');
?>