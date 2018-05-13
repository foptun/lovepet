<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tb_pay_out WHERE id = '$id' ORDER BY(id) DESC";
$query = $conn->query($sql);
$row = $query->fetch_array();
?>
<section class="content-header">
  <h1>
    แก้ไขข้อมูลเบิกเงิน
  </h1>
</section>

<section class="content">
<div class="box box-success">

  <form class="form-group" action="index.php?menu=pay-out-update" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <input type="hidden" name="id" value="<?php echo $row['id']?>">
      รายละเอียด
      <textarea class="form-control" rows="5" name="detail" placeholder="รายละเอียด" required><?php echo $row['detail']?></textarea>
      <br>
      จำนวนเงิน
      <input class="form-control" type="text" name="price" value="<?php echo $row['money']?>" placeholder="จำนวนเงิน" required>
      <br>
      <input class="btn btn-primary" type="submit" value="แก้ไข"> 
      <a href="#" onclick="window.location = 'index.php?menu=pay-out-form-show';" class="btn btn-default">ยกเลิก</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
</section>
