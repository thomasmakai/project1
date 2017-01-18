<?php

$row = 1;
if (($handle = fopen("data.csv", "r")) !== FALSE) {  //open data.csv if successful continue

    echo '<table border="1">'; //set html table border value to 1

    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) { //parses a line from an open file, checking for CSV fields
        $num = count($data);
        if ($row == 1) {
            echo '<thead><tr>'; //begin html header
        }else{
            echo '<tr>'; //else begin table row
        }

        for ($c=0; $c < $num; $c++) { // sort csv fields into html table
            //echo $data[$c] . "<br />\n";
            if(empty($data[$c])) { //if field is empty set value to no break speace
               $value = "&nbsp;";
            }else{
               $value = $data[$c]; //else set value to field string
            }
            if ($row == 1) {
                echo '<th>'.$value.'</th>'; //set table header value and close table header cell tag
            }else{
                echo '<td>'.$value.'</td>'; //set table data and close table data tag
            }
        }

        if ($row == 1) {
            echo '</tr></thead><tbody>'; //if first row close table row, header and begin table body
        }else{
            echo '</tr>'; //else close table row
        }
        $row++; //go to next table row
    }

    echo '</tbody></table>'; //close table body and table tags
    fclose($handle); //close file
}
?>