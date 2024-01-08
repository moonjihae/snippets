<?php

function startElementHandler($parser, $name, $attrs) {
    echo "Start tag: " . $name . "\n";
}

function endElementHandler($parser, $name) {
    echo "End tag: " . $name . "\n";
}

function characterDataHandler($parser, $data) {
    echo "Data: " . $data . "\n";
}

function testXmlParsing($xmlString) {
    $parser = xml_parser_create();

     // Set the options for parsing the XML data.
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);

    // Set handlers
    xml_set_element_handler($parser, "startElementHandler", "endElementHandler");
    xml_set_character_data_handler($parser, "characterDataHandler");


    // Parse the xml string
    if (!xml_parse($parser, $xmlString, true)) {
        echo "fail to parsing xml" . "\n";
        echo "XML error in line " . xml_get_current_line_number($parser) . " code " . xml_error_string(xml_get_error_code($parser)) . "\n";
    } else {
        echo "success to parsing xml" . "\n";
    }
    // Free the parser
    xml_parser_free($parser);
}

$invalid_xml = "<hello attr=\"\xBE\xC8\xB3\xE7\">bla</hello>";
$valid_xml = "<hello attr=\"\xEC\x95\x88\xEB\x85\x95\">bla</hello>";

testXmlParsing($invalid_xml);
testXmlParsing($valid_xml);