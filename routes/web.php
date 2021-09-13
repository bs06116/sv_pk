<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::post('/search_home', 'SellerController@search_home')->name('search_home');
Route::post('/lease_search', 'SellerController@lease')->name('lease_search');

//middleware all routes
Route::group(['middleware' => 'auth'], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('logout', 'AuthController@logout')->name('user.logout');

    Route::get('password', 'ProfileController@changePassword')->name('password');
    Route::post('password', 'ProfileController@changePasswordUpdate')->name('password');

    Route::get('block/{id}/user', 'UserController@block')->name('block');
    Route::get('unblock/{id}/user', 'UserController@unblock')->name('unblock');

    Route::get('unfeature/{id}', 'SellerController@unfeature')->name('unfeature');
    Route::get('feature/{id}', 'SellerController@feature')->name('feature');
});
//////////end middleware




////////////////////////admin
Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth', 'App\Http\Middleware\Admin']], function () {
    Route::get('/viewagent', function () {
        return view('admin.viewagent');
    });
    Route::view('/addagent', 'admin.addagent')->name('addagent');
    Route::view('/properties', 'admin.properties')->name('properties');
    //      Route::get('admin/property', function () {
    //     return view('property');
    // });
    Route::view('agentproperty', 'admin.agentproperty')->name('agentproperty');
    Route::get('unfeatures/{id}', 'UserController@unfeature')->name('unfeatures');
    Route::get('features/{id}', 'UserController@feature')->name('features');
    ///Application Form Controller//////
    Route::get('application-from-request', 'ApplicationFormController@index')->name('application-from-request');

});
// .......................//agent  middleware
Route::group(['middleware' => ['auth', 'App\Http\Middleware\Agent']], function () {
    //   Route::view('addagentproperty', 'agent.addagentproperty')->name('addagentproperty');
    Route::get('addagentproperty', 'SellerController@citys')->name('addagentproperty');
    Route::post('addagentproperty', 'SellerController@fetch')->name('addagentproperty');
    Route::post('/ads', 'AdsController@store')->name('ads');
    Route::get('/ads', function () {
        return view('agent.ads');
    });
    Route::view('viewagentproperty', 'agent.viewagentproperty')->name('viewagentproperty');
});

/////////////////////////////seller middleware
Route::group(['middleware' => ['auth', 'App\Http\Middleware\Seller']], function () {
    // Route::view('/addproperty', 'seller.addproperty')->name('addproperty');
    Route::get('addproperty', 'SellerController@cityseller')->name('addproperty');
    Route::post('addproperty', 'SellerController@fetchseller')->name('addproperty');
    Route::view('viewproperty', 'seller.viewproperty')->name('viewproperty');
});
Route::resource('user', 'UserController');
Route::get('editproperty/{seller}', 'SellerController@selleredit')->name('editproperty');
Route::resource('agent', 'AgentController');
Route::resource('buyer', 'BuyerController');
Route::resource('seller', 'SellerController');
Route::resource('property', 'PropertyController');
Route::get('admin/profile', 'UserController@profileedit')->name('profile');

// Route::view('addproperty', 'seller.addproperty')->name('addproperty');

//auth list route
Route::post('login', 'AuthController@login')->name('user.login');
// Route::view('login', 'auth.login')->name('login');
Route::get('login', 'AuthController@index')->name('login');

Route::view('register', 'auth.register')->name('register');
Route::view('customer', 'auth.customer')->name('customer');
Route::view('forgot', 'auth.forgot')->name('forgot');
// Route::get('mail','ForgotController@sendMail')->name('mail');
Route::post('user/forgot', 'ForgotController@sendVerification')->name('userforgot');
Route::post('reset/password', 'ForgotController@resetPassword')->name('resetuser');
Route::get('city/{city}', 'SellerController@city')->name('city');
//front page route list  menu bar
Route::get('/', function () {
    return view('Home');
});
Route::get('/property-list', function () {
    return view('property-list');
});
//property

