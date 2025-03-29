<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlans extends Model
{
    /** @use HasFactory<\Database\Factories\SubscriptionPlansFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'duration',
        'max_uploads'
    ];
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class); 
    }
    

}
