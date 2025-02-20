
<?php
if(isset($_POST['calc']))
{
    $text1=$_POST['n1'];
    $text2=$_POST['n2'];
$ans=$_POST['calc'];

if($ans=="+")
$res = $text1+$text2;
elseif($ans=="-")
$res=$text1-$text2;
elseif($ans=="*")
$res=$text1*$text2;
elseif($ans=="/")
$res=$text1/$text2;
}
?>
<html>
  <form method="post" action="">
        <label for="n1" >number 1</label>
        <input type="text" name="n1" placeholder="number" value="<?php 
        echo $text1=""; ?>">
        <br><br>
        <label for="n2">number 2</label>
        <input type="text" name="n2" placeholder="number" value="<?php echo $text2="";?>">
        <br><br>
        <label for="res">result</label>
        <input type="text" name="res" value="<?php echo $res; ?>" >
        <br><br>
       <input type="submit" value="+" name="calc">
       <input type="submit" value="-" name="calc">
       <input type="submit" value="*" name="calc">
       <input type="submit" value="/" name="calc">
    </form>
    
</html>