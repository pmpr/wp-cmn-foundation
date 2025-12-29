<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6952c8d37796e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\FormGenerator\Common\Field\Selector\Level; use Pmpr\Common\Foundation\FormGenerator\Common\Field\Selector\Option; use Pmpr\Common\Foundation\Interfaces\Constants; trait SelectorTrait { protected array $levels = []; public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function kksameuwsykweoyg(Level $iqaosyayeiuaisqi) : self { $this->levels[$iqaosyayeiuaisqi->mwikyscisascoeea()] = $iqaosyayeiuaisqi; return $this; } public function iqmqokkwmywqeogq(array $xwwgygqkqwuaqwsa = []) : self { foreach ($xwwgygqkqwuaqwsa as $iqaosyayeiuaisqi) { $this->kksameuwsykweoyg($iqaosyayeiuaisqi); } return $this; } public function ggocakcisguuokai($iqaosyayeiuaisqi) : bool { if (empty($this->qooeaookuemoqecm())) { return false; } if (!$iqaosyayeiuaisqi instanceof Level) { return false; } $omkysikckkcieckq = $iqaosyayeiuaisqi->giiuwsmyumqwwiyq($this->qooeaookuemoqecm()); return $omkysikckkcieckq instanceof Option && !$omkysikckkcieckq->saugymqkquimisgq(); } }
