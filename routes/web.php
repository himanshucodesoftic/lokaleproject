<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\CustomersController;
use App\Http\Controllers\web\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


header('Content-Type: text/html; charset=utf-8');
if(file_exists(storage_path('installed'))){
	$check = DB::table('settings')->where('id', 94)->first();
	if($check->value == 'Maintenance'){
		$middleware = ['installer','env'];
	}
	else{
		$middleware = ['installer'];
	}
}
else{
	$middleware = ['installer'];
}

Route::get('/maintance','Web\IndexController@maintance');

// Route::group(['namespace' => 'web','middleware' => ['installer']], function () {
Route::get('/login', 'App\Http\Controllers\web\CustomersController@login');
Route::post('/process-login', 'App\Http\Controllers\web\CustomersController@processLogin');

Route::get('/vendorForm', 'App\Http\Controllers\web\CustomersController@vendor');
Route::post('/confirmVendor', 'CustomersController@confirmVendor');

Route::get('/logout', 'App\Http\Controllers\web\CustomersController@logout')->middleware('Customer');
// });






// Route::get('/', function () {
//     return view('home');
// });


// Route::get('contact', function () {
//     return view('contact');
// });


// Route::get('login', function () {
//     return view('login');
// });


// Route::get('wishlist', function () {
//         return view('wishlist');
//     });

    Route::get('about', function () {
        return view('aboutus');
    });


    Route::get('terms', function () {
        return view('terms');
    });



// Route::get('vendorForm', function () {
//     return view('vendorform');
// });


// Route::get('/vendorForm', 'App\Http\Controllers\web\CustomersController@vendor');
// Route::post('/confirmVendor', 'App\Http\Controllers\web\CustomersController@confirmVendor');

// Route::post('/process-login', 'App\Http\Controllers\web\CustomersController@processLogin');


