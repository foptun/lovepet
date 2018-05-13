
<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าแรก</a></li>
                        <li>รายงานบัญชีรายจ่าย</li>
                    </ul>

                </div>


<div class="col-md-12">


<div class="box" id="contact">
<section class="content">

 <table class="table table-bordered">
 	<tr>
 		<th>วันที่</th>
 		<th>รายจ่าย</th>
 		<th>รายละเอียด</th>
 		<th>ทั้งหมด</th>
 	</tr>
 	<?php $date = $_GET['date']; ?>
 	 <?php $sql = "SELECT * FROM tb_pay_out WHERE MONTH(date) = MONTH('$date') AND YEAR(date) = YEAR('$date')  ORDER BY date(date)";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
            	$total = 0;
           while($row = mysqli_fetch_array($result)) { 
           		$total = ($total + $row['money']);
           	?>

           	<tr>
           		<td><?php echo DateCookky($row['date']); ?></td>
           		<td><?php echo number_format($row['money']); ?></td>
           		<td><?php echo $row['detail']; ?></td>
           		<td><?php echo number_format($total) ?></td>
           	</tr>
 <?php } } ?>

 	<tr>
 		<th colspan="3">รวมทั้งหมด</th>
 		<td><?php echo number_format($total) ?></td>
 	</tr>
 </table>

</section>
</div>
</div>
</div>

