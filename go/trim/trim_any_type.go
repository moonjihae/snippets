package main

import (
	"fmt"
	"math"
	"strings"
)

// This fuction follows ruless of trim() in php5.6
func TrimWithAnyType(value interface{}, chars string) interface{} {
	// Set the default value for char
	if len(chars) == 0 {
		chars = " \n\r\t\v\x00"
	}

	// Handle different types
	switch v := value.(type) {
	case string:
		return strings.Trim(v, chars)
	case int:
		return strings.Trim(fmt.Sprintf("%v", value), chars)
	case float64:
		/*
			php는 float를 string으로 변환할때, 정수부분과 소수점 이하 부분의 총 길이가 14를 넘어가면,
			15번째 자리 부터 표현하지 않음
			ex) $floatValue = 123.12984732591475609346509132875091237;
			    $stringValue = (string)$floatValue;
			    echo $stringValue;  // 123.12984732591
		*/

		// Calculate the length of the integer part
		integerPartLength := int(math.Floor(math.Log10(math.Abs(v)))) + 1

		// Total length should be 14 digits, including the integer part and the decimal places
		decimalPlaces := 14 - integerPartLength
		strValue := fmt.Sprintf("%."+fmt.Sprint(decimalPlaces)+"f", v)
		return strings.Trim(strValue, chars)
	case bool:
		// retrun "1" for true and an empty string("") for false
		if v {
			return "1"
		} else {
			return ""
		}
	case nil:
		return ""
	// TODO: Implement handling for objects.
	// TODO: If the object has a _toString() method, return strings.Trim(v._toString(), chars).
	// TODO: Otherwise, return nil.
	default:
		// For other types, return nil
		return nil
	}
}
