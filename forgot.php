<?php
include('assests/header.php');
?>

<main data-aos="fade-up" data-aos-offset="200">
    <div class="container-fluid">
        <a href="login.php">
            <img src="assests/img/left-chevron.png" alt="" height="25px" class="mt-4">
        </a>

        <div class="container mt-3 text-center">
            <img src="assests/img/RoyalRiderLogo.png" style="background: linear-gradient(180deg, #2A1F0D, #332f29);height:110px;width:110px;border-radius:50%;padding:10px" />
        </div>
        <div class="text-center mt-3">
            <h3><b>Forget Password?</b></h3>
        </div>
        <form action="" class="mt-3" method="post">

            <div class="mb-3">
                <div class="text-center form-label" style="font-size:16px">
                    <p>Enter Your Mail, We will send your Verification</p>
                </div>

                <div class="text-center form-label" style="font-size:16px">
                    <p>Code Via Email</p>
                </div>

                <div class="form-control" style="overflow:hidden">
                    <div class="row">
                        <span class="col-1">
                            <i class="fa-solid fa-envelope p-3" style="font-size:22px"></i>
                        </span>
                        <span class="col-11">
                            <input type="password" class="p-3" id="" aria-describedby="helpId" placeholder="Enter your Email" style="border:none;margin-left:25px;width:90%" />
                        </span>
                    </div>
                </div>
            </div>

            <div class="mt-5 container">
                <a href="verify_code.php" class="btn container" style="background: linear-gradient(180deg, #E2C448, #BF8944);color: aliceblue;padding: 10px;border-radius: 30px;">Next</a>
            </div>


        </form>

    </div>
</main>


<?php
include('assests/footer.php');
?>