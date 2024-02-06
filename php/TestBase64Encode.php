<?php
echo "안녕하세요 : " . "\n";
var_dump(base64_encode("안녕하세요"));
echo "Hello : " . "\n";
var_dump(base64_encode("Hello"));
echo "123 : " . "\n";
var_dump(base64_encode("123"));
echo "123 : " . "\n";
var_dump(base64_encode(123));
echo "null : " . "\n";
var_dump(base64_encode(null));
echo "empty string : " . "\n";
var_dump(base64_encode(""));
echo "empty string : " . "\n";
var_dump(base64_encode(""));
echo "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!%^&*(){}[] : " . "\n";
var_dump(base64_encode("ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!%^&*(){}[]"));
echo "\n\t Line with control characters\r\n : " . "\n";
var_dump(base64_encode("ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!%^&*(){}[]"));
echo "\xC1\xC2\xC3\xC4\xC5\xC6 : " . "\n";
var_dump(base64_encode("\xC1\xC2\xC3\xC4\xC5\xC6"));
echo "\75\76\77\78\79\80 : " . "\n";
var_dump(base64_encode("\75\76\77\78\79\80"));

var_dump(base64_encode());
echo "empty array : " . "\n";
var_dump(base64_encode(array()));
echo "true : " . "\n";
var_dump(base64_encode(true));

echo "array(1) : " . "\n";
var_dump(base64_encode(array(1)));

//defining a class
class sample  {
    public function __toString() {
        return "sample object";
    }
}
echo "object with tostring : " . "\n";
var_dump(base64_encode(new sample()));
