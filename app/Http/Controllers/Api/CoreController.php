<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CoreController extends Controller
{
    /**
     * Cette fontion retourne tous les superviseurs de zone
     */
    public function getSupervisor()
    {
        /*$roles = Spatie\Permission\Models\Role::all();
        $users = \App\User::with('roles')->get();
        $supervisors = $users->reject(function ($user, $key) {
            return $user->hasRole('Supervisor');
        });
        return response()->json($supervisors);*/

        $data = User::all();
        return response()->json($data);
    }
}
