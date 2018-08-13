<?php
    $title = 'Add Item Form';
?><!DOCTYPE html>
<html lang="en-us">
<head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antiques Website | <?php echo $title; ?></title>
    <link href="css/cms.css" rel="stylesheet">
    <!-- Font Awesome for mag glass and other cool stuff -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
</head>
<body>
<div id="container">
  <h1>Add Item</h1>
  <form method="post" action="add-item-proc.php">
    
    <p><label>Title: <input name="title"></label></p>
    
    <p><label>Description: <textarea name="description"></textarea></label></p>
    
    <p>Is Item Available: <label><input type="radio" name="isAvailable" value="yes"> Yes</label> <label><input type="radio" name="isAvailable" value="no"> No</label></p>
    
    <p><label>Price: <input name="price" type="number"></label></p>
   
    <p><label>Year: <input name="year" type="number"></label></p>
    
    <p><label>Category: <input name="categoryName"></label></p>
    
    <p><label>Material: <input name="materialName"></label></p>
    
    <p><label>Place Of Origin: <input name="place"></label></p>

    <p><label>Era: <input name="era"></label></p>
    
    <p><button>Add Item</button></p>
    
  </form>
</div>
</body>
</html>