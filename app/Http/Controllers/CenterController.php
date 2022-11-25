<?php

namespace App\Http\Controllers;
use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function index()
    {
      $Center = Center::all();
      return view('Center.index', compact('Center'));
    }
    public function edit($ID)
    {
       return view('Center.edit');
    }
    public function create()
    {
       return view('Center.add');
    }
    public function show($ID)
    {
      $Center = Center::find($ID);
      return $Center;
      return view('Center.show');
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
