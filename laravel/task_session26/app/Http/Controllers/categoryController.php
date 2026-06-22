<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{


  // create
  public function create_category ()
  {
    category::create([['name'=>'sports'],['name' => 'technology']]);
  }


  public function read_category ()
  {
     // read
    $categories= category::all();
    dd( $categories);
  }

  public function update_category ()
  {
    // update
    $c = category::find(1);
    $c->update(['name'=>  'religious'])  ;

  }

  public function delete_category ()
  {
    // delete
    category::find(2)->delete();
  }





}
