<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        parent::__construct("\147\162\157\165\160", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->acauweqyyugwisqc(["\x6c\151\x6d\x69\164" => 0, "\163\157\x72\x74\141\x62\x6c\x65" => false, "\162\x65\155\157\x76\145\x5f\x62\165\164\164\157\156" => null])->yecmagkckgkwukuq($ymqmyyeuycgmigyo)->qigsyyqgewgskemg("\146\157\162\x6d\55\x63\x6f\x6e\164\x61\x69\156\145\162\x20\x63\157\154\x2d\61\62")->ewweaossowcqywaw($ikgwqyuyckaewsow);
    }
    
    public function yecmagkckgkwukuq(?string $pkyyagewkiyckmwy) : self
    {
        goto kcauiquoaeiqeukk;
        kcauiquoaeiqeukk:
        if (!$pkyyagewkiyckmwy) {
            goto egcywciwasakksyg;
        }
        goto iqocsskqymaumese;
        mmgmkqacmswuuqke:
        return $this;
        goto cyiegccusakaysae;
        agicuamggwgewyag:
        egcywciwasakksyg:
        goto mmgmkqacmswuuqke;
        iqocsskqymaumese:
        $this->acauweqyyugwisqc(["\141\144\x64\137\142\x75\x74\x74\x6f\156" => sprintf(__("\x41\144\x64\40\116\145\167\x20\45\163", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy), "\147\162\157\x75\160\x5f\x74\x69\x74\154\145" => sprintf("\x25\163\40\173\43\175", $pkyyagewkiyckmwy)]);
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
        $this->qigsyyqgewgskemg("\143\157\x6c\55\154\147\55\x36");
        return $this;
    }
    
    public function usosgsaaimqcysyk() : self
    {
        $this->qigsyyqgewgskemg("\143\157\x6c\55\154\x67\55\x36\x20\143\157\154\x2d\170\x6c\x2d\64");
        return $this;
    }
    
    public function wygoskowywcuyaiq() : self
    {
        $this->qigsyyqgewgskemg("\x63\x6f\x6c\55\x6d\x64\55\66\x20\143\157\154\x2d\154\147\x2d\64\40\x63\x6f\154\55\170\x6c\x2d\63");
        return $this;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto soqkgseeeyomskas;
        yokyyqmgaqgcokaq:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto smumgyimgieecmwk;
        cwmwyimouyyyqmas:
        qyasuykwoioqoykq:
        goto oeamqmugcouisoki;
        suakgqaoaoskimwc:
        if (!in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\x68\x65\143\x6b\142\157\x78", "\x72\x61\144\x69\157"])) {
            goto qyasuykwoioqoykq;
        }
        goto ggecuewimcisqyei;
        ekisckcuoqqosgsg:
        return $this;
        goto kqwmiakcsoaskmeu;
        oeamqmugcouisoki:
        $aiowsaccomcoikus->yoimakcqmoqokkcu();
        goto eyeymyeqyywycuui;
        smumgyimgieecmwk:
        qicoumyicsicyiiy:
        goto suakgqaoaoskimwc;
        ggecuewimcisqyei:
        $aiowsaccomcoikus->mkmssscwmeekwgqo();
        goto scuegcceeiyqkgkc;
        eyeymyeqyywycuui:
        kqiccsyaycyiccmo:
        goto mmokqmsgaaeqyiiq;
        soqkgseeeyomskas:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto qicoumyicsicyiiy;
        }
        goto yokyyqmgaqgcokaq;
        mmokqmsgaaeqyiiq:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto ekisckcuoqqosgsg;
        scuegcceeiyqkgkc:
        goto kqiccsyaycyiccmo;
        goto cwmwyimouyyyqmas;
        kqwmiakcsoaskmeu:
    }
    
    public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self
    {
        goto gcqqgkkyicouoggc;
        gcqqgkkyicouoggc:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            iuyuyeasowcwgogq:
        }
        goto ieaqwmmgymscuiyq;
        scgywcukauccyoao:
        return $this;
        goto ycsmswoiwkaaqwci;
        ieaqwmmgymscuiyq:
        kkogamqweysaskie:
        goto scgywcukauccyoao;
        ycsmswoiwkaaqwci:
    }
    
    public function awaeegwoiqoisoam(?array $ikgwqyuyckaewsow = [], $qsycuegoicqcqkmo = "\x61\156\x64", $wumguikkgaigkoee = []) : self
    {
        goto qowoukmeooyayoog;
        acqkcqcysamiyqwk:
        $this->nonDuplicate[] = ["\146\x69\145\154\x64\x73" => $ikgwqyuyckaewsow, "\x62\x6f\157\154\145\141\156" => $qsycuegoicqcqkmo, "\x6d\145\163\x73\141\x67\145\163" => $wumguikkgaigkoee];
        goto iugacsaoqaooakai;
        iugacsaoqaooakai:
        return $this;
        goto iwusoigygwmgscoc;
        wowcqqowyioioage:
        $wumguikkgaigkoee = ["\163\165\142\155\x69\164" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\123\157\x72\162\171\x2c\40\171\x6f\165\40\x63\141\156\x27\x74\x20\x73\x75\142\155\151\164\x20\146\157\162\155\x2e\40\123\x6f\x6d\145\x20\x66\151\x65\154\144\x27\163\x20\166\141\x6c\x75\x65\x20\151\163\40\x64\x75\x70\154\151\143\141\x74\145\144\40\x69\x6e\x20\147\x72\157\165\160\54\40\x70\154\145\141\x73\x65\40\x66\151\170\40\x65\x72\162\157\162\163\x20\x61\156\x64\40\x74\162\171\x20\x61\x67\141\x69\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\x61\144\144\137\156\145\x77" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\123\157\162\162\x79\x2c\40\x79\157\165\x20\x63\x61\x6e\47\x74\40\x61\x64\x64\x20\156\x65\167\40\x25\163\56\x20\x53\157\155\x65\x20\146\x69\x65\154\144\47\x73\x20\x76\x61\x6c\x75\145\40\x69\163\40\144\165\x70\154\151\143\141\164\x65\144\54\x20\x70\x6c\x65\x61\x73\x65\x20\146\x69\x78\40\x65\162\162\x6f\x72\x73\x20\141\x6e\x64\40\x74\x72\x79\x20\141\147\141\151\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))];
        goto oiwkgwayeeukeccs;
        oiwkgwayeeukeccs:
        uwismgmawakkymaw:
        goto acqkcqcysamiyqwk;
        qowoukmeooyayoog:
        if ($wumguikkgaigkoee) {
            goto uwismgmawakkymaw;
        }
        goto wowcqqowyioioage;
        iwusoigygwmgscoc:
    }
    
    public function iaogqeuosowauooc() : array
    {
        return $this->nonDuplicate;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto isekauuwqcsuicuw;
        yoskimkuksecqysw:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto wusemuakoqsycogc;
        wqwceyiekwmyksqm:
        socaggiymwmewosi:
        goto cgegwqcqwqemsomy;
        wmcumqiwkckkoggy:
        $this->usoqcyyugsuyiewc("\160\x72\x2d\156\157\156\55\x64\165\x70\154\151\x63\x61\164\145\55\147\x72\x6f\165\160")->igmaewykumgwoaoy("\x64\141\x74\141\55\x6e\157\156\55\144\165\x70\154\x69\143\141\x74\145", json_encode($wmeooiyuiyagywsc));
        goto isuocqoeqoaeuksg;
        isuocqoeqoaeuksg:
        ocaqsuieiymyomym:
        goto yoskimkuksecqysw;
        wusemuakoqsycogc:
        $this->options["\x61\x74\164\162\151\x62\x75\164\145\x73"] = $this->ccekeuwwqqoiwuwy();
        goto oosugckaswaggaeu;
        cgegwqcqwqemsomy:
        if (!($wmeooiyuiyagywsc = $this->iaogqeuosowauooc())) {
            goto ocaqsuieiymyomym;
        }
        goto wmcumqiwkckkoggy;
        isekauuwqcsuicuw:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            $aiowsaccomcoikus["\166\x61\154\x75\145"] = $this->qooeaookuemoqecm();
            wugmeqgqiukemiyu:
        }
        goto wqwceyiekwmyksqm;
        oosugckaswaggaeu:
    }
}
