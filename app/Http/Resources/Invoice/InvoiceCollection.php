<?php

declare(strict_types=1);

namespace App\Http\Resources\Invoice;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class InvoiceCollection extends ResourceCollection
{
    public $collects = InvoiceResource::class;

    /**
     * @param Request $request
     * @return array<string, mixed>
     */
    public function toArray(
        Request $request,
    ): array {
        return [
            'data' => $this->collection,
        ];
    }
}
