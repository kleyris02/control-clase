<?php

namespace App\View\Components;

use App\Models\Notifiaction;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserInfo extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $notifications = Notifiaction::where('seen', false)->where('to_user_id', auth()->id())->count();

        return view('components.user-info', [
            'notifications' => $notifications
        ]);
    }
}
