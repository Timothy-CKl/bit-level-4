<?php
/**
 * Created by IntelliJ IDEA.
 * User: timot
 * Date: 2/12/2019
 * Time: 5:42 PM
 */

//$info = array("address"=>"Rosmolen 17","postal_code"=>"3961LH","email"=>'info@bit-academy.nl');
//echo "email" . $info["email"], "\n";
//echo "address" . $info["address"], "\n";
//echo "postal_code" . $info["postal_code"], "\n";
//$email = 'info@bit-academy.nl';
//$postal_code = "3961LH";
//$address = "Rosmolen 17";

foreach ($_GET as $key => $value) {
    echo "$key: $value <br>" ;}
?>