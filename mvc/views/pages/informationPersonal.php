<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../public/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="../public/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/style.css" type="text/css">
    <link rel="stylesheet" href="../public/css/index.css" type="text/css">

    <!--font mater-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu fixed-top" style="background-color:#fcc77b;">
                        <ul>
                            <li><a href="./index">Trang Ch???</a></li>
                            <li><a href="./trademark">Th????ng Hi???u</a></li>
                            <li><a href="./shop">?????t H??ng</a></li>
                            <li><a href="./login">????ng Nh???p</a>
                                <ul class="dropdown">
                                    <li><a href="./register">????ng K??</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="./shopcart"><img src="../public/img/icon/bag.png" style="height: 25px;"> <span>0</span> Cart: <span>$0.00</span></a>
                            </li>
                            <a href="./informationPersonal" style="padding-left: 20px;"><img src="../public/img/img_logo/logo1.png" style="height: 40px; width: 40px;"><label style="margin-left: 10px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: white;">TT.LT</label></a>
                        </ul>

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="#">
                    <div class="row">
                        <div class="about__text">
                            <div class="section-title">
                                <span>TH??NG TIN C?? NH??N</span>
                                <span>-------------------------------------------------------------------------------------------------</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" style="text-align: center;">
                            <a href="#"><span class="material-icons" style="font-size: 100px; margin-right: 70px;">
                                account_circle
                                </span></a>
                            </br>
                            <a style="text-align: center; margin-right: 50px;">FF.LT<span class="material-icons" style="color: black; margin-left: 10px;">
                                edit
                                </span></a>
                            <div class="vertical-menu" style="margin-top: 30px;">
                                <a href="#" class="active">C???p Nh???t Th??ng Tin</a>
                                <a href="#"> ????n Mua</a>
                                <a href="#">Vocher</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="checkout__input">
                                <p>H??? V?? T??n<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>?????a Ch???<span>*</span></p>
                                <input type="text" placeholder="T??n ph?????ng,&ensp;x??,&ensp;th??nh ph???..." class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="text" placeholder="Email..." class="checkout__input__add">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>S??? ??i???n Tho???i<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Gi???i T??nh<span>*</span></p>
                                        <input style="width: 15px; height: 15px;" type="radio" name="gader" value="Nam"><span class="material-icons">
                                            female
                                            </span>
                                        <input style="width: 15px; height: 15px; margin-left: 15px; margin-top: 15px;" type="radio" name="gader" value="Nam"><span class="material-icons">
                                            male
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Ng??y Sinh<span>*</span></p>
                                        <input type="date" id="day" name="day">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3" style="border-left: 1px dashed darkgray;">
                            <a href="#">
                                <span class="material-icons" style="font-size: 120px; margin-top: 110px; margin-left: 80px; background: gray; border-radius: 100px;">
                                    account_circle
                                    </span>
                            </a>
                            <button class="btn2" style="margin-top: 240px;  margin-left: 105px; background: transparent;">
                            <span class="material-icons btn-label" style="text-align: center;">
                                crop_original
                                </span>
                            </button>
                        </div>
                    </div>
                    <button class="btn3" style="margin-left: 580px; background: transparent; margin-top: 1000px;">
                        <span class="btn-label">L??u</span></button>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="../public/img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>KHUNG GI??? L??M VI???C</h6>
                        <ul>
                            <li>Th??? 2 - Th??? 6:&ensp; 08:00h &ensp; ??? &ensp;21:30h</li>
                            <li>Th??? 7:&ensp; 08:00h &ensp; ??? &ensp;16:00h</li>
                            <li>Ch??? Nh???t:&ensp; 10:00 am &ensp;??? &ensp;16:00 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="../public/img/img_logo/logo1.png" style="height: 150px; width: 150px;" alt=""></a>
                        </div>
                        <p>Ch??ng t??i cung c???p cho b???n v???i ngon th???c ??n nhanh v???i c??ng th???c n???u ??n c???a ri??ng ch??ng t??i, gi??p b???n th?????ng th???c nh???ng m??n ??n ngon nh???t.</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>????ng K??</h6>
                        <p>Nh???p ??u ????i V?? C???p Nh???t S???m Nh???t</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | This template is made with
                            <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib & FF.TL</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="copyright__widget">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Fastfood@support.com</a></li>
                                <li><a href="#">08287584**</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="../public/js/jquery-3.3.1.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery.nice-select.min.js"></script>
    <script src="../public/js/jquery.barfiller.js"></script>
    <script src="../public/js/jquery.magnific-popup.min.js"></script>
    <script src="../public/js/jquery.slicknav.js"></script>
    <script src="../public/js/owl.carousel.min.js"></script>
    <script src="../public/js/jquery.nicescroll.min.js"></script>
    <script src="../public/js/main.js"></script>
</body>

</html>