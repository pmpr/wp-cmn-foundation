<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6620ede1ae782             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto swwmkisacmieqiae; } $this->wrapper = new Wrapper(); swwmkisacmieqiae: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto imqeimsscmwgasys; } self::$staticWrapper = new Wrapper(); imqeimsscmwgasys: return self::$staticWrapper; } }
