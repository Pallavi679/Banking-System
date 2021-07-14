<?php
require "connection.php";
require "navbar.php";
?>

<?php
if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount= $_POST['amount'];

    $sql="Select * from customers where id = $from";
    $query= mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query);

    $sql= "Select * from customers where id=$to";
    $query=mysqli_query($conn, $sql);
    $sql2= mysqli_fetch_array($query);

    if($amount <0)
    {
        echo "<script type='text/javascript'>";
        echo" alert('Oops ! Negative values cannot be transferred')";
        echo "<script>"; 
           }
    elseif($amount > $sql1['balance']) {
        echo "<script type='text/javascript'>";
        echo" alert('Bad Luck !Insufficient Balance')";
        echo "<script>";
             }
    elseif($amount == 0) {
        echo "<script type='text/javascript'>";
        echo" alert('Oops ! Zero values cannot be transferred')";
        echo "<script>";
        }
    else {
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE customers set balance= $newbalance where id= $from";
                $query = mysqli_query($conn, $sql);

                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE customers set balance=$newbalance where id = $to";
                $query = mysqli_query($conn, $sql);

                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transcation (`sender`, `receiver`, `balance`) VALUES ('$sender', '$receiver', '$amount')";
                $query=mysqli_query($conn, $sql);
                if ($query) {
                    echo"<script> alert ('Transcation Successful');
                        window.location='transactionhistory.php';
                    </script>";
                 


                }
                $newbalance=0;
                $amount=0;
            }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhan Bank| Transfer Details</title>
    <link rel="stylesheet" href="./css/customers.css">
</head>
<body>
    <div class="container transferuser">
        <h2 class="h2 text-center mt-4">Transcation</h2>
        <?php
            $sid =$_GET['id'];
            $sql="Select * from customers where id=$sid";
            $result= mysqli_query($conn, $sql);
            if(!$result){
                echo "Error :" .$sql. "<br>" .mysql_error($conn);
            }
            $rows=mysqli_fetch_array($result);
        ?>
       
            <div class="table-responsive">
                <table class="table table-hover ">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Balance</th>
                </tr>
            </thead>
            <tbody>
              
                <tr>
                    <th scope="row">
                        <?php echo $rows['id'] ?>
                    </th>
                    <td>
                        <?php echo $rows['name'] ?>
                    </td>
                    <td>
                        <?php echo $rows['email'] ?>
                    </td>
                    <td>
                        <?php echo $rows['balance'] ?>
                    </td>
                </tr>
                </tbody>
                </table>
             
               
            
            </div>
            <form method="post">
            <label for="to"> Transfer to </label>
            <select name="to" id="to"  class="form-control " required>
                <option value="" disabled selected>Choose</option>
                <?php
                    $sid =$_GET['id'];
                    $sql="Select * from customers where id =$sid";
                    $result =mysqli_query($conn, $sql);
                    if(!$result){
                        echo "Error:" .$sql. "<br>" .mysqli_error($conn);

                    }
                    while($rows =mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $rows['id']; ?>" class="table">
                    <?php
                        echo $rows['name'];
                    ?>
                    Balance:
                    <?php echo $rows['balance'];?>
                </option>
                <?php
                    }
                    ?>
                

            </select>

            <label for="amount">Amount</label>
            <input type="number" class="form-control" name="amount" id="amount" required>
                    <div class="text-center mt-5">
                        <button class="btn btn-warning btn-block" name="submit" id="mybtn">Transfer</a></button>
                    </div>

        </form>
      
    </div>
</body>
<?php
    include "footer.php";
?>
</html>

