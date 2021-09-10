<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const OUTPUT_TEMPLATE = "\157\165\164\x70\165\164\x5f\x74\x65\155\x70\154\141\164\x65";
    use SingletonTrait, ComponentTrait, TranslateTrait, ElementTrait, FieldTrait, HookTrait;
    
    public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = [])
    {
        goto cgsgaakaykagyygo;
        ocoiequaimceeeoy:
        $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\x63\x6c\141\163\x73\x6e\x61\155\145" => ManipulateString::igcwuwuymeuomaqo("{$quowyokcwswmuois}\55{$aokagokqyuysuksm}"), self::DESCRIPTION => $mkqqqewsokcswckc]);
        goto qawmkgkwgqogkagw;
        cgsgaakaykagyygo:
        if ($aokagokqyuysuksm) {
            goto iooomaqggygwwuok;
        }
        goto emsmukwgwwusyueg;
        quqiwccwsyawasoe:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto ocoiequaimceeeoy;
        sweugqqowwoamomc:
        $this->gyqeoeemeemicgqi();
        goto escickciciscoaec;
        emsmukwgwwusyueg:
        $aokagokqyuysuksm = ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa());
        goto omousmkywwwkksay;
        qawmkgkwgqogkagw:
        parent::__construct("{$quowyokcwswmuois}\x5f{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg);
        goto sweugqqowwoamomc;
        omousmkywwwkksay:
        iooomaqggygwwuok:
        goto quqiwccwsyawasoe;
        escickciciscoaec:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\x5f\x69\x6e\151\164", [$this, "\x79\145\x79\x69\147\x75\171\x65\147\155\155\171\165\x73\145\x61"])->qcsmikeggeemccuu("\x77\x69\x64\x67\145\164\x73\137\151\x6e\151\x74", [$this, "\162\145\x67\x69\163\164\x65\x72"])->qcsmikeggeemccuu("\141\144\155\151\156\x5f\x66\157\157\x74\x65\x72\55\167\151\144\147\145\164\x73\56\x70\150\x70", [$this, "\147\x67\x73\153\x63\147\x67\141\141\145\141\x6b\x67\x61\x71\143"]);
    }
    public function register()
    {
        DecoratorWidget::register(self::uqggkiomyiceyooa());
    }
    public function yeyiguyegmmyusea()
    {
        goto ugsyqugoqmsmwmwc;
        moqawwqumcaawiac:
        $this->saoyckekguwqwgcq();
        goto iqicywyqosukgyom;
        ugsyqugoqmsmwmwc:
        global $hook_suffix;
        goto gaaewsyiiysgawgu;
        gaaewsyiiysgawgu:
        if (!($hook_suffix === "\x77\151\x64\147\x65\x74\x73\56\x70\150\x70")) {
            goto isyiocycgikqamoi;
        }
        goto moqawwqumcaawiac;
        iqicywyqosukgyom:
        isyiocycgikqamoi:
        goto mcuskskiayekoamu;
        mcuskskiayekoamu:
    }
    public function saoyckekguwqwgcq()
    {
    }
    public function ggskcggaaeakgaqc()
    {
    }
    
    public function update($new_instance, $old_instance) : array
    {
        goto yqowgmmyogcameuo;
        yqowgmmyogcameuo:
        $owgumcsyqsamiemg = $old_instance;
        goto wsyeeuisawusawwu;
        wsyeeuisawusawwu:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qecqaigyggikwmeo;
        igkqkkwwogciekqk:
        return $owgumcsyqsamiemg;
        goto qmqooggmccwuiumi;
        qecqaigyggikwmeo:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $owgumcsyqsamiemg[$aokagokqyuysuksm] = ManipulateArray::get($new_instance, $aokagokqyuysuksm);
            uwwiiqiikuusuocc:
        }
        goto mikouwykeswmseqa;
        mikouwykeswmseqa:
        ckcwoiecmaaqauqu:
        goto igkqkkwwogciekqk;
        qmqooggmccwuiumi:
    }
    
    public function form($owgumcsyqsamiemg)
    {
        goto cecukmgemigakuum;
        usqeaouygcuiymaa:
        ykkqammyacwiugwo:
        goto yaewecqgykieauki;
        cecukmgemigakuum:
        $eaoumsseceiowgsk = [];
        goto uywocaygaeysmcsc;
        gimiyacaiomgucuu:
        self::iuaucuookgoqiiio($eaoumsseceiowgsk);
        goto cueiywyuommyocey;
        yaewecqgykieauki:
        if (!$eaoumsseceiowgsk) {
            goto jaaukakisoqesywi;
        }
        goto gimiyacaiomgucuu;
        cueiywyuommyocey:
        jaaukakisoqesywi:
        goto ysayeagkekiusmeu;
        uywocaygaeysmcsc:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto cmqogyywaqmmmwss;
        cmqogyywaqmmmwss:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto wicugycksmwmokkm;
            nkaqkoaswwgwkiea:
            
            if (in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\143\150\145\x63\x6b\x62\157\x78", "\162\x61\144\151\157"])) {
                goto guaokcsyycsuegkw;
            }
            goto oaymugomswyeqgms;
            egsgkaascayskqmu:
            $eaoumsseceiowgsk[$aokagokqyuysuksm] = $aiowsaccomcoikus;
            goto cyyaeuauwoqoiswy;
            cyyaeuauwoqoiswy:
            wkuqsumgkuyygois:
            goto cyqmausswuokwsws;
            qmeyqewkyigkqaua:
            if (!($eqgoocgaqwqcimie = ManipulateArray::get($owgumcsyqsamiemg, $aokagokqyuysuksm))) {
                goto wgaeaqwwieyaqsyk;
            }
            goto siwmcmcqweiaiyka;
            yiqaaumgyoymwmwc:
            guaokcsyycsuegkw:
            goto iucacumsqyoimoqq;
            euuqicgakkyoayyo:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wkuqsumgkuyygois;
            }
            goto qmeyqewkyigkqaua;
            oaymugomswyeqgms:
            $aiowsaccomcoikus->yoimakcqmoqokkcu()->qcgocuceocquqcuw("\x69\x64", $this->get_field_id($aokagokqyuysuksm));
            goto kayikiwuwkgyiowu;
            uaomcsauseuwaseg:
            $aiowsaccomcoikus = self::okmsgamiiemyesao($aiowsaccomcoikus);
            goto euuqicgakkyoayyo;
            scmasgusoqouumgu:
            qwgsqwmqmigwwwug:
            goto egsgkaascayskqmu;
            oiikwqssmywyqmow:
            wgaeaqwwieyaqsyk:
            goto nkaqkoaswwgwkiea;
            wicugycksmwmokkm:
            $aiowsaccomcoikus["\151\x64"] = $this->get_field_name($aokagokqyuysuksm);
            goto uaomcsauseuwaseg;
            cyqmausswuokwsws:
            ocaayuycwauaaggq:
            goto cuiocwuoceciyecw;
            siwmcmcqweiaiyka:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto oiikwqssmywyqmow;
            kayikiwuwkgyiowu:
            goto qwgsqwmqmigwwwug;
            goto yiqaaumgyoymwmwc;
            iucacumsqyoimoqq:
            $aiowsaccomcoikus->mkmssscwmeekwgqo();
            goto scmasgusoqouumgu;
            cuiocwuoceciyecw:
        }
        goto usqeaouygcuiymaa;
        ysayeagkekiusmeu:
    }
    
    public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg)
    {
        goto yquqkequgwgqogsk;
        igkugseogmcgasoq:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::BEFORE_WIDGET, '');
        goto qmysagiommykwiei;
        yquqkequgwgqogsk:
        if (!(is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg))) {
            goto iiokyisowgqqswqo;
        }
        goto agmeaqeyawqaaqyk;
        qcakmuaykqwiqmuu:
        if (!$nsmgceoqaqogqmuw) {
            goto kouameayeguwoeos;
        }
        goto igkugseogmcgasoq;
        iqyiaauwmwcqocok:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::AFTER_WIDGET, '');
        goto uwuygoyaaeskeoyy;
        uwuygoyaaeskeoyy:
        kouameayeguwoeos:
        goto wmwyyaqogsqssyac;
        agmeaqeyawqaaqyk:
        $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto qcakmuaykqwiqmuu;
        wmwyyaqogsqssyac:
        iiokyisowgqqswqo:
        goto aomwquymwqgcewis;
        qmysagiommykwiei:
        echo $nsmgceoqaqogqmuw;
        goto iqyiaauwmwcqocok;
        aomwquymwqgcewis:
    }
    
    public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string
    {
        goto eqwkisceygagmmwi;
        eqwkisceygagmmwi:
        $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto muwqiukyceakceog;
        ygweqayaqqeweiie:
        return $aqykuigiuwmmcieu;
        goto aecggwmiiueeiwqy;
        muwqiukyceakceog:
        $aqykuigiuwmmcieu = '';
        goto yyskgqykggakkicm;
        euykeqcoiyuwwayu:
        $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, ["\x65\143\x68\x6f" => false]);
        goto gsscwykyyykyqaey;
        gsscwykyyykyqaey:
        mcgyqoauweyweoyy:
        goto ygweqayaqqeweiie;
        yyskgqykggakkicm:
        $qqscaoyqikuyeoaw = ManipulateString::ogimogiceeekegoi(ManipulateArray::get($qookweymeqawmcwo, self::OUTPUT_TEMPLATE, self::ugwmakayykcmcmqa()));
        goto yuiakguqekmiuamu;
        yuiakguqekmiuamu:
        if (!$this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) {
            goto mcgyqoauweyweoyy;
        }
        goto euykeqcoiyuwwayu;
        aecggwmiiueeiwqy:
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
