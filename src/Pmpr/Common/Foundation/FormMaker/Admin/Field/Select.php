<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Select extends OptionAwareField
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null, ?string $sqeykgyoooqysmca = "\x73\x65\x6c\x65\x63\x74")
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : Field
    {
        goto geouuocykkkqocww;
        ieiwqcegoweqocym:
        $this->qcgocuceocquqcuw("\x64\x61\164\141\55\166\x61\x6c\165\x65\x73", (string) $eqgoocgaqwqcimie);
        goto ccumqyuimgsusysg;
        geouuocykkkqocww:
        if (!$eqgoocgaqwqcimie) {
            goto ccegeescymmmewkw;
        }
        goto agcmgqouugawmeoi;
        okyuqywegkecwksm:
        return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie);
        goto wwyuwyewyesgassm;
        ymgwqaqkgeqyawqy:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto gequckqgoicimsqs;
        ccumqyuimgsusysg:
        ccegeescymmmewkw:
        goto okyuqywegkecwksm;
        gequckqgoicimsqs:
        ssscisokscuimoya:
        goto ieiwqcegoweqocym;
        agcmgqouugawmeoi:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto ssscisokscuimoya;
        }
        goto ymgwqaqkgeqyawqy;
        wwyuwyewyesgassm:
    }
    
    public function wkimkisugugasowe($uusmaiomayssaecw, $pkyyagewkiyckmwy, $qiouiwasaauyaaue, $yuwymayicwwqiske = true) : self
    {
        goto socyewkiwaeegegq;
        cquisawesamykiay:
        equwyeuiquwackig:
        goto ouisawwyqekkwgwm;
        ouisawwyqekkwgwm:
        return $this;
        goto swseysyokwyksqcu;
        aoscwomumeoomgyw:
        ikmocwuqeagwiwgs:
        goto qemqewqykmaeueyg;
        socyewkiwaeegegq:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto saccuowkmueeayiy;
            equqqsqqkekqgoeo:
            wuguamygeweeamsu:
            goto wgeqammyuqwkeaue;
            yiqqoqoyoyukmoow:
            iyusqagsqkwqckuq:
            goto iiwmqckauigosmuo;
            geyyyqkikooemwis:
            unset($qiouiwasaauyaaue[$eqgoocgaqwqcimie]);
            goto mmiwsuygkquswqws;
            keaooigiqyewgwww:
            $meqocwsecsywiiqs .= "\40\x28{$pkyyagewkiyckmwy}\x29";
            goto yiqqoqoyoyukmoow;
            mmiwsuygkquswqws:
            $eqgoocgaqwqcimie = $uusmaiomayssaecw . "\x5f" . $eqgoocgaqwqcimie;
            goto equqqsqqkekqgoeo;
            iiwmqckauigosmuo:
            $qiouiwasaauyaaue[$eqgoocgaqwqcimie] = $meqocwsecsywiiqs;
            goto qiyuyycuoeaseymc;
            qiyuyycuoeaseymc:
            mweiikiqcmogmseo:
            goto eewgyyewsomeoacy;
            saccuowkmueeayiy:
            if (!$yuwymayicwwqiske) {
                goto wuguamygeweeamsu;
            }
            goto geyyyqkikooemwis;
            wgeqammyuqwkeaue:
            if (!$pkyyagewkiyckmwy) {
                goto iyusqagsqkwqckuq;
            }
            goto keaooigiqyewgwww;
            eewgyyewsomeoacy:
        }
        goto aoscwomumeoomgyw;
        omycoyymayoiuwyw:
        $this->kesomeowemmyygey($uusmaiomayssaecw, ["\x70\x6b\171\171\x61\x67\x65\167\x6b\151\171\x63\x6b\155\x77\171" => $pkyyagewkiyckmwy, "\157\160\x74\151\157\156\x73" => $qiouiwasaauyaaue]);
        goto cquisawesamykiay;
        qemqewqykmaeueyg:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto equwyeuiquwackig;
        }
        goto omycoyymayoiuwyw;
        swseysyokwyksqcu:
    }
    
    public function qgcscuuessikoiko($igaagwuyasawwqms) : self
    {
        $this->qigsyyqgewgskemg("\x70\162\55\165\x70\x64\141\164\141\142\154\145\x2d\x69\x6e\x70\x75\164")->igmaewykumgwoaoy("\x64\141\164\141\x2d\x75\160\144\141\164\x61\x62\x6c\x65", $igaagwuyasawwqms);
        return $this;
    }
}
