<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto siqumcaqwoiyycsu;
        moagggcaeywqqiwg:
        eiiwgmaemqqkqsaa:
        goto emcswiuakqwyoagk;
        siqumcaqwoiyycsu:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            $this->sikqggwmmykuiymy($qkweikswegyciaie);
            gyecioagygmsycsm:
        }
        goto moagggcaeywqqiwg;
        emcswiuakqwyoagk:
        return $this;
        goto iqkiaawqeaemgqok;
        iqkiaawqeaemgqok:
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
        goto qiqkwayukawykagq;
        caiuwwcueoceskua:
        msysawimsiesaway:
        goto sgwgiwiakmesacqu;
        sgwgiwiakmesacqu:
        return $this;
        goto mqgaomisqwmiigim;
        qiqkwayukawykagq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto aeemeuioqaqmaaea;
            oukomcwmeqyyyigg:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto okaokkmoccwwcyic;
            aeemeuioqaqmaaea:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto ouuasmqmouiusiga;
            }
            goto oukomcwmeqyyyigg;
            okaokkmoccwwcyic:
            ouuasmqmouiusiga:
            goto mogkykewkeeoogeq;
            mogkykewkeeoogeq:
            ucqcwycgkwueaikw:
            goto ueukoocwcwyaegcq;
            ueukoocwcwyaegcq:
        }
        goto caiuwwcueoceskua;
        mqgaomisqwmiigim:
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
        goto oyeykyosscuomyqc;
        cmswoqwiyuoecakm:
        if (!(is_array($uaqusiikkokccqou) && $uaqusiikkokccqou)) {
            goto guqwaqawiyaoycwc;
        }
        goto oamwewkoeuaeksyy;
        ggwysyagkyaiiusk:
        return $saouceauqqiwcwas;
        goto dkiqcsckmuysmsae;
        uaicoasqcyeuawwk:
        guqwaqawiyaoycwc:
        goto ggwysyagkyaiiusk;
        oyeykyosscuomyqc:
        $saouceauqqiwcwas = [];
        goto asiqqkkoesoeogsq;
        oamwewkoeuaeksyy:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            goto wwuwmiikyeeygyyi;
            iumugucomiookemq:
            iagwwaaygcmmmykw:
            goto aciiwoowqoygcuee;
            iyokcuwocqoicegc:
            if (!$oeoswouussioaimo) {
                goto cywucuooyguymsci;
            }
            goto qgaayqcoacyscqik;
            wwuwmiikyeeygyyi:
            $qkweikswegyciaie = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\137{$qkweikswegyciaie->mwikyscisascoeea()}\137\155\x65\164\141\142\157\170\x65", $qkweikswegyciaie, $this);
            goto okqqowooiskyccky;
            okqqowooiskyccky:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto iagwwaaygcmmmykw;
            }
            goto wkgaeksumwsaweow;
            qgaayqcoacyscqik:
            $saouceauqqiwcwas[$qkweikswegyciaie->cisyiemkeykgkomc()] = $oeoswouussioaimo;
            goto yycgqsoesmqsemik;
            aciiwoowqoygcuee:
            quagwcciuagqessg:
            goto iwcsswgiuqiqagyq;
            yycgqsoesmqsemik:
            cywucuooyguymsci:
            goto iumugucomiookemq;
            wkgaeksumwsaweow:
            $oeoswouussioaimo = $qkweikswegyciaie->register($uusmaiomayssaecw);
            goto iyokcuwocqoicegc;
            iwcsswgiuqiqagyq:
        }
        goto yaugeaqeukqssose;
        yaugeaqeukqssose:
        kesceucuisgqegwo:
        goto uaicoasqcyeuawwk;
        asiqqkkoesoeogsq:
        $uaqusiikkokccqou = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\x5f{$this->mwikyscisascoeea()}\x5f\164\141\142\x5f\155\145\x74\x61\142\157\170\145\163", $this->qsqiqgmeoowykuue(), $this);
        goto cmswoqwiyuoecakm;
        dkiqcsckmuysmsae:
    }
    
    public function emgauskcekyqqseg() : ?string
    {
        goto ieimimkcokyykouy;
        ycamowscwgikiyis:
        if (!$this->mukiwuqwmywsckco()) {
            goto qiqocowgqeeokkuo;
        }
        goto ekmsemaiosgqsqgo;
        qeqocuqeecocsqak:
        qiqocowgqeeokkuo:
        goto qoymuwcmemkoauao;
        ieimimkcokyykouy:
        $oiegiwogmwmawkeo = "\x6d\x64";
        goto ycamowscwgikiyis;
        ekmsemaiosgqsqgo:
        $oiegiwogmwmawkeo = "\170\163";
        goto qeqocuqeecocsqak;
        qoymuwcmemkoauao:
        return ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\x6c\x61\163\163" => "\x70\162\55\164\141\142\x2d\151\x63\x6f\156\x20\151\143\157\x6e\x2d{$oiegiwogmwmawkeo}"]);
        goto aukaaeuwkcigaeww;
        aukaaeuwkcigaeww:
    }
    
    public function ooiemyusqewcmgkg($quseoooqasguwock = "\x2c")
    {
        goto yquuyysqcawssmik;
        yquuyysqcawssmik:
        $sgksuwkwyimqgaii = [];
        goto cocmuyqusmyqugik;
        weakauyqikcssyqa:
        if (!$quseoooqasguwock) {
            goto quskcgyyawkiiqoi;
        }
        goto amwicomkoysgqays;
        amwicomkoysgqays:
        $sgksuwkwyimqgaii = implode($quseoooqasguwock, $sgksuwkwyimqgaii);
        goto eseyuockwcuywymg;
        kgusyguuagwuwmga:
        kuawumwakiqoeaau:
        goto aicwuwomqwiokauu;
        ymcoqeoiycswaekg:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\146\151\145\154\144\137\163\x65\154\145\143\x74\157\162\163", false), $sgksuwkwyimqgaii, $this);
        goto weakauyqikcssyqa;
        wkieciyoomooewcu:
        return $sgksuwkwyimqgaii;
        goto mckeqaowcweksykw;
        aicwuwomqwiokauu:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\146\151\x65\x6c\x64\137\x73\145\154\145\x63\x74\x6f\x72\163", false), $sgksuwkwyimqgaii, $this);
        goto ymcoqeoiycswaekg;
        eseyuockwcuywymg:
        quskcgyyawkiiqoi:
        goto wkieciyoomooewcu;
        cocmuyqusmyqugik:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto ssuaiecwgwieuugg;
            ssuaiecwgwieuugg:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto guowuoimowsseiua;
            }
            goto qgckaaawkwimwegg;
            eyooyicsiemqsguk:
            $sgksuwkwyimqgaii[] = "\x2e\x63\x6d\142\x32\55\151\144\x2d{$aokagokqyuysuksm}\x3a\x6e\x6f\164\x28\56\x63\x6d\142\62\x2d\x74\141\142\x2d\151\x67\x6e\157\x72\145\x29";
            goto kuqysugeaoqosigi;
            qgckaaawkwimwegg:
            $aokagokqyuysuksm = str_replace("\137", "\55", DecoratorSanitize::wkcwykowmmmwioqs($aiowsaccomcoikus->mwikyscisascoeea()));
            goto eyooyicsiemqsguk;
            wwggwoqkiogsgsuy:
            kwwiokmgeaeiqeus:
            goto geyqommgwmggqccq;
            kuqysugeaoqosigi:
            guowuoimowsseiua:
            goto wwggwoqkiogsgsuy;
            geyqommgwmggqccq:
        }
        goto kgusyguuagwuwmga;
        mckeqaowcweksykw:
    }
    public function render()
    {
        goto ccimukeqcycgeuqg;
        ccimukeqcycgeuqg:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto ayscuauayocuigwk;
        ceaoyqaqeikqseos:
        okmkiuqyksmuocqs:
        goto uqqsegscoakyimue;
        wesoqqmucysmckyw:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow);
        goto ceaoyqaqeikqseos;
        ayscuauayocuigwk:
        if (!$ikgwqyuyckaewsow) {
            goto okmkiuqyksmuocqs;
        }
        goto wesoqqmucysmckyw;
        uqqsegscoakyimue:
    }
}
