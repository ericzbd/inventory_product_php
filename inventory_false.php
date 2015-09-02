<?php
Require_once("product_false.php");
$inventory_false = new Product_false('1','a','2','3');

// ------------------------------Set Properties--------------------------
$product_error_message = $inventory_false->set_product_name('1');
print $product_error_message == TRUE ? 'Name update successful<br/>' : 'Name update not successful. Try entering letters.<br/>';

$product_error_message = $inventory_false->set_product_number('a');
print $product_error_message == TRUE ? 'Number update successful<br/>' : 'Number update not successful. Try entering numbers.<br/>';

$product_error_message = $inventory_false->set_product_description('2');
print $product_error_message == TRUE ? 'Description update successful<br />' : 'Description update not successful. Try entering letters.<br />';

$product_error_message = $inventory_false->set_product_color('3');
print $product_error_message == TRUE ? 'Color update successful<br />' : 'Color update not successful. Try entering letters.<br />';
// ------------------------------Get Properties--------------------------
print $inventory_false->get_product_name() . "<br/>";
print $inventory_false->get_product_number() . "<br/>";
print $inventory_false->get_product_description() . "<br />";
print $inventory_false->get_product_color() . "<br />";
$product_properties = $inventory_false->get_properties();
list($product_name, $product_number, $product_description, $product_color) = explode(',', $product_properties);
print "Product name is $product_name. Product number is $product_number. Product description is $product_description. 
Product color is $product_color.";
?>
 

