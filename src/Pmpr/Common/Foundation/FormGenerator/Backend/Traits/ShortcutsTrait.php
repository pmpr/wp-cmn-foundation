<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63fe3573ccf82             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; trait ShortcutsTrait { protected $placeholders = []; public function auqyiaissiuomqgs() { return $this->placeholders; } public function uokyeqicycwwikwi(string $uusmaiomayssaecw, string $meqocwsecsywiiqs) : self { $this->placeholders[$uusmaiomayssaecw] = $meqocwsecsywiiqs; return $this; } public function euokiigekgwygigi(array $iyuoemwqumwyekia) : self { foreach ($iyuoemwqumwyekia as $uusmaiomayssaecw => $meqocwsecsywiiqs) { $this->uokyeqicycwwikwi($uusmaiomayssaecw, $meqocwsecsywiiqs); cscusseysqygsoiy: } uaqackioaiqwcocy: return $this; } public function cosayasseegkqiii() : self { $iyuoemwqumwyekia = $this->auqyiaissiuomqgs(); if (!is_array($iyuoemwqumwyekia)) { goto isgwkwacoyimiauk; } $this->placeholders = ManipulateHTML::cosayasseegkqiii($iyuoemwqumwyekia); isgwkwacoyimiauk: return $this; } }
