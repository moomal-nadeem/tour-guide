<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ChartaccController;
use App\Http\Controllers\Admin\GroupregController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserinfoController;
use App\Http\Controllers\AddressinfoController;
use App\Http\Controllers\PaymentinfoController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\GfeedbackController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\CmailController;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Dompdf\Options;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/FeedbackGuide', function () {
    return view('FeedbackGuide');
});
Route::post('/FeedbackGuide', [GfeedbackController::class, 'FeedbackGuide'])->name('FeedbackGuide');
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/ourservices', function () {
    return view('ourservices');
});
Route::get('/guides', function () {
    return view('guides');
});
Route::get('/guideVisit/{id}', function () {
    return view('guideVisit');
});
Route::get('/guideHire/{id}', function () {
    return view('guideHire');
});
Route::get('/bill/{id}', function (Request $request) {
    try {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // (Optional) Setup options
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf->setOptions($options);

        $dompdf->loadHtml(view('/bill/{id}'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('demo.pdf', ['Attachment' => false]);
    } catch (\Exception $e) {
        dd($e->getMessage()); // Output any error messages
    }
})->middleware(['auth', 'verified'])->name('bill');
Route::get('/bill/{id}',[DealController::class, "bill"])->name('bill');



Route::get('/guides', [UserController::class, 'guides'])->name('guides');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DealController::class, 'dashboard'])->name('dashboard');
Route::get('/CompleteProfile', function () {
    return view('CompleteProfile');
})->middleware(['auth', 'verified'])->name('CompleteProfile');
Route::get('/userInfo', function () {
    return view('userInfo');
})->middleware(['auth', 'verified'])->name('userInfo');
Route::get('/addressInfo', function () {
    return view('addressInfo');
})->middleware(['auth', 'verified'])->name('addressInfo');
Route::get('/paymentInfo', function () {
    return view('paymentInfo');
})->middleware(['auth', 'verified'])->name('paymentInfo');

// View the guideHiers page
Route::get('/guideHire/{id}', function () {
    return view('guideHire');
})->middleware(['auth', 'verified'])->name('guideHire');

// Handle the POST request to create a deal
Route::post('/guideHire', [DealController::class, 'guideHire'])->name('guideHire');

// Fetch and display values for the user with the specified ID
Route::get('/guideHire/{id}', [UserController::class, 'fetchforBill'])->name('fetchforBill');

// Guide Deal Module ===================================================================================================================================

Route::get('/GNewDeal', function () {
    return view('GDeal.GNewDeal');
})->middleware(['auth', 'verified'])->name('GNewDeal');
Route::get('GNewDeal',[DealController::class, "GNewDeal"])->name('GNewDeal');

Route::get('/GAllDeal', function () {
    return view('GDeal.GAllDeal');
})->middleware(['auth', 'verified'])->name('GAllDeal');
Route::get('GAllDeal',[DealController::class, "GAllDeal"])->name('GAllDeal');

Route::get('/GCancleDeal', function () {
    return view('GDeal.GCancleDeal');
})->middleware(['auth', 'verified'])->name('GCancleDeal');
Route::get('GCancleDeal',[DealController::class, "GCancleDeal"])->name('GCancleDeal');

Route::get('/GCompletedDeal', function () {
    return view('GDeal.GCompletedDeal');
})->middleware(['auth', 'verified'])->name('GCompletedDeal');
Route::get('GCompletedDeal',[DealController::class, "GCompletedDeal"])->name('GCompletedDeal');

Route::get('/GConfirmDeal', function () {
    return view('GDeal.GConfirmDeal');
})->middleware(['auth', 'verified'])->name('GConfirmDeal');
Route::get('GConfirmDeal',[DealController::class, "GConfirmDeal"])->name('GConfirmDeal');

Route::get('/GInprocessDeal', function () {
    return view('GDeal.GInprocessDeal');
})->middleware(['auth', 'verified'])->name('GInprocessDeal');
Route::get('GInprocessDeal',[DealController::class, "GInprocessDeal"])->name('GInprocessDeal');
Route::get('/GNotConfirmDeal', function () {
    return view('GDeal.GNotConfirmDeal');
})->middleware(['auth', 'verified'])->name('GNotConfirmDeal');
Route::get('GNotConfirmDeal',[DealController::class, "GNotConfirmDeal"])->name('GNotConfirmDeal');

Route::get('/GReseivedPayment', function () {
    return view('GDeal.GReseivedPayment');
})->middleware(['auth', 'verified'])->name('GReseivedPayment');
Route::get('GReseivedPayment',[DealController::class, "GReseivedPayment"])->name('GReseivedPayment');

Route::get('/GRemainingPayment', function () {
    return view('GDeal.GRemainingPayment');
})->middleware(['auth', 'verified'])->name('GRemainingPayment');



