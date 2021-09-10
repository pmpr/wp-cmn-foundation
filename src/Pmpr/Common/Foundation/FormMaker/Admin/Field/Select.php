<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Select extends OptionAwareField
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null, ?string $sqeykgyoooqysmca = "\163\145\154\145\x63\164")
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : Field
    {
        goto ssscisokscuimoya;
        agcmgqouugawmeoi:
        kkqkyaokeyacgwmy:
        goto ymgwqaqkgeqyawqy;
        ccegeescymmmewkw:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto kkqkyaokeyacgwmy;
        }
        goto geouuocykkkqocww;
        ymgwqaqkgeqyawqy:
        $this->qcgocuceocquqcuw("\x64\141\164\141\55\x76\141\154\x75\x65\163", (string) $eqgoocgaqwqcimie);
        goto gequckqgoicimsqs;
        geouuocykkkqocww:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto agcmgqouugawmeoi;
        gequckqgoicimsqs:
        iciqgewcyywgeogi:
        goto ieiwqcegoweqocym;
        ieiwqcegoweqocym:
        return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto ccumqyuimgsusysg;
        ssscisokscuimoya:
        if (!$eqgoocgaqwqcimie) {
            goto iciqgewcyywgeogi;
        }
        goto ccegeescymmmewkw;
        ccumqyuimgsusysg:
    }
    
    public function wkimkisugugasowe($uusmaiomayssaecw, $pkyyagewkiyckmwy, $qiouiwasaauyaaue, $yuwymayicwwqiske = true) : self
    {
        goto eewgyyewsomeoacy;
        aoscwomumeoomgyw:
        $this->kesomeowemmyygey($uusmaiomayssaecw, ["\154\x61\x62\145\x6c" => $pkyyagewkiyckmwy, "\157\160\164\151\x6f\x6e\x73" => $qiouiwasaauyaaue]);
        goto qemqewqykmaeueyg;
        eewgyyewsomeoacy:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto wuguamygeweeamsu;
            iyusqagsqkwqckuq:
            unset($qiouiwasaauyaaue[$eqgoocgaqwqcimie]);
            goto saccuowkmueeayiy;
            wgeqammyuqwkeaue:
            mweiikiqcmogmseo:
            goto keaooigiqyewgwww;
            keaooigiqyewgwww:
            $qiouiwasaauyaaue[$eqgoocgaqwqcimie] = $meqocwsecsywiiqs;
            goto yiqqoqoyoyukmoow;
            equqqsqqkekqgoeo:
            $meqocwsecsywiiqs .= "\x20\x28{$pkyyagewkiyckmwy}\x29";
            goto wgeqammyuqwkeaue;
            wuguamygeweeamsu:
            if (!$yuwymayicwwqiske) {
                goto ikmocwuqeagwiwgs;
            }
            goto iyusqagsqkwqckuq;
            geyyyqkikooemwis:
            ikmocwuqeagwiwgs:
            goto mmiwsuygkquswqws;
            mmiwsuygkquswqws:
            if (!$pkyyagewkiyckmwy) {
                goto mweiikiqcmogmseo;
            }
            goto equqqsqqkekqgoeo;
            saccuowkmueeayiy:
            $eqgoocgaqwqcimie = $uusmaiomayssaecw . "\137" . $eqgoocgaqwqcimie;
            goto geyyyqkikooemwis;
            yiqqoqoyoyukmoow:
            wwyuwyewyesgassm:
            goto iiwmqckauigosmuo;
            iiwmqckauigosmuo:
        }
        goto equwyeuiquwackig;
        socyewkiwaeegegq:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto qiyuyycuoeaseymc;
        }
        goto aoscwomumeoomgyw;
        omycoyymayoiuwyw:
        return $this;
        goto cquisawesamykiay;
        qemqewqykmaeueyg:
        qiyuyycuoeaseymc:
        goto omycoyymayoiuwyw;
        equwyeuiquwackig:
        okyuqywegkecwksm:
        goto socyewkiwaeegegq;
        cquisawesamykiay:
    }
    
    public function qgcscuuessikoiko($igaagwuyasawwqms) : self
    {
        $this->qigsyyqgewgskemg("\x70\162\x2d\165\160\144\141\x74\141\142\154\145\55\x69\156\160\165\x74")->igmaewykumgwoaoy("\144\141\x74\141\x2d\165\x70\x64\x61\164\141\142\154\145", $igaagwuyasawwqms);
        return $this;
    }
}
