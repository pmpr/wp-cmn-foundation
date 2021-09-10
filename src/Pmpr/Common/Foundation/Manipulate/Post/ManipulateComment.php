<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        saigqcycoiqwccow:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto ukcscyckokswwgkk;
        }
        goto kmqyuuaoqoeyweie;
        kmqyuuaoqoeyweie:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aqqmosqmsuueyaes);
        goto eywgkguqwemswogy;
        gmyaiiggkqkkqusc:
        ukcscyckokswwgkk:
        goto ooqqouikewaoqiia;
        eywgkguqwemswogy:
        $aqqmosqmsuueyaes = DecoratorComment::get($aokagokqyuysuksm);
        goto gmyaiiggkqkkqusc;
        ooqqouikewaoqiia:
        return $aqqmosqmsuueyaes;
        goto gyaagmeooqiysqie;
        gyaagmeooqiysqie:
    }
    
    public static function mwikyscisascoeea($aqqmosqmsuueyaes)
    {
        goto oimuamcicscqsygs;
        gcisscmgwcgaukuy:
        wkoicgygicokiqic:
        goto csayumgmsgqaqocs;
        csayumgmsgqaqocs:
        return $aokagokqyuysuksm;
        goto eeewkuoauiceusme;
        oimuamcicscqsygs:
        $aokagokqyuysuksm = null;
        goto qoasosoiigoioyam;
        kgukocmwemamgkeq:
        ocaoakgkikmuauya:
        goto ciagoiskqoeqegms;
        ikakskcmywasiaaw:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes;
        goto gcisscmgwcgaukuy;
        eawyqmogeqawcuyk:
        if (is_numeric($aqqmosqmsuueyaes)) {
            goto immscoeagqmqciui;
        }
        goto aqwemquogkemogkc;
        mqigqiiaucmoeakm:
        immscoeagqmqciui:
        goto ikakskcmywasiaaw;
        aqwemquogkemogkc:
        goto wkoicgygicokiqic;
        goto kgukocmwemamgkeq;
        mcqkesqkqmquqscw:
        goto wkoicgygicokiqic;
        goto mqigqiiaucmoeakm;
        qoasosoiigoioyam:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto ocaoakgkikmuauya;
        }
        goto eawyqmogeqawcuyk;
        ciagoiskqoeqegms:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes->comment_ID;
        goto mcqkesqkqmquqscw;
        eeewkuoauiceusme:
    }
    
    public static function ayueggmoqeeukqmq($aqqmosqmsuueyaes)
    {
        goto ssgwgsuyuswaoquy;
        gyuaowmwgakycqqu:
        $post = ManipulatePost::get($aqqmosqmsuueyaes->comment_post_ID);
        goto ksyqouicmqcogmow;
        ooskemsasmsukgom:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto emgoksggesqycsum;
        emgoksggesqycsum:
        if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
            goto cyokukwiwuywqami;
        }
        goto gyuaowmwgakycqqu;
        ssgwgsuyuswaoquy:
        $post = null;
        goto ooskemsasmsukgom;
        eemswigwmmkmeuac:
        return $post;
        goto yoecqyyoymaykeuy;
        ksyqouicmqcogmow:
        cyokukwiwuywqami:
        goto eemswigwmmkmeuac;
        yoecqyyoymaykeuy:
    }
    
    public static function issssuygyewuaswa($aqqmosqmsuueyaes)
    {
        goto kcgskoecgmgsoscu;
        kkuisewuceyasium:
        $qscaoekmoooeuyqg = ManipulateUser::get($aqqmosqmsuueyaes->user_id, true);
        goto qkaiqseceoaksyoc;
        kykyeawgsuaygiyk:
        if (!$aqqmosqmsuueyaes) {
            goto iiuyqyimsogcawyu;
        }
        goto kkuisewuceyasium;
        amckomowuaeagges:
        return $qscaoekmoooeuyqg;
        goto mkiskyuukeickeio;
        kcgskoecgmgsoscu:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto ycycoyycscqaqwic;
        qkaiqseceoaksyoc:
        iiuyqyimsogcawyu:
        goto amckomowuaeagges;
        ycycoyycscqaqwic:
        $qscaoekmoooeuyqg = null;
        goto kykyeawgsuaygiyk;
        mkiskyuukeickeio:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\x74\x61\x74\x75\163" => "\x61\154\x6c", "\x73\145\x61\162\x63\150" => '', "\x63\157\x75\156\x74" => false]);
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
        oeimecucwuoikscu:
        $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post);
        goto oggcgggiciyscsek;
        ausiqgkmacksmyce:
        if (!$useksmwkuswkwcqg) {
            goto mgiqmcyayasueaay;
        }
        goto qmweiqisqiikwwcg;
        gymooqgyigeucisi:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($aqqmosqmsuueyaes);
        goto wakwucssymmkyoqy;
        kiuoaeesiiaqskma:
        mgiqmcyayasueaay:
        goto gymooqgyigeucisi;
        qmweiqisqiikwwcg:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->label;
        goto kiuoaeesiiaqskma;
        wakwucssymmkyoqy:
        $ocogsiouoiuuguym = self::squyiyimquqicqke($aqqmosqmsuueyaes);
        goto smieosasoeageewe;
        smieosasoeageewe:
        return sprintf("\x25\x73\40\x2d\40\45\x73\40\x2d\40\45\163\40\55\x20\45\163", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs);
        goto ssequouykiacumek;
        oggcgggiciyscsek:
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post, true);
        goto ausiqgkmacksmyce;
        myciimmeauksamaa:
        $post = self::ayueggmoqeeukqmq($aqqmosqmsuueyaes);
        goto oeimecucwuoikscu;
        ssequouykiacumek:
    }
    
    public static function immcwcemcmyosyoo($awqscowmskeuymeu = true)
    {
        goto sqokciesoswwaase;
        owcmkccqayuewmyi:
        gowmoegakqaokqwy:
        goto gqyiykessecacuqq;
        omcycqocymkeiawq:
        wyyoauyqkccwquye:
        goto wkmugsoecikiakqq;
        suaagcyyqywuawcy:
        if (isset($_POST["\141\x63\164\x69\x6f\x6e"], $_POST["\x63\x6f\x6d\155\145\156\164\x5f\111\x44"]) && $_POST["\x61\143\164\151\x6f\x6e"] == "\x65\144\151\164\x65\144\x63\157\x6d\155\x65\x6e\164") {
            goto cqmwuskwgsuyqiku;
        }
        goto yeuouysckyiiqgkk;
        uuuyqoukemmekmwy:
        cqmwuskwgsuyqiku:
        goto agyimagkmcyciuqw;
        yeuouysckyiiqgkk:
        goto wyyoauyqkccwquye;
        goto owcmkccqayuewmyi;
        qiwmescucyayywwe:
        goto wyyoauyqkccwquye;
        goto uuuyqoukemmekmwy;
        agyimagkmcyciuqw:
        $aqqmosqmsuueyaes = $_POST["\x63\x6f\x6d\155\145\156\x74\137\x49\x44"];
        goto omcycqocymkeiawq;
        gqyiykessecacuqq:
        $aqqmosqmsuueyaes = $_GET["\x63"];
        goto qiwmescucyayywwe;
        wkmugsoecikiakqq:
        if (!$aqqmosqmsuueyaes) {
            goto guwwcsoquaaiywwg;
        }
        goto caasemucaegsgiic;
        caasemucaegsgiic:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto ygoayeaicqikqmii;
        ygoayeaicqikqmii:
        guwwcsoquaaiywwg:
        goto wwwoeskoucoimecg;
        sqokciesoswwaase:
        $aqqmosqmsuueyaes = '';
        goto osqmooccocasiwwi;
        wwwoeskoucoimecg:
        return $aqqmosqmsuueyaes;
        goto okwqmqsuewwwsykg;
        osqmooccocasiwwi:
        if (isset($_GET["\141\143\164\151\x6f\156"], $_GET["\143"]) && $_GET["\141\143\x74\x69\157\156"] == "\x65\x64\x69\x74\143\x6f\x6d\x6d\x65\x6e\164") {
            goto gowmoegakqaokqwy;
        }
        goto suaagcyyqywuawcy;
        okwqmqsuewwwsykg:
    }
    
    public static function delete($aqqmosqmsuueyaes, $cwwowqyuwccuykom = false)
    {
        goto mqwgiouuekicqwqq;
        iawoeomqmeacqwwm:
        if (!($aqqmosqmsuueyaes && is_numeric($aqqmosqmsuueyaes))) {
            goto mqacwakmquqyikgg;
        }
        goto sgewiwogqyswqiso;
        sgewiwogqyswqiso:
        wp_delete_comment($aqqmosqmsuueyaes, $cwwowqyuwccuykom);
        goto qquiekauycukmquy;
        qquiekauycukmquy:
        mqacwakmquqyikgg:
        goto ykiawsemqwsweosg;
        ykiawsemqwsweosg:
        return $eysyeukyagaoqqcy;
        goto iecsyeoooyqcuwcs;
        mqwgiouuekicqwqq:
        $eysyeukyagaoqqcy = false;
        goto iawoeomqmeacqwwm;
        iecsyeoooyqcuwcs:
    }
    
    public static function omkaowmygoqwsywq($ggauoeuaesiymgee = 10)
    {
        goto mwmoywcyqwimoeye;
        kwqqkyscmkmmycky:
        if ($uuyoeicyoayimaoa) {
            goto ssaqqyiuueayyauu;
        }
        goto acscqmesgcgqumse;
        mwmoywcyqwimoeye:
        $uuyoeicyoayimaoa = DecoratorOption::get("\x63\157\155\x6d\145\x6e\164\x73\137\x70\x65\x72\x5f\x70\x61\x67\145", $ggauoeuaesiymgee);
        goto kwqqkyscmkmmycky;
        acscqmesgcgqumse:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq($ggauoeuaesiymgee);
        goto auqgkmewqmiewwww;
        auqgkmewqmiewwww:
        ssaqqyiuueayyauu:
        goto qoqwwimiekwmggwi;
        qoqwwimiekwmggwi:
        return $uuyoeicyoayimaoa;
        goto uykawkeowqygeweo;
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
        asayieoqoamuimcc:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto qwmsyyymeegigkio;
        oeqaaoswcwwwkkww:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto aswygkquwkiaqews;
        wqwgaqeywoosssgo:
        $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes->comment_date, false);
        goto egigiaiiwcmwmumi;
        emmssoaeueiowaeg:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\x67\x65\x74\x5f\143\157\x6d\155\145\x6e\x74\x5f\x64\141\x74\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes);
        goto mesaqgsmsoqowuki;
        mesaqgsmsoqowuki:
        wocsaeyyawcwmsiw:
        goto ioacggcqeywkqemu;
        ioacggcqeywkqemu:
        return $ocogsiouoiuuguym;
        goto aquoociuuukgecia;
        egigiaiiwcmwmumi:
        if (!$egkeamycaysqsoma) {
            goto wocsaeyyawcwmsiw;
        }
        goto emmssoaeueiowaeg;
        aswygkquwkiaqews:
        if ($saqmwwmqiwmkiwaa) {
            goto iuwqqquugqmiacic;
        }
        goto asayieoqoamuimcc;
        qwmsyyymeegigkio:
        iuwqqquugqmiacic:
        goto wqwgaqeywoosssgo;
        aquoociuuukgecia:
    }
}
