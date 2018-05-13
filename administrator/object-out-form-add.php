<section class="content-header">
  <h1>
    เพิ่มข้อมูลเบิกของ
  </h1>
</section>
<?php $check_qty = $_GET['qty'];?>

<section class="content">
<div class="box box-success">

  <form class="form-group" action="index.php?menu=object-out-insert" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
      <input type="hidden" name="name_object" value="<?php echo $_GET['name_object'] ?>">
      สิ่งของ : <?php echo $_GET['name_object'];?>
      <br><br>
      รายละเอียด
      <textarea class="form-control" rows="5" name="detail" placeholder="รายละเอียด" required></textarea>
      <br>
      จำนวน
      <select class="form-control" name="qty" required>
        <?php for ($i=1; $i <= $check_qty; $i++) { ?>
          <option value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php } ?>
      </select>
      <br>
      <input class="btn btn-primary" type="submit" value="เพิ่ม"> 
      <a href="#" onclick="window.location = 'index.php?menu=object-out-form-show';" class="btn btn-default">ยกเลิก</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
</section>
