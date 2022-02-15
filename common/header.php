<?php include_once("common/class.banglaDate.php");

$bn=new BanglaDate(time());$bn->set_time(time(), 6);$date=$bn->get_date();
$dtDateBN=$date[1]."&nbsp;".$date[0]."&nbsp;".$date[2];
?>
<header>
    <div class="HeaderTopBar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="DateTime d-flex align-items-center">
                        <p class="date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Dhaka, Bangladesh &nbsp;<i
                                class="fa fa-phone-square" aria-hidden="true"></i><span> <a
                                    href="tel:+880 1745508060">+880 1745508060 </a></span>&nbsp;<i
                                class="fa fa-envelope" aria-hidden="true"></i><span><a
                                    href="mailto:hello@treevaly.com">hello@treevaly.com</a></span>
                            &nbsp;<i class="fa fa-clock" aria-hidden="true"></i><span>9 AM - 9 PM</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="DSocialLink">
                        <ul>
                            <li><a href="#" target="_blank">Be our Merchant</a></li>
                            <li><a href="#" target="_blank">STORES</a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="DLogoArea">
        <div class="row">
            <div class="col-lg-3">
                <div class="DLogo d-flex justify-content-start">
                    <a href="<?php echo $sSiteURL; ?>">
                        <img src="<?php echo $sLogoURL; ?>" alt="<?php echo $sSiteTitle; ?>"
                            title="<?php echo $sSiteTitle; ?>" class="img-fluid img100">
                    </a>
                </div>
            </div>
            <div class="col-lg-7 ">
                <!-- <div class="DHeaderAdd">
                    <a href="#"><img src="<?php echo $sSiteURL; ?>media/Advertisement/Leaderboard-728x90-2110271439.jpg" alt="" title="" class="img-fluid img100"></a>
                </div> -->
                <div class="Search">
                    <form role="search" method="get" class="" action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="search" id="" class="form-control" placeholder="Search" value="" name="s">
                            </div>
                            <div class="col-lg-4">
                                <select name="product_cat" class="form-control">
                                    <option value="">— Select Category —</option>
                                    <option value="aquarium">Aquarium</option>
                                    <option value="balcony">Balcony</option>
                                    <option value="bulbs">Bulbs</option>
                                    <option value="butter-yogurt">Butter &amp; Yogurt</option>
                                    <option value="ceramic-planters">Ceramic Planters</option>
                                    <option value="coffee-tea">Coffee &amp; Tea</option>
                                    <option value="courtyard">Courtyard</option>
                                    <option value="dracaena-bamboo">Dracaena Bamboo</option>
                                    <option value="fresh-drinking-items">Drinking Items</option>
                                    <option value="fresh-fruits">Fresh Fruits</option>
                                    <option value="fresh-vegetables">Fresh Vegetables</option>
                                    <option value="fruit-plants">Fruit Plants</option>
                                    <option value="gardening-kits">Gardening Kits</option>
                                    <option value="handcrafted-pots">Handcrafted Pots</option>
                                    <option value="home-decor">Home Decor</option>
                                </select>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" value="" class="form-control">
                                    <i class="fa fa-search" aria-hidden="true"></i></button>
                                <input type="hidden" name="post_type" value="product">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="myHeader">
        <div class="DHeaderNav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a href="" class="StickyLogo" rel="home">
                                <img src="<?php echo $sSiteURL; ?>media/common/logo2.png"
                                    title="<?php echo $sSiteTitle; ?>" alt="<?php echo $sSiteTitle; ?>"
                                    class="img-fluid img100">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <div class="dropdown"><a id="dropdownMenuButton" role="button"
                                                data-toggle="dropdown disable" aria-haspopup="true"
                                                aria-expanded="false" class="nav-link dropdown-toggle"
                                                href="#">Flora & Plants</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a
                                                    class="dropdown-item" href="#">Flowering Plants</a><a
                                                    class="dropdown-item" href="#">Indoor Plants</a><a
                                                    class="dropdown-item" href="#">Outdoor Plants</a></div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="dropdown"><a id="dropdownMenuButton" role="button"
                                                data-toggle="dropdown disable" aria-haspopup="true"
                                                aria-expanded="false" class="nav-link dropdown-toggle"
                                                href="#">Landscaping</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a
                                                    class="dropdown-item" href="#">Flowering Plants</a><a
                                                    class="dropdown-item" href="#">Indoor Plants</a><a
                                                    class="dropdown-item" href="#">Outdoor Plants</a></div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="dropdown"><a id="dropdownMenuButton" role="button"
                                                data-toggle="dropdown disable" aria-haspopup="true"
                                                aria-expanded="false" class="nav-link dropdown-toggle"
                                                href="#">Pots & Pebbels</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a
                                                    class="dropdown-item" href="#">Flowering Plants</a><a
                                                    class="dropdown-item" href="#">Indoor Plants</a><a
                                                    class="dropdown-item" href="#">Outdoor Plants</a></div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="dropdown"><a id="dropdownMenuButton" role="button"
                                                data-toggle="dropdown disable" aria-haspopup="true"
                                                aria-expanded="false" class="nav-link dropdown-toggle"
                                                href="#">Organic Foods</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a
                                                    class="dropdown-item" href="#">Flowering Plants</a><a
                                                    class="dropdown-item" href="#">Indoor Plants</a><a
                                                    class="dropdown-item" href="#">Outdoor Plants</a></div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="dropdown"><a id="dropdownMenuButton" role="button"
                                                data-toggle="dropdown disable" aria-haspopup="true"
                                                aria-expanded="false" class="nav-link dropdown-toggle"
                                                href="#">Gardening Kits</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a
                                                    class="dropdown-item" href="#">Flowering Plants</a><a
                                                    class="dropdown-item" href="#">Indoor Plants</a><a
                                                    class="dropdown-item" href="#">Outdoor Plants</a></div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="dropdown"><a id="dropdownMenuButton" role="button"
                                                data-toggle="dropdown disable" aria-haspopup="true"
                                                aria-expanded="false" class="nav-link dropdown-toggle"
                                                href="#">Gifts</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a
                                                    class="dropdown-item" href="#">Flowering Plants</a><a
                                                    class="dropdown-item" href="#">Indoor Plants</a><a
                                                    class="dropdown-item" href="#">Outdoor Plants</a></div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="dropdown"><a id="dropdownMenuButton" role="button"
                                                data-toggle="dropdown disable" aria-haspopup="true"
                                                aria-expanded="false" class="nav-link dropdown-toggle"
                                                href="#">Interior & Decor</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a
                                                    class="dropdown-item" href="#">Flowering Plants</a><a
                                                    class="dropdown-item" href="#">Indoor Plants</a><a
                                                    class="dropdown-item" href="#">Outdoor Plants</a></div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="dropdown"><a id="dropdownMenuButton" role="button"
                                                data-toggle="dropdown disable" aria-haspopup="true"
                                                aria-expanded="false" class="nav-link dropdown-toggle"
                                                href="#">More</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a
                                                    class="dropdown-item" href="#">Flowering Plants</a><a
                                                    class="dropdown-item" href="#">Indoor Plants</a><a
                                                    class="dropdown-item" href="#">Outdoor Plants</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="navToggle">
                            <p  class="pr-4"><i class="fa fa-user"></i></p><p class="pr-4"><i class="fa fa-heart"></i></p><span class="menu"></span>
                        </div>
                        <div class="DNav2">
                            <nav>
                                <div class="container">
                                    <ul>
                                        <li><a href="#">
                                            <img height= "50px" width="50px" src="https://i0.wp.com/treevaly.com/wp-content/uploads/2020/05/Ficus-Elastica-Plant-Treevaly.com_.png?resize=600%2C600&ssl=1" alt="">
                                           <p class="featuredProduct">Ficus Elastica Plant</p>
                                           </a></li>
                                    </ul>
                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>