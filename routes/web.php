<?php

use App\Http\Controllers\PortwalletController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasteringController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserEnrollmentController;
use App\Http\Controllers\ClassroomCourseController;
use App\Http\Controllers\AccreditationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\FlicardController;
use App\Http\Controllers\TimerController;
use App\Http\Controllers\ExpertController;



use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TrainingCourseController;

use App\Http\Controllers\SearchController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CourseReviewController;
use App\Http\Controllers\ReviewFromAdminController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\UserRequestCertificateController;
use App\Http\Controllers\MocktestController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionsOptionsController;
use App\Http\Controllers\PrivacyPolicyController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Models\Course;

use App\Http\Controllers\CouponController;



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


Route::get('/', [MasteringController::class,'index'])->name('home');
//Route::get('/congrats', [MasteringController::class,'congrats'])->name('home');

//Contact us Route
//Contact us Route
Route::get('/contact_us', [ContactUsController::class,'contact'])->name('contact');
Route::post('/contact/store', [ContactUsController::class,'storeContact']);
Route::get('read/contact', [ContactUsController::class,'contactRead'])->name('contact-us')->middleware('is_admin');
Route::get('/admin/delete/{contactus_id}', [ContactUsController::class,'delete'])->middleware('is_admin');
Route::get('/about_us', [AboutController::class,'index'])->name('about');
Route::get('/our_experts', [FrontendController::class,'our_experts'])->name('all-experts');

//request for certificate routes
Route::get('/certificate-request', [UserRequestCertificateController::class,'index'])->name('certificate-request');
Route::post('/certificate-request/store', [UserRequestCertificateController::class,'store'])->name('certificate-request-store');
Route::get('/certificate-request/check', [UserRequestCertificateController::class,'check'])->name('certificate-request-check')->middleware('is_admin');
Route::get('/admin/certificate-request-approve/{id}', [UserRequestCertificateController::class,'approve'])->middleware('is_admin');


//Route::get('/certificate', [AboutController::class,'certificate'])->name('about');
Route::get('/events', [EventController::class,'index'])->name('event');
Route::get('/event_details/{id}', [EventController::class,'event_details']);
Route::get('/submit', [PaymentController::class,'submit']);

Route::get('/paymentsuccess', [CourseController::class,'paymentSuccess']);



Route::get('/search', [SearchController::class,'autoComplete'])->name('autocomplete');
Route::post('/booking', [BookingController::class,'SendMail'])->name('sendmail');


//privacy policy
Route::get('/privacy-policy', [PrivacyPolicyController::class,'index'])->name('privacy-policy');



Route::get('/faqs', [FaqController::class,'index'])->name('faq');
Route::get('/errors', [ErrorController::class,'index'])->name('error');
Route::get('/courses', [FrontendController::class,'index'])->name('courses');
Route::get('/classroom_courses', [FrontendController::class,'index_classroom'])->name('classroom-courses');
Route::get('/course_details', [FrontendController::class,'course_details'])->name('course_details');
//Route::get('/course_details/{id}', [FrontendController::class,'course_details'])->name('course_details');
Route::get('/user_profile', [UserProfileController::class,'user_profile'])->name('user_profile');
Route::get('/user_profile/{id}', [UserProfileController::class,'EditProfile'])->name('user-profile-edit');
Route::post('/home/course_details/view/evolution/certificate_preview', [UserEnrollmentController::class,'StoreEvolution'])->name('store-evolution');

//category wise course show

Route::get('/home/courses/{subcat_id}', [CourseController::class,'subcategoryWiseCourseShow']);
Route::get('/home/classroom_courses/{subcat_id}', [ClassroomCourseController::class,'subcategoryWiseClassroomCourseShow']);


//blogs routes frontend
Route::get('/all-blogs', [BlogsController::class,'index'])->name('all-blogs');
Route::get('/blogs_details', [BlogsController::class,'blogs_details'])->name('blogs_details');
Route::get('/blogs_details/{id}/{slug}', [BlogsController::class,'blogs_details_index']);


//add to carts Routes
Route::get('/carts', [CartController::class,'index'])->name('carts');
Route::post('/add_to_carts', [CartController::class,'add_cart'])->name('add-carts');
Route::post('/buynow', [CartController::class,'BuyNow'])->name('buy-now');
Route::get('/carts/delete/{id}',[CartController::class,'deleteCart']);
Route::get('/buynow/delete/{id}',[CartController::class,'deleteBuy']);



