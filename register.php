<!DOCTYPE HTML>
<?php


    require('blog_connect.php');

    var_dump($_POST);

    /*CONNECT DB*/
    sql_connect('gojek_db');

    function newMember()
    {
        sql_connect('gojek_db');
        $fullname = $_POST['full_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $telefon = $_POST['phone'];

        // tahap 1
        $query = "INSERT INTO pengguna(username,pass,nama,email,telefon) VALUES('$username','$password','$fullname','$email','$telefon')";
        $result = $con->query($query);

        if ($row = $result->fetch(PDO::FETCH_NUM)) {
           //echo "YOUR REGISTRATION IS COMPLETE...";
            header("Location: welcome.php");
        } else {
            echo "<h1>FAILED TO REGISTER</h1>";
        }
        // tahap 1_END

        $query_driver = null;
        $result_driver = null;

        $con = null;
        /*END_CONNECT DB*/
    }

    function check_avail_php() {
        sql_connect('gojek_db');

        $user_avail = FALSE;
        $email_avail = FALSE;        

        $query = "SELECT COUNT(*) FROM pengguna WHERE username='$user'";
        $result = $con->query($query);

        if ($row = $result->fetch(PDO::FETCH_NUM)) {
           if ($row[0] >= 1)
                $user_avail = FALSE;
            else
                $user_avail = TRUE;
        } else {
            echo "QUERY GAGAL";
        }
        // tahap 1_END

        $query = "SELECT COUNT(*) FROM pengguna WHERE email='$email'";
        $result = $con->query($query);

        if ($row = $result->fetch(PDO::FETCH_NUM)) {
           if ($row[0] >= 1)
                $email_avail = FALSE;
            else
                $email_avail = TRUE;
        } else {
            echo "QUERY GAGAL";
        }
        // tahap 1_END

        echo "
        <script>
            alert('tes1');
        </script>
        ";

        $query = null;
        $result = null;

        $con = null;
        /*END_CONNECT DB*/

        if (($user_avail) && ($email_avail)) {
            newMember();
        } else {
            echo "USERNAME atau EMAIL sudah terdaftar!";
            header("location:register.php");
        }
    }

    function confirmpass()
    {
        if((!empty($_POST['password']))&&(!empty($_POST['confirm'])))
        {
            if($_POST['password'] = $_POST['confirm']) 
            {
                echo "Isi confirm dengan PASSWORD yang sama";
                header("location:register.php");
            } else {
                check_avail_php();
            }
        }
    }

    if(isset($_POST['submit']))
    {
        // confirmpass();
        newMember();
        
    }
?>
<html>
<head>
    <title>Member Registration</title>
    <link type="text/css" rel="stylesheet" href="css/style_register.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <script src="script.js"></script>
    <script src="scripts/check.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script>
</head>

<body>
    <div class="form">
        <div class="header">
           <p>SIGN-UP</p> 
        </div>
        <div>
            <form class="login-form" name="form" method="POST">
                <div class="input">
                    <p>Your Name</p>
                    <input id="name" type="text" name="full_name" />
                </div>
                <div class="input">
                    <p>Username</p>
                    <input id="username" type="text" name="username" onkeyup="check_user(this.value)"  />
                    <div id="cek_user"><span id="check_user" style="display:inline;"></span></div>
                </div>
                <div class="input">
                    <p>Email</p>
                    <input id="email" type="email" name="email" onkeyup="check_email(this.value)" />
                    <div id="cek_email"><span id="check_email" style="display:inline;"></span></div>
                </div>
                <div class="input">
                    <p>Password</p>
                    <input id="password" type="password" name="password"  />
                </div>
                <div class="input">
                    <p>Confirm Password</p>
                    <input id="confirm" type="password" name="confirm" />    
                </div>
                <div class="input">
                    <p>Phone Number</p>
                    <input id="phone" type="text" name="phone"  />
                </div>
                <div class="input" id="check">
                    <input id="isDriver" type="checkbox" name="isDriver" value="Yes"> 
                    <p class="driver">Also sign me up as a driver!</p>
                </div>
                <div class="button">
                    <a class="message" href="login.php">Sudah daftar ? Masuk</a>
                    <button type="submit" id="submit_btn" name="submit">Register</button>    
                </div>
                
            </form>
        </div>
    </div>  
</body>
</html>

<?php
    // tahap 1_END

    $query_driver = null;
    $result_driver = null;

    $con = null;
    /*END_CONNECT DB*/
?>