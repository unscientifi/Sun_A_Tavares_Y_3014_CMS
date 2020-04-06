<?php 
    require_once '../load.php';
    confirm_logged_in();

    $products = getAllProducts();
    if(!$products){
        $message = 'Failed to get product list';
    }

    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
        $delete_result = deleteProduct($product_id);

        if(!$delete_result){
            $message = 'Failed to delete product';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    <h2>Be Careful! Delete Section</h2>
    <?php echo !empty($message)?$message:'';?>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php while($product = $products->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $product['product_id'];?></td>
                <td><?php echo $product['product_name'];?></td>
                <td><a href="admin_deleteproduct.php?id=<?php echo $product['product_id'];?>">Delete</a></td>
            </tr>
        <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>