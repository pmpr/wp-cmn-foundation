<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateNumber extends Common
{
    
    const THRESHOLDS = ['' => 900, "\113" => 900000, "\115" => 900000000, "\x42" => 900000000000, "\x54" => 90000000000000];
    
    const DEFAULT_THRESHOLD = "\71\60\60\x54\x2b";
    
    public static function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\x2c") : string
    {
        return number_format($eqgoocgaqwqcimie, 0, "\x2e", $geqcesmqwkeayoiu);
    }
    
    public static function readable(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string
    {
        goto eemoqygegmakwkqs;
        qcuoawweoeiqemyg:
        akcoekimwmwkmoia:
        goto owieeykwisgmwsso;
        owieeykwisgmwsso:
        return self::DEFAULT_THRESHOLD;
        goto mkwiacyiwcggkayq;
        eemoqygegmakwkqs:
        foreach (self::THRESHOLDS as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) {
            goto masiaeeguwwcwcym;
            mwigyswycsiygicw:
            kmyuewweeweyeogc:
            goto cwooiamoqwmuikws;
            masiaeeguwwcwcym:
            if (!($eqgoocgaqwqcimie < $aoqagsqecokqqwqg)) {
                goto mamiicmwemsoegek;
            }
            goto yigqgyaossseayse;
            oaiiwqkkqkieaisw:
            mamiicmwemsoegek:
            goto mwigyswycsiygicw;
            yigqgyaossseayse:
            return self::format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq);
            goto oaiiwqkkqkieaisw;
            cwooiamoqwmuikws:
        }
        goto qcuoawweoeiqemyg;
        mkwiacyiwcggkayq:
    }
    
    public static function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false)
    {
        goto wcacgiegoekgaqmw;
        gguokakmscwmeqqi:
        ymeksusogycekecy:
        goto aqqwgeocycukwwea;
        ccqiksieyeiiecye:
        $xgwukwqqaseqagay = round($xgwukwqqaseqagay);
        goto gguokakmscwmeqqi;
        aqqwgeocycukwwea:
        return $xgwukwqqaseqagay;
        goto cokqicmugqwaqmge;
        wcacgiegoekgaqmw:
        $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100;
        goto kguoagkwekiiswmc;
        kguoagkwekiiswmc:
        if (!$wigsqawwsmugmmcg) {
            goto ymeksusogycekecy;
        }
        goto ccqiksieyeiiecye;
        cokqicmugqwaqmge:
    }
    
    public static function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array
    {
        goto wyyokkeqakouoygm;
        siccsesmewocqecy:
        goto uwqsuakimauaecsk;
        goto acussowuugkoqscy;
        uewcskcgceqqekmi:
        uwqsuakimauaecsk:
        goto qiocogaamemoisag;
        isequkkmceeiaowc:
        if ($eokscgekqusgueqm) {
            goto gsyyyccyomacamyu;
        }
        goto wymkeuwkccmeouiy;
        acussowuugkoqscy:
        gsyyyccyomacamyu:
        goto igmumkwsokguugia;
        wymkeuwkccmeouiy:
        $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu);
        goto siccsesmewocqecy;
        igmumkwsokguugia:
        foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) {
            goto aiseocoyqescoiwe;
            goqquigewsgoaogg:
            swawmomoagmioomc:
            goto eusuooimqkgqgiaa;
            aiseocoyqescoiwe:
            if (!($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess == 0 || $eusockqasqqmoess % $eokscgekqusgueqm == 0))) {
                goto swawmomoagmioomc;
            }
            goto qseuyoyqyiamegok;
            qseuyoyqyiamegok:
            $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess;
            goto goqquigewsgoaogg;
            eusuooimqkgqgiaa:
            acqyogokyakwekak:
            goto esyaomsqiccomyis;
            esyaomsqiccomyis:
        }
        goto smgwaikkyouqogwe;
        smgwaikkyouqogwe:
        ooaswysuqmyicsyg:
        goto uewcskcgceqqekmi;
        qiocogaamemoisag:
        return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok);
        goto akqcmicescemuoic;
        wyyokkeqakouoygm:
        $ygmmaywsqqycaaok = [];
        goto isequkkmceeiaowc;
        akqcmicescemuoic:
    }
    
    protected static function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string
    {
        goto ugceakweuqgwgywe;
        gwwocsgkqyycikau:
        return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq;
        goto acukcyqyqoyauieg;
        iowceqakcgogmssu:
        $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\56") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\x30"), "\56");
        goto gwwocsgkqyycikau;
        ugceakweuqgwgywe:
        $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::THRESHOLDS['']), $cmyiqqsaoiwgqcay);
        goto iowceqakcgogmssu;
        acukcyqyqoyauieg:
    }
}
