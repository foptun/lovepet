<section class="content-header">
  <h1>
    เพิ่มข้อมูลเบิกเงิน
  </h1>
</section>

<section class="content">
<div class="box box-success">

  <form class="form-group" action="index.php?menu=pay-out-insert" method="post" enctype="multipart/form-data">
    <div class="box-body">
      รายละเอียด
      <textarea class="form-control" rows="5" name="detail" placeholder="รายละเอียด" required></textarea>
      <br>
      จำนวนเงิน
      <input class="form-control" type="text" name="price" placeholder="จำนวนเงิน" required>
      <br>
      <input class="btn btn-primary" type="submit" value="เพิ่ม"> 
      <a href="#" onclick="window.location = 'index.php?menu=pay-out-form-show';" class="btn btn-default">ยกเลิก</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
</section>
