<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64342785a8bf3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto mkuwumgwoyasswam; } $this->wrapper = new Wrapper(); mkuwumgwoyasswam: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto mrocimywqwigwumc; } self::$staticWrapper = new Wrapper(); mrocimywqwigwumc: return self::$staticWrapper; } }