Route::post('/home/course/carts/payment',[PortwalletController::class,'index'])->name('payment');
Route::get('/portwallet/portwallet_verify_transaction/shopping_cart',[PortwalletController::class,'portwalletVerifyTransaction']);

Route::post('/classroom_bookings', [BookingController::class,'StoreBooking'])->name('store-bookings');
Route::post('/booking', [BookingController::class,'SendMail'])->name('sendmail');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home-user');

//admin routes
Route::get('/admin/home', [HomeController::class, 'adminIndex'])->name('admin.home')->
middleware('is_admin');

//admin main category routes
Route::get('/admin/home/main_category/add', [MainCategoryController::class, 'add'])->name('addmain-category')->
middleware('is_admin');
Route::post('/admin/home/main_category/store',[MainCategoryController::class,'storeMCategory'])->name('store-mcategory')->
middleware('is_admin');
Route::get('admin/home/main_category/edit/{id}',[MainCategoryController::class,'editmCategory'])->middleware('is_admin');
Route::post('admin/home/main_category/update',[MainCategoryController::class,'updatemCategory'])->name('update-mcategory')->middleware('is_admin');
Route::get('admin/home/main_category/delete/{id}',[MainCategoryController::class,'deleteMCategory'])->middleware('is_admin');

//user routes
Route::get('admin/home/users',[UserController::class,'List'])->middleware('is_admin')->name('user-lists');
Route::get('admin/home/enrollments',[UserController::class,'enrollments'])->middleware('is_admin')->name('enrollments-lists');
Route::get('admin/home/users/delete/{id}',[UserController::class,'deleteUser'])->middleware('is_admin');

//course category routes
Route::get('/admin/home/course_category/manage', [CourseCategoryController::class, 'Manage'])->name('managecourse-category')->
middleware('is_admin');
Route::post('/admin/home/course_category/store',[CourseCategoryController::class,'storeCourseCategory'])->name('store-maincategory')->
middleware('is_admin');
Route::get('admin/home/course_category/edit/{id}',[CourseCategoryController::class,'editCourseCategory'])->middleware('is_admin');
Route::post('admin/home/course_category/update',[CourseCategoryController::class,'updateCourseCategory'])->name('update-coursecategory')->middleware('is_admin');
Route::get('admin/home/course_category/delete/{id}',[CourseCategoryController::class,'deleteCourseCategory'])->middleware('is_admin');


//admin add e-learning course routes
Route::get('/admin/home/courses/manage', [CourseController::class, 'Manage'])->name('manage-course')->
middleware('is_admin');
Route::post('/admin/home/courses/store', [CourseController::class, 'StoreCourse'])->name('store-course')->
middleware('is_admin');

Route::post('admin/home/courses/update',[CourseController::class,'updateCourse'])->name('update-course')->middleware('is_admin');
Route::get('admin/home/courses/delete/{id}',[CourseController::class,'deleteCourse'])->middleware('is_admin');


//admin add e-learning course details
Route::get('admin/home/courses/course_details/{id}',[CourseController::class,'CourseDetails'])->middleware('is_admin');
Route::get('admin/home/courses/course_details/course_info/{id}',[CourseController::class,'CourseInfo'])->middleware('is_admin');
Route::get('admin/home/courses/course_details/course_curricullum/{id}',[CourseController::class,'CourseCurricullum'])->middleware('is_admin');
Route::get('admin/home/courses/course_details/course_media/{id}',[CourseController::class,'CourseMedia'])->middleware('is_admin');
Route::get('admin/home/courses/course_overviews/{id}',[CourseController::class,'CourseOverview'])->middleware('is_admin');

Route::post('admin/home/courses/course_details/store',[CourseController::class,'StoreCourseDetails'])->name('store-course-details')->middleware('is_admin');
Route::post('admin/home/courses/course_details/update',[CourseController::class,'UpdateCourseDetails'])->name('update-course-details')->middleware('is_admin');
Route::post('admin/home/courses/course_details/course-image/update',[CourseController::class,'UpdateCourseImage'])->name('update-course-image')->middleware('is_admin');
Route::post('admin/home/courses/course_details/course-banner-image/update',[CourseController::class,'UpdateCourseBannerImage'])->name('update-course-banner-image')->middleware('is_admin');

