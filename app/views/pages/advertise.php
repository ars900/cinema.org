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
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URLROOT.'home/dealsandexclusives'?>">DEALS AND EXCLUSIVES</a>
                        </li>
                        <li class="nav-item d-block d-lg-none ">
                            <a class="nav-link" href="/loyalty-program">SCOPE PRIVILEGE</a>
                        </li>
                        <li class="nav-item active">
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


    <div id="advertise" class="detected-windows"><section id="advertise-section" class="location-bg"><div class="container"><div class="border-top title-border"><div class="row"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 title"><h3 class="mod_header title">ADVERTISE</h3> <a href="/" class="breadcrumb-link d-none d-md-block">Home  </a> <p class="breadcrumb-active d-none d-md-block">  / ADVERTISE</p></div></div></div></div></section> <section id="advertise-section"><div class="container"><div class="row exp-bg-row"><div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 "><div class="exp-image-div"><img src="https://theatersollution.s3.amazonaws.com/0d105f28-0ab9-4e90-aaf9-314cd044297a.jpg" alt="advertise" class="img-fluid exp-image"></div></div> <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 "><div class="advertise-details"><p class="advertise-title">COLOMBO CITY CENTRE</p> <p><p>The Multiplex Cinema operated by Scope cinemas is Sri Lanka’s premier entertainment destination for global blockbusters.
                                6 screens powered by the latest Dolby Atmos sound system and equipment, the multiplex is designed to provide an experience on par with some the of the world’s best cinemas right here in the heart of Colombo city.</p><p><br></p>
                            <p>Total seating capacity over 700 means the multiplex will be screening 30 showtimes per day and will have special screening of films before the world-wide release.
                                Also, the cinema is equipped with a 22 seats VIP theater where we provide a world class cinema experience.</p></p></div></div></div><div class="row exp-bg-row"><div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 "><div class="exp-image-div"><img src="https://theatersollution.s3.amazonaws.com/bf68e52b-237e-41ae-99e9-50772b2d18c9.jpg" alt="advertise" class="img-fluid exp-image"></div></div> <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 "><div class="advertise-details"><p class="advertise-title">LIBERTY BY SCOPE CINEMAS</p> <p><p>Dedicated toward raising the bar in Sri Lanka’s cinema experience, Scope Cinemas aims to provide our patrons with all the flare of old-school movie theaters, coupled with state-of-the-art modernity and comfort, consistent with international standards.</p><p><br></p>
                            <p>From the box office toppers that we’ll be airing throughout the year, to the handpicked f &amp; b brands, right down to the uber comfy seating – Scope Cinemas is fast-tracking the future of Sri Lanka’s cinema sphere</p></p></div></div></div> <div class="row locations-div"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><p class="advertise-title">LOCATIONS</p></div> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6"><div class="adv-image-div"><img src="https://theatersollution.s3.amazonaws.com/17d0d2b3-02c3-4fe3-9c0d-8b16241480ae.jpg" alt="locations" class="img-fluid exp-image"></div> <div class="location-div"><img src="https://theatersollution.s3.amazonaws.com/903cc52a-f7eb-496f-bfb3-a3cd62733416.png" alt="locations" class="img-fluid" style="width: 150px;"> <p class="location-name">Liberty By Scope Cinemas</p></div></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6"><div class="adv-image-div"><img src="https://theatersollution.s3.amazonaws.com/c615697a-fd01-48bf-b40b-4067badf0189.jpeg" alt="locations" class="img-fluid exp-image"></div> <div class="location-div"><img src="https://theatersollution.s3.amazonaws.com/f596a5e6-5da5-4f75-9d79-5e93e4a0101c.png" alt="locations" class="img-fluid" style="width: 150px;"> <p class="location-name">Colombo City Centre</p></div></div></div> <hr> <div class="row"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><p class="advertise-title">WHY SHOULD YOU SELECT SCOPE CINEMAS FOR ADVERTISING</p> <p>Scope cinemas report over 90,000 patrons every month and with advertising at Scope cinemas you would have the highest coverage for your product or service. The investment of yours would have the lowest cost per head. The target audience of your product or service is mutual.
                            <br><br>We would ensure your product or service would reach the highest active audience and the message would be directly witness and heard without any interuption. Cinema advertisng have proved is the best media from every available to provide the message directly and correctly to the public. Please contact our expert marketing managers today and see the results for your self. Scope cinemas also offer for private screenings for your next corporate or personal gathering, please speak to our marketing managers for more details.
                            <br><br>Advertising rates and details please contact the below.
                            <br><br>Mr. Jayarathne Galagedera - 0711200220
                        </p></div> <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><div class="inquire"><div class="inq-btn-div"><div class="infoText">Want to get in touch with us</div> <a href="#eventPopUpForm" data-toggle="modal" data-target="#exampleModal" class="inquire-btn">Inquire Now</a></div></div></div></div></div> <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg"><div role="document" class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><!----> <!----> <form class="ajax-form" parasails-component="ajax-form"><div class="row"><div class="form-group col-md-6"><label for="exampleInputName">Name</label> <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control"> <!----></div> <div class="form-group col-md-6"><label for="exampleInputCompany">Company / Group</label> <input type="text" id="company" name="company" placeholder="Enter your company" class="form-control"> <!----></div> <div class="form-group col-md-6"><label for="exampleInputEmail">Email</label> <input type="email" id="email1" name="email" placeholder="Ex: email@email.com" class="form-control"> <!----></div> <div class="form-group col-md-6"><label for="exampleInputPhone">Contact No</label> <input type="text" id="contactNumber" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Ex: 0xxxxxxxxx" class="form-control"> <!----></div> <div class="form-group col-md-12"><label for="exampleFormControlTextarea1">Detail of the Gathering</label> <textarea id="exampleFormControlTextarea1" rows="5" placeholder="Comment" class="form-control"></textarea> <!----></div> <div class="form-group col-md-12"><label for="captcha" class="col-field-label">Captcha</label> <div class="fieldWrapper"><div data-sitekey="6LcH0uIUAAAAAC4MLviNFCJmicWki_wzw3Iyad8N" class="g-recaptcha"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcH0uIUAAAAAC4MLviNFCJmicWki_wzw3Iyad8N&amp;co=aHR0cHM6Ly93d3cuc2NvcGVjaW5lbWFzLmNvbTo0NDM.&amp;hl=en&amp;v=gWN_U6xTIPevg0vuq7g1hct0&amp;size=normal&amp;cb=mwh44iq0vg84" width="304" height="78" role="presentation" name="a-38p8cwg4rjjr" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div> <div class="error recaptcahValidate"></div></div> <!----></div></div> <button type="submit" class="btn ajax-button btn btn-primary" parasails-component="ajax-button"><span class="button-text">Submit</span> <!----></button></form></div></div></div></div></section></div>

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