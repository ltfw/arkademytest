<?php

function cetak_gambar($s)
{
	for ($i=0; $i < $s; $i++) { 
		if($i==0 || $i==$s-1){
			for ($j=0; $j < $s; $j++) { 
				echo "x ";
			}
		}else{
			for ($j=0; $j < $s; $j++) { 
				if($j== floor($s/2)){
					echo "x ";
				}else{
					echo "= ";
				}
			}
		}
		echo "<br>";
	}
}

cetak_gambar(7);
