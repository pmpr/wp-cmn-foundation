<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642a74ea46da2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; abstract class OptionAwareField extends Field { protected array $options = []; public function gkwkqmwweiawigae() : ?array { return $this->options; } public function myacgeeekqcmemge() : bool { return !empty($this->gkwkqmwweiawigae()); } public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self { $this->options = $qiouiwasaauyaaue; return $this; } public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self { $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function acauweqyyugwisqc(?array $qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq); gecywkyeskagueqm: } qscmokiskqyuswqo: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!($this->msmiagueogcsucgc() && !$this->oiswysuiioecsaae())) { goto yckkwcimmakkieos; } $this->eyygsasuqmommkua(array_key_first($this->gkwkqmwweiawigae())); yckkwcimmakkieos: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
