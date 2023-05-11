<?php

use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Landing\MessageController as LandingMessageController;
use App\Http\Controllers\Landing\BlogController as LandingBlogController;
use App\Http\Controllers\Landing\UploadController as LandingUploadController;

use App\Http\Controllers\Panel\MessageController;
use App\Http\Controllers\Panel\BlogController;
use App\Http\Controllers\Panel\LandingController as PanelLandingController;
use App\Http\Controllers\Panel\Auth\LoginController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\ClientController;
use App\Http\Controllers\Panel\ClosetController;
use App\Http\Controllers\Panel\ColorController;
use App\Http\Controllers\Panel\SeasonController;
use App\Http\Controllers\Panel\OccasionController;
use App\Http\Controllers\Panel\GenderController;
use App\Http\Controllers\Panel\OutfitClothController;
use App\Http\Controllers\Panel\UploadController;

use App\Http\Controllers\Application\Auth\EmailVerificationController;
use App\Http\Controllers\Application\Auth\ForgetPasswordController;
use App\Http\Controllers\Application\Auth\LoginController as AppLoginController;
use App\Http\Controllers\Application\Auth\RegisterController;
use App\Http\Controllers\Application\Auth\ResetPasswordController;
use App\Http\Controllers\Application\LandingController as AppLandingController;
use App\Http\Controllers\Application\GenderController as AppGenderController;
use App\Http\Controllers\Application\ClientController as AppClientController;
use App\Http\Controllers\Application\OutfitClothController as AppOutfitClothController;
use App\Http\Controllers\Application\SeasonController as AppSeasonController;
use App\Http\Controllers\Application\OccasionController as AppOccasionController;
use App\Http\Controllers\Application\ClosetController as AppClosetController;
use App\Http\Controllers\Application\ColorController as AppColorController;
use App\Http\Controllers\Application\CategoryController as AppCategoryController;
use App\Http\Controllers\Application\OutfitController as AppOutfitController;
use App\Http\Controllers\Application\UploadController as AppUploadController;

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

