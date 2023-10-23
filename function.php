<?php
function add($x,$y){
    return $x + $y;
}

echo add(5,10);
echo "<br>";
function hello($x){
    $user = $x;
    if($user === "rneem"){
    echo "Hello ".$user;
    }else{
        echo"hi ".$user;
    }
}
hello("rneem");
 ?>