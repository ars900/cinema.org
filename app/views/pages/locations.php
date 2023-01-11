<body class = "detected-windows">
<div id="page-wrap">

    <!-- ============================== MAIN MENU ============================= -->
    <section id="main-menu">
        <div class="navigation-wrap start-header start-style fixed-top scroll scrolled-nav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/"><img src="<?= URLROOT.'app/views/pages/img/scope-cinemas-logo.svg'?>" class="img-fluid main-logo" alt="Scope Cinemas"></a>

                <a class="loyalty-link d-none d-lg-block" href="/loyalty-program"><span>Sign in</span><br>SCOPE PRIVILEGE</a>


                <div class="subMenuMobileHeader d-block d-lg-none">
                    <div class="subMenuAll">
                        <ul class="subMenuUl">
                            <li class="indMenu">
                                <a href="/buy-tickets-online" class="subMenuLink"><span class="subMenuText">Buy Tickets</span></a>
                            </li>
                            <li>
                                <a href="/user-login" class="subMenuLink subMenuLogin"><span class="subMenuIcon mobileLoginMenu">Login</span></a>
                            </li>
                        </ul>
                    </div>
                </div>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URLROOT.'home'?>">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URLROOT.'home/movies'?>">MOVIES</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= URLROOT.'home/locations'?>">LOCATIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URLROOT.'home/dealsandexclusives'?>">DEALS AND EXCLUSIVES</a>
                        </li>
                        <li class="nav-item d-block d-lg-none ">
                            <a class="nav-link" href="/loyalty-program">SCOPE PRIVILEGE</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= URLROOT.'home/advertise'?>">ADVERTISE</a>
                        </li>
                        <!-- <li class="nav-item ">
                          <a class="nav-link" href="/food-and-beverage">Food & Beverage</a>
                        </li> -->
                    </ul>
                    <div class = "me-5 text-light"><?= (get_session('user') != null) ? get_session('user')['name'].' '.get_session('user')['surname'] : ''; ?></div>
                </div>


                <div class="me-5">
                    <a href = "<?= URLROOT.'users/logout' ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" id = "exit" class="pointer text-light bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
    </section>


    <!----------Page Loader------ -->
    <div class="mobNavOverlay"></div>

    <div class="pageLoaderAjax">
        <div class="loaderCont">
            <div class="loaderWrap">
                <div class="logoWrap">
                    <div class="logoWrap">
                        <div class=" main-text skew">
                            <img width="80px" src="<?= URLROOT.'app/views/pages/img/scope-cinemas-logo-w.png'?>" alt="" class="logo">
                            <span class="back-text glitch"><img width="80px" src="<?= URLROOT.'app/views/pages/img/scope-cinemas-logo-w.png'?>" alt="" class="logo"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------Page Loader------ -->


    <!-- Alert if email has not been confirmed -->


    <div id="locations" class="detected-windows"><section id="locations" class="location-bg"><div class="container"><div class="border-top title-border"><div class="row"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 title"><h3 class="mod_header title">LOCATIONS</h3> <a href="/" class="breadcrumb-link d-none d-md-block">Home  </a> <p class="breadcrumb-active d-none d-md-block">  / LOCATIONS</p></div></div></div></div></section> <section id="locations"><div class="container"><div class="row locationn-row"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><div class="row"><div class="col-md-12 col-12"><p class="location-name">Liberty By Scope Cinemas</p></div> <div class="col-md-12 col-5"><div class="location-img-exp"><img src="https://theatersollution.s3.amazonaws.com/17d0d2b3-02c3-4fe3-9c0d-8b16241480ae.jpg" alt="location" class="img-fluid location-image"> <div class=" d-none d-md-block"><div class="expList"><!----> <!----> <img src="<?= URLROOT.'app/views/pages/img/digital_3d.png' ?>" alt="digital 3d" class="img-fluid exp-img"> <img src="<?= URLROOT.'app/views/pages/img/web_digital2d.png' ?>" alt="digital 2d" class="img-fluid exp-img"> <img src="<?= URLROOT.'app/views/pages/img/7_1_–_1.png' ?>" alt="7_1" class="img-fluid exp-img"> <img src="<?= URLROOT.'app/views/pages/img/5_1_–_1.png' ?>" alt="5_1" class="img-fluid exp-img"></div></div></div></div> <div class="col-md-12 col-7"><div class=" d-block d-md-none"><!----> <!----> <img src="img/digital_3d.png" alt="digital 3d" class="img-fluid exp-img"> <img src="img/web_digital2d.png" alt="digital 2d" class="img-fluid exp-img"> <img src="/img/7_1_–_1.png" alt="7_1" class="img-fluid exp-img"> <img src="/img/5_1_–_1.png" alt="5_1" class="img-fluid exp-img"></div> <div class="location-btn-div"><a href="/location/liberty-by-scope-cinemas" class="view-location-btn">view location</a></div></div></div></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><div class="row"><div class="col-md-12 col-12"><p class="location-name">Colombo City Centre</p></div> <div class="col-md-12 col-5"><div class="location-img-exp"><img src="https://theatersollution.s3.amazonaws.com/c615697a-fd01-48bf-b40b-4067badf0189.jpeg" alt="location" class="img-fluid location-image"> <div class=" d-none d-md-block"><div class="expList"><img src="<?= URLROOT.'app/views/pages/img/web_goldclass.png' ?>" alt="goldclass" class="img-fluid exp-img"> <img src="<?= URLROOT.'app/views/pages/img/dolby-atmos.png' ?>" alt="dolby atmos" class="img-fluid exp-img"> <img src="<?= URLROOT.'app/views/pages/img/digital_3d.png' ?>" alt="digital 3d" class="img-fluid exp-img"> <img src="<?= URLROOT.'app/views/pages/img/web_digital2d.png' ?>" alt="digital 2d" class="img-fluid exp-img"> <img src="<?= URLROOT.'app/views/pages/img/7_1_–_1.png' ?>" alt="7_1" class="img-fluid exp-img"> <img src="<?= URLROOT.'app/views/pages/img/5_1_–_1.png' ?>" alt="5_1" class="img-fluid exp-img"></div></div></div></div> <div class="col-md-12 col-7"><div class=" d-block d-md-none"><img src="img/web_goldclass.png" alt="goldclass" class="img-fluid exp-img"> <img src="img/dolby-atmos.png" alt="dolby atmos" class="img-fluid exp-img"> <img src="<?= URLROOT.'app/views/pages/img/digital_3d.png' ?>" alt="digital 3d" class="img-fluid exp-img"> <img src="img/web_digital2d.png" alt="digital 2d" class="img-fluid exp-img"> <img src="/img/7_1_–_1.png" alt="7_1" class="img-fluid exp-img"> <img src="/img/5_1_–_1.png" alt="5_1" class="img-fluid exp-img"></div> <div class="location-btn-div"><a href="/location/colombo-city-centre" class="view-location-btn">view location</a></div></div></div></div></div></div></section> <section id="comming-soon" class="d-none d-md-block"><div class="container-fluid"><div class="row"><div class="container"><div class="row"><div class="col-md-12"><div class="secTitleWrap"><h3 class="mod_header">NOW SHOWING</h3> <div class="customNavigation"><a class="btn prev"></a> <a class="btn next"></a></div></div></div></div></div> <div id="owl-demo" class="owl-carousel comming-soon-slider owl-theme owl-loaded owl-drag"><div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0s ease 0s; width: 6332px; transform: translate3d(-1079px, 0px, 0px);"><div class="owl-item cloned" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/elvis"><img src="https://theatersollution.s3.amazonaws.com/9da77425-1b21-4643-b1a8-1b265539c3f7.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/elvis"><p class="movie-name">ELVIS</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/6260d7865786710017132436" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/elvis" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item cloned" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/minions-the-rise-of-guru"><img src="https://theatersollution.s3.amazonaws.com/95699c8d-ac7b-4606-be43-2e3970509642.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/minions-the-rise-of-guru"><p class="movie-name">MINIONS : THE RISE OF GRU</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/60890437513f7e0016f84e90" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/minions-the-rise-of-guru" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item cloned" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/dc-league-of-super-pets"><img src="https://theatersollution.s3.amazonaws.com/ff6adad9-d7f2-423b-9890-ce5014c0fbfe.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/dc-league-of-super-pets"><p class="movie-name">DC LEAGUE OF SUPER-PETS</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/620dde8ee080a00017a8911b" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/dc-league-of-super-pets" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item cloned" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/paws-of-fury-the-legend-of-hank"><img src="https://theatersollution.s3.amazonaws.com/420c8f7f-1067-4de3-b1e3-b3f1af2cf04e.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/paws-of-fury-the-legend-of-hank"><p class="movie-name">PAWS OF FURY: THE LEGEND OF HANK</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/62a9995189e6f90017ca8371" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/paws-of-fury-the-legend-of-hank" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item cloned active" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/the-game"><img src="https://theatersollution.s3.amazonaws.com/abde1e4e-9fc2-4ee2-819c-3562c65039f4.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/the-game"><p class="movie-name">THE GAME</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/62692db584036e001702f4d0" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/the-game" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item cloned active" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/kuruthi-aattam"><img src="https://theatersollution.s3.amazonaws.com/44a96416-0f04-4d1b-83f3-752e29eddc14.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/kuruthi-aattam"><p class="movie-name">KURUTHI AATTAM</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/62e8a3b25ccc0f0017a5689e" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/kuruthi-aattam" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item active center" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/thor-love-and-thunder"><img src="https://theatersollution.s3.amazonaws.com/608a4136-5dea-4ae2-9beb-afd5fe43b25f.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/thor-love-and-thunder"><p class="movie-name">THOR: LOVE AND THUNDER</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/6260ea735786710017132475" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/thor-love-and-thunder" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item active" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/jurassic-world-dominion"><img src="https://theatersollution.s3.amazonaws.com/355a1274-5998-42e2-a134-433506068d71.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/jurassic-world-dominion"><p class="movie-name">JURASSIC WORLD DOMINION</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/622f0fa61d555400177ce251" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/jurassic-world-dominion" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item active" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/top-gun-maverick"><img src="https://theatersollution.s3.amazonaws.com/446460e0-09af-4aa2-a3fe-b685f3158b4a.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/top-gun-maverick"><p class="movie-name">TOP GUN: MAVERICK</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/6215f3328ce83300174d8109" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/top-gun-maverick" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item active" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/bullet-train"><img src="https://theatersollution.s3.amazonaws.com/d6acdbdc-c3f9-4075-acb6-9033dc2d4c91.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/bullet-train"><p class="movie-name">BULLET TRAIN</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/6278a6bd58f3a40017b337bb" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/bullet-train" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/elvis"><img src="https://theatersollution.s3.amazonaws.com/9da77425-1b21-4643-b1a8-1b265539c3f7.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/elvis"><p class="movie-name">ELVIS</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/6260d7865786710017132436" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/elvis" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/minions-the-rise-of-guru"><img src="https://theatersollution.s3.amazonaws.com/95699c8d-ac7b-4606-be43-2e3970509642.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/minions-the-rise-of-guru"><p class="movie-name">MINIONS : THE RISE OF GRU</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/60890437513f7e0016f84e90" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/minions-the-rise-of-guru" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/dc-league-of-super-pets"><img src="https://theatersollution.s3.amazonaws.com/ff6adad9-d7f2-423b-9890-ce5014c0fbfe.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/dc-league-of-super-pets"><p class="movie-name">DC LEAGUE OF SUPER-PETS</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/620dde8ee080a00017a8911b" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/dc-league-of-super-pets" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/paws-of-fury-the-legend-of-hank"><img src="https://theatersollution.s3.amazonaws.com/420c8f7f-1067-4de3-b1e3-b3f1af2cf04e.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/paws-of-fury-the-legend-of-hank"><p class="movie-name">PAWS OF FURY: THE LEGEND OF HANK</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/62a9995189e6f90017ca8371" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/paws-of-fury-the-legend-of-hank" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/the-game"><img src="https://theatersollution.s3.amazonaws.com/abde1e4e-9fc2-4ee2-819c-3562c65039f4.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/the-game"><p class="movie-name">THE GAME</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/62692db584036e001702f4d0" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/the-game" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/kuruthi-aattam"><img src="https://theatersollution.s3.amazonaws.com/44a96416-0f04-4d1b-83f3-752e29eddc14.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/kuruthi-aattam"><p class="movie-name">KURUTHI AATTAM</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/62e8a3b25ccc0f0017a5689e" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/kuruthi-aattam" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item cloned" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/thor-love-and-thunder"><img src="https://theatersollution.s3.amazonaws.com/608a4136-5dea-4ae2-9beb-afd5fe43b25f.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/thor-love-and-thunder"><p class="movie-name">THOR: LOVE AND THUNDER</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/6260ea735786710017132475" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/thor-love-and-thunder" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item cloned" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/jurassic-world-dominion"><img src="https://theatersollution.s3.amazonaws.com/355a1274-5998-42e2-a134-433506068d71.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/jurassic-world-dominion"><p class="movie-name">JURASSIC WORLD DOMINION</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/622f0fa61d555400177ce251" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/jurassic-world-dominion" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item cloned" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/top-gun-maverick"><img src="https://theatersollution.s3.amazonaws.com/446460e0-09af-4aa2-a3fe-b685f3158b4a.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/top-gun-maverick"><p class="movie-name">TOP GUN: MAVERICK</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/6215f3328ce83300174d8109" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/top-gun-maverick" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item cloned" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/bullet-train"><img src="https://theatersollution.s3.amazonaws.com/d6acdbdc-c3f9-4075-acb6-9033dc2d4c91.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/bullet-train"><p class="movie-name">BULLET TRAIN</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/6278a6bd58f3a40017b337bb" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/bullet-train" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item cloned" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/elvis"><img src="https://theatersollution.s3.amazonaws.com/9da77425-1b21-4643-b1a8-1b265539c3f7.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/elvis"><p class="movie-name">ELVIS</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/6260d7865786710017132436" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/elvis" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div><div class="owl-item cloned" style="width: 287.818px;"><div class="item dark-bg"><div class="img-box"><a href="/movie/minions-the-rise-of-guru"><img src="https://theatersollution.s3.amazonaws.com/95699c8d-ac7b-4606-be43-2e3970509642.jpg" alt="now showing movies" class="img-fluid poster-image"></a></div> <div class="movie-caption"><a href="/movie/minions-the-rise-of-guru"><p class="movie-name">MINIONS : THE RISE OF GRU</p></a> <p class="movie-date"> Now Screening </p> <div class="header-btn"><a href="/buy-tickets-online/60890437513f7e0016f84e90" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p> <div class="bord"></div></a> <a href="#" data-toggle="modal" data-target="#videoModal" class=" watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p> <div class="bord"></div></a> <a href="/movie/minions-the-rise-of-guru" class=" more-info"><p class="site-btns">more <br> <b>info</b></p> <div class="bord"></div></a></div></div></div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div></div></div></section> <section id="trailer"><div id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal wow zoomIn"><div role="document" class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button></div> <div class="modal-body"><div class="embed-responsive embed-responsive-16by9"><iframe id="movieVideo" src="" class="embed-responsive-item"></iframe></div></div></div></div></div></section></div>

    <!-- ============================ FOOTER SECTION =========================== -->
    <!-- ============================ FOOTER SECTION =========================== -->
    <footer class="footer">
        <div class="container footerMain">
            <div class="row no-gutters">
                <div class="col-12 col-lg-4 order-lg-2 footerGridWrap partnerGridWrap">
                    <div class="footerPartners">
                        <div class="partnerGrid store-link">
                            <p class="text-white">Find us on app store and google play</p>
                            <div class="d-flex">
                                <a href="https://apps.apple.com/lk/app/scope-cinemas-buy-tickets/id1236478837" target="_blank" class="mr-3"><img src="<?= URLROOT.'app/views/pages/img/apple-store.png'?>" class="img-fluid " alt="Scope cinema App from apple store"></a>
                                <a href="https://play.google.com/store/apps/details?id=cinema.com.scope&amp;hl=en&amp;gl=US" target="_blank"><img src="<?= URLROOT.'app/views/pages/img/playstore.png'?>" class="img-fluid" alt="Scope cinema App from playstore"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 order-lg-1 footerGridWrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="footerGrid">
                                <ul class="list-unstyled footerLinks navLinks">
                                    <li class=""><a title="" href="/">HOME</a></li>

                                    <li class=""><a title="" href="/movies">MOVIES</a></li>
                                    <li class=""><a title="" href="/locations">LOCATIONS</a></li>
                                    <li class=""><a title="" href="/deals-and-exclusives">DEALS AND EXCLUSIVES</a></li>
                                    <li class=""><a title="" href="/advertise">ADVERTISE</a></li>
                                    <li class=""><a title="" href="/about-us">ABOUT US</a></li>
                                </ul>
                                <ul class="list-unstyled footerLinks navLinks">
                                    <li class=""><a title="" href="/careers">CAREERS</a></li>

                                    <li class=""><a title="" href="/contact-us">CONTACT US</a></li>

                                    <li class=""><a title="" href="/events">EVENTS</a></li>

                                    <li class=""><a title="" href="/disclaimer">DISCLAIMER</a></li>

                                    <li class=""><a title="" href="/terms-and-conditions">TERMS AND CONDITIONS</a></li>
                                </ul>
                                <ul class="list-unstyled footerLinks socialLinks">
                                    <li><a target="_blank" href="#" class="facebook"></a></li>
                                    <li><a target="_blank" href="#" class="instragram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 ">
                            <form class="subscribe">
                                <div id="success" class="text-success pb-2"></div>
                                <div class="input-group">
                                    <label class="subscribe" for="exampleFormControlSelect1">SUBSCRIBE FOR NEWSLETTER</label>
                                    <input class="email" name="email" id="subscriber" type="email" placeholder="Enter Email" required="">
                                    <div id="error" class="text-danger"></div>
                                </div>

                                <div class="submit-btn">
                                    <button class="btn" id="subscribe" type="button">
                                        <div class="bord subscribe"></div>Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 footerBaseline">
                            <div class="copyright">
                                <span class="copy">©2022 Scope Cinemas All Right Reserved. Developed by <a href="https://archmage.lk/" target="_blank">Archmage Solutions</a>.</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>