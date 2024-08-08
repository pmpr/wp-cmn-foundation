<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b40da17e832             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto gemwkqocygssmequ; } $aokagokqyuysuksm = "\155\141\162\153\x75\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); gemwkqocygssmequ: if ($sqeykgyoooqysmca) { goto cqaeiesyciakcagu; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; cqaeiesyciakcagu: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\146\151\145\154\144\x2d\x68\x74\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto acisycocoswkekik; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); acisycocoswkekik: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\x2d\163\160\141\x63\x65"); return $this; } }
