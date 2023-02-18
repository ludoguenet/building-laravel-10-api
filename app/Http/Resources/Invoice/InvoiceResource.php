<?php

declare(strict_types=1);

namespace App\Http\Resources\Invoice;

use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class InvoiceResource extends JsonResource
{
    public function toArray(
        Request $request
    ): array {
        return [
            'id' => $this->id,
            'total_price' => $this->total_price,
            'user' => UserResource::make($this->whenLoaded('user')),
        ];
    }
}
