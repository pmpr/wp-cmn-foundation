<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateAjax extends Manipulate
{
    
    public static function mcgoysmkqsqooceq() : bool
    {
        goto seqcuygkmogesgsw;
        ooqyuwsmqcmmwiuy:
        if (!(ManipulateArray::get($_SERVER, "\x48\x54\x54\x50\137\x58\x5f\x52\105\x51\x55\105\x53\124\105\104\137\x57\x49\124\110") == "\x58\115\x4c\110\x74\x74\x70\122\145\161\x75\145\x73\x74" || self::cmaecekuqkwmemms("\104\117\111\116\107\x5f\101\x4a\101\x58"))) {
            goto cokuamakgaokeooy;
        }
        goto maiiaecisekgocgs;
        aysowqiuocakwcic:
        mooeqigccuskogqm:
        goto rioiswicyaiaqscu;
        seqcuygkmogesgsw:
        $mcgoysmkqsqooceq = false;
        goto ekqmseimucoqkuaa;
        ikmgqgmecqcqumwg:
        $mcgoysmkqsqooceq = true;
        goto qycioskysmyisuaq;
        yoooiiugiwuwomcg:
        wyumwugwoycammog:
        goto uugysiwkssgqqasy;
        kegsswygcecmiumq:
        cokuamakgaokeooy:
        goto acoiommggkmcwoec;
        acoiommggkmcwoec:
        goto mooeqigccuskogqm;
        goto yoooiiugiwuwomcg;
        maiiaecisekgocgs:
        $mcgoysmkqsqooceq = true;
        goto kegsswygcecmiumq;
        rioiswicyaiaqscu:
        goto wiiegigayuiikwew;
        goto suqqaiqcyikmwuak;
        uicekgggkiwiyykk:
        if (function_exists("\x69\x73\x5f\x61\x6a\x61\170") && is_ajax()) {
            goto wyumwugwoycammog;
        }
        goto ooqyuwsmqcmmwiuy;
        ekqmseimucoqkuaa:
        if (function_exists("\x77\160\x5f\144\x6f\x69\156\147\x5f\141\152\x61\170") && wp_doing_ajax()) {
            goto msswemwawesaoqgi;
        }
        goto uicekgggkiwiyykk;
        qycioskysmyisuaq:
        wiiegigayuiikwew:
        goto wwmaagcmssuqyuyo;
        wwmaagcmssuqyuyo:
        return $mcgoysmkqsqooceq;
        goto dasseuygmamimemo;
        uugysiwkssgqqasy:
        $mcgoysmkqsqooceq = true;
        goto aysowqiuocakwcic;
        suqqaiqcyikmwuak:
        msswemwawesaoqgi:
        goto ikmgqgmecqcqumwg;
        dasseuygmamimemo:
    }
    
    public static function oiucukewkckkwiqc() : ?string
    {
        return admin_url("\x61\x64\155\x69\156\55\x61\x6a\141\170\x2e\x70\150\x70");
    }
    
    public static function imkyucqsciqykkee($uamcoiueqaamsqma, $kigowwqauiumummw = true)
    {
        goto gmssueaqqeomimkc;
        eseukqeswwciauqo:
        wp_send_json_error($uamcoiueqaamsqma);
        goto isaumaiwsokyqgku;
        ssgmgeyqauwowayi:
        kecysscqgsiiqiuy:
        goto kaewsesomywgaqya;
        uwymkmkoccikuayq:
        wp_send_json_success($uamcoiueqaamsqma);
        goto ssgmgeyqauwowayi;
        kaewsesomywgaqya:
        return $uamcoiueqaamsqma;
        goto eimkikcwmqgeaaik;
        isaumaiwsokyqgku:
        goto kecysscqgsiiqiuy;
        goto wuoiuakueguccsic;
        wuoiuakueguccsic:
        gcuqqquokaqaacwk:
        goto uwymkmkoccikuayq;
        gmssueaqqeomimkc:
        if ($kigowwqauiumummw) {
            goto gcuqqquokaqaacwk;
        }
        goto eseukqeswwciauqo;
        eimkikcwmqgeaaik:
    }
    
    public static function wqsmsuyggkkyyocc($aiamqeawckcsuaou, $seauiwyeoycowegg = "\156\157\156\143\x65", $gqgoqaeswmcwagoi = false)
    {
        return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi);
    }
}
