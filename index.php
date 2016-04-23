<?php
// process client request (via url)
header("Content-Type:application/json");
include('function.php');
    
if(!empty($_GET['name']))
{
    $name = $_GET['name'];
    $price = get_price($name);
    if(empty($price))
        // book no fund
        deliver_response(200,"book not found",NULL);
    else
        // respond book price
        deliver_response(200,"book found",$price);
}
else
{
    // throw invalid request
    deliver_response(400,"invalid request",NULL);
}
?>