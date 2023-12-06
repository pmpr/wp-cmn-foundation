<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65709cce278e5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto caeywemyokumoaki; } $this->helper = new Helper(); caeywemyokumoaki: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto eeaeuuuiukckywcg; } self::$staticHelper = new Helper(); eeaeuuuiukckywcg: return self::$staticHelper; } }
