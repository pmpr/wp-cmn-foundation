<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6534f9ce1d715             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto ciuwaqyasauagkeu; } $this->wrapper = new Wrapper(); ciuwaqyasauagkeu: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto gakmkuaayakeymaa; } self::$staticWrapper = new Wrapper(); gakmkuaayakeymaa: return self::$staticWrapper; } }
