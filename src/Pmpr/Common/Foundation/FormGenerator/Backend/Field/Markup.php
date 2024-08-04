<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66af633f8debd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto wqcquwuiqkqaoamo; } $aokagokqyuysuksm = "\x6d\141\x72\153\x75\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); wqcquwuiqkqaoamo: if ($sqeykgyoooqysmca) { goto csueasskicaaoaii; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; csueasskicaaoaii: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\x66\151\145\154\144\55\150\164\155\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto yyousguikogqkecs; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); yyousguikogqkecs: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\163\160\141\x63\x65"); return $this; } }
