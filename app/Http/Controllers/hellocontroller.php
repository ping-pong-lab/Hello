<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<E0F
//     <style>
//     body {font-size:16pt;, color:#999;}
//     h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
//     </style>
//     E0F;
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag, $txt){
//     return "<{$tag}>". $txt . "</{$tag}>";
// }

class hellocontroller extends Controller
{
    public function index(Request $request){
        // $data = [
        //     ['name'=>'taro', 'mail'=>'taro@yamada'],
        //     ['name'=>'hanako', 'mail'=>'hanako@flower'],
        //     ['name'=>'sachiko', 'mail'=>'aschiko@happy'],
        // ];
        return view('hello.index',['data'=>$request->data]);
    }

//middleware使用
    // public function index(Request $request){
    //     return view('hello/index',['data'=>$request->data]);
    // }
//Blade使用
    // public function index(){
    //     $data = [
    //         'msg'=>'名前を入力してください。',
    //     ];
    //     return view('hello.index',$data);
    // }
    // public function post(Request $request){
    //     $msg = $request->msg;
    //     $data = [
    //         'msg'=>'こんにちは、'. $msg . 'さん！',
    //     ];
    //     return view('hello.index',$data);
    // }

    //クエリ一文字列
    // public function index(Request $request){
    //     $data = [
    //         'msg'=>'これはコントローラから渡されたメッセージです。',
    //         'id'=>$request->id
    //     ];
    //     return view('hello.index',$data);
    // }

//viewを表示するアクション パラメータを渡す
    // public function index($id='Zero'){
    //     $data = [
    //         'msg'=>'これはコントローラから渡されたメッセージです。',
    //         'id'=>$id
    //     ];
    //     return view('hello.index',$data);
    // }



//1つのコントローラーに1つのfunctionアクションのみの場合
    // public function __invoke(){
    //     return <<<E0F
    //         <html>
    //         <head>
    //             <title>Hello</title>
    //             <style>
    //                 body {font-size:16pt;, color:#999;}
    //                 h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
    //             </style>
    //         </head>
    //         <body>
    //             <h1>Single Action</h1>
    //             <p>これは、シングルアクションコントローラのアクションです。</p>
    //         </body>
    //         </html>
    //         E0F;
    // }

//1つのコントローラーに複数のfunctionアクションがある場合
    // public function index(){
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title','Hello/Index') . $style .
    //     $body
    //     . tag('h1','Index') . tag('p','this is Index page')
    //     . '<a href="/hello/other">go to other page</a>'
    //     . $end;
    // return $html;
    // }

    // public function other(){
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title','Hello/other') . $style .
    //     $body
    //     . tag('h1','other') . tag('p','this is other page')
    //     . $end;
    // return $html;
    // }
}
