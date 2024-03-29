<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaddlePlans extends Component
{
    public $prices = [
        [
            'name' => 'Free',
            'slug' => 'free',
            'description' => 'Individuals or small businesses with moderate social media needs.',
            'price' => 0,
            'interval' => 'month',
            'features' => [
                'Feature 1',
                'Feature 2',
                'Feature 3',
                'Feature 4',
                'Feature 5',
            ],
            'priceId' => null,
            'checkout' => null,
        ],
        [
            'name' => 'Starter',
            'slug' => 'starter', // used by stripe, should be your stripe price id
            'description' => 'Individuals or small businesses with moderate social media needs.',
            'price' => '9.99',
            'interval' => 'month',
            'features' => [
                'Everything in free',
                'Feature 6',
                'Feature 7',
                'Feature 8',
            ],
            'priceId' => 'pri_01ht4q7xjjbgmeyxr7sgkmzkmt', // Paddle Price ID
        ],
        [
            'name' => 'Pro',
            'slug' => 'pro', // used by stripe, should be your stripe price id
            'description' => 'Professional bloggers, influencers, or mid-sized businesses.',
            'price' => '19.99',
            'interval' => 'month',
            'features' => [
                'Everything in "Pro"',
                'Feature 9',
                'Feature 10',
                'Feature 11',
            ],
            'priceId' => 'pri_01ht4q7xjjbgmeyxr7sgkmzkmt', // Paddle Price ID
        ],
    ];

    public function render()
    {
        $plans = collect($this->prices)->map(function ($plan) {
            if ($plan['priceId']) {
                // If your checkout requires auth user
                // Replace this with Auth::user()->checkout($plan['priceId'])->returnTo(route('dashboard'))
                $plan['checkout'] = \Laravel\Paddle\Checkout::guest([$plan['priceId']])
                    ->returnTo(route('dashboard'));
            }

            return $plan;
        });

        return view('livewire.paddle-plans')->with(['plans' => $plans]);
    }
}
