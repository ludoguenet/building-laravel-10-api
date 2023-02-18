<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Invoices;

use App\Http\Controllers\Controller;
use App\Http\Resources\Invoice\InvoiceCollection;
use App\Models\Invoice;
use Illuminate\Http\Request;

final class IndexController extends Controller
{
    public function __invoke(
        Request $request,
    ): InvoiceCollection {
        return new InvoiceCollection(
            resource: Invoice::query()
                ->with(relations: [
                    'user',
                ])
                ->where(
                    column: 'user_id',
                    operator: '=',
                    value: $request->user()->id,
                )
                ->paginate(
                    perPage: 25,
                ),
        );
    }
}
