<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateNumber extends Common
{
    
    const THRESHOLDS = ['' => 900, "\x4b" => 900000, "\115" => 900000000, "\102" => 900000000000, "\124" => 90000000000000];
    
    const DEFAULT_THRESHOLD = "\71\x30\x30\x54\x2b";
    
    public static function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = "\54") : string
    {
        return number_format($eqgoocgaqwqcimie, 0, "\x2e", $geqcesmqwkeayoiu);
    }
    
    public static function readable(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string
    {
        goto oaiiwqkkqkieaisw;
        cwooiamoqwmuikws:
        return self::DEFAULT_THRESHOLD;
        goto eemoqygegmakwkqs;
        mwigyswycsiygicw:
        uimcguaiawcueoai:
        goto cwooiamoqwmuikws;
        oaiiwqkkqkieaisw:
        foreach (self::THRESHOLDS as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) {
            goto akcoekimwmwkmoia;
            masiaeeguwwcwcym:
            uusuqukowcsyeoek:
            goto yigqgyaossseayse;
            kmyuewweeweyeogc:
            return self::format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq);
            goto mamiicmwemsoegek;
            akcoekimwmwkmoia:
            if (!($eqgoocgaqwqcimie < $aoqagsqecokqqwqg)) {
                goto qkaamssgqkeaumqm;
            }
            goto kmyuewweeweyeogc;
            mamiicmwemsoegek:
            qkaamssgqkeaumqm:
            goto masiaeeguwwcwcym;
            yigqgyaossseayse:
        }
        goto mwigyswycsiygicw;
        eemoqygegmakwkqs:
    }
    
    public static function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false)
    {
        goto owieeykwisgmwsso;
        owieeykwisgmwsso:
        $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100;
        goto mkwiacyiwcggkayq;
        kguoagkwekiiswmc:
        return $xgwukwqqaseqagay;
        goto ccqiksieyeiiecye;
        wcacgiegoekgaqmw:
        qcuoawweoeiqemyg:
        goto kguoagkwekiiswmc;
        ymeksusogycekecy:
        $xgwukwqqaseqagay = round($xgwukwqqaseqagay);
        goto wcacgiegoekgaqmw;
        mkwiacyiwcggkayq:
        if (!$wigsqawwsmugmmcg) {
            goto qcuoawweoeiqemyg;
        }
        goto ymeksusogycekecy;
        ccqiksieyeiiecye:
    }
    
    public static function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array
    {
        goto esyaomsqiccomyis;
        wymkeuwkccmeouiy:
        foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) {
            goto ooaswysuqmyicsyg;
            swawmomoagmioomc:
            cokqicmugqwaqmge:
            goto aiseocoyqescoiwe;
            ooaswysuqmyicsyg:
            if (!($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess == 0 || $eusockqasqqmoess % $eokscgekqusgueqm == 0))) {
                goto cokqicmugqwaqmge;
            }
            goto acqyogokyakwekak;
            aiseocoyqescoiwe:
            aqqwgeocycukwwea:
            goto qseuyoyqyiamegok;
            acqyogokyakwekak:
            $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess;
            goto swawmomoagmioomc;
            qseuyoyqyiamegok:
        }
        goto siccsesmewocqecy;
        acussowuugkoqscy:
        eusuooimqkgqgiaa:
        goto igmumkwsokguugia;
        igmumkwsokguugia:
        return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok);
        goto smgwaikkyouqogwe;
        wyyokkeqakouoygm:
        goto eusuooimqkgqgiaa;
        goto isequkkmceeiaowc;
        uwqsuakimauaecsk:
        $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu);
        goto wyyokkeqakouoygm;
        siccsesmewocqecy:
        gguokakmscwmeqqi:
        goto acussowuugkoqscy;
        esyaomsqiccomyis:
        $ygmmaywsqqycaaok = [];
        goto gsyyyccyomacamyu;
        isequkkmceeiaowc:
        goqquigewsgoaogg:
        goto wymkeuwkccmeouiy;
        gsyyyccyomacamyu:
        if ($eokscgekqusgueqm) {
            goto goqquigewsgoaogg;
        }
        goto uwqsuakimauaecsk;
        smgwaikkyouqogwe:
    }
    
    protected static function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string
    {
        goto uewcskcgceqqekmi;
        qiocogaamemoisag:
        $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, "\56") === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, "\60"), "\x2e");
        goto akqcmicescemuoic;
        uewcskcgceqqekmi:
        $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::THRESHOLDS['']), $cmyiqqsaoiwgqcay);
        goto qiocogaamemoisag;
        akqcmicescemuoic:
        return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq;
        goto ugceakweuqgwgywe;
        ugceakweuqgwgywe:
    }
}
