<?php
require "connection.php";
require "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhan Bank| History</title>
    <link rel="stylesheet" href="./css/customers.css">
</head>

<body>
    <div class="container table-responsive transferuser">
        <h2 class="h2 text-center mt-4">Transfer History</h2>
        <table class="table table-hover  tablecontent ">
            <thead>
                <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Sender</th>
                    <th scope="col">Receiver</th>
                    <th scope="col">Amount</th>
                    <th scope='col'>Date & Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql= "Select * from transcation";
                $query= mysqli_query($conn, $sql);
                while ($rows = mysqli_fetch_assoc($query)) {
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $rows['sno'] ?>
                    </th>
                    <td>
                        <?php echo $rows['sender'] ?>
                    </td>
                    <td>
                        <?php echo $rows['receiver'] ?>
                    </td>
                    <td>
                        <?php echo $rows['balance'] ?>
                    </td>
                    <td>
                        <?php echo $rows['datetime'] ?>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<?php
 require "footer.php";
?>
</html>
