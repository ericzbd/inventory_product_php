<?php
class Product_true
{
// ----------------------------------------- Properties -----------------------------------------
private $product_name = "no name";
private $product_number = 0;
private $product_description = "nada";
private $product_color = "no color";

// ---------------------------------- Constructor ----------------------------------------------
function __construct($value1, $value2, $value3, $value4)
{

$product_name_error = $this->set_product_name($value1) == TRUE ? 'TRUE,' : 'FALSE,';
$product_number_error = $this->set_product_number($value2) == TRUE ? 'TRUE,' : 'FALSE,';
$product_description_error = $this->set_product_description($value3) == TRUE ? 'TRUE,' : 'FALSE,';
$product_color_error = $this->set_product_color($value4) == TRUE ? 'TRUE,' : 'FALSE,';

$this->error_message = $product_name_error . $product_number_error . $product_description_error . $product_color_error;

}
//------------------------------------toString--------------------------------------------------
public function __toString()
{
        return $this->error_message;
}


// ---------------------------------- Set Methods ----------------------------------------------

function set_product_name($value)
{

$error_message = TRUE; (ctype_alpha($value) && strlen($value) <= 20) ? $this->product_name = $value : $error_message = FALSE;
return $error_message;

}

function set_product_number($value)
{
$error_message = TRUE;
(ctype_digit($value) && ($value) > 0 && ($value) <= 1000) ? $this->product_number = $value : $this->error_message = FALSE;
return $this->error_message;
}
function set_product_description($value)
{
$error_message = TRUE;
(ctype_alpha($value) && strlen($value) <= 40) ? $this->product_description = $value : $error_message = FALSE;
return $this->error_message;
}
function set_product_color($value)
{
$error_message = TRUE;
(ctype_alpha($value) && strlen($value) <= 10) ? $this->product_color = $value : $this->error_message = FALSE;
return $this->error_message;
}
// ----------------------------------------- Get Methods ------------------------------------------------------------
function get_product_name()
{
return $this->product_name;
}
function get_product_number()
{
return $this->product_number;
}
function get_product_description()
{
return $this->product_description;
}
function get_product_color()
{
return $this->product_color;
}
function get_properties()
{
return "$this->product_name,$this->product_number,$this->product_description,$this->product_color.";
}


}
?> 

