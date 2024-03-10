<div class="row mt-4">
    <div class="col-3">
        <a href="home.php">
            <img src="assests/img/left-chevron.png" height="25px">
        </a>
    </div>
    <div class="col-6 text-center">
        <p style="font-size:19px;font-weight:600">Fan</p>
    </div>
    <div class="col-3">
        <i class="fa-solid fa-search" style="font-size:19px;margin:auto 5px"></i>
        <i class="fa-solid fa-plus" style="background:#ddd;padding:6px;border-radius:50%;color:#fff;font-size:17px;background: linear-gradient(180deg, #E2C448, #BF8944);"></i>
    </div>
</div>

<?php include('assests/header.php'); ?>

<main data-aos="fade-up" data-aos-offset="200">
    <div class="container">

        <div class="container text-center mt-5">
            <h3 style="font-weight: 700;">Choose Your Plan</h3>
        </div>
        <div class="container mt-4">

            <div class="form-check mb-2">
                <input class="form-check-input mt-2" type="checkbox" name="flexRadioDefault" id="member" checked>
                <label class="form-check-label" for="member" style="font-size: 20px; font-weight: 600;">
                    Gold
                </label>

                <b class="ml-auto text-right ps-4">$9.99/Month</b>
                <p class="ps-5">Get 7 Days Free Trial</p>


            </div>

            <div class="form-check mb-2">
                <input class="form-check-input mt-2" type="checkbox" name="flexRadioDefault" id="member" checked>
                <label class="form-check-label" for="member" style="font-size: 20px; font-weight: 600;">
                    Diamond
                </label>

                <b class="ml-auto text-right ps-4">$9.99/Month</b>
                <p class="ps-5">Get 7 Days Free Trial</p>


            </div>
            <div class="form-check mb-2">
                <input class="form-check-input mt-2" type="checkbox" name="flexRadioDefault" id="member" checked>
                <label class="form-check-label" for="member" style="font-size: 20px; font-weight: 600;">
                    Platinum
                </label>

                <b class="ml-auto text-right ps-4">$9.99/Month</b>
                <p class="ps-5">Get 7 Days Free Trial</p>


            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    checkboxes.forEach(function(otherCheckbox) {
                        if (otherCheckbox !== checkbox) {
                            otherCheckbox.checked = false;
                        }
                    });
                });
            });
        });
    </script>

    <div class="mt-5 container">
        <a href="login.php" class="btn container" style="background: linear-gradient(180deg, #E2C448, #BF8944); color: aliceblue; padding: 10px; border-radius: 30px;">Buy Now</a>
    </div>
    </div>
</main>




<?php include('assests/footer.php'); ?>