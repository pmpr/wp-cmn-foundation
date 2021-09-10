<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Post;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorComment;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Comment;
use WP_Post;

class ManipulateComment extends Common
{
    
    public static function get($aqqmosqmsuueyaes)
    {
        goto wgsisgoqauqwugim;
        kmeuiagkqyuiuagq:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aqqmosqmsuueyaes);
        goto swigeoaqekeyaiky;
        ucaeyoaswykigemu:
        iygiqwyyouyuccmu:
        goto wiwowqkgukquawis;
        wgsisgoqauqwugim:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto iygiqwyyouyuccmu;
        }
        goto kmeuiagkqyuiuagq;
        swigeoaqekeyaiky:
        $aqqmosqmsuueyaes = DecoratorComment::get($aokagokqyuysuksm);
        goto ucaeyoaswykigemu;
        wiwowqkgukquawis:
        return $aqqmosqmsuueyaes;
        goto kyokwkaegkeqewue;
        kyokwkaegkeqewue:
    }
    
    public static function mwikyscisascoeea($aqqmosqmsuueyaes)
    {
        goto quaycauswqeioegu;
        icaqeewacewkowqw:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto kkyquoqoogoaeiqm;
        }
        goto umqmkomieoegoegi;
        aegyswiqyyweooie:
        cycyoyssckiiakaq:
        goto wuqqomswuicqemeq;
        skwmsqkqogmcumqq:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes;
        goto aegyswiqyyweooie;
        kscqewsaogiywguk:
        goto cycyoyssckiiakaq;
        goto oaoimwmaqkueucss;
        quaycauswqeioegu:
        $aokagokqyuysuksm = null;
        goto icaqeewacewkowqw;
        oaoimwmaqkueucss:
        goooacyqswyceisw:
        goto skwmsqkqogmcumqq;
        susyceeqmusmwyui:
        goto cycyoyssckiiakaq;
        goto qiwasugqiqyukias;
        esiyseououaawqmg:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes->comment_ID;
        goto kscqewsaogiywguk;
        wuqqomswuicqemeq:
        return $aokagokqyuysuksm;
        goto ccasiuwwmikcmuok;
        umqmkomieoegoegi:
        if (is_numeric($aqqmosqmsuueyaes)) {
            goto goooacyqswyceisw;
        }
        goto susyceeqmusmwyui;
        qiwasugqiqyukias:
        kkyquoqoogoaeiqm:
        goto esiyseououaawqmg;
        ccasiuwwmikcmuok:
    }
    
    public static function ayueggmoqeeukqmq($aqqmosqmsuueyaes)
    {
        goto akmkggmksaueiema;
        meeiywyqmokummue:
        if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
            goto oqioiqwiuokuomwq;
        }
        goto eaamoawwmocqgcas;
        jmcecgeiqygsoaeq:
        oqioiqwiuokuomwq:
        goto awcuymmcaakwaqwo;
        eaamoawwmocqgcas:
        $post = ManipulatePost::get($aqqmosqmsuueyaes->comment_post_ID);
        goto jmcecgeiqygsoaeq;
        akmkggmksaueiema:
        $post = null;
        goto yoosmkwkkaieeuog;
        awcuymmcaakwaqwo:
        return $post;
        goto iiyiieuwugakwmco;
        yoosmkwkkaieeuog:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto meeiywyqmokummue;
        iiyiieuwugakwmco:
    }
    
    public static function issssuygyewuaswa($aqqmosqmsuueyaes)
    {
        goto ymaqmqogwemaumeu;
        ymgkmumsgwsywawq:
        return $qscaoekmoooeuyqg;
        goto eecsacmcuiawgsuw;
        ugsgiqwcgikweoag:
        quqksswweecuqqyc:
        goto ymgkmumsgwsywawq;
        ymaqmqogwemaumeu:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto qiisesouesmuuqso;
        aieaqkuieuqwoamu:
        if (!$aqqmosqmsuueyaes) {
            goto quqksswweecuqqyc;
        }
        goto wsckoqukqewsgioc;
        wsckoqukqewsgioc:
        $qscaoekmoooeuyqg = ManipulateUser::get($aqqmosqmsuueyaes->user_id, true);
        goto ugsgiqwcgikweoag;
        qiisesouesmuuqso:
        $qscaoekmoooeuyqg = null;
        goto aieaqkuieuqwoamu;
        eecsacmcuiawgsuw:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\164\141\x74\165\x73" => "\x61\x6c\x6c", "\x73\145\141\x72\x63\x68" => '', "\143\157\x75\156\x74" => false]);
        return DecoratorComment::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function mguqscccckuywsya($aqqmosqmsuueyaes)
    {
        return DecoratorComment::mguqscccckuywsya(self::mwikyscisascoeea($aqqmosqmsuueyaes));
    }
    
    public static function souwykwwmyygqyqi($aqqmosqmsuueyaes)
    {
        return DecoratorComment::ykgcioecqcwwkime(self::mwikyscisascoeea($aqqmosqmsuueyaes));
    }
    
    public static function qkweigiqsaaigqau($aqqmosqmsuueyaes)
    {
        return DecoratorComment::qkweigiqsaaigqau(self::mwikyscisascoeea($aqqmosqmsuueyaes));
    }
    
    public static function uikgwcuascgeissw($aqqmosqmsuueyaes) : string
    {
        goto kwqaucmokiowmmsk;
        ecoekykcimuquyew:
        return sprintf("\45\163\40\x2d\x20\45\x73\40\55\40\x25\163\x20\x2d\40\45\x73", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs);
        goto oaiqqcuocoeesgwo;
        yciugggyusiwaiei:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->label;
        goto gcokswwqieqqqkum;
        gcokswwqieqqqkum:
        ouoacoswaigqeqea:
        goto yoqaqyekuywacgay;
        kwqaucmokiowmmsk:
        $post = self::ayueggmoqeeukqmq($aqqmosqmsuueyaes);
        goto yuiiueawamcwkcii;
        yuiiueawamcwkcii:
        $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post);
        goto akeeaiqiokigiyek;
        aaagmaisyakasiwy:
        $ocogsiouoiuuguym = self::squyiyimquqicqke($aqqmosqmsuueyaes);
        goto ecoekykcimuquyew;
        yoqaqyekuywacgay:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($aqqmosqmsuueyaes);
        goto aaagmaisyakasiwy;
        akeeaiqiokigiyek:
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post, true);
        goto owewgceyyccggass;
        owewgceyyccggass:
        if (!$useksmwkuswkwcqg) {
            goto ouoacoswaigqeqea;
        }
        goto yciugggyusiwaiei;
        oaiqqcuocoeesgwo:
    }
    
    public static function immcwcemcmyosyoo($awqscowmskeuymeu = true)
    {
        goto usqaemiysqqycess;
        eywgkguqwemswogy:
        kqiguksmuaiokakg:
        goto gmyaiiggkqkkqusc;
        ugqewksmawaaikcy:
        if (isset($_POST["\141\x63\164\x69\x6f\156"], $_POST["\143\x6f\155\x6d\x65\156\x74\x5f\111\x44"]) && $_POST["\x61\143\164\151\157\x6e"] == "\x65\x64\151\x74\x65\144\143\x6f\x6d\x6d\145\x6e\x74") {
            goto kqiguksmuaiokakg;
        }
        goto gyaygsqackycugma;
        immscoeagqmqciui:
        return $aqqmosqmsuueyaes;
        goto oimuamcicscqsygs;
        usqaemiysqqycess:
        $aqqmosqmsuueyaes = '';
        goto emisqygocmagegey;
        ocaoakgkikmuauya:
        icgsicquigiaoqcu:
        goto immscoeagqmqciui;
        kmqyuuaoqoeyweie:
        goto iymecmmaqemumgwm;
        goto eywgkguqwemswogy;
        emisqygocmagegey:
        if (isset($_GET["\x61\x63\164\151\157\156"], $_GET["\x63"]) && $_GET["\x61\x63\164\x69\x6f\156"] == "\x65\144\x69\164\143\x6f\x6d\155\x65\x6e\x74") {
            goto okgeyuqomwgqkica;
        }
        goto ugqewksmawaaikcy;
        ukcscyckokswwgkk:
        okgeyuqomwgqkica:
        goto saigqcycoiqwccow;
        wkoicgygicokiqic:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto ocaoakgkikmuauya;
        gyaagmeooqiysqie:
        if (!$aqqmosqmsuueyaes) {
            goto icgsicquigiaoqcu;
        }
        goto wkoicgygicokiqic;
        gmyaiiggkqkkqusc:
        $aqqmosqmsuueyaes = $_POST["\143\157\155\x6d\x65\156\x74\x5f\x49\104"];
        goto ooqqouikewaoqiia;
        saigqcycoiqwccow:
        $aqqmosqmsuueyaes = $_GET["\143"];
        goto kmqyuuaoqoeyweie;
        gyaygsqackycugma:
        goto iymecmmaqemumgwm;
        goto ukcscyckokswwgkk;
        ooqqouikewaoqiia:
        iymecmmaqemumgwm:
        goto gyaagmeooqiysqie;
        oimuamcicscqsygs:
    }
    
    public static function delete($aqqmosqmsuueyaes, $cwwowqyuwccuykom = false)
    {
        goto eawyqmogeqawcuyk;
        eawyqmogeqawcuyk:
        $eysyeukyagaoqqcy = false;
        goto aqwemquogkemogkc;
        mcqkesqkqmquqscw:
        return $eysyeukyagaoqqcy;
        goto mqigqiiaucmoeakm;
        kgukocmwemamgkeq:
        wp_delete_comment($aqqmosqmsuueyaes, $cwwowqyuwccuykom);
        goto ciagoiskqoeqegms;
        ciagoiskqoeqegms:
        qoasosoiigoioyam:
        goto mcqkesqkqmquqscw;
        aqwemquogkemogkc:
        if (!($aqqmosqmsuueyaes && is_numeric($aqqmosqmsuueyaes))) {
            goto qoasosoiigoioyam;
        }
        goto kgukocmwemamgkeq;
        mqigqiiaucmoeakm:
    }
    
    public static function omkaowmygoqwsywq($ggauoeuaesiymgee = 10)
    {
        goto gcisscmgwcgaukuy;
        gcisscmgwcgaukuy:
        $uuyoeicyoayimaoa = DecoratorOption::get("\x63\x6f\x6d\x6d\145\x6e\x74\163\x5f\160\x65\162\x5f\160\x61\x67\145", $ggauoeuaesiymgee);
        goto csayumgmsgqaqocs;
        eeewkuoauiceusme:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq($ggauoeuaesiymgee);
        goto cyokukwiwuywqami;
        ssgwgsuyuswaoquy:
        return $uuyoeicyoayimaoa;
        goto ooskemsasmsukgom;
        cyokukwiwuywqami:
        ikakskcmywasiaaw:
        goto ssgwgsuyuswaoquy;
        csayumgmsgqaqocs:
        if ($uuyoeicyoayimaoa) {
            goto ikakskcmywasiaaw;
        }
        goto eeewkuoauiceusme;
        ooskemsasmsukgom:
    }
    
    public static function igawqaomowicuayw($uusmaiomayssaecw, $aqqmosqmsuueyaes = null, $cuyooiakswegosog = true)
    {
        return DecoratorComment::igawqaomowicuayw(self::mwikyscisascoeea($aqqmosqmsuueyaes), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $aqqmosqmsuueyaes = null, $omasqoksqewuwwkq = true)
    {
        DecoratorComment::giwmekimakcaawsq(self::mwikyscisascoeea($aqqmosqmsuueyaes), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq);
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $aqqmosqmsuueyaes = null, $cuyooiakswegosog = true)
    {
        DecoratorComment::ksmqawcowkmegigw(self::mwikyscisascoeea($aqqmosqmsuueyaes), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cuyooiakswegosog);
    }
    
    public static function squyiyimquqicqke($aqqmosqmsuueyaes, $saqmwwmqiwmkiwaa = null, $egkeamycaysqsoma = true)
    {
        goto ksyqouicmqcogmow;
        yoecqyyoymaykeuy:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto iiuyqyimsogcawyu;
        kykyeawgsuaygiyk:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\x65\164\x5f\143\157\155\155\x65\x6e\x74\x5f\144\x61\x74\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes);
        goto kkuisewuceyasium;
        kcgskoecgmgsoscu:
        $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes->comment_date, false);
        goto ycycoyycscqaqwic;
        kkuisewuceyasium:
        gyuaowmwgakycqqu:
        goto qkaiqseceoaksyoc;
        qkaiqseceoaksyoc:
        return $ocogsiouoiuuguym;
        goto amckomowuaeagges;
        iiuyqyimsogcawyu:
        emgoksggesqycsum:
        goto kcgskoecgmgsoscu;
        ycycoyycscqaqwic:
        if (!$egkeamycaysqsoma) {
            goto gyuaowmwgakycqqu;
        }
        goto kykyeawgsuaygiyk;
        eemswigwmmkmeuac:
        if ($saqmwwmqiwmkiwaa) {
            goto emgoksggesqycsum;
        }
        goto yoecqyyoymaykeuy;
        ksyqouicmqcogmow:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto eemswigwmmkmeuac;
        amckomowuaeagges:
    }
}
