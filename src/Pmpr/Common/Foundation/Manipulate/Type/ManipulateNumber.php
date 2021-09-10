<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateNumber extends Common
{
    
    const THRESHOLDS = ['' => 900, "\x4b" => 900000, "\115" => 900000000, "\x42" => 900000000000, "\x54" => 90000000000000];
    
    const DEFAULT_THRESHOLD = "\x39\60\x30\124\x2b";
    
    public static function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\54") : string
    {
        return number_format($eqgoocgaqwqcimie, 0, "\56", $geqcesmqwkeayoiu);
    }
    
    public static function readable(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string
    {
        goto qcuoawweoeiqemyg;
        qcuoawweoeiqemyg:
        foreach (self::THRESHOLDS as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) {
            goto yigqgyaossseayse;
            oaiiwqkkqkieaisw:
            return self::format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq);
            goto mwigyswycsiygicw;
            cwooiamoqwmuikws:
            mamiicmwemsoegek:
            goto eemoqygegmakwkqs;
            mwigyswycsiygicw:
            masiaeeguwwcwcym:
            goto cwooiamoqwmuikws;
            yigqgyaossseayse:
            if (!($eqgoocgaqwqcimie < $aoqagsqecokqqwqg)) {
                goto masiaeeguwwcwcym;
            }
            goto oaiiwqkkqkieaisw;
            eemoqygegmakwkqs:
        }
        goto owieeykwisgmwsso;
        mkwiacyiwcggkayq:
        return self::DEFAULT_THRESHOLD;
        goto ymeksusogycekecy;
        owieeykwisgmwsso:
        kmyuewweeweyeogc:
        goto mkwiacyiwcggkayq;
        ymeksusogycekecy:
    }
    
    public static function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false)
    {
        goto kguoagkwekiiswmc;
        kguoagkwekiiswmc:
        $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100;
        goto ccqiksieyeiiecye;
        gguokakmscwmeqqi:
        $xgwukwqqaseqagay = round($xgwukwqqaseqagay);
        goto aqqwgeocycukwwea;
        ccqiksieyeiiecye:
        if (!$wigsqawwsmugmmcg) {
            goto wcacgiegoekgaqmw;
        }
        goto gguokakmscwmeqqi;
        cokqicmugqwaqmge:
        return $xgwukwqqaseqagay;
        goto ooaswysuqmyicsyg;
        aqqwgeocycukwwea:
        wcacgiegoekgaqmw:
        goto cokqicmugqwaqmge;
        ooaswysuqmyicsyg:
    }
    
    public static function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array
    {
        goto isequkkmceeiaowc;
        acussowuugkoqscy:
        goto wyyokkeqakouoygm;
        goto igmumkwsokguugia;
        smgwaikkyouqogwe:
        foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) {
            goto qseuyoyqyiamegok;
            eusuooimqkgqgiaa:
            aiseocoyqescoiwe:
            goto esyaomsqiccomyis;
            qseuyoyqyiamegok:
            if (!($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess == 0 || $eusockqasqqmoess % $eokscgekqusgueqm == 0))) {
                goto aiseocoyqescoiwe;
            }
            goto goqquigewsgoaogg;
            esyaomsqiccomyis:
            swawmomoagmioomc:
            goto gsyyyccyomacamyu;
            goqquigewsgoaogg:
            $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess;
            goto eusuooimqkgqgiaa;
            gsyyyccyomacamyu:
        }
        goto uewcskcgceqqekmi;
        wymkeuwkccmeouiy:
        if ($eokscgekqusgueqm) {
            goto uwqsuakimauaecsk;
        }
        goto siccsesmewocqecy;
        isequkkmceeiaowc:
        $ygmmaywsqqycaaok = [];
        goto wymkeuwkccmeouiy;
        igmumkwsokguugia:
        uwqsuakimauaecsk:
        goto smgwaikkyouqogwe;
        akqcmicescemuoic:
        return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok);
        goto ugceakweuqgwgywe;
        siccsesmewocqecy:
        $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu);
        goto acussowuugkoqscy;
        qiocogaamemoisag:
        wyyokkeqakouoygm:
        goto akqcmicescemuoic;
        uewcskcgceqqekmi:
        acqyogokyakwekak:
        goto qiocogaamemoisag;
        ugceakweuqgwgywe:
    }
    
    protected static function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string
    {
        goto iowceqakcgogmssu;
        iowceqakcgogmssu:
        $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::THRESHOLDS['']), $cmyiqqsaoiwgqcay);
        goto gwwocsgkqyycikau;
        gwwocsgkqyycikau:
        $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\x2e") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\x30"), "\56");
        goto acukcyqyqoyauieg;
        acukcyqyqoyauieg:
        return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq;
        goto agmgeuqwqyskeace;
        agmgeuqwqyskeace:
    }
}
