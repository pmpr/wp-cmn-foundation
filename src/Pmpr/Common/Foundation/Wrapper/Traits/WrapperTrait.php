<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65f00b402ca7e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto oaeuicecqcyymume; } $this->wrapper = new Wrapper(); oaeuicecqcyymume: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto seoyoigiqioiakyq; } self::$staticWrapper = new Wrapper(); seoyoigiqioiakyq: return self::$staticWrapper; } }
