<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a40d8e73701             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto gcqssckowmywoesw; } $aokagokqyuysuksm = "\155\x61\162\x6b\165\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); gcqssckowmywoesw: if ($sqeykgyoooqysmca) { goto eekkcooqswqouoei; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; eekkcooqswqouoei: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\146\x69\x65\154\144\x2d\150\164\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto cuayqmasemsqsume; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); cuayqmasemsqsume: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\55\163\x70\x61\143\x65"); return $this; } }
