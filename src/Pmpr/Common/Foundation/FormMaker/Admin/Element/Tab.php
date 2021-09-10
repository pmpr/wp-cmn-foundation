<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\Decorator\DecoratorSanitize;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Tab extends Element
{
    
    protected array $fields = [];
    
    protected ?string $icon = null;
    
    protected array $metaBoxes = [];
    
    protected array $sideMetaBoxes = [];
    
    protected ?string $description = null;
    
    public function __construct($aokagokqyuysuksm = null, $meqocwsecsywiiqs = null)
    {
        $this->title = $meqocwsecsywiiqs;
        parent::__construct($aokagokqyuysuksm);
    }
    
    public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self
    {
        $this->icon = $wkaqekwwgqsqwcoi;
        return $this;
    }
    
    public function eyamqkqiykagecsw() : ?string
    {
        return $this->icon;
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        return $this->fields;
    }
    
    public function meqceykmywmqgoym() : ?string
    {
        return $this->description;
    }
    
    public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self
    {
        $this->description = $ukwokcuqauuosmoo;
        return $this;
    }
    
    public function qsqiqgmeoowykuue() : array
    {
        return $this->metaBoxes;
    }
    
    public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self
    {
        $this->metaBoxes[$qkweikswegyciaie->mwikyscisascoeea()] = $qkweikswegyciaie;
        return $this;
    }
    
    public function mugcceiwosyciwos(array $uaqusiikkokccqou = []) : self
    {
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            $this->sikqggwmmykuiymy($qkweikswegyciaie);
            sksgcusuyqcwqswe:
        }
        qkyciyiwkmgkmquk:
        return $this;
    }
    
    public function sekaaukqmiysugws() : bool
    {
        return !empty($this->qsqiqgmeoowykuue());
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus instanceof Field) {
                $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            }
            iuwkiyimqmgguose:
        }
        ayceeyuocgowqwsa:
        return $this;
    }
    
    public function weookicuaacigemm() : array
    {
        return $this->sideMetaBoxes;
    }
    
    public function uwymwiymwwekwuwe(?MetaBox $qkweikswegyciaie = null)
    {
        $this->sideMetaBoxes[$qkweikswegyciaie->mwikyscisascoeea()] = $qkweikswegyciaie;
        return $this;
    }
    
    public function ouqigcumkqeksocm() : bool
    {
        return !empty($this->weookicuaacigemm());
    }
    
    public function mukiwuqwmywsckco() : bool
    {
        return !empty($this->ugmceccgwaaaigiy());
    }
    
    public function wacemkqmiwuqouga(string $uusmaiomayssaecw = null) : array
    {
        $saouceauqqiwcwas = [];
        $uaqusiikkokccqou = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}_{$this->mwikyscisascoeea()}_tab_metaboxes", $this->qsqiqgmeoowykuue(), $this);
        if (is_array($uaqusiikkokccqou) && $uaqusiikkokccqou) {
            foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}_{$qkweikswegyciaie->mwikyscisascoeea()}_metaboxe", $qkweikswegyciaie, $this);
                if ($qkweikswegyciaie instanceof MetaBox) {
                    $oeoswouussioaimo = $qkweikswegyciaie->register($uusmaiomayssaecw);
                    if ($oeoswouussioaimo) {
                        $saouceauqqiwcwas[$qkweikswegyciaie->cisyiemkeykgkomc()] = $oeoswouussioaimo;
                    }
                }
                aeiemwacaiygemmg:
            }
            yggseoaommssscwo:
        }
        return $saouceauqqiwcwas;
    }
    
    public function emgauskcekyqqseg() : ?string
    {
        $oiegiwogmwmawkeo = 'md';
        if ($this->mukiwuqwmywsckco()) {
            $oiegiwogmwmawkeo = 'xs';
        }
        return ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ['class' => "pr-tab-icon icon-{$oiegiwogmwmawkeo}"]);
    }
    
    public function ooiemyusqewcmgkg($quseoooqasguwock = ',')
    {
        $sgksuwkwyimqgaii = [];
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus instanceof Field) {
                $aokagokqyuysuksm = str_replace('_', '-', DecoratorSanitize::wkcwykowmmmwioqs($aiowsaccomcoikus->mwikyscisascoeea()));
                $sgksuwkwyimqgaii[] = ".cmb2-id-{$aokagokqyuysuksm}:not(.cmb2-tab-ignore)";
            }
            oeusomaaeekakake:
        }
        yyqygaokeccgugos:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('field_selectors', false), $sgksuwkwyimqgaii, $this);
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('field_selectors', false), $sgksuwkwyimqgaii, $this);
        if ($quseoooqasguwock) {
            $sgksuwkwyimqgaii = implode($quseoooqasguwock, $sgksuwkwyimqgaii);
        }
        return $sgksuwkwyimqgaii;
    }
    public function render()
    {
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        if ($ikgwqyuyckaewsow) {
            self::iuaucuookgoqiiio($ikgwqyuyckaewsow);
        }
    }
}
