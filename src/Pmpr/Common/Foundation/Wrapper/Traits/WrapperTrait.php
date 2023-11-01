<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65425691bbe12             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto wwwyugiayoaucqiu; } $this->wrapper = new Wrapper(); wwwyugiayoaucqiu: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto iswgeeweeweswyoy; } self::$staticWrapper = new Wrapper(); iswgeeweeweswyoy: return self::$staticWrapper; } }
