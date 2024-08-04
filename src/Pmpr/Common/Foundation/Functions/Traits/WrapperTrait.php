<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66afcf114dfe8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto iqamqqkameysgiwm; } $this->wrapper = new Wrapper(); iqamqqkameysgiwm: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto qeoakikuyiyksguo; } self::$staticWrapper = new Wrapper(); qeoakikuyiyksguo: return self::$staticWrapper; } }
