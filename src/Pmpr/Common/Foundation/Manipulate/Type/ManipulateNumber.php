<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateNumber extends Common
{
    
    const THRESHOLDS = ['' => 900, "\113" => 900000, "\x4d" => 900000000, "\102" => 900000000000, "\x54" => 90000000000000];
    
    const DEFAULT_THRESHOLD = "\x39\60\x30\124\53";
    
    public static function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\x2c") : string
    {
        return number_format($eqgoocgaqwqcimie, 0, "\x2e", $geqcesmqwkeayoiu);
    }
    
    public static function readable(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string
    {
        goto qcuoawweoeiqemyg;
        owieeykwisgmwsso:
        kmyuewweeweyeogc:
        goto mkwiacyiwcggkayq;
        mkwiacyiwcggkayq:
        return self::DEFAULT_THRESHOLD;
        goto ymeksusogycekecy;
        qcuoawweoeiqemyg:
        foreach (self::THRESHOLDS as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) {
            goto yigqgyaossseayse;
            cwooiamoqwmuikws:
            mamiicmwemsoegek:
            goto eemoqygegmakwkqs;
            oaiiwqkkqkieaisw:
            return self::format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq);
            goto mwigyswycsiygicw;
            yigqgyaossseayse:
            if (!($eqgoocgaqwqcimie < $aoqagsqecokqqwqg)) {
                goto masiaeeguwwcwcym;
            }
            goto oaiiwqkkqkieaisw;
            mwigyswycsiygicw:
            masiaeeguwwcwcym:
            goto cwooiamoqwmuikws;
            eemoqygegmakwkqs:
        }
        goto owieeykwisgmwsso;
        ymeksusogycekecy:
    }
    
    public static function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false)
    {
        goto kguoagkwekiiswmc;
        gguokakmscwmeqqi:
        $xgwukwqqaseqagay = round($xgwukwqqaseqagay);
        goto aqqwgeocycukwwea;
        kguoagkwekiiswmc:
        $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100;
        goto ccqiksieyeiiecye;
        ccqiksieyeiiecye:
        if (!$wigsqawwsmugmmcg) {
            goto wcacgiegoekgaqmw;
        }
        goto gguokakmscwmeqqi;
        aqqwgeocycukwwea:
        wcacgiegoekgaqmw:
        goto cokqicmugqwaqmge;
        cokqicmugqwaqmge:
        return $xgwukwqqaseqagay;
        goto ooaswysuqmyicsyg;
        ooaswysuqmyicsyg:
    }
    
    public static function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array
    {
        goto isequkkmceeiaowc;
        isequkkmceeiaowc:
        $ygmmaywsqqycaaok = [];
        goto wymkeuwkccmeouiy;
        wymkeuwkccmeouiy:
        if ($eokscgekqusgueqm) {
            goto uwqsuakimauaecsk;
        }
        goto siccsesmewocqecy;
        qiocogaamemoisag:
        wyyokkeqakouoygm:
        goto akqcmicescemuoic;
        akqcmicescemuoic:
        return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok);
        goto ugceakweuqgwgywe;
        acussowuugkoqscy:
        goto wyyokkeqakouoygm;
        goto igmumkwsokguugia;
        siccsesmewocqecy:
        $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu);
        goto acussowuugkoqscy;
        uewcskcgceqqekmi:
        acqyogokyakwekak:
        goto qiocogaamemoisag;
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
            goqquigewsgoaogg:
            $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess;
            goto eusuooimqkgqgiaa;
            esyaomsqiccomyis:
            swawmomoagmioomc:
            goto gsyyyccyomacamyu;
            gsyyyccyomacamyu:
        }
        goto uewcskcgceqqekmi;
        igmumkwsokguugia:
        uwqsuakimauaecsk:
        goto smgwaikkyouqogwe;
        ugceakweuqgwgywe:
    }
    
    protected static function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string
    {
        goto iowceqakcgogmssu;
        iowceqakcgogmssu:
        $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::THRESHOLDS['']), $cmyiqqsaoiwgqcay);
        goto gwwocsgkqyycikau;
        gwwocsgkqyycikau:
        $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\56") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\x30"), "\56");
        goto acukcyqyqoyauieg;
        acukcyqyqoyauieg:
        return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq;
        goto agmgeuqwqyskeace;
        agmgeuqwqyskeace:
    }
}
