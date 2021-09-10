<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto ecwscogqsioyocqw;
        esewwwsmwogmaaeu:
        mmouukiiyowuakqq:
        goto wagmmkgiegoisgqu;
        gmwuamgmokqasssm:
        if (!isset($_SERVER)) {
            goto giaaekwoqcgomyyq;
        }
        goto umqegggcqogkcokk;
        umqegggcqogkcokk:
        $kkeqqkkkqwkocsyu = ["\110\124\x54\x50\x5f\x58\137\x52\105\x41\114\x5f\x49\x50", "\110\x54\x54\120\137\103\114\x49\105\x4e\124\x5f\x49\x50", "\110\x54\124\120\x5f\x58\x5f\x46\117\122\x57\101\122\104\105\104\x5f\106\117\122", "\122\105\115\x4f\124\105\x5f\x41\x44\x44\x52"];
        goto yuewiamsucauaego;
        yuewiamsucauaego:
        foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) {
            goto kwuikacsegmsueag;
            qysooiuommggiyii:
            $kucumcusyyckayas = $_SERVER[$gygawogosumsgmme];
            goto okkwocoyssmuuyoo;
            kwuikacsegmsueag:
            if (!(isset($_SERVER[$gygawogosumsgmme]) && $_SERVER[$gygawogosumsgmme])) {
                goto yoeckuuauawmacwk;
            }
            goto oeosyywsmwoqmgoe;
            miscmykioiowuqye:
            mqcssiqeiqyksigg:
            goto uugmiwgkyoyyuoou;
            ksegauiqccusmigy:
            wyikyuggmkgksggw:
            goto ameyqkmyguiowiaw;
            yaayyckygqkgqyii:
            $uomewyckeuqoqocu = explode("\54", $_SERVER[$gygawogosumsgmme]);
            goto cgigkogmiayysgsw;
            okkwocoyssmuuyoo:
            goto mmouukiiyowuakqq;
            goto aykwyewykoaqwsue;
            cgigkogmiayysgsw:
            if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP))) {
                goto mqcssiqeiqyksigg;
            }
            goto ywskwwaucamaawyc;
            ywskwwaucamaawyc:
            $kucumcusyyckayas = $uomewyckeuqoqocu[0];
            goto sywyyiucyqmksgsy;
            aggmmceiguesqumu:
            ckuscqqcwmwuqwwq:
            goto qysooiuommggiyii;
            oeosyywsmwoqmgoe:
            if (filter_var($_SERVER[$gygawogosumsgmme], FILTER_VALIDATE_IP)) {
                goto ckuscqqcwmwuqwwq;
            }
            goto yaayyckygqkgqyii;
            keaisgcucioggscy:
            yoeckuuauawmacwk:
            goto ksegauiqccusmigy;
            sywyyiucyqmksgsy:
            goto mmouukiiyowuakqq;
            goto miscmykioiowuqye;
            uugmiwgkyoyyuoou:
            goto ammegqeakguswkea;
            goto aggmmceiguesqumu;
            aykwyewykoaqwsue:
            ammegqeakguswkea:
            goto keaisgcucioggscy;
            ameyqkmyguiowiaw:
        }
        goto esewwwsmwogmaaeu;
        ecwscogqsioyocqw:
        $kucumcusyyckayas = '';
        goto gmwuamgmokqasssm;
        wagmmkgiegoisgqu:
        giaaekwoqcgomyyq:
        goto iagaauogccisiowc;
        iagaauogccisiowc:
        return $kucumcusyyckayas;
        goto cmauoaqiueakioag;
        cmauoaqiueakioag:
    }
    
    public static function eoyueosccuoeqkee() : bool
    {
        global $pagenow;
        return in_array($pagenow, ["\165\163\x65\x72\55\145\144\x69\x74\56\x70\150\160", "\x75\x73\x65\162\x2d\156\x65\x77\56\160\x68\160", "\x70\162\x6f\x66\151\x6c\145\56\160\x68\x70"]);
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
        goto ugaoiwqmgeqoeuwm;
        esieukmsekemaokw:
        goto mkkqoygeswcakyas;
        goto oumswckciewwywmk;
        miecmocqwkqmmqem:
        return $miowmmgaiagcuyoo;
        goto icesswgseoousmqy;
        kcuqqgokaaiegiea:
        $miowmmgaiagcuyoo = self::mwikyscisascoeea();
        goto csoeyawuamayqkuy;
        oumswckciewwywmk:
        sysikmimsgsyaocu:
        goto kcuqqgokaaiegiea;
        ugaoiwqmgeqoeuwm:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto sysikmimsgsyaocu;
        }
        goto weeiywiskwumocki;
        csoeyawuamayqkuy:
        mkkqoygeswcakyas:
        goto miecmocqwkqmmqem;
        weeiywiskwumocki:
        if ($miowmmgaiagcuyoo) {
            goto ucscoaceqqamsqmq;
        }
        goto yayammcgqwyussac;
        mmuggiqkqocomsak:
        ucscoaceqqamsqmq:
        goto esieukmsekemaokw;
        yayammcgqwyussac:
        $miowmmgaiagcuyoo = ManipulateArray::get($_COOKIE, self::GUEST_ID_COOKIE);
        goto mmuggiqkqocomsak;
        icesswgseoousmqy:
    }
    
    public static function mmgsuuoossqmukqg($uagwmwoawiwkycao, $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x72\x6f\x6c\145" => $uagwmwoawiwkycao]);
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function get($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto cmiwskikykcioyiu;
        qoyscguymwggause:
        $mkucggyaiaukqoce = get_userdata($mkucggyaiaukqoce);
        goto mgqgsgmkgwkiiggy;
        ymcyiqsgescgekyq:
        ygqoqswyksigwkkk:
        goto mmoeyiqwcmkiyoee;
        cmiwskikykcioyiu:
        if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) {
            goto yisekcgcwaimsycw;
        }
        goto uumusuoamyymaoik;
        eowsciskwgisqqme:
        return $mkucggyaiaukqoce;
        goto iyyaqmomewkukisu;
        esicggokqqaacouy:
        yisekcgcwaimsycw:
        goto qoyscguymwggause;
        mmoeyiqwcmkiyoee:
        goto guayqmugkeqsmcqi;
        goto esicggokqqaacouy;
        uiyqmwageayouaco:
        $mkucggyaiaukqoce = wp_get_current_user();
        goto ymcyiqsgescgekyq;
        uumusuoamyymaoik:
        if (!(!$mkucggyaiaukqoce && !$cwwowqyuwccuykom)) {
            goto ygqoqswyksigwkkk;
        }
        goto uiyqmwageayouaco;
        iwsskosiceumqgie:
        $mkucggyaiaukqoce = null;
        goto uakswkgiqciauaku;
        mgqgsgmkgwkiiggy:
        guayqmugkeqsmcqi:
        goto yeqiaiiuwwqoquem;
        yeqiaiiuwwqoquem:
        if (!($mkucggyaiaukqoce && !$mkucggyaiaukqoce->exists())) {
            goto wcauaaiwuuowegqw;
        }
        goto iwsskosiceumqgie;
        uakswkgiqciauaku:
        wcauaaiwuuowegqw:
        goto eowsciskwgisqqme;
        iyyaqmomewkukisu:
    }
    
    public static function mwikyscisascoeea($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto kaqwceweugaamoum;
        gsegyqscgigyukgu:
        if (!is_numeric($mkucggyaiaukqoce)) {
            goto aqqemcmeecwwqsko;
        }
        goto aguakwoqsmugwoak;
        scqwkakwckgyague:
        aqqemcmeecwwqsko:
        goto iqqskeygigecekqu;
        cggumquuyqugeesk:
        return $aokagokqyuysuksm;
        goto gmgyoacmaiewaoac;
        yeuuueycmgkawkaa:
        msusgccciugmiuyg:
        goto cggumquuyqugeesk;
        eosimooskuwmgmos:
        if ($cwwowqyuwccuykom) {
            goto qyqooykaamoaesus;
        }
        goto ocqoecksgquuykge;
        ocqoecksgquuykge:
        $aokagokqyuysuksm = get_current_user_id();
        goto kukkasywyomwmsmk;
        aguakwoqsmugwoak:
        $aokagokqyuysuksm = (int) $mkucggyaiaukqoce;
        goto scqwkakwckgyague;
        gcsicyockcquyyqa:
        $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0;
        goto yeuuueycmgkawkaa;
        mgsqgyigiqwgugia:
        wecwqqioqyoeiuis:
        goto gcsicyockcquyyqa;
        kukkasywyomwmsmk:
        qyqooykaamoaesus:
        goto iqgaoqmwygqmmkec;
        kaqwceweugaamoum:
        $aokagokqyuysuksm = null;
        goto eosimooskuwmgmos;
        iqqskeygigecekqu:
        goto msusgccciugmiuyg;
        goto mgsqgyigiqwgugia;
        iqgaoqmwygqmmkec:
        if ($mkucggyaiaukqoce instanceof WP_User) {
            goto wecwqqioqyoeiuis;
        }
        goto gsegyqscgigyukgu;
        gmgyoacmaiewaoac:
    }
    
    public static function yagwwwqikmkuyicq($mcmaiqckgiuqayau = false) : array
    {
        goto mqmgyqiuosmuguem;
        iiwackigmsuyuoqy:
        if (!$mcmaiqckgiuqayau) {
            goto bkywsackiuwyyusa;
        }
        goto moykcgeaeaykkcww;
        mqmgyqiuosmuguem:
        $uagwmwoawiwkycao = wp_roles()->get_names();
        goto iiwackigmsuyuoqy;
        aeowoammyqciewcg:
        return $uagwmwoawiwkycao;
        goto ykiieasagyuguuay;
        gowgawiqowowuyyu:
        bkywsackiuwyyusa:
        goto aeowoammyqciewcg;
        kqysyoyoyikeeego:
        wmqoikukcueyiywc:
        goto gowgawiqowowuyyu;
        moykcgeaeaykkcww:
        foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) {
            $uagwmwoawiwkycao[$uusmaiomayssaecw] = translate_user_role($oeucsuyqysaciasy);
            uwyyeysoawyoeyac:
        }
        goto kqysyoyoyikeeego;
        ykiieasagyuguuay:
    }
    
    public static function askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false) : bool
    {
        goto sseimukiaykwwuik;
        cmqaeaeeeoegqyim:
        $umuecysoywoumgwo = in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao);
        goto qmyecmoeeqqoamqg;
        xaymqociikmsceme:
        if (!$mkucggyaiaukqoce) {
            goto gmcumcqkkcsoqcsc;
        }
        goto ymakgqgsskogwyws;
        yaicgkaiwuygkcqa:
        $mkucggyaiaukqoce = self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom);
        goto xaymqociikmsceme;
        qmyecmoeeqqoamqg:
        gmcumcqkkcsoqcsc:
        goto umcogaoumuakucom;
        ymakgqgsskogwyws:
        $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles;
        goto cmqaeaeeeoegqyim;
        sseimukiaykwwuik:
        $umuecysoywoumgwo = false;
        goto yaicgkaiwuygkcqa;
        umcogaoumuakucom:
        return $umuecysoywoumgwo;
        goto asseeqmyqkoeaskq;
        asseeqmyqkoeaskq:
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
        $ywmkwiwkosakssii["\155\x65\x74\141\x5f\x71\165\145\x72\x79"] = ["\x72\x65\x6c\141\x74\151\x6f\156" => "\101\116\x44", ["\x6b\145\171" => $uusmaiomayssaecw, "\x76\x61\x6c\x75\145" => $eqgoocgaqwqcimie, "\143\x6f\155\160\x61\x72\145" => $uiuykcweuosgmwki]];
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = "\144\x69\x73\x70\x6c\141\x79\137\156\141\x6d\x65", $cwwowqyuwccuykom = false)
    {
        return ManipulateArray::get(self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom), $aiowsaccomcoikus, null);
    }
    
    public static function ogcwgigqwycqswms($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '')
    {
        return DecoratorUser::ogcwgigqwycqswms(self::mwikyscisascoeea($mkucggyaiaukqoce), $oiegiwogmwmawkeo, $ggauoeuaesiymgee, $gkykacccamuwowwc, $ywmkwiwkosakssii);
    }
    
    public static function quasyaqmmikeyoag($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64)
    {
        goto aqgacyikaawcqiqm;
        cesmsqyqkgsescge:
        if (!$mowgokyeuymuwiew) {
            goto euoqeougaweoqmeo;
        }
        goto ikswyasesgaaguys;
        ikswyasesgaaguys:
        $mowgokyeuymuwiew = DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\x69\x6d\147", "\163\162\x63");
        goto kkoigoyokmsgkgis;
        kkoigoyokmsgkgis:
        euoqeougaweoqmeo:
        goto cqecskkymmcameiq;
        aqgacyikaawcqiqm:
        $mowgokyeuymuwiew = self::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo);
        goto cesmsqyqkgsescge;
        cqecskkymmcameiq:
        return $mowgokyeuymuwiew;
        goto ygmuakwqewcgyyak;
        ygmuakwqewcgyyak:
    }
    
    public static function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = self::CON_OR) : bool
    {
        goto ymsywmgkoaceyeqc;
        yqasigyosycqcakw:
        foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) {
            goto ogaeskkumaesgswm;
            gyqqkseqwwamcekm:
            goto kgukiymugqqessso;
            goto wieagcysyweeycge;
            soecauuquauiygwe:
            $umuecysoywoumgwo = true;
            goto kcmaegoqmigeeocm;
            sowimsawimkeyica:
            oweyqcyoyyygksug:
            goto yuoeiemogmmokwyi;
            ygsyeoosakgsomim:
            if (!($wocwawaaemuoqmig == self::CON_AND)) {
                goto egqwyumakkycowqo;
            }
            goto uamcieckykeiassa;
            ogaeskkumaesgswm:
            if (self::askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) {
                goto wuwqskcgcqigqmwy;
            }
            goto ygsyeoosakgsomim;
            uaamuqocgwoemyuy:
            goto myisgeeiuoywsqkq;
            goto ssyakyegksauyecg;
            yuoeiemogmmokwyi:
            kgukiymugqqessso:
            goto asmcgeacokqgagyo;
            asmcgeacokqgagyo:
            oiseckoawayouccm:
            goto oykogwqgowegukuw;
            wieagcysyweeycge:
            wuwqskcgcqigqmwy:
            goto cumegyygiaymmkgu;
            cumegyygiaymmkgu:
            if (!($wocwawaaemuoqmig == self::CON_OR)) {
                goto oweyqcyoyyygksug;
            }
            goto soecauuquauiygwe;
            uamcieckykeiassa:
            $umuecysoywoumgwo = false;
            goto uaamuqocgwoemyuy;
            kcmaegoqmigeeocm:
            goto myisgeeiuoywsqkq;
            goto sowimsawimkeyica;
            ssyakyegksauyecg:
            egqwyumakkycowqo:
            goto gyqqkseqwwamcekm;
            oykogwqgowegukuw:
        }
        goto meuomqeuiiuyqoio;
        ymsywmgkoaceyeqc:
        $umuecysoywoumgwo = false;
        goto yswwogckkiyakmge;
        yswwogckkiyakmge:
        if (!is_array($uagwmwoawiwkycao)) {
            goto ieeqmayskoskaceo;
        }
        goto yqasigyosycqcakw;
        euisieyykuecqwck:
        ieeqmayskoskaceo:
        goto qioesoiiiwmqiyuw;
        qioesoiiiwmqiyuw:
        return $umuecysoywoumgwo;
        goto uwuaawwasggkossk;
        meuomqeuiiuyqoio:
        myisgeeiuoywsqkq:
        goto euisieyykuecqwck;
        uwuaawwasggkossk:
    }
}
