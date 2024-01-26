<?php
$product_array = $db_handle->runQuery("SELECT * FROM products ORDER BY id ASC");
if (!empty($product_array)) { 
	foreach($product_array as $key=>$value){
?>
	<div class="product-item">
		<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
		<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
		<div class="product-tile-footer">
		<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
		<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
		<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
		</div>
		</form>
	</div>
<?php
	}
}

?>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script>
$("#thumbnail-container img").click(function() {
	$("#thumbnail-container img").css("border", "1px solid #ccc");
    var src = $(this).attr("src");
    $("#preview-enlarged img").attr("src", src);
    $(this).css("border", "#fbb20f 2px solid");
    
});
</script>