<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table to CSV</title>
            </head>
            <body>
            <header>
            <h1>Table to CSV</h1>
        </header>
        <main>
<?php
include('head.php');
// Create DOM from URL or file
$link =$_GET['link'];
if(empty($link)){
    echo "<div class='box'><h3>Please input a web address</h3></div>";
}else{
$html = file_get_html($link);
$divId = -1;
global $divId;
//Get title 
$titleraw = $html->find('title',0);
$title = $titleraw->innertext;
//get domain
$url = parse_url($link);
$url = $url['host'];
echo '<div class="predata">Getting table data from <span><i><a href="'.$link.'">' . $title . '</a></i></span> at <span><i><a href="https://'.$url.'">'. $url . '</a></i></span></div>';

foreach($html->find('table') as $element) {
    //removes attributes and stuff
    foreach ($element->getAllAttributes() as $attr => $val) {
            $element->removeAttribute($attr);
}    

        //Removes links
        $element = preg_replace('#<a.*?>([^>]*)</a>#i', '$1', $element);
       echo '<div class="tables">'. $element . '<a href="csv.php?link='.$link.'&tableid='.++$divId.'"><button>Download csv</button></a></div><br>';
}
}

?>