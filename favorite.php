<?php
require('header.php');
require('nav.php');
require('hero-section.php');
?>
<!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="dashboard-widget mb-30 mb-lg-0 sticky-menu">
                        <div class="user">
                            <div class="thumb-area">
                                <div class="thumb">
                                    <img src="./assets/images/user.png" alt="user">
                                </div>
                                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                                <input type="file" id="profile-pic" class="d-none">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#0">Percy Reed</a></h5>
                                <span class="username"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb81848385ab8c868a8287c5888486">[email&#160;protected]</a></span>
                            </div>
                        </div>
                        <ul class="dashboard-menu">
                            <li>
                                <a href="Dashboard.php"><i class="flaticon-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="personal-profile.php"><i class="flaticon-settings"></i>Personal Profile </a>
                            </li>
                            <li>
                                <a href="mybid.php"><i class="flaticon-auction"></i>My Bids</a>
                            </li>
                            <li>
                                <a href="winning-bid.php"><i class="flaticon-best-seller"></i>Winning Bids</a>
                            </li>
                            <li>
                                <a href="alert.php"><i class="flaticon-alarm"></i>My Alerts</a>
                            </li>
                            <li>
                                <a href="favorite.php" class="active"><i class="flaticon-star"></i>My Favorites</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dash-bid-item dashboard-widget mb-4">
                        <div class="header">
                            <h4 class="title">My Favorites</h4>
                        </div>
                        <div class="button-area justify-content-between">
                            <form class="product-search">
                                <input type="text" placeholder="Item Name">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                            <div class="sort-winning-bid">
                                <div class="item">Sort By : </div>
                                <select name="sort-by" class="select-bar">
                                    <option value="all">All</option>
                                    <option value="name">Name</option>
                                    <option value="date">Date</option>
                                    <option value="type">Type</option>
                                    <option value="car">Car</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-30-none justify-content-center">
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/art3.png" alt="car"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="#0">2018 Hyundai Sonata</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Buy Now</div>
                                                <div class="amount">$5,00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter26"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#0" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/art3.png" alt="car"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="#0">2018 Nissan Versa, S</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Buy Now</div>
                                                <div class="amount">$5,00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter27"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#0" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/art3.png" alt="product"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="#0">2019 Mercedes-Benz C, 300</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Buy Now</div>
                                                <div class="amount">$5,00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter1"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#0" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                <div class="auction-thumb">
                                    <a href="./product-details.html"><img src="./assets/images/art3.png" alt="product"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="#0">2017 Harley-Davidson XG750,</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Buy Now</div>
                                                <div class="amount">$5,00.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter2"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#0" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->
    <?php require('footer.php'); ?>