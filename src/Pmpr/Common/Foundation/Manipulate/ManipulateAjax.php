<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateAjax extends Manipulate
{
    
    public static function mcgoysmkqsqooceq() : bool
    {
        goto syaceqoiqwmukkka;
        smoayisommmsocyi:
        $mcgoysmkqsqooceq = true;
        goto cwoowgkuyggockga;
        iymgcgmyoeuckqyq:
        if (function_exists("\x69\x73\x5f\x61\152\x61\x78") && is_ajax()) {
            goto cysskkuqiccoycuk;
        }
        goto ywsmaykqgsqcascy;
        wsekioqwsiuuemiu:
        cysskkuqiccoycuk:
        goto eqgaeioggggckcqy;
        iqgekgmcqskeqeui:
        return $mcgoysmkqsqooceq;
        goto wsqmeeooqyqgcase;
        qosqggucoyecammk:
        iqqsmugsquwuwmys:
        goto smoayisommmsocyi;
        sycwismoacqosiiq:
        kcyiiwwsyagcyiic:
        goto msywwusgwymwiwoo;
        qeumeeoamsmgwgga:
        $mcgoysmkqsqooceq = true;
        goto sycwismoacqosiiq;
        syaceqoiqwmukkka:
        $mcgoysmkqsqooceq = false;
        goto eoiammowyewyyqog;
        msywwusgwymwiwoo:
        goto micwmacyekkoumqe;
        goto wsekioqwsiuuemiu;
        kwqigwcciguyuegu:
        micwmacyekkoumqe:
        goto qequskoucemymsom;
        ywsmaykqgsqcascy:
        if (!(ManipulateArray::get($_SERVER, "\x48\x54\124\x50\x5f\130\x5f\122\105\x51\125\x45\x53\x54\x45\104\137\x57\x49\124\x48") == "\130\115\114\x48\164\x74\x70\122\x65\x71\x75\145\x73\x74" || self::cmaecekuqkwmemms("\x44\x4f\x49\116\107\x5f\x41\112\101\x58"))) {
            goto kcyiiwwsyagcyiic;
        }
        goto qeumeeoamsmgwgga;
        cwoowgkuyggockga:
        qoagkeesiqqueeac:
        goto iqgekgmcqskeqeui;
        qequskoucemymsom:
        goto qoagkeesiqqueeac;
        goto qosqggucoyecammk;
        eqgaeioggggckcqy:
        $mcgoysmkqsqooceq = true;
        goto kwqigwcciguyuegu;
        eoiammowyewyyqog:
        if (function_exists("\x77\x70\137\x64\157\x69\156\147\x5f\141\x6a\x61\x78") && wp_doing_ajax()) {
            goto iqqsmugsquwuwmys;
        }
        goto iymgcgmyoeuckqyq;
        wsqmeeooqyqgcase:
    }
    
    public static function oiucukewkckkwiqc() : ?string
    {
        return admin_url("\x61\144\x6d\151\156\x2d\x61\x6a\141\170\56\160\150\x70");
    }
    
    public static function imkyucqsciqykkee($uamcoiueqaamsqma, $kigowwqauiumummw = true)
    {
        goto qyckymugmiwwisac;
        wgkyuuayyqyioyio:
        goto oskmamuaiuwqoccm;
        goto ckmwoiaeywmqiusm;
        aeomsgmoeaymqqks:
        wp_send_json_error($uamcoiueqaamsqma);
        goto wgkyuuayyqyioyio;
        koqkucsuqusigusk:
        oskmamuaiuwqoccm:
        goto moukawoweqcqqgoo;
        ckmwoiaeywmqiusm:
        kogsyuyqogkkmcck:
        goto esouqccquycuauui;
        qyckymugmiwwisac:
        if ($kigowwqauiumummw) {
            goto kogsyuyqogkkmcck;
        }
        goto aeomsgmoeaymqqks;
        esouqccquycuauui:
        wp_send_json_success($uamcoiueqaamsqma);
        goto koqkucsuqusigusk;
        moukawoweqcqqgoo:
        return $uamcoiueqaamsqma;
        goto aaoieagyoscgaoyo;
        aaoieagyoscgaoyo:
    }
    
    public static function wqsmsuyggkkyyocc($aiamqeawckcsuaou, $seauiwyeoycowegg = "\156\157\156\143\145", $gqgoqaeswmcwagoi = false)
    {
        return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi);
    }
}
