<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6474c5025eaa2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto cgsuikiqggkikaae; } $this->helper = new Helper(); cgsuikiqggkikaae: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto yoosmuokogseueas; } self::$staticHelper = new Helper(); yoosmuokogseueas: return self::$staticHelper; } }
