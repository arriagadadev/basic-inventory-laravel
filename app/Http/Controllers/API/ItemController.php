<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function getItems(Request $request) {
        $items = Item::select('id', 'name', 'quantity', 'status');
        if($request->filter){
            $items = $items->where('name', 'LIKE', "%$request->filter%");
        }
        return $items->orderBy('id','DESC')->paginate(15);
    }

    public function get(Request $request) {
        $item = Item::select('id', 'name', 'description', 'quantity', 'category_id as categoryId', 'price_tax_excluded as priceTaxExcluded', 'status')->where('id', $request->item)->first();
        if($item) {
            $item->priceTaxExcluded = (float) $item->priceTaxExcluded;
            return $item;
        }
        return response()->json(['message' => 'This item does not exist'], 404);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'categoryId' => 'required|integer',
            'priceTaxExcluded' => 'required|numeric',
            'status' => 'boolean'
        ]);
        $item = new Item;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->quantity = $request->quantity;
        $item->category_id = $request->categoryId;
        $item->price_tax_excluded = $request->priceTaxExcluded;
        $item->status = $request->status;
        $item->save();
        return $item;
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'categoryId' => 'required|integer',
            'priceTaxExcluded' => 'required|numeric',
            'status' => 'boolean'
        ]);
        $item = Item::find($request->id);
        if(!$item) {
            return response()->json(['message' => 'This item does not exist'], 404);;
        }
        $item->name = $request->name;
        $item->description = $request->description;
        $item->quantity = $request->quantity;
        $item->category_id = $request->categoryId;
        $item->price_tax_excluded = $request->priceTaxExcluded;
        $item->status = $request->status;
        $item->save();
        return $item;
    }

    public function delete(Request $request) {
        if(Item::where('id', $request->item)->delete()) {
            return response()->json(['message' => 'This item was deleted successfully'], 200);
        }
        return response()->json(['message' => 'Something went wrong, try again'], 400);
    }
}
