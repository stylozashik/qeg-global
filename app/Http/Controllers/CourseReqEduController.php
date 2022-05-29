<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseReqEduRequest;
use App\Http\Requests\UpdateCourseReqEduRequest;
use App\Models\CourseReqEdu;
use Illuminate\Support\Facades\View;

class CourseReqEduController extends Controller
{
    public function index()
    {
        View::share('title', 'All items');
        $items = CourseReqEdu::all();
        return view('backend.default.CourseReqEdu.index', compact('items'));
    }


    public function create()
    {
        View::share('title', 'Add new item.');
        return view('backend.default.CourseReqEdu.create');
    }


    public function store(StoreCourseReqEduRequest $request)
    {
        $request->validate([
             'name' => 'nullable|string'
        ]);

        $inputs['name'] = $request->name;

        try {
            CourseReqEdu::create($inputs);
        } catch (\PDOException $e){
            return back()->withInput()->withErrors('Form data can not store.');
        }
        return back()->with('success', 'Form data successfully stored.');
    }


    public function show($code)
    {
        $item = CourseReqEdu::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

        View::share('title', 'Single item information.');
        return view('backend.default.CourseReqEdu.show', compact('item'));
    }


    public function edit($code)
    {
        $item = CourseReqEdu::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

        View::share('title', 'Single item edit.');
        return view('backend.default.CourseReqEdu.edit', compact('item'));
    }


    public function update(UpdateCourseReqEduRequest $request, $code)
    {
        $item = CourseReqEdu::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

         $request->validate([
              'name' => 'nullable|string'
         ]);

         $item->name = $request->name;

         try {
             CourseReqEdu::save();
         } catch (\PDOException $e){
             return back()->withInput()->withErrors('Form data can not update.');
         }
         return back()->with('success', 'Form data successfully updated.');
    }


    public function destroy($code)
    {
         $item = CourseReqEdu::where('code', $code)->first();
         if (!$item) {
             $item = CourseReqEdu::withTrashed()->where('code', $code)->first();
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
