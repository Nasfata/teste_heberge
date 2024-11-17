<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Activity;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();

        return view('dashboard.index',compact('totalUsers'));
    }
}
