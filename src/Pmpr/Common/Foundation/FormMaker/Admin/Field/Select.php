<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Select extends OptionAwareField
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null, ?string $sqeykgyoooqysmca = "\x73\x65\154\145\143\164")
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : Field
    {
        goto ccegeescymmmewkw;
        ccumqyuimgsusysg:
        return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto okyuqywegkecwksm;
        ccegeescymmmewkw:
        if (!$eqgoocgaqwqcimie) {
            goto ssscisokscuimoya;
        }
        goto geouuocykkkqocww;
        ymgwqaqkgeqyawqy:
        iciqgewcyywgeogi:
        goto gequckqgoicimsqs;
        agcmgqouugawmeoi:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto ymgwqaqkgeqyawqy;
        geouuocykkkqocww:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto iciqgewcyywgeogi;
        }
        goto agcmgqouugawmeoi;
        ieiwqcegoweqocym:
        ssscisokscuimoya:
        goto ccumqyuimgsusysg;
        gequckqgoicimsqs:
        $this->qcgocuceocquqcuw("\x64\141\164\141\55\x76\141\x6c\165\x65\x73", (string) $eqgoocgaqwqcimie);
        goto ieiwqcegoweqocym;
        okyuqywegkecwksm:
    }
    
    public function wkimkisugugasowe($uusmaiomayssaecw, $pkyyagewkiyckmwy, $qiouiwasaauyaaue, $yuwymayicwwqiske = true) : self
    {
        goto equwyeuiquwackig;
        omycoyymayoiuwyw:
        eewgyyewsomeoacy:
        goto cquisawesamykiay;
        aoscwomumeoomgyw:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto eewgyyewsomeoacy;
        }
        goto qemqewqykmaeueyg;
        cquisawesamykiay:
        return $this;
        goto ouisawwyqekkwgwm;
        equwyeuiquwackig:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto iyusqagsqkwqckuq;
            yiqqoqoyoyukmoow:
            $qiouiwasaauyaaue[$eqgoocgaqwqcimie] = $meqocwsecsywiiqs;
            goto iiwmqckauigosmuo;
            iyusqagsqkwqckuq:
            if (!$yuwymayicwwqiske) {
                goto mweiikiqcmogmseo;
            }
            goto saccuowkmueeayiy;
            iiwmqckauigosmuo:
            ikmocwuqeagwiwgs:
            goto qiyuyycuoeaseymc;
            wgeqammyuqwkeaue:
            $meqocwsecsywiiqs .= "\40\50{$pkyyagewkiyckmwy}\x29";
            goto keaooigiqyewgwww;
            geyyyqkikooemwis:
            $eqgoocgaqwqcimie = $uusmaiomayssaecw . "\x5f" . $eqgoocgaqwqcimie;
            goto mmiwsuygkquswqws;
            mmiwsuygkquswqws:
            mweiikiqcmogmseo:
            goto equqqsqqkekqgoeo;
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
            qiyuyycuoeaseymc:
        }
        goto socyewkiwaeegegq;
        qemqewqykmaeueyg:
        $this->kesomeowemmyygey($uusmaiomayssaecw, ["\160\x6b\171\171\141\x67\x65\167\153\151\171\143\x6b\x6d\167\x79" => $pkyyagewkiyckmwy, "\x6f\x70\x74\151\x6f\x6e\x73" => $qiouiwasaauyaaue]);
        goto omycoyymayoiuwyw;
        socyewkiwaeegegq:
        wwyuwyewyesgassm:
        goto aoscwomumeoomgyw;
        ouisawwyqekkwgwm:
    }
    
    public function qgcscuuessikoiko($igaagwuyasawwqms) : self
    {
        $this->qigsyyqgewgskemg("\160\162\x2d\165\x70\144\141\164\x61\142\154\145\x2d\151\156\x70\x75\x74")->igmaewykumgwoaoy("\x64\141\x74\141\55\165\160\144\141\164\141\x62\154\x65", $igaagwuyasawwqms);
        return $this;
    }
}
