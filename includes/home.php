<main class="home">
    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo $lang['h1-home']?></h1>
                    </div>
                    <div class="col-md-12">
                        <h4><?php echo $lang['h4-home']?></h4>
                    </div>
                </div>
                <div class="products">
                    <div class="product-item">
                        <a href="?page=roslynnytstvo">
                        <img class="prod-img" src="img/main-page/grow.png" alt="РОСЛИННИЦТВО">
                        <p class="prod"><?php echo $lang['header-roslynnytstvo']?></p>
                    </a>
                    </div>
                    <div class="product-item">
                        <a href="?page=tvarinnictvo">
                        <img class="prod-img" src="img/main-page/cow.png" alt="ТВАРИННИЦТВО">
                        <p class="prod"><?php echo $lang['header-tvarinnictvo']?></p>
                    </a>
                    </div>
                    <div class="product-item">
                        <a href="?page=bdzholyarstvo">
                        <img class="prod-img" src="img/main-page/bee.png" alt="БДЖОЛЯРСТВО">
                        <p class="prod"><?php echo $lang['header-bdzholyarstvo']?></p>
                    </a>
                    </div>
                    <div class="product-item">
                        <a href="?page=transportniposlugy">
                        <img class="prod-img" src="img/main-page/truck.png" alt="ТРАНСПОРТНІ ПОСЛУГИ">
                        <p class="prod"><?php echo $lang['header-transportniposlugy']?></p>
                    </a>
                    </div>
                    <div class="product-item">
                        <a href="?page=metaloplastykovikonstrukcii">
                        <img class="prod-img" src="img/main-page/steel.png" class="main-steel" alt="МЕТАЛОПЛАСТИКОВІ КОНСТРУКЦІЇ">
                        <p class="prod"><?php echo $lang['header-metaloplastykovikonstrukcii']?></p>
                    </a>
                    </div>
                    <div class="product-item">
                        <a href="?page=mzuri">
                        <img class="prod-img" src="img/main-page/mzuri.png" alt="mzuri">
                        <p class="prod"><?php echo $lang['header-mzuri']?></p>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-button">
            <a href="#about" class="slide-section">
            <img src="img/main-page/arrow-main.png" alt="" class="motion">
        </a>
        </div>
    </header>
    <!-- HEADER END -->
    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="col-md-12">
            <h2><?php echo $lang['about-h2']?></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-content">
                        <div class="col-md-6">
                            <div class="main-slider owl-carousel">
                                <div class="slider-item">
                                    <img src="img/main-page/kurka.png" alt="">
                                </div>
                                <div class="slider-item">
                                    <img src="img/main-page/kurka.png" alt="">
                                </div>
                                <div class="slider-item">
                                    <img src="img/main-page/kurka.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-text d-flex flex-column justify-content-center">
                                <img src="img/main-page/icon-ferma.png" alt="">
                                <p><?php echo $lang['about-tov-perluna']?></p>
                            </div>
                            <div class="main-btn">
                                <a href="?page=about"><?php echo $lang['details']?><img src="img/main-page/news-arrow.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT END -->
    <!--CARRIER-->
    <section class="carrier">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo $lang['carrier-h2']?></h2>
                    <h4><?php echo $lang['carrier-tov']?></h4>
                </div>
            </div>
            <div class="col-md-12">
                <div class="carrier-content">
                    <div class="col-md-6">
                        <div class="carrier-content-list">
                            <div class="list">
                                <ul>
                                    <li><?php echo $lang['off-work']?></li>
                                    <li><?php echo $lang['zrist']?></li>
                                    <li><?php echo $lang['grafik']?></li>
                                    <li><?php echo $lang['zarplata']?></li>
                                </ul>
                            </div>
                            <div class="main-btn">
                                <a href="?page=carrier"><?php echo $lang['details']?><img src="img/main-page/carrier-arrow.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="carrier-content-form">
                            <form id="feedback-form" class="carrier-form" enctype="multipart/form-data" method="POST">
                                <label for="nameFF"><?php echo $lang['name']?></label>
                                <input id="nameFF" name="nameFF" class="inputName" type="text" required />
                                <label for="contactFF">Email:</label>
                                <input id="contactFF" name="contactFF" type="email" class="inputEmail" maxlength="35" required />
                                <label for="projectFF"><?php echo $lang['comentar']?></label>
                                <textarea id="projectFF" name="projectFF" class="inputText"></textarea>
                                <label class="area-padding" for="fileFF"><?php echo $lang['rezume']?></label>
                                <div class="file-upload">
                                    <label>
                                        <input id="fileFF" name="fileFF" type="file">
                                        <span><img src="img/main-page/attach-icon.png" alt=""></span>
                                    </label>
                                    <input type="text" id="filename" class="filename" disabled placeholder="<?php echo $lang['choose']?>">
                                </div>
                                <button id="submitFF" class="form-btn" type="submit"><?php echo $lang['send-btn']?><img src="img/main-page/carrier-arrow.png" alt=""></button>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CARRIER END-->
    <!-- LASTNEWS -->
    <section class="lastnews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo $lang['news-h2']?></h2>
                </div>
                <div class="col-md-12">
                    <div class="lastnews-content">
                        <div class="col-md-6">
                            <div class="lastnews-text-left">
                                <h3><?php echo $lang['news-h3-left']?></h3>
                                <p><?php echo $lang['news-text-left']?></p>
                                <div class="btn-date-left">
                                    <div class="news-date">
                                        <time datetime="2012-12-23T08:23:11+07:00 ">
                                            <p>2012-12-23<span></span>08:23</p>
                                        </time>
                                    </div>
                                    <div class="fb">
                                        <a href=""><img src="img/main-page/fb_icon.png" alt=""></a>
                                    </div>
                                    <div class="main-btn">
                                        <a href="# "><?php echo $lang['details']?><img src="img/main-page/news-arrow.png" alt=" "></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="lastnews-photo-left">
                                <img src="img/main-page/news-photo.png " alt=" ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lastnews-top" style="width: 100%; margin-bottom: 3%;"></div>
                <div class="col-md-12 ">
                    <div class="lastnews-content reverse">
                        <div class="col-md-6">
                            <div class="lastnews-photo-right">
                                <img src="img/main-page/news-photo.png " alt=" ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="lastnews-text-right">
                                <h3><?php echo $lang['news-h3-right']?></h3>
                                <p class="lt-news-padding"><?php echo $lang['news-text-right']?></p>
                                <div class="btn-date-right">
                                    <div class="news-date">
                                        <time datetime="2012-12-23T08:23:11+07:00 ">
                                            <p>2012-12-23<span></span>08:23</p>
                                        </time>
                                    </div>
                                    <div class="fb">
                                        <a href=""><img src="img/main-page/fb_icon.png" alt=""></a>
                                    </div>
                                    <div class="main-btn ">
                                        <a href="#"><?php echo $lang['details']?><img src="img/main-page/news-arrow.png " alt=" "></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- LASTNEWS END -->
    <!-- HELP-->
    <section class="help ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <h2><?php echo $lang['help-h2']?></h2>
                </div>
                <div class="help-content owl-carousel">
                    <div class="help-content-slide">
                        <h5><?php echo $lang['help-h5']?></h5>
                        <div class="help-content-block">
                            <img src="img/main-page/open-book.svg" alt="">
                            <p><?php echo $lang['book-1']?></p>
                        </div>
                        <div class="help-content-block jet">
                            <img src="img/main-page/jet.svg" alt="">
                            <p>347 608 грн
                                <br> на допомогу воїнам АТО</p>
                        </div>
                        <div class="help-content-block">
                            <img src="img/main-page/first-aid-kit.svg" alt="">
                            <p>328 297 грн
                                <br> на медицину</p>
                        </div>
                        <div class="help-content-block">
                            <img src="img/main-page/church.svg" alt="">
                            <p>225 307 грн
                                <br>на допомогу церквам</p>
                        </div>
                        <div class="help-content-block">
                            <img src="img/main-page/masks.svg" alt="">
                            <p>73 332 грн
                                <br>на розвиток культури</p>
                        </div>
                        <div class="help-content-block">
                            <img src="img/main-page/heart.svg" alt="">
                            <p>225 998 грн
                                <br>на іншу матеріальну допомогу</p>
                        </div>
                    </div>
                    <div class="help-content-slide">
                        <h5>3 218 597 грн у 2017 році було витрачено на соціальну допомогу</h5>
                        <div class="help-content-block">
                            <img src="img/main-page/open-book.svg" alt="">
                            <p>514 975 грн
                                <br> на освітній напрям</p>
                        </div>
                        <div class="help-content-block jet">
                            <img src="img/main-page/jet.svg" alt="">
                            <p>347 608 грн
                                <br> на допомогу воїнам АТО</p>
                        </div>
                        <div class="help-content-block">
                            <img src="img/main-page/first-aid-kit.svg" alt="">
                            <p>328 297 грн
                                <br> на медицину</p>
                        </div>
                        <div class="help-content-block">
                            <img src="img/main-page/church.svg" alt="">
                            <p>225 307 грн
                                <br>на допомогу церквам</p>
                        </div>
                        <div class="help-content-block">
                            <img src="img/main-page/masks.svg" alt="">
                            <p>73 332 грн
                                <br>на розвиток культури</p>
                        </div>
                        <div class="help-content-block">
                            <img src="img/main-page/heart.svg" alt="">
                            <p>225 998 грн
                                <br>на іншу матеріальну допомогу</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HELP END-->
    <!-- CONTACTS -->
    <section class="contacts ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <h2>КОНТАКТИ</h2>
                </div>
                <div class="col-md-12 ">
                    <div class="contacts-content ">
                        <div class="col-md-6 ">
                            <div class="map ">
                                <img src="img/main-page/map.png " alt=" ">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="address">
                                <h3>ОФІС</h3>
                                <p><img src="img/main-page/icon-address.png" alt="">:&ensp;Хмельницька обл., смт. Білогір’я, вул. Миру, 10</p>
                                <p><img src="img/main-page/icon-office-phone.png" alt="">:&ensp;+380(3841) 2-15-55</p>
                                <ul>
                                    <li>
                                        <p>Індекс:&ensp;30200</p>
                                    </li>
                                    <li>
                                        <p>E-mail:&ensp;<a href="mailto:perlpod@ukr.net">perlpod@ukr.net</a></p>
                                    </li>
                                    <span></span>
                                    <li>
                                        <p>Прес-секретар ТОВ науково-виробнича агрофірма “Перлина Поділля”</p>
                                    </li>
                                    <li>
                                        <p><img src="img/main-page/icon-phone.png" alt="">:&ensp;+380971660001</p>
                                    </li>
                                    <li>
                                        <p class="gmail"><img src="img/main-page/icon-gmail.png" alt="">:&ensp;<a href="mailto:valentyn.losovsky@gmail.com"> valentyn.losovsky@gmail.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACTS END -->
</main>