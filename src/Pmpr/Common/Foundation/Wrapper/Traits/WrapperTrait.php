<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a19fb31e9dc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto ycgikgowwaioqugw; } $this->wrapper = new Wrapper(); ycgikgowwaioqugw: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto yemwoomcwaoeyoag; } self::$staticWrapper = new Wrapper(); yemwoomcwaoeyoag: return self::$staticWrapper; } }
