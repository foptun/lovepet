<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าแรก</a>
                        </li>
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



                    <!-- *** MENUS AND FILTERS END *** -->

                </div>

                <div class="col-md-9">
                    <div class="box" style="text-align: center;">
                        <h1>ประชาสัมพันธ์</h1>
                        <img src="img/foundation.png" alt="Obaju logo" class="hidden-xs">
                    </div>



                    <div class="row products box">
                        


                        <div class="col-md-9">


                                                            <div class="" id="contact">
                                                                <h3>หมา & แมว ที่รับการรักษา</h3>

                                                                <?php 

                                                                $sql = "SELECT * FROM tb_heal_pet ORDER BY(id) DESC";
                                                                $rs = mysqli_query($conn, $sql);
                                                                

                                                                $index = 1;
                                                                while( $row = mysqli_fetch_array($rs) ){ 
                                                                    $find_home_id = $row['find_home_id'];
                                                                ?>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-4 ">
                                                                        <?php
                                                                        $sqlImg = "SELECT * FROM tb_find_home WHERE id = '$find_home_id' ";
                                                                        $rsImg = mysqli_query($conn, $sqlImg);
                                                                        $rowImg = mysqli_fetch_array($rsImg);
                                                                        ?>
                                                                        <img src="upload/<?=$rowImg['picture1']?>" class="img-responsive" height="200">
                                                                        

                                                                        <h4 class="pull-right"> 
                                                                            

                                                                        </h4>
                                                                    </div>
                                                                    <!-- /.col-sm-4 -->
                                                                    <div class="col-sm-8">
                                                                        <h3><i class="fa fa-bookmark-o"></i> <?=$row['title']?> </h3>
                                                                        <p class="text-muted"> <?=$row['detail']?> </p>
                                                                        <p class="text-muted"> วันที่:  <?=$row['date']?> </p>
                                                                        
                                                                    </div>
                                                                    <!-- /.col-sm-4 -->
                                                                </div>
                                                                <!-- /.row -->
                                                                <?php 
                                                                    $index++;
                                                                } 
                                                                ?>
                                                                


                                                            </div>


                                                            </div>


                       
                        
                    </div>
                    <!-- /.products -->



                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->