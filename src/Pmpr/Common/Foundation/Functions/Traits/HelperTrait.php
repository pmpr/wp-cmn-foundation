<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669c444fadf9a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto kmgimueiaqoamoiq; } $this->helper = new Helper(); kmgimueiaqoamoiq: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto uyesmwqkkaeqyqsw; } self::$staticHelper = new Helper(); uyesmwqkkaeqyqsw: return self::$staticHelper; } }
