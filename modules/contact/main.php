<?php 
    get_header();      
 ?>
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m"
    style="background-image: url(imgs/legs_sneakers_tattoo_139701_1366x768.jpg);">
    <h2 class="l-text2 t-center">
        Contact
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <div class="p-r-20 p-r-0-lg">
                    <div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781"
                        data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <form class="leave-comment">
                    <h4 class="m-text26 p-b-36 p-t-15">
                        Gủi cho chúng tôi tin nhắn của bạn
                    </h4>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number"
                            placeholder="Phone Number">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email"
                            placeholder="Email Address">
                    </div>

                    <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message"
                        placeholder="Message"></textarea>

                    <div class="w-size25">
                        <!-- Button -->
                        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                            Gửi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php 
    get_footer();      
 ?>