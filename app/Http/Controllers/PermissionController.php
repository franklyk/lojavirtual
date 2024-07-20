<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PermissionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        // Criando um usuário e dando permissão de admin
        $user = User::factory()->create();
        auth()->login($user);
        $user->assignPermission('admin');

        Gate::authorize(['admin']);

        return 'Você é um Admin!';

    }
}
