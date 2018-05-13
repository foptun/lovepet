<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tb_find_home WHERE id = '$id'";
$query = $conn->query($sql);
$row = $query->fetch_array();
?>


<div class="container">

<div class="col-md-12">
    <ul class="breadcrumb">
        <li><a href="index.php?menu=home">หน้าแรก</a>
        </li>
        <li>แก้ไขโพสหมาแมวหาบ้าน</li>
    </ul>

</div>


<div class="col-md-12">


    <div class="box" id="contact">
        <section class="content">
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">แก้ไขโพส</h3>
</div>
  <form class="form-group" action="index.php?menu=user-find-home-update" method="post" enctype="multipart/form-data">
    <div class="box-body">
      รูป1
      <img id="ex_img1" src="upload/<?php echo $row['picture1'] ?>" alt="" height="200">
      <input type="file" class="form-control" name="file1" onchange="readURL(this,1)">
      <input type="hidden" name="h1" value="<?php echo $row['picture1'] ?>">
      <br>
      รูป2
      <img id="ex_img2" src="upload/<?php echo $row['picture2'] ?>" alt="" height="200">
      <input type="file" class="form-control" name="file2" onchange="readURL(this,2)">
      <input type="hidden" name="h2" value="<?php echo $row['picture2'] ?>">
      <br>
      รูป3
      <img id="ex_img3" src="upload/<?php echo $row['picture3'] ?>" alt="" height="200">
      <input type="file" class="form-control" name="file3" onchange="readURL(this,3)">
      <input type="hidden" name="h3" value="<?php echo $row['picture3'] ?>">
      <br>
      รายละเอียด
      <textarea name="detail"  class="form-control textarea" rows="5" placeholder="รายละเอียด และที่อยู่">
      <?php echo $row['detail'];?>
      </textarea>
      <br>

      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <input class="btn btn-primary" type="submit" value="บันทึก"> 
      <a href="#" onclick="window.location = 'index.php?menu=user-find-home-form-show';" class="btn btn-default">ยกเลิก</a>
    </div>
  </form>
  <!-- /.box-body -->
  </div>
</div>
</section>


                    </div>

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
