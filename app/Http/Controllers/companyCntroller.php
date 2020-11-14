<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyCntroller extends Controller
{
    public function viewAll()
    {
        $companies = Company::orderBy('created_at', 'DESC');
        $companies = $companies->get();

        return view('all-company')->with('companies', $companies);
    }

    public function addNew(Request $request)
    {
        Company::create([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country
        ]);

        return redirect()->route('companies.all');
    }

    public function delete(Request $request)
    {
        Company::where('id', $request->company_id)->delete();

        return redirect()->route('companies.all');
    }
}