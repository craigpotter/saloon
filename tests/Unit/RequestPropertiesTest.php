<?php

use Sammyjo20\Saloon\Helpers\DataBag;
use Sammyjo20\Saloon\Helpers\ContentBag;
use Sammyjo20\Saloon\Helpers\MiddlewarePipeline;
use Sammyjo20\Saloon\Tests\Fixtures\Requests\UserRequest;
use Sammyjo20\Saloon\Tests\Fixtures\Requests\DefaultPropertiesRequest;

test('you can retrieve all the request parameters methods', function () {
    $request = new UserRequest;

    expect($request->headers())->toBeInstanceOf(ContentBag::class);
    expect($request->queryParameters())->toBeInstanceOf(ContentBag::class);
    expect($request->config())->toBeInstanceOf(ContentBag::class);
    expect($request->data())->toBeInstanceOf(DataBag::class);
    expect($request->middlewarePipeline())->toBeInstanceOf(MiddlewarePipeline::class);
});

test('all of the request properties can have default properties', function () {
    $request = new DefaultPropertiesRequest;

    expect($request->headers())->toEqual(new ContentBag(['X-Favourite-Artist' => 'Luke Combs']));
    expect($request->queryParameters())->toEqual(new ContentBag(['format' => 'json']));
    expect($request->data())->toEqual(new DataBag(['song' => 'Call Me']));
    expect($request->config())->toEqual(new ContentBag(['debug' => true]));
});
