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
use Illuminate\Database\Schema\Blueprint;
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
    Schema::create('carts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('customer_id')->nullable();
        $table->unsignedBigInteger('product_id');
        $table->unsignedBigInteger('product_variant_id')->nullable();
        $table->integer('quantity')->default(1);
        $table->decimal('price', 10, 2)->nullable();
        $table->string('session_id')->nullable();
        $table->timestamps();

        $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
    });
});

// function addDays($date, $days)
// {
//     // Return the timestamp in milliseconds
//     return strtotime("+$days days", $date) * 1000;
// }
