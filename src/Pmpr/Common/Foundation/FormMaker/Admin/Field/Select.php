<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Select extends OptionAwareField
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null, ?string $sqeykgyoooqysmca = "\x73\x65\x6c\145\143\164")
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : Field
    {
        goto ccegeescymmmewkw;
        ccumqyuimgsusysg:
        return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto okyuqywegkecwksm;
        geouuocykkkqocww:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto iciqgewcyywgeogi;
        }
        goto agcmgqouugawmeoi;
        agcmgqouugawmeoi:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto ymgwqaqkgeqyawqy;
        ieiwqcegoweqocym:
        ssscisokscuimoya:
        goto ccumqyuimgsusysg;
        gequckqgoicimsqs:
        $this->qcgocuceocquqcuw("\x64\141\164\x61\x2d\166\x61\x6c\x75\x65\x73", (string) $eqgoocgaqwqcimie);
        goto ieiwqcegoweqocym;
        ymgwqaqkgeqyawqy:
        iciqgewcyywgeogi:
        goto gequckqgoicimsqs;
        ccegeescymmmewkw:
        if (!$eqgoocgaqwqcimie) {
            goto ssscisokscuimoya;
        }
        goto geouuocykkkqocww;
        okyuqywegkecwksm:
    }
    
    public function wkimkisugugasowe($uusmaiomayssaecw, $pkyyagewkiyckmwy, $qiouiwasaauyaaue, $yuwymayicwwqiske = true) : self
    {
        goto equwyeuiquwackig;
        socyewkiwaeegegq:
        wwyuwyewyesgassm:
        goto aoscwomumeoomgyw;
        equwyeuiquwackig:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto iyusqagsqkwqckuq;
            yiqqoqoyoyukmoow:
            $qiouiwasaauyaaue[$eqgoocgaqwqcimie] = $meqocwsecsywiiqs;
            goto iiwmqckauigosmuo;
            wgeqammyuqwkeaue:
            $meqocwsecsywiiqs .= "\40\x28{$pkyyagewkiyckmwy}\51";
            goto keaooigiqyewgwww;
            equqqsqqkekqgoeo:
            if (!$pkyyagewkiyckmwy) {
                goto wuguamygeweeamsu;
            }
            goto wgeqammyuqwkeaue;
            saccuowkmueeayiy:
            unset($qiouiwasaauyaaue[$eqgoocgaqwqcimie]);
            goto geyyyqkikooemwis;
            iyusqagsqkwqckuq:
            if (!$yuwymayicwwqiske) {
                goto mweiikiqcmogmseo;
            }
            goto saccuowkmueeayiy;
            mmiwsuygkquswqws:
            mweiikiqcmogmseo:
            goto equqqsqqkekqgoeo;
            geyyyqkikooemwis:
            $eqgoocgaqwqcimie = $uusmaiomayssaecw . "\x5f" . $eqgoocgaqwqcimie;
            goto mmiwsuygkquswqws;
            keaooigiqyewgwww:
            wuguamygeweeamsu:
            goto yiqqoqoyoyukmoow;
            iiwmqckauigosmuo:
            ikmocwuqeagwiwgs:
            goto qiyuyycuoeaseymc;
            qiyuyycuoeaseymc:
        }
        goto socyewkiwaeegegq;
        cquisawesamykiay:
        return $this;
        goto ouisawwyqekkwgwm;
        omycoyymayoiuwyw:
        eewgyyewsomeoacy:
        goto cquisawesamykiay;
        aoscwomumeoomgyw:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto eewgyyewsomeoacy;
        }
        goto qemqewqykmaeueyg;
        qemqewqykmaeueyg:
        $this->kesomeowemmyygey($uusmaiomayssaecw, ["\154\141\142\145\154" => $pkyyagewkiyckmwy, "\157\x70\164\151\x6f\x6e\x73" => $qiouiwasaauyaaue]);
        goto omycoyymayoiuwyw;
        ouisawwyqekkwgwm:
    }
    
    public function qgcscuuessikoiko($igaagwuyasawwqms) : self
    {
        $this->qigsyyqgewgskemg("\160\162\55\165\x70\x64\141\164\x61\x62\154\145\55\151\x6e\x70\165\164")->igmaewykumgwoaoy("\144\x61\x74\x61\x2d\x75\160\x64\141\x74\x61\x62\x6c\145", $igaagwuyasawwqms);
        return $this;
    }
}
