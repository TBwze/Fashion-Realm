<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'size', 'quantity'];

    /**
     * Get the user that owns the Cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productsize(): BelongsTo
    {
        return $this->belongsTo(ProductSize::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
