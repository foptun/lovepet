
<section id="main-content">
   <section class="wrapper">
        <?php
            $img = $_FILES['file']['name'];  
            $temp_img = $_FILES['file']['tmp_name'];
            $img = uniqid().$img;

            $price = $_POST['price'];
            $id = $_SESSION["user_id"];
            

            $sql = "INSERT INTO tb_donate(user_id, first_name, last_name, type, price, bill, status) VALUES('$id','-','-','โอน','$price','$img','ยังไม่อนุมัติ') ";

            $query = $conn->query($sql);


            if ($query) {
                $last_id = $conn->insert_id;
                move_uploaded_file($temp_img, 'upload/'.$img);
                ?>
                <script>
                    alert('บันทึกข้อมูลเรียบร้อย!');
                    window.location = 'index.php?menu=thank-for-donate&id=<?=$last_id?>';
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