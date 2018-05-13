
<section id="main-content">
   <section class="wrapper">
        <?php
                $value = $_GET['value'];
                $id = $_GET['id'];

                $sql = "UPDATE tb_find_home SET pick_user_id='0' WHERE id = '$id' ";

                $query = $conn->query($sql);


                if ($query) {
                    ?>
                    <script>
                        alert('ลบมูลเรียบร้อย!');
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