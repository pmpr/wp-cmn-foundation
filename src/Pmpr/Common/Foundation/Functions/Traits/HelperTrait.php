<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6669766bc975d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto cgmukwicwgikewei; } $this->helper = new Helper(); cgmukwicwgikewei: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto iuasemkmccmcauoc; } self::$staticHelper = new Helper(); iuasemkmccmcauoc: return self::$staticHelper; } }
