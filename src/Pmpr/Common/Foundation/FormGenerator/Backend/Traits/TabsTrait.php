<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643baf2730c00             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; trait TabsTrait { protected array $tabs = []; public function equiyaoamqmaeckc() : ?array { return $this->tabs; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function kmmgwqwowkgusics(array $ywoucyskcquysiwc) : self { $this->tabs = $ywoucyskcquysiwc; return $this; } public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce) : self { if (!$cciauwuwuqaywgce) { goto ioocowswsiqoyaai; } if ($cciauwuwuqaywgce->yywskysiycwkwsgw()) { goto ookeyiumgkqqucia; } $cciauwuwuqaywgce->jyumyyugiwwiqomk(count($this->equiyaoamqmaeckc()) + 1); ookeyiumgkqqucia: $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; ioocowswsiqoyaai: return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto oyciiqiqoqkgoqec; } $this->aucimgwswmgaocae($cciauwuwuqaywgce); oyciiqiqoqkgoqec: wcmsamoqaogoouey: } csuwemcoeyqemwks: return $this; } }
