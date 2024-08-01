<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ab90b39bd3e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto cecwiqciigmgyoem; } $this->wrapper = new Wrapper(); cecwiqciigmgyoem: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto uwqqmumicaygiukc; } self::$staticWrapper = new Wrapper(); uwqqmumicaygiukc: return self::$staticWrapper; } }
