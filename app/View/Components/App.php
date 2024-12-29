<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Class App
 *
 * Represents a view component for the application.
 *
 * @package App\View\Components
 */
class App extends Component
{
    /**
     * The title of the component.
     *
     * @var string
     */
    public $titre;

    /**
     * Create a new component instance.
     *
     * @param string $titre The title of the component.
     */
    public function __construct($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.app');
    }
}
