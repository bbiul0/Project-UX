<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;
use App\Services\MidtransService;
use DB;

class PaymentController extends Controller
{
    public function getSnapToken(Request $request){
    // This line ensures the config gets loaded
    new MidtransService(); // instantiate it

    $params = [
        'transaction_details' => [
            'order_id' => uniqid(),
            'gross_amount' => (int) $request->price,
        ]
    ];

    $snapToken = Snap::getSnapToken($params);
    return response()->json(['snap_token' => $snapToken]);
    }

    public function paymentSuccess(Request $request) {
        $userId = auth()->id(); // assuming you're using Laravel auth
        $bookId = $request->idbook;

        DB::table('buybook')->insert([
            'tanggal' => now(),
            'user_id' => $userId,
            'book_id' => $bookId
        ]);

        return response()->json(['message' => 'Buku sukses dibeli!']);
    }

}
