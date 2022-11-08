<? php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<?php
session_start();
    if(isset($_POST['findItemButton']))
    {
        $shoebrand = $_POST['shoeBrand'];
        $shoesize = $_POST['shoeSize'];

        echo "Hello In";

        $querySelect = "SELECT ProductID,Price,Description FROM productdetails WHERE Shoe_Size = '$shoesize' AND Brand = $shoebrand ";

        $result = mysqli_query($connection,$querySelect);

    }
    else
    {
        echo "waiting";
    }
?>
<!DOCTYPE html>
<html lang ="en">
    <head>

</head>
<body>
    <div class = "from-group">
        <form action="readDetails.php" method ="POST">
        <label for = ""> Select Item </label>
        <select name ="" id = "shoeBrand" class = "form-control">
            <option value ="">--Select Brand--</option>
            <option value ="Adidas">--Adidas--</option>
            <option value ="Nike">--Nike--</option>
            <option value ="Skechers">--Skechers--</option>
            <option value ="Foot Locker">--Foot Lockerd--</option>
            <option value ="Reebok">--Reebok--</option>
            <option value ="New Balance">--New Balance--</option>
            <option value ="Crocs">--Crocs--</option>
            <option value ="DSI">--DSI--</option>
            <option value ="FILA">--FILA--</option>
        </select>
    </form>
</div>
<div>
    <form>
        <label for = "Enter Shoe size : ">Enter your shoe size</label>
        <input type="text" class="form-control" id="shoeSize" name="shoeSize" />
    </form>
    <form>
        <label for = "Enter Type : ">Enter your shoe Type</label>
        <select name ="" class = "form-control">
            <option value ="">--Select Shoe Type--</option>
            <option value ="Men">--Men--</option>
            <option value ="Women">--Women--</option>
            <option value ="Boys">--Boys--</option>
            <option value ="Girls">--Girls--</option>
        </select>
        
    </form>
</div>
<div>
    <form action = "findItem.php" method = "post">
        <button type="submit" name="findItemButton">Find Item </button>
    </form>
</div>
</body>

</html>
<?php
require_once 'inc/footer.php';
?>