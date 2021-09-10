<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto eiiwgmaemqqkqsaa;
        eiiwgmaemqqkqsaa:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            $this->sikqggwmmykuiymy($qkweikswegyciaie);
            oqocgwgmguywkwwm:
        }
        goto gyecioagygmsycsm;
        gyecioagygmsycsm:
        ekmowyyeqsocgaai:
        goto siqumcaqwoiyycsu;
        siqumcaqwoiyycsu:
        return $this;
        goto moagggcaeywqqiwg;
        moagggcaeywqqiwg:
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
        goto mogkykewkeeoogeq;
        mogkykewkeeoogeq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ucqcwycgkwueaikw;
            ouuasmqmouiusiga:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto aeemeuioqaqmaaea;
            aeemeuioqaqmaaea:
            msysawimsiesaway:
            goto oukomcwmeqyyyigg;
            oukomcwmeqyyyigg:
            iqkiaawqeaemgqok:
            goto okaokkmoccwwcyic;
            ucqcwycgkwueaikw:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto msysawimsiesaway;
            }
            goto ouuasmqmouiusiga;
            okaokkmoccwwcyic:
        }
        goto ueukoocwcwyaegcq;
        qiqkwayukawykagq:
        return $this;
        goto caiuwwcueoceskua;
        ueukoocwcwyaegcq:
        emcswiuakqwyoagk:
        goto qiqkwayukawykagq;
        caiuwwcueoceskua:
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
        goto iwcsswgiuqiqagyq;
        iwcsswgiuqiqagyq:
        $saouceauqqiwcwas = [];
        goto guqwaqawiyaoycwc;
        yaugeaqeukqssose:
        return $saouceauqqiwcwas;
        goto uaicoasqcyeuawwk;
        oyeykyosscuomyqc:
        if (!(is_array($uaqusiikkokccqou) && $uaqusiikkokccqou)) {
            goto aciiwoowqoygcuee;
        }
        goto asiqqkkoesoeogsq;
        asiqqkkoesoeogsq:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            goto cywucuooyguymsci;
            wwuwmiikyeeygyyi:
            $oeoswouussioaimo = $qkweikswegyciaie->register($uusmaiomayssaecw);
            goto okqqowooiskyccky;
            iyokcuwocqoicegc:
            kesceucuisgqegwo:
            goto qgaayqcoacyscqik;
            iagwwaaygcmmmykw:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto quagwcciuagqessg;
            }
            goto wwuwmiikyeeygyyi;
            okqqowooiskyccky:
            if (!$oeoswouussioaimo) {
                goto kesceucuisgqegwo;
            }
            goto wkgaeksumwsaweow;
            cywucuooyguymsci:
            $qkweikswegyciaie = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\137{$qkweikswegyciaie->mwikyscisascoeea()}\137\155\145\x74\x61\142\157\170\145", $qkweikswegyciaie, $this);
            goto iagwwaaygcmmmykw;
            wkgaeksumwsaweow:
            $saouceauqqiwcwas[$qkweikswegyciaie->cisyiemkeykgkomc()] = $oeoswouussioaimo;
            goto iyokcuwocqoicegc;
            yycgqsoesmqsemik:
            mqgaomisqwmiigim:
            goto iumugucomiookemq;
            qgaayqcoacyscqik:
            quagwcciuagqessg:
            goto yycgqsoesmqsemik;
            iumugucomiookemq:
        }
        goto cmswoqwiyuoecakm;
        oamwewkoeuaeksyy:
        aciiwoowqoygcuee:
        goto yaugeaqeukqssose;
        cmswoqwiyuoecakm:
        sgwgiwiakmesacqu:
        goto oamwewkoeuaeksyy;
        guqwaqawiyaoycwc:
        $uaqusiikkokccqou = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\137{$this->mwikyscisascoeea()}\x5f\x74\141\x62\137\155\145\x74\x61\142\x6f\170\145\x73", $this->qsqiqgmeoowykuue(), $this);
        goto oyeykyosscuomyqc;
        uaicoasqcyeuawwk:
    }
    
    public function emgauskcekyqqseg() : ?string
    {
        goto dkiqcsckmuysmsae;
        ycamowscwgikiyis:
        ggwysyagkyaiiusk:
        goto ekmsemaiosgqsqgo;
        ekmsemaiosgqsqgo:
        return ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\143\154\141\x73\x73" => "\x70\162\55\x74\141\x62\55\x69\x63\157\156\40\x69\x63\x6f\156\55{$oiegiwogmwmawkeo}"]);
        goto qeqocuqeecocsqak;
        dkiqcsckmuysmsae:
        $oiegiwogmwmawkeo = "\155\x64";
        goto qiqocowgqeeokkuo;
        ieimimkcokyykouy:
        $oiegiwogmwmawkeo = "\170\163";
        goto ycamowscwgikiyis;
        qiqocowgqeeokkuo:
        if (!$this->mukiwuqwmywsckco()) {
            goto ggwysyagkyaiiusk;
        }
        goto ieimimkcokyykouy;
        qeqocuqeecocsqak:
    }
    
    public function ooiemyusqewcmgkg($quseoooqasguwock = "\54")
    {
        goto geyqommgwmggqccq;
        cocmuyqusmyqugik:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x66\151\x65\x6c\x64\x5f\163\x65\x6c\x65\x63\164\x6f\x72\163", false), $sgksuwkwyimqgaii, $this);
        goto kgusyguuagwuwmga;
        geyqommgwmggqccq:
        $sgksuwkwyimqgaii = [];
        goto quskcgyyawkiiqoi;
        weakauyqikcssyqa:
        wwggwoqkiogsgsuy:
        goto amwicomkoysgqays;
        ymcoqeoiycswaekg:
        $sgksuwkwyimqgaii = implode($quseoooqasguwock, $sgksuwkwyimqgaii);
        goto weakauyqikcssyqa;
        aicwuwomqwiokauu:
        if (!$quseoooqasguwock) {
            goto wwggwoqkiogsgsuy;
        }
        goto ymcoqeoiycswaekg;
        quskcgyyawkiiqoi:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto kwwiokmgeaeiqeus;
            eyooyicsiemqsguk:
            aukaaeuwkcigaeww:
            goto kuqysugeaoqosigi;
            guowuoimowsseiua:
            $aokagokqyuysuksm = str_replace("\137", "\x2d", DecoratorSanitize::wkcwykowmmmwioqs($aiowsaccomcoikus->mwikyscisascoeea()));
            goto ssuaiecwgwieuugg;
            qgckaaawkwimwegg:
            kuawumwakiqoeaau:
            goto eyooyicsiemqsguk;
            kwwiokmgeaeiqeus:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto kuawumwakiqoeaau;
            }
            goto guowuoimowsseiua;
            ssuaiecwgwieuugg:
            $sgksuwkwyimqgaii[] = "\x2e\143\x6d\x62\x32\55\x69\144\x2d{$aokagokqyuysuksm}\72\x6e\157\164\x28\56\143\x6d\x62\62\55\x74\141\142\55\151\147\156\157\x72\x65\51";
            goto qgckaaawkwimwegg;
            kuqysugeaoqosigi:
        }
        goto yquuyysqcawssmik;
        kgusyguuagwuwmga:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x66\x69\145\x6c\x64\137\163\145\x6c\145\x63\164\x6f\x72\163", false), $sgksuwkwyimqgaii, $this);
        goto aicwuwomqwiokauu;
        yquuyysqcawssmik:
        qoymuwcmemkoauao:
        goto cocmuyqusmyqugik;
        amwicomkoysgqays:
        return $sgksuwkwyimqgaii;
        goto eseyuockwcuywymg;
        eseyuockwcuywymg:
    }
    public function render()
    {
        goto mckeqaowcweksykw;
        ccimukeqcycgeuqg:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow);
        goto ayscuauayocuigwk;
        okmkiuqyksmuocqs:
        if (!$ikgwqyuyckaewsow) {
            goto wkieciyoomooewcu;
        }
        goto ccimukeqcycgeuqg;
        ayscuauayocuigwk:
        wkieciyoomooewcu:
        goto wesoqqmucysmckyw;
        mckeqaowcweksykw:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto okmkiuqyksmuocqs;
        wesoqqmucysmckyw:
    }
}
