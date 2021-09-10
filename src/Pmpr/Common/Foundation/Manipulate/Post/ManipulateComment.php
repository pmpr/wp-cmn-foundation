<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto iigwamecymwyyswe;
        wgweyasskmqqmwug:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aqqmosqmsuueyaes);
        goto iygiqwyyouyuccmu;
        iigwamecymwyyswe:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto yaqyksksaccowaka;
        }
        goto wgweyasskmqqmwug;
        iygiqwyyouyuccmu:
        $aqqmosqmsuueyaes = DecoratorComment::get($aokagokqyuysuksm);
        goto wgsisgoqauqwugim;
        wgsisgoqauqwugim:
        yaqyksksaccowaka:
        goto kmeuiagkqyuiuagq;
        kmeuiagkqyuiuagq:
        return $aqqmosqmsuueyaes;
        goto swigeoaqekeyaiky;
        swigeoaqekeyaiky:
    }
    
    public static function mwikyscisascoeea($aqqmosqmsuueyaes)
    {
        goto cycyoyssckiiakaq;
        kscqewsaogiywguk:
        ucaeyoaswykigemu:
        goto oaoimwmaqkueucss;
        esiyseououaawqmg:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes;
        goto kscqewsaogiywguk;
        goooacyqswyceisw:
        if (is_numeric($aqqmosqmsuueyaes)) {
            goto kyokwkaegkeqewue;
        }
        goto quaycauswqeioegu;
        quaycauswqeioegu:
        goto ucaeyoaswykigemu;
        goto icaqeewacewkowqw;
        susyceeqmusmwyui:
        goto ucaeyoaswykigemu;
        goto qiwasugqiqyukias;
        umqmkomieoegoegi:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes->comment_ID;
        goto susyceeqmusmwyui;
        cycyoyssckiiakaq:
        $aokagokqyuysuksm = null;
        goto kkyquoqoogoaeiqm;
        qiwasugqiqyukias:
        kyokwkaegkeqewue:
        goto esiyseououaawqmg;
        kkyquoqoogoaeiqm:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto wiwowqkgukquawis;
        }
        goto goooacyqswyceisw;
        oaoimwmaqkueucss:
        return $aokagokqyuysuksm;
        goto skwmsqkqogmcumqq;
        icaqeewacewkowqw:
        wiwowqkgukquawis:
        goto umqmkomieoegoegi;
        skwmsqkqogmcumqq:
    }
    
    public static function ayueggmoqeeukqmq($aqqmosqmsuueyaes)
    {
        goto wuqqomswuicqemeq;
        akmkggmksaueiema:
        $post = ManipulatePost::get($aqqmosqmsuueyaes->comment_post_ID);
        goto yoosmkwkkaieeuog;
        meeiywyqmokummue:
        return $post;
        goto eaamoawwmocqgcas;
        wuqqomswuicqemeq:
        $post = null;
        goto ccasiuwwmikcmuok;
        oqioiqwiuokuomwq:
        if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
            goto aegyswiqyyweooie;
        }
        goto akmkggmksaueiema;
        yoosmkwkkaieeuog:
        aegyswiqyyweooie:
        goto meeiywyqmokummue;
        ccasiuwwmikcmuok:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto oqioiqwiuokuomwq;
        eaamoawwmocqgcas:
    }
    
    public static function issssuygyewuaswa($aqqmosqmsuueyaes)
    {
        goto awcuymmcaakwaqwo;
        aieaqkuieuqwoamu:
        return $qscaoekmoooeuyqg;
        goto wsckoqukqewsgioc;
        ymaqmqogwemaumeu:
        $qscaoekmoooeuyqg = ManipulateUser::get($aqqmosqmsuueyaes->user_id, true);
        goto qiisesouesmuuqso;
        qiisesouesmuuqso:
        jmcecgeiqygsoaeq:
        goto aieaqkuieuqwoamu;
        awcuymmcaakwaqwo:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto iiyiieuwugakwmco;
        iiyiieuwugakwmco:
        $qscaoekmoooeuyqg = null;
        goto quqksswweecuqqyc;
        quqksswweecuqqyc:
        if (!$aqqmosqmsuueyaes) {
            goto jmcecgeiqygsoaeq;
        }
        goto ymaqmqogwemaumeu;
        wsckoqukqewsgioc:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\x74\141\164\x75\163" => "\x61\x6c\154", "\x73\145\141\x72\x63\x68" => '', "\x63\x6f\x75\156\164" => false]);
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
        goto ymgkmumsgwsywawq;
        kwqaucmokiowmmsk:
        if (!$useksmwkuswkwcqg) {
            goto ugsgiqwcgikweoag;
        }
        goto yuiiueawamcwkcii;
        gcokswwqieqqqkum:
        return sprintf("\45\x73\40\55\40\x25\163\40\x2d\40\x25\163\x20\55\x20\x25\163", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs);
        goto yoqaqyekuywacgay;
        ouoacoswaigqeqea:
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post, true);
        goto kwqaucmokiowmmsk;
        ymgkmumsgwsywawq:
        $post = self::ayueggmoqeeukqmq($aqqmosqmsuueyaes);
        goto eecsacmcuiawgsuw;
        yuiiueawamcwkcii:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->label;
        goto akeeaiqiokigiyek;
        akeeaiqiokigiyek:
        ugsgiqwcgikweoag:
        goto owewgceyyccggass;
        yciugggyusiwaiei:
        $ocogsiouoiuuguym = self::squyiyimquqicqke($aqqmosqmsuueyaes);
        goto gcokswwqieqqqkum;
        owewgceyyccggass:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($aqqmosqmsuueyaes);
        goto yciugggyusiwaiei;
        eecsacmcuiawgsuw:
        $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post);
        goto ouoacoswaigqeqea;
        yoqaqyekuywacgay:
    }
    
    public static function immcwcemcmyosyoo($awqscowmskeuymeu = true)
    {
        goto okgeyuqomwgqkica;
        eywgkguqwemswogy:
        if (!$aqqmosqmsuueyaes) {
            goto iymecmmaqemumgwm;
        }
        goto gmyaiiggkqkkqusc;
        ooqqouikewaoqiia:
        iymecmmaqemumgwm:
        goto gyaagmeooqiysqie;
        icgsicquigiaoqcu:
        if (isset($_POST["\141\x63\x74\x69\157\156"], $_POST["\x63\157\x6d\155\x65\x6e\x74\137\x49\x44"]) && $_POST["\x61\x63\x74\151\157\x6e"] == "\x65\144\151\x74\x65\x64\x63\157\x6d\155\x65\156\x74") {
            goto oaiqqcuocoeesgwo;
        }
        goto usqaemiysqqycess;
        gmyaiiggkqkkqusc:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto ooqqouikewaoqiia;
        ugqewksmawaaikcy:
        $aqqmosqmsuueyaes = $_GET["\x63"];
        goto gyaygsqackycugma;
        saigqcycoiqwccow:
        $aqqmosqmsuueyaes = $_POST["\x63\x6f\155\155\x65\156\x74\x5f\111\x44"];
        goto kmqyuuaoqoeyweie;
        gyaagmeooqiysqie:
        return $aqqmosqmsuueyaes;
        goto wkoicgygicokiqic;
        usqaemiysqqycess:
        goto aaagmaisyakasiwy;
        goto emisqygocmagegey;
        kmqyuuaoqoeyweie:
        aaagmaisyakasiwy:
        goto eywgkguqwemswogy;
        okgeyuqomwgqkica:
        $aqqmosqmsuueyaes = '';
        goto kqiguksmuaiokakg;
        gyaygsqackycugma:
        goto aaagmaisyakasiwy;
        goto ukcscyckokswwgkk;
        emisqygocmagegey:
        ecoekykcimuquyew:
        goto ugqewksmawaaikcy;
        ukcscyckokswwgkk:
        oaiqqcuocoeesgwo:
        goto saigqcycoiqwccow;
        kqiguksmuaiokakg:
        if (isset($_GET["\x61\x63\164\151\157\156"], $_GET["\143"]) && $_GET["\x61\x63\164\151\157\x6e"] == "\x65\x64\151\x74\x63\x6f\x6d\x6d\145\156\x74") {
            goto ecoekykcimuquyew;
        }
        goto icgsicquigiaoqcu;
        wkoicgygicokiqic:
    }
    
    public static function delete($aqqmosqmsuueyaes, $cwwowqyuwccuykom = false)
    {
        goto immscoeagqmqciui;
        qoasosoiigoioyam:
        wp_delete_comment($aqqmosqmsuueyaes, $cwwowqyuwccuykom);
        goto eawyqmogeqawcuyk;
        aqwemquogkemogkc:
        return $eysyeukyagaoqqcy;
        goto kgukocmwemamgkeq;
        immscoeagqmqciui:
        $eysyeukyagaoqqcy = false;
        goto oimuamcicscqsygs;
        eawyqmogeqawcuyk:
        ocaoakgkikmuauya:
        goto aqwemquogkemogkc;
        oimuamcicscqsygs:
        if (!($aqqmosqmsuueyaes && is_numeric($aqqmosqmsuueyaes))) {
            goto ocaoakgkikmuauya;
        }
        goto qoasosoiigoioyam;
        kgukocmwemamgkeq:
    }
    
    public static function omkaowmygoqwsywq($ggauoeuaesiymgee = 10)
    {
        goto mcqkesqkqmquqscw;
        csayumgmsgqaqocs:
        return $uuyoeicyoayimaoa;
        goto eeewkuoauiceusme;
        mqigqiiaucmoeakm:
        if ($uuyoeicyoayimaoa) {
            goto ciagoiskqoeqegms;
        }
        goto ikakskcmywasiaaw;
        ikakskcmywasiaaw:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq($ggauoeuaesiymgee);
        goto gcisscmgwcgaukuy;
        mcqkesqkqmquqscw:
        $uuyoeicyoayimaoa = DecoratorOption::get("\143\x6f\x6d\155\145\156\x74\163\137\160\145\162\137\160\141\147\x65", $ggauoeuaesiymgee);
        goto mqigqiiaucmoeakm;
        gcisscmgwcgaukuy:
        ciagoiskqoeqegms:
        goto csayumgmsgqaqocs;
        eeewkuoauiceusme:
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
        goto ooskemsasmsukgom;
        kcgskoecgmgsoscu:
        ssgwgsuyuswaoquy:
        goto ycycoyycscqaqwic;
        ycycoyycscqaqwic:
        return $ocogsiouoiuuguym;
        goto kykyeawgsuaygiyk;
        ooskemsasmsukgom:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto emgoksggesqycsum;
        eemswigwmmkmeuac:
        $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes->comment_date, false);
        goto yoecqyyoymaykeuy;
        iiuyqyimsogcawyu:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\x67\x65\x74\x5f\x63\157\x6d\x6d\x65\156\x74\137\x64\141\164\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes);
        goto kcgskoecgmgsoscu;
        gyuaowmwgakycqqu:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto ksyqouicmqcogmow;
        emgoksggesqycsum:
        if ($saqmwwmqiwmkiwaa) {
            goto cyokukwiwuywqami;
        }
        goto gyuaowmwgakycqqu;
        yoecqyyoymaykeuy:
        if (!$egkeamycaysqsoma) {
            goto ssgwgsuyuswaoquy;
        }
        goto iiuyqyimsogcawyu;
        ksyqouicmqcogmow:
        cyokukwiwuywqami:
        goto eemswigwmmkmeuac;
        kykyeawgsuaygiyk:
    }
}
