<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Invoice extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'invoice_number',
        'total_vat',
        'total_price_excluding_vat',
        'total_price',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'total_vat' => 'decimal:2',
        'total_price_excluding_vat' => 'decimal:2',
        'total_price' => 'decimal:2',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
