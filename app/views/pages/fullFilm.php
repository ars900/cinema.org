<div id="page-wrap">
    <!-- ============================== MAIN MENU ============================= -->
    <section id="main-menu">
        <div class="navigation-wrap start-header start-style fixed-top scroll scrolled-nav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/"><img src="<?= URLROOT."app/views/pages/img/scope-cinemas-logo-w.png"?>" class="img-fluid main-logo" alt="Scope Cinemas"></a>

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
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= URLROOT.'home' ?>">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URLROOT.'home/movies' ?>">MOVIES</a>
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
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= URLROOT.'home/advertise'?>">ADVERTISE</a>
                        </li>
                        <!-- <li class="nav-item ">
                          <a class="nav-link" href="/food-and-beverage">Food & Beverage</a>
                        </li> -->
                    </ul>
                    <div class="me-5 text-light"><?= (get_session('user') != null) ? get_session('user')['name'].' '.get_session('user')['surname'] : ''; ?></div>
                </div>


                <div class="me-5">
                    <a href="http://cinema.org/users/logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" id="exit" class="pointer text-light bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"></path>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"></path>
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
                            <img width="80px" src="<?= URLROOT."app/views/pages/img/scope-cinemas-logo-w.png"?>" alt="" class="logo">
                            <span class="back-text glitch"><img width="80px" src="<?= URLROOT."app/views/pages/img/scope-cinemas-logo-w.png"?>" alt="" class="logo"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------Page Loader------ -->


    <!-- Alert if email has not been confirmed -->


    <div id="singlemovie" class="detected-windows">
        <section id="single-movie-banner">
            <div class="innerHeader">
                <div class="bannerCont ">
                    <?php if(isset($data)) { ?>
                    <div class="bannerWrap"><div class="bannerImg" style="background-image: url(<?= URLROOT.'public/admin/main/films/'.$data['film_img']?>);"></div>
                        <div class="gradientOverlay"></div>
                        <div class="innerBannerCaption">
                            <div class="captionCont bannerCaption ">
                                <div class="captionWrap">
                                    <div class="caption">
                                        <div class="topCap">NOW SHOWING AT SCOPE CINEMAS</div>
                                        <h2 class="capTitle"><?= $data['film_name']?></h2>
                                        <div class="movieDetail"><div class="duration"><?= $data['film_duration'].' min'?></div>
                                            <div class="imdbCont"><span class="text">IMDB Rating</span> <span class="imdbVal">7.5/10</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-btn"><a href="/buy-tickets-online/6278a6bd58f3a40017b337bb" class="buy-tickets"><p class="site-btns"><b>Buy</b> Tickets <br> <b>Online</b></p>
                                        <div class="bord"></div>
                                    </a> <a href="https://www.youtube.com/watch?v=0IOsk2Vlc4o" target="”_blank”" class="buy-tickets watch-trailer"><p class="site-btns">watch <br> <b>trailer</b></p><div class="bord"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 title">
                        <h3 class="single-movie-detail-title">NOW SHOWING AT</h3><a href="/" class="breadcrumb-link single-movie-breadcrumb">Home </a>
                        <p class="breadcrumb-active single-movie-breadcrumb"> / Movies</p>
                    </div>
                </div>
                <div class=" exp-row">
                    <div class="theater-exp-div">
                        <div class="teater-name-logo">
                            <img src="https://theatersollution.s3.amazonaws.com/f596a5e6-5da5-4f75-9d79-5e93e4a0101c.png" alt="theater" class="img-fluid theater-logo" style="width: 150px;">
                            <p class="theater-name">Colombo City Centre</p>
                        </div>
                    </div>
                </div>
                <?php if(isset($data)) { ?>
                <div class="row pb-4">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <h3 class="mod_header">STORY LINE</h3>
                        <p class="movie-des">
                            <?= $data['film_desc']?>
                        </p> <div class="genres-div"><span class="genres">GENRES:</span> <span class="genres-item"><?= $data['film_genre']?></span></div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <h3 class="mod_header">TEAM</h3>
                        <table class="castListTable">
                            <tbody>
                                <tr>
                                    <td width="30%"><strong>Film date</strong></td>
                                    <td><span class="t-name"><?= $data['film_date']?></span></td>
                                </tr>
                                <tr>
                                    <td width="30%"><strong>Film country</strong></td>
                                    <td><span class="t-name"><?= $data['film_country']?></span></td>
                                </tr>
                                <tr>
                                    <td width="30%"><strong>Directed by</strong></td>
                                    <td><span class="t-name"><?= $data['film_director']?></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php } ?>

                <section style = "background: silver">
                    <h3 class = "mx-auto" style = "width: max-content;">Seats for sale</h3>
                      <?php if(isset($rows_and_seats) && isset($reserved_seats)){
                          /** All parameters are requested from the database **/
                          SeatsAndTheirStatuses($data['id'],$rows_and_seats,$reserved_seats);
                          //$data['id'] -- This is the movie id that gives the seat status
                          //$rows_and_seats -- Row and seat information
                          //$reserved_seats -- Data on reserved seats
                      }?>
                </section>
            </div>
        </section>


        <section id="trailer"><div id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal wow zoomIn"><div role="document" class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button></div> <div class="modal-body"><div class="embed-responsive embed-responsive-16by9"><iframe id="movieVideo" src="" class="embed-responsive-item"></iframe></div></div></div></div></div></section></div>
    <script type="text/javascript"> (function (){  var unescape = function unescapeHtmlEntitiesDeepLite(r){if("function"!=typeof Array.isArray||"function"!=typeof Array.prototype.forEach||"function"!=typeof Array.prototype.map||"function"!=typeof Object.keys)throw Error("Unsupported browser: Missing support for `Array.isArray`, `Array.prototype.forEach`, `Array.prototype.map`, or `Object.keys`!  (Sails' built-in HTML-unescaping for exposed locals supports IE9 and up.)");return function t(r){if(null===r)return r;if(r===!0||r===!1)return r;if("number"==typeof r)return r;if("string"==typeof r){var e=/&(?:amp|lt|gt|quot|#39|#96);/g,o=RegExp(e.source);if(""===r)return r;if(o.test(r)){var n={"&amp;":"&","&lt;":"<","&gt;":">","&quot;":'"',"&#39;":"'","&#96;":"`"};return r=r.replace(e,function(r){return n[r]})}return r}return Array.isArray(r)?r=r.map(function(r){return t(r)}):(Object.keys(r).forEach(function(e){r[e]=t(r[e],e)}),r)}(r)}; window.SAILS_LOCALS = { _csrf: unescape('LPBHteXh-ek1e8FDfM353nkBcfD9KUzYLz_8'),_environment: unescape('production'),movie: unescape({ theater:
                    [ { createdAt: 1587466624426,
                        updatedAt: 1638411719150,
                        id: '5e9ed1806a50920be5628e28',
                        name: 'Colombo City Centre',
                        screens:
                            [ { name: 'DOLBY ATMOS', id: '1' },
                                { name: 'SCREEN 02', id: '2' },
                                { name: 'GOLD CLASS', id: '3' } ],
                        slug: 'colombo-city-centre',
                        description: '&lt;div&gt;Scope Cinemas is the first and largest six screen multiplex in Sri Lanka that provides a world class cinematic experience for local cinemagoers. Equipped with state-of-the-art technology and facilities, in 2018 the multiplex opened its doors to movie buffs and cinephiles of all ages at the Colombo City Centre.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;The multiplex features 700 seats divided between six screens with 4K projection technology and the latest Dolby Atmos Surround Sound Systems, ensuring a state-of-the-art experience &amp;amp; befitting of the International standards that the Colombo City Centre operates on. The scales of the multiplex enable the screening of at least 30 interval-free movies per day and also leverage Scope Cinemas &amp;amp; international partnerships to host exclusive screenings of highly-anticipated movies, giving Sri Lankans the opportunity to enjoy global blockbusters a day before their worldwide premieres.&lt;/div&gt;',
                        experiences: '&lt;!-- *******Large screen******* --&gt;\n&lt;div class=&quot;d-none d-md-block&quot;&gt;\n    &lt;div class=&quot;row exp-bg-row&quot;&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-7&quot;&gt;\n            &lt;div class=&quot;expList pb-2&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/196a1eba-d180-4d9a-b89f-689fd47ba7b1.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/a93d1549-877c-48cf-b2a8-7828db070be7.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n            &lt;p class=&quot;theater-exp-des&quot;&gt;\n                Dolby Atmos is one of the latest ways to get surrounded by sound - now from above! This surround sound technology by Dolby Laboratories was first introduced to Sri Lanka by Scope Cinemas! Sound moves around you in\n                three-dimensional space, so you feel like you&#39;re inside the action. Experience how Dolby Atmos transports you from the ordinary into the extraordinary.&lt;br&gt;\n                &lt;br&gt;\n                Dolby Atmos technology advances the science of sight and sound to create and enable spectacular experiences. Dolby Atmos screen offers sound to move above you to experience the real roaming of a helicopter above you or an\n                alien emerging from the depths of the ocean!&lt;br&gt;\n                &lt;br&gt;\n                Dolby Atmos Cinema at Scope Cinemas - CCC offers a range of cinematic experiences such as 2D &amp;amp; 3D subjected to the format of the movie.\n            &lt;/p&gt;\n            &lt;p&gt;&lt;/p&gt;\n        &lt;/div&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-5&quot;&gt;\n            &lt;div class=&quot;exp-image-div&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/8e8114a3-cd2a-4a72-9670-389c32125bae.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n\n    &lt;div class=&quot;row exp-bg-row&quot;&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6&quot;&gt;\n            &lt;div class=&quot;exp-image-div&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/8e8114a3-cd2a-4a72-9670-389c32125bae.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6&quot;&gt;\n            &lt;div class=&quot;expList pb-2&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/196a1eba-d180-4d9a-b89f-689fd47ba7b1.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n            &lt;p class=&quot;theater-exp-des&quot;&gt;\n                Screen numbers 2 and 4 at the Colombo City Centre multiplex by Scope Cinemas deliver an experience varying from 2D to 3D depending on the movie at offer! The core objective of Scope Cinemas is to bring in novel cinema\n                technologies to their patrons. These two screens offer Sri Lankan moviegoers a range of time slots that suits their convenience.\n            &lt;/p&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n\n   \n    &lt;div class=&quot;row exp-bg-row&quot;&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6&quot;&gt;\n            &lt;div class=&quot;expList pb-2&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/196a1eba-d180-4d9a-b89f-689fd47ba7b1.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n            &lt;p class=&quot;theater-exp-des&quot;&gt;\n                Screen numbers 2 and 4 at the Colombo City Centre multiplex by Scope Cinemas deliver an experience varying from 2D to 3D depending on the movie at offer! The core objective of Scope Cinemas is to bring in novel cinema\n                technologies to their patrons. These two screens offer Sri Lankan moviegoers a range of time slots that suits their convenience.\n            &lt;/p&gt;\n        &lt;/div&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6&quot;&gt;\n            &lt;div class=&quot;exp-image-div&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/5ab715a7-3a1b-4f1b-a1a9-7f55e23aa288.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n   \n    &lt;div class=&quot;row exp-bg-row&quot;&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6&quot;&gt;\n            &lt;div class=&quot;exp-image-div&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/605529d6-010c-432e-b556-dff6da32d6bf.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6&quot;&gt;\n            &lt;div class=&quot;expList pb-2&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n            &lt;p class=&quot;theater-exp-des&quot;&gt;\n                Don&#39;t like 3D? we got you covered! Scope Cinemas offers a variety of cinema experiences at its latest multiplex at the Colombo City Centre that delivers the most innovative cinematic experiences Sri Lankan filmgoers can ask for!\n                Screen numbers 5 &amp;amp; 6 are a couple of 2D cinema screens available at Scope Cinemas for those who&#39;d love to put those glasses behind while enjoying a movie the old school way!\n            &lt;/p&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n   \n    &lt;div class=&quot;row exp-bg-row&quot;&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6&quot;&gt;\n            &lt;div class=&quot;expList pb-2&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n            &lt;p class=&quot;theater-exp-des&quot;&gt;\n                Don&#39;t like 3D? we got you covered! Scope Cinemas offers a variety of cinema experiences at its latest multiplex at the Colombo City Centre that delivers the most innovative cinematic experiences Sri Lankan filmgoers can ask for!\n                Screen numbers 5 &amp;amp; 6 are a couple of 2D cinema screens available at Scope Cinemas for those who&#39;d love to put those glasses behind while enjoying a movie the old school way!\n            &lt;/p&gt;\n        &lt;/div&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6&quot;&gt;\n            &lt;div class=&quot;exp-image-div&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/b35d271f-1693-4a64-b91d-4cd7a42f9e55.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n   \n    &lt;div class=&quot;row exp-bg-row&quot;&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6&quot;&gt;\n            &lt;div class=&quot;exp-image-div&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/7e029128-8e96-4252-80aa-26bc25bb455b.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n        &lt;div class=&quot;col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6&quot;&gt;\n            &lt;div class=&quot;expList pb-2&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/196a1eba-d180-4d9a-b89f-689fd47ba7b1.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/4d20234e-2dc0-43b9-981b-cb9cabfd13b5.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n            &lt;p class=&quot;theater-exp-des&quot;&gt;\n                Scope Cinemasbr has introduced and set the gold standard for a luxurious cinema experience for Sri Lankan moviegoers for the first time in the island. At the Gold Class theatre at CCC, our patrons will be offered a range of VIP\n                benefits in unison with a luxurious cinema experience coupled with reclining seats and swing trays for your personalized selection of food! Simply place your order and we will serve you with your choice of delicacies at your\n                time of preference! Scope Cinemas is taking the Sri Lankan filmgoers in a whole new avenue by creating the space to celebrate your special events with your most awaited movie with the introduction of a VIP launge! May it be a\n                birthday, anniversary, a corporate event or even it could be the perfect location to propose your loved ones while taking them through a movie journey! We are here to make your special day an everlasting memory! Gold class\n                theatre at the Colombo City Centre would be the ideal locality for anyone looking out to host a private movie party! The private lobby will facilitate all your privacy needs and it&#39;s space of your own! Gold Class Theatre at\n                Scope Cinemas - CCC offers a range of cinematic experiences such as 2D &amp;amp; 3D too subjected to the format of the movie.\n            &lt;/p&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n   \n&lt;/div&gt;\n\n\n&lt;!-- *******Small screen******* --&gt;\n&lt;div class=&quot;d-block d-md-none&quot;&gt;\n    &lt;div class=&quot;row&quot;&gt;\n        &lt;div class=&quot;small-theater-exp&quot;&gt;\n            &lt;div class=&quot;col-5&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/8e8114a3-cd2a-4a72-9670-389c32125bae.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n            &lt;div class=&quot;col-7 vertical-align&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/196a1eba-d180-4d9a-b89f-689fd47ba7b1.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/a93d1549-877c-48cf-b2a8-7828db070be7.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n\n    &lt;div class=&quot;row&quot;&gt;\n        &lt;div class=&quot;small-theater-exp&quot;&gt;\n            &lt;div class=&quot;col-5&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/8e8114a3-cd2a-4a72-9670-389c32125bae.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n            &lt;div class=&quot;col-7 vertical-align&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/196a1eba-d180-4d9a-b89f-689fd47ba7b1.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n\n    &lt;div class=&quot;row&quot;&gt;\n        &lt;div class=&quot;small-theater-exp&quot;&gt;\n            &lt;div class=&quot;col-5&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/5ab715a7-3a1b-4f1b-a1a9-7f55e23aa288.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n            &lt;div class=&quot;col-7 vertical-align&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/196a1eba-d180-4d9a-b89f-689fd47ba7b1.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n\n    &lt;div class=&quot;row&quot;&gt;\n        &lt;div class=&quot;small-theater-exp&quot;&gt;\n            &lt;div class=&quot;col-5&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/605529d6-010c-432e-b556-dff6da32d6bf.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n            &lt;div class=&quot;col-7 vertical-align&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n\n    &lt;div class=&quot;row&quot;&gt;\n        &lt;div class=&quot;small-theater-exp&quot;&gt;\n            &lt;div class=&quot;col-5&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/b35d271f-1693-4a64-b91d-4cd7a42f9e55.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n            &lt;div class=&quot;col-7 vertical-align&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n\n    &lt;div class=&quot;row&quot;&gt;\n        &lt;div class=&quot;small-theater-exp&quot;&gt;\n            &lt;div class=&quot;col-5&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/7e029128-8e96-4252-80aa-26bc25bb455b.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid exp-image&quot;&gt;\n            &lt;/div&gt;\n            &lt;div class=&quot;col-7 vertical-align&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/14912db3-d18a-46ed-b957-5598db7f641a.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/196a1eba-d180-4d9a-b89f-689fd47ba7b1.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/4d20234e-2dc0-43b9-981b-cb9cabfd13b5.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/dbf87f78-efdf-4143-b75f-86df18291f95.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n                &lt;img src=&quot;https://theatersollution.s3.amazonaws.com/c4ff0f27-c717-42e2-bfc7-f1bacf44ce78.png&quot; alt=&quot;&quot; class=&quot;img-fluid exp-img&quot;&gt;\n            &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n&lt;/div&gt;\n\n&lt;div class=&quot;row map-row&quot;&gt;\n    &lt;div class=&quot;col-md-12&quot;&gt;\n        &lt;p class=&quot;theater-exp-name-1&quot; id=&quot;direction&quot;&gt;Get Direction&lt;/p&gt;\n    &lt;/div&gt;\n    &lt;div class=&quot;col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xl-12 map-col&quot;&gt;\n        &lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7734405565056!2d79.85318241477286!3d6.917667395001693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596b1c2ae5b1%3A0x872e9262f485d782!2sColombo%20City%20Centre!5e0!3m2!1sen!2slk!4v1568020766772!5m2!1sen!2slk&quot; width=&quot;100%&quot; height=&quot;100%&quot; frameborder=&quot;0&quot; style=&quot;border: 0;&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;\n    &lt;/div&gt;\n&lt;/div&gt;\n',
                        image: 'https://theatersollution.s3.amazonaws.com/c615697a-fd01-48bf-b40b-4067badf0189.jpeg',
                        mobile_image: 'https://theatersollution.s3.amazonaws.com/85472c6c-33ba-458e-a33e-3f3f53e5d997.jpeg',
                        icon_image: 'https://theatersollution.s3.amazonaws.com/f596a5e6-5da5-4f75-9d79-5e93e4a0101c.png',
                        address_line1: '137',
                        address_line2: 'Sir James Pieris Mawatha',
                        city: 'Colombo 2',
                        country: 'Sri Lanka',
                        tel_no1: '94112083064',
                        tel_no2: '',
                        fax_no: '',
                        email1: 'helpdesk@scopecinemas.com',
                        email2: '',
                        visibility: 1,
                        online_booking: 1,
                        is_3d: 1,
                        vista_code: 'CCC',
                        tags:
                            [ '3D Hall',
                                'Air Condition',
                                'Cafetaria',
                                'Car park',
                                'Luxurious seats',
                                'Snack Bar' ],
                        ordering: 0,
                        gallery: [ 'https://theatersollution.s3.amazonaws.com/ff6ac7ba-c3b9-4dac-912f-b2107e53d1be.png' ] } ],
                createdAt: 1652074173861,
                updatedAt: 1660937458390,
                id: '6278a6bd58f3a40017b337bb',
                name: 'BULLET TRAIN',
                slug: 'bullet-train',
                genre: [ 'Action', 'Thriller' ],
                synopsis: 'Five assassins aboard a fast moving bullet train find out their missions have something in common.',
                directors: [ 'David Leitch' ],
                producers: [ 'Antoine Fuqua' ],
                mucisions: [ 'Dominic Lewis' ],
                writters: [ 'Kôtarô Isaka', 'Zak Olkewicz' ],
                facts: '',
                you_tube_link: 'https://www.youtube.com/watch?v=0IOsk2Vlc4o',
                you_tube_id: '0IOsk2Vlc4o',
                image: 'https://theatersollution.s3.amazonaws.com/d6acdbdc-c3f9-4075-acb6-9033dc2d4c91.jpg',
                mobile_image: 'https://theatersollution.s3.amazonaws.com/b9b155db-8c0b-4ea1-8ea5-aeb8c3f7e9a8.jpg',
                banner_image: 'https://theatersollution.s3.amazonaws.com/3e0b2b4d-ece3-4b78-943d-b7638d05652d.jpg',
                trailer: '',
                trailer_image01: '',
                trailer_image02: '',
                trailer_image03: '',
                status: 0,
                visibility: 1,
                threedimentionalmovie: 0,
                adult: 0,
                created_date: '',
                exclude_portal: 0,
                release_date: '5th August',
                booking_end_date: '2022-08-25',
                vista_code: [ 'LIBERTYHO00000217', 'CCCHO00000217' ],
                movie_type: 0,
                runtime: '2',
                runtime_minutes: '06',
                movie_language: 'English',
                coupon_enable: 0,
                featured: 0,
                imdb: 7.5,
                ordering: 150,
                cast:
                    [ { actor: 'Brad Pitt', character: 'Ladybug' },
                        { actor: 'Sandra Bullock', character: 'Maria Beetle' },
                        { actor: 'Zazie Beetz', character: '.' },
                        { actor: 'Aaron Taylor-Johnson', character: 'Tangerine' },
                        { actor: 'Joey King', character: 'Prince' } ],
                gallery: [] }),genres: unescape([ 'Action', 'Thriller' ]),cast: unescape([ { actor: 'Brad Pitt', character: 'Ladybug' },
                { actor: 'Sandra Bullock', character: 'Maria Beetle' },
                { actor: 'Zazie Beetz', character: '.' },
                { actor: 'Aaron Taylor-Johnson', character: 'Tangerine' },
                { actor: 'Joey King', character: 'Prince' } ]),directors: unescape([ 'David Leitch' ]),producers: unescape([ 'Antoine Fuqua' ]),writters: unescape([ 'Kôtarô Isaka', 'Zak Olkewicz' ]),mucisions: unescape([ 'Dominic Lewis' ]), };  })(); </script>


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
                                <a href="https://apps.apple.com/lk/app/scope-cinemas-buy-tickets/id1236478837" target="_blank" class="mr-3"><img src="<?= URLROOT.'app/views/pages/img/apple-store.png' ?>" class="img-fluid " alt="Scope cinema App from apple store"></a>
                                <a href="https://play.google.com/store/apps/details?id=cinema.com.scope&amp;hl=en&amp;gl=US" target="_blank"><img src="<?= URLROOT.'app/views/pages/img/playstore.png' ?>" class="img-fluid" alt="Scope cinema App from playstore"></a>
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



