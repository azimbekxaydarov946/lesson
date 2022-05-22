<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Servies\PostService;

class PostController extends Controller
{
   protected $serviesClass=PostService::class;
   protected $storeRequestClass=PostStoreRequest::class;
   protected $updateRequestClass=PostUpdateRequest::class;
}
