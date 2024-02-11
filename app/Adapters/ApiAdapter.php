<?php

namespace App\Adapters;

use App\Http\Resources\DefaultResource;
use App\Repositories\PaginationInterface;

class ApiAdapter
{
    public static function toJson(
        PaginationInterface $data
    ){
        return DefaultResource::collection($data->items())
            ->additional([
                'meta' => [
                    'total' => $data->total(),
                    'primeira_pagina' => $data->isFirstPage(),
                    'ultima_pagina' => $data->isLastPage(),
                    'pagina_atual' => $data->currentPage(),
                    'proxima_pagina' => $data->getNumberNextPage(),
                    'pagina_anterior' => $data->getNumberPreviousPage(),
                ]
            ]);
    }

}