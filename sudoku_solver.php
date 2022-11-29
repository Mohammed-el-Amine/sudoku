<?php


function main($file)
{
    $bl = "\n";
    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $dot = ".";

    $content = file_get_contents($file); // je lis mon fichier ligne par ligne
    $grid = explode($bl, $content); // place chaque ligne dans un tableau 
    array_pop($grid); // ayant un index=>valuer vide je le supprime 

    //me permet de concater les 3 premier chiffre pour en fair eun carré avec les 3 autres des 2 autres lignes
    $firstLineSquare = $grid[0][0];
    $firstLineSquare .= $grid[0][1];
    $firstLineSquare .= $grid[0][2];

    $secondeLineSquare = $grid[1][0];
    $secondeLineSquare .= $grid[1][1];
    $secondeLineSquare .= $grid[1][2];

    $thirdLineSquare = $grid[2][0];
    $thirdLineSquare .= $grid[2][1];
    $thirdLineSquare .= $grid[2][2];

    //square1 etant les 9 chiffres du premier carré
    $square1 = $firstLineSquare .= $secondeLineSquare .= $thirdLineSquare;

    if($square1){
        echo "a resoudre";
    }

       // if($grid[0][0] === $dot ){
    //    $grid[0][0] = str_replace($dot,$num[2],$grid[0][0]);
    // }

    // var_dump($grid);
}


main($argv[1]); // j'appel ma fonction avec le fichier donner lors de l'appel de celui-ci
