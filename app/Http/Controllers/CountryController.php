<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Country;
use Illuminate\Support\Facades\View;

class CountryController extends Controller
{
    public function index()
    {
        View::share('title', 'All items');
        $items = Country::all();
        return view('backend.default.Country.index', compact('items'));
    }


    public function create()
    {
        View::share('title', 'Add new item.');
        return view('backend.default.Country.create');
    }


    public function store(StoreCountryRequest $request)
    {
        $request->validate([
             'name' => 'nullable|string'
        ]);

        $inputs['name'] = $request->name;

        try {
            Country::create($inputs);
        } catch (\PDOException $e){
            return back()->withInput()->withErrors('Form data can not store.');
        }
        return back()->with('success', 'Form data successfully stored.');
    }


    public function show($code)
    {
        $item = Country::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

        View::share('title', 'Single item information.');
        return view('backend.default.Country.show', compact('item'));
    }


    public function edit($code)
    {
        $item = Country::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

        View::share('title', 'Single item edit.');
        return view('backend.default.Country.edit', compact('item'));
    }


    public function update(UpdateCountryRequest $request, $code)
    {
        $item = Country::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

         $request->validate([
              'name' => 'nullable|string'
         ]);

         $item->name = $request->name;

         try {
             Country::save();
         } catch (\PDOException $e){
             return back()->withInput()->withErrors('Form data can not update.');
         }
         return back()->with('success', 'Form data successfully updated.');
    }


    public function destroy($code)
    {
         $item = Country::where('code', $code)->first();
         if (!$item) {
             $item = Country::withTrashed()->where('code', $code)->first();
             if (!$item)
                 return back()->withErrors('Information not found.');

             try {
                 $item->forceDelete();
             } catch (\PDOException $e) {
                 return back()->withInput()->withErrors('Item information can not permanently delete.');
             }
             return back()->with('success', 'Item deleted permanently');
         }

        // Find out relation and logic to delete others table data

         try {
             $item->delete();
         } catch (\PDOException $e) {
             return back()->withInput()->withErrors('Item deletion failed');
         }
         return back()->with('success', 'Item permanently deleted.');
    }
}
