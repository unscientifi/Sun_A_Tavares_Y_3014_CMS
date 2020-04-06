<?php
class Movie
{

    private $conn;

    // Note: update table names, column names in here
    public $product_table               = 'tbl_products';
    public $category_table               = 'tbl_category';
    public $products_category_linking_table = 'tbl_products_category';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getProducts()
    {
        //TODO:write the SQL query that returns all movies from the tbl_movies table
        // $query = 'SELECT * FROM '.$this->movies_table;


        //TODO:write the SQL query that returns all movies with its genre
        $query = 'SELECT p.*, GROUP_CONCAT(c.category_name) as product_name FROM ' . $this->product_table . ' p';
        $query .= ' LEFT JOIN ' . $this->products_category_linking_table . ' link ON link.product_id = p.product_id';
        $query .= ' LEFT JOIN ' . $this->category_table . ' c ON link.category_id = c.caegory_id ';
        $query .= ' GROUP BY p.product_id';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    public function getProductByGenre($genre){
        $query = 'SELECT p.*, GROUP_CONCAT(c.category_name) as category_name FROM ' . $this->product_table . ' p';
        $query .= ' LEFT JOIN ' . $this->products_category_linking_table . ' link ON link.product_id = p.product_id';
        $query .= ' LEFT JOIN ' . $this->category_table . ' c ON link.category_id = c.category_id ';
        $query .= ' GROUP BY p.product_id';
        $query .= ' HAVING category_name LIKE "%'.$genre.'%"';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    public function getMovieByID($id)
    {
        $query = 'SELECT p.*, GROUP_CONCAT(c.category_name) as category_name FROM ' . $this->product_table . ' p';
        $query .= ' LEFT JOIN ' . $this->products_category_linking_table . ' link ON link.product_id = p.product_id';
        $query .= ' LEFT JOIN ' . $this->category_table . ' c ON link.category_id = c.category_id ';
        $query .= ' WHERE p.product_id=' . $id;
        $query .= ' GROUP BY p.product_id';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
