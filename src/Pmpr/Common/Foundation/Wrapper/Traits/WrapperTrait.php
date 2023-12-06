<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65709cce278e5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto wwmkccqcyqkskosu; } $this->wrapper = new Wrapper(); wwmkccqcyqkskosu: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto mckcswqwkwukogqy; } self::$staticWrapper = new Wrapper(); mckcswqwkwukogqy: return self::$staticWrapper; } }
