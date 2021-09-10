<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateAjax extends Manipulate
{
    
    public static function mcgoysmkqsqooceq() : bool
    {
        goto ywsmaykqgsqcascy;
        msywwusgwymwiwoo:
        if (!(ManipulateArray::get($_SERVER, "\110\124\124\120\x5f\x58\x5f\122\105\121\125\x45\123\124\x45\x44\137\x57\x49\x54\x48") == "\x58\115\114\110\x74\164\x70\122\x65\x71\x75\x65\x73\164" || self::cmaecekuqkwmemms("\x44\117\x49\x4e\107\x5f\x41\112\101\130"))) {
            goto iqqsmugsquwuwmys;
        }
        goto wsekioqwsiuuemiu;
        qosqggucoyecammk:
        $mcgoysmkqsqooceq = true;
        goto smoayisommmsocyi;
        smoayisommmsocyi:
        syaceqoiqwmukkka:
        goto cwoowgkuyggockga;
        kogsyuyqogkkmcck:
        iymgcgmyoeuckqyq:
        goto oskmamuaiuwqoccm;
        wsekioqwsiuuemiu:
        $mcgoysmkqsqooceq = true;
        goto eqgaeioggggckcqy;
        qeumeeoamsmgwgga:
        if (function_exists("\167\160\137\x64\x6f\x69\x6e\x67\x5f\x61\x6a\x61\x78") && wp_doing_ajax()) {
            goto eoiammowyewyyqog;
        }
        goto sycwismoacqosiiq;
        kwqigwcciguyuegu:
        goto syaceqoiqwmukkka;
        goto qequskoucemymsom;
        iqgekgmcqskeqeui:
        eoiammowyewyyqog:
        goto wsqmeeooqyqgcase;
        ywsmaykqgsqcascy:
        $mcgoysmkqsqooceq = false;
        goto qeumeeoamsmgwgga;
        sycwismoacqosiiq:
        if (function_exists("\151\x73\137\x61\152\141\x78") && is_ajax()) {
            goto qoagkeesiqqueeac;
        }
        goto msywwusgwymwiwoo;
        wsqmeeooqyqgcase:
        $mcgoysmkqsqooceq = true;
        goto kogsyuyqogkkmcck;
        oskmamuaiuwqoccm:
        return $mcgoysmkqsqooceq;
        goto qyckymugmiwwisac;
        cwoowgkuyggockga:
        goto iymgcgmyoeuckqyq;
        goto iqgekgmcqskeqeui;
        qequskoucemymsom:
        qoagkeesiqqueeac:
        goto qosqggucoyecammk;
        eqgaeioggggckcqy:
        iqqsmugsquwuwmys:
        goto kwqigwcciguyuegu;
        qyckymugmiwwisac:
    }
    
    public static function oiucukewkckkwiqc() : ?string
    {
        return admin_url("\x61\144\x6d\151\x6e\x2d\141\152\141\170\x2e\x70\150\160");
    }
    
    public static function imkyucqsciqykkee($uamcoiueqaamsqma, $kigowwqauiumummw = true)
    {
        goto ckmwoiaeywmqiusm;
        koqkucsuqusigusk:
        goto wgkyuuayyqyioyio;
        goto moukawoweqcqqgoo;
        imigkkksiqykegqw:
        return $uamcoiueqaamsqma;
        goto umoqwwiawmwgwcwk;
        aaoieagyoscgaoyo:
        wp_send_json_success($uamcoiueqaamsqma);
        goto eoccgqmqaqsgkioo;
        moukawoweqcqqgoo:
        aeomsgmoeaymqqks:
        goto aaoieagyoscgaoyo;
        ckmwoiaeywmqiusm:
        if ($kigowwqauiumummw) {
            goto aeomsgmoeaymqqks;
        }
        goto esouqccquycuauui;
        eoccgqmqaqsgkioo:
        wgkyuuayyqyioyio:
        goto imigkkksiqykegqw;
        esouqccquycuauui:
        wp_send_json_error($uamcoiueqaamsqma);
        goto koqkucsuqusigusk;
        umoqwwiawmwgwcwk:
    }
    
    public static function wqsmsuyggkkyyocc($aiamqeawckcsuaou, $seauiwyeoycowegg = "\156\x6f\x6e\x63\145", $gqgoqaeswmcwagoi = false)
    {
        return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi);
    }
}
