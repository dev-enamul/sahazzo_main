<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\GalleryController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(); 
Route::get('/welcome' , [FrontendController::class,'index']);

//home controller routes 
Route::prefix('admin')->group(function () {
    Route::get('/home',[HomeController::class,'index'])->name('home');

    //user controller routes
    Route::get('/profile', [UserController::class,'profile'])->name('profile');
    Route::post('/password/change', [UserController::class,'passwordchange'])->name('passwordchange');
    
    //slider controller routes
    Route::get('/slider', [SliderController::class,'slider'])->name('slider');
    Route::post('/slider/insert', [SliderController::class,'sliderinsert'])->name('sliderinsert');
    Route::get('/slider/edit/{slider_id}', [SliderController::class,'slideredit']);
    Route::post('/slider/edit/{id}', [SliderController::class,'sliderupdate']);
    Route::get('/slider/delete/{slider_id}', [SliderController::class,'sliderdelete']);
    
    //about controller routes
    Route::get('/about',  [AboutController::class,'about'])->name('about');
    Route::post('/about/insert', [AboutController::class,'aboutinsert'])->name('aboutinsert');
    Route::get('/about/edit/{about_id}', [AboutController::class,'aboutedit']);
    Route::post('/about/edit/{id}', [AboutController::class,'aboutupdate']);
    Route::get('/about/delete/{about_id}', [AboutController::class,'aboutdelete']);
    
    //service controller routes
    Route::get('/service',  [ServiceController::class,'service'])->name('service');
    Route::get('/service/create',  [ServiceController::class,'create'])->name('service.create');
    Route::post('/service/insert', [ServiceController::class,'serviceinsert'])->name('serviceinsert');
    Route::get('/service/edit/{service_id}', [ServiceController::class,'serviceedit']);
    Route::post('/service/edit/{id}',[ServiceController::class,'serviceupdate']);
    Route::get('/service/delete/{service_id}', [ServiceController::class,'servicedelete']);

    Route::get('/gallery',  [GalleryController::class,'gallery'])->name('gallery');
    Route::get('/gallery/create',  [GalleryController::class,'create'])->name('gallery.create');
    Route::post('/gallery/insert', [GalleryController::class,'store'])->name('gallery.store');
    Route::get('/gallery/edit/{service_id}', [GalleryController::class,'edit']);
    Route::post('/gallery/edit/{id}',[GalleryController::class,'update']);
    Route::get('/gallery/delete/{service_id}', [GalleryController::class,'delete']);


    
    Route::get('/client', [ClientController::class, 'client'])->name('client');
    Route::post('/client/insert', [ClientController::class, 'clientinsert'])->name('clientinsert');
    Route::get('/client/edit/{client_id}', [ClientController::class, 'clientedit']);
    Route::post('/client/edit/{id}', [ClientController::class, 'clientupdate']);
    Route::get('/client/delete/{client_id}', [ClientController::class, 'clientdelete']);
    
    Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
    Route::get('/portfolio-create',[PortfolioController::class,'create'])->name('portfolio.create');
    Route::post('/portfolio/insert', [PortfolioController::class, 'portfolioinsert'])->name('portfolioinsert');
    Route::get('/portfolio/edit/{portfolio_id}', [PortfolioController::class, 'portfolioedit']);
    Route::post('/portfolio/edit/{id}', [PortfolioController::class, 'portfolioupdate']);
    Route::get('/portfolio/delete/{portfolio_id}', [PortfolioController::class, 'portfoliodelete']);
    
    Route::get('/testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');
    Route::post('/testimonial/insert', [TestimonialController::class, 'testimonialinsert'])->name('testimonialinsert');
    Route::get('/testimonial/edit/{testimonial_id}', [TestimonialController::class, 'testimonialedit']);
    Route::post('/testimonial/edit/{id}', [TestimonialController::class, 'testimonialupdate']);
    Route::get('/testimonial/delete/{testimonial_id}', [TestimonialController::class, 'testimonialdelete']);
    
    Route::get('/team', [TeamController::class, 'team'])->name('team');
    Route::post('/team/insert', [TeamController::class, 'teaminsert'])->name('teaminsert');
    Route::get('/team/edit/{team_id}', [TeamController::class, 'teamedit']);
    Route::post('/team/edit/{id}', [TeamController::class, 'teamupdate']);
    Route::get('/team/delete/{team_id}', [TeamController::class, 'teamdelete']);
    
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::post('/contact/insert', [ContactController::class, 'contactinsert'])->name('contactinsert');
    Route::get('/contact/edit/{contact_id}', [ContactController::class, 'contactedit']);
    Route::post('/contact/edit/{id}', [ContactController::class, 'contactupdate']);
    Route::get('/contact/delete/{contact_id}', [ContactController::class, 'contactdelete']);
});



use App\Livewire\Home;
use App\Livewire\AboutUs;
use App\Livewire\Service;
use App\Livewire\Project;
use App\Livewire\Blog;
use App\Livewire\BlogDetails;
use App\Livewire\Contact;
use App\Livewire\ProjectDetails;
Route::get('/', Home::class);
Route::get('/about-us', AboutUs::class);
Route::get('/service/{slug}', Service::class);
Route::get('/project', Project::class);
Route::get('/project-details/{slug}', ProjectDetails::class);
Route::get('/blog', Blog::class);
Route::get('/blog-details', BlogDetails::class);
Route::get('/contact', Contact::class);