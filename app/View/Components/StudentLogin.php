<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StudentLogin extends Component
{
    public $type;
    public $name;
    public $label;
    public $placeholder;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $name, $label, $placeholder)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.student-login');
    }
}
