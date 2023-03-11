<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             640d04d443124             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto qwkyuqqgkugqggqo; } $this->wrapper = new Wrapper(); qwkyuqqgkugqggqo: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto cacaysyqsqaauawm; } self::$staticWrapper = new Wrapper(); cacaysyqsqaauawm: return self::$staticWrapper; } }
