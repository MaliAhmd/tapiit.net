<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\profileview;
use App\Mail\Logs;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Route;



// ==========================admin Routes============================================================
Route::get('/owner', [AccountController::class, 'loginPage'])->name('adminn.login');
Route::post('/admin/login', [AccountController::class, 'adminauth'])->name('admin.auth');
Route::get('/admin/create/{email}/{password}', [AccountController::class, 'admincreate']);

Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.user');
Route::post('/admin/userdelete', [AdminController::class, 'deleteuser']);
Route::get('/admin/cards', [AdminController::class, 'cardslist'])->name('admin.cardlist');
Route::get('/admin/orders', [AdminController::class, 'orders'])->name('admin.order');
Route::get('/admin/ordershistory', [AdminController::class, 'orderhistory'])->name('admin.history');
Route::get('/admin/reciept/{id}', [AdminController::class, 'reciept']);
Route::get('/admin/pdf/{id}', [AdminController::class, 'generatePDF']);
Route::post('/admin/orderd', [AdminController::class, 'ordersdel'])->name('admin.orderdel');
Route::get('/admin/reviews', [AdminController::class, 'getreviews'])->name('admin.reviewpage');
Route::get('/admin/salenoffer', [AdminController::class, 'salenoffer'])->name('admin.salenoffer');
Route::post('/admin/cardadd', [AdminController::class, 'addcard'])->name('admin.addcard');
Route::post('/admin/cardupdate', [AdminController::class, 'updatecard'])->name('admin.updatecard');
Route::post('/admin/carddel', [AdminController::class, 'deletecard'])->name('admin.deletecard');
Route::post('/admin/createsale', [AdminController::class, 'createsale'])->name('admin.createsale');
Route::post('/admin/saledel', [AdminController::class, 'saledel'])->name('admin.saledel');
Route::post('/admin/offerstatus', [AdminController::class, 'offerstatus'])->name('admin.offerstatus');
Route::post('/admin/offerdel', [AdminController::class, 'offerdel'])->name('admin.offerdel');
Route::post('/getpdf', [AdminController::class, 'getpdf']);
Route::post('/getorderedpdf', [AdminController::class, 'getorderedpdf']);

// -----------------------------------test routes------------------------------------------------------
Route::get('/admin/addoffer/{id}', [AdminController::class, 'addoffer'])->name('admin.addoffer');
Route::post('/admin/createoffer', [AdminController::class, 'createoffer'])->name('admin.createoffer');

Route::get('/admin/addsale/{id}', [AdminController::class, 'addsale'])->name('admin.addsale');
// -----------------------------------test routes------------------------------------------------------

// ==========================admin Routes============================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// =================================varification=====================================================
Route::get('/signup', [AccountController::class, 'signup'])->name('signup');
Route::post('/reg', [AccountController::class, 'register'])->name('reg');
Route::get('/login', [AccountController::class, 'login'])->name('login');
Route::post('/chkpass', [AccountController::class, 'authenticate']);
Route::get('/logout', [AccountController::class, 'logout'])->name('logout');
Route::get('/adlogout', [AccountController::class, 'adminlogout'])->name('admin.logout');


Route::get('/enterotp', [AccountController::class, 'enterotp']);
Route::post('/inactiveUser', [AccountController::class, 'chkotp'])->name('inactiveUser');
Route::get('/dummy', [AccountController::class, 'dummy']);

Route::get('/profile', [AccountController::class, 'Profile'])->name('profile');
Route::get('/onetime', [AccountController::class, 'onetime'])->name('onetime');
Route::get('/onetimefirst', [AccountController::class, 'onetimefirst'])->name('onetimedummy');
Route::get('/updateprofile', [AccountController::class, 'updateprofile'])->name('updateprofile');
Route::post('/addcred', [AccountController::class, 'addcredentials']);
Route::post('/updatecredential', [AccountController::class, 'updatecredentials']);

