<?php

namespace App\View\Components\Layout\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Exception;

use function Laravel\Prompts\error;

class MenuItem extends Component
{
  public $url;
  public $label;
  public $icon;
    public function __construct($url = null, $icon = null, $label = null)
    {
        if(!$url && $icon && $label ) throw new  Exception("component ini memerlukan component url label dan icon");
        $this->label = $label;
        $this->icon= $icon;
        $this->url = url($url);

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.sidebar.menu-item');
    }
}
