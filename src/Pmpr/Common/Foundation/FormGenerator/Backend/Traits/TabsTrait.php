<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             688b675cde12a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; trait TabsTrait { protected array $tabs = []; public function equiyaoamqmaeckc() : array { return $this->tabs; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function kmmgwqwowkgusics(array $ywoucyskcquysiwc) : self { $this->tabs = $ywoucyskcquysiwc; return $this; } public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce) : self { if ($cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce->yywskysiycwkwsgw()) { $cciauwuwuqaywgce->jyumyyugiwwiqomk(count($this->equiyaoamqmaeckc()) + 1); } $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; } return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if ($cciauwuwuqaywgce instanceof Tab) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); } } return $this; } }
