<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>JC Bolsos y Más @yield('titulo')</title>
    <link rel="icon" type="image/png" href="{{asset('frontend/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.nice-number.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.calendar.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/add_row_custon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/mobile_menu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.exzoom.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/multiple-image-video.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}"
      <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>
<header>
    <div class="container">
        <div class="row">
            <div class="col-2 col-md-1 d-lg-none">
                <div class="wsus__mobile_menu_area">
                    <span class="wsus__mobile_menu_icon"><i class="fal fa-bars"></i></span>
                </div>
            </div>
            <div class="col-xl-2 col-7 col-md-8 col-lg-2">
                <div class="wsus_logo_area">
                    <a class="wsus__header_logo" href="index.html">
                        <img src="{{asset('frontend/images/logo_2.png') }}" alt="logo" class="img-fluid w-50">
                    </a>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 col-lg-4 d-none d-lg-block">
                <div class="wsus__search">
                    <form>
                        <input type="text" placeholder="Search...">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-xl-5 col-3 col-md-3 col-lg-6">
                <div class="wsus__call_icon_area">
                    <div class="wsus__call_area">
                        <div class="wsus__call">
                            <i class="fas fa-user-headset"></i>
                        </div>
                        <div class="wsus__call_text">
                            <p>example@gmail.com</p>
                            <p>+569875544220</p>
                        </div>
                    </div>
                    <ul class="wsus__icon_area">
                        <li><a href="wishlist.html"><i class="fal fa-heart"></i><span>05</span></a></li>
                        <li><a href="compare.html"><i class="fal fa-random"></i><span>03</span></a></li>
                        <li><a class="wsus__cart_icon" href="#"><i
                                    class="fal fa-shopping-bag"></i><span>04</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wsus__mini_cart">
        <h4>shopping cart <span class="wsus_close_mini_cart"><i class="far fa-times"></i></span></h4>
        <ul>
            <li>
                <div class="wsus__cart_img">
                    <a href="#"><img src="images/tab_2.jpg" alt="product" class="img-fluid w-100"></a>
                    <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                </div>
                <div class="wsus__cart_text">
                    <a class="wsus__cart_title" href="#">apple 9.5" 7 serise tab with full view display</a>
                    <p>$140 <del>$150</del></p>
                </div>
            </li>
            <li>
                <div class="wsus__cart_img">
                    <a href="#"><img src="images/pro4.jpg" alt="product" class="img-fluid w-100"></a>
                    <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                </div>
                <div class="wsus__cart_text">
                    <a class="wsus__cart_title" href="#">Bolsos de Hombres</a>
                    <p>$120.000</p>
                </div>
            </li>
            <li>
                <div class="wsus__cart_img">
                    <a href="#"><img src="images/pro2.jpg" alt="product" class="img-fluid w-100"></a>
                    <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                </div>
                <div class="wsus__cart_text">
                    <a class="wsus__cart_title" href="#">Bolsos de Mujeres</a>
                    <p>$60.000 <del>$150.000</del></p>
                </div>
            </li>
            <li>
                <div class="wsus__cart_img">
                    <a href="#"><img src="images/pro9.jpg" alt="product" class="img-fluid w-100"></a>
                    <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                </div>
                <div class="wsus__cart_text">
                    <a class="wsus__cart_title" href="#">Bolsos de Infantiles</a>
                    <p>$90.000</p>
                </div>
            </li>
            <li>
                <div class="wsus__cart_img">
                    <a href="#"><img src="images/tab_2.jpg" alt="product" class="img-fluid w-100"></a>
                    <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                </div>
                <div class="wsus__cart_text">
                    <a class="wsus__cart_title" href="#">apple 9.5" 7 serise tab with full view display</a>
                    <p>$140 <del>$150</del></p>
                </div>
            </li>
        </ul>
        <h5>sub total <span>$3540</span></h5>
        <div class="wsus__minicart_btn_area">
            <a class="common_btn" href="cart_view.html">view cart</a>
            <a class="common_btn" href="check_out.html">checkout</a>
        </div>
    </div>

</header>
<!--============================
    HEADER END
==============================-->


<!--============================
    MAIN MENU START
