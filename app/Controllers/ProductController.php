<?php

namespace App\Controllers;

use App\Models\Products;

class ProductController extends BaseController
{
    public function product()
    {
        $products = new Products();
        $data['products'] = $products->findAll();

        return view('product',$data);
    }
    public function store()
    {
        $product = new Products();
      $file = $this->request->getFile('image');
        if ($file->isValid() && ! $file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('./public/uploads',$imageName);    
        }

        $data = [
                'prod_id' => $this->request->getPost('prod_id'),
                'prod_name' => $this->request->getPost('prod_name'),
                'category' => $this->request->getPost('category'),
                'image' => $imageName,
                'prod_price' => $this->request->getPost('prod_price')
        ];

        $product->save($data);
        return redirect()->to('product')->with('status','Product Data and Image Upload');
    }

    public function edit($id){
        $products = new Products();
        $data['product'] = $products->find($id);
        return view('edit',$data);
    }

    public function update($id){
        $products = new Products();
        $prod_item = $products->find($id);

        // echo $prod_item['image'];
        $file = $this->request->getFile('image');
        $old_img_name = $prod_item['image'];

        if($file->isValid() && !$file->hasMoved()){
            
            if(file_exists("./public/uploads/".$old_img_name)){
                unlink("./public/uploads/".$old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('./public/uploads',$imageName);
        }
        else{
            $imageName = $old_img_name;
        }
        $data = [
            'prod_id' => $this->request->getPost('prod_id'),
            'prod_name' => $this->request->getPost('prod_name'),
            'category' => $this->request->getPost('category'),
            'image' => $imageName,
            'prod_price' => $this->request->getPost('prod_price')
    ];

    $products->update($id,$data);
    return redirect()->to('/product')->with('status','Product Data and Image Upload');
        
    }

    public function delete($id){
        $product = new Products();
    
        $data = $product->find($id);
        $imagefile = $data['image'];
        if(file_exists("./public/uploads/".$imagefile))
        {
            unlink("./public/uploads/".$imagefile);
        }
        $product->delete($id);
        return redirect()->back()->with('status','Product data and Image Deleted');
    }
}