Route::prefix("application")->name("application.")->group(function () {

     Route::group(['prefix' => 'v1'], function() {

        Route::prefix("auth")->name("auth.")->group(function () {
            #register routes
            Route::post('/register', [RegisterController::class, 'register'])->name('register');
            #end

            #login routes
            Route::post('/login', [AppLoginController::class, 'login'])->name('login');
            #end

            #forget password routes
            Route::post('/forget-password', [ForgetPasswordController::class, 'forgetPassword'])->middleware("throttle:3,10");
            #end

            #reset password routes
            Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->middleware("throttle:3,10");
            #end

            Route::prefix("/verify")->name("verify.")->group(function () {
                #resend token
                Route::post('/resend', [EmailVerificationController::class, 'resend'])->name('resend')->middleware(["auth:sanctum"]);
                #verify token
                Route::post('/', [EmailVerificationController::class, 'verify'])->name('token')->middleware(["auth:sanctum"]);
            });

        });

        Route::middleware(["auth:sanctum", "abilities:client", "client", "verify"])->group(function () {

            Route::prefix("/anatomy")->name("anatomy.")->group(function () {

                Route::post("/", [AppClientController::class, 'anatomy'])->name("show");

            });

            Route::prefix("/profile")->name("profile.")->group(function () {

                Route::get("/contact_us", [AppLandingController::class, 'contact'])->name("contact");

                Route::get("/about_us", [AppLandingController::class, 'about'])->name("about");

                Route::get("/license", [AppLandingController::class, 'license'])->name("license");

                Route::get("/privacy", [AppLandingController::class, 'privacy'])->name("privacy");

                Route::get("/", [AppClientController::class, 'show'])->name("show");

                Route::put("/", [AppClientController::class, 'update'])->name("update");

                Route::post("/change-password", [AppClientController::class, 'changePassword'])->name("changePassword");

                Route::put("/anatomy", [AppClientController::class, 'updateAnatomy'])->name("anatomy");

                Route::prefix("/avatar")->name("avatar.")->group(function () {

                    Route::delete("/", [AppClientController::class, 'deleteAvatar'])->name("delete");

                    Route::post("/", [AppClientController::class, 'upload'])->name("upload");

                    Route::put("/", [AppClientController::class, 'updateAvatar'])->name("update");

                });

                Route::get("/genders", [AppGenderController::class, 'index'])->name("genders.index");

                Route::get("/genders/page", [AppGenderController::class, 'getByPage'])->name("genders.index.page");

                Route::get("logout", [AppLoginController::class, 'logout'])->name("logout");

            });

            Route::prefix("/closet")->name("closet.")->group(function () {

                #relation routes
                Route::prefix("/colors")->name("colors.")->group(function () {

                    Route::get("/", [AppColorController::class, 'index'])->name("index");

                    Route::get("/page", [AppColorController::class, 'getByPage'])->name("index.page");

                    Route::post("/", [AppColorController::class, 'store'])->name("store");

                });

                Route::prefix("/occasions")->name("occasions.")->group(function () {

                    Route::get("/", [AppOccasionController::class, 'closetIndex'])->name("index");

                    Route::get("/page", [AppOccasionController::class, 'closetGetByPage'])->name("index.page");

                    Route::post("/", [AppOccasionController::class, 'closetStore'])->name("store");

                });

                Route::prefix("/categories")->name("categories.")->group(function () {

                    Route::get("/", [AppCategoryController::class, 'index'])->name("index");

                    Route::get("/page", [AppCategoryController::class, 'getByPage'])->name("index.page");

                    Route::post("/", [AppCategoryController::class, 'store'])->name("store");

                    Route::prefix("/icon")->name("icon.")->group(function () {

                        Route::delete("/", [AppCategoryController::class, 'deleteIcon'])->name("delete");

                        Route::post("/", [AppCategoryController::class, 'upload'])->name("upload");

                    });

                });

                Route::prefix("/seasons")->name("seasons.")->group(function () {

                    Route::get("/", [AppSeasonController::class, 'closetIndex'])->name("index");

                    Route::get("/page", [AppSeasonController::class, 'closetGetByPage'])->name("index.page");

                });

                #end

                Route::post("/image", [AppClosetController::class, 'upload'])->name("image.upload");

                Route::put("/{cloth}/image", [AppClosetController::class, 'updateImage'])->name("updateImage");

                Route::post("/{cloth}/image/delete", [AppClosetController::class, 'imageDelete'])->name("image.delete");

                Route::post("/search", [AppClosetController::class, 'indexSearch'])->name("search");

                Route::post("/page", [AppClosetController::class, 'getByPage'])->name("index.page");

                Route::apiResource("outfits", AppOutfitController::class);

            });

            Route::prefix("/outfits")->name("outfits.")->group(function () {

                #relation routes
                Route::prefix("occasions")->name("occasions.")->group(function () {

                    Route::get("/", [AppOccasionController::class, 'outfitIndex'])->name("index");

                    Route::get("/page", [AppOccasionController::class, 'outfitGetByPage'])->name("index.page");

                    Route::post("/", [AppOccasionController::class, 'outfitStore'])->name("store");

                });

                Route::prefix("seasons")->name("seasons.")->group(function () {

                    Route::get("/", [AppSeasonController::class, 'outfitIndex'])->name("index");

                    Route::get("/page", [AppSeasonController::class, 'outfitGetByPage'])->name("index.page");

                });

                #end

                Route::prefix("/closet")->name("closet.")->group(function () {

                    Route::get("/seasons/{season}", [AppClosetController::class, 'indexBySeason'])->name("seasons.index");

                    Route::get("/seasons/{season}/page", [AppClosetController::class, 'indexBySeasonByPage'])->name("seasons.index.page");

                    Route::get("/occasions/{occasion}", [AppClosetController::class, 'indexByOccasion'])->name("occasions.index");

                    Route::get("/occasions/{occasion}/page", [AppClosetController::class, 'indexByOccasionByPage'])->name("occasions.index.page");

                    Route::get("/{cloth}", [AppClosetController::class, 'outfitShow'])->name("show");

                });

                Route::post("/search", [AppOutfitClothController::class, 'indexSearch'])->name("search");

                Route::get("/page", [AppOutfitClothController::class, 'getByPage'])->name("index.page");

            });

            Route::prefix("/bookmark")->name("bookmark.")->group(function () {

                Route::get("/", [AppOutfitClothController::class, 'bookmarkIndex'])->name("index");

                Route::get("/page", [AppOutfitClothController::class, 'bookmarkGetByPage'])->name("index.page");

                Route::post("/", [AppOutfitClothController::class, 'bookmarkIndexSearch'])->name("indexSearch");

                Route::put("/{outfit}", [AppOutfitClothController::class, 'bookmark'])->name("update");

                Route::get("/{outfit}", [AppOutfitClothController::class, 'bookmarkShow'])->name("show");

            });

            Route::apiResource("closet", AppClosetController::class)->parameters(['closet' => 'cloth']);

            Route::apiResource("outfits", AppOutfitClothController::class);

            Route::post("/file", [AppUploadController::class, "get"])->middleware(["auth:sanctum", "client"]);

        });

    });

});

