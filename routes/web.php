<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\CustomersController;
use App\Http\Controllers\web\IndexController;







Route::get('admin/adminlogin', 'App\Http\Controllers\AdminControllers\AdminController@login');
Route::post('admin/checkLogin', 'App\Http\Controllers\AdminControllers\AdminController@checkLogin');

Route::get('admin/dashboard/{reportBase}', 'App\Http\Controllers\AdminControllers\AdminController@dashboard');
Route::get('admin/media/add', 'App\Http\Controllers\AdminControllers\MediaController@add');
Route::get('admin/media/display', 'App\Http\Controllers\AdminControllers\MediaController@display');
Route::get('admin/languages/display', 'App\Http\Controllers\AdminControllers\LanguageController@display');
Route::get('admin/languages/edit/{id}', 'App\Http\Controllers\AdminControllers\LanguageController@edit');
Route::post('/admin/languages/update', 'App\Http\Controllers\AdminControllers\LanguageController@update');
Route::post('admin/languages/delete', 'App\Http\Controllers\AdminControllers\LanguageController@delete');
// Route::get('admin/currencies/display', 'App\Http\Controllers\AdminControllers\CurrencyController@display')->middleware('view_language');
Route::get('admin/currencies/display', 'App\Http\Controllers\AdminControllers\CurrencyController@display');
   
  Route::get('/admin/vendors/requests', 'App\Http\Controllers\AdminControllers\VendorsController@requests');
       
  Route::get('admin/vendors/accept/{id}', 'App\Http\Controllers\AdminControllers\VendorsController@accept');
  Route::get('admin/vendors/display', 'App\Http\Controllers\AdminControllers\VendorsController@display');
  Route::get('admin/vendors/add', 'App\Http\Controllers\AdminControllers\VendorsController@add');
  Route::post('admin/vendors/add', 'App\Http\Controllers\AdminControllers\VendorsController@insert');
  Route::get('/admin/customers/display', 'App\Http\Controllers\AdminControllers\CustomersController@display');
  Route::get('/admin/reviews/display', 'App\Http\Controllers\AdminControllers\ProductController@reviews');
  Route::get('admin/orderstatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@orderstatus');
    
  Route::get('admin/orders/display', 'App\Http\Controllers\AdminControllers\OrdersController@display');
       
  Route::get('admin/countries/display', 'App\Http\Controllers\AdminControllers\CountriesController@index');
  Route::get('/admin/zones/display', 'App\Http\Controllers\AdminControllers\ZonesController@index');
  Route::get('/admin/tax/taxclass/display', 'App\Http\Controllers\AdminControllers\TaxController@taxindex');
  Route::get('/admin/tax/taxrates/display', 'App\Http\Controllers\AdminControllers\TaxController@displaytaxrates');
  Route::get('/admin/coupons/display', 'App\Http\Controllers\AdminControllers\CouponsController@display');
  Route::get('admin/shippingmethods/display', 'App\Http\Controllers\AdminControllers\ShippingMethodsController@display');
         
  Route::get('/admin/paymentmethods/index', 'App\Http\Controllers\AdminControllers\PaymentMethodsController@index');
  Route::get('/admin/newscategories/display', 'App\Http\Controllers\AdminControllers\NewsCategoriesController@display');
  Route::get('/admin/news/display', 'App\Http\Controllers\AdminControllers\NewsController@display');
  Route::get('admin/pushnotification', 'App\Http\Controllers\AdminControllers\SiteSettingController@pushNotification');
  Route::get('/admin/devices/display', 'App\Http\Controllers\AdminControllers\NotificationController@devices');
  Route::get('/admin/devices/notifications/', 'App\Http\Controllers\AdminControllers\NotificationController@notifications');
  Route::get('admin/managements/backup', 'App\Http\Controllers\AdminControllers\ManagementsController@backup');
  Route::get('/admin/managements/import', 'App\Http\Controllers\AdminControllers\ManagementsController@import');
  Route::get('/admin/managements/updater', 'App\Http\Controllers\AdminControllers\ManagementsController@updater');
  Route::get('/admin/admins', 'App\Http\Controllers\AdminControllers\AdminController@admins');
  Route::get('/admin/manageroles', 'App\Http\Controllers\AdminControllers\AdminController@manageroles');
  Route::get('/admin/deliveryboys/display', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@display');
  Route::get('/admin/customers/edit/{id}', 'App\Http\Controllers\AdminControllers\CustomersController@edit');
  Route::get('/admin/media/detail/{id}', 'App\Http\Controllers\AdminControllers\MediaController@detailimage');
  Route::post('/admin/media/regenerateimage', 'App\Http\Controllers\AdminControllers\MediaController@regenerateimage');
 //14/04/2021 
  Route::get('admin/editorderstatus/{id}', 'App\Http\Controllers\AdminControllers\SiteSettingController@editorderstatus');
  Route::post('/admin/orders/updateOrderStatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@updateOrderStatus');
  Route::get('/admin/orders/vieworder/{id}', 'App\Http\Controllers\AdminControllers\OrdersController@vieworder');
  Route::get('admin/orders/invoiceprint/{id}', 'App\Http\Controllers\AdminControllers\OrdersController@invoiceprint');
  Route::post('/admin/orders/updateOrder', 'App\Http\Controllers\AdminControllers\OrdersController@updateOrder');
  Route::post('/admin/orders/deleteOrder', 'App\Http\Controllers\AdminControllers\OrdersController@deleteOrder');
  Route::get('/admin/customers-orders-report', 'App\Http\Controllers\AdminControllers\ReportsController@statsCustomers');
  Route::get('/admin/customer-orders-print', 'App\Http\Controllers\AdminControllers\ReportsController@customerOrdersPrint');
  Route::get('admin/salesreport', 'App\Http\Controllers\AdminControllers\ReportsController@salesreport');
       
  Route::get('admin/couponreport', 'App\Http\Controllers\AdminControllers\ReportsController@couponReport');
  Route::get('admin/couponreport-print', 'App\Http\Controllers\AdminControllers\ReportsController@couponReportPrint');
  Route::get('/admin/countries/edit/{id}', 'App\Http\Controllers\AdminControllers\CountriesController@edit');
  Route::post('/admin/countries/update', 'App\Http\Controllers\AdminControllers\CountriesController@update');
  Route::post('/admin/countries/delete', 'App\Http\Controllers\AdminControllers\CountriesController@delete');
  Route::get('/admin/zones/add', 'App\Http\Controllers\AdminControllers\ZonesController@add');
  Route::post('/admin/zones/add', 'App\Http\Controllers\AdminControllers\ZonesController@insert');
  Route::get('/admin/tax/taxclass/filter', 'App\Http\Controllers\AdminControllers\TaxController@filtertaxclass');
  Route::get('/admin/tax/taxclass/add', 'App\Http\Controllers\AdminControllers\TaxController@addtaxclass');
  Route::post('/admin/tax/taxclass/add', 'App\Http\Controllers\AdminControllers\TaxController@inserttaxclass'); 
  Route::get('/admin/tax/taxrates/filter', 'App\Http\Controllers\AdminControllers\TaxController@filtertaxrates');
  Route::get('/admin/tax/taxrates/add', 'App\Http\Controllers\AdminControllers\TaxController@addtaxrate');
  Route::post('/admin/tax/taxrates/add', 'App\Http\Controllers\AdminControllers\TaxController@inserttaxrate');
  Route::get('/admin/zones/edit/{id}', 'App\Http\Controllers\AdminControllers\ZonesController@edit');
  Route::post('/admin/zones/update', 'App\Http\Controllers\AdminControllers\ZonesController@update');    
  Route::post('/admin/zones/delete', 'App\Http\Controllers\AdminControllers\ZonesController@delete');
  Route::get('/admin/tax/taxclass/edit/{id}', 'App\Http\Controllers\AdminControllers\TaxController@edittaxclass');
  Route::post('/admin/tax/taxclass/update', 'App\Http\Controllers\AdminControllers\TaxController@updatetaxclass');
  Route::get('/admin/tax/taxrates/edit/{id}', 'App\Http\Controllers\AdminControllers\TaxController@edittaxrate');
  Route::post('/admin/tax/taxrates/update', 'App\Http\Controllers\AdminControllers\TaxController@updatetaxrate');
  Route::post('/admin/tax/taxclass/delete', 'App\Http\Controllers\AdminControllers\TaxController@deletetaxclass'); 
  Route::post('/admin/tax/taxrates/delete', 'App\Http\Controllers\AdminControllers\TaxController@deletetaxrate'); 
  Route::get('/admin/coupons/edit/{id}', 'App\Http\Controllers\AdminControllers\CouponsController@edit');
  Route::post('/admin/coupons/update', 'App\Http\Controllers\AdminControllers\CouponsController@update');
  Route::post('/admin/coupons/delete', 'App\Http\Controllers\AdminControllers\CouponsController@delete');
  Route::get('/admin/shippingmethods/detail/{table_name}', 'App\Http\Controllers\AdminControllers\ShippingMethodsController@detail');
  Route::post('/admin/shippingmethods/update', 'App\Http\Controllers\AdminControllers\ShippingMethodsController@update');
  Route::get('/admin/paymentmethods/display/{id}', 'App\Http\Controllers\AdminControllers\PaymentMethodsController@display');
  Route::post('/admin/paymentmethods/update', 'App\Http\Controllers\AdminControllers\PaymentMethodsController@update');
  Route::get('/admin/newscategories/add', 'App\Http\Controllers\AdminControllers\NewsCategoriesController@add');
  Route::post('/admin/newscategories/add', 'App\Http\Controllers\AdminControllers\NewsCategoriesController@insert');
  Route::get('/admin/news/edit/{id}', 'App\Http\Controllers\AdminControllers\NewsController@edit');
  Route::post('admin/news/update', 'App\Http\Controllers\AdminControllers\NewsController@update');
  Route::post('admin/news/delete', 'App\Http\Controllers\AdminControllers\NewsController@delete');
  Route::get('/admin/news/add', 'App\Http\Controllers\AdminControllers\NewsController@add');
  Route::post('/admin/news/add', 'App\Http\Controllers\AdminControllers\NewsController@insert');
  Route::post('/admin/updateSetting', 'App\Http\Controllers\AdminControllers\SiteSettingController@updateSetting');
  Route::get('/admin/setting', 'App\Http\Controllers\AdminControllers\SiteSettingController@setting');
  Route::get('/admin/facebooksettings', 'App\Http\Controllers\AdminControllers\SiteSettingController@facebookSettings');
  Route::get('admin/googlesettings', 'App\Http\Controllers\AdminControllers\SiteSettingController@googleSettings');
  Route::get('admin/alertsetting', 'App\Http\Controllers\AdminControllers\SiteSettingController@alertSetting');
  Route::post('admin/updateAlertSetting', 'App\Http\Controllers\AdminControllers\SiteSettingController@updateAlertSetting');
  Route::get('admin/firebase', 'App\Http\Controllers\AdminControllers\SiteSettingController@firebase');
  Route::get('admin/webPagesSettings/{id}', 'App\Http\Controllers\AdminControllers\ThemeController@index2');
  Route::post('admin/theme/setting/setPages', 'App\Http\Controllers\AdminControllers\ThemeController@setPages');
  Route::get('admin/topoffer/display', 'App\Http\Controllers\AdminControllers\ThemeController@topoffer');
  Route::post('admin/topoffer/update', 'App\Http\Controllers\AdminControllers\ThemeController@updateTopOffer');
  Route::get('admin/sliders', 'App\Http\Controllers\AdminControllers\AdminSlidersController@sliders');
  Route::get('admin/editslide/{id}', 'App\Http\Controllers\AdminControllers\AdminSlidersController@editslide');
  Route::post('admin/deleteSlider/', 'App\Http\Controllers\AdminControllers\AdminSlidersController@deleteSlider');
  Route::get('admin/homebanners', 'App\Http\Controllers\AdminControllers\HomeBannersController@display');
  Route::post('admin/homebanners/insert', 'App\Http\Controllers\AdminControllers\HomeBannersController@insert');
  Route::get('admin/constantbanners', 'App\Http\Controllers\AdminControllers\AdminConstantController@constantBanners');
      
  Route::get('admin/menus', 'App\Http\Controllers\AdminControllers\MenusController@menus');
  Route::get('admin/editmenu/{id}', 'App\Http\Controllers\AdminControllers\MenusController@editmenu');
  Route::post('admin/updatemenu', 'App\Http\Controllers\AdminControllers\MenusController@updatemenu');
  Route::post('admin/deletemenu', 'App\Http\Controllers\AdminControllers\MenusController@deletemenu');
  Route::get('admin/webpages', 'App\Http\Controllers\AdminControllers\PagesController@webpages');
  Route::get('admin/editwebpage/{id}', 'App\Http\Controllers\AdminControllers\PagesController@editwebpage');
  Route::post('admin/updatewebpage', 'App\Http\Controllers\AdminControllers\PagesController@updatewebpage');
  Route::get('admin/seo', 'App\Http\Controllers\AdminControllers\SiteSettingController@seo');
  Route::get('admin/customstyle', 'App\Http\Controllers\AdminControllers\SiteSettingController@customstyle');
  Route::get('admin/newsletter', 'App\Http\Controllers\AdminControllers\SiteSettingController@newsletter');
  Route::get('admin/instafeed', 'App\Http\Controllers\AdminControllers\SiteSettingController@instafeed');
  Route::get('admin/websettings', 'App\Http\Controllers\AdminControllers\SiteSettingController@webSettings');
  Route::get('admin/banners', 'App\Http\Controllers\AdminControllers\BannersController@banners');
  Route::get('admin/banners/edit/{id}', 'App\Http\Controllers\AdminControllers\BannersController@editbanner');
  Route::post('admin/banners/update', 'App\Http\Controllers\AdminControllers\BannersController@updateBanner');
  Route::post('/admin/banners/delete', 'BannersController@deleteBanner');
        Route::get('/admin/products/display', 'App\Http\Controllers\AdminControllers\ProductController@display');
        
          Route::post('admin/webPagesSettings/changestatus', 'App\Http\Controllers\AdminControllers\ThemeController@changestatus');
        Route::post('admin/webPagesSettings/setting/set', 'App\Http\Controllers\AdminControllers\ThemeController@set');
        Route::post('admin/webPagesSettings/reorder', 'App\Http\Controllers\AdminControllers\ThemeController@reorder');
      
       Route::get('admin/generateKey', 'App\Http\Controllers\AdminControllers\SiteSettingController@generateKey');

        Route::get('admin/addaddress/{id}/', 'App\Http\Controllers\AdminControllers\CustomersController@addaddress');
        Route::post('admin/addNewCustomerAddress', 'App\Http\Controllers\AdminControllers\CustomersController@addNewCustomerAddress');
        Route::post('admin/editAddress', 'App\Http\Controllers\AdminControllers\CustomersController@editAddress');
        Route::post('admin/updateAddress', 'App\Http\Controllers\AdminControllers\CustomersController@updateAddress');
        Route::post('admin/deleteAddress', 'App\Http\Controllers\AdminControllers\CustomersController@deleteAddress');
        Route::post('admin/getZones', 'App\Http\Controllers\AdminControllers\AddressController@getzones');
        
                Route::get('admin/addsliderimage', 'App\Http\Controllers\AdminControllers\AdminSlidersController@addsliderimage');
        Route::post('admin/addNewSlide', 'App\Http\Controllers\AdminControllers\AdminSlidersController@addNewSlide');

 Route::post('admin/updateSlide', 'App\Http\Controllers\AdminControllers\AdminSlidersController@updateSlide');
 
 Route::get('admin/addconstantbanner', 'App\Http\Controllers\AdminControllers\AdminConstantController@addconstantBanner');
        Route::post('admin/addNewConstantBanner', 'App\Http\Controllers\AdminControllers\AdminConstantController@addNewconstantBanner');
        Route::get('admin/editconstantbanner/{id}', 'App\Http\Controllers\AdminControllers\AdminConstantController@editconstantbanner');
        Route::post('admin/updateconstantBanner', 'App\Http\Controllers\AdminControllers\AdminConstantController@updateconstantBanner');
        Route::post('admin/deleteconstantBanner/', 'App\Http\Controllers\AdminControllers\AdminConstantController@deleteconstantBanner');

        Route::post('admin/languages/default', 'App\Http\Controllers\AdminControllers\LanguageController@default');
        Route::get('admin/languages/add', 'App\Http\Controllers\AdminControllers\LanguageController@add');
        Route::post('admin/languages/add', 'App\Http\Controllers\AdminControllers\LanguageController@insert');
         Route::get('admin/languages/filter', 'App\Http\Controllers\AdminControllers\LanguageController@filter');
       
       
       
        Route::post('admin/media/updatemediasetting', 'App\Http\Controllers\AdminControllers\MediaController@updatemediasetting');
        Route::post('admin/media/uploadimage', 'App\Http\Controllers\AdminControllers\MediaController@fileUpload');
        Route::post('admin/media/delete', 'App\Http\Controllers\AdminControllers\MediaController@deleteimage');
        
            Route::get('admin/media/refresh', 'App\Http\Controllers\AdminControllers\MediaController@refresh');
            
             Route::get('admin/theme/setting', 'App\Http\Controllers\AdminControllers\ThemeController@index');
        Route::get('admin/theme/setting/{id}', 'App\Http\Controllers\AdminControllers\ThemeController@moveToBanners');
        Route::get('admin/theme/setting/carousals/{id}', 'App\Http\Controllers\AdminControllers\ThemeController@moveToSliders');
        Route::post('admin/theme/setting/set', 'App\Http\Controllers\AdminControllers\ThemeController@set');
        // Route::post('setting/setPages', 'ThemeController@setPages');
        Route::post('admin/theme/setting/updatebanner', 'App\Http\Controllers\AdminControllers\ThemeController@updatebanner');
        Route::post('admin/theme/setting/carousals/updateslider', 'App\Http\Controllers\AdminControllers\ThemeController@updateslider');
        Route::post('admin/theme/setting/addbanner', 'App\Http\Controllers\AdminControllers\ThemeController@addbanner');
        Route::post('admin/theme/reorder', 'App\Http\Controllers\AdminControllers\ThemeController@reorder');
        Route::post('admin/theme/setting/changestatus', 'App\Http\Controllers\AdminControllers\ThemeController@changestatus');
        Route::post('admin/theme/setting/fetchlanguages', 'App\Http\Controllers\AdminControllers\LanguageController@fetchlanguages');
        
        
             Route::get('admin/manufacturers/display', 'App\Http\Controllers\AdminControllers\ManufacturerController@display');
        Route::get('admin/manufacturers/add', 'App\Http\Controllers\AdminControllers\ManufacturerController@add');
        Route::post('admin/manufacturers/add', 'App\Http\Controllers\AdminControllers\ManufacturerController@insert');
        Route::get('admin/manufacturers/edit/{id}', 'App\Http\Controllers\AdminControllers\ManufacturerController@edit');
        Route::post('admin/manufacturers/update', 'App\Http\Controllers\AdminControllers\ManufacturerController@update');
        Route::post('admin/manufacturers/delete', 'App\Http\Controllers\AdminControllers\ManufacturerController@delete');
        Route::get('admin/manufacturers/filter', 'App\Http\Controllers\AdminControllers\ManufacturerController@filter');
        
        
             Route::get('admin/newscategories/edit/{id}', 'App\Http\Controllers\AdminControllers\NewsCategoriesController@edit');
        Route::post('admin/newscategories/update', 'App\Http\Controllers\AdminControllers\NewsCategoriesController@update');
        Route::post('admin/newscategories/delete', 'App\Http\Controllers\AdminControllers\NewsCategoriesController@delete');
        Route::get('admin/newscategories/filter', 'App\Http\Controllers\AdminControllers\NewsCategoriesController@filter');
    
         Route::get('admin/news/filter', 'App\Http\Controllers\AdminControllers\NewsController@filter');




Route::get('/display', 'CategoriesController@display');
        Route::get('admin/categories/add', 'App\Http\Controllers\AdminControllers\CategoriesController@add');
        Route::post('admin/categories/add', 'App\Http\Controllers\AdminControllers\CategoriesController@insert');
        Route::get('admin/categories/edit/{id}', 'App\Http\Controllers\AdminControllers\CategoriesController@edit');
        Route::post('admin/categories/update', 'App\Http\Controllers\AdminControllers\CategoriesController@update');
        Route::post('admin/categories/delete', 'App\Http\Controllers\AdminControllers\CategoriesController@delete');
        Route::get('admin/categories/filter', 'App\Http\Controllers\AdminControllers\CategoriesController@filter');



        Route::get('admin/currencies/add', 'App\Http\Controllers\AdminControllers\CurrencyController@add');
        Route::post('admin/currencies/add', 'App\Http\Controllers\AdminControllers\CurrencyController@insert');
        Route::get('admin/currencies/edit/{id}', 'App\Http\Controllers\AdminControllers\CurrencyController@edit');
        Route::get('admin/currencies/edit/warning/{id}', 'App\Http\Controllers\AdminControllers\CurrencyController@warningedit');
        Route::post('admin/currencies/update', 'App\Http\Controllers\AdminControllers\CurrencyController@update');
        Route::post('admin/currencies/delete', 'App\Http\Controllers\AdminControllers\CurrencyController@delete');
        
        
        
        
        
          Route::get('admin/products/add', 'App\Http\Controllers\AdminControllers\ProductController@add');
        Route::post('admin/products/add', 'App\Http\Controllers\AdminControllers\ProductController@insert');
        Route::get('admin/products/edit/{id}', 'App\Http\Controllers\AdminControllers\ProductController@edit');
        Route::get('admin/products/detail/{id}', 'App\Http\Controllers\AdminControllers\ProductController@detail');
        Route::post('admin/products/update', 'App\Http\Controllers\AdminControllers\ProductController@update');

        Route::post('admin/products/publish', 'App\Http\Controllers\AdminControllers\ProductController@publish');
        Route::post('admin/products/decline', 'App\Http\Controllers\AdminControllers\ProductController@decline');
        Route::post('admin/products/acceptchange', 'App\Http\Controllers\AdminControllers\ProductController@acceptchange');
        Route::post('admin/products/declinechange', 'App\Http\Controllers\AdminControllers\ProductController@declinechange');

        Route::post('admin/products/delete', 'App\Http\Controllers\AdminControllers\ProductController@delete');
        Route::get('admin/products/filter', 'App\Http\Controllers\AdminControllers\ProductController@filter');
            Route::get('inventory/display', 'App\Http\Controllers\AdminControllers\ProductController@addinventoryfromsidebar');
            // Route::post('/addnewstock', 'ProductController@addinventory')->middleware('view_product');
            Route::get('inventory/ajax_min_max/{id}/', 'App\Http\Controllers\AdminControllers\ProductController@ajax_min_max');
            Route::get('inventory/ajax_attr/{id}/', 'App\Http\Controllers\AdminControllers\ProductController@ajax_attr');
            Route::post('inventory/addnewstock', 'App\Http\Controllers\AdminControllers\ProductController@addnewstock');
            Route::post('inventory/addminmax', 'App\Http\Controllers\AdminControllers\ProductController@addminmax');
            Route::get('inventory/addproductimages/{id}/', 'App\Http\Controllers\AdminControllers\ProductController@addproductimages');
            
            
            
             Route::get('images/display/{id}/', 'App\Http\Controllers\AdminControllers\ProductController@displayProductImages');
            Route::get('images/add/{id}/', 'App\Http\Controllers\AdminControllers\ProductController@addProductImages');
            Route::post('images/insertproductimage', 'App\Http\Controllers\AdminControllers\ProductController@insertProductImages');
            Route::get('images/editproductimage/{id}', 'App\Http\Controllers\AdminControllers\ProductController@editProductImages');
            Route::post('images/updateproductimage', 'App\Http\Controllers\AdminControllers\ProductController@updateproductimage');
            Route::post('images/deleteproductimagemodal', 'App\Http\Controllers\AdminControllers\ProductController@deleteproductimagemodal');
            Route::post('images/deleteproductimage', 'App\Http\Controllers\AdminControllers\ProductController@deleteproductimage');
            
            
            
            
             Route::get('attach/attribute/display/{id}', 'App\Http\Controllers\AdminControllers\ProductController@addproductattribute');
            // Route::group(['prefix' => '/default'], function () {
                Route::post('/default/', 'App\Http\Controllers\AdminControllers\ProductController@addnewdefaultattribute');
                Route::post('/default/edit', 'App\Http\Controllers\AdminControllers\ProductController@editdefaultattribute');
                Route::post('/default/update', 'App\Http\Controllers\AdminControllers\ProductController@updatedefaultattribute');
                Route::post('/default/deletedefaultattributemodal', 'App\Http\Controllers\AdminControllers\ProductController@deletedefaultattributemodal');
                Route::post('/default/delete', 'App\Http\Controllers\AdminControllers\ProductController@deletedefaultattribute');
                // Route::group(['prefix' => '/options'], function () {
                    Route::post('/options/add', 'App\Http\Controllers\AdminControllers\ProductController@showoptions');
                    Route::post('/options/edit', 'App\Http\Controllers\AdminControllers\ProductController@editoptionform');
                    Route::post('/options/update', 'App\Http\Controllers\AdminControllers\ProductController@updateoption');
                    Route::post('/options/showdeletemodal', 'App\Http\Controllers\AdminControllers\ProductController@showdeletemodal');
                    Route::post('/options/delete', 'App\Http\Controllers\AdminControllers\ProductController@deleteoption');
                    Route::post('/options/getOptionsValue', 'App\Http\Controllers\AdminControllers\ProductController@getOptionsValue');
                    Route::post('/options/currentstock', 'App\Http\Controllers\AdminControllers\ProductController@currentstock');
    
    
      Route::get('admin/products/attributes/display', 'App\Http\Controllers\AdminControllers\ProductAttributesController@display');
        Route::get('admin/products/attributes/add', 'App\Http\Controllers\AdminControllers\ProductAttributesController@add');
        Route::post('admin/products/attributes/insert', 'App\Http\Controllers\AdminControllers\ProductAttributesController@insert');
        Route::get('admin/products/attributes/edit/{id}', 'App\Http\Controllers\AdminControllers\ProductAttributesController@edit');
        Route::post('admin/products/attributes/update', 'App\Http\Controllers\AdminControllers\ProductAttributesController@update');
        Route::post('admin/products/attributes/delete', 'App\Http\Controllers\AdminControllers\ProductAttributesController@delete');

    
    
    
  Route::get('options/values/display/{id}', 'ProductAttributesController@displayoptionsvalues');
            Route::post('options/values/insert', 'App\Http\Controllers\AdminControllers\ProductAttributesController@insertoptionsvalues');
            Route::get('options/values/edit/{id}', 'App\Http\Controllers\AdminControllers\ProductAttributesController@editoptionsvalues');
            Route::post('options/values/update', 'App\Http\Controllers\AdminControllers\ProductAttributesController@updateoptionsvalues');
            Route::post('options/values/delete', 'App\Http\Controllers\AdminControllers\ProductAttributesController@deleteoptionsvalues');
            Route::post('options/values/addattributevalue', 'App\Http\Controllers\AdminControllers\ProductAttributesController@addattributevalue');
            Route::post('options/values/updateattributevalue', 'App\Http\Controllers\AdminControllers\ProductAttributesController@updateattributevalue');
            Route::post('options/values/checkattributeassociate', 'App\Http\Controllers\AdminControllers\ProductAttributesController@checkattributeassociate');
            Route::post('options/values/checkvalueassociate', 'App\Http\Controllers\AdminControllers\ProductAttributesController@checkvalueassociate');

    
      Route::get('admin/admin/profile', 'App\Http\Controllers\AdminControllers\AdminController@profile');
        Route::post('admin/admin/update', 'App\Http\Controllers\AdminControllers\AdminController@update');
        Route::post('admin/admin/updatepassword', 'App\Http\Controllers\AdminControllers\AdminController@updatepassword');

    
    
      Route::get('admin/reviews/edit/{id}/{status}', 'App\Http\Controllers\AdminControllers\ProductController@editreviews');
    

    
     Route::post('admin/vendors/acceptRequest', 'App\Http\Controllers\AdminControllers\VendorsController@acceptRequest');
        Route::post('admin/vendors/decline', 'App\Http\Controllers\AdminControllers\VendorsController@decline');

     Route::get('admin/vendors/edit/{id}', 'App\Http\Controllers\AdminControllers\VendorsController@edit');
        Route::post('admin/vendors/update', 'App\Http\Controllers\AdminControllers\VendorsController@update');
        Route::post('admin/vendors/delete', 'App\Http\Controllers\AdminControllers\VendorsController@delete');
        Route::get('admin/vendors/filter', 'App\Http\Controllers\AdminControllers\VendorsController@filter');
        //add adddresses against vendors
        Route::get('admin/vendors/address/display/{id}/', 'App\Http\Controllers\AdminControllers\VendorsController@diplayaddress');
        Route::post('admin/vendors/addvendoraddress', 'App\Http\Controllers\AdminControllers\VendorsController@addvendoraddress');
        Route::post('admin/vendors/editaddress', 'App\Http\Controllers\AdminControllers\VendorsController@editaddress');
        Route::post('admin/vendors/updateaddress', 'App\Http\Controllers\AdminControllers\VendorsController@updateaddress');
        Route::post('admin/vendors/deleteAddress', 'App\Http\Controllers\AdminControllers\VendorsController@deleteAddress');
  
     Route::get('admin/customers/add', 'App\Http\Controllers\AdminControllersCustomers\Controller@add');
        // Route::post('/add', 'CustomersController@insert')->middleware('add_customer');
        // Route::get('/edit/{id}', 'CustomersController@edit')->middleware('edit_customer');
        Route::post('admin/customers/update', 'App\Http\Controllers\AdminControllers\CustomersController@update');
        Route::post('admin/customers/delete', 'App\Http\Controllers\AdminControllers\CustomersController@delete');
        Route::get('admin/customers/filter', 'App\Http\Controllers\AdminControllers\CustomersController@filter');
        //add adddresses against customers
        Route::get('admin/customers/address/display/{id}/', 'App\Http\Controllers\AdminControllers\CustomersController@diplayaddress');
        Route::post('admin/customers/addcustomeraddress', 'App\Http\Controllers\AdminControllers\CustomersController@addcustomeraddress');
        Route::post('admin/customers/editaddress', 'App\Http\Controllers\AdminControllers\Customers\Controller@editaddress');
        Route::post('admin/customers/updateaddress', 'App\Http\Controllers\AdminControllers\Customers\CustomersController@updateaddress');
        Route::post('admin/customers/deleteAddress', 'App\Http\Controllers\AdminControllers\Customers\CustomersController@deleteAddress');
   
      Route::get('admin/countries/filter', 'CountriesController@filter')->middleware('view_tax');
        // Route::get('/display', 'CountriesController@index')->middleware('view_tax');
        Route::get('admin/countries/add', 'App\Http\Controllers\AdminControllers\CountriesController@add');
        Route::post('admin/countries/add', 'App\Http\Controllers\AdminControllers\CountriesController@insert');
            Route::get('admin/zones/filter', 'App\Http\Controllers\AdminControllers\ZonesController@filter');

 
 
 
 
 Route::get('admin/shippingmethods/upsShipping', 'App\Http\Controllers\AdminControllers\ShippingMethodsController@upsShipping');
        Route::post('admin/shippingmethods/updateupsshipping', 'App\Http\Controllers\AdminControllers\ShippingMethodsController@updateupsshipping');
        Route::get('admin/shippingmethods/flateRate', 'App\Http\Controllers\AdminControllers\ShippingMethodsController@flateRate');
        Route::post('admin/shippingmethods/updateflaterate', 'App\Http\Controllers\AdminControllers\ShippingMethodsController@updateflaterate');
        Route::post('admin/shippingmethods/defaultShippingMethod', 'App\Http\Controllers\AdminControllers\ShippingMethodsController@defaultShippingMethod');
        // Route::get('/detail/{table_name}', 'ShippingMethodsController@detail')->middleware('edit_shipping');
        // Route::post('/update', 'ShippingMethodsController@update')->middleware('edit_shipping');

        Route::get('admin/shippingmethods/shppingbyweight', 'App\Http\Controllers\AdminControllers\ShippingByWeightController@shppingbyweight');
        Route::post('admin/shippingmethods/updateShppingWeightPrice', 'App\Http\Controllers\AdminControllers\ShippingByWeightController@updateShppingWeightPrice');

  Route::post('admin/paymentmethods/active', 'App\Http\Controllers\AdminControllers\PaymentMethodsController@active');

 
  Route::get('admin/coupons/add', 'App\Http\Controllers\AdminControllers\CouponsController@add');
        Route::post('admin/coupons/insert', 'App\Http\Controllers\AdminControllers\CouponsController@insert');
       
         Route::get('admin/coupons/filter', 'App\Http\Controllers\AdminControllers\CouponsController@filter');





Route::get('admin/devices/viewdevices/{id}', 'App\Http\Controllers\AdminControllers\NotificationController@viewdevices');
        Route::post('admin/devices/notifyUser/', 'App\Http\Controllers\AdminControllers\NotificationController@notifyUser');
        // Route::get('/notifications/', 'NotificationController@notifications')->middleware('view_notification');
        Route::post('admin/devices/sendNotifications/', 'App\Http\Controllers\AdminControllers\NotificationController@sendNotifications');
        Route::post('admin/devices/customerNotification/', 'App\Http\Controllers\AdminControllers\NotificationController@customerNotification');
        Route::post('admin/devices/singleUserNotification/', 'App\Http\Controllers\AdminControllers\NotificationController@singleUserNotification');
        Route::post('admin/devices/deletedevice/', 'App\Http\Controllers\AdminControllers\NotificationController@deletedevice');
   
   
   
    Route::get('admin/devices/', 'App\Http\Controllers\AdminControllers\NotificationController@devices');
        Route::get('admin/devices/viewdevices/{id}', 'App\Http\Controllers\AdminControllers\NotificationController@viewdevices');
        Route::post('admin/devices/notifyUser/', 'App\Http\Controllers\AdminControllers\NotificationController@notifyUser');
        // Route::get('/notifications/', 'NotificationController@notifications')->middleware('view_notification');
        Route::post('admin/devices/sendNotifications/', 'App\Http\Controllers\AdminControllers\NotificationController@sendNotifications');
        Route::post('admin/devices/customerNotification/', 'App\Http\Controllers\AdminControllers\NotificationController@customerNotification');
        Route::post('admin/devices/singleUserNotification/', 'App\Http\Controllers\AdminControllers\NotificationController@singleUserNotification');
        Route::post('admin/devices/deletedevice/', 'App\Http\Controllers\AdminControllers\NotificationController@deletedevice');



 Route::get('/orderstatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@orderstatus');
        Route::get('admin/orders/addorderstatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@addorderstatus');
        Route::post('admin/orders/addNewOrderStatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@addNewOrderStatus');
        Route::get('admin/orders/editorderstatus/{id}', 'App\Http\Controllers\AdminControllers\SiteSettingController@editorderstatus');
        // Route::post('/updateOrderStatus', 'SiteSettingController@updateOrderStatus')->middleware('edit_order');
        Route::post('admin/orders/deleteOrderStatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@deleteOrderStatus');
        Route::post('admin/orders/assignorders', 'App\Http\Controllers\AdminControllers\OrdersController@assignorders');
Route::get('admin/banners/add', 'App\Http\Controllers\AdminControllers\BannersController@addbanner');
        Route::post('admin/banners/insert', 'App\Http\Controllers\AdminControllers\BannersController@addNewBanner');
       

  Route::get('admin/banners/filter', 'App\Http\Controllers\AdminControllers\BannersController@filterbanners');





 Route::get('admin/statsproductspurchased', 'App\Http\Controllers\AdminControllers\ReportsController@statsProductsPurchased');
        Route::get('admin/statsproductsliked', 'App\Http\Controllers\AdminControllers\ReportsController@statsProductsLiked');
        Route::get('admin/outofstock', 'App\Http\Controllers\AdminControllers\ReportsController@outofstock');
        Route::get('admin/outofstockprint', 'App\Http\Controllers\AdminControllers\ReportsController@outofstockprint');
        
        Route::get('admin/lowinstock', 'App\Http\Controllers\AdminControllers\ReportsController@lowinstock');
        

        Route::post('admin/productSaleReport', 'App\Http\Controllers\AdminControllers\ReportsController@productSaleReport');        
        Route::get('admin/driversreport', 'App\Http\Controllers\AdminControllers\ReportsController@driversreport');     
        Route::get('admin/driverreportsdetail/{id}', 'App\Http\Controllers\AdminControllers\ReportsController@driverreportsdetail');
      


  Route::get('admin/inventoryreport', 'App\Http\Controllers\AdminControllers\ReportsController@inventoryreport');
        Route::get('admin/inventoryreportprint', 'App\Http\Controllers\AdminControllers\ReportsController@inventoryreportprint');

        
        Route::get('admin/minstock', 'App\Http\Controllers\AdminControllers\ReportsController@minstock');
        Route::get('admin/minstockprint', 'App\Http\Controllers\AdminControllers\ReportsController@minstockprint');
        
        Route::get('admin/maxstock', 'App\Http\Controllers\AdminControllers\ReportsController@maxstock');
        Route::get('admin/maxstockprint', 'App\Http\Controllers\AdminControllers\ReportsController@maxstockprint');
        
        
         Route::get('admin/pages', 'App\Http\Controllers\AdminControllers\PagesController@pages');
        Route::get('admin/addpage', 'App\Http\Controllers\AdminControllers\PagesController@addpage');
        Route::post('admin/addnewpage', 'App\Http\Controllers\AdminControllers\PagesController@addnewpage');
        Route::get('admin/editpage/{id}', 'App\Http\Controllers\AdminControllers\PagesController@editpage');
        Route::post('admin/updatepage', 'App\Http\Controllers\AdminControllers\PagesController@updatepage');
        Route::get('admin/pageStatus', 'App\Http\Controllers\AdminControllers\PagesController@pageStatus');
        Route::get('admin/filterpages', 'App\Http\Controllers\AdminControllers\PagesController@filterpages');
        //manageAppLabel
        Route::get('admin/listingAppLabels', 'App\Http\Controllers\AdminControllers\AppLabelsController@listingAppLabels');
        Route::get('admin/addappkey', 'App\Http\Controllers\AdminControllers\AppLabelsController@addappkey');
        Route::post('admin/addNewAppLabel', 'App\Http\Controllers\AdminControllers\AppLabelsController@addNewAppLabel');
        Route::get('admin/editAppLabel/{id}', 'App\Http\Controllers\AdminControllers\AppLabelsController@editAppLabel');
        Route::post('admin/updateAppLabel/', 'App\Http\Controllers\AdminControllers\AppLabelsController@updateAppLabel');
        Route::get('admin/applabel', 'App\Http\Controllers\AdminControllers\AppLabelsController@manageAppLabel');

        Route::get('admin/admobSettings', 'App\Http\Controllers\AdminControllers\SiteSettingController@admobSettings');
        Route::get('admin/applicationapi', 'App\Http\Controllers\AdminControllers\SiteSettingController@applicationApi');
        Route::get('admin/appsettings', 'App\Http\Controllers\AdminControllers\SiteSettingController@appSettings');




Route::get('admin/addmenus', 'App\Http\Controllers\AdminControllers\MenusController@addmenus');
        Route::post('admin/addnewmenu', 'App\Http\Controllers\AdminControllers\MenusController@addnewmenu');
        // Route::get('/editmenu/{id}', 'MenusController@editmenu')->middleware('edit_web_setting', 'website_routes');
        // Route::post('/updatemenu', 'MenusController@updatemenu')->middleware('edit_web_setting', 'website_routes');
        Route::get('admin/deletemenu/{id}', 'App\Http\Controllers\AdminControllers\MenusController@deletemenu');
        // Route::post('/deletemenu', 'MenusController@deletemenu')->middleware('edit_web_setting', 'website_routes');
        Route::post('admin/menuposition', 'App\Http\Controllers\AdminControllers\MenusController@menuposition');
        Route::get('admin/catalogmenu', 'App\Http\Controllers\AdminControllers\MenusController@catalogmenu');

Route::get('admin/addwebpage', 'App\Http\Controllers\AdminControllers\PagesController@addwebpage');
        Route::post('admin/addnewwebpage', 'App\Http\Controllers\AdminControllers\PagesController@addnewwebpage');
        
        
        Route::get('admin/pageWebStatus', 'App\Http\Controllers\AdminControllers\PagesController@pageWebStatus');

        Route::get('admin/webthemes', 'App\Http\Controllers\AdminControllers\SiteSettingController@webThemes');
        Route::get('admin/themeSettings', 'App\Http\Controllers\AdminControllers\SiteSettingController@themeSettings');


 Route::post('admin/updateWebTheme', 'App\Http\Controllers\AdminControllers\SiteSettingController@updateWebTheme');
        
        
          Route::get('admin/units', 'App\Http\Controllers\AdminControllers\SiteSettingController@units');
        Route::get('admin/addunit', 'App\Http\Controllers\AdminControllers\SiteSettingController@addunit');
        Route::post('admin/addnewunit', 'App\Http\Controllers\AdminControllers\SiteSettingController@addnewunit');
        Route::get('admin/editunit/{id}', 'App\Http\Controllers\AdminControllers\SiteSettingController@editunit');
        Route::post('admin/updateunit', 'App\Http\Controllers\AdminControllers\SiteSettingController@updateunit');
        Route::post('admin/deleteunit', 'App\Http\Controllers\AdminControllers\SiteSettingController@deleteunit');

        // Route::get('/orderstatus', 'SiteSettingController@orderstatus')->middleware('view_order');
        Route::get('admin/addorderstatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@addorderstatus');
        Route::post('admin/addNewOrderStatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@addNewOrderStatus');
        // Route::get('/editorderstatus/{id}', 'SiteSettingController@editorderstatus')->middleware('edit_product');
        Route::post('admin/updateOrderStatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@updateOrderStatus');
        Route::post('admin/deleteOrderStatus', 'App\Http\Controllers\AdminControllers\SiteSettingController@deleteOrderStatus');

  Route::get('admin/clearcache', 'App\Http\Controllers\AdminControllers\SiteSettingController@clearcache');
      
 Route::get('admin/loginsetting', 'App\Http\Controllers\AdminControllers\SiteSettingController@loginsetting');



Route::get('admin/addadmins', 'App\Http\Controllers\AdminControllers\AdminController@addadmins');
        Route::post('admin/addnewadmin', 'App\Http\Controllers\AdminControllers\AdminController@addnewadmin');
        Route::get('admin/editadmin/{id}', 'App\Http\Controllers\AdminControllers\AdminController@editadmin');
        Route::post('admin/updateadmin', 'App\Http\Controllers\AdminControllers\AdminController@updateadmin');
        Route::post('admin/deleteadmin', 'App\Http\Controllers\AdminControllers\AdminController@deleteadmin');


 Route::get('status/display', 'App\Http\Controllers\AdminControllers\DeliveryBoysStatusController@index');
            Route::get('status/add', 'App\Http\Controllers\AdminControllers\DeliveryBoysStatusController@add');
            Route::post('status/addNew', 'App\Http\Controllers\AdminControllers\DeliveryBoysStatusController@addNew');
            Route::get('status/edit/{id}', 'App\Http\Controllers\AdminControllers\DeliveryBoysStatusController@edit');
            Route::post('status/update', 'App\Http\Controllers\AdminControllers\DeliveryBoysStatusController@update');
            Route::post('status/delete', 'App\Http\Controllers\AdminControllers\DeliveryBoysStatusController@delete');
      
 Route::get('admin/addrole/{id}', 'App\Http\Controllers\AdminControllers\AdminController@addrole');
        Route::post('admin/addnewroles', 'App\Http\Controllers\AdminControllers\AdminController@addnewroles');
        Route::get('admin/addadmintype', 'App\Http\Controllers\AdminControllers\AdminController@addadmintype');
        Route::post('admin/addnewtype', 'App\Http\Controllers\AdminControllers\AdminController@addnewtype');
        Route::get('admin/editadmintype/{id}', 'App\Http\Controllers\AdminControllers\AdminController@editadmintype');
        Route::post('admin/updatetype', 'App\Http\Controllers\AdminControllers\AdminController@updatetype');
        Route::post('admin/deleteadmintype', 'App\Http\Controllers\AdminControllers\AdminController@deleteadmintype');

        Route::get('admin/logout', 'App\Http\Controllers\Auth\LoginController@logout');
   




 Route::get('admin/managements/merge', 'App\Http\Controllers\AdminControllers\ManagementsController@merge');
        // Route::get('/backup', 'ManagementsController@backup')->middleware('edit_management');
        Route::post('admin/managements/take_backup', 'App\Http\Controllers\AdminControllers\ManagementsController@take_backup');
        // Route::get('/import', 'ManagementsController@import')->middleware('edit_management');
        Route::post('admin/managements/importdata', 'App\Http\Controllers\AdminControllers\ManagementsController@importdata');
        Route::post('admin/managements/mergecontent', 'App\Http\Controllers\AdminControllers\ManagementsController@mergecontent');
        // Route::get('/updater', 'ManagementsController@updater')->middleware('edit_management');
        Route::post('admin/managements/checkpassword', 'App\Http\Controllers\AdminControllers\ManagementsController@checkpassword');
        Route::post('admin/managements/updatercontent', 'App\Http\Controllers\AdminControllers\ManagementsController@updatercontent');
   



Route::get('admin/deliveryboys/add', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@add');
        Route::post('admin/deliveryboys/add', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@insert');
        Route::get('admin/deliveryboys/edit/{id}', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@edit');
        Route::post('admin/deliveryboys/update', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@update');
        Route::post('admin/deliveryboys/delete', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@delete');
        Route::get('admin/deliveryboys/filter', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@filter');
        Route::get('admin/deliveryboys/eagleview', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@eagleview');
        Route::get('admin/deliveryboys/eagleview/latlong', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@latlong');
        Route::get('admin/deliveryboys/refresh', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@refresh');
        Route::get('admin/deliveryboys/ratings/{id}', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@ratings');
        Route::post('admin/deliveryboys/ratings/delete', 'App\Http\Controllers\AdminControllers\DeliveryBoysController@ratingdelete');
        Route::get('admin/deliveryboys/setting', 'App\Http\Controllers\AdminControllers\SiteSettingController@deliveryboysetting');
      
           Route::get('finance/sattlement/deliveryboy/{deliveryboys_id}', 'App\Http\Controllers\AdminControllers\DeliveryboyFinanceController@deliveryboysattlement');
          Route::get('finance/monthreport/{month}/vendor/{vendor_id}', 'App\Http\Controllers\AdminControllers\DeliveryboyFinanceController@earningsbymonthvendor');
          Route::get('finance/sattlement/orders', 'App\Http\Controllers\AdminControllers\DeliveryboyFinanceController@orders');
      
  Route::get('withdraw/display', 'App\Http\Controllers\AdminControllers\DeliveryBoysWithdrawController@display');
          Route::get('withdraw/paidpopupdetail', 'App\Http\Controllers\AdminControllers\DeliveryBoysWithdrawController@paidpopupdetail');
          Route::get('withdraw/popupdetail', 'App\Http\Controllers\AdminControllers\DeliveryBoysWithdrawController@popupdetail');
          Route::post('withdraw/pay', 'App\Http\Controllers\AdminControllers\DeliveryBoysWithdrawController@pay');
        
   Route::get('floatingcash/display', 'App\Http\Controllers\AdminControllers\DeliveryBoysFloatingCashController@display');
          Route::post('floatingcash/recieved', 'App\Http\Controllers\AdminControllers\DeliveryBoysFloatingCashController@recieved');
       






Route::get('floatingcash/pages', 'App\Http\Controllers\AdminControllers\DeliveryBoysPagesController@pages');
        Route::get('floatingcash/addpage', 'App\Http\Controllers\AdminControllers\DeliveryBoysPagesController@addpage');
        Route::post('floatingcash/addnewpage', 'App\Http\Controllers\AdminControllers\DeliveryBoysPagesController@addnewpage');
        Route::get('floatingcash/editpage/{id}', 'App\Http\Controllers\AdminControllers\DeliveryBoysPagesController@editpage');
        Route::post('floatingcash/updatepage', 'App\Http\Controllers\AdminControllers\DeliveryBoysPagesController@updatepage');
        Route::get('floatingcash/pageStatus', 'App\Http\Controllers\AdminControllers\DeliveryBoysPagesController@pageStatus');
        Route::get('floatingcash/filterpages', 'App\Http\Controllers\AdminControllers\DeliveryBoysPagesController@filterpages');


  
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


Route::post('/confirmVendor', 'App\Http\Controllers\web\CustomersController@confirmVendor');

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
	

	Route::view('/welcome','welcome');
	Route::view('/404','404');
	
	Route::view('/newlogin','newlogin');
	
	Route::get('/locale/{locale}',function($locale)
	{
                Session::put('locale',$locale);
                // print_r( Session::get('locale'));
                // 

	return redirect()->back();
	});
	

	Route::get('vendor',function()
	{

return view('vendor');
	});

Route::get('vendor_list',"App\Http\Controllers\NewController@index");

Route::get('vendor_product/{jspid}',"App\Http\Controllers\NewController@vendorproduct");



Route::get('commingsoon',function()
{

return view('commingsoon');
});
