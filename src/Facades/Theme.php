<?php
/**
 * Package: vdhoangson/pencms-theme
 * Author: vdhoangson
 * Github: https://github.com/vdhoangson/pencms-theme
 * Web: vdhoangson.com
 */

namespace vdhoangson\Theme\Facades;

use Illuminate\Support\Facades\Facade;

class Theme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \vdhoangson\Theme\Contracts\ThemeContract::class;
    }
}
