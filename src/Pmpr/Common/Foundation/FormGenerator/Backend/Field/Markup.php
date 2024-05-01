<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6631f3cdaf20f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto uugwoygiyecgymgw; } $aokagokqyuysuksm = "\x6d\x61\162\x6b\x75\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); uugwoygiyecgymgw: if ($sqeykgyoooqysmca) { goto acmgueaoaaweiqqu; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; acmgueaoaaweiqqu: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\146\x69\x65\x6c\x64\55\x68\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto awaaowoqskgokwiy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); awaaowoqskgokwiy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\x73\55\163\x70\x61\x63\145"); return $this; } }
