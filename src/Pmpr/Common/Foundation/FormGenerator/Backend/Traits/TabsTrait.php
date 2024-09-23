<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d819504ee             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; trait TabsTrait { protected array $tabs = []; public function equiyaoamqmaeckc() : array { return $this->tabs; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function kmmgwqwowkgusics(array $ywoucyskcquysiwc) : self { $this->tabs = $ywoucyskcquysiwc; return $this; } public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce) : self { if (!$cciauwuwuqaywgce) { goto qaswkqkwqgqqcyws; } if ($cciauwuwuqaywgce->yywskysiycwkwsgw()) { goto meuaykaqyqkseycs; } $cciauwuwuqaywgce->jyumyyugiwwiqomk(count($this->equiyaoamqmaeckc()) + 1); meuaykaqyqkseycs: $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; qaswkqkwqgqqcyws: return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto ukicwqcoggwiskgo; } $this->aucimgwswmgaocae($cciauwuwuqaywgce); ukicwqcoggwiskgo: gsimucysiuikweme: } ekimmsiekwwoawym: return $this; } }
