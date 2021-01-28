<?php

namespace App\Http\Controllers\Api;

use App\Models\Bus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses = Bus::latest()->paginate(5);
        return response()->json($buses, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bus = Bus::create($request->all());
        if($bus) {
            return response()->json("Bus added successfully", 200);
        }
        return response()->json("Not saved", 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bus = Bus::where('id', $id)->get();
        return response()->json($bus, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $bus = Bus::find($id);

        $bus->name = $input['name'];
        $bus->model = $input['model'];
        $bus->image = $input['image'];
        $bus->seat_plan_id = $input['seat_plan_id'];
        $bus->company_id = $input['company_id'];
        $bus->bus_route_id = $input['bus_route_id'];
        $bus->bus_number = $input['bus_number'];

        $res = $bus->update();
        if($res) {
            return response()->json("Bus updated successfully", 200);
        }
        return response()->json("Not saved", 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Bus::find($id)->delete();
        if($res) {
            return response()->json("Bus Deleted successfully", 200);
        }
        return response()->json("Not Deleted", 500);
    }
}
