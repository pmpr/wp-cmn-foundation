<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateAjax extends Manipulate
{
    
    public static function mcgoysmkqsqooceq() : bool
    {
        goto sycwismoacqosiiq;
        wsekioqwsiuuemiu:
        if (function_exists("\x69\x73\x5f\141\152\x61\170") && is_ajax()) {
            goto eoiammowyewyyqog;
        }
        goto eqgaeioggggckcqy;
        sycwismoacqosiiq:
        $mcgoysmkqsqooceq = false;
        goto msywwusgwymwiwoo;
        oskmamuaiuwqoccm:
        $mcgoysmkqsqooceq = true;
        goto qyckymugmiwwisac;
        cwoowgkuyggockga:
        $mcgoysmkqsqooceq = true;
        goto iqgekgmcqskeqeui;
        eqgaeioggggckcqy:
        if (!(ManipulateArray::get($_SERVER, "\110\x54\124\x50\x5f\x58\137\122\x45\121\x55\x45\x53\x54\x45\x44\137\x57\x49\x54\110") == "\130\115\x4c\x48\x74\164\x70\122\x65\x71\165\145\163\x74" || self::cmaecekuqkwmemms("\x44\x4f\x49\116\107\x5f\x41\112\x41\130"))) {
            goto syaceqoiqwmukkka;
        }
        goto kwqigwcciguyuegu;
        wsqmeeooqyqgcase:
        goto qeumeeoamsmgwgga;
        goto kogsyuyqogkkmcck;
        qyckymugmiwwisac:
        qeumeeoamsmgwgga:
        goto aeomsgmoeaymqqks;
        qosqggucoyecammk:
        goto iymgcgmyoeuckqyq;
        goto smoayisommmsocyi;
        kwqigwcciguyuegu:
        $mcgoysmkqsqooceq = true;
        goto qequskoucemymsom;
        msywwusgwymwiwoo:
        if (function_exists("\167\160\137\144\x6f\x69\x6e\147\x5f\141\152\x61\170") && wp_doing_ajax()) {
            goto ywsmaykqgsqcascy;
        }
        goto wsekioqwsiuuemiu;
        smoayisommmsocyi:
        eoiammowyewyyqog:
        goto cwoowgkuyggockga;
        aeomsgmoeaymqqks:
        return $mcgoysmkqsqooceq;
        goto wgkyuuayyqyioyio;
        qequskoucemymsom:
        syaceqoiqwmukkka:
        goto qosqggucoyecammk;
        iqgekgmcqskeqeui:
        iymgcgmyoeuckqyq:
        goto wsqmeeooqyqgcase;
        kogsyuyqogkkmcck:
        ywsmaykqgsqcascy:
        goto oskmamuaiuwqoccm;
        wgkyuuayyqyioyio:
    }
    
    public static function oiucukewkckkwiqc() : ?string
    {
        return admin_url("\141\x64\155\x69\x6e\55\141\x6a\141\x78\56\160\x68\160");
    }
    
    public static function imkyucqsciqykkee($uamcoiueqaamsqma, $kigowwqauiumummw = true)
    {
        goto koqkucsuqusigusk;
        imigkkksiqykegqw:
        wp_send_json_success($uamcoiueqaamsqma);
        goto umoqwwiawmwgwcwk;
        eoccgqmqaqsgkioo:
        ckmwoiaeywmqiusm:
        goto imigkkksiqykegqw;
        moukawoweqcqqgoo:
        wp_send_json_error($uamcoiueqaamsqma);
        goto aaoieagyoscgaoyo;
        umoqwwiawmwgwcwk:
        esouqccquycuauui:
        goto keaoguqysqeakuuw;
        aaoieagyoscgaoyo:
        goto esouqccquycuauui;
        goto eoccgqmqaqsgkioo;
        koqkucsuqusigusk:
        if ($kigowwqauiumummw) {
            goto ckmwoiaeywmqiusm;
        }
        goto moukawoweqcqqgoo;
        keaoguqysqeakuuw:
        return $uamcoiueqaamsqma;
        goto uwguqssakkskimgc;
        uwguqssakkskimgc:
    }
    
    public static function wqsmsuyggkkyyocc($aiamqeawckcsuaou, $seauiwyeoycowegg = "\x6e\x6f\x6e\143\145", $gqgoqaeswmcwagoi = false)
    {
        return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi);
    }
}
