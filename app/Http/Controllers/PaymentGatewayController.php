<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentGatewayRequest;
use App\Http\Requests\UpdatePaymentGatewayRequest;
use App\Models\PaymentGateway;
use Illuminate\Support\Facades\View;

class PaymentGatewayController extends Controller
{
    public function index()
    {
        View::share('title', 'All items');
        $items = PaymentGateway::all();
        return view('backend.default.PaymentGateway.index', compact('items'));
    }


    public function create()
    {
        View::share('title', 'Add new item.');
        return view('backend.default.PaymentGateway.create');
    }


    public function store(StorePaymentGatewayRequest $request)
    {
        $request->validate([
             'name' => 'nullable|string'
        ]);

        $inputs['name'] = $request->name;

        try {
            PaymentGateway::create($inputs);
        } catch (\PDOException $e){
            return back()->withInput()->withErrors('Form data can not store.');
        }
        return back()->with('success', 'Form data successfully stored.');
    }


    public function show($code)
    {
        $item = PaymentGateway::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

        View::share('title', 'Single item information.');
        return view('backend.default.PaymentGateway.show', compact('item'));
    }


    public function edit($code)
    {
        $item = PaymentGateway::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

        View::share('title', 'Single item edit.');
        return view('backend.default.PaymentGateway.edit', compact('item'));
    }


    public function update(UpdatePaymentGatewayRequest $request, $code)
    {
        $item = PaymentGateway::where('code', $code)->first();
        if(!$item)
            return back()->withErrors('Information not found.');

         $request->validate([
              'name' => 'nullable|string'
         ]);

         $item->name = $request->name;

         try {
             PaymentGateway::save();
         } catch (\PDOException $e){
             return back()->withInput()->withErrors('Form data can not update.');
         }
         return back()->with('success', 'Form data successfully updated.');
    }


    public function destroy($code)
    {
         $item = PaymentGateway::where('code', $code)->first();
         if (!$item) {
             $item = PaymentGateway::withTrashed()->where('code', $code)->first();
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
