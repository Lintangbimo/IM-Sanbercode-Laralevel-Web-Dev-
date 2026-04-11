<?php
public function store(Request $request)
{
    // upload gambar
    $image = $request->file('image')->store('products','public');

    // simpan ke database
    Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'stock' => $request->stock,
        'category_id' => $request->category_id,
        'image' => $image
    ]);

    return redirect('/products');
}

public function show($id){
    $category = Category::with('products')->find($id);
    return view('category.show', compact('category'));
}