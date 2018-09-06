<main id="tvarinnictvo" class="submenu-main">
    <div class="submenu" style="background-image: url(../img/tvarinnictvo/cow-bg.png);background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $lang['tvarinnictvo']?></h1>
                </div>
                <div class="col-md-12">
                    <h4><?php echo $lang['tvari-h4']?></h4>
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="submenu-product">
                    <div class="submenu-item">
                        <img src="img/tvarinnictvo/cow.png" alt="">
                        <p><?php echo $lang['tvari-item-1']?></p>
                    </div>
                    <div class="submenu-item milk">
                        <img src="img/tvarinnictvo/milk.png" alt="">
                        <p><?php echo $lang['tvari-item-2']?></p>
                    </div>
                    <div class="submenu-item animal-arrow">
                        <img src="img/tvarinnictvo/arrow.png" alt="">
                        <p><?php echo $lang['tvari-item-3']?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-button">
            <a href=".block-1" class="slide-section"><img src="img/main-page/arrow-main.png" alt=""></a>
        </div>
    </div>
    <section class="block-1" style="background-image: url(../img/tvarinnictvo/figure-1.png); background-size: 80%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-1-content">
                        <div class="col-md-6 block-1-img">
                            <img src="img/tvarinnictvo/traktor.png" alt="">
                        </div>
                        <div class="col-md-6 block-1-text">
                            <?php echo $lang['tvari-block-1-text']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="submenu-banner" style="background-image: url(../img/tvarinnictvo/cows.png);">
        <p><?php echo $lang['tvari-submenu-banner']?></p>
    </section>
    <section class="block-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-1-content flex-row-reverse">
                        <div class="col-md-6 block-1-img">
                            <img src="img/tvarinnictvo/traktor.png" alt="">
                        </div>
                        <div class="col-md-6 block-1-text">
                            <?php echo $lang['tvari-block-2-text']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="submenu-contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo $lang['call-us']?></h2>
                </div>
                <div class="col-md-12 d-flex flex-wrap">
                    <div class="submenu-block">
                        <form id="submenuform">
                                <label>
                                    <?php echo $lang['sub-name']?>
                                </label>
                                <input type="text" name="name" id="name" required="">
                                <label>
                                    <?php echo $lang['sub-phone']?>
                                </label>
                                <input type="text" name="phone" id="phone" required="">
                                <label>
                                    <?php echo $lang['sub-mail']?>
                                </label>
                                <input type="text" name="email" id="email" required="">
                                <button type="submit" id="btn_submit">
                                    <?php echo $lang['sub-send']?><img src="img/main-page/news-arrow.png" alt=" "></button>
                        </form>
                    </div>
                    <div class="submenu-contacts-text">
                        <ul>
                            <li class="line-height">
                                <img src="img/main-page/icon-address.png" alt="" class="icon-sub"><?php echo $lang['contacts-text-1']?>
                            </li>
                            <li>
                                <img src="img/main-page/icon-office-phone.png" alt=""><?php echo $lang['office-phone']?>
                            </li>
                            <li>
                                <img src="img/main-page/icon-gmail.png" alt="">E-mail:&ensp;<a href="mailto:perlpod@ukr.net">perlpod@ukr.net</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>