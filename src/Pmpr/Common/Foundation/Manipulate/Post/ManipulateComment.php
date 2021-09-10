<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto saigqcycoiqwccow;
        ooqqouikewaoqiia:
        return $aqqmosqmsuueyaes;
        goto gyaagmeooqiysqie;
        kmqyuuaoqoeyweie:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aqqmosqmsuueyaes);
        goto eywgkguqwemswogy;
        eywgkguqwemswogy:
        $aqqmosqmsuueyaes = DecoratorComment::get($aokagokqyuysuksm);
        goto gmyaiiggkqkkqusc;
        saigqcycoiqwccow:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto ukcscyckokswwgkk;
        }
        goto kmqyuuaoqoeyweie;
        gmyaiiggkqkkqusc:
        ukcscyckokswwgkk:
        goto ooqqouikewaoqiia;
        gyaagmeooqiysqie:
    }
    
    public static function mwikyscisascoeea($aqqmosqmsuueyaes)
    {
        goto oimuamcicscqsygs;
        oimuamcicscqsygs:
        $aokagokqyuysuksm = null;
        goto qoasosoiigoioyam;
        gcisscmgwcgaukuy:
        wkoicgygicokiqic:
        goto csayumgmsgqaqocs;
        eawyqmogeqawcuyk:
        if (is_numeric($aqqmosqmsuueyaes)) {
            goto immscoeagqmqciui;
        }
        goto aqwemquogkemogkc;
        ciagoiskqoeqegms:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes->comment_ID;
        goto mcqkesqkqmquqscw;
        kgukocmwemamgkeq:
        ocaoakgkikmuauya:
        goto ciagoiskqoeqegms;
        qoasosoiigoioyam:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto ocaoakgkikmuauya;
        }
        goto eawyqmogeqawcuyk;
        mcqkesqkqmquqscw:
        goto wkoicgygicokiqic;
        goto mqigqiiaucmoeakm;
        csayumgmsgqaqocs:
        return $aokagokqyuysuksm;
        goto eeewkuoauiceusme;
        aqwemquogkemogkc:
        goto wkoicgygicokiqic;
        goto kgukocmwemamgkeq;
        ikakskcmywasiaaw:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes;
        goto gcisscmgwcgaukuy;
        mqigqiiaucmoeakm:
        immscoeagqmqciui:
        goto ikakskcmywasiaaw;
        eeewkuoauiceusme:
    }
    
    public static function ayueggmoqeeukqmq($aqqmosqmsuueyaes)
    {
        goto ssgwgsuyuswaoquy;
        ksyqouicmqcogmow:
        cyokukwiwuywqami:
        goto eemswigwmmkmeuac;
        ssgwgsuyuswaoquy:
        $post = null;
        goto ooskemsasmsukgom;
        emgoksggesqycsum:
        if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
            goto cyokukwiwuywqami;
        }
        goto gyuaowmwgakycqqu;
        ooskemsasmsukgom:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto emgoksggesqycsum;
        gyuaowmwgakycqqu:
        $post = ManipulatePost::get($aqqmosqmsuueyaes->comment_post_ID);
        goto ksyqouicmqcogmow;
        eemswigwmmkmeuac:
        return $post;
        goto yoecqyyoymaykeuy;
        yoecqyyoymaykeuy:
    }
    
    public static function issssuygyewuaswa($aqqmosqmsuueyaes)
    {
        goto kcgskoecgmgsoscu;
        amckomowuaeagges:
        return $qscaoekmoooeuyqg;
        goto mkiskyuukeickeio;
        kcgskoecgmgsoscu:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto ycycoyycscqaqwic;
        kykyeawgsuaygiyk:
        if (!$aqqmosqmsuueyaes) {
            goto iiuyqyimsogcawyu;
        }
        goto kkuisewuceyasium;
        ycycoyycscqaqwic:
        $qscaoekmoooeuyqg = null;
        goto kykyeawgsuaygiyk;
        kkuisewuceyasium:
        $qscaoekmoooeuyqg = ManipulateUser::get($aqqmosqmsuueyaes->user_id, true);
        goto qkaiqseceoaksyoc;
        qkaiqseceoaksyoc:
        iiuyqyimsogcawyu:
        goto amckomowuaeagges;
        mkiskyuukeickeio:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\164\x61\164\x75\x73" => "\x61\154\154", "\x73\x65\141\x72\x63\x68" => '', "\143\x6f\x75\156\164" => false]);
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
        goto myciimmeauksamaa;
        smieosasoeageewe:
        return sprintf("\x25\x73\40\55\40\45\x73\40\55\x20\x25\x73\40\x2d\40\x25\163", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs);
        goto ssequouykiacumek;
        qmweiqisqiikwwcg:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->label;
        goto kiuoaeesiiaqskma;
        wakwucssymmkyoqy:
        $ocogsiouoiuuguym = self::squyiyimquqicqke($aqqmosqmsuueyaes);
        goto smieosasoeageewe;
        oggcgggiciyscsek:
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post, true);
        goto ausiqgkmacksmyce;
        ausiqgkmacksmyce:
        if (!$useksmwkuswkwcqg) {
            goto mgiqmcyayasueaay;
        }
        goto qmweiqisqiikwwcg;
        gymooqgyigeucisi:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($aqqmosqmsuueyaes);
        goto wakwucssymmkyoqy;
        oeimecucwuoikscu:
        $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post);
        goto oggcgggiciyscsek;
        kiuoaeesiiaqskma:
        mgiqmcyayasueaay:
        goto gymooqgyigeucisi;
        myciimmeauksamaa:
        $post = self::ayueggmoqeeukqmq($aqqmosqmsuueyaes);
        goto oeimecucwuoikscu;
        ssequouykiacumek:
    }
    
    public static function immcwcemcmyosyoo($awqscowmskeuymeu = true)
    {
        goto sqokciesoswwaase;
        caasemucaegsgiic:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto ygoayeaicqikqmii;
        uuuyqoukemmekmwy:
        cqmwuskwgsuyqiku:
        goto agyimagkmcyciuqw;
        suaagcyyqywuawcy:
        if (isset($_POST["\141\143\x74\x69\157\156"], $_POST["\x63\157\155\x6d\x65\x6e\x74\x5f\x49\x44"]) && $_POST["\141\143\164\x69\x6f\156"] == "\x65\x64\x69\164\x65\x64\x63\x6f\155\x6d\x65\x6e\164") {
            goto cqmwuskwgsuyqiku;
        }
        goto yeuouysckyiiqgkk;
        osqmooccocasiwwi:
        if (isset($_GET["\x61\x63\x74\151\157\x6e"], $_GET["\x63"]) && $_GET["\x61\143\164\x69\157\156"] == "\x65\144\x69\164\x63\x6f\x6d\x6d\145\x6e\164") {
            goto gowmoegakqaokqwy;
        }
        goto suaagcyyqywuawcy;
        wkmugsoecikiakqq:
        if (!$aqqmosqmsuueyaes) {
            goto guwwcsoquaaiywwg;
        }
        goto caasemucaegsgiic;
        agyimagkmcyciuqw:
        $aqqmosqmsuueyaes = $_POST["\x63\157\x6d\x6d\x65\x6e\164\137\x49\x44"];
        goto omcycqocymkeiawq;
        yeuouysckyiiqgkk:
        goto wyyoauyqkccwquye;
        goto owcmkccqayuewmyi;
        omcycqocymkeiawq:
        wyyoauyqkccwquye:
        goto wkmugsoecikiakqq;
        ygoayeaicqikqmii:
        guwwcsoquaaiywwg:
        goto wwwoeskoucoimecg;
        qiwmescucyayywwe:
        goto wyyoauyqkccwquye;
        goto uuuyqoukemmekmwy;
        owcmkccqayuewmyi:
        gowmoegakqaokqwy:
        goto gqyiykessecacuqq;
        sqokciesoswwaase:
        $aqqmosqmsuueyaes = '';
        goto osqmooccocasiwwi;
        wwwoeskoucoimecg:
        return $aqqmosqmsuueyaes;
        goto okwqmqsuewwwsykg;
        gqyiykessecacuqq:
        $aqqmosqmsuueyaes = $_GET["\143"];
        goto qiwmescucyayywwe;
        okwqmqsuewwwsykg:
    }
    
    public static function delete($aqqmosqmsuueyaes, $cwwowqyuwccuykom = false)
    {
        goto mqwgiouuekicqwqq;
        mqwgiouuekicqwqq:
        $eysyeukyagaoqqcy = false;
        goto iawoeomqmeacqwwm;
        ykiawsemqwsweosg:
        return $eysyeukyagaoqqcy;
        goto iecsyeoooyqcuwcs;
        sgewiwogqyswqiso:
        wp_delete_comment($aqqmosqmsuueyaes, $cwwowqyuwccuykom);
        goto qquiekauycukmquy;
        iawoeomqmeacqwwm:
        if (!($aqqmosqmsuueyaes && is_numeric($aqqmosqmsuueyaes))) {
            goto mqacwakmquqyikgg;
        }
        goto sgewiwogqyswqiso;
        qquiekauycukmquy:
        mqacwakmquqyikgg:
        goto ykiawsemqwsweosg;
        iecsyeoooyqcuwcs:
    }
    
    public static function omkaowmygoqwsywq($ggauoeuaesiymgee = 10)
    {
        goto mwmoywcyqwimoeye;
        auqgkmewqmiewwww:
        ssaqqyiuueayyauu:
        goto qoqwwimiekwmggwi;
        acscqmesgcgqumse:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq($ggauoeuaesiymgee);
        goto auqgkmewqmiewwww;
        qoqwwimiekwmggwi:
        return $uuyoeicyoayimaoa;
        goto uykawkeowqygeweo;
        mwmoywcyqwimoeye:
        $uuyoeicyoayimaoa = DecoratorOption::get("\x63\157\x6d\x6d\145\x6e\164\163\137\160\x65\162\x5f\x70\x61\147\x65", $ggauoeuaesiymgee);
        goto kwqqkyscmkmmycky;
        kwqqkyscmkmmycky:
        if ($uuyoeicyoayimaoa) {
            goto ssaqqyiuueayyauu;
        }
        goto acscqmesgcgqumse;
        uykawkeowqygeweo:
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
        goto oeqaaoswcwwwkkww;
        aswygkquwkiaqews:
        if ($saqmwwmqiwmkiwaa) {
            goto iuwqqquugqmiacic;
        }
        goto asayieoqoamuimcc;
        oeqaaoswcwwwkkww:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto aswygkquwkiaqews;
        asayieoqoamuimcc:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto qwmsyyymeegigkio;
        egigiaiiwcmwmumi:
        if (!$egkeamycaysqsoma) {
            goto wocsaeyyawcwmsiw;
        }
        goto emmssoaeueiowaeg;
        qwmsyyymeegigkio:
        iuwqqquugqmiacic:
        goto wqwgaqeywoosssgo;
        mesaqgsmsoqowuki:
        wocsaeyyawcwmsiw:
        goto ioacggcqeywkqemu;
        emmssoaeueiowaeg:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\x67\x65\164\137\x63\x6f\x6d\155\145\x6e\164\x5f\144\141\164\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes);
        goto mesaqgsmsoqowuki;
        wqwgaqeywoosssgo:
        $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes->comment_date, false);
        goto egigiaiiwcmwmumi;
        ioacggcqeywkqemu:
        return $ocogsiouoiuuguym;
        goto aquoociuuukgecia;
        aquoociuuukgecia:
    }
}
