<?php
  $con = new PDO('pgsql:host=localhost;dbname=CMPT354', 'ubuntu', 'password');
  $result;
  $count;
  if(!$con){
    echo "Error : uanble to open database\n";
  }else{
    $Polname = $_POST['Polname'];
    $DOB = $_POST['DOB'];
    $Ticker = $_POST['Ticker'];
    try{
        $result = $con->query("SELECT count(*) From transaction WHERE polname = '$Polname' AND dob = '$DOB' AND ticker = '$Ticker'");
    }catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
    $con = null;
?>


<!DOCTYPE html>
<html lan="en">

<head>
    <link rel="stylesheet" href="/stylesheets/view.css">
    <title>Result</title>
</head>

<body>
    <div class="WhiteBox">

        <table id="links" class="Links">
            <thead>
                <tr>
                   <th><a href="/index.html">Home</a></th>
                    <th><a href="/politician/politician.php">Politician</a></th>
                    <th><a href="/bill/bill.php">Bill</a></th>
                    <th><a href="/stock/stock.php">Stock </a></th>
                    <th><a href="/transaction/transaction.php">Transaction </a></th>
                    <th><a href="/state/state.php">State</a></th>
                    <th><a href="/trade/trade_exchange.php">Trade_exchange</a></th>
                </tr>
            </thead>
        </table>

        <div class="GreyBox">

            <table class="TableFormat" id="Table">
                <thead>
                    <tr class="RowOne">
                            <th>Transaction count</th>
                    </tr>
                </thead>
                
                <?php
                    while ($row = $result->fetch()){
                ?>
                <tr>
                    <td><?php echo $row['count']; ?></td>
                </tr>
                
                <?php
                    }
                  ?>
                  
            </table>
        </div>
    </div>
</body>


</html>