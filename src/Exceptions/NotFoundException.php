<?php
/**
 * Package: vdhoangson/pencms-theme
 * Author: vdhoangson
 * Github: https://github.com/vdhoangson/pencms-theme
 * Web: vdhoangson.com
 */

namespace vdhoangson\Theme\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NotFoundException extends NotFoundHttpException {
    public function __construct($theme) {
        parent::__construct("Theme [ $theme ] not found!");
    }
}
