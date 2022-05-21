<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Servies\PostServie;

class PostController extends Controller
{
   protected $serviceClass=PostServie::class;
   protected $storeRequestClass=PostStoreRequest::class;
   protected $updateRequestClass=PostUpdateRequest::class;
}
