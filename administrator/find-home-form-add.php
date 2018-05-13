<section class="content-header">
  <h1>
    เพิ่มโพส
    <small>Control panel</small>
  </h1>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">เพิ่มโพส</h3>
  </div>
  <form class="form-group" action="index.php?menu=find-home-insert" method="post" enctype="multipart/form-data">
    <div class="box-body">
      รูป1
      <img id="ex_img1" src="" alt="" height="200">
      <input type="file" class="form-control" name="file1" onchange="readURL(this,1);" required>
      <br>
      รูป2
      <img id="ex_img2" src="" alt="" height="200">
      <input type="file" class="form-control" name="file2" onchange="readURL(this,2);" required>
      <br>
      รูป3
      <img id="ex_img3" src="" alt="" height="200">
      <input type="file" class="form-control" name="file3" onchange="readURL(this,3);" required>
      <br>
      รายละเอียด
      <textarea name="detail"  class="form-control textarea" rows="5" placeholder="รายละเอียด และที่อยู่">

      </textarea>
      <br>

      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
      <input class="btn btn-primary" type="submit" value="บันทึก"> 
      <a href="#" onclick="window.location = 'index.php?menu=find-home-form-show';" class="btn btn-default">ยกเลิก</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
</section>
