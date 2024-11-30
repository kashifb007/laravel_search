<?php

namespace App\Http\Controllers;

use App\Actions\Search;
use App\DataTransferObjects\SearchDto;
use App\Http\Requests\SearchRequest;
use App\Http\Resources\SearchResource;

class SearchController extends Controller
{
    /**
     * API or App Search for products
     * @param SearchRequest $request
     * @param Search $action
     * @return SearchResource
     */
    public function __invoke(SearchRequest $request, Search $action)
    {
        $data = $action->handle(SearchDto::fromAppRequest($request));

        return new SearchResource($data);
    }
}
