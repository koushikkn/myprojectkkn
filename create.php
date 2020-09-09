<?php
// Include config file
require_once "config.php";

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Car Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
    <script type="text/javascript">
    $(document).ready(function(){
        $("form").submit(function(e) {
            
            //prevent Default functionality
            e.preventDefault();
            
            var actionurl = e.currentTarget.action;
            
            //do your own request an handle the results
            $.ajax({
                    url: actionurl,
                    type: 'post',
                    data: $("#carDetails_form").serialize(),
                    success: function(response) {
                        alert("Data added Successfully");
                        window.location.href = 'index.php';
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
            });
        });
    });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add New Car Details</h2>
                    </div>
                    <form id="carDetails_form" action="create_ajax.php">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Car Name ..." required value="">
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" name="model" class="form-control" placeholder="Enter Car Model ..." required value="">
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label>Color</label>
                            <input type="text" name="color" class="form-control" placeholder="Enter Car Color ..." required value="">
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Enter Car Price ..." required value="">
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label>Purchase Date</label>
                            <input type="date" name="pdate" class="form-control" placeholder="Enter Purchase Date ..." required value="">
                            <span class="help-block"></span> 
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>