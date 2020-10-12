<?php

// echo $_REQUEST['actio'];
// echo "<br />";
// echo $_REQUEST['action'];

$data=[];

if(isset($_GET['action']))
{
    $action=$_GET['action'];

    if($action=='Daftar')
    {
        $data[]=$_GET;
    }
}

header("Content-Type:application/json");
header("Access-Control-Allow-Origin:*");

echo json_encode($data);

?>
