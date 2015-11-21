<?php

Route::get('products',function(){
	$products = DB::select("SELECT * FROM products");
	return view('productsadmin::products')->with('products',$products);
});