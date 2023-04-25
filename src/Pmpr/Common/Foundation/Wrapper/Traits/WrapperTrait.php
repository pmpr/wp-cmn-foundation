<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644783315822d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto cgsuikiqggkikaae; } $this->wrapper = new Wrapper(); cgsuikiqggkikaae: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto yoosmuokogseueas; } self::$staticWrapper = new Wrapper(); yoosmuokogseueas: return self::$staticWrapper; } }
