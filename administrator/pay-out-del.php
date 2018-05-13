
<section id="main-content">
   <section class="wrapper">
        <?php
                $id = $_GET['id'];

                $sql = "DELETE FROM tb_pay_out WHERE id = '$id' ";

                $query = $conn->query($sql);


                if ($query) {
                    ?>
                    <script>
                        alert('ลบมูลเรียบร้อย!');
                        window.location = 'index.php?menu=pay-out-form-show';
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