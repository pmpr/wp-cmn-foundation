<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64bd0160360a6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto iaasuqsqgwgoecik; } $this->helper = new Helper(); iaasuqsqgwgoecik: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto guigkeossquogciu; } self::$staticHelper = new Helper(); guigkeossquogciu: return self::$staticHelper; } }
