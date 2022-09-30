<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\GalleryController;
use App\Http\Controllers\Front\CryptocurrencyController;
use App\Http\Controllers\Front\PortfolioController;
use App\Http\Controllers\Front\BlockchainController;
use App\Http\Controllers\Front\CareerController;
use App\Http\Controllers\Front\HireController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\BookappointmentController;
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

// Route::get('/', function () {
//     return view('front.home.index');
// });
Route::get('/',[HomeController::class,'index']);
//##############  about page route ##########################
Route::resource('about',AboutController::class);
Route::get('gallery',[AboutController::class,'gallery']);
Route::get('directormessage',[AboutController::class,'directormessage']);
Route::get('blog',[AboutController::class,'blog']);
//############## end about page route ##########################

///######################### cryptocurrency route #####################
Route::resource('cryptocurrency',CryptocurrencyController::class);
Route::get('cryptocurrency_development',[CryptocurrencyController::class,'cryptocurrency_development']);
Route::get('ico_development',[CryptocurrencyController::class,'ico_development'])->name('ico_development');

Route::get('ieo_development',[CryptocurrencyController::class,'ieo_development'])->name('ieo_development');
Route::get('crypto_ico_marketing_agency',[CryptocurrencyController::class,'crypto_ico_marketing_agency'])->name('crypto_ico_marketing_agency');
Route::get('dapp_development',[CryptocurrencyController::class,'dapp_development'])->name('dapp_development');
Route::get('smart_contract_development',[CryptocurrencyController::class,'smart_contract_development'])->name('smart_contract_development');
Route::get('smart_contract_mlm',[CryptocurrencyController::class,'smart_contract_mlm'])->name('smart_contract_mlm');
Route::get('token_development',[CryptocurrencyController::class,'token_development'])->name('token_development');
Route::get('white_paper_development',[CryptocurrencyController::class,'white_paper_development'])->name('white_paper_development');

///######################### end cryptocurrency route #####################

///######################### protfolio route  ######################
Route::resource('portfolio',PortfolioController::class);

///######################### end protfolio route  ######################

///######################### blockchain route  ######################
Route::resource('blockchain',BlockchainController::class);
///######################### end blockchain route  ######################

///######################### career route  ######################
Route::resource('career',CareerController::class);
Route::get('applicationform',[CareerController::class,'job_applicationform']);
///######################### end career route  ######################

///######################### hire route  ######################
Route::resource('hire',HireController::class);
Route::get('mongo-db-developer-in-india', [HireController::class, 'mongo_developer']);
Route::get('JAVA-development-service-in-india', [HireController::class, 'java_developer']);
Route::get('NET-development-compny-in-india', [HireController::class, 'net_developer']);
Route::get('react-developer-in-india', [HireController::class, 'react_developer']);
Route::get('ui-ux-designing-in-india', [HireController::class, 'ui_developer']);
Route::get('react-native-mobile-application-development-in-india', [HireController::class, 'react_application_developer']);
Route::get('Flutter-mobile-application-development-in-india', [HireController::class, 'flutter_developer']);
Route::get('mern-stack-developer-in-india', [HireController::class, 'mern_stack_developer']);
Route::get('best-digital-marketing-company-in-india', [HireController::class, 'digital_developer']);
Route::get('hybrid-mobile-application-development-in-india', [HireController::class, 'hybrid_application_developer']);
Route::get('native-mobile-application-development-in-india', [HireController::class, 'native_application_developer']);
Route::get('node-developer-in-india ', [HireController::class, 'node_developer']);
///######################### end hire route  ######################

///######################### contact route  ######################
Route::resource('contact',ContactController::class);
Route::post('contactmail',[EmailController::class,'contactmail']);
Route::post('enquirymail',[EmailController::class,'enquirymail']);
Route::post('hireemail',[EmailController::class,'hireemail']);
///######################### end contact route  ######################
Route::resource('bookappointment', BookappointmentController::class);
