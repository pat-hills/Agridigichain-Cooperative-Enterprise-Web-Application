<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Farmer;
use App\Models\PrepareLand;
use App\Models\FarmNursery;
use App\Models\FarmSprayingWeeding;
use App\Models\FarmFertilizerApplication;
use App\Models\FarmHarvesting;
use App\Models\FarmProduceSale;

class FarmerController extends Controller
{
  public function index(Request $request)
  {
  }

  public function store(Request $request)
  {

    try {
      $farmer = new Farmer();
      $farmer->fullname = $request->fullname;
     // $farmer->username = $request->username;
      $farmer->email = $request->email;
      $farmer->gender = $request->gender;
      $farmer->contact = $request->contact;
      $farmer->location = $request->location;
      $farmer->age = $request->age;
      $farmer->marital_status = $request->marital_status;
      $farmer->educational_level = $request->educational_level;
      $farmer->main_occupation = $request->main_occupation;
      $farmer->minor_occupation = $request->minor_occupation;
      $farmer->dependants = $request->dependants;
      $farmer->farm_acres = $request->farm_acres;
      $farmer->type_of_soil = $request->type_of_soil;
      $farmer->color_of_soil = $request->color_of_soil;
      $farmer->texture_of_soil = $request->texture_of_soil;
      $farmer->main_crop = $request->main_crop;
      if ($request->hasFile('image_url')) {
        $image_url = $request->file('image_url');
        $farmer_img_picture = $image_url->getClientOriginalName();
        $image_url->move('./uploads/', $farmer_img_picture);
        $farmer->image_url = $farmer_img_picture;
      } else {
        $farmer->image_url = 'No-image.png';
      }

      if ($request->hasFile('thumb_scan')) {
        $thumb_scan = $request->file('thumb_scan');
        $thumb_scan_name = $thumb_scan->getClientOriginalName();
        $thumb_scan->move('./uploadbiometric/', $thumb_scan);
        $farmer->thumb_scan = $thumb_scan_name;
      } else {
        $farmer->thumb_scan = 'No-image.png';
      }

      if ($request->hasFile('index_scan')) {
        $index_scan = $request->file('index_scan');
        $index_scan_name = $index_scan->getClientOriginalName();
        $index_scan->move('./uploadbiometric/', $index_scan);
        $farmer->index_scan =  $index_scan_name;
      } else {
        $farmer->index_scan = 'No-image.png';
      }
      if ($request->hasFile('middle_scan')) {
        $middle_scan = $request->file('middle_scan');
        $middle_scan_name = $middle_scan->getClientOriginalName();
        $middle_scan->move('./uploadbiometric/', $middle_scan);
        $farmer->middle_scan = $middle_scan_name;
      } else {
        $farmer->middle_scan = 'No-image.png';
      }

      if ($request->hasFile('ring_scan')) {
        $ring_scan = $request->file('ring_scan');
        $ring_scan_name = $ring_scan->getClientOriginalName();
        $ring_scan->move('./uploadbiometric/', $ring_scan);
        $farmer->ring_scan = $ring_scan_name;
      } else {
        $farmer->ring_scan = 'No-image.png';
      }

      if ($request->hasFile('little_scan')) {
        $little_scan = $request->file('little_scan');
        $little_scan_name = $little_scan->getClientOriginalName();
        $little_scan->move('./uploadbiometric/', $little_scan);
        $farmer->little_scan = $little_scan_name;
      } else {
        $farmer->little_scan = 'No-image.png';
      }

      $farmer->user_id = auth()->user()->id;
      $farmer->save();
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

  public function  prepareLand(Request $request)
  {

    try {

      $prepareland = new PrepareLand();
      $prepareland->farmer_id = $request->farmer_id;
      $prepareland->date_of_activity = $request->date_of_activity;
      $prepareland->month_of_activity = $request->month_of_activity;
      $prepareland->year_of_activity = $request->year_of_activity;
      $prepareland->cost = $request->cost;
      $prepareland->mechanized_vendor = $request->mechanized_vendor;
      $prepareland->notes = $request->notes;
      $prepareland->main_crop = $request->main_crop;
      if ($request->hasFile('receipt_url')) {
        $receipt_url = $request->file('receipt_url');
        $receipt_url_name = $receipt_url->getClientOriginalName();
        $receipt_url->move('./farmersdocuments/', $receipt_url);
        $prepareland->receipt_url = $receipt_url_name;
      } else {
        $prepareland->receipt_url = 'No-image.png';
      }

    //  $prepareland->user_id =  $request->user_id;

     $prepareland->user_id = auth()->user()->id;
      $prepareland->save();
      return response()->json(["data" => $prepareland]);
      //code...
    } catch (\Exception $e) {
      abort(422, "Creating Farmer Land Activity Error - {$e->getMessage()}");
    }

    
  }



  public function  farm_nursery(Request $request)
  {

    try {

      $farm_nursery = new FarmNursery();
      $farm_nursery->farmer_id = $request->farmer_id;
      $farm_nursery->date_of_activity = $request->date_of_activity;
      $farm_nursery->month_of_activity = $request->month_of_activity;
      $farm_nursery->year_of_activity = $request->year_of_activity;
      $farm_nursery->size_of_nursery = $request->size_of_nursery;
      $farm_nursery->source_of_seedling = $request->source_of_seedling;
      $farm_nursery->notes = $request->notes;
      $farm_nursery->cost = $request->cost;
      $farm_nursery->main_crop = $request->main_crop;
      if ($request->hasFile('receipt_url')) {
        $receipt_url = $request->file('receipt_url');
        $receipt_url_name = $receipt_url->getClientOriginalName();
        $receipt_url->move('./farmersdocuments/', $receipt_url);
        $farm_nursery->receipt_url = $receipt_url_name;
      } else {
        $farm_nursery->receipt_url = 'No-image.png';
      }

    //  $prepareland->user_id =  $request->user_id;

     $farm_nursery->user_id = auth()->user()->id;
      $farm_nursery->save();
      return response()->json(["data" => $farm_nursery]);
      //code...
    } catch (\Exception $e) {
      abort(422, "Creating Farmer Land Activity Error - {$e->getMessage()}");
    }

    
  }




  public function  farm_spraying_weeding(Request $request)
  {

    try {

      $farm_spraying_weeding = new FarmSprayingWeeding();
      $farm_spraying_weeding->farmer_id = $request->farmer_id;
      $farm_spraying_weeding->date_of_activity = $request->date_of_activity;
      $farm_spraying_weeding->month_of_activity = $request->month_of_activity;
      $farm_spraying_weeding->year_of_activity = $request->year_of_activity;
      $farm_spraying_weeding->labour_cost = $request->labour_cost;
    //  $farm_spraying_weeding->source_of_seedling = $request->source_of_seedling;
      $farm_spraying_weeding->activity_type = $request->activity_type;
     // $farm_spraying_weeding->source_of_seedling = $request->source_of_seedling;
      $farm_spraying_weeding->source_of_vendor = $request->source_of_vendor;
      $farm_spraying_weeding->name_of_item = $request->name_of_item;
      $farm_spraying_weeding->cost_of_item = $request->cost_of_item;
      $farm_spraying_weeding->quantity_of_item = $request->quantity_of_item;
      $farm_spraying_weeding->weight_of_item = $request->weight_of_item;
      $farm_spraying_weeding->unit_of_item = $request->unit_of_item;
      $farm_spraying_weeding->type_infestation = $request->type_infestation;
      $farm_spraying_weeding->size_of_catchment = $request->size_of_catchment;
      $farm_spraying_weeding->rate_infestation = $request->rate_infestation;
      $farm_spraying_weeding->notes = $request->notes;
     // $farm_spraying_weeding->incident_url = $request->incident_url;
      $farm_spraying_weeding->main_crop = $request->main_crop;

      if ($request->hasFile('incident_url')) {
        $incident_url = $request->file('incident_url');
        $incident_url_name = $incident_url->getClientOriginalName();
        $incident_url->move('./farmersdocuments/', $incident_url);
        $farm_spraying_weeding->incident_url = $incident_url_name;
      } else {
        $farm_spraying_weeding->incident_url = 'No-image.png';
      }

    //  $prepareland->user_id =  $request->user_id;

     $farm_spraying_weeding->user_id = auth()->user()->id;
     $farm_spraying_weeding->save();
      return response()->json(["data" => $farm_spraying_weeding]);
      //code...
    } catch (\Exception $e) {
      abort(422, "Creating Farmer Weeding Or Spraying Activity Error - {$e->getMessage()}");
    }

    
  }



  public function  farm_fertilizer_application(Request $request)
  {

    try {

      $farm_fertilizer_application = new FarmFertilizerApplication();
      $farm_fertilizer_application->farmer_id = $request->farmer_id;
      $farm_fertilizer_application->date_of_activity = $request->date_of_activity;
      $farm_fertilizer_application->month_of_activity = $request->month_of_activity;
      $farm_fertilizer_application->year_of_activity = $request->year_of_activity;
      $farm_fertilizer_application->labour_cost = $request->labour_cost;
     // $farm_fertilizer_application->source_of_vendor = $request->source_of_vendor;//unit_of_item
      $farm_fertilizer_application->name_of_item = $request->name_of_item;
      $farm_fertilizer_application->cost_of_item = $request->cost_of_item;
      $farm_fertilizer_application->quantity_of_item = $request->quantity_of_item;
      $farm_fertilizer_application->source_of_vendor = $request->source_of_vendor;
      $farm_fertilizer_application->weight_of_item = $request->weight_of_item;
      $farm_fertilizer_application->notes = $request->notes;
    //  $farm_fertilizer_application->receipt_url = $request->receipt_url;
      $farm_fertilizer_application->main_crop = $request->main_crop;

      if ($request->hasFile('receipt_url')) {
        $receipt_url = $request->file('receipt_url');
        $receipt_url_name = $receipt_url->getClientOriginalName();
        $receipt_url->move('./farmersdocuments/', $receipt_url);
        $farm_fertilizer_application->receipt_url = $receipt_url_name;
      } else {
        $farm_fertilizer_application->receipt_url = 'No-image.png';
      }

    //  $prepareland->user_id =  $request->user_id;

     $farm_fertilizer_application->user_id = auth()->user()->id;
      $farm_fertilizer_application->save();
      return response()->json(["data" => $farm_fertilizer_application]);
      //code...
    } catch (\Exception $e) {
      abort(422, "Creating Farmer Fertilizer Application Activity Error - {$e->getMessage()}");
    }

    
  }




  
  public function  farm_harvesting(Request $request)
  {

    try {

      $farm_harvesting = new FarmHarvesting();
      $farm_harvesting->farmer_id = $request->farmer_id;
      $farm_harvesting->date_of_activity = $request->date_of_activity;
      $farm_harvesting->month_of_activity = $request->month_of_activity;
      $farm_harvesting->year_of_activity = $request->year_of_activity;
      $farm_harvesting->labour_cost = $request->labour_cost; 
      $farm_harvesting->package_type = $request->package_type;
      $farm_harvesting->quantity = $request->quantity;
      $farm_harvesting->weight = $request->weight;
      $farm_harvesting->unit = $request->unit; 
      $farm_harvesting->notes = $request->notes; 
      $farm_harvesting->main_crop = $request->main_crop;

      if ($request->hasFile('image_url')) {
        $receipt_url = $request->file('image_url');
        $receipt_url_name = $receipt_url->getClientOriginalName();
        $receipt_url->move('./farmersdocuments/', $receipt_url);
        $farm_harvesting->image_url = $receipt_url_name;
      } else {
        $farm_harvesting->image_url = 'No-image.png';
      }

    //  $prepareland->user_id =  $request->user_id;

     $farm_harvesting->user_id = auth()->user()->id;
      $farm_harvesting->save();
      return response()->json(["data" => $farm_harvesting]);
      //code...
    } catch (\Exception $e) {
      abort(422, "Creating Farmer Harvesting Activity Error - {$e->getMessage()}");
    }

    
  }


  public function  farm_produce_sale(Request $request)
  {

    try {

      $farm_produce_sale = new FarmProduceSale();
      $farm_produce_sale->farmer_id = $request->farmer_id;
      $farm_produce_sale->farm_harvesting_id = $request->farm_harvesting_id;
      $farm_produce_sale->date_of_activity = $request->date_of_activity;
      $farm_produce_sale->month_of_activity = $request->month_of_activity;
      $farm_produce_sale->year_of_activity = $request->year_of_activity;
      $farm_produce_sale->quantity = $request->quantity; 
      $farm_produce_sale->price = $request->price;
      $farm_produce_sale->buyer = $request->buyer;
      $farm_produce_sale->name_of_driver = $request->name_of_driver;
      $farm_produce_sale->vehicle_type = $request->vehicle_type; 
      $farm_produce_sale->registration_number = $request->registration_number; //way_bill_number
      $farm_produce_sale->way_bill_number = $request->way_bill_number;
      $farm_produce_sale->notes = $request->notes;
      $farm_produce_sale->main_crop = $request->main_crop;

      if ($request->hasFile('image_url')) {
        $receipt_url = $request->file('image_url');
        $receipt_url_name = $receipt_url->getClientOriginalName();
        $receipt_url->move('./farmersdocuments/', $receipt_url);
        $farm_produce_sale->image_url = $receipt_url_name;
      } else {
        $farm_produce_sale->image_url = 'No-image.png';
      }

    //  $prepareland->user_id =  $request->user_id;

     $farm_produce_sale->user_id = auth()->user()->id;
      $farm_produce_sale->save();
      return response()->json(["data" => $farm_produce_sale]);
      //code...
    } catch (\Exception $e) {
      abort(422, "Creating Farmer Harvesting Activity Error - {$e->getMessage()}");
    }

    
  }


}
