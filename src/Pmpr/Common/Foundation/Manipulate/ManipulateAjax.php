<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateAjax extends Manipulate
{
    
    public static function mcgoysmkqsqooceq() : bool
    {
        goto ywsmaykqgsqcascy;
        sycwismoacqosiiq:
        if (function_exists("\x69\x73\x5f\x61\152\x61\170") && is_ajax()) {
            goto qoagkeesiqqueeac;
        }
        goto msywwusgwymwiwoo;
        qeumeeoamsmgwgga:
        if (function_exists("\x77\160\x5f\144\157\x69\x6e\x67\x5f\141\152\141\x78") && wp_doing_ajax()) {
            goto eoiammowyewyyqog;
        }
        goto sycwismoacqosiiq;
        kogsyuyqogkkmcck:
        iymgcgmyoeuckqyq:
        goto oskmamuaiuwqoccm;
        qequskoucemymsom:
        qoagkeesiqqueeac:
        goto qosqggucoyecammk;
        oskmamuaiuwqoccm:
        return $mcgoysmkqsqooceq;
        goto qyckymugmiwwisac;
        msywwusgwymwiwoo:
        if (!(ManipulateArray::get($_SERVER, "\x48\124\x54\x50\137\130\x5f\122\105\121\x55\x45\x53\x54\105\104\x5f\127\x49\124\x48") == "\x58\115\114\x48\164\x74\160\122\145\161\165\x65\x73\164" || self::cmaecekuqkwmemms("\104\x4f\x49\x4e\107\137\x41\x4a\101\130"))) {
            goto iqqsmugsquwuwmys;
        }
        goto wsekioqwsiuuemiu;
        smoayisommmsocyi:
        syaceqoiqwmukkka:
        goto cwoowgkuyggockga;
        wsekioqwsiuuemiu:
        $mcgoysmkqsqooceq = true;
        goto eqgaeioggggckcqy;
        wsqmeeooqyqgcase:
        $mcgoysmkqsqooceq = true;
        goto kogsyuyqogkkmcck;
        eqgaeioggggckcqy:
        iqqsmugsquwuwmys:
        goto kwqigwcciguyuegu;
        qosqggucoyecammk:
        $mcgoysmkqsqooceq = true;
        goto smoayisommmsocyi;
        ywsmaykqgsqcascy:
        $mcgoysmkqsqooceq = false;
        goto qeumeeoamsmgwgga;
        kwqigwcciguyuegu:
        goto syaceqoiqwmukkka;
        goto qequskoucemymsom;
        cwoowgkuyggockga:
        goto iymgcgmyoeuckqyq;
        goto iqgekgmcqskeqeui;
        iqgekgmcqskeqeui:
        eoiammowyewyyqog:
        goto wsqmeeooqyqgcase;
        qyckymugmiwwisac:
    }
    
    public static function oiucukewkckkwiqc() : ?string
    {
        return admin_url("\x61\144\155\151\156\55\141\x6a\x61\170\56\160\x68\x70");
    }
    
    public static function imkyucqsciqykkee($uamcoiueqaamsqma, $kigowwqauiumummw = true)
    {
        goto ckmwoiaeywmqiusm;
        aaoieagyoscgaoyo:
        wp_send_json_success($uamcoiueqaamsqma);
        goto eoccgqmqaqsgkioo;
        ckmwoiaeywmqiusm:
        if ($kigowwqauiumummw) {
            goto aeomsgmoeaymqqks;
        }
        goto esouqccquycuauui;
        imigkkksiqykegqw:
        return $uamcoiueqaamsqma;
        goto umoqwwiawmwgwcwk;
        koqkucsuqusigusk:
        goto wgkyuuayyqyioyio;
        goto moukawoweqcqqgoo;
        moukawoweqcqqgoo:
        aeomsgmoeaymqqks:
        goto aaoieagyoscgaoyo;
        esouqccquycuauui:
        wp_send_json_error($uamcoiueqaamsqma);
        goto koqkucsuqusigusk;
        eoccgqmqaqsgkioo:
        wgkyuuayyqyioyio:
        goto imigkkksiqykegqw;
        umoqwwiawmwgwcwk:
    }
    
    public static function wqsmsuyggkkyyocc($aiamqeawckcsuaou, $seauiwyeoycowegg = "\x6e\x6f\x6e\x63\145", $gqgoqaeswmcwagoi = false)
    {
        return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi);
    }
}