//rent
Route::get('/property-rent/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('type', '=', 'rent')->orderBy('price', 'asc')->paginate(20);
        return view('property.property-rent', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('type', '=', 'rent')->orderBy('price', 'DESC')->paginate(20);
        return view('property.property-rent', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('type', '=', 'rent')->orderBy('created_at', 'DESC')->paginate(20);
        return view('property.property-rent', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('type', '=', 'rent')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('property.property-rent', compact('cities', 'filter'));
})->name('property-rent');

//sale
Route::get('/property-sale/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('type', '=', 'sale')->orderBy('price', 'asc')->paginate(20);
        return view('property.property-sale', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('type', '=', 'sale')->orderBy('price', 'DESC')->paginate(20);
        return view('property.property-sale', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('type', '=', 'sale')->orderBy('created_at', 'DESC')->paginate(20);
        return view('property.property-sale', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('type', '=', 'sale')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('property.property-sale', compact('cities', 'filter'));
})->name('property-sale');
//land


Route::get('/property-land/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('type', '=', 'land')->orderBy('price', 'asc')->paginate(20);
        return view('property.property-land', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('type', '=', 'land')->orderBy('price', 'DESC')->paginate(20);
        return view('property.property-land', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('type', '=', 'land')->orderBy('created_at', 'DESC')->paginate(20);
        return view('property.property-land', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('type', '=', 'land')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('property.property-land', compact('cities', 'filter'));
})->name('property-land');

//commercial

Route::get('/property-commercial/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('property', '=', 'commercial')->orderBy('price', 'asc')->paginate(20);
        return view('property.property-commercial', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('property', '=', 'commercial')->orderBy('price', 'DESC')->paginate(20);
        return view('property.property-commercial', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('property', '=', 'commercial')->orderBy('created_at', 'DESC')->paginate(20);
        return view('property.property-commercial', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('property', '=', 'commercial')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('property.property-commercial', compact('cities', 'filter'));
})->name('property-commercial');



//commercial

//     Route::get('/property-commercial/{filter?}', function($filter = null){
// if (isset($filter) && $filter == 'lowest-price'){
//     $cities=App\Models\Seller::where('type','=','commercial')->orderBy('price','asc')->get();
//     return view('property.property-commercial',compact('cities','filter'));
// }elseif(isset($filter) && $filter == 'highest-price'){
//     $cities=App\Models\Seller::where('type','=','commercial')->orderBy('price','DESC')->get();
//     return view('property.property-commercial',compact('cities','filter'));
// }elseif(isset($filter) && $filter == 'most-recent'){
//     $cities=App\Models\Seller::where('type','=','commercial')->orderBy('created_at','DESC')->get();
//     return view('property.property-commercial',compact('cities','filter'));
// }else{
//     $cities=App\Models\Seller::where('type','=','commercial')->latest()->get();
// }
// $filter="most-recent";
// return view('property.property-commercial',compact('cities','filter'));})->name('property-commercial');



//lease


Route::get('/property-lease/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('type', '=', 'lease')->orderBy('price', 'asc')->paginate(20);
        return view('property.property-lease', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('type', '=', 'lease')->orderBy('price', 'DESC')->paginate(20);
        return view('property.property-lease', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('type', '=', 'lease')->orderBy('created_at', 'DESC')->paginate(20);
        return view('property.property-lease', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('type', '=', 'lease')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('property.property-lease', compact('cities', 'filter'));
})->name('property-lease');

// valuation
Route::view('/property-valuation', 'property.property-valuation')->name('property-valuation');
//footer pages
Route::view('/about', 'about')->name('about');
Route::view('/term', 'footer.term')->name('term');
Route::view('/faq', 'footer.faq')->name('faq');
Route::view('/privacy', 'footer.privacy')->name('privacy');
//fornt saler search


Route::get('/property-search', 'SellerController@search')->name('property-search');
Route::post('/property-search', 'SellerController@search')->name('property-search');
//front rent search
Route::get('/property-search-rent', 'SellerController@rent')->name('property-search-rent');
Route::post('/property-search-rent', 'SellerController@rent')->name('property-search-rent');
// city
Route::get('/property-search-cits', 'SellerController@cits')->name('property-search-cits');
Route::post('/property-search-cits', 'SellerController@cits')->name('property-search-cits');
//list search
Route::get('/search', 'SearchController@search')->name('search');
Route::post('/search', 'SellerController@search')->name('search');
Route::get('/allproperty/{user_id}', 'SellerController@allproperty');

Route::get('/property-detail/{id}', function () {
    return view('property-details');
});
// Route::get('/password', function () {
//     return view('admin.password');
// });
//contact us
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/application_form', function () {
    return view('application_form');
});
Route::post('/application_form_submit', 'UserController@ApplicationStore')->name('application-form-submit');
// Route::post('ads','AdsController@index');
//controller
Route::resource('contact', 'ContactController');
//most popular places


Route::get('/islamabad/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Islamabad')->orderBy('price', 'asc')->paginate(20);
        return view('places.islamabad', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Islamabad')->orderBy('price', 'DESC')->paginate(20);
        return view('places.islamabad', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Islamabad')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.islamabad', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Islamabad')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.islamabad', compact('cities', 'filter'));
})->name('islamabad');


// Route::view('/Bahawalpur', 'places.Bahawalpur')->name('Bahawalpur');

Route::get('/Bahawalpur/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Bahawalpur')->orderBy('price', 'asc')->paginate(20);
        return view('places.Bahawalpur', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Bahawalpur')->orderBy('price', 'DESC')->paginate(20);
        return view('places.Bahawalpur', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Bahawalpur')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.Bahawalpur', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Bahawalpur')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.Bahawalpur', compact('cities', 'filter'));
})->name('Bahawalpur');


// Route::view('/Chakwal', 'places.Chakwal')->name('Chakwal');


Route::get('/Chakwal/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Chakwal')->orderBy('price', 'asc')->paginate(20);
        return view('places.Chakwal', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Chakwal')->orderBy('price', 'DESC')->paginate(20);
        return view('places.Chakwal', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Chakwal')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.Chakwal', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Chakwal')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.Chakwal', compact('cities', 'filter'));
})->name('Chakwal');

// Route::view('/Gawadar', 'places.Gawadar')->name('Gawadar');


Route::get('/Gawadar/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Gawadar')->orderBy('price', 'asc')->paginate(20);
        return view('places.Gawadar', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Gawadar')->orderBy('price', 'DESC')->paginate(20);
        return view('places.Gawadar', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Gawadar')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.Gawadar', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Gawadar')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.Gawadar', compact('cities', 'filter'));
})->name('Gawadar');



// Route::view('/Gujranwala', 'places.Gujranwala')->name('Gujranwala');

Route::get('/Gujranwala/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Gujranwala')->orderBy('price', 'asc')->paginate(20);
        return view('places.Gujranwala', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Gujranwala')->orderBy('price', 'DESC')->paginate(20);
        return view('places.Gujranwala', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Gujranwala')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.Gujranwala', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Gujranwala')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.Gujranwala', compact('cities', 'filter'));
})->name('Gujranwala');


// Route::view('/karachi', 'places.karachi')->name('karachi');

Route::get('/karachi/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'karachi')->orderBy('price', 'asc')->paginate(20);
        return view('places.karachi', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'karachi')->orderBy('price', 'DESC')->paginate(20);
        return view('places.karachi', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'karachi')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.karachi', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'karachi')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.karachi', compact('cities', 'filter'));
})->name('karachi');


// Route::view('/lahore', 'places.lahore')->name('lahore');


Route::get('/lahore/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'lahore')->orderBy('price', 'asc')->paginate(20);
        return view('places.lahore', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'lahore')->orderBy('price', 'DESC')->paginate(20);
        return view('places.lahore', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'lahore')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.lahore', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'lahore')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.lahore', compact('cities', 'filter'));
})->name('lahore');

