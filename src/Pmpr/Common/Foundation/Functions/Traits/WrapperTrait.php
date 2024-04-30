<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630fafa1a4cd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto kuwecmygikeyisuq; } $this->wrapper = new Wrapper(); kuwecmygikeyisuq: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto augwgqgcukgkywiw; } self::$staticWrapper = new Wrapper(); augwgqgcukgkywiw: return self::$staticWrapper; } }
