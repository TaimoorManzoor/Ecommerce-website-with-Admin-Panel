
<?php include 'UsersManagement.php'; ?>
<?php include 'connection.php'; ?>
<?php
$sql = "SELECT * FROM checkout_table";
$result = $connection->query($sql);
$connection->close();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
 
</head>
 
<body>
    <section>
        <h1>CheckOut Record</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Country</th>
                <th>Street</th>
                <th>Apartment</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Rate</th>
                <th>Payment</th>


            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['first_name'];?></td>
                <td><?php echo $rows['last_name'];?></td>
                <td><?php echo $rows['company_name'];?></td>
                <td><?php echo $rows['country'];?></td>
                <td><?php echo $rows['street_address'];?></td> 
                <td><?php echo $rows['apartment'];?></td>
                <td><?php echo $rows['city'];?></td>
                <td><?php echo $rows['state'];?></td>
                <td><?php echo $rows['zip'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['rate'];?></td> 
                <td><?php echo $rows['payment'];?></td>
                
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 