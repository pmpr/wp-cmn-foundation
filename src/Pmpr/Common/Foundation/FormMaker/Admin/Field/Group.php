<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Group extends OptionAwareField
{
    
    protected array $fields = [];
    
    protected array $nonDuplicate = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $ikgwqyuyckaewsow = [], ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x67\162\157\165\160", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->acauweqyyugwisqc(["\x6c\151\155\151\x74" => 0, "\x73\x6f\x72\164\x61\142\x6c\145" => false, "\x72\145\155\157\166\x65\x5f\x62\x75\x74\164\x6f\x6e" => null])->yecmagkckgkwukuq($ymqmyyeuycgmigyo)->qigsyyqgewgskemg("\146\x6f\162\x6d\55\x63\157\x6e\164\x61\x69\156\x65\x72\40\143\157\154\55\61\x32")->ewweaossowcqywaw($ikgwqyuyckaewsow);
    }
    
    public function yecmagkckgkwukuq(?string $pkyyagewkiyckmwy) : self
    {
        goto kcauiquoaeiqeukk;
        agicuamggwgewyag:
        egcywciwasakksyg:
        goto mmgmkqacmswuuqke;
        kcauiquoaeiqeukk:
        if (!$pkyyagewkiyckmwy) {
            goto egcywciwasakksyg;
        }
        goto iqocsskqymaumese;
        mmgmkqacmswuuqke:
        return $this;
        goto cyiegccusakaysae;
        iqocsskqymaumese:
        $this->acauweqyyugwisqc(["\x61\x64\144\137\x62\x75\x74\x74\x6f\156" => sprintf(__("\101\x64\x64\40\x4e\145\167\x20\x25\x73", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy), "\x67\x72\157\165\x70\137\164\151\x74\154\x65" => sprintf("\x25\163\x20\x7b\x23\x7d", $pkyyagewkiyckmwy)]);
        goto agicuamggwgewyag;
        cyiegccusakaysae:
    }
    
    public function ugmceccgwaaaigiy() : ?array
    {
        return $this->fields;
    }
    
    public function acakyumkgoeiskqq(array $ikgwqyuyckaewsow) : self
    {
        $this->fields = $ikgwqyuyckaewsow;
        return $this;
    }
    
    public function omsoosuoikgueyke() : self
    {
        $this->qigsyyqgewgskemg("\143\157\154\55\x6c\x67\55\x36");
        return $this;
    }
    
    public function usosgsaaimqcysyk() : self
    {
        $this->qigsyyqgewgskemg("\x63\157\x6c\x2d\154\147\x2d\x36\x20\143\x6f\154\x2d\170\154\55\64");
        return $this;
    }
    
    public function wygoskowywcuyaiq() : self
    {
        $this->qigsyyqgewgskemg("\143\x6f\x6c\x2d\155\x64\55\x36\x20\143\x6f\154\55\x6c\x67\x2d\x34\40\x63\x6f\154\x2d\170\x6c\55\63");
        return $this;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto soqkgseeeyomskas;
        ekisckcuoqqosgsg:
        return $this;
        goto kqwmiakcsoaskmeu;
        eyeymyeqyywycuui:
        kqiccsyaycyiccmo:
        goto mmokqmsgaaeqyiiq;
        suakgqaoaoskimwc:
        if (!in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\x68\145\143\x6b\x62\157\x78", "\x72\x61\144\x69\x6f"])) {
            goto qyasuykwoioqoykq;
        }
        goto ggecuewimcisqyei;
        scuegcceeiyqkgkc:
        goto kqiccsyaycyiccmo;
        goto cwmwyimouyyyqmas;
        yokyyqmgaqgcokaq:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto smumgyimgieecmwk;
        soqkgseeeyomskas:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto qicoumyicsicyiiy;
        }
        goto yokyyqmgaqgcokaq;
        oeamqmugcouisoki:
        $aiowsaccomcoikus->yoimakcqmoqokkcu();
        goto eyeymyeqyywycuui;
        mmokqmsgaaeqyiiq:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto ekisckcuoqqosgsg;
        ggecuewimcisqyei:
        $aiowsaccomcoikus->mkmssscwmeekwgqo();
        goto scuegcceeiyqkgkc;
        cwmwyimouyyyqmas:
        qyasuykwoioqoykq:
        goto oeamqmugcouisoki;
        smumgyimgieecmwk:
        qicoumyicsicyiiy:
        goto suakgqaoaoskimwc;
        kqwmiakcsoaskmeu:
    }
    
    public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self
    {
        goto gcqqgkkyicouoggc;
        ieaqwmmgymscuiyq:
        kkogamqweysaskie:
        goto scgywcukauccyoao;
        gcqqgkkyicouoggc:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            iuyuyeasowcwgogq:
        }
        goto ieaqwmmgymscuiyq;
        scgywcukauccyoao:
        return $this;
        goto ycsmswoiwkaaqwci;
        ycsmswoiwkaaqwci:
    }
    
    public function awaeegwoiqoisoam(?array $ikgwqyuyckaewsow = [], $qsycuegoicqcqkmo = "\141\x6e\144", $wumguikkgaigkoee = []) : self
    {
        goto qowoukmeooyayoog;
        qowoukmeooyayoog:
        if ($wumguikkgaigkoee) {
            goto uwismgmawakkymaw;
        }
        goto wowcqqowyioioage;
        iugacsaoqaooakai:
        return $this;
        goto iwusoigygwmgscoc;
        oiwkgwayeeukeccs:
        uwismgmawakkymaw:
        goto acqkcqcysamiyqwk;
        acqkcqcysamiyqwk:
        $this->nonDuplicate[] = ["\x66\x69\145\154\144\x73" => $ikgwqyuyckaewsow, "\x62\157\157\x6c\145\141\156" => $qsycuegoicqcqkmo, "\155\x65\163\x73\141\147\145\163" => $wumguikkgaigkoee];
        goto iugacsaoqaooakai;
        wowcqqowyioioage:
        $wumguikkgaigkoee = ["\x73\x75\x62\x6d\151\x74" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\123\x6f\162\x72\x79\54\x20\x79\x6f\x75\40\143\141\156\x27\x74\x20\163\x75\142\155\151\x74\40\146\x6f\162\x6d\56\x20\123\157\155\x65\40\x66\151\145\154\144\47\x73\x20\166\141\154\165\x65\x20\x69\163\x20\144\x75\x70\x6c\151\x63\141\x74\145\144\40\151\156\x20\147\162\x6f\165\x70\x2c\40\x70\154\145\141\x73\145\x20\x66\151\x78\x20\x65\x72\162\157\x72\x73\x20\x61\x6e\144\x20\164\x72\x79\40\141\147\x61\151\156\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\x61\144\144\x5f\156\145\x77" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\x53\x6f\162\162\x79\54\40\x79\157\x75\x20\143\x61\156\x27\x74\x20\141\144\x64\x20\x6e\x65\167\x20\x25\163\56\x20\x53\x6f\x6d\x65\40\146\x69\145\x6c\144\47\163\40\x76\x61\x6c\165\145\40\151\x73\40\144\x75\160\x6c\151\143\141\x74\x65\x64\x2c\x20\x70\154\x65\x61\163\145\40\146\151\x78\40\x65\x72\x72\x6f\x72\x73\x20\x61\x6e\x64\40\164\x72\x79\40\141\x67\x61\x69\x6e\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))];
        goto oiwkgwayeeukeccs;
        iwusoigygwmgscoc:
    }
    
    public function iaogqeuosowauooc() : array
    {
        return $this->nonDuplicate;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto isekauuwqcsuicuw;
        isekauuwqcsuicuw:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            $aiowsaccomcoikus["\166\x61\x6c\165\145"] = $this->qooeaookuemoqecm();
            wugmeqgqiukemiyu:
        }
        goto wqwceyiekwmyksqm;
        cgegwqcqwqemsomy:
        if (!($wmeooiyuiyagywsc = $this->iaogqeuosowauooc())) {
            goto ocaqsuieiymyomym;
        }
        goto wmcumqiwkckkoggy;
        wusemuakoqsycogc:
        $this->options["\141\x74\x74\x72\x69\x62\165\x74\145\x73"] = $this->ccekeuwwqqoiwuwy();
        goto oosugckaswaggaeu;
        yoskimkuksecqysw:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto wusemuakoqsycogc;
        wmcumqiwkckkoggy:
        $this->usoqcyyugsuyiewc("\x70\162\x2d\156\157\x6e\55\144\x75\160\154\151\x63\x61\164\x65\x2d\x67\x72\157\165\x70")->igmaewykumgwoaoy("\144\x61\x74\x61\x2d\156\x6f\x6e\55\x64\x75\x70\154\151\x63\x61\164\x65", json_encode($wmeooiyuiyagywsc));
        goto isuocqoeqoaeuksg;
        wqwceyiekwmyksqm:
        socaggiymwmewosi:
        goto cgegwqcqwqemsomy;
        isuocqoeqoaeuksg:
        ocaqsuieiymyomym:
        goto yoskimkuksecqysw;
        oosugckaswaggaeu:
    }
}
