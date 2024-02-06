def change_to_go_convention(input_text):
    # Split the input text into lines and filter out empty lines
    lines = input_text.strip().split('\n')
    result_lines = []

    for line in lines:
        # Check if the line is a comment and include it as is
        if line.strip().startswith("//") or line.strip() == "":
            result_lines.append(line)
            continue
        else:
            # Split each line into key and value parts for non-comment lines
            key, value = line.split(' = ')

            # Convert the key to Go's naming convention for non-comment lines
            key_parts = key.lower().split('_')
            go_key = key_parts[0] + ''.join(word.capitalize() for word in key_parts[1:])

            # Combine the converted key with its value for non-comment lines
            result_line = go_key + " = " + value
            result_lines.append(result_line)

    # Join the converted lines back into a single string
    result_text = '\n'.join(result_lines)
    return result_text

input_text = """ """ # put your input_text


# Convert the input text again
converted_text = change_to_go_convention(input_text)
print(converted_text)
