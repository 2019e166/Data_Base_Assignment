<? php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<?php
session_start();
$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'onlineshoestore'; 

    $connection = mysqli_connect('localhost', 'root', '', 'onlineshoestore');
    $shoeList = '';
    if(isset($_POST['findItembySizeButton']))
    {
        echo "Hello In";  
        
        $querySelect = "SELECT ProductID,Price,Description FROM productdetails WHERE Shoe_Size = 8 "; 
        //Size not change.
         $result = mysqli_query($connection,$querySelect);

         if($result)
         {
            while ($userrec = mysqli_fetch_assoc($result)) {
                $shoeList .= "<tr>";
                $shoeList .= "<td>{$userrec['ProductID']}</td>";
                $shoeList .= "<td>{$userrec['Price']}</td>";
                $shoeList .= "<td>{$userrec['Description']}</td>";
                $shoeList .= "</tr>";
            }
         }
     else{
        echo "Connection fail.";
     }

    }
    elseif (isset($_POST['findItembyTypeButton']))
    {
        $querySelect = "SELECT ProductID,Price,Description FROM productdetails WHERE Shoe_Size = '$shoesize' AND Brand = $shoebrand";

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
        <form>
            <label for = "Enter Shoe size : ">Enter your shoe size</label>
            <input type="text" class="form-control" id="shoeSize" name="shoeSize" />
        </form>
        <form action = "findItemN.php" method = "post">
            <button type="submit" name="findItembySizeButton">Find Item by Size</button>
        </form>
<div>
    <form>
        <label for = "Enter Shoe size : ">Enter your shoe type</label>
        <input type="text" class="form-control" id="shoeType" name="shoeType" />
    </form>
    <form action = "findItemN.php" method = "post">
        <button type="submit" name="findItembyTypeButton">Find Item by Type</button>
    </form>
</div>

<main>
    <table class="masterlist">
        <tr>
            <th>Product ID </th>
            <th>Price </th>
            <th>Description</th>
        </tr>
        <?php echo $shoeList; ?>
    </table>
</main>
</body>
</html>
<?php
require_once 'inc/footer.php';
?>