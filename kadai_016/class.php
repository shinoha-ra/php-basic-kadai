<!doctype html>
<html lang = "ja">
  <head>
    <meta charset="UTE-8">
    <title>課題php_016</title>
  </head>
  <body>
    <?php
      class Food{
        private $name;
        private $price;

        public function __construct(string $nm,int $pri){
          $this -> name = $nm;
          $this -> price = $pri;
        }

        public function show_price(){
          // echo $price.'<br>';
          return $this -> price;
        }
      }

      class Animal{
        private $name;
        private $height;
        private $weight;

        public function __construct(string $nm,int $h,int $w){
          $this -> name = $nm;
          $this -> height = $h;
          $this -> weight = $w;
        }

        public function show_height(){
          return $this -> height;
        }
      }


      $food = new Food('tacos',500);
      $animal = new Animal('owl',60,3000);

      print_r($food);
      echo '<br>';
      print_r($animal);

      echo '<br>';
      echo $food -> show_price().'<br>';
      echo $animal -> show_height().'<br>';

    ?>
  </body>
</html>