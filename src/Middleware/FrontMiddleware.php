<?php
/**
 * Package: vdhoangson/pencms-theme
 * Author: vdhoangson
 * Github: https://github.com/vdhoangson/pencms-theme
 * Web: vdhoangson.com
 */

namespace vdhoangson\Theme\Middleware;

use Closure;

class FrontMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next) {
        \Theme::setTheme(config('theme.frontend.folder'), config('theme.frontend.active'));

        return $next($request);
    }
}
