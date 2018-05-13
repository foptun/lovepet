
<section id="main-content">
   <section class="wrapper">
        <?php
            $detail = $_POST["detail"];
            $user_id = $_SESSION["user_id"];
            
            
            $img1 = $_FILES['file1']['name'];  
            $temp_img1 = $_FILES['file1']['tmp_name'];
            $img1 = uniqid().$img1;

            $img2 = $_FILES['file2']['name'];  
            $temp_img2 = $_FILES['file2']['tmp_name'];
            $img2 = uniqid().$img2;

            $img3 = $_FILES['file3']['name'];  
            $temp_img3 = $_FILES['file3']['tmp_name'];
            $img3 = uniqid().$img3;
            
            $sql = "INSERT INTO `tb_find_home`(`own_user_id`, `picture1`, `picture2`, `picture3`, `detail`) VALUES ('$user_id','$img1','$img2','$img3','$detail')";

            $query = $conn->query($sql);


            if ($query) {
                move_uploaded_file($temp_img1, '../upload/'.$img1);
                move_uploaded_file($temp_img2, '../upload/'.$img2);
                move_uploaded_file($temp_img3, '../upload/'.$img3);
                ?>
                <script>
                    alert('บันทึกข้อมูลเรียบร้อย!');
                    window.location = 'index.php?menu=find-home-form-show';
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