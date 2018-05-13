
<section id="main-content">
   <section class="wrapper">
        <?php
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $object_name = $_POST['object_name'];
                $qty = $_POST['qty'];
                $id = $_POST['id'];

                $sql = "UPDATE tb_object SET name_object='$object_name',qty='$qty',first_name='$first_name',last_name='$last_name' WHERE id = '$id' ";

                $query = $conn->query($sql);


                if ($query) {
                    ?>
                    <script>
                        alert('แก้ไขข้อมูลเรียบร้อย!');
                        window.location = 'index.php?menu=donate-object-form-show';
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