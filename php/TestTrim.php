<?php

// trim string
$x = " Hello world! ";
echo trim($x) . "\n";
echo gettype(trim($x)) . "\n";

// trim int
$x = 123;
echo trim($x) . "\n";
echo gettype(trim($x)) . "\n";

// trim array
$x = ["foo", "456", 7];
echo trim($x) . "\n";
echo gettype(trim($x)) . "\n";

// trim bool
$x = true;
echo trim($x) . "\n";
echo gettype(trim($x)) . "\n";

// trim null
$x = null;
echo trim($x) . "\n";
echo gettype(trim($x)) . "\n";

// trim float
$x = 1230.12984732591475609346509132875091237;
echo trim($x) . "\n";
echo gettype(trim($x)) . "\n";

// trim object
class CustomClass {
    public function __toString() {
        return " custom object ";
    }
}

$customObject = new CustomClass();

echo trim($customObject) . "\n";
echo gettype(trim($customObject)) . "\n";


// trim callback
function customTrim($str) {
    return str_replace($str, "hello world ", $str);
}
$x = "hello world! ";

echo trim(customTrim($x)) . "\n";
echo gettype(trim(customTrim($x))) . "\n";
