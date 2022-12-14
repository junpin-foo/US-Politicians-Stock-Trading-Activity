<?php
    $myPDO = new PDO('pgsql:host=localhost;dbname=CMPT354', 'ubuntu', 'password');

    try{
        $result = $myPDO->query("SELECT sl.statename, sl.location, sl.dominantparty, st.timezone FROM statelocation sl JOIN statetimezone st on st.location = sl.location");
  
      }catch (Exception $e) {
          echo 'Caught exception: ',  $e->getMessage(), "\n";
      }
?>
<!DOCTYPE html>
<html lan="en">

<head>
    <link rel="stylesheet" href="/stylesheets/view.css">
    <title>State location</title>
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

            <table class="AddTable" id="Table">
                <h2> State </h2>
                        <thead>
                            <tr class="RowOne">
                                <th>Location</th>
                                <th>Party</th>
                                <th>Timezone</th>
                            </tr>
                        </thead>
                        <form id = "rec-form" action="view_state_location.php" method="post">
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name= "state[]" value=",st.location"></td>  
                                    <td><input type="checkbox" name= "state[]" value=",dominantparty"></td>  
                                    <td><input type="checkbox" name= "state[]" value=",timezone"></td>
                                </tr>
                            </tbody>
                        </form>    
                    </table>
                    <input type="submit" value="Submit" class="btn" form="rec-form">

                <!-- <table class="TableFormat" id="Table">

                <thead>
                    <tr class="RowOne">
                            <th>State</th>
                            <th>Location</th>
                            <th>Dominant Party</th>
                            <th>Timezone</th>
                    </tr>
                </thead>
                
                <?php
                    while ($row = $result->fetch()){
                ?>
                <tr>
                      <td><?php echo $row['statename']; ?></td>
                      <td><?php echo $row['location']; ?></td>
                      <td><?php echo $row['dominantparty']; ?></td>
                      <td><?php echo $row['timezone']; ?></td>
                </tr>
                
                <?php
                    }
                  ?> -->
                  
            </table>
        </div>
    </div>
</body>


</html>