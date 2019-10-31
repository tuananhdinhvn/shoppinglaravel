<?php

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
Route::get('welcome', function () {
    return view('react');
});

Route::group(['namespace' => 'FrontEnd', 'middleware' => 'locale'], function () {
    Route::get('/', 'IndexController@getIndex');

    // Ngôn ngữ
    Route::get('change-language/{language}', 'IndexController@changeLanguage')->name('user.change-language');

    // Giỏ hàng
    Route::group(['prefix' => 'cart'], function () {
        Route::get('add/{id}', 'CartController@addCart');

        Route::get('delete/{rowid}', 'CartController@deleteCart');

        Route::get('show', 'CartController@showCart');

        Route::get('checkcart', 'CartController@checkCart');

        Route::get('update', 'CartController@updateCart');

    });

    // Thanh toán
    Route::group(['prefix' => 'payment'], function () {
        Route::get('/', 'PaymentController@getPayment');
        Route::post('/', 'PaymentController@saveOrder');
    });

    // Đăng ký
    Route::group(['prefix' => 'register'], function () {
        Route::get('/', 'RegisterController@getRegister');
        Route::post('/', 'RegisterController@postRegister');

        Route::get('confirm/{code}', 'RegisterController@confirmUser');
    });

    // Đăng nhập
    Route::group(['prefix' => 'login'], function () {
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });

    // Lấy lại mật khẩu
    Route::get('forgot-password', 'LoginController@forgotPassword');
    Route::get('change-password/{code}', 'LoginController@rebornPassword');
    Route::post('change-password/{code}', 'LoginController@postrebornPassword');

    // Thông tin người dùng
    Route::get('account', 'AccountUserController@getAccount')->middleware('AssetAccount');

    Route::get('logout', 'LogoutController@logout');
    
    // Tìm kiếm
    Route::get('search', 'SearchController@getSearch');

    // Sản phẩm
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'ProductController@getProduct');
        Route::get('{slug}/{id}', 'ProductController@getProductDetail');
    });

    // Danh mục sản phẩm
    Route::get('productcat/{slug}/{id}', 'ProductController@getProductCategory');

    // Blog
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'BlogController@getBlog');
        Route::get('{slug}/{id}', 'BlogController@getBlogDetail');
    });

    // Danh mục Blog
    Route::get('blogcat/{slug}/{id}', 'BlogController@getBlogCategory');

    // Trang liên hệ
    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', 'ContactController@getContact');

        Route::get('send-mail', 'ContactController@sendMail');
    });
});


