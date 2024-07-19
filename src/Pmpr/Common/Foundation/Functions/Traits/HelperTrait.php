<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669ada81ac791             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto ckcsasciyamuyeak; } $this->helper = new Helper(); ckcsasciyamuyeak: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto rayeowssukccumsa; } self::$staticHelper = new Helper(); rayeowssukccumsa: return self::$staticHelper; } }
