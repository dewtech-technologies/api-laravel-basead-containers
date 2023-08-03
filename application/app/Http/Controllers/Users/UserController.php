<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->userService->getAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->userService->create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->userService->getById($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function getById(string $id)
    {
        return $this->userService->getById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->userService->update($id, $request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->userService->delete($id);
    }
}
