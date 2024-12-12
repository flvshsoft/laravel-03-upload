<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard',
            'username' => 'Admin',
            'stats' => [
                'users' => 150,
                'posts' => 45,
                'comments' => 78,
            ],
        ];

        // Return view untuk dashboard admin
        return view('admin/dashboard', $data);
    }
}
