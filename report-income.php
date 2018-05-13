
<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าแรก</a></li>
                        <li>รายงานบัญชีรายรับ</li>
                    </ul>

                </div>


<div class="col-md-12">


<div class="box" id="contact">
<section class="content">

 <table class="table table-bordered">
 	<tr>
 		<th>วันที่</th>
 		<th>รายรับ</th>
 		<th>คงเหลือ</th>
 		<th>ชื่อ - สกุล</th>
 	</tr>
 	<?php $date = $_GET['date']; ?>
 	 <?php $sql = "SELECT d.*, u.first_name, u.last_name  FROM tb_donate as d, tb_user as u  WHERE MONTH(d.date) = MONTH('$date') AND YEAR(d.date) = YEAR('$date') AND d.user_id = u.id  ORDER BY date(d.date)";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
            	$total = 0;
           while($row = mysqli_fetch_array($result)) { 
           		$total = ($total + $row['price']);
           	?>

           	<tr>
           		<td><?php echo DateCookky($row['date']); ?></td>
           		<td><?php echo number_format($row['price']); ?></td>
           		<td><?php echo number_format($total) ?></td>
           		<td><?php echo $row['first_name']. ' '.$row['last_name']?></td>
           	</tr>
 <?php } } ?>
 <tr>
    <th colspan="2">รวมทั้งหมด</th>
    <td><?php echo number_format($total) ?></td>
    <td></td>
  </tr>
 </table>

</section>
</div>
</div>
</div>

