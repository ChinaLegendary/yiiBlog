<?php
/* @var $this yii\web\View */

use \yii\helpers\Url;

$this->title = 'My Yii Application';
?>

<div class="arriv">
    <div class="container">
        <div class="arriv-top">
            <div class="col-md-6 arriv-left">
                <img src="<?php echo Url::to("@web/client/"); ?>images/1.jpg" class="img-responsive" alt="">
                <div class="arriv-info">
                    <h3>NEW ARRIVALS</h3>
                    <p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
                    <div class="crt-btn">
                        <a href="details.html">TAKE A LOOK</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 arriv-right">
                <img src="<?php echo Url::to("@web/client/"); ?>images/2.jpg" class="img-responsive" alt="">
                <div class="arriv-info">
                    <h3>TUXEDO</h3>
                    <p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
                    <div class="crt-btn">
                        <a href="details.html">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="arriv-bottm">
            <div class="col-md-8 arriv-left1">
                <img src="<?php echo Url::to("@web/client/"); ?>images/3.jpg" class="img-responsive" alt="">
                <div class="arriv-info1">
                    <h3>SWEATER</h3>
                    <p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
                    <div class="crt-btn">
                        <a href="details.html">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 arriv-right1">
                <img src="<?php echo Url::to("@web/client/"); ?>images/4.jpg" class="img-responsive" alt="">
                <div class="arriv-info2">
                    <a href="details.html"><h3>Trekking Shoes<i class="ars"></i></h3></a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="arriv-las">
            <div class="col-md-4 arriv-left2">
                <img src="<?php echo Url::to("@web/client/"); ?>images/5.jpg" class="img-responsive" alt="">
                <div class="arriv-info2">
                    <a href="details.html"><h3>Casual Glasses<i class="ars"></i></h3></a>
                </div>
            </div>
            <div class="col-md-4 arriv-middle">
                <img src="<?php echo Url::to("@web/client/"); ?>images/6.jpg" class="img-responsive" alt="">
                <div class="arriv-info3">
                    <h3>FRESH LOOK T-SHIRT</h3>
                    <div class="crt-btn">
                        <a href="details.html">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 arriv-right2">
                <img src="<?php echo Url::to("@web/client/"); ?>images/7.jpg" class="img-responsive" alt="">
                <div class="arriv-info2">
                    <a href="details.html"><h3>Elegant Watches<i class="ars"></i></h3></a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="special">
    <div class="container">
        <h3>Special Offers</h3>
        <div class="specia-top">
            <ul class="grid_2">
                <li>
                    <a href="details.html"><img src="<?php echo Url::to("@web/client/"); ?>images/8.jpg" class="img-responsive" alt=""></a>
                    <div class="special-info grid_1 simpleCart_shelfItem">
                        <h5>Lorem ipsum dolor</h5>
                        <div class="item_add"><span class="item_price"><h6>ONLY $40.00</h6></span></div>
                        <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                    </div>
                </li>
                <li>
                    <a href="details.html"><img src="<?php echo Url::to("@web/client/"); ?>images/9.jpg" class="img-responsive" alt=""></a>
                    <div class="special-info grid_1 simpleCart_shelfItem">
                        <h5>Consectetur adipis</h5>
                        <div class="item_add"><span class="item_price"><h6>ONLY $60.00</h6></span></div>
                        <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                    </div>
                </li>
                <li>
                    <a href="details.html"><img src="<?php echo Url::to("@web/client/"); ?>images/10.jpg" class="img-responsive" alt=""></a>
                    <div class="special-info grid_1 simpleCart_shelfItem">
                        <h5>Commodo consequat</h5>
                        <div class="item_add"><span class="item_price"><h6>ONLY $14.00</h6></span></div>
                        <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                    </div>
                </li>
                <li>
                    <a href="details.html"><img src="<?php echo Url::to("@web/client/"); ?>images/11.jpg" class="img-responsive" alt=""></a>
                    <div class="special-info grid_1 simpleCart_shelfItem">
                        <h5>Voluptate velit</h5>
                        <div class="item_add"><span class="item_price"><h6>ONLY $37.00</h6></span></div>
                        <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                    </div>
                </li>
                <div class="clearfix"> </div>
            </ul>
        </div>
    </div>
</div>