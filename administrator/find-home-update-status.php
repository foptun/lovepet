<?php
                $id = $_GET["id"];
                $value = $_GET["value"];
                
                $sql = "UPDATE tb_find_home SET status='$value' WHERE id =".$id;

                $query = $conn->query($sql);


                if ($query) {

                    ?>
                    <script>
                        alert('แก้ไขสถานะเรียบร้อย!');
                        window.location = 'index.php?menu=find-home-form-show';
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