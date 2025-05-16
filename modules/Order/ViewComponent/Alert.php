<?php

namespace Modules\Order\ViewComponent;

use Illuminate\View\Component;

class Alert extends Component
{
    public function __construct(public string $message) {}

    public function render()
    {
        return view('order::alert');
    }
}
