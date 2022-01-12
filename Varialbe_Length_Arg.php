<?php
   function combined() 
   {
      $num = func_num_args();
      echo $num;
   }
   combined('A', 'B', 'C' , 'D');
   
   function printValue($value) 
   {
      echo func_get_arg(1);
   }
   printValue(123,456);
   
   function some_func($a, $b) 
   {
      $param = func_get_args();
      $param = join(", ", $param);
      echo $param;
   }
   some_func(1, 2, 3, 4, 5, 6, 7, 8);
?>
