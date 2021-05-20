<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dictionary',function (){
    return view('/dictionary');
});

Route::post('/dictionary', function (\Illuminate\Http\Request $request){
    $dictionary = array("hello"=>"xin chào",
        "how"=>"thế nào",
        "book"=>"quyển sách" ,
        "computer"=>"máy tính",
        "banana"=>"quả chuối",
        "apple"=>"quả táo" );

        $searchWord = $request->input(["search"]);
        $flag = 0;
        foreach ($dictionary as $word => $description) {
            if($word == $searchWord){
                echo "Từ: ". $word . "<br/>Nghĩa của từ: ".$description;
                $flag = 1;
            }
        }
        if($flag == 0){
            echo "Không tìm thấy từ cần tra";
        }
    return view('/dictionary');
});
