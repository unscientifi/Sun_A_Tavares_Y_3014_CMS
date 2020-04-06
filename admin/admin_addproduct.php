<?php
require_once '../load.php';
confirm_logged_in();

$category_table = 'tbl_category';
$categories = getAll($category_table);

if (isset($_POST['submit'])) {
    $product = array(
        'img'   => $_FILES['img'],
        'name'   => trim($_POST['name']),
        'description'    => trim($_POST['description']),
        'category'   => trim($_POST['productList']),
    );

    $result  = addProduct($product);
    $message = $result;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <?php echo !empty($message) ? $message : ''; ?>
    <form action="admin_addproduct.php" method="post" enctype="multipart/form-data">
        <label>Product Image:</label><br>
        <input type="file" name="img" value=""><br><br>

        <label>Product Name:</label><br>
        <input type="text" name="name" value=""><br><br>

        <label>Product Description:</label><br>
        <input type="text" name="description" value=""><br><br>


        <label>Product Category:</label><br>
        <select name="productList">
            <option>Please select a product category..</option>
            <?php while ($row = $categories->fetch(PDO::FETCH_ASSOC)): ?>
                <option value="<?php echo $row['category_id']?>"><?php echo $row['category_name'];?></option>
            <?php endwhile;?>
        </select>
        <br><br>
        <button type="submit" name="submit">Add Product</button>
    </form>
</body>
</html>