<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        parent::__construct("\x67\162\157\x75\x70", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->acauweqyyugwisqc(["\x6c\151\x6d\x69\x74" => 0, "\163\157\162\164\x61\x62\154\x65" => false, "\162\145\x6d\157\x76\145\137\142\165\x74\x74\157\156" => null])->yecmagkckgkwukuq($ymqmyyeuycgmigyo)->qigsyyqgewgskemg("\x66\157\162\x6d\x2d\143\x6f\x6e\164\141\151\x6e\145\x72\x20\x63\157\154\x2d\61\62")->ewweaossowcqywaw($ikgwqyuyckaewsow);
    }
    
    public function yecmagkckgkwukuq(?string $pkyyagewkiyckmwy) : self
    {
        goto umguqywougaucwew;
        mcekqamqcmywscmu:
        $this->acauweqyyugwisqc(["\141\x64\x64\137\142\x75\x74\164\157\x6e" => sprintf(__("\101\144\x64\40\x4e\145\167\40\x25\163", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy), "\x67\x72\x6f\165\160\137\x74\x69\x74\154\145" => sprintf("\x25\163\40\173\x23\175", $pkyyagewkiyckmwy)]);
        goto egcywciwasakksyg;
        egcywciwasakksyg:
        cykoggeawyosiwuw:
        goto kcauiquoaeiqeukk;
        kcauiquoaeiqeukk:
        return $this;
        goto iqocsskqymaumese;
        umguqywougaucwew:
        if (!$pkyyagewkiyckmwy) {
            goto cykoggeawyosiwuw;
        }
        goto mcekqamqcmywscmu;
        iqocsskqymaumese:
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
        $this->qigsyyqgewgskemg("\x63\x6f\x6c\x2d\x6c\147\x2d\x36");
        return $this;
    }
    
    public function usosgsaaimqcysyk() : self
    {
        $this->qigsyyqgewgskemg("\x63\157\154\55\154\147\55\x36\40\x63\x6f\154\55\x78\154\x2d\x34");
        return $this;
    }
    
    public function wygoskowywcuyaiq() : self
    {
        $this->qigsyyqgewgskemg("\143\157\154\55\155\x64\55\x36\x20\143\x6f\x6c\x2d\154\147\x2d\64\40\143\157\154\55\170\x6c\55\63");
        return $this;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto qicoumyicsicyiiy;
        ggecuewimcisqyei:
        $aiowsaccomcoikus->yoimakcqmoqokkcu();
        goto scuegcceeiyqkgkc;
        oeamqmugcouisoki:
        return $this;
        goto eyeymyeqyywycuui;
        smumgyimgieecmwk:
        goto cyiegccusakaysae;
        goto suakgqaoaoskimwc;
        qyasuykwoioqoykq:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto kqiccsyaycyiccmo;
        qicoumyicsicyiiy:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto agicuamggwgewyag;
        }
        goto qyasuykwoioqoykq;
        soqkgseeeyomskas:
        if (!in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\x68\x65\x63\153\x62\x6f\x78", "\x72\x61\x64\x69\157"])) {
            goto mmgmkqacmswuuqke;
        }
        goto yokyyqmgaqgcokaq;
        kqiccsyaycyiccmo:
        agicuamggwgewyag:
        goto soqkgseeeyomskas;
        cwmwyimouyyyqmas:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto oeamqmugcouisoki;
        suakgqaoaoskimwc:
        mmgmkqacmswuuqke:
        goto ggecuewimcisqyei;
        scuegcceeiyqkgkc:
        cyiegccusakaysae:
        goto cwmwyimouyyyqmas;
        yokyyqmgaqgcokaq:
        $aiowsaccomcoikus->mkmssscwmeekwgqo();
        goto smumgyimgieecmwk;
        eyeymyeqyywycuui:
    }
    
    public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self
    {
        goto kqwmiakcsoaskmeu;
        iuyuyeasowcwgogq:
        return $this;
        goto gcqqgkkyicouoggc;
        kkogamqweysaskie:
        mmokqmsgaaeqyiiq:
        goto iuyuyeasowcwgogq;
        kqwmiakcsoaskmeu:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            ekisckcuoqqosgsg:
        }
        goto kkogamqweysaskie;
        gcqqgkkyicouoggc:
    }
    
    public function awaeegwoiqoisoam(?array $ikgwqyuyckaewsow = [], $qsycuegoicqcqkmo = "\141\156\x64", $wumguikkgaigkoee = []) : self
    {
        goto scgywcukauccyoao;
        uwismgmawakkymaw:
        ieaqwmmgymscuiyq:
        goto qowoukmeooyayoog;
        qowoukmeooyayoog:
        $this->nonDuplicate[] = ["\x66\x69\145\154\x64\163" => $ikgwqyuyckaewsow, "\142\157\x6f\154\x65\x61\156" => $qsycuegoicqcqkmo, "\155\145\163\163\x61\147\145\x73" => $wumguikkgaigkoee];
        goto wowcqqowyioioage;
        scgywcukauccyoao:
        if ($wumguikkgaigkoee) {
            goto ieaqwmmgymscuiyq;
        }
        goto ycsmswoiwkaaqwci;
        ycsmswoiwkaaqwci:
        $wumguikkgaigkoee = ["\x73\x75\x62\x6d\x69\x74" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\x53\x6f\x72\x72\171\54\40\x79\157\x75\x20\x63\141\x6e\47\164\40\163\x75\x62\155\x69\x74\40\146\157\x72\x6d\56\x20\123\157\155\x65\40\146\x69\x65\154\144\x27\x73\x20\x76\x61\154\165\x65\40\x69\163\x20\x64\165\x70\x6c\151\143\x61\x74\x65\144\40\151\x6e\40\147\162\x6f\x75\160\x2c\40\160\154\x65\141\x73\145\x20\x66\151\170\x20\x65\162\162\x6f\162\x73\x20\141\156\x64\40\x74\x72\x79\40\x61\x67\141\x69\156\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\x61\144\144\x5f\156\x65\x77" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\123\x6f\162\x72\171\x2c\40\x79\157\165\40\x63\141\156\47\x74\40\141\144\144\40\x6e\x65\x77\40\45\163\56\40\x53\157\155\x65\x20\x66\x69\145\x6c\144\x27\x73\x20\x76\141\x6c\x75\145\x20\x69\x73\40\144\165\160\154\x69\143\141\164\145\x64\x2c\40\160\x6c\x65\141\x73\x65\x20\x66\151\170\x20\x65\162\x72\157\162\x73\40\141\x6e\144\x20\164\x72\x79\x20\141\147\141\x69\156\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))];
        goto uwismgmawakkymaw;
        wowcqqowyioioage:
        return $this;
        goto oiwkgwayeeukeccs;
        oiwkgwayeeukeccs:
    }
    
    public function iaogqeuosowauooc() : array
    {
        return $this->nonDuplicate;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto socaggiymwmewosi;
        wugmeqgqiukemiyu:
        acqkcqcysamiyqwk:
        goto ocaqsuieiymyomym;
        cgegwqcqwqemsomy:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto wmcumqiwkckkoggy;
        socaggiymwmewosi:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            $aiowsaccomcoikus["\x76\x61\154\x75\145"] = $this->qooeaookuemoqecm();
            iugacsaoqaooakai:
        }
        goto wugmeqgqiukemiyu;
        isekauuwqcsuicuw:
        $this->usoqcyyugsuyiewc("\x70\162\55\156\157\156\55\144\x75\x70\x6c\151\143\x61\164\x65\55\x67\x72\x6f\x75\x70")->igmaewykumgwoaoy("\x64\141\164\x61\55\156\157\156\55\x64\165\160\154\x69\x63\x61\164\x65", json_encode($wmeooiyuiyagywsc));
        goto wqwceyiekwmyksqm;
        wqwceyiekwmyksqm:
        iwusoigygwmgscoc:
        goto cgegwqcqwqemsomy;
        wmcumqiwkckkoggy:
        $this->options["\141\164\164\x72\x69\142\x75\x74\x65\163"] = $this->ccekeuwwqqoiwuwy();
        goto isuocqoeqoaeuksg;
        ocaqsuieiymyomym:
        if (!($wmeooiyuiyagywsc = $this->iaogqeuosowauooc())) {
            goto iwusoigygwmgscoc;
        }
        goto isekauuwqcsuicuw;
        isuocqoeqoaeuksg:
    }
}
