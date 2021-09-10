<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateNumber extends Common
{
    
    const THRESHOLDS = ['' => 900, 'K' => 900000, 'M' => 900000000, 'B' => 900000000000, 'T' => 90000000000000];
    
    const DEFAULT_THRESHOLD = '900T+';
    
    public static function uwwmyomsqkoaqawa($eqgoocgaqwqcimie, $geqcesmqwkeayoiu = ',') : string
    {
        return number_format($eqgoocgaqwqcimie, 0, '.', $geqcesmqwkeayoiu);
    }
    
    public static function readable(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay = 1) : string
    {
        foreach (self::THRESHOLDS as $scqcgogsiaiksiiq => $aoqagsqecokqqwqg) {
            if ($eqgoocgaqwqcimie < $aoqagsqecokqqwqg) {
                return self::format($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay, $aoqagsqecokqqwqg, $scqcgogsiaiksiiq);
            }
            awaqksikyomsuaeo:
        }
        iqsgossweywksoia:
        return self::DEFAULT_THRESHOLD;
    }
    
    public static function uwueayqeckmkckyc($uuwmqqqiwksuaise, $eqgoocgaqwqcimie, $wigsqawwsmugmmcg = false)
    {
        $xgwukwqqaseqagay = $eqgoocgaqwqcimie / $uuwmqqqiwksuaise * 100;
        if ($wigsqawwsmugmmcg) {
            $xgwukwqqaseqagay = round($xgwukwqqaseqagay);
        }
        return $xgwukwqqaseqagay;
    }
    
    public static function ywqgcuymeiswqyqc($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu = 1, $eokscgekqusgueqm = 0) : array
    {
        $ygmmaywsqqycaaok = [];
        if ($eokscgekqusgueqm) {
            foreach (range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc) as $eusockqasqqmoess) {
                if ($eusockqasqqmoess > 0 && ($eokscgekqusgueqm % $eusockqasqqmoess == 0 || $eusockqasqqmoess % $eokscgekqusgueqm == 0)) {
                    $ygmmaywsqqycaaok[$eusockqasqqmoess] = $eusockqasqqmoess;
                }
                ggeoqeowscwkeumy:
            }
            cuommomwmsackoqc:
        } else {
            $ygmmaywsqqycaaok = range($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $wyeyeaaekyoyimqu);
        }
        return array_combine($ygmmaywsqqycaaok, $ygmmaywsqqycaaok);
    }
    
    protected static function format(float $eqgoocgaqwqcimie, int $cmyiqqsaoiwgqcay, int $aoqagsqecokqqwqg, string $scqcgogsiaiksiiq) : string
    {
        $sgsmkeiowiwiqkuc = number_format($eqgoocgaqwqcimie / ($aoqagsqecokqqwqg / self::THRESHOLDS['']), $cmyiqqsaoiwgqcay);
        $eeiemcwqoeiqskis = strpos($sgsmkeiowiwiqkuc, '.') === false ? $sgsmkeiowiwiqkuc : rtrim(rtrim($sgsmkeiowiwiqkuc, '0'), '.');
        return $eeiemcwqoeiqskis . $scqcgogsiaiksiiq;
    }
}
