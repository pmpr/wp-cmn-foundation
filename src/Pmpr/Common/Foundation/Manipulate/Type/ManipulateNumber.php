<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateNumber extends Common
{
    
    const THRESHOLDS = ['' => 900, "\113" => 900000, "\x4d" => 900000000, "\102" => 900000000000, "\x54" => 90000000000000];
    
    const DEFAULT_THRESHOLD = "\71\60\60\x54\53";
    
    public static function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\x2c") : string
    {
        return number_format($eqgoocgaqwqcimie, 0, "\56", $geqcesmqwkeayoiu);
    }
    
    public static function readable(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string
    {
        goto eemoqygegmakwkqs;
        owieeykwisgmwsso:
        return self::DEFAULT_THRESHOLD;
        goto mkwiacyiwcggkayq;
        qcuoawweoeiqemyg:
        akcoekimwmwkmoia:
        goto owieeykwisgmwsso;
        eemoqygegmakwkqs:
        foreach (self::THRESHOLDS as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) {
            goto masiaeeguwwcwcym;
            mwigyswycsiygicw:
            kmyuewweeweyeogc:
            goto cwooiamoqwmuikws;
            yigqgyaossseayse:
            return self::format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq);
            goto oaiiwqkkqkieaisw;
            masiaeeguwwcwcym:
            if (!($eqgoocgaqwqcimie < $aoqagsqecokqqwqg)) {
                goto mamiicmwemsoegek;
            }
            goto yigqgyaossseayse;
            oaiiwqkkqkieaisw:
            mamiicmwemsoegek:
            goto mwigyswycsiygicw;
            cwooiamoqwmuikws:
        }
        goto qcuoawweoeiqemyg;
        mkwiacyiwcggkayq:
    }
    
    public static function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false)
    {
        goto wcacgiegoekgaqmw;
        ccqiksieyeiiecye:
        $xgwukwqqaseqagay = round($xgwukwqqaseqagay);
        goto gguokakmscwmeqqi;
        kguoagkwekiiswmc:
        if (!$wigsqawwsmugmmcg) {
            goto ymeksusogycekecy;
        }
        goto ccqiksieyeiiecye;
        wcacgiegoekgaqmw:
        $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100;
        goto kguoagkwekiiswmc;
        aqqwgeocycukwwea:
        return $xgwukwqqaseqagay;
        goto cokqicmugqwaqmge;
        gguokakmscwmeqqi:
        ymeksusogycekecy:
        goto aqqwgeocycukwwea;
        cokqicmugqwaqmge:
    }
    
    public static function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array
    {
        goto wyyokkeqakouoygm;
        igmumkwsokguugia:
        foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) {
            goto aiseocoyqescoiwe;
            qseuyoyqyiamegok:
            $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess;
            goto goqquigewsgoaogg;
            goqquigewsgoaogg:
            swawmomoagmioomc:
            goto eusuooimqkgqgiaa;
            aiseocoyqescoiwe:
            if (!($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess == 0 || $eusockqasqqmoess % $eokscgekqusgueqm == 0))) {
                goto swawmomoagmioomc;
            }
            goto qseuyoyqyiamegok;
            eusuooimqkgqgiaa:
            acqyogokyakwekak:
            goto esyaomsqiccomyis;
            esyaomsqiccomyis:
        }
        goto smgwaikkyouqogwe;
        qiocogaamemoisag:
        return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok);
        goto akqcmicescemuoic;
        wyyokkeqakouoygm:
        $ygmmaywsqqycaaok = [];
        goto isequkkmceeiaowc;
        siccsesmewocqecy:
        goto uwqsuakimauaecsk;
        goto acussowuugkoqscy;
        wymkeuwkccmeouiy:
        $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu);
        goto siccsesmewocqecy;
        uewcskcgceqqekmi:
        uwqsuakimauaecsk:
        goto qiocogaamemoisag;
        acussowuugkoqscy:
        gsyyyccyomacamyu:
        goto igmumkwsokguugia;
        smgwaikkyouqogwe:
        ooaswysuqmyicsyg:
        goto uewcskcgceqqekmi;
        isequkkmceeiaowc:
        if ($eokscgekqusgueqm) {
            goto gsyyyccyomacamyu;
        }
        goto wymkeuwkccmeouiy;
        akqcmicescemuoic:
    }
    
    protected static function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string
    {
        goto ugceakweuqgwgywe;
        ugceakweuqgwgywe:
        $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::THRESHOLDS['']), $cmyiqqsaoiwgqcay);
        goto iowceqakcgogmssu;
        gwwocsgkqyycikau:
        return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq;
        goto acukcyqyqoyauieg;
        iowceqakcgogmssu:
        $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\x2e") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\x30"), "\x2e");
        goto gwwocsgkqyycikau;
        acukcyqyqoyauieg:
    }
}
