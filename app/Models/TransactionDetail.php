<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TransactionDetail extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class, 'id', 'transaction_id');
    }

    /**
     * Get the user associated with the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productsize(): HasOne
    {
        return $this->hasOne(ProductSize::class, 'product_id', 'product_id');
    }
}
