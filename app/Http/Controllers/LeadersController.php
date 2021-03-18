<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Http\Controllers\TreeController;

class LeadersController extends Controller
{

    public $treeController;

    public function __construct()
    {
        $this->treeController = new TreeController();
    }

    public function index(){

        $users = User::all();

        foreach ($users as $user) {
            $user->referidos = count($this->treeController->getChidrens2($user->id, [], 1, 'referred_id', 0));
        }

        View::share('titleg', 'Lideres');
        return view('leaders.index')
        ->with('user', $users);
    }
}
