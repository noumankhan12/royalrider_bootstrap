<?php
include('assests/header.php');
include('assests/navigation-bar.php');
?>

<main data-aos="fade-up" data-aos-offset="200">
    <div class="top-bar">

        <div class="right-side col-2">
            <a href="events.php"><i class="fa-solid fa-search" style="float: right;color:black; font-size: 28px; padding: 10px;border: 1px solid #3b3b3b33;border-radius: 10px;margin: 6px;"></i></a>

        </div>
        <div class="left-side col-6">
            <img src="https://images.unsplash.com/photo-1611919183154-b9c66b46af01?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTJ8fGJpa2VzfGVufDB8fDB8fHww" />

        </div>

    </div>


    <div class="search-bar container-fluid mb-3">
        <div class="row">
            <span class="col-9">
                <input type="text" class="form-control" placeholder="Search">
            </span>
            <span class="col-3" onclick="showSidebar()">
                <div class="menu-btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </span>
        </div>
    </div>





    <section class="container-fluid mt-2 mb-5">
        <div class="mb-3">
            <h5>Explore Near By</h5>
        </div>
        <div>
            <div class="row mb-2 mt-2 button" style="background: linear-gradient(180deg, #E2C448, #BF8944);color: aliceblue;padding: 10px;border-radius: 30px;">
                <div class="col-2">
                    <p class="text-center mt-3">Event Name</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">Event Date</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">Ticket</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">Picture</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">Members</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">Actions</p>
                </div>
            </div>
        </div>
        <div class="card">

            <div class="row mb-2 mt-2">
                <div class="col-2">
                    <p class="text-center mt-3">Name</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">12/6/16</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">$19.9</p>
                </div>
                <div class="col-2">
                    <img class="card-img-top fit-img mt-3" src="https://images.unsplash.com/photo-1625653542108-852caf5612bf?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGJpa2VzfGVufDB8fDB8fHww" alt="Title">
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">Jhon</p>
                </div>
                <div class="col-2">
                    <i class="fa-solid fa-pen mt-3" height="25px"> </i>
                    <i class="fa-solid fa-trash mt-3" height="25px"> </i>
                    <i class="fa-solid fa-trash mt-3" height="25px"> </i>
                </div>

            </div>
        </div>
        <div class="card">

            <div class="row mb-2 mt-2">
                <div class="col-2">
                    <p class="text-center mt-3">Name</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">12/6/16</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">$19.9</p>
                </div>
                <div class="col-2">
                    <img class="card-img-top fit-img mt-3" src="https://images.unsplash.com/photo-1625653542108-852caf5612bf?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGJpa2VzfGVufDB8fDB8fHww" alt="Title">
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">Jhon</p>
                </div>
                <div class="col-2">
                    <i class="fa-solid fa-pen mt-3" height="25px"> </i>
                    <i class="fa-solid fa-trash mt-3" height="25px"> </i>
                    <i class="fa-solid fa-trash mt-3" height="25px"> </i>
                </div>

            </div>
        </div>
        <div class="card">

            <div class="row mb-2 mt-2">
                <div class="col-2">
                    <p class="text-center mt-3">Name</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">12/6/16</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">$19.9</p>
                </div>
                <div class="col-2">
                    <img class="card-img-top fit-img mt-3" src="https://images.unsplash.com/photo-1625653542108-852caf5612bf?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGJpa2VzfGVufDB8fDB8fHww" alt="Title">
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">Jhon</p>
                </div>
                <div class="col-2">
                    <i class="fa-solid fa-pen mt-3" height="25px"> </i>
                    <i class="fa-solid fa-trash mt-3" height="25px"> </i>
                    <i class="fa-solid fa-trash mt-3" height="25px"> </i>
                </div>

            </div>
        </div>
        <div class="card">

            <div class="row mb-2 mt-2">
                <div class="col-2">
                    <p class="text-center mt-3">Name</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">12/6/16</p>
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">$19.9</p>
                </div>
                <div class="col-2">
                    <img class="card-img-top fit-img mt-3" src="https://images.unsplash.com/photo-1625653542108-852caf5612bf?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGJpa2VzfGVufDB8fDB8fHww" alt="Title">
                </div>
                <div class="col-2">
                    <p class="text-center mt-3">Jhon</p>
                </div>
                <div class="col-2">
                    <i class="fa-solid fa-pen mt-3" height="25px"> </i>
                    <i class="fa-solid fa-trash mt-3" height="25px"> </i>
                    <i class="fa-solid fa-trash mt-3" height="25px"> </i>
                </div>

            </div>
        </div>

    </section>
</main>
<?php

include('assests/footer.php');
?>