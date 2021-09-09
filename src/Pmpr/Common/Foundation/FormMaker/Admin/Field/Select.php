<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Select extends OptionAwareField
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null, ?string $sqeykgyoooqysmca = "\163\145\x6c\145\x63\x74")
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : Field
    {
        goto asgwcaiemaywyuua;
        yuwaceimymweacaq:
        return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto yoyqwkkyymqsoqog;
        iyuucuymquckkumo:
        yckasoyasmcwguuc:
        goto yuwaceimymweacaq;
        maqceywaogiuomsg:
        $this->qcgocuceocquqcuw("\144\x61\x74\x61\55\x76\141\x6c\x75\145\163", (string) $eqgoocgaqwqcimie);
        goto iyuucuymquckkumo;
        skequgsugsuiaisq:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto mikskiswoomyeeea;
        mikskiswoomyeeea:
        kusauaeusmwmeamc:
        goto maqceywaogiuomsg;
        asgwcaiemaywyuua:
        if (!$eqgoocgaqwqcimie) {
            goto yckasoyasmcwguuc;
        }
        goto gkaouywisuuowseo;
        gkaouywisuuowseo:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto kusauaeusmwmeamc;
        }
        goto skequgsugsuiaisq;
        yoyqwkkyymqsoqog:
    }
    
    public function wkimkisugugasowe($uusmaiomayssaecw, $pkyyagewkiyckmwy, $qiouiwasaauyaaue, $yuwymayicwwqiske = true) : self
    {
        goto mmgmkqacmswuuqke;
        qyasuykwoioqoykq:
        $this->kesomeowemmyygey($uusmaiomayssaecw, ["\x6c\141\x62\x65\154" => $pkyyagewkiyckmwy, "\x6f\160\164\151\157\156\x73" => $qiouiwasaauyaaue]);
        goto kqiccsyaycyiccmo;
        cyiegccusakaysae:
        igaqmmaikmgsswmu:
        goto qicoumyicsicyiiy;
        soqkgseeeyomskas:
        return $this;
        goto yokyyqmgaqgcokaq;
        qicoumyicsicyiiy:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto agicuamggwgewyag;
        }
        goto qyasuykwoioqoykq;
        mmgmkqacmswuuqke:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto gqowoywqskqqgygi;
            cykoggeawyosiwuw:
            if (!$pkyyagewkiyckmwy) {
                goto mquiiwwouugsuaem;
            }
            goto umguqywougaucwew;
            umguqywougaucwew:
            $meqocwsecsywiiqs .= "\40\50{$pkyyagewkiyckmwy}\x29";
            goto mcekqamqcmywscmu;
            egcywciwasakksyg:
            $qiouiwasaauyaaue[$eqgoocgaqwqcimie] = $meqocwsecsywiiqs;
            goto kcauiquoaeiqeukk;
            wgsgyaguoackiwwm:
            unset($qiouiwasaauyaaue[$eqgoocgaqwqcimie]);
            goto uqoieyqaaegaqiik;
            uqoieyqaaegaqiik:
            $eqgoocgaqwqcimie = $uusmaiomayssaecw . "\137" . $eqgoocgaqwqcimie;
            goto soacakggqekwwwiu;
            soacakggqekwwwiu:
            ysooogsyukoyyoio:
            goto cykoggeawyosiwuw;
            mcekqamqcmywscmu:
            mquiiwwouugsuaem:
            goto egcywciwasakksyg;
            gqowoywqskqqgygi:
            if (!$yuwymayicwwqiske) {
                goto ysooogsyukoyyoio;
            }
            goto wgsgyaguoackiwwm;
            kcauiquoaeiqeukk:
            aoqkyowyeusesasm:
            goto iqocsskqymaumese;
            iqocsskqymaumese:
        }
        goto cyiegccusakaysae;
        kqiccsyaycyiccmo:
        agicuamggwgewyag:
        goto soqkgseeeyomskas;
        yokyyqmgaqgcokaq:
    }
    
    public function qgcscuuessikoiko($igaagwuyasawwqms) : self
    {
        $this->qigsyyqgewgskemg("\x70\162\x2d\x75\160\144\141\x74\x61\x62\154\145\x2d\151\156\160\x75\x74")->igmaewykumgwoaoy("\x64\x61\x74\x61\55\165\160\144\x61\x74\x61\142\x6c\145", $igaagwuyasawwqms);
        return $this;
    }
}
