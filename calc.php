
<?php
if(isset($_POST['calc']))
{
    $text1=$_POST['n1'];
    $text2=$_POST['n2'];
$ans=$_POST['calc'];

if($ans=="+")
$res=$text1+$text2;
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
      <div class="container">
        <h1>Calculator App</h1><label for="n1" class="n1">number 1</label>
        <input type="text" name="n1" placeholder="number" value="<?php 
        echo $text1=""; ?>" class="container1">
        <br><br>  
  
        <label for="n2" class="n2">number 2</label>
        <input type="text" name="n2" placeholder="number" value="<?php echo $text2="";?>">
        <br><br>
        <label for="res" class="result"></label>
        <input type="text" name="res" value="<?php echo $res; ?>" >
        <br><br>
       <input type="submit" value="+" name="calc" class="btn" >
       <input type="submit" value="-" name="calc" class="btn" >
       <input type="submit" value="*" name="calc" class="btn" >
       <input type="submit" value="/" name="calc" class="btn">
       </div>
    </form>
    
</html>
<style>
    html{
        margin:0px;
        padding:0px;
        background-color:pink;

    }
    .n1{
        color: red;
        margin-left:50px;
       
    }
    .n2{
        color:red;
        margin-left:50px;
    }
    .result{
        color:red;
        margin-left:50px;
        padding:4px;
    }
    h1{
        margin:0px;
        padding-bottom:15px;
        text-align:center;

    }
input[type="submit"]{
    margin-left:40px;
    width:50px;
    border-radius:5px;
    background:transparent;
border:2px solid white;
cursor:pointer;
padding:5px;
}
.btn:hover{
    background-color:white;
    box-shadow: 0 0 02px blue;
}
input[type="text"]{
    padding:5px;
    width:190px;
    border:2px solid black;
    background:transparent;
    border-radius:9px;
    backdrop-filter: blur(50px);
    box-shadow: 0 0 02px white ;
    margin-left:10px;
    
}
input[placeholder="number"]{

}
input[name="res"]{
    width:50px;
    margin-left:100px;
}
    .container{
        margin-top:150px;
    width: 400px;
    border: 2px solid rgb(247, 241, 241);
    backdrop-filter: blur(50px);
     box-shadow: 0 0 20px black ;
    color: rgb(255, 255, 255);
   padding: 22px 32px;
    border-radius: 15px;
    margin-left:30%;
    background:transparent;
    }
</style>
