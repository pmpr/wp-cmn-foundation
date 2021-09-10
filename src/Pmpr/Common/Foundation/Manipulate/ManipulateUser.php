<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        gmwuamgmokqasssm:
        $kkeqqkkkqwkocsyu = ["\x48\124\x54\120\x5f\130\x5f\122\105\x41\x4c\x5f\111\x50", "\x48\x54\124\120\137\103\x4c\x49\105\116\x54\137\111\120", "\x48\x54\x54\x50\137\130\x5f\x46\x4f\122\127\x41\122\104\x45\x44\137\x46\117\x52", "\x52\105\115\x4f\124\x45\137\101\104\x44\x52"];
        goto umqegggcqogkcokk;
        esewwwsmwogmaaeu:
        ameyqkmyguiowiaw:
        goto wagmmkgiegoisgqu;
        ecwscogqsioyocqw:
        if (!isset($_SERVER)) {
            goto ameyqkmyguiowiaw;
        }
        goto gmwuamgmokqasssm;
        umqegggcqogkcokk:
        foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) {
            goto yoeckuuauawmacwk;
            cgigkogmiayysgsw:
            $kucumcusyyckayas = $uomewyckeuqoqocu[0];
            goto ywskwwaucamaawyc;
            oeosyywsmwoqmgoe:
            $uomewyckeuqoqocu = explode("\54", $_SERVER[$gygawogosumsgmme]);
            goto yaayyckygqkgqyii;
            okkwocoyssmuuyoo:
            ckuscqqcwmwuqwwq:
            goto aykwyewykoaqwsue;
            ywskwwaucamaawyc:
            goto aaekwqgakyuqksiw;
            goto sywyyiucyqmksgsy;
            yoeckuuauawmacwk:
            if (!(isset($_SERVER[$gygawogosumsgmme]) && $_SERVER[$gygawogosumsgmme])) {
                goto ammegqeakguswkea;
            }
            goto kwuikacsegmsueag;
            sywyyiucyqmksgsy:
            wyikyuggmkgksggw:
            goto miscmykioiowuqye;
            miscmykioiowuqye:
            goto ckuscqqcwmwuqwwq;
            goto uugmiwgkyoyyuoou;
            uugmiwgkyoyyuoou:
            mqcssiqeiqyksigg:
            goto aggmmceiguesqumu;
            aykwyewykoaqwsue:
            ammegqeakguswkea:
            goto keaisgcucioggscy;
            yaayyckygqkgqyii:
            if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP))) {
                goto wyikyuggmkgksggw;
            }
            goto cgigkogmiayysgsw;
            kwuikacsegmsueag:
            if (filter_var($_SERVER[$gygawogosumsgmme], FILTER_VALIDATE_IP)) {
                goto mqcssiqeiqyksigg;
            }
            goto oeosyywsmwoqmgoe;
            aggmmceiguesqumu:
            $kucumcusyyckayas = $_SERVER[$gygawogosumsgmme];
            goto qysooiuommggiyii;
            keaisgcucioggscy:
            mmouukiiyowuakqq:
            goto ksegauiqccusmigy;
            qysooiuommggiyii:
            goto aaekwqgakyuqksiw;
            goto okkwocoyssmuuyoo;
            ksegauiqccusmigy:
        }
        goto yuewiamsucauaego;
        giaaekwoqcgomyyq:
        $kucumcusyyckayas = '';
        goto ecwscogqsioyocqw;
        wagmmkgiegoisgqu:
        return $kucumcusyyckayas;
        goto iagaauogccisiowc;
        yuewiamsucauaego:
        aaekwqgakyuqksiw:
        goto esewwwsmwogmaaeu;
        iagaauogccisiowc:
    }
    
    public static function eoyueosccuoeqkee() : bool
    {
        global $pagenow;
        return in_array($pagenow, ["\x75\x73\x65\162\x2d\x65\144\151\x74\x2e\x70\150\160", "\x75\163\145\x72\55\156\x65\x77\56\x70\150\x70", "\160\x72\x6f\146\151\x6c\x65\x2e\x70\x68\x70"]);
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
        esieukmsekemaokw:
        ucscoaceqqamsqmq:
        goto oumswckciewwywmk;
        mmuggiqkqocomsak:
        goto sysikmimsgsyaocu;
        goto esieukmsekemaokw;
        kcuqqgokaaiegiea:
        sysikmimsgsyaocu:
        goto csoeyawuamayqkuy;
        oumswckciewwywmk:
        $miowmmgaiagcuyoo = self::mwikyscisascoeea();
        goto kcuqqgokaaiegiea;
        ugaoiwqmgeqoeuwm:
        if ($miowmmgaiagcuyoo) {
            goto cmauoaqiueakioag;
        }
        goto weeiywiskwumocki;
        weeiywiskwumocki:
        $miowmmgaiagcuyoo = ManipulateArray::get($_COOKIE, self::GUEST_ID_COOKIE);
        goto yayammcgqwyussac;
        yayammcgqwyussac:
        cmauoaqiueakioag:
        goto mmuggiqkqocomsak;
        mkkqoygeswcakyas:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ucscoaceqqamsqmq;
        }
        goto ugaoiwqmgeqoeuwm;
        csoeyawuamayqkuy:
        return $miowmmgaiagcuyoo;
        goto miecmocqwkqmmqem;
        miecmocqwkqmmqem:
    }
    
    public static function mmgsuuoossqmukqg($uagwmwoawiwkycao, $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x72\x6f\154\x65" => $uagwmwoawiwkycao]);
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function get($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto wcauaaiwuuowegqw;
        wcauaaiwuuowegqw:
        if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) {
            goto ygqoqswyksigwkkk;
        }
        goto cmiwskikykcioyiu;
        iwsskosiceumqgie:
        guayqmugkeqsmcqi:
        goto uakswkgiqciauaku;
        uakswkgiqciauaku:
        return $mkucggyaiaukqoce;
        goto eowsciskwgisqqme;
        uumusuoamyymaoik:
        $mkucggyaiaukqoce = wp_get_current_user();
        goto uiyqmwageayouaco;
        yeqiaiiuwwqoquem:
        $mkucggyaiaukqoce = null;
        goto iwsskosiceumqgie;
        esicggokqqaacouy:
        $mkucggyaiaukqoce = get_userdata($mkucggyaiaukqoce);
        goto qoyscguymwggause;
        ymcyiqsgescgekyq:
        goto yisekcgcwaimsycw;
        goto mmoeyiqwcmkiyoee;
        uiyqmwageayouaco:
        icesswgseoousmqy:
        goto ymcyiqsgescgekyq;
        mmoeyiqwcmkiyoee:
        ygqoqswyksigwkkk:
        goto esicggokqqaacouy;
        cmiwskikykcioyiu:
        if (!(!$mkucggyaiaukqoce && !$cwwowqyuwccuykom)) {
            goto icesswgseoousmqy;
        }
        goto uumusuoamyymaoik;
        mgqgsgmkgwkiiggy:
        if (!($mkucggyaiaukqoce && !$mkucggyaiaukqoce->exists())) {
            goto guayqmugkeqsmcqi;
        }
        goto yeqiaiiuwwqoquem;
        qoyscguymwggause:
        yisekcgcwaimsycw:
        goto mgqgsgmkgwkiiggy;
        eowsciskwgisqqme:
    }
    
    public static function mwikyscisascoeea($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto msusgccciugmiuyg;
        gcsicyockcquyyqa:
        wecwqqioqyoeiuis:
        goto yeuuueycmgkawkaa;
        kaqwceweugaamoum:
        if ($cwwowqyuwccuykom) {
            goto iyyaqmomewkukisu;
        }
        goto eosimooskuwmgmos;
        msusgccciugmiuyg:
        $aokagokqyuysuksm = null;
        goto kaqwceweugaamoum;
        scqwkakwckgyague:
        goto wecwqqioqyoeiuis;
        goto iqqskeygigecekqu;
        iqqskeygigecekqu:
        aqqemcmeecwwqsko:
        goto mgsqgyigiqwgugia;
        mgsqgyigiqwgugia:
        $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0;
        goto gcsicyockcquyyqa;
        eosimooskuwmgmos:
        $aokagokqyuysuksm = get_current_user_id();
        goto ocqoecksgquuykge;
        gsegyqscgigyukgu:
        $aokagokqyuysuksm = (int) $mkucggyaiaukqoce;
        goto aguakwoqsmugwoak;
        kukkasywyomwmsmk:
        if ($mkucggyaiaukqoce instanceof WP_User) {
            goto aqqemcmeecwwqsko;
        }
        goto iqgaoqmwygqmmkec;
        yeuuueycmgkawkaa:
        return $aokagokqyuysuksm;
        goto cggumquuyqugeesk;
        ocqoecksgquuykge:
        iyyaqmomewkukisu:
        goto kukkasywyomwmsmk;
        aguakwoqsmugwoak:
        qyqooykaamoaesus:
        goto scqwkakwckgyague;
        iqgaoqmwygqmmkec:
        if (!is_numeric($mkucggyaiaukqoce)) {
            goto qyqooykaamoaesus;
        }
        goto gsegyqscgigyukgu;
        cggumquuyqugeesk:
    }
    
    public static function yagwwwqikmkuyicq($mcmaiqckgiuqayau = false) : array
    {
        goto bkywsackiuwyyusa;
        gowgawiqowowuyyu:
        return $uagwmwoawiwkycao;
        goto aeowoammyqciewcg;
        iiwackigmsuyuoqy:
        foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) {
            $uagwmwoawiwkycao[$uusmaiomayssaecw] = translate_user_role($oeucsuyqysaciasy);
            wmqoikukcueyiywc:
        }
        goto moykcgeaeaykkcww;
        moykcgeaeaykkcww:
        gmgyoacmaiewaoac:
        goto kqysyoyoyikeeego;
        mqmgyqiuosmuguem:
        if (!$mcmaiqckgiuqayau) {
            goto uwyyeysoawyoeyac;
        }
        goto iiwackigmsuyuoqy;
        bkywsackiuwyyusa:
        $uagwmwoawiwkycao = wp_roles()->get_names();
        goto mqmgyqiuosmuguem;
        kqysyoyoyikeeego:
        uwyyeysoawyoeyac:
        goto gowgawiqowowuyyu;
        aeowoammyqciewcg:
    }
    
    public static function askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false) : bool
    {
        goto gmcumcqkkcsoqcsc;
        ymakgqgsskogwyws:
        $umuecysoywoumgwo = in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao);
        goto cmqaeaeeeoegqyim;
        xaymqociikmsceme:
        $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles;
        goto ymakgqgsskogwyws;
        qmyecmoeeqqoamqg:
        return $umuecysoywoumgwo;
        goto umcogaoumuakucom;
        yaicgkaiwuygkcqa:
        if (!$mkucggyaiaukqoce) {
            goto ykiieasagyuguuay;
        }
        goto xaymqociikmsceme;
        sseimukiaykwwuik:
        $mkucggyaiaukqoce = self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom);
        goto yaicgkaiwuygkcqa;
        cmqaeaeeeoegqyim:
        ykiieasagyuguuay:
        goto qmyecmoeeqqoamqg;
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
    
    public static function qgisekcaywsmigga($uusmaiomayssaecw, $eqgoocgaqwqcimie, $uiuykcweuosgmwki = "\x3d", $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii["\155\x65\x74\141\x5f\x71\165\x65\x72\171"] = ["\x72\x65\154\x61\164\151\x6f\x6e" => "\101\x4e\x44", ["\x6b\x65\171" => $uusmaiomayssaecw, "\x76\141\x6c\165\145" => $eqgoocgaqwqcimie, "\x63\157\x6d\x70\141\162\x65" => $uiuykcweuosgmwki]];
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = "\x64\151\x73\x70\154\x61\171\x5f\x6e\x61\x6d\x65", $cwwowqyuwccuykom = false)
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
        aqgacyikaawcqiqm:
        if (!$mowgokyeuymuwiew) {
            goto asseeqmyqkoeaskq;
        }
        goto cesmsqyqkgsescge;
        cesmsqyqkgsescge:
        $mowgokyeuymuwiew = DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\x69\x6d\147", "\163\x72\143");
        goto ikswyasesgaaguys;
        ikswyasesgaaguys:
        asseeqmyqkoeaskq:
        goto kkoigoyokmsgkgis;
        kkoigoyokmsgkgis:
        return $mowgokyeuymuwiew;
        goto cqecskkymmcameiq;
        euoqeougaweoqmeo:
        $mowgokyeuymuwiew = self::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo);
        goto aqgacyikaawcqiqm;
        cqecskkymmcameiq:
    }
    
    public static function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = self::CON_OR) : bool
    {
        goto ieeqmayskoskaceo;
        ieeqmayskoskaceo:
        $umuecysoywoumgwo = false;
        goto ymsywmgkoaceyeqc;
        meuomqeuiiuyqoio:
        oykogwqgowegukuw:
        goto euisieyykuecqwck;
        yqasigyosycqcakw:
        ygmuakwqewcgyyak:
        goto meuomqeuiiuyqoio;
        yswwogckkiyakmge:
        foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) {
            goto kgukiymugqqessso;
            yuoeiemogmmokwyi:
            myisgeeiuoywsqkq:
            goto asmcgeacokqgagyo;
            kcmaegoqmigeeocm:
            oiseckoawayouccm:
            goto sowimsawimkeyica;
            kgukiymugqqessso:
            if (self::askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) {
                goto egqwyumakkycowqo;
            }
            goto ogaeskkumaesgswm;
            ygsyeoosakgsomim:
            $umuecysoywoumgwo = false;
            goto uamcieckykeiassa;
            uamcieckykeiassa:
            goto ygmuakwqewcgyyak;
            goto uaamuqocgwoemyuy;
            ogaeskkumaesgswm:
            if (!($wocwawaaemuoqmig == self::CON_AND)) {
                goto oweyqcyoyyygksug;
            }
            goto ygsyeoosakgsomim;
            wieagcysyweeycge:
            if (!($wocwawaaemuoqmig == self::CON_OR)) {
                goto oiseckoawayouccm;
            }
            goto cumegyygiaymmkgu;
            soecauuquauiygwe:
            goto ygmuakwqewcgyyak;
            goto kcmaegoqmigeeocm;
            cumegyygiaymmkgu:
            $umuecysoywoumgwo = true;
            goto soecauuquauiygwe;
            ssyakyegksauyecg:
            goto wuwqskcgcqigqmwy;
            goto gyqqkseqwwamcekm;
            gyqqkseqwwamcekm:
            egqwyumakkycowqo:
            goto wieagcysyweeycge;
            sowimsawimkeyica:
            wuwqskcgcqigqmwy:
            goto yuoeiemogmmokwyi;
            uaamuqocgwoemyuy:
            oweyqcyoyyygksug:
            goto ssyakyegksauyecg;
            asmcgeacokqgagyo:
        }
        goto yqasigyosycqcakw;
        euisieyykuecqwck:
        return $umuecysoywoumgwo;
        goto qioesoiiiwmqiyuw;
        ymsywmgkoaceyeqc:
        if (!is_array($uagwmwoawiwkycao)) {
            goto oykogwqgowegukuw;
        }
        goto yswwogckkiyakmge;
        qioesoiiiwmqiyuw:
    }
}
