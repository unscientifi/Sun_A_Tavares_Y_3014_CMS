<?php

function addProduct($product)
{
    //TODO: 45 mins ~ 1.5 hrs

    try {
        // 1. Connect to the DB
        $pdo = Database::getInstance()->getConnection();

        // 2. Validate the uploaded file
        $img   = $product['img'];
        $upload_file    = pathinfo($img['name']);
        $accepted_types = array('gif', 'jpg', 'jpe', 'png', 'jpeg', 'webp');
        if (!in_array($upload_file['extension'], $accepted_types)) {
            throw new Exception('Wrong file type!');
        }

        // 3. Move the uploaded file around (move the file from tmp path to the /images)
        $image_path = '../images/';

        //Optional 10 ~ 20 mins
        // Randomlize/hash the file name before move it over!
        $generated_name     = md5($upload_file['filename'] . time());
        $generated_filename = $generated_name . '.' . $upload_file['extension'];
        $targetpath         = $image_path . $generated_filename;

        if (!move_uploaded_file($img['tmp_name'], $targetpath)) {
            throw new Exception('Failed to move uploaded file, check permission!');
        }

        // *** Optional *** 1hr ~ couple hours
        // If the upload file is a image, convert it to WebP

        // 4. Insert into DB (tbl_movies as well as tbl_mov_genre)
        $insert_product_query = 'INSERT INTO tbl_products(product_name,product_img,product_description) VALUES(:pname,:img,:description)';
        $insert_product        = $pdo->prepare($insert_product_query);
        $insert_product_result = $insert_product->execute(
            array(
                ':pname'     => $product['name'],
                ':img'     => $generated_filename,
                ':description'      => $product['description']
            )
        );

        $last_uploaded_id = $pdo->lastInsertId();
        if ($insert_product_result && !empty($last_uploaded_id)) {
            $update_category_query = 'INSERT INTO tbl_products_category(product_id, category_id) VALUES(:product_id, :category_id)';
            $update_category       = $pdo->prepare($update_category_query);
            $update_category_result = $update_category->execute(
                array(
                    ':product_id' => $last_uploaded_id,
                    ':category_id'  => $product['category'],
                )
            );
        }
 
        // 5. If all of above works, redirect user to index.php
        redirect_to('index.php');
    } catch (Exception $e) {
        // Otherwise, return some error message
        $error = $e->getMessage();
        return $error;
    }
}


function getAllProducts(){
    $pdo = Database::getInstance()->getConnection();

    $get_product_query = 'SELECT * FROM tbl_products';
    $products = $pdo->query($get_product_query);

    if($products){
        return $products;
    }else{
        return false;
    }
}

function deleteProduct($id){
    $pdo = Database::getInstance()->getConnection();
    $delete_product_query = 'DELETE FROM tbl_products WHERE product_id = :id';
    $delete_product_set = $pdo->prepare($delete_product_query);
    $delete_product_result = $delete_product_set->execute(
        array(
            ':id'=>$id
        )
    );

    //If everything went through, redirect to admin_deleteuser.php
    //Otherwise, return false
    if($delete_product_result && $delete_product_set->rowCount() > 0){
        redirect_to('admin_deleteproduct.php');
    }else{
        return false;
    }
}
