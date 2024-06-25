<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Evolutionco\Repositories\UserRepositoryInterface;

class UserController extends Controller
{
    //
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function index()
    {
        $users = $this->userRepository->all();
       dd($users);
    }
}
