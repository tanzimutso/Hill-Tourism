<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;

class RouteController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'travelling_from' => 'required',
            'travelling_to'  => 'required',
            'travelling_time' => 'required',
            'fare'       => 'required',
            'service_charge'       => 'required',
            'parking_fare'   => 'required'
        ]);

        $data = $request->all();

     
        $route = new Route;

        $route->travelling_from = $data['travelling_from'];
        $route->travelling_to  = $data['travelling_to'];
        $route->travelling_time = $data['travelling_time'];
        $route->fare = $data['fare'];
        $route->service_charge = $data['service_charge'];
        $route->parking_fare = $data['parking_fare'];
    
        if($route->save()) 
        {
            return 
            
            "success";
            
            redirect()
                   ->route('add_route')
                   ->with('status', 'success')
                   ->with('message', 'Route Added Successfully!');
        }

        else
        {
            return 
            
            "error";
            redirect()
                   ->route('add_route')
                   ->with('status', 'danger')
                   ->with('message', 'Route can not be added!!');
        }

    }

}
