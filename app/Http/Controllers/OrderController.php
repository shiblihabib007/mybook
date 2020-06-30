<?php

namespace App\Http\Controllers;




use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Cart;







class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart_view_and_edit()
    {
        
        $cart_content=Cart::content();
        $cart_total=Cart::initial();
        
        
         return view('frontViewLayouts.cart_view_and_edit',['cart_content'=>$cart_content],['cart_total'=>$cart_total]);
        
       
    }
    public function cart_checkout_form(){
        $cart_count=Cart::count();

        if($cart_count===0){
            return redirect('/home');
        }else{
            return view('frontViewLayouts.cart_checkout_form');
        }

    }

    public function cart_item_delete(Request $request, $rowId){

            

        Cart::remove($rowId);

        return redirect('cart_view_and_edit');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($bookId)
    {
        
       $data=Product::where('book_id', $bookId)->get();
        foreach ($data as $datas) {
        $cart_data=Cart::add($datas->book_id, $datas->book_name,1,  $datas->book_price);
         return redirect('/home');
        }
    }


   
 


    public function checkout(Request $request)
    {

        $bill_id='BL'.rand(100000,990000);

        
        /*


        $cart_content=Cart::content();

        //dd($cart_content);

        foreach ($cart_content as $cart_content_single) {

           
        DB::table('orders')->insert([
            ['bill_id' => $bill_id,
            'product_id' => $cart_content_single->id,
            'product_name' => $cart_content_single->name,
            'product_quantity' => $cart_content_single->qty,
            'product_price' => $cart_content_single->price]
        ]);

        




            
        }

      

        Cart::destroy();
        
        return redirect('/home');
        */


        dd($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cart_update(Request $request, $rowId )
    {
        $quantity  = $request->input('product_quantyty');
        Cart::update($rowId, $quantity);
        return redirect('/cart_view_and_edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy()
    {
        Cart::destroy();
    }









}
