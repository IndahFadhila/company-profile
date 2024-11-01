<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KaryawanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'success' => true,
            'message' => $this->message ?? 'Data karyawan berhasil ditemukan.',
            'data' => $this->resource,
        ];
    }
}
