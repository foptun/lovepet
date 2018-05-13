
<section id="main-content">
   <section class="wrapper">
        <?php
            $detail = $_POST['detail'];
            $name_object = $_POST['name_object'];
            $qty = $_POST['qty'];
            $user_id = $_SESSION["user_id"];
            

            $sql = "INSERT INTO tb_object_out(user_id, name_object, detail, qty) VALUES ('$user_id','$name_object','$detail','$qty')";

            $query = $conn->query($sql);


            if ($query) {
                ?>
                <script>
                    alert('บันทึกข้อมูลเรียบร้อย!');
                    window.location = 'index.php?menu=object-out-form-show';
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