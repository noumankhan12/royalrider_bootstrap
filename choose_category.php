<?php
include('assests/header.php');
?>

<main data-aos="fade-up" data-aos-offset="200">
    <div class="container">
        <div class="text-center mt-5">
            <img src="assests/img/choose-screen.jpg">
        </div>
        <div class="container text-center">
            <h3 style="font-weight: 700;">Choose Your Category</h3>
        </div>
        <div class="container mt-4">
            <div class="container offset-2 mt-4">
                <div class="row">
                    <div class="form-check">
                        <input class="form-check-input mt-2" type="checkbox" name="flexRadioDefault" id="member" checked>
                        <label class="form-check-label" for="member" style="font-size: 20px; font-weight: 600;">
                            Choose A Member
                        </label>
                    </div>
                </div>
            </div>
            <div class="container offset-2 mt-3">
                <div class="row">
                    <div class="form-check">
                        <input class="form-check-input mt-2" type="checkbox" name="flexRadioDefault" id="fan">
                        <label class="form-check-label" for="fan" style="font-size: 20px; font-weight: 600;">
                            Choose A Fan
                        </label>
                    </div>
                </div>
            </div>
            <div class="container offset-2 mt-3">
                <div class="row">
                    <div class="form-check">
                        <input class="form-check-input mt-2" type="checkbox" name="flexRadioDefault" id="sponsor">
                        <label class="form-check-label" for="sponsor" style="font-size: 20px; font-weight: 600;">
                            Choose A Sponsor
                        </label>
                    </div>
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
            <a href="login.php" class="btn container" style="background: linear-gradient(180deg, #E2C448, #BF8944);color: aliceblue;padding: 10px;border-radius: 30px;">Next</a>
        </div>
    </div>
</main>

<?php
include('assests/footer.php');
?>