<?php
$itemID = intval($_GET['itemID']);
$query = "SELECT * FROM items WHERE itemID=$itemID";
$result = mysqli_query($conn, $query);
$item = mysqli_fetch_array($result);
if ($item):
?>
<form method="post" action="">

	<p><label>Item ID: <input name="itemID" value="<?= $itemID; ?>" readonly></label></p>

	<p><label>Title: <input name="title" value="<?= $item['title']; ?>"></label></p>

	<p><label>Description: <textarea name="description"><?= $item['description']; ?></textarea></label></p>

	<p>Is Item Available: <label><input type="radio" name="isAvailable" value="yes" <?= $item['isAvailable'] == 1 ? 'checked' : ''; ?>> Yes</label> <label><input type="radio" name="isAvailable" value="no" <?= $item['isAvailable'] == 0 ? 'checked' : ''; ?>> No</label></p>

	<p><label>Price: <input name="price" type="number" value="<?= $item['price']; ?>" step="0.01"></label></p>

	<p><label>Year: <input name="year" type="number" value="<?= $item['year']; ?>"></label></p>

	<p><label>Category: <input name="categoryName"></label></p>

	<p><label>Material: <input name="materialName"></label></p>

	<p><label>Place Of Origin: <input name="place"></label></p>

	<p><label>Era: <input name="era"></label></p>

	<p><button>Save Edits</button></p>

</form>
<?php
else: echo "Item with ID '$_GET[itemID]' was not found.";
endif;