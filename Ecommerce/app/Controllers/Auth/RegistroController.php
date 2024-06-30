<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Entities\User;

class RegistroController extends BaseController {

    public function index() {
        return view('Auth\Register');
    }

    public function store() {

        $userModel = new UserModel();
        $userData = $this->request->getPost();

        $user = new User();
        $user->fill($userData);

        if ($userModel->save($user)) {
            echo "Usuário registrado com sucesso!";
        } else {
            echo "Falha ao registrar usuário";
        }
    }
}