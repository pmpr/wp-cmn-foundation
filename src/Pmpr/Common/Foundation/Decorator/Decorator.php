<?php
 namespace Pmpr\Common\Foundation\Decorator; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; abstract class Decorator implements ConstantInterface { public static function callFunctionIfExist($WzZ7g, $MK5NP = false, ...$ONFmc) { $J1i9a = $MK5NP; if (!function_exists($WzZ7g)) { goto hWAza; } $J1i9a = call_user_func($WzZ7g, ...$ONFmc); hWAza: return $J1i9a; } }
