<?php
include('head.php');


$link =$_GET['link'];
$tableid =$_GET['tableid'];


$html1 = file_get_html($link);
$table = $html1->find('table', $tableid);

$html = str_get_html($table);


header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=sample.csv');

$fp = fopen("php://output", "w");

foreach($html->find('tr') as $element)
{
        $th = array();
        foreach( $element->find('th') as $row)  
        {
            $th [] = $row->plaintext;
        }
        

        $td = array();
            foreach( $element->find('td') as $row)  
            {
                $td [] = $row->plaintext;
            }
            !empty($th) ? fputcsv($fp, $th) : fputcsv($fp, $td);
}


fclose($fp);
?>