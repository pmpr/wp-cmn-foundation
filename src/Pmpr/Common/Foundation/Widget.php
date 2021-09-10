<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const OUTPUT_TEMPLATE = "\157\165\164\160\x75\x74\137\x74\x65\x6d\160\154\x61\x74\145";
    use SingletonTrait, ComponentTrait, TranslateTrait, ElementTrait, FieldTrait, HookTrait;
    
    public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = [])
    {
        goto suuaoskwcwmiyyoi;
        suuaoskwcwmiyyoi:
        if ($aokagokqyuysuksm) {
            goto cqgimwmuwikgaguk;
        }
        goto gcaogkcqsowqcsyq;
        uqaecqicccqqumwy:
        cqgimwmuwikgaguk:
        goto sismwqkmciouwouu;
        iiqiimkaogaewoqw:
        $this->gyqeoeemeemicgqi();
        goto cymswwcigouecgiu;
        aioagqmkwceiceiw:
        parent::__construct("{$quowyokcwswmuois}\x5f{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg);
        goto iiqiimkaogaewoqw;
        auuyasucycskyioi:
        $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\x63\x6c\141\163\163\x6e\141\155\x65" => ManipulateString::igcwuwuymeuomaqo("{$quowyokcwswmuois}\x2d{$aokagokqyuysuksm}"), self::DESCRIPTION => $mkqqqewsokcswckc]);
        goto aioagqmkwceiceiw;
        gcaogkcqsowqcsyq:
        $aokagokqyuysuksm = ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa());
        goto uqaecqicccqqumwy;
        sismwqkmciouwouu:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto auuyasucycskyioi;
        cymswwcigouecgiu:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\144\x6d\151\156\x5f\x69\x6e\x69\x74", [$this, "\171\x65\171\151\x67\x75\x79\x65\147\155\x6d\171\x75\163\145\141"])->qcsmikeggeemccuu("\167\x69\144\x67\x65\164\163\137\151\x6e\x69\x74", [$this, "\162\145\147\x69\163\164\x65\x72"])->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\146\x6f\157\164\145\162\x2d\x77\151\x64\x67\145\164\x73\56\x70\150\160", [$this, "\147\147\x73\153\x63\x67\x67\x61\141\145\141\x6b\x67\x61\161\143"]);
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
        aweouaymmsogsyka:
        $this->saoyckekguwqwgcq();
        goto payaciyikimkoquw;
        iuuweasisoieisec:
        if (!($hook_suffix === "\x77\x69\144\x67\x65\x74\163\x2e\160\150\x70")) {
            goto kisggwimqwaugmea;
        }
        goto aweouaymmsogsyka;
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
        oykuaoisiumcsmmy:
        kqcumuakekmayyaa:
        goto aeyyygequskegsam;
        eweyccaegsocwmae:
        $owgumcsyqsamiemg = $old_instance;
        goto ikkociaokagqumuw;
        aeyyygequskegsam:
        return $owgumcsyqsamiemg;
        goto gyswqkocmuuieswu;
        gyswqkocmuuieswu:
    }
    
    public function form($owgumcsyqsamiemg)
    {
        goto aiucscoycsegqwao;
        goasosegisomuicm:
        suiagiwucmeucmok:
        goto muayickmewwuswmy;
        wggaoyoawseaggme:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto oemieaoqeygawkmc;
            swemyqcgmeqeeiuq:
            if (!($eqgoocgaqwqcimie = ManipulateArray::get($owgumcsyqsamiemg, $aokagokqyuysuksm))) {
                goto ccuuyekyecacagae;
            }
            goto qissaamygiiwgqie;
            wkeckeuumgmgyiiu:
            ucieyaysuqmsgqsy:
            goto sqwiogiwgequuwgw;
            skiyokscqkmiacmk:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto ucieyaysuqmsgqsy;
            }
            goto swemyqcgmeqeeiuq;
            taqigiaumgaoisca:
            sokimimsmcaawigw:
            goto oawgaciskyykgssu;
            gogcqoeqmeqgsmqg:
            ccuuyekyecacagae:
            goto ggyiwauwykckueui;
            qcaawmessgwoqwqs:
            cwaymoayokokyase:
            goto smyommsakkwciogs;
            ggyiwauwykckueui:
            
            if (in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\x68\x65\143\153\142\157\170", "\162\141\x64\x69\x6f"])) {
                goto sokimimsmcaawigw;
            }
            goto keyikmccmwagwcau;
            qissaamygiiwgqie:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto gogcqoeqmeqgsmqg;
            ciicmoysmeykwwuc:
            $aiowsaccomcoikus = self::okmsgamiiemyesao($aiowsaccomcoikus);
            goto skiyokscqkmiacmk;
            sqwiogiwgequuwgw:
            aceuegkoskqkcyoo:
            goto qioesqeqkcyaeyqe;
            keyikmccmwagwcau:
            $aiowsaccomcoikus->yoimakcqmoqokkcu()->qcgocuceocquqcuw("\151\144", $this->get_field_id($aokagokqyuysuksm));
            goto kwawqeiqskmoeeyk;
            oawgaciskyykgssu:
            $aiowsaccomcoikus->mkmssscwmeekwgqo();
            goto qcaawmessgwoqwqs;
            oemieaoqeygawkmc:
            $aiowsaccomcoikus["\151\144"] = $this->get_field_name($aokagokqyuysuksm);
            goto ciicmoysmeykwwuc;
            smyommsakkwciogs:
            $eaoumsseceiowgsk[$aokagokqyuysuksm] = $aiowsaccomcoikus;
            goto wkeckeuumgmgyiiu;
            kwawqeiqskmoeeyk:
            goto cwaymoayokokyase;
            goto taqigiaumgaoisca;
            qioesqeqkcyaeyqe:
        }
        goto goasosegisomuicm;
        muayickmewwuswmy:
        if (!$eaoumsseceiowgsk) {
            goto wskoquceqciweouy;
        }
        goto esmuyeyaqoqcsyse;
        emqguoqcwgcssyok:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto wggaoyoawseaggme;
        aiucscoycsegqwao:
        $eaoumsseceiowgsk = [];
        goto emqguoqcwgcssyok;
        yskaagqioyoiomqg:
        wskoquceqciweouy:
        goto iucwiggcmogeikck;
        esmuyeyaqoqcsyse:
        self::iuaucuookgoqiiio($eaoumsseceiowgsk);
        goto yskaagqioyoiomqg;
        iucwiggcmogeikck:
    }
    
    public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg)
    {
        goto sucqiqmssemsygei;
        iwgacmgmqsoyyuiu:
        ssegekmssqkgsoge:
        goto akoqyygqeiiikmco;
        sucqiqmssemsygei:
        if (!(is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg))) {
            goto ssegekmssqkgsoge;
        }
        goto ysuykwkygggkkuqc;
        kiwskyeqwwokioks:
        echo $nsmgceoqaqogqmuw;
        goto saikuiquwyasomue;
        saikuiquwyasomue:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::AFTER_WIDGET, '');
        goto wegygoseewgquwcs;
        ysuykwkygggkkuqc:
        $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto iqymwucscyyeqcwa;
        eiscuqyckkwcscog:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::BEFORE_WIDGET, '');
        goto kiwskyeqwwokioks;
        wegygoseewgquwcs:
        cqygwmwkkiqqwquw:
        goto iwgacmgmqsoyyuiu;
        iqymwucscyyeqcwa:
        if (!$nsmgceoqaqogqmuw) {
            goto cqygwmwkkiqqwquw;
        }
        goto eiscuqyckkwcscog;
        akoqyygqeiiikmco:
    }
    
    public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string
    {
        goto cgsgaakaykagyygo;
        quqiwccwsyawasoe:
        if (!$this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) {
            goto iooomaqggygwwuok;
        }
        goto ocoiequaimceeeoy;
        emsmukwgwwusyueg:
        $aqykuigiuwmmcieu = '';
        goto omousmkywwwkksay;
        omousmkywwwkksay:
        $qqscaoyqikuyeoaw = ManipulateString::ogimogiceeekegoi(ManipulateArray::get($qookweymeqawmcwo, self::OUTPUT_TEMPLATE, self::ugwmakayykcmcmqa()));
        goto quqiwccwsyawasoe;
        cgsgaakaykagyygo:
        $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto emsmukwgwwusyueg;
        ocoiequaimceeeoy:
        $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, ["\x65\143\150\x6f" => false]);
        goto qawmkgkwgqogkagw;
        sweugqqowwoamomc:
        return $aqykuigiuwmmcieu;
        goto escickciciscoaec;
        qawmkgkwgqogkagw:
        iooomaqggygwwuok:
        goto sweugqqowwoamomc;
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
