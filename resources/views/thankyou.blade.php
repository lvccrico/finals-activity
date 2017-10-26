@extends('master')

@section('extra-css')
    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
@endsection

@section('content')


    <div class="container wrapper">
        <div class="row cart-head">
            <div class="container">
            <div class="row">
                <p></p>
            </div>
            <div class="row">
                <div style="display: table; margin: auto;">
                    <span class="step step_complete"> 
                    	<a href="#" class="check-bc">Cart</a> 
                    	<span class="step_line step_complete"> </span> 
                    	<span class="step_line backline"> </span> 
                    </span>
                    <span class="step step_complete"> 
                    	<a href="#" class="check-bc">Checkout</a> <span class="step_line "> </span>
                    	<span class="step_line step_complete"> </span> 
                    	<span class="step_line backline"> </span> 
                    </span> 
                    <span class="step step_complete step_thankyou_complete">Thank you</span>
                </div>
            </div>
            <div class="row">
                <p></p>
            </div>
            </div>
        </div>
		<div class="row" style="margin: auto;">		
			<div class="col-md-3">	
                <p></p>
			</div>
			<div class="col-md-6 thankyou_message">	
		        <h1>Thank you shopping with use! Your order has been placed!</h1>
		        <h3>Please check your email for your invoice!</h>
			</div>
			<div class="col-md-3">	
                <p></p>
			</div>
		</div>		
		<div class="row">		
			<div class="col-md-4">	
                <p></p>
			</div>
			<div class="col-md-4" style="margin-bottom: 50px; text-align: center;">	
	            <a href="{{ url('/shop') }}" class="btn btn-success btn-lg">Continue Shopping</a>
			</div>
			<div class="col-md-4">	
                <p></p>
			</div>
		</div>
    </div> <!-- end container -->

@endsection