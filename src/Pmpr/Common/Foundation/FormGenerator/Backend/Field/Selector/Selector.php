<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6723ec7ab976d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field\Selector; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; class Selector extends Field { protected array $levels = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x73\x65\x6c\x65\143\x74\157\162"); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\x70\162\x2d\146\x69\145\154\x64\x2d\163\145\x6c\145\143\164\157\162\55\151\x6e\160\x75\x74"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function kksameuwsykweoyg(Level $iqaosyayeiuaisqi) : self { $this->levels[$iqaosyayeiuaisqi->mwikyscisascoeea()] = $iqaosyayeiuaisqi; return $this; } public function iqmqokkwmywqeogq(array $xwwgygqkqwuaqwsa = []) : self { foreach ($xwwgygqkqwuaqwsa as $iqaosyayeiuaisqi) { $this->kksameuwsykweoyg($iqaosyayeiuaisqi); } return $this; } }
