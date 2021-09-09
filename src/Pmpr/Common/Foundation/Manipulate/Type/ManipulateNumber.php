<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateNumber extends Common
{
    
    const THRESHOLDS = ['' => 900, "\113" => 900000, "\115" => 900000000, "\x42" => 900000000000, "\x54" => 90000000000000];
    
    const DEFAULT_THRESHOLD = "\x39\60\x30\124\53";
    
    public static function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\54") : string
    {
        return number_format($eqgoocgaqwqcimie, 0, "\56", $geqcesmqwkeayoiu);
    }
    
    public static function readable(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string
    {
        goto vosacywygmcokgkw;
        vosacywygmcokgkw:
        foreach (self::THRESHOLDS as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) {
            goto okseeygkgkqkwsgw;
            ciamwmmiqcseaeuc:
            return self::format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq);
            goto cyycimgiyeqgssuy;
            okseeygkgkqkwsgw:
            if (!($eqgoocgaqwqcimie < $aoqagsqecokqqwqg)) {
                goto aqqgkiieakuwceea;
            }
            goto ciamwmmiqcseaeuc;
            wewkyisikaywwcmu:
            aeoicygsgoeeqguk:
            goto gykoquuuowomucyq;
            cyycimgiyeqgssuy:
            aqqgkiieakuwceea:
            goto wewkyisikaywwcmu;
            gykoquuuowomucyq:
        }
        goto cwqmuqiqouooguqm;
        osiwmoqisiiogawm:
        return self::DEFAULT_THRESHOLD;
        goto qmusucqwswsqsgwc;
        cwqmuqiqouooguqm:
        ykcmokmsimckuego:
        goto osiwmoqisiiogawm;
        qmusucqwswsqsgwc:
    }
    
    public static function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false)
    {
        goto acsmysaakckkkkie;
        womskaaiqugkuggi:
        if (!$wigsqawwsmugmmcg) {
            goto imwkaaqausgqquoo;
        }
        goto yimasagkemgkoeqq;
        caoqqqweswimckec:
        imwkaaqausgqquoo:
        goto cumieyuwywwwsaqg;
        yimasagkemgkoeqq:
        $xgwukwqqaseqagay = round($xgwukwqqaseqagay);
        goto caoqqqweswimckec;
        cumieyuwywwwsaqg:
        return $xgwukwqqaseqagay;
        goto esgwyeyackaweskk;
        acsmysaakckkkkie:
        $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100;
        goto womskaaiqugkuggi;
        esgwyeyackaweskk:
    }
    
    public static function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array
    {
        goto ukoqsuaqouuqkuig;
        wgkecsowgumikqqm:
        qwamueuasumwowym:
        goto gusamkkgwqmamcke;
        qeycwoqakqucwscm:
        wcuguimgckkocagq:
        goto oyaeggoyqusqqcyo;
        oyaeggoyqusqqcyo:
        foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) {
            goto oekkmwkqkuqwckui;
            ykqswiqaqaogkksc:
            amuoiqyswiesyyck:
            goto ogyguukmcmoqkqei;
            oekkmwkqkuqwckui:
            if (!($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess == 0 || $eusockqasqqmoess % $eokscgekqusgueqm == 0))) {
                goto ioimwcssyaqsuqma;
            }
            goto wqiyuoiwqekmsues;
            wqiyuoiwqekmsues:
            $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess;
            goto eawmqueomoausgog;
            eawmqueomoausgog:
            ioimwcssyaqsuqma:
            goto ykqswiqaqaogkksc;
            ogyguukmcmoqkqei:
        }
        goto wgkecsowgumikqqm;
        ukoqsuaqouuqkuig:
        $ygmmaywsqqycaaok = [];
        goto amocqywwugaccike;
        kuoqweoiooqosmoe:
        return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok);
        goto ngaquoioqeukmoyu;
        gusamkkgwqmamcke:
        iiskacegeekeseky:
        goto kuoqweoiooqosmoe;
        cckmsweoqwaucgcs:
        $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu);
        goto youqqmmoywqeggeg;
        youqqmmoywqeggeg:
        goto iiskacegeekeseky;
        goto qeycwoqakqucwscm;
        amocqywwugaccike:
        if ($eokscgekqusgueqm) {
            goto wcuguimgckkocagq;
        }
        goto cckmsweoqwaucgcs;
        ngaquoioqeukmoyu:
    }
    
    protected static function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string
    {
        goto qcysusmwyoeoguki;
        mawoaecogwegmcoc:
        $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\x2e") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\x30"), "\56");
        goto isqyiumsggacqmak;
        isqyiumsggacqmak:
        return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq;
        goto eicuumeiweosiaqy;
        qcysusmwyoeoguki:
        $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::THRESHOLDS['']), $cmyiqqsaoiwgqcay);
        goto mawoaecogwegmcoc;
        eicuumeiweosiaqy:
    }
}
