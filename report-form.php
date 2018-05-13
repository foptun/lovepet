
<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าแรก</a></li>
                        <li>รายงานบัญชี</li>
                    </ul>

                </div>


<div class="col-md-12">


<div class="box" id="contact">
<section class="content">


 <?php $sql = "SELECT date FROM tb_donate GROUP BY MONTH(date) ORDER BY YEAR(date) DESC";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
           while($row = mysqli_fetch_array($result)) { ?>

           	<a href="index.php?menu=report-income&date=<?php echo $row['date']; ?>"><?php echo "รายงานบัญชีรายรับ ประจำเดือน : ".DateThai($row['date']); ?> </a> | 

            <a href="index.php?menu=report-expenses&date=<?php echo $row['date']; ?>"><?php echo "รายงานบัญชีรายจ่าย ประจำเดือน : ".DateThai($row['date']); ?> </a> | 

            <a href="index.php?menu=report-donate&date=<?php echo $row['date']; ?>"><?php echo "รายงานรายการบริจาค ประจำเดือน : ".DateThai($row['date']); ?> <br></a>
 <?php } } ?>
</section>
</div>
</div>
</div>

