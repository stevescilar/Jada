<?php

namespace App\Http\Controllers;

use App\Http\Middleware\isEmployer;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    const PPID_AMOUNT =  20;
    const WEEKLY_AMOUNT = 80;
    const MONTHLY_AMOUNT = 200;
    const CURRENCY = 'USD';



    public function __construct(){
        $this->middleware(['auth', isEmployer::class]);
    }
    

    
    public function subscribe()
    {
    return view ('subscription.index');
    }

    public function initiatePayment(Request $request){
        $plans = [
            'ppid' => [
                'name' => 'ppid',
                'description' => 'pay per invoice download',
                'amount' => self::PPID_AMOUNT,
                'currency'=>self::CURRENCY,
                'quantity' => 1
                
            ],
            
            'weekly' =>[
                'name' => 'weekly',
                'description' => 'Weekly subscription',
                'amount' => self::WEEKLY_AMOUNT,
                'currency'=>self::CURRENCY,
                'quantity' => 1
            ],
            
            'monthly' =>[
                'name' => 'monthly',
                'description' => 'Monthly subscription',
                'amount' => self::MONTHLY_AMOUNT,
                'currency'=>self::CURRENCY,
                'quantity' => 1
            ]
         ];
        // initiate payments

        Mpesa::setApiKey(config('services.mpesa.secret'));
        try {

        } catch(\Exception $e) {

        }
    }

    public function paymentSuccess(Request $request){
        //update db
    }

    public function cancel()
    {
        //redirect 
    }



}
