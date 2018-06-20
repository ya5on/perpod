<?php 
include "includes/nav.php";
 ?>
<main class="contacts-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>контакти</h1>
            </div>
            <div class="col-md-12">
                <div class="contacts-main-content">
                    <div class="content-text-1 flex-column align-self-center">
                        <p>Адреса: Хмельницька обл., смт. Білогір’я, вул. Миру, 10</p>
                        <p>індекс: 30200</p>
                        <p>Телефон: +380(3841) 2-15-55</p>
                        <p>E-mail: perlpod@ukr.net</p>
                    </div>
                    
                    <div class="submenu-block">
                        <form id="submenuform">
                        <label>Name:</label>
                        <input type="text" name="name" id="name">
    
                        <label>Mobile Phone:</label>
                        <input type="text" name="message" id="message">
    
                        <label>E-mail:</label>
                        <input type="text" name="email" id="email">
                        <button href="javascript: void(0);" id="btn_submit">Відправити<img src="img/main-page/news-arrow.png " alt=" "></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts-map">
        <img src="img/contacts-page/map.png" alt="">
    </div>
</main>