<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\vehicle;
use App\Models\history;
use App\Models\booking;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin.index');
    }

    public function fetch()
    {
        $data = User::all();
        return response()->json(['data' => $data]);
    }

    public function addVehicle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'formName' => 'required',
            'UserID' => 'required',
            'VehicleName' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'error' => 'All input fields are required',
            ]);
        } else {
            $vehicle = new vehicle;
            $vehicle->vehicle_number = $request->input('formName');
            $vehicle->user_id = $request->input('UserID');
            $vehicle->name = $request->input('VehicleName');
            $vehicle->save();
            return response()->json([
                'status' => 200,
                'messages' => 'Added Successfully',
            ]);
        }
    }

    public function vehicleView($id){
        // $vehicle = vehicle::find($id);
        $vehicle = vehicle::where('user_id', $id)->get();
        if ($vehicle) {
            return response()->json([
                'status' => 200,
                'data' => $vehicle,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'messages' => 'Vehicle is Not Found',
            ]);
        }
    }
    public function servies($id){
        $service = history::where('vehicle_id', $id)->get();
        if ($service) {
            return response()->json([
                'status' => 200,
                'data' => $service,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'messages' => 'Vehicle is Not Found',
            ]);
        }
    }
    public function saveHistory(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'vehicleID' => 'required',
            'discription' => 'required',
            'service_type' => 'required',
            'payments' => 'required',
            'last_km' => 'required',
            'next_km' => 'required',
            'worker' => 'required',
            'last_date' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'error' => 'All input fields are required',
            ]);
        } else {
            $history = new history;
            $history->vehicle_id = $request->input('vehicleID');
            $history->discription = $request->input('discription');
            $history->service_type = $request->input('service_type');
            $history->payments = $request->input('payments');
            $history->last_km = $request->input('last_km');
            $history->next_km = $request->input('next_km');
            $history->worker = $request->input('worker');
            $history->last_date = $request->input('last_date');
            $history->save();
            return response()->json([
                'status' => 200,
                'messages' => 'Added Successfully',
                'id' =>$id,
            ]);
        }
    }
    public function before($id){
        $vehicle = vehicle::where('user_id', $id)->get()->first();
        $service = history::where('vehicle_id', $vehicle->vehicle_number)->latest()->first();

        return response()->json($service);
    }

    public function list($id){
        $vehicle = vehicle::where('user_id', $id)->get();

        return response()->json(['data' =>$vehicle]);
    }

    public function getVehicleDetails($id){
        $service = history::where('vehicle_id', $id)->get();
        return response()->json(['data' =>$service]);
    }

    public function DateTime(Request $re, $id){
        $date = booking::where('work_time', $id)->get()->first();
        return response()->json(['data' =>$date]);
    }
    public function addDate(Request $request){
        $date = new booking;
        $date -> availability = $request->input('availability');
        $date -> booked = $request->input('userID');
        $date -> work_time = $request->input('DateTime');
        $date->save();
        $status = "success";
        return response()->json(['data'=>$status]);
    }
    public function getBooking($id){
        $date = booking::where('booked', $id)->get();
        return response()->json(['data' =>$date]);
    }
    public function deleteBooking($id){
        $date = booking::where('id', $id)->delete();
        return response()->json(['data' =>$date]);
    }
    public function userDateFech(){
        $date = booking::all();
        return response()->json(['data' =>$date]);
    }
}
