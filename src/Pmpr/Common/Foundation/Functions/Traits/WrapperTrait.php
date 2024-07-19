<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669ada81ac791             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto aumiwewkmkcyqsic; } $this->wrapper = new Wrapper(); aumiwewkmkcyqsic: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto ukwaqucywiqsqcmw; } self::$staticWrapper = new Wrapper(); ukwaqucywiqsqcmw: return self::$staticWrapper; } }
