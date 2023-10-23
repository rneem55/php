<?php 
$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$op = $_GET["op"];
if(!empty($number1) && !empty($number2)&& !empty($op)){
    if($op === "+"){
        $result = $_GET["number1"]+$_GET["number2"];
            }elseif($op === "-"){
              $result = $_GET["number1"]-$_GET["number2"];
               }elseif($op === "*"){
                      $result = $_GET["number1"]*$_GET["number2"];
                }elseif($op === "/"){
                    $result = $_GET["number1"]/$_GET["number2"];
                    }   
}
if(empty($number1)){
    $result = "الرقم الاول فارغ";
}elseif(empty($number2)){
$result="الرقم الثاني فارغ";
}elseif(empty($op)){
    $result="يرجى ادخال العملية";

}
if($op === "+"){
$result = $_GET["number1"]+$_GET["number2"];
}elseif($op === "-"){
    $result = $_GET["number1"]-$_GET["number2"];
    }if($op === "*"){
        $result = $_GET["number1"]*$_GET["number2"];
        }if($op === "/"){
            $result = $_GET["number1"]/$_GET["number2"];
            }
?>


<head>
    <link rel ="stylesheet" href="bootstrap.main.css">
</head>
<body>
    <div class="container">
        <form action = "calc.php"method = "GET"class= "form">
            <div><label>Enter Number1:</label>
        <input type = "number" id = "num1" name = "number1" class = "form-control">
    </div>
    <div><label>Enter Number2:</label>
        <input type = "number" id = "num2" name = "number2" class= "form-control">
        </div>
       
        <br>
        <div>
        <label>العملية:</label>
        <input type = "text" name = "op" class = "form-control">
        </div>
        <div>
            <?php echo $result ?>
        </div>
        <input type = "submit" class="btn btn-primary">
        </form>
    </div>
</body>