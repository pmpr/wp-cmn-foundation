<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto uuymwcykywemycwy;
        ceamikuakogkkmce:
        wymgkoyemeuosskg:
        goto sgkkcoeimqcykymu;
        euqgsqmmekoogmew:
        $aokagokqyuysuksm = self::mwikyscisascoeea($aqqmosqmsuueyaes);
        goto gaqmoiowskqycuqe;
        sgkkcoeimqcykymu:
        return $aqqmosqmsuueyaes;
        goto cqockmkimoaosksq;
        gaqmoiowskqycuqe:
        $aqqmosqmsuueyaes = DecoratorComment::get($aokagokqyuysuksm);
        goto ceamikuakogkkmce;
        uuymwcykywemycwy:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto wymgkoyemeuosskg;
        }
        goto euqgsqmmekoogmew;
        cqockmkimoaosksq:
    }
    
    public static function mwikyscisascoeea($aqqmosqmsuueyaes)
    {
        goto iguuswyoweycqica;
        gkssguuuysiaciyq:
        aauykwiueasmccai:
        goto gmcoiisikwiewwwa;
        iguuswyoweycqica:
        $aokagokqyuysuksm = null;
        goto smicguciweuscgqg;
        iyyowwiyyogmkemi:
        goto aauykwiueasmccai;
        goto qggkkowqqmasaaua;
        uwwyuuoqyieceogk:
        goto aauykwiueasmccai;
        goto kkowaueqyseqswyc;
        eqecyasoqwkcmmgk:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes;
        goto gkssguuuysiaciyq;
        asciqecgiacoiuoa:
        $aokagokqyuysuksm = $aqqmosqmsuueyaes->comment_ID;
        goto iyyowwiyyogmkemi;
        gmcoiisikwiewwwa:
        return $aokagokqyuysuksm;
        goto kqwigmeaoqawgwus;
        smicguciweuscgqg:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto giemuuaeoucmcsuy;
        }
        goto qsmmmigmmsswamkq;
        kkowaueqyseqswyc:
        giemuuaeoucmcsuy:
        goto asciqecgiacoiuoa;
        qsmmmigmmsswamkq:
        if (is_numeric($aqqmosqmsuueyaes)) {
            goto woesikuawyussaiy;
        }
        goto uwwyuuoqyieceogk;
        qggkkowqqmasaaua:
        woesikuawyussaiy:
        goto eqecyasoqwkcmmgk;
        kqwigmeaoqawgwus:
    }
    
    public static function ayueggmoqeeukqmq($aqqmosqmsuueyaes)
    {
        goto imwacgsewasucqqm;
        yogsocukuqeumqyk:
        $post = ManipulatePost::get($aqqmosqmsuueyaes->comment_post_ID);
        goto icqaiqouueccouug;
        icqaiqouueccouug:
        auaeiymgkqmoqckc:
        goto peggaoiyqoswguwq;
        ummwyumussicqiyk:
        if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
            goto auaeiymgkqmoqckc;
        }
        goto yogsocukuqeumqyk;
        wkmuicuoikisiwko:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto ummwyumussicqiyk;
        peggaoiyqoswguwq:
        return $post;
        goto uyeueqqsggiiwqga;
        imwacgsewasucqqm:
        $post = null;
        goto wkmuicuoikisiwko;
        uyeueqqsggiiwqga:
    }
    
    public static function issssuygyewuaswa($aqqmosqmsuueyaes)
    {
        goto dwuoyyiimkaumsmy;
        oawykgyecmoyewge:
        if (!$aqqmosqmsuueyaes) {
            goto maiiwqyuwqcgswuq;
        }
        goto cgioseiiiogoowqi;
        igwiauqkemegeiga:
        maiiwqyuwqcgswuq:
        goto qmqekyugykgcsomq;
        cgioseiiiogoowqi:
        $qscaoekmoooeuyqg = ManipulateUser::get($aqqmosqmsuueyaes->user_id, true);
        goto igwiauqkemegeiga;
        dwuoyyiimkaumsmy:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto iiucyemcukiwgigo;
        qmqekyugykgcsomq:
        return $qscaoekmoooeuyqg;
        goto qocogcqouiwqgeak;
        iiucyemcukiwgigo:
        $qscaoekmoooeuyqg = null;
        goto oawykgyecmoyewge;
        qocogcqouiwqgeak:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\164\141\x74\165\x73" => "\141\x6c\154", "\163\145\141\x72\x63\x68" => '', "\143\x6f\165\x6e\x74" => false]);
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
        goto ocymgeqaqyickuqe;
        eogagykquokuwamu:
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post, true);
        goto gimuekaasmwuiwkk;
        ekyoguakcuwmciqy:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($aqqmosqmsuueyaes);
        goto qksmcagaccmosois;
        qyqiquqgyyommaia:
        $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post);
        goto eogagykquokuwamu;
        eoqiaaiuakecqgwg:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->label;
        goto ukqyckkukqmqegiq;
        ocymgeqaqyickuqe:
        $post = self::ayueggmoqeeukqmq($aqqmosqmsuueyaes);
        goto qyqiquqgyyommaia;
        qksmcagaccmosois:
        $ocogsiouoiuuguym = self::squyiyimquqicqke($aqqmosqmsuueyaes);
        goto oiuyaoysceyuiiky;
        oiuyaoysceyuiiky:
        return sprintf("\x25\x73\40\55\40\x25\163\40\55\40\x25\163\40\x2d\x20\45\x73", $qscaoekmoooeuyqg, $ocogsiouoiuuguym, $useksmwkuswkwcqg, $meqocwsecsywiiqs);
        goto mcqwwkaqcwqiqsey;
        gimuekaasmwuiwkk:
        if (!$useksmwkuswkwcqg) {
            goto iascgqeomcqkckuu;
        }
        goto eoqiaaiuakecqgwg;
        ukqyckkukqmqegiq:
        iascgqeomcqkckuu:
        goto ekyoguakcuwmciqy;
        mcqwwkaqcwqiqsey:
    }
    
    public static function immcwcemcmyosyoo($awqscowmskeuymeu = true)
    {
        goto yaeqgqeakowuiueo;
        yaeqgqeakowuiueo:
        $aqqmosqmsuueyaes = '';
        goto umemmccckeguuasa;
        wqsciykkagceeqig:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto asuqkmkikmemykke;
        asuqkmkikmemykke:
        qwceeuwmumkocgmc:
        goto wuaicwqicyygmeqy;
        qmmieggqaquyceso:
        goto qcyiweqwugwgmogw;
        goto mecymuqyiykqykaw;
        caokwigyuyaygyqo:
        qcyiweqwugwgmogw:
        goto cskamggwwqyceoqc;
        umemmccckeguuasa:
        if (isset($_GET["\141\143\x74\x69\x6f\156"], $_GET["\143"]) && $_GET["\141\x63\x74\x69\157\156"] == "\x65\x64\x69\164\143\x6f\155\x6d\x65\156\164") {
            goto oqiysqiemaogowyw;
        }
        goto ukoimsacquweeuay;
        semaiguaaagccqko:
        $aqqmosqmsuueyaes = $_GET["\x63"];
        goto qmmieggqaquyceso;
        ukoimsacquweeuay:
        if (isset($_POST["\141\x63\x74\151\157\x6e"], $_POST["\143\x6f\155\x6d\x65\156\x74\x5f\111\x44"]) && $_POST["\141\x63\164\151\157\x6e"] == "\x65\144\151\164\x65\x64\x63\x6f\x6d\x6d\145\156\164") {
            goto owkgmsiiuwocgqae;
        }
        goto cqocaakmqyweouyu;
        cskamggwwqyceoqc:
        if (!$aqqmosqmsuueyaes) {
            goto qwceeuwmumkocgmc;
        }
        goto wqsciykkagceeqig;
        mcgewsgecagcyyow:
        $aqqmosqmsuueyaes = $_POST["\143\x6f\155\x6d\145\156\164\137\111\104"];
        goto caokwigyuyaygyqo;
        wuaicwqicyygmeqy:
        return $aqqmosqmsuueyaes;
        goto qygiamqwkweamqkq;
        weuqyyaycsmwwiws:
        oqiysqiemaogowyw:
        goto semaiguaaagccqko;
        mecymuqyiykqykaw:
        owkgmsiiuwocgqae:
        goto mcgewsgecagcyyow;
        cqocaakmqyweouyu:
        goto qcyiweqwugwgmogw;
        goto weuqyyaycsmwwiws;
        qygiamqwkweamqkq:
    }
    
    public static function delete($aqqmosqmsuueyaes, $cwwowqyuwccuykom = false)
    {
        goto yaqyksksaccowaka;
        iigwamecymwyyswe:
        if (!($aqqmosqmsuueyaes && is_numeric($aqqmosqmsuueyaes))) {
            goto oaikagoacgwugggu;
        }
        goto wgweyasskmqqmwug;
        yaqyksksaccowaka:
        $eysyeukyagaoqqcy = false;
        goto iigwamecymwyyswe;
        wgsisgoqauqwugim:
        return $eysyeukyagaoqqcy;
        goto kmeuiagkqyuiuagq;
        wgweyasskmqqmwug:
        wp_delete_comment($aqqmosqmsuueyaes, $cwwowqyuwccuykom);
        goto iygiqwyyouyuccmu;
        iygiqwyyouyuccmu:
        oaikagoacgwugggu:
        goto wgsisgoqauqwugim;
        kmeuiagkqyuiuagq:
    }
    
    public static function omkaowmygoqwsywq($ggauoeuaesiymgee = 10)
    {
        goto ucaeyoaswykigemu;
        kyokwkaegkeqewue:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq($ggauoeuaesiymgee);
        goto cycyoyssckiiakaq;
        kkyquoqoogoaeiqm:
        return $uuyoeicyoayimaoa;
        goto goooacyqswyceisw;
        cycyoyssckiiakaq:
        swigeoaqekeyaiky:
        goto kkyquoqoogoaeiqm;
        ucaeyoaswykigemu:
        $uuyoeicyoayimaoa = DecoratorOption::get("\x63\x6f\155\x6d\x65\x6e\164\x73\x5f\x70\x65\162\137\x70\141\x67\x65", $ggauoeuaesiymgee);
        goto wiwowqkgukquawis;
        wiwowqkgukquawis:
        if ($uuyoeicyoayimaoa) {
            goto swigeoaqekeyaiky;
        }
        goto kyokwkaegkeqewue;
        goooacyqswyceisw:
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
        goto umqmkomieoegoegi;
        wuqqomswuicqemeq:
        return $ocogsiouoiuuguym;
        goto ccasiuwwmikcmuok;
        susyceeqmusmwyui:
        if ($saqmwwmqiwmkiwaa) {
            goto quaycauswqeioegu;
        }
        goto qiwasugqiqyukias;
        qiwasugqiqyukias:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto esiyseououaawqmg;
        skwmsqkqogmcumqq:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\x65\x74\x5f\143\x6f\155\x6d\145\156\x74\x5f\x64\x61\164\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes);
        goto aegyswiqyyweooie;
        aegyswiqyyweooie:
        icaqeewacewkowqw:
        goto wuqqomswuicqemeq;
        oaoimwmaqkueucss:
        if (!$egkeamycaysqsoma) {
            goto icaqeewacewkowqw;
        }
        goto skwmsqkqogmcumqq;
        esiyseououaawqmg:
        quaycauswqeioegu:
        goto kscqewsaogiywguk;
        kscqewsaogiywguk:
        $ocogsiouoiuuguym = mysql2date($saqmwwmqiwmkiwaa, $aqqmosqmsuueyaes->comment_date, false);
        goto oaoimwmaqkueucss;
        umqmkomieoegoegi:
        $aqqmosqmsuueyaes = self::get($aqqmosqmsuueyaes);
        goto susyceeqmusmwyui;
        ccasiuwwmikcmuok:
    }
}
