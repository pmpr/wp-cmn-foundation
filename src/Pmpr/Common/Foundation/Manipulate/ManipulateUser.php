<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto oykummqcycwokuom;
        oykummqcycwokuom:
        $kucumcusyyckayas = '';
        goto mwuameigiiakaiqe;
        suiouugyumesaygg:
        return $kucumcusyyckayas;
        goto oakomkeqcyuaqokm;
        qyswguyoqgguowyq:
        $kkeqqkkkqwkocsyu = ["\110\x54\124\x50\x5f\x58\137\122\105\x41\x4c\x5f\x49\120", "\x48\124\x54\120\137\103\x4c\x49\x45\116\x54\137\x49\120", "\x48\x54\124\120\137\x58\137\106\117\x52\x57\101\122\x44\105\104\137\x46\x4f\122", "\122\105\x4d\117\x54\x45\x5f\101\x44\104\122"];
        goto wqsgwqcuuyiyuiwm;
        mwuameigiiakaiqe:
        if (!isset($_SERVER)) {
            goto myqicooemskyowwo;
        }
        goto qyswguyoqgguowyq;
        iyymysocsksaymcw:
        qosqggucoyecammk:
        goto sikwgikycyywqoku;
        sikwgikycyywqoku:
        myqicooemskyowwo:
        goto suiouugyumesaygg;
        wqsgwqcuuyiyuiwm:
        foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) {
            goto oskmamuaiuwqoccm;
            uwguqssakkskimgc:
            smoayisommmsocyi:
            goto uykmsoymsgyogwwq;
            oskmamuaiuwqoccm:
            if (!(isset($_SERVER[$gygawogosumsgmme]) && $_SERVER[$gygawogosumsgmme])) {
                goto kogsyuyqogkkmcck;
            }
            goto qyckymugmiwwisac;
            ckmwoiaeywmqiusm:
            $kucumcusyyckayas = $uomewyckeuqoqocu[0];
            goto esouqccquycuauui;
            wgkyuuayyqyioyio:
            if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP))) {
                goto cwoowgkuyggockga;
            }
            goto ckmwoiaeywmqiusm;
            umoqwwiawmwgwcwk:
            wsqmeeooqyqgcase:
            goto keaoguqysqeakuuw;
            aeomsgmoeaymqqks:
            $uomewyckeuqoqocu = explode("\54", $_SERVER[$gygawogosumsgmme]);
            goto wgkyuuayyqyioyio;
            eoccgqmqaqsgkioo:
            $kucumcusyyckayas = $_SERVER[$gygawogosumsgmme];
            goto imigkkksiqykegqw;
            qyckymugmiwwisac:
            if (filter_var($_SERVER[$gygawogosumsgmme], FILTER_VALIDATE_IP)) {
                goto iqgekgmcqskeqeui;
            }
            goto aeomsgmoeaymqqks;
            aaoieagyoscgaoyo:
            iqgekgmcqskeqeui:
            goto eoccgqmqaqsgkioo;
            imigkkksiqykegqw:
            goto qosqggucoyecammk;
            goto umoqwwiawmwgwcwk;
            koqkucsuqusigusk:
            cwoowgkuyggockga:
            goto moukawoweqcqqgoo;
            keaoguqysqeakuuw:
            kogsyuyqogkkmcck:
            goto uwguqssakkskimgc;
            esouqccquycuauui:
            goto qosqggucoyecammk;
            goto koqkucsuqusigusk;
            moukawoweqcqqgoo:
            goto wsqmeeooqyqgcase;
            goto aaoieagyoscgaoyo;
            uykmsoymsgyogwwq:
        }
        goto iyymysocsksaymcw;
        oakomkeqcyuaqokm:
    }
    
    public static function eoyueosccuoeqkee() : bool
    {
        global $pagenow;
        return in_array($pagenow, ["\165\163\x65\x72\x2d\x65\x64\x69\x74\x2e\x70\150\160", "\165\163\145\x72\x2d\156\x65\167\x2e\160\x68\160", "\x70\162\x6f\x66\151\154\145\56\x70\150\x70"]);
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
        goto cosqkmeaakcgmmes;
        wuoksymuccgysyga:
        kokumwwakoeyweim:
        goto oqoisoqeimseysui;
        cosqkmeaakcgmmes:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto oeccqeskekmescas;
        }
        goto guwmiweiiaqyyqya;
        guwmiweiiaqyyqya:
        if ($miowmmgaiagcuyoo) {
            goto sqkuogoqqegcmoiu;
        }
        goto cqkamaqkkqyyeekm;
        cqkamaqkkqyyeekm:
        $miowmmgaiagcuyoo = ManipulateArray::get($_COOKIE, self::GUEST_ID_COOKIE);
        goto wuaoscmkkyikogui;
        kmyoumwgeikqucuy:
        $miowmmgaiagcuyoo = self::mwikyscisascoeea();
        goto wuoksymuccgysyga;
        qugegoaoegyagice:
        oeccqeskekmescas:
        goto kmyoumwgeikqucuy;
        gqiuoieqsyegogiq:
        goto kokumwwakoeyweim;
        goto qugegoaoegyagice;
        wuaoscmkkyikogui:
        sqkuogoqqegcmoiu:
        goto gqiuoieqsyegogiq;
        oqoisoqeimseysui:
        return $miowmmgaiagcuyoo;
        goto kgkisuewqiykekkm;
        kgkisuewqiykekkm:
    }
    
    public static function mmgsuuoossqmukqg($uagwmwoawiwkycao, $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\162\157\x6c\x65" => $uagwmwoawiwkycao]);
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function get($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto igwqkcqgscwckiuk;
        soskiwqicumascii:
        geusmeaowwsycmuc:
        goto mcqousgoosgkwymi;
        oweuewiycuqueioi:
        $mkucggyaiaukqoce = null;
        goto eoguuwgwkauemioy;
        cmumiaooyqwsmeuo:
        qiugceckoaiawsoi:
        goto lmguwygiwkqsssgg;
        aaauiqoqqegqooay:
        ssoseykuwegsmyum:
        goto ccgouqosggeqqywe;
        lmguwygiwkqsssgg:
        goto ssoseykuwegsmyum;
        goto soskiwqicumascii;
        igwqkcqgscwckiuk:
        if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) {
            goto geusmeaowwsycmuc;
        }
        goto cyomuiwaiksgqyis;
        cyomuiwaiksgqyis:
        if (!(!$mkucggyaiaukqoce && !$cwwowqyuwccuykom)) {
            goto qiugceckoaiawsoi;
        }
        goto imkwkuoumqqysmmo;
        imkwkuoumqqysmmo:
        $mkucggyaiaukqoce = wp_get_current_user();
        goto cmumiaooyqwsmeuo;
        ccgouqosggeqqywe:
        if (!($mkucggyaiaukqoce && !$mkucggyaiaukqoce->exists())) {
            goto mwqsossoseygkwmy;
        }
        goto oweuewiycuqueioi;
        mcqousgoosgkwymi:
        $mkucggyaiaukqoce = get_userdata($mkucggyaiaukqoce);
        goto aaauiqoqqegqooay;
        sauuoosgewomwsiy:
        return $mkucggyaiaukqoce;
        goto miaesquumiwuikow;
        eoguuwgwkauemioy:
        mwqsossoseygkwmy:
        goto sauuoosgewomwsiy;
        miaesquumiwuikow:
    }
    
    public static function mwikyscisascoeea($mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false)
    {
        goto auugmgyeukqkoecc;
        wyikyuggmkgksggw:
        ckygqsyqoiuiqqgs:
        goto mqcssiqeiqyksigg;
        mqcssiqeiqyksigg:
        return $aokagokqyuysuksm;
        goto ckuscqqcwmwuqwwq;
        gicokucyoymgamsk:
        if (!is_numeric($mkucggyaiaukqoce)) {
            goto qgsuysqmamgkcamg;
        }
        goto mgkouoausowamwao;
        wqawogguqkeuwwco:
        goto ckygqsyqoiuiqqgs;
        goto aaekwqgakyuqksiw;
        auugmgyeukqkoecc:
        $aokagokqyuysuksm = null;
        goto geeygkawayuqsesa;
        geeygkawayuqsesa:
        if ($cwwowqyuwccuykom) {
            goto gocakccykoiugocw;
        }
        goto oeeaiusewwccaeca;
        muouacosiuwuwuuw:
        qgsuysqmamgkcamg:
        goto wqawogguqkeuwwco;
        wemsokoqyyyiemio:
        if ($mkucggyaiaukqoce instanceof WP_User) {
            goto ioyquegiawkuegmw;
        }
        goto gicokucyoymgamsk;
        oeeaiusewwccaeca:
        $aokagokqyuysuksm = get_current_user_id();
        goto oamcwqaceqmoiimo;
        oamcwqaceqmoiimo:
        gocakccykoiugocw:
        goto wemsokoqyyyiemio;
        mmouukiiyowuakqq:
        $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0;
        goto wyikyuggmkgksggw;
        mgkouoausowamwao:
        $aokagokqyuysuksm = (int) $mkucggyaiaukqoce;
        goto muouacosiuwuwuuw;
        aaekwqgakyuqksiw:
        ioyquegiawkuegmw:
        goto mmouukiiyowuakqq;
        ckuscqqcwmwuqwwq:
    }
    
    public static function yagwwwqikmkuyicq($mcmaiqckgiuqayau = false) : array
    {
        goto oeosyywsmwoqmgoe;
        cgigkogmiayysgsw:
        foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) {
            $uagwmwoawiwkycao[$uusmaiomayssaecw] = translate_user_role($oeucsuyqysaciasy);
            yoeckuuauawmacwk:
        }
        goto ywskwwaucamaawyc;
        oeosyywsmwoqmgoe:
        $uagwmwoawiwkycao = wp_roles()->get_names();
        goto yaayyckygqkgqyii;
        sywyyiucyqmksgsy:
        kwuikacsegmsueag:
        goto miscmykioiowuqye;
        miscmykioiowuqye:
        return $uagwmwoawiwkycao;
        goto uugmiwgkyoyyuoou;
        ywskwwaucamaawyc:
        ammegqeakguswkea:
        goto sywyyiucyqmksgsy;
        yaayyckygqkgqyii:
        if (!$mcmaiqckgiuqayau) {
            goto kwuikacsegmsueag;
        }
        goto cgigkogmiayysgsw;
        uugmiwgkyoyyuoou:
    }
    
    public static function askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false) : bool
    {
        goto qysooiuommggiyii;
        ameyqkmyguiowiaw:
        aggmmceiguesqumu:
        goto giaaekwoqcgomyyq;
        ksegauiqccusmigy:
        $umuecysoywoumgwo = in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao);
        goto ameyqkmyguiowiaw;
        qysooiuommggiyii:
        $umuecysoywoumgwo = false;
        goto okkwocoyssmuuyoo;
        giaaekwoqcgomyyq:
        return $umuecysoywoumgwo;
        goto ecwscogqsioyocqw;
        okkwocoyssmuuyoo:
        $mkucggyaiaukqoce = self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom);
        goto aykwyewykoaqwsue;
        aykwyewykoaqwsue:
        if (!$mkucggyaiaukqoce) {
            goto aggmmceiguesqumu;
        }
        goto keaisgcucioggscy;
        keaisgcucioggscy:
        $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles;
        goto ksegauiqccusmigy;
        ecwscogqsioyocqw:
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
        $ywmkwiwkosakssii["\155\145\x74\x61\x5f\161\x75\145\162\x79"] = ["\x72\x65\x6c\141\x74\151\x6f\156" => "\101\116\x44", ["\153\x65\x79" => $uusmaiomayssaecw, "\166\x61\x6c\x75\x65" => $eqgoocgaqwqcimie, "\143\x6f\155\x70\141\162\x65" => $uiuykcweuosgmwki]];
        return DecoratorUser::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = "\x64\151\163\160\154\141\171\x5f\x6e\x61\155\145", $cwwowqyuwccuykom = false)
    {
        return ManipulateArray::get(self::get($mkucggyaiaukqoce, $cwwowqyuwccuykom), $aiowsaccomcoikus, null);
    }
    
    public static function ogcwgigqwycqswms($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '')
    {
        return DecoratorUser::ogcwgigqwycqswms(self::mwikyscisascoeea($mkucggyaiaukqoce), $oiegiwogmwmawkeo, $ggauoeuaesiymgee, $gkykacccamuwowwc, $ywmkwiwkosakssii);
    }
    
    public static function quasyaqmmikeyoag($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64)
    {
        goto umqegggcqogkcokk;
        yuewiamsucauaego:
        if (!$mowgokyeuymuwiew) {
            goto gmwuamgmokqasssm;
        }
        goto esewwwsmwogmaaeu;
        esewwwsmwogmaaeu:
        $mowgokyeuymuwiew = DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\151\155\147", "\x73\x72\143");
        goto wagmmkgiegoisgqu;
        wagmmkgiegoisgqu:
        gmwuamgmokqasssm:
        goto iagaauogccisiowc;
        iagaauogccisiowc:
        return $mowgokyeuymuwiew;
        goto cmauoaqiueakioag;
        umqegggcqogkcokk:
        $mowgokyeuymuwiew = self::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo);
        goto yuewiamsucauaego;
        cmauoaqiueakioag:
    }
    
    public static function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = self::CON_OR) : bool
    {
        goto mmoeyiqwcmkiyoee;
        yeqiaiiuwwqoquem:
        ymcyiqsgescgekyq:
        goto iwsskosiceumqgie;
        qoyscguymwggause:
        foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) {
            goto mmuggiqkqocomsak;
            miecmocqwkqmmqem:
            goto yayammcgqwyussac;
            goto icesswgseoousmqy;
            kcuqqgokaaiegiea:
            goto ucscoaceqqamsqmq;
            goto csoeyawuamayqkuy;
            guayqmugkeqsmcqi:
            goto ucscoaceqqamsqmq;
            goto wcauaaiwuuowegqw;
            wcauaaiwuuowegqw:
            mkkqoygeswcakyas:
            goto cmiwskikykcioyiu;
            esieukmsekemaokw:
            if (!($wocwawaaemuoqmig == self::CON_AND)) {
                goto ugaoiwqmgeqoeuwm;
            }
            goto oumswckciewwywmk;
            mmuggiqkqocomsak:
            if (self::askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) {
                goto weeiywiskwumocki;
            }
            goto esieukmsekemaokw;
            ygqoqswyksigwkkk:
            if (!($wocwawaaemuoqmig == self::CON_OR)) {
                goto mkkqoygeswcakyas;
            }
            goto yisekcgcwaimsycw;
            cmiwskikykcioyiu:
            yayammcgqwyussac:
            goto uumusuoamyymaoik;
            yisekcgcwaimsycw:
            $umuecysoywoumgwo = true;
            goto guayqmugkeqsmcqi;
            oumswckciewwywmk:
            $umuecysoywoumgwo = false;
            goto kcuqqgokaaiegiea;
            icesswgseoousmqy:
            weeiywiskwumocki:
            goto ygqoqswyksigwkkk;
            uumusuoamyymaoik:
            sysikmimsgsyaocu:
            goto uiyqmwageayouaco;
            csoeyawuamayqkuy:
            ugaoiwqmgeqoeuwm:
            goto miecmocqwkqmmqem;
            uiyqmwageayouaco:
        }
        goto mgqgsgmkgwkiiggy;
        esicggokqqaacouy:
        if (!is_array($uagwmwoawiwkycao)) {
            goto ymcyiqsgescgekyq;
        }
        goto qoyscguymwggause;
        iwsskosiceumqgie:
        return $umuecysoywoumgwo;
        goto uakswkgiqciauaku;
        mmoeyiqwcmkiyoee:
        $umuecysoywoumgwo = false;
        goto esicggokqqaacouy;
        mgqgsgmkgwkiiggy:
        ucscoaceqqamsqmq:
        goto yeqiaiiuwwqoquem;
        uakswkgiqciauaku:
    }
}
