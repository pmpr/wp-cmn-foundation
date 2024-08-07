<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3fc3df2d9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto gemwkqocygssmequ; } $aokagokqyuysuksm = "\x6d\x61\162\153\165\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); gemwkqocygssmequ: if ($sqeykgyoooqysmca) { goto cqaeiesyciakcagu; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; cqaeiesyciakcagu: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\x66\x69\145\x6c\x64\x2d\x68\x74\155\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto acisycocoswkekik; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); acisycocoswkekik: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\x73\160\x61\x63\145"); return $this; } }
