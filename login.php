<?php  //Start the Session
  session_start();
  require('blog_connect.php');

  if (isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    //mengecek apakah data ada di database
    
    /*CONNECT DB*/
    sql_connect('gojek_db');

    // tahap 1
    $query_count = "SELECT COUNT(*) FROM pengguna WHERE username='$username' and pass='$password'";
    $result_count = $con->query($query_count);

    $query = "SELECT id, nama FROM pengguna WHERE username='$username' and pass='$password'";
    $result = $con->query($query);

    if ($row_count = $result_count->fetch(PDO::FETCH_NUM)) {
      if($row_count[0] > 0) {
        
        if ($row = $result->fetch(PDO::FETCH_NUM)) {
          $_SESSION['id_pengguna'] = $row[0];
          $_SESSION['username'] = $username;
          $_SESSION['nama'] = $row[1];
          $_SESSION['is_logged'] = TRUE;
        }        
      } else {
        echo "Invalid Login Credentials.";
        header('location:login.php');
      }
    }
  }

  $query_count = null;
  $result_count = null;
  $con = null;
  
  //pesan yang disampaikan ketika user login
  if (isset($_SESSION['username'])){
    header("Location: index.php?username=". $username);
  } else {
?>
<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" type="text/css" href="css/style_login.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
  <script src="script.js"></script>
</head>
<body>
<div class="container">
    <div class="form">
      <form class="login-form" method="POST" \>
        <div class=header><p>LOGIN</p></div>
        <div class="input">
          <p>Username</p>
          <input type="text" name="username"/>
        </div>
        <div class="input">
          <p>Password</p>
          <input type="password" name="password"/>
        </div>
        <a class="message" href="register.php">Belum daftar ? Buat akun</a>
        <div class="button">
          
          <button type="submit" id="submit_btn" name="submit"><p>GO!</p></button>  
        </div>
      </form>
    </div> 
</div>
</body>
 
</html>
<?php } ?>