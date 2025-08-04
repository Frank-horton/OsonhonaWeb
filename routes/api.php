<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FAQsController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ReelController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('send_otp', [AuthController::class, 'send_otp'])->withoutMiddleware([
    \Illuminate\Auth\Middleware\Authenticate::class,
]);
Route::post('confirm_otp', [AuthController::class, 'confirm_otp'])->withoutMiddleware([
    \Illuminate\Auth\Middleware\Authenticate::class,
]);

Route::post('addUser', [UserController::class, 'addUser'])->middleware('checkHeader');
Route::post('editProfile', [UserController::class, 'editProfile'])->middleware('checkHeader');
Route::post('fetchProfileDetail', [UserController::class, 'fetchProfileDetail'])->middleware('checkHeader');
Route::post('logout', [UserController::class, 'logout'])->middleware('checkHeader');
Route::post('deleteMyAccount', [UserController::class, 'deleteMyAccount'])->middleware('checkHeader');
Route::post('reportUser', [UserController::class, 'reportUser'])->middleware('checkHeader');
Route::post('fetchBlockUserList', [UserController::class, 'fetchBlockUserList'])->middleware('checkHeader');
Route::post('userBlockFromApi', [UserController::class, 'userBlockFromApi'])->middleware('checkHeader');
Route::post('userUnblockFromApi', [UserController::class, 'userUnblockFromApi'])->middleware('checkHeader');

Route::post('addProperty', [PropertyController::class, 'addProperty'])->middleware('checkHeader');
Route::post('editProperty', [PropertyController::class, 'editProperty'])->middleware('checkHeader');
Route::post('fetchSavedProperties', [PropertyController::class, 'fetchSavedProperties'])->middleware('checkHeader');
Route::post('fetchPropertyDetail', [PropertyController::class, 'fetchPropertyDetail'])->middleware('checkHeader');
Route::post('fetchPropertyMedia', [PropertyController::class, 'fetchPropertyMedia'])->middleware('checkHeader');
Route::post('fetchHomePageData', [PropertyController::class, 'fetchHomePageData'])->middleware('checkHeader');
Route::post('fetchMyProperties', [PropertyController::class, 'fetchMyProperties'])->middleware('checkHeader');
Route::post('deleteMyProperty', [PropertyController::class, 'deleteMyProperty'])->middleware('checkHeader');
Route::post('searchProperty', [PropertyController::class, 'searchProperty'])->middleware('checkHeader');
Route::post('createScheduleTour', [PropertyController::class, 'createScheduleTour']);
Route::post('fetchPropertyReceiveTourList', [PropertyController::class, 'fetchPropertyReceiveTourList'])->middleware('checkHeader'); // Received Tour List
Route::post('fetchPropertyTourSubmittedList', [PropertyController::class, 'fetchPropertyTourSubmittedList'])->middleware('checkHeader'); //Submitted Tour List
Route::post('confirmPropertyTour', [PropertyController::class, 'confirmPropertyTour'])->middleware('checkHeader');
Route::post('declinePropertyTour', [PropertyController::class, 'declinePropertyTour'])->middleware('checkHeader');
Route::post('completedPropertyTour', [PropertyController::class, 'completedPropertyTour'])->middleware('checkHeader');
Route::post('fetchPropertiesByType', [PropertyController::class, 'fetchPropertiesByType'])->middleware('checkHeader');
Route::post('fetchUserPropertiesListing', [PropertyController::class, 'fetchUserPropertiesListing'])->middleware('checkHeader');
Route::post('addSupport', [PropertyController::class, 'addSupport'])->middleware('checkHeader');

Route::post('fetchFAQs', [FAQsController::class, 'fetchFAQs'])->middleware('checkHeader');

Route::post('fetchSettings', [SettingsController::class, 'fetchSettings'])->middleware('checkHeader');
// Route::post('fetchSettings', [SettingsController::class, 'fetchSettings']);

Route::post('fetchPlatformNotification', [AdminController::class, 'fetchPlatformNotification'])->middleware('checkHeader');

Route::post('test', [PropertyController::class, 'test'])->middleware('checkHeader');
Route::post('uploadFileGivePath', [PropertyController::class, 'uploadFileGivePath'])->middleware('checkHeader');

Route::post('followUser', [UserController::class, 'followUser'])->middleware('checkHeader');
Route::post('fetchFollowingList', [UserController::class, 'fetchFollowingList'])->middleware('checkHeader');
Route::post('UserBlockedByUser', [UserController::class, 'UserBlockedByUser'])->middleware('checkHeader');
Route::post('UserUnblockedByUser', [UserController::class, 'UserUnblockedByUser'])->middleware('checkHeader');
Route::post('fetchFollowersList', [UserController::class, 'fetchFollowersList'])->middleware('checkHeader');
Route::post('unfollowUser', [UserController::class, 'unfollowUser'])->middleware('checkHeader');

