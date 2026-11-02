<?php

include_once "db/db_conn.php";
$sql ="select * from product_submit";

$execute_query = $connection->query($sql);
// echo "<pre>";
// print_r($execute_query);
// echo "</pre>";

// $fetch_data = $execute_query->query->fetch_assoc();
// echo "<pre>";
// print_r($fetch_data);
// echo "</pre>";

while($alldata = $execute_query->fetch_assoc())
{
    $mydata[]=$alldata;
}
// echo "<pre>";
// print_r($mydata);
// echo "</pre>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Submit</h1>
    <table border="1px">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Product Freshness</th>
                <th>Image of Product</th>
                <th>Additional Description</th>
                <th>Product Price</th>
                <th>Comments</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $num =101;
                foreach($mydata as $data)
                {
                    // echo "<pre>";
                    // print_r($data);
                    // echo "</pre>";
                
            ?>
            <tr>
                <td><?php echo $num;?></td>
                <td><?php echo $data['pname'];?></td>
                <td><?php echo $data['pcategory'];?></td>
                <td><?php echo $data['pfreshness'];?></td>
                <td><?php echo $data['image'];?></td>
                <td><img src="<?php echo "images/".$data['image']; ?>" alt=""></td>
                <td><?php echo $data['price'];?></td>
                <td><?php echo $data['comment'];?></td>
            </tr>
            <?php
            $num++;
            }

            ?>
            
        </tbody>

    </table>
</body>
</html>