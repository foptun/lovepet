<?php
                $id = $_GET["id"];
                $pick_user_id = $_SESSION["user_id"];
                
                $sql = "UPDATE tb_find_home SET pick_user_id='$pick_user_id' WHERE id =".$id;

                $query = $conn->query($sql);


                if ($query) {

                    ?>
                    <script>
                        alert('จองสัตว์เรียบร้อย!');
                        window.location = 'index.php?menu=find-home';
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