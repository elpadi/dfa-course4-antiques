<?php
/*
IF itemID is in the URL:
  IF there is POST data:
    doing edit item proc
  ELSE:
    show edit item form
ELSE:
  IF there is POST data:
    doing add item proc
  ELSE:
    show add item form
*/
require('../conn/connAntiques.php');

$isEditing = isset($_GET['itemID']);
$hasPostData = isset($_POST['title']);

if ($isEditing) {
  $pageTitle = "Edit Item $_GET[itemID]";
  if ($hasPostData) {
    require('includes/items/edit-proc.php');
  }
} else {
  $pageTitle = "Add New Item";
  if ($hasPostData) {
    require('includes/items/add-proc.php');
  }
}

// If user has submitted a form, create a result message
if ($hasPostData) {
	if ($result) {
		if (mysqli_affected_rows($conn)) {
			$messageType = 'success';
			$message = $isEditing ? 'You edits were successfully saved.' : 'New item successfully created.';
		} else {
			$messageType = 'warning';
			$message = 'No new data was saved.';
		}
	} else {
		$messageType = 'error';
		$message = 'Data could not be saved. '.mysqli_error($conn);
	}
}

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
    
    <?php require('includes/menu.php'); ?>
    
    <h1><?= $pageTitle; ?></h1>
    
    <?php if ($hasPostData): ?>
    <p class="message <?= $messageType; ?>"><?= $message; ?></p>
    <?php endif; ?>
  
    <?php
      if ($isEditing) {
        require('includes/items/edit-form.php');
      } else {
        require('includes/items/add-form.php');
      }
    ?>
  </div>
</body>
</html>