==============================-->
<nav class="wsus__main_menu d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="relative_contect d-flex">
                    <div class="wsus_menu_category_bar">
                        <i class="far fa-bars"></i>
                    </div>
                    <ul class="wsus_menu_cat_item show_home toggle_menu">
                        <li><a href="#"><i class="fas fa-star"></i> hot promotions</a></li>
                        <li><a class="wsus__droap_arrow" href="#"><i class="fal fa-tshirt"></i> Fashion </a>
                            <ul class="wsus_menu_cat_droapdown">
                                <li><a href="#">New Arrivals <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#">Trending <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Home Audio & Theaters</a></li>
                                <li><a href="#">TV & Videos</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Photos & Videos <i class="fas fa-angle-right"></i></a>
                                    <ul class="wsus__sub_category">
                                        <li><a href="#">New Arrivals</a> </li>
                                        <li><a href="#">Best Sellers</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Home Audio & Theaters</a></li>
                                        <li><a href="#">TV & Videos</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Photos & Videos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="far fa-camera"></i> Accessorios</a></li>
                        <li><a href="#"><i class="fas fa-heartbeat"></i> Categorias</a></li>
                        <li><a href="#"><i class="fal fa-gift-card"></i> Mucho mas</a></li>
                    </ul>

                    <ul class="wsus__menu_item">
                        <li><a class="active" href="index.html">Inicio</a></li>
                        <li><a href="product_grid_view.html">Tienda<i class="fas fa-caret-down"></i></a>
                            <div class="wsus__mega_menu">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="wsus__mega_menu_colum">
                                            <h4>women</h4>
                                            <ul class="wsis__mega_menu_item">
                                                <li><a href="#">Maletines</a></li>
                                                <li><a href="#">Morrales</a></li>
                                                <li><a href="#">Bolsos</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="wsus__mega_menu_colum">
                                            <h4>men</h4>
                                            <ul class="wsis__mega_menu_item">
                                                <li><a href="#">Maletines</a></li>
                                                <li><a href="#">Morrales</a></li>
                                                <li><a href="#">Bolsos</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="wsus__mega_menu_colum">
                                            <h4>category</h4>
                                            <ul class="wsis__mega_menu_item">
                                                <li><a href="#"> Hombre</a></li>
                                                <li><a href="#">Mujer</a></li>
                                                <li><a href="#">Infantil</a></li>
                                                <li><a href="#">Mixto</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li><a href="{{route('clientes.index')}}">Clientes</a></li>
                        <li><a href="{{route('productos.index')}}">Productos</a></li>
                        <li class="wsus__relative_li"><a href="#">pages <i class="fas fa-caret-down"></i></a>
                            <ul class="wsus__menu_droapdown">
                                <li><a href="404.html">404</a></li>
                                <li><a href="product_category.html">product category</a></li>
                                <li><a href="brands.html">brands</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="wsus__menu_item wsus__menu_item_right">
                        <li><a href="contact.html">contacto</a></li>
                        <li><a href="dsahboard.html">mi cuenta</a></li>
                        <li><a href="login.html">acceso</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
    @yield('contenido')



        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
    <!--bootstrap js-->
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <!--font-awesome js-->
    <script src="{{asset('frontend/js/Font-Awesome.js')}}"></script>
    <!--select2 js-->
    <script src="{{asset('frontend/js/select2.min.js')}}"></script>
    <!--slick slider js-->
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <!--simplyCountdown js-->
    <script src="{{asset('frontend/js/simplyCountdown.js')}}"></script>
    <!--product zoomer js-->
    <script src="{{asset('frontend/js/jquery.exzoom.js')}}"></script>
    <!--nice-number js-->
    <script src="{{asset('frontend/js/jquery.nice-number.min.js')}}"></script>
    <!--counter js-->
    <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.countup.min.js')}}"></script>
    <!--add row js-->
    <script src="{{asset('frontend/js/add_row_custon.js')}}"></script>
    <!--multiple-image-video js-->
    <script src="{{asset('frontend/js/multiple-image-video.js')}}"></script>
    <!--sticky sidebar js-->
    <script src="{{asset('frontend/js/sticky_sidebar.js')}}"></script>
    <!--price ranger js-->
    <script src="{{asset('frontend/js/ranger_jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend/js/ranger_slider.js')}}"></script>
    <!--isotope js-->
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <!--venobox js-->
    <script src="{{asset('frontend/js/venobox.min.js')}}"></script>
    <!--classycountdown js-->
    <script src="{{asset('frontend/js/jquery.classycountdown.js')}}"></script>

    <!--main/custom js-->
    <script src="{{asset('frontend/js/main.js')}}"></script>


    </body>
</html>
