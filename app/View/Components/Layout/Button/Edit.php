<?php

namespace App\View\Components\Layout\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Exception;

class Edit extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public $dbo;
    public $dbt;
   public $icon;
   public function __construct($dbo=null, $url=null, $dbt=null, $icon=null)
   {
       if(!$url) Throw New Exception("component ini memrlukan url");
       if(!$dbo) Throw New Exception("component ini memrlukan data-bs-toogle");
       if(!$dbt) Throw New Exception("component ini memrlukan data-bs-target");
       $this->url=url($url);
       $this->dbo=$dbo;
       $this->dbt=$dbt;
       $this->icon=$icon;
   }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.button.edit');
    }
}
