<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>xgcode</title>


    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<header>

    <div class="menu-logo py-3">
        <div class="container">
            <div class="menu-wrapper">
                <div class="row">


                    <div class="col-lg-6 col-md-6   align-self-md-center d-md-flex ">
                        <ul class="list-inline user-nav">
                            <li class="list-inline-item" id="main"> <?php echo $lang['main'] ?> </li>
                            <li class="list-inline-item" id="technical"><?php echo $lang['technical'] ?></li>
                            <li class="list-inline-item" id="contact"><?php echo $lang['contact'] ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 align-items-center d-md-flex justify-content-end gap-4">


                        <div id="cl_switcher_wrapper">
                            <div id="cl_switcher">
                                <button id="cl_toggle" type="button" role="button" class="btn btn-white-outlined">
                                    <i class="currency-flag currency-flag-usd"></i>
                                    <span>$</span>
                                </button>
                                <ul id="cl_list" data-simplebar data-simplebar-direction='rtl'>
                                    <li class="col">
                                        <span class="col__title"><h4>العملة</h4></span>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_24498"
                                                   value="SAR" data-symbol="ر.س">
                                            <label for="currency_opt_24498">
                                                <i class="currency-flag currency-flag-sar"></i>
                                                <span>ريال سعودي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_38391"
                                                   value="USD" checked="" data-symbol="$">
                                            <label for="currency_opt_38391">
                                                <i class="currency-flag currency-flag-usd"></i>
                                                <span>دولار أمريكي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67352"
                                                   value="AED" data-symbol=" د.إ">
                                            <label for="currency_opt_67352">
                                                <i class="currency-flag currency-flag-aed"></i>
                                                <span>درهم اماراتي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67353"
                                                   value="BHD" data-symbol="د.ب">
                                            <label for="currency_opt_67353">
                                                <i class="currency-flag currency-flag-bhd"></i>
                                                <span>دينار بحريني</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67354"
                                                   value="AUD" data-symbol="$">
                                            <label for="currency_opt_67354">
                                                <i class="currency-flag currency-flag-aud"></i>
                                                <span>دولار استرالي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67355"
                                                   value="CAD" data-symbol="$">
                                            <label for="currency_opt_67355">
                                                <i class="currency-flag currency-flag-cad"></i>
                                                <span>دولار كندي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67356"
                                                   value="EUR" data-symbol="€">
                                            <label for="currency_opt_67356">
                                                <i class="currency-flag currency-flag-eur"></i>
                                                <span>يورو</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67357"
                                                   value="CNY" data-symbol="¥">
                                            <label for="currency_opt_67357">
                                                <i class="currency-flag currency-flag-cny"></i>
                                                <span>رنمينبي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67358"
                                                   value="DZD" data-symbol="دج">
                                            <label for="currency_opt_67358">
                                                <i class="currency-flag currency-flag-dzd"></i>
                                                <span>دينار جزائري</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67359"
                                                   value="EGP" data-symbol="ج.م">
                                            <label for="currency_opt_67359">
                                                <i class="currency-flag currency-flag-egp"></i>
                                                <span>جنيه مصري</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67360"
                                                   value="GBP" data-symbol="£">
                                            <label for="currency_opt_67360">
                                                <i class="currency-flag currency-flag-gbp"></i>
                                                <span>جنيه استرليني</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67361"
                                                   value="IDR" data-symbol="Rp">
                                            <label for="currency_opt_67361">
                                                <i class="currency-flag currency-flag-idr"></i>
                                                <span>روبية إندونيسية</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67362"
                                                   value="INR" data-symbol="Rp">
                                            <label for="currency_opt_67362">
                                                <i class="currency-flag currency-flag-inr"></i>
                                                <span>روبية هندية</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67363"
                                                   value="IQD" data-symbol="د.ع">
                                            <label for="currency_opt_67363">
                                                <i class="currency-flag currency-flag-iqd"></i>
                                                <span>دينار عراقي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67364"
                                                   value="JOD" data-symbol="JOD">
                                            <label for="currency_opt_67364">
                                                <i class="currency-flag currency-flag-jod"></i>
                                                <span>دينار أردني</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67365"
                                                   value="JPY" data-symbol="¥">
                                            <label for="currency_opt_67365">
                                                <i class="currency-flag currency-flag-jpy"></i>
                                                <span>ين ياباني</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67366"
                                                   value="KWD" data-symbol="د.ك">
                                            <label for="currency_opt_67366">
                                                <i class="currency-flag currency-flag-kwd"></i>
                                                <span>دينار كويتي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67367"
                                                   value="LBP" data-symbol="ل.ل">
                                            <label for="currency_opt_67367">
                                                <i class="currency-flag currency-flag-lbp"></i>
                                                <span>ليرة لبنانية</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67368"
                                                   value="LYD" data-symbol="LD">
                                            <label for="currency_opt_67368">
                                                <i class="currency-flag currency-flag-lyd"></i>
                                                <span>دينار ليبي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67369"
                                                   value="MAD" data-symbol="د.م.">
                                            <label for="currency_opt_67369">
                                                <i class="currency-flag currency-flag-mad"></i>
                                                <span>درهم مغربي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67370"
                                                   value="MRO" data-symbol="UM">
                                            <label for="currency_opt_67370">
                                                <i class="currency-flag currency-flag-mro"></i>
                                                <span>أوقية موريتانية</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67371"
                                                   value="MYR" data-symbol="RM">
                                            <label for="currency_opt_67371">
                                                <i class="currency-flag currency-flag-myr"></i>
                                                <span>رينغيت ماليزي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67372"
                                                   value="OMR" data-symbol="ر.ع">
                                            <label for="currency_opt_67372">
                                                <i class="currency-flag currency-flag-omr"></i>
                                                <span>ريال عماني</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67373"
                                                   value="PKR" data-symbol="Rs.">
                                            <label for="currency_opt_67373">
                                                <i class="currency-flag currency-flag-pkr"></i>
                                                <span>روبية باكستانية</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67374"
                                                   value="QAR" data-symbol="ر.ق">
                                            <label for="currency_opt_67374">
                                                <i class="currency-flag currency-flag-qar"></i>
                                                <span>ريال قطري</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67375"
                                                   value="SDG" data-symbol="SDG">
                                            <label for="currency_opt_67375">
                                                <i class="currency-flag currency-flag-sdg"></i>
                                                <span>جنيه سوداني</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67376"
                                                   value="SEK" data-symbol="kr">
                                            <label for="currency_opt_67376">
                                                <i class="currency-flag currency-flag-sek"></i>
                                                <span>كرونة سويدية</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67377"
                                                   value="SYP" data-symbol="SYP">
                                            <label for="currency_opt_67377">
                                                <i class="currency-flag currency-flag-syp"></i>
                                                <span>ليرة سورية</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67378"
                                                   value="TND" data-symbol="د.ت">
                                            <label for="currency_opt_67378">
                                                <i class="currency-flag currency-flag-tnd"></i>
                                                <span>دينار تونسي</span>
                                            </label>
                                        </div>
                                        <div class="checkbox radio">
                                            <input name="currency_option" type="radio" id="currency_opt_67379"
                                                   value="TRY" data-symbol="₺">
                                            <label for="currency_opt_67379">
                                                <i class="currency-flag currency-flag-try"></i>
                                                <span>ليرة تركية</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="list-inline user-nav">
                            <li class="dropdown-cart-wrapper d-inline-block">
                                <div class="text-center">
                                    <a href="#" id="cart">
                                        <div class="cart-text">
                                            <span class="badge">1</span>
                                            <i
                                                    class="fa fa-shopping-cart">
                                            </i>
                                            <span id="cart">السلة</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="shopping-cart ">
                                    <div class="shopping-cart-header">
                                        <div class="shopping-cart-total">
                                            <span class="lighter-text">Total:</span>
                                            <span class="main-color-text total">$461.15</span>
                                        </div>
                                    </div> <!--end shopping-cart-header -->

                                    <ul class="shopping-cart-items list-unstyled" data-simplebar
                                        data-simplebar-direction='rtl'>
                                        <li class="clearfix">
                                            <img src="images/apps.6194.63443774180296696.cd362176-f5a8-4466-88f8-b7d68650d970.png"
                                                 alt="item1"/>
                                            <span class="item-name">XMREDTREE</span>
                                            <span class="item-detail">Pack 100</span>
                                            <span class="item-price">$49.50</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                            <a href="" class="delete-item"><i class="fa fa-close"></i></a>
                                        </li>
                                        <li class="clearfix">
                                            <img src="images/apps.6194.63443774180296696.cd362176-f5a8-4466-88f8-b7d68650d970.png"
                                                 alt="item1"/>
                                            <span class="item-name">XMREDTREE</span>
                                            <span class="item-detail">Pack 100</span>
                                            <span class="item-price">$49.50</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                            <a href="" class="delete-item"><i class="fa fa-close"></i></a>
                                        </li>
                                        <li class="clearfix">
                                            <img src="images/apps.6194.63443774180296696.cd362176-f5a8-4466-88f8-b7d68650d970.png"
                                                 alt="item1"/>
                                            <span class="item-name">XMREDTREE</span>
                                            <span class="item-detail">Pack 100</span>
                                            <span class="item-price">$49.50</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                            <a href="" class="delete-item"><i class="fa fa-close"></i></a>
                                        </li>
                                        <li class="clearfix">
                                            <img src="images/apps.6194.63443774180296696.cd362176-f5a8-4466-88f8-b7d68650d970.png"
                                                 alt="item1"/>
                                            <span class="item-name">XMREDTREE</span>
                                            <span class="item-detail">Pack 100</span>
                                            <span class="item-price">$49.50</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                            <a href="" class="delete-item"><i class="fa fa-close"></i></a>
                                        </li>
                                        <li class="clearfix">
                                            <img src="images/apps.6194.63443774180296696.cd362176-f5a8-4466-88f8-b7d68650d970.png"
                                                 alt="item1"/>
                                            <span class="item-name">XMREDTREE</span>
                                            <span class="item-detail">Pack 100</span>
                                            <span class="item-price">$49.50</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                            <a href="" class="delete-item"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>

                                    <a href="#" class="button">دفع</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown list-inline-item">
                                <a id="entery" class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#LoginModal">
                                    <i class="fa fa-user"></i>
                                    دخول
                                </a>

                            </li>
                        </ul>
                        <button class="btn btn-secondary" onclick="changeLanguage('eng')">
                            Change to English
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="" class="img-fluid" loading="lazy">

            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-content">
                <div class="hamburger-toggle">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">تخفيضات</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside">
                            اشتراكات iPTV</a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="#">اشتراك سنه</a></li>
                            <li><a class="dropdown-item" href="blog.html">اشتراك 6 اشهر</a></li>

                            <li class="dropend">
                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                   data-bs-auto-close="outside">IPTV</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href="">Free IPTV</a></li>
                                    <li><a class="dropdown-item" href="">اشتراك شهر</a></li>
                                    <li><a class="dropdown-item" href="">اشتراك تجريبي</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">اتصل بنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الدعم الفني</a>
                    </li>

                </ul>
                <form class="d-flex ms-auto search-form">
                    <div class="input-group">
                        <input class="form-control border-0 mr-2" type="search" placeholder="بحث عن منتح .."
                               aria-label="Search">
                        <button class="btn btn-primary border-0" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </nav>

