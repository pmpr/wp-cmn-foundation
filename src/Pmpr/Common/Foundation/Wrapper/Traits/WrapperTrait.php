<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65b0ce75e5a31             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto ioawmqwmiwwawcms; } $this->wrapper = new Wrapper(); ioawmqwmiwwawcms: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto oooqmgaaiwkcyyyy; } self::$staticWrapper = new Wrapper(); oooqmgaaiwkcyyyy: return self::$staticWrapper; } }
