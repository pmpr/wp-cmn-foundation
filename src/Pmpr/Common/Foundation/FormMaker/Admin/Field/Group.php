<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        parent::__construct("\147\x72\157\x75\x70", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->acauweqyyugwisqc(["\x6c\151\x6d\151\x74" => 0, "\x73\x6f\x72\x74\x61\142\x6c\x65" => false, "\x72\x65\155\x6f\166\x65\137\142\165\164\164\x6f\x6e" => null])->yecmagkckgkwukuq($ymqmyyeuycgmigyo)->qigsyyqgewgskemg("\x66\157\162\155\x2d\143\157\x6e\164\141\151\156\x65\x72\x20\x63\157\154\55\x31\62")->ewweaossowcqywaw($ikgwqyuyckaewsow);
    }
    
    public function yecmagkckgkwukuq(?string $pkyyagewkiyckmwy) : self
    {
        goto iqocsskqymaumese;
        agicuamggwgewyag:
        $this->acauweqyyugwisqc(["\141\x64\x64\137\142\x75\164\164\x6f\x6e" => sprintf(__("\101\x64\x64\x20\x4e\x65\167\40\45\x73", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy), "\147\162\157\165\x70\137\x74\x69\x74\154\x65" => sprintf("\45\163\x20\x7b\x23\x7d", $pkyyagewkiyckmwy)]);
        goto mmgmkqacmswuuqke;
        iqocsskqymaumese:
        if (!$pkyyagewkiyckmwy) {
            goto kcauiquoaeiqeukk;
        }
        goto agicuamggwgewyag;
        mmgmkqacmswuuqke:
        kcauiquoaeiqeukk:
        goto cyiegccusakaysae;
        cyiegccusakaysae:
        return $this;
        goto qicoumyicsicyiiy;
        qicoumyicsicyiiy:
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
        $this->qigsyyqgewgskemg("\x63\157\x6c\55\x6c\x67\55\x36");
        return $this;
    }
    
    public function usosgsaaimqcysyk() : self
    {
        $this->qigsyyqgewgskemg("\x63\x6f\154\55\154\147\x2d\66\x20\143\x6f\154\55\170\x6c\55\64");
        return $this;
    }
    
    public function wygoskowywcuyaiq() : self
    {
        $this->qigsyyqgewgskemg("\x63\x6f\x6c\55\155\144\x2d\66\40\x63\157\x6c\x2d\x6c\x67\55\x34\x20\143\x6f\x6c\55\170\x6c\x2d\63");
        return $this;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto yokyyqmgaqgcokaq;
        suakgqaoaoskimwc:
        qyasuykwoioqoykq:
        goto ggecuewimcisqyei;
        ggecuewimcisqyei:
        if (!in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\143\x68\145\x63\x6b\142\x6f\170", "\x72\141\144\x69\x6f"])) {
            goto kqiccsyaycyiccmo;
        }
        goto scuegcceeiyqkgkc;
        mmokqmsgaaeqyiiq:
        soqkgseeeyomskas:
        goto ekisckcuoqqosgsg;
        scuegcceeiyqkgkc:
        $aiowsaccomcoikus->mkmssscwmeekwgqo();
        goto cwmwyimouyyyqmas;
        oeamqmugcouisoki:
        kqiccsyaycyiccmo:
        goto eyeymyeqyywycuui;
        smumgyimgieecmwk:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto suakgqaoaoskimwc;
        kqwmiakcsoaskmeu:
        return $this;
        goto kkogamqweysaskie;
        yokyyqmgaqgcokaq:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto qyasuykwoioqoykq;
        }
        goto smumgyimgieecmwk;
        cwmwyimouyyyqmas:
        goto soqkgseeeyomskas;
        goto oeamqmugcouisoki;
        eyeymyeqyywycuui:
        $aiowsaccomcoikus->yoimakcqmoqokkcu();
        goto mmokqmsgaaeqyiiq;
        ekisckcuoqqosgsg:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto kqwmiakcsoaskmeu;
        kkogamqweysaskie:
    }
    
    public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self
    {
        goto ieaqwmmgymscuiyq;
        scgywcukauccyoao:
        iuyuyeasowcwgogq:
        goto ycsmswoiwkaaqwci;
        ieaqwmmgymscuiyq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            gcqqgkkyicouoggc:
        }
        goto scgywcukauccyoao;
        ycsmswoiwkaaqwci:
        return $this;
        goto uwismgmawakkymaw;
        uwismgmawakkymaw:
    }
    
    public function awaeegwoiqoisoam(?array $ikgwqyuyckaewsow = [], $qsycuegoicqcqkmo = "\141\x6e\144", $wumguikkgaigkoee = []) : self
    {
        goto wowcqqowyioioage;
        wowcqqowyioioage:
        if ($wumguikkgaigkoee) {
            goto qowoukmeooyayoog;
        }
        goto oiwkgwayeeukeccs;
        iwusoigygwmgscoc:
        return $this;
        goto socaggiymwmewosi;
        oiwkgwayeeukeccs:
        $wumguikkgaigkoee = ["\x73\165\x62\x6d\x69\164" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\x53\x6f\162\162\x79\54\40\x79\x6f\165\x20\143\141\156\47\164\x20\163\165\x62\155\x69\x74\x20\146\x6f\162\155\56\x20\123\157\155\145\x20\x66\151\x65\154\144\x27\163\40\166\x61\154\x75\145\x20\151\163\40\x64\x75\160\x6c\x69\x63\x61\164\x65\x64\40\x69\156\40\147\162\x6f\165\160\x2c\x20\x70\154\145\x61\x73\x65\40\146\x69\x78\x20\145\162\162\x6f\x72\x73\x20\x61\156\x64\x20\x74\x72\x79\40\141\147\141\x69\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\141\x64\144\x5f\156\x65\x77" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\x53\157\162\x72\171\54\x20\x79\157\165\40\x63\141\x6e\x27\164\40\x61\x64\144\40\156\145\167\x20\45\163\x2e\40\123\x6f\155\x65\40\x66\x69\x65\154\144\47\x73\x20\166\141\154\165\x65\40\151\163\x20\x64\x75\160\154\x69\143\141\x74\145\144\x2c\x20\160\154\145\141\163\145\x20\146\x69\170\40\145\162\162\x6f\162\163\x20\x61\x6e\x64\x20\164\x72\x79\x20\141\147\141\151\156\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))];
        goto acqkcqcysamiyqwk;
        iugacsaoqaooakai:
        $this->nonDuplicate[] = ["\146\151\x65\x6c\144\x73" => $ikgwqyuyckaewsow, "\x62\x6f\x6f\154\145\x61\156" => $qsycuegoicqcqkmo, "\x6d\145\163\x73\x61\x67\x65\163" => $wumguikkgaigkoee];
        goto iwusoigygwmgscoc;
        acqkcqcysamiyqwk:
        qowoukmeooyayoog:
        goto iugacsaoqaooakai;
        socaggiymwmewosi:
    }
    
    public function iaogqeuosowauooc() : array
    {
        return $this->nonDuplicate;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto wqwceyiekwmyksqm;
        wusemuakoqsycogc:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto oosugckaswaggaeu;
        cgegwqcqwqemsomy:
        wugmeqgqiukemiyu:
        goto wmcumqiwkckkoggy;
        wqwceyiekwmyksqm:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            $aiowsaccomcoikus["\x76\141\154\x75\145"] = $this->qooeaookuemoqecm();
            ocaqsuieiymyomym:
        }
        goto cgegwqcqwqemsomy;
        yoskimkuksecqysw:
        isekauuwqcsuicuw:
        goto wusemuakoqsycogc;
        oosugckaswaggaeu:
        $this->options["\141\x74\x74\162\151\142\165\x74\x65\163"] = $this->ccekeuwwqqoiwuwy();
        goto ukyguyoqagmmemek;
        wmcumqiwkckkoggy:
        if (!($wmeooiyuiyagywsc = $this->iaogqeuosowauooc())) {
            goto isekauuwqcsuicuw;
        }
        goto isuocqoeqoaeuksg;
        isuocqoeqoaeuksg:
        $this->usoqcyyugsuyiewc("\160\x72\x2d\x6e\157\156\x2d\x64\165\160\x6c\151\143\141\x74\145\x2d\x67\x72\x6f\x75\160")->igmaewykumgwoaoy("\x64\x61\x74\x61\55\x6e\x6f\156\55\144\165\160\154\151\x63\x61\164\145", json_encode($wmeooiyuiyagywsc));
        goto yoskimkuksecqysw;
        ukyguyoqagmmemek:
    }
}
