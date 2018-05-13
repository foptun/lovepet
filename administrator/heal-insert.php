
<section id="main-content">
   <section class="wrapper">
        <?php
            $header = $_POST["header"];
            $detail = $_POST["detail"];
            $id = $_POST["id"];
            
            
            $sql = "INSERT INTO tb_heal_pet(find_home_id, title, detail) VALUES ('$id','$header','$detail')";

            $query = $conn->query($sql);


            if ($query) {
                move_uploaded_file($temp_img1, '../upload/'.$img1);
                ?>
                <script>
                    alert('บันทึกข้อมูลเรียบร้อย!');
                    window.location = 'index.php?menu=heal-form-show';
                </script>
                <?php
            }else{
                echo $sql;
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