<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductsPhoto;
use DB;

class lazadaAdminController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
  
        return view('lazada.admin.list',compact('products'));

    }
    
    public function edit_process(Request $request, Product $product)
    {
        dd('sss');
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
    
    public function edit($id,Product $product)
    {
//        dd($edit);
        $product =Product::where('id', $id)->first();
        $photos =ProductsPhoto::where('product_id', $id)->get();
        
        return view('lazada.admin.edit',compact('product','photos'));
    }
    
    public function detail($id)
    {
//        dd($id);
        
        $product =Product::where('id', $id)->first();
                 $photos =ProductsPhoto::where('product_id', $id)->get();
//        dd($photos);
        return view('lazada.admin.detail',compact('product','photos'));
    }
    
    public function add()
    {        
        return view('lazada.admin.add');
    }
    
    public function delete($id)
    {
        DB::table('product')->where('id', '=', $id)->delete();
  
        return redirect('lazada_admin_list')
                        ->with('success','Product deleted successfully');
    }
    
    public function add_process(Request $request)
    {      
        $test = $request->all();
//        dd($test['name']);
//         $data1 = Product::create($request->all());
        
            $testid =  DB::table('product')->insertGetId([
                        'name' => $test['name'],
                  'description2' => 'dd',
                'description2' => $test['description2'],
                
                    ]); 

         foreach ($request->file('images') as $photo) {
            $name='/upload/'.time().$photo->getClientOriginalName();
            $photo->move(public_path().'/upload/', $name);  

            ProductsPhoto::create([
                'product_id' => $testid,
                'img_name' => $name,
            ]);
        }
        
        //******summernote photo
                $detail=$request->description2;
 
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
 
        $images = $dom->getelementsbytagname('img');
 
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
 
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
 
            $data = base64_decode($data);
            $image_name= '/'.time().$k.'.png';
            $path = public_path() .'/'. $image_name;
//            dd($path);
            file_put_contents($path, $data);
 
            $img->removeattribute('src');
            $img->setattribute('src', $image_name);
        }
 
        $detail = $dom->savehtml();
//        dd($data1->id);
        $product = Product::find($testid);

$product->description = $detail;

$product->save();
//        dd($detail);
//        $summernote = new Summernote;
//        $summernote->content = $detail;
//        $summernote->save();

        //*****summernote photo
        
        
//        $UpdateDetails = Product::where('id', data1['id'],)->first();
     
        
        
        

//        return view('lazada.admin.list');
        return redirect('lazada_admin_list');
    }
    //
}
