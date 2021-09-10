<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        parent::__construct("\x67\x72\x6f\x75\x70", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->acauweqyyugwisqc(["\154\151\x6d\x69\164" => 0, "\x73\x6f\x72\164\x61\142\154\145" => false, "\162\x65\155\157\166\145\137\x62\165\x74\x74\157\156" => null])->yecmagkckgkwukuq($ymqmyyeuycgmigyo)->qigsyyqgewgskemg("\x66\x6f\162\x6d\x2d\143\x6f\156\x74\x61\x69\x6e\145\162\40\x63\157\x6c\55\61\x32")->ewweaossowcqywaw($ikgwqyuyckaewsow);
    }
    
    public function yecmagkckgkwukuq(?string $pkyyagewkiyckmwy) : self
    {
        goto agicuamggwgewyag;
        qicoumyicsicyiiy:
        return $this;
        goto qyasuykwoioqoykq;
        agicuamggwgewyag:
        if (!$pkyyagewkiyckmwy) {
            goto iqocsskqymaumese;
        }
        goto mmgmkqacmswuuqke;
        cyiegccusakaysae:
        iqocsskqymaumese:
        goto qicoumyicsicyiiy;
        mmgmkqacmswuuqke:
        $this->acauweqyyugwisqc(["\141\x64\x64\137\142\165\164\164\157\x6e" => sprintf(__("\x41\144\144\40\116\145\x77\40\45\x73", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy), "\147\162\x6f\x75\160\x5f\164\151\164\x6c\145" => sprintf("\x25\x73\x20\173\x23\175", $pkyyagewkiyckmwy)]);
        goto cyiegccusakaysae;
        qyasuykwoioqoykq:
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
        $this->qigsyyqgewgskemg("\143\157\154\55\154\x67\x2d\x36");
        return $this;
    }
    
    public function usosgsaaimqcysyk() : self
    {
        $this->qigsyyqgewgskemg("\x63\157\154\x2d\x6c\147\55\66\40\x63\x6f\154\x2d\170\154\x2d\x34");
        return $this;
    }
    
    public function wygoskowywcuyaiq() : self
    {
        $this->qigsyyqgewgskemg("\x63\x6f\x6c\55\155\x64\55\x36\x20\x63\157\154\55\154\147\55\64\40\143\157\154\55\170\x6c\x2d\63");
        return $this;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto smumgyimgieecmwk;
        ggecuewimcisqyei:
        kqiccsyaycyiccmo:
        goto scuegcceeiyqkgkc;
        eyeymyeqyywycuui:
        soqkgseeeyomskas:
        goto mmokqmsgaaeqyiiq;
        scuegcceeiyqkgkc:
        if (!in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\150\x65\143\x6b\142\157\x78", "\162\141\144\x69\x6f"])) {
            goto soqkgseeeyomskas;
        }
        goto cwmwyimouyyyqmas;
        cwmwyimouyyyqmas:
        $aiowsaccomcoikus->mkmssscwmeekwgqo();
        goto oeamqmugcouisoki;
        kkogamqweysaskie:
        return $this;
        goto iuyuyeasowcwgogq;
        mmokqmsgaaeqyiiq:
        $aiowsaccomcoikus->yoimakcqmoqokkcu();
        goto ekisckcuoqqosgsg;
        suakgqaoaoskimwc:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto ggecuewimcisqyei;
        kqwmiakcsoaskmeu:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto kkogamqweysaskie;
        oeamqmugcouisoki:
        goto yokyyqmgaqgcokaq;
        goto eyeymyeqyywycuui;
        smumgyimgieecmwk:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto kqiccsyaycyiccmo;
        }
        goto suakgqaoaoskimwc;
        ekisckcuoqqosgsg:
        yokyyqmgaqgcokaq:
        goto kqwmiakcsoaskmeu;
        iuyuyeasowcwgogq:
    }
    
    public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self
    {
        goto scgywcukauccyoao;
        uwismgmawakkymaw:
        return $this;
        goto qowoukmeooyayoog;
        ycsmswoiwkaaqwci:
        gcqqgkkyicouoggc:
        goto uwismgmawakkymaw;
        scgywcukauccyoao:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            ieaqwmmgymscuiyq:
        }
        goto ycsmswoiwkaaqwci;
        qowoukmeooyayoog:
    }
    
    public function awaeegwoiqoisoam(?array $ikgwqyuyckaewsow = [], $qsycuegoicqcqkmo = "\x61\156\x64", $wumguikkgaigkoee = []) : self
    {
        goto oiwkgwayeeukeccs;
        iwusoigygwmgscoc:
        $this->nonDuplicate[] = ["\146\151\145\x6c\144\163" => $ikgwqyuyckaewsow, "\142\x6f\x6f\x6c\x65\141\156" => $qsycuegoicqcqkmo, "\x6d\145\x73\163\141\x67\x65\163" => $wumguikkgaigkoee];
        goto socaggiymwmewosi;
        iugacsaoqaooakai:
        wowcqqowyioioage:
        goto iwusoigygwmgscoc;
        acqkcqcysamiyqwk:
        $wumguikkgaigkoee = ["\163\165\x62\x6d\x69\x74" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\x53\157\x72\x72\x79\54\40\171\x6f\165\x20\x63\x61\x6e\47\164\40\x73\x75\142\155\x69\164\x20\146\x6f\x72\155\x2e\40\x53\x6f\x6d\x65\40\x66\x69\x65\x6c\144\47\163\x20\166\141\x6c\165\145\x20\151\163\40\144\165\160\154\x69\x63\141\x74\x65\x64\40\x69\x6e\x20\147\162\x6f\x75\160\54\x20\160\154\x65\x61\x73\145\x20\x66\151\170\x20\x65\162\162\157\x72\163\x20\x61\x6e\144\x20\164\162\171\x20\x61\147\141\151\x6e\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\141\x64\x64\137\156\145\167" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\x53\157\162\162\x79\x2c\40\x79\x6f\x75\40\x63\x61\156\x27\x74\40\141\144\144\x20\156\x65\x77\40\45\163\56\40\x53\x6f\x6d\x65\40\x66\151\145\x6c\x64\47\163\40\x76\141\154\x75\145\40\x69\163\40\144\x75\160\x6c\x69\x63\141\164\145\x64\x2c\x20\x70\154\145\x61\x73\145\x20\146\x69\x78\x20\x65\162\x72\157\162\163\x20\x61\156\x64\x20\x74\162\x79\40\x61\x67\141\x69\156\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))];
        goto iugacsaoqaooakai;
        socaggiymwmewosi:
        return $this;
        goto wugmeqgqiukemiyu;
        oiwkgwayeeukeccs:
        if ($wumguikkgaigkoee) {
            goto wowcqqowyioioage;
        }
        goto acqkcqcysamiyqwk;
        wugmeqgqiukemiyu:
    }
    
    public function iaogqeuosowauooc() : array
    {
        return $this->nonDuplicate;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto cgegwqcqwqemsomy;
        ukyguyoqagmmemek:
        $this->options["\141\x74\x74\162\151\x62\165\x74\145\163"] = $this->ccekeuwwqqoiwuwy();
        goto oegsgowaacesqmia;
        wmcumqiwkckkoggy:
        ocaqsuieiymyomym:
        goto isuocqoeqoaeuksg;
        isuocqoeqoaeuksg:
        if (!($wmeooiyuiyagywsc = $this->iaogqeuosowauooc())) {
            goto wqwceyiekwmyksqm;
        }
        goto yoskimkuksecqysw;
        yoskimkuksecqysw:
        $this->usoqcyyugsuyiewc("\x70\162\x2d\x6e\157\156\x2d\x64\165\160\x6c\151\143\141\x74\145\55\147\x72\x6f\x75\x70")->igmaewykumgwoaoy("\x64\141\x74\141\55\156\157\156\55\x64\x75\x70\154\151\x63\141\164\x65", json_encode($wmeooiyuiyagywsc));
        goto wusemuakoqsycogc;
        cgegwqcqwqemsomy:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            $aiowsaccomcoikus["\x76\141\154\165\x65"] = $this->qooeaookuemoqecm();
            isekauuwqcsuicuw:
        }
        goto wmcumqiwkckkoggy;
        wusemuakoqsycogc:
        wqwceyiekwmyksqm:
        goto oosugckaswaggaeu;
        oosugckaswaggaeu:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto ukyguyoqagmmemek;
        oegsgowaacesqmia:
    }
}
