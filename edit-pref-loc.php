<?php
    require('is_logged.php');
    require_once('blog_connect.php');

    unset($_SESSION['pick_point']);
    unset($_SESSION['dest_point']);
    unset($_SESSION['pref_driv']);

    if(!isset($_GET["username"])) {
        /* ubah dengan login.php */
        // header('location:test.php');
    }
?>

<html> 
<head>
    <title>Ojek Online - Order</title>
    
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link type="text/css" rel="stylesheet" href="css/style_history.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" type="text/css" href="profile.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

</head>
<body>
    
    <?php
        if(isset($_POST['nav_active'])) {
            $nav_active = $_POST['nav_active'];
        }
        if(isset($_GET['nav_active'])) {
            $nav_active = $_GET['nav_active'];
        }
        $nav_active = 3;
        include('body_head.php');
    ?>

    <div id="main"> 

        <div id="nav-1" class="navmain">        
            <?php include('tab_order.php'); ?>
        </div>

        <div id="nav-2" class="navmain">
            <?php include('tab_history.php'); ?>
        </div>

        <div id="nav-3" class="navmain">

<?php
    require_once('blog_connect.php');

    sql_connect('gojek_db');
    $id = $_SESSION["id_pengguna"];
    
    $sql = "SELECT location, id_prefloc FROM prefloc WHERE id_driver='$id'";
    $result = $con->query($sql);


?>

<form id="form-del" name="form-del" action="form-del-prefloc.php" method="post">
    <input type="hidden" form="form-del" name="rowId" id="rowId" value="" />
</form>

<form id="form-edit" name="form-edit" action="form-edit-prefloc.php" method="post">
    <input type="hidden" name="rowId-ed" id="rowId-ed" form="form-edit" value="" />
    <input type="hidden" name="location" id="location" value="" />
</form>

<script type="text/javascript">
    function showDelete(rowId) {
        if (confirm("Are You Sure to Delete this?") == true) {
            document.getElementById("rowId").value = rowId;
            document.getElementById("form-del").submit();
        }
    }
    function showEdit(rowId) {
            // muncul input box
        document.getElementById('loc' + rowId).style.display = 'none';
        document.getElementById('edit-loc' + rowId).style.display = 'none';
        document.getElementById('del-loc' + rowId).style.display = 'none';
        document.getElementById('ok-loc' + rowId).style.display = 'block';
        document.getElementById('edit-loc-txt' + rowId).style.display = 'block';
    }
    function submitEdit(rowId) {
        document.getElementById("rowId-ed").value = rowId;
        alert(rowId);
        document.getElementById("location").value = document.getElementById("edit-loc-txt" + rowId).value;
        document.getElementById("form-edit").submit();
    }
</script>
	<h1>EDIT PREFERRED LOCATION</h1>
        <table class="tabel-loc">
            <tr>
                <th>No</th>
                <th id="h-loc">Location</th>
                <th id="h-act">Actions</th>
            </tr>
            <?php 
                $x = 0;
                while ($row = $result->fetch(PDO::FETCH_NUM)) {
                    $x++;
                    echo "<tr >";
                    echo "<td >".$x."</td>";
                    echo "<td ><span id='loc".$row[1]."'>".$row[0]."</span><input class='edit-loc' type='text' id='edit-loc-txt".$row[1]."' value='".$row[0]."' /></td>";
                    echo "<td><img id='edit-loc".$row[1]."' onclick='showEdit(".$row[1].")' class='img-edit icon-ed' src='img/edit.png' >
                           <img id='del-loc".$row[1]."' class='icon-del' onclick='showDelete(".$row[1].")' src='img/delete.png'>
                           <img id='ok-loc".$row[1]."' class='icon-ok' onclick='submitEdit(".$row[1].")' src='img/ok.png'></td>"; 
                    echo "</tr>";
                }
            ?>
        </table> 
    

    <div class="add-loc"> 
        <form action="add-loc.php" method="POST">
            ADD NEW LOCATION: <br>
            <input id="form-add-loc" type="text" name="add-new-loc"/>
            <button type="submit" class="button-save" id="add-button">ADD</button><br>
        </form>

    </div>
    <a href="index.php?nav_active=3" class="button-back">BACK</a>

</body>
</html>
<?php 
    $con = null; 
    $result = null;
?>

</div>

    </div>
    <script src="scripts/navChange.js"></script>
    <script src="scripts/hide.js"></script>
</body>
</html> 