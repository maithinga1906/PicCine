<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Style;

class StyleController extends Controller
{
  // Show all the Styles
  public function show()
  {
      return response()->json(Style::all(),200); 
  }

// add new style
  public function store(Request $request)
  {
      $styles = Style::create([
          'image' => $request->image,
          'name' => $request->name,
          'price' => $request->price,
              ]);
      return response()->json(['data'=>$styles]);
  }

// update the Style
  public function update(Request $request, Style $styles)
  {
      $update_style = $styles->update(
          $request->only(['image', 'name', 'price'])
      );

      return response()->json([
          'update_style' => $update_style
      ]);
  }

// deletes an Style.
  public function destroy(Style $style)
  {
      $status = $style->delete();

      return response()->json([
          'status' => $status
      ]);
  }
}