</header>
<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">دخول</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center login-modal pb-5">
                <h5 class="mb-4"> اختر طريقة الدخول</h5>
                <button id="emailTrigger" data-name="email" class="btn btn-yellow-outlined me-4">دخول بالبريد
                    الالكتروني
                </button>
                <button id="phoneTrigger" data-name="phone" class="btn btn-yellow-outlined">دخول برقم الجوال</button>

                <input type="email"  data-name="email" class="form-control login-option"
                       placeholder="بريدك الالكتروني">
                <input type="text"   data-name="phone" class="form-control login-option" placeholder="رقم الجوال">


                <input type="submit" value="ارسال كود التحقق" class="btn-submit btn btn-dark mt-4 ">

            </div>

        </div>
    </div>
</div>

<div class="main-slider mb-5">

    <img src="images/1_jfR0trcAPT3udktrFkOebA.jpeg" alt="" class="img-fluid" loading="lazy">
    <img src="images/7500.jpg" alt="" class="img-fluid" loading="lazy">
</div>


<section class="packages-prices pb-4 mt-3">
    <div class="container">
        <div class="section-title mb-5">
            أسعار الاشتراكات
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-package">
                    <div class="top-wrapper">
                        <p>اشتراك</p>
                        <div class="price">$39</div>
                        <p>شهر واحد</p>
                    </div>
                    <ul class="features">
                        <li>يعمل على جهاز واحد فقط</li>
                        <li>اكثر من 200 قناة</li>
                        <li>يعمل على كل انواع الاجهزة</li>
                        <li>تجربه مجانية 24 ساعه</li>
                        <li>ضمان بنسبه 99% دون انقطاع</li>
                    </ul>
                    <button class="btn add-to-cart my-3"><i class="fa fa-shopping-cart"></i>اضف الى السلة</button>

                </div>
            </div>
            <div class="col-md-4">
                <div class="single-package common-package">
                    <div class="top-wrapper">
                        <p>اشتراك</p>
                        <div class="price">$39</div>
                        <p>6 اشهر</p>
                    </div>
                    <ul class="features">
                        <li>يعمل على جهاز واحد فقط</li>
                        <li>اكثر من 200 قناة</li>
                        <li>يعمل على كل انواع الاجهزة</li>
                        <li>تجربه مجانية 24 ساعه</li>
                        <li>ضمان بنسبه 99% دون انقطاع</li>
                    </ul>
                    <button class="btn add-to-cart my-3"><i class="fa fa-shopping-cart"></i>اضف الى السلة</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-package">
                    <div class="top-wrapper">
                        <p>اشتراك</p>
                        <div class="price">$39</div>
                        <p>سنه</p>
                    </div>
                    <ul class="features">
                        <li>يعمل على جهاز واحد فقط</li>
                        <li>اكثر من 200 قناة</li>
                        <li>يعمل على كل انواع الاجهزة</li>
                        <li>تجربه مجانية 24 ساعه</li>
                        <li>ضمان بنسبه 99% دون انقطاع</li>
                    </ul>
                    <button class="btn add-to-cart my-3"><i class="fa fa-shopping-cart"></i>اضف الى السلة</button>

                </div>
            </div>

        </div>

    </div>
