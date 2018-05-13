    <!-- *** TOPBAR ***
 _________________________________________________________ -->
 <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <!-- <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a> -->
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                <?php if($_SESSION["user_id"] == ''){ ?>
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">เข้าสู่ระบบ</a></li>
                    <li><a href="index.php?menu=register">สมัครสมาชิก</a></li>
                <?php }else { ?>
                    <li><a href="#"><?php echo $_SESSION["first_name"].' '.$_SESSION["last_name"]; ?></a></li>
                    <li><a href="index.php?menu=check-logout" onclick="return confirm('ยืนยันการออกจากระบบ!');">ออกจากระบบ</a></li>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">เข้าสู่ระบบ</h4>
                    </div>
                    <div class="modal-body">
                        <form action="index.php?menu=check-login" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" name="username" placeholder="รหัสผู้ใช้" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" name="password" placeholder="รหัสผ่าน" required>
                            </div>

                            <p class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>เข้าสู่ระบบ</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="img/logo-h.png" alt="Obaju logo" class="hidden-xs">
                    <img src="img/logo-h.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">
<?php if($_SESSION["user_id"] == ''){ ?>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php?menu=home">หน้าแรก</a></li>
                    <li><a href="index.php?menu=report-form">รายงานบัญชี</a></li>
                    <li><a href="index.php?menu=activity">ตารางกิจกรรม</a></li>
                    <li><a href="index.php?menu=find-home">หมาแมวหาบ้าน</a></li>
                    <li><a href="index.php?menu=knowledge">สาระหมาแมว</a></li>
                    <li><a href="index.php?menu=donate">บริจาก</a></li>
                    <li><a href="index.php?menu=contact">ติดต่อเรา</a></li>
                    <li><a href="index.php?menu=about">เกี่ยวกับเรา</a></li>
                </ul>
<?php }else { ?>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php?menu=home">หน้าแรก</a></li>
                    <li><a href="index.php?menu=report-form">รายงานบัญชี</a></li>
                    <li><a href="index.php?menu=activity">ตารางกิจกรรม</a></li>
                    <li><a href="index.php?menu=find-home">หมาแมวหาบ้าน</a></li>
                    <li><a href="index.php?menu=knowledge">สาระหมาแมว</a></li>
                    <li><a href="index.php?menu=donate">บริจาก</a></li>
                    <li><a href="index.php?menu=contact">ติดต่อเรา</a></li>
                    <li><a href="index.php?menu=about">เกี่ยวกับเรา</a></li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><i class="fa fa-gear fa-lg"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5>จัดการ</h5>
                                            <ul>
                                                <li><a href="#">โปรไฟล์</a>
                                                </li>
                                                <li><a href="index.php?menu=user-find-home-form-show">จัดการหมาแมว</a>
                                                </li>
                                                <li><a href="index.php?menu=user-order-form-show">จองหมาแมว</a></li>
                                                <li><a href="index.php?menu=user-donate-form-add">บริจากเงิน</a></li>
                                                <li><a href="index.php?menu=user-donate-form-show">ประวัติการบริจาก</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>
<?php } ?>

            </div>
            <!--/.nav-collapse -->



            <!-- <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
                </div>

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div> -->

            <!-- <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div> -->
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->