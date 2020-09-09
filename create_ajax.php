<?php
    require_once "config.php";
    // Request Post Variable
    $name = $_REQUEST['name'];
    $model = $_REQUEST['model'];
    $color = $_REQUEST['color'];
    $price = $_REQUEST['price'];
    $pdate = strtotime($_REQUEST['pdate']);
    $tc = time();
    $userName = 'Mr.Bean';
    $sql = "INSERT INTO car_data (user_name_name, car_name, model, color, price, purchase_date, time_created, time_modified) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
         
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssssiiii", $param_username, $param_carname, $param_model, $param_color, $param_price, $param_pdate, $param_tc, $param_tm);
        
        // Set parameters
        $param_username = $userName;
        $param_carname = $name;
        $param_model = $model;
        $param_color = $color;
        $param_price = $price; 
        $param_pdate = $pdate;
        $param_tc = $tc;
        $param_tm = $tc;
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records created successfully. Redirect to landing page
            $result = 200;
            result($result);
        } else{
            $result = 201;
            result($result);
        }
    }
    // Close statement
    mysqli_stmt_close($stmt);

    function result($data){
        if($data == 200){
            echo "success";
            // echo json_encode(array("statusCode"=>$data));
        }else{
            echo "failed";
            // echo json_encode(array("statusCode"=>$data));
        }
    }
?>