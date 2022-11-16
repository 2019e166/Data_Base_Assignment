<?php session_start(); ?>
<? php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<?php
$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'onlineshoestore'; 

    $connection = mysqli_connect('localhost', 'root', '', 'onlineshoestore');
    $shoeList = '';

    if(isset($_POST['findItembySizeButton']))
    {
        $shoeSize = mysqli_real_escape_string($connection,$_POST['shoeSize']);

        $querySelect = "SELECT ProductID,Price,Description FROM productdetails WHERE ShoeSize = '$shoeSize' "; 
         $result = mysqli_query($connection,$querySelect);


        $user = mysqli_fetch_assoc($result);
        $_SESSION['shoeSize'] = $shoeSize; //Session variable.
        $GLOBALS['shoeSize'] = $shoeSize; 
        

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
        echo "Welcome:  ";
        echo $_SESSION['loggedCustomerEmail'];
    }
?>
<!DOCTYPE html>
<html lang ="en">
    <head>

</head>
<body>
    <div class = "from-group">
        <form action = "findItemN.php" method = "post">
            <label for = "Enter Shoe size : ">Enter your shoe size</label>
            <input type="text" name = "shoeSize" id="" placeholder="Size">
            <button type="submit" name="findItembySizeButton">Find Item by Size</button>
        </form>
<div>
    <form method = "post">
        <label for = "Enter Shoe size : ">Enter your shoe type</label>
        <input type="text"  name = "Type" id="" placeholder="Type" >
    </form>
    <form action = "findItemN.php" method = "post">
        <button type="submit" name="findItembyTypeButton">Find Item by Type</button>
    </form>
</div>

<main>
    <style>
        header{
            font-family: "times new roman";
            text-align: center;
        },
        table{
            font-family: "times new roman";
            text-align: center;

        },
        tr,td{
            font-family: "times new roman";
            text-align: center;
        }
    </style>
    <table class="masterlist">
        <tr>
            <th>Product ID </th>
            <th>Price </th>
            <th>Description</th>
        </tr>
        <?php echo $shoeList; ?>
    </table>
    <table>
        <tr> 
            <th>Type</th> 
            <th><input type="text" placeholder="Cash on delivery / Pay Online" name="customerpayment"></th>
        </tr>
    </table>
    <button type="submit" name="addCartButton">Add to Cart</button>
</main>
</body>
</html>
<?php
require_once 'inc/footer.php';
?>