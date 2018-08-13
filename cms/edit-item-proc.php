<?php
  $pageTitle = 'Edit Item Form Processor';
  require('../conn/connAntiques.php');

  // Item Data
  $itemID = intval($_POST['itemID']);
  $itemTitle = mysqli_real_escape_string($conn, $_POST['title']);
  $itemDescription = mysqli_real_escape_string($conn, $_POST['description']);
  $isAvailable = $_POST['isAvailable'] == 'yes' ? 1 : 0;
  $price = floatval($_POST['price']);
  $year = intval($_POST['year']);

  // EDIT ITEM
  $query = "UPDATE items SET title='$itemTitle', description='$itemDescription', isAvailable=$isAvailable, price=$price, year=$year WHERE itemID=$itemID";
  $result = mysqli_query($conn, $query);
  
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
    <h1><?php if ($result) echo 'Success! Item Edits Saved'; else echo 'Failed! New Data Not Saved. '.mysqli_error($conn); ?></h1>
    <p><a href="edit-item.php?itemID=<?= $itemID; ?>">Back To Edit Form</a></p>
  </div>
</body>
</html>