Route::get('home/course_details/{id}/{slug}',[CourseController::class,'course_details_frontend']);
Route::get('admin/home/course_details/sections/{id}',[CourseController::class,'Section'])->middleware('is_admin');
Route::post('admin/home/courses/course_details/sections/store',[CourseController::class,'StoreSection'])->name('store-section')->middleware('is_admin');
Route::get('admin/home/course_details/sections/edit/{id}',[CourseController::class,'editSection'])->middleware('is_admin');
Route::post('admin/home/course_details/sections/update',[CourseController::class,'updateSection'])->name('update-section')->middleware('is_admin');
Route::get('admin/home/course_details/sections/delete/{id}',[CourseController::class,'deleteSection'])->middleware('is_admin');
Route::post('admin/home/courses/course_details/sections/lessons/store',[CourseController::class,'StoreLesson'])->name('store-lesson')->middleware('is_admin');

//edit $ delete section
Route::post('/home/section/update', [CourseController::class,'sectionEditStore'])->name('secton-update')->middleware('is_admin');
Route::get('/home/section/delete/{section_id}', [CourseController::class,'sectionDelete'])->middleware('is_admin');

//edit & delete lesson
Route::post('/home/lesson/update', [CourseController::class,'lessonEditStore'])->name('lesson-update')->middleware('is_admin');
Route::get('/home/lesson/delete/{lesson_id}', [CourseController::class,'lessonDelete'])->middleware('is_admin');



// user enroolment route
Route::get('home/course_details/view/{id}/{slug}',[UserEnrollmentController::class,'index']);
Route::post('home/get-all-vimeo-id',[UserEnrollmentController::class,'getVimeoId'])->name('get-all-vimeo-id');


//Route::get('users/home/course_details/view/{id}',[CourseController::class,'index']);


//admin add classroom course routes
Route::get('/admin/home/classroom/courses/manage', [ClassroomCourseController::class, 'Manage'])->name('manage-classroom-course')->
middleware('is_admin');
Route::post('/admin/home/classroom/courses/store', [ClassroomCourseController::class, 'StoreCourse'])->name('store-classroom-course')->
middleware('is_admin');

Route::post('admin/home/classroom/courses/update',[ClassroomCourseController::class,'updateCourse'])->name('update-classroom-course')->middleware('is_admin');
Route::get('admin/home/classroom/courses/delete/{id}',[ClassroomCourseController::class,'deleteCourse'])->middleware('is_admin');


// Frontend routes for classroom
Route::get('/home/classroom/course_details/{classroom_course_title}/{slug}', [FrontendController::class,'course_details_frontend'])->name('classroom-course-details');
Route::get('/home/classroom/course_details/booking/{id}', [FrontendController::class,'classroom_course_booking']);

//admin add classroom course details
Route::get('/admin/home/classroom/courses/course_details/{id}',[ClassroomCourseController::class,'CourseDetailsBackend'])->middleware('is_admin');
Route::get('/admin/home/classroom/courses/course_details/course_info/{id}',[ClassroomCourseController::class,'ClassroomCourseInfo'])->middleware('is_admin');
Route::get('/admin/home/classroom/courses/course_details/course_media/{id}',[ClassroomCourseController::class,'ClassroomCourseMedia'])->middleware('is_admin');
Route::post('admin/home/classroom/courses/course_details/store',[ClassroomCourseController::class,'StoreClassroomCourseDetails'])->name('store-classroom-course-details')->middleware('is_admin');
Route::post('admin/home/classroom/courses/course_details/update',[ClassroomCourseController::class,'UpdateClassroomCourseDetails'])->name('update-classroom-course-details')->middleware('is_admin');
Route::post('admin/home/classroom/courses/course_details/course-media-image/update',[ClassroomCourseController::class,'UpdateClassroomCourseImage'])->name('update-classroom-course-image')->middleware('is_admin');
Route::post('admin/home/classroom/courses/course_details/course-media-image/banner/update',[ClassroomCourseController::class,'UpdateClassroomCourseBannerImage'])->name('update-classroom-course-banner-image')->middleware('is_admin');

//admin add accreditation images
Route::get('/admin/home/accreditation/manage', [AccreditationController::class, 'Manage'])->name('accreditation')->
middleware('is_admin');
Route::post('admin/home/accreditation/store',[AccreditationController::class,'Store'])->name('store-accreditation')->middleware('is_admin');
Route::get('admin/home/accreditation/delete/{id}',[AccreditationController::class,'delete'])->middleware('is_admin');


//Admin System settings
Route::get('/admin/home/system_settings/manage', [SystemController::class, 'Manage'])->name('manage-system-settings')->
middleware('is_admin');
Route::post('/admin/home/system_settings/store', [SystemController::class, 'StoreSettings'])->name('store-system-settings')->
middleware('is_admin');

