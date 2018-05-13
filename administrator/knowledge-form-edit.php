<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tb_knowledge WHERE id = '$id'";
$query = $conn->query($sql);
$row = $query->fetch_array();
?>
<section class="content-header">
  <h1>
    แก้ไขสาระหมาแมว
  </h1>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">แก้ไขสาระหมาแมว</h3>
  </div>
  <form class="form-group" action="index.php?menu=knowledge-update" method="post" enctype="multipart/form-data">
    <div class="box-body">
      รูป
      <img id="ex_img1" src="../upload/<?php echo $row['picture'] ?>" alt="" height="200">
      <input type="file" class="form-control" name="file1" onchange="readURL(this,1)">
      <input type="hidden" name="h1" value="<?php echo $row['picture'] ?>">
      <br>
      หัวข้อ
      <input type="test" name="header" class="form-control" value="<?php echo $row['header'];?>" required>
      <br>
      รายละเอียด
      <textarea name="detail"  class="form-control textarea" rows="5" placeholder="รายละเอียด และที่อยู่">
      <?php echo $row['detail'];?>
      </textarea>
      <br>

      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <input class="btn btn-primary" type="submit" value="บันทึก"> 
      <a href="#" onclick="window.location = 'index.php?menu=knowledge-form-show';" class="btn btn-default">ยกเลิก</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
</section>
