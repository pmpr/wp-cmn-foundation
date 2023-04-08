<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643166697164a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto iiyuccyiiyoguicm; } $this->wrapper = new Wrapper(); iiyuccyiiyoguicm: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto iuaauoycciukeqaw; } self::$staticWrapper = new Wrapper(); iuaauoycciukeqaw: return self::$staticWrapper; } }
