<?php
$dizin_adi = "./";       
$dizin = opendir ($dizin_adi);
while ( gettype ( $bilgi = readdir( $dizin ) ) != boolean )
	{  
		if ( is_dir( "$dizin_adi/$bilgi" ) )
         
		echo " [Dizin] " ;
         
		echo ("<a href="$dizin_adi/$bilgi">$bilgi</A><br>n");
	};
         
closedir ($dizin);
         
?>