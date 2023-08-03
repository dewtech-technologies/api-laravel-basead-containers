<?php

namespace App\Services;

use App\Repositories\UserRepository;

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
    public function create($attributes) {
        return $this->userRepository->create($attributes);
    }

    public function update($id, $attributes) {
        return $this->userRepository->update($id, $attributes);
    }
    public function delete($id) {
        return $this->userRepository->delete($id);
    }
}
