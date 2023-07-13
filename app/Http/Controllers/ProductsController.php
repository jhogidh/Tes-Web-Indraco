<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Productcategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::with('category')->get();
        return DataTables::of($data)
                ->addColumn('ubah', function($data){
                    return view('button')->with('data',$data);
                })
                ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(),[
            'product_name' => 'required',
            'id_category' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ],[
            'product_name.required' => 'Nama Produk Harus Diisi',
            'id_category.required' => 'Kategori Harus Diisi',
            'stock.required' => 'Stok Harus Diisi',
            'price.required' => 'Harga Harus Diisi'
        ]);

        if($validasi->fails()){
            return response()->json(['error'=>$validasi->errors()]);
        }else{
            $data = [
                'product_name' => $request->product_name,
                'id_category' => $request->id_category,
                'stock' => $request->stock,
                'price' => $request->price
            ];

            Product::create($data);
            return response()->json(['success'=>'Berhasil Menambahkan Data']);
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Product::all();
        return response()->json(['result' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Product::where('id', $id)->first();
        return response()->json(['result' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validasi = Validator::make($request->all(),[
            'product_name' => 'required',
            'id_category' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ],[
            'product_name.required' => 'Nama Produk Harus Diisi',
            'id_category.required' => 'Kategori Harus Diisi',
            'stock.required' => 'Stok Harus Diisi',
            'price.required' => 'Harga Harus Diisi'
        ]);

        if($validasi->fails()){
            return response()->json(['error'=>$validasi->errors()]);
        }else{
            $data = [
                'product_name' => $request->product_name,
                'id_category' => $request->id_category,
                'stock' => $request->stock,
                'price' => $request->price
            ];

            Product::where('id', $id)->update($data);
            return response()->json(['success'=>'Berhasil Melakukan Update Data']);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::where('id', $id)->delete();
    }
}
