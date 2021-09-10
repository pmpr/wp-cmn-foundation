<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        $this->acauweqyyugwisqc(["\x6c\151\x6d\x69\164" => 0, "\x73\x6f\x72\164\141\x62\x6c\x65" => false, "\162\x65\155\157\x76\x65\137\142\165\164\164\157\156" => null])->yecmagkckgkwukuq($ymqmyyeuycgmigyo)->qigsyyqgewgskemg("\146\157\162\x6d\x2d\143\x6f\x6e\x74\x61\151\x6e\x65\162\x20\143\x6f\x6c\55\61\x32")->ewweaossowcqywaw($ikgwqyuyckaewsow);
    }
    
    public function yecmagkckgkwukuq(?string $pkyyagewkiyckmwy) : self
    {
        goto iqocsskqymaumese;
        mmgmkqacmswuuqke:
        kcauiquoaeiqeukk:
        goto cyiegccusakaysae;
        agicuamggwgewyag:
        $this->acauweqyyugwisqc(["\141\x64\144\137\142\x75\164\x74\x6f\x6e" => sprintf(__("\x41\144\144\40\116\145\x77\x20\x25\163", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy), "\x67\x72\x6f\x75\160\137\x74\151\164\154\145" => sprintf("\45\x73\x20\x7b\x23\x7d", $pkyyagewkiyckmwy)]);
        goto mmgmkqacmswuuqke;
        iqocsskqymaumese:
        if (!$pkyyagewkiyckmwy) {
            goto kcauiquoaeiqeukk;
        }
        goto agicuamggwgewyag;
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
        $this->qigsyyqgewgskemg("\x63\x6f\x6c\x2d\154\x67\55\66");
        return $this;
    }
    
    public function usosgsaaimqcysyk() : self
    {
        $this->qigsyyqgewgskemg("\x63\x6f\x6c\x2d\x6c\x67\x2d\x36\40\x63\157\154\55\x78\x6c\55\x34");
        return $this;
    }
    
    public function wygoskowywcuyaiq() : self
    {
        $this->qigsyyqgewgskemg("\143\x6f\x6c\55\155\144\x2d\x36\x20\x63\x6f\x6c\55\154\147\x2d\64\x20\143\x6f\x6c\55\170\x6c\x2d\x33");
        return $this;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto yokyyqmgaqgcokaq;
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
        oeamqmugcouisoki:
        kqiccsyaycyiccmo:
        goto eyeymyeqyywycuui;
        scuegcceeiyqkgkc:
        $aiowsaccomcoikus->mkmssscwmeekwgqo();
        goto cwmwyimouyyyqmas;
        suakgqaoaoskimwc:
        qyasuykwoioqoykq:
        goto ggecuewimcisqyei;
        ggecuewimcisqyei:
        if (!in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\143\x68\145\x63\x6b\x62\x6f\170", "\162\141\144\x69\x6f"])) {
            goto kqiccsyaycyiccmo;
        }
        goto scuegcceeiyqkgkc;
        mmokqmsgaaeqyiiq:
        soqkgseeeyomskas:
        goto ekisckcuoqqosgsg;
        cwmwyimouyyyqmas:
        goto soqkgseeeyomskas;
        goto oeamqmugcouisoki;
        smumgyimgieecmwk:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto suakgqaoaoskimwc;
        kqwmiakcsoaskmeu:
        return $this;
        goto kkogamqweysaskie;
        kkogamqweysaskie:
    }
    
    public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self
    {
        goto ieaqwmmgymscuiyq;
        ieaqwmmgymscuiyq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            gcqqgkkyicouoggc:
        }
        goto scgywcukauccyoao;
        ycsmswoiwkaaqwci:
        return $this;
        goto uwismgmawakkymaw;
        scgywcukauccyoao:
        iuyuyeasowcwgogq:
        goto ycsmswoiwkaaqwci;
        uwismgmawakkymaw:
    }
    
    public function awaeegwoiqoisoam(?array $ikgwqyuyckaewsow = [], $qsycuegoicqcqkmo = "\141\156\x64", $wumguikkgaigkoee = []) : self
    {
        goto wowcqqowyioioage;
        acqkcqcysamiyqwk:
        qowoukmeooyayoog:
        goto iugacsaoqaooakai;
        wowcqqowyioioage:
        if ($wumguikkgaigkoee) {
            goto qowoukmeooyayoog;
        }
        goto oiwkgwayeeukeccs;
        oiwkgwayeeukeccs:
        $wumguikkgaigkoee = ["\163\165\142\x6d\x69\x74" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\123\157\162\162\171\x2c\x20\x79\157\x75\x20\x63\141\x6e\47\164\x20\x73\165\142\155\x69\x74\40\146\x6f\x72\155\56\x20\123\157\155\145\x20\x66\151\145\154\x64\x27\x73\x20\x76\141\x6c\165\145\x20\151\x73\40\x64\165\x70\x6c\x69\143\141\x74\145\x64\40\x69\156\x20\x67\x72\157\x75\160\x2c\x20\x70\x6c\145\141\x73\x65\x20\x66\x69\170\x20\145\162\162\x6f\x72\x73\40\141\x6e\x64\40\x74\x72\171\x20\141\147\141\x69\x6e\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\x61\x64\x64\137\156\x65\x77" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\x53\157\162\x72\x79\x2c\x20\x79\157\165\40\143\141\x6e\47\x74\40\141\144\144\40\156\145\x77\40\45\163\x2e\40\123\x6f\x6d\x65\40\x66\151\x65\x6c\144\x27\x73\40\166\x61\x6c\x75\x65\x20\151\x73\x20\144\165\160\154\x69\143\141\x74\x65\144\x2c\40\160\x6c\145\x61\x73\x65\40\146\151\x78\40\x65\162\x72\x6f\162\163\40\141\156\x64\40\x74\x72\171\x20\x61\x67\x61\151\x6e\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))];
        goto acqkcqcysamiyqwk;
        iwusoigygwmgscoc:
        return $this;
        goto socaggiymwmewosi;
        iugacsaoqaooakai:
        $this->nonDuplicate[] = ["\146\x69\x65\x6c\144\163" => $ikgwqyuyckaewsow, "\142\157\x6f\154\145\x61\156" => $qsycuegoicqcqkmo, "\x6d\x65\163\x73\x61\x67\145\x73" => $wumguikkgaigkoee];
        goto iwusoigygwmgscoc;
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
        wqwceyiekwmyksqm:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            $aiowsaccomcoikus["\x76\x61\154\x75\145"] = $this->qooeaookuemoqecm();
            ocaqsuieiymyomym:
        }
        goto cgegwqcqwqemsomy;
        oosugckaswaggaeu:
        $this->options["\x61\x74\164\x72\151\x62\x75\164\x65\x73"] = $this->ccekeuwwqqoiwuwy();
        goto ukyguyoqagmmemek;
        yoskimkuksecqysw:
        isekauuwqcsuicuw:
        goto wusemuakoqsycogc;
        cgegwqcqwqemsomy:
        wugmeqgqiukemiyu:
        goto wmcumqiwkckkoggy;
        wmcumqiwkckkoggy:
        if (!($wmeooiyuiyagywsc = $this->iaogqeuosowauooc())) {
            goto isekauuwqcsuicuw;
        }
        goto isuocqoeqoaeuksg;
        isuocqoeqoaeuksg:
        $this->usoqcyyugsuyiewc("\x70\162\55\156\x6f\x6e\x2d\144\x75\x70\x6c\x69\x63\x61\x74\x65\55\147\162\157\x75\160")->igmaewykumgwoaoy("\x64\141\x74\141\x2d\x6e\157\x6e\x2d\144\165\160\x6c\151\x63\x61\x74\145", json_encode($wmeooiyuiyagywsc));
        goto yoskimkuksecqysw;
        ukyguyoqagmmemek:
    }
}
