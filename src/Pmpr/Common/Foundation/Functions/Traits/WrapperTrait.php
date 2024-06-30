<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66812ccd0a7ad             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto igygkagcaiiiumqo; } $this->wrapper = new Wrapper(); igygkagcaiiiumqo: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto qicikuqekgkawwqo; } self::$staticWrapper = new Wrapper(); qicikuqekgkawwqo: return self::$staticWrapper; } }
