<?php

namespace App\Http\DataComposers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthComposer
{
    public function compose(View $view)
    {
        $account = User::select('*')->where('id', Auth::id())->first();

        $view->with('account', $account);
    }
}
