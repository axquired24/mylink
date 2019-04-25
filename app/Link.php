<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Link extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function lastClickStr($format='d F Y H:i A') {
        return \Carbon\Carbon::parse($this->last_click_at)->format($format);
    }
}
