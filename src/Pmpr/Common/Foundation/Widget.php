<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const OUTPUT_TEMPLATE = "\157\x75\x74\160\165\164\x5f\x74\145\x6d\160\x6c\141\x74\145";
    use SingletonTrait, ComponentTrait, TranslateTrait, ElementTrait, FieldTrait, HookTrait;
    
    public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = [])
    {
        goto suuaoskwcwmiyyoi;
        iiqiimkaogaewoqw:
        $this->gyqeoeemeemicgqi();
        goto cymswwcigouecgiu;
        gcaogkcqsowqcsyq:
        $aokagokqyuysuksm = ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa());
        goto uqaecqicccqqumwy;
        auuyasucycskyioi:
        $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\143\x6c\x61\163\163\156\141\155\x65" => ManipulateString::igcwuwuymeuomaqo("{$quowyokcwswmuois}\55{$aokagokqyuysuksm}"), self::DESCRIPTION => $mkqqqewsokcswckc]);
        goto aioagqmkwceiceiw;
        aioagqmkwceiceiw:
        parent::__construct("{$quowyokcwswmuois}\137{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg);
        goto iiqiimkaogaewoqw;
        suuaoskwcwmiyyoi:
        if ($aokagokqyuysuksm) {
            goto cqgimwmuwikgaguk;
        }
        goto gcaogkcqsowqcsyq;
        uqaecqicccqqumwy:
        cqgimwmuwikgaguk:
        goto sismwqkmciouwouu;
        sismwqkmciouwouu:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto auuyasucycskyioi;
        cymswwcigouecgiu:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\141\144\155\x69\156\137\x69\x6e\151\x74", [$this, "\171\x65\171\x69\147\165\x79\145\x67\155\x6d\x79\x75\163\x65\x61"])->qcsmikeggeemccuu("\167\x69\144\x67\x65\164\x73\137\151\x6e\151\164", [$this, "\162\145\147\151\x73\x74\x65\162"])->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\x66\x6f\x6f\164\x65\162\x2d\x77\x69\x64\147\x65\x74\163\56\160\150\x70", [$this, "\x67\147\163\153\x63\147\x67\x61\141\x65\x61\153\147\141\x71\x63"]);
    }
    public function register()
    {
        DecoratorWidget::register(self::uqggkiomyiceyooa());
    }
    public function yeyiguyegmmyusea()
    {
        goto kogkaecyioiyommy;
        kogkaecyioiyommy:
        global $hook_suffix;
        goto iuuweasisoieisec;
        iuuweasisoieisec:
        if (!($hook_suffix === "\167\151\144\x67\x65\164\x73\x2e\160\x68\x70")) {
            goto kisggwimqwaugmea;
        }
        goto aweouaymmsogsyka;
        aweouaymmsogsyka:
        $this->saoyckekguwqwgcq();
        goto payaciyikimkoquw;
        payaciyikimkoquw:
        kisggwimqwaugmea:
        goto gqcisycmsgeaaeam;
        gqcisycmsgeaaeam:
    }
    public function saoyckekguwqwgcq()
    {
    }
    public function ggskcggaaeakgaqc()
    {
    }
    
    public function update($new_instance, $old_instance) : array
    {
        goto eweyccaegsocwmae;
        ikkociaokagqumuw:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto ksaiemwmwuwmsmcc;
        ksaiemwmwuwmsmcc:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $owgumcsyqsamiemg[$aokagokqyuysuksm] = ManipulateArray::get($new_instance, $aokagokqyuysuksm);
            ieuwcgqoyyguiqcy:
        }
        goto oykuaoisiumcsmmy;
        eweyccaegsocwmae:
        $owgumcsyqsamiemg = $old_instance;
        goto ikkociaokagqumuw;
        oykuaoisiumcsmmy:
        kqcumuakekmayyaa:
        goto aeyyygequskegsam;
        aeyyygequskegsam:
        return $owgumcsyqsamiemg;
        goto gyswqkocmuuieswu;
        gyswqkocmuuieswu:
    }
    
    public function form($owgumcsyqsamiemg)
    {
        goto aiucscoycsegqwao;
        aiucscoycsegqwao:
        $eaoumsseceiowgsk = [];
        goto emqguoqcwgcssyok;
        yskaagqioyoiomqg:
        wskoquceqciweouy:
        goto iucwiggcmogeikck;
        wggaoyoawseaggme:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto oemieaoqeygawkmc;
            keyikmccmwagwcau:
            $aiowsaccomcoikus->yoimakcqmoqokkcu()->qcgocuceocquqcuw("\x69\144", $this->get_field_id($aokagokqyuysuksm));
            goto kwawqeiqskmoeeyk;
            qissaamygiiwgqie:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto gogcqoeqmeqgsmqg;
            skiyokscqkmiacmk:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto ucieyaysuqmsgqsy;
            }
            goto swemyqcgmeqeeiuq;
            kwawqeiqskmoeeyk:
            goto cwaymoayokokyase;
            goto taqigiaumgaoisca;
            ggyiwauwykckueui:
            
            if (in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\150\x65\x63\153\142\x6f\x78", "\x72\x61\144\x69\x6f"])) {
                goto sokimimsmcaawigw;
            }
            goto keyikmccmwagwcau;
            wkeckeuumgmgyiiu:
            ucieyaysuqmsgqsy:
            goto sqwiogiwgequuwgw;
            smyommsakkwciogs:
            $eaoumsseceiowgsk[$aokagokqyuysuksm] = $aiowsaccomcoikus;
            goto wkeckeuumgmgyiiu;
            swemyqcgmeqeeiuq:
            if (!($eqgoocgaqwqcimie = ManipulateArray::get($owgumcsyqsamiemg, $aokagokqyuysuksm))) {
                goto ccuuyekyecacagae;
            }
            goto qissaamygiiwgqie;
            ciicmoysmeykwwuc:
            $aiowsaccomcoikus = self::okmsgamiiemyesao($aiowsaccomcoikus);
            goto skiyokscqkmiacmk;
            qcaawmessgwoqwqs:
            cwaymoayokokyase:
            goto smyommsakkwciogs;
            taqigiaumgaoisca:
            sokimimsmcaawigw:
            goto oawgaciskyykgssu;
            oawgaciskyykgssu:
            $aiowsaccomcoikus->mkmssscwmeekwgqo();
            goto qcaawmessgwoqwqs;
            oemieaoqeygawkmc:
            $aiowsaccomcoikus["\x69\144"] = $this->get_field_name($aokagokqyuysuksm);
            goto ciicmoysmeykwwuc;
            gogcqoeqmeqgsmqg:
            ccuuyekyecacagae:
            goto ggyiwauwykckueui;
            sqwiogiwgequuwgw:
            aceuegkoskqkcyoo:
            goto qioesqeqkcyaeyqe;
            qioesqeqkcyaeyqe:
        }
        goto goasosegisomuicm;
        goasosegisomuicm:
        suiagiwucmeucmok:
        goto muayickmewwuswmy;
        esmuyeyaqoqcsyse:
        self::iuaucuookgoqiiio($eaoumsseceiowgsk);
        goto yskaagqioyoiomqg;
        emqguoqcwgcssyok:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto wggaoyoawseaggme;
        muayickmewwuswmy:
        if (!$eaoumsseceiowgsk) {
            goto wskoquceqciweouy;
        }
        goto esmuyeyaqoqcsyse;
        iucwiggcmogeikck:
    }
    
    public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg)
    {
        goto sucqiqmssemsygei;
        eiscuqyckkwcscog:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::BEFORE_WIDGET, '');
        goto kiwskyeqwwokioks;
        wegygoseewgquwcs:
        cqygwmwkkiqqwquw:
        goto iwgacmgmqsoyyuiu;
        saikuiquwyasomue:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::AFTER_WIDGET, '');
        goto wegygoseewgquwcs;
        sucqiqmssemsygei:
        if (!(is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg))) {
            goto ssegekmssqkgsoge;
        }
        goto ysuykwkygggkkuqc;
        kiwskyeqwwokioks:
        echo $nsmgceoqaqogqmuw;
        goto saikuiquwyasomue;
        iqymwucscyyeqcwa:
        if (!$nsmgceoqaqogqmuw) {
            goto cqygwmwkkiqqwquw;
        }
        goto eiscuqyckkwcscog;
        ysuykwkygggkkuqc:
        $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto iqymwucscyyeqcwa;
        iwgacmgmqsoyyuiu:
        ssegekmssqkgsoge:
        goto akoqyygqeiiikmco;
        akoqyygqeiiikmco:
    }
    
    public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string
    {
        goto cgsgaakaykagyygo;
        emsmukwgwwusyueg:
        $aqykuigiuwmmcieu = '';
        goto omousmkywwwkksay;
        omousmkywwwkksay:
        $qqscaoyqikuyeoaw = ManipulateString::ogimogiceeekegoi(ManipulateArray::get($qookweymeqawmcwo, self::OUTPUT_TEMPLATE, self::ugwmakayykcmcmqa()));
        goto quqiwccwsyawasoe;
        quqiwccwsyawasoe:
        if (!$this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) {
            goto iooomaqggygwwuok;
        }
        goto ocoiequaimceeeoy;
        qawmkgkwgqogkagw:
        iooomaqggygwwuok:
        goto sweugqqowwoamomc;
        cgsgaakaykagyygo:
        $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto emsmukwgwwusyueg;
        ocoiequaimceeeoy:
        $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, ["\x65\143\x68\x6f" => false]);
        goto qawmkgkwgqogkagw;
        sweugqqowwoamomc:
        return $aqykuigiuwmmcieu;
        goto escickciciscoaec;
        escickciciscoaec:
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
