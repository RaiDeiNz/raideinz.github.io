<html>
   <head>
      <title>
         My Sweet Homepage
      </title>
      <link rel="shortcut icon" type="image/logo.ico" href="/q/favicon.ico" size="any">
   </head>
   <body>
      <?php
         $dizin_adi = "./";
         
         $dizin = opendir ($dizin_adi);
         
         while ( gettype ( $bilgi = readdir( $dizin ) ) != boolean ) {
         
         if ( is_dir( "$dizin_adi/$bilgi" ) )
         
         print " [Dizin] " ;
         
         print ("<a href="$dizin_adi/$bilgi">$bilgi</A><br>n");
         
         }
         
         closedir ($dizin);
         
         ?>
   </body>
</html>