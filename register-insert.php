
<section id="main-content">
   <section class="wrapper">
        <?php
            $f_name = $_POST['f_name'];
            $l_name = $_POST['l_name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $facebook = $_POST['facebook'];
            $email = $_POST['email'];
            $line = $_POST['line'];
            

            $sql = "INSERT INTO tb_user(username, password, first_name, last_name, address, phone, facebook, email, line) VALUES ('$username','$password','$f_name','$l_name','$address','$phone','$facebook','$email','$line')";

            $query = $conn->query($sql);


            if ($query) {
                ?>
                <script>
                    alert('บันทึกข้อมูลเรียบร้อย!');
                    window.location = 'index.php?menu=home';
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