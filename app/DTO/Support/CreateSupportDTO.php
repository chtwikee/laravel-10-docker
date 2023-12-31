<?php

namespace App\DTO\Support;

use App\Http\Requests\StoreUpdateSupport;

class CreateSupportDTO
{
    public function __construct(
        public string $subject,
        public string $status,
        public string $body,
    ) {
    }

    public static function makeFromRequest(StoreUpdateSupport $request): self
    {
        return new self(
            $request->subject,
            'a',
            $request->body
        );
    }
}
