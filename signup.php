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
        <form action="" class="mt-3" method="post">
            <div class="mb-3">
                <label for="" class="form-label" style="font-size:16px">Enter Your Name</label>
                <div class="form-control" style="overflow:hidden">
                    <div class="row">
                        <span class="col-1">
                            <i class="fa-solid fa-user p-3" style="font-size:22px"></i>
                        </span>
                        <span class="col-11">
                            <input type="text" class="p-3" id="" aria-describedby="helpId" placeholder="Enter Your Name" style="border:none;margin-left:25px;width:90%" />
                        </span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label" style="font-size:16px">Email Or Phone Number</label>
                <div class="form-control" style="overflow:hidden">
                    <div class="row">
                        <span class="col-1">
                            <i class="fa-solid fa-envelope p-3" style="font-size:22px"></i>
                        </span>
                        <span class="col-11">
                            <input type="text" class="p-3" id="" aria-describedby="helpId" placeholder="Email Or phone number" style="border:none;margin-left:25px;width:90%" />
                        </span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label" style="font-size:16px">Password</label>
                <div class="form-control" style="overflow:hidden">
                    <div class="row">
                        <span class="col-1">
                            <i class="fa-solid fa-lock p-3" style="font-size:22px"></i>
                        </span>
                        <span class="col-11">
                            <input type="password" class="p-3" id="" aria-describedby="helpId" placeholder="Create password" style="border:none;margin-left:25px;width:90%" />
                        </span>
                    </div>
                </div>
            </div>

            <div class="mt-5 container">
                <a href="notification.php" class="btn container" style="background: linear-gradient(180deg, #E2C448, #BF8944);color: aliceblue;padding: 10px;border-radius: 30px;">Sign Up</a>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col-5">
                <hr>
            </div>
            <div class="col-2 text-center" style="font-weight:700;">OR</div>
            <div class="col-5">
                <hr>
            </div>
        </div>

        <div class="social-links mt-4">
            <ul>
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-google"></i></a></li>
                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""><i class="fa-brands fa-apple"></i></a></li>
            </ul>
        </div>
        <div class="text-center mt-4 mb-5">
            <p style="font-size:17px">Already Have An Account?<a href="/login" style="color:#E2c448">Login</a></p>
        </div>
    </div>
</main>


<?php
include('assests/footer.php');
?>