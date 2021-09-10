<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    
    public function __construct(string $kqywgoqsmuswammk = "\151\x6e\x70\x75\164", string $sqeykgyoooqysmca = "\x74\x65\170\x74", string $aokagokqyuysuksm = null, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        goto smeiqaqikagcaygu;
        umswccwwkswqumoe:
        $this->igmaewykumgwoaoy("\164\171\160\145", $sqeykgyoooqysmca);
        goto eyaqaosgaywyuqie;
        eyaqaosgaywyuqie:
        oewgqkuscaaqgocc:
        goto wuwewiekmyaykkui;
        euikkkmgeyguuegw:
        $this->label = $pkyyagewkiyckmwy;
        goto guyamweceeeowyoe;
        gesskeeseyysqsoy:
        if (!in_array($kqywgoqsmuswammk, ["\151\x6e\x70\165\x74", "\163\145\x6c\x65\143\164", "\164\145\x78\x74\x61\x72\145\x61"])) {
            goto qksawqasmoackeyi;
        }
        goto cmmwiusessuosyya;
        iuoowggocqmwagoy:
        qksawqasmoackeyi:
        goto ewoyiciioagecmog;
        wuwewiekmyaykkui:
        parent::__construct($kqywgoqsmuswammk, $aokagokqyuysuksm);
        goto gesskeeseyysqsoy;
        cmmwiusessuosyya:
        $this->usuqmwksoeaayaig($aokagokqyuysuksm);
        goto iuoowggocqmwagoy;
        guyamweceeeowyoe:
        if (!in_array($kqywgoqsmuswammk, ["\151\x6e\x70\165\164"])) {
            goto oewgqkuscaaqgocc;
        }
        goto umswccwwkswqumoe;
        smeiqaqikagcaygu:
        $this->desc = $mkqqqewsokcswckc;
        goto euikkkmgeyguuegw;
        ewoyiciioagecmog:
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
        $ywyosowkwiqceuau = self::mecgagckeuagggyw("\x67\162\x6f\x75\x70\x5f{$this->mwikyscisascoeea()}")->cgwacqwsiowmwqug()->sueyawuweyoqyeaq($siquossayskcwkea);
        return $this->mmuyuqussqkgkega($ywyosowkwiqceuau);
    }
    
    public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self
    {
        return $this->qcgocuceocquqcuw(self::NAME, $ymqmyyeuycgmigyo);
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        return $this->label ?: $this->waecsyqmwascmqoa("\160\154\x61\143\x65\x68\157\x6c\144\145\x72");
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
        $this->igmaewykumgwoaoy("\162\x65\x71\165\151\162\145\144", "\162\145\x71\x75\151\x72\145\144");
        return $this;
    }
    
    public function oykaosmaegqwmoga() : self
    {
        $this->qigsyyqgewgskemg("\144\151\163\x61\x62\154\145\144")->qcgocuceocquqcuw("\144\151\163\141\x62\154\x65\144", '');
        return $this;
    }
    
    public function msmiagueogcsucgc() : bool
    {
        return (bool) $this->waecsyqmwascmqoa("\162\145\161\x75\151\x72\145\x64");
    }
    
    public function qooeaookuemoqecm()
    {
        return $this->value;
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self
    {
        goto wmakaeqmmmkiwugc;
        yuwywkmokyioumcy:
        if (!$eqgoocgaqwqcimie) {
            goto omgwaqgqgksqeigq;
        }
        goto mkywokqkumqaoqii;
        kqwaiauysqsamsom:
        return $this;
        goto uuqqqsksywkiyuee;
        eeacoowouekmymqa:
        qkwkqasqqegigowa:
        goto gugmqygmagggieqa;
        camakgemqqwiooom:
        omgwaqgqgksqeigq:
        goto kqwaiauysqsamsom;
        wmakaeqmmmkiwugc:
        $this->value = $eqgoocgaqwqcimie;
        goto yuwywkmokyioumcy;
        mkywokqkumqaoqii:
        switch ($this->qqimkcgcmeewwwei()) {
            case "\x69\x6e\x70\x75\x74":
                $this->igmaewykumgwoaoy(self::VALUE, $eqgoocgaqwqcimie);
                goto ommymacyigwwcasy;
        }
        goto eeacoowouekmymqa;
        gugmqygmagggieqa:
        ommymacyigwwcasy:
        goto camakgemqqwiooom;
        uuqqqsksywkiyuee:
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\x66\x6f\x72\x6d\55\x63\x6f\156\164\x72\x6f\154\55\163\155");
        return $this;
    }
    
    public function sqcsseccsaqsoyqy() : self
    {
        return $this->qigsyyqgewgskemg("\144\151\162\x65\143\164\x69\157\156\55\154\164\162")->igmaewykumgwoaoy("\x73\164\171\x6c\x65", "\144\x69\x72\145\143\164\151\157\x6e\72\x6c\x74\x72\73")->igmaewykumgwoaoy("\144\151\x72", "\x6c\x74\162");
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : self
    {
        $this->default = $ggauoeuaesiymgee;
        return $this;
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto suusiaeemawqgome;
        yuioeukgsusomcui:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\154\141\x62\145\154", ["\146\x6f\x72" => $this->mwikyscisascoeea(), "\143\154\141\163\x73" => !$this->ougeeuegcgmwkcim() ? "\163\162\x2d\157\156\154\x79" : "\x6d\162\x2d\62\40\x6d\x79\55\141\x75\164\157\40\164\145\x78\164\55\156\157\167\x72\x61\160"], true, $pkyyagewkiyckmwy) . $nsmgceoqaqogqmuw;
        goto kaykciokgqwoyqko;
        suusiaeemawqgome:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto gigkmkmacayscaww;
        kaykciokgqwoyqko:
        eoiwmoguoeyggsoy:
        goto qioyimmcygqceoyc;
        gigkmkmacayscaww:
        if (!($pkyyagewkiyckmwy && in_array($this->qqimkcgcmeewwwei(), ["\164\145\x78\164\x61\x72\x65\x61", "\x69\156\160\x75\164", "\x73\x65\154\x65\143\x74"]))) {
            goto eoiwmoguoeyggsoy;
        }
        goto yuioeukgsusomcui;
        qioyimmcygqceoyc:
        return parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto qwkyeaecekmwewke;
        qwkyeaecekmwewke:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto egggqwyceacmeamu;
        woumoysskimoeaki:
        $nsmgceoqaqogqmuw .= ManipulateHTML::qgsekwygcgawekeq("\x64\x69\x76", ["\x63\154\x61\x73\163" => "\x69\x6e\166\x61\x6c\151\144\x2d\146\x65\145\144\x62\141\x63\x6b"], true, $uamcoiueqaamsqma);
        goto wmueqisaqsaqeqwo;
        egggqwyceacmeamu:
        if (!($uamcoiueqaamsqma = $this->meuosmsqsqkqeoeu())) {
            goto ioqkkemusiegokqk;
        }
        goto woumoysskimoeaki;
        wmueqisaqsaqeqwo:
        ioqkkemusiegokqk:
        goto qmocisicciagswmy;
        qmocisicciagswmy:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto kyssogoocgmkmcim;
        kyssogoocgmkmcim:
    }
    
    public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self
    {
        return $this->qcgocuceocquqcuw("\x74\171\160\x65", $sqeykgyoooqysmca);
    }
    
    public function soqmwakwiegiceeo($acakauekiwwamggq = '') : self
    {
        goto igoegiuockuwuukc;
        igoegiuockuwuukc:
        $this->igmaewykumgwoaoy("\x6f\156\146\x6f\x63\165\163", "\44\50\164\x68\151\163\x29\56\143\x73\163\x28\47\144\151\x72\x65\143\164\151\x6f\156\x27\x2c\x27\x6c\x74\x72\47\x29\x3b\44\50\x74\x68\151\163\x29\x2e\x61\164\x74\x72\x28\47\160\154\141\143\145\x68\157\154\144\145\x72\47\x2c\40\x27{$acakauekiwwamggq}\x27\51\73");
        goto osywimumacyuocou;
        osywimumacyuocou:
        $this->igmaewykumgwoaoy("\157\x6e\x62\x6c\165\162", "\x69\x66\40\50\41\44\50\x74\150\151\163\x29\56\166\141\x6c\x28\x29\x29\x7b\x24\x28\164\150\x69\x73\51\56\143\163\x73\50\47\144\x69\x72\x65\143\164\x69\x6f\x6e\47\x2c\x27\x72\164\x6c\47\x29\73\44\x28\x74\x68\x69\163\x29\x2e\x61\164\164\x72\50\47\x70\x6c\141\143\145\x68\157\x6c\144\x65\162\47\x2c\40\x27{$this->waecsyqmwascmqoa("\x70\154\x61\x63\145\x68\157\154\x64\x65\162")}\47\51\175");
        goto qycwmgioageosswe;
        qycwmgioageosswe:
        return $this;
        goto iseyowcwogamscuy;
        iseyowcwogamscuy:
    }
    
    public function gysckqgokmciyqcg(?string $pkyyagewkiyckmwy) : self
    {
        return $this->qcgocuceocquqcuw("\141\162\151\141\55\154\141\x62\x65\154", $pkyyagewkiyckmwy);
    }
}
