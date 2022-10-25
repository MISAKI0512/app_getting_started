<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;


class TodoController extends Controller
{
    public function index()
    { 
        return view ('index');
    }

    public function create(Request $request)
    {
        //dd($request->all());
        // validate：バリデーション
        // insert：登録
        $todo = new Todo; //インスタンス化
        $todo->todos = $request -> todos;  //モデル->カラム名 = 値 で、データを割り当てる
        $todo->save(); //データベースに保存
        return redirect('/'); //リダイレクト
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function delete(Request $request)
    {
        //
    }
}
