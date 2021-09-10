<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateNumber extends Common
{
    
    const THRESHOLDS = ['' => 900, "\x4b" => 900000, "\115" => 900000000, "\x42" => 900000000000, "\x54" => 90000000000000];
    
    const DEFAULT_THRESHOLD = "\x39\x30\60\124\x2b";
    
    public static function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\x2c") : string
    {
        return number_format($eqgoocgaqwqcimie, 0, "\x2e", $geqcesmqwkeayoiu);
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
        owieeykwisgmwsso:
        kmyuewweeweyeogc:
        goto mkwiacyiwcggkayq;
        mkwiacyiwcggkayq:
        return self::DEFAULT_THRESHOLD;
        goto ymeksusogycekecy;
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
        smgwaikkyouqogwe:
        foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) {
            goto qseuyoyqyiamegok;
            eusuooimqkgqgiaa:
            aiseocoyqescoiwe:
            goto esyaomsqiccomyis;
            goqquigewsgoaogg:
            $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess;
            goto eusuooimqkgqgiaa;
            esyaomsqiccomyis:
            swawmomoagmioomc:
            goto gsyyyccyomacamyu;
            qseuyoyqyiamegok:
            if (!($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess == 0 || $eusockqasqqmoess % $eokscgekqusgueqm == 0))) {
                goto aiseocoyqescoiwe;
            }
            goto goqquigewsgoaogg;
            gsyyyccyomacamyu:
        }
        goto uewcskcgceqqekmi;
        siccsesmewocqecy:
        $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu);
        goto acussowuugkoqscy;
        wymkeuwkccmeouiy:
        if ($eokscgekqusgueqm) {
            goto uwqsuakimauaecsk;
        }
        goto siccsesmewocqecy;
        isequkkmceeiaowc:
        $ygmmaywsqqycaaok = [];
        goto wymkeuwkccmeouiy;
        qiocogaamemoisag:
        wyyokkeqakouoygm:
        goto akqcmicescemuoic;
        akqcmicescemuoic:
        return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok);
        goto ugceakweuqgwgywe;
        igmumkwsokguugia:
        uwqsuakimauaecsk:
        goto smgwaikkyouqogwe;
        acussowuugkoqscy:
        goto wyyokkeqakouoygm;
        goto igmumkwsokguugia;
        uewcskcgceqqekmi:
        acqyogokyakwekak:
        goto qiocogaamemoisag;
        ugceakweuqgwgywe:
    }
    
    protected static function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string
    {
        goto iowceqakcgogmssu;
        gwwocsgkqyycikau:
        $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\56") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\60"), "\x2e");
        goto acukcyqyqoyauieg;
        iowceqakcgogmssu:
        $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::THRESHOLDS['']), $cmyiqqsaoiwgqcay);
        goto gwwocsgkqyycikau;
        acukcyqyqoyauieg:
        return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq;
        goto agmgeuqwqyskeace;
        agmgeuqwqyskeace:
    }
}
