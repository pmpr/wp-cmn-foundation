<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66369eb571b6f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto kmkoiwuimosekikq; } $this->helper = new Helper(); kmkoiwuimosekikq: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto msmiaayuagocuswc; } self::$staticHelper = new Helper(); msmiaayuagocuswc: return self::$staticHelper; } }
