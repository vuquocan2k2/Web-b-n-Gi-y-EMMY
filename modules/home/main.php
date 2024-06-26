<?php 
    get_header();    
    ?>
<?php
    $Listslideshows=get_Slideshows();
    // show_array($Listslideshows);
     $get_Categories_adidas=get_Categories_Adidas();
     $get_Categories_air=get_Categories_Air();
     $get_Categories_balenciaga=get_Categories_Balenciaga();
     $get_Categories_converse=get_Categories_Converse();
     $get_Categories_vans=get_Categories_Vans();
    
     $get_Featured_products=get_Featured_Products();
     // show_array($get_Featured_products);
     $get_Blog=get_Blog_index();
     // show_array($get_Blog);
    ?>
<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <?php
                foreach ($Listslideshows as $slideshow ) {
                	// show_array($slideshow);
                ?>
            <div class="item-slick1 item<?php echo $slideshow['stt']?>-slick1"
                style="background-image: url(imgs/<?php echo $slideshow['hinh'] ?>);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
                        data-appear="fadeInDown" style="color: #ef4a33;">
                        Women Collection 224
                    </span>
                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp"
                        style="color: #ef4a33;">
                        New arrivals
                    </h2>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <!-- Button -->
                        <a href="?mod=product&act=main" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
    </div>
</section>
<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <?php if(!empty($get_Categories_air)) {?>
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="imgs/<?php echo $get_Categories_air['hinh_tieu_de']?>" style="height: 479px;"
                        alt="IMG-BENNER">
                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="?mod=product&act=Categories&id=<?php echo $get_Categories_air['id_loai']?> "
                            class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            <?php echo $get_Categories_air['loaisanpham']?>
                        </a>
                    </div>
                </div>
                <?php } ?>
                <!-- block1 -->
                <?php if(!empty($get_Categories_balenciaga)) {?>
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="imgs/<?php echo $get_Categories_balenciaga['hinh_tieu_de']?>" alt="IMG-BENNER"
                        style="height: 339px;">
                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="?mod=product&act=Categories&id=<?php echo $get_Categories_balenciaga['id_loai']?> "
                            class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            <?php echo $get_Categories_balenciaga['loaisanpham']?>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <?php if(!empty($get_Categories_vans)) {?>
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="imgs/<?php echo $get_Categories_vans['hinh_tieu_de']?>" alt="IMG-BENNER"
                        style="height: 339px;">
                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="?mod=product&act=Categories&id=<?php echo $get_Categories_vans['id_loai']?> "
                            class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            <?php echo $get_Categories_vans['loaisanpham']?>
                        </a>
                    </div>
                </div>
                <?php } ?>
                <!-- block1 -->
                <?php if(!empty($get_Categories_converse)) {?>
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="imgs/<?php echo $get_Categories_converse['hinh_tieu_de']?>" alt="IMG-BENNER"
                        style="height: 479px;">
                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="?mod=product&act=Categories&id=<?php echo $get_Categories_converse['id_loai']?>"
                            class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            <?php echo $get_Categories_converse['loaisanpham']?>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <?php if(!empty($get_Categories_converse)) {?>
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="imgs/<?php echo $get_Categories_adidas['hinh_tieu_de']?> " style="height: 479px;"
                        alt="IMG-BENNER">
                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="?mod=product&act=Categories&id=<?php echo $get_Categories_adidas['id_loai']?> "
                            class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            <?php echo $get_Categories_adidas['loaisanpham']?>
                        </a>
                    </div>
                </div>
                <?php } ?>
                <!-- block2 -->
                <div class="block2 wrap-pic-w pos-relative m-b-30">
                    <img src="imgs/giay-adidas-superstar-J-nu-den-trang-02-800x800_0.jpg" style="    height: 339px;"
                        alt="IMG">
                    <div class="block2-content sizefull ab-t-l flex-col-c-m">
                        <h4 class="m-text4 t-center w-size3 p-b-8">
                            Sign up
                        </h4>
                        <p class="t-center w-size4">
                            Hãy là người đầu tiên biết về tin tức thời trang mới nhất và nhận ưu đãi độc quyền
                        </p>
                        <div class="w-size2 p-t-25">
                            <!-- Button -->
                            <?php
                                if(!isset($_SESSION['is_login']))
                                {
                                ?>
                            <a href="?mod=users&act=login" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                Sign Up
                            </a>
                            <?php
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- New Product -->
<section class="newproduct bgwhite p-t-45">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Sản phẩm
            </h3>
        </div>
        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                <?php
                    foreach ($get_Featured_products as $featured_products ) {
                    	    // show_array($get_Featured_products);
                    ?>
                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <?php
                             // show_array($product);
                              $date = getdate();
                              // echo $date["mday"];
                            $currentDate = $date["year"] . "-". $date["mon"] . "-". $date["mday"];

                             $week = strtotime(date("Y-m-d", strtotime($featured_products['created_at'])) . " +1 week");
                             
                               $datediff = $week-(strtotime($currentDate));
                                // echo floor($datediff / (60*60*24));
                                $labelnew="";
                                if(floor($datediff / (60*60*24)) > 0 && floor($datediff / (60*60*24)) <= 7 ){
                                    $labelnew="block2-labelnew";
                                    
                                }
                                
                                ?>
                        <div class="block2-img wrap-pic-w of-hidden pos-relative <?php echo $labelnew; ?>">
                            <img src="imgs/<?php echo $featured_products['hinhanh']?>" alt="IMG-PRODUCT">
                            <div class="block2-overlay trans-0-4">

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <a href="" title="Add to Cart"
                                        onclick="cart(<?php echo $featured_products['id']; ?>)"
                                        class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <script>
                        function cart(id) {
                            $.get("?mod=cart&act=add_to_cart", {
                                "id": id
                            }, function(data) {

                            });

                        }
                        </script>
                        <div class="block2-txt p-t-20">
                            <a href="?mod=product&act=product_detail&id=<?php echo $featured_products['id']?>"
                                class="block2-name dis-block s-text3 p-b-5">
                                <?php echo $featured_products['tensp']?>
                            </a>
                            <span class="block2-price m-text6 p-r-5">
                                $<?php echo $featured_products['gia']?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="blog bgwhite p-t-94 p-b-65">
    <div class="container">
        <div class="sec-title p-b-52">
            <h3 class="m-text5 t-center">
                Bài viết
            </h3>
        </div>
        <div class="row">
            <?php
                foreach ($get_Blog as $list_blog ) {
                	 // show_array($list_blog);
                ?>
            <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                <!-- Block3 -->
                <div class="block3">
                    <a href="blog-detail.php" class="block3-img dis-block hov-img-zoom">
                        <img src="imgs/<?php echo $list_blog['hinhanh']?>" alt="IMG-BLOG" style="height: 247px;">
                    </a>
                    <div class="block3-txt p-t-14">
                        <h4 class="p-b-7">
                            <a href="?mod=blog&act=blog_detail&id=<?php echo $list_blog['id']?>" class="m-text11">
                                <?php echo $list_blog['tieude']?>
                            </a>
                        </h4>
                        <span class="s-text6">By</span> <span
                            class="s-text7"><?php echo $list_blog['nguoiviet']?></span>
                        <span class="s-text6">on</span> <span class="s-text7"><?php echo $list_blog['created']?></span>
                        <p class="s-text8 p-t-16">
                            <?php echo $list_blog['keyword']?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
    </div>
</section>

<!-- Shipping -->
<section class="shipping bgwhite p-t-62 p-b-46">
    <div class="flex-w p-l-15 p-r-15">
        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
                Giao hàng miễn phí toàn quốc
            </h4>
            <a href="?mod=product&act=main" class="s-text11 t-center">
                Bấm vào đây để biết thêm
            </a>
        </div>
        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
            <h4 class="m-text12 t-center">
                30 ngày trả hàng
            </h4>
            <span class="s-text11 t-center">
                Có thể trả hàng lại sau 30 ngày
            </span>
        </div>
        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
                Thời gian mở cửa
            </h4>
            <span class="s-text11 t-center">
                Cửa hàng mở cửa từ thứ hai đến chủ nhật

            </span>
        </div>
    </div>
</section>
<?php 
    get_footer();    
    ?>