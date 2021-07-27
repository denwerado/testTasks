<? 
   $a = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus architecto non deserunt cum cupiditate, quisquam animi harum dignissimos tenetur alias veritatis iste nobis necessitatibus ullam, mollitia nulla eaque corporis a?
   Cum nostrum laudantium eius cupiditate omnis, autem natus quisquam eos veritatis architecto in ad commodi nesciunt earum harum consequatur reprehenderit quae illo doloribus iure fugit numquam nobis eum. Doloremque, rerum.';

   $link = 'https://www.youtube.com/';

   $world = mb_strimwidth($a,0,179);
   $arrayWorld = explode(' ', $world);
   $b = '';

   foreach ($arrayWorld as $key => $value) {
      if ($key < count($arrayWorld) - 2){
         $b .= $value . ' ';
      }else{
         if ($key < count($arrayWorld) - 1){
            $b .= "<a href='$link'>" . $value . ' ';
         }else{
            $b .= $value . '...</a>';
         }
      }
   }
   
?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
   <div class="news"><?=$b?></div>

</body>
</html>