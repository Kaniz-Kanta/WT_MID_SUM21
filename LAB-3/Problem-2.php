<?php
	$mark = 75;
	if($mark>=90){
		echo " Grade : A+";
	}
	else if($mark>=80 and $mark<90){
		echo " Grade : A";
	}
	else if($mark>=70 and $mark<80){
		echo " Grade : B";
	}
	else if($mark>=60 and $mark<70){
		echo " Grade : C";
	}
	else{
		echo " Grade : F";
	}

?>