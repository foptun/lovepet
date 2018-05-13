
<section id="main-content">
   <section class="wrapper">
        <?php
            $header = $_POST["header"];
            $detail = $_POST["detail"];
            
            
            $img1 = $_FILES['file1']['name'];  
            $temp_img1 = $_FILES['file1']['tmp_name'];
            $img1 = uniqid().$img1;
            
            $sql = "INSERT INTO tb_activity(picture, title, detail) VALUES ('$img1','$header','$detail')";

            $query = $conn->query($sql);


            if ($query) {
                move_uploaded_file($temp_img1, '../upload/'.$img1);
                ?>
                <script>
                    alert('บันทึกข้อมูลเรียบร้อย!');
                    window.location = 'index.php?menu=activity-form-show';
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