<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        parent::__construct("\146\x6f\162\x6d", $aokagokqyuysuksm);
        $this->cukciuymuoaqgwic("\120\x4f\123\x54");
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto mggewcywmuekqcaq;
        iakeaakmeqkaioeg:
        $ewgwqamkygiqaawc = '';
        goto eawkaqqqaeooyyws;
        auqkowcaacmmoqqk:
        return $ewgwqamkygiqaawc;
        goto skyosyooeugyimmm;
        wykwsyuewigykqeg:
        kogocyykgoassccw:
        goto ioouuggmywygqauo;
        oiyywaikucqwquie:
        if (!$skikiykssoocmmik) {
            goto mqueqquuggcakwcy;
        }
        goto ggiqkimkqqwskeoa;
        eawkaqqqaeooyyws:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto essaksagsgmwyccs;
            meqcqssumqokgkqc:
            $ewgwqamkygiqaawc .= $aiowsaccomcoikus->render();
            goto swiqeuyomyeicqea;
            essaksagsgmwyccs:
            if (!$aiowsaccomcoikus instanceof Element) {
                goto cgqcuiaiciwumqyy;
            }
            goto meqcqssumqokgkqc;
            swiqeuyomyeicqea:
            cgqcuiaiciwumqyy:
            goto mwskikiiuqwkeiqq;
            mwskikiiuqwkeiqq:
            ukqyaweoikcegyco:
            goto aywemsgsqqwuwasc;
            aywemsgsqqwuwasc:
        }
        goto wykwsyuewigykqeg;
        mggewcywmuekqcaq:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($this->ugmceccgwaaaigiy());
        goto iakeaakmeqkaioeg;
        awmcioiwswckueis:
        mqueqquuggcakwcy:
        goto auqkowcaacmmoqqk;
        ioouuggmywygqauo:
        $skikiykssoocmmik = $this->kmiowswwgwcocguk();
        goto oiyywaikucqwquie;
        ggiqkimkqqwskeoa:
        $ewgwqamkygiqaawc = str_replace(self::CHILD_CONTENT, $ewgwqamkygiqaawc, $skikiykssoocmmik->render());
        goto awmcioiwswckueis;
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
        ysawesawywsauwoi:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto eeyueqsugiwsyiig;
        eemcaiwmeswmukso:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto gasqiyouygwogiku;
        gasqiyouygwogiku:
        return $this;
        goto mogmqciagcakuqkw;
        ogqeqywosyqyaigy:
        if (!(!$aiowsaccomcoikus->yywskysiycwkwsgw() && is_array($this->ugmceccgwaaaigiy()))) {
            goto gsgkgikagiuqeoie;
        }
        goto ysawesawywsauwoi;
        eeyueqsugiwsyiig:
        gsgkgikagiuqeoie:
        goto eemcaiwmeswmukso;
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
        wscymqowwagkecqk:
        return $this;
        goto eeowmomscuckuoum;
        kiwsaeeagagkwooc:
        kimswwmiyciiwsuk:
        goto wscymqowwagkecqk;
        eeowmomscuckuoum:
    }
    
    public function cwqickkaaokiquuo(string $aiamqeawckcsuaou) : self
    {
        $this->qcgocuceocquqcuw("\x61\x63\164\x69\157\156", $aiamqeawckcsuaou);
        return $this;
    }
    
    public function cukciuymuoaqgwic(string $qgciuiagkkguykgs) : self
    {
        $this->qcgocuceocquqcuw("\155\x65\164\x68\x6f\x64", $qgciuiagkkguykgs);
        return $this;
    }
}
