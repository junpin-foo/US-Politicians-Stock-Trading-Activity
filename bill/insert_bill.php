<!DOCTYPE html>
<html lan="en">
<head>
    <link rel="stylesheet" href="/stylesheets/add.css">
    <title>Adding Bill</title>
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
                    <thead>
                        <tr class="RowOne">
                            <th>ID</th>
                            <th>Year</th>
                            <th>Status</th>
                            <th>Type</th>
                            <th>Beneficiary</th>
                        </tr>
                    </thead>
                    <form id = "rec-form" action="/PHP/insert_bil.php" method="post">
                        <tbody>
                            <tr>
                                <td><input type="text" name= "ID" placeholder=" ID" class="Textbox" maxlength="20" required></td> 
                                <td><input type="number" name="Year" placeholder="Year" class="Textbox" maxlength="20" required></td>  
                                <td><input type="text" name="Status" placeholder="Status" class="Textbox" maxlength="20" required></td>  
                                <td><select name="type" required>
                                  <option value="Public">Public</option>
                                  <option value="Private">Private</option>
                                  </select>
                                </td>
                                <td><input type="text" name="Beneficiary" placeholder="Beneficiary" class="Textbox" maxlength="20"></td>
                            </tr>
                        </tbody>
                    </form>    
                </table>
        
                <?php
                if( $_GET['status']=='success'){
                  echo 'data inserted successfully';
                }
                if( $_GET['status']=='fail'){
                  echo 'data inserted fail';
                }
                ?>
                <input type="submit" value="Submit" class="btn" form="rec-form">
        </div>
    </div>
</body>
</html>
