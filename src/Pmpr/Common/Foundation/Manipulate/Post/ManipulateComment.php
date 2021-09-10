<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        eywgkguqwemswogy:
        $aqqmosqmsuueyaes = DecoratorComment::get($aokagokqyuysuksm);
        goto gmyaiiggkqkkqusc;
        gmyaiiggkqkkqusc:
        ukcscyckokswwgkk:
        goto ooqqouikewaoqiia;
        ooqqouikewaoqiia:
        return $aqqmosqmsuueyaes;
        goto gyaagmeooqiysqie;
        kmqyuuaoqoeyweie:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aqqmosqmsuueyaes);
        goto eywgkguqwemswogy;
        saigqcycoiqwccow:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto ukcscyckokswwgkk;
        }
        goto kmqyuuaoqoeyweie;
        gyaagmeooqiysqie:
    }
    
    public static function mwikyscisascoeea($aqqmosqmsuueyaes)
    {
        goto oimuamcicscqsygs;
        qoasosoiigoioyam:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto ocaoakgkikmuauya;
        }
        goto eawyqmogeqawcuyk;
        ciagoiskqoeqegms:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes->comment_ID;
        goto mcqkesqkqmquqscw;
        eawyqmogeqawcuyk:
        if (is_numeric($aqqmosqmsuueyaes)) {
            goto immscoeagqmqciui;
        }
        goto aqwemquogkemogkc;
        csayumgmsgqaqocs:
        return $aokagokqyuysuksm;
        goto eeewkuoauiceusme;
        ikakskcmywasiaaw:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes;
        goto gcisscmgwcgaukuy;
        gcisscmgwcgaukuy:
        wkoicgygicokiqic:
        goto csayumgmsgqaqocs;
        mqigqiiaucmoeakm:
        immscoeagqmqciui:
        goto ikakskcmywasiaaw;
        oimuamcicscqsygs:
        $aokagokqyuysuksm = null;
        goto qoasosoiigoioyam;
        aqwemquogkemogkc:
        goto wkoicgygicokiqic;
        goto kgukocmwemamgkeq;
        mcqkesqkqmquqscw:
        goto wkoicgygicokiqic;
        goto mqigqiiaucmoeakm;
        kgukocmwemamgkeq:
        ocaoakgkikmuauya:
        goto ciagoiskqoeqegms;
        eeewkuoauiceusme:
    }
    
    public static function ayueggmoqeeukqmq($aqqmosqmsuueyaes)
    {
        goto ssgwgsuyuswaoquy;
        eemswigwmmkmeuac:
        return $post;
        goto yoecqyyoymaykeuy;
        emgoksggesqycsum:
        if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
            goto cyokukwiwuywqami;
        }
        goto gyuaowmwgakycqqu;
        ssgwgsuyuswaoquy:
        $post = null;
        goto ooskemsasmsukgom;
        ooskemsasmsukgom:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto emgoksggesqycsum;
        gyuaowmwgakycqqu:
        $post = ManipulatePost::get($aqqmosqmsuueyaes->comment_post_ID);
        goto ksyqouicmqcogmow;
        ksyqouicmqcogmow:
        cyokukwiwuywqami:
        goto eemswigwmmkmeuac;
        yoecqyyoymaykeuy:
    }
    
    public static function issssuygyewuaswa($aqqmosqmsuueyaes)
    {
        goto kcgskoecgmgsoscu;
        qkaiqseceoaksyoc:
        iiuyqyimsogcawyu:
        goto amckomowuaeagges;
        kykyeawgsuaygiyk:
        if (!$aqqmosqmsuueyaes) {
            goto iiuyqyimsogcawyu;
        }
        goto kkuisewuceyasium;
        kkuisewuceyasium:
        $qscaoekmoooeuyqg = ManipulateUser::get($aqqmosqmsuueyaes->user_id, true);
        goto qkaiqseceoaksyoc;
        kcgskoecgmgsoscu:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto ycycoyycscqaqwic;
        ycycoyycscqaqwic:
        $qscaoekmoooeuyqg = null;
        goto kykyeawgsuaygiyk;
        amckomowuaeagges:
        return $qscaoekmoooeuyqg;
        goto mkiskyuukeickeio;
        mkiskyuukeickeio:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\164\x61\x74\165\163" => "\141\154\x6c", "\163\x65\141\x72\143\150" => '', "\x63\x6f\x75\156\x74" => false]);
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
        myciimmeauksamaa:
        $post = self::ayueggmoqeeukqmq($aqqmosqmsuueyaes);
        goto oeimecucwuoikscu;
        wakwucssymmkyoqy:
        $ocogsiouoiuuguym = self::squyiyimquqicqke($aqqmosqmsuueyaes);
        goto smieosasoeageewe;
        ausiqgkmacksmyce:
        if (!$useksmwkuswkwcqg) {
            goto mgiqmcyayasueaay;
        }
        goto qmweiqisqiikwwcg;
        oggcgggiciyscsek:
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post, true);
        goto ausiqgkmacksmyce;
        oeimecucwuoikscu:
        $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post);
        goto oggcgggiciyscsek;
        smieosasoeageewe:
        return sprintf("\x25\163\x20\x2d\40\x25\x73\40\55\x20\45\163\40\x2d\40\x25\163", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs);
        goto ssequouykiacumek;
        kiuoaeesiiaqskma:
        mgiqmcyayasueaay:
        goto gymooqgyigeucisi;
        gymooqgyigeucisi:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($aqqmosqmsuueyaes);
        goto wakwucssymmkyoqy;
        qmweiqisqiikwwcg:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->label;
        goto kiuoaeesiiaqskma;
        ssequouykiacumek:
    }
    
    public static function immcwcemcmyosyoo($awqscowmskeuymeu = true)
    {
        goto sqokciesoswwaase;
        qiwmescucyayywwe:
        goto wyyoauyqkccwquye;
        goto uuuyqoukemmekmwy;
        wkmugsoecikiakqq:
        if (!$aqqmosqmsuueyaes) {
            goto guwwcsoquaaiywwg;
        }
        goto caasemucaegsgiic;
        ygoayeaicqikqmii:
        guwwcsoquaaiywwg:
        goto wwwoeskoucoimecg;
        uuuyqoukemmekmwy:
        cqmwuskwgsuyqiku:
        goto agyimagkmcyciuqw;
        yeuouysckyiiqgkk:
        goto wyyoauyqkccwquye;
        goto owcmkccqayuewmyi;
        omcycqocymkeiawq:
        wyyoauyqkccwquye:
        goto wkmugsoecikiakqq;
        owcmkccqayuewmyi:
        gowmoegakqaokqwy:
        goto gqyiykessecacuqq;
        sqokciesoswwaase:
        $aqqmosqmsuueyaes = '';
        goto osqmooccocasiwwi;
        suaagcyyqywuawcy:
        if (isset($_POST["\141\x63\x74\151\x6f\x6e"], $_POST["\143\x6f\155\155\x65\156\164\x5f\111\104"]) && $_POST["\141\x63\164\151\157\156"] == "\145\x64\151\x74\x65\x64\x63\x6f\155\155\x65\x6e\x74") {
            goto cqmwuskwgsuyqiku;
        }
        goto yeuouysckyiiqgkk;
        gqyiykessecacuqq:
        $aqqmosqmsuueyaes = $_GET["\143"];
        goto qiwmescucyayywwe;
        osqmooccocasiwwi:
        if (isset($_GET["\x61\143\x74\151\157\x6e"], $_GET["\x63"]) && $_GET["\x61\x63\164\x69\157\x6e"] == "\145\144\x69\x74\x63\x6f\x6d\155\x65\156\164") {
            goto gowmoegakqaokqwy;
        }
        goto suaagcyyqywuawcy;
        wwwoeskoucoimecg:
        return $aqqmosqmsuueyaes;
        goto okwqmqsuewwwsykg;
        agyimagkmcyciuqw:
        $aqqmosqmsuueyaes = $_POST["\143\157\155\x6d\145\156\164\x5f\111\x44"];
        goto omcycqocymkeiawq;
        caasemucaegsgiic:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto ygoayeaicqikqmii;
        okwqmqsuewwwsykg:
    }
    
    public static function delete($aqqmosqmsuueyaes, $cwwowqyuwccuykom = false)
    {
        goto mqwgiouuekicqwqq;
        qquiekauycukmquy:
        mqacwakmquqyikgg:
        goto ykiawsemqwsweosg;
        iawoeomqmeacqwwm:
        if (!($aqqmosqmsuueyaes && is_numeric($aqqmosqmsuueyaes))) {
            goto mqacwakmquqyikgg;
        }
        goto sgewiwogqyswqiso;
        ykiawsemqwsweosg:
        return $eysyeukyagaoqqcy;
        goto iecsyeoooyqcuwcs;
        sgewiwogqyswqiso:
        wp_delete_comment($aqqmosqmsuueyaes, $cwwowqyuwccuykom);
        goto qquiekauycukmquy;
        mqwgiouuekicqwqq:
        $eysyeukyagaoqqcy = false;
        goto iawoeomqmeacqwwm;
        iecsyeoooyqcuwcs:
    }
    
    public static function omkaowmygoqwsywq($ggauoeuaesiymgee = 10)
    {
        goto mwmoywcyqwimoeye;
        qoqwwimiekwmggwi:
        return $uuyoeicyoayimaoa;
        goto uykawkeowqygeweo;
        auqgkmewqmiewwww:
        ssaqqyiuueayyauu:
        goto qoqwwimiekwmggwi;
        kwqqkyscmkmmycky:
        if ($uuyoeicyoayimaoa) {
            goto ssaqqyiuueayyauu;
        }
        goto acscqmesgcgqumse;
        mwmoywcyqwimoeye:
        $uuyoeicyoayimaoa = DecoratorOption::get("\x63\157\x6d\155\x65\156\x74\163\x5f\160\x65\162\x5f\x70\141\147\145", $ggauoeuaesiymgee);
        goto kwqqkyscmkmmycky;
        acscqmesgcgqumse:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq($ggauoeuaesiymgee);
        goto auqgkmewqmiewwww;
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
        qwmsyyymeegigkio:
        iuwqqquugqmiacic:
        goto wqwgaqeywoosssgo;
        oeqaaoswcwwwkkww:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto aswygkquwkiaqews;
        egigiaiiwcmwmumi:
        if (!$egkeamycaysqsoma) {
            goto wocsaeyyawcwmsiw;
        }
        goto emmssoaeueiowaeg;
        asayieoqoamuimcc:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto qwmsyyymeegigkio;
        mesaqgsmsoqowuki:
        wocsaeyyawcwmsiw:
        goto ioacggcqeywkqemu;
        emmssoaeueiowaeg:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\145\x74\137\x63\x6f\x6d\x6d\x65\x6e\164\x5f\x64\141\x74\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes);
        goto mesaqgsmsoqowuki;
        aswygkquwkiaqews:
        if ($saqmwwmqiwmkiwaa) {
            goto iuwqqquugqmiacic;
        }
        goto asayieoqoamuimcc;
        wqwgaqeywoosssgo:
        $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes->comment_date, false);
        goto egigiaiiwcmwmumi;
        ioacggcqeywkqemu:
        return $ocogsiouoiuuguym;
        goto aquoociuuukgecia;
        aquoociuuukgecia:
    }
}
