<?php

declare(strict_types=1);

namespace App\Responses\Invoice;

use App\Http\Resources\Invoice\InvoiceCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

final class InvoiceCollectionResponse implements Responsable
{
    public function __construct(
        private readonly InvoiceCollection $invoiceCollection,
        private readonly int $status,
    ) {
    }

    public function toResponse($request): JsonResponse
    {
        return response()->json(
            data: $this->invoiceCollection,
            status: $this->status,
        );
    }
}
