<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/icon.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <title> صفحه اصلی </title>
</head>
<body dir="rtl" onscroll="fixed_top()">

<button onclick="topFunction()" id="gotoTop" title="Go to top"><i class="fas fa-angle-double-up"></i></button>
<header class="w-100">
    <div class="container hidden-lg hidden-md hidden-xl my-4">
        <div class="row">
            <div class="col-6 text-right">
                <button class="border-0 bg-white" onclick="show_main_list()" > <i class="fas fa-align-justify"></i> </button>
            </div>
            <div class="col-10 navbar text-center px-0 py-0 fixed-top h-100 bg-white" id="main_list">
                <div class="logo">
                    <a href="#" class="show text-center"><li class="list-group-item rounded-0 border-bottom">
                            <img src="../assets/images/logomain.jpg" height="90px" width="230px" alt="">
                        </li></a>
                </div>
                <nav>
                    <ul class="list-unstyled text-right px-0 w-100 h-100">
                        <li class="list-group-item border-0 align-items-center rounded-0" onclick="show_list2()">
                            <a href="#" class="text-gray show_list">
                                قالب وردپرس<i class="fas fa-angle-down mr-1 float-left"></i>
                            </a>
                            <ul class="list-unstyled text-right pr-2 py-2 list-categories1 bg-white"  id="show_list2">
                                <a href="#">
                                    <li class="list-item text-right text-gray" onclick="show_list3()">
                                        تست ۱ <i class="fas fa-angle-down mr-1 float-left"></i>
                                    </li>
                                </a>
                                <ul class="list-unstyled text-right pr-2 py-2 list-categories1 bg-white rounded"  id="show_list3">
                                    <a href="#"> <li class="list-item text-right"> تست ۱ </li></a>
                                    <a href="#"><li class="list-item text-right"> تست ۲ </li></a>
                                    <a href="#"><li class="list-item text-right"> تست ۳ </li></a>
                                    <a href="#"><li class="list-item text-right"> تست ۴ </li></a>
                                </ul>
                                <a href="#"><li class="list-item text-right text-gray"> تست ۲ </li></a>
                                <a href="#"><li class="list-item text-right text-gray"> تست ۳ </li></a>
                                <a href="#"><li class="list-item text-right text-gray"> تست ۴ </li></a>
                            </ul>
                        </li>

                        <a href="#"><li class="list-group-item border-0 align-items-center rounded-0 text-gray show_list">
                                افزونه وردپرس<i class="fas fa-angle-down mr-1 float-left"></i>
                            </li></a>
                        <a href="#"><li class="list-group-item border-0 align-items-center rounded-0 text-gray show_list">
                                مقالات آموزشی<i class="fas fa-angle-down mr-1 float-left"></i>
                            </li></a>
                        <a href="#"><li class="list-group-item border-0 align-items-center rounded-0 text-gray show_list">
                                دوره های آموزشی<i class="fas fa-angle-down mr-1 float-left"></i>
                            </li>  </a>
                        <a href="#"><li class="list-group-item border-0 align-items-center rounded-0 text-gray show_list">
                                ژاکت<i class="fas fa-angle-down mr-1 float-left"></i>
                            </li> </a>
                        <a href="#"><li class="list-group-item border-0 align-items-center rounded-0 text-gray show_list">
                                طراحی سایت<i class="fas fa-angle-down mr-1 float-left"></i>
                            </li></a>
                    </ul>
                </nav>
            </div>
            <div class="col-6  text-left" onclick="hide_main_list()">
                <div class="row" dir="ltr">
                    <div class="search d-inline-block mx-3" id="search_icon">
                        <a href="#"> <i class="fas fa-search color-red animated infinite slow tada delay-s"></i> </a>
                    </div>
                    <div class="user d-inline-block mx-1" id="user_icon">
                        <a href=""> <i class="fas fa-user color-red animated infinite slow tada delay-s"></i> </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container text-center hidden-sm hidden-xs">
        <div class="row">
            <div class="row w-100 d-flex justify-content-between">
                <div class="logo col-xs-12 col-6 align-items-center pr-0">
                    <a href="#"><img src="../assets/images/logomain.jpg" class="float-right" style="width:204px ;height: 80px"></a>
                </div>
                <div class="col-xs-12 col-6 pl-0 search d-flex align-items-center">
                    <div class="contact d-flex align-items-center">
                        <a href="#" class="text-dark text-center p-3"> ۰۲۱-۸۸۱۴۸۱۸۸ <i class="fas fa-flip-horizontal fa-phone hvr-buzz Out color-red"></i> </a>
                        <a href="#" class="text-dark text-center pl-2"> <i class="fas fa-shopping-cart color-red"></i> </a>
                    </div>
                    <form action="" class="input-group form-group form-inline my-0 mr-4 d-flex align-items-center float-left w-60" dir="ltr">
                        <button class="position-relative h-100 bg-white ml-2 border-0 float-left" name="button" style="z-index: 100"><i class="fas fa-search color-red animated infinite slow tada delay-s"></i></button>
                        <input type="text" class="form-control position-absolute shadow rounded m-0 w-100 float-left" dir="rtl" placeholder="نام مقاله یا آموزش را جستجو کنید" >
                    </form>
                </div>
            </div>
            <hr class="w-100 mb-0">
            <div class="w-100 text-center bg-white" id="fixed_top">
                <div class="d-none w-100 d-flex align-items-center py-3" id="add_container">
                    <nav class="col-lg-7 px-0" id="scroll_col9">
                        <div class="bg-light d-flex align-items-center">
                            <ul class="list-inline pr-0 bg-white d-flex align-items-center mb-0 w-100 justify-content-between">
                                <li class=" d-none" id="logo_scroll">
                                    <a href="#"><img src="../assets/images/logomain.jpg" class="float-right" style="width:204px ;height: 80px"></a>
                                </li>
                                <li class=" active show">
                                    <a class="" href="#"> قالب وردپرس <span class="sr-only"></span></a>
                                    <ul class="list-unstyled text-right pr-2 py-2 list-categories1 border shadow bg-white rounded">
                                        <li class="list-item text-right show2">
                                            <a href="">
                                                تست ۱ <i class="fas fa-angle-down ml-3 float-left"></i>
                                            </a>
                                            <ul class="list-unstyled text-right pr-2 py-2 list-categories2 border shadow bg-white rounded">
                                                <li class="list-item text-right"><a href="">تست ۱</a></li>
                                                <li class="list-item text-right"><a href=""> تست ۲ </a></li>
                                                <li class="list-item text-right"><a href=""> تست ۳ </a></li>
                                                <li class="list-item text-right"><a href=""> تست ۴ </a></li>
                                            </ul>
                                        </li>
                                        <li class="list-item text-right"><a href=""> تست ۲ </a></li>
                                        <li class="list-item text-right"><a href=""> تست ۳ </a></li>
                                        <li class="list-item text-right"><a href=""> تست ۴ </a></li>
                                    </ul>
                                </li>
                                <li class=" show">
                                    <a class="" href="#"> افزونه وردپرس </a>
                                    <ul class="list-unstyled text-right pr-2 py-2 list-categories1 border shadow bg-white rounded">
                                        <a href=""> <li class="list-item text-right"> تست ۱ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۲ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۳ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۴ </li></a>
                                    </ul>
                                </li>
                                <li class=" show">
                                    <a class="" href="#"> مقالات آموزشی </a>
                                    <ul class="list-unstyled text-right pr-2 py-2 list-categories1 border shadow bg-white rounded">
                                        <a href=""> <li class="list-item text-right"> تست ۱ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۲ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۳ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۴ </li></a>
                                    </ul>
                                </li>
                                <li class=" show">
                                    <a class="" href="#"> دوره های آموزشی </a>
                                    <ul class="list-unstyled text-right pr-2 py-2 list-categories1 border shadow bg-white rounded">
                                        <a href=""> <li class="list-item text-right"> تست ۱ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۲ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۳ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۴ </li></a>
                                    </ul>
                                </li>
                                <li class=" show">
                                    <a class="" href="#"> ژاکت </a>
                                    <ul class="list-unstyled text-right pr-2 py-2 list-categories1 border shadow bg-white rounded">
                                        <a href=""> <li class="list-item text-right"> تست ۱ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۲ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۳ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۴ </li></a>
                                    </ul>
                                </li>
                                <li class="show">
                                    <a class="" href="#"> طراحی سایت </a>
                                    <ul class="list-unstyled text-right pr-2 py-2 list-categories1 border shadow bg-white rounded">
                                        <a href=""> <li class="list-item text-right"> تست ۱ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۲ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۳ </li></a>
                                        <a href=""><li class="list-item text-right"> تست ۴ </li></a>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </nav>
                    <form action="" class="form-group form-inline mr-auto my-0 d-flex align-items-center float-left">
                        <button class="form-control btn btn-primary ml-3"> ثبت نام </button>
                        <a href="#"> ورود <i class="fas fa-angle-down mr-1"></i> </a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</header>
