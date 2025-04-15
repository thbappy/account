<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::paginate(10);

        return response()->json([
            'status' => true,
            'message' => 'User list fetched successfully.',
            'data' => $users,
        ]);
    }
}
