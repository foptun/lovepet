
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าแรก</a>
                        </li>
                        <li>บริจาก</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">ติดต่อ</h3>
                        </div>

                        <div class="panel-body">
                            <p>เพื่อนสี่ขา-สารคาม <br> 
                                ซอยศุนย์ร่วมจิตร ตำบลตลาด อำเภอเมืองมหาสารคาม จังหวัดมหาสารคาม 44000 <br>
                                FB : PheunsikhaSarakham <br>
                                หรือ www.facebook.com/af4dog <br>
                                Tel. 064-431-2031</p>

                        </div>
                    </div>


                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">โรงพยาบาล</h3>
                        </div>

                        <div class="panel-body">
                            <p>Tel. 064-431-2031</p>

                        </div>
                    </div>

                    <!-- *** PAGES MENU END *** -->


                    <!-- <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div> -->
                </div>

                <div class="col-md-9">


                    <div class="box" id="contact">
                    
                    <h3>บริจาคผ่านธนาคาร</h3>
                    <li>4150208018 (กรุงไทย) นางสาวดวงฤทัย ไพรมาตย์</li>
                    <li>2245376899 (ไทยพาณิชย์) ดวงฤทัย ไพรมาตย์</li>
                    
                    
                    <h3>บริจาคโดยตรงกับทางบ้าน</h3>
                    <li>บ้านสี่ขาสารคาม ซอยศูนย์ร่วมจิตร ตำบลตลาด อำเภอเมืองมหาสารคาม จังหวัดมหาสารคาม</li>
                    <li>บ้านเอเอฟสี่ขา มหาสารคาม ศูนย์ร่วมจิตร ตำบลตลาด อำเภอเมืองมหาสารคาม จังหวัดมหาสารคาม</li>

                    </div>



<div class="box" id="contact">
    <section class="content">
      <h3>เงินสด</h3>

    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>ชื่อ - สกุล</th>
        <th>วันที่</th>
        <th>จำนวนเงิน</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT o.*, u.first_name, u.last_name FROM tb_donate as o, tb_user as u WHERE o.user_id = u.id  AND  status = 'อนุมัติ'";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo number_format($row['price']); ?></td>
      </tr>
      <?php
    }
      ?>
      </tbody>
      
    </table>

</section>

<section class="content">
  <h3>สิ่งของ</h3>

    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>ชื่อ - สกุล</th>
        <th>วันที่</th>
        <th>สิ่งของ</th>
        <th>จำนวน</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT o.*, u.first_name, u.last_name FROM tb_object as o, tb_user as u WHERE o.user_id = u.id ";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['name_object']; ?></td>
        <td><?php echo $row['qty']; ?></td>
      </tr>
      <?php
    }
      ?>
      </tbody>
      
    </table>
</section>

</div>

</div>

</div>
<!-- /.col-md-9 -->
