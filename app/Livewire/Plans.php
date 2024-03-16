<?php

namespace App\Livewire;

use Livewire\Component;

class Plans extends Component
{
    public $plans = [
        [
            'name' => 'Free',
            'slug' => 'free',
            'description' => 'Individuals or small businesses with moderate social media needs.',
            'price' => '0',
            'interval' => 'month',
            'features' => [
                'Feature 1',
                'Feature 2',
                'Feature 3',
                'Feature 4',
                'Feature 5',
            ],
            // productId: 1,
            // variantId: 1,
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
            // productId: 193449, // for lemonsqueezy only
            // variantId: 255829, // for lemonsqueezy only
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
            // productId: 193449, // for lemonsqueezy only
            // variantId: 255829, // for lemonsqueezy only
        ],
    ];

    public function render()
    {
        return view('livewire.plans');
    }
}
