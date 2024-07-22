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

<body>

    <!--============================
        HEADER START
    ==============================-->
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
                            <img src="{{asset('frontend/images/logo_2.png') }}" alt="logo" class="img-fluid w-75">
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
        @yield('contenido')
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
                            <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
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
    <!--============================
        MAIN MENU END
    ==============================-->

    <!--============================
        BANNER PART 2 START
    ==============================-->
    <section id="wsus__banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__banner_content">
                        <div class="row banner_slider">
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url(frontend/images/slider_1.jpg);">
                                    <div class="wsus__single_slider_text">
                                        <h3>new coleccion</h3>
                                        <h1>bolsos hombres</h1>
                                        <h6>start at $99.000</h6>
                                        <a class="common_btn" href="#">Compra aqui</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url(frontend/images/slider_2.jpg);">
                                    <div class="wsus__single_slider_text">
                                        <h3>new coleccion</h3>
                                        <h1>bolsos mujer</h1>
                                        <h6>start at $49.000</h6>
                                        <a class="common_btn" href="#">compra aqui</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url(frontend/images/slider_3.jpg);">
                                    <div class="wsus__single_slider_text">
                                        <h3>new coleccion</h3>
                                        <h1>bolsos infantil</h1>
                                        <h6>start at $99.000</h6>
                                        <a class="common_btn" href="#">compra aqui</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BANNER PART 2 END
    ==============================-->


    <!--============================
        FLASH SELL START
    ==============================-->
    <section id="wsus__flash_sell" class="wsus__flash_sell_2">
        <div class=" container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="offer_time" style="background: url(images/flash_sell_bg.jpg)">
                        <div class="wsus__flash_coundown">
                            <span class=" end_text">Venta Flash</span>
                            <div class="simply-countdown simply-countdown-one"></div>
                            <a class="common_btn" href="#">Ver Más <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flash_sell_slider">
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="{{asset('frontend/images/pro1.webp')}}" alt="product" class="img-fluid w-100 img_1" />
                            <img src="{{asset('frontend/images/pro1_1.webp')}}" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">Mujer</a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(133 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">Malestines & Morrales</a>
                            <p class="wsus__price">$50.000 <del>$100.000</del></p>
                            <a class="add_cart" href="#">agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="{{asset('frontend/images/pro2.webp')}}" alt="product" class="img-fluid w-100 img_1" />
                            <img src="{{('frontend/images/pro2_2.webp')}}"alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">Mujer</a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(17 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">Blue coral</a>
                            <p class="wsus__price">$90.000 <del>$50.000</del></p>
                            <a class="add_cart" href="#">agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="{{asset('frontend/images/pro3.webp')}}" alt="product" class="img-fluid w-100 img_1" />
                            <img src="{{asset('frontend/images/pro3_3.webp')}}"alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">Mujer</a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(120 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">Elegancia total</a>
                            <p class="wsus__price">$100.000 <del>$50.000</del></p>
                            <a class="add_cart" href="#">agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="{{asset('frontend/images/pro4.webp')}}" alt="product" class="img-fluid w-100 img_1" />
                            <img src="{{asset('frontend/images/pro4_4.webp')}}" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">mujer </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(72 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">rosa pastel</a>
                            <p class="wsus__price">$150.000 <del>$100.000</del></p>
                            <a class="add_cart" href="#">agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="{{asset('frontend/images/pro5.webp')}}" alt="product" class="img-fluid w-100 img_1" />
                            <img src="{{asset('frontend/images/pro5_5.webp')}}" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">Hombre </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(17 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">Hombre de clase</a>
                            <p class="wsus__price">$140.000 <del>$200.000</del></p>
                            <a class="add_cart" href="#">agregar al carrito </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--============================
        FLASH SELL END
    ==============================-->

    <!--============================
      HOME SERVICES START
    ==============================-->
    <section id="wsus__home_services" class="home_service_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-3 pe-lg-0">
                    <div class="wsus__home_services_single home_service_single_2 border_left">
                        <i class="fal fa-truck"></i>
                        <h5>Envío Gratis A Todo El Mundo</h5>
                        <p>Envío gratuito a toda la costa del país.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 pe-lg-0">
                    <div class="wsus__home_services_single home_service_single_2">
                        <i class="fal fa-headset"></i>
                        <h5>Atención Al Cliente 24 Horas Al Día, 7 Días A La Semana</h5>
                        <p>Atención al cliente amigable las 24 horas, los 7 días de la semana</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 pe-lg-0">
                    <div class="wsus__home_services_single home_service_single_2">
                        <i class="far fa-exchange-alt"></i>
                        <h5>Garantía De Devolución Del Dinero</h5>
                        <p>Devolvemos el dinero en 30 días</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3">
                    <div class="wsus__home_services_single home_service_single_2">
                        <i class="fal fa-credit-card"></i>
                        <h5>Pago Seguro En Línea</h5>
                        <p>Contamos con Certificado SSL / Seguro</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        HOME SERVICES END
    ==============================-->


    <!--============================
        HOME BLOGS START
    ==============================-->
    <section id="wsus__blogs" class="home_blogs">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>Nosotros</h3>
                        <a class="see_btn" href="#">Ver Más <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row home_blog_slider">
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="{{asset('frontend/images/blog_1.jfif') }}" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top red" href="#">Mision</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">Ofrecer bolsos de alta calidad que complementen y realcen el estilo de vida moderno y dinámico de nuestros clientes. Nos comprometemos a proporcionar productos exclusivos y servicios excepcionales, asegurando la satisfacción y confianza de nuestros clientes en cada compra.</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="{{asset('frontend/images/blog_2.jfif') }}" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top blue" href="#">Vision</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">Convertirnos en la principal elección en la mente de los amantes de la moda y accesorios, destacándonos por nuestra innovación, calidad y compromiso con la experiencia del cliente. Nos esforzamos por expandir nuestra presencia global mientras mantenemos nuestro compromiso con la sostenibilidad y la responsabilidad social.</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="{{asset('frontend/images/blog_3.jfif') }}" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top red" href="#">Testimonio</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">Ana S. - Barcelona
                                    "¡Mis bolsos de J´C son simplemente increíbles! La calidad y el diseño superaron mis expectativas. ¡Definitivamente recomendaré esta tienda a mis amigos!</a>
                                <p class="date">dic 12 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        HOME BLOGS END
    ==============================-->


    <!--============================
        FOOTER PART START
    ==============================-->
    <footer class="footer_2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-sm-7 col-md-6 col-lg-3">
                    <div class="wsus__footer_content">
                        <a class="wsus__footer_2_logo" href="#">
                            <img src="images/logo_2.png" alt="logo">
                        </a>
                        <a class="action" href="callto:+8896254857456"><i class="fas fa-phone-alt"></i>
                            +8896254857456</a>
                        <a class="action" href="mailto:example@gmail.com"><i class="far fa-envelope"></i>
                            example@gmail.com</a>
                        <p><i class="fal fa-map-marker-alt"></i> San Francisco City Hall, San Francisco, CA</p>
                        <ul class="wsus__footer_social">
                            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a class="behance" href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-5 col-md-4 col-lg-2">
                    <div class="wsus__footer_content">
                        <h5>Company</h5>
                        <ul class="wsus__footer_menu">
                            <li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Team Member</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Career</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Affilate</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Order History</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Team Member</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-5 col-md-4 col-lg-2">
                    <div class="wsus__footer_content">
                        <h5>Company</h5>
                        <ul class="wsus__footer_menu">
                            <li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Team Member</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Career</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Affilate</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Order History</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Team Member</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-7 col-md-8 col-lg-5">
                    <div class="wsus__footer_content wsus__footer_content_2">
                        <h3>Subscribe To Our Newsletter</h3>
                        <p>Get all the latest information on Events, Sales and Offers.
                            Get all the latest information on Events.</p>
                        <form>
                            <input type="text" placeholder="Search...">
                            <button type="submit" class="common_btn">subscribe</button>
                        </form>
                        <div class="footer_payment">
                            <p>We're using safe payment for :</p>
                            <img src="images/credit2.png" alt="card" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wsus__footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="wsus__copyright d-flex justify-content-center">
                            <p>Copyright © 2021 Sazao shop. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============================
        FOOTER PART END
    ==============================-->


    <!--============================
        SCROLL BUTTON START
    ==============================-->
    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--============================
        SCROLL BUTTON  END
    ==============================-->


    <!--jquery library js-->
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
