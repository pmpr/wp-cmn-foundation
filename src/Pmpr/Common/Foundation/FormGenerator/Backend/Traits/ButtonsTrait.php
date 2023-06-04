<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             647cafa1ad878             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Button; trait ButtonsTrait { protected array $buttons = []; public function imswwiyicyksouus() : ?array { return $this->buttons; } public function ycewecmqyuksugoi() : bool { return !empty($this->imswwiyicyksouus()); } public function woyauweuuyoqmqeo(array $qyukicweqoisimwg) : self { $this->buttons = $qyukicweqoisimwg; return $this; } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { if ($gskauacumcmekigs->yywskysiycwkwsgw()) { goto omeckagooayaagig; } $gskauacumcmekigs->jyumyyugiwwiqomk(count($this->imswwiyicyksouus()) + 1); omeckagooayaagig: $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function ygwuaykqmkaymyqs(array $qyukicweqoisimwg) : self { foreach ($qyukicweqoisimwg as $gskauacumcmekigs) { if (!$gskauacumcmekigs instanceof Button) { goto wkgikmeuqucgkywg; } $this->igmamuiesywmkgeu($gskauacumcmekigs); wkgikmeuqucgkywg: ceowmegksgcgwuug: } sucmuewciigceyei: return $this; } }
