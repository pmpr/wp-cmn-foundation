<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto kmqyuuaoqoeyweie;
        kmqyuuaoqoeyweie:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto saigqcycoiqwccow;
        }
        goto eywgkguqwemswogy;
        eywgkguqwemswogy:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aqqmosqmsuueyaes);
        goto gmyaiiggkqkkqusc;
        gyaagmeooqiysqie:
        return $aqqmosqmsuueyaes;
        goto wkoicgygicokiqic;
        ooqqouikewaoqiia:
        saigqcycoiqwccow:
        goto gyaagmeooqiysqie;
        gmyaiiggkqkkqusc:
        $aqqmosqmsuueyaes = DecoratorComment::get($aokagokqyuysuksm);
        goto ooqqouikewaoqiia;
        wkoicgygicokiqic:
    }
    
    public static function mwikyscisascoeea($aqqmosqmsuueyaes)
    {
        goto qoasosoiigoioyam;
        eeewkuoauiceusme:
        return $aokagokqyuysuksm;
        goto cyokukwiwuywqami;
        ciagoiskqoeqegms:
        immscoeagqmqciui:
        goto mcqkesqkqmquqscw;
        qoasosoiigoioyam:
        $aokagokqyuysuksm = null;
        goto eawyqmogeqawcuyk;
        gcisscmgwcgaukuy:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes;
        goto csayumgmsgqaqocs;
        mqigqiiaucmoeakm:
        goto ocaoakgkikmuauya;
        goto ikakskcmywasiaaw;
        aqwemquogkemogkc:
        if (is_numeric($aqqmosqmsuueyaes)) {
            goto oimuamcicscqsygs;
        }
        goto kgukocmwemamgkeq;
        mcqkesqkqmquqscw:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes->comment_ID;
        goto mqigqiiaucmoeakm;
        kgukocmwemamgkeq:
        goto ocaoakgkikmuauya;
        goto ciagoiskqoeqegms;
        eawyqmogeqawcuyk:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto immscoeagqmqciui;
        }
        goto aqwemquogkemogkc;
        csayumgmsgqaqocs:
        ocaoakgkikmuauya:
        goto eeewkuoauiceusme;
        ikakskcmywasiaaw:
        oimuamcicscqsygs:
        goto gcisscmgwcgaukuy;
        cyokukwiwuywqami:
    }
    
    public static function ayueggmoqeeukqmq($aqqmosqmsuueyaes)
    {
        goto ooskemsasmsukgom;
        emgoksggesqycsum:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto gyuaowmwgakycqqu;
        ooskemsasmsukgom:
        $post = null;
        goto emgoksggesqycsum;
        gyuaowmwgakycqqu:
        if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
            goto ssgwgsuyuswaoquy;
        }
        goto ksyqouicmqcogmow;
        eemswigwmmkmeuac:
        ssgwgsuyuswaoquy:
        goto yoecqyyoymaykeuy;
        ksyqouicmqcogmow:
        $post = ManipulatePost::get($aqqmosqmsuueyaes->comment_post_ID);
        goto eemswigwmmkmeuac;
        yoecqyyoymaykeuy:
        return $post;
        goto iiuyqyimsogcawyu;
        iiuyqyimsogcawyu:
    }
    
    public static function issssuygyewuaswa($aqqmosqmsuueyaes)
    {
        goto ycycoyycscqaqwic;
        amckomowuaeagges:
        kcgskoecgmgsoscu:
        goto mkiskyuukeickeio;
        ycycoyycscqaqwic:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto kykyeawgsuaygiyk;
        qkaiqseceoaksyoc:
        $qscaoekmoooeuyqg = ManipulateUser::get($aqqmosqmsuueyaes->user_id, true);
        goto amckomowuaeagges;
        kykyeawgsuaygiyk:
        $qscaoekmoooeuyqg = null;
        goto kkuisewuceyasium;
        mkiskyuukeickeio:
        return $qscaoekmoooeuyqg;
        goto mgiqmcyayasueaay;
        kkuisewuceyasium:
        if (!$aqqmosqmsuueyaes) {
            goto kcgskoecgmgsoscu;
        }
        goto qkaiqseceoaksyoc;
        mgiqmcyayasueaay:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\x74\x61\164\165\163" => "\x61\x6c\x6c", "\163\145\141\162\x63\150" => '', "\x63\x6f\x75\x6e\x74" => false]);
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
        goto oeimecucwuoikscu;
        wakwucssymmkyoqy:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($aqqmosqmsuueyaes);
        goto smieosasoeageewe;
        oggcgggiciyscsek:
        $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post);
        goto ausiqgkmacksmyce;
        ssequouykiacumek:
        return sprintf("\45\x73\x20\x2d\40\x25\x73\40\55\x20\45\x73\40\x2d\40\x25\x73", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs);
        goto wyyoauyqkccwquye;
        qmweiqisqiikwwcg:
        if (!$useksmwkuswkwcqg) {
            goto myciimmeauksamaa;
        }
        goto kiuoaeesiiaqskma;
        oeimecucwuoikscu:
        $post = self::ayueggmoqeeukqmq($aqqmosqmsuueyaes);
        goto oggcgggiciyscsek;
        ausiqgkmacksmyce:
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post, true);
        goto qmweiqisqiikwwcg;
        smieosasoeageewe:
        $ocogsiouoiuuguym = self::squyiyimquqicqke($aqqmosqmsuueyaes);
        goto ssequouykiacumek;
        kiuoaeesiiaqskma:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->label;
        goto gymooqgyigeucisi;
        gymooqgyigeucisi:
        myciimmeauksamaa:
        goto wakwucssymmkyoqy;
        wyyoauyqkccwquye:
    }
    
    public static function immcwcemcmyosyoo($awqscowmskeuymeu = true)
    {
        goto osqmooccocasiwwi;
        wkmugsoecikiakqq:
        gowmoegakqaokqwy:
        goto caasemucaegsgiic;
        ygoayeaicqikqmii:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto wwwoeskoucoimecg;
        agyimagkmcyciuqw:
        guwwcsoquaaiywwg:
        goto omcycqocymkeiawq;
        okwqmqsuewwwsykg:
        return $aqqmosqmsuueyaes;
        goto mqacwakmquqyikgg;
        uuuyqoukemmekmwy:
        goto gowmoegakqaokqwy;
        goto agyimagkmcyciuqw;
        osqmooccocasiwwi:
        $aqqmosqmsuueyaes = '';
        goto suaagcyyqywuawcy;
        wwwoeskoucoimecg:
        sqokciesoswwaase:
        goto okwqmqsuewwwsykg;
        caasemucaegsgiic:
        if (!$aqqmosqmsuueyaes) {
            goto sqokciesoswwaase;
        }
        goto ygoayeaicqikqmii;
        omcycqocymkeiawq:
        $aqqmosqmsuueyaes = $_POST["\143\157\x6d\x6d\x65\156\164\137\x49\104"];
        goto wkmugsoecikiakqq;
        suaagcyyqywuawcy:
        if (isset($_GET["\141\143\x74\x69\x6f\x6e"], $_GET["\143"]) && $_GET["\x61\x63\164\x69\157\156"] == "\x65\x64\151\x74\143\157\155\155\145\x6e\164") {
            goto cqmwuskwgsuyqiku;
        }
        goto yeuouysckyiiqgkk;
        yeuouysckyiiqgkk:
        if (isset($_POST["\141\x63\164\x69\x6f\x6e"], $_POST["\143\x6f\155\x6d\x65\x6e\164\x5f\x49\104"]) && $_POST["\x61\x63\164\151\x6f\156"] == "\145\x64\151\x74\145\144\143\x6f\155\x6d\145\156\x74") {
            goto guwwcsoquaaiywwg;
        }
        goto owcmkccqayuewmyi;
        qiwmescucyayywwe:
        $aqqmosqmsuueyaes = $_GET["\143"];
        goto uuuyqoukemmekmwy;
        gqyiykessecacuqq:
        cqmwuskwgsuyqiku:
        goto qiwmescucyayywwe;
        owcmkccqayuewmyi:
        goto gowmoegakqaokqwy;
        goto gqyiykessecacuqq;
        mqacwakmquqyikgg:
    }
    
    public static function delete($aqqmosqmsuueyaes, $cwwowqyuwccuykom = false)
    {
        goto iawoeomqmeacqwwm;
        iawoeomqmeacqwwm:
        $eysyeukyagaoqqcy = false;
        goto sgewiwogqyswqiso;
        iecsyeoooyqcuwcs:
        return $eysyeukyagaoqqcy;
        goto ssaqqyiuueayyauu;
        sgewiwogqyswqiso:
        if (!($aqqmosqmsuueyaes && is_numeric($aqqmosqmsuueyaes))) {
            goto mqwgiouuekicqwqq;
        }
        goto qquiekauycukmquy;
        qquiekauycukmquy:
        wp_delete_comment($aqqmosqmsuueyaes, $cwwowqyuwccuykom);
        goto ykiawsemqwsweosg;
        ykiawsemqwsweosg:
        mqwgiouuekicqwqq:
        goto iecsyeoooyqcuwcs;
        ssaqqyiuueayyauu:
    }
    
    public static function omkaowmygoqwsywq($ggauoeuaesiymgee = 10)
    {
        goto kwqqkyscmkmmycky;
        auqgkmewqmiewwww:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq($ggauoeuaesiymgee);
        goto qoqwwimiekwmggwi;
        qoqwwimiekwmggwi:
        mwmoywcyqwimoeye:
        goto uykawkeowqygeweo;
        kwqqkyscmkmmycky:
        $uuyoeicyoayimaoa = DecoratorOption::get("\x63\x6f\155\155\145\156\164\x73\137\x70\x65\x72\137\x70\141\147\x65", $ggauoeuaesiymgee);
        goto acscqmesgcgqumse;
        acscqmesgcgqumse:
        if ($uuyoeicyoayimaoa) {
            goto mwmoywcyqwimoeye;
        }
        goto auqgkmewqmiewwww;
        uykawkeowqygeweo:
        return $uuyoeicyoayimaoa;
        goto iuwqqquugqmiacic;
        iuwqqquugqmiacic:
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
        goto aswygkquwkiaqews;
        mesaqgsmsoqowuki:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\x65\164\x5f\143\x6f\x6d\155\x65\x6e\164\137\144\x61\164\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes);
        goto ioacggcqeywkqemu;
        emmssoaeueiowaeg:
        if (!$egkeamycaysqsoma) {
            goto oeqaaoswcwwwkkww;
        }
        goto mesaqgsmsoqowuki;
        ioacggcqeywkqemu:
        oeqaaoswcwwwkkww:
        goto aquoociuuukgecia;
        aswygkquwkiaqews:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto asayieoqoamuimcc;
        wqwgaqeywoosssgo:
        wocsaeyyawcwmsiw:
        goto egigiaiiwcmwmumi;
        asayieoqoamuimcc:
        if ($saqmwwmqiwmkiwaa) {
            goto wocsaeyyawcwmsiw;
        }
        goto qwmsyyymeegigkio;
        egigiaiiwcmwmumi:
        $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes->comment_date, false);
        goto emmssoaeueiowaeg;
        qwmsyyymeegigkio:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto wqwgaqeywoosssgo;
        aquoociuuukgecia:
        return $ocogsiouoiuuguym;
        goto sogsyogucsmisoau;
        sogsyogucsmisoau:
    }
}
