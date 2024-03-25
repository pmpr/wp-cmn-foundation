<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6601ae5f34a2d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto qmcmiosogysemwsc; } $this->wrapper = new Wrapper(); qmcmiosogysemwsc: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto eiaqgiaygokkeksu; } self::$staticWrapper = new Wrapper(); eiaqgiaygokkeksu: return self::$staticWrapper; } }