Route::get('/forgetpassword', [AccountController::class, 'forgetpassword'])->name('forgetpassword');
Route::post('/searchemail', [AccountController::class, 'searchemail'])->name('searchemail');
Route::get('/OTP', [AccountController::class, 'OTP']);
Route::get('/resendotp', [AccountController::class, 'resendotp']);
Route::get('/resendupdateotp', [AccountController::class, 'resendupdateotp']);
Route::post('/check', [AccountController::class, 'frgtotp']);
Route::get('/enterpass', [AccountController::class, 'enterpass']);
Route::post('/changepassword', [AccountController::class, 'changepass']);

Route::get('/passwordpage', [AccountController::class, 'updatep']);
Route::post('/updatepass', [AccountController::class, 'updatePassword'])->name('updatepass');

Route::get('/deletepage', [AccountController::class, 'deletepage']);
Route::post('/delete', [AccountController::class, 'deleteuser']);

Route::get('/auth/google', [GoogleController::class, 'loginWithGoogle']);
Route::any('/auth/google/callback', [GoogleController::class, 'callbackFromGoogle']);
// =================================varification=====================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
// ==================================================================================================
//==========================Customer Routes==========================================================
Route::get('/', [CustomerController::class, 'index'])->name('home');
Route::get('/design_guidelines', [CustomerController::class, 'guidelines'])->name('guidlines');

Route::get('/products', [CustomerController::class, 'products'])->name('products');
Route::get('/product/{id}', [CustomerController::class, 'product'])->name('product');

Route::post('/add2cart', [CustomerController::class, 'add2cart'])->name('add2cart');
Route::get('/cart', [CustomerController::class, 'cart'])->name('cart');
Route::get('/cart/success', [CustomerController::class, 'cartSuccess'])->name('cart.success');
Route::get('/cart/cancel', [CustomerController::class, 'cartCancel'])->name('cart.cancel');

Route::get('/removefromcart/{id}', [CustomerController::class, 'removeFromCart'])->name('removefromcart');
Route::get('/increasecart/{id}', [CustomerController::class, 'incFromCart'])->name('increasecart');
Route::get('/rmitem/{id}', [CustomerController::class, 'removeitem'])->name('rmitem');
Route::get('/order/{total}', [CustomerController::class, 'stripe']);
Route::get('/contact', [CustomerController::class, 'contact'])->name('contact');
Route::get('/contacts', [CustomerController::class, 'contactstore'])->name('storecontact');
Route::get('/layout', [CustomerController::class, 'layouts'])->name('layout');
Route::get('/faq', [CustomerController::class, 'faq'])->name('faq');
Route::get('/how_it_works', [CustomerController::class, 'how_it_works'])->name('how_it_works');
Route::post('/checkout', [CustomerController::class, 'stripe'])->name('checkout');

Route::get('/layouts', [CustomerController::class, 'layouts'])->name('layouts');
Route::post('/preview', [CustomerController::class, 'preview']);
Route::get('/mockpreview/{id}', [CustomerController::class, 'mockpreview']);
// Route::post('/applylayout', [CustomerController::class, 'applylayout']);
Route::post('/setFont', [CustomerController::class, 'setfont']);
Route::get('/selectlayout/{id}', [CustomerController::class, 'selectlayout']);


//==========================Customer Routes==========================================================

Route::get('/nfc', function(){
    return view('nfc');
});

Route::get('/terms_conditions',function(){
   return view('termsAndConditions'); 
});

Route::get('/layout1', function(){
    return view('profileLayout1');
});
// Route::get('/faq', function(){
//     return view('faq');
// });
// Route::get('/how_it_works', function(){
//     return view('how_it_works');
// });

Route::get('tapit', [profileview::class, 'profileview'])->name('profileview');

Route::get('generate-qrc ode', [profileview::class, 'generate'])->name('generate.qrcode');
Route::get('Layouts', [CustomerController::class, 'onetimelayout'])->name('onetimelayout');






use Illuminate\Support\Facades\Mail;


