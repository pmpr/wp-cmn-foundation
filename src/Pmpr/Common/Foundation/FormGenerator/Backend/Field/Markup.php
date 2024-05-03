<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66350783720d1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto uugwoygiyecgymgw; } $aokagokqyuysuksm = "\x6d\141\162\x6b\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); uugwoygiyecgymgw: if ($sqeykgyoooqysmca) { goto acmgueaoaaweiqqu; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; acmgueaoaaweiqqu: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\x2d\x66\151\x65\x6c\144\55\150\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto awaaowoqskgokwiy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); awaaowoqskgokwiy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\x73\x70\141\143\x65"); return $this; } }
