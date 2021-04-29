<hr>
    <footer>
    <div class="footer-1 section-mb-space">
        <div class="container">
            <div class="logo-contain">
                <div class="row">
                    <div class="col-lg-3 col-md-12 ">
                        <div class="logo-block">
                            <img src="assets/images/layout-5/logo/logo.png" class="img-fluid  " alt="logo">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 pr-lg-0">
                        <div class="logo-detail">
                            <p>Chosen By You…Customised By Us. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-1 section-mb-space">
        <div class="container">
            <div class="footer-box">
                <div class="row">
                    <div class="col-md-8 pr-md-0">
                        <div class="footer-link">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="footer-sub-box account">
                                        <div class="footer-title">
                                            <h5>my account</h5>
                                        </div>
                                        <div class="footer-contant">
                                            <ul>
                                            <li><a href="about">about us</a></li>
                                                    <li><a href="contact">contact us</a></li>
                                                    <li><a href="returns">returns & exchanges</a></li>
                                                    <li><a href="shipping">shipping & delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="footer-sub-box">
                                        <div class="footer-title">
                                            <h5>quick link</h5>
                                        </div>
                                        <div class="footer-contant">
                                        <ul>
                                                    <?php 
                                                    if(isset($_SESSION['loggedIn'])){
                                                    ?>
                                                     <li><a href="dashboard"> my account</a></li>
                                                    <?php
                                                    } else {
                                                        ?>
                                                         <li><a href="login"> my account</a></li>
                                                        <?php
                                                    }
                                                    ?>
                                                    <li><a href="faq">Frequently asked questions </a></li>
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  pl-md-0">
                        <div class="footer-sub-box footer-contant-box">
                            <div>
                                <div class="footer-title">
                                    <h5>contact us</h5>
                                </div>
                                <div class="footer-contant">
                                    <ul class="contact-list">
                                        <li><i class="fa fa-envelope-o"></i>email us: enquiries@thelasergiftshop</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="app-link-block" style="background:#FFFFFF;">
                            <div class="container">
                                <div class="row">
                                    <div class="app-link-bloc-contain">
                                        
                                        <div class="app-item-group ">
                                            <div class="sosiyal-block" >
                                                <h6>follow us</h6>
                                                <ul class="sosiyal">
                                                    <li><a href="https://www.facebook.com/thelasergiftshop"><i class="fa fa-facebook" ></i></a></li>
                                                    <li><a href="https://www.twitter.com/@thelasergiftshop"><i class="fa fa-twitter" ></i></a></li>
                                                    <li><a href="https://www.instagram.com/@thelasergiftshop"><i class="fa fa-instagram" ></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-1 section-mb-space">
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-8 col-sm-12">
                        <div class="footer-end">
                            <p><span>2021</span> Copy Right by The Laser Gift Shop</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-4 col-sm-12">
                        <div class="payment-card-bottom">
                            <ul>
                                <li><a href="#"><img src="assets/images/pay/1.png" class="img-fluid" alt="pay"></a></li>
                                <li><a href="#"><img src="assets/images/pay/2.png" class="img-fluid" alt="pay"></a></li>
                                <li><a href="#"><img src="assets/images/pay/3.png" class="img-fluid" alt="pay"></a></li>
                                <li><a href="#"><img src="assets/images/pay/4.png" class="img-fluid" alt="pay"></a></li>
                                <li><a href="#"><img src="assets/images/pay/5.png" class="img-fluid" alt="pay"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
