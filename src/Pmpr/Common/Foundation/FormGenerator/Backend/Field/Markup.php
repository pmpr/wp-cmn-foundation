<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b61855c9112             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto gemwkqocygssmequ; } $aokagokqyuysuksm = "\x6d\141\162\153\165\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); gemwkqocygssmequ: if ($sqeykgyoooqysmca) { goto cqaeiesyciakcagu; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; cqaeiesyciakcagu: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\x66\x69\x65\154\x64\55\150\x74\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto acisycocoswkekik; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); acisycocoswkekik: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\55\x73\160\x61\x63\145"); return $this; } }
