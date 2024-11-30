<?php

namespace App\Actions;

use App\DataTransferObjects\SearchDto;
use App\Repositories\SearchRepository;

readonly class Search
{
    public function __construct(private SearchRepository $repository) {}

    public function handle(SearchDto $dto): array
    {
        return $this->repository->search(
            $dto
        );
    }
}
