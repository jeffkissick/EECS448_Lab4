<?php

$ans1 = $_POST["q1"];
$ans2 = $_POST["q2"];
$ans3 = $_POST["q3"];
$ans4 = $_POST["q4"];
$ans5 = $_POST["q5"];

$currScore = 0;
$corrAns = 0;


if($ans1 == "What do you mean? African or European?")
{
    $currScore+=20;
    $corrAns++;
}
if($ans2 == "Pikachu")
{
    $currScore+=20;
    $corrAns++;
}
if($ans3 == "Kansas City Royals")
{
    $currScore+=20;
    $corrAns++;
}
if($ans4 == "Patrick Mahomes")
{
    $currScore+=20;
    $corrAns++;
}
if($ans5 == "Kero kero")
{
    $currScore+=20;
    $corrAns++;
}

echo '<img src="images/ans1.gif"><br>';

echo "Question 1: What is the airspeed velocity of an unladen Swallow?<br>";
echo "You answered: " . $ans1 . "<br>";
echo "Correct answer: What do you mean? African or European? <br><br>";

echo '<img src="images/ans2.jpg"><br>';

echo "Question 2: What is the electric mouse Pokémon? <br>";
echo "You answered: " . $ans2 . "<br>";
echo "Correct answer: Pikachu <br><br>";

echo '<img src="images/ans3.jpg" height="200px" width="300px"><br>';

echo "Question 3: What Major League Baseball team won the 2015 World Series? <br>";
echo "You answered: " . $ans3 . "<br>";
echo "Correct answer: Kansas City Royals <br><br>";

echo '<img src="images/ans4.jpg" height="200px" width="300px"><br>';

echo "Question 4: What is the name of the 2018 National Football League Most Valuable Player? <br>";
echo "You answered: " . $ans4 . "<br>";
echo "Correct answer: Patrick Mahomes <br><br>";

echo '<img src="images/ans5.gif"><br>';

echo "Question 5: What is the word for ribbit in Japanese? <br>";
echo "You answered: " . $ans5 . "<br>";
echo "Correct answer: Kero Kero <br><br>";

echo "Correct Answers: " . $corrAns . "<br>";
echo "Score: " . $currScore . "%<br>";

?>
