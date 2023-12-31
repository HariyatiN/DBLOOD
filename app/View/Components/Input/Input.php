<?php

namespace App\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * The title of the input.
     *
     * @var string
     */
   
     public $name;
     public $title;
     public $type;
     public $value;
    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $type
     * @param string $placeholder
     * @param string $name
     * @param string $value
     */
    public function __construct($title, $type, $placeholder = null, $name , $value =null)
    {
      $this->name = $name;
      $this->type = $type;
      $this->title = $title;
      $this->value = $value;
  
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.input.input');
    }
}
