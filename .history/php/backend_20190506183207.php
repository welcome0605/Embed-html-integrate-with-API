<?php
// echo "success";
$decoded = json_decode($_POST['json'],true);
print_r ($decoded);

// // output values:
// foreach ($decoded as $value) {
//    echo $value["name"] . "=" . $value["value"];
// }

// //set values:
// foreach ($decoded as $value) {
//     $$value["name"] = $value["value"];
// }

// //both:
// foreach ($decoded as $value) {
//     $$value["name"] = $value["value"];
//     echo $value["name"] . "=" . $$value["name"];
//     echo "";
// }

?>