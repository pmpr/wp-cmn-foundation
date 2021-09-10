<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateAjax extends Manipulate
{
    
    public static function mcgoysmkqsqooceq() : bool
    {
        goto qeumeeoamsmgwgga;
        msywwusgwymwiwoo:
        if (function_exists("\151\x73\x5f\x61\152\x61\170") && is_ajax()) {
            goto syaceqoiqwmukkka;
        }
        goto wsekioqwsiuuemiu;
        oskmamuaiuwqoccm:
        ywsmaykqgsqcascy:
        goto qyckymugmiwwisac;
        qosqggucoyecammk:
        syaceqoiqwmukkka:
        goto smoayisommmsocyi;
        qeumeeoamsmgwgga:
        $mcgoysmkqsqooceq = false;
        goto sycwismoacqosiiq;
        smoayisommmsocyi:
        $mcgoysmkqsqooceq = true;
        goto cwoowgkuyggockga;
        iqgekgmcqskeqeui:
        goto ywsmaykqgsqcascy;
        goto wsqmeeooqyqgcase;
        cwoowgkuyggockga:
        eoiammowyewyyqog:
        goto iqgekgmcqskeqeui;
        qequskoucemymsom:
        goto eoiammowyewyyqog;
        goto qosqggucoyecammk;
        wsekioqwsiuuemiu:
        if (!(ManipulateArray::get($_SERVER, "\110\x54\x54\120\137\x58\137\x52\105\x51\125\x45\x53\124\x45\104\x5f\127\111\124\110") == "\130\x4d\x4c\110\x74\x74\x70\122\145\161\x75\145\163\164" || self::cmaecekuqkwmemms("\104\x4f\111\x4e\107\x5f\x41\x4a\101\x58"))) {
            goto qoagkeesiqqueeac;
        }
        goto eqgaeioggggckcqy;
        qyckymugmiwwisac:
        return $mcgoysmkqsqooceq;
        goto aeomsgmoeaymqqks;
        kogsyuyqogkkmcck:
        $mcgoysmkqsqooceq = true;
        goto oskmamuaiuwqoccm;
        sycwismoacqosiiq:
        if (function_exists("\167\160\x5f\x64\157\151\156\x67\x5f\x61\x6a\x61\170") && wp_doing_ajax()) {
            goto iymgcgmyoeuckqyq;
        }
        goto msywwusgwymwiwoo;
        eqgaeioggggckcqy:
        $mcgoysmkqsqooceq = true;
        goto kwqigwcciguyuegu;
        wsqmeeooqyqgcase:
        iymgcgmyoeuckqyq:
        goto kogsyuyqogkkmcck;
        kwqigwcciguyuegu:
        qoagkeesiqqueeac:
        goto qequskoucemymsom;
        aeomsgmoeaymqqks:
    }
    
    public static function oiucukewkckkwiqc() : ?string
    {
        return admin_url("\141\x64\x6d\x69\x6e\x2d\x61\152\141\x78\56\160\150\160");
    }
    
    public static function imkyucqsciqykkee($uamcoiueqaamsqma, $kigowwqauiumummw = true)
    {
        goto esouqccquycuauui;
        eoccgqmqaqsgkioo:
        wp_send_json_success($uamcoiueqaamsqma);
        goto imigkkksiqykegqw;
        umoqwwiawmwgwcwk:
        return $uamcoiueqaamsqma;
        goto keaoguqysqeakuuw;
        moukawoweqcqqgoo:
        goto ckmwoiaeywmqiusm;
        goto aaoieagyoscgaoyo;
        aaoieagyoscgaoyo:
        wgkyuuayyqyioyio:
        goto eoccgqmqaqsgkioo;
        esouqccquycuauui:
        if ($kigowwqauiumummw) {
            goto wgkyuuayyqyioyio;
        }
        goto koqkucsuqusigusk;
        koqkucsuqusigusk:
        wp_send_json_error($uamcoiueqaamsqma);
        goto moukawoweqcqqgoo;
        imigkkksiqykegqw:
        ckmwoiaeywmqiusm:
        goto umoqwwiawmwgwcwk;
        keaoguqysqeakuuw:
    }
    
    public static function wqsmsuyggkkyyocc($aiamqeawckcsuaou, $seauiwyeoycowegg = "\x6e\157\x6e\143\145", $gqgoqaeswmcwagoi = false)
    {
        return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi);
    }
}