//admin blog add
Route::get('/admin/home/blogs/manage', [AdminBlogController::class, 'index'])->name('manage-blogs')->
middleware('is_admin');
Route::post('/admin/home/addBlog', [AdminBlogController::class, 'addBlog'])->name('add-blogs')->
middleware('is_admin');
Route::post('/admin/home/UpdateBlog', [AdminBlogController::class, 'updateBlog'])->name('update-blogs')->
middleware('is_admin');

Route::get('/admin/home/deleteBlog/{id}',[AdminBlogController::class, 'deleteBlog'])->name('delete-blogs')->
middleware('is_admin');
Route::get('/admin/home/blogs/details/{id}',[AdminBlogController::class, 'BlogDetails'])->
middleware('is_admin');

Route::get('/admin/home/blogs/details/view/{id}',[AdminBlogController::class, 'BlogView'])->
middleware('is_admin');

Route::post('/admin/home/blogs/details/store',[AdminBlogController::class, 'Store'])->name('store-blog-details')->
middleware('is_admin');
Route::post('/admin/home/UpdateBlogDetails', [AdminBlogController::class, 'updateBlogDetails'])->name('update-blog-details')->
middleware('is_admin');

//admin add events
Route::get('/admin/home/events/manage', [AdminEventController::class, 'index'])->name('manage-events')->
middleware('is_admin');
Route::post('/admin/home/events/store', [AdminEventController::class, 'Store'])->name('store-events')->
middleware('is_admin');
Route::post('/admin/home/events/update', [AdminEventController::class, 'Update'])->name('update-events')->
middleware('is_admin');
Route::get('/admin/home/events/delete/{id}', [AdminEventController::class, 'Delete'])->
middleware('is_admin');
Route::get('/admin/home/events/event-details/{id}', [AdminEventController::class, 'EventDetails'])->
middleware('is_admin');
Route::post('/admin/home/events/event-details/store', [AdminEventController::class, 'StoreDetails'])->name('store-event-details')->
middleware('is_admin');
Route::post('/admin/home/events/event-details/update', [AdminEventController::class, 'UpdateDetails'])->name('update-event-details')->
middleware('is_admin');
Route::get('/admin/home/events/event-details/view/{id}', [AdminEventController::class, 'EventDetailView'])->
middleware('is_admin');



//admin add course without exam

Route::get('/admin/home/training_without_exam_courses/manage', [TrainingCourseController::class, 'Manage'])->name('manage-training-course')->
middleware('is_admin');
Route::post('/admin/home/training_without_exam_courses/store', [TrainingCourseController::class, 'Store'])->name('store-training-course')->
middleware('is_admin');
Route::get('/admin/home/classroom_bookings', [BookingController::class,'BookingList'])->name('bookings-list')->middleware('is_admin');

//password change route

Route::post('change-password-store',[UserProfileController::class,'changePassStore'])->name('change-password-store');

Route::get('/get-product-price', [UserController::class,'getProductPrice'])->name('get.product-price')->middleware('is_admin');
Route::post('/enroll-course', [UserController::class,'storeEnrollCourse'])->name('enroll-course.store')->middleware('is_admin');

//evolution see from admin routes
Route::get('/admin/home/evolution/manage', [UserController::class, 'ManageEvolution'])->name('manage-evolution')->
middleware('is_admin');

//currency route
Route::get('/admin/home/manage', [CurrencyController::class, 'index'])->name('admin.currency')->
middleware('is_admin');
Route::get('/admin/home/manage', [CurrencyController::class, 'index'])->name('admin.currency')->
middleware('is_admin');
Route::post('/admin/home/store', [CurrencyController::class, 'store'])->name('admin.currency.store')->
middleware('is_admin');
Route::post('/admin/home/update', [CurrencyController::class, 'store'])->name('admin.currency.update')->
middleware('is_admin');
Route::get('/admin/home/delete/{id}', [CurrencyController::class, 'delete'])->
middleware('is_admin');


//search routes
 Route::get("search", [SearchController::class,'searchProduct']);
 Route::post('/find-products', [SearchController::class,'findProduct']);


