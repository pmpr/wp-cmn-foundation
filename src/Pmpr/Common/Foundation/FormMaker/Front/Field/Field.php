<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    
    public function __construct(string $kqywgoqsmuswammk = "\x69\156\160\165\x74", string $sqeykgyoooqysmca = "\x74\x65\x78\x74", string $aokagokqyuysuksm = null, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        goto smeiqaqikagcaygu;
        iuoowggocqmwagoy:
        qksawqasmoackeyi:
        goto ewoyiciioagecmog;
        guyamweceeeowyoe:
        if (!in_array($kqywgoqsmuswammk, ["\151\156\160\x75\164"])) {
            goto oewgqkuscaaqgocc;
        }
        goto umswccwwkswqumoe;
        euikkkmgeyguuegw:
        $this->label = $pkyyagewkiyckmwy;
        goto guyamweceeeowyoe;
        gesskeeseyysqsoy:
        if (!in_array($kqywgoqsmuswammk, ["\151\156\160\x75\164", "\163\145\154\145\x63\x74", "\x74\145\170\x74\141\162\145\x61"])) {
            goto qksawqasmoackeyi;
        }
        goto cmmwiusessuosyya;
        cmmwiusessuosyya:
        $this->usuqmwksoeaayaig($aokagokqyuysuksm);
        goto iuoowggocqmwagoy;
        smeiqaqikagcaygu:
        $this->desc = $mkqqqewsokcswckc;
        goto euikkkmgeyguuegw;
        umswccwwkswqumoe:
        $this->igmaewykumgwoaoy("\x74\x79\x70\x65", $sqeykgyoooqysmca);
        goto eyaqaosgaywyuqie;
        eyaqaosgaywyuqie:
        oewgqkuscaaqgocc:
        goto wuwewiekmyaykkui;
        wuwewiekmyaykkui:
        parent::__construct($kqywgoqsmuswammk, $aokagokqyuysuksm);
        goto gesskeeseyysqsoy;
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
        $ywyosowkwiqceuau = self::mecgagckeuagggyw("\147\162\x6f\165\160\137{$this->mwikyscisascoeea()}")->cgwacqwsiowmwqug()->sueyawuweyoqyeaq($siquossayskcwkea);
        return $this->mmuyuqussqkgkega($ywyosowkwiqceuau);
    }
    
    public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self
    {
        return $this->qcgocuceocquqcuw(self::NAME, $ymqmyyeuycgmigyo);
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        return $this->label ?: $this->waecsyqmwascmqoa("\x70\154\x61\143\x65\x68\157\x6c\144\145\162");
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
        $this->igmaewykumgwoaoy("\x72\x65\161\165\151\x72\145\144", "\162\x65\x71\x75\x69\x72\x65\x64");
        return $this;
    }
    
    public function oykaosmaegqwmoga() : self
    {
        $this->qigsyyqgewgskemg("\144\151\x73\141\142\x6c\x65\x64")->qcgocuceocquqcuw("\144\151\x73\141\142\154\145\x64", '');
        return $this;
    }
    
    public function msmiagueogcsucgc() : bool
    {
        return (bool) $this->waecsyqmwascmqoa("\x72\x65\161\x75\151\162\145\x64");
    }
    
    public function qooeaookuemoqecm()
    {
        return $this->value;
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self
    {
        goto wmakaeqmmmkiwugc;
        wmakaeqmmmkiwugc:
        $this->value = $eqgoocgaqwqcimie;
        goto yuwywkmokyioumcy;
        gugmqygmagggieqa:
        ommymacyigwwcasy:
        goto camakgemqqwiooom;
        eeacoowouekmymqa:
        qkwkqasqqegigowa:
        goto gugmqygmagggieqa;
        mkywokqkumqaoqii:
        switch ($this->qqimkcgcmeewwwei()) {
            case "\x69\156\160\x75\164":
                $this->igmaewykumgwoaoy(self::VALUE, $eqgoocgaqwqcimie);
                goto ommymacyigwwcasy;
        }
        goto eeacoowouekmymqa;
        camakgemqqwiooom:
        omgwaqgqgksqeigq:
        goto kqwaiauysqsamsom;
        yuwywkmokyioumcy:
        if (!$eqgoocgaqwqcimie) {
            goto omgwaqgqgksqeigq;
        }
        goto mkywokqkumqaoqii;
        kqwaiauysqsamsom:
        return $this;
        goto uuqqqsksywkiyuee;
        uuqqqsksywkiyuee:
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\x66\157\162\155\x2d\143\157\156\164\x72\157\x6c\x2d\163\155");
        return $this;
    }
    
    public function sqcsseccsaqsoyqy() : self
    {
        return $this->qigsyyqgewgskemg("\x64\151\162\145\x63\x74\x69\157\x6e\x2d\154\164\x72")->igmaewykumgwoaoy("\163\x74\x79\x6c\x65", "\x64\151\x72\145\143\x74\x69\157\156\72\154\x74\x72\x3b")->igmaewykumgwoaoy("\144\x69\x72", "\154\164\x72");
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : self
    {
        $this->default = $ggauoeuaesiymgee;
        return $this;
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto suusiaeemawqgome;
        gigkmkmacayscaww:
        if (!($pkyyagewkiyckmwy && in_array($this->qqimkcgcmeewwwei(), ["\x74\x65\x78\x74\141\x72\x65\141", "\x69\156\x70\x75\164", "\163\145\154\x65\x63\164"]))) {
            goto eoiwmoguoeyggsoy;
        }
        goto yuioeukgsusomcui;
        yuioeukgsusomcui:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\154\141\142\x65\x6c", ["\146\x6f\x72" => $this->mwikyscisascoeea(), "\143\x6c\141\163\163" => !$this->ougeeuegcgmwkcim() ? "\163\x72\x2d\x6f\156\154\x79" : "\x6d\x72\x2d\62\40\x6d\x79\55\141\x75\164\157\x20\x74\x65\170\164\55\156\157\x77\x72\x61\x70"], true, $pkyyagewkiyckmwy) . $nsmgceoqaqogqmuw;
        goto kaykciokgqwoyqko;
        qioyimmcygqceoyc:
        return parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto qwkyeaecekmwewke;
        suusiaeemawqgome:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto gigkmkmacayscaww;
        kaykciokgqwoyqko:
        eoiwmoguoeyggsoy:
        goto qioyimmcygqceoyc;
        qwkyeaecekmwewke:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto egggqwyceacmeamu;
        wmueqisaqsaqeqwo:
        ioqkkemusiegokqk:
        goto qmocisicciagswmy;
        woumoysskimoeaki:
        $nsmgceoqaqogqmuw .= ManipulateHTML::qgsekwygcgawekeq("\x64\151\x76", ["\x63\154\141\x73\163" => "\151\156\166\141\x6c\151\x64\55\x66\x65\x65\x64\x62\x61\143\x6b"], true, $uamcoiueqaamsqma);
        goto wmueqisaqsaqeqwo;
        qmocisicciagswmy:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto kyssogoocgmkmcim;
        egggqwyceacmeamu:
        if (!($uamcoiueqaamsqma = $this->meuosmsqsqkqeoeu())) {
            goto ioqkkemusiegokqk;
        }
        goto woumoysskimoeaki;
        kyssogoocgmkmcim:
    }
    
    public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self
    {
        return $this->qcgocuceocquqcuw("\164\171\x70\x65", $sqeykgyoooqysmca);
    }
    
    public function soqmwakwiegiceeo($acakauekiwwamggq = '') : self
    {
        goto igoegiuockuwuukc;
        igoegiuockuwuukc:
        $this->igmaewykumgwoaoy("\157\x6e\x66\157\x63\165\x73", "\x24\x28\x74\150\x69\163\x29\x2e\143\163\x73\50\x27\144\151\x72\145\x63\x74\x69\157\x6e\47\x2c\47\154\x74\162\47\x29\x3b\x24\x28\x74\x68\151\x73\x29\x2e\x61\164\x74\x72\x28\x27\x70\154\x61\x63\x65\x68\157\x6c\144\145\162\47\x2c\40\x27{$acakauekiwwamggq}\x27\51\x3b");
        goto osywimumacyuocou;
        osywimumacyuocou:
        $this->igmaewykumgwoaoy("\157\x6e\x62\154\165\162", "\x69\146\40\x28\41\44\x28\164\150\x69\163\x29\x2e\x76\x61\154\x28\51\x29\173\x24\50\164\150\x69\163\51\56\143\163\x73\50\x27\144\x69\162\x65\x63\164\151\x6f\x6e\x27\x2c\x27\162\x74\154\x27\x29\x3b\44\50\x74\x68\151\x73\x29\56\x61\x74\x74\162\50\x27\x70\x6c\141\x63\x65\x68\x6f\154\144\145\x72\x27\x2c\40\47{$this->waecsyqmwascmqoa("\160\x6c\x61\143\x65\x68\x6f\x6c\x64\145\x72")}\x27\51\175");
        goto qycwmgioageosswe;
        qycwmgioageosswe:
        return $this;
        goto iseyowcwogamscuy;
        iseyowcwogamscuy:
    }
    
    public function gysckqgokmciyqcg(?string $pkyyagewkiyckmwy) : self
    {
        return $this->qcgocuceocquqcuw("\141\x72\151\x61\55\154\141\x62\145\x6c", $pkyyagewkiyckmwy);
    }
}
