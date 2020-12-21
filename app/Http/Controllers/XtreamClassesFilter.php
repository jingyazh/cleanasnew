<?php

namespace App\Http\Controllers;

use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;

use App\User;
use Auth;

class XtreamClassesFilter implements FilterInterface
{
    public function transform($item, Builder $builder)
    {
        $curuser =  Auth::user(); 

        if (! isset($item['header'])) {
            $item['classes'] = $this->makeClasses($item);
            $item['class'] = implode(' ', $item['classes']);
            $item['top_nav_classes'] = $this->makeClasses($item, true);
            $item['top_nav_class'] = implode(' ', $item['top_nav_classes']);

        }

        return $item;
    }

    protected function makeClasses($item, $topNav = false)
    {
        $classes = [];

        if ($item['active']) {
            $classes[] = 'active';
        }

        if (isset($item['submenu'])) {
            if ($topNav) {
                $classes[] = 'dropdown';
            } else {
                $classes[] = 'nav-item';
            }
        }

        return $classes;
    }
}
