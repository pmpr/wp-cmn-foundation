<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        parent::__construct("\x66\x6f\162\x6d", $aokagokqyuysuksm);
        $this->cukciuymuoaqgwic("\x50\117\x53\124");
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto iakeaakmeqkaioeg;
        auqkowcaacmmoqqk:
        mggewcywmuekqcaq:
        goto skyosyooeugyimmm;
        eawkaqqqaeooyyws:
        $ewgwqamkygiqaawc = '';
        goto wykwsyuewigykqeg;
        awmcioiwswckueis:
        $ewgwqamkygiqaawc = str_replace(self::CHILD_CONTENT, $ewgwqamkygiqaawc, $skikiykssoocmmik->render());
        goto auqkowcaacmmoqqk;
        iakeaakmeqkaioeg:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($this->ugmceccgwaaaigiy());
        goto eawkaqqqaeooyyws;
        ggiqkimkqqwskeoa:
        if (!$skikiykssoocmmik) {
            goto mggewcywmuekqcaq;
        }
        goto awmcioiwswckueis;
        ioouuggmywygqauo:
        ukqyaweoikcegyco:
        goto oiyywaikucqwquie;
        skyosyooeugyimmm:
        return $ewgwqamkygiqaawc;
        goto gsgkgikagiuqeoie;
        wykwsyuewigykqeg:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto meqcqssumqokgkqc;
            meqcqssumqokgkqc:
            if (!$aiowsaccomcoikus instanceof Element) {
                goto essaksagsgmwyccs;
            }
            goto swiqeuyomyeicqea;
            aywemsgsqqwuwasc:
            cgqcuiaiciwumqyy:
            goto mqueqquuggcakwcy;
            mwskikiiuqwkeiqq:
            essaksagsgmwyccs:
            goto aywemsgsqqwuwasc;
            swiqeuyomyeicqea:
            $ewgwqamkygiqaawc .= $aiowsaccomcoikus->render();
            goto mwskikiiuqwkeiqq;
            mqueqquuggcakwcy:
        }
        goto ioouuggmywygqauo;
        oiyywaikucqwquie:
        $skikiykssoocmmik = $this->kmiowswwgwcocguk();
        goto ggiqkimkqqwskeoa;
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
        gasqiyouygwogiku:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto mogmqciagcakuqkw;
        eemcaiwmeswmukso:
        ogqeqywosyqyaigy:
        goto gasqiyouygwogiku;
        eeyueqsugiwsyiig:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto eemcaiwmeswmukso;
        ysawesawywsauwoi:
        if (!(!$aiowsaccomcoikus->yywskysiycwkwsgw() && is_array($this->ugmceccgwaaaigiy()))) {
            goto ogqeqywosyqyaigy;
        }
        goto eeyueqsugiwsyiig;
        mogmqciagcakuqkw:
        return $this;
        goto kimswwmiyciiwsuk;
        kimswwmiyciiwsuk:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto kiwsaeeagagkwooc;
        wscymqowwagkecqk:
        acaowkgayugqqgmk:
        goto eeowmomscuckuoum;
        kiwsaeeagagkwooc:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto msmewamakoiksqok;
            yyqqwsawsocusuqc:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto ceaccikuogcywkaw;
            ceaccikuogcywkaw:
            gaqqyqieyeoccskc:
            goto uywmokmuiikigyso;
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
        eeowmomscuckuoum:
        return $this;
        goto auksmaiaiccmekam;
        auksmaiaiccmekam:
    }
    
    public function cwqickkaaokiquuo(string $aiamqeawckcsuaou) : self
    {
        $this->qcgocuceocquqcuw("\141\x63\164\151\157\x6e", $aiamqeawckcsuaou);
        return $this;
    }
    
    public function cukciuymuoaqgwic(string $qgciuiagkkguykgs) : self
    {
        $this->qcgocuceocquqcuw("\x6d\145\164\x68\x6f\144", $qgciuiagkkguykgs);
        return $this;
    }
}
