<?php include('assests/header.php'); ?>

<main data-aos="fade-up" data-aos-offset="200">
    <div class="container">
        <div class="row" style="height:9vh;position:absolute;z-index:20;width:100%">
            <a href="/home-screen" class="col-10" style="line-height:9vh;">
                <img src="assests/img/left-chevron.png" height="25px" class="mt-4" style="float:left;">
            </a>
            <span class="col-2" style="font-size:20px;font-weight:600;line-height:9vh;"><i class="fa-solid fa-heart" style="background:#ddd;padding:7px;border-radius:50%;color:#bf8944"></i></span>
            </span>
        </div>
    </div>
    <div class="fit-img" style="height:35vh;">
        <div class="overlay" style="height:35vh"></div>
        <img src="https://images.unsplash.com/photo-1506424482693-1f123321fa53?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bW90b3JiaWtlfGVufDB8fDB8fHww">
    </div>
    <div class="container mt-3 event-detail" style="margin-bottom:12vh">
        <div class="row text-center m-2">
            <button class="btn-left col-6" id="details-btn">Details</button>
            <button class="btn-right col-6" id="description-btn">Discription</button>
        </div>
        <div class="mt-3">
            <div class="details" id="details">
                <div class="card-body">
                    <span class="card-text row" style="font-size: 15px; font-weight: 500;">
                        <span class="col-12">
                            <i class="fa-solid fa-calendar" style="color: #BF8944;"></i>
                            <span> Nov 10,2023</span><br>
                            <i class="fa-regular fa-clock" style="color: #BF8944;"></i>
                            <span> 8:00 PM - 12:00 AM</span><br>
                            <i class="fa-solid fa-location-dot" style="color: #BF8944;"></i>
                            <span> Islamabad</span>
                        </span>
                    </span>
                    <iframe class="mt-3 mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13504.71432204951!2d74.17957987040711!3d32.19941833426907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f29af32ee919b%3A0x1ff9512f7c1f407c!2sAleena%20Hotel!5e0!3m2!1sen!2s!4v1703091483118!5m2!1sen!2s" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <a href="" class="btn form-control" style="background: linear-gradient(180deg, #E2C448, #BF8944);color:#fff;padding:10px">
                    Pay & Attend
                </a>
            </div>
            <div class="description" id="description">
                <h5>About this event</h5>
                <p style="height:21vh;overflow:hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Temporibus exercitationem non
                    voluptatibus,
                    laboriosam debitis deserunt ab earum provident esse sunt voluptatum ipsum accusamus ad velit
                    adipisci fuga ex minima, necessitatibus, corrupti rem. Ea fugiat expedita sequi natus
                    reprehenderit
                    minus quos?</p>
                <p class="review" style="font-weight:600">Reviews(14)
                    <span style="color:#E2C448"><i class="fa-solid fa-star"></i></span>
                    <span style="color:#E2C448"><i class="fa-solid fa-star"></i></span>
                    <span style="color:#E2C448"><i class="fa-solid fa-star"></i></span>
                    <span style="color:#E2C448"><i class="fa-solid fa-star"></i></span>
                </p>
                <div class="container-fluid" style="height:9vh;">
                    <div class="row" style="border:1px solid #ddd;padding:8px 0;border-radius:5px">
                        <div class="col-3">
                            <img class="left-side fit-img" style="border-radius:50%;height:60px;width:60px" src="https://images.unsplash.com/photo-1611919183154-b9c66b46af01?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTJ8fGJpa2VzfGVufDB8fDB8fHww" />
                        </div>
                        <span class="m-2 col-4" style="margin-top:20px">
                            <span>Organizer</span><br>
                            <span>Thomas</span>
                        </span>
                        <div class="col-4 mt-2">
                            <span>
                                <a href="">
                                    <i class="fa-solid fa-message col-3" style="float: right;color:#E2C448; font-size: 17px;padding:17px"></i>
                                </a>
                                <a href="">
                                    <i class="fa-solid fa-phone col-3" style="float: right;color:#E2C448; font-size: 17px;padding:17px"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('assests/footer-menu.php');
include('assests/footer.php'); ?>