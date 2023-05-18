<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

// Route::get('/login', 'App\Http\Controllers\AdminController@logout');

// Route::post('/login', 'App\Http\Controllers\AdminController@loginAdmin');

//Front_end

//customer
Route::post('/register', 'App\Http\Controllers\CustomerController@register');
Route::get('/register', 'App\Http\Controllers\CustomerController@index');

//show page
Route::get('/', 'App\Http\Controllers\HomePageController@index')->name('page');

//show category->product
Route::get('/category/{slug}/{id}', [
    'as' => 'category.product',
    'uses' => 'App\Http\Controllers\HomePageController@indexcategory'
]);

//show category
Route::get('/categories', [
    'as' => 'categories',
    'uses' => 'App\Http\Controllers\HomePageController@category'
]);

//show contact us
Route::get('/contact', [
    'as' => 'contact',
    'uses' => 'App\Http\Controllers\HomePageController@contact'
]);

//show detail product
Route::get('/single/{id}', [
    'as' => 'single',
    'uses' => 'App\Http\Controllers\HomePageController@single'
]);

//addtocart
Route::get('/addtocart/{id}', 'App\Http\Controllers\HomePageController@addToCart')->name('addToCart');

//show cart
Route::get('/showcart', 'App\Http\Controllers\HomePageController@showCart')->name('showCart');

//update cart
Route::get('/updatecart', 'App\Http\Controllers\HomePageController@updateCart')->name('updateCart');

//delete cart
Route::get('/deletecart', 'App\Http\Controllers\HomePageController@deleteCart')->name('deleteCart');

//Shipping
Route::get('/shipping', [
    'as' => 'indexship',
    'uses' => 'App\Http\Controllers\HomePageController@indexship'
]);

Route::post('/shipping', [
    'as' => 'shippingItem',
    'uses' => 'App\Http\Controllers\HomePageController@shippingItem'
]);



//Back_end

//admin
Route::get('/login', [
    'as' => 'admin.login',
    'uses' => 'App\Http\Controllers\AdminController@loginAdmin'
]);

Route::post('/login', [
    'as' => 'admin.post-login',
    'uses' => 'App\Http\Controllers\AdminController@postLoginAdmin'
]);

Route::get('/logout', [
    'as' => 'admin.logout',
    'uses' => 'App\Http\Controllers\AdminController@logout'
]);

Route::get('/homeadmin', function () {
    return view('homeadmin');
});

