<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643baf2730c00             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Button; trait ButtonsTrait { protected array $buttons = []; public function imswwiyicyksouus() : ?array { return $this->buttons; } public function ycewecmqyuksugoi() : bool { return !empty($this->imswwiyicyksouus()); } public function woyauweuuyoqmqeo(array $qyukicweqoisimwg) : self { $this->buttons = $qyukicweqoisimwg; return $this; } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { if ($gskauacumcmekigs->yywskysiycwkwsgw()) { goto kqiakyymyiosoeia; } $gskauacumcmekigs->jyumyyugiwwiqomk(count($this->imswwiyicyksouus()) + 1); kqiakyymyiosoeia: $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function ygwuaykqmkaymyqs(array $qyukicweqoisimwg) : self { foreach ($qyukicweqoisimwg as $gskauacumcmekigs) { if (!$gskauacumcmekigs instanceof Button) { goto emyuskcwqyscewue; } $this->igmamuiesywmkgeu($gskauacumcmekigs); emyuskcwqyscewue: eugisyswkecacase: } iceuoqgyqsmywqqq: return $this; } }
