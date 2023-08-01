<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navbar extends Component
{

    /**
     * The user data.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * Create a new component instance.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
