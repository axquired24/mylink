<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Link;

class PanelController extends Controller
{
    public function dashboard() {
        $user = auth()->user();
        return view("panel.dashboard", [
            'user' => $user,
            'totalLink' => $user->links->count(),
            'linkByPopularity' => $user->links->sortBy(function($v) {
                return $v->click_count;
            })->reverse()->values(),
            'linkByRecent' => $user->links->sortBy(function($v) {
                return $v->last_click_at;
            })->reverse()->values(),
        ]);
    }
}
