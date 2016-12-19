<?php

namespace App;
use Illuminate\Support\Collection as Collection;



class CubeOperation
{
    //

    public static function matrix($n,$m){
      $matrix= CubeOperation::udateMatrix($n);
      return $matrix;

    }

  private static  function initMatrix($n){

    //
    for ($i=1; $i <=$n; $i++) {
        $matrix[$i][$i][$i]=0;//rand(1,$n);

    }
    //  $t=rand(1,50);
    $updateQuery=mt_rand(1,$n);
    $query=mt_rand(1,$n);

  //  $x1=$y1=$z1=rand(1,$n);
    //$x2=$y2=$z2=rand(1,$n);
    return   $matrix;

    }

    private static function udateMatrix($n){

        $initMatrix=CubeOperation::initMatrix($n);
        //$w=rand(-0.0000000001,1000000000);
        $w=mt_rand(1,5);
        $index=mt_rand(1,$n);
        $initMatrix[$index][$index][$index]=$w;
        $returnArray=array($index,$w,$initMatrix);
        return $returnArray;


    }

    public static function doQuery($data){
      // $x1=$y1=$z1=mt_rand(1,$n);
      // $x2=$y2=$z2=mt_rand(1,$n);
      foreach ($data as $key => $value){
       //echo "kkkk" . $data[$key];
       $array = explode(" ", $data[$key]);
       $n=$array[0];
       $m=$array[1];

       $updateMatrix = CubeOperation::matrix($n,$m);
       $indexRand=$updateMatrix[0];
       $w=$updateMatrix[1];
       $matrix=$updateMatrix[2];

       echo "<br>";
       echo $n . " " . $m ;
       echo "<br>";
       $x1=0;
         for($i=1; $i<=$m; $i++){
          $rand=mt_rand(1,2);
            if ($rand==1) {
             $update=$indexRand;
             echo "UPDATE ". $indexRand.$indexRand.$indexRand;
             echo  " ";
             echo  $w;
             echo "<br>";
           }else {
              $x1=$y1=$z1=mt_rand(1,$n);
              $x2=$y2=$z2=mt_rand(1,$n);
              $point1=$x1;
              $point2=$x2;
             echo "QUERY ". $x1 . $y1 . $z1 ." " . $x2 . $y2 . $z2;
             echo "<br>";
           }
          // $query=array();
         }

          echo "-----------";
          if ($indexRand > $x1 || $indexRand<$x2) {
              $sum=$matrix[$indexRand][$indexRand][$indexRand];

              echo "suma :".$sum;
          }
    }
  }

public static function sumQuery($query){

   $size = count($query);
  for ($i=0; $i < $size ; $i++) {
    # code...
  }

}

}
