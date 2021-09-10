<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Select extends OptionAwareField
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null, ?string $sqeykgyoooqysmca = "\163\145\x6c\x65\143\164")
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : Field
    {
        goto ccegeescymmmewkw;
        geouuocykkkqocww:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto iciqgewcyywgeogi;
        }
        goto agcmgqouugawmeoi;
        ccegeescymmmewkw:
        if (!$eqgoocgaqwqcimie) {
            goto ssscisokscuimoya;
        }
        goto geouuocykkkqocww;
        ieiwqcegoweqocym:
        ssscisokscuimoya:
        goto ccumqyuimgsusysg;
        agcmgqouugawmeoi:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto ymgwqaqkgeqyawqy;
        gequckqgoicimsqs:
        $this->qcgocuceocquqcuw("\144\x61\164\x61\55\166\141\154\x75\x65\163", (string) $eqgoocgaqwqcimie);
        goto ieiwqcegoweqocym;
        ccumqyuimgsusysg:
        return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto okyuqywegkecwksm;
        ymgwqaqkgeqyawqy:
        iciqgewcyywgeogi:
        goto gequckqgoicimsqs;
        okyuqywegkecwksm:
    }
    
    public function wkimkisugugasowe($uusmaiomayssaecw, $pkyyagewkiyckmwy, $qiouiwasaauyaaue, $yuwymayicwwqiske = true) : self
    {
        goto equwyeuiquwackig;
        equwyeuiquwackig:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto iyusqagsqkwqckuq;
            mmiwsuygkquswqws:
            mweiikiqcmogmseo:
            goto equqqsqqkekqgoeo;
            wgeqammyuqwkeaue:
            $meqocwsecsywiiqs .= "\40\x28{$pkyyagewkiyckmwy}\x29";
            goto keaooigiqyewgwww;
            iyusqagsqkwqckuq:
            if (!$yuwymayicwwqiske) {
                goto mweiikiqcmogmseo;
            }
            goto saccuowkmueeayiy;
            keaooigiqyewgwww:
            wuguamygeweeamsu:
            goto yiqqoqoyoyukmoow;
            equqqsqqkekqgoeo:
            if (!$pkyyagewkiyckmwy) {
                goto wuguamygeweeamsu;
            }
            goto wgeqammyuqwkeaue;
            saccuowkmueeayiy:
            unset($qiouiwasaauyaaue[$eqgoocgaqwqcimie]);
            goto geyyyqkikooemwis;
            iiwmqckauigosmuo:
            ikmocwuqeagwiwgs:
            goto qiyuyycuoeaseymc;
            geyyyqkikooemwis:
            $eqgoocgaqwqcimie = $uusmaiomayssaecw . "\x5f" . $eqgoocgaqwqcimie;
            goto mmiwsuygkquswqws;
            yiqqoqoyoyukmoow:
            $qiouiwasaauyaaue[$eqgoocgaqwqcimie] = $meqocwsecsywiiqs;
            goto iiwmqckauigosmuo;
            qiyuyycuoeaseymc:
        }
        goto socyewkiwaeegegq;
        omycoyymayoiuwyw:
        eewgyyewsomeoacy:
        goto cquisawesamykiay;
        aoscwomumeoomgyw:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto eewgyyewsomeoacy;
        }
        goto qemqewqykmaeueyg;
        qemqewqykmaeueyg:
        $this->kesomeowemmyygey($uusmaiomayssaecw, ["\x6c\x61\x62\145\154" => $pkyyagewkiyckmwy, "\157\160\x74\151\157\156\x73" => $qiouiwasaauyaaue]);
        goto omycoyymayoiuwyw;
        socyewkiwaeegegq:
        wwyuwyewyesgassm:
        goto aoscwomumeoomgyw;
        cquisawesamykiay:
        return $this;
        goto ouisawwyqekkwgwm;
        ouisawwyqekkwgwm:
    }
    
    public function qgcscuuessikoiko($igaagwuyasawwqms) : self
    {
        $this->qigsyyqgewgskemg("\160\162\x2d\165\x70\x64\x61\164\141\142\154\x65\55\x69\x6e\x70\x75\x74")->igmaewykumgwoaoy("\144\141\x74\141\x2d\x75\x70\x64\x61\164\x61\x62\x6c\x65", $igaagwuyasawwqms);
        return $this;
    }
}
