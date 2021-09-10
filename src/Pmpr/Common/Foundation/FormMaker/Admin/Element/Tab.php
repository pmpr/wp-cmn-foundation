<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto gyecioagygmsycsm;
        moagggcaeywqqiwg:
        return $this;
        goto emcswiuakqwyoagk;
        gyecioagygmsycsm:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            $this->sikqggwmmykuiymy($qkweikswegyciaie);
            eiiwgmaemqqkqsaa:
        }
        goto siqumcaqwoiyycsu;
        siqumcaqwoiyycsu:
        oqocgwgmguywkwwm:
        goto moagggcaeywqqiwg;
        emcswiuakqwyoagk:
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
        goto ueukoocwcwyaegcq;
        qiqkwayukawykagq:
        iqkiaawqeaemgqok:
        goto caiuwwcueoceskua;
        ueukoocwcwyaegcq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ouuasmqmouiusiga;
            oukomcwmeqyyyigg:
            ucqcwycgkwueaikw:
            goto okaokkmoccwwcyic;
            ouuasmqmouiusiga:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto ucqcwycgkwueaikw;
            }
            goto aeemeuioqaqmaaea;
            aeemeuioqaqmaaea:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto oukomcwmeqyyyigg;
            okaokkmoccwwcyic:
            msysawimsiesaway:
            goto mogkykewkeeoogeq;
            mogkykewkeeoogeq:
        }
        goto qiqkwayukawykagq;
        caiuwwcueoceskua:
        return $this;
        goto sgwgiwiakmesacqu;
        sgwgiwiakmesacqu:
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
        goto guqwaqawiyaoycwc;
        yaugeaqeukqssose:
        iwcsswgiuqiqagyq:
        goto uaicoasqcyeuawwk;
        cmswoqwiyuoecakm:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            goto iagwwaaygcmmmykw;
            wkgaeksumwsaweow:
            if (!$oeoswouussioaimo) {
                goto quagwcciuagqessg;
            }
            goto iyokcuwocqoicegc;
            iagwwaaygcmmmykw:
            $qkweikswegyciaie = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\x5f{$qkweikswegyciaie->mwikyscisascoeea()}\137\x6d\x65\164\141\x62\157\170\x65", $qkweikswegyciaie, $this);
            goto wwuwmiikyeeygyyi;
            wwuwmiikyeeygyyi:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto cywucuooyguymsci;
            }
            goto okqqowooiskyccky;
            iumugucomiookemq:
            kesceucuisgqegwo:
            goto aciiwoowqoygcuee;
            qgaayqcoacyscqik:
            quagwcciuagqessg:
            goto yycgqsoesmqsemik;
            iyokcuwocqoicegc:
            $saouceauqqiwcwas[$qkweikswegyciaie->cisyiemkeykgkomc()] = $oeoswouussioaimo;
            goto qgaayqcoacyscqik;
            yycgqsoesmqsemik:
            cywucuooyguymsci:
            goto iumugucomiookemq;
            okqqowooiskyccky:
            $oeoswouussioaimo = $qkweikswegyciaie->register($uusmaiomayssaecw);
            goto wkgaeksumwsaweow;
            aciiwoowqoygcuee:
        }
        goto oamwewkoeuaeksyy;
        guqwaqawiyaoycwc:
        $saouceauqqiwcwas = [];
        goto oyeykyosscuomyqc;
        oamwewkoeuaeksyy:
        mqgaomisqwmiigim:
        goto yaugeaqeukqssose;
        oyeykyosscuomyqc:
        $uaqusiikkokccqou = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\x5f{$this->mwikyscisascoeea()}\137\164\141\x62\x5f\x6d\x65\164\x61\x62\x6f\170\145\163", $this->qsqiqgmeoowykuue(), $this);
        goto asiqqkkoesoeogsq;
        asiqqkkoesoeogsq:
        if (!(is_array($uaqusiikkokccqou) && $uaqusiikkokccqou)) {
            goto iwcsswgiuqiqagyq;
        }
        goto cmswoqwiyuoecakm;
        uaicoasqcyeuawwk:
        return $saouceauqqiwcwas;
        goto ggwysyagkyaiiusk;
        ggwysyagkyaiiusk:
    }
    
    public function emgauskcekyqqseg() : ?string
    {
        goto qiqocowgqeeokkuo;
        qiqocowgqeeokkuo:
        $oiegiwogmwmawkeo = "\x6d\x64";
        goto ieimimkcokyykouy;
        ekmsemaiosgqsqgo:
        dkiqcsckmuysmsae:
        goto qeqocuqeecocsqak;
        ieimimkcokyykouy:
        if (!$this->mukiwuqwmywsckco()) {
            goto dkiqcsckmuysmsae;
        }
        goto ycamowscwgikiyis;
        qeqocuqeecocsqak:
        return ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\154\x61\x73\x73" => "\x70\x72\x2d\x74\141\x62\x2d\x69\x63\x6f\x6e\x20\x69\143\157\156\x2d{$oiegiwogmwmawkeo}"]);
        goto qoymuwcmemkoauao;
        ycamowscwgikiyis:
        $oiegiwogmwmawkeo = "\x78\163";
        goto ekmsemaiosgqsqgo;
        qoymuwcmemkoauao:
    }
    
    public function ooiemyusqewcmgkg($quseoooqasguwock = "\x2c")
    {
        goto quskcgyyawkiiqoi;
        quskcgyyawkiiqoi:
        $sgksuwkwyimqgaii = [];
        goto yquuyysqcawssmik;
        yquuyysqcawssmik:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto guowuoimowsseiua;
            ssuaiecwgwieuugg:
            $aokagokqyuysuksm = str_replace("\x5f", "\x2d", DecoratorSanitize::wkcwykowmmmwioqs($aiowsaccomcoikus->mwikyscisascoeea()));
            goto qgckaaawkwimwegg;
            eyooyicsiemqsguk:
            kwwiokmgeaeiqeus:
            goto kuqysugeaoqosigi;
            guowuoimowsseiua:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto kwwiokmgeaeiqeus;
            }
            goto ssuaiecwgwieuugg;
            qgckaaawkwimwegg:
            $sgksuwkwyimqgaii[] = "\56\143\x6d\x62\x32\x2d\151\144\x2d{$aokagokqyuysuksm}\x3a\156\x6f\164\50\x2e\143\x6d\142\62\x2d\x74\141\x62\55\x69\x67\x6e\x6f\x72\x65\x29";
            goto eyooyicsiemqsguk;
            kuqysugeaoqosigi:
            kuawumwakiqoeaau:
            goto wwggwoqkiogsgsuy;
            wwggwoqkiogsgsuy:
        }
        goto cocmuyqusmyqugik;
        amwicomkoysgqays:
        geyqommgwmggqccq:
        goto eseyuockwcuywymg;
        eseyuockwcuywymg:
        return $sgksuwkwyimqgaii;
        goto wkieciyoomooewcu;
        cocmuyqusmyqugik:
        aukaaeuwkcigaeww:
        goto kgusyguuagwuwmga;
        ymcoqeoiycswaekg:
        if (!$quseoooqasguwock) {
            goto geyqommgwmggqccq;
        }
        goto weakauyqikcssyqa;
        aicwuwomqwiokauu:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\146\x69\145\154\x64\137\x73\145\154\x65\x63\164\x6f\162\163", false), $sgksuwkwyimqgaii, $this);
        goto ymcoqeoiycswaekg;
        kgusyguuagwuwmga:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x66\151\145\x6c\x64\x5f\163\x65\x6c\145\143\x74\x6f\162\163", false), $sgksuwkwyimqgaii, $this);
        goto aicwuwomqwiokauu;
        weakauyqikcssyqa:
        $sgksuwkwyimqgaii = implode($quseoooqasguwock, $sgksuwkwyimqgaii);
        goto amwicomkoysgqays;
        wkieciyoomooewcu:
    }
    public function render()
    {
        goto okmkiuqyksmuocqs;
        wesoqqmucysmckyw:
        mckeqaowcweksykw:
        goto ceaoyqaqeikqseos;
        okmkiuqyksmuocqs:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto ccimukeqcycgeuqg;
        ayscuauayocuigwk:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow);
        goto wesoqqmucysmckyw;
        ccimukeqcycgeuqg:
        if (!$ikgwqyuyckaewsow) {
            goto mckeqaowcweksykw;
        }
        goto ayscuauayocuigwk;
        ceaoyqaqeikqseos:
    }
}
