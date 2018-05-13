<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){

   while($row = mysqli_fetch_assoc($result)) {
      $_SESSION["user_id"] = $row["id"];
      $_SESSION["first_name"] = $row["first_name"];
      $_SESSION["last_name"] = $row["last_name"];
   }

   if($_SESSION["user_id"] == 1){ ?>
            <script type="text/javascript">
               window.location = "administrator/index.php?menu=home";
            </script>
<?php }else{ ?>
            <script type="text/javascript">
               window.location = "index.php?menu=home";
            </script>
<?php
   }
}else{
   ?>
            <script type="text/javascript">
               alert('ข้อมูลไม่ถูกต้อง!!!');
               window.history.back();
            </script>
<?php
}

?>