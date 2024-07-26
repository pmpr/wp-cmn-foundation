<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a42a884e46e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto gcqssckowmywoesw; } $aokagokqyuysuksm = "\x6d\x61\162\153\x75\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); gcqssckowmywoesw: if ($sqeykgyoooqysmca) { goto eekkcooqswqouoei; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; eekkcooqswqouoei: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\146\x69\145\154\x64\x2d\x68\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto cuayqmasemsqsume; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); cuayqmasemsqsume: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\x2d\x73\x70\141\x63\145"); return $this; } }
