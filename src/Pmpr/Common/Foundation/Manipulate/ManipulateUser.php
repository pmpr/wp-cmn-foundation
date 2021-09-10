<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        ecwscogqsioyocqw:
        $kkeqqkkkqwkocsyu = ["\x48\x54\x54\120\137\x58\137\122\x45\101\114\x5f\x49\x50", "\110\124\124\120\x5f\103\114\111\x45\116\124\137\111\120", "\x48\x54\x54\120\x5f\130\137\x46\x4f\122\127\x41\122\104\105\104\x5f\106\117\x52", "\x52\x45\115\117\x54\x45\137\101\104\104\x52"];
        goto gmwuamgmokqasssm;
        gmwuamgmokqasssm:
        foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) {
            goto ammegqeakguswkea;
            kwuikacsegmsueag:
            $uomewyckeuqoqocu = explode("\x2c", $_SERVER[$gygawogosumsgmme]);
            goto oeosyywsmwoqmgoe;
            qysooiuommggiyii:
            mqcssiqeiqyksigg:
            goto okkwocoyssmuuyoo;
            ammegqeakguswkea:
            if (!(isset($_SERVER[$gygawogosumsgmme]) && $_SERVER[$gygawogosumsgmme])) {
                goto ckuscqqcwmwuqwwq;
            }
            goto yoeckuuauawmacwk;
            yoeckuuauawmacwk:
            if (filter_var($_SERVER[$gygawogosumsgmme], FILTER_VALIDATE_IP)) {
                goto wyikyuggmkgksggw;
            }
            goto kwuikacsegmsueag;
            okkwocoyssmuuyoo:
            ckuscqqcwmwuqwwq:
            goto aykwyewykoaqwsue;
            oeosyywsmwoqmgoe:
            if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP))) {
                goto mmouukiiyowuakqq;
            }
            goto yaayyckygqkgqyii;
            aykwyewykoaqwsue:
            aaekwqgakyuqksiw:
            goto keaisgcucioggscy;
            yaayyckygqkgqyii:
            $kucumcusyyckayas = $uomewyckeuqoqocu[0];
            goto cgigkogmiayysgsw;
            sywyyiucyqmksgsy:
            goto mqcssiqeiqyksigg;
            goto miscmykioiowuqye;
            aggmmceiguesqumu:
            goto wqawogguqkeuwwco;
            goto qysooiuommggiyii;
            ywskwwaucamaawyc:
            mmouukiiyowuakqq:
            goto sywyyiucyqmksgsy;
            cgigkogmiayysgsw:
            goto wqawogguqkeuwwco;
            goto ywskwwaucamaawyc;
            miscmykioiowuqye:
            wyikyuggmkgksggw:
            goto uugmiwgkyoyyuoou;
            uugmiwgkyoyyuoou:
            $kucumcusyyckayas = $_SERVER[$gygawogosumsgmme];
            goto aggmmceiguesqumu;
            keaisgcucioggscy:
        }
        goto umqegggcqogkcokk;
        yuewiamsucauaego:
        ksegauiqccusmigy:
        goto esewwwsmwogmaaeu;
        umqegggcqogkcokk:
        wqawogguqkeuwwco:
        goto yuewiamsucauaego;
        esewwwsmwogmaaeu:
        return $kucumcusyyckayas;
        goto wagmmkgiegoisgqu;
        giaaekwoqcgomyyq:
        if (!isset($_SERVER)) {
            goto ksegauiqccusmigy;
        }
        goto ecwscogqsioyocqw;
        ameyqkmyguiowiaw:
        $kucumcusyyckayas = '';
        goto giaaekwoqcgomyyq;
        wagmmkgiegoisgqu:
    }
    
    public static function eoyueosccuoeqkee() : bool
    {
        global $pagenow;
        return in_array($pagenow, ["\165\x73\145\x72\x2d\145\x64\x69\164\56\160\150\160", "\165\163\x65\162\55\x6e\145\167\56\160\x68\160", "\160\162\x6f\x66\151\154\145\x2e\160\x68\x70"]);
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
        kcuqqgokaaiegiea:
        return $miowmmgaiagcuyoo;
        goto csoeyawuamayqkuy;
        weeiywiskwumocki:
        iagaauogccisiowc:
        goto yayammcgqwyussac;
        sysikmimsgsyaocu:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto cmauoaqiueakioag;
        }
        goto mkkqoygeswcakyas;
        ugaoiwqmgeqoeuwm:
        $miowmmgaiagcuyoo = ManipulateArray::get($_COOKIE, self::GUEST_ID_COOKIE);
        goto weeiywiskwumocki;
        oumswckciewwywmk:
        ucscoaceqqamsqmq:
        goto kcuqqgokaaiegiea;
        esieukmsekemaokw:
        $miowmmgaiagcuyoo = self::mwikyscisascoeea();
        goto oumswckciewwywmk;
        yayammcgqwyussac:
        goto ucscoaceqqamsqmq;
        goto mmuggiqkqocomsak;
        mkkqoygeswcakyas:
        if ($miowmmgaiagcuyoo) {
            goto iagaauogccisiowc;
        }
        goto ugaoiwqmgeqoeuwm;
        csoeyawuamayqkuy:
    }
    
    public static function mmgsuuoossqmukqg($uagwmwoawiwkycao, $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\162\x6f\x6c\x65" => $uagwmwoawiwkycao]);
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function get($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto guayqmugkeqsmcqi;
        iwsskosiceumqgie:
        return $mkucggyaiaukqoce;
        goto uakswkgiqciauaku;
        uiyqmwageayouaco:
        goto ygqoqswyksigwkkk;
        goto ymcyiqsgescgekyq;
        wcauaaiwuuowegqw:
        if (!(!$mkucggyaiaukqoce && !$cwwowqyuwccuykom)) {
            goto miecmocqwkqmmqem;
        }
        goto cmiwskikykcioyiu;
        qoyscguymwggause:
        if (!($mkucggyaiaukqoce && !$mkucggyaiaukqoce->exists())) {
            goto yisekcgcwaimsycw;
        }
        goto mgqgsgmkgwkiiggy;
        mmoeyiqwcmkiyoee:
        $mkucggyaiaukqoce = get_userdata($mkucggyaiaukqoce);
        goto esicggokqqaacouy;
        yeqiaiiuwwqoquem:
        yisekcgcwaimsycw:
        goto iwsskosiceumqgie;
        mgqgsgmkgwkiiggy:
        $mkucggyaiaukqoce = null;
        goto yeqiaiiuwwqoquem;
        esicggokqqaacouy:
        ygqoqswyksigwkkk:
        goto qoyscguymwggause;
        cmiwskikykcioyiu:
        $mkucggyaiaukqoce = wp_get_current_user();
        goto uumusuoamyymaoik;
        guayqmugkeqsmcqi:
        if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) {
            goto icesswgseoousmqy;
        }
        goto wcauaaiwuuowegqw;
        ymcyiqsgescgekyq:
        icesswgseoousmqy:
        goto mmoeyiqwcmkiyoee;
        uumusuoamyymaoik:
        miecmocqwkqmmqem:
        goto uiyqmwageayouaco;
        uakswkgiqciauaku:
    }
    
    public static function mwikyscisascoeea($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto wecwqqioqyoeiuis;
        mgsqgyigiqwgugia:
        aqqemcmeecwwqsko:
        goto gcsicyockcquyyqa;
        msusgccciugmiuyg:
        if ($cwwowqyuwccuykom) {
            goto eowsciskwgisqqme;
        }
        goto kaqwceweugaamoum;
        scqwkakwckgyague:
        qyqooykaamoaesus:
        goto iqqskeygigecekqu;
        eosimooskuwmgmos:
        eowsciskwgisqqme:
        goto ocqoecksgquuykge;
        iqgaoqmwygqmmkec:
        $aokagokqyuysuksm = (int) $mkucggyaiaukqoce;
        goto gsegyqscgigyukgu;
        aguakwoqsmugwoak:
        goto aqqemcmeecwwqsko;
        goto scqwkakwckgyague;
        kaqwceweugaamoum:
        $aokagokqyuysuksm = get_current_user_id();
        goto eosimooskuwmgmos;
        ocqoecksgquuykge:
        if ($mkucggyaiaukqoce instanceof WP_User) {
            goto qyqooykaamoaesus;
        }
        goto kukkasywyomwmsmk;
        kukkasywyomwmsmk:
        if (!is_numeric($mkucggyaiaukqoce)) {
            goto iyyaqmomewkukisu;
        }
        goto iqgaoqmwygqmmkec;
        wecwqqioqyoeiuis:
        $aokagokqyuysuksm = null;
        goto msusgccciugmiuyg;
        gcsicyockcquyyqa:
        return $aokagokqyuysuksm;
        goto yeuuueycmgkawkaa;
        iqqskeygigecekqu:
        $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0;
        goto mgsqgyigiqwgugia;
        gsegyqscgigyukgu:
        iyyaqmomewkukisu:
        goto aguakwoqsmugwoak;
        yeuuueycmgkawkaa:
    }
    
    public static function yagwwwqikmkuyicq($mcmaiqckgiuqayau = false) : array
    {
        goto uwyyeysoawyoeyac;
        bkywsackiuwyyusa:
        if (!$mcmaiqckgiuqayau) {
            goto wmqoikukcueyiywc;
        }
        goto mqmgyqiuosmuguem;
        moykcgeaeaykkcww:
        wmqoikukcueyiywc:
        goto kqysyoyoyikeeego;
        mqmgyqiuosmuguem:
        foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) {
            $uagwmwoawiwkycao[$uusmaiomayssaecw] = translate_user_role($oeucsuyqysaciasy);
            gmgyoacmaiewaoac:
        }
        goto iiwackigmsuyuoqy;
        uwyyeysoawyoeyac:
        $uagwmwoawiwkycao = wp_roles()->get_names();
        goto bkywsackiuwyyusa;
        kqysyoyoyikeeego:
        return $uagwmwoawiwkycao;
        goto gowgawiqowowuyyu;
        iiwackigmsuyuoqy:
        cggumquuyqugeesk:
        goto moykcgeaeaykkcww;
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
        ymakgqgsskogwyws:
        aeowoammyqciewcg:
        goto cmqaeaeeeoegqyim;
        cmqaeaeeeoegqyim:
        return $umuecysoywoumgwo;
        goto qmyecmoeeqqoamqg;
        yaicgkaiwuygkcqa:
        $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles;
        goto xaymqociikmsceme;
        gmcumcqkkcsoqcsc:
        $mkucggyaiaukqoce = self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom);
        goto sseimukiaykwwuik;
        ykiieasagyuguuay:
        $umuecysoywoumgwo = false;
        goto gmcumcqkkcsoqcsc;
        xaymqociikmsceme:
        $umuecysoywoumgwo = in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao);
        goto ymakgqgsskogwyws;
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
    
    public static function qgisekcaywsmigga($uusmaiomayssaecw, $eqgoocgaqwqcimie, $uiuykcweuosgmwki = "\75", $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii["\155\x65\164\x61\137\x71\x75\145\162\171"] = ["\162\x65\x6c\141\164\x69\x6f\156" => "\x41\x4e\104", ["\x6b\x65\x79" => $uusmaiomayssaecw, "\166\141\x6c\165\x65" => $eqgoocgaqwqcimie, "\x63\x6f\x6d\160\141\x72\x65" => $uiuykcweuosgmwki]];
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = "\x64\151\163\x70\154\141\x79\x5f\x6e\141\x6d\145", $cwwowqyuwccuykom = false)
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
        asseeqmyqkoeaskq:
        $mowgokyeuymuwiew = self::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo);
        goto euoqeougaweoqmeo;
        ikswyasesgaaguys:
        return $mowgokyeuymuwiew;
        goto kkoigoyokmsgkgis;
        cesmsqyqkgsescge:
        umcogaoumuakucom:
        goto ikswyasesgaaguys;
        euoqeougaweoqmeo:
        if (!$mowgokyeuymuwiew) {
            goto umcogaoumuakucom;
        }
        goto aqgacyikaawcqiqm;
        aqgacyikaawcqiqm:
        $mowgokyeuymuwiew = DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\x69\x6d\x67", "\x73\162\x63");
        goto cesmsqyqkgsescge;
        kkoigoyokmsgkgis:
    }
    
    public static function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = self::CON_OR) : bool
    {
        goto oykogwqgowegukuw;
        ieeqmayskoskaceo:
        if (!is_array($uagwmwoawiwkycao)) {
            goto asmcgeacokqgagyo;
        }
        goto ymsywmgkoaceyeqc;
        ymsywmgkoaceyeqc:
        foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) {
            goto wuwqskcgcqigqmwy;
            ogaeskkumaesgswm:
            $umuecysoywoumgwo = false;
            goto ygsyeoosakgsomim;
            uaamuqocgwoemyuy:
            goto egqwyumakkycowqo;
            goto ssyakyegksauyecg;
            soecauuquauiygwe:
            myisgeeiuoywsqkq:
            goto kcmaegoqmigeeocm;
            ssyakyegksauyecg:
            oweyqcyoyyygksug:
            goto gyqqkseqwwamcekm;
            sowimsawimkeyica:
            ygmuakwqewcgyyak:
            goto yuoeiemogmmokwyi;
            kgukiymugqqessso:
            if (!($wocwawaaemuoqmig == self::CON_AND)) {
                goto oiseckoawayouccm;
            }
            goto ogaeskkumaesgswm;
            wieagcysyweeycge:
            $umuecysoywoumgwo = true;
            goto cumegyygiaymmkgu;
            kcmaegoqmigeeocm:
            egqwyumakkycowqo:
            goto sowimsawimkeyica;
            wuwqskcgcqigqmwy:
            if (self::askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) {
                goto oweyqcyoyyygksug;
            }
            goto kgukiymugqqessso;
            uamcieckykeiassa:
            oiseckoawayouccm:
            goto uaamuqocgwoemyuy;
            cumegyygiaymmkgu:
            goto cqecskkymmcameiq;
            goto soecauuquauiygwe;
            gyqqkseqwwamcekm:
            if (!($wocwawaaemuoqmig == self::CON_OR)) {
                goto myisgeeiuoywsqkq;
            }
            goto wieagcysyweeycge;
            ygsyeoosakgsomim:
            goto cqecskkymmcameiq;
            goto uamcieckykeiassa;
            yuoeiemogmmokwyi:
        }
        goto yswwogckkiyakmge;
        yswwogckkiyakmge:
        cqecskkymmcameiq:
        goto yqasigyosycqcakw;
        oykogwqgowegukuw:
        $umuecysoywoumgwo = false;
        goto ieeqmayskoskaceo;
        meuomqeuiiuyqoio:
        return $umuecysoywoumgwo;
        goto euisieyykuecqwck;
        yqasigyosycqcakw:
        asmcgeacokqgagyo:
        goto meuomqeuiiuyqoio;
        euisieyykuecqwck:
    }
}
