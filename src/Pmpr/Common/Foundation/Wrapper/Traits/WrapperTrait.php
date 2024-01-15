<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a51f6f3e3a7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto mkkwkugqkmyoqmuw; } $this->wrapper = new Wrapper(); mkkwkugqkmyoqmuw: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto kskywmmcaugieuiw; } self::$staticWrapper = new Wrapper(); kskywmmcaugieuiw: return self::$staticWrapper; } }
