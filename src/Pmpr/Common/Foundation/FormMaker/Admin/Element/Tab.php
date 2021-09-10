<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        gyecioagygmsycsm:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            $this->sikqggwmmykuiymy($qkweikswegyciaie);
            eiiwgmaemqqkqsaa:
        }
        goto siqumcaqwoiyycsu;
        siqumcaqwoiyycsu:
        oqocgwgmguywkwwm:
        goto moagggcaeywqqiwg;
        moagggcaeywqqiwg:
        return $this;
        goto emcswiuakqwyoagk;
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
        caiuwwcueoceskua:
        return $this;
        goto sgwgiwiakmesacqu;
        ueukoocwcwyaegcq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ouuasmqmouiusiga;
            ouuasmqmouiusiga:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto ucqcwycgkwueaikw;
            }
            goto aeemeuioqaqmaaea;
            oukomcwmeqyyyigg:
            ucqcwycgkwueaikw:
            goto okaokkmoccwwcyic;
            okaokkmoccwwcyic:
            msysawimsiesaway:
            goto mogkykewkeeoogeq;
            aeemeuioqaqmaaea:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto oukomcwmeqyyyigg;
            mogkykewkeeoogeq:
        }
        goto qiqkwayukawykagq;
        qiqkwayukawykagq:
        iqkiaawqeaemgqok:
        goto caiuwwcueoceskua;
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
            iagwwaaygcmmmykw:
            $qkweikswegyciaie = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\137{$qkweikswegyciaie->mwikyscisascoeea()}\x5f\155\x65\164\141\x62\x6f\170\x65", $qkweikswegyciaie, $this);
            goto wwuwmiikyeeygyyi;
            okqqowooiskyccky:
            $oeoswouussioaimo = $qkweikswegyciaie->register($uusmaiomayssaecw);
            goto wkgaeksumwsaweow;
            iumugucomiookemq:
            kesceucuisgqegwo:
            goto aciiwoowqoygcuee;
            wkgaeksumwsaweow:
            if (!$oeoswouussioaimo) {
                goto quagwcciuagqessg;
            }
            goto iyokcuwocqoicegc;
            yycgqsoesmqsemik:
            cywucuooyguymsci:
            goto iumugucomiookemq;
            wwuwmiikyeeygyyi:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto cywucuooyguymsci;
            }
            goto okqqowooiskyccky;
            qgaayqcoacyscqik:
            quagwcciuagqessg:
            goto yycgqsoesmqsemik;
            iyokcuwocqoicegc:
            $saouceauqqiwcwas[$qkweikswegyciaie->cisyiemkeykgkomc()] = $oeoswouussioaimo;
            goto qgaayqcoacyscqik;
            aciiwoowqoygcuee:
        }
        goto oamwewkoeuaeksyy;
        oamwewkoeuaeksyy:
        mqgaomisqwmiigim:
        goto yaugeaqeukqssose;
        uaicoasqcyeuawwk:
        return $saouceauqqiwcwas;
        goto ggwysyagkyaiiusk;
        asiqqkkoesoeogsq:
        if (!(is_array($uaqusiikkokccqou) && $uaqusiikkokccqou)) {
            goto iwcsswgiuqiqagyq;
        }
        goto cmswoqwiyuoecakm;
        oyeykyosscuomyqc:
        $uaqusiikkokccqou = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\137{$this->mwikyscisascoeea()}\137\x74\x61\x62\x5f\x6d\x65\164\x61\142\x6f\x78\145\163", $this->qsqiqgmeoowykuue(), $this);
        goto asiqqkkoesoeogsq;
        guqwaqawiyaoycwc:
        $saouceauqqiwcwas = [];
        goto oyeykyosscuomyqc;
        ggwysyagkyaiiusk:
    }
    
    public function emgauskcekyqqseg() : ?string
    {
        goto qiqocowgqeeokkuo;
        ieimimkcokyykouy:
        if (!$this->mukiwuqwmywsckco()) {
            goto dkiqcsckmuysmsae;
        }
        goto ycamowscwgikiyis;
        ekmsemaiosgqsqgo:
        dkiqcsckmuysmsae:
        goto qeqocuqeecocsqak;
        qiqocowgqeeokkuo:
        $oiegiwogmwmawkeo = "\155\x64";
        goto ieimimkcokyykouy;
        qeqocuqeecocsqak:
        return ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\154\141\163\163" => "\x70\162\55\x74\141\x62\55\x69\143\x6f\156\x20\151\x63\157\156\55{$oiegiwogmwmawkeo}"]);
        goto qoymuwcmemkoauao;
        ycamowscwgikiyis:
        $oiegiwogmwmawkeo = "\x78\163";
        goto ekmsemaiosgqsqgo;
        qoymuwcmemkoauao:
    }
    
    public function ooiemyusqewcmgkg($quseoooqasguwock = "\54")
    {
        goto quskcgyyawkiiqoi;
        cocmuyqusmyqugik:
        aukaaeuwkcigaeww:
        goto kgusyguuagwuwmga;
        quskcgyyawkiiqoi:
        $sgksuwkwyimqgaii = [];
        goto yquuyysqcawssmik;
        eseyuockwcuywymg:
        return $sgksuwkwyimqgaii;
        goto wkieciyoomooewcu;
        weakauyqikcssyqa:
        $sgksuwkwyimqgaii = implode($quseoooqasguwock, $sgksuwkwyimqgaii);
        goto amwicomkoysgqays;
        amwicomkoysgqays:
        geyqommgwmggqccq:
        goto eseyuockwcuywymg;
        yquuyysqcawssmik:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto guowuoimowsseiua;
            kuqysugeaoqosigi:
            kuawumwakiqoeaau:
            goto wwggwoqkiogsgsuy;
            qgckaaawkwimwegg:
            $sgksuwkwyimqgaii[] = "\x2e\x63\155\142\62\x2d\151\144\x2d{$aokagokqyuysuksm}\x3a\x6e\157\164\50\56\143\155\142\62\x2d\164\x61\x62\55\151\147\156\157\162\x65\x29";
            goto eyooyicsiemqsguk;
            ssuaiecwgwieuugg:
            $aokagokqyuysuksm = str_replace("\x5f", "\55", DecoratorSanitize::wkcwykowmmmwioqs($aiowsaccomcoikus->mwikyscisascoeea()));
            goto qgckaaawkwimwegg;
            eyooyicsiemqsguk:
            kwwiokmgeaeiqeus:
            goto kuqysugeaoqosigi;
            guowuoimowsseiua:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto kwwiokmgeaeiqeus;
            }
            goto ssuaiecwgwieuugg;
            wwggwoqkiogsgsuy:
        }
        goto cocmuyqusmyqugik;
        aicwuwomqwiokauu:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x66\151\145\x6c\144\x5f\163\145\x6c\x65\x63\164\x6f\x72\163", false), $sgksuwkwyimqgaii, $this);
        goto ymcoqeoiycswaekg;
        ymcoqeoiycswaekg:
        if (!$quseoooqasguwock) {
            goto geyqommgwmggqccq;
        }
        goto weakauyqikcssyqa;
        kgusyguuagwuwmga:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x66\151\145\154\x64\137\x73\145\x6c\145\143\x74\157\x72\x73", false), $sgksuwkwyimqgaii, $this);
        goto aicwuwomqwiokauu;
        wkieciyoomooewcu:
    }
    public function render()
    {
        goto okmkiuqyksmuocqs;
        okmkiuqyksmuocqs:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto ccimukeqcycgeuqg;
        wesoqqmucysmckyw:
        mckeqaowcweksykw:
        goto ceaoyqaqeikqseos;
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