// Route::view('/Multan', 'places.Multan')->name('Multan');

Route::get('/Multan/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Multan')->orderBy('price', 'asc')->paginate(20);
        return view('places.Multan', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Multan')->orderBy('price', 'DESC')->paginate(20);
        return view('places.Multan', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Multan')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.Multan', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Multan')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.Multan', compact('cities', 'filter'));
})->name('Multan');


// Route::view('/Peshawar', 'places.Peshawar')->name('Peshawar');


Route::get('/Peshawar/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Peshawar')->orderBy('price', 'asc')->paginate(20);
        return view('places.Peshawar', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Peshawar')->orderBy('price', 'DESC')->paginate(20);
        return view('places.Peshawar', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Peshawar')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.Peshawar', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Peshawar')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.Peshawar', compact('cities', 'filter'));
})->name('Peshawar');


// Route::view('/Quetta', 'places.Quetta')->name('Quetta');

Route::get('/Quetta/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Quetta')->orderBy('price', 'asc')->paginate(20);
        return view('places.Quetta', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Quetta')->orderBy('price', 'DESC')->paginate(20);
        return view('places.Quetta', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Quetta')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.Quetta', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Quetta')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.Quetta', compact('cities', 'filter'));
})->name('Quetta');

// Route::view('/Sialkot', 'places.Sialkot')->name('Sialkot');


Route::get('/Sialkot/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Sialkot')->orderBy('price', 'asc')->paginate(20);
        return view('places.Sialkot', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Sialkot')->orderBy('price', 'DESC')->paginate(20);
        return view('places.Sialkot', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Sialkot')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.Sialkot', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Sialkot')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.Sialkot', compact('cities', 'filter'));
})->name('Sialkot');


// Route::view('/Jhelum', 'places.Jhelum')->name('Jhelum');


Route::get('/Jhelum/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Jhelum')->orderBy('price', 'asc')->paginate(20);
        return view('places.', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Jhelum')->orderBy('price', 'DESC')->paginate(20);
        return view('places.Jhelum', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Jhelum')->orderBy('created_at', 'DESC')->paginate(20);
        return view('places.Jhelum', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Jhelum')->latest()->paginate(20);
    }
    $filter = "most-recent";
    return view('places.Jhelum', compact('cities', 'filter'));
})->name('Jhelum');



Route::get('clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    //   system('composer dump-autoload');
    die('Cleared');
});
Route::get('dell_image/{id}', 'SellerController@dell_image')->name('dell_image');

Route::post('auth/register', 'UserController@register')->name('register');
Route::post('filter', 'SellerController@filter')->name('filter');
Route::post('newsletter', 'NewsletterController@store')->name('newsletter');
Route::post('admin/viewagent', 'UserController@registeragent')->name('viewagent');
Route::view('csrf/addagent', 'Csrf.addagent')->name('csrf');
