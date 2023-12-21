package main

import (
	"fmt"
	"reflect"
)

func customTrim(value interface{}) string {
	return " hello world "
}
func main() {
	value := map[string]interface{}{
		"strValue":   "Hello world! ",
		"intValue":   123,
		"arrValue":   []interface{}{"foo", "456", 7},
		"trueValue":  true,
		"falseValue": false,
		"nilValue":   nil,
		"floatValue": 1230.12984732591475609346509132875091237,
	}
	x := TrimWithAnyType(value["strValue"], "")
	fmt.Println("trim string: ", x)
	fmt.Println("type of string trimmed result: ", reflect.TypeOf(x))

	x = TrimWithAnyType(value["intValue"], "")
	fmt.Println("trim int: ", x)
	fmt.Println("type of int trimmed result: ", reflect.TypeOf(x))

	x = TrimWithAnyType(value["arrValue"], "")
	fmt.Println("trim array: ", x)
	fmt.Println("type of array trimmed result: ", reflect.TypeOf(x))

	x = TrimWithAnyType(value["trueValue"], "")
	fmt.Println("trim bool(true): ", x)
	fmt.Println("type of bool(true) trimmed result: ", reflect.TypeOf(x))

	x = TrimWithAnyType(value["falseValue"], "")
	fmt.Println("trim bool(false): ", x)
	fmt.Println("type of bool(false) trimmed result: ", reflect.TypeOf(x))

	x = TrimWithAnyType(value["nilValue"], "")
	fmt.Println("trim null: ", x)
	fmt.Println("type of null trimmed result: ", reflect.TypeOf(x))

	x = TrimWithAnyType(value["floatValue"], "")
	fmt.Println("trim flaot: ", x)
	fmt.Println("type of float trimmed result: ", reflect.TypeOf(x))

	//TODO: Test object trim
	x = NewCat("nabi")
	fmt.Println("trim object: ", x)
	fmt.Println("type of object trimmed result: ", reflect.TypeOf(x))

	x = TrimWithAnyType(customTrim(value["nilValue"]), "")
	fmt.Println("trim callback: ", x)
	fmt.Println("type of callback trimmed result: ", reflect.TypeOf(x))

}