Route::prefix("/panel")->name("panel.")->group(function () {

    Route::group(['prefix' => '/v1'], function() {

        Route::prefix("/auth")->name("auth.")->group(function () {
            #login route
            Route::post('/login', [LoginController::class, 'login'])->name('login');
            #end

            #logout route
            Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware(["auth:sanctum", "admin"]);
            #end
        });

        Route::middleware(["auth:sanctum", "abilities:admin", "admin"])->group(function () {

            Route::prefix("/messages")->group(function () {

                Route::get("/recent", [MessageController::class, 'recent'])->name("recent");

                Route::get("/recent/page", [MessageController::class, 'recentByPage'])->name("recent.page");

                Route::post("/search", [MessageController::class, 'indexSearch'])->name("index.search");

                Route::post("/page", [MessageController::class, 'getByPage'])->name("index.page");

                Route::post("/{message}/reply", [MessageController::class, 'reply'])->name("reply");

                Route::get("/byDate", [MessageController::class, 'byDate'])->name("byDate");

            });

            Route::prefix("/blogs")->name("blogs.")->group(function () {

                Route::post("/search", [BlogController::class, 'indexSearch'])->name("index.search");

                Route::get("/page", [BlogController::class, 'getByPage'])->name("index.page");

                Route::prefix("/image")->name("image.")->group(function () {

                    Route::delete("/", [BlogController::class, 'deleteImage'])->name("delete");

                    Route::post("/", [BlogController::class, 'upload'])->name("upload");

                });

            });

            Route::prefix("/pages")->name("pages.")->group(function () {

                Route::put("/contact_us", [PanelLandingController::class, 'contact'])->name("contact");

                Route::get("/contact_us", [PanelLandingController::class, 'contact_us'])->name("contact_us");

                Route::put("/about_us", [PanelLandingController::class, 'about'])->name("about");

                Route::get("/about_us", [PanelLandingController::class, 'about_us'])->name("about_us");

                Route::put("/download", [PanelLandingController::class, 'download'])->name("download");

                Route::get("/download", [PanelLandingController::class, 'downloadShow'])->name("downloadShow");

            });

            Route::prefix("/colors")->name("colors.")->group(function () {

                Route::post("/search", [ColorController::class, 'indexSearch'])->name("index.search");

                Route::get("/page", [ColorController::class, 'getByPage'])->name("index.page");

            });

            Route::prefix("/occasions")->name("occasions.")->group(function () {

                Route::post("/search", [OccasionController::class, 'indexSearch'])->name("index.search");

                Route::get("/page", [OccasionController::class, 'getByPage'])->name("index.page");

            });

            Route::prefix("/seasons")->name("seasons.")->group(function () {

                Route::post("/search", [SeasonController::class, 'indexSearch'])->name("index.search");

                Route::get("/page", [SeasonController::class, 'getByPage'])->name("index.page");

            });

            Route::prefix("/categories")->name("categories.")->group(function () {

                Route::post("/search", [CategoryController::class, 'indexSearch'])->name("index.search");

                Route::get("/page", [CategoryController::class, 'getByPage'])->name("index.page");

                Route::prefix("/icon")->name("icon.")->group(function () {

                    Route::delete("/", [CategoryController::class, 'deleteIcon'])->name("delete");

                    Route::post("/", [CategoryController::class, 'upload'])->name("upload");

                });

            });

            Route::prefix("/genders")->name("genders.")->group(function () {

                Route::get("/page", [GenderController::class, 'getByPage'])->name("index.page");

                Route::post("/search", [GenderController::class, 'indexSearch'])->name("index.search");

            });

            Route::prefix("/clients")->name("clients.")->group(function () {

                Route::get("/page", [ClientController::class, 'getByPage'])->name("index.page");

                Route::post("/search", [ClientController::class, 'indexSearch'])->name("index.search");

                Route::prefix("/avatar")->name("avatar.")->group(function () {

                    Route::post("/", [ClientController::class, 'upload'])->name("avatar.upload");

                    Route::delete("/", [ClientController::class, 'deleteAvatar'])->name("delete");

                });

                Route::prefix("/{client}")->group(function () {

                    Route::put("/avatar", [ClientController::class, 'updateAvatar'])->name("avatar.update");

                    Route::prefix("/outfits")->name("outfits.")->group(function () {

                        Route::post("/search", [OutfitClothController::class, 'indexSearch'])->name("index.search");

                        Route::get("/{outfit}", [OutfitClothController::class, 'show'])->name("show");

                        Route::get("/", [OutfitClothController::class, 'index'])->name("index");

                    });

                    Route::prefix("/clothes")->name("clothes.")->group(function () {

                        Route::get("/", [ClosetController::class, 'index'])->name("index");

                        Route::get("/{cloth}", [ClosetController::class, 'show'])->name("show");

                        Route::post("/search", [ClosetController::class, 'indexSearch'])->name("index.search");

                    });

                });

            });

            Route::post("/file", [UploadController::class, "get"])->middleware(["auth:sanctum", "admin"]);

            Route::apiResources([
                "seasons" => SeasonController::class,
                "colors" => ColorController::class,
                "clients" => ClientController::class,
                "categories" => CategoryController::class,
                "blogs" => BlogController::class,
                "messages" => MessageController::class,
                "occasions" => OccasionController::class,
                "genders" => GenderController::class,
            ]);

        });

    });

});

Route::prefix("landing")->name("landing.")->group(function () {

    Route::group(['prefix' => 'v1'], function() {

        Route::prefix("/home")->name("home.")->group(function () {

            Route::get("/messages/recent", [LandingMessageController::class, 'recent'])->name("messages.recent");

            Route::get("/blogs/recent", [LandingBlogController::class, 'recentHome'])->name("blogs.recent");

        });

        Route::prefix("/blogs")->name("blogs.")->group(function () {

            Route::get("/recent", [LandingBlogController::class, 'recent'])->name("recent");

            Route::get("/{blog}", [LandingBlogController::class, 'show'])->name("show");

            Route::post("/search", [LandingBlogController::class, 'indexSearch'])->name("index.search");

        });

        Route::prefix("/pages")->name("pages.")->group(function () {

            Route::get("/about_us", [LandingController::class, 'about'])->name("about");

            Route::prefix("/contact_us")->name("contact.")->group(function () {

                Route::get("/", [LandingController::class, 'contact'])->name("show");

                Route::post("/", [LandingMessageController::class, 'store'])->name("store");

            });

        });

        Route::post("/file", [LandingUploadController::class, "get"]);

    });
});

//Route::resource("bodyShapes", BodyShapesController::class)->except(["edit", "create"]);
