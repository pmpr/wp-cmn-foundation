<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63b5db0e71aef             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Admin\Traits; use Pmpr\Common\Foundation\FormGenerator\Admin\Component\Tab; use Pmpr\Common\Foundation\FormGenerator\Admin\Field\Field; trait TabsTrait { protected array $tabs = []; public function equiyaoamqmaeckc() : ?array { return $this->tabs; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function kmmgwqwowkgusics(array $ywoucyskcquysiwc) : self { $this->tabs = $ywoucyskcquysiwc; return $this; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { if ($cciauwuwuqaywgce->yywskysiycwkwsgw()) { goto bgoygegmogcmeaou; } $cciauwuwuqaywgce->jyumyyugiwwiqomk(count($this->equiyaoamqmaeckc()) + 1); bgoygegmogcmeaou: $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto iamooqskosymqsmw; } $this->aucimgwswmgaocae($cciauwuwuqaywgce); iamooqskosymqsmw: cgmcwkmmcmmkiooc: } awgaewwsskasueke: return $this; } }
