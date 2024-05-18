<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6648bee597658             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto cqkgaiiysokkuwsm; } $aokagokqyuysuksm = "\155\x61\162\x6b\165\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); cqkgaiiysokkuwsm: if ($sqeykgyoooqysmca) { goto swekyeqkosmecgsk; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; swekyeqkosmecgsk: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\x66\151\x65\154\x64\55\x68\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ykemuogoaemeuaoy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); ykemuogoaemeuaoy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\163\160\x61\143\145"); return $this; } }
