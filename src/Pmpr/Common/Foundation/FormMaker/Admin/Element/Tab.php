<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        siqumcaqwoiyycsu:
        return $this;
        goto moagggcaeywqqiwg;
        gyecioagygmsycsm:
        ekmowyyeqsocgaai:
        goto siqumcaqwoiyycsu;
        eiiwgmaemqqkqsaa:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            $this->sikqggwmmykuiymy($qkweikswegyciaie);
            oqocgwgmguywkwwm:
        }
        goto gyecioagygmsycsm;
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
            ucqcwycgkwueaikw:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto msysawimsiesaway;
            }
            goto ouuasmqmouiusiga;
            aeemeuioqaqmaaea:
            msysawimsiesaway:
            goto oukomcwmeqyyyigg;
            oukomcwmeqyyyigg:
            iqkiaawqeaemgqok:
            goto okaokkmoccwwcyic;
            okaokkmoccwwcyic:
        }
        goto ueukoocwcwyaegcq;
        ueukoocwcwyaegcq:
        emcswiuakqwyoagk:
        goto qiqkwayukawykagq;
        qiqkwayukawykagq:
        return $this;
        goto caiuwwcueoceskua;
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
        oyeykyosscuomyqc:
        if (!(is_array($uaqusiikkokccqou) && $uaqusiikkokccqou)) {
            goto aciiwoowqoygcuee;
        }
        goto asiqqkkoesoeogsq;
        iwcsswgiuqiqagyq:
        $saouceauqqiwcwas = [];
        goto guqwaqawiyaoycwc;
        yaugeaqeukqssose:
        return $saouceauqqiwcwas;
        goto uaicoasqcyeuawwk;
        cmswoqwiyuoecakm:
        sgwgiwiakmesacqu:
        goto oamwewkoeuaeksyy;
        asiqqkkoesoeogsq:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            goto cywucuooyguymsci;
            qgaayqcoacyscqik:
            quagwcciuagqessg:
            goto yycgqsoesmqsemik;
            wkgaeksumwsaweow:
            $saouceauqqiwcwas[$qkweikswegyciaie->cisyiemkeykgkomc()] = $oeoswouussioaimo;
            goto iyokcuwocqoicegc;
            cywucuooyguymsci:
            $qkweikswegyciaie = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\137{$qkweikswegyciaie->mwikyscisascoeea()}\x5f\x6d\x65\x74\x61\x62\x6f\x78\x65", $qkweikswegyciaie, $this);
            goto iagwwaaygcmmmykw;
            yycgqsoesmqsemik:
            mqgaomisqwmiigim:
            goto iumugucomiookemq;
            wwuwmiikyeeygyyi:
            $oeoswouussioaimo = $qkweikswegyciaie->register($uusmaiomayssaecw);
            goto okqqowooiskyccky;
            okqqowooiskyccky:
            if (!$oeoswouussioaimo) {
                goto kesceucuisgqegwo;
            }
            goto wkgaeksumwsaweow;
            iagwwaaygcmmmykw:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto quagwcciuagqessg;
            }
            goto wwuwmiikyeeygyyi;
            iyokcuwocqoicegc:
            kesceucuisgqegwo:
            goto qgaayqcoacyscqik;
            iumugucomiookemq:
        }
        goto cmswoqwiyuoecakm;
        guqwaqawiyaoycwc:
        $uaqusiikkokccqou = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\137{$this->mwikyscisascoeea()}\137\x74\x61\x62\137\x6d\x65\x74\x61\142\x6f\x78\x65\163", $this->qsqiqgmeoowykuue(), $this);
        goto oyeykyosscuomyqc;
        oamwewkoeuaeksyy:
        aciiwoowqoygcuee:
        goto yaugeaqeukqssose;
        uaicoasqcyeuawwk:
    }
    
    public function emgauskcekyqqseg() : ?string
    {
        goto dkiqcsckmuysmsae;
        qiqocowgqeeokkuo:
        if (!$this->mukiwuqwmywsckco()) {
            goto ggwysyagkyaiiusk;
        }
        goto ieimimkcokyykouy;
        ieimimkcokyykouy:
        $oiegiwogmwmawkeo = "\170\163";
        goto ycamowscwgikiyis;
        ekmsemaiosgqsqgo:
        return ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\154\141\x73\x73" => "\160\162\55\164\141\142\55\x69\143\157\x6e\x20\151\143\157\156\x2d{$oiegiwogmwmawkeo}"]);
        goto qeqocuqeecocsqak;
        ycamowscwgikiyis:
        ggwysyagkyaiiusk:
        goto ekmsemaiosgqsqgo;
        dkiqcsckmuysmsae:
        $oiegiwogmwmawkeo = "\155\144";
        goto qiqocowgqeeokkuo;
        qeqocuqeecocsqak:
    }
    
    public function ooiemyusqewcmgkg($quseoooqasguwock = "\x2c")
    {
        goto geyqommgwmggqccq;
        kgusyguuagwuwmga:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x66\x69\145\154\144\x5f\x73\145\154\145\x63\x74\x6f\162\163", false), $sgksuwkwyimqgaii, $this);
        goto aicwuwomqwiokauu;
        aicwuwomqwiokauu:
        if (!$quseoooqasguwock) {
            goto wwggwoqkiogsgsuy;
        }
        goto ymcoqeoiycswaekg;
        ymcoqeoiycswaekg:
        $sgksuwkwyimqgaii = implode($quseoooqasguwock, $sgksuwkwyimqgaii);
        goto weakauyqikcssyqa;
        quskcgyyawkiiqoi:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto kwwiokmgeaeiqeus;
            kwwiokmgeaeiqeus:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto kuawumwakiqoeaau;
            }
            goto guowuoimowsseiua;
            qgckaaawkwimwegg:
            kuawumwakiqoeaau:
            goto eyooyicsiemqsguk;
            eyooyicsiemqsguk:
            aukaaeuwkcigaeww:
            goto kuqysugeaoqosigi;
            guowuoimowsseiua:
            $aokagokqyuysuksm = str_replace("\137", "\x2d", DecoratorSanitize::wkcwykowmmmwioqs($aiowsaccomcoikus->mwikyscisascoeea()));
            goto ssuaiecwgwieuugg;
            ssuaiecwgwieuugg:
            $sgksuwkwyimqgaii[] = "\56\143\x6d\x62\62\x2d\x69\144\55{$aokagokqyuysuksm}\72\156\x6f\x74\50\x2e\x63\155\142\x32\55\164\141\142\x2d\151\147\156\157\x72\145\51";
            goto qgckaaawkwimwegg;
            kuqysugeaoqosigi:
        }
        goto yquuyysqcawssmik;
        cocmuyqusmyqugik:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\146\x69\145\x6c\144\137\x73\145\x6c\145\x63\164\x6f\162\x73", false), $sgksuwkwyimqgaii, $this);
        goto kgusyguuagwuwmga;
        yquuyysqcawssmik:
        qoymuwcmemkoauao:
        goto cocmuyqusmyqugik;
        weakauyqikcssyqa:
        wwggwoqkiogsgsuy:
        goto amwicomkoysgqays;
        geyqommgwmggqccq:
        $sgksuwkwyimqgaii = [];
        goto quskcgyyawkiiqoi;
        amwicomkoysgqays:
        return $sgksuwkwyimqgaii;
        goto eseyuockwcuywymg;
        eseyuockwcuywymg:
    }
    public function render()
    {
        goto mckeqaowcweksykw;
        okmkiuqyksmuocqs:
        if (!$ikgwqyuyckaewsow) {
            goto wkieciyoomooewcu;
        }
        goto ccimukeqcycgeuqg;
        mckeqaowcweksykw:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto okmkiuqyksmuocqs;
        ccimukeqcycgeuqg:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow);
        goto ayscuauayocuigwk;
        ayscuauayocuigwk:
        wkieciyoomooewcu:
        goto wesoqqmucysmckyw;
        wesoqqmucysmckyw:
    }
}
