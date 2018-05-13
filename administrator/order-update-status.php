
<section id="main-content">
   <section class="wrapper">
        <?php
                $value = $_GET['value'];
                $id = $_GET['id'];

                $sql = "UPDATE tb_find_home SET status='$value' WHERE id = '$id' ";

                $query = $conn->query($sql);


                if ($query) {
                    ?>
                    <script>
                        alert('แก้ไขข้อมูลเรียบร้อย!');
                        window.location = 'index.php?menu=order-form-show';
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