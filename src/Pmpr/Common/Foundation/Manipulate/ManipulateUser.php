<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto ameyqkmyguiowiaw;
        esewwwsmwogmaaeu:
        return $kucumcusyyckayas;
        goto wagmmkgiegoisgqu;
        umqegggcqogkcokk:
        wqawogguqkeuwwco:
        goto yuewiamsucauaego;
        ameyqkmyguiowiaw:
        $kucumcusyyckayas = '';
        goto giaaekwoqcgomyyq;
        yuewiamsucauaego:
        ksegauiqccusmigy:
        goto esewwwsmwogmaaeu;
        giaaekwoqcgomyyq:
        if (!isset($_SERVER)) {
            goto ksegauiqccusmigy;
        }
        goto ecwscogqsioyocqw;
        ecwscogqsioyocqw:
        $kkeqqkkkqwkocsyu = ["\110\124\x54\x50\137\130\x5f\x52\105\x41\x4c\137\x49\120", "\110\124\x54\120\x5f\x43\114\111\x45\116\x54\137\x49\120", "\x48\124\124\120\x5f\130\137\x46\117\122\127\101\122\x44\x45\x44\137\x46\117\122", "\122\x45\115\117\124\x45\137\x41\104\x44\122"];
        goto gmwuamgmokqasssm;
        gmwuamgmokqasssm:
        foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) {
            goto ammegqeakguswkea;
            ywskwwaucamaawyc:
            mmouukiiyowuakqq:
            goto sywyyiucyqmksgsy;
            qysooiuommggiyii:
            mqcssiqeiqyksigg:
            goto okkwocoyssmuuyoo;
            okkwocoyssmuuyoo:
            ckuscqqcwmwuqwwq:
            goto aykwyewykoaqwsue;
            yaayyckygqkgqyii:
            $kucumcusyyckayas = $uomewyckeuqoqocu[0];
            goto cgigkogmiayysgsw;
            yoeckuuauawmacwk:
            if (filter_var($_SERVER[$gygawogosumsgmme], FILTER_VALIDATE_IP)) {
                goto wyikyuggmkgksggw;
            }
            goto kwuikacsegmsueag;
            miscmykioiowuqye:
            wyikyuggmkgksggw:
            goto uugmiwgkyoyyuoou;
            ammegqeakguswkea:
            if (!(isset($_SERVER[$gygawogosumsgmme]) && $_SERVER[$gygawogosumsgmme])) {
                goto ckuscqqcwmwuqwwq;
            }
            goto yoeckuuauawmacwk;
            oeosyywsmwoqmgoe:
            if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP))) {
                goto mmouukiiyowuakqq;
            }
            goto yaayyckygqkgqyii;
            kwuikacsegmsueag:
            $uomewyckeuqoqocu = explode("\54", $_SERVER[$gygawogosumsgmme]);
            goto oeosyywsmwoqmgoe;
            aggmmceiguesqumu:
            goto wqawogguqkeuwwco;
            goto qysooiuommggiyii;
            sywyyiucyqmksgsy:
            goto mqcssiqeiqyksigg;
            goto miscmykioiowuqye;
            cgigkogmiayysgsw:
            goto wqawogguqkeuwwco;
            goto ywskwwaucamaawyc;
            uugmiwgkyoyyuoou:
            $kucumcusyyckayas = $_SERVER[$gygawogosumsgmme];
            goto aggmmceiguesqumu;
            aykwyewykoaqwsue:
            aaekwqgakyuqksiw:
            goto keaisgcucioggscy;
            keaisgcucioggscy:
        }
        goto umqegggcqogkcokk;
        wagmmkgiegoisgqu:
    }
    
    public static function eoyueosccuoeqkee() : bool
    {
        global $pagenow;
        return in_array($pagenow, ["\x75\163\145\x72\55\145\144\x69\164\56\x70\150\160", "\x75\x73\145\x72\55\156\145\x77\56\160\x68\x70", "\x70\162\x6f\146\x69\x6c\x65\x2e\160\150\160"]);
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
        goto sysikmimsgsyaocu;
        mmuggiqkqocomsak:
        cmauoaqiueakioag:
        goto esieukmsekemaokw;
        ugaoiwqmgeqoeuwm:
        $miowmmgaiagcuyoo = ManipulateArray::get($_COOKIE, self::GUEST_ID_COOKIE);
        goto weeiywiskwumocki;
        weeiywiskwumocki:
        iagaauogccisiowc:
        goto yayammcgqwyussac;
        yayammcgqwyussac:
        goto ucscoaceqqamsqmq;
        goto mmuggiqkqocomsak;
        sysikmimsgsyaocu:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto cmauoaqiueakioag;
        }
        goto mkkqoygeswcakyas;
        oumswckciewwywmk:
        ucscoaceqqamsqmq:
        goto kcuqqgokaaiegiea;
        kcuqqgokaaiegiea:
        return $miowmmgaiagcuyoo;
        goto csoeyawuamayqkuy;
        mkkqoygeswcakyas:
        if ($miowmmgaiagcuyoo) {
            goto iagaauogccisiowc;
        }
        goto ugaoiwqmgeqoeuwm;
        esieukmsekemaokw:
        $miowmmgaiagcuyoo = self::mwikyscisascoeea();
        goto oumswckciewwywmk;
        csoeyawuamayqkuy:
    }
    
    public static function mmgsuuoossqmukqg($uagwmwoawiwkycao, $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x72\x6f\154\x65" => $uagwmwoawiwkycao]);
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function get($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto guayqmugkeqsmcqi;
        iwsskosiceumqgie:
        return $mkucggyaiaukqoce;
        goto uakswkgiqciauaku;
        wcauaaiwuuowegqw:
        if (!(!$mkucggyaiaukqoce && !$cwwowqyuwccuykom)) {
            goto miecmocqwkqmmqem;
        }
        goto cmiwskikykcioyiu;
        guayqmugkeqsmcqi:
        if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) {
            goto icesswgseoousmqy;
        }
        goto wcauaaiwuuowegqw;
        ymcyiqsgescgekyq:
        icesswgseoousmqy:
        goto mmoeyiqwcmkiyoee;
        mmoeyiqwcmkiyoee:
        $mkucggyaiaukqoce = get_userdata($mkucggyaiaukqoce);
        goto esicggokqqaacouy;
        yeqiaiiuwwqoquem:
        yisekcgcwaimsycw:
        goto iwsskosiceumqgie;
        uiyqmwageayouaco:
        goto ygqoqswyksigwkkk;
        goto ymcyiqsgescgekyq;
        mgqgsgmkgwkiiggy:
        $mkucggyaiaukqoce = null;
        goto yeqiaiiuwwqoquem;
        qoyscguymwggause:
        if (!($mkucggyaiaukqoce && !$mkucggyaiaukqoce->exists())) {
            goto yisekcgcwaimsycw;
        }
        goto mgqgsgmkgwkiiggy;
        uumusuoamyymaoik:
        miecmocqwkqmmqem:
        goto uiyqmwageayouaco;
        cmiwskikykcioyiu:
        $mkucggyaiaukqoce = wp_get_current_user();
        goto uumusuoamyymaoik;
        esicggokqqaacouy:
        ygqoqswyksigwkkk:
        goto qoyscguymwggause;
        uakswkgiqciauaku:
    }
    
    public static function mwikyscisascoeea($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto wecwqqioqyoeiuis;
        msusgccciugmiuyg:
        if ($cwwowqyuwccuykom) {
            goto eowsciskwgisqqme;
        }
        goto kaqwceweugaamoum;
        wecwqqioqyoeiuis:
        $aokagokqyuysuksm = null;
        goto msusgccciugmiuyg;
        scqwkakwckgyague:
        qyqooykaamoaesus:
        goto iqqskeygigecekqu;
        iqgaoqmwygqmmkec:
        $aokagokqyuysuksm = (int) $mkucggyaiaukqoce;
        goto gsegyqscgigyukgu;
        kaqwceweugaamoum:
        $aokagokqyuysuksm = get_current_user_id();
        goto eosimooskuwmgmos;
        ocqoecksgquuykge:
        if ($mkucggyaiaukqoce instanceof WP_User) {
            goto qyqooykaamoaesus;
        }
        goto kukkasywyomwmsmk;
        gsegyqscgigyukgu:
        iyyaqmomewkukisu:
        goto aguakwoqsmugwoak;
        kukkasywyomwmsmk:
        if (!is_numeric($mkucggyaiaukqoce)) {
            goto iyyaqmomewkukisu;
        }
        goto iqgaoqmwygqmmkec;
        aguakwoqsmugwoak:
        goto aqqemcmeecwwqsko;
        goto scqwkakwckgyague;
        eosimooskuwmgmos:
        eowsciskwgisqqme:
        goto ocqoecksgquuykge;
        iqqskeygigecekqu:
        $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0;
        goto mgsqgyigiqwgugia;
        mgsqgyigiqwgugia:
        aqqemcmeecwwqsko:
        goto gcsicyockcquyyqa;
        gcsicyockcquyyqa:
        return $aokagokqyuysuksm;
        goto yeuuueycmgkawkaa;
        yeuuueycmgkawkaa:
    }
    
    public static function yagwwwqikmkuyicq($mcmaiqckgiuqayau = false) : array
    {
        goto uwyyeysoawyoeyac;
        iiwackigmsuyuoqy:
        cggumquuyqugeesk:
        goto moykcgeaeaykkcww;
        bkywsackiuwyyusa:
        if (!$mcmaiqckgiuqayau) {
            goto wmqoikukcueyiywc;
        }
        goto mqmgyqiuosmuguem;
        uwyyeysoawyoeyac:
        $uagwmwoawiwkycao = wp_roles()->get_names();
        goto bkywsackiuwyyusa;
        mqmgyqiuosmuguem:
        foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) {
            $uagwmwoawiwkycao[$uusmaiomayssaecw] = translate_user_role($oeucsuyqysaciasy);
            gmgyoacmaiewaoac:
        }
        goto iiwackigmsuyuoqy;
        moykcgeaeaykkcww:
        wmqoikukcueyiywc:
        goto kqysyoyoyikeeego;
        kqysyoyoyikeeego:
        return $uagwmwoawiwkycao;
        goto gowgawiqowowuyyu;
        gowgawiqowowuyyu:
    }
    
    public static function askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false) : bool
    {
        goto ykiieasagyuguuay;
        sseimukiaykwwuik:
        if (!$mkucggyaiaukqoce) {
            goto aeowoammyqciewcg;
        }
        goto yaicgkaiwuygkcqa;
        xaymqociikmsceme:
        $umuecysoywoumgwo = in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao);
        goto ymakgqgsskogwyws;
        gmcumcqkkcsoqcsc:
        $mkucggyaiaukqoce = self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom);
        goto sseimukiaykwwuik;
        yaicgkaiwuygkcqa:
        $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles;
        goto xaymqociikmsceme;
        cmqaeaeeeoegqyim:
        return $umuecysoywoumgwo;
        goto qmyecmoeeqqoamqg;
        ykiieasagyuguuay:
        $umuecysoywoumgwo = false;
        goto gmcumcqkkcsoqcsc;
        ymakgqgsskogwyws:
        aeowoammyqciewcg:
        goto cmqaeaeeeoegqyim;
        qmyecmoeeqqoamqg:
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
        $ywmkwiwkosakssii["\x6d\145\x74\x61\x5f\161\165\145\162\171"] = ["\x72\x65\x6c\141\x74\151\157\156" => "\x41\116\104", ["\x6b\145\x79" => $uusmaiomayssaecw, "\166\141\x6c\x75\x65" => $eqgoocgaqwqcimie, "\143\157\155\x70\141\x72\x65" => $uiuykcweuosgmwki]];
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = "\144\151\x73\x70\x6c\141\171\x5f\156\x61\x6d\145", $cwwowqyuwccuykom = false)
    {
        return ManipulateArray::get(self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom), $aiowsaccomcoikus, null);
    }
    
    public static function ogcwgigqwycqswms($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '')
    {
        return DecoratorUser::ogcwgigqwycqswms(self::mwikyscisascoeea($mkucggyaiaukqoce), $oiegiwogmwmawkeo, $ggauoeuaesiymgee, $gkykacccamuwowwc, $ywmkwiwkosakssii);
    }
    
    public static function quasyaqmmikeyoag($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64)
    {
        goto asseeqmyqkoeaskq;
        cesmsqyqkgsescge:
        umcogaoumuakucom:
        goto ikswyasesgaaguys;
        asseeqmyqkoeaskq:
        $mowgokyeuymuwiew = self::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo);
        goto euoqeougaweoqmeo;
        euoqeougaweoqmeo:
        if (!$mowgokyeuymuwiew) {
            goto umcogaoumuakucom;
        }
        goto aqgacyikaawcqiqm;
        aqgacyikaawcqiqm:
        $mowgokyeuymuwiew = DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\151\155\147", "\163\162\x63");
        goto cesmsqyqkgsescge;
        ikswyasesgaaguys:
        return $mowgokyeuymuwiew;
        goto kkoigoyokmsgkgis;
        kkoigoyokmsgkgis:
    }
    
    public static function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = self::CON_OR) : bool
    {
        goto oykogwqgowegukuw;
        oykogwqgowegukuw:
        $umuecysoywoumgwo = false;
        goto ieeqmayskoskaceo;
        meuomqeuiiuyqoio:
        return $umuecysoywoumgwo;
        goto euisieyykuecqwck;
        yqasigyosycqcakw:
        asmcgeacokqgagyo:
        goto meuomqeuiiuyqoio;
        ieeqmayskoskaceo:
        if (!is_array($uagwmwoawiwkycao)) {
            goto asmcgeacokqgagyo;
        }
        goto ymsywmgkoaceyeqc;
        yswwogckkiyakmge:
        cqecskkymmcameiq:
        goto yqasigyosycqcakw;
        ymsywmgkoaceyeqc:
        foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) {
            goto wuwqskcgcqigqmwy;
            wieagcysyweeycge:
            $umuecysoywoumgwo = true;
            goto cumegyygiaymmkgu;
            sowimsawimkeyica:
            ygmuakwqewcgyyak:
            goto yuoeiemogmmokwyi;
            ogaeskkumaesgswm:
            $umuecysoywoumgwo = false;
            goto ygsyeoosakgsomim;
            gyqqkseqwwamcekm:
            if (!($wocwawaaemuoqmig == self::CON_OR)) {
                goto myisgeeiuoywsqkq;
            }
            goto wieagcysyweeycge;
            kgukiymugqqessso:
            if (!($wocwawaaemuoqmig == self::CON_AND)) {
                goto oiseckoawayouccm;
            }
            goto ogaeskkumaesgswm;
            ygsyeoosakgsomim:
            goto cqecskkymmcameiq;
            goto uamcieckykeiassa;
            kcmaegoqmigeeocm:
            egqwyumakkycowqo:
            goto sowimsawimkeyica;
            uamcieckykeiassa:
            oiseckoawayouccm:
            goto uaamuqocgwoemyuy;
            wuwqskcgcqigqmwy:
            if (self::askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) {
                goto oweyqcyoyyygksug;
            }
            goto kgukiymugqqessso;
            ssyakyegksauyecg:
            oweyqcyoyyygksug:
            goto gyqqkseqwwamcekm;
            uaamuqocgwoemyuy:
            goto egqwyumakkycowqo;
            goto ssyakyegksauyecg;
            soecauuquauiygwe:
            myisgeeiuoywsqkq:
            goto kcmaegoqmigeeocm;
            cumegyygiaymmkgu:
            goto cqecskkymmcameiq;
            goto soecauuquauiygwe;
            yuoeiemogmmokwyi:
        }
        goto yswwogckkiyakmge;
        euisieyykuecqwck:
    }
}
