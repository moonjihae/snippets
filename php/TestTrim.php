<?php

$x = " Hello world! ";
echo "trim string: " . trim($x) . "\n";
echo "type of string trimmed result: " . gettype(trim($x)) . "\n";

$x = 123;
echo "trim int : " . trim($x) . "\n";
echo "type of int trimmed result: " . gettype(trim($x)) . "\n";

$x = -123;
echo "trim negative int : " . trim($x) . "\n";
echo "type of negative int trimmed result: " . gettype(trim($x)) . "\n";

$x = 0;
echo "trim zero: " . trim($x) . "\n";
echo "type of zero trimmed result: " . gettype(trim($x)) . "\n";

$x = [];
echo "trim empty array: " . trim($x) . "\n";
echo "type of empty array trimmed result: " . gettype(trim($x)) . "\n";

$x = ["foo", "456", 7];
echo "trim array: " . trim($x) . "\n";
echo "type of array trimmed result: " . gettype(trim($x)) . "\n";

$x = true;
echo "trim bool(true) : " . trim($x) . "\n";
echo "type of bool(true) trimmed result: " . gettype(trim($x)) . "\n";

$x = false;
echo "trim bool(false) : " . trim($x) . "\n";
echo "type of bool(false) trimmed result: " . gettype(trim($x)) . "\n";

$x = null;
echo "trim null: " . trim($x) . "\n";
echo "type of null trimmed result: " . gettype(trim($x)) . "\n";

$x = 123.40;
echo "trim float: " . trim($x) . "\n";
echo "type of float trimmed result: " . gettype(trim($x)) . "\n";

$x = -123.40;
echo "trim negative float: " . trim($x) . "\n";
echo "type of negative float trimmed result: " . gettype(trim($x)) . "\n";

$x = 10.1234567e10;
echo "trim exponent : " . trim($x) . "\n";
echo "type of exponent trimmed result: " . gettype(trim($x)) . "\n";

$x = 1230.12984732591475609346509132875091237;
echo "trim float exceeds 14 digits: " . trim($x) . "\n";
echo "type of float exceeds 14 digits trimmed result: " . gettype(trim($x)) . "\n";

$x = 1230.12984732500000000000000000000000000;
echo "trim float ends with 0: " . trim($x) . "\n";
echo "type of float ends with 0 trimmed result: " . gettype(trim($x)) . "\n";

$x = 123456789123456.40;
echo "trim integer exceeds 14 digits: " . trim($x) . "\n";
echo "type of integer exceeds 14 digits trimmed result: " . gettype(trim($x)) . "\n";

$x = 12345678912340.40;
echo "trim integer ends with 0: " . trim($x) . "\n";
echo "type of integer ends with 0 trimmed result: " . gettype(trim($x)) . "\n";

class CustomClass {
    public function __toString() {
        return " custom object ";
    }
}

$customObject = new CustomClass();

echo "trim object has toString function: " . trim($customObject) . "\n";
echo "type of object has toString function trimmed result: " . gettype(trim($customObject)) . "\n";

class CustomClass2 {
    public function sayHello() {
        return "Hello world! ";
    }
}

$customObject2 = new CustomClass2();
echo "trim object without toString function: " . trim($customObject2) . "\n";
echo "type of object without toString function trimmed result: " . gettype(trim($customObject2)) . "\n";

function customTrim($str) {
    return str_replace($str, "hello world ", $str);
}
$x = "hello world! ";
echo "trim function: " . trim(customTrim($x)) . "\n";
echo "type of function trimmed result: " . gettype(trim(customTrim($x))) . "\n";


$x = <<<HEADER
<header>
 <h1>hello world   </h1>
</header>
HEADER;
echo "trim heredoc string : " . trim($x, "us\ning") . "\n";
echo "type of heredoc string trimmed result: " . gettype(trim($x)) . "\n";

$x = "\thello world";
echo "trim heredoc string : " . trim($x, "us\ning") . "\n";
echo "type of heredoc string trimmed result: " . gettype(trim($x)) . "\n";

echo "trim nothing : ".  trim() . "\n";
echo "type of notion trimmed result: " . gettype(trim()) . "\n";

$x = fopen(__FILE__, "r");
echo "trim resource : " . trim($x) . "\n";
echo "type of resource trimmed result: " . gettype(trim($x)) . "\n";

/* second argument charlist as null - does not trim any white spaces */
var_dump(trim("\ttesting trim", ""));
var_dump(trim("  \ttesting trim  ", NULL));
var_dump(trim("  \ttesting trim  "));
var_dump(trim("\ttesting trim  ", true));
var_dump(trim(" \x00\t\nABC \x00\t\n", ""));
var_dump(trim(" \x00\t\nABC \x00\t\n"));
var_dump(trim("!===Hello World===!", "=!"));
var_dump(trim("\x0A\x0DExample string\x0A\x0D", "\x00..\x1F"));
var_dump(trim("abcdefghi", "a..f"));

