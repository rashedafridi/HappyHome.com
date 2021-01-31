<?php
    $key=$_GET['key'];
    $array = array();
    $con= mysqli_connect("localhost","root","","ecom_store" ,"3399");//mysqli_connect("localhost","root","","ecom_store");
    
    // $query=mysqli_query($con, "select * from cfg_demos where title LIKE '%{$key}%'");
    // SELECT * FROM `products` ORDER BY `products`.`product_title` ASC 
    // $query=mysqli_query($con, "SELECT * FROM `products` WHERE  product_title  LIKE '%$key%'"); 
    $query=mysqli_query($con, "SELECT product_id ,product_title, product_categories.p_cat_title ,manufacturers.manufacturer_title,categories.cat_title FROM products 
    LEFT join categories ON products.cat_id = categories.cat_id  
    LEFT join manufacturers ON manufacturers.manufacturer_id = products.manufacturer_id
    LEFT join product_categories ON products.p_cat_id = product_categories.p_cat_id
    WHERE  product_title  LIKE '%$key%'||manufacturers.manufacturer_title LIKE  '%$key%' || categories.cat_title LIKE '%$key%' || product_categories.p_cat_title LIKE '%$key%'"); 
    //$keySELECT product_title,manufacturers.manufacturer_title,categories.cat_title FROM products LEFT join categories ON products.cat_id = categories.cat_id  LEFT join manufacturers ON manufacturers.manufacturer_id = products.manufacturer_id
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['product_title'];
      $array[] = $row['p_cat_title'];
      $array[] = $row['manufacturer_title'];
      $array[] = $row['cat_title'];
    }
    echo json_encode($array);
    mysqli_close($con);