Route::post('uploadReel', [ReelController::class, 'uploadReel'])->middleware('checkHeader');
Route::post('addComment', [ReelController::class, 'addComment'])->middleware('checkHeader');
Route::post('fetchComments', [ReelController::class, 'fetchComments'])->middleware('checkHeader');
Route::post('deleteComment', [ReelController::class, 'deleteComment'])->middleware('checkHeader');
Route::post('likeReel', [ReelController::class, 'likeReel'])->middleware('checkHeader');
Route::post('dislikeReel', [ReelController::class, 'dislikeReel'])->middleware('checkHeader');
Route::post('deleteReel', [ReelController::class, 'deleteReel'])->middleware('checkHeader');
Route::post('fetchReelsByUser', [ReelController::class, 'fetchReelsByUser'])->middleware('checkHeader');
Route::post('fetchReelById', [ReelController::class, 'fetchReelById'])->middleware('checkHeader');
Route::post('fetchReelsByHashtag', [ReelController::class, 'fetchReelsByHashtag'])->middleware('checkHeader');
Route::post('fetchReelsOnHomePage', [ReelController::class, 'fetchReelsOnHomePage'])->middleware('checkHeader');
Route::post('increaseReelViewCount', [ReelController::class, 'increaseReelViewCount'])->middleware('checkHeader');
Route::post('fetchSavedReels', [ReelController::class, 'fetchSavedReels'])->middleware('checkHeader');


Route::post('addReport', [ReelController::class, 'addReport'])->middleware('checkHeader');

Route::post('fetchUserNotifications', [PropertyController::class, 'fetchUserNotifications'])->middleware('checkHeader');


Route::post('pushNotificationToSingleUser', [SettingsController::class, 'pushNotificationToSingleUser'])->middleware('checkHeader');

//Новые роуты для сайта
Route::prefix('front')->group(function () {
    Route::get('fetchSavedProperties', [PropertyController::class, 'fetchSavedProperties']);
    Route::get('fetchPropertyDetail', [PropertyController::class, 'fetchPropertyDetail']);
    Route::get('fetchPropertyMedia', [PropertyController::class, 'fetchPropertyMedia']);
    Route::get('fetchHomePageData', [PropertyController::class, 'fetchHomePageData']);
    Route::get('fetchPropertyType', [PropertyController::class, 'fetchPropertyType']);

    Route::get('fetchMyProperties', [PropertyController::class, 'fetchMyProperties']);
    Route::get('searchProperty', [PropertyController::class, 'searchProperty']);
    Route::get('fetchPropertyReceiveTourList', [PropertyController::class, 'fetchPropertyReceiveTourList']); // Received Tour List
    Route::get('fetchPropertyTourSubmittedList', [PropertyController::class, 'fetchPropertyTourSubmittedList']); //Submitted Tour List
    Route::get('confirmPropertyTour', [PropertyController::class, 'confirmPropertyTour']);
    Route::get('declinePropertyTour', [PropertyController::class, 'declinePropertyTour']);
    Route::get('completedPropertyTour', [PropertyController::class, 'completedPropertyTour']);
    Route::get('fetchPropertiesByType', [PropertyController::class, 'fetchPropertiesByType']);
    Route::get('fetchUserPropertiesListing', [PropertyController::class, 'fetchUserPropertiesListing']);
    Route::get('addSupport', [PropertyController::class, 'addSupport']);
    Route::get('fetchFAQs', [FAQsController::class, 'fetchFAQs']);
    Route::get('fetchSettings', [SettingsController::class, 'fetchSettings']);
    Route::get('fetchPlatformNotification', [AdminController::class, 'fetchPlatformNotification']);
    Route::get('test', [PropertyController::class, 'test']);
    Route::get('uploadFileGivePath', [PropertyController::class, 'uploadFileGivePath']);
    Route::get('followUser', [UserController::class, 'followUser']);
    Route::get('fetchFollowingList', [UserController::class, 'fetchFollowingList']);
    Route::get('UserBlockedByUser', [UserController::class, 'UserBlockedByUser']);
    Route::get('UserUnblockedByUser', [UserController::class, 'UserUnblockedByUser']);
    Route::get('fetchFollowersList', [UserController::class, 'fetchFollowersList']);
    Route::get('unfollowUser', [UserController::class, 'unfollowUser']);
    Route::get('uploadReel', [ReelController::class, 'uploadReel']);
    Route::get('addComment', [ReelController::class, 'addComment']);
    Route::get('fetchComments', [ReelController::class, 'fetchComments']);
    Route::get('likeReel', [ReelController::class, 'likeReel']);
    Route::get('dislikeReel', [ReelController::class, 'dislikeReel']);
    Route::get('fetchReelsByUser', [ReelController::class, 'fetchReelsByUser']);
    Route::get('fetchReelById', [ReelController::class, 'fetchReelById']);
    Route::get('fetchReelsByHashtag', [ReelController::class, 'fetchReelsByHashtag']);
    Route::get('fetchReelsOnHomePage', [ReelController::class, 'fetchReelsOnHomePage']);
    Route::get('increaseReelViewCount', [ReelController::class, 'increaseReelViewCount']);
    Route::get('fetchSavedReels', [ReelController::class, 'fetchSavedReels']);
    Route::get('fetchUserNotifications', [PropertyController::class, 'fetchUserNotifications']);
    Route::get('pushNotificationToSingleUser', [SettingsController::class, 'pushNotificationToSingleUser']);
});