</section>


<section class="why-us bg-light py-5 mt-5">
    <div class="container">
        <div class="section-title mb-5  ">
            مميزات خدماتنا
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>


                    <div class="item-details">
                        طرق دفع آمنه تناسب اختياراتك
                    </div>
                    <small class="mt-2 text-black-50">تحويل, فيزا, سداد, مدى, ابل باي ، STC PAY </small>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-tags" aria-hidden="true"></i>

                    <div class="item-details">
                        عروض متجددة ومنافسة
                    </div>
                    <small class="mt-2 text-black-50">افضل العروض الشهرية والخصومات</small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-rocket" aria-hidden="true"></i>
                    <div class="item-details">سرعة صاروخية فى وصول الكود</div>
                    <small class="mt-2 text-black-50">يتم ارسال الاشتراك عبر الواتس اب للعضوية وطريقة الاشتراك</small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                    <div class="item-details">
                        يعمل على كل انواع الاجهزة
                    </div>
                    <small class="mt-2 text-black-50">يعمل علي كل التليفزيونات الذكرية والكمبيوتر والجوالات </small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-television" aria-hidden="true"></i>

                    <div class="item-details">
                        اكثر من 7000 قناة
                    </div>
                    <small class="mt-2 text-black-50">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-plug" aria-hidden="true"></i>


                    <div class="item-details">
                        يعمل 24 ساعه دون انقطاع
                    </div>
                    <small class="mt-2 text-black-50">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>

                    <div class="item-details">
                        دعم فني طوال الاسبوع
                    </div>
                    <small class="mt-2 text-black-50">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</small>

                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="single-section-wrapper">
                    <i class="fa fa-desktop" aria-hidden="true"></i>


                    <div class="item-details">
                        يعمل على كل انواع الاجهزة
                    </div>
                    <small class="mt-2 text-black-50">خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً</small>

                </div>
            </div>
        </div>

    </div>
