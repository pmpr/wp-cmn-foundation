<?php
 namespace Pmpr\Common\Foundation\Decorator; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; abstract class Decorator implements ConstantInterface { public static function callFunctionIfExist($TvcZP, $Q7bdl = false, ...$yyeXo) { $CekGt = $Q7bdl; if (!function_exists($TvcZP)) { goto S8Bs9; } $CekGt = call_user_func($TvcZP, ...$yyeXo); S8Bs9: return $CekGt; } }
