<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a555f2117d2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto gcqssckowmywoesw; } $aokagokqyuysuksm = "\155\141\x72\153\165\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); gcqssckowmywoesw: if ($sqeykgyoooqysmca) { goto eekkcooqswqouoei; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; eekkcooqswqouoei: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\x2d\146\151\x65\x6c\x64\55\150\x74\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto cuayqmasemsqsume; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); cuayqmasemsqsume: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\x2d\x73\160\141\143\x65"); return $this; } }
