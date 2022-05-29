<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampusRequest;
use App\Http\Requests\UpdateCampusRequest;
use App\Models\Campus;
use Illuminate\Support\Facades\View;

class CampusController extends Controller
{
    public function index()
    {
        View::share('title', 'All items');
        $items = Campus::all();
        return view('backend.default.Campus.index', compact('items'));
    }


    public function create()
    {
        View::share('title', 'Add new item.');
        return view('backend.default.Campus.create');
    }


    public function store(StoreCampusRequest $request)
    {
        $request->validate([
             'name' => 'nullable|string'
        ]);

        $inputs['name'] = $request->name;

        try {
            Campus::create($inputs);
        } catch (\PDOException $e){
            return back()->withInput()->withErrors('Form data can not store.');
        }
        return back()->with('success', 'Form data successfully stored.');
    }


    public function show($code)
    {
        $item = Campus::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

        View::share('title', 'Single item information.');
        return view('backend.default.Campus.show', compact('item'));
    }


    public function edit($code)
    {
        $item = Campus::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

        View::share('title', 'Single item edit.');
        return view('backend.default.Campus.edit', compact('item'));
    }


    public function update(UpdateCampusRequest $request, $code)
    {
        $item = Campus::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

         $request->validate([
              'name' => 'nullable|string'
         ]);

         $item->name = $request->name;

         try {
             Campus::save();
         } catch (\PDOException $e){
             return back()->withInput()->withErrors('Form data can not update.');
         }
         return back()->with('success', 'Form data successfully updated.');
    }


    public function destroy($code)
    {
         $item = Campus::where('code', $code)->first();
         if (!$item) {
             $item = Campus::withTrashed()->where('code', $code)->first();
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
