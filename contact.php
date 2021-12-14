<?php
session_start();
ob_start(); 
include 'init.php';
?>
    <!-- For Loading Screen -->
    <div class="loading d-flex justify-content-center align-items-center">
        <div id="spinner" class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
          </div>
    </div>
    <!-- End Loading -->
    <!-- Start Header -->
    <header >
        <!-- Start Main-header -->
        <section id="Main_header" class="py-2">
            <div class="container">
                <div class="row  align-items-center ">
    
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo pt-2">
                            <a href="#">OneTech</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right mt-0 mt-md-4">
                        <form id="Main_head_form" class="position-relative d-none d-md-block">
                            <input class="form-control" type="text" placeholder="Search For Products..." required>
                            <div class="dropdown_list">
                                <span class="selected-category">All Categories </span>
                                <i class="fas fa-angle-down"></i>
                                <ul class=" custom_header list-unstyled shadow">
                                    <li>All Categories</li>
                                    <li>Computers</li>
                                    <li>Laptops</li>
                                    <li>Cameras</li>
                                    <li>Hardware</li>
                                    <li>Smartphones</li>
                                </ul>
                            </div>
                            <button class="btnSubmit" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="d-flex justify-content-center align-items-center me-3 me-sm-5">
                                <div class="image">
                                    <img class="w-100" src="img/wishlist_cart/download.webp" alt="">
                                </div>
                                <div class="wishlist-info ms-3 text-end ">
                                    <a href="#" class="fs-5 d-block"><strong>wishlist</strong></a>
                                    <small>115</small>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="image position-relative">
                                    <img class="w-100" src="img/wishlist_cart/download (4).webp" alt="">
                                    <div class="cart-count">10</div>
                                </div>
                                <div class="cart-info ms-3 text-end ">
                                    <a href="#" class="fs-5 d-block"><strong>Cart</strong></a>
                                    <small>$85</small>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
        <!-- End Main-header -->
    
        <!-- Start Main-Nav -->
        <nav id="main_nav" class="navbar navbar-expand-lg navbar-light ">
            <div class="container ">
                <div id="category-bar" class="d-flex justify-content-center align-items-center position-relative">
                    <span class="me-2"><i class="fas fa-bars bar-ico fs-5"></i></span>
                    <span class="fs-5 fw-bold text-uppercase" href="#">Categories</span>
                    <ul class="custom_list list-unstyled shadow ">
                        <li><a href="#">Computers & Laptops</a></li>
                        <li><a href="#">Cameras & Photos</a></li>
                        <li><a href="#">Hardware</a></li>
                        <li><a href="#">Smartphones & Tablets</a></li>
                        <li><a href="#">TV & Audio</a></li>
                        <li><a href="#">Gadgets</a></li>
                        <li><a href="#">Car Electronics</a></li>
                        <li><a href="#">Video Games & Consoles</a></li>
                    </ul>
                </div>
                <button class="navbar-toggler border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="none" aria-label="Toggle navigation">
                    <span class="me-2 text-white fw-bold text-uppercase d-lg-none">Menu</span>
                    <span><i class="fas fa-bars bar-ico text-white"></i></span>
                </button>
                <div class="collapse navbar-collapse w-100  justify-content-end" >
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id="homeLink" class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a id="SuperLink" class="nav-link" href="#deals_featured">Super Deals</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a id="FeaturedLink" class="nav-link" href="#New_Arrival">New Arrival</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a id="PagesLink" class="nav-link" href="#">Pages <i class="fas fa-angle-down"></i></a>
                            <ul class="custom_list list-unstyled shadow ">
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="product.php">Product</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a id="blogLink" class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a id="contactLink" class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a id="LogoutLink" class="nav-link d-none" aria-current="page" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>    
        </nav>
        <div class="page-nav">
            <div class="container">
                <div class="collapse navbar-collapse w-100 mt-2  justify-content-end d-lg-none" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <form class="collapse-form position-relative ">
                            <input class="form-control" type="text" placeholder="Search For Products..." required>
                        </form>
                        <li class="nav-item">
                            <a id="homeLink" class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a id="SuperLink" class="nav-link" href="#">Super Deals <i class="fas fa-angle-down"></i></a>
                            <ul class="custom_list list-unstyled shadow ">
                                <li><a href="#">All Categories</a></li>
                                <li><a href="#">Computers</a></li>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Cameras</a></li>
                                <li><a href="#">Hardware</a></li>
                                <li><a href="#">Smartphones</a></li>
                            </ul>
                        </li>
                        <li class="nav-item position-relative">
                            <a id="SuperLink" class="nav-link" href="#deals_featured">Super Deals</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a id="FeaturedLink" class="nav-link" href="#New_Arrival">New Arrival</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a id="PagesLink" class="nav-link" href="#">Pages <i class="fas fa-angle-down"></i></a>
                            <ul class="custom_list list-unstyled shadow ">
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="product.php">Product</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a id="blogLink" class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a id="contactLink" class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a id="LogoutLink" class="nav-link d-none " aria-current="page" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Main-Nav -->
    </header>
    <!-- End header -->

    <!-- Start contact_info -->
    <section id = "contact_info" class="py-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-10 ">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="item d-flex justify-content-lg-center justify-content-start align-items-center p-3 ">
                                <div class="image">
                                    <img  src="img/characteristics/call.webp" alt="">
                                </div>
                                <div class="text ps-3">
                                    <strong class="d-block">Phone</strong>
                                    <small>01029096569</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="item d-flex justify-content-lg-center justify-content-start align-items-center  p-3">
                                <div class="image">
                                    <img  src="img/characteristics/message.webp" alt="">
                                </div>
                                <div class="text ps-3">
                                    <strong class="d-block">Email</strong>
                                    <small>omarmokhtar363@gmail.com</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="item d-flex justify-content-lg-center justify-content-start align-items-center  p-3 ">
                                <div class="image">
                                    <img  src="img/characteristics/location.webp" alt="">
                                </div>
                                <div class="text ps-3">
                                    <strong class="d-block">Address</strong>
                                    <small>10 Suffolk at Soho, London, UK</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End contact_info -->

    <!-- Start Form -->
    <section id="Form" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-12">
                    <div id="ContactUs">
                        <h2 class="mb-5">Get in Touch</h2>
                        <form id="form">
                            <div class="row g-4 mb-3">
                                <div class="col-md-4">
                                    <input id="userName" type="text" name="userName" class="form-control" placeholder="Name">
                                    <p class=" mt-2 d-none text-danger" id="userNameReq">name is required.</p>
                                </div>
                                <div class="col-md-4">
                                    <input id="userEmail" type="email" name="userEmail" class="form-control" placeholder="Email">
                                    <p class=" mt-2 d-none text-danger" id="userEmailReq">Email is required.</p>
                                </div>
                                <div class="col-md-4">
                                    <input id="userPhone" type="number" name="userPhone" class="form-control" placeholder="Phone">
                                    <p class=" mt-2 d-none text-danger" id="userPhoneReq">Phone is required.</p>
                                </div>
                            </div>
                            <textarea id="message" class="form-control mb-3" name="userMessage" placeholder="Message"   cols="5" rows="5"></textarea>
                            <p class=" my-2 d-none text-danger" id="messageReq">Message is required.</p>

                            <button id="btnSubmit" type="submit" class="btn btn-info px-4 py-2 text-white fw-bold" disabled>Send Message</button>
                            <span id="success"  class="ms-3 mt-2 d-none text-success">Data Sent Successfuly</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Form -->

    <!-- Start Subscribe -->
    <section id="subscribe" class="py-5">
        <!-- Start Map -->
        <section id="map" class="pb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </section>
        <!-- End Map -->
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="item d-flex justify-content-center">
                            <div class="img-sub me-4">
                                <img src="img/telegram.webp" alt="">
                            </div>
                            <div class="text-sub">
                                <h3 class="h5 fw-bold">Sign up for Newsletter</h3>
                                <p class="mb-0">...and receive %20 coupon for first shopping.</p>
                            </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form id="subscrib_form">
                        <input id="userSubEmail" class="form-control" type="email" name="userSubEmail"  placeholder="Enter Your Email Adress">
                        <p class=" mt-2 d-none text-danger" id="userSubEmailReq">Email is invalid.</p>
                        <button id="btnSubEmail" class="btn text-white btn-info" type="submit" disabled>Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe -->

    <!-- Start Footer -->
    <footer class="pt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-5">
                    <div class="item">
                        <div class="logo mb-4">
                            <a href="#">OneTech</a>
                        </div>
                        <div class="footer_title mb-2">Got Question? Call Us 24/7</div>
                        <div class="footer_phone mb-2">+38 068 005 3570</div>
                        <div class="footer_email mb-2">omarmokhtar363@gmail.com</div>
                        <div class="footer_contact_text mb-3">17 Princess Road, London Grester London NW18JR, UK</div>
                        <div class="footer_social d-flex">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="item">
                        <h3 class="h6 mb-3">Find it Fast</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Computers & Laptops</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Smartphones & Tablets</a></li>
                            <li><a href="#">TV & Audio</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Car Electronics</a></li>
                            <li><a href="#">Video Games & Consoles</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <h3 class="h6 mb-3">Customer Care</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Customer Services</a></li>
                            <li><a href="#">Returns / Exchange</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Product Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Copyright  -->
    <div class="copyright py-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-8">
                    <p class="mb-0">Copyright &copy;2021 All rights reserved | This template is made by <a class="triple" href="#">Triple-O</a> </p>
                </div>
                <div class="col-md-4">
                    <div class="pay ">
                        <ul class="list-unstyled d-flex justify-content-md-end mb-0 ">
                            <li><a href="#" class="me-3"><img src="img/footer/footer1.webp" alt=""></a></li>
                            <li><a href="#" class="me-3"><img src="img/footer/footer2.webp" alt=""></a></li>
                            <li><a href="#" class="me-3"><img src="img/footer/footer3.webp" alt=""></a></li>
                            <li><a href="#" ><img src="img/footer/footer4.webp" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright  -->


    <?php 
require './includes/template/footer.php';
?>