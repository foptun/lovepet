<section class="content-header">
  <h1>
    เพิ่มกิจกรรม
  </h1>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">เพิ่มกิจกรรม</h3>
  </div>
  <form class="form-group" action="index.php?menu=activity-insert" method="post" enctype="multipart/form-data">
    <div class="box-body">
      รูป
      <img id="ex_img1" src="" alt="" height="200">
      <input type="file" class="form-control" name="file1" onchange="readURL(this,1)">
      <br>
      หัวข้อ
      <input type="test" name="header" class="form-control" value="" required>
      <br>
      รายละเอียด
      <textarea name="detail"  class="form-control textarea" rows="5" placeholder="รายละเอียด"></textarea>
      <br>

      <input class="btn btn-primary" type="submit" value="บันทึก"> 
      <a href="#" onclick="window.location = 'index.php?menu=activity-form-show';" class="btn btn-default">ยกเลิก</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
</section>
