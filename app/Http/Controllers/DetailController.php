<?php

namespace App\Http\Controllers;
use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function index()
    {
      $Detail = Detail::all();
      return view('Detail.index', compact('Detail'));
    }
    public function edit($id)
    {
       return view('Detail.edit');
    }
    public function create()
    {
       return view('Detail.add');
    }
    public function show($ID)
    {
      $Detail = Detail::find($ID);
      return $Detail;
      return view('Detail.show');
    }
    public function update(Request $request, $ID)
    {
    //
    }
    public function destroy($ID)
   {
    //
   }
   public function store(Request $request)
   {
    //
   }
}
