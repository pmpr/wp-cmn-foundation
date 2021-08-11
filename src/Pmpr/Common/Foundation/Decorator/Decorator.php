<?php
 namespace Pmpr\Common\Foundation\Decorator; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; abstract class Decorator implements ConstantInterface { public static function callFunctionIfExist($Xqv4m, $rc5HP = false, ...$MDDYN) { $vhHTR = $rc5HP; if (!function_exists($Xqv4m)) { goto ZaIdy; } $vhHTR = call_user_func($Xqv4m, ...$MDDYN); ZaIdy: return $vhHTR; } }
