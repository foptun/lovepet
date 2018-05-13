<?php
$sql = "SELECT * FROM tb_knowledge WHERE id=".$_GET['id'];
$rs = mysqli_query($conn, $sql);
?>
<div class="container">

<div class="col-md-12">
    <ul class="breadcrumb">
        <li><a href="index.php?menu=home">หน้าแรก</a>
        </li>
        <li>สาระหมาแมว</li>
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
        <h3>สาระหมาแมว</h3>

        <?php 
        while( $row = mysqli_fetch_array($rs) ){ 
        ?>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h3><?=$row['header']?></h3>
            </div>
            <div class="col-md-4 ">
                <img src="upload/<?=$row['picture']?>" class="img-responsive" height="200">
            </div>

            <!-- /.col-sm-4 -->
            <div class="col-md-12">
                
                <p class="text-muted"> <?=$row['detail']?> </p>
                
            </div>
            <!-- /.col-sm-4 -->
        </div>
        <!-- /.row -->
        <?php 
        } 
        ?>
        


    </div>


</div>
<!-- /.col-md-9 -->
</div>
<!-- /.container -->
