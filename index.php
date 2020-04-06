<?php
    require_once 'load.php';

    if(isset($_GET['filter'])){
        $args = array(
            'tbl' => 'tbl_products',
            'tbl2' => 'tbl_category',
            'tbl3' => 'tbl_products_category',
            'col' => 'product_id',
            'col2' => 'category_id',
            'col3' => 'category_name',
            'filter' => $_GET['filter']
        );

        $getProducts = getProductsByFilter($args);
    }else{
        $product_table = 'tbl_products';
        $getProducts = getAll($product_table);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPORT CHEK CMS</title>
</head>
<body>
    <?php include 'templates/header.php' ?>

    <?php while($row = $getProducts->fetch(PDO::FETCH_ASSOC)):?>
        <div class="movie-item">
            <img src="images/<?php echo $row['product_img'];?>" alt="<?php echo $row['product_name'];?>"/>
            <h2><?php echo $row['product_name']; ?></h2>
            <h3><?php echo $row['product_price']; ?></h3>
           
            <a class="More" href="details.php?id=<?php echo $row['product_id']; ?>">More</a>
        </div>
    <?php endwhile;?>

    <?php include 'templates/footer.php' ?>
</body>
</html>