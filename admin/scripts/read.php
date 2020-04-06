<?php
function getAll($tbl){
        $pdo = Database::getInstance()->getConnection();

        $queryAll = 'SELECT * FROM '.$tbl;
        $results = $pdo->query($queryAll);

        if($results){
            return $results;
        }else{
            return 'There was a problem accessing this info';
        }
    };

function getSingleProduct($tbl, $col, $id){
    //TODO: refer the function above to finish this one
    //make sure it return only one movie that filtered by $col = $id

    $pdo = Database::getInstance()->getConnection();

    $queryAll = 'SELECT * FROM '.$tbl .' WHERE '.$col.' = '.$id ;

    // $queryAll = "SELECT * FROM $tbl WHERE $col = $id";
    $results = $pdo->query($queryAll);

    if($results){
        return $results;
    }else{
        return 'There was a problem accessing this info';
    }
}

function getProductsByFilter($args){
    $pdo = Database::getInstance()->getConnection();

    $queryAll = 'SELECT * FROM '. $args['tbl'].' AS t,';
    $queryAll .= ' '. $args['tbl2'].' AS t2,';
    $queryAll .= ' '. $args['tbl3'].' AS t3';
    $queryAll .= ' WHERE t.'. $args['col'].' = t3.'.$args['col'];
    $queryAll .= ' AND t2.'. $args['col2'].' = t3.'.$args['col2'];
    $queryAll .= ' AND t2.'. $args['col3'].' = "'.$args['filter'].'"';

    // echo $queryAll;
    // exit;


    $results = $pdo->query($queryAll);

    if($results){
        return $results;
    }else{
        return 'There was a problem accessing this info';
    }
}

function editSingleProduct($id){
    $pdo = Database::getInstance()->getConnection();
    //TODO: execute the proper SQL query to fetch the user data whose user_id = $id
    $get_product_query = 'SELECT * FROM tbl_products WHERE product_id = :id';
    $get_product_set = $pdo->prepare($get_product_query);
    $get_product_result = $get_product_set->execute(
        array(
            ':id'=>$id
        )
    );

    
    //TODO: if the execution is successful, return the user data
    // Otherwise, return an error message
    if($get_product_result){
        return $get_product_set;
    }else{
        return 'There was a problem accessing the user';
    }
}

function editProduct($id, $pname, $description, $category){

    $pdo = Database::getInstance()->getConnection();


    $update_product_query = 'UPDATE tbl_products SET product_name = :pname, product_description = :description WHERE product_id = :id';
    $update_product_set = $pdo->prepare($update_product_query);
    $update_product_result = $update_product_set->execute(
        array(
            ':id'=>$id,
            ':pname'=>$pname,
            ':description'=>$description,
            //':img'=>$img
        )
    );

        
        $update_category_query = 'UPDATE tbl_products_category SET category_id = :category_id WHERE product_id = :product_id';
        $update_category = $pdo->prepare($update_category_query);

        $update_category_result = $update_category->execute(
            array(
                ':product_id' => $id,
                ':category_id' => $category
            )
        );
    
  

  
    //echo $update_product_set->debugDumpParams();
    //exit;
  
    if($update_product_result && $update_category_result){
        redirect_to('index.php');
    }else{
        return 'Please fill out the empty field!';
    }
}

// function searchProduct(){

//     $pdo = Database::getInstance()->getConnection();
//     $search = $_POST['search'];
//     $select_product_query = "SELECT * FROM tbl_products WHERE product_name LIKE '%$search%' OR product_description LIKE '%$search%'";
//     $result = $pdo->query($select_product_query);

//     if($result){
//         return $result;
//     } else {
//         echo 'There are no results matching your search';
    
// }
// }


