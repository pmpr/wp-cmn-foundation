<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663029441b0a9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto mweoqymwyuimuakm; } $this->wrapper = new Wrapper(); mweoqymwyuimuakm: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto swwmkisacmieqiae; } self::$staticWrapper = new Wrapper(); swwmkisacmieqiae: return self::$staticWrapper; } }
