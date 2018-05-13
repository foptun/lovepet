<?php
$sql = "SELECT * FROM tb_activity ORDER BY(id) DESC";
$rs = mysqli_query($conn, $sql);
?>
<div class="container">

<div class="col-md-12">
    <ul class="breadcrumb">
        <li><a href="index.php?menu=home">หน้าแรก</a>
        </li>
        <li>กิจกรรม</li>
    </ul>

</div>

<div class="col-md-3">
    <!-- *** PAGES MENU ***
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


    <div class="box" id="contact">
        <h3>กิจกรรม</h3>

        <?php 
        $index = 1;
        while( $row = mysqli_fetch_array($rs) ){ 
            $activity_id = $row['id'];
        ?>
        <hr>
        <div class="row">
            <div class="col-sm-4 ">
                <img src="upload/<?=$row['picture']?>" class="img-responsive">
                <?php
                $sqlCountLike = "SELECT COUNT(*) AS count_like FROM tb_activity_user_like WHERE activity_id='$activity_id' ";
                $rsCountLike = mysqli_query($conn, $sqlCountLike);
                $rowCountLike = mysqli_fetch_array($rsCountLike);
                $countLike = $rowCountLike['count_like'];
                ?>
                <a class="btn btn-link" data-toggle="modal" data-target="#userLikeModal<?=$index?>">มีคนสนใจแล้ว(<?=$countLike?>)</a>
                
                            <!-- Modal -->
                            <div class="modal fade" id="userLikeModal<?=$index?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">คนที่สนใจ</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        $sqlShowUserLike = "SELECT tb_user.first_name, tb_user.last_name FROM tb_user, tb_activity_user_like 
                                                        WHERE tb_activity_user_like.user_id = tb_user.id
                                                        AND tb_activity_user_like.activity_id = '$activity_id'  ";
                                        $rsShowUserLike = mysqli_query($conn, $sqlShowUserLike);
                                        ?>

                                        <?php while($rowShowUserLike = mysqli_fetch_array($rsShowUserLike)){ ?>
                                            <a class="btn btn-link"><?=$rowShowUserLike['first_name'].' '.$rowShowUserLike['last_name']?></a> <br>
                                        <?php } ?>
                                    </div>
                                    <br>
                                    </div>
                                </div>
                            </div>
                            <!-- END Modal -->

                <h4 class="pull-right"> 
                    <?php
                    $user_id = $_SESSION["user_id"];
                    $sqlUserLike = "SELECT * FROM tb_activity_user_like WHERE activity_id='$activity_id' AND user_id='$user_id' ";
                    $rsUserLike = mysqli_query($conn, $sqlUserLike);
                    $rowUserLike = mysqli_fetch_array($rsUserLike);
                    ?>
                    
                    <?php if(isset($_SESSION["user_id"])){?>

                    <?php if(mysqli_num_rows($rsUserLike) > 0){ ?>
                        <a href="index.php?menu=activity-unLike&activity_id=<?=$activity_id?>&user_id=<?=$user_id?>">
                            <span style="color: #FF0033"><i class="fa fa-heart"></i></span>
                        </a>
                    <?php }else{ ?>
                        <a href="index.php?menu=activity-like&activity_id=<?=$activity_id?>&user_id=<?=$user_id?>">
                            <span style="color: #FF0033"><i class="fa fa-heart-o"></i></span>
                        </a>
                    <?php } ?>
                    
                    <?php } ?>
                </h4>
            </div>
            <!-- /.col-sm-4 -->
            <div class="col-sm-8">
                <h3><i class="fa fa-bookmark-o"></i> <?=$row['title']?> </h3>
                <p class="text-muted"> <?=$row['detail']?> </p>
                
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
<!-- /.col-md-9 -->
</div>
<!-- /.container -->
