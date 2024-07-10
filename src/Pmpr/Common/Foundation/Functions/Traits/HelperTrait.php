<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f1c0bb2cf9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto gqyooycgsagyyeia; } $this->helper = new Helper(); gqyooycgsagyyeia: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto ugkuauswwusmgeak; } self::$staticHelper = new Helper(); ugkuauswwusmgeak: return self::$staticHelper; } }
