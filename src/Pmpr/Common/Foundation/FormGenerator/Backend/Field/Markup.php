<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b415b03b4c7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto gemwkqocygssmequ; } $aokagokqyuysuksm = "\x6d\141\x72\153\x75\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); gemwkqocygssmequ: if ($sqeykgyoooqysmca) { goto cqaeiesyciakcagu; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; cqaeiesyciakcagu: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\x2d\x66\x69\x65\154\144\x2d\150\164\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto acisycocoswkekik; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); acisycocoswkekik: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\x73\x2d\163\160\x61\143\x65"); return $this; } }
