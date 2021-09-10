<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\DOMCrawler;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Role;
use WP_User;

class ManipulateUser extends Manipulate
{
    
    public static function meymqemgekqiawec()
    {
        goto giaaekwoqcgomyyq;
        ecwscogqsioyocqw:
        if (!isset($_SERVER)) {
            goto ameyqkmyguiowiaw;
        }
        goto gmwuamgmokqasssm;
        umqegggcqogkcokk:
        foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) {
            goto yoeckuuauawmacwk;
            yoeckuuauawmacwk:
            if (!(isset($_SERVER[$gygawogosumsgmme]) && $_SERVER[$gygawogosumsgmme])) {
                goto ammegqeakguswkea;
            }
            goto kwuikacsegmsueag;
            ywskwwaucamaawyc:
            goto aaekwqgakyuqksiw;
            goto sywyyiucyqmksgsy;
            qysooiuommggiyii:
            goto aaekwqgakyuqksiw;
            goto okkwocoyssmuuyoo;
            cgigkogmiayysgsw:
            $kucumcusyyckayas = $uomewyckeuqoqocu[0];
            goto ywskwwaucamaawyc;
            miscmykioiowuqye:
            goto ckuscqqcwmwuqwwq;
            goto uugmiwgkyoyyuoou;
            aykwyewykoaqwsue:
            ammegqeakguswkea:
            goto keaisgcucioggscy;
            yaayyckygqkgqyii:
            if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP))) {
                goto wyikyuggmkgksggw;
            }
            goto cgigkogmiayysgsw;
            oeosyywsmwoqmgoe:
            $uomewyckeuqoqocu = explode("\x2c", $_SERVER[$gygawogosumsgmme]);
            goto yaayyckygqkgqyii;
            sywyyiucyqmksgsy:
            wyikyuggmkgksggw:
            goto miscmykioiowuqye;
            keaisgcucioggscy:
            mmouukiiyowuakqq:
            goto ksegauiqccusmigy;
            kwuikacsegmsueag:
            if (filter_var($_SERVER[$gygawogosumsgmme], FILTER_VALIDATE_IP)) {
                goto mqcssiqeiqyksigg;
            }
            goto oeosyywsmwoqmgoe;
            okkwocoyssmuuyoo:
            ckuscqqcwmwuqwwq:
            goto aykwyewykoaqwsue;
            aggmmceiguesqumu:
            $kucumcusyyckayas = $_SERVER[$gygawogosumsgmme];
            goto qysooiuommggiyii;
            uugmiwgkyoyyuoou:
            mqcssiqeiqyksigg:
            goto aggmmceiguesqumu;
            ksegauiqccusmigy:
        }
        goto yuewiamsucauaego;
        yuewiamsucauaego:
        aaekwqgakyuqksiw:
        goto esewwwsmwogmaaeu;
        esewwwsmwogmaaeu:
        ameyqkmyguiowiaw:
        goto wagmmkgiegoisgqu;
        gmwuamgmokqasssm:
        $kkeqqkkkqwkocsyu = ["\x48\x54\x54\120\137\130\x5f\122\x45\101\x4c\x5f\111\x50", "\x48\x54\124\120\137\103\x4c\111\x45\x4e\x54\x5f\x49\x50", "\110\124\124\x50\x5f\x58\x5f\106\117\x52\x57\x41\122\x44\105\x44\137\106\117\x52", "\122\105\x4d\x4f\124\x45\x5f\x41\104\104\x52"];
        goto umqegggcqogkcokk;
        wagmmkgiegoisgqu:
        return $kucumcusyyckayas;
        goto iagaauogccisiowc;
        giaaekwoqcgomyyq:
        $kucumcusyyckayas = '';
        goto ecwscogqsioyocqw;
        iagaauogccisiowc:
    }
    
    public static function eoyueosccuoeqkee() : bool
    {
        global $pagenow;
        return in_array($pagenow, ["\x75\163\x65\162\55\x65\x64\151\x74\x2e\x70\150\160", "\x75\163\145\162\55\156\x65\x77\x2e\x70\x68\160", "\160\162\157\146\x69\x6c\145\x2e\x70\x68\x70"]);
    }
    
    public static function ikcimmaqiwekowoi($ymqmyyeuycgmigyo) : ?WP_Role
    {
        return get_role($ymqmyyeuycgmigyo);
    }
    
    public static function ekqiayaoseqcygmo($mkucggyaiaukqoce) : ?string
    {
        return DecoratorUser::ekqiayaoseqcygmo(self::mwikyscisascoeea($mkucggyaiaukqoce));
    }
    
    public static function yyykkcyiksewsoqy($mkucggyaiaukqoce) : ?string
    {
        return DecoratorUser::yyykkcyiksewsoqy(self::mwikyscisascoeea($mkucggyaiaukqoce));
    }
    
    public static function kuswmimkgmyuymiu(?string $miowmmgaiagcuyoo = null)
    {
        goto mkkqoygeswcakyas;
        kcuqqgokaaiegiea:
        sysikmimsgsyaocu:
        goto csoeyawuamayqkuy;
        mkkqoygeswcakyas:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ucscoaceqqamsqmq;
        }
        goto ugaoiwqmgeqoeuwm;
        ugaoiwqmgeqoeuwm:
        if ($miowmmgaiagcuyoo) {
            goto cmauoaqiueakioag;
        }
        goto weeiywiskwumocki;
        oumswckciewwywmk:
        $miowmmgaiagcuyoo = self::mwikyscisascoeea();
        goto kcuqqgokaaiegiea;
        yayammcgqwyussac:
        cmauoaqiueakioag:
        goto mmuggiqkqocomsak;
        csoeyawuamayqkuy:
        return $miowmmgaiagcuyoo;
        goto miecmocqwkqmmqem;
        esieukmsekemaokw:
        ucscoaceqqamsqmq:
        goto oumswckciewwywmk;
        weeiywiskwumocki:
        $miowmmgaiagcuyoo = ManipulateArray::get($_COOKIE, self::GUEST_ID_COOKIE);
        goto yayammcgqwyussac;
        mmuggiqkqocomsak:
        goto sysikmimsgsyaocu;
        goto esieukmsekemaokw;
        miecmocqwkqmmqem:
    }
    
    public static function mmgsuuoossqmukqg($uagwmwoawiwkycao, $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x72\157\x6c\x65" => $uagwmwoawiwkycao]);
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function get($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto wcauaaiwuuowegqw;
        uakswkgiqciauaku:
        return $mkucggyaiaukqoce;
        goto eowsciskwgisqqme;
        ymcyiqsgescgekyq:
        goto yisekcgcwaimsycw;
        goto mmoeyiqwcmkiyoee;
        wcauaaiwuuowegqw:
        if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) {
            goto ygqoqswyksigwkkk;
        }
        goto cmiwskikykcioyiu;
        esicggokqqaacouy:
        $mkucggyaiaukqoce = get_userdata($mkucggyaiaukqoce);
        goto qoyscguymwggause;
        cmiwskikykcioyiu:
        if (!(!$mkucggyaiaukqoce && !$cwwowqyuwccuykom)) {
            goto icesswgseoousmqy;
        }
        goto uumusuoamyymaoik;
        mmoeyiqwcmkiyoee:
        ygqoqswyksigwkkk:
        goto esicggokqqaacouy;
        qoyscguymwggause:
        yisekcgcwaimsycw:
        goto mgqgsgmkgwkiiggy;
        iwsskosiceumqgie:
        guayqmugkeqsmcqi:
        goto uakswkgiqciauaku;
        yeqiaiiuwwqoquem:
        $mkucggyaiaukqoce = null;
        goto iwsskosiceumqgie;
        uumusuoamyymaoik:
        $mkucggyaiaukqoce = wp_get_current_user();
        goto uiyqmwageayouaco;
        mgqgsgmkgwkiiggy:
        if (!($mkucggyaiaukqoce && !$mkucggyaiaukqoce->exists())) {
            goto guayqmugkeqsmcqi;
        }
        goto yeqiaiiuwwqoquem;
        uiyqmwageayouaco:
        icesswgseoousmqy:
        goto ymcyiqsgescgekyq;
        eowsciskwgisqqme:
    }
    
    public static function mwikyscisascoeea($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto msusgccciugmiuyg;
        ocqoecksgquuykge:
        iyyaqmomewkukisu:
        goto kukkasywyomwmsmk;
        eosimooskuwmgmos:
        $aokagokqyuysuksm = get_current_user_id();
        goto ocqoecksgquuykge;
        iqqskeygigecekqu:
        aqqemcmeecwwqsko:
        goto mgsqgyigiqwgugia;
        gcsicyockcquyyqa:
        wecwqqioqyoeiuis:
        goto yeuuueycmgkawkaa;
        scqwkakwckgyague:
        goto wecwqqioqyoeiuis;
        goto iqqskeygigecekqu;
        kaqwceweugaamoum:
        if ($cwwowqyuwccuykom) {
            goto iyyaqmomewkukisu;
        }
        goto eosimooskuwmgmos;
        kukkasywyomwmsmk:
        if ($mkucggyaiaukqoce instanceof WP_User) {
            goto aqqemcmeecwwqsko;
        }
        goto iqgaoqmwygqmmkec;
        iqgaoqmwygqmmkec:
        if (!is_numeric($mkucggyaiaukqoce)) {
            goto qyqooykaamoaesus;
        }
        goto gsegyqscgigyukgu;
        mgsqgyigiqwgugia:
        $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0;
        goto gcsicyockcquyyqa;
        gsegyqscgigyukgu:
        $aokagokqyuysuksm = (int) $mkucggyaiaukqoce;
        goto aguakwoqsmugwoak;
        yeuuueycmgkawkaa:
        return $aokagokqyuysuksm;
        goto cggumquuyqugeesk;
        msusgccciugmiuyg:
        $aokagokqyuysuksm = null;
        goto kaqwceweugaamoum;
        aguakwoqsmugwoak:
        qyqooykaamoaesus:
        goto scqwkakwckgyague;
        cggumquuyqugeesk:
    }
    
    public static function yagwwwqikmkuyicq($mcmaiqckgiuqayau = false) : array
    {
        goto bkywsackiuwyyusa;
        kqysyoyoyikeeego:
        uwyyeysoawyoeyac:
        goto gowgawiqowowuyyu;
        mqmgyqiuosmuguem:
        if (!$mcmaiqckgiuqayau) {
            goto uwyyeysoawyoeyac;
        }
        goto iiwackigmsuyuoqy;
        bkywsackiuwyyusa:
        $uagwmwoawiwkycao = wp_roles()->get_names();
        goto mqmgyqiuosmuguem;
        iiwackigmsuyuoqy:
        foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) {
            $uagwmwoawiwkycao[$uusmaiomayssaecw] = translate_user_role($oeucsuyqysaciasy);
            wmqoikukcueyiywc:
        }
        goto moykcgeaeaykkcww;
        moykcgeaeaykkcww:
        gmgyoacmaiewaoac:
        goto kqysyoyoyikeeego;
        gowgawiqowowuyyu:
        return $uagwmwoawiwkycao;
        goto aeowoammyqciewcg;
        aeowoammyqciewcg:
    }
    
    public static function askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false) : bool
    {
        goto gmcumcqkkcsoqcsc;
        cmqaeaeeeoegqyim:
        ykiieasagyuguuay:
        goto qmyecmoeeqqoamqg;
        yaicgkaiwuygkcqa:
        if (!$mkucggyaiaukqoce) {
            goto ykiieasagyuguuay;
        }
        goto xaymqociikmsceme;
        sseimukiaykwwuik:
        $mkucggyaiaukqoce = self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom);
        goto yaicgkaiwuygkcqa;
        qmyecmoeeqqoamqg:
        return $umuecysoywoumgwo;
        goto umcogaoumuakucom;
        ymakgqgsskogwyws:
        $umuecysoywoumgwo = in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao);
        goto cmqaeaeeeoegqyim;
        xaymqociikmsceme:
        $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles;
        goto ymakgqgsskogwyws;
        gmcumcqkkcsoqcsc:
        $umuecysoywoumgwo = false;
        goto sseimukiaykwwuik;
        umcogaoumuakucom:
    }
    
    public static function igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce = null, $cuyooiakswegosog = true)
    {
        return DecoratorUser::igawqaomowicuayw($uusmaiomayssaecw, self::mwikyscisascoeea($mkucggyaiaukqoce), $cuyooiakswegosog);
    }
    
    public static function smqukgcyacswysqa($uusmaiomayssaecw, $mkucggyaiaukqoce = null, $eqgoocgaqwqcimie = '') : bool
    {
        return DecoratorUser::smqukgcyacswysqa($uusmaiomayssaecw, self::mwikyscisascoeea($mkucggyaiaukqoce), $eqgoocgaqwqcimie);
    }
    
    public static function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mkucggyaiaukqoce = null, $omasqoksqewuwwkq = true)
    {
        return DecoratorUser::giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, self::mwikyscisascoeea($mkucggyaiaukqoce), $omasqoksqewuwwkq);
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie = '', $mkucggyaiaukqoce = null, $swwmymiaiosiyqis = '')
    {
        return DecoratorUser::ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, self::mwikyscisascoeea($mkucggyaiaukqoce), $swwmymiaiosiyqis);
    }
    
    public static function qgisekcaywsmigga($uusmaiomayssaecw, $eqgoocgaqwqcimie, $uiuykcweuosgmwki = "\75", $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii["\x6d\x65\x74\x61\x5f\x71\x75\x65\x72\x79"] = ["\162\145\x6c\x61\164\151\x6f\156" => "\101\116\104", ["\153\145\x79" => $uusmaiomayssaecw, "\166\x61\154\165\x65" => $eqgoocgaqwqcimie, "\x63\157\155\x70\141\x72\x65" => $uiuykcweuosgmwki]];
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = "\x64\151\163\x70\154\x61\x79\x5f\156\x61\x6d\145", $cwwowqyuwccuykom = false)
    {
        return ManipulateArray::get(self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom), $aiowsaccomcoikus, null);
    }
    
    public static function ogcwgigqwycqswms($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '')
    {
        return DecoratorUser::ogcwgigqwycqswms(self::mwikyscisascoeea($mkucggyaiaukqoce), $oiegiwogmwmawkeo, $ggauoeuaesiymgee, $gkykacccamuwowwc, $ywmkwiwkosakssii);
    }
    
    public static function quasyaqmmikeyoag($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64)
    {
        goto euoqeougaweoqmeo;
        kkoigoyokmsgkgis:
        return $mowgokyeuymuwiew;
        goto cqecskkymmcameiq;
        aqgacyikaawcqiqm:
        if (!$mowgokyeuymuwiew) {
            goto asseeqmyqkoeaskq;
        }
        goto cesmsqyqkgsescge;
        ikswyasesgaaguys:
        asseeqmyqkoeaskq:
        goto kkoigoyokmsgkgis;
        euoqeougaweoqmeo:
        $mowgokyeuymuwiew = self::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo);
        goto aqgacyikaawcqiqm;
        cesmsqyqkgsescge:
        $mowgokyeuymuwiew = DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\151\x6d\x67", "\163\162\143");
        goto ikswyasesgaaguys;
        cqecskkymmcameiq:
    }
    
    public static function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = self::CON_OR) : bool
    {
        goto ieeqmayskoskaceo;
        meuomqeuiiuyqoio:
        oykogwqgowegukuw:
        goto euisieyykuecqwck;
        euisieyykuecqwck:
        return $umuecysoywoumgwo;
        goto qioesoiiiwmqiyuw;
        ieeqmayskoskaceo:
        $umuecysoywoumgwo = false;
        goto ymsywmgkoaceyeqc;
        yqasigyosycqcakw:
        ygmuakwqewcgyyak:
        goto meuomqeuiiuyqoio;
        ymsywmgkoaceyeqc:
        if (!is_array($uagwmwoawiwkycao)) {
            goto oykogwqgowegukuw;
        }
        goto yswwogckkiyakmge;
        yswwogckkiyakmge:
        foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) {
            goto kgukiymugqqessso;
            ygsyeoosakgsomim:
            $umuecysoywoumgwo = false;
            goto uamcieckykeiassa;
            kcmaegoqmigeeocm:
            oiseckoawayouccm:
            goto sowimsawimkeyica;
            ogaeskkumaesgswm:
            if (!($wocwawaaemuoqmig == self::CON_AND)) {
                goto oweyqcyoyyygksug;
            }
            goto ygsyeoosakgsomim;
            cumegyygiaymmkgu:
            $umuecysoywoumgwo = true;
            goto soecauuquauiygwe;
            uamcieckykeiassa:
            goto ygmuakwqewcgyyak;
            goto uaamuqocgwoemyuy;
            gyqqkseqwwamcekm:
            egqwyumakkycowqo:
            goto wieagcysyweeycge;
            kgukiymugqqessso:
            if (self::askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) {
                goto egqwyumakkycowqo;
            }
            goto ogaeskkumaesgswm;
            soecauuquauiygwe:
            goto ygmuakwqewcgyyak;
            goto kcmaegoqmigeeocm;
            sowimsawimkeyica:
            wuwqskcgcqigqmwy:
            goto yuoeiemogmmokwyi;
            yuoeiemogmmokwyi:
            myisgeeiuoywsqkq:
            goto asmcgeacokqgagyo;
            uaamuqocgwoemyuy:
            oweyqcyoyyygksug:
            goto ssyakyegksauyecg;
            wieagcysyweeycge:
            if (!($wocwawaaemuoqmig == self::CON_OR)) {
                goto oiseckoawayouccm;
            }
            goto cumegyygiaymmkgu;
            ssyakyegksauyecg:
            goto wuwqskcgcqigqmwy;
            goto gyqqkseqwwamcekm;
            asmcgeacokqgagyo:
        }
        goto yqasigyosycqcakw;
        qioesoiiiwmqiyuw:
    }
}
