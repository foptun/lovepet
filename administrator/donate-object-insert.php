
        <?php
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $object_name = $_POST['object_name'];
            $qty = $_POST['qty'];
            

            $sql = "INSERT INTO tb_object(user_id, name_object, qty, first_name, last_name) VALUES(0,'$object_name','$qty','$first_name','$last_name')";

            $query = $conn->query($sql);


            if ($query) {
                ?>
                <script>
                    alert('บันทึกข้อมูลเรียบร้อย!');
                    window.location = 'index.php?menu=donate-object-form-show';
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