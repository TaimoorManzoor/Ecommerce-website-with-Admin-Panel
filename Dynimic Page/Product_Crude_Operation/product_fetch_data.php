<?php include 'UsersManagement.php'; ?>
<?php include 'connection.php'; ?>
<?php
$sql = "SELECT * FROM product_table";
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
    <style>
table {
    margin: 0 auto;
    font-size: large;
    border: 1px solid black;
}

h1 {
    text-align: center;
    color: #006600;
    font-size: xx-large;
    font-family: 'Gill Sans', 'Gill Sans MT',
    ' Calibri', 'Trebuchet MS', 'sans-serif';
}

td {
    background-color: #E4F5D4;
    border: 1px solid black;
}

th,
td {
    font-weight: bold;
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}

td {
    font-weight: lighter;
}
</style>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
 
</head>
 
<body>
    <section>
        <h1>Product Record</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>ID</th>
                <th>LINK</th>
                <th>IMAGE</th>
                <th>DETAIL</th>
                <th>PRICE</th>
                <th>ON CREATED</th>
                <th>ADD PRODUCT</th>
                <th>UPDATE PRODUCT</th>
                <th>DELETE PRODUCT</th>

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
                <td><?php echo $rows['link'];?></td>
                <td><?php echo $rows['images'];?></td>
                <td><?php echo $rows['detail'];?></td>
                <td><?php echo $rows['price'];?></td>
                <td><?php echo $rows['on_created'];?></td>
                <td><a href="data_product.php"><i class="fa-solid fa-plus"></i></a></td>
                <td><a href="edit_product.php?id=<?php echo $rows['id'];?>"><i class="fa-solid fa-pen-nib"></i></a></td>
                <td><a href="delete_product.php?id=<?php echo $rows['id'];?>"><i class="fa-solid fa-trash"></i></a></td>
                
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 