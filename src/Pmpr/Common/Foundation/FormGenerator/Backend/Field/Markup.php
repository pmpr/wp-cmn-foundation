<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66827cae43f2f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto geugsymgsiuuqccg; } $aokagokqyuysuksm = "\155\x61\x72\x6b\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); geugsymgsiuuqccg: if ($sqeykgyoooqysmca) { goto mgwgiesscqoaqcau; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; mgwgiesscqoaqcau: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\146\151\x65\x6c\144\55\150\x74\155\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ioacywuoyuskqmwy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); ioacywuoyuskqmwy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\163\160\x61\x63\145"); return $this; } }
