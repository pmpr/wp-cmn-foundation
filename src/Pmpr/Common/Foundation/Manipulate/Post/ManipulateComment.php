<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        ucaeyoaswykigemu:
        iygiqwyyouyuccmu:
        goto wiwowqkgukquawis;
        wiwowqkgukquawis:
        return $aqqmosqmsuueyaes;
        goto kyokwkaegkeqewue;
        kmeuiagkqyuiuagq:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aqqmosqmsuueyaes);
        goto swigeoaqekeyaiky;
        wgsisgoqauqwugim:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto iygiqwyyouyuccmu;
        }
        goto kmeuiagkqyuiuagq;
        swigeoaqekeyaiky:
        $aqqmosqmsuueyaes = DecoratorComment::get($aokagokqyuysuksm);
        goto ucaeyoaswykigemu;
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
        skwmsqkqogmcumqq:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes;
        goto aegyswiqyyweooie;
        kscqewsaogiywguk:
        goto cycyoyssckiiakaq;
        goto oaoimwmaqkueucss;
        aegyswiqyyweooie:
        cycyoyssckiiakaq:
        goto wuqqomswuicqemeq;
        oaoimwmaqkueucss:
        goooacyqswyceisw:
        goto skwmsqkqogmcumqq;
        esiyseououaawqmg:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes->comment_ID;
        goto kscqewsaogiywguk;
        umqmkomieoegoegi:
        if (is_numeric($aqqmosqmsuueyaes)) {
            goto goooacyqswyceisw;
        }
        goto susyceeqmusmwyui;
        qiwasugqiqyukias:
        kkyquoqoogoaeiqm:
        goto esiyseououaawqmg;
        wuqqomswuicqemeq:
        return $aokagokqyuysuksm;
        goto ccasiuwwmikcmuok;
        quaycauswqeioegu:
        $aokagokqyuysuksm = null;
        goto icaqeewacewkowqw;
        susyceeqmusmwyui:
        goto cycyoyssckiiakaq;
        goto qiwasugqiqyukias;
        ccasiuwwmikcmuok:
    }
    
    public static function ayueggmoqeeukqmq($aqqmosqmsuueyaes)
    {
        goto akmkggmksaueiema;
        jmcecgeiqygsoaeq:
        oqioiqwiuokuomwq:
        goto awcuymmcaakwaqwo;
        yoosmkwkkaieeuog:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto meeiywyqmokummue;
        awcuymmcaakwaqwo:
        return $post;
        goto iiyiieuwugakwmco;
        akmkggmksaueiema:
        $post = null;
        goto yoosmkwkkaieeuog;
        eaamoawwmocqgcas:
        $post = ManipulatePost::get($aqqmosqmsuueyaes->comment_post_ID);
        goto jmcecgeiqygsoaeq;
        meeiywyqmokummue:
        if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
            goto oqioiqwiuokuomwq;
        }
        goto eaamoawwmocqgcas;
        iiyiieuwugakwmco:
    }
    
    public static function issssuygyewuaswa($aqqmosqmsuueyaes)
    {
        goto ymaqmqogwemaumeu;
        qiisesouesmuuqso:
        $qscaoekmoooeuyqg = null;
        goto aieaqkuieuqwoamu;
        ymgkmumsgwsywawq:
        return $qscaoekmoooeuyqg;
        goto eecsacmcuiawgsuw;
        ugsgiqwcgikweoag:
        quqksswweecuqqyc:
        goto ymgkmumsgwsywawq;
        wsckoqukqewsgioc:
        $qscaoekmoooeuyqg = ManipulateUser::get($aqqmosqmsuueyaes->user_id, true);
        goto ugsgiqwcgikweoag;
        aieaqkuieuqwoamu:
        if (!$aqqmosqmsuueyaes) {
            goto quqksswweecuqqyc;
        }
        goto wsckoqukqewsgioc;
        ymaqmqogwemaumeu:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto qiisesouesmuuqso;
        eecsacmcuiawgsuw:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\164\x61\x74\165\x73" => "\141\x6c\154", "\x73\145\x61\162\x63\x68" => '', "\143\157\165\156\164" => false]);
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
        return sprintf("\45\163\x20\x2d\40\x25\163\40\x2d\40\45\x73\40\x2d\x20\45\x73", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs);
        goto oaiqqcuocoeesgwo;
        aaagmaisyakasiwy:
        $ocogsiouoiuuguym = self::squyiyimquqicqke($aqqmosqmsuueyaes);
        goto ecoekykcimuquyew;
        owewgceyyccggass:
        if (!$useksmwkuswkwcqg) {
            goto ouoacoswaigqeqea;
        }
        goto yciugggyusiwaiei;
        yoqaqyekuywacgay:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($aqqmosqmsuueyaes);
        goto aaagmaisyakasiwy;
        yciugggyusiwaiei:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->label;
        goto gcokswwqieqqqkum;
        yuiiueawamcwkcii:
        $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post);
        goto akeeaiqiokigiyek;
        gcokswwqieqqqkum:
        ouoacoswaigqeqea:
        goto yoqaqyekuywacgay;
        kwqaucmokiowmmsk:
        $post = self::ayueggmoqeeukqmq($aqqmosqmsuueyaes);
        goto yuiiueawamcwkcii;
        akeeaiqiokigiyek:
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post, true);
        goto owewgceyyccggass;
        oaiqqcuocoeesgwo:
    }
    
    public static function immcwcemcmyosyoo($awqscowmskeuymeu = true)
    {
        goto usqaemiysqqycess;
        ukcscyckokswwgkk:
        okgeyuqomwgqkica:
        goto saigqcycoiqwccow;
        wkoicgygicokiqic:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto ocaoakgkikmuauya;
        gyaygsqackycugma:
        goto iymecmmaqemumgwm;
        goto ukcscyckokswwgkk;
        ugqewksmawaaikcy:
        if (isset($_POST["\x61\x63\164\x69\157\156"], $_POST["\143\x6f\x6d\x6d\x65\156\x74\137\111\104"]) && $_POST["\x61\143\x74\151\157\156"] == "\145\x64\x69\x74\x65\144\143\x6f\155\155\x65\156\164") {
            goto kqiguksmuaiokakg;
        }
        goto gyaygsqackycugma;
        emisqygocmagegey:
        if (isset($_GET["\x61\143\164\x69\x6f\156"], $_GET["\x63"]) && $_GET["\x61\143\164\x69\x6f\x6e"] == "\x65\x64\x69\x74\143\x6f\x6d\155\x65\x6e\164") {
            goto okgeyuqomwgqkica;
        }
        goto ugqewksmawaaikcy;
        eywgkguqwemswogy:
        kqiguksmuaiokakg:
        goto gmyaiiggkqkkqusc;
        ocaoakgkikmuauya:
        icgsicquigiaoqcu:
        goto immscoeagqmqciui;
        ooqqouikewaoqiia:
        iymecmmaqemumgwm:
        goto gyaagmeooqiysqie;
        saigqcycoiqwccow:
        $aqqmosqmsuueyaes = $_GET["\143"];
        goto kmqyuuaoqoeyweie;
        kmqyuuaoqoeyweie:
        goto iymecmmaqemumgwm;
        goto eywgkguqwemswogy;
        gmyaiiggkqkkqusc:
        $aqqmosqmsuueyaes = $_POST["\143\157\x6d\155\145\156\164\x5f\x49\104"];
        goto ooqqouikewaoqiia;
        usqaemiysqqycess:
        $aqqmosqmsuueyaes = '';
        goto emisqygocmagegey;
        gyaagmeooqiysqie:
        if (!$aqqmosqmsuueyaes) {
            goto icgsicquigiaoqcu;
        }
        goto wkoicgygicokiqic;
        immscoeagqmqciui:
        return $aqqmosqmsuueyaes;
        goto oimuamcicscqsygs;
        oimuamcicscqsygs:
    }
    
    public static function delete($aqqmosqmsuueyaes, $cwwowqyuwccuykom = false)
    {
        goto eawyqmogeqawcuyk;
        kgukocmwemamgkeq:
        wp_delete_comment($aqqmosqmsuueyaes, $cwwowqyuwccuykom);
        goto ciagoiskqoeqegms;
        ciagoiskqoeqegms:
        qoasosoiigoioyam:
        goto mcqkesqkqmquqscw;
        eawyqmogeqawcuyk:
        $eysyeukyagaoqqcy = false;
        goto aqwemquogkemogkc;
        aqwemquogkemogkc:
        if (!($aqqmosqmsuueyaes && is_numeric($aqqmosqmsuueyaes))) {
            goto qoasosoiigoioyam;
        }
        goto kgukocmwemamgkeq;
        mcqkesqkqmquqscw:
        return $eysyeukyagaoqqcy;
        goto mqigqiiaucmoeakm;
        mqigqiiaucmoeakm:
    }
    
    public static function omkaowmygoqwsywq($ggauoeuaesiymgee = 10)
    {
        goto gcisscmgwcgaukuy;
        ssgwgsuyuswaoquy:
        return $uuyoeicyoayimaoa;
        goto ooskemsasmsukgom;
        csayumgmsgqaqocs:
        if ($uuyoeicyoayimaoa) {
            goto ikakskcmywasiaaw;
        }
        goto eeewkuoauiceusme;
        cyokukwiwuywqami:
        ikakskcmywasiaaw:
        goto ssgwgsuyuswaoquy;
        gcisscmgwcgaukuy:
        $uuyoeicyoayimaoa = DecoratorOption::get("\143\157\155\155\145\156\164\163\x5f\x70\145\x72\137\160\x61\147\x65", $ggauoeuaesiymgee);
        goto csayumgmsgqaqocs;
        eeewkuoauiceusme:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq($ggauoeuaesiymgee);
        goto cyokukwiwuywqami;
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
        iiuyqyimsogcawyu:
        emgoksggesqycsum:
        goto kcgskoecgmgsoscu;
        yoecqyyoymaykeuy:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto iiuyqyimsogcawyu;
        ksyqouicmqcogmow:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto eemswigwmmkmeuac;
        ycycoyycscqaqwic:
        if (!$egkeamycaysqsoma) {
            goto gyuaowmwgakycqqu;
        }
        goto kykyeawgsuaygiyk;
        qkaiqseceoaksyoc:
        return $ocogsiouoiuuguym;
        goto amckomowuaeagges;
        kykyeawgsuaygiyk:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\145\x74\137\x63\x6f\155\x6d\145\x6e\164\x5f\x64\x61\x74\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes);
        goto kkuisewuceyasium;
        eemswigwmmkmeuac:
        if ($saqmwwmqiwmkiwaa) {
            goto emgoksggesqycsum;
        }
        goto yoecqyyoymaykeuy;
        kkuisewuceyasium:
        gyuaowmwgakycqqu:
        goto qkaiqseceoaksyoc;
        kcgskoecgmgsoscu:
        $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes->comment_date, false);
        goto ycycoyycscqaqwic;
        amckomowuaeagges:
    }
}
