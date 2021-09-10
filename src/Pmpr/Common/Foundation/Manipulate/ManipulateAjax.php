<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateAjax extends Manipulate
{
    
    public static function mcgoysmkqsqooceq() : bool
    {
        goto qeumeeoamsmgwgga;
        wsqmeeooqyqgcase:
        iymgcgmyoeuckqyq:
        goto kogsyuyqogkkmcck;
        sycwismoacqosiiq:
        if (function_exists("\x77\x70\x5f\x64\x6f\x69\x6e\147\137\141\152\141\x78") && wp_doing_ajax()) {
            goto iymgcgmyoeuckqyq;
        }
        goto msywwusgwymwiwoo;
        msywwusgwymwiwoo:
        if (function_exists("\x69\x73\x5f\141\x6a\141\x78") && is_ajax()) {
            goto syaceqoiqwmukkka;
        }
        goto wsekioqwsiuuemiu;
        kwqigwcciguyuegu:
        qoagkeesiqqueeac:
        goto qequskoucemymsom;
        qosqggucoyecammk:
        syaceqoiqwmukkka:
        goto smoayisommmsocyi;
        qequskoucemymsom:
        goto eoiammowyewyyqog;
        goto qosqggucoyecammk;
        cwoowgkuyggockga:
        eoiammowyewyyqog:
        goto iqgekgmcqskeqeui;
        wsekioqwsiuuemiu:
        if (!(ManipulateArray::get($_SERVER, "\110\x54\124\120\x5f\130\137\x52\105\121\x55\105\123\x54\x45\104\137\x57\111\x54\x48") == "\x58\115\114\110\x74\164\160\122\x65\161\x75\x65\x73\164" || self::cmaecekuqkwmemms("\104\x4f\x49\x4e\107\137\101\112\x41\x58"))) {
            goto qoagkeesiqqueeac;
        }
        goto eqgaeioggggckcqy;
        qeumeeoamsmgwgga:
        $mcgoysmkqsqooceq = false;
        goto sycwismoacqosiiq;
        kogsyuyqogkkmcck:
        $mcgoysmkqsqooceq = true;
        goto oskmamuaiuwqoccm;
        eqgaeioggggckcqy:
        $mcgoysmkqsqooceq = true;
        goto kwqigwcciguyuegu;
        qyckymugmiwwisac:
        return $mcgoysmkqsqooceq;
        goto aeomsgmoeaymqqks;
        oskmamuaiuwqoccm:
        ywsmaykqgsqcascy:
        goto qyckymugmiwwisac;
        iqgekgmcqskeqeui:
        goto ywsmaykqgsqcascy;
        goto wsqmeeooqyqgcase;
        smoayisommmsocyi:
        $mcgoysmkqsqooceq = true;
        goto cwoowgkuyggockga;
        aeomsgmoeaymqqks:
    }
    
    public static function oiucukewkckkwiqc() : ?string
    {
        return admin_url("\x61\144\x6d\151\x6e\x2d\x61\x6a\141\170\56\160\150\x70");
    }
    
    public static function imkyucqsciqykkee($uamcoiueqaamsqma, $kigowwqauiumummw = true)
    {
        goto esouqccquycuauui;
        umoqwwiawmwgwcwk:
        return $uamcoiueqaamsqma;
        goto keaoguqysqeakuuw;
        esouqccquycuauui:
        if ($kigowwqauiumummw) {
            goto wgkyuuayyqyioyio;
        }
        goto koqkucsuqusigusk;
        eoccgqmqaqsgkioo:
        wp_send_json_success($uamcoiueqaamsqma);
        goto imigkkksiqykegqw;
        koqkucsuqusigusk:
        wp_send_json_error($uamcoiueqaamsqma);
        goto moukawoweqcqqgoo;
        moukawoweqcqqgoo:
        goto ckmwoiaeywmqiusm;
        goto aaoieagyoscgaoyo;
        imigkkksiqykegqw:
        ckmwoiaeywmqiusm:
        goto umoqwwiawmwgwcwk;
        aaoieagyoscgaoyo:
        wgkyuuayyqyioyio:
        goto eoccgqmqaqsgkioo;
        keaoguqysqeakuuw:
    }
    
    public static function wqsmsuyggkkyyocc($aiamqeawckcsuaou, $seauiwyeoycowegg = "\156\x6f\x6e\143\145", $gqgoqaeswmcwagoi = false)
    {
        return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi);
    }
}
