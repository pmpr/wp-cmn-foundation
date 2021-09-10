<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    
    public function __construct(string $kqywgoqsmuswammk = "\x69\x6e\x70\x75\164", string $sqeykgyoooqysmca = "\x74\145\x78\x74", string $aokagokqyuysuksm = null, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        goto euikkkmgeyguuegw;
        cmmwiusessuosyya:
        if (!in_array($kqywgoqsmuswammk, ["\x69\x6e\160\x75\x74", "\163\145\154\145\143\164", "\x74\145\x78\x74\x61\x72\x65\x61"])) {
            goto smeiqaqikagcaygu;
        }
        goto iuoowggocqmwagoy;
        wuwewiekmyaykkui:
        qksawqasmoackeyi:
        goto gesskeeseyysqsoy;
        umswccwwkswqumoe:
        if (!in_array($kqywgoqsmuswammk, ["\x69\x6e\160\165\x74"])) {
            goto qksawqasmoackeyi;
        }
        goto eyaqaosgaywyuqie;
        gesskeeseyysqsoy:
        parent::__construct($kqywgoqsmuswammk, $aokagokqyuysuksm);
        goto cmmwiusessuosyya;
        euikkkmgeyguuegw:
        $this->desc = $mkqqqewsokcswckc;
        goto guyamweceeeowyoe;
        ewoyiciioagecmog:
        smeiqaqikagcaygu:
        goto ommymacyigwwcasy;
        iuoowggocqmwagoy:
        $this->usuqmwksoeaayaig($aokagokqyuysuksm);
        goto ewoyiciioagecmog;
        eyaqaosgaywyuqie:
        $this->igmaewykumgwoaoy("\x74\x79\160\145", $sqeykgyoooqysmca);
        goto wuwewiekmyaykkui;
        guyamweceeeowyoe:
        $this->label = $pkyyagewkiyckmwy;
        goto umswccwwkswqumoe;
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
        $ywyosowkwiqceuau = self::mecgagckeuagggyw("\x67\162\157\x75\160\x5f{$this->mwikyscisascoeea()}")->cgwacqwsiowmwqug()->sueyawuweyoqyeaq($siquossayskcwkea);
        return $this->mmuyuqussqkgkega($ywyosowkwiqceuau);
    }
    
    public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self
    {
        return $this->qcgocuceocquqcuw(self::NAME, $ymqmyyeuycgmigyo);
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        return $this->label ?: $this->waecsyqmwascmqoa("\160\x6c\141\143\145\150\x6f\x6c\144\x65\x72");
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
        $this->igmaewykumgwoaoy("\x72\145\161\165\x69\x72\x65\144", "\162\x65\x71\165\151\162\x65\144");
        return $this;
    }
    
    public function oykaosmaegqwmoga() : self
    {
        $this->qigsyyqgewgskemg("\144\151\x73\141\x62\154\x65\x64")->qcgocuceocquqcuw("\144\x69\x73\x61\142\x6c\145\x64", '');
        return $this;
    }
    
    public function msmiagueogcsucgc() : bool
    {
        return (bool) $this->waecsyqmwascmqoa("\162\145\x71\x75\x69\x72\x65\144");
    }
    
    public function qooeaookuemoqecm()
    {
        return $this->value;
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self
    {
        goto yuwywkmokyioumcy;
        mkywokqkumqaoqii:
        if (!$eqgoocgaqwqcimie) {
            goto wmakaeqmmmkiwugc;
        }
        goto eeacoowouekmymqa;
        uuqqqsksywkiyuee:
        return $this;
        goto eoiwmoguoeyggsoy;
        eeacoowouekmymqa:
        switch ($this->qqimkcgcmeewwwei()) {
            case "\x69\156\x70\x75\x74":
                $this->igmaewykumgwoaoy(self::VALUE, $eqgoocgaqwqcimie);
                goto qkwkqasqqegigowa;
        }
        goto gugmqygmagggieqa;
        camakgemqqwiooom:
        qkwkqasqqegigowa:
        goto kqwaiauysqsamsom;
        yuwywkmokyioumcy:
        $this->value = $eqgoocgaqwqcimie;
        goto mkywokqkumqaoqii;
        kqwaiauysqsamsom:
        wmakaeqmmmkiwugc:
        goto uuqqqsksywkiyuee;
        gugmqygmagggieqa:
        omgwaqgqgksqeigq:
        goto camakgemqqwiooom;
        eoiwmoguoeyggsoy:
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\x66\157\162\x6d\55\143\x6f\x6e\164\162\x6f\x6c\x2d\163\x6d");
        return $this;
    }
    
    public function sqcsseccsaqsoyqy() : self
    {
        return $this->qigsyyqgewgskemg("\144\x69\x72\145\143\x74\151\x6f\156\55\154\164\x72")->igmaewykumgwoaoy("\163\164\x79\154\145", "\x64\x69\x72\x65\x63\164\151\x6f\x6e\x3a\154\164\x72\73")->igmaewykumgwoaoy("\144\151\x72", "\x6c\164\162");
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : self
    {
        $this->default = $ggauoeuaesiymgee;
        return $this;
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto gigkmkmacayscaww;
        qwkyeaecekmwewke:
        return parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto ioqkkemusiegokqk;
        gigkmkmacayscaww:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto yuioeukgsusomcui;
        qioyimmcygqceoyc:
        suusiaeemawqgome:
        goto qwkyeaecekmwewke;
        yuioeukgsusomcui:
        if (!($pkyyagewkiyckmwy && in_array($this->qqimkcgcmeewwwei(), ["\164\145\x78\x74\x61\x72\x65\141", "\x69\x6e\160\165\x74", "\163\145\154\x65\x63\x74"]))) {
            goto suusiaeemawqgome;
        }
        goto kaykciokgqwoyqko;
        kaykciokgqwoyqko:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\x6c\x61\x62\x65\x6c", ["\x66\x6f\x72" => $this->mwikyscisascoeea(), "\143\x6c\x61\x73\163" => !$this->ougeeuegcgmwkcim() ? "\163\162\55\x6f\156\x6c\171" : "\x6d\x72\55\x32\40\155\x79\x2d\x61\x75\x74\x6f\40\x74\145\x78\x74\x2d\x6e\157\167\162\x61\x70"], true, $pkyyagewkiyckmwy) . $nsmgceoqaqogqmuw;
        goto qioyimmcygqceoyc;
        ioqkkemusiegokqk:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto woumoysskimoeaki;
        qmocisicciagswmy:
        egggqwyceacmeamu:
        goto kyssogoocgmkmcim;
        wmueqisaqsaqeqwo:
        $nsmgceoqaqogqmuw .= ManipulateHTML::qgsekwygcgawekeq("\144\151\x76", ["\143\154\x61\x73\x73" => "\x69\x6e\166\141\154\x69\x64\55\x66\145\145\x64\142\141\143\153"], true, $uamcoiueqaamsqma);
        goto qmocisicciagswmy;
        woumoysskimoeaki:
        if (!($uamcoiueqaamsqma = $this->meuosmsqsqkqeoeu())) {
            goto egggqwyceacmeamu;
        }
        goto wmueqisaqsaqeqwo;
        kyssogoocgmkmcim:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto igoegiuockuwuukc;
        igoegiuockuwuukc:
    }
    
    public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self
    {
        return $this->qcgocuceocquqcuw("\164\171\x70\145", $sqeykgyoooqysmca);
    }
    
    public function soqmwakwiegiceeo($acakauekiwwamggq = '') : self
    {
        goto osywimumacyuocou;
        qycwmgioageosswe:
        $this->igmaewykumgwoaoy("\157\x6e\x62\x6c\165\x72", "\x69\146\40\x28\41\44\50\164\150\x69\x73\x29\x2e\166\x61\154\50\51\51\173\x24\50\164\150\x69\163\51\x2e\x63\x73\163\x28\x27\144\x69\x72\145\x63\x74\x69\x6f\156\x27\x2c\47\162\x74\154\47\51\x3b\x24\x28\164\x68\x69\x73\51\56\x61\x74\164\162\x28\47\x70\154\141\x63\x65\x68\157\x6c\144\x65\162\47\x2c\x20\x27{$this->waecsyqmwascmqoa("\160\x6c\141\143\x65\150\157\154\144\x65\162")}\x27\51\175");
        goto iseyowcwogamscuy;
        iseyowcwogamscuy:
        return $this;
        goto myeqeyegsaaasiqc;
        osywimumacyuocou:
        $this->igmaewykumgwoaoy("\x6f\x6e\146\x6f\x63\x75\x73", "\44\x28\x74\150\x69\x73\x29\56\143\x73\163\x28\47\x64\x69\162\145\143\x74\151\x6f\156\47\54\47\154\164\x72\x27\51\x3b\x24\50\x74\x68\151\x73\x29\56\x61\x74\x74\162\x28\47\160\154\141\143\145\150\x6f\x6c\x64\145\x72\47\54\40\47{$acakauekiwwamggq}\x27\x29\73");
        goto qycwmgioageosswe;
        myeqeyegsaaasiqc:
    }
    
    public function gysckqgokmciyqcg(?string $pkyyagewkiyckmwy) : self
    {
        return $this->qcgocuceocquqcuw("\x61\162\x69\141\55\154\x61\142\145\x6c", $pkyyagewkiyckmwy);
    }
}
