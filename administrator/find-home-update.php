
<section id="main-content">
   <section class="wrapper">
        <?php
                $id = $_POST["id"];
                $detail = $_POST["detail"];
                
                $img1 = $_FILES['file1']['name'];  
                $temp_img1 = $_FILES['file1']['tmp_name'];

                $img2 = $_FILES['file2']['name'];  
                $temp_img2 = $_FILES['file2']['tmp_name'];

                $img3 = $_FILES['file3']['name'];  
                $temp_img3 = $_FILES['file3']['tmp_name'];

                $h1 = $_POST['h1'];
                $h2 = $_POST['h2'];
                $h3 = $_POST['h3'];

                if($img1 != ''){
                    $img1 = uniqid().$img1;
                }
                if($img2 != ''){
                    $img2 = uniqid().$img2;
                }
                if($img3 != ''){
                    $img3 = uniqid().$img3;
                }

                if($img1 == ''){
                    $img1 = $h1;
                }
                if($img2 == ''){
                    $img2 = $h2;
                }
                if($img3 == ''){
                    $img3 = $h3;
                }
                
                $sql = "UPDATE `tb_find_home` SET `picture1`='$img1',`picture2`='$img2',`picture3`='$img3',`detail`='$detail' WHERE id =".$id;

                $query = $conn->query($sql);


                if ($query) {
                    move_uploaded_file($temp_img1, '../upload/'.$img1);
                    move_uploaded_file($temp_img2, '../upload/'.$img2);
                    move_uploaded_file($temp_img3, '../upload/'.$img3);
                    ?>
                    <script>
                        alert('แก้ไขข้อมูลเรียบร้อย!');
                        window.location = 'index.php?menu=find-home-form-show';
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert('Edit Fails!!!');
                        window.history.back();
                    </script>
                    <?php
                }
        ?>
   </section>
</section>