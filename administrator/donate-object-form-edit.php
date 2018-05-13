<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tb_object WHERE id = '$id' ORDER BY(id) DESC";
$query = $conn->query($sql);
$row = $query->fetch_array();
?>
<section class="content-header">
  <h1>
    แก้ไขผู้บริจาก
  </h1>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">แก้ไขผู้บริจาก</h3>
  </div>
  <form class="form-group" action="index.php?menu=donate-object-update" method="post" enctype="multipart/form-data">
    <div class="box-body">
       ประเภท : บริจากสิ่งของ
      <br><br>
      ชื่อ
      <input class="form-control" type="text" name="first_name" placeholder="ชื่อ" value="<?php echo $row['first_name'];?>" required>
      <br>
      สกุล
      <input class="form-control" type="text" name="last_name" placeholder="สกุล" value="<?php echo $row['last_name'];?>" required>
      <br>
      สิ่งของ
      <input class="form-control" type="text" name="object_name" placeholder="สิ่งของ" value="<?php echo $row['name_object'];?>" required>
      <br>
       จำนวน
      <input class="form-control" type="text" name="qty" placeholder="จำนวน" value="<?php echo $row['qty'];?>" required>
      <br>

      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <input class="btn btn-primary" type="submit" value="แก้ไข"> 
      <a href="#" onclick="window.location = 'index.php?menu=donate-form-show';" class="btn btn-default">ยกเลิก</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
</section>
