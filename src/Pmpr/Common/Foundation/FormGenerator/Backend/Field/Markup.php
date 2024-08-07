<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3f9e603f63             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto gemwkqocygssmequ; } $aokagokqyuysuksm = "\x6d\141\x72\153\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); gemwkqocygssmequ: if ($sqeykgyoooqysmca) { goto cqaeiesyciakcagu; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; cqaeiesyciakcagu: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\x2d\x66\x69\145\154\144\x2d\150\x74\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto acisycocoswkekik; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); acisycocoswkekik: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\x73\55\163\160\141\x63\x65"); return $this; } }
