<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto wgywcekyokwoococ;
        ekmowyyeqsocgaai:
        awuwykyqggymwyme:
        goto oqocgwgmguywkwwm;
        wgywcekyokwoococ:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            $this->sikqggwmmykuiymy($qkweikswegyciaie);
            aaakiyauimugqske:
        }
        goto ekmowyyeqsocgaai;
        oqocgwgmguywkwwm:
        return $this;
        goto eiiwgmaemqqkqsaa;
        eiiwgmaemqqkqsaa:
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
        goto aeemeuioqaqmaaea;
        aeemeuioqaqmaaea:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto emcswiuakqwyoagk;
            ucqcwycgkwueaikw:
            siqumcaqwoiyycsu:
            goto ouuasmqmouiusiga;
            iqkiaawqeaemgqok:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto msysawimsiesaway;
            msysawimsiesaway:
            moagggcaeywqqiwg:
            goto ucqcwycgkwueaikw;
            emcswiuakqwyoagk:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto moagggcaeywqqiwg;
            }
            goto iqkiaawqeaemgqok;
            ouuasmqmouiusiga:
        }
        goto oukomcwmeqyyyigg;
        oukomcwmeqyyyigg:
        gyecioagygmsycsm:
        goto okaokkmoccwwcyic;
        okaokkmoccwwcyic:
        return $this;
        goto mogkykewkeeoogeq;
        mogkykewkeeoogeq:
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
        goto yycgqsoesmqsemik;
        iumugucomiookemq:
        $uaqusiikkokccqou = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\137{$this->mwikyscisascoeea()}\x5f\164\x61\x62\137\155\x65\164\x61\x62\x6f\x78\145\x73", $this->qsqiqgmeoowykuue(), $this);
        goto aciiwoowqoygcuee;
        asiqqkkoesoeogsq:
        return $saouceauqqiwcwas;
        goto cmswoqwiyuoecakm;
        yycgqsoesmqsemik:
        $saouceauqqiwcwas = [];
        goto iumugucomiookemq;
        iwcsswgiuqiqagyq:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            goto mqgaomisqwmiigim;
            iagwwaaygcmmmykw:
            $saouceauqqiwcwas[$qkweikswegyciaie->cisyiemkeykgkomc()] = $oeoswouussioaimo;
            goto wwuwmiikyeeygyyi;
            quagwcciuagqessg:
            $oeoswouussioaimo = $qkweikswegyciaie->register($uusmaiomayssaecw);
            goto cywucuooyguymsci;
            cywucuooyguymsci:
            if (!$oeoswouussioaimo) {
                goto caiuwwcueoceskua;
            }
            goto iagwwaaygcmmmykw;
            wkgaeksumwsaweow:
            qiqkwayukawykagq:
            goto iyokcuwocqoicegc;
            okqqowooiskyccky:
            sgwgiwiakmesacqu:
            goto wkgaeksumwsaweow;
            kesceucuisgqegwo:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto sgwgiwiakmesacqu;
            }
            goto quagwcciuagqessg;
            mqgaomisqwmiigim:
            $qkweikswegyciaie = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\137{$qkweikswegyciaie->mwikyscisascoeea()}\137\155\145\164\141\142\x6f\170\145", $qkweikswegyciaie, $this);
            goto kesceucuisgqegwo;
            wwuwmiikyeeygyyi:
            caiuwwcueoceskua:
            goto okqqowooiskyccky;
            iyokcuwocqoicegc:
        }
        goto guqwaqawiyaoycwc;
        oyeykyosscuomyqc:
        qgaayqcoacyscqik:
        goto asiqqkkoesoeogsq;
        guqwaqawiyaoycwc:
        ueukoocwcwyaegcq:
        goto oyeykyosscuomyqc;
        aciiwoowqoygcuee:
        if (!(is_array($uaqusiikkokccqou) && $uaqusiikkokccqou)) {
            goto qgaayqcoacyscqik;
        }
        goto iwcsswgiuqiqagyq;
        cmswoqwiyuoecakm:
    }
    
    public function emgauskcekyqqseg() : ?string
    {
        goto yaugeaqeukqssose;
        uaicoasqcyeuawwk:
        if (!$this->mukiwuqwmywsckco()) {
            goto oamwewkoeuaeksyy;
        }
        goto ggwysyagkyaiiusk;
        ggwysyagkyaiiusk:
        $oiegiwogmwmawkeo = "\170\163";
        goto dkiqcsckmuysmsae;
        qiqocowgqeeokkuo:
        return ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\x6c\141\x73\163" => "\x70\x72\55\x74\x61\142\55\x69\143\x6f\x6e\40\151\143\x6f\x6e\x2d{$oiegiwogmwmawkeo}"]);
        goto ieimimkcokyykouy;
        dkiqcsckmuysmsae:
        oamwewkoeuaeksyy:
        goto qiqocowgqeeokkuo;
        yaugeaqeukqssose:
        $oiegiwogmwmawkeo = "\x6d\x64";
        goto uaicoasqcyeuawwk;
        ieimimkcokyykouy:
    }
    
    public function ooiemyusqewcmgkg($quseoooqasguwock = "\x2c")
    {
        goto eyooyicsiemqsguk;
        kgusyguuagwuwmga:
        qgckaaawkwimwegg:
        goto aicwuwomqwiokauu;
        geyqommgwmggqccq:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\146\x69\145\x6c\x64\x5f\x73\145\154\x65\143\x74\x6f\162\x73", false), $sgksuwkwyimqgaii, $this);
        goto quskcgyyawkiiqoi;
        eyooyicsiemqsguk:
        $sgksuwkwyimqgaii = [];
        goto kuqysugeaoqosigi;
        aicwuwomqwiokauu:
        return $sgksuwkwyimqgaii;
        goto ymcoqeoiycswaekg;
        quskcgyyawkiiqoi:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\146\151\145\x6c\x64\137\x73\x65\154\145\x63\164\x6f\x72\x73", false), $sgksuwkwyimqgaii, $this);
        goto yquuyysqcawssmik;
        wwggwoqkiogsgsuy:
        ycamowscwgikiyis:
        goto geyqommgwmggqccq;
        cocmuyqusmyqugik:
        $sgksuwkwyimqgaii = implode($quseoooqasguwock, $sgksuwkwyimqgaii);
        goto kgusyguuagwuwmga;
        yquuyysqcawssmik:
        if (!$quseoooqasguwock) {
            goto qgckaaawkwimwegg;
        }
        goto cocmuyqusmyqugik;
        kuqysugeaoqosigi:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto qoymuwcmemkoauao;
            aukaaeuwkcigaeww:
            $aokagokqyuysuksm = str_replace("\137", "\x2d", DecoratorSanitize::wkcwykowmmmwioqs($aiowsaccomcoikus->mwikyscisascoeea()));
            goto kuawumwakiqoeaau;
            kwwiokmgeaeiqeus:
            qeqocuqeecocsqak:
            goto guowuoimowsseiua;
            guowuoimowsseiua:
            ekmsemaiosgqsqgo:
            goto ssuaiecwgwieuugg;
            kuawumwakiqoeaau:
            $sgksuwkwyimqgaii[] = "\56\143\155\142\x32\55\x69\144\x2d{$aokagokqyuysuksm}\x3a\156\157\x74\x28\56\143\x6d\142\x32\x2d\x74\x61\x62\55\x69\147\156\x6f\162\x65\51";
            goto kwwiokmgeaeiqeus;
            qoymuwcmemkoauao:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto qeqocuqeecocsqak;
            }
            goto aukaaeuwkcigaeww;
            ssuaiecwgwieuugg:
        }
        goto wwggwoqkiogsgsuy;
        ymcoqeoiycswaekg:
    }
    public function render()
    {
        goto amwicomkoysgqays;
        wkieciyoomooewcu:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow);
        goto mckeqaowcweksykw;
        amwicomkoysgqays:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto eseyuockwcuywymg;
        mckeqaowcweksykw:
        weakauyqikcssyqa:
        goto okmkiuqyksmuocqs;
        eseyuockwcuywymg:
        if (!$ikgwqyuyckaewsow) {
            goto weakauyqikcssyqa;
        }
        goto wkieciyoomooewcu;
        okmkiuqyksmuocqs:
    }
}