// Route::group(['namespace' => 'Web','middleware' => $middleware], function () {
// 	Route::get('general_error/{msg}', function($msg) {
// 		 return view('errors.general_error',['msg' => $msg]);
// 	});
	// route for to show payment form using get method
		Route::get('pay', 'App\Http\Controllers\web\RazorpayController@pay')->name('pay');
    	Route::post('/paytm-callback', 'PaytmController@paytmCallback');
		Route::get('/store_paytm', 'App\Http\Controllers\web\PaytmController@store');
		// route for make payment request using post method
		Route::post('dopayment', 'RazorpayController@dopayment')->name('dopayment');

		Route::get('/','App\Http\Controllers\web\IndexController@index');
		Route::post('/change_language', 'WebSettingController@changeLanguage');
		Route::post('/change_currency', 'WebSettingController@changeCurrency');
		Route::post('/addToCart', 'CartController@addToCart');
		Route::post('/addToCartFixed', 'CartController@addToCartFixed');
		Route::post('/addToCartResponsive', 'CartController@addToCartResponsive');
		
		Route::post('/modal_show', 'ProductsController@ModalShow');
		Route::post('/reviews', 'ProductsController@reviews');
		Route::get('/deleteCart', 'App\Http\Controllers\web\CartController@deleteCart');
		Route::get('/viewcart', 'App\Http\Controllers\web\CartController@viewcart');
		Route::get('/editcart/{id}/{slug}', 'App\Http\Controllers\web\CartController@editcart');
		Route::post('/updateCart', 'CartController@updateCart');
		Route::post('/updatesinglecart', 'CartController@updatesinglecart');
		Route::get('/cartButton', 'CartController@cartButton');

		Route::get('/profile', 'App\Http\Controllers\web\CustomersController@profile')->middleware('Customer');
		Route::get('/change-password', 'App\Http\Controllers\web\CustomersController@changePassword')->middleware('Customer');
		
		Route::get('/wishlist', 'App\Http\Controllers\web\CustomersController@wishlist')->middleware('Customer');
		Route::post('/updateMyProfile', 'App\Http\Controllers\web\CustomersController@updateMyProfile')->middleware('Customer');
		Route::post('/updateMyPassword', 'App\Http\Controllers\web\CustomersController@updateMyPassword')->middleware('Customer');
		Route::get('UnlikeMyProduct/{id}', 'App\Http\Controllers\web\CustomersController@unlikeMyProduct')->middleware('Customer');
		Route::post('likeMyProduct', 'App\Http\Controllers\web\CustomersController@likeMyProduct');
		Route::post('addToCompare', 'App\Http\Controllers\web\CustomersController@addToCompare');
		Route::get('compare', 'App\Http\Controllers\web\CustomersController@Compare')->middleware('Customer');
		Route::get('deletecompare/{id}', 'App\Http\Controllers\web\CustomersController@DeleteCompare')->middleware('Customer');
		Route::get('/orders', 'App\Http\Controllers\web\OrdersController@orders')->middleware('Customer');
		
		Route::post('/order_detail', 'App\Http\Controllers\web\OrdersController@upay')->middleware('Customer');
		Route::get('/upaysuccess', 'App\Http\Controllers\web\OrdersController@upaysuccess')->middleware('Customer');
		Route::get('/upayerror', 'App\Http\Controllers\web\OrdersController@upayerror')->middleware('Customer');
		
		Route::get('/view-order/{id}', 'OrdersController@viewOrder')->middleware('Customer');
		Route::post('/updatestatus/', 'OrdersController@updatestatus')->middleware('Customer');
		Route::get('/shipping-address', 'App\Http\Controllers\web\ShippingAddressController@shippingAddress')->middleware('Customer');
		Route::post('/addMyAddress', 'App\Http\Controllers\web\ShippingAddressController@addMyAddress')->middleware('Customer');
		Route::post('/myDefaultAddress', 'ShippingAddressController@myDefaultAddress')->middleware('Customer');
		Route::post('/update-address', 'ShippingAddressController@updateAddress')->middleware('Customer');
		Route::get('/delete-address/{id}', 'App\Http\Controllers\web\ShippingAddressController@deleteAddress')->middleware('Customer');
		Route::post('/ajaxZones', 'ShippingAddressController@ajaxZones');
		//news section
		Route::get('/news', 'App\Http\Controllers\web\NewsController@news');
		Route::get('/news-detail/{slug}', 'App\Http\Controllers\web\NewsController@newsDetail');
		Route::post('/loadMoreNews', 'App\Http\Controllers\web\NewsControllerNewsController@loadMoreNews');
		Route::get('/page', 'App\Http\Controllers\web\IndexController@page');
		Route::get('/shop', 'App\Http\Controllers\web\ProductsController@shop');
		Route::post('/shop', 'App\Http\Controllers\web\ProductsController@shop');
		Route::get('/product-detail/{slug}', 'App\Http\Controllers\web\ProductsController@productDetail');
		Route::post('/filterProducts', 'ProductsController@filterProducts');
		Route::post('/getquantity', 'ProductsController@getquantity');

		Route::get('/guest_checkout', 'App\Http\Controllers\web\OrdersController@guest_checkout');
		Route::get('/checkout', 'App\Http\Controllers\web\OrdersController@checkout')->middleware('Customer');
		Route::post('/checkout_shipping_address', 'App\Http\Controllers\web\OrdersController@checkout_shipping_address')->middleware('Customer');
		Route::post('/checkout_billing_address', 'App\Http\Controllers\web\OrdersController@checkout_billing_address')->middleware('Customer');
		Route::post('/checkout_payment_method', 'App\Http\Controllers\web\OrdersController@checkout_payment_method')->middleware('Customer');
		Route::post('/paymentComponent', 'App\Http\Controllers\web\OrdersController@paymentComponent')->middleware('Customer');
		Route::post('/place_order', 'App\Http\Controllers\web\OrdersController@place_order')->middleware('Customer');
		// Route::get('/orders', 'OrdersController@orders')->middleware('Customer');
		Route::post('/updatestatus/', 'App\Http\Controllers\web\OrdersController@updatestatus')->middleware('Customer');
		Route::post('/myorders', 'App\Http\Controllers\web\OrdersController@myorders')->middleware('Customer');
		Route::get('/stripeForm', 'App\Http\Controllers\web\OrdersController@stripeForm')->middleware('Customer');
		Route::get('/view-order/{id}', 'App\Http\Controllers\web\OrdersController@viewOrder')->middleware('Customer');
		Route::post('/pay-instamojo', 'OrdersController@payIinstamojo')->middleware('Customer');
		Route::get('/thankyou', 'App\Http\Controllers\web\OrdersController@thankyou')->middleware('Customer');

		//paystack
		Route::get('/paystack/transaction', 'App\Http\Controllers\web\OrdersController@paystackTransaction')->middleware('Customer');
		Route::get('/paystack/verify/transaction', 'App\Http\Controllers\web\OrdersController@authorizepaystackTransaction')->middleware('Customer');
		
		//paystack
		Route::get('/midtrans/transaction', 'MidtransController@midtransTransaction')->middleware('Customer');
		// Route::get('/midtrans/verify/transaction', 'OrdersController@authorize<idtransTransaction')->middleware('Customer');
		
		Route::get('/checkout/hyperpay', 'OrdersController@hyperpay')->middleware('Customer');
		Route::get('/checkout/hyperpay/checkpayment', 'OrdersController@checkpayment')->middleware('Customer');
		Route::post('/checkout/payment/changeresponsestatus', 'OrdersController@changeresponsestatus')->middleware('Customer');
		Route::post('/apply_coupon', 'CartController@apply_coupon');
		Route::get('/removeCoupon/{id}', 'CartController@removeCoupon')->middleware('Customer');

		Route::get('/signup', 'App\Http\Controllers\web\CustomersController@signup');
		Route::get('/logoutt', 'App\Http\Controllers\web\CustomersController@logout')->middleware('Customer');
		Route::post('/signupProcess', 'App\Http\Controllers\web\CustomersController@signupProcess');
		Route::get('/forgotPassword', 'App\Http\Controllers\web\CustomersController@forgotPassword');
		Route::get('/recoverPassword', 'App\Http\Controllers\web\CustomersController@recoverPassword');
		Route::post('/processPassword', 'App\Http\Controllers\web\CustomersController@processPassword');


		Route::get('login/{social}', 'App\Http\Controllers\web\CustomersController@socialLogin');
		Route::get('login/{social}/callback', 'App\Http\Controllers\web\CustomersController@handleSocialLoginCallback');
		Route::post('/commentsOrder', 'OrdersController@commentsOrder');
		Route::post('/subscribeNotification/', 'CustomersController@subscribeNotification');
		Route::get('/contact', 'App\Http\Controllers\web\IndexController@contactus');
		Route::post('/processContactUs', 'App\Http\Controllers\web\IndexController@processContactUs');
		
		Route::get('/setcookie', 'IndexController@setcookie');
		Route::get('/newsletter', 'IndexController@newsletter');

		Route::get('/subscribeMail', 'IndexController@subscribeMail');

		
		Route::get('/media/add', 'MediaController@add');
		Route::get('/detail/{id}', 'MediaController@detailimage');
		Route::post('/uploadimage', 'MediaController@fileUpload');
		Route::post('/regenerateimage', 'MediaController@regenerateimage');

		Route::get('/addProduct', 'ProductsController@addProduct');		
		Route::post('/saveinfo', 'ProductsController@saveinfo');
		Route::post('/savepics', 'ProductsController@savepics');
		Route::post('/postProduct', 'ProductsController@postProduct');

		Route::get('/getmyproduct', 'ProductsController@getMyProduct');
		Route::get('/editproduct/{id}', 'ProductsController@editProduct');
		Route::post('/updateproduct', 'ProductsController@updateProduct');
		Route::post('/deleteproduct', 'ProductsController@deleteProduct');
	// });

	Route::get('/test', 'Web\IndexController@test1');
