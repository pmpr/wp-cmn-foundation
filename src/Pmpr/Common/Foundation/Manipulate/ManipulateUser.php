<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        esewwwsmwogmaaeu:
        ameyqkmyguiowiaw:
        goto wagmmkgiegoisgqu;
        gmwuamgmokqasssm:
        $kkeqqkkkqwkocsyu = ["\x48\x54\124\120\137\130\x5f\x52\105\x41\x4c\137\111\120", "\110\x54\124\x50\x5f\103\x4c\x49\x45\116\x54\x5f\111\120", "\x48\x54\x54\120\137\x58\137\106\x4f\122\x57\101\122\x44\x45\104\137\106\117\122", "\x52\105\x4d\117\124\105\137\101\x44\x44\x52"];
        goto umqegggcqogkcokk;
        umqegggcqogkcokk:
        foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) {
            goto yoeckuuauawmacwk;
            aggmmceiguesqumu:
            $kucumcusyyckayas = $_SERVER[$gygawogosumsgmme];
            goto qysooiuommggiyii;
            oeosyywsmwoqmgoe:
            $uomewyckeuqoqocu = explode("\x2c", $_SERVER[$gygawogosumsgmme]);
            goto yaayyckygqkgqyii;
            yaayyckygqkgqyii:
            if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP))) {
                goto wyikyuggmkgksggw;
            }
            goto cgigkogmiayysgsw;
            yoeckuuauawmacwk:
            if (!(isset($_SERVER[$gygawogosumsgmme]) && $_SERVER[$gygawogosumsgmme])) {
                goto ammegqeakguswkea;
            }
            goto kwuikacsegmsueag;
            aykwyewykoaqwsue:
            ammegqeakguswkea:
            goto keaisgcucioggscy;
            keaisgcucioggscy:
            mmouukiiyowuakqq:
            goto ksegauiqccusmigy;
            ywskwwaucamaawyc:
            goto aaekwqgakyuqksiw;
            goto sywyyiucyqmksgsy;
            okkwocoyssmuuyoo:
            ckuscqqcwmwuqwwq:
            goto aykwyewykoaqwsue;
            miscmykioiowuqye:
            goto ckuscqqcwmwuqwwq;
            goto uugmiwgkyoyyuoou;
            cgigkogmiayysgsw:
            $kucumcusyyckayas = $uomewyckeuqoqocu[0];
            goto ywskwwaucamaawyc;
            sywyyiucyqmksgsy:
            wyikyuggmkgksggw:
            goto miscmykioiowuqye;
            kwuikacsegmsueag:
            if (filter_var($_SERVER[$gygawogosumsgmme], FILTER_VALIDATE_IP)) {
                goto mqcssiqeiqyksigg;
            }
            goto oeosyywsmwoqmgoe;
            qysooiuommggiyii:
            goto aaekwqgakyuqksiw;
            goto okkwocoyssmuuyoo;
            uugmiwgkyoyyuoou:
            mqcssiqeiqyksigg:
            goto aggmmceiguesqumu;
            ksegauiqccusmigy:
        }
        goto yuewiamsucauaego;
        wagmmkgiegoisgqu:
        return $kucumcusyyckayas;
        goto iagaauogccisiowc;
        giaaekwoqcgomyyq:
        $kucumcusyyckayas = '';
        goto ecwscogqsioyocqw;
        yuewiamsucauaego:
        aaekwqgakyuqksiw:
        goto esewwwsmwogmaaeu;
        iagaauogccisiowc:
    }
    
    public static function eoyueosccuoeqkee() : bool
    {
        global $pagenow;
        return in_array($pagenow, ["\x75\x73\145\x72\x2d\x65\144\151\164\x2e\x70\150\160", "\x75\163\145\162\55\156\145\167\x2e\160\150\160", "\x70\162\x6f\x66\151\154\x65\56\160\x68\160"]);
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
        csoeyawuamayqkuy:
        return $miowmmgaiagcuyoo;
        goto miecmocqwkqmmqem;
        ugaoiwqmgeqoeuwm:
        if ($miowmmgaiagcuyoo) {
            goto cmauoaqiueakioag;
        }
        goto weeiywiskwumocki;
        mmuggiqkqocomsak:
        goto sysikmimsgsyaocu;
        goto esieukmsekemaokw;
        mkkqoygeswcakyas:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ucscoaceqqamsqmq;
        }
        goto ugaoiwqmgeqoeuwm;
        yayammcgqwyussac:
        cmauoaqiueakioag:
        goto mmuggiqkqocomsak;
        oumswckciewwywmk:
        $miowmmgaiagcuyoo = self::mwikyscisascoeea();
        goto kcuqqgokaaiegiea;
        weeiywiskwumocki:
        $miowmmgaiagcuyoo = ManipulateArray::get($_COOKIE, self::GUEST_ID_COOKIE);
        goto yayammcgqwyussac;
        esieukmsekemaokw:
        ucscoaceqqamsqmq:
        goto oumswckciewwywmk;
        kcuqqgokaaiegiea:
        sysikmimsgsyaocu:
        goto csoeyawuamayqkuy;
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
        qoyscguymwggause:
        yisekcgcwaimsycw:
        goto mgqgsgmkgwkiiggy;
        uakswkgiqciauaku:
        return $mkucggyaiaukqoce;
        goto eowsciskwgisqqme;
        wcauaaiwuuowegqw:
        if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) {
            goto ygqoqswyksigwkkk;
        }
        goto cmiwskikykcioyiu;
        yeqiaiiuwwqoquem:
        $mkucggyaiaukqoce = null;
        goto iwsskosiceumqgie;
        mmoeyiqwcmkiyoee:
        ygqoqswyksigwkkk:
        goto esicggokqqaacouy;
        iwsskosiceumqgie:
        guayqmugkeqsmcqi:
        goto uakswkgiqciauaku;
        uumusuoamyymaoik:
        $mkucggyaiaukqoce = wp_get_current_user();
        goto uiyqmwageayouaco;
        cmiwskikykcioyiu:
        if (!(!$mkucggyaiaukqoce && !$cwwowqyuwccuykom)) {
            goto icesswgseoousmqy;
        }
        goto uumusuoamyymaoik;
        esicggokqqaacouy:
        $mkucggyaiaukqoce = get_userdata($mkucggyaiaukqoce);
        goto qoyscguymwggause;
        ymcyiqsgescgekyq:
        goto yisekcgcwaimsycw;
        goto mmoeyiqwcmkiyoee;
        uiyqmwageayouaco:
        icesswgseoousmqy:
        goto ymcyiqsgescgekyq;
        mgqgsgmkgwkiiggy:
        if (!($mkucggyaiaukqoce && !$mkucggyaiaukqoce->exists())) {
            goto guayqmugkeqsmcqi;
        }
        goto yeqiaiiuwwqoquem;
        eowsciskwgisqqme:
    }
    
    public static function mwikyscisascoeea($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto msusgccciugmiuyg;
        iqqskeygigecekqu:
        aqqemcmeecwwqsko:
        goto mgsqgyigiqwgugia;
        kukkasywyomwmsmk:
        if ($mkucggyaiaukqoce instanceof WP_User) {
            goto aqqemcmeecwwqsko;
        }
        goto iqgaoqmwygqmmkec;
        kaqwceweugaamoum:
        if ($cwwowqyuwccuykom) {
            goto iyyaqmomewkukisu;
        }
        goto eosimooskuwmgmos;
        gsegyqscgigyukgu:
        $aokagokqyuysuksm = (int) $mkucggyaiaukqoce;
        goto aguakwoqsmugwoak;
        msusgccciugmiuyg:
        $aokagokqyuysuksm = null;
        goto kaqwceweugaamoum;
        ocqoecksgquuykge:
        iyyaqmomewkukisu:
        goto kukkasywyomwmsmk;
        iqgaoqmwygqmmkec:
        if (!is_numeric($mkucggyaiaukqoce)) {
            goto qyqooykaamoaesus;
        }
        goto gsegyqscgigyukgu;
        eosimooskuwmgmos:
        $aokagokqyuysuksm = get_current_user_id();
        goto ocqoecksgquuykge;
        gcsicyockcquyyqa:
        wecwqqioqyoeiuis:
        goto yeuuueycmgkawkaa;
        yeuuueycmgkawkaa:
        return $aokagokqyuysuksm;
        goto cggumquuyqugeesk;
        aguakwoqsmugwoak:
        qyqooykaamoaesus:
        goto scqwkakwckgyague;
        scqwkakwckgyague:
        goto wecwqqioqyoeiuis;
        goto iqqskeygigecekqu;
        mgsqgyigiqwgugia:
        $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0;
        goto gcsicyockcquyyqa;
        cggumquuyqugeesk:
    }
    
    public static function yagwwwqikmkuyicq($mcmaiqckgiuqayau = false) : array
    {
        goto bkywsackiuwyyusa;
        gowgawiqowowuyyu:
        return $uagwmwoawiwkycao;
        goto aeowoammyqciewcg;
        mqmgyqiuosmuguem:
        if (!$mcmaiqckgiuqayau) {
            goto uwyyeysoawyoeyac;
        }
        goto iiwackigmsuyuoqy;
        bkywsackiuwyyusa:
        $uagwmwoawiwkycao = wp_roles()->get_names();
        goto mqmgyqiuosmuguem;
        moykcgeaeaykkcww:
        gmgyoacmaiewaoac:
        goto kqysyoyoyikeeego;
        iiwackigmsuyuoqy:
        foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) {
            $uagwmwoawiwkycao[$uusmaiomayssaecw] = translate_user_role($oeucsuyqysaciasy);
            wmqoikukcueyiywc:
        }
        goto moykcgeaeaykkcww;
        kqysyoyoyikeeego:
        uwyyeysoawyoeyac:
        goto gowgawiqowowuyyu;
        aeowoammyqciewcg:
    }
    
    public static function askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false) : bool
    {
        goto gmcumcqkkcsoqcsc;
        gmcumcqkkcsoqcsc:
        $umuecysoywoumgwo = false;
        goto sseimukiaykwwuik;
        qmyecmoeeqqoamqg:
        return $umuecysoywoumgwo;
        goto umcogaoumuakucom;
        xaymqociikmsceme:
        $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles;
        goto ymakgqgsskogwyws;
        sseimukiaykwwuik:
        $mkucggyaiaukqoce = self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom);
        goto yaicgkaiwuygkcqa;
        ymakgqgsskogwyws:
        $umuecysoywoumgwo = in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao);
        goto cmqaeaeeeoegqyim;
        cmqaeaeeeoegqyim:
        ykiieasagyuguuay:
        goto qmyecmoeeqqoamqg;
        yaicgkaiwuygkcqa:
        if (!$mkucggyaiaukqoce) {
            goto ykiieasagyuguuay;
        }
        goto xaymqociikmsceme;
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
        $ywmkwiwkosakssii["\x6d\x65\164\x61\137\161\165\x65\162\x79"] = ["\x72\x65\154\141\x74\151\x6f\x6e" => "\101\116\x44", ["\x6b\x65\171" => $uusmaiomayssaecw, "\x76\141\154\165\x65" => $eqgoocgaqwqcimie, "\x63\157\155\x70\x61\x72\145" => $uiuykcweuosgmwki]];
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = "\x64\151\x73\x70\x6c\141\171\x5f\x6e\x61\155\145", $cwwowqyuwccuykom = false)
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
        euoqeougaweoqmeo:
        $mowgokyeuymuwiew = self::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo);
        goto aqgacyikaawcqiqm;
        kkoigoyokmsgkgis:
        return $mowgokyeuymuwiew;
        goto cqecskkymmcameiq;
        cesmsqyqkgsescge:
        $mowgokyeuymuwiew = DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\x69\x6d\x67", "\x73\162\x63");
        goto ikswyasesgaaguys;
        aqgacyikaawcqiqm:
        if (!$mowgokyeuymuwiew) {
            goto asseeqmyqkoeaskq;
        }
        goto cesmsqyqkgsescge;
        ikswyasesgaaguys:
        asseeqmyqkoeaskq:
        goto kkoigoyokmsgkgis;
        cqecskkymmcameiq:
    }
    
    public static function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = self::CON_OR) : bool
    {
        goto ieeqmayskoskaceo;
        euisieyykuecqwck:
        return $umuecysoywoumgwo;
        goto qioesoiiiwmqiyuw;
        meuomqeuiiuyqoio:
        oykogwqgowegukuw:
        goto euisieyykuecqwck;
        ieeqmayskoskaceo:
        $umuecysoywoumgwo = false;
        goto ymsywmgkoaceyeqc;
        ymsywmgkoaceyeqc:
        if (!is_array($uagwmwoawiwkycao)) {
            goto oykogwqgowegukuw;
        }
        goto yswwogckkiyakmge;
        yswwogckkiyakmge:
        foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) {
            goto kgukiymugqqessso;
            ssyakyegksauyecg:
            goto wuwqskcgcqigqmwy;
            goto gyqqkseqwwamcekm;
            kgukiymugqqessso:
            if (self::askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) {
                goto egqwyumakkycowqo;
            }
            goto ogaeskkumaesgswm;
            ogaeskkumaesgswm:
            if (!($wocwawaaemuoqmig == self::CON_AND)) {
                goto oweyqcyoyyygksug;
            }
            goto ygsyeoosakgsomim;
            yuoeiemogmmokwyi:
            myisgeeiuoywsqkq:
            goto asmcgeacokqgagyo;
            soecauuquauiygwe:
            goto ygmuakwqewcgyyak;
            goto kcmaegoqmigeeocm;
            cumegyygiaymmkgu:
            $umuecysoywoumgwo = true;
            goto soecauuquauiygwe;
            ygsyeoosakgsomim:
            $umuecysoywoumgwo = false;
            goto uamcieckykeiassa;
            uamcieckykeiassa:
            goto ygmuakwqewcgyyak;
            goto uaamuqocgwoemyuy;
            kcmaegoqmigeeocm:
            oiseckoawayouccm:
            goto sowimsawimkeyica;
            sowimsawimkeyica:
            wuwqskcgcqigqmwy:
            goto yuoeiemogmmokwyi;
            gyqqkseqwwamcekm:
            egqwyumakkycowqo:
            goto wieagcysyweeycge;
            uaamuqocgwoemyuy:
            oweyqcyoyyygksug:
            goto ssyakyegksauyecg;
            wieagcysyweeycge:
            if (!($wocwawaaemuoqmig == self::CON_OR)) {
                goto oiseckoawayouccm;
            }
            goto cumegyygiaymmkgu;
            asmcgeacokqgagyo:
        }
        goto yqasigyosycqcakw;
        yqasigyosycqcakw:
        ygmuakwqewcgyyak:
        goto meuomqeuiiuyqoio;
        qioesoiiiwmqiyuw:
    }
}
