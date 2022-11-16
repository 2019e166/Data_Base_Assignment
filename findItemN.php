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
                $_SESSION['productid'] = $userrec['ProductID'];
                $shoeList .= "<td>{$userrec['Price']}</td>";
                $shoeList .= "<td>{$userrec['Description']}</td>";
                #$shoeList .= "<td>{$userrec['Images']}</td>";
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
    #NEWW


    else if(isset($_POST['addCartButton']))
    {
        $shoeSize = $_SESSION['shoeSize'];
        $querySelect = "SELECT ProductID,Price,Description FROM productdetails WHERE ShoeSize = '$shoeSize' "; 
        $result = mysqli_query($connection,$querySelect);
        $userrec = mysqli_fetch_assoc($result);
        $payType = mysqli_real_escape_string($connection,$_POST['customerpayment']);
        $productID = $userrec['ProductID'];
        date_default_timezone_set('Asia/Kolkata');
        $date = date('d-m-y'); 
        $description = $userrec['Description'];
        $cutomerEmail = $_SESSION['loggedCustomerEmail'];
        $queryGetID = "SELECT CustomerID FROM customerDetails WHERE Email = '$cutomerEmail' LIMIT 1";
        $resu = mysqli_query($connection,$queryGetID);
        $userrecord = mysqli_fetch_assoc($resu);

        $customerID = $userrecord['CustomerID'];
        $queryaddCart = "INSERT INTO ORDERDETAILS(CUSTOMERID,PRODUCTID,DATE,TYPE,DESCRIPTION) VALUES ('{$customerID}','{$productID}','{$date}','{$payType}','{$description}')";

        $result = mysqli_query($connection,$queryaddCart);
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
    <form action = "findItemN.php" method = "post">
    <table class="masterlist">
        <tr>
            <th>Product ID </th>
            <th>Price </th>
            <th>Description</th>
            <th>Image</th>
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

    <button type="submit" name="showmyCartButton" formaction="showOrders.php">Show my Cart</button>
</form>
</main>
<p> Back to Login Selection Page. <a href="loginSelectionPage.php"> Back </a></p>
<p> Back to Home page.<a href="index.php"> Back </a></p>
        <p> Back to Register page.<a href="registerHome.php"> Back </a></p>
        <p> Back to Login page.<a href="loginHome.php"> Back </a></p>
</body>
</html>
<?php
require_once 'inc/footer.php';
?>