<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const OUTPUT_TEMPLATE = "\157\165\x74\x70\165\x74\137\164\x65\155\160\x6c\141\x74\145";
    use SingletonTrait, ComponentTrait, TranslateTrait, ElementTrait, FieldTrait, HookTrait;
    
    public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = [])
    {
        goto cgsgaakaykagyygo;
        sweugqqowwoamomc:
        $this->gyqeoeemeemicgqi();
        goto escickciciscoaec;
        qawmkgkwgqogkagw:
        parent::__construct("{$quowyokcwswmuois}\137{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg);
        goto sweugqqowwoamomc;
        omousmkywwwkksay:
        iooomaqggygwwuok:
        goto quqiwccwsyawasoe;
        emsmukwgwwusyueg:
        $aokagokqyuysuksm = ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa());
        goto omousmkywwwkksay;
        cgsgaakaykagyygo:
        if ($aokagokqyuysuksm) {
            goto iooomaqggygwwuok;
        }
        goto emsmukwgwwusyueg;
        ocoiequaimceeeoy:
        $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\x63\154\x61\x73\163\x6e\141\155\145" => ManipulateString::igcwuwuymeuomaqo("{$quowyokcwswmuois}\x2d{$aokagokqyuysuksm}"), self::DESCRIPTION => $mkqqqewsokcswckc]);
        goto qawmkgkwgqogkagw;
        quqiwccwsyawasoe:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto ocoiequaimceeeoy;
        escickciciscoaec:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\137\151\156\x69\164", [$this, "\x79\145\x79\151\x67\165\171\145\x67\x6d\155\171\165\x73\145\141"])->qcsmikeggeemccuu("\x77\x69\x64\x67\145\x74\x73\137\151\156\x69\x74", [$this, "\162\145\x67\x69\x73\x74\x65\162"])->qcsmikeggeemccuu("\141\144\155\x69\156\x5f\146\x6f\157\164\145\x72\x2d\167\151\144\x67\145\164\163\56\160\150\x70", [$this, "\147\147\163\x6b\x63\147\147\x61\141\145\141\x6b\x67\x61\x71\143"]);
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
        if (!($hook_suffix === "\x77\151\144\x67\x65\x74\163\56\x70\x68\160")) {
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
        wsyeeuisawusawwu:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qecqaigyggikwmeo;
        mikouwykeswmseqa:
        ckcwoiecmaaqauqu:
        goto igkqkkwwogciekqk;
        qecqaigyggikwmeo:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $owgumcsyqsamiemg[$aokagokqyuysuksm] = ManipulateArray::get($new_instance, $aokagokqyuysuksm);
            uwwiiqiikuusuocc:
        }
        goto mikouwykeswmseqa;
        igkqkkwwogciekqk:
        return $owgumcsyqsamiemg;
        goto qmqooggmccwuiumi;
        yqowgmmyogcameuo:
        $owgumcsyqsamiemg = $old_instance;
        goto wsyeeuisawusawwu;
        qmqooggmccwuiumi:
    }
    
    public function form($owgumcsyqsamiemg)
    {
        goto cecukmgemigakuum;
        cecukmgemigakuum:
        $eaoumsseceiowgsk = [];
        goto uywocaygaeysmcsc;
        cueiywyuommyocey:
        jaaukakisoqesywi:
        goto ysayeagkekiusmeu;
        usqeaouygcuiymaa:
        ykkqammyacwiugwo:
        goto yaewecqgykieauki;
        gimiyacaiomgucuu:
        self::iuaucuookgoqiiio($eaoumsseceiowgsk);
        goto cueiywyuommyocey;
        uywocaygaeysmcsc:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto cmqogyywaqmmmwss;
        cmqogyywaqmmmwss:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto wicugycksmwmokkm;
            uaomcsauseuwaseg:
            $aiowsaccomcoikus = self::okmsgamiiemyesao($aiowsaccomcoikus);
            goto euuqicgakkyoayyo;
            kayikiwuwkgyiowu:
            goto qwgsqwmqmigwwwug;
            goto yiqaaumgyoymwmwc;
            egsgkaascayskqmu:
            $eaoumsseceiowgsk[$aokagokqyuysuksm] = $aiowsaccomcoikus;
            goto cyyaeuauwoqoiswy;
            siwmcmcqweiaiyka:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto oiikwqssmywyqmow;
            scmasgusoqouumgu:
            qwgsqwmqmigwwwug:
            goto egsgkaascayskqmu;
            wicugycksmwmokkm:
            $aiowsaccomcoikus["\x69\144"] = $this->get_field_name($aokagokqyuysuksm);
            goto uaomcsauseuwaseg;
            oaymugomswyeqgms:
            $aiowsaccomcoikus->yoimakcqmoqokkcu()->qcgocuceocquqcuw("\151\144", $this->get_field_id($aokagokqyuysuksm));
            goto kayikiwuwkgyiowu;
            euuqicgakkyoayyo:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wkuqsumgkuyygois;
            }
            goto qmeyqewkyigkqaua;
            cyqmausswuokwsws:
            ocaayuycwauaaggq:
            goto cuiocwuoceciyecw;
            iucacumsqyoimoqq:
            $aiowsaccomcoikus->mkmssscwmeekwgqo();
            goto scmasgusoqouumgu;
            oiikwqssmywyqmow:
            wgaeaqwwieyaqsyk:
            goto nkaqkoaswwgwkiea;
            yiqaaumgyoymwmwc:
            guaokcsyycsuegkw:
            goto iucacumsqyoimoqq;
            nkaqkoaswwgwkiea:
            
            if (in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\x68\x65\x63\153\142\x6f\x78", "\162\141\x64\x69\157"])) {
                goto guaokcsyycsuegkw;
            }
            goto oaymugomswyeqgms;
            cyyaeuauwoqoiswy:
            wkuqsumgkuyygois:
            goto cyqmausswuokwsws;
            qmeyqewkyigkqaua:
            if (!($eqgoocgaqwqcimie = ManipulateArray::get($owgumcsyqsamiemg, $aokagokqyuysuksm))) {
                goto wgaeaqwwieyaqsyk;
            }
            goto siwmcmcqweiaiyka;
            cuiocwuoceciyecw:
        }
        goto usqeaouygcuiymaa;
        yaewecqgykieauki:
        if (!$eaoumsseceiowgsk) {
            goto jaaukakisoqesywi;
        }
        goto gimiyacaiomgucuu;
        ysayeagkekiusmeu:
    }
    
    public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg)
    {
        goto yquqkequgwgqogsk;
        yquqkequgwgqogsk:
        if (!(is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg))) {
            goto iiokyisowgqqswqo;
        }
        goto agmeaqeyawqaaqyk;
        igkugseogmcgasoq:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::BEFORE_WIDGET, '');
        goto qmysagiommykwiei;
        qmysagiommykwiei:
        echo $nsmgceoqaqogqmuw;
        goto iqyiaauwmwcqocok;
        agmeaqeyawqaaqyk:
        $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto qcakmuaykqwiqmuu;
        iqyiaauwmwcqocok:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::AFTER_WIDGET, '');
        goto uwuygoyaaeskeoyy;
        qcakmuaykqwiqmuu:
        if (!$nsmgceoqaqogqmuw) {
            goto kouameayeguwoeos;
        }
        goto igkugseogmcgasoq;
        uwuygoyaaeskeoyy:
        kouameayeguwoeos:
        goto wmwyyaqogsqssyac;
        wmwyyaqogsqssyac:
        iiokyisowgqqswqo:
        goto aomwquymwqgcewis;
        aomwquymwqgcewis:
    }
    
    public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string
    {
        goto eqwkisceygagmmwi;
        gsscwykyyykyqaey:
        mcgyqoauweyweoyy:
        goto ygweqayaqqeweiie;
        eqwkisceygagmmwi:
        $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto muwqiukyceakceog;
        ygweqayaqqeweiie:
        return $aqykuigiuwmmcieu;
        goto aecggwmiiueeiwqy;
        euykeqcoiyuwwayu:
        $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, ["\145\143\150\157" => false]);
        goto gsscwykyyykyqaey;
        yuiakguqekmiuamu:
        if (!$this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) {
            goto mcgyqoauweyweoyy;
        }
        goto euykeqcoiyuwwayu;
        yyskgqykggakkicm:
        $qqscaoyqikuyeoaw = ManipulateString::ogimogiceeekegoi(ManipulateArray::get($qookweymeqawmcwo, self::OUTPUT_TEMPLATE, self::ugwmakayykcmcmqa()));
        goto yuiakguqekmiuamu;
        muwqiukyceakceog:
        $aqykuigiuwmmcieu = '';
        goto yyskgqykggakkicm;
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
