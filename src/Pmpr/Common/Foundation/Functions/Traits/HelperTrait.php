<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630b55e1c67c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto kuwecmygikeyisuq; } $this->helper = new Helper(); kuwecmygikeyisuq: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto augwgqgcukgkywiw; } self::$staticHelper = new Helper(); augwgqgcukgkywiw: return self::$staticHelper; } }
