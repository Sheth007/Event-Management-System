<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    function newCategory(Request $request)
    {

        $name = $request->name;

        DB::table('categories')->insert([
            'name' => $name,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        session()->forget('_token');

        return view('category');
    }

    function displayTotalCategory()
    {
        return view('allCategory', [
            'categories' => DB::table('categories')->paginate(15)
        ]);
    }

    function deleteCategory($id)
    {
        $deletedRows = DB::table('categories')->where('id', $id)->delete();
        if (!$deletedRows) {
            die;
        } else {
            return redirect()->back();
        }
    }

    function updateCategoryid($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();

        return view('updateCategory', [
            'category' => $category,
            'id' => $id
        ]);
    }

    function updateCategoryData(Request $request)
    {
        $id = $request->id;
        $name = $request->name;

        DB::table('categories')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'updated_at' => now()
            ]);

        session()->forget('_token');

        return view('category');
    }
}
