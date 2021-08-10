<?php
 namespace Pmpr\Common\Foundation\Decorator; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; abstract class Decorator implements ConstantInterface { public static function callFunctionIfExist($TaHeK, $ToEf5 = false, ...$I7M3F) { $gbg32 = $ToEf5; if (!function_exists($TaHeK)) { goto RkAdt; } $gbg32 = call_user_func($TaHeK, ...$I7M3F); RkAdt: return $gbg32; } }
