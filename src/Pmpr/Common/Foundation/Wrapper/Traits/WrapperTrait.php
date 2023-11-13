<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6551d64d06a2b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto wumkcikqsegaceuy; } $this->wrapper = new Wrapper(); wumkcikqsegaceuy: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto gmmcayeamkkksegg; } self::$staticWrapper = new Wrapper(); gmmcayeamkkksegg: return self::$staticWrapper; } }
