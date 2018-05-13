
<section id="main-content">
   <section class="wrapper">
        <?php
                $id = $_POST["id"];
                $header = $_POST["header"];
                $detail = $_POST["detail"];
                
                $img1 = $_FILES['file1']['name'];  
                $temp_img1 = $_FILES['file1']['tmp_name'];


                $h1 = $_POST['h1'];
                if($img1 != ''){
                    $img1 = uniqid().$img1;
                }

                if($img1 == ''){
                    $img1 = $h1;
                }
                
                $sql = "UPDATE `tb_knowledge` SET `picture`='$img1',`header`='$header',`detail`='$detail' WHERE id =".$id;

                $query = $conn->query($sql);


                if ($query) {
                    move_uploaded_file($temp_img1, '../upload/'.$img1);
                    ?>
                    <script>
                        alert('แก้ไขข้อมูลเรียบร้อย!');
                        window.location = 'index.php?menu=knowledge-form-show';
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