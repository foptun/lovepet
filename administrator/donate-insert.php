
<section id="main-content">
   <section class="wrapper">
        <?php
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $price = $_POST['price'];
            

            $sql = "INSERT INTO tb_donate(user_id, first_name, last_name, type, price, bill, status) VALUES(0,'$first_name','$last_name','เงินสด','$price','-','อนุมัติ') ";

            $query = $conn->query($sql);


            if ($query) {
                ?>
                <script>
                    alert('บันทึกข้อมูลเรียบร้อย!');
                    window.location = 'index.php?menu=donate-form-show';
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