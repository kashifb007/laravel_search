<?php

namespace App\Http\Controllers;

use App\Actions\Search;
use App\DataTransferObjects\SearchDto;
use App\Http\Requests\SearchRequest;
use App\Http\Resources\SearchResource;
use App\Repositories\SearchRepository;

class SearchController extends Controller
{
    /**
     * API or App Search for products
     *
     * @param SearchRequest $request
     * @param SearchRepository $repository
     * @return SearchResource
     */
    public function __invoke(SearchRequest $request, SearchRepository $repository): SearchResource
    {
        $action = new Search($repository);
        $data = $action->handle(SearchDto::fromAppRequest($request));

        return new SearchResource($data);
    }
}
