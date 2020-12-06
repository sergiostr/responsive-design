<?php
/**
 * Function: fetch_db()
 *
 * Arguments:
 * $filename (string: filepath to config.txt)
 * $delimiter (string: csv delimiter character)
 *
 * Output:
 * $data (two-dimensional array with file contents, each entry corresponding to each valid line of the config file)
 *
 * Output Example:
 * Array
 * (
 *    [0] => Array
 *    (
 *       [0] => p1
 *       [1] => lot3
 *       [2] => john@msn.com
 *       [3] => mypass1
 *       [4] => specs1.pdf
 *       [5] => specs2.pdf
 *    )
*/
function fetch_db($filename, $delimiter)
{
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;
    $entry = 0;
    $data = array();
    $lines = file ($filename);
    for($i=0;$i<count($lines);$i++){
        $line_pieces = explode($delimiter,trim($lines[$i]));
        if(substr($line_pieces[0],0, 1)=="#" || count($line_pieces) < 4)continue;
        $aux_ID = explode("/",$line_pieces[0]);
        if (count($aux_ID )==2){
            $data[$entry][] = trim($aux_ID[0]);
            $data[$entry][] = trim($aux_ID[1]);
        }

        for ($j=1;$j<count($line_pieces);$j++){
            if (strlen(trim($line_pieces[$j]))>0){
                $data[$entry][] = trim($line_pieces[$j]);
            }
        }
        $entry++;
    }
    return $data;
}

/**
 * Function: check_access()
 *
 * Arguments:
 * $productID (string: from login page)
 * $lotID (string: from login page)
 * $email (string: from login page)
 * $password (string: from login page)
 * $data (two dimensional array: output from fetch_db() function)
 *
 * Output:
 * $data (one dimensional array with partial file path entries for matching files if arguments match)
 */
function check_access($productID, $lotID, $email, $password, $data)
{
    $pdf_list = array();
    $base_path = "specs";
    for ($i=0;$i<count($data);$i++){
        if($data[$i][0] == $productID
            && $data[$i][1] == $lotID
            && $data[$i][2] == $email
            && $data[$i][3] == $password){
            for ($j=4;$j<count($data[$i]);$j++){
                $pdf_list[]=$base_path."/".$data[$i][0]."/".$data[$i][1]."/".$data[$i][$j];
            }
            return $pdf_list;
        }
    }
}
// ########### main ############
// fetch_db(): Retrieves database in array format. Check function comments for example output structure
$db_array = fetch_db("config.txt", ',');
//print_r($db_array);

// check_access(): Retrieves file list if access ProductID, LotID, email and password match
$pdf_list = check_access("p1", "lotssss3", "john@msn.com", "mypass1", $db_array);
print_r($pdf_list);

// To check if login was successful simply use the following code:
$access = "false";
if (is_array($pdf_list)) $access = "true";
print_r($access);
// ##############################
?>