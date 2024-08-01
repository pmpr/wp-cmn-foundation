<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ab90b39bd3e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto wassuqquwikiawos; } $this->helper = new Helper(); wassuqquwikiawos: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto mmukumekuuysequy; } self::$staticHelper = new Helper(); mmukumekuuysequy: return self::$staticHelper; } }
