
 <form action="array.php" method="GET">
    <input type="text" name="xname">
    <input type="submit">
</form>


<?php
$xname =$_GET["xname"];
$score = ["abdulrhman"=>["Score"=>"90","Grade"=>"A"],"rneem"=>["Score"=>"95","Grade"=>"A+"],"lateen"=>["Score"=>"80","Grade"=>"B"]];
//$family = array("father","mother");
//$family[1] = "Love";$family = ["Designer" => "abdulrhman", "programmer" => "rneem","Gamer" => "Lateen"];
echo "Score :".$score[$xname] ["Score"];
echo "<br>";
echo "Grade :".$score[$name]["Grade"];
 ?>
