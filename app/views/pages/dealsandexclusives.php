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
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URLROOT.'home/locations'?>">LOCATIONS</a>
                        </li>
                        <li class="nav-item active">
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


    <div id="dealsandexclusives" class="detected-windows"><section id="deals" class="location-bg"><div class="container"><div class="border-top title-border"><div class="row"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 title"><h3 class="mod_header title">DEALS &amp; EXCLUSIVES</h3> <a href="/" class="breadcrumb-link d-none d-md-block">Home  </a> <p class="breadcrumb-active d-none d-md-block">  / DEALS &amp; EXCLUSIVES</p></div></div></div></div></section> <section id="deals"><div class="container deals-page"><div class="row bg"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-5 d-block d-md-none"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/buy-one-ticket-and-get-50-off-on-the-second-ticket" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/69cd4d3f-6d44-4a72-844f-8da3df6bd7c7.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <!----> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-7 text-box"><div class="dealsDetail"><h3 class="gridTitle">Buy one ticket and get 50% off on the second ticket</h3> <div class="desc"><p class="decs-2"></p></div> <div class="linkWrap"><a href="/deals-and-exclusives/buy-one-ticket-and-get-50-off-on-the-second-ticket" id="text" class="btn-linked ">More Info<div class="bord"></div></a></div></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 d-none d-md-block img-box"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/buy-one-ticket-and-get-50-off-on-the-second-ticket" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/69cd4d3f-6d44-4a72-844f-8da3df6bd7c7.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div></div><div class="row bg"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-5 d-block d-md-none"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/more-rewards-for-our-loyal-scope-privilege-members" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/ad30ea28-7353-4280-a383-fcd641738b86.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 d-none d-md-block img-box"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/more-rewards-for-our-loyal-scope-privilege-members" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/ad30ea28-7353-4280-a383-fcd641738b86.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-7 text-box"><div class="dealsDetail"><h3 class="gridTitle">More rewards for our loyal Scope privilege members!</h3> <div class="desc"><p class="decs-2"></p></div> <div class="linkWrap"><a href="/deals-and-exclusives/more-rewards-for-our-loyal-scope-privilege-members" id="text" class="btn-linked ">More Info<div class="bord"></div></a></div></div></div> <!----></div><div class="row bg"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-5 d-block d-md-none"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/win-official-minions-merch-when-you-watch-minions-the-rise-of-gru" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/039096b4-e3e0-47a0-b744-cc30a2ea75f0.png" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <!----> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-7 text-box"><div class="dealsDetail"><h3 class="gridTitle">Win Official Minions Merch When You Watch Minions: The Rise of Gru</h3> <div class="desc"><p class="decs-2"></p></div> <div class="linkWrap"><a href="/deals-and-exclusives/win-official-minions-merch-when-you-watch-minions-the-rise-of-gru" id="text" class="btn-linked ">More Info<div class="bord"></div></a></div></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 d-none d-md-block img-box"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/win-official-minions-merch-when-you-watch-minions-the-rise-of-gru" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/039096b4-e3e0-47a0-b744-cc30a2ea75f0.png" alt="offers" id="image" class="img-fluid deal-image"></a></div></div></div><div class="row bg"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-5 d-block d-md-none"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/super-pets-activity-book-promotion" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/365525cd-dfbe-47f2-bc0a-e685c2af96c7.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 d-none d-md-block img-box"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/super-pets-activity-book-promotion" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/365525cd-dfbe-47f2-bc0a-e685c2af96c7.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-7 text-box"><div class="dealsDetail"><h3 class="gridTitle">Get Your Limited Edition Activity Book!</h3> <div class="desc"><p class="decs-2"></p></div> <div class="linkWrap"><a href="/deals-and-exclusives/super-pets-activity-book-promotion" id="text" class="btn-linked ">More Info<div class="bord"></div></a></div></div></div> <!----></div><div class="row bg"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-5 d-block d-md-none"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/fomo-is-real-don-t-miss-out-on-all-the-exciting-offers-at-scope-cinemas-this-april" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/b12e41d4-4839-46b0-8e90-c85513318247.png" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <!----> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-7 text-box"><div class="dealsDetail"><h3 class="gridTitle">FOMO is real ! Don’t miss out on all the exciting offers at Scope Cinemas</h3> <div class="desc"><p class="decs-2"></p></div> <div class="linkWrap"><a href="/deals-and-exclusives/fomo-is-real-don-t-miss-out-on-all-the-exciting-offers-at-scope-cinemas-this-april" id="text" class="btn-linked ">More Info<div class="bord"></div></a></div></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 d-none d-md-block img-box"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/fomo-is-real-don-t-miss-out-on-all-the-exciting-offers-at-scope-cinemas-this-april" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/b12e41d4-4839-46b0-8e90-c85513318247.png" alt="offers" id="image" class="img-fluid deal-image"></a></div></div></div><div class="row bg"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-5 d-block d-md-none"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/enjoy-50-off-on-hot-kitchen-items-with-solo" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/b350a62f-8f76-4404-aaaa-4cb8f602554c.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 d-none d-md-block img-box"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/enjoy-50-off-on-hot-kitchen-items-with-solo" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/b350a62f-8f76-4404-aaaa-4cb8f602554c.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-7 text-box"><div class="dealsDetail"><h3 class="gridTitle">Enjoy 50% off on Hot Kitchen Items with SOLO!</h3> <div class="desc"><p class="decs-2"></p></div> <div class="linkWrap"><a href="/deals-and-exclusives/enjoy-50-off-on-hot-kitchen-items-with-solo" id="text" class="btn-linked ">More Info<div class="bord"></div></a></div></div></div> <!----></div><div class="row bg"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-5 d-block d-md-none"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/25-off-on-food-items-for-all-members" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/6e42b921-cfcf-41db-b86c-9a7e7fc21801.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <!----> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-7 text-box"><div class="dealsDetail"><h3 class="gridTitle">25% OFF ON HOT KITCHEN ITEMS DEAL</h3> <div class="desc"><p class="decs-2"></p></div> <div class="linkWrap"><a href="/deals-and-exclusives/25-off-on-food-items-for-all-members" id="text" class="btn-linked ">More Info<div class="bord"></div></a></div></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 d-none d-md-block img-box"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/25-off-on-food-items-for-all-members" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/6e42b921-cfcf-41db-b86c-9a7e7fc21801.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div></div><div class="row bg"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-5 d-block d-md-none"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/5-off-survey-deal" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/8e8210c7-6a27-4c61-8f3e-11d93b5615fa.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 d-none d-md-block img-box"><div class="dealsBannerWrap"><a href="/deals-and-exclusives/5-off-survey-deal" class="dealsBanner"><img src="https://theatersollution.s3.amazonaws.com/8e8210c7-6a27-4c61-8f3e-11d93b5615fa.jpg" alt="offers" id="image" class="img-fluid deal-image"></a></div></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-7 text-box"><div class="dealsDetail"><h3 class="gridTitle">5% OFF SURVEY DEAL</h3> <div class="desc"><p class="decs-2"></p></div> <div class="linkWrap"><a href="/deals-and-exclusives/5-off-survey-deal" id="text" class="btn-linked ">More Info<div class="bord"></div></a></div></div></div> <!----></div></div></section></div>


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