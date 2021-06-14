<?php
	$length = 10;
	$width = 5;
	$area = $length * $width;
	$perimeter= 2*($length+$width);
	if($length!= $width){
		echo " Area of the rectangle is: $area <br>";
		echo " Perimeter of the rectangle is: $perimeter";
	}
	else{
		echo " The shape is a square";
	}

?>