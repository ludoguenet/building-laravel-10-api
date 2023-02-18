<?php

declare(strict_types=1);

namespace App\Http\Resources\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin User
 */
final class UserResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array<string, int|string>
     */
    public function toArray(
        Request $request,
    ): array {
        return [
            'id' => $this->id,
            'email' => $this->email,
        ];
    }
}
