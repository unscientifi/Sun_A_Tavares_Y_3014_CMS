<?php 
    require_once '../load.php';
    confirm_logged_in();

    $category_table = 'tbl_category';
    $categories = getAll($category_table);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $getProduct = editSingleProduct($id);

        if(is_string($getProduct)){
            $message = $getProduct;
        }
    
        if(isset($_POST['submit'])){
        $pname = trim($_POST['product_name']);
        $description = trim($_POST['product_description']);
        $category  = trim($_POST['productList']);
        $message = editProduct($id, $pname, $description, $category);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h2>Edit Product</h2>
    <?php echo !empty($message)? $message : '';?>
    <form action="admin_editdetail.php?id=<?php echo $id ?>" method="POST">
    <?php while ($info = $getProduct->fetch(PDO::FETCH_ASSOC)): ?>
            <label>Product Name:</label>
            <input type="text" name="product_name" value="<?php echo $info['product_name'];?>"><br><br>

            <label>Product Description:</label>
            <input type="text" name="product_description" value="<?php echo $info['product_description'];?>"><br><br>

            <label>Product Category:</label><br>
            <select name="productList">
            <option>Please select a product category..</option>
            <?php while ($row = $categories->fetch(PDO::FETCH_ASSOC)): ?>
                <option value="<?php echo $row['category_id']?>"><?php echo $row['category_name'];?></option>
            <?php endwhile;?>
        </select>

          
        <?php endwhile;?>
      <button type="submit" name="submit">Edit Product</button>
    </form>
</body>
</html>
