<?php
  require('../conn/connAntiques.php');
  $pageTitle = 'Edit Item Form';

  $itemID = intval($_GET['itemID']);
  $query = "SELECT * FROM items WHERE itemID=$itemID";
  $result = mysqli_query($conn, $query);
  $item = mysqli_fetch_array($result);

?><!DOCTYPE html>
<html lang="en-us">
<head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antiques Website | <?php echo $pageTitle; ?></title>
    <link href="css/cms.css" rel="stylesheet">
    <!-- Font Awesome for mag glass and other cool stuff -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
</head>
<body>
<div id="container">
  <h1>Edit Item</h1>
  <form method="post" action="edit-item-proc.php">
    
    <p><label>Item ID: <input name="itemID" value="<?= $itemID; ?>" readonly></label></p>
    
    <p><label>Title: <input name="title" value="<?= $item['title']; ?>"></label></p>
    
    <p><label>Description: <textarea name="description"><?= $item['description']; ?></textarea></label></p>
    
    <p>Is Item Available: <label><input type="radio" name="isAvailable" value="yes" <?= $item['isAvailable'] == 1 ? 'checked' : ''; ?>> Yes</label> <label><input type="radio" name="isAvailable" value="no" <?= $item['isAvailable'] == 0 ? 'checked' : ''; ?>> No</label></p>
    
    <p><label>Price: <input name="price" type="number" value="<?= $item['price']; ?>"></label></p>
   
    <p><label>Year: <input name="year" type="number" value="<?= $item['year']; ?>"></label></p>
    
    <p><label>Category: <input name="categoryName"></label></p>
    
    <p><label>Material: <input name="materialName"></label></p>
    
    <p><label>Place Of Origin: <input name="place"></label></p>

    <p><label>Era: <input name="era"></label></p>
    
    <p><button>Save Edits</button></p>
    
  </form>
</div>
</body>
</html>