Route::get('/slip/{id}', function (Request $request) {
    try {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // (Optional) Setup options
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf->setOptions($options);

        $dompdf->loadHtml(view('GDeal.slip'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('demo.pdf', ['Attachment' => false]);
    } catch (\Exception $e) {
        dd($e->getMessage()); // Output any error messages
    }
})->middleware(['auth', 'verified'])->name('slip');
Route::get('/slip/{id}',[DealController::class, "DealUser"])->name('DealUser');


Route::get('/slip2/{id}', function (Request $request) {
    try {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // (Optional) Setup options
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf->setOptions($options);

        $dompdf->loadHtml(view('GDeal.slip2'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('demo.pdf', ['Attachment' => false]);
    } catch (\Exception $e) {
        dd($e->getMessage()); // Output any error messages
    }
})->middleware(['auth', 'verified'])->name('slip2');
Route::get('GRemainingPayment',[DealController::class, "GRemainingPayment"])->name('GRemainingPayment');
Route::get('/makeProcess/{id}', [DealController::class, 'makeProcess'])->name('makeProcess');
Route::get('/makeComplete/{id}', [DealController::class, 'makeComplete'])->name('makeComplete');
Route::get('/makeCancle/{id}', [DealController::class, 'makeCancle'])->name('makeCancle');
Route::get('/makeProcess/{id}', [DealController::class, 'makeProcess'])->name('makeProcess');
Route::get('/ConfirmMail/{id}', [CmailController::class, 'ConfirmMail'])->name('confirmMail');
Route::get('/NotConfirmMail/{id}', [CmailController::class, 'NotConfirmMail'])->name('NotConfirmMail');

    
// ======================================================================================================================================================
Route::get('/CompleteProfileEdit', function () {
    return view('CompleteProfileEdit');
})->middleware(['auth', 'verified'])->name('CompleteProfileEdit');
Route::get('/userInfoEdit', function () {
    return view('userInfoEdit');
})->middleware(['auth', 'verified'])->name('userInfoEdit');
Route::get('/addressInfoEdit', function () {
    return view('addressInfoEdit');
})->middleware(['auth', 'verified'])->name('addressInfoEdit');
Route::get('/paymentInfoEdit', function () {
    return view('paymentInfoEdit');
})->middleware(['auth', 'verified'])->name('paymentInfoEdit');
Route::get('/picture', function () {
    return view('picture');
})->middleware(['auth', 'verified'])->name('picture');
Route::get('/video', function () {
    return view('video');
})->middleware(['auth', 'verified'])->name('video');
Route::get('/calendar', function () {
    return view('calendar');
})->middleware(['auth', 'verified'])->name('calendar');

Route::get('/Gfeedback', function () {
    return view('Gfeedback');
})->middleware(['auth', 'verified'])->name('Gfeedback');
Route::get('Gfeedback',[GfeedbackController::class, "Gfeedback"])->name('Gfeedback');
Route::get('web',[WebsiteController::class, "index"]);
Route::get('guideVisit/{id}',[UserController::class, "guideVisit"])->name('guideVisit');

Route::middleware('auth')->group(function () {

    Route::post('/calendar', [CalendarController::class, 'calendar'])->name('calendar');
    Route::get('calendar',[CalendarController::class, "dateList"]);

    Route::get('picture',[PictureController::class, "pictureList"]);
    Route::post('/picture', [PictureController::class, 'picture'])->name('picture');
    Route::delete('picture/{id}', [PictureController::class, 'deletePicture'])->name('deletePicture');

    Route::get('video',[VideoController::class, "videoList"]);
    Route::post('/video', [VideoController::class, 'video'])->name('video');
    Route::delete('video/{id}', [VideoController::class, 'deleteVideo'])->name('deleteVideo');

    Route::post('/editUserInfo', [UserController::class, 'editUserInfo'])->name('editUserInfo');
    Route::post('/userInfo', [UserinfoController::class, 'userInfo'])->name('userInfo');
    Route::post('/addressInfo', [AddressinfoController::class, 'addressInfo'])->name('addressInfo');
    Route::post('/paymentInfo', [PaymentinfoController::class, 'paymentInfo'])->name('paymentInfo');
    Route::post('/editUserInfoEdit', [UserController::class, 'editUserInfoEdit'])->name('editUserInfoEdit');
    Route::post('/userInfoEdit', [UserinfoController::class, 'userInfoEdit'])->name('userInfoEdit');
    Route::post('/addressInfoEdit', [AddressinfoController::class, 'addressInfoEdit'])->name('addressInfoEdit');
    Route::post('/paymentInfoEdit', [PaymentinfoController::class, 'paymentInfoEdit'])->name('paymentInfoEdit');
    Route::get('CompleteProfileEdit',[UserController::class, "byIdDataUser"]);
    Route::get('userInfoEdit',[UserinfoController::class, "byIdDataLang"]);
    Route::get('addressInfoEdit',[AddressinfoController::class, "byIdDataAddress"]);
    Route::get('paymentInfoEdit',[PaymentinfoController::class, "byIdDataPayment"]);

   

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('adminlogin');
    });

    Route::middleware('admin')->group(function () {
  

        Route::get('/accounts', function () {
            return view('admin.accounts');
        })->name('accounts');
        Route::get('/ChartAcc', function () {
            return view('admin.ChartAcc');
        })->name('ChartAcc');
        Route::get('/GroupReg', function () {
            return view('admin.GroupReg');
        })->name('GroupReg');

        Route::get('/AccountDetail', function () {
            return view('admin.AccountDetail');
        })->name('AccountDetail');

        // deal admin module links ===========================================================

        Route::get('/moomal', function () {
            return view('admin.moomal');
        })->name('moomal');
        Route::get('moomal', [DealController::class, 'moomal'])->name('moomal');
        Route::get('/pay/{id}', function () {
            return view('admin.pay');
        })->name('pay');
        Route::get('pay/{id}', [DealController::class, 'paybyID'])->name('paybyID');
    
        Route::post('/pay', [DealController::class, 'pay'])->name('pay');
        Route::get('/NewDealAdmin', function () {
            return view('admin.NewDealAdmin');
        })->name('NewDealAdmin');
        Route::get('NewDealAdmin', [DealController::class, 'NewDealAdmin'])->name('NewDealAdmin');

        Route::get('/AllDealAdmin', function () {
            return view('admin.AllDealAdmin');
        })->name('AllDealAdmin');
        Route::get('AllDealAdmin', [DealController::class, 'AllDealAdmin'])->name('AllDealAdmin');
        Route::get('/InprocessDealAdmin', function () {
            return view('admin.InprocessDealAdmin');
        })->name('InprocessDealAdmin');
        Route::get('InprocessDealAdmin', [DealController::class, 'InprocessDealAdmin'])->name('InprocessDealAdmin');
        Route::get('/CompletedDealAdmin', function () {
            return view('admin.CompletedDealAdmin');
        })->name('CompletedDealAdmin');
        Route::get('CompletedDealAdmin', [DealController::class, 'CompletedDealAdmin'])->name('CompletedDealAdmin');
        Route::get('/CancelDealAdmin', function () {
            return view('admin.CancelDealAdmin');
        })->name('CancelDealAdmin');
        Route::get('CancelDealAdmin', [DealController::class, 'CancelDealAdmin'])->name('CancelDealAdmin');
        
        Route::get('/ConfirmDealAdmin', function () {
            return view('admin.ConfirmDealAdmin');
        })->name('ConfirmDealAdmin');
        Route::get('ConfirmDealAdmin', [DealController::class, 'ConfirmDealAdmin'])->name('ConfirmDealAdmin');
        
        Route::get('/NotConfirmDealAdmin', function () {
            return view('admin.NotConfirmDealAdmin');
        })->name('NotConfirmDealAdmin');
        Route::get('NotConfirmDealAdmin', [DealController::class, 'NotConfirmDealAdmin'])->name('NotConfirmDealAdmin');

        Route::get('/AllGuideAdmin', function () {
            return view('admin.AllGuideAdmin');
        })->name('AllGuideAdmin');
        Route::get('/AllGuideAdmin', [UserController::class, 'AllGuideAdmin'])->name('AllGuideAdmin');
        Route::get('/AllowGuideAdmin', function () {
            return view('admin.AllowGuideAdmin');
        })->name('AllowGuideAdmin');
        Route::get('/AllowGuideAdmin', [UserController::class, 'AllowGuideAdmin'])->name('AllowGuideAdmin');
        
        Route::get('/BlockGuideAdmin', function () {
            return view('admin.BlockGuideAdmin');
        })->name('BlockGuideAdmin');
        Route::get('/BlockGuideAdmin', [UserController::class, 'BlockGuideAdmin'])->name('BlockGuideAdmin');
        Route::get('/makeAllow/{id}', [UserController::class, 'makeAllow'])->name('makeAllow');
        Route::get('/makeBlock/{id}', [UserController::class, 'makeBlock'])->name('makeBlock');


        Route::get('/AvailableGuides', function () {
            return view('admin.AvailableGuides');
        })->name('AvailableGuides');
        Route::get('/AvailableGuides', [UserController::class, 'AvailableGuides'])->name('AvailableGuides');
        Route::get('/PayableDealAdmin', [DealController::class, 'PayableDealAdmin'])->name('PayableDealAdmin');
        Route::get('/PaymentDoneDealAdmin', [DealController::class, 'PaymentDoneDealAdmin'])->name('PaymentDoneDealAdmin');
        
        Route::get('/NotAvailableGuides', function () {
            return view('admin.NotAvailableGuides');
        })->name('NotAvailableGuides');
        Route::get('/NotAvailableGuides', [UserController::class, 'NotAvailableGuides'])->name('NotAvailableGuides');

        
        // Route::get('accounts', [HomeController::class, 'index'])->name('accounts');
        Route::get('/GroupReg', [ChartaccController::class, 'showChartName'])->name('GroupReg');
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::post('/createChartAcc', [ChartaccController::class, 'createChartAcc'])->name('createChartAcc');
        Route::post('/createGroupReg', [GroupregController::class, 'createGroupReg'])->name('createGroupReg');
        
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    });
});

