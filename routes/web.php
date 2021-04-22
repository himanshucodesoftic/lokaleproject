<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\CustomersController;
use App\Http\Controllers\web\IndexController;








Route::get('admin/adminlogin', 'App\Http\Controllers\AdminControllers\AdminController@login');
Route::post('admin/checkLogin', 'App\Http\Controllers\AdminControllers\AdminController@checkLogin');

Route::get('admin/dashboard/{reportBase}', 'App\Http\Controllers\AdminControllers\AdminController@dashboard');
Route::get('admin/media/add', 'App\Http\Controllers\AdminControllers\MediaController@add')->middleware('add_media');
Route::get('admin/media/display', 'App\Http\Controllers\AdminControllers\MediaController@display')->middleware('view_media');
Route::get('admin/languages/display', 'App\Http\Controllers\AdminControllers\LanguageController@display')->middleware('view_language');
Route::get('admin/languages/edit/{id}', 'App\Http\Controllers\AdminControllers\LanguageController@edit')->middleware('edit_language');
Route::post('/admin/languages/update', 'App\Http\Controllers\AdminControllers\LanguageController@update')->middleware('edit_language');
Route::post('admin/languages/delete', 'App\Http\Controllers\AdminControllers\LanguageController@delete')->middleware('delete_language');
// Route::get('admin/currencies/display', 'App\Http\Controllers\AdminControllers\CurrencyController@display')->middleware('view_language');
Route::get('admin/currencies/display', 'App\Http\Controllers\AdminControllers\CurrencyController@display')->middleware('view_general_setting');
   
  Route::get('/admin/vendors/requests', 'App\Http\Controllers\AdminControllers\VendorsController@requests')->middleware('view_customer');
       
  Route::get('admin/vendors/accept/{id}', 'App\Http\Controllers\AdminControllers\VendorsController@accept')->middleware('edit_customer');
  Route::get('admin/vendors/display', 'App\Http\Controllers\AdminControllers\VendorsController@display')->middleware('view_customer');
  Route::get('admin/vendors/add', 'App\Http\Controllers\AdminControllers\VendorsController@add')->middleware('add_customer');
  Route::post('admin/vendors/add', 'App\Http\Controllers\AdminControllers\VendorsController@insert')->middleware('add_customer');
  Route::get('/admin/customers/display', 'App\Http\Controllers\AdminControllers\CustomersController@display')->middleware('view_customer');
  Route::get('/admin/reviews/display', 'App\Http\Controllers\AdminControllers\ProductController@reviews')->middleware('view_reviews');
  Route::get('admin/orderstatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@orderstatus')->middleware('view_order');
    
  Route::get('admin/orders/display', 'App\Http\Controllers\AdminControllers\OrdersController@display')->middleware('view_order');
       
  Route::get('admin/countries/display', 'App\Http\Controllers\AdminControllers\CountriesController@index')->middleware('view_tax');
  Route::get('/admin/zones/display', 'App\Http\Controllers\AdminControllers\ZonesController@index')->middleware('view_tax');
  Route::get('/admin/tax/taxclass/display', 'App\Http\Controllers\AdminControllers\TaxController@taxindex')->middleware('view_tax');
  Route::get('/admin/tax/taxrates/display', 'App\Http\Controllers\AdminControllers\TaxController@displaytaxrates')->middleware('view_tax');
  Route::get('/admin/coupons/display', 'App\Http\Controllers\AdminControllers\CouponsController@display')->middleware('view_coupon');
  Route::get('admin/shippingmethods/display', 'App\Http\Controllers\AdminControllers\ShippingMethodsController@display')->middleware('view_shipping');
         
  Route::get('/admin/paymentmethods/index', 'App\Http\Controllers\AdminControllers\PaymentMethodsController@index')->middleware('view_payment');
  Route::get('/admin/newscategories/display', 'App\Http\Controllers\AdminControllers\NewsCategoriesController@display')->middleware('view_news');
  Route::get('/admin/news/display', 'App\Http\Controllers\AdminControllers\NewsController@display')->middleware('view_news');
  Route::get('admin/pushnotification', 'App\Http\Controllers\AdminControllers\SiteSettingController@pushNotification')->middleware('view_general_setting');
  Route::get('/admin/devices/display', 'App\Http\Controllers\AdminControllers\NotificationController@devices')->middleware('view_notification');
  Route::get('/admin/devices/notifications/', 'App\Http\Controllers\AdminControllers\NotificationController@notifications')->middleware('view_notification');
  Route::get('admin/managements/backup', 'App\Http\Controllers\AdminControllers\ManagementsController@backup')->middleware('edit_management');
  Route::get('/admin/managements/import', 'App\Http\Controllers\AdminControllers\ManagementsController@import')->middleware('edit_management');
  Route::get('/admin/managements/updater', 'App\Http\Controllers\AdminControllers\ManagementsController@updater')->middleware('edit_management');
  Route::get('/admin/admins', 'App\Http\Controllers\AdminControllers\AdminController@admins')->middleware('view_manage_admin');
  Route::get('/admin/manageroles', 'App\Http\Controllers\AdminControllers\AdminController@manageroles')->middleware('manage_role');
  Route::get('/admin/deliveryboys/display', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@display')->middleware('view_deliveryboy');
  Route::get('/admin/customers/edit/{id}', 'App\Http\Controllers\AdminControllers\CustomersController@edit')->middleware('edit_customer');
  Route::get('/admin/media/detail/{id}', 'App\Http\Controllers\AdminControllers\MediaController@detailimage')->middleware('view_media');
  Route::post('/admin/media/regenerateimage', 'App\Http\Controllers\AdminControllers\MediaController@regenerateimage');
 //14/04/2021 
  Route::get('admin/editorderstatus/{id}', 'App\Http\Controllers\AdminControllers\SiteSettingController@editorderstatus')->middleware('edit_product');
  Route::post('/admin/orders/updateOrderStatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@updateOrderStatus')->middleware('edit_order');
  Route::get('/admin/orders/vieworder/{id}', 'App\Http\Controllers\AdminControllers\OrdersController@vieworder')->middleware('view_order');
  Route::get('admin/orders/invoiceprint/{id}', 'App\Http\Controllers\AdminControllers\OrdersController@invoiceprint')->middleware('view_order');
  Route::post('/admin/orders/updateOrder', 'App\Http\Controllers\AdminControllers\OrdersController@updateOrder')->middleware('edit_order');
  Route::post('/admin/orders/deleteOrder', 'App\Http\Controllers\AdminControllers\OrdersController@deleteOrder')->middleware('edit_order');
  Route::get('/admin/customers-orders-report', 'App\Http\Controllers\AdminControllers\ReportsController@statsCustomers')->middleware('report');
  Route::get('/admin/customer-orders-print', 'App\Http\Controllers\AdminControllers\ReportsController@customerOrdersPrint')->middleware('report');
  Route::get('admin/salesreport', 'App\Http\Controllers\AdminControllers\ReportsController@salesreport')->middleware('report');
       
  Route::get('admin/couponreport', 'App\Http\Controllers\AdminControllers\ReportsController@couponReport')->middleware('report');
  Route::get('admin/couponreport-print', 'App\Http\Controllers\AdminControllers\ReportsController@couponReportPrint')->middleware('report');
  Route::get('/admin/countries/edit/{id}', 'App\Http\Controllers\AdminControllers\CountriesController@edit')->middleware('edit_tax');
  Route::post('/admin/countries/update', 'App\Http\Controllers\AdminControllers\CountriesController@update')->middleware('edit_tax');
  Route::post('/admin/countries/delete', 'App\Http\Controllers\AdminControllers\CountriesController@delete')->middleware('delete_tax');
  Route::get('/admin/zones/add', 'App\Http\Controllers\AdminControllers\ZonesController@add')->middleware('add_tax');
  Route::post('/admin/zones/add', 'App\Http\Controllers\AdminControllers\ZonesController@insert')->middleware('add_tax');
  Route::get('/admin/tax/taxclass/filter', 'App\Http\Controllers\AdminControllers\TaxController@filtertaxclass')->middleware('view_tax');
  Route::get('/admin/tax/taxclass/add', 'App\Http\Controllers\AdminControllers\TaxController@addtaxclass')->middleware('add_tax');
  Route::post('/admin/tax/taxclass/add', 'App\Http\Controllers\AdminControllers\TaxController@inserttaxclass')->middleware('add_tax'); 
  Route::get('/admin/tax/taxrates/filter', 'App\Http\Controllers\AdminControllers\TaxController@filtertaxrates')->middleware('view_tax');
  Route::get('/admin/tax/taxrates/add', 'App\Http\Controllers\AdminControllers\TaxController@addtaxrate')->middleware('add_tax');
  Route::post('/admin/tax/taxrates/add', 'App\Http\Controllers\AdminControllers\TaxController@inserttaxrate')->middleware('add_tax');
  Route::get('/admin/zones/edit/{id}', 'App\Http\Controllers\AdminControllers\ZonesController@edit')->middleware('edit_tax');
  Route::post('/admin/zones/update', 'App\Http\Controllers\AdminControllers\ZonesController@update')->middleware('edit_tax');    
  Route::post('/admin/zones/delete', 'App\Http\Controllers\AdminControllers\ZonesController@delete')->middleware('delete_tax');
  Route::get('/admin/tax/taxclass/edit/{id}', 'App\Http\Controllers\AdminControllers\TaxController@edittaxclass')->middleware('edit_tax');
  Route::post('/admin/tax/taxclass/update', 'App\Http\Controllers\AdminControllers\TaxController@updatetaxclass')->middleware('edit_tax');
  Route::get('/admin/tax/taxrates/edit/{id}', 'App\Http\Controllers\AdminControllers\TaxController@edittaxrate')->middleware('edit_tax');
  Route::post('/admin/tax/taxrates/update', 'App\Http\Controllers\AdminControllers\TaxController@updatetaxrate')->middleware('edit_tax');
  Route::post('/admin/tax/taxclass/delete', 'App\Http\Controllers\AdminControllers\TaxController@deletetaxclass')->middleware('delete_tax'); 
  Route::post('/admin/tax/taxrates/delete', 'App\Http\Controllers\AdminControllers\TaxController@deletetaxrate')->middleware('delete_tax'); 
  Route::get('/admin/coupons/edit/{id}', 'App\Http\Controllers\AdminControllers\CouponsController@edit')->middleware('edit_coupon');
  Route::post('/admin/coupons/update', 'App\Http\Controllers\AdminControllers\CouponsController@update')->middleware('edit_coupon');
  Route::post('/admin/coupons/delete', 'App\Http\Controllers\AdminControllers\CouponsController@delete')->middleware('delete_coupon');
  Route::get('/admin/shippingmethods/detail/{table_name}', 'App\Http\Controllers\AdminControllers\ShippingMethodsController@detail')->middleware('edit_shipping');
  Route::post('/admin/shippingmethods/update', 'App\Http\Controllers\AdminControllers\ShippingMethodsController@update')->middleware('edit_shipping');
  Route::get('/admin/paymentmethods/display/{id}', 'App\Http\Controllers\AdminControllers\PaymentMethodsController@display')->middleware('view_payment');
  Route::post('/admin/paymentmethods/update', 'App\Http\Controllers\AdminControllers\PaymentMethodsController@update')->middleware('edit_payment');
  Route::get('/admin/newscategories/add', 'App\Http\Controllers\AdminControllers\NewsCategoriesController@add')->middleware('add_news');
  Route::post('/admin/newscategories/add', 'App\Http\Controllers\AdminControllers\NewsCategoriesController@insert')->middleware('add_news');
  Route::get('/admin/news/edit/{id}', 'App\Http\Controllers\AdminControllers\NewsController@edit')->middleware('edit_news');
  Route::post('admin/news/update', 'App\Http\Controllers\AdminControllers\NewsController@update')->middleware('edit_news');
  Route::post('admin/news/delete', 'App\Http\Controllers\AdminControllers\NewsController@delete')->middleware('delete_news');
  Route::get('/admin/news/add', 'App\Http\Controllers\AdminControllers\NewsController@add')->middleware('add_news');
  Route::post('/admin/news/add', 'App\Http\Controllers\AdminControllers\NewsController@insert')->middleware('add_news');
  Route::post('/admin/updateSetting', 'App\Http\Controllers\AdminControllers\SiteSettingController@updateSetting')->middleware('edit_general_setting');
  Route::get('/admin/setting', 'App\Http\Controllers\AdminControllers\SiteSettingController@setting')->middleware('edit_general_setting');
  Route::get('/admin/facebooksettings', 'App\Http\Controllers\AdminControllers\SiteSettingController@facebookSettings')->middleware('view_general_setting');
  Route::get('admin/googlesettings', 'App\Http\Controllers\AdminControllers\SiteSettingController@googleSettings')->middleware('view_general_setting');
  Route::get('admin/alertsetting', 'App\Http\Controllers\AdminControllers\SiteSettingController@alertSetting')->middleware('view_general_setting');
  Route::post('admin/updateAlertSetting', 'App\Http\Controllers\AdminControllers\SiteSettingController@updateAlertSetting');
  Route::get('admin/firebase', 'App\Http\Controllers\AdminControllers\SiteSettingController@firebase')->middleware('view_general_setting');
  Route::get('admin/webPagesSettings/{id}', 'App\Http\Controllers\AdminControllers\ThemeController@index2');
  Route::post('admin/theme/setting/setPages', 'App\Http\Controllers\AdminControllers\ThemeController@setPages');
  Route::get('admin/topoffer/display', 'App\Http\Controllers\AdminControllers\ThemeController@topoffer');
  Route::post('admin/topoffer/update', 'App\Http\Controllers\AdminControllers\ThemeController@updateTopOffer');
  Route::get('admin/sliders', 'App\Http\Controllers\AdminControllers\AdminSlidersController@sliders')->middleware('website_routes');
  Route::get('admin/editslide/{id}', 'App\Http\Controllers\AdminControllers\AdminSlidersController@editslide')->middleware('website_routes');
  Route::post('admin/deleteSlider/', 'App\Http\Controllers\AdminControllers\AdminSlidersController@deleteSlider')->middleware('website_routes');
  Route::get('admin/homebanners', 'App\Http\Controllers\AdminControllers\HomeBannersController@display')->middleware('view_web_setting', 'website_routes');
  Route::post('admin/homebanners/insert', 'App\Http\Controllers\AdminControllers\HomeBannersController@insert')->middleware('view_web_setting', 'website_routes');
  Route::get('admin/constantbanners', 'App\Http\Controllers\AdminControllers\AdminConstantController@constantBanners')->middleware('website_routes');
      
  Route::get('admin/menus', 'App\Http\Controllers\AdminControllers\MenusController@menus')->middleware('view_web_setting', 'website_routes');
  Route::get('admin/editmenu/{id}', 'App\Http\Controllers\AdminControllers\MenusController@editmenu')->middleware('edit_web_setting', 'website_routes');
  Route::post('admin/updatemenu', 'App\Http\Controllers\AdminControllers\MenusController@updatemenu')->middleware('edit_web_setting', 'website_routes');
  Route::post('admin/deletemenu', 'App\Http\Controllers\AdminControllers\MenusController@deletemenu')->middleware('edit_web_setting', 'website_routes');
  Route::get('admin/webpages', 'App\Http\Controllers\AdminControllers\PagesController@webpages')->middleware('view_web_setting', 'website_routes');
  Route::get('admin/editwebpage/{id}', 'App\Http\Controllers\AdminControllers\PagesController@editwebpage')->middleware('edit_web_setting', 'website_routes');
  Route::post('admin/updatewebpage', 'App\Http\Controllers\AdminControllers\PagesController@updatewebpage')->middleware('edit_web_setting', 'website_routes');
  Route::get('admin/seo', 'App\Http\Controllers\AdminControllers\SiteSettingController@seo')->middleware('view_web_setting', 'website_routes');
  Route::get('admin/customstyle', 'App\Http\Controllers\AdminControllers\SiteSettingController@customstyle')->middleware('view_web_setting', 'website_routes');
  Route::get('admin/newsletter', 'App\Http\Controllers\AdminControllers\SiteSettingController@newsletter')->middleware('view_web_setting', 'website_routes');
  Route::get('admin/instafeed', 'App\Http\Controllers\AdminControllers\SiteSettingController@instafeed')->middleware('view_web_setting', 'website_routes');
  Route::get('admin/websettings', 'App\Http\Controllers\AdminControllers\SiteSettingController@webSettings')->middleware('view_web_setting', 'website_routes');
  Route::get('admin/banners', 'App\Http\Controllers\AdminControllers\BannersController@banners')->middleware('view_app_setting');
  Route::get('admin/banners/edit/{id}', 'App\Http\Controllers\AdminControllers\BannersController@editbanner')->middleware('edit_app_setting');
  Route::post('admin/banners/update', 'App\Http\Controllers\AdminControllers\BannersController@updateBanner')->middleware('edit_app_setting');
  Route::post('/admin/banners/delete', 'BannersController@deleteBanner')->middleware('edit_app_setting');
     
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

Route::get('/maintance','App\Http\Controllers\web\IndexController@maintance');
Route::get('/edit/{id}', 'VendorsController@edit')->middleware('edit_customer');
      
// Route::group(['namespace' => 'web','middleware' => ['installer']], function () {
Route::get('/login', 'App\Http\Controllers\web\CustomersController@login');
Route::post('/process-login', 'App\Http\Controllers\web\CustomersController@processLogin');


Route::post('/confirmVendor', 'CustomersController@confirmVendor');

Route::get('/logout', 'App\Http\Controllers\web\CustomersController@logout')->middleware('Customer');

// });

Route::get('/vendorForm', 'App\Http\Controllers\web\CustomersController@vendor');





    Route::get('about', function () {
        return view('aboutus');
    });


    Route::get('terms', function () {
        return view('terms');
    });


		Route::get('pay', 'App\Http\Controllers\web\RazorpayController@pay')->name('pay');
    	Route::post('/paytm-callback', 'PaytmController@paytmCallback');
		Route::get('/store_paytm', 'App\Http\Controllers\web\PaytmController@store');
		// route for make payment request using post method
		Route::post('dopayment', 'RazorpayController@dopayment')->name('dopayment');

		Route::get('/','App\Http\Controllers\web\IndexController@index');
		Route::post('/change_language', 'WebSettingController@changeLanguage');
		Route::post('/change_currency', 'WebSettingController@changeCurrency');
		Route::post('/addToCart', 'App\Http\Controllers\web\CartController@addToCart');
		Route::post('/addToCartFixed', 'App\Http\Controllers\web\CartController@addToCartFixed');
		Route::post('/addToCartResponsive', 'App\Http\Controllers\web\CartController@addToCartResponsive');
		
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
		
		Route::get('/setcookie', 'App\Http\Controllers\web\IndexController@setcookie');
		Route::get('/newsletter', 'App\Http\Controllers\web\IndexController@newsletter');

		Route::get('/subscribeMail', 'App\Http\Controllers\web\IndexController@subscribeMail');

		
		Route::get('/media/add', 'App\Http\Controllers\web\MediaController@add');
		Route::get('/detail/{id}', 'App\Http\Controllers\web\MediaController@detailimage');
		Route::post('/uploadimage', 'MediaController@fileUpload');
		Route::post('/regenerateimage', 'MediaController@regenerateimage');

		Route::get('/addProduct', 'App\Http\Controllers\web\ProductsController@addProduct');		
		Route::post('/saveinfo', 'ProductsController@saveinfo');
		Route::post('/savepics', 'ProductsController@savepics');
		Route::post('/postProduct', 'ProductsController@postProduct');

		Route::get('/getmyproduct', 'App\Http\Controllers\web\ProductsController@getMyProduct');
		Route::get('/editproduct/{id}', 'ProductsController@editProduct');
		Route::post('/updateproduct', 'ProductsController@updateProduct');
		Route::post('/deleteproduct', 'ProductsController@deleteProduct');
	// });

	Route::get('/test', 'Web\IndexController@test1');


	Route::view('/header', 'web.headers.header');

	Route::get('brand', 'App\Http\Controllers\BrandController@showbrands');
	Route::get('/new1', 'App\Http\Controllers\web\NewsController@category');

	//admin
	
	Route::view('/index','index');
	Route::view('/about','about');
	Route::view('/termscondition','termscondition');

	Route::view('/here','here');
	
	Route::view('/404','404');
	
	Route::view('/newlogin','newlogin');
	
Route::get('locale/{locale}',function($locale)
{
Session::put('locale',$locale);
return redirect()->back();


});