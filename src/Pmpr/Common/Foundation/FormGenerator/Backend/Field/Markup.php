<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             664697d2b4114             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto cqkgaiiysokkuwsm; } $aokagokqyuysuksm = "\155\141\162\x6b\x75\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); cqkgaiiysokkuwsm: if ($sqeykgyoooqysmca) { goto swekyeqkosmecgsk; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; swekyeqkosmecgsk: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\146\x69\x65\x6c\x64\x2d\150\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ykemuogoaemeuaoy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); ykemuogoaemeuaoy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\x2d\x73\x70\141\143\x65"); return $this; } }
