<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6463ac09b6c4e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto skwuueyuqkueasuu; } $this->wrapper = new Wrapper(); skwuueyuqkueasuu: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto oeoeeqeaokougsec; } self::$staticWrapper = new Wrapper(); oeoeeqeaokougsec: return self::$staticWrapper; } }
