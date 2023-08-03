<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService {

    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function getAll() {
        return $this->userRepository->getAll();
    }

    public function getById($id) {
        return $this->userRepository->getById($id);
    }
    public function create($request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->remember_token = $request->remember;
        $user->save();
        return $user;
    }

    public function update($id, $attributes) {
        return $this->userRepository->update($id, $attributes);
    }
    public function delete($id) {
        return $this->userRepository->delete($id);
    }
}
