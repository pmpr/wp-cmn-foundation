<?php
 namespace Pmpr\Common\Foundation\Decorator; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; abstract class Decorator implements ConstantInterface { public static function callFunctionIfExist($NBIQ2, $bEw4a = false, ...$qGdj8) { $OBYdl = $bEw4a; if (!function_exists($NBIQ2)) { goto z921D; } $OBYdl = call_user_func($NBIQ2, ...$qGdj8); z921D: return $OBYdl; } }
