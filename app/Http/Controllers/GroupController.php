<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class GroupController extends Controller
{
    public function index(Request $request): \Inertia\Response
    {
        $result = [];
        $currentRightSide = 'groups';
        if (isset($request->fc)) {
            $result = User::where('email', 'LIKE', "%$request->fc%")->orWhere('name', 'LIKE', "%$request->fc%")->get();
            $currentRightSide = 'add-contact';
        }

        return Inertia::render('Home', [
            'findContacts' => $result,
            'rightSide' => $currentRightSide
        ]);
    }
}