</section>

<section class="testimonials py-5">
    <div class="container">
        <div class="section-title mb-5  ">
            آراء العملاء
        </div>
        <div class="testimonial-slider">
            <div class="testimonials-item">

                <div class=" justify-content-center ">

                    <div class="mb-3 d-flex align-items-center">
                        <img src="https://assets.salla.cloud/themes/default/assets/images/avatar_female.png"
                             loading="lazy" alt="">
                        <div>
                            <span class="testimonials-item__author"> فالح الشهراني</span>
                            <ul class="rating">
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p> جميل جدا للان والخدمه سريعه وموظف خذمة العملاء ممتاز جدا اسلوب راقي رد سريع الف شكر لكم
                        🙏🏻 </p>


                </div>

            </div>
            <div class="testimonials-item">

                <div class=" justify-content-center ">

                    <div class="mb-3 d-flex align-items-center">
                        <img src="https://assets.salla.cloud/themes/default/assets/images/avatar_female.png"
                             loading="lazy" alt="">
                        <div>
                            <span class="testimonials-item__author"> فالح الشهراني</span>
                            <ul class="rating">
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p> جميل جدا للان والخدمه سريعه وموظف خذمة العملاء ممتاز جدا اسلوب راقي رد سريع الف شكر لكم
                        🙏🏻 </p>


                </div>

            </div>
            <div class="testimonials-item">

                <div class=" justify-content-center ">

                    <div class="mb-3 d-flex align-items-center">
                        <img src="https://assets.salla.cloud/themes/default/assets/images/avatar_female.png"
                             loading="lazy" alt="">
                        <div>
                            <span class="testimonials-item__author"> فالح الشهراني</span>
                            <ul class="rating">
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p> جميل جدا للان والخدمه سريعه وموظف خذمة العملاء ممتاز جدا اسلوب راقي رد سريع الف شكر لكم
                        🙏🏻 </p>


                </div>

            </div>
            <div class="testimonials-item">

                <div class=" justify-content-center ">

                    <div class="mb-3 d-flex align-items-center">
                        <img src="https://assets.salla.cloud/themes/default/assets/images/avatar_female.png"
                             loading="lazy" alt="">
                        <div>
                            <span class="testimonials-item__author"> فالح الشهراني</span>
                            <ul class="rating">
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                                <li><i class="fa fa-star star-on"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p> جميل جدا للان والخدمه سريعه وموظف خذمة العملاء ممتاز جدا اسلوب راقي رد سريع الف شكر لكم
                        🙏🏻 </p>


                </div>

            </div>
        </div>
    </div>
