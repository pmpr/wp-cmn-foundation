<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        parent::__construct("\146\157\x72\x6d", $aokagokqyuysuksm);
        $this->cukciuymuoaqgwic("\120\x4f\123\x54");
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto mwskikiiuqwkeiqq;
        iakeaakmeqkaioeg:
        $skikiykssoocmmik = $this->kmiowswwgwcocguk();
        goto eawkaqqqaeooyyws;
        eawkaqqqaeooyyws:
        if (!$skikiykssoocmmik) {
            goto swiqeuyomyeicqea;
        }
        goto wykwsyuewigykqeg;
        mwskikiiuqwkeiqq:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($this->ugmceccgwaaaigiy());
        goto aywemsgsqqwuwasc;
        wykwsyuewigykqeg:
        $ewgwqamkygiqaawc = str_replace(self::CHILD_CONTENT, $ewgwqamkygiqaawc, $skikiykssoocmmik->render());
        goto ioouuggmywygqauo;
        aywemsgsqqwuwasc:
        $ewgwqamkygiqaawc = '';
        goto mqueqquuggcakwcy;
        oiyywaikucqwquie:
        return $ewgwqamkygiqaawc;
        goto ggiqkimkqqwskeoa;
        ioouuggmywygqauo:
        swiqeuyomyeicqea:
        goto oiyywaikucqwquie;
        mqueqquuggcakwcy:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto kogocyykgoassccw;
            cgqcuiaiciwumqyy:
            eiaakmiuaoooskeu:
            goto essaksagsgmwyccs;
            essaksagsgmwyccs:
            icsoyscwuykooeqg:
            goto meqcqssumqokgkqc;
            kogocyykgoassccw:
            if (!$aiowsaccomcoikus instanceof Element) {
                goto eiaakmiuaoooskeu;
            }
            goto ukqyaweoikcegyco;
            ukqyaweoikcegyco:
            $ewgwqamkygiqaawc .= $aiowsaccomcoikus->render();
            goto cgqcuiaiciwumqyy;
            meqcqssumqokgkqc:
        }
        goto mggewcywmuekqcaq;
        mggewcywmuekqcaq:
        mokkyeicegusckgs:
        goto iakeaakmeqkaioeg;
        ggiqkimkqqwskeoa:
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
        goto auqkowcaacmmoqqk;
        ogqeqywosyqyaigy:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto ysawesawywsauwoi;
        gsgkgikagiuqeoie:
        awmcioiwswckueis:
        goto ogqeqywosyqyaigy;
        ysawesawywsauwoi:
        return $this;
        goto eeyueqsugiwsyiig;
        auqkowcaacmmoqqk:
        if (!(!$aiowsaccomcoikus->yywskysiycwkwsgw() && is_array($this->ugmceccgwaaaigiy()))) {
            goto awmcioiwswckueis;
        }
        goto skyosyooeugyimmm;
        skyosyooeugyimmm:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto gsgkgikagiuqeoie;
        eeyueqsugiwsyiig:
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto yyqqwsawsocusuqc;
        yyqqwsawsocusuqc:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto kimswwmiyciiwsuk;
            gaqqyqieyeoccskc:
            gasqiyouygwogiku:
            goto msmewamakoiksqok;
            kimswwmiyciiwsuk:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto mogmqciagcakuqkw;
            }
            goto acaowkgayugqqgmk;
            scumgsosuakacmee:
            mogmqciagcakuqkw:
            goto gaqqyqieyeoccskc;
            acaowkgayugqqgmk:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto scumgsosuakacmee;
            msmewamakoiksqok:
        }
        goto ceaccikuogcywkaw;
        ceaccikuogcywkaw:
        eemcaiwmeswmukso:
        goto uywmokmuiikigyso;
        uywmokmuiikigyso:
        return $this;
        goto awckqcsumswoggcm;
        awckqcsumswoggcm:
    }
    
    public function cwqickkaaokiquuo(string $aiamqeawckcsuaou) : self
    {
        $this->qcgocuceocquqcuw("\x61\x63\164\x69\157\x6e", $aiamqeawckcsuaou);
        return $this;
    }
    
    public function cukciuymuoaqgwic(string $qgciuiagkkguykgs) : self
    {
        $this->qcgocuceocquqcuw("\x6d\x65\x74\x68\x6f\144", $qgciuiagkkguykgs);
        return $this;
    }
}
