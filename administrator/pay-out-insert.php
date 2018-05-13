
<section id="main-content">
   <section class="wrapper">
        <?php
            $detail = $_POST['detail'];
            $price = $_POST['price'];
            $id = $_SESSION["user_id"];
            

            $sql = "INSERT INTO tb_pay_out(user_id, detail, money) VALUES ('$id','$detail','$price')";

            $query = $conn->query($sql);


            if ($query) {
                ?>
                <script>
                    alert('บันทึกข้อมูลเรียบร้อย!');
                    window.location = 'index.php?menu=pay-out-form-show';
                </script>
                <?php
            }else{
                //echo $sql;
                ?>
                <script>
                    alert('Insert Fails!!!');
                    //window.location = 'index.php?menu=promotion-addForm';
                </script>
                <?php
            }

        ?>
   </section>
</section>