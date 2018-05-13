<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าหลัก</a></li>
                        <li>หมาแมวหาบ้าน</li>
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
                    <!-- <div class="box">
                        <h1>Ladies</h1>
                        <p>In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                    </div> -->

                    <!-- <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row products box">

<?php $sql = "SELECT * FROM tb_find_home WHERE pick_user_id = 0 ORDER BY(id) DESC";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){

   while($row = mysqli_fetch_array($result)) { ?>
   
                <div class="col-md-4 col-sm-6">
                    <div class="product text-center">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <a href="index.php?menu=detail&id=<?php echo $row['id'] ?>">
                                        <img src="upload/<?php echo $row['picture1'] ?>" height="200"  class="img-responsive center-block">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="index.php?menu=detail&id=<?php echo $row['id'] ?>" class=" text-center">
                                        <img src="upload/<?php echo $row['picture1'] ?>" height="200" class="img-responsive center-block">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="index.php?menu=detail&id=<?php echo $row['id'] ?>" class="invisible" class=" text-center">
                            <img src="upload/<?php echo $row['picture1'] ?>" height="200" class="img-responsive center-block">
                        </a>
                        <div class="text">
                            <h3><?php echo $row['detail'] ?></h3>
                            <!-- <p class="price">$143.00</p> -->
                            <p class="buttons">
                                <a href="index.php?menu=detail&id=<?php echo $row['id'] ?>" class="btn btn-default">รายละเอียด</a>
                                <!-- <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>สนใจ</a> -->
                            </p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>
<?php }
}
?>
               
                <!-- /.col-md-4 -->
            </div>
            <!-- /.products -->

                    <div class="pages">

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
</div>
            <!-- /.container -->