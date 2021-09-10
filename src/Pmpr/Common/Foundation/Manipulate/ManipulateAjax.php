<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateAjax extends Manipulate
{
    
    public static function mcgoysmkqsqooceq() : bool
    {
        goto qeumeeoamsmgwgga;
        wsekioqwsiuuemiu:
        if (!(ManipulateArray::get($_SERVER, "\x48\x54\x54\x50\x5f\x58\137\122\x45\x51\x55\105\123\124\x45\x44\x5f\x57\x49\x54\110") == "\x58\x4d\x4c\110\x74\164\160\122\x65\161\x75\145\163\164" || self::cmaecekuqkwmemms("\104\x4f\111\116\107\x5f\x41\112\101\130"))) {
            goto qoagkeesiqqueeac;
        }
        goto eqgaeioggggckcqy;
        qyckymugmiwwisac:
        return $mcgoysmkqsqooceq;
        goto aeomsgmoeaymqqks;
        msywwusgwymwiwoo:
        if (function_exists("\151\163\137\x61\x6a\x61\x78") && is_ajax()) {
            goto syaceqoiqwmukkka;
        }
        goto wsekioqwsiuuemiu;
        wsqmeeooqyqgcase:
        iymgcgmyoeuckqyq:
        goto kogsyuyqogkkmcck;
        iqgekgmcqskeqeui:
        goto ywsmaykqgsqcascy;
        goto wsqmeeooqyqgcase;
        sycwismoacqosiiq:
        if (function_exists("\167\160\x5f\144\157\151\156\x67\x5f\141\152\141\x78") && wp_doing_ajax()) {
            goto iymgcgmyoeuckqyq;
        }
        goto msywwusgwymwiwoo;
        cwoowgkuyggockga:
        eoiammowyewyyqog:
        goto iqgekgmcqskeqeui;
        eqgaeioggggckcqy:
        $mcgoysmkqsqooceq = true;
        goto kwqigwcciguyuegu;
        qosqggucoyecammk:
        syaceqoiqwmukkka:
        goto smoayisommmsocyi;
        kwqigwcciguyuegu:
        qoagkeesiqqueeac:
        goto qequskoucemymsom;
        qequskoucemymsom:
        goto eoiammowyewyyqog;
        goto qosqggucoyecammk;
        oskmamuaiuwqoccm:
        ywsmaykqgsqcascy:
        goto qyckymugmiwwisac;
        qeumeeoamsmgwgga:
        $mcgoysmkqsqooceq = false;
        goto sycwismoacqosiiq;
        kogsyuyqogkkmcck:
        $mcgoysmkqsqooceq = true;
        goto oskmamuaiuwqoccm;
        smoayisommmsocyi:
        $mcgoysmkqsqooceq = true;
        goto cwoowgkuyggockga;
        aeomsgmoeaymqqks:
    }
    
    public static function oiucukewkckkwiqc() : ?string
    {
        return admin_url("\x61\144\155\151\156\x2d\141\152\141\x78\56\x70\150\x70");
    }
    
    public static function imkyucqsciqykkee($uamcoiueqaamsqma, $kigowwqauiumummw = true)
    {
        goto esouqccquycuauui;
        umoqwwiawmwgwcwk:
        return $uamcoiueqaamsqma;
        goto keaoguqysqeakuuw;
        aaoieagyoscgaoyo:
        wgkyuuayyqyioyio:
        goto eoccgqmqaqsgkioo;
        eoccgqmqaqsgkioo:
        wp_send_json_success($uamcoiueqaamsqma);
        goto imigkkksiqykegqw;
        esouqccquycuauui:
        if ($kigowwqauiumummw) {
            goto wgkyuuayyqyioyio;
        }
        goto koqkucsuqusigusk;
        moukawoweqcqqgoo:
        goto ckmwoiaeywmqiusm;
        goto aaoieagyoscgaoyo;
        koqkucsuqusigusk:
        wp_send_json_error($uamcoiueqaamsqma);
        goto moukawoweqcqqgoo;
        imigkkksiqykegqw:
        ckmwoiaeywmqiusm:
        goto umoqwwiawmwgwcwk;
        keaoguqysqeakuuw:
    }
    
    public static function wqsmsuyggkkyyocc($aiamqeawckcsuaou, $seauiwyeoycowegg = "\156\x6f\156\x63\x65", $gqgoqaeswmcwagoi = false)
    {
        return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi);
    }
}
