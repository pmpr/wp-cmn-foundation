<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6678838402338             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto geugsymgsiuuqccg; } $aokagokqyuysuksm = "\x6d\141\162\153\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); geugsymgsiuuqccg: if ($sqeykgyoooqysmca) { goto mgwgiesscqoaqcau; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; mgwgiesscqoaqcau: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\x66\151\x65\x6c\x64\x2d\150\164\155\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ioacywuoyuskqmwy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); ioacywuoyuskqmwy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\x73\55\x73\x70\141\143\145"); return $this; } }
