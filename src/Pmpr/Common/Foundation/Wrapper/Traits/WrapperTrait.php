<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             655528d270d17             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto qowiysuioeqesgwc; } $this->wrapper = new Wrapper(); qowiysuioeqesgwc: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto yqgoeeuaasekacys; } self::$staticWrapper = new Wrapper(); yqgoeeuaasekacys: return self::$staticWrapper; } }
