<?php 
    require_once '../load.php';
    confirm_logged_in();

    $products = getAllProducts();
    if(!$products){
        $message = 'Failed to get product list';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
</head>
<body>
    <h2>Update Product Info Section</h2>
    <?php echo !empty($message)?$message:'';?>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php while($product = $products->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $product['product_id'];?></td>
                <td><?php echo $product['product_name'];?></td>
                <td><a href="admin_editdetail.php?id=<?php echo $product['product_id'];?>">Edit</a></td>
            </tr>
        <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>