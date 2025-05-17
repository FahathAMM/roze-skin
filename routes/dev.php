<?php

use Illuminate\Support\Str;
use App\Models\Mail\MailLog;
use App\Providers\JTIService;
use App\Mail\OrderInvoiceMail;
use App\Models\Order\OrderLog;
use App\Models\Shipment\Shipment;
use App\Models\Pickup\OrderPickup;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Models\Pickup\PickupTracking;
use Illuminate\Support\Facades\Route;
use App\Models\Shipment\OrderTracking;
use Illuminate\Support\Facades\Schema;
use App\Models\Shipment\ShipmentDetail;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\BufferedOutput;
use App\Http\Controllers\Pages\Application\MailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/dev1', function () {
    Schema::dropIfExists('customers');
    Schema::dropIfExists('wishlists');
    Schema::dropIfExists('order_items');
    Schema::dropIfExists('orders');
});

// function addDays($date, $days)
// {
//     // Return the timestamp in milliseconds
//     return strtotime("+$days days", $date) * 1000;
// }
