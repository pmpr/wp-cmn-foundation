<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Traits\SingletonTrait;
use Pmpr\Common\Foundation\Decorator\DecoratorWidget;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait;
use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Traits\ComponentTrait;
use Pmpr\Common\Foundation\Traits\HookTrait;
use Pmpr\Common\Foundation\Traits\TranslateTrait;
use WP_Widget;

abstract class Widget extends WP_Widget implements ConstantInterface
{
    const OUTPUT_TEMPLATE = "\x6f\x75\164\x70\165\x74\x5f\x74\145\155\160\x6c\x61\x74\x65";
    use SingletonTrait, ComponentTrait, TranslateTrait, ElementTrait, FieldTrait, HookTrait;
    
    public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = [])
    {
        goto emsmukwgwwusyueg;
        sweugqqowwoamomc:
        parent::__construct("{$quowyokcwswmuois}\137{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg);
        goto escickciciscoaec;
        escickciciscoaec:
        $this->gyqeoeemeemicgqi();
        goto isyiocycgikqamoi;
        qawmkgkwgqogkagw:
        $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\x63\x6c\x61\x73\163\156\x61\x6d\x65" => ManipulateString::igcwuwuymeuomaqo("{$quowyokcwswmuois}\55{$aokagokqyuysuksm}"), self::DESCRIPTION => $mkqqqewsokcswckc]);
        goto sweugqqowwoamomc;
        emsmukwgwwusyueg:
        if ($aokagokqyuysuksm) {
            goto cgsgaakaykagyygo;
        }
        goto omousmkywwwkksay;
        quqiwccwsyawasoe:
        cgsgaakaykagyygo:
        goto ocoiequaimceeeoy;
        ocoiequaimceeeoy:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto qawmkgkwgqogkagw;
        omousmkywwwkksay:
        $aokagokqyuysuksm = ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa());
        goto quqiwccwsyawasoe;
        isyiocycgikqamoi:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\x64\155\x69\156\x5f\x69\156\x69\164", [$this, "\x79\145\171\151\x67\x75\x79\x65\147\x6d\155\x79\165\x73\145\141"])->qcsmikeggeemccuu("\167\x69\x64\x67\145\x74\x73\137\151\156\x69\164", [$this, "\162\x65\147\x69\163\164\145\162"])->qcsmikeggeemccuu("\x61\x64\155\x69\156\x5f\146\x6f\157\x74\x65\x72\55\167\x69\144\x67\x65\164\163\56\x70\150\x70", [$this, "\147\x67\x73\153\x63\147\x67\x61\x61\x65\141\x6b\147\141\x71\143"]);
    }
    public function register()
    {
        DecoratorWidget::register(self::uqggkiomyiceyooa());
    }
    public function yeyiguyegmmyusea()
    {
        goto gaaewsyiiysgawgu;
        gaaewsyiiysgawgu:
        global $hook_suffix;
        goto moqawwqumcaawiac;
        mcuskskiayekoamu:
        ugsyqugoqmsmwmwc:
        goto ckcwoiecmaaqauqu;
        iqicywyqosukgyom:
        $this->saoyckekguwqwgcq();
        goto mcuskskiayekoamu;
        moqawwqumcaawiac:
        if (!($hook_suffix === "\167\151\144\x67\x65\x74\163\56\x70\150\x70")) {
            goto ugsyqugoqmsmwmwc;
        }
        goto iqicywyqosukgyom;
        ckcwoiecmaaqauqu:
    }
    public function saoyckekguwqwgcq()
    {
    }
    public function ggskcggaaeakgaqc()
    {
    }
    
    public function update($new_instance, $old_instance) : array
    {
        goto wsyeeuisawusawwu;
        igkqkkwwogciekqk:
        uwwiiqiikuusuocc:
        goto qmqooggmccwuiumi;
        qmqooggmccwuiumi:
        return $owgumcsyqsamiemg;
        goto ykkqammyacwiugwo;
        mikouwykeswmseqa:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $owgumcsyqsamiemg[$aokagokqyuysuksm] = ManipulateArray::get($new_instance, $aokagokqyuysuksm);
            yqowgmmyogcameuo:
        }
        goto igkqkkwwogciekqk;
        wsyeeuisawusawwu:
        $owgumcsyqsamiemg = $old_instance;
        goto qecqaigyggikwmeo;
        qecqaigyggikwmeo:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto mikouwykeswmseqa;
        ykkqammyacwiugwo:
    }
    
    public function form($owgumcsyqsamiemg)
    {
        goto uywocaygaeysmcsc;
        uywocaygaeysmcsc:
        $eaoumsseceiowgsk = [];
        goto cmqogyywaqmmmwss;
        cueiywyuommyocey:
        self::iuaucuookgoqiiio($eaoumsseceiowgsk);
        goto ysayeagkekiusmeu;
        gimiyacaiomgucuu:
        if (!$eaoumsseceiowgsk) {
            goto cecukmgemigakuum;
        }
        goto cueiywyuommyocey;
        usqeaouygcuiymaa:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto uaomcsauseuwaseg;
            siwmcmcqweiaiyka:
            if (!($eqgoocgaqwqcimie = ManipulateArray::get($owgumcsyqsamiemg, $aokagokqyuysuksm))) {
                goto guaokcsyycsuegkw;
            }
            goto oiikwqssmywyqmow;
            oiikwqssmywyqmow:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto nkaqkoaswwgwkiea;
            cyqmausswuokwsws:
            wicugycksmwmokkm:
            goto cuiocwuoceciyecw;
            kayikiwuwkgyiowu:
            $aiowsaccomcoikus->yoimakcqmoqokkcu()->qcgocuceocquqcuw("\x69\144", $this->get_field_id($aokagokqyuysuksm));
            goto yiqaaumgyoymwmwc;
            cyyaeuauwoqoiswy:
            $eaoumsseceiowgsk[$aokagokqyuysuksm] = $aiowsaccomcoikus;
            goto cyqmausswuokwsws;
            nkaqkoaswwgwkiea:
            guaokcsyycsuegkw:
            goto oaymugomswyeqgms;
            cuiocwuoceciyecw:
            wgaeaqwwieyaqsyk:
            goto jaaukakisoqesywi;
            oaymugomswyeqgms:
            
            if (in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\150\x65\143\153\x62\x6f\170", "\x72\141\144\x69\x6f"])) {
                goto qwgsqwmqmigwwwug;
            }
            goto kayikiwuwkgyiowu;
            uaomcsauseuwaseg:
            $aiowsaccomcoikus["\151\x64"] = $this->get_field_name($aokagokqyuysuksm);
            goto euuqicgakkyoayyo;
            iucacumsqyoimoqq:
            qwgsqwmqmigwwwug:
            goto scmasgusoqouumgu;
            yiqaaumgyoymwmwc:
            goto wkuqsumgkuyygois;
            goto iucacumsqyoimoqq;
            euuqicgakkyoayyo:
            $aiowsaccomcoikus = self::okmsgamiiemyesao($aiowsaccomcoikus);
            goto qmeyqewkyigkqaua;
            scmasgusoqouumgu:
            $aiowsaccomcoikus->mkmssscwmeekwgqo();
            goto egsgkaascayskqmu;
            egsgkaascayskqmu:
            wkuqsumgkuyygois:
            goto cyyaeuauwoqoiswy;
            qmeyqewkyigkqaua:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wicugycksmwmokkm;
            }
            goto siwmcmcqweiaiyka;
            jaaukakisoqesywi:
        }
        goto yaewecqgykieauki;
        yaewecqgykieauki:
        ocaayuycwauaaggq:
        goto gimiyacaiomgucuu;
        cmqogyywaqmmmwss:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto usqeaouygcuiymaa;
        ysayeagkekiusmeu:
        cecukmgemigakuum:
        goto kouameayeguwoeos;
        kouameayeguwoeos:
    }
    
    public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg)
    {
        goto agmeaqeyawqaaqyk;
        aomwquymwqgcewis:
        yquqkequgwgqogsk:
        goto mcgyqoauweyweoyy;
        agmeaqeyawqaaqyk:
        if (!(is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg))) {
            goto yquqkequgwgqogsk;
        }
        goto qcakmuaykqwiqmuu;
        qmysagiommykwiei:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::BEFORE_WIDGET, '');
        goto iqyiaauwmwcqocok;
        qcakmuaykqwiqmuu:
        $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto igkugseogmcgasoq;
        iqyiaauwmwcqocok:
        echo $nsmgceoqaqogqmuw;
        goto uwuygoyaaeskeoyy;
        igkugseogmcgasoq:
        if (!$nsmgceoqaqogqmuw) {
            goto iiokyisowgqqswqo;
        }
        goto qmysagiommykwiei;
        uwuygoyaaeskeoyy:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::AFTER_WIDGET, '');
        goto wmwyyaqogsqssyac;
        wmwyyaqogsqssyac:
        iiokyisowgqqswqo:
        goto aomwquymwqgcewis;
        mcgyqoauweyweoyy:
    }
    
    public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string
    {
        goto muwqiukyceakceog;
        ygweqayaqqeweiie:
        eqwkisceygagmmwi:
        goto aecggwmiiueeiwqy;
        yyskgqykggakkicm:
        $aqykuigiuwmmcieu = '';
        goto yuiakguqekmiuamu;
        aecggwmiiueeiwqy:
        return $aqykuigiuwmmcieu;
        goto wuwygsqiyuwgyiuk;
        gsscwykyyykyqaey:
        $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, ["\145\143\x68\157" => false]);
        goto ygweqayaqqeweiie;
        euykeqcoiyuwwayu:
        if (!$this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) {
            goto eqwkisceygagmmwi;
        }
        goto gsscwykyyykyqaey;
        muwqiukyceakceog:
        $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto yyskgqykggakkicm;
        yuiakguqekmiuamu:
        $qqscaoyqikuyeoaw = ManipulateString::ogimogiceeekegoi(ManipulateArray::get($qookweymeqawmcwo, self::OUTPUT_TEMPLATE, self::ugwmakayykcmcmqa()));
        goto euykeqcoiyuwwayu;
        wuwygsqiyuwgyiuk:
    }
    
    public function qoqyomiqwooaeoiy($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = [], $qookweymeqawmcwo = []) : bool
    {
        return !empty($qookweymeqawmcwo);
    }
    
    public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array
    {
        return $owgumcsyqsamiemg;
    }
    
    public abstract function ugmceccgwaaaigiy() : array;
}
