<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front;

use Pmpr\Common\Foundation\FormMaker\Front\Field\Field;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Form extends Element
{
    
    protected ?array $fields = [];
    
    protected ?Div $fieldsContainer = null;
    
    public function __construct(string $aokagokqyuysuksm = null)
    {
        parent::__construct("\146\x6f\162\155", $aokagokqyuysuksm);
        $this->cukciuymuoaqgwic("\120\117\x53\x54");
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto iakeaakmeqkaioeg;
        ioouuggmywygqauo:
        ukqyaweoikcegyco:
        goto oiyywaikucqwquie;
        iakeaakmeqkaioeg:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($this->ugmceccgwaaaigiy());
        goto eawkaqqqaeooyyws;
        ggiqkimkqqwskeoa:
        if (!$skikiykssoocmmik) {
            goto mggewcywmuekqcaq;
        }
        goto awmcioiwswckueis;
        auqkowcaacmmoqqk:
        mggewcywmuekqcaq:
        goto skyosyooeugyimmm;
        oiyywaikucqwquie:
        $skikiykssoocmmik = $this->kmiowswwgwcocguk();
        goto ggiqkimkqqwskeoa;
        awmcioiwswckueis:
        $ewgwqamkygiqaawc = str_replace(self::CHILD_CONTENT, $ewgwqamkygiqaawc, $skikiykssoocmmik->render());
        goto auqkowcaacmmoqqk;
        skyosyooeugyimmm:
        return $ewgwqamkygiqaawc;
        goto gsgkgikagiuqeoie;
        wykwsyuewigykqeg:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto meqcqssumqokgkqc;
            mwskikiiuqwkeiqq:
            essaksagsgmwyccs:
            goto aywemsgsqqwuwasc;
            aywemsgsqqwuwasc:
            cgqcuiaiciwumqyy:
            goto mqueqquuggcakwcy;
            swiqeuyomyeicqea:
            $ewgwqamkygiqaawc .= $aiowsaccomcoikus->render();
            goto mwskikiiuqwkeiqq;
            meqcqssumqokgkqc:
            if (!$aiowsaccomcoikus instanceof Element) {
                goto essaksagsgmwyccs;
            }
            goto swiqeuyomyeicqea;
            mqueqquuggcakwcy:
        }
        goto ioouuggmywygqauo;
        eawkaqqqaeooyyws:
        $ewgwqamkygiqaawc = '';
        goto wykwsyuewigykqeg;
        gsgkgikagiuqeoie:
    }
    
    public function kmiowswwgwcocguk() : ?Div
    {
        return $this->fieldsContainer;
    }
    
    public function oguwwiuwyqkaueiu($siquossayskcwkea = []) : self
    {
        $this->fieldsContainer = self::mecgagckeuagggyw()->sueyawuweyoqyeaq($siquossayskcwkea);
        return $this;
    }
    
    public function ugmceccgwaaaigiy() : ?array
    {
        return $this->fields;
    }
    
    public function ygwimyogyaqgumam(?string $aokagokqyuysuksm) : ?Field
    {
        return ManipulateArray::get($this->ugmceccgwaaaigiy(), $aokagokqyuysuksm);
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto ysawesawywsauwoi;
        eeyueqsugiwsyiig:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto eemcaiwmeswmukso;
        ysawesawywsauwoi:
        if (!(!$aiowsaccomcoikus->yywskysiycwkwsgw() && is_array($this->ugmceccgwaaaigiy()))) {
            goto ogqeqywosyqyaigy;
        }
        goto eeyueqsugiwsyiig;
        gasqiyouygwogiku:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto mogmqciagcakuqkw;
        eemcaiwmeswmukso:
        ogqeqywosyqyaigy:
        goto gasqiyouygwogiku;
        mogmqciagcakuqkw:
        return $this;
        goto kimswwmiyciiwsuk;
        kimswwmiyciiwsuk:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto kiwsaeeagagkwooc;
        kiwsaeeagagkwooc:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto msmewamakoiksqok;
            ceaccikuogcywkaw:
            gaqqyqieyeoccskc:
            goto uywmokmuiikigyso;
            yyqqwsawsocusuqc:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto ceaccikuogcywkaw;
            uywmokmuiikigyso:
            scumgsosuakacmee:
            goto awckqcsumswoggcm;
            msmewamakoiksqok:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto gaqqyqieyeoccskc;
            }
            goto yyqqwsawsocusuqc;
            awckqcsumswoggcm:
        }
        goto wscymqowwagkecqk;
        wscymqowwagkecqk:
        acaowkgayugqqgmk:
        goto eeowmomscuckuoum;
        eeowmomscuckuoum:
        return $this;
        goto auksmaiaiccmekam;
        auksmaiaiccmekam:
    }
    
    public function cwqickkaaokiquuo(string $aiamqeawckcsuaou) : self
    {
        $this->qcgocuceocquqcuw("\141\143\x74\x69\157\156", $aiamqeawckcsuaou);
        return $this;
    }
    
    public function cukciuymuoaqgwic(string $qgciuiagkkguykgs) : self
    {
        $this->qcgocuceocquqcuw("\155\x65\164\150\157\x64", $qgciuiagkkguykgs);
        return $this;
    }
}
