<main class="contacts-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $lang['contacts-page-h2']?></h2>
            </div>
            <div class="col-md-12">
                <div class="contacts-main-content">
                    <div class="contacts-text-1">
                        <ul>
                            <li class="line-height">
                                <img src="img/main-page/icon-address.png" alt="" class="icon-sub">
                                <?php echo $lang['contacts-text-1']?>
                            </li>
                            <li>
                                <img src="img/main-page/icon-office-phone.png" alt="">
                                <?php echo $lang['office-phone']?>
                            </li>
                            <li>
                                <img src="img/main-page/icon-gmail.png" alt="">E-mail:<a href="mailto:perlpod@ukr.net">&ensp;perlpod@ukr.net</a>
                            </li>
                        </ul>
                    </div>
                    
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
                </div>
            </div>
        </div>
    </div>
    <div class="contacts-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24399.619780515077!2d26.415686412742208!3d49.998344313212385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1533727177741" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</main>