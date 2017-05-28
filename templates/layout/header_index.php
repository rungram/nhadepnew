<?php
	$d->reset();
	$sql_list ="select *	from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_tin_l ="select *	from #_tinloai1_1_list order by stt asc limit 0,3";
	$d->query($sql_tin_l);
	$tin_l=$d->result_array();
?>

<div id="header" class="header">

        <!--/.top-header -->
        <!-- MAIN HEADER -->
        <div class="container main-header">
            <div class="row">
                <div class="col-xs-12 col-sm-3 logo">
                    <a title="" href="http://maison-decor.vn/">
                        <img alt="Logo" src="images/logo.png">
                    </a>
                </div>
                <div class="col-xs-7 col-sm-5 header-search-box">
                    <form class="form-inline" method="get" action="http://#/tim-kiem.html">
                        <div class="form-group input-serach">
                            <input type="text" class="txtsearch" name="q" autocomplete="off" placeholder="Tìm sản phẩm của bạn...">
                            <div id="display"></div>
                        </div>
                        <button class="pull-right btn-search">Tìm&nbsp;kiếm</button>
                    </form>
                </div>

                <div class="col-xs-12 col-sm-2 block-language">
                    <div class="language-content">
                        <a href="http://#/?Language=en"><img alt="English" src="http://maison-decor.vn/frame/default/images/en.png" />English</a>
                        <a href="http://maison-decor.vn/?Language=vn"><img alt="Vietnam" src="http://maison-decor.vn/frame/default/images/vn.png" />Tiếng Việt</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 hotline">
                    <div class="content-hotline">
                        <span class="label-hotline">Hotline</span>
                        <span class="re-hotline">0906767509</span>
                    </div>
                </div>

            </div>
        </div>    <!-- END MANIN HEADER -->
        <div id="nav-top-menu" class="nav-top-menu">
            <div class="container">
                <div class="row">
                    <div id="main-menu" class="col-sm-12 main-menu">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <a class="navbar-brand" href="#">MENU</a>
                                </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="http://maison-decor.vn/"><span class="icon-menu i-home"></span><br />Trang chủ</a></li>
                                        
                                <?php include _template."layout/menu_top_list_index.php"; ?>
                                        <li class="dropdown">
                                            <a href="http://maison-decor.vn/thiet-ke-noi-that.html" title="Công trình" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-menu i-design"></span><br />Công trình</a>
                                            <ul class="dropdown-menu container-fluid">
                                                <li class="block-container">
                                                    <ul class="block">

                                                        <li class="link_container">
                                                            <a href="http://maison-decor.vn/thiet-ke-noi-that/can-ho-chung-cu.html">Căn hộ chung cư</a>
                                                        </li>
                                                        <li class="link_container">
                                                            <a href="http://maison-decor.vn/thiet-ke-noi-that/nha-pho.html">Nhà phố</a>
                                                        </li>
                                                        <li class="link_container">
                                                            <a href="http://maison-decor.vn/thiet-ke-noi-that/biet-thu.html">Biệt thự</a>
                                                        </li>
                                                        <li class="link_container">
                                                            <a href="http://maison-decor.vn/thiet-ke-noi-that/van-phong-cong-ty.html">Văn phòng công ty</a>
                                                        </li>
                                                        <li class="link_container">
                                                            <a href="http://maison-decor.vn/thiet-ke-noi-that/quan-ca-phe-studio.html">Quán cà phê / Studio</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="http://maison-decor.vn/khuyen-mai.html"><span class="icon-menu i-khuyenmai"></span><br />Khuyến mãi</a></li>
                                        <li><a href="http://maison-decor.vn/lien-he.html"><span class="icon-menu i-contact"></span><br />Liên hệ</a></li>
                                    </ul>
                                </div><!--/.nav-collapse -->
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- userinfo on top-->
                <div id="form-search-opntop">
                </div>
                <!-- userinfo on top-->
                <div id="user-info-opntop">
                </div>
                <!-- CART ICON ON MMENU -->
                <div id="shopping-cart-box-ontop">
                    <a href=""><i class="fa fa-shopping-cart"></i></a>
                    <div class="shopping-cart-box-ontop-content"></div>
                </div>
            </div>
        </div>
    </div>