<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        dd('dsdas');
    }
    public function create()
    {
        return view('Recipe.create');
    }
    public function store(Request $request)
    {
        dd("可進行儲存");
    }
    public function show($id)
    {
//        dd("指定一個Recipe");
        return view('Recipe.index');
    }
    public function edit($id)
    {
        return view('Recipe.edit');
    }
    public function update(Request $request, $id)
    {
        dd("正在進行更新");
    }
    public function destroy($id)
    {
        dd("正在進行刪除");
    }
}
