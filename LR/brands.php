<?php  
    require_once($_SERVER['DOCUMENT_ROOT'] . '/lr/classes/brandClass.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        require "header.php";
        //require "logics/connect.php";
   ?>
   <div class="container">
        <h1>Список брэндов</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Название бренда</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $arr = Brand::show();
                    foreach( $arr as $elem){
                        echo "<tr><td>" . $elem['id_brand'] . "</td>
                                <td><a href='goods.php?filter=".$elem['id_brand']."'>" . $elem['name_brand'] . "</a></td>
                                <td><a href='brands/edit.php?id=".$elem['id_brand']."' type='button' class='btn btn-primary'>Редактировать</a></td>
                                <td><a href='brands/handOver.php?id=".$elem['id_brand']."&name=".$elem['name_brand']."' type='button' class='btn btn-danger'>Удалить</a></td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
        <a href="brands/add.php" type='button' class='btn btn-primary'>Добавить</a>
   </div>
   


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   <script src="main.js"></script>
</body>
</html>