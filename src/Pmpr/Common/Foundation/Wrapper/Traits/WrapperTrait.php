<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652b9c2925f06             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto okygssymuimommeg; } $this->wrapper = new Wrapper(); okygssymuimommeg: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto qiekksmyigmwmiws; } self::$staticWrapper = new Wrapper(); qiekksmyigmwmiws: return self::$staticWrapper; } }
