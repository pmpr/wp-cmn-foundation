<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Select extends OptionAwareField
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null, ?string $sqeykgyoooqysmca = "\163\x65\154\145\143\164")
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : Field
    {
        goto ssscisokscuimoya;
        gequckqgoicimsqs:
        iciqgewcyywgeogi:
        goto ieiwqcegoweqocym;
        agcmgqouugawmeoi:
        kkqkyaokeyacgwmy:
        goto ymgwqaqkgeqyawqy;
        geouuocykkkqocww:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto agcmgqouugawmeoi;
        ssscisokscuimoya:
        if (!$eqgoocgaqwqcimie) {
            goto iciqgewcyywgeogi;
        }
        goto ccegeescymmmewkw;
        ymgwqaqkgeqyawqy:
        $this->qcgocuceocquqcuw("\144\x61\x74\x61\x2d\x76\x61\x6c\x75\145\x73", (string) $eqgoocgaqwqcimie);
        goto gequckqgoicimsqs;
        ccegeescymmmewkw:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto kkqkyaokeyacgwmy;
        }
        goto geouuocykkkqocww;
        ieiwqcegoweqocym:
        return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto ccumqyuimgsusysg;
        ccumqyuimgsusysg:
    }
    
    public function wkimkisugugasowe($uusmaiomayssaecw, $pkyyagewkiyckmwy, $qiouiwasaauyaaue, $yuwymayicwwqiske = true) : self
    {
        goto eewgyyewsomeoacy;
        aoscwomumeoomgyw:
        $this->kesomeowemmyygey($uusmaiomayssaecw, ["\x6c\x61\x62\x65\154" => $pkyyagewkiyckmwy, "\157\x70\164\151\x6f\156\x73" => $qiouiwasaauyaaue]);
        goto qemqewqykmaeueyg;
        socyewkiwaeegegq:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto qiyuyycuoeaseymc;
        }
        goto aoscwomumeoomgyw;
        qemqewqykmaeueyg:
        qiyuyycuoeaseymc:
        goto omycoyymayoiuwyw;
        equwyeuiquwackig:
        okyuqywegkecwksm:
        goto socyewkiwaeegegq;
        eewgyyewsomeoacy:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto wuguamygeweeamsu;
            wgeqammyuqwkeaue:
            mweiikiqcmogmseo:
            goto keaooigiqyewgwww;
            iyusqagsqkwqckuq:
            unset($qiouiwasaauyaaue[$eqgoocgaqwqcimie]);
            goto saccuowkmueeayiy;
            keaooigiqyewgwww:
            $qiouiwasaauyaaue[$eqgoocgaqwqcimie] = $meqocwsecsywiiqs;
            goto yiqqoqoyoyukmoow;
            equqqsqqkekqgoeo:
            $meqocwsecsywiiqs .= "\40\x28{$pkyyagewkiyckmwy}\x29";
            goto wgeqammyuqwkeaue;
            yiqqoqoyoyukmoow:
            wwyuwyewyesgassm:
            goto iiwmqckauigosmuo;
            saccuowkmueeayiy:
            $eqgoocgaqwqcimie = $uusmaiomayssaecw . "\x5f" . $eqgoocgaqwqcimie;
            goto geyyyqkikooemwis;
            mmiwsuygkquswqws:
            if (!$pkyyagewkiyckmwy) {
                goto mweiikiqcmogmseo;
            }
            goto equqqsqqkekqgoeo;
            geyyyqkikooemwis:
            ikmocwuqeagwiwgs:
            goto mmiwsuygkquswqws;
            wuguamygeweeamsu:
            if (!$yuwymayicwwqiske) {
                goto ikmocwuqeagwiwgs;
            }
            goto iyusqagsqkwqckuq;
            iiwmqckauigosmuo:
        }
        goto equwyeuiquwackig;
        omycoyymayoiuwyw:
        return $this;
        goto cquisawesamykiay;
        cquisawesamykiay:
    }
    
    public function qgcscuuessikoiko($igaagwuyasawwqms) : self
    {
        $this->qigsyyqgewgskemg("\160\162\x2d\165\x70\x64\141\x74\x61\x62\154\x65\55\x69\x6e\160\x75\164")->igmaewykumgwoaoy("\144\x61\x74\x61\55\x75\x70\144\x61\164\x61\142\x6c\x65", $igaagwuyasawwqms);
        return $this;
    }
}
