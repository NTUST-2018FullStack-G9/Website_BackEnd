<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $table = 'carts';

    protected $fillable = [
        'name',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
