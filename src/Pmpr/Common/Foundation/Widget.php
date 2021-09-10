<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    const OUTPUT_TEMPLATE = "\x6f\165\x74\x70\x75\x74\137\164\145\155\x70\154\141\x74\145";
    use SingletonTrait, ComponentTrait, TranslateTrait, ElementTrait, FieldTrait, HookTrait;
    
    public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = [])
    {
        goto ucycmogwkmqoqycw;
        maeqicokuuskkcac:
        $aokagokqyuysuksm = ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa());
        goto cqgimwmuwikgaguk;
        suuaoskwcwmiyyoi:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto gcaogkcqsowqcsyq;
        gcaogkcqsowqcsyq:
        $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\x63\154\141\x73\163\x6e\141\x6d\145" => ManipulateString::igcwuwuymeuomaqo("{$quowyokcwswmuois}\55{$aokagokqyuysuksm}"), self::DESCRIPTION => $mkqqqewsokcswckc]);
        goto uqaecqicccqqumwy;
        sismwqkmciouwouu:
        $this->gyqeoeemeemicgqi();
        goto auuyasucycskyioi;
        ucycmogwkmqoqycw:
        if ($aokagokqyuysuksm) {
            goto gyaowmgukagqyoeq;
        }
        goto maeqicokuuskkcac;
        uqaecqicccqqumwy:
        parent::__construct("{$quowyokcwswmuois}\x5f{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg);
        goto sismwqkmciouwouu;
        cqgimwmuwikgaguk:
        gyaowmgukagqyoeq:
        goto suuaoskwcwmiyyoi;
        auuyasucycskyioi:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\137\x69\x6e\x69\164", [$this, "\171\x65\171\151\x67\x75\x79\145\147\155\155\x79\165\x73\x65\x61"])->qcsmikeggeemccuu("\x77\151\x64\147\x65\x74\x73\x5f\x69\x6e\151\x74", [$this, "\x72\145\147\x69\x73\x74\145\162"])->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\x5f\x66\x6f\x6f\x74\x65\162\55\167\151\x64\x67\x65\x74\x73\x2e\x70\150\x70", [$this, "\147\x67\x73\x6b\143\147\x67\141\141\x65\141\153\147\x61\161\143"]);
    }
    public function register()
    {
        DecoratorWidget::register(self::uqggkiomyiceyooa());
    }
    public function yeyiguyegmmyusea()
    {
        goto iiqiimkaogaewoqw;
        kisggwimqwaugmea:
        $this->saoyckekguwqwgcq();
        goto kogkaecyioiyommy;
        iiqiimkaogaewoqw:
        global $hook_suffix;
        goto cymswwcigouecgiu;
        cymswwcigouecgiu:
        if (!($hook_suffix === "\167\151\144\x67\145\x74\x73\56\160\150\160")) {
            goto aioagqmkwceiceiw;
        }
        goto kisggwimqwaugmea;
        kogkaecyioiyommy:
        aioagqmkwceiceiw:
        goto iuuweasisoieisec;
        iuuweasisoieisec:
    }
    public function saoyckekguwqwgcq()
    {
    }
    public function ggskcggaaeakgaqc()
    {
    }
    
    public function update($new_instance, $old_instance) : array
    {
        goto gqcisycmsgeaaeam;
        kqcumuakekmayyaa:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto ieuwcgqoyyguiqcy;
        gqcisycmsgeaaeam:
        $owgumcsyqsamiemg = $old_instance;
        goto kqcumuakekmayyaa;
        ieuwcgqoyyguiqcy:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $owgumcsyqsamiemg[$aokagokqyuysuksm] = ManipulateArray::get($new_instance, $aokagokqyuysuksm);
            payaciyikimkoquw:
        }
        goto eweyccaegsocwmae;
        eweyccaegsocwmae:
        aweouaymmsogsyka:
        goto ikkociaokagqumuw;
        ikkociaokagqumuw:
        return $owgumcsyqsamiemg;
        goto ksaiemwmwuwmsmcc;
        ksaiemwmwuwmsmcc:
    }
    
    public function form($owgumcsyqsamiemg)
    {
        goto sqwiogiwgequuwgw;
        sqwiogiwgequuwgw:
        $eaoumsseceiowgsk = [];
        goto qioesqeqkcyaeyqe;
        wskoquceqciweouy:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto sokimimsmcaawigw;
            ciicmoysmeykwwuc:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto skiyokscqkmiacmk;
            ucieyaysuqmsgqsy:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto ccuuyekyecacagae;
            }
            goto oemieaoqeygawkmc;
            oawgaciskyykgssu:
            ccuuyekyecacagae:
            goto qcaawmessgwoqwqs;
            qissaamygiiwgqie:
            $aiowsaccomcoikus->yoimakcqmoqokkcu()->qcgocuceocquqcuw("\151\x64", $this->get_field_id($aokagokqyuysuksm));
            goto gogcqoeqmeqgsmqg;
            cwaymoayokokyase:
            $aiowsaccomcoikus = self::okmsgamiiemyesao($aiowsaccomcoikus);
            goto ucieyaysuqmsgqsy;
            keyikmccmwagwcau:
            $aiowsaccomcoikus->mkmssscwmeekwgqo();
            goto kwawqeiqskmoeeyk;
            skiyokscqkmiacmk:
            gyswqkocmuuieswu:
            goto swemyqcgmeqeeiuq;
            swemyqcgmeqeeiuq:
            
            if (in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\x68\145\x63\x6b\142\157\170", "\162\141\x64\x69\157"])) {
                goto suiagiwucmeucmok;
            }
            goto qissaamygiiwgqie;
            kwawqeiqskmoeeyk:
            aceuegkoskqkcyoo:
            goto taqigiaumgaoisca;
            gogcqoeqmeqgsmqg:
            goto aceuegkoskqkcyoo;
            goto ggyiwauwykckueui;
            oemieaoqeygawkmc:
            if (!($eqgoocgaqwqcimie = ManipulateArray::get($owgumcsyqsamiemg, $aokagokqyuysuksm))) {
                goto gyswqkocmuuieswu;
            }
            goto ciicmoysmeykwwuc;
            ggyiwauwykckueui:
            suiagiwucmeucmok:
            goto keyikmccmwagwcau;
            qcaawmessgwoqwqs:
            aeyyygequskegsam:
            goto smyommsakkwciogs;
            sokimimsmcaawigw:
            $aiowsaccomcoikus["\x69\144"] = $this->get_field_name($aokagokqyuysuksm);
            goto cwaymoayokokyase;
            taqigiaumgaoisca:
            $eaoumsseceiowgsk[$aokagokqyuysuksm] = $aiowsaccomcoikus;
            goto oawgaciskyykgssu;
            smyommsakkwciogs:
        }
        goto aiucscoycsegqwao;
        emqguoqcwgcssyok:
        if (!$eaoumsseceiowgsk) {
            goto wkeckeuumgmgyiiu;
        }
        goto wggaoyoawseaggme;
        wggaoyoawseaggme:
        self::iuaucuookgoqiiio($eaoumsseceiowgsk);
        goto goasosegisomuicm;
        aiucscoycsegqwao:
        oykuaoisiumcsmmy:
        goto emqguoqcwgcssyok;
        qioesqeqkcyaeyqe:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto wskoquceqciweouy;
        goasosegisomuicm:
        wkeckeuumgmgyiiu:
        goto muayickmewwuswmy;
        muayickmewwuswmy:
    }
    
    public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg)
    {
        goto iucwiggcmogeikck;
        sucqiqmssemsygei:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::BEFORE_WIDGET, '');
        goto ysuykwkygggkkuqc;
        iqymwucscyyeqcwa:
        echo ManipulateArray::get($ywmkwiwkosakssii, self::AFTER_WIDGET, '');
        goto eiscuqyckkwcscog;
        eiscuqyckkwcscog:
        esmuyeyaqoqcsyse:
        goto kiwskyeqwwokioks;
        ssegekmssqkgsoge:
        if (!$nsmgceoqaqogqmuw) {
            goto esmuyeyaqoqcsyse;
        }
        goto sucqiqmssemsygei;
        kiwskyeqwwokioks:
        yskaagqioyoiomqg:
        goto saikuiquwyasomue;
        iucwiggcmogeikck:
        if (!(is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg))) {
            goto yskaagqioyoiomqg;
        }
        goto cqygwmwkkiqqwquw;
        ysuykwkygggkkuqc:
        echo $nsmgceoqaqogqmuw;
        goto iqymwucscyyeqcwa;
        cqygwmwkkiqqwquw:
        $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto ssegekmssqkgsoge;
        saikuiquwyasomue:
    }
    
    public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string
    {
        goto iwgacmgmqsoyyuiu;
        iwgacmgmqsoyyuiu:
        $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        goto akoqyygqeiiikmco;
        akoqyygqeiiikmco:
        $aqykuigiuwmmcieu = '';
        goto iooomaqggygwwuok;
        cgsgaakaykagyygo:
        if (!$this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) {
            goto wegygoseewgquwcs;
        }
        goto emsmukwgwwusyueg;
        emsmukwgwwusyueg:
        $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, ["\x65\143\150\157" => false]);
        goto omousmkywwwkksay;
        quqiwccwsyawasoe:
        return $aqykuigiuwmmcieu;
        goto ocoiequaimceeeoy;
        omousmkywwwkksay:
        wegygoseewgquwcs:
        goto quqiwccwsyawasoe;
        iooomaqggygwwuok:
        $qqscaoyqikuyeoaw = ManipulateString::ogimogiceeekegoi(ManipulateArray::get($qookweymeqawmcwo, self::OUTPUT_TEMPLATE, self::ugwmakayykcmcmqa()));
        goto cgsgaakaykagyygo;
        ocoiequaimceeeoy:
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
