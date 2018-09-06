<main class="carrier-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $lang['carrier-page-h2']?></h2>
                <h3><?php echo $lang['carrier-page-h3']?></h3>
            </div>
            <div class="carrier-main-content d-flex flex-wrap">
                <div class="col-md-6">
                    <div class="carrier-main-right">
                        <?php echo $lang['carrier-main-right']?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="carrier-main-img-right">
                        <img src="img/carrier-page/people.png" alt="">
                    </div>
                </div>
            </div>
            <div class="carrier-main-content d-flex align-items-center flex-wrap reverse">
                <div class="col-md-6">
                    <div class="carrier-main-img">
                        <img src="img/carrier-page/people2.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="carrier-main-left">
                        <p><?php echo $lang['carrier-main-left']?></p>
                    </div>
                    
                </div>
                
            </div>
            <div class="carrier-main-form d-flex align-items-center flex-wrap">
                <div class="col-md-6">
                    <h3><?php echo $lang['contact-us-h3']?></h3>
                    <?php echo $lang['contact-us-text']?>
                </div>
                <div class="col-md-6">
                    <div class="carrier-content-form">
                        <form id="feedback-form" class="carrier-form" enctype="multipart/form-data" method="POST">
                            <label for="nameFF">
                                <?php echo $lang['name']?>
                            </label>
                            <input id="nameFF" name="nameFF" class="inputName" type="text" required />
                            <label for="contactFF">Email:</label>
                            <input id="contactFF" name="contactFF" type="email" class="inputEmail" maxlength="35" required />
                            <label for="projectFF">
                                <?php echo $lang['comentar']?>
                                </label>
                            <textarea id="projectFF" name="projectFF" class="inputText"></textarea>
                            <label class="area-padding" for="fileFF">
                                <?php echo $lang['rezume']?>
                            </label>
                            <div class="file-upload">
                                    <label>
                                        <input id="fileFF" name="fileFF" type="file">
                                        <span><img src="img/carrier-page/carrier-attach-icon.png" alt=""></span>
                                    </label>
                                    <input type="text" id="filename" class="filename" disabled placeholder="Виберіть файл">
                                </div>
                            <button id="submitFF" class="form-btn" type="submit">
                                <?php echo $lang['send-btn']?>
                            <img src="img/main-page/news-arrow.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>