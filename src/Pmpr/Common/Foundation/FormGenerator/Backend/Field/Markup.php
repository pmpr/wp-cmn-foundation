<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669ada81ac791             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto bgoqumcuqmceeigi; } $aokagokqyuysuksm = "\x6d\141\162\153\x75\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); bgoqumcuqmceeigi: if ($sqeykgyoooqysmca) { goto aisygkoacuuqeymm; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; aisygkoacuuqeymm: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\146\151\x65\154\144\x2d\150\164\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto qwaaukoseakigsgy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); qwaaukoseakigsgy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\x73\x70\x61\143\145"); return $this; } }
