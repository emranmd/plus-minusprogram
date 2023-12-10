<?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        $num3 = $_POST['number3'];
        $num4 = $_POST['number4'];



        $sum = $num1+$num2+$num3;
        $count = count($_POST) -1;

        $avg = $sum/$count;
        
        if($avg >=80 && $avg <= 100){
            $gpa = "Your Gpa : A+";
        } elseif($avg >=70 && $avg <= 79){
            $gpa = "Your Gpa : A";
        } elseif($avg >=60 && $avg <= 69){
            $gpa = "Your Gpa : B";
        } elseif($avg >=50 && $avg <= 59){
            $gpa = "Your Gpa : A";
        } elseif($avg >=40 && $avg <= 49){
            $gpa = "Your Gpa : A";
        } elseif($avg >=33 && $avg <= 39){
            $gpa = "Your Gpa : A";
        } else{
            $gpa = "Fail";
        }
       
    }

    if(isset($_POST['submitbtn'])){
        $number1 = $_POST['first_number'];
        $number2 = $_POST['second_number'];
        $selectArea = $_POST['selectArea'];
        
        if($selectArea == "plus"){
            $answer = $number1+$number2;
            
        } elseif($selectArea == "minus"){
            $answer = $number1-$number2;
            
        } elseif($selectArea == "multiplication"){
            $answer = $number1*$number2;
            
        } elseif($selectArea == "division"){
            $answer = $number1/$number2;
            
            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="form-input-group">
            <input type="text" name="number1" placeholder="Number 1">
            <input type="text" name="number2" placeholder="Number 2">
            <input type="text" name="number3" placeholder="Number 3">
            <input type="text" name="number4" placeholder="Number 4">
            <div class="button">
                <button name="submit" type="submit" class="btn">Submit</button>
            </div>
        </div>

    </form>
    <div class="result">
        <p><?php if(isset($gpa)){echo $gpa;} ?></p>
    </div>
    <br>

    <form action="" method="post">
        <input type="number" name="first_number">
        <input type="number" name="second_number">
        <select name="selectArea">
            <option value="plus">Plus</option>
            <option value="minus">Minus</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>
        <div class="buttonare">
            <button class="btn" type="submit" name="submitbtn">Submit</button>
        </div>
    </form>
    <div class="answer">
        <h5><?php if(isset($answer)){echo "Answers =". $answer;}?> </h5>
    </div>

</body>
</html>