//Admin
Route::group(['namespace' => 'admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
        //Login - Logout
        Route::get('/', function () {
            return redirect('admin/login');
        });

        Route::get('login', 'AdminBaseController@getLogin')->middleware('CheckLogin');
        Route::post('login', 'AdminBaseController@postLogin');

        Route::get('logout', 'AdminBaseController@getLogout');

        //Dashboard
        Route::get('dashboard', 'DashboardController@getDashboard')->middleware('CheckLogout');

        //Order
        Route::group(['prefix' => 'order'], function () {
            Route::get('/', 'OrderController@getOrder')->middleware('CheckLogout');

            Route::get('detail/{id}', 'OrderController@getOrderDetail')->middleware('CheckLogout');
            Route::post('detail/{id}', 'OrderController@updateOrder');

            Route::get('delete/{id}', 'OrderController@deleteOrder')->middleware('CheckLogout');
        });

        //Customer
        Route::group(['prefix' => 'customer'], function () {
            Route::get('/', 'CustomerController@getCustomer')->middleware('CheckLogout');
            Route::get('detail/{id}', 'CustomerController@getCustomerDetail')->middleware('CheckLogout');
            Route::post('detail/{id}', 'CustomerController@postCustomerDetail');
        });

        //Product Category
        Route::group(['prefix' => 'productcat'], function () {
            Route::get('/', 'ProductCategoryController@getProductCat')->middleware('CheckLogout');

            Route::get('add', 'ProductCategoryController@addProductCat')->middleware('CheckLogout');
            Route::post('add', 'ProductCategoryController@postaddProductCat');

            Route::get('edit/{id}', 'ProductCategoryController@editProductCat')->middleware('CheckLogout');
            Route::post('edit/{id}', 'ProductCategoryController@posteditProductCat');

            Route::get('delete/{id}', 'ProductCategoryController@deleteProductCat')->middleware('CheckLogout');
        });

        //Product
        Route::group(['prefix' => 'product'], function () {
            Route::get('/', 'ProductController@getProduct')->middleware('CheckLogout');

            Route::get('add', 'ProductController@addProduct')->middleware('CheckLogout');
            Route::post('add', 'ProductController@postaddProduct');
            
            Route::get('detail/{id}', 'ProductController@getProductDetail')->middleware('CheckLogout');
            Route::post('detail/{id}', 'ProductController@postProductDetail');

            Route::get('delete/{id}', 'ProductController@deleteProduct')->middleware('CheckLogout');

            Route::get('show/{id}', 'ProductController@checkshowProduct')->middleware('CheckLogout');
        });


        //Template
        Route::group(['namespace' => 'layout'], function () {
            Route::group(['prefix' => 'layout'], function () {
                Route::get('homepage', 'LayoutHomepageController@getLayoutHomepage');
                Route::post('homepage', 'LayoutHomepageController@postLayoutHomepage');

                Route::get('product', 'LayoutProductController@getLayoutProduct');
                Route::post('product', 'LayoutProductController@postLayoutProduct');

                Route::get('contact', 'LayoutContactController@getLayoutContact');
                Route::post('contact', 'LayoutContactController@postLayoutContact');
                
                Route::get('footer', 'LayoutFooterController@getLayoutFooter');
                Route::post('footer', 'LayoutFooterController@postLayoutFooter');
            });
        });

        //Blog Category
        Route::group(['prefix' => 'blogcat'], function () {
            Route::get('/', 'BlogCategoryController@getBlogCat')->middleware('CheckLogout');

            Route::get('add', 'BlogCategoryController@addBlogCat')->middleware('CheckLogout');
            Route::post('add', 'BlogCategoryController@postaddBlogCat');

            Route::get('edit/{id}', 'BlogCategoryController@editBlogCat')->middleware('CheckLogout');
            Route::post('edit/{id}', 'BlogCategoryController@posteditBlogCat');

            Route::get('delete/{id}', 'BlogCategoryController@deleteBlogCat')->middleware('CheckLogout');

            
        });

        //Blog
        Route::group(['prefix' => 'blog'], function () {
            Route::get('/', 'BlogController@getBlog')->middleware('CheckLogout');
            
            Route::get('add', 'BlogController@addBlog')->middleware('CheckLogout');
            Route::post('add', 'BlogController@postaddBlog');

            Route::get('edit/{id}', 'BlogController@editBlog')->middleware('CheckLogout');
            Route::post('edit/{id}', 'BlogController@posteditBlog');

            Route::get('delete/{id}', 'BlogController@deleteBlog')->middleware('CheckLogout');

            Route::get('show/{id}', 'BlogController@checkshowBlog')->middleware('CheckLogout');
        });

        //Single page
        Route::group(['prefix' => 'singlepage'], function () {
            Route::get('/', 'SinglePageController@getSinglePage')->middleware('CheckLogout');

            Route::get('add', 'SinglePageController@addSinglePage')->middleware('CheckLogout');
            Route::post('add', 'SinglePageController@postaddSinglePage');

            Route::get('edit/{id}', 'SinglePageController@editSinglePage')->middleware('CheckLogout');
            Route::post('edit/{id}', 'SinglePageController@posteditSinglePage');

            Route::get('delete/{id}', 'SinglePageController@deleteSinglePage')->middleware('CheckLogout');
        });

        //Setting
        Route::get('setting', 'SettingControllerler@getSetting')->middleware('CheckLogout');
        Route::post('setting', 'SettingControllerler@postgetSetting');

        //Decentralize
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', 'DecentralizeController@getUser')->middleware('CheckLogout');

            Route::get('add', 'DecentralizeController@addUser')->middleware('CheckLogout');
            Route::post('add', 'DecentralizeController@postaddUser');

            Route::get('edit/{id}', 'DecentralizeController@editUser')->middleware('CheckLogout');
            Route::post('edit/{id}', 'DecentralizeController@posteditUser');

            Route::get('delete/{id}', 'DecentralizeController@deleteUser')->middleware('CheckLogout');
        });

        //Support
        Route::get('support', 'SupportController@getSuport')->middleware('CheckLogout');
        Route::post('support', 'SupportController@sendMailSupport')->middleware('CheckLogout');

        //Profile
        Route::get('profile', 'ProfileController@getProfile')->middleware('CheckLogout');
        Route::post('profile', 'ProfileController@postProfile');
    });
});