<?php
include('assests/header.php');
include('assests/navigation-bar.php');
?>

<main data-aos="fade-up" data-aos-offset="200">
    <div class="top-bar">
        <div class="left-side col-10">
            <img src="https://images.unsplash.com/photo-1611919183154-b9c66b46af01?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTJ8fGJpa2VzfGVufDB8fDB8fHww" />
            <div class="m-2 container">
                <span class="p-2">Hi, Jhon</span><br>
                <span class="p-2"><i class="fa-solid fa-location-dot pb-2" style="color: #BF8944;"></i> Islamabad</span>
            </div>
        </div>
        <div class="right-side col-2">
            <a href="events.php"><i class="fa-solid fa-bell" style="float: right;color:black; font-size: 28px; padding: 10px;border: 1px solid #3b3b3b33;border-radius: 10px;margin: 6px;"></i></a>
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

    <section class="container-fluid">
        <div class="slider">
            <div class="slides">
                <div class="img fit-img" style="height:22vh;border-radius: 10px">
                    <img src="https://images.unsplash.com/photo-1515777315835-281b94c9589f?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fG1vdG9yYmlrZXxlbnwwfHwwfHx8MA%3D%3D" alt="Image 1" />
                </div>
                <div class="img fit-img" style="height:22vh;border-radius: 10px">
                    <img src="https://images.unsplash.com/photo-1621967390503-e3cd1f6b27fa?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzV8fG1vdG9yYmlrZXxlbnwwfHwwfHx8MA%3D%3D" alt="Image 1" />
                </div>
                <div class="img fit-img" style="height:22vh;border-radius: 10px">
                    <img src="https://images.unsplash.com/photo-1568772585407-9361f9bf3a87?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzR8fG1vdG9yYmlrZXxlbnwwfHwwfHx8MA%3D%3D" alt="Image 1" />
                </div>
                <!-- Add more images as needed -->
            </div>
            <div class="dots mb-1"></div>
        </div>
    </section>

    <section class="container-fluid mt-4">
        <a href=""></a>
        <div class="mb-3">
            <h5>Popular Events</h5>
        </div>
        <div class="owl-carousel">
            <div class="item">
                <a href="event_description.php" class="text-decoration-none">
                    <div class="card">
                        <img class="card-img-top fit-img" src="https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTR8fGJpa2VzfGVufDB8fDB8fHww" alt="Title">
                        <i class="fa-solid fa-heart" style="color: #BF8944;position: absolute;top:10px;right: 15px;font-size: 19px;"></i>
                        <div class="card-body">
                            <h6 class="card-title">Moterbike Racing</h6>
                            <span class="card-text row mt-3" style="font-size: 12px; font-weight: 500;">
                                <span class="col-6">
                                    <i class="fa-solid fa-calendar" style="color: #BF8944;"></i>
                                    <span style="font-size:11px"> Nov 10,2023</span>
                                </span>
                                <span class="col-6" style="float:right">
                                    <i class="fa-solid fa-location-dot" style="color: #BF8944;"></i>
                                    <span style="font-size:11px"> ABC,town </span>
                                </span>
                                <span class="row mt-2">
                                    <span class="col-8">Member, Joined</span>
                                    <span class="col-4" style="font-size: 14px;font-weight: 700; text-align: right;">$38</span>
                                </span>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <div class="card">
                    <img class="card-img-top fit-img" src="https://images.unsplash.com/photo-1624087977573-7c316f150750?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjN8fGJpa2VzfGVufDB8fDB8fHww" alt="Title">
                    <i class="fa-solid fa-heart" style="color: #BF8944;position: absolute;top:10px;right: 15px;font-size: 19px;"></i>
                    <div class="card-body">
                        <h6 class="card-title">Moterbike Racing</h6>
                        <span class="card-text row mt-3" style="font-size: 12px; font-weight: 500;">
                            <span class="col-6">
                                <i class="fa-solid fa-calendar" style="color: #BF8944;"></i>
                                <span style="font-size:11px"> Nov 10,2023</span>
                            </span>
                            <span class="col-6" style="float:right">
                                <i class="fa-solid fa-location-dot" style="color: #BF8944;"></i>
                                <span style="font-size:11px"> ABC,town </span>
                            </span>
                            <span class="row mt-2">
                                <span class="col-8">Member, Joined</span>
                                <span class="col-4" style="font-size: 14px;font-weight: 700; text-align: right;">$38</span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img class="card-img-top fit-img" src="https://images.unsplash.com/photo-1608036820858-25cd2d374c22?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjZ8fGJpa2VzfGVufDB8fDB8fHww" alt="Title">
                    <i class="fa-solid fa-heart" style="color: #BF8944;position: absolute;top:10px;right: 15px;font-size: 19px;"></i>
                    <div class="card-body">
                        <h6 class="card-title">Moterbike Racing</h6>
                        <span class="card-text row mt-3" style="font-size: 12px; font-weight: 500;">
                            <span class="col-6">
                                <i class="fa-solid fa-calendar" style="color: #BF8944;"></i>
                                <span style="font-size:11px"> Nov 10,2023</span>
                            </span>
                            <span class="col-6" style="float:right">
                                <i class="fa-solid fa-location-dot" style="color: #BF8944;"></i>
                                <span style="font-size:11px"> ABC,town </span>
                            </span>
                            <span class="row mt-2">
                                <span class="col-8">Member, Joined</span>
                                <span class="col-4" style="font-size: 14px;font-weight: 700; text-align: right;">$38</span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img class="card-img-top fit-img" src="https://images.unsplash.com/photo-1616839261111-d7070563052c?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzB8fGJpa2VzfGVufDB8fDB8fHww" alt="Title">
                    <i class="fa-solid fa-heart" style="color: #BF8944;position: absolute;top:10px;right: 15px;font-size: 19px;"></i>
                    <div class="card-body">
                        <h6 class="card-title">Moterbike Racing</h6>
                        <span class="card-text row mt-3" style="font-size: 12px; font-weight: 500;">
                            <span class="col-6">
                                <i class="fa-solid fa-calendar" style="color: #BF8944;"></i>
                                <span style="font-size:11px"> Nov 10,2023</span>
                            </span>
                            <span class="col-6" style="float:right">
                                <i class="fa-solid fa-location-dot" style="color: #BF8944;"></i>
                                <span style="font-size:11px"> ABC,town </span>
                            </span>
                            <span class="row mt-2">
                                <span class="col-8">Member, Joined</span>
                                <span class="col-4" style="font-size: 14px;font-weight: 700; text-align: right;">$38</span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid mt-2 mb-5">
        <div class="mb-3">
            <h5>Explore Near By</h5>
        </div>
        <div class="card">
            <i class="fa-solid fa-heart" style="color: #BF8944;position: absolute;top:0;right: 15px;font-size: 19px;"></i>
            <div class="row mb-5">
                <div class="col-5">
                    <img class="card-img-top fit-img" src="https://images.unsplash.com/photo-1625653542108-852caf5612bf?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGJpa2VzfGVufDB8fDB8fHww" alt="Title">
                </div>
                <div class="col-7">
                    <h6 class="card-title">Moterbike Racing</h6>
                    <span class="card-text row mt-2" style="font-size: 12px; font-weight: 500;">
                        <span class="col-6"><i class="fa-solid fa-calendar" style="color: #BF8944;">&nbsp;</i>
                            <span style="font-size:11px"> Nov 10,2023</span>
                        </span>
                        <span class="col-6"><i class="fa-solid fa-location-dot" style="color: #BF8944;">&nbsp;</i>
                            <span style="font-size:11px"> ABC,town </span>
                        </span>
                        <span class="row mt-2">
                            <span class="col-8">Member, Joined</span>
                            <span class="col-4" style="font-size: 14px;font-weight: 700; text-align: right;">$38</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
        <div class="card">
            <i class="fa-solid fa-heart" style="color: #BF8944;position: absolute;top:0;right: 15px;font-size: 19px;"></i>
            <div class="row mb-5">
                <div class="col-5">
                    <img class="card-img-top fit-img" src="https://images.unsplash.com/photo-1620193827194-6ce9e26d668d?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTZ8fGJpa2VzfGVufDB8fDB8fHww" alt="Title">
                </div>
                <div class="col-7">
                    <h6 class="card-title">Moterbike Racing</h6>
                    <span class="card-text row mt-2" style="font-size: 12px; font-weight: 500;">
                        <span class="col-6"><i class="fa-solid fa-calendar" style="color: #BF8944;">&nbsp;</i>
                            <span style="font-size:11px"> Nov 10,2023</span>
                        </span>
                        <span class="col-6"><i class="fa-solid fa-location-dot" style="color: #BF8944;">&nbsp;</i>
                            <span style="font-size:11px"> ABC,town </span>
                        </span>
                        <span class="row mt-2">
                            <span class="col-8">Member, Joined</span>
                            <span class="col-4" style="font-size: 14px;font-weight: 700; text-align: right;">$38</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include('assests/footer-menu.php');
include('assests/footer.php');
?>