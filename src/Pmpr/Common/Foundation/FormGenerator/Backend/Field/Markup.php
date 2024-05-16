<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66469920002f4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto cqkgaiiysokkuwsm; } $aokagokqyuysuksm = "\x6d\x61\x72\153\x75\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); cqkgaiiysokkuwsm: if ($sqeykgyoooqysmca) { goto swekyeqkosmecgsk; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; swekyeqkosmecgsk: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\x66\x69\x65\x6c\144\55\150\x74\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ykemuogoaemeuaoy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); ykemuogoaemeuaoy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\163\x70\x61\x63\145"); return $this; } }
