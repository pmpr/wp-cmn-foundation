<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const OUTPUT_TEMPLATE = "\157\x75\x74\160\x75\164\137\x74\145\x6d\x70\x6c\141\164\x65";
    use SingletonTrait, ComponentTrait, TranslateTrait, ElementTrait, FieldTrait, HookTrait;
    
    public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = [])
    {
        goto cgsgaakaykagyygo;
        omousmkywwwkksay:
        iooomaqggygwwuok:
        goto quqiwccwsyawasoe;
        cgsgaakaykagyygo:
        if ($aokagokqyuysuksm) {
            goto iooomaqggygwwuok;
        }
        goto emsmukwgwwusyueg;
        emsmukwgwwusyueg:
        $aokagokqyuysuksm = ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa());
        goto omousmkywwwkksay;
        qawmkgkwgqogkagw:
        parent::__construct("{$quowyokcwswmuois}\x5f{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg);
        goto sweugqqowwoamomc;
        sweugqqowwoamomc:
        $this->gyqeoeemeemicgqi();
        goto escickciciscoaec;
        ocoiequaimceeeoy:
        $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\143\154\x61\163\x73\156\x61\155\145" => ManipulateString::igcwuwuymeuomaqo("{$quowyokcwswmuois}\55{$aokagokqyuysuksm}"), self::DESCRIPTION => $mkqqqewsokcswckc]);
        goto qawmkgkwgqogkagw;
        quqiwccwsyawasoe:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto ocoiequaimceeeoy;
        escickciciscoaec:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\144\155\x69\x6e\x5f\151\156\x69\x74", [$this, "\x79\145\171\x69\147\165\171\145\147\155\x6d\171\165\x73\145\x61"])->qcsmikeggeemccuu("\x77\151\x64\147\145\164\163\x5f\151\x6e\151\164", [$this, "\162\x65\147\151\163\x74\x65\162"])->qcsmikeggeemccuu("\141\x64\155\x69\x6e\x5f\x66\x6f\x6f\164\x65\162\55\x77\x69\x64\x67\145\x74\163\56\160\150\160", [$this, "\147\147\163\x6b\143\147\147\x61\x61\x65\141\x6b\147\141\161\143"]);
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
        gaaewsyiiysgawgu:
        if (!($hook_suffix === "\x77\151\144\147\145\x74\x73\x2e\x70\150\160")) {
            goto isyiocycgikqamoi;
        }
        goto moqawwqumcaawiac;
        ugsyqugoqmsmwmwc:
        global $hook_suffix;
        goto gaaewsyiiysgawgu;
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
        igkqkkwwogciekqk:
        return $owgumcsyqsamiemg;
        goto qmqooggmccwuiumi;
        qecqaigyggikwmeo:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $owgumcsyqsamiemg[$aokagokqyuysuksm] = ManipulateArray::get($new_instance, $aokagokqyuysuksm);
            uwwiiqiikuusuocc:
        }
        goto mikouwykeswmseqa;
        yqowgmmyogcameuo:
        $owgumcsyqsamiemg = $old_instance;
        goto wsyeeuisawusawwu;
        wsyeeuisawusawwu:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qecqaigyggikwmeo;
        mikouwykeswmseqa:
        ckcwoiecmaaqauqu:
        goto igkqkkwwogciekqk;
        qmqooggmccwuiumi:
    }
    
    public function form($owgumcsyqsamiemg)
    {
        goto cecukmgemigakuum;
        cecukmgemigakuum:
        $eaoumsseceiowgsk = [];
        goto uywocaygaeysmcsc;
        gimiyacaiomgucuu:
        self::iuaucuookgoqiiio($eaoumsseceiowgsk);
        goto cueiywyuommyocey;
        cueiywyuommyocey:
        jaaukakisoqesywi:
        goto ysayeagkekiusmeu;
        cmqogyywaqmmmwss:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto wicugycksmwmokkm;
            euuqicgakkyoayyo:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wkuqsumgkuyygois;
            }
            goto qmeyqewkyigkqaua;
            nkaqkoaswwgwkiea:
            
            if (in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\150\x65\143\153\x62\157\170", "\162\x61\144\151\157"])) {
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
            siwmcmcqweiaiyka:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto oiikwqssmywyqmow;
            uaomcsauseuwaseg:
            $aiowsaccomcoikus = self::okmsgamiiemyesao($aiowsaccomcoikus);
            goto euuqicgakkyoayyo;
            wicugycksmwmokkm:
            $aiowsaccomcoikus["\x69\144"] = $this->get_field_name($aokagokqyuysuksm);
            goto uaomcsauseuwaseg;
            oaymugomswyeqgms:
            $aiowsaccomcoikus->yoimakcqmoqokkcu()->qcgocuceocquqcuw("\151\x64", $this->get_field_id($aokagokqyuysuksm));
            goto kayikiwuwkgyiowu;
            oiikwqssmywyqmow:
            wgaeaqwwieyaqsyk:
            goto nkaqkoaswwgwkiea;
            cyqmausswuokwsws:
            ocaayuycwauaaggq:
            goto cuiocwuoceciyecw;
            iucacumsqyoimoqq:
            $aiowsaccomcoikus->mkmssscwmeekwgqo();
            goto scmasgusoqouumgu;
            egsgkaascayskqmu:
            $eaoumsseceiowgsk[$aokagokqyuysuksm] = $aiowsaccomcoikus;
            goto cyyaeuauwoqoiswy;
            yiqaaumgyoymwmwc:
            guaokcsyycsuegkw:
            goto iucacumsqyoimoqq;
            scmasgusoqouumgu:
            qwgsqwmqmigwwwug:
            goto egsgkaascayskqmu;
            kayikiwuwkgyiowu:
            goto qwgsqwmqmigwwwug;
            goto yiqaaumgyoymwmwc;
            cuiocwuoceciyecw:
        }
        goto usqeaouygcuiymaa;
        usqeaouygcuiymaa:
        ykkqammyacwiugwo:
        goto yaewecqgykieauki;
        yaewecqgykieauki:
        if (!$eaoumsseceiowgsk) {
            goto jaaukakisoqesywi;
        }
        goto gimiyacaiomgucuu;
        uywocaygaeysmcsc:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto cmqogyywaqmmmwss;
        ysayeagkekiusmeu:
    }
    
    public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg)
    {
        goto yquqkequgwgqogsk;
        igkugseogmcgasoq:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::BEFORE_WIDGET, '');
        goto qmysagiommykwiei;
        qmysagiommykwiei:
        echo $nsmgceoqaqogqmuw;
        goto iqyiaauwmwcqocok;
        uwuygoyaaeskeoyy:
        kouameayeguwoeos:
        goto wmwyyaqogsqssyac;
        wmwyyaqogsqssyac:
        iiokyisowgqqswqo:
        goto aomwquymwqgcewis;
        iqyiaauwmwcqocok:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::AFTER_WIDGET, '');
        goto uwuygoyaaeskeoyy;
        yquqkequgwgqogsk:
        if (!(is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg))) {
            goto iiokyisowgqqswqo;
        }
        goto agmeaqeyawqaaqyk;
        agmeaqeyawqaaqyk:
        $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto qcakmuaykqwiqmuu;
        qcakmuaykqwiqmuu:
        if (!$nsmgceoqaqogqmuw) {
            goto kouameayeguwoeos;
        }
        goto igkugseogmcgasoq;
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
        yyskgqykggakkicm:
        $qqscaoyqikuyeoaw = ManipulateString::ogimogiceeekegoi(ManipulateArray::get($qookweymeqawmcwo, self::OUTPUT_TEMPLATE, self::ugwmakayykcmcmqa()));
        goto yuiakguqekmiuamu;
        euykeqcoiyuwwayu:
        $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, ["\x65\143\x68\157" => false]);
        goto gsscwykyyykyqaey;
        yuiakguqekmiuamu:
        if (!$this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) {
            goto mcgyqoauweyweoyy;
        }
        goto euykeqcoiyuwwayu;
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
