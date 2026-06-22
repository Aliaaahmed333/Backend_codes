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
    return "created successfully";
  }


  public function get_categories ()
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
    return "updated";
  }

  public function delete_category ()
  {
    // delete
    $p= category::find(2)->delete();
    dd($p);
  }





}
