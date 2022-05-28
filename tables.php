<html>
    <head>
        <style>
            .tables {
                border: 2px solid black;
            }
            </style>
            </head>
            <body>
<?php
include('head.php');
// Create DOM from URL or file
$link =$_GET['link'];

$html = file_get_html($link);
$table = "1";
$divId = -1;
global $divId;

foreach($html->find('table') as $element)
       echo '<div class="tables">'. $element . '<a href="csv.php?link='.$link.'&tableid='.++$divId.'"><button>download csv</button></a></div><br>';



?>