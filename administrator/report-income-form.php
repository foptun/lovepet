<section class="content-header">
  <h1>
    รายงานรายรับ
  </h1>
</section>

<section class="content">
<div class="box box-success">
<br><br><br>
  <form class="form-group" action="index.php?menu=report-income-month" method="post">
    <div class="box-body">
      <div class="col-md-12">
      เดือน
      </div>
      <div class="col-md-2">
        <input type="text" id="datepicker" name="month" class="form-control" required>
      </div>
      <div class="col-md-4">
        <input type="submit" value="ดูรายงาน" class="btn btn-info">
      </div>
      
    </div>
  </form>
  <!-- /.box-body -->

  <form class="form-group" action="index.php?menu=report-income-year" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <div class="col-md-12">
      ปี
      </div>
      <div class="col-md-2">
        <input type="text" id="datepickerYear" name="year" class="form-control" required>
      </div>
      <div class="col-md-4">
        <input type="submit" value="ดูรายงาน" class="btn btn-info">
      </div>
      
    </div>
  </form>

</div>
</div>
</section>
