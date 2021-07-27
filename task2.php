<?php
   //Путь к файлу
   $imgDirectory = './img/image.png';

   //Поиск размеров
   $size = getimagesize($imgDirectory);
   $oldWidth = $size[0];
   $oldHeight = $size[1];

   //Задание новых размеров
   $newWidth = 200;
   $newHeight = 100;

   //Создание нового изображения
   $newImage = imagecreatetruecolor($newWidth, $newHeight);
   
   //Создание изображения из директории
   $image = imagecreatefrompng($imgDirectory);

   imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);

   header('Content-Type: image/png');
   imagepng($newImage, null, 9 );
   imagedestroy($newImage);
?>
