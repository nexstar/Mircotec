<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statuses;

class StatusesController extends Controller
{

    public function index()
    {
        return view('Dashboard');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function ApiListAllGroupByToolId(){
        $Statuses = new Statuses();
        $GetResult = $Statuses->getListAllGroupByToolId();
        return response()->json($GetResult);
    }

}
