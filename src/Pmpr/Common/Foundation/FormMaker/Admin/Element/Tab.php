<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        siqumcaqwoiyycsu:
        oqocgwgmguywkwwm:
        goto moagggcaeywqqiwg;
        gyecioagygmsycsm:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            $this->sikqggwmmykuiymy($qkweikswegyciaie);
            eiiwgmaemqqkqsaa:
        }
        goto siqumcaqwoiyycsu;
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
            okaokkmoccwwcyic:
            msysawimsiesaway:
            goto mogkykewkeeoogeq;
            aeemeuioqaqmaaea:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto oukomcwmeqyyyigg;
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
        oyeykyosscuomyqc:
        $uaqusiikkokccqou = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\x5f{$this->mwikyscisascoeea()}\137\164\141\142\x5f\x6d\x65\x74\141\142\157\170\145\x73", $this->qsqiqgmeoowykuue(), $this);
        goto asiqqkkoesoeogsq;
        asiqqkkoesoeogsq:
        if (!(is_array($uaqusiikkokccqou) && $uaqusiikkokccqou)) {
            goto iwcsswgiuqiqagyq;
        }
        goto cmswoqwiyuoecakm;
        cmswoqwiyuoecakm:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            goto iagwwaaygcmmmykw;
            yycgqsoesmqsemik:
            cywucuooyguymsci:
            goto iumugucomiookemq;
            wkgaeksumwsaweow:
            if (!$oeoswouussioaimo) {
                goto quagwcciuagqessg;
            }
            goto iyokcuwocqoicegc;
            iagwwaaygcmmmykw:
            $qkweikswegyciaie = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\x5f{$qkweikswegyciaie->mwikyscisascoeea()}\x5f\155\145\164\x61\x62\x6f\170\x65", $qkweikswegyciaie, $this);
            goto wwuwmiikyeeygyyi;
            iyokcuwocqoicegc:
            $saouceauqqiwcwas[$qkweikswegyciaie->cisyiemkeykgkomc()] = $oeoswouussioaimo;
            goto qgaayqcoacyscqik;
            okqqowooiskyccky:
            $oeoswouussioaimo = $qkweikswegyciaie->register($uusmaiomayssaecw);
            goto wkgaeksumwsaweow;
            wwuwmiikyeeygyyi:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto cywucuooyguymsci;
            }
            goto okqqowooiskyccky;
            qgaayqcoacyscqik:
            quagwcciuagqessg:
            goto yycgqsoesmqsemik;
            iumugucomiookemq:
            kesceucuisgqegwo:
            goto aciiwoowqoygcuee;
            aciiwoowqoygcuee:
        }
        goto oamwewkoeuaeksyy;
        guqwaqawiyaoycwc:
        $saouceauqqiwcwas = [];
        goto oyeykyosscuomyqc;
        yaugeaqeukqssose:
        iwcsswgiuqiqagyq:
        goto uaicoasqcyeuawwk;
        oamwewkoeuaeksyy:
        mqgaomisqwmiigim:
        goto yaugeaqeukqssose;
        uaicoasqcyeuawwk:
        return $saouceauqqiwcwas;
        goto ggwysyagkyaiiusk;
        ggwysyagkyaiiusk:
    }
    
    public function emgauskcekyqqseg() : ?string
    {
        goto qiqocowgqeeokkuo;
        ycamowscwgikiyis:
        $oiegiwogmwmawkeo = "\170\x73";
        goto ekmsemaiosgqsqgo;
        ekmsemaiosgqsqgo:
        dkiqcsckmuysmsae:
        goto qeqocuqeecocsqak;
        qiqocowgqeeokkuo:
        $oiegiwogmwmawkeo = "\155\x64";
        goto ieimimkcokyykouy;
        qeqocuqeecocsqak:
        return ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\154\141\x73\x73" => "\x70\x72\55\x74\141\x62\55\151\143\157\156\40\151\143\157\156\x2d{$oiegiwogmwmawkeo}"]);
        goto qoymuwcmemkoauao;
        ieimimkcokyykouy:
        if (!$this->mukiwuqwmywsckco()) {
            goto dkiqcsckmuysmsae;
        }
        goto ycamowscwgikiyis;
        qoymuwcmemkoauao:
    }
    
    public function ooiemyusqewcmgkg($quseoooqasguwock = "\x2c")
    {
        goto quskcgyyawkiiqoi;
        yquuyysqcawssmik:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto guowuoimowsseiua;
            qgckaaawkwimwegg:
            $sgksuwkwyimqgaii[] = "\x2e\x63\155\142\x32\55\x69\144\55{$aokagokqyuysuksm}\72\156\157\x74\x28\56\143\x6d\x62\62\55\164\141\x62\55\151\147\x6e\157\162\x65\x29";
            goto eyooyicsiemqsguk;
            eyooyicsiemqsguk:
            kwwiokmgeaeiqeus:
            goto kuqysugeaoqosigi;
            kuqysugeaoqosigi:
            kuawumwakiqoeaau:
            goto wwggwoqkiogsgsuy;
            ssuaiecwgwieuugg:
            $aokagokqyuysuksm = str_replace("\x5f", "\x2d", DecoratorSanitize::wkcwykowmmmwioqs($aiowsaccomcoikus->mwikyscisascoeea()));
            goto qgckaaawkwimwegg;
            guowuoimowsseiua:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto kwwiokmgeaeiqeus;
            }
            goto ssuaiecwgwieuugg;
            wwggwoqkiogsgsuy:
        }
        goto cocmuyqusmyqugik;
        aicwuwomqwiokauu:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x66\151\145\154\x64\x5f\x73\145\154\145\143\164\x6f\x72\163", false), $sgksuwkwyimqgaii, $this);
        goto ymcoqeoiycswaekg;
        eseyuockwcuywymg:
        return $sgksuwkwyimqgaii;
        goto wkieciyoomooewcu;
        ymcoqeoiycswaekg:
        if (!$quseoooqasguwock) {
            goto geyqommgwmggqccq;
        }
        goto weakauyqikcssyqa;
        quskcgyyawkiiqoi:
        $sgksuwkwyimqgaii = [];
        goto yquuyysqcawssmik;
        cocmuyqusmyqugik:
        aukaaeuwkcigaeww:
        goto kgusyguuagwuwmga;
        amwicomkoysgqays:
        geyqommgwmggqccq:
        goto eseyuockwcuywymg;
        kgusyguuagwuwmga:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\146\151\145\x6c\144\137\x73\x65\154\145\143\164\x6f\x72\163", false), $sgksuwkwyimqgaii, $this);
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
        ayscuauayocuigwk:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow);
        goto wesoqqmucysmckyw;
        okmkiuqyksmuocqs:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto ccimukeqcycgeuqg;
        ccimukeqcycgeuqg:
        if (!$ikgwqyuyckaewsow) {
            goto mckeqaowcweksykw;
        }
        goto ayscuauayocuigwk;
        ceaoyqaqeikqseos:
    }
}
