<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentProficiencyRequest;
use App\Http\Requests\UpdateStudentProficiencyRequest;
use App\Models\StudentProficiency;
use Illuminate\Support\Facades\View;

class StudentProficiencyController extends Controller
{
    public function index()
    {
        View::share('title', 'All items');
        $items = StudentProficiency::all();
        return view('backend.default.StudentProficiency.index', compact('items'));
    }


    public function create()
    {
        View::share('title', 'Add new item.');
        return view('backend.default.StudentProficiency.create');
    }


    public function store(StoreStudentProficiencyRequest $request)
    {
        $request->validate([
             'name' => 'nullable|string'
        ]);

        $inputs['name'] = $request->name;

        try {
            StudentProficiency::create($inputs);
        } catch (\PDOException $e){
            return back()->withInput()->withErrors('Form data can not store.');
        }
        return back()->with('success', 'Form data successfully stored.');
    }


    public function show($code)
    {
        $item = StudentProficiency::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

        View::share('title', 'Single item information.');
        return view('backend.default.StudentProficiency.show', compact('item'));
    }


    public function edit($code)
    {
        $item = StudentProficiency::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

        View::share('title', 'Single item edit.');
        return view('backend.default.StudentProficiency.edit', compact('item'));
    }


    public function update(UpdateStudentProficiencyRequest $request, $code)
    {
        $item = StudentProficiency::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

         $request->validate([
              'name' => 'nullable|string'
         ]);

         $item->name = $request->name;

         try {
             StudentProficiency::save();
         } catch (\PDOException $e){
             return back()->withInput()->withErrors('Form data can not update.');
         }
         return back()->with('success', 'Form data successfully updated.');
    }


    public function destroy($code)
    {
         $item = StudentProficiency::where('code', $code)->first();
         if (!$item) {
             $item = StudentProficiency::withTrashed()->where('code', $code)->first();
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
