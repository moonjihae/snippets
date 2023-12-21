package main

import (
	"fmt"
	"strconv"
	"strings"
	"math"
)

func main{
	var arr = map[string]string{
		"string": " hello world ",
	}
	var arr2 = map[string]int{
		"integer": 1,
	}

	var arr3 = map[string]float64{
		"float": 123.12984732591475609346509132875091237,
	}

	// string을 trim
	fmt.Println(strings.Trim(arr["string"], " "))

	// int를 string으로 변환 후 trim
	intToStr := strconv.Itoa(arr2["integer"])
	fmt.Println(strings.Trim(intToStr, " "))

	// float를 string으로 변환 후 trim
	// php는 float를 string으로 변환할때, 정수부분과 소수점 이하 부분의 총 길이가 14를 넘어가면,
	// 15번째 자리 부터 표현하지 않음
	// ex) $floatValue = 123.12984732591475609346509132875091237;
    //     $stringValue = (string)$floatValue;
    //     echo $stringValue;  // 123.12984732591

	// 정수 부분의 자릿수 계산
    integerPartLength := int(math.Floor(math.Log10(math.Abs(arr3["float"])))) + 1

    // 정수 부분 길이 + 소수점 이하 13자리를 표현
    decimalPlaces := 14 - integerPartLength
    stringValue := fmt.Sprintf("%."+fmt.Sprint(decimalPlaces)+"f", arr3["float"])
	fmt.Println(strings.Trim(stringValue, " "))

	// int 그대로 trim
	z := strings.Trim(arr2["y"], " ")
	fmt.Println(strings.Trim(arr2["y"], " "))

}
