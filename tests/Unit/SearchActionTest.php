<?php

test('search returns data', function () {
    $repository = new \App\Repositories\SearchRepository;
    $action = new \App\Actions\Search($repository);
    $dto = new \App\DataTransferObjects\SearchDto('ipad', 0, \App\Enums\SortType::ASC);
    $data = $action->handle($dto);
    $count = count($data);

    expect($count)->toBeGreaterThan(0);
});

test('search returns data without sort parameter', function () {
    $repository = new \App\Repositories\SearchRepository;
    $action = new \App\Actions\Search($repository);
    $dto = new \App\DataTransferObjects\SearchDto('ipad', 0, null);
    $data = $action->handle($dto);
    $count = count($data);

    expect($count)->toBeGreaterThan(0);
});

test('search returns NO data', function () {
    $repository = new \App\Repositories\SearchRepository;
    $action = new \App\Actions\Search($repository);
    $dto = new \App\DataTransferObjects\SearchDto('adsadsadsa', 0, \App\Enums\SortType::ASC);
    $data = $action->handle($dto);
    $count = count($data);

    expect($count)->toBe(0);
});