//socialite login Routes
Route::get('login/google', [LoginController::class,'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class,'handleGoogleCallback']);

Route::get('login/facebook', [LoginController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class,'handleFacebookCallback']);
//review sysytem
Route::post('store/review', [CourseReviewController::class,'store'])->name('store.review');
//review control from admin
Route::get('review/create', [ReviewFromAdminController::class,'create'])->name('customer.review');
Route::get('/admin/review-delete/{review_id}', [ReviewFromAdminController::class,'destroy'])->middleware('is_admin');
Route::get('/admin/review-approve/{review_id}', [ReviewFromAdminController::class,'approve'])->middleware('is_admin');

//trainer add
Route::get('/admin/home/trainer-list', [TrainerController::class,'create'])->name('trainer')->middleware('is_admin');
Route::post('/admin/home/addTrainer', [TrainerController::class, 'addTrainer'])->name('add-trainer')->
middleware('is_admin');
Route::post('/admin/home/updateTrainer', [TrainerController::class, 'updateTrainer'])->name('update-trainer')->
middleware('is_admin');
Route::get('/admin/trainer-delete/{id}', [TrainerController::class,'deleteTrainer'])->middleware('is_admin');


//trainer classroom
Route::get('/admin/classroom-trainer-list', [TrainerController::class,'create1'])->name('trainer-classroom')->middleware('is_admin');
Route::post('/admin/home/classroom-addTrainer', [TrainerController::class, 'addTrainer1'])->name('add-trainer1')->
middleware('is_admin');
Route::post('/admin/home/classroom-updateTrainer', [TrainerController::class, 'updateTrainer1'])->name('update-trainer1')->
middleware('is_admin');
Route::get('/admin/classroom-trainer-delete/{id}', [TrainerController::class,'deleteTrainer1'])->middleware('is_admin');
Route::get('/home/download-pdf/{id}', [UserProfileController::class,'DownloadPdf']);
Route::get('/admin/home/download-pdf/{id}', [UserRequestCertificateController::class,'DownloadPdf']);

//faqs admin
Route::get('/admin/faqs', [FaqController::class,'create'])->name('faqs')->middleware('is_admin');
Route::post('/admin/faqs/store', [FaqController::class,'store'])->name('store')->middleware('is_admin');
Route::get('/admin/delete-faq/{faq_id}', [FaqController::class,'deleteFaq'])->middleware('is_admin');

//sitemap route

Route::get('generate-sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to('home'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
    $sitemap->add(URL::to('page'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

    // get all posts from db
    $courses = Course::all();

    // add every post to the sitemap
    foreach ($courses as $course)
    {
        $sitemap->add(URL::to('home/course_details/'.$course->id.'/'.$course->elearning_slug),  $course->updated_at, '1.0', 'daily');

    }

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'sitemap');
    // this will generate file mysitemap.xml to your public folder

    return redirect(url('sitemap.xml'));

});

//sitemap end


//flipcard

Route::get('/admin/flipcard', [FlicardController::class,'create'])->name('flipcard')->middleware('is_admin');
Route::post('/admin/store', [FlicardController::class,'store'])->name('flipcard-store');
Route::get('/admin/delete-flipcard/{flipcard}', [FlicardController::class,'delete'])->middleware('is_admin');


Route::get('itil4', [FlicardController::class,'flipcard_frontend'])->name('flipcards');

//coupon 

Route::get('/admin/coupon', [CouponController::class,'create'])->name('coupon')->middleware('is_admin');

Route::post('/admin/coupon/store', [CouponController::class,'store'])->name('coupon-store')->middleware('is_admin');

Route::get('/admin/coupon/delete/{coupon_id}', [CouponController::class,'destroy'])->middleware('is_admin');

Route::post('/coupon-apply', [CartController::class,'couponApply'])->name('coupons');

Route::post('/coupon/calculation', [CartController::class,'couponCalcaultion']);

Route::get('/coupon-remove', [CartController::class,'couponRemove']);

//mocktest 
Route::get('mocktest/topics/view/{id}', [MocktestController::class,'quizView'])->name('course-view')->middleware('is_admin');



Route::get('/admin/subcategory/ajax/{cat_id}', [TopicController::class, 'getSubCat'])->middleware('is_admin');

Route::get('admin/topic/create', [TopicController::class,'create'])->name('admin-topic')->middleware('is_admin');
Route::post('admin/topic/store', [TopicController::class,'store'])->name('topics-store')->middleware('is_admin');
Route::get('admin/topic/show', [TopicController::class,'index'])->name('topics-show')->middleware('is_admin');
Route::get('admin/topic/edit/{id}', [TopicController::class,'edit'])->name('topics-edit')->middleware('is_admin');
Route::post('admin/topic/update', [TopicController::class,'update'])->name('topics-update')->middleware('is_admin');
Route::get('admin/topic-delete/{id}',[TopicController::class,'delete'])->middleware('is_admin');

Route::get('topic/questions/view/{id}', [TopicController::class,'view'])->name('topics-view')->middleware('is_admin');


Route::get('result/index',[ResultsController::class,'index'])->name('results.index')->middleware('is_admin');
Route::get('result/edit/{id}',[ResultsController::class,'edit'])->name('results.edit')->middleware('is_admin');
Route::get('result/show/{id}',[ResultsController::class,'show'])->name('results.show')->middleware('is_admin');
Route::post('result/store',[ResultsController::class,'store'])->name('results.store')->middleware('is_admin');
Route::post('result/update', [ResultController::class,'update'])->name('results.update')->middleware('is_admin');
Route::get('result/index/{id}',[ResultsController::class,'result'])->name('result-index')->middleware('is_admin');


//===================================== MockTest Route==============================================
Route::get('question/topic', [QuestionController::class,'questionTopic']);
Route::get('admin/question/index/{id}',[QuestionController::class,'index'])->name('questions-index')->middleware('is_admin');
Route::get('question/edit/{id}',[QuestionController::class,'edit'])->name('questions-edit')->middleware('is_admin');
Route::get('question/show/{id}',[QuestionController::class,'show'])->name('questions-show')->middleware('is_admin');
Route::post('admin/question/store',[QuestionController::class,'store'])->name('questions-store')->middleware('is_admin');
Route::post('question/update', [QuestionController::class,'update'])->name('questions-update')->middleware('is_admin');
Route::get('/question-delete/{id}',[QuestionController::class,'questionDelete'])->middleware('is_admin');

Route::get('admin/QuestionsOptions/index',[QuestionsOptionsController::class,'index'])->name('questionsOptions-index')->middleware('is_admin');
Route::get('admin/QuestionsOptions/edit/{id}',[QuestionsOptionsController::class,'edit'])->name('questionsOptions-edit')->middleware('is_admin');
Route::post('admin/QuestionsOptions/store',[QuestionsOptionsController::class,'store'])->name('questionsOptions-store')->middleware('is_admin');
Route::post('admin/QuestionsOptions/update/{id}',[QuestionsOptionsController::class,'update'])->name('questionsOptions-update')->middleware('is_admin');
Route::get('admin/QuestionsOptions/show',[QuestionsOptionsController::class,'show'])->name('questionsOptions-show')->middleware('is_admin');
Route::get('/QuestionsOptions-delete/{id}',[QuestionsOptionsController::class,'optionDelete'])->middleware('is_admin');

Route::get('mock/category',[MocktestController::class,'mockCategory'])->name('mock-category')->middleware('is_admin');
Route::get('view/category',[MocktestController::class,'viewCategory'])->name('view-category')->middleware('is_admin');
Route::post('mock/category/store',[MocktestController::class,'addMock'])->name('add-mock')->middleware('is_admin');
Route::get('/mock-delete/{mock_id}',[MocktestController::class,'delete'])->middleware('is_admin');

Route::post('mock/category/update',[MocktestController::class,'mockUpdate'])->name('update-mock')->middleware('is_admin');


Route::get('home/mock_details/{id}', [MocktestController::class, 'course_details_frontend'])->name('mock-details');


//Timer

Route::get('/admin/timer', [TimerController::class,'create'])->name('timer')->middleware('is_admin');

Route::post('/admin/timerstore', [TimerController::class,'storeTimer'])->name('timer-store')->middleware('is_admin');

Route::get('/admin/delete-timer/{id}', [TimerController::class,'deleteTimer'])->middleware('is_admin');
Route::get('/admin/home/experts', [ExpertController::class,'Manage'])->name('experts')->middleware('is_admin');
Route::post('/admin/home/experts/store', [ExpertController::class, 'storeExpert'])->name('store-expert')->
middleware('is_admin');
Route::post('/admin/home/experts/update', [ExpertController::class, 'updateExpert'])->name('update-expert')->
middleware('is_admin');
Route::get('/admin/experts/delete/{id}', [ExpertController::class,'deleteExpert'])->middleware('is_admin');


//======================================USER PROFILE ROUTES================================
Route::get('change/image',[UserProfileController::class,'changeImage'])->name('change-image');
Route::post('image/store', [UserProfileController::class, 'imageStore'])->name('store-image');
Route::post('profile/update',[UserProfileController::class,'updateProfile'])->name('update-profile');
Route::get('service/page',[FrontendController::class,'service'])->name('service-page');
