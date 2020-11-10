<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Http\Resources\Company as CompanyResource;



class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get Companies
        $companies = Company::paginate(15);

        return CompanyResource::collection($companies);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = $request->isMethod('put') ? Company::findOrFail($request->company_id) : new Company;

        $company->id = $request->input('company_id');
        $company->id = $request->input('name');
        $company->id = $request->input('description');
        $company->id = $request->input('address');

        if ($company->save()){

            return new CompanyResource($company);
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
        //Get Company
        $company = Company::findOrFail($id);

        //Return sigle company
        return new CompanyResource($company);
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
        $company = Company::findOrFail($id);

        if ($company->delete()){
        return new CompanyResource($company);
        }
    }
}
