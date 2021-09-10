<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto aykwyewykoaqwsue;
        aykwyewykoaqwsue:
        $kucumcusyyckayas = '';
        goto keaisgcucioggscy;
        ameyqkmyguiowiaw:
        foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) {
            goto wyikyuggmkgksggw;
            oeosyywsmwoqmgoe:
            muouacosiuwuwuuw:
            goto yaayyckygqkgqyii;
            mqcssiqeiqyksigg:
            if (filter_var($_SERVER[$gygawogosumsgmme], FILTER_VALIDATE_IP)) {
                goto wqawogguqkeuwwco;
            }
            goto ckuscqqcwmwuqwwq;
            ywskwwaucamaawyc:
            $kucumcusyyckayas = $_SERVER[$gygawogosumsgmme];
            goto sywyyiucyqmksgsy;
            cgigkogmiayysgsw:
            wqawogguqkeuwwco:
            goto ywskwwaucamaawyc;
            aggmmceiguesqumu:
            mgkouoausowamwao:
            goto qysooiuommggiyii;
            ckuscqqcwmwuqwwq:
            $uomewyckeuqoqocu = explode("\54", $_SERVER[$gygawogosumsgmme]);
            goto ammegqeakguswkea;
            kwuikacsegmsueag:
            goto gicokucyoymgamsk;
            goto oeosyywsmwoqmgoe;
            miscmykioiowuqye:
            aaekwqgakyuqksiw:
            goto uugmiwgkyoyyuoou;
            yoeckuuauawmacwk:
            $kucumcusyyckayas = $uomewyckeuqoqocu[0];
            goto kwuikacsegmsueag;
            yaayyckygqkgqyii:
            goto aaekwqgakyuqksiw;
            goto cgigkogmiayysgsw;
            wyikyuggmkgksggw:
            if (!(isset($_SERVER[$gygawogosumsgmme]) && $_SERVER[$gygawogosumsgmme])) {
                goto mmouukiiyowuakqq;
            }
            goto mqcssiqeiqyksigg;
            sywyyiucyqmksgsy:
            goto gicokucyoymgamsk;
            goto miscmykioiowuqye;
            ammegqeakguswkea:
            if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP))) {
                goto muouacosiuwuwuuw;
            }
            goto yoeckuuauawmacwk;
            uugmiwgkyoyyuoou:
            mmouukiiyowuakqq:
            goto aggmmceiguesqumu;
            qysooiuommggiyii:
        }
        goto giaaekwoqcgomyyq;
        ecwscogqsioyocqw:
        okkwocoyssmuuyoo:
        goto gmwuamgmokqasssm;
        giaaekwoqcgomyyq:
        gicokucyoymgamsk:
        goto ecwscogqsioyocqw;
        keaisgcucioggscy:
        if (!isset($_SERVER)) {
            goto okkwocoyssmuuyoo;
        }
        goto ksegauiqccusmigy;
        gmwuamgmokqasssm:
        return $kucumcusyyckayas;
        goto umqegggcqogkcokk;
        ksegauiqccusmigy:
        $kkeqqkkkqwkocsyu = ["\110\124\124\120\x5f\130\x5f\x52\105\x41\114\x5f\x49\x50", "\x48\x54\124\120\137\103\x4c\x49\105\x4e\124\x5f\111\x50", "\x48\x54\x54\x50\137\130\x5f\x46\117\x52\x57\101\122\x44\x45\x44\137\x46\x4f\122", "\122\x45\x4d\117\x54\105\x5f\x41\x44\104\122"];
        goto ameyqkmyguiowiaw;
        umqegggcqogkcokk:
    }
    
    public static function eoyueosccuoeqkee() : bool
    {
        global $pagenow;
        return in_array($pagenow, ["\x75\x73\145\162\x2d\x65\x64\151\x74\x2e\160\x68\160", "\165\163\145\x72\x2d\x6e\145\167\56\x70\150\160", "\160\162\x6f\x66\x69\154\x65\x2e\x70\x68\x70"]);
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
        goto iagaauogccisiowc;
        yayammcgqwyussac:
        wagmmkgiegoisgqu:
        goto mmuggiqkqocomsak;
        iagaauogccisiowc:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto esewwwsmwogmaaeu;
        }
        goto cmauoaqiueakioag;
        mkkqoygeswcakyas:
        goto wagmmkgiegoisgqu;
        goto ugaoiwqmgeqoeuwm;
        cmauoaqiueakioag:
        if ($miowmmgaiagcuyoo) {
            goto yuewiamsucauaego;
        }
        goto ucscoaceqqamsqmq;
        ugaoiwqmgeqoeuwm:
        esewwwsmwogmaaeu:
        goto weeiywiskwumocki;
        ucscoaceqqamsqmq:
        $miowmmgaiagcuyoo = ManipulateArray::get($_COOKIE, self::GUEST_ID_COOKIE);
        goto sysikmimsgsyaocu;
        mmuggiqkqocomsak:
        return $miowmmgaiagcuyoo;
        goto esieukmsekemaokw;
        weeiywiskwumocki:
        $miowmmgaiagcuyoo = self::mwikyscisascoeea();
        goto yayammcgqwyussac;
        sysikmimsgsyaocu:
        yuewiamsucauaego:
        goto mkkqoygeswcakyas;
        esieukmsekemaokw:
    }
    
    public static function mmgsuuoossqmukqg($uagwmwoawiwkycao, $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x72\x6f\154\x65" => $uagwmwoawiwkycao]);
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function get($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto icesswgseoousmqy;
        guayqmugkeqsmcqi:
        oumswckciewwywmk:
        goto wcauaaiwuuowegqw;
        yisekcgcwaimsycw:
        $mkucggyaiaukqoce = wp_get_current_user();
        goto guayqmugkeqsmcqi;
        icesswgseoousmqy:
        if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) {
            goto kcuqqgokaaiegiea;
        }
        goto ygqoqswyksigwkkk;
        mmoeyiqwcmkiyoee:
        $mkucggyaiaukqoce = null;
        goto esicggokqqaacouy;
        ymcyiqsgescgekyq:
        if (!($mkucggyaiaukqoce && !$mkucggyaiaukqoce->exists())) {
            goto miecmocqwkqmmqem;
        }
        goto mmoeyiqwcmkiyoee;
        qoyscguymwggause:
        return $mkucggyaiaukqoce;
        goto mgqgsgmkgwkiiggy;
        ygqoqswyksigwkkk:
        if (!(!$mkucggyaiaukqoce && !$cwwowqyuwccuykom)) {
            goto oumswckciewwywmk;
        }
        goto yisekcgcwaimsycw;
        uiyqmwageayouaco:
        csoeyawuamayqkuy:
        goto ymcyiqsgescgekyq;
        wcauaaiwuuowegqw:
        goto csoeyawuamayqkuy;
        goto cmiwskikykcioyiu;
        esicggokqqaacouy:
        miecmocqwkqmmqem:
        goto qoyscguymwggause;
        cmiwskikykcioyiu:
        kcuqqgokaaiegiea:
        goto uumusuoamyymaoik;
        uumusuoamyymaoik:
        $mkucggyaiaukqoce = get_userdata($mkucggyaiaukqoce);
        goto uiyqmwageayouaco;
        mgqgsgmkgwkiiggy:
    }
    
    public static function mwikyscisascoeea($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto iyyaqmomewkukisu;
        aguakwoqsmugwoak:
        eowsciskwgisqqme:
        goto scqwkakwckgyague;
        msusgccciugmiuyg:
        if ($mkucggyaiaukqoce instanceof WP_User) {
            goto uakswkgiqciauaku;
        }
        goto kaqwceweugaamoum;
        wecwqqioqyoeiuis:
        yeqiaiiuwwqoquem:
        goto msusgccciugmiuyg;
        iyyaqmomewkukisu:
        $aokagokqyuysuksm = null;
        goto qyqooykaamoaesus;
        eosimooskuwmgmos:
        $aokagokqyuysuksm = (int) $mkucggyaiaukqoce;
        goto ocqoecksgquuykge;
        kaqwceweugaamoum:
        if (!is_numeric($mkucggyaiaukqoce)) {
            goto iwsskosiceumqgie;
        }
        goto eosimooskuwmgmos;
        gsegyqscgigyukgu:
        $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0;
        goto aguakwoqsmugwoak;
        aqqemcmeecwwqsko:
        $aokagokqyuysuksm = get_current_user_id();
        goto wecwqqioqyoeiuis;
        iqgaoqmwygqmmkec:
        uakswkgiqciauaku:
        goto gsegyqscgigyukgu;
        qyqooykaamoaesus:
        if ($cwwowqyuwccuykom) {
            goto yeqiaiiuwwqoquem;
        }
        goto aqqemcmeecwwqsko;
        scqwkakwckgyague:
        return $aokagokqyuysuksm;
        goto iqqskeygigecekqu;
        kukkasywyomwmsmk:
        goto eowsciskwgisqqme;
        goto iqgaoqmwygqmmkec;
        ocqoecksgquuykge:
        iwsskosiceumqgie:
        goto kukkasywyomwmsmk;
        iqqskeygigecekqu:
    }
    
    public static function yagwwwqikmkuyicq($mcmaiqckgiuqayau = false) : array
    {
        goto cggumquuyqugeesk;
        bkywsackiuwyyusa:
        yeuuueycmgkawkaa:
        goto mqmgyqiuosmuguem;
        gmgyoacmaiewaoac:
        if (!$mcmaiqckgiuqayau) {
            goto yeuuueycmgkawkaa;
        }
        goto wmqoikukcueyiywc;
        mqmgyqiuosmuguem:
        return $uagwmwoawiwkycao;
        goto iiwackigmsuyuoqy;
        uwyyeysoawyoeyac:
        mgsqgyigiqwgugia:
        goto bkywsackiuwyyusa;
        wmqoikukcueyiywc:
        foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) {
            $uagwmwoawiwkycao[$uusmaiomayssaecw] = translate_user_role($oeucsuyqysaciasy);
            gcsicyockcquyyqa:
        }
        goto uwyyeysoawyoeyac;
        cggumquuyqugeesk:
        $uagwmwoawiwkycao = wp_roles()->get_names();
        goto gmgyoacmaiewaoac;
        iiwackigmsuyuoqy:
    }
    
    public static function askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false) : bool
    {
        goto kqysyoyoyikeeego;
        gowgawiqowowuyyu:
        $mkucggyaiaukqoce = self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom);
        goto aeowoammyqciewcg;
        ykiieasagyuguuay:
        $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles;
        goto gmcumcqkkcsoqcsc;
        aeowoammyqciewcg:
        if (!$mkucggyaiaukqoce) {
            goto moykcgeaeaykkcww;
        }
        goto ykiieasagyuguuay;
        kqysyoyoyikeeego:
        $umuecysoywoumgwo = false;
        goto gowgawiqowowuyyu;
        gmcumcqkkcsoqcsc:
        $umuecysoywoumgwo = in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao);
        goto sseimukiaykwwuik;
        sseimukiaykwwuik:
        moykcgeaeaykkcww:
        goto yaicgkaiwuygkcqa;
        yaicgkaiwuygkcqa:
        return $umuecysoywoumgwo;
        goto xaymqociikmsceme;
        xaymqociikmsceme:
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
        $ywmkwiwkosakssii["\155\x65\164\141\137\x71\165\x65\x72\x79"] = ["\162\145\154\141\164\x69\157\x6e" => "\x41\116\104", ["\153\145\171" => $uusmaiomayssaecw, "\166\x61\154\x75\x65" => $eqgoocgaqwqcimie, "\143\157\x6d\160\141\x72\x65" => $uiuykcweuosgmwki]];
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = "\x64\x69\x73\160\x6c\141\171\137\x6e\x61\x6d\145", $cwwowqyuwccuykom = false)
    {
        return ManipulateArray::get(self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom), $aiowsaccomcoikus, null);
    }
    
    public static function ogcwgigqwycqswms($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '')
    {
        return DecoratorUser::ogcwgigqwycqswms(self::mwikyscisascoeea($mkucggyaiaukqoce), $oiegiwogmwmawkeo, $ggauoeuaesiymgee, $gkykacccamuwowwc, $ywmkwiwkosakssii);
    }
    
    public static function quasyaqmmikeyoag($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64)
    {
        goto cmqaeaeeeoegqyim;
        euoqeougaweoqmeo:
        return $mowgokyeuymuwiew;
        goto aqgacyikaawcqiqm;
        umcogaoumuakucom:
        $mowgokyeuymuwiew = DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\151\x6d\x67", "\x73\x72\x63");
        goto asseeqmyqkoeaskq;
        qmyecmoeeqqoamqg:
        if (!$mowgokyeuymuwiew) {
            goto ymakgqgsskogwyws;
        }
        goto umcogaoumuakucom;
        cmqaeaeeeoegqyim:
        $mowgokyeuymuwiew = self::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo);
        goto qmyecmoeeqqoamqg;
        asseeqmyqkoeaskq:
        ymakgqgsskogwyws:
        goto euoqeougaweoqmeo;
        aqgacyikaawcqiqm:
    }
    
    public static function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = self::CON_OR) : bool
    {
        goto sowimsawimkeyica;
        ieeqmayskoskaceo:
        kcmaegoqmigeeocm:
        goto ymsywmgkoaceyeqc;
        ymsywmgkoaceyeqc:
        return $umuecysoywoumgwo;
        goto yswwogckkiyakmge;
        oykogwqgowegukuw:
        cesmsqyqkgsescge:
        goto ieeqmayskoskaceo;
        sowimsawimkeyica:
        $umuecysoywoumgwo = false;
        goto yuoeiemogmmokwyi;
        yuoeiemogmmokwyi:
        if (!is_array($uagwmwoawiwkycao)) {
            goto kcmaegoqmigeeocm;
        }
        goto asmcgeacokqgagyo;
        asmcgeacokqgagyo:
        foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) {
            goto oiseckoawayouccm;
            oiseckoawayouccm:
            if (self::askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) {
                goto ygmuakwqewcgyyak;
            }
            goto oweyqcyoyyygksug;
            oweyqcyoyyygksug:
            if (!($wocwawaaemuoqmig == self::CON_AND)) {
                goto cqecskkymmcameiq;
            }
            goto egqwyumakkycowqo;
            gyqqkseqwwamcekm:
            kkoigoyokmsgkgis:
            goto wieagcysyweeycge;
            uaamuqocgwoemyuy:
            $umuecysoywoumgwo = true;
            goto ssyakyegksauyecg;
            ssyakyegksauyecg:
            goto cesmsqyqkgsescge;
            goto gyqqkseqwwamcekm;
            wieagcysyweeycge:
            myisgeeiuoywsqkq:
            goto cumegyygiaymmkgu;
            egqwyumakkycowqo:
            $umuecysoywoumgwo = false;
            goto wuwqskcgcqigqmwy;
            ygsyeoosakgsomim:
            ygmuakwqewcgyyak:
            goto uamcieckykeiassa;
            ogaeskkumaesgswm:
            goto myisgeeiuoywsqkq;
            goto ygsyeoosakgsomim;
            cumegyygiaymmkgu:
            ikswyasesgaaguys:
            goto soecauuquauiygwe;
            uamcieckykeiassa:
            if (!($wocwawaaemuoqmig == self::CON_OR)) {
                goto kkoigoyokmsgkgis;
            }
            goto uaamuqocgwoemyuy;
            wuwqskcgcqigqmwy:
            goto cesmsqyqkgsescge;
            goto kgukiymugqqessso;
            kgukiymugqqessso:
            cqecskkymmcameiq:
            goto ogaeskkumaesgswm;
            soecauuquauiygwe:
        }
        goto oykogwqgowegukuw;
        yswwogckkiyakmge:
    }
}
