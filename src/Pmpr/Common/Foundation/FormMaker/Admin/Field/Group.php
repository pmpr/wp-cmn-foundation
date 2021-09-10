<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        parent::__construct("\x67\162\x6f\165\x70", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->acauweqyyugwisqc(["\154\x69\155\x69\x74" => 0, "\163\x6f\x72\x74\141\x62\x6c\x65" => false, "\x72\x65\155\x6f\166\x65\x5f\x62\165\164\164\x6f\x6e" => null])->yecmagkckgkwukuq($ymqmyyeuycgmigyo)->qigsyyqgewgskemg("\x66\x6f\x72\x6d\x2d\143\x6f\156\x74\x61\151\x6e\x65\x72\x20\x63\157\x6c\x2d\61\x32")->ewweaossowcqywaw($ikgwqyuyckaewsow);
    }
    
    public function yecmagkckgkwukuq(?string $pkyyagewkiyckmwy) : self
    {
        goto iqocsskqymaumese;
        agicuamggwgewyag:
        $this->acauweqyyugwisqc(["\x61\x64\144\x5f\x62\x75\164\164\157\x6e" => sprintf(__("\x41\144\x64\40\116\145\167\40\45\x73", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy), "\x67\x72\x6f\165\x70\x5f\x74\x69\x74\154\145" => sprintf("\45\163\x20\173\43\x7d", $pkyyagewkiyckmwy)]);
        goto mmgmkqacmswuuqke;
        cyiegccusakaysae:
        return $this;
        goto qicoumyicsicyiiy;
        iqocsskqymaumese:
        if (!$pkyyagewkiyckmwy) {
            goto kcauiquoaeiqeukk;
        }
        goto agicuamggwgewyag;
        mmgmkqacmswuuqke:
        kcauiquoaeiqeukk:
        goto cyiegccusakaysae;
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
        $this->qigsyyqgewgskemg("\143\x6f\x6c\x2d\x6c\x67\x2d\66");
        return $this;
    }
    
    public function usosgsaaimqcysyk() : self
    {
        $this->qigsyyqgewgskemg("\x63\x6f\x6c\x2d\154\x67\55\66\x20\143\157\x6c\55\x78\154\55\64");
        return $this;
    }
    
    public function wygoskowywcuyaiq() : self
    {
        $this->qigsyyqgewgskemg("\x63\157\154\55\155\144\55\66\x20\x63\157\154\55\x6c\x67\55\64\40\x63\x6f\154\x2d\x78\154\x2d\x33");
        return $this;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto yokyyqmgaqgcokaq;
        smumgyimgieecmwk:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto suakgqaoaoskimwc;
        scuegcceeiyqkgkc:
        $aiowsaccomcoikus->mkmssscwmeekwgqo();
        goto cwmwyimouyyyqmas;
        suakgqaoaoskimwc:
        qyasuykwoioqoykq:
        goto ggecuewimcisqyei;
        eyeymyeqyywycuui:
        $aiowsaccomcoikus->yoimakcqmoqokkcu();
        goto mmokqmsgaaeqyiiq;
        yokyyqmgaqgcokaq:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto qyasuykwoioqoykq;
        }
        goto smumgyimgieecmwk;
        ekisckcuoqqosgsg:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto kqwmiakcsoaskmeu;
        ggecuewimcisqyei:
        if (!in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\x68\x65\x63\x6b\x62\x6f\170", "\x72\x61\144\151\157"])) {
            goto kqiccsyaycyiccmo;
        }
        goto scuegcceeiyqkgkc;
        cwmwyimouyyyqmas:
        goto soqkgseeeyomskas;
        goto oeamqmugcouisoki;
        oeamqmugcouisoki:
        kqiccsyaycyiccmo:
        goto eyeymyeqyywycuui;
        kqwmiakcsoaskmeu:
        return $this;
        goto kkogamqweysaskie;
        mmokqmsgaaeqyiiq:
        soqkgseeeyomskas:
        goto ekisckcuoqqosgsg;
        kkogamqweysaskie:
    }
    
    public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self
    {
        goto ieaqwmmgymscuiyq;
        ycsmswoiwkaaqwci:
        return $this;
        goto uwismgmawakkymaw;
        ieaqwmmgymscuiyq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            gcqqgkkyicouoggc:
        }
        goto scgywcukauccyoao;
        scgywcukauccyoao:
        iuyuyeasowcwgogq:
        goto ycsmswoiwkaaqwci;
        uwismgmawakkymaw:
    }
    
    public function awaeegwoiqoisoam(?array $ikgwqyuyckaewsow = [], $qsycuegoicqcqkmo = "\x61\156\x64", $wumguikkgaigkoee = []) : self
    {
        goto wowcqqowyioioage;
        iugacsaoqaooakai:
        $this->nonDuplicate[] = ["\x66\x69\x65\154\x64\x73" => $ikgwqyuyckaewsow, "\142\x6f\157\154\145\141\156" => $qsycuegoicqcqkmo, "\155\x65\x73\163\x61\x67\x65\163" => $wumguikkgaigkoee];
        goto iwusoigygwmgscoc;
        acqkcqcysamiyqwk:
        qowoukmeooyayoog:
        goto iugacsaoqaooakai;
        wowcqqowyioioage:
        if ($wumguikkgaigkoee) {
            goto qowoukmeooyayoog;
        }
        goto oiwkgwayeeukeccs;
        oiwkgwayeeukeccs:
        $wumguikkgaigkoee = ["\163\165\142\155\151\164" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\x53\x6f\162\x72\x79\54\x20\x79\157\165\40\143\x61\x6e\x27\x74\x20\163\165\x62\x6d\x69\x74\x20\x66\x6f\x72\x6d\x2e\40\x53\x6f\x6d\x65\x20\146\151\x65\x6c\144\x27\163\x20\x76\141\154\x75\145\40\x69\163\x20\144\165\x70\154\151\143\x61\164\145\x64\x20\151\x6e\x20\147\x72\x6f\x75\160\54\40\x70\154\x65\141\x73\145\40\146\x69\x78\x20\145\x72\x72\x6f\162\163\x20\141\156\144\40\x74\x72\x79\x20\141\147\141\x69\x6e\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\141\144\144\137\156\145\167" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\123\157\x72\162\171\54\x20\x79\157\x75\x20\x63\141\156\x27\x74\40\x61\x64\144\40\156\x65\167\x20\45\x73\56\x20\123\x6f\x6d\145\40\x66\x69\145\154\144\x27\x73\x20\x76\141\154\x75\x65\x20\151\163\x20\144\165\x70\x6c\x69\143\141\164\x65\x64\x2c\x20\160\154\x65\x61\163\x65\40\146\x69\x78\40\x65\x72\x72\x6f\x72\x73\x20\141\156\x64\40\164\162\x79\x20\x61\x67\141\x69\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))];
        goto acqkcqcysamiyqwk;
        iwusoigygwmgscoc:
        return $this;
        goto socaggiymwmewosi;
        socaggiymwmewosi:
    }
    
    public function iaogqeuosowauooc() : array
    {
        return $this->nonDuplicate;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto wqwceyiekwmyksqm;
        isuocqoeqoaeuksg:
        $this->usoqcyyugsuyiewc("\x70\x72\55\x6e\157\x6e\55\x64\165\x70\154\151\x63\141\164\x65\x2d\147\x72\x6f\x75\160")->igmaewykumgwoaoy("\x64\141\164\x61\x2d\156\157\156\x2d\144\165\160\154\x69\x63\141\164\x65", json_encode($wmeooiyuiyagywsc));
        goto yoskimkuksecqysw;
        cgegwqcqwqemsomy:
        wugmeqgqiukemiyu:
        goto wmcumqiwkckkoggy;
        wqwceyiekwmyksqm:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            $aiowsaccomcoikus["\166\x61\154\x75\145"] = $this->qooeaookuemoqecm();
            ocaqsuieiymyomym:
        }
        goto cgegwqcqwqemsomy;
        yoskimkuksecqysw:
        isekauuwqcsuicuw:
        goto wusemuakoqsycogc;
        wmcumqiwkckkoggy:
        if (!($wmeooiyuiyagywsc = $this->iaogqeuosowauooc())) {
            goto isekauuwqcsuicuw;
        }
        goto isuocqoeqoaeuksg;
        oosugckaswaggaeu:
        $this->options["\141\x74\x74\x72\151\142\165\x74\145\x73"] = $this->ccekeuwwqqoiwuwy();
        goto ukyguyoqagmmemek;
        wusemuakoqsycogc:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto oosugckaswaggaeu;
        ukyguyoqagmmemek:
    }
}
