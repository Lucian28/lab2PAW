<?php
if(isset($_POST['sub'])){
 $num1=$_POST['n1'];
 $num2=$_POST['n2'];
 $oprnd=$_POST['sub'];
 if($oprnd=="+")
 $ans=$num1+$num2;
 else if($oprnd=="-")
 $ans=$num1-$num2;
 else if($oprnd=="x")
 $ans=$num1*$num2;
 else if($oprnd=="/")
 $ans=$num1/$num2;
}?>

<h1>Simple Calculator</h1><br>
<form action="" method="POST">
Primul numar:<input name="n1" value=""><br>
Al doilea numar:<input name="n2" value=""><br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/"><br>
<br>Rezultat <input type='text' value="<?php echo $ans;?>"><br>
</form>
