<?php

namespace App\Http\Controllers;

use App\Models\MpBooking;
use App\Models\MpBookingDetail;
use App\Models\MpCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuoteController extends Controller
{
    function basicDetails(Request $request) {
        $this->validate($request, [
            'drop_off_date' => 'required|date|after:today',
            'drop_off_time_H' => 'required',
            'drop_off_time_M' => 'required',
            'pick_up_date' => 'required|date|after_or_equal:drop_off_date',
            'pick_up_time_H' => 'required',
            'pick_up_time_M' => 'required',
        ],
        [
            'pick_up_date.after_or_equal' => 'Pick-up date must be after or equal to the drop-off date.',
        ]);

        $request->session()->put('basic_details', $request->all());
        return redirect()->route('details');
    }
    function book(Request $request) {
        $this->validate($request, [
            'terms_and_conditions' => 'accepted',
            'cancellation_policy' => 'accepted',
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'customer_email' => 'required|email',
            'phone' => 'nullable|numeric',
            'model' => 'required',
            'colour' => 'required',
            'reg_no' => 'required',
            'terminal_in' => 'nullable',
            'terminal_out' => 'nullable',
            'meeting_h' => 'required',
            'meeting_m' => 'required',
            'coming_h' => 'required',
            'coming_m' => 'required',
            'arr_flight_no' => 'required',
        ]);
        try {
            DB::transaction(function() use($request){
                $netTotal = 0;
                $cost = 0;
                $offer = 0;
                $coupon = 0;
                $customer = MpCustomer::create($request->all() + ['customer_password'=> '', 'tocken' => '', 'dob' => '', 'member_since' => date('Y-m-d'), 'complained' => 0]);
                $booking = MpBooking::create(['package_id' => 1, 'customer_id' => $customer->customer_id, 'card_id' => 0, 'transId' => '', 'cost' => $cost, 'offer' => $offer, 'coupon' => $coupon, 'coupon_code' => '', 'booking_fee' => 1, 'net_total' => $netTotal, 'created_on' => date('y-m-d h:i:s'), 'created_by' => '', 'status' => 1]);
                MpBookingDetail::create(['booking_id' => $booking->booking_id] + $request->all() );

            });

            toast('Booking created successfully', 'success');
        } catch (\Throwable $th) {
            return $th;
            toast('Booking failed', 'error');
        }

        return back();
    }
}
