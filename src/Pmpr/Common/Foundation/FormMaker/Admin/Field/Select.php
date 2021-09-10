<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Select extends OptionAwareField
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null, ?string $sqeykgyoooqysmca = "\163\145\154\x65\143\164")
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : Field
    {
        goto yaciickwyewwoisc;
        kkqkyaokeyacgwmy:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto wiwcuiguaogckaiq;
        }
        goto iciqgewcyywgeogi;
        agcmgqouugawmeoi:
        return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto ymgwqaqkgeqyawqy;
        ssscisokscuimoya:
        wiwcuiguaogckaiq:
        goto ccegeescymmmewkw;
        iciqgewcyywgeogi:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto ssscisokscuimoya;
        ccegeescymmmewkw:
        $this->qcgocuceocquqcuw("\x64\141\x74\x61\x2d\166\x61\x6c\165\x65\163", (string) $eqgoocgaqwqcimie);
        goto geouuocykkkqocww;
        geouuocykkkqocww:
        asigmmeaiqugsqkc:
        goto agcmgqouugawmeoi;
        yaciickwyewwoisc:
        if (!$eqgoocgaqwqcimie) {
            goto asigmmeaiqugsqkc;
        }
        goto kkqkyaokeyacgwmy;
        ymgwqaqkgeqyawqy:
    }
    
    public function wkimkisugugasowe($uusmaiomayssaecw, $pkyyagewkiyckmwy, $qiouiwasaauyaaue, $yuwymayicwwqiske = true) : self
    {
        goto yiqqoqoyoyukmoow;
        eewgyyewsomeoacy:
        $this->kesomeowemmyygey($uusmaiomayssaecw, ["\x6c\x61\x62\145\154" => $pkyyagewkiyckmwy, "\157\160\x74\151\x6f\x6e\x73" => $qiouiwasaauyaaue]);
        goto equwyeuiquwackig;
        iiwmqckauigosmuo:
        gequckqgoicimsqs:
        goto qiyuyycuoeaseymc;
        socyewkiwaeegegq:
        return $this;
        goto aoscwomumeoomgyw;
        qiyuyycuoeaseymc:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto keaooigiqyewgwww;
        }
        goto eewgyyewsomeoacy;
        equwyeuiquwackig:
        keaooigiqyewgwww:
        goto socyewkiwaeegegq;
        yiqqoqoyoyukmoow:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto wwyuwyewyesgassm;
            iyusqagsqkwqckuq:
            if (!$pkyyagewkiyckmwy) {
                goto okyuqywegkecwksm;
            }
            goto saccuowkmueeayiy;
            wuguamygeweeamsu:
            ccumqyuimgsusysg:
            goto iyusqagsqkwqckuq;
            wwyuwyewyesgassm:
            if (!$yuwymayicwwqiske) {
                goto ccumqyuimgsusysg;
            }
            goto ikmocwuqeagwiwgs;
            saccuowkmueeayiy:
            $meqocwsecsywiiqs .= "\x20\50{$pkyyagewkiyckmwy}\x29";
            goto geyyyqkikooemwis;
            ikmocwuqeagwiwgs:
            unset($qiouiwasaauyaaue[$eqgoocgaqwqcimie]);
            goto mweiikiqcmogmseo;
            mweiikiqcmogmseo:
            $eqgoocgaqwqcimie = $uusmaiomayssaecw . "\137" . $eqgoocgaqwqcimie;
            goto wuguamygeweeamsu;
            equqqsqqkekqgoeo:
            ieiwqcegoweqocym:
            goto wgeqammyuqwkeaue;
            geyyyqkikooemwis:
            okyuqywegkecwksm:
            goto mmiwsuygkquswqws;
            mmiwsuygkquswqws:
            $qiouiwasaauyaaue[$eqgoocgaqwqcimie] = $meqocwsecsywiiqs;
            goto equqqsqqkekqgoeo;
            wgeqammyuqwkeaue:
        }
        goto iiwmqckauigosmuo;
        aoscwomumeoomgyw:
    }
    
    public function qgcscuuessikoiko($igaagwuyasawwqms) : self
    {
        $this->qigsyyqgewgskemg("\160\x72\55\165\x70\x64\141\164\141\x62\154\145\55\151\x6e\160\x75\x74")->igmaewykumgwoaoy("\x64\141\164\141\55\165\160\144\141\164\141\x62\154\x65", $igaagwuyasawwqms);
        return $this;
    }
}
