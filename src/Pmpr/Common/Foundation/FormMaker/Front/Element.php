<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front;

use Pmpr\Common\Foundation\FormMaker\Front\Field as Fields;
use Pmpr\Common\Foundation\FormMaker\Front\Traits\FieldTrait;
use Pmpr\Common\Foundation\FormMaker\Front\Traits\ElementTrait;
use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Template\Traits\TemplateTrait;
use Pmpr\Common\Foundation\Traits\AttributeTrait;
use Pmpr\Common\Foundation\Traits\ComponentTrait;
use Pmpr\Common\Foundation\Traits\ToArrayTrait;

class Element implements ConstantInterface
{
    const CHILD_CONTENT = "\173\x7b\x20\x63\150\x69\154\144\x5f\143\157\x6e\164\x65\x6e\x74\x20\x7d\x7d";
    use FieldTrait, ToArrayTrait, ElementTrait, TemplateTrait, ComponentTrait, AttributeTrait;
    
    protected ?string $id = null;
    
    protected ?Element $parent = null;
    
    protected ?string $element = null;
    
    public function __construct(string $kqywgoqsmuswammk, ?string $aokagokqyuysuksm = null)
    {
        goto aicwuwomqwiokauu;
        aicwuwomqwiokauu:
        $this->id = $aokagokqyuysuksm;
        goto ymcoqeoiycswaekg;
        ymcoqeoiycswaekg:
        $this->element = $kqywgoqsmuswammk;
        goto weakauyqikcssyqa;
        weakauyqikcssyqa:
        $this->igmaewykumgwoaoy(self::ID, $aokagokqyuysuksm);
        goto amwicomkoysgqays;
        amwicomkoysgqays:
    }
    
    public function mwikyscisascoeea() : ?string
    {
        return $this->id;
    }
    
    public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self
    {
        $this->id = $aokagokqyuysuksm;
        return $this;
    }
    
    public function ygqycmmkoiuocoia() : ?Element
    {
        return $this->parent;
    }
    
    public function mmuyuqussqkgkega(Element $omwmuycmeqcqokom) : self
    {
        $this->parent = $omwmuycmeqcqokom;
        return $this;
    }
    
    public function kmsekkswiwiieqee($siquossayskcwkea = []) : self
    {
        return $this->mmuyuqussqkgkega(self::mecgagckeuagggyw()->sueyawuweyoqyeaq($siquossayskcwkea));
    }
    
    public function qqimkcgcmeewwwei() : ?string
    {
        return $this->element;
    }
    
    public function comqsuwokcsmkcau(?string $kqywgoqsmuswammk) : self
    {
        $this->element = $kqywgoqsmuswammk;
        return $this;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        return null;
    }
    
    public function render($ywmkwiwkosakssii = []) : ?string
    {
        goto okmkiuqyksmuocqs;
        ccimukeqcycgeuqg:
        $kqywgoqsmuswammk = $this->qqimkcgcmeewwwei();
        goto ayscuauayocuigwk;
        cwgeqccwaegmsyak:
        if (!$ywmkwiwkosakssii["\x65\x63\x68\x6f"]) {
            goto mckeqaowcweksykw;
        }
        goto oaoaooyeawsygoic;
        kkomakqowiegqiqw:
        if (!$omwmuycmeqcqokom) {
            goto wkieciyoomooewcu;
        }
        goto icwgymeagawmawce;
        eggcswyiekyiqouo:
        $qkqgooeegwokcmay = $omwmuycmeqcqokom->render();
        goto egawuwkuquuagegm;
        egawuwkuquuagegm:
        if (!($nsmgceoqaqogqmuw && $qkqgooeegwokcmay && str_contains($qkqgooeegwokcmay, self::CHILD_CONTENT))) {
            goto eseyuockwcuywymg;
        }
        goto zikuogsomooqsyqa;
        oaoaooyeawsygoic:
        echo $nsmgceoqaqogqmuw;
        goto wwyueoeueokuakme;
        icwgymeagawmawce:
        $nsmgceoqaqogqmuw = $this->assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto eggcswyiekyiqouo;
        ceaoyqaqeikqseos:
        $nsmgceoqaqogqmuw = $this->ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto uqqsegscoakyimue;
        eiigkuqyeygckois:
        eseyuockwcuywymg:
        goto siqcocuqywowcwco;
        wwyueoeueokuakme:
        mckeqaowcweksykw:
        goto gukyeocesaeyiegw;
        siqcocuqywowcwco:
        wkieciyoomooewcu:
        goto ypouoyqikysqacqw;
        uqqsegscoakyimue:
        $omwmuycmeqcqokom = $this->ygqycmmkoiuocoia();
        goto kkomakqowiegqiqw;
        okmkiuqyksmuocqs:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\x63\150\157" => false]);
        goto ccimukeqcycgeuqg;
        gukyeocesaeyiegw:
        return $nsmgceoqaqogqmuw;
        goto wmgakyyggcmckquc;
        wesoqqmucysmckyw:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $this->souwykwwmyygqyqi());
        goto ceaoyqaqeikqseos;
        ypouoyqikysqacqw:
        $nsmgceoqaqogqmuw = $this->eiieguqemowyacgi($nsmgceoqaqogqmuw);
        goto cwgeqccwaegmsyak;
        zikuogsomooqsyqa:
        $nsmgceoqaqogqmuw = str_replace(self::CHILD_CONTENT, $nsmgceoqaqogqmuw, $qkqgooeegwokcmay);
        goto eiigkuqyeygckois;
        ayscuauayocuigwk:
        $wwgucssaecqekuek = array_filter($this->ccekeuwwqqoiwuwy());
        goto wesoqqmucysmckyw;
        wmgakyyggcmckquc:
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        return $nsmgceoqaqogqmuw;
    }
    
    public function eiieguqemowyacgi(?string $nsmgceoqaqogqmuw) : ?string
    {
        return $nsmgceoqaqogqmuw;
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        return $nsmgceoqaqogqmuw;
    }
}