Route::prefix('admin')->group(function () {
    //Danhmucsanpham
    Route::prefix('categories')->group(function () {

        Route::get('/', [
            'as' => 'categories.index',
            'uses' => 'App\Http\Controllers\CategoryController@index',
            'middleware' => 'can:category-list'
        ]);

        Route::get('/create', [
            'as' => 'categories.create',
            'uses' => 'App\Http\Controllers\CategoryController@create',
            'middleware' => 'can:category-add'
        ]);

        Route::post('/store', [
            'as' => 'categories.store',
            'uses' => 'App\Http\Controllers\CategoryController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'categories.edit',
            'uses' => 'App\Http\Controllers\CategoryController@edit',
            'middleware' => 'can:category-edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'categories.update',
            'uses' => 'App\Http\Controllers\CategoryController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'categories.delete',
            'uses' => 'App\Http\Controllers\CategoryController@delete',
            'middleware' => 'can:category-delete'
        ]);
    });

    //Menu
    Route::prefix('menus')->group(function () {

        Route::get('/', [
            'as' => 'menus.index',
            'uses' => 'App\Http\Controllers\MenuController@index',
            'middleware' => 'can:menu-list'

        ]);

        Route::get('/create', [
            'as' => 'menus.create',
            'uses' => 'App\Http\Controllers\MenuController@create',
            'middleware' => 'can:menu-add'
        ]);

        Route::post('/store', [
            'as' => 'menus.store',
            'uses' => 'App\Http\Controllers\MenuController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'menus.edit',
            'uses' => 'App\Http\Controllers\MenuController@edit',
            'middleware' => 'can:menu-edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'menus.update',
            'uses' => 'App\Http\Controllers\MenuController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'menus.delete',
            'uses' => 'App\Http\Controllers\MenuController@delete',
            'middleware' => 'can:menu-delete'
        ]);
    });

    //Product
    Route::prefix('product')->group(function () {

        Route::get('/', [
            'as' => 'product.index',
            'uses' => 'App\Http\Controllers\AdminProductController@index',
            'middleware' => 'can:product-list'
        ]);

        Route::get('/create', [
            'as' => 'product.create',
            'uses' => 'App\Http\Controllers\AdminProductController@create',
            'middleware' => 'can:product-add'
        ]);

        Route::post('/store', [
            'as' => 'product.store',
            'uses' => 'App\Http\Controllers\AdminProductController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'product.edit',
            'uses' => 'App\Http\Controllers\AdminProductController@edit',
            'middleware' => 'can:product-edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'product.update',
            'uses' => 'App\Http\Controllers\AdminProductController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'product.delete',
            'uses' => 'App\Http\Controllers\AdminProductController@delete',
            'middleware' => 'can:product-delete'
        ]);
    });

    //Slider
    Route::prefix('slider')->group(function () {

        Route::get('/', [
            'as' => 'slider.index',
            'uses' => 'App\Http\Controllers\SliderAdminController@index',
            'middleware' => 'can:slider-list'
        ]);

        Route::get('/create', [
            'as' => 'slider.create',
            'uses' => 'App\Http\Controllers\SliderAdminController@create',
            'middleware' => 'can:slider-add'

        ]);

        Route::post('/store', [
            'as' => 'slider.store',
            'uses' => 'App\Http\Controllers\SliderAdminController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'slider.edit',
            'uses' => 'App\Http\Controllers\SliderAdminController@edit',
            'middleware' => 'can:slider-edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'slider.update',
            'uses' => 'App\Http\Controllers\SliderAdminController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'slider.delete',
            'uses' => 'App\Http\Controllers\SliderAdminController@delete',
            'middleware' => 'can:slider-delete'
        ]);
    });

    //Setting
    Route::prefix('setting')->group(function () {

        Route::get('/', [
            'as' => 'setting.index',
            'uses' => 'App\Http\Controllers\SettingAdminController@index',
            'middleware' => 'can:setting-list'
        ]);

        Route::get('/create', [
            'as' => 'setting.create',
            'uses' => 'App\Http\Controllers\SettingAdminController@create'
        ]);

        Route::post('/store', [
            'as' => 'setting.store',
            'uses' => 'App\Http\Controllers\SettingAdminController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'setting.edit',
            'uses' => 'App\Http\Controllers\SettingAdminController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'setting.update',
            'uses' => 'App\Http\Controllers\SettingAdminController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'setting.delete',
            'uses' => 'App\Http\Controllers\SettingAdminController@delete'
        ]);
    });

    //User
    Route::prefix('users')->group(function () {

        Route::get('/', [
            'as' => 'users.index',
            'uses' => 'App\Http\Controllers\UserAdminController@index',
            'middleware' => 'can:user-list'
        ]);

        Route::get('/create', [
            'as' => 'users.create',
            'uses' => 'App\Http\Controllers\UserAdminController@create',
        ]);

        Route::post('/store', [
            'as' => 'users.store',
            'uses' => 'App\Http\Controllers\UserAdminController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'users.edit',
            'uses' => 'App\Http\Controllers\UserAdminController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'users.update',
            'uses' => 'App\Http\Controllers\UserAdminController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'users.delete',
            'uses' => 'App\Http\Controllers\UserAdminController@delete'
        ]);
    });

    //Role
    Route::prefix('roles')->group(function () {

        Route::get('/', [
            'as' => 'roles.index',
            'uses' => 'App\Http\Controllers\RoleAdminController@index',
            'middleware' => 'can:role-list'
        ]);

        Route::get('/create', [
            'as' => 'roles.create',
            'uses' => 'App\Http\Controllers\RoleAdminController@create'
        ]);
        Route::post('/store', [
            'as' => 'roles.store',
            'uses' => 'App\Http\Controllers\RoleAdminController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'roles.edit',
            'uses' => 'App\Http\Controllers\RoleAdminController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'roles.update',
            'uses' => 'App\Http\Controllers\RoleAdminController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'roles.delete',
            'uses' => 'App\Http\Controllers\RoleAdminController@delete',
        ]);
    });

    //Them Permission
    Route::prefix('permissions')->group(function () {

        Route::get('/', [
            'as' => 'permissions.index',
            'uses' => 'App\Http\Controllers\AdminPermissionController@index',
            'middleware' => 'can:permission-list'
        ]);

        Route::get('/create', [
            'as' => 'permissions.create',
            'uses' => 'App\Http\Controllers\AdminPermissionController@createPermissions',
            'middleware' => 'can:role-add'
        ]);

        Route::post('/store', [
            'as' => 'permissions.store',
            'uses' => 'App\Http\Controllers\AdminPermissionController@store'
        ]);

        Route::get('/delete', [
            'as' => 'permissions.delete',
            'uses' => 'App\Http\Controllers\AdminPermissionController@delete'
        ]);
    });

    //Customer
    Route::prefix('customer')->group(function () {

        Route::get('/', [
            'as' => 'customer.show',
            'uses' => 'App\Http\Controllers\CustomerController@show',
        ]);
    });
});
