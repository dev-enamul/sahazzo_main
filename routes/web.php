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
use App\Http\Controllers\BlogController; 
use App\Http\Controllers\CVController; 
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\CaracteristicController;
use App\Http\Controllers\QuickLinkController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ServiceCategoryController;

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
    Route::get('/about/edit', [AboutController::class,'aboutedit'])->name('aboutedit');
    Route::post('/about/edit', [AboutController::class,'aboutupdate']);

    // Faq 
    Route::get('/faq', [FaqController::class,'faq'])->name('faq');
    Route::post('/faq/store', [FaqController::class,'store'])->name('faq.store');
    Route::get('/faq/edit/{id}', [FaqController::class,'edit'])->name('faq.edit');
    Route::post('/faq/update/{id}', [FaqController::class,'update'])->name('faq.update');
    Route::get('/faq/delete/{id}', [FaqController::class,'delete'])->name('faq.delete');


    // Counter 
    Route::get('/counter', [CounterController::class,'counter'])->name('counter');
    Route::post('/counter/store', [CounterController::class,'store'])->name('counter.store');
    Route::get('/counter/edit/{id}', [CounterController::class,'edit'])->name('counter.edit');
    Route::post('/counter/update/{id}', [CounterController::class,'update'])->name('counter.update');
    Route::get('/counter/delete/{id}', [CounterController::class,'delete'])->name('counter.delete'); 

    // caracteristic 
    Route::get('/caracteristic', [CaracteristicController::class,'caracteristic'])->name('caracteristic');
    Route::post('/caracteristic/store', [CaracteristicController::class,'store'])->name('caracteristic.store');
    Route::get('/caracteristic/edit/{id}', [CaracteristicController::class,'edit'])->name('caracteristic.edit');
    Route::post('/caracteristic/update/{id}', [CaracteristicController::class,'update'])->name('caracteristic.update');
    Route::get('/caracteristic/delete/{id}', [CaracteristicController::class,'delete'])->name('caracteristic.delete');

    // Quick Link 
    Route::get('/link', [QuickLinkController::class,'index'])->name('link'); 
    Route::get('/link/edit', [QuickLinkController::class,'edit'])->name('link.edit');
    Route::post('/link/update', [QuickLinkController::class,'update'])->name('link.update'); 

    // Quick Link 
    Route::get('/seo', [SeoController::class,'index'])->name('seo'); 
    Route::get('/seo/edit', [SeoController::class,'edit'])->name('seo.edit');
    Route::post('/seo/update', [SeoController::class,'update'])->name('seo.update'); 

    // Service Category 
    Route::get('/service-category',  [ServiceCategoryController::class,'index'])->name('service.category');
    Route::get('/service-category/create',  [ServiceCategoryController::class,'create'])->name('service.category.create');
    Route::post('/service-category/insert', [ServiceCategoryController::class,'store'])->name('service.category.store');
    Route::get('/service-category/edit/{service_id}', [ServiceCategoryController::class,'edit'])->name('service.category.edit');
    Route::post('/service-category/edit/{id}',[ServiceCategoryController::class,'update'])->name('service.category.update');
    Route::get('/service-category/delete/{service_id}', [ServiceCategoryController::class,'destroy'])->name('service.category.delete');

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

    Route::get('/blog',  [BlogController::class,'blog'])->name('blog');
    Route::get('/blog/create',  [BlogController::class,'create'])->name('blog.create');
    Route::post('/blog/insert', [BlogController::class,'store'])->name('blog.store');
    Route::get('/blog/edit/{service_id}', [BlogController::class,'edit']);
    Route::post('/blog/edit/{id}',[BlogController::class,'update']);
    Route::get('/blog/delete/{service_id}', [BlogController::class,'delete']);


    
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
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/team/insert', [TeamController::class, 'teaminsert'])->name('teaminsert');
    Route::get('/team/edit/{team_id}', [TeamController::class, 'teamedit']);
    Route::post('/team/edit/{id}', [TeamController::class, 'teamupdate']);
    Route::get('/team/delete/{team_id}', [TeamController::class, 'teamdelete']);
    
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::post('/contact/insert', [ContactController::class, 'contactinsert'])->name('contactinsert');
    Route::get('/contact/edit/{contact_id}', [ContactController::class, 'contactedit']);
    Route::post('/contact/edit/{id}', [ContactController::class, 'contactupdate']);
    Route::get('/contact/delete/{contact_id}', [ContactController::class, 'contactdelete']);

    Route::get('/cv',[CVController::class,'index'])->name('cv');
    Route::get('/cv/show/{id}',[CVController::class,'show'])->name('cv.show');
    Route::get('/cv/delete/{id}',[CVController::class,'delete'])->name('cv.delete');

    Route::get('/contact-message',[ContactMessageController::class,'index'])->name('contact.message');
    Route::get('/contact-message/status/{id}',[ContactMessageController::class,'status'])->name('contact.messag.status');
    Route::get('/contact-message/delete/{id}',[ContactMessageController::class,'delete'])->name('contact.messag.delete');
});



use App\Livewire\Home;
use App\Livewire\AboutUs;
use App\Livewire\Service;
use App\Livewire\Project;
use App\Livewire\Blog;
use App\Livewire\BlogDetails;
use App\Livewire\Contact;
use App\Livewire\JobApply;
use App\Livewire\ProjectDetails;
use App\Livewire\SubService;

Route::get('/', Home::class);
Route::get('/about-us', AboutUs::class);
Route::get('/service/{slug}', Service::class);
Route::get('/sub-service/{slug}', SubService::class);
Route::get('/project', Project::class);
Route::get('/project-details/{slug}', ProjectDetails::class);
Route::get('/blog', Blog::class);
Route::get('/blog-details/{slug}', BlogDetails::class);
Route::get('/career', JobApply::class);
Route::get('/contact', Contact::class);