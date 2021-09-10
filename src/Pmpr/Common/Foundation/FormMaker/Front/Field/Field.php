<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\FormMaker\Front\Element;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Field extends Element
{
    
    protected $value = null;
    
    protected $default = null;
    
    protected ?string $desc = '';
    
    protected ?int $priority = 0;
    
    protected ?string $label = '';
    
    protected bool $showLabel = false;
    
    protected ?string $component = null;
    
    protected ?string $invalidMessage = null;
    
    public function __construct(string $kqywgoqsmuswammk = "\151\x6e\160\x75\x74", string $sqeykgyoooqysmca = "\164\145\x78\x74", string $aokagokqyuysuksm = null, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        goto euikkkmgeyguuegw;
        guyamweceeeowyoe:
        $this->label = $pkyyagewkiyckmwy;
        goto umswccwwkswqumoe;
        cmmwiusessuosyya:
        if (!in_array($kqywgoqsmuswammk, ["\151\x6e\160\165\x74", "\163\x65\x6c\x65\x63\x74", "\164\145\170\x74\141\162\145\141"])) {
            goto smeiqaqikagcaygu;
        }
        goto iuoowggocqmwagoy;
        eyaqaosgaywyuqie:
        $this->igmaewykumgwoaoy("\x74\171\160\x65", $sqeykgyoooqysmca);
        goto wuwewiekmyaykkui;
        euikkkmgeyguuegw:
        $this->desc = $mkqqqewsokcswckc;
        goto guyamweceeeowyoe;
        ewoyiciioagecmog:
        smeiqaqikagcaygu:
        goto ommymacyigwwcasy;
        iuoowggocqmwagoy:
        $this->usuqmwksoeaayaig($aokagokqyuysuksm);
        goto ewoyiciioagecmog;
        umswccwwkswqumoe:
        if (!in_array($kqywgoqsmuswammk, ["\x69\156\x70\165\164"])) {
            goto qksawqasmoackeyi;
        }
        goto eyaqaosgaywyuqie;
        wuwewiekmyaykkui:
        qksawqasmoackeyi:
        goto gesskeeseyysqsoy;
        gesskeeseyysqsoy:
        parent::__construct($kqywgoqsmuswammk, $aokagokqyuysuksm);
        goto cmmwiusessuosyya;
        ommymacyigwwcasy:
    }
    
    public function cqusmgskowmesgcg() : ?string
    {
        return $this->component;
    }
    
    public function askmmuauqcuuqsea(?string $wksoawcgagcgoask) : self
    {
        $this->component = $wksoawcgagcgoask;
        return $this;
    }
    
    public function meuosmsqsqkqeoeu() : ?string
    {
        return $this->invalidMessage;
    }
    
    public function sgekqmmaiyiauagu(string $ykmkoyqqcmqaeoaa) : self
    {
        $this->invalidMessage = $ykmkoyqqcmqaeoaa;
        return $this;
    }
    
    public function yywskysiycwkwsgw() : ?int
    {
        return $this->priority;
    }
    
    public function jyumyyugiwwiqomk($sqqewmoeaekuyyas) : self
    {
        $this->priority = $sqqewmoeaekuyyas;
        return $this;
    }
    
    public function ougeeuegcgmwkcim() : bool
    {
        return $this->showLabel;
    }
    
    public function cysmiqkqasmweeem(bool $uuagoowwgcuosuuu) : self
    {
        $this->showLabel = $uuagoowwgcuosuuu;
        return $this;
    }
    
    public function uuagoowwgcuosuuu() : self
    {
        $this->cysmiqkqasmweeem(true);
        return $this;
    }
    
    public function cgeiiwakumywwowu($siquossayskcwkea = []) : self
    {
        $ywyosowkwiqceuau = self::mecgagckeuagggyw("\x67\162\x6f\165\x70\137{$this->mwikyscisascoeea()}")->cgwacqwsiowmwqug()->sueyawuweyoqyeaq($siquossayskcwkea);
        return $this->mmuyuqussqkgkega($ywyosowkwiqceuau);
    }
    
    public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self
    {
        return $this->qcgocuceocquqcuw(self::NAME, $ymqmyyeuycgmigyo);
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        return $this->label ?: $this->waecsyqmwascmqoa("\x70\154\x61\x63\x65\150\157\x6c\x64\145\162");
    }
    
    public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self
    {
        $this->label = $pkyyagewkiyckmwy;
        return $this;
    }
    
    public function uuwsoaqmkwcgaqes() : ?string
    {
        return $this->desc;
    }
    
    public function ccmwycqioaicegoc(?string $mkqqqewsokcswckc) : self
    {
        $this->desc = $mkqqqewsokcswckc;
        return $this;
    }
    
    public function oiswysuiioecsaae()
    {
        return $this->default;
    }
    
    public function eumecwmqmukqgyea() : self
    {
        $this->igmaewykumgwoaoy("\x72\145\x71\x75\151\162\145\144", "\162\x65\161\x75\151\x72\x65\144");
        return $this;
    }
    
    public function oykaosmaegqwmoga() : self
    {
        $this->qigsyyqgewgskemg("\x64\151\163\x61\142\x6c\x65\x64")->qcgocuceocquqcuw("\144\151\x73\x61\142\154\x65\x64", '');
        return $this;
    }
    
    public function msmiagueogcsucgc() : bool
    {
        return (bool) $this->waecsyqmwascmqoa("\x72\145\161\165\151\162\145\x64");
    }
    
    public function qooeaookuemoqecm()
    {
        return $this->value;
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self
    {
        goto yuwywkmokyioumcy;
        kqwaiauysqsamsom:
        wmakaeqmmmkiwugc:
        goto uuqqqsksywkiyuee;
        uuqqqsksywkiyuee:
        return $this;
        goto eoiwmoguoeyggsoy;
        camakgemqqwiooom:
        qkwkqasqqegigowa:
        goto kqwaiauysqsamsom;
        gugmqygmagggieqa:
        omgwaqgqgksqeigq:
        goto camakgemqqwiooom;
        mkywokqkumqaoqii:
        if (!$eqgoocgaqwqcimie) {
            goto wmakaeqmmmkiwugc;
        }
        goto eeacoowouekmymqa;
        eeacoowouekmymqa:
        switch ($this->qqimkcgcmeewwwei()) {
            case "\x69\156\x70\x75\164":
                $this->igmaewykumgwoaoy(self::VALUE, $eqgoocgaqwqcimie);
                goto qkwkqasqqegigowa;
        }
        goto gugmqygmagggieqa;
        yuwywkmokyioumcy:
        $this->value = $eqgoocgaqwqcimie;
        goto mkywokqkumqaoqii;
        eoiwmoguoeyggsoy:
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\146\157\162\155\55\x63\x6f\x6e\x74\x72\x6f\154\x2d\x73\x6d");
        return $this;
    }
    
    public function sqcsseccsaqsoyqy() : self
    {
        return $this->qigsyyqgewgskemg("\x64\151\x72\145\143\x74\151\x6f\x6e\x2d\154\164\x72")->igmaewykumgwoaoy("\x73\164\x79\x6c\x65", "\144\151\162\145\x63\164\x69\157\x6e\72\154\164\162\x3b")->igmaewykumgwoaoy("\144\x69\162", "\154\x74\x72");
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : self
    {
        $this->default = $ggauoeuaesiymgee;
        return $this;
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto gigkmkmacayscaww;
        gigkmkmacayscaww:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto yuioeukgsusomcui;
        yuioeukgsusomcui:
        if (!($pkyyagewkiyckmwy && in_array($this->qqimkcgcmeewwwei(), ["\x74\145\170\164\x61\162\x65\141", "\151\156\x70\165\x74", "\163\145\x6c\x65\143\x74"]))) {
            goto suusiaeemawqgome;
        }
        goto kaykciokgqwoyqko;
        qioyimmcygqceoyc:
        suusiaeemawqgome:
        goto qwkyeaecekmwewke;
        kaykciokgqwoyqko:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\x6c\141\x62\x65\154", ["\x66\x6f\x72" => $this->mwikyscisascoeea(), "\143\154\141\x73\163" => !$this->ougeeuegcgmwkcim() ? "\163\162\55\157\x6e\x6c\171" : "\155\x72\55\62\40\x6d\x79\55\141\165\x74\x6f\x20\x74\145\170\164\55\x6e\157\167\162\x61\x70"], true, $pkyyagewkiyckmwy) . $nsmgceoqaqogqmuw;
        goto qioyimmcygqceoyc;
        qwkyeaecekmwewke:
        return parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto ioqkkemusiegokqk;
        ioqkkemusiegokqk:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto woumoysskimoeaki;
        wmueqisaqsaqeqwo:
        $nsmgceoqaqogqmuw .= ManipulateHTML::qgsekwygcgawekeq("\x64\151\x76", ["\x63\x6c\x61\163\x73" => "\x69\156\166\141\154\x69\144\x2d\x66\145\145\144\142\x61\143\153"], true, $uamcoiueqaamsqma);
        goto qmocisicciagswmy;
        kyssogoocgmkmcim:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto igoegiuockuwuukc;
        qmocisicciagswmy:
        egggqwyceacmeamu:
        goto kyssogoocgmkmcim;
        woumoysskimoeaki:
        if (!($uamcoiueqaamsqma = $this->meuosmsqsqkqeoeu())) {
            goto egggqwyceacmeamu;
        }
        goto wmueqisaqsaqeqwo;
        igoegiuockuwuukc:
    }
    
    public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self
    {
        return $this->qcgocuceocquqcuw("\x74\171\160\145", $sqeykgyoooqysmca);
    }
    
    public function soqmwakwiegiceeo($acakauekiwwamggq = '') : self
    {
        goto osywimumacyuocou;
        qycwmgioageosswe:
        $this->igmaewykumgwoaoy("\x6f\156\142\154\x75\162", "\x69\x66\40\x28\x21\x24\x28\164\x68\x69\163\x29\x2e\x76\141\154\50\51\51\x7b\44\50\164\x68\x69\x73\x29\x2e\x63\x73\163\x28\47\144\x69\162\145\143\164\151\157\x6e\47\x2c\47\x72\164\154\47\x29\73\x24\x28\164\x68\x69\x73\x29\x2e\x61\164\164\x72\x28\x27\x70\x6c\x61\x63\145\150\157\154\x64\x65\x72\47\54\x20\x27{$this->waecsyqmwascmqoa("\160\154\141\x63\x65\x68\x6f\x6c\144\x65\x72")}\x27\x29\x7d");
        goto iseyowcwogamscuy;
        osywimumacyuocou:
        $this->igmaewykumgwoaoy("\157\156\x66\157\x63\165\163", "\x24\x28\x74\x68\151\163\51\x2e\143\x73\163\x28\47\x64\151\162\x65\x63\164\x69\157\156\x27\54\47\154\x74\x72\47\51\x3b\x24\50\164\x68\151\x73\51\x2e\141\164\x74\x72\x28\47\160\x6c\x61\x63\145\150\x6f\154\144\145\x72\47\x2c\x20\x27{$acakauekiwwamggq}\x27\51\x3b");
        goto qycwmgioageosswe;
        iseyowcwogamscuy:
        return $this;
        goto myeqeyegsaaasiqc;
        myeqeyegsaaasiqc:
    }
    
    public function gysckqgokmciyqcg(?string $pkyyagewkiyckmwy) : self
    {
        return $this->qcgocuceocquqcuw("\x61\x72\x69\141\x2d\x6c\x61\x62\x65\x6c", $pkyyagewkiyckmwy);
    }
}
