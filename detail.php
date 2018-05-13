<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าหลัก</a>
                        </li>
                        <li><a href="index.php?menu=find-home">หมาแมวหาบ้าน</a>
                        </li>
                        <li>รายละเอียด</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                   <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">ติดต่อ</h3>
                        </div>

                        <div class="panel-body">
                            <p>เพื่อนสี่ขา-สารคาม <br> 
                                ซอยศุนย์ร่วมจิตร ตำบลตลาด อำเภอเมืองมหาสารคาม จังหวัดมหาสารคาม 44000 <br>
                                FB : PheunsikhaSarakham <br>
                                หรือ www.facebook.com/af4dog <br>
                                Tel. 064-431-2031</p>

                        </div>
                    </div>


                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">โรงพยาบาล</h3>
                        </div>

                        <div class="panel-body">
                            <p>Tel. 064-431-2031</p>

                        </div>
                    </div>



                </div>

                <div class="col-md-9">
        <?php $id = $_GET['id']; ?>
		<?php $sql = "SELECT * FROM `tb_find_home` WHERE id=".$id;
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0){
   
           while($row = mysqli_fetch_array($result)) { ?>

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="upload/<?php echo $row['picture1'] ?>" height="300" width="100%" class="img-responsive">
                            </div>

                            <!-- <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div> -->
                            <!-- /.ribbon -->

                            <!-- <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div> -->
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">
                            <!-- <div class="box">
                                <h1 class="text-center">White Blouse Armani</h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material & care and sizing</a>
                                </p>
                                <p class="price">$124.00</p>

                                <p class="text-center buttons">
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a> 
                                    <a href="basket.html" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
                                </p>


                            </div> -->

                            <div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <a href="upload/<?php echo $row['picture1'] ?>" class="thumb">
                                        <img src="upload/<?php echo $row['picture1'] ?>" width="100%" height="100" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="upload/<?php echo $row['picture2'] ?>" class="thumb">
                                        <img src="upload/<?php echo $row['picture2'] ?>" width="100%" height="100" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="upload/<?php echo $row['picture3'] ?>" class="thumb">
                                        <img src="upload/<?php echo $row['picture3'] ?>" width="100%" height="100" class="img-responsive">
                                    </a>
                                </div>
                            </div>

    <br>
    <?php  if(isset($_SESSION['user_id'])){?>
                            <div class="box">
                                <p class="text-center buttons">
                                    <a href="index.php?menu=user-order-insert&id=<?php echo $row['id'] ?>" class="btn btn-primary btn-block" onclick="return confirm('ยืนยันการจอง');"> จองสัตว์เลี้ยง</a> 
                                </p>


                            </div>
    <?php } ?>

                        </div>

<?php } } ?>

                    </div>

<?php $sql = "SELECT * FROM `tb_find_home` WHERE id=".$id;
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0){
   
           while($row = mysqli_fetch_array($result)) { ?>
                    <div class="box" id="details">
                        <p>
                        <?php echo $row['detail'] ?>

                            <hr>
                            <div class="social">
                                <h4>Show it to your friends</h4>
                                <p>
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>
                    </div>
                    <?php } } ?>

                    <div class="row same-height-row">
                        

                    </div>

                    <div class="row same-height-row">

                    </div>

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->