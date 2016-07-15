<?php

session_start();

$win=-1;

if(isset($_POST['res'])) 					//..		RESET THE GAME
{
session_destroy();
print<<<HERE
Session destroyed. <a href="">Start a new game</a>;
HERE;
 
 
 
}


print <<<HERE
<form action="" method="post">
<table width="100"><tr>\n
HERE;
 
 
$who = $_SESSION['who']; 					//..		Get the current player
if(is_null($who))							//..		if session is not initialized, initialize the session
{
 
$who=0;										//..		0 = player X, 1 = player O
$_SESSION['oyun'] = "222222222"; 			//..		string to keep game data. 2 -> empty cell, 1 -> player O, 0 -> player X
$_SESSION['win'] = -1;
}
 
 
 
 
$endd = $_SESSION['win'];
 
if($endd==-1) 								//..	 	if there is no winner
{
 
 
$oyun= $_SESSION['oyun'];
 
$data = $_POST['val']; 						//..		get Value posted in submitted button 
 
if(!is_null($data))
{
 
 
 
$hamle = $data[0]; 							//..		get the actual button clicked. 0 to 8 correspond to a respective cell
 
$oyun[$hamle]=$who; 						//..		set our game's data with player mark
 
 
 
$who=($who+1)%2; 							//..		switching the player turn
}
 
if($who)
{
print "O is playing<br>";
 
}
else
print "X is playing<br>";
 
 
for($i=0; $i<9; $i++) 						//..		print the game field in a table in a loop
{
$val = $i;
 
if(($i)%3==0)
print "</tr><tr>";
 
if($oyun[$i]==2)
{

// a single button if cell is 2, namely blank
print <<<HERE
<td><center><input type="submit" name="val[]" value="$i"></center></td> 
 
HERE;
 
 
}
if($oyun[$i]==0) 							//..		Player X's mark
{
print "<td><center>X</center></td>";
}
if($oyun[$i]==1)  							//..		Player O's mark
{
print "<td><center>O</center></td>";
}
 
}
print "</table></form></br>";
 
 
//	GAME LOGIC HERE: Decide who won if there is such a case...

for($j=0;$j<3;$j++) 						//..		Check rows
{
if(substr($oyun,3*$j,3)=="000") 			//..		000 - X Player Wins
{
print "X wins<br>";
$win=0;
}
if(substr($oyun,3*$j,3)=="111")				//..		111 - 0 Player Wins
{
print "0 wins<br>";
$win=1;
}
 
}
for($j=0;$j<3;$j++)							//..		check columns
{
if($oyun[$j]==$oyun[$j+3] && $oyun[$j+3]==$oyun[$j+6]  && $oyun[$j+6]=='0')			//..		000 - X Player Wins
{
print "X wins<br>";
$win=0;
}
if($oyun[$j]==$oyun[$j+3] && $oyun[$j+3]==$oyun[$j+6]  && $oyun[$j+6]=='1')			//..		111 - 0 Player Wins
{
print "0 wins<br>";
$win=1;
}
 
}
 
if($oyun[0]==$oyun[4] && $oyun[4]==$oyun[8]  && $oyun[8]=='0')						// 			check first diagonal
{
print "X wins<br>";
$win=0;
}
if($oyun[0]==$oyun[4] && $oyun[4]==$oyun[8]  && $oyun[8]=='1')
{
print "O wins<br>";
$win=1;
}
 
 
if($oyun[2]==$oyun[4] && $oyun[4]==$oyun[6]  && $oyun[6]=='0') 						//			check second diagonal
{
print "X wins<br>";
$win=0;
}
if($oyun[2]==$oyun[4] && $oyun[4]==$oyun[6]  && $oyun[6]=='1')
{
print "O wins<br>";
$win=1;
}
 
//..		Updating the session variables to be accessed next time with current game info...
$_SESSION['oyun'] = $oyun;
$_SESSION['who']=$who;
$_SESSION['win']=$win;
 
 
 
 
 
}
else
{
print "Game Ended. Reset the game if you want to play again.<br>";
}
 

 
//..		RESET Button
 
print <<<HERE
<form action="" method="post">
<input type="submit" name="res" value="reset">
</form>
HERE;
 

 
?>