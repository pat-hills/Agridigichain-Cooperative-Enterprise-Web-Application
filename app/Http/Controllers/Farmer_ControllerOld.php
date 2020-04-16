<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Farmer;

class FarmerController extends Controller
{
  public function index(Request $request)
  {
  }

  public function store(Request $request)
  {

    $validatedData = $request->all();
    if ($request->hasFile('image_url')) {
      $image_url = $request->file('image_url');
      $farmer_img_picture = $image_url->getClientOriginalName();
      $image_url->move('./uploads/', $farmer_img_picture);
      $validatedData['image_url']= $farmer_img_picture;
    } else {
      $validatedData['image_url'] = 'No-image.png';
    }

    if ($request->hasFile('thumb_scan')) {
      $thumb_scan = $request->file('thumb_scan');
      $thumb_scan_name = $thumb_scan->getClientOriginalName();
      $thumb_scan->move('./uploadbiometric/', $thumb_scan);
      $validatedData['thumb_scan'] = $thumb_scan_name;
    } else {
      $validatedData['thumb_scan'] = 'No-image.png';
    }

    if ($request->hasFile('index_scan')) {
      $index_scan = $request->file('index_scan');
      $index_scan_name = $index_scan->getClientOriginalName();
      $index_scan->move('./uploadbiometric/', $index_scan);
      $validatedData['index_scan'] =  $index_scan_name;
    } else {
      $validatedData['index_scan'] = 'No-image.png';
    }
    if ($request->hasFile('middle_scan')) {
      $middle_scan = $request->file('middle_scan');
      $middle_scan_name = $middle_scan->getClientOriginalName();
      $middle_scan->move('./uploadbiometric/', $middle_scan);
      $validatedData['middle_scan'] = $middle_scan_name;
    } else {
      $validatedData['middle_scan'] = 'No-image.png';
    }

    if ($request->hasFile('ring_scan')) {
      $ring_scan = $request->file('ring_scan');
      $ring_scan_name = $ring_scan->getClientOriginalName();
      $ring_scan->move('./uploadbiometric/', $ring_scan);
      $validatedData['ring_scan'] = $ring_scan_name;
    } else {
      $validatedData['ring_scan'] = 'No-image.png';
    }


    if ($request->hasFile('little_scan')) {
      $little_scan = $request->file('little_scan');
      $little_scan_name = $little_scan->getClientOriginalName();
      $little_scan->move('./uploadbiometric/', $little_scan);
      $validatedData['little_scan'] = $little_scan_name;
    } else {
      $validatedData['little_scan'] = 'No-image.png';
    }


    $validatedData['user_id'] = auth()->user()->id;

    try {
      $room = Farmer::create($validatedData);
      // return new RoomResource($room);
    } catch (\Exception $e) {
      abort(422, "Creating Farmer Error - {$e->getMessage()}");
    }
  }

  public function show(Request $request)
  {
  }

  public function update(Request $request)
  {
  }

  public function destroy(Request $request)
  {
  }

 
}
