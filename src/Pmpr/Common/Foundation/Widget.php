<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    const OUTPUT_TEMPLATE = "\157\x75\x74\160\x75\164\137\164\145\x6d\160\x6c\x61\x74\x65";
    use SingletonTrait, ComponentTrait, TranslateTrait, ElementTrait, FieldTrait, HookTrait;
    
    public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = [])
    {
        goto iqocscomgkciyiwe;
        gosgauymqceykgek:
        auegygmkkiqsgwsc:
        goto eyqggcokeuakaskk;
        eyqggcokeuakaskk:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto uqskcceawegkiakk;
        iqocscomgkciyiwe:
        if ($aokagokqyuysuksm) {
            goto auegygmkkiqsgwsc;
        }
        goto yqqyiokywmggkmke;
        yqqyiokywmggkmke:
        $aokagokqyuysuksm = ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa());
        goto gosgauymqceykgek;
        uqskcceawegkiakk:
        $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\143\154\x61\163\163\156\x61\155\x65" => ManipulateString::igcwuwuymeuomaqo("{$quowyokcwswmuois}\55{$aokagokqyuysuksm}"), self::DESCRIPTION => $mkqqqewsokcswckc]);
        goto uysygigskiiwsckq;
        uysygigskiiwsckq:
        parent::__construct("{$quowyokcwswmuois}\x5f{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg);
        goto woomeusquuuqekig;
        woomeusquuuqekig:
        $this->gyqeoeemeemicgqi();
        goto mcwswowewmqqckqw;
        mcwswowewmqqckqw:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\x64\155\x69\156\x5f\x69\156\151\164", [$this, "\171\x65\171\x69\147\x75\171\145\147\155\155\x79\165\x73\x65\141"])->qcsmikeggeemccuu("\x77\x69\x64\147\x65\x74\163\x5f\151\x6e\x69\x74", [$this, "\x72\145\147\x69\163\x74\x65\162"])->qcsmikeggeemccuu("\141\x64\x6d\151\156\x5f\146\157\x6f\x74\145\162\55\167\151\x64\x67\145\x74\x73\x2e\160\x68\x70", [$this, "\x67\x67\163\153\143\147\x67\141\141\x65\x61\153\147\x61\x71\143"]);
    }
    public function register()
    {
        DecoratorWidget::register(self::uqggkiomyiceyooa());
    }
    public function yeyiguyegmmyusea()
    {
        goto qawueqwiyeiyecce;
        msouaocmygwukeos:
        $this->saoyckekguwqwgcq();
        goto euyiicoiumuescuk;
        qawueqwiyeiyecce:
        global $hook_suffix;
        goto oumqmgawoewueoio;
        euyiicoiumuescuk:
        uggeicmsysmmaqqc:
        goto gyauoqayaysycwwa;
        oumqmgawoewueoio:
        if (!($hook_suffix === "\167\151\144\147\145\x74\x73\56\x70\150\160")) {
            goto uggeicmsysmmaqqc;
        }
        goto msouaocmygwukeos;
        gyauoqayaysycwwa:
    }
    public function saoyckekguwqwgcq()
    {
    }
    public function ggskcggaaeakgaqc()
    {
    }
    
    public function update($new_instance, $old_instance) : array
    {
        goto ugkwawscyiogikmg;
        gyeoaqyauigkuyuw:
        return $owgumcsyqsamiemg;
        goto ygyasaouaeomcook;
        ugkwawscyiogikmg:
        $owgumcsyqsamiemg = $old_instance;
        goto ouggemmeccgmecei;
        sagesqcycossmmcy:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $owgumcsyqsamiemg[$aokagokqyuysuksm] = ManipulateArray::get($new_instance, $aokagokqyuysuksm);
            agokgacocekqqaaw:
        }
        goto kwkumyugkkscqsqa;
        ouggemmeccgmecei:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto sagesqcycossmmcy;
        kwkumyugkkscqsqa:
        kcgykyaakyymmgca:
        goto gyeoaqyauigkuyuw;
        ygyasaouaeomcook:
    }
    
    public function form($owgumcsyqsamiemg)
    {
        goto omskesmswmwcyqog;
        uiwwogwqcoyqgqws:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto lemqkucuseomiegm;
        kqoyicwkeiqacumi:
        qoywwuqkqwgkgomu:
        goto euayuoscsqgcwoco;
        kysegkcsysgsocum:
        kywsoesguwyeukuk:
        goto uukawameoimyycmi;
        omskesmswmwcyqog:
        $eaoumsseceiowgsk = [];
        goto uiwwogwqcoyqgqws;
        lemqkucuseomiegm:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto oosmoaqgqegqmecm;
            kgeouqmockmeqamy:
            $aiowsaccomcoikus->mkmssscwmeekwgqo();
            goto muymgykqieiyymqq;
            yuqgckkmggeecmcu:
            ywqqcwwikuaqgswy:
            goto kgeouqmockmeqamy;
            oosmoaqgqegqmecm:
            $aiowsaccomcoikus["\151\144"] = $this->get_field_name($aokagokqyuysuksm);
            goto eksiecgiomucusou;
            eksiecgiomucusou:
            $aiowsaccomcoikus = self::okmsgamiiemyesao($aiowsaccomcoikus);
            goto gweewkicumqyakeo;
            mggwwmagesiaegsg:
            gmiqeasocceqcmyy:
            goto aciwauiwiuckcckm;
            qsseaomwyuequyuc:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto eeawuswkssoumcqq;
            gweewkicumqyakeo:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto gmiqeasocceqcmyy;
            }
            goto ceooomymweuccyke;
            muymgykqieiyymqq:
            qwckkegewuioawok:
            goto caiggmogoqgosgka;
            aciwauiwiuckcckm:
            yoyuemoqqmcamysy:
            goto mukmqcgqiyskioqg;
            wgagciiiyokkccaw:
            $aiowsaccomcoikus->yoimakcqmoqokkcu()->qcgocuceocquqcuw("\x69\144", $this->get_field_id($aokagokqyuysuksm));
            goto swusasqsywoymauc;
            caiggmogoqgosgka:
            $eaoumsseceiowgsk[$aokagokqyuysuksm] = $aiowsaccomcoikus;
            goto mggwwmagesiaegsg;
            qwycyuqsagqcyeau:
            
            if (in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\x68\x65\143\x6b\142\157\x78", "\162\141\144\x69\157"])) {
                goto ywqqcwwikuaqgswy;
            }
            goto wgagciiiyokkccaw;
            eeawuswkssoumcqq:
            iaaakumgaeogkyau:
            goto qwycyuqsagqcyeau;
            swusasqsywoymauc:
            goto qwckkegewuioawok;
            goto yuqgckkmggeecmcu;
            ceooomymweuccyke:
            if (!($eqgoocgaqwqcimie = ManipulateArray::get($owgumcsyqsamiemg, $aokagokqyuysuksm))) {
                goto iaaakumgaeogkyau;
            }
            goto qsseaomwyuequyuc;
            mukmqcgqiyskioqg:
        }
        goto kysegkcsysgsocum;
        uukawameoimyycmi:
        if (!$eaoumsseceiowgsk) {
            goto qoywwuqkqwgkgomu;
        }
        goto mwuwcsuwecyqmyme;
        mwuwcsuwecyqmyme:
        self::iuaucuookgoqiiio($eaoumsseceiowgsk);
        goto kqoyicwkeiqacumi;
        euayuoscsqgcwoco:
    }
    
    public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg)
    {
        goto mssgmiumamgawcik;
        ausccuiqiucusomk:
        $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto eccqqigoouugsysq;
        mksiaogycqumieig:
        uommomyecokquyes:
        goto sycmggisamuqcmqm;
        qooeamikmycgiyse:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::BEFORE_WIDGET, '');
        goto cggoissgmskoycqy;
        mssgmiumamgawcik:
        if (!(is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg))) {
            goto uuocckquiogqceuq;
        }
        goto ausccuiqiucusomk;
        sycmggisamuqcmqm:
        uuocckquiogqceuq:
        goto kqkwquycsmecsyoa;
        eccqqigoouugsysq:
        if (!$nsmgceoqaqogqmuw) {
            goto uommomyecokquyes;
        }
        goto qooeamikmycgiyse;
        waasqesguuugkyki:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::AFTER_WIDGET, '');
        goto mksiaogycqumieig;
        cggoissgmskoycqy:
        echo $nsmgceoqaqogqmuw;
        goto waasqesguuugkyki;
        kqkwquycsmecsyoa:
    }
    
    public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string
    {
        goto ecgwiyooacwymoum;
        maeqicokuuskkcac:
        eyweqiugyoewuqks:
        goto cqgimwmuwikgaguk;
        wqgwguwaoomgaiik:
        $qqscaoyqikuyeoaw = ManipulateString::ogimogiceeekegoi(ManipulateArray::get($qookweymeqawmcwo, self::OUTPUT_TEMPLATE, self::ugwmakayykcmcmqa()));
        goto gyaowmgukagqyoeq;
        ucycmogwkmqoqycw:
        $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, ["\x65\x63\x68\x6f" => false]);
        goto maeqicokuuskkcac;
        oigccucsmoiegsic:
        $aqykuigiuwmmcieu = '';
        goto wqgwguwaoomgaiik;
        gyaowmgukagqyoeq:
        if (!$this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) {
            goto eyweqiugyoewuqks;
        }
        goto ucycmogwkmqoqycw;
        cqgimwmuwikgaguk:
        return $aqykuigiuwmmcieu;
        goto suuaoskwcwmiyyoi;
        ecgwiyooacwymoum:
        $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto oigccucsmoiegsic;
        suuaoskwcwmiyyoi:
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
