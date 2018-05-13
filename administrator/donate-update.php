
<section id="main-content">
   <section class="wrapper">
        <?php
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $price = $_POST['price'];
                $id = $_POST['id'];

                $sql = "UPDATE tb_donate SET first_name='$first_name',last_name='$last_name',price='$price' WHERE id = '$id' ";

                $query = $conn->query($sql);


                if ($query) {
                    ?>
                    <script>
                        alert('แก้ไขข้อมูลเรียบร้อย!');
                        window.location = 'index.php?menu=donate-form-show';
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