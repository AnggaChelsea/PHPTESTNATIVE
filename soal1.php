
  <?php
    $input = "1,2,3,4,5,6,7";
    $output = 0;
    foreach(explode(',',$input) as $val)
         $output +=intval($val);
    echo $output; //28
?>
