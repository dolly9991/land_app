<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandRight; // Assuming you have a LandRights model

class LandRightsController extends Controller
{
    public function index()
    {
        // Logic to fetch all land rights records
        $landRights = LandRight::all();

        return view('landRights', compact('landRights'));
       
    }
    public function uploadForm(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'transferorname' => 'required|string',
        'mstatus' => 'required|string',
        'transferoromang' => 'required|numeric|digits:9',
        'transferortelephone' => 'required|numeric|digits:8',
        'transferoraddress' => 'required|string',
        'transferorvillage' => 'required|string',
        'transferordistrict' => 'required|string',
        'transferordate' => 'required|date',
        'plotlocation' => 'required|string',
        'presentuse' => 'required|string',
        'leaseduration' => 'required|string',
        'transfereename' => 'required|string',
        'transfereeomang' => 'required|numeric|digits:9',
        'dob' => 'required|date',
        'transfereetelephone' => 'required|numeric|digits:8',
        'transfereeaddress' => 'required|string',
        'transfereevillage' => 'required|string',
        'transfereedistrict' => 'required|string',
        'date' => 'required|date',
    ]);

    // Create a new LandRights object and fill it with validated data
    $landRights = new landrights;

    $landRights-> transferorname  = $request->transferorname;
    $landRights-> mstatus = $request->mstatus;
    $landRights-> transferoromang = $request->transferoromang;
    $landRights-> transferortelephone = $request->transferortelephone;
    $landRights-> transferoraddress = $request->transferoraddress;
    $landRights-> transferorvillage = $request->transferorvillage;
    $landRights-> transferordistrict = $request->transferordistrict;
    $landRights-> transferordate = $request->transferordate;
    $landRights-> plotlocation = $request->plotlocation;
    $landRights-> presentuse = $request->presentuse;
    $landRights-> leaseduration= $request->leaseduration;
    $landRights-> transfereename = $request->transfereename;
    $landRights-> transfereeomang = $request->transfereeomang;
    $landRights-> transfereedob = $request->transfereedob;
    $landRights-> transfereetelephone = $request->transfereetelephone;
    $landRights-> transfereeaddress = $request->transfereeaddress;
    $landRights-> transfereevillage = $request->transfereevillage;
    $landRights-> transfereedistrict = $request->transfereedistrict;
    $landRights-> transfereedate = $request->transfereedate;

    // Fill other fields similarly

    // Save the LandRights object to the database
    $landRights->save();

    // Redirect back with a success message
    return redirect()->back()->with('status', 'Form submitted successfully!');
}

}