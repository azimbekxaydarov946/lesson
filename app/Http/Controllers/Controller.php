<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $servies;
    protected $serviesClass;
    protected $storeRequestClass;
    protected $updateRequestClass;

    public function __construct()
    {
        $this->servies = app($this->serviesClass);
    }
    public function index()
    {
        return $this->servies->index();
    }

    public function show($id)
    {
        $item = $this->servies->find($id);
        return $item;
    }

    public function store()
    {
        $request = app($this->storeRequestClass);
        $data = $request->validated();
        $item = $this->servies->store($data);

        return response()->json($item);
    }
    public function update($id)
    {
        $request = app($this->updateRequestClass);
        $data = $request->validated();
        $item = $this->servies->update($id, $data);

        return response()->json($item);
    }
    public function destroy($id)
    {
        $this->servies->destroy($id);

        return response()->json([
            'success' => true,
            'id' => $id
        ]);
    }
}
