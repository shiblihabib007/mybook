@extends('frontViewLayouts.master')
@section('slide')
<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Shopping Cart</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Shopping Cart</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
@endsection

@section('cart')
	<!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                                    
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($cart_content as $cart_items)
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="images/product/sm-3/1.jpg" alt="product img"></a></td>
                                            <td class="product-name"><a href="#">{{$cart_items->name}}</a></td>
                                            <td class="product-price"><span class="amount">TK {{$cart_items->price}}</span></td>
                                            <td class="product-quantity">
                                            	<form action="{{route('cart_update', $cart_items->rowId)}}" method="POST">
                                            		@csrf
                                            		
                                            		<label>
                                            		<input type="number" class="form-control" name="product_quantyty" value="{{$cart_items->qty}}">
                                            		</label>
                                            		

                                            		<button type="submit" class="btn btn-info">Update</button>

                                            	</form>
                                            </td>
                                            <td class="product-subtotal">Tk {{($cart_items->price) * ($cart_items->qty)}} </td>
                                            <td class="product-remove"><a href="{{route('cart_item_delete',$cart_items->rowId )}}">X</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        

                        <div class="cartbox__btn">
                            <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                <li><a href="#">Coupon Code</a></li>
                                <li><a href="#">Apply Code</a></li>
                                <li><a href="{{route('cart_checkout_form')}}">Check Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Cart total</li>
                                    <li>Sub Total</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>TK {{$cart_total}}</li>
                                    <li>TK </li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <span>TK {{$cart_total}}</span>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>  
        </div>
        <!-- cart-main-area end -->

@endsection