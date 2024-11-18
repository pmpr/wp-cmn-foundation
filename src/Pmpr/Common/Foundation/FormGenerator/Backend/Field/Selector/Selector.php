<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd8a709c0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field\Selector; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; class Selector extends Field { protected array $levels = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x73\145\x6c\x65\x63\164\157\162"); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\x70\x72\x2d\x66\x69\x65\x6c\x64\55\163\x65\154\145\x63\x74\x6f\162\55\151\156\x70\165\x74"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function kksameuwsykweoyg(Level $iqaosyayeiuaisqi) : self { $this->levels[$iqaosyayeiuaisqi->mwikyscisascoeea()] = $iqaosyayeiuaisqi; return $this; } public function iqmqokkwmywqeogq(array $xwwgygqkqwuaqwsa = []) : self { foreach ($xwwgygqkqwuaqwsa as $iqaosyayeiuaisqi) { $this->kksameuwsykweoyg($iqaosyayeiuaisqi); } return $this; } }
