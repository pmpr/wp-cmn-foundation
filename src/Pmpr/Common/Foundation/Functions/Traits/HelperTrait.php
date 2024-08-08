<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b415b03b4c7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto euyueamqiaoyikie; } $this->helper = new Helper(); euyueamqiaoyikie: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto uaokswasiaegemqu; } self::$staticHelper = new Helper(); uaokswasiaegemqu: return self::$staticHelper; } }
