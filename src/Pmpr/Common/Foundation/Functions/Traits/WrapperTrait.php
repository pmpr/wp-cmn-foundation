<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a5844728f1d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto ugqqumgemgqkgowm; } $this->wrapper = new Wrapper(); ugqqumgemgqkgowm: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto woeskwkwwgwgmowo; } self::$staticWrapper = new Wrapper(); woeskwkwwgwgmowo: return self::$staticWrapper; } }
