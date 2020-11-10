<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Resources\Company as CompanyResource;
use Illuminate\Http\Request;
use App\Gig;
use App\Http\Resources\Gig as GigResource;

class GigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gig = Gig::paginate(15);

        return GigResource::collection($gig);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gig = $request->isMethod('put') ? Gig::findOrFail($request->gig_id) : new Gig();

        $gig->id = $request->input('gig_id');
        $gig->id = $request->input('name');
        $gig->id = $request->input('description');
        $gig->id = $request->input('number_of_positions');
        $gig->id = $request->input('pay_per_hour');
        $gig->id = $request->input('status');

        if ($gig->save()){

            return new GigResource($gig);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gig = Gig::findOrFail($id);

        return new GigResource($gig);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get Company
        $company = Gig::findOrFail($id);

        if ($company->delete()){
            return new GigResource($company);
        }
    }
}
