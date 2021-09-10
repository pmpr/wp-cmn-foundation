<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    
    public function __construct(string $kqywgoqsmuswammk = "\x69\x6e\x70\x75\164", string $sqeykgyoooqysmca = "\x74\145\x78\164", string $aokagokqyuysuksm = null, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        goto guyamweceeeowyoe;
        cmmwiusessuosyya:
        parent::__construct($kqywgoqsmuswammk, $aokagokqyuysuksm);
        goto iuoowggocqmwagoy;
        umswccwwkswqumoe:
        $this->label = $pkyyagewkiyckmwy;
        goto eyaqaosgaywyuqie;
        ommymacyigwwcasy:
        euikkkmgeyguuegw:
        goto qkwkqasqqegigowa;
        guyamweceeeowyoe:
        $this->desc = $mkqqqewsokcswckc;
        goto umswccwwkswqumoe;
        wuwewiekmyaykkui:
        $this->igmaewykumgwoaoy("\x74\x79\160\x65", $sqeykgyoooqysmca);
        goto gesskeeseyysqsoy;
        ewoyiciioagecmog:
        $this->usuqmwksoeaayaig($aokagokqyuysuksm);
        goto ommymacyigwwcasy;
        eyaqaosgaywyuqie:
        if (!in_array($kqywgoqsmuswammk, ["\151\x6e\x70\x75\x74"])) {
            goto smeiqaqikagcaygu;
        }
        goto wuwewiekmyaykkui;
        iuoowggocqmwagoy:
        if (!in_array($kqywgoqsmuswammk, ["\x69\x6e\x70\x75\x74", "\x73\145\x6c\x65\x63\x74", "\x74\x65\x78\164\141\x72\145\141"])) {
            goto euikkkmgeyguuegw;
        }
        goto ewoyiciioagecmog;
        gesskeeseyysqsoy:
        smeiqaqikagcaygu:
        goto cmmwiusessuosyya;
        qkwkqasqqegigowa:
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
        $ywyosowkwiqceuau = self::mecgagckeuagggyw("\x67\x72\157\x75\160\137{$this->mwikyscisascoeea()}")->cgwacqwsiowmwqug()->sueyawuweyoqyeaq($siquossayskcwkea);
        return $this->mmuyuqussqkgkega($ywyosowkwiqceuau);
    }
    
    public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self
    {
        return $this->qcgocuceocquqcuw(self::NAME, $ymqmyyeuycgmigyo);
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        return $this->label ?: $this->waecsyqmwascmqoa("\160\x6c\x61\x63\x65\150\x6f\154\144\145\162");
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
        $this->igmaewykumgwoaoy("\x72\145\x71\x75\x69\x72\x65\x64", "\x72\145\x71\165\x69\162\x65\144");
        return $this;
    }
    
    public function oykaosmaegqwmoga() : self
    {
        $this->qigsyyqgewgskemg("\144\151\163\141\142\154\145\x64")->qcgocuceocquqcuw("\x64\151\x73\x61\x62\154\145\x64", '');
        return $this;
    }
    
    public function msmiagueogcsucgc() : bool
    {
        return (bool) $this->waecsyqmwascmqoa("\162\x65\x71\165\x69\162\145\x64");
    }
    
    public function qooeaookuemoqecm()
    {
        return $this->value;
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self
    {
        goto mkywokqkumqaoqii;
        mkywokqkumqaoqii:
        $this->value = $eqgoocgaqwqcimie;
        goto eeacoowouekmymqa;
        uuqqqsksywkiyuee:
        yuwywkmokyioumcy:
        goto eoiwmoguoeyggsoy;
        camakgemqqwiooom:
        wmakaeqmmmkiwugc:
        goto kqwaiauysqsamsom;
        eeacoowouekmymqa:
        if (!$eqgoocgaqwqcimie) {
            goto yuwywkmokyioumcy;
        }
        goto gugmqygmagggieqa;
        eoiwmoguoeyggsoy:
        return $this;
        goto suusiaeemawqgome;
        kqwaiauysqsamsom:
        omgwaqgqgksqeigq:
        goto uuqqqsksywkiyuee;
        gugmqygmagggieqa:
        switch ($this->qqimkcgcmeewwwei()) {
            case "\x69\x6e\x70\x75\164":
                $this->igmaewykumgwoaoy(self::VALUE, $eqgoocgaqwqcimie);
                goto omgwaqgqgksqeigq;
        }
        goto camakgemqqwiooom;
        suusiaeemawqgome:
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg("\x66\x6f\x72\x6d\55\x63\157\156\164\162\157\x6c\x2d\x73\x6d");
        return $this;
    }
    
    public function sqcsseccsaqsoyqy() : self
    {
        return $this->qigsyyqgewgskemg("\x64\x69\162\x65\143\164\151\157\156\x2d\154\164\x72")->igmaewykumgwoaoy("\163\164\171\154\145", "\x64\x69\x72\145\x63\x74\x69\157\156\72\154\x74\162\73")->igmaewykumgwoaoy("\144\x69\x72", "\x6c\x74\x72");
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : self
    {
        $this->default = $ggauoeuaesiymgee;
        return $this;
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto yuioeukgsusomcui;
        yuioeukgsusomcui:
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        goto kaykciokgqwoyqko;
        qioyimmcygqceoyc:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\154\x61\x62\x65\154", ["\146\157\x72" => $this->mwikyscisascoeea(), "\x63\x6c\x61\x73\163" => !$this->ougeeuegcgmwkcim() ? "\163\x72\x2d\x6f\156\x6c\171" : "\155\162\55\62\x20\x6d\171\x2d\141\x75\x74\157\x20\x74\x65\x78\x74\x2d\156\157\x77\x72\x61\x70"], true, $pkyyagewkiyckmwy) . $nsmgceoqaqogqmuw;
        goto qwkyeaecekmwewke;
        kaykciokgqwoyqko:
        if (!($pkyyagewkiyckmwy && in_array($this->qqimkcgcmeewwwei(), ["\x74\145\x78\164\141\x72\145\x61", "\x69\156\160\x75\164", "\x73\x65\154\145\143\164"]))) {
            goto gigkmkmacayscaww;
        }
        goto qioyimmcygqceoyc;
        ioqkkemusiegokqk:
        return parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto egggqwyceacmeamu;
        qwkyeaecekmwewke:
        gigkmkmacayscaww:
        goto ioqkkemusiegokqk;
        egggqwyceacmeamu:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto wmueqisaqsaqeqwo;
        qmocisicciagswmy:
        $nsmgceoqaqogqmuw .= ManipulateHTML::qgsekwygcgawekeq("\144\151\166", ["\x63\154\x61\163\x73" => "\x69\x6e\x76\x61\x6c\151\x64\x2d\x66\x65\x65\144\x62\141\143\153"], true, $uamcoiueqaamsqma);
        goto kyssogoocgmkmcim;
        igoegiuockuwuukc:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto osywimumacyuocou;
        kyssogoocgmkmcim:
        woumoysskimoeaki:
        goto igoegiuockuwuukc;
        wmueqisaqsaqeqwo:
        if (!($uamcoiueqaamsqma = $this->meuosmsqsqkqeoeu())) {
            goto woumoysskimoeaki;
        }
        goto qmocisicciagswmy;
        osywimumacyuocou:
    }
    
    public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self
    {
        return $this->qcgocuceocquqcuw("\164\x79\160\145", $sqeykgyoooqysmca);
    }
    
    public function soqmwakwiegiceeo($acakauekiwwamggq = '') : self
    {
        goto qycwmgioageosswe;
        myeqeyegsaaasiqc:
        return $this;
        goto gqimacywyeawgyaa;
        qycwmgioageosswe:
        $this->igmaewykumgwoaoy("\x6f\x6e\146\x6f\143\165\163", "\x24\50\x74\x68\151\x73\51\x2e\x63\x73\163\x28\x27\144\x69\162\x65\143\x74\x69\x6f\156\47\54\x27\x6c\x74\x72\47\x29\73\x24\50\x74\150\151\163\x29\56\x61\x74\x74\162\x28\47\160\x6c\141\143\x65\x68\157\154\144\x65\x72\x27\x2c\40\47{$acakauekiwwamggq}\47\x29\73");
        goto iseyowcwogamscuy;
        iseyowcwogamscuy:
        $this->igmaewykumgwoaoy("\157\156\142\154\x75\162", "\x69\x66\40\50\41\44\50\164\150\151\163\x29\56\x76\141\154\50\x29\51\x7b\x24\50\164\x68\x69\x73\51\x2e\x63\x73\163\50\47\144\151\x72\145\x63\164\151\x6f\x6e\47\x2c\47\162\x74\154\47\51\x3b\x24\50\x74\x68\151\x73\x29\x2e\x61\164\164\162\x28\47\x70\x6c\x61\x63\x65\150\x6f\x6c\144\x65\162\47\54\40\47{$this->waecsyqmwascmqoa("\x70\154\x61\143\x65\x68\157\x6c\144\x65\x72")}\47\x29\x7d");
        goto myeqeyegsaaasiqc;
        gqimacywyeawgyaa:
    }
    
    public function gysckqgokmciyqcg(?string $pkyyagewkiyckmwy) : self
    {
        return $this->qcgocuceocquqcuw("\141\162\x69\x61\55\x6c\x61\142\x65\x6c", $pkyyagewkiyckmwy);
    }
}
