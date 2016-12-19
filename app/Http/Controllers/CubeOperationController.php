<?php

namespace App\Http\Controllers;
use App\CubeOperation;
use Illuminate\Http\Request;

class CubeOperationController extends Controller
{
    //
    public function testCases(Request $request){

          $t=$request->Input("T");


          return View('cube', ['testCases' => $t]);


    }

    public function operations(Request $request){

     $t=$request->Input("cases");
     $data=$request->Input("inputData");
      echo $t;

      echo "<br>" . CubeOperation::doQuery($data) . "<br>";

     }

}
