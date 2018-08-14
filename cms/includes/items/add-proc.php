<?php
$pageTitle = 'Add Item Form Processor';

// Item Data
$itemTitle = mysqli_real_escape_string($conn, $_POST['title']);
$itemDescription = mysqli_real_escape_string($conn, $_POST['description']);
$isAvailable = $_POST['isAvailable'] == 'yes' ? 1 : 0;
$price = floatval($_POST['price']);
$year = intval($_POST['year']);

// Category Data
$categoryName = mysqli_real_escape_string($conn, $_POST['categoryName']);
// INSERT CATEGORY
$query = "INSERT INTO categories(categoryName) VALUES('$categoryName')";
$result = mysqli_query($conn, $query);
// SAVE NEW CAT ID FOR ITEM
$categoryID = mysqli_insert_id($conn);

$materialName = mysqli_real_escape_string($conn, $_POST['materialName']);
// INSERT AND SAVE NEW COMPOSITION ID FOR ITEM
$query = "INSERT INTO compositions(materialName) VALUES('$materialName')";
$result = mysqli_query($conn, $query);
$compositionID = mysqli_insert_id($conn);

$place = mysqli_real_escape_string($conn, $_POST['place']);
$era = mysqli_real_escape_string($conn, $_POST['era']);
// INSERT AND SAVE NEW ORIGIN ID FOR ITEM
$query = "INSERT INTO origins(place, era) VALUES('$place','$era')";
$result = mysqli_query($conn, $query);
$originID = mysqli_insert_id($conn);

// INSERT ITEM
$query = "INSERT INTO items(title, description, isAvailable, price, year, categoryID, compositionID, originID) VALUES('$itemTitle','$itemDescription',$isAvailable,$price,$year,$categoryID,$compositionID,$originID)";
$result = mysqli_query($conn, $query);
$itemID = mysqli_insert_id($conn);
