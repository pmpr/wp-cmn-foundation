<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6673f4362f7f7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto ygiycusyssyegauq; } $this->helper = new Helper(); ygiycusyssyegauq: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto qoceommegsyqswsi; } self::$staticHelper = new Helper(); qoceommegsyqswsi: return self::$staticHelper; } }
