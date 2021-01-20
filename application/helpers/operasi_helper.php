<?php 
function hitung($op,$b1,$b2){
	switch (@$op) {
			case "+":
				@$hasil=$b1+$b2;
				break;			
			case "-":
				@$hasil=$b1-$b2;
				break;			
			case "X":
				@$hasil=$b1*$b2;
				break;			
			case "/":
				@$hasil=$b1/$b2;
				break;			
	}
	/*echo @$b1;
	echo "AAAA";*/
	return @$hasil;
}
?>