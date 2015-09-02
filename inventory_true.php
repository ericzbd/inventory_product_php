<?php
Require_once("product_true.php");
$inventory_true = new Product_true('Spatula','1','Plastic','Purple');

// ------------------------------Set Properties--------------------------
$product_error_message = $inventory_true->set_product_name('Spatula');
print $product_error_message == TRUE ? 'Name update successful<br/>' : 'Name update not successful<br/>';

$product_error_message = $inventory_true->set_product_number('1');
print $product_error_message == TRUE ? 'Number update successful<br/>' : 'Number update not successful<br/>';

$product_error_message = $inventory_true->set_product_description('Plastic');
print $product_error_message == TRUE ? 'Description update successful<br />' : 'Description update not successful<br />';

$product_error_message = $inventory_true->set_product_color('Purple');
print $product_error_message == TRUE ? 'Color update successful<br />' : 'Color update not successful<br />';
// ------------------------------Get Properties--------------------------
print $inventory_true->get_product_name() . "<br/>";
print $inventory_true->get_product_number() . "<br/>";
print $inventory_true->get_product_description() . "<br />";
print $inventory_true->get_product_color() . "<br />";
$product_properties = $inventory_true->get_properties();
list($product_name, $product_number, $product_description, $product_color) = explode(',', $product_properties);
print "Product name is $product_name. Product number is $product_number. Product description is $product_description. 
Product color is $product_color.";
?>
 

