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
    <title>Dhan Bank| Transfer</title>
</head>
<body>
    <?php
    $sql="Select * from customers";
    $result = mysqli_query($conn, $sql);
    ?>
    <div class="container table-responsive">
        <h2 class="h2 text-center mt-4">Transfer Money</h2>
        <table class="table table-hover ">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Balance</th>
                    <th scope='col'>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
            while ($rows=mysqli_fetch_assoc($result)) {
                ?>
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
                    <td><a href="selectcustomerdetail.php?id= <?php echo $rows['id'];?>"> <button class="btn btn-warning" type="button" value="submit">Transfer</button></a></td>
                </tr>
                <?php   
            }
            ?>
               
            </tbody>

        </table>
    </div>
</body>
</html>
<?php
 include "footer.php";
 ?>