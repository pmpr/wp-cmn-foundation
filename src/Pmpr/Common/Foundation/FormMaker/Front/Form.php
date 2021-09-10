<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        parent::__construct("\146\157\x72\155", $aokagokqyuysuksm);
        $this->cukciuymuoaqgwic("\120\x4f\x53\x54");
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto mggewcywmuekqcaq;
        auqkowcaacmmoqqk:
        return $ewgwqamkygiqaawc;
        goto skyosyooeugyimmm;
        ggiqkimkqqwskeoa:
        $ewgwqamkygiqaawc = str_replace(self::CHILD_CONTENT, $ewgwqamkygiqaawc, $skikiykssoocmmik->render());
        goto awmcioiwswckueis;
        oiyywaikucqwquie:
        if (!$skikiykssoocmmik) {
            goto mqueqquuggcakwcy;
        }
        goto ggiqkimkqqwskeoa;
        awmcioiwswckueis:
        mqueqquuggcakwcy:
        goto auqkowcaacmmoqqk;
        iakeaakmeqkaioeg:
        $ewgwqamkygiqaawc = '';
        goto eawkaqqqaeooyyws;
        eawkaqqqaeooyyws:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto essaksagsgmwyccs;
            meqcqssumqokgkqc:
            $ewgwqamkygiqaawc .= $aiowsaccomcoikus->render();
            goto swiqeuyomyeicqea;
            swiqeuyomyeicqea:
            cgqcuiaiciwumqyy:
            goto mwskikiiuqwkeiqq;
            mwskikiiuqwkeiqq:
            ukqyaweoikcegyco:
            goto aywemsgsqqwuwasc;
            essaksagsgmwyccs:
            if (!$aiowsaccomcoikus instanceof Element) {
                goto cgqcuiaiciwumqyy;
            }
            goto meqcqssumqokgkqc;
            aywemsgsqqwuwasc:
        }
        goto wykwsyuewigykqeg;
        wykwsyuewigykqeg:
        kogocyykgoassccw:
        goto ioouuggmywygqauo;
        ioouuggmywygqauo:
        $skikiykssoocmmik = $this->kmiowswwgwcocguk();
        goto oiyywaikucqwquie;
        mggewcywmuekqcaq:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($this->ugmceccgwaaaigiy());
        goto iakeaakmeqkaioeg;
        skyosyooeugyimmm:
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
        goto ogqeqywosyqyaigy;
        eeyueqsugiwsyiig:
        gsgkgikagiuqeoie:
        goto eemcaiwmeswmukso;
        gasqiyouygwogiku:
        return $this;
        goto mogmqciagcakuqkw;
        ysawesawywsauwoi:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto eeyueqsugiwsyiig;
        eemcaiwmeswmukso:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto gasqiyouygwogiku;
        ogqeqywosyqyaigy:
        if (!(!$aiowsaccomcoikus->yywskysiycwkwsgw() && is_array($this->ugmceccgwaaaigiy()))) {
            goto gsgkgikagiuqeoie;
        }
        goto ysawesawywsauwoi;
        mogmqciagcakuqkw:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto awckqcsumswoggcm;
        awckqcsumswoggcm:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto gaqqyqieyeoccskc;
            ceaccikuogcywkaw:
            acaowkgayugqqgmk:
            goto uywmokmuiikigyso;
            msmewamakoiksqok:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto yyqqwsawsocusuqc;
            yyqqwsawsocusuqc:
            scumgsosuakacmee:
            goto ceaccikuogcywkaw;
            gaqqyqieyeoccskc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto scumgsosuakacmee;
            }
            goto msmewamakoiksqok;
            uywmokmuiikigyso:
        }
        goto kiwsaeeagagkwooc;
        kiwsaeeagagkwooc:
        kimswwmiyciiwsuk:
        goto wscymqowwagkecqk;
        wscymqowwagkecqk:
        return $this;
        goto eeowmomscuckuoum;
        eeowmomscuckuoum:
    }
    
    public function cwqickkaaokiquuo(string $aiamqeawckcsuaou) : self
    {
        $this->qcgocuceocquqcuw("\141\x63\x74\x69\157\156", $aiamqeawckcsuaou);
        return $this;
    }
    
    public function cukciuymuoaqgwic(string $qgciuiagkkguykgs) : self
    {
        $this->qcgocuceocquqcuw("\155\x65\x74\x68\157\144", $qgciuiagkkguykgs);
        return $this;
    }
}
