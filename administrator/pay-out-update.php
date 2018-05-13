
<section id="main-content">
   <section class="wrapper">
        <?php
                $detail = $_POST['detail'];
                $price = $_POST['price'];
                $id = $_POST['id'];

                $sql = "UPDATE tb_pay_out SET detail='$detail',money='$price' WHERE id = '$id' ";

                $query = $conn->query($sql);


                if ($query) {
                    ?>
                    <script>
                        alert('แก้ไขข้อมูลเรียบร้อย!');
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