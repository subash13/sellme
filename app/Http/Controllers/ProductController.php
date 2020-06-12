<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('backend.product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cover' => 'required',
            'cover' => 'mimes:jpeg,jpg,png,gif|max:100000',
            'images' => 'required',
            'images.*' => 'mimes:jpeg,jpg,png,gif|max:100000',
            'title' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',

        ]);
        if ($request->hasfile('cover')) {
            $file = $request->file('cover');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/cover', $filename);
        }
        $data = Product::create([
            'cover' => isset($request['cover']) ? $filename : null,
            'title' => $request['title'],
            'description' => $request['description'],
            'quantity' => $request['quantity'],
            'price' => $request['price'],
            'status' => isset($request['status']) ? 1 : 0,
        ]);

        if ($files = $request->file('images')) {$count = 0;
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename = time() . $count . '.' . $extension;
                $file->move('uploads/product/images/', $filename);

                $images = ProductImage::create([
                    'product_id' => $data['id'],
                    'image' => isset($request['images']) ? $filename : null,
                ]);
                $count++;
            }
        }
        if (isset($data)) {
            alert()->success('Created', '');
        }
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Product::find($id);
        return view('backend.product.show')->with(['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        return view('backend.product.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cover' => 'mimes:jpeg,jpg,png,gif|max:100000',
            'images.*' => 'mimes:jpeg,jpg,png,gif|max:100000',
            'title' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
        ]);
        $gallery = Product::find($id);
        if ($request->hasfile('cover')) {

            unlink(public_path() . '/uploads/product/cover' . $gallery['cover']);
            $file = $request->file('cover');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/news/', $filename);
        } else {
            $filename1 = $gallery['cover'];
        }
        $data = $gallery->update([
            'cover' => isset($request['cover']) ? $filename : $filename1,
            'title' => $request['title'],
            'description' => $request['description'],
            'ttitle' => $request['ttitle'],
            'tdescription' => $request['tdescription'],
            'status' => isset($request['status']) ? 1 : 0,
        ]);
        if (isset($data)) {
            alert()->success('Updated', '');
        }
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Product::find($id);
        if (isset($gallery->cover)) {
           
            foreach ($gallery->images as $image) {
                unlink(public_path() . '/uploads/product/images/' . $image['image']);
            }
            unlink(public_path() . '/uploads/product/cover/' . $gallery['cover']);
        }

        foreach ($gallery->images as $image) {
            $image->delete();
        }
        $gallery->delete();
        alert()->warning('Deleted', '');
        return redirect()->route('product.index');
    }
}
