<!DOCTYPE html>
<html lang="fr">
   <head>
     <meta charset="utf-8">
     <title>Exo 3 Php</title>
   </head>

   <body>

     <p><?php

     $first= 0;
     for ( $first=0; $first<=10; $first++)
     {
     echo "$first";
     }
      ?></p>

      <p><?php
      $first = 0;
      $two = 25;
      for ($first=0; $first<=20 ; $first++ * $two)
      {
        echo "$first";
      }
       ?></p>

       <p><?php

        $first= 100;
        $two= 40;
        for ($first=100; $first>=10; $first-- * $two)
        {
       echo "$first";
        }
        ?></p>

        <p><?php

         $first=1;
         for ($first = 1; $first <= 10; $first += 0.5)
         {
         echo "$first";
         }
         ?></p>

         <p><?php

         $first=1;
          while ($first <=15)
         {
         echo $first++;
         }
         echo "On y arrive presque !";

          ?></p>

          <p><?php

          $first=20;
          while ($first >=0)
          {
            echo $first--;
          }
          echo "C'est presque bon";

           ?></p>

           <p><?php

            $first=0;
            while ($first<=100)
            {
              echo $first+=15;
            }
             echo "On tient le bon bout";
            ?></p>

            <p><?php

             $first=200;
             while  ($first>=0)
             {
               echo $first-=12;
             }
               echo "Enfin !!!!!";

             ?></p>


  </body>
</html>
