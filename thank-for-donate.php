<?php
        $sql = "SELECT u.first_name, u.last_name, u.address, d.price, d.date FROM tb_donate as d ,tb_user as u WHERE u.id = d.user_id AND u.id =".$_SESSION['user_id']."  AND d.id =".$_GET['id'];

        $query = $conn->query($sql);
        $row = $query->fetch_array();
?>
<div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">หน้าแรก</a>
                        </li>
                        <li>ขอบคุณ</li>
                    </ul>

                </div>


<div class="col-md-12">


<div class="box" id="contact">
<section class="content">
 <h3 class="text-center">อนุโมทนาบัตร</h3>
 <p class="text-center">ขออนุโมทนาแด่</p>
 <p class="text-center"><b><?php echo $row['first_name'].' '.$row['last_name'] ?></b> <br><br>
ผู้บริจาคทรัพย์ในด้าน ....เงินทุน....
ให้กับ บ้านเพื่อนสี่ขา-สารคาม <br><br>

ที่อยู่ <?php echo $row['address'] ?> <br><br>

ขออำนาจคุณพระศรีรัตนตรัยและบุญกุศลที่บำเพ็ญนี้ จงบันดาลให้ท่านเจริญ <br><br>
ด้วย อายุ วรรณะ สุขะ พละ ปฏิภาณ ธรรมสารสมบัติ และประสพสิ่งอันพึงปรารถนา <br><br>

ทุกทิพาราตรีกาล เทอญฯ <br> <br>

วันที่ <?php echo DateCookky($row['date']); ?> <br> </p>


<div class="row text-center">
    <div class="col-md-12 text-center">
                <table class="table table-responsive" >
                    <tr>
                        <td>
                        <b><?php echo $row['first_name'].' '.$row['last_name'] ?></b><br>
                    ผู้รับเงิน
                        </td>
                        <td>
                        <b><?php echo $row['first_name'].' '.$row['last_name'] ?></b><br>
                    ผู้ดูแลโครงการ
                        </td>
                    </tr>
                </table>
    </div>
</div>

<br><br>

<div>
	<a href="#" onclick="window.print();" class="btn btn-primary">พิมพ์ใบอนุโมทนา</a>
</div>

</section>
</div>
</div>
</div>

