<?php
 include "Mahasiswa.php";
 $mahasiswaTI = new Mahasiswa();
 $mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik
 Informatika');
 print_r($mahasiswaTI->getData());
 $mahasiswaSI = new Mahasiswa();
 $mahasiswaSI->setData('A12.2000.00001','Junior','Sistem Informasi');

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <style>
    .MainContent{
        background-color: lightblue;
        width: 35rem;
        padding: 20px;
        border-radius: 16px;
        transition-duration: 1s;
    }
    .MainContent:hover{
        background-color: blue;
    }
 </style>
 <body>
    <div class="MainContent">
        <p><Strong>Data Mahasiswa:</Strong></p>
        <div>
            <?=  
            $mahasiswaTI->TampilData();
            $mahasiswaSI->TampilData();
            ?>
        </div>
    </div>
 </body>
 </html>