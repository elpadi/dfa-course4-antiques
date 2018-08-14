<?php

  $itemID = intval($_POST['itemID']);
  $itemTitle = mysqli_real_escape_string($conn, $_POST['title']);
  $itemDescription = mysqli_real_escape_string($conn, $_POST['description']);
  $isAvailable = $_POST['isAvailable'] == 'yes' ? 1 : 0;
  $price = floatval($_POST['price']);
  $year = intval($_POST['year']);

  // EDIT ITEM
  $query = "UPDATE items SET title='$itemTitle', description='$itemDescription', isAvailable=$isAvailable, price=$price, year=$year WHERE itemID=$itemID";
  $result = mysqli_query($conn, $query);
  
