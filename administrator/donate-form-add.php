<section class="content-header">
  <h1>
    เพิ่มผู้บริจาก
    <small>Control panel</small>
  </h1>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">เพิ่มผู้บริจาก</h3>
  </div>
  <form class="form-group" action="index.php?menu=donate-insert" method="post" enctype="multipart/form-data">
    <div class="box-body">
      ประเภท : บริจากเงินสด
      <br><br>
      ชื่อ
      <input class="form-control" type="text" name="first_name" placeholder="ชื่อ" required>
      <br>
      สกุล
      <input class="form-control" type="text" name="last_name" placeholder="สกุล" required>
      <br>
      จำนวนเงิน
      <input class="form-control" type="text" name="price" placeholder="จำนวนเงิน" required>
      <br>
      <input class="btn btn-primary" type="submit" value="เพิ่ม"> 
      <a href="#" onclick="window.location = 'index.php?menu=donate-form-show';" class="btn btn-default">ยกเลิก</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
</section>
