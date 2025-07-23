<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTE-8">
    <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
      $nums = [15,4,18,23,10];

      function sort_2way($array,$order){
      // usort($array,$order):true;
      if($order){
        $tf = SORT_ASC;
        echo '昇順にソートします。<br>';
      }else{
        $tf = SORT_DESC;
        echo '降順にソートします。<br>';
      }

      array_multisort($array,$tf);
      
      foreach($array as $value){
        echo $value . '<br>';
      }

      }

      sort_2way($nums,true);
      sort_2way($nums,false);

    ?>
  </p>
</body>
</html>