<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateNumber extends Common
{
    
    const THRESHOLDS = ['' => 900, "\113" => 900000, "\115" => 900000000, "\x42" => 900000000000, "\124" => 90000000000000];
    
    const DEFAULT_THRESHOLD = "\x39\x30\60\124\53";
    
    public static function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\54") : string
    {
        return number_format($eqgoocgaqwqcimie, 0, "\56", $geqcesmqwkeayoiu);
    }
    
    public static function readable(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string
    {
        goto owieeykwisgmwsso;
        mkwiacyiwcggkayq:
        mamiicmwemsoegek:
        goto ymeksusogycekecy;
        owieeykwisgmwsso:
        foreach (self::THRESHOLDS as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) {
            goto oaiiwqkkqkieaisw;
            eemoqygegmakwkqs:
            masiaeeguwwcwcym:
            goto qcuoawweoeiqemyg;
            oaiiwqkkqkieaisw:
            if (!($eqgoocgaqwqcimie < $aoqagsqecokqqwqg)) {
                goto yigqgyaossseayse;
            }
            goto mwigyswycsiygicw;
            mwigyswycsiygicw:
            return self::format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq);
            goto cwooiamoqwmuikws;
            cwooiamoqwmuikws:
            yigqgyaossseayse:
            goto eemoqygegmakwkqs;
            qcuoawweoeiqemyg:
        }
        goto mkwiacyiwcggkayq;
        ymeksusogycekecy:
        return self::DEFAULT_THRESHOLD;
        goto wcacgiegoekgaqmw;
        wcacgiegoekgaqmw:
    }
    
    public static function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false)
    {
        goto ccqiksieyeiiecye;
        cokqicmugqwaqmge:
        kguoagkwekiiswmc:
        goto ooaswysuqmyicsyg;
        ccqiksieyeiiecye:
        $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100;
        goto gguokakmscwmeqqi;
        aqqwgeocycukwwea:
        $xgwukwqqaseqagay = round($xgwukwqqaseqagay);
        goto cokqicmugqwaqmge;
        ooaswysuqmyicsyg:
        return $xgwukwqqaseqagay;
        goto acqyogokyakwekak;
        gguokakmscwmeqqi:
        if (!$wigsqawwsmugmmcg) {
            goto kguoagkwekiiswmc;
        }
        goto aqqwgeocycukwwea;
        acqyogokyakwekak:
    }
    
    public static function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array
    {
        goto wymkeuwkccmeouiy;
        uewcskcgceqqekmi:
        foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) {
            goto goqquigewsgoaogg;
            eusuooimqkgqgiaa:
            $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess;
            goto esyaomsqiccomyis;
            gsyyyccyomacamyu:
            aiseocoyqescoiwe:
            goto uwqsuakimauaecsk;
            esyaomsqiccomyis:
            qseuyoyqyiamegok:
            goto gsyyyccyomacamyu;
            goqquigewsgoaogg:
            if (!($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess == 0 || $eusockqasqqmoess % $eokscgekqusgueqm == 0))) {
                goto qseuyoyqyiamegok;
            }
            goto eusuooimqkgqgiaa;
            uwqsuakimauaecsk:
        }
        goto qiocogaamemoisag;
        akqcmicescemuoic:
        isequkkmceeiaowc:
        goto ugceakweuqgwgywe;
        wymkeuwkccmeouiy:
        $ygmmaywsqqycaaok = [];
        goto siccsesmewocqecy;
        siccsesmewocqecy:
        if ($eokscgekqusgueqm) {
            goto wyyokkeqakouoygm;
        }
        goto acussowuugkoqscy;
        igmumkwsokguugia:
        goto isequkkmceeiaowc;
        goto smgwaikkyouqogwe;
        acussowuugkoqscy:
        $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu);
        goto igmumkwsokguugia;
        ugceakweuqgwgywe:
        return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok);
        goto iowceqakcgogmssu;
        qiocogaamemoisag:
        swawmomoagmioomc:
        goto akqcmicescemuoic;
        smgwaikkyouqogwe:
        wyyokkeqakouoygm:
        goto uewcskcgceqqekmi;
        iowceqakcgogmssu:
    }
    
    protected static function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string
    {
        goto gwwocsgkqyycikau;
        agmgeuqwqyskeace:
        return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq;
        goto eiseywwywkwcwgcq;
        gwwocsgkqyycikau:
        $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::THRESHOLDS['']), $cmyiqqsaoiwgqcay);
        goto acukcyqyqoyauieg;
        acukcyqyqoyauieg:
        $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\56") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\x30"), "\x2e");
        goto agmgeuqwqyskeace;
        eiseywwywkwcwgcq:
    }
}