</section>

<footer>

    <div class="container">

        <div class="text-center">

            <div class="social-icons mb-3">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-telegram"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-phone"></i></a></li>
                </ul>
            </div>

            <div class="payment-methods mb-4">

                <img src="https://assets.salla.cloud/themes/default/assets/images/mada.png?v=v1.4.134" alt=" ">
                <img src="https://assets.salla.cloud/themes/default/assets/images/cc.png?v=v1.4.134" alt=" ">
                <img src="https://assets.salla.cloud/themes/default/assets/images/applepay.svg?v=v1.4.134" alt=" ">

            </div>

            <ul class="footer-nav list-inline">
                <li class="list-inline-item"><a href="">رابط</a></li>
                <li class="list-inline-item"><a href="">رابط</a></li>
                <li class="list-inline-item"><a href="">رابط</a></li>
                <li class="list-inline-item"><a href="">رابط</a></li>
            </ul>

        </div>


    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p><a href="http://www.serv5.com"> برمجة سيرف فايف
                        </a></p>

                </div>
                <div class="col-md-6">
                    <p class="cr">جميع الحقوق محفوظة © 2017</p>

                </div>
            </div>


        </div>
    </div>

</footer>
<a href="#" class="go-top"><i class="fa fa-chevron-up"></i></a>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap-rtl.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/custom.js"></script>
<script>
    function changeLanguage(lang) {
        location.hash = lang;
        location.reload();
    }

    // Define the language reload anchors
    var language = {
        eng: {
            main: "main",
            technical: "technical",
            contact: "contact"
        }
    }

    if (window.location.hash) {
        if (window.location.hash == "#eng") {
            main.textContent =
                language.eng.main;
            technical.textContent =
                language.eng.technical;
            contact.textContent =
                language.eng.contact;
        }
    }
</script>
</body>
</html>
