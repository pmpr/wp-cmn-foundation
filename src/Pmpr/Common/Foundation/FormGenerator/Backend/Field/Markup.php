<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6646ac748b53f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto cqkgaiiysokkuwsm; } $aokagokqyuysuksm = "\155\x61\x72\x6b\x75\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); cqkgaiiysokkuwsm: if ($sqeykgyoooqysmca) { goto swekyeqkosmecgsk; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; swekyeqkosmecgsk: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\x2d\x66\x69\145\154\x64\x2d\x68\164\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ykemuogoaemeuaoy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); ykemuogoaemeuaoy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\x73\160\x61\x63\x65"); return $this; } }
