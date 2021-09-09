<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Register;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Traits\ToArrayTrait;

abstract class Register
{
    use ToArrayTrait;
    
    protected $rewrite = true;
    
    protected $queryVar = true;
    
    protected ?string $name = '';
    
    protected $restBase = false;
    
    protected $showInMenu = null;
    
    protected ?array $labels = [];
    
    protected bool $public = false;
    
    protected bool $showUI = false;
    
    protected bool $_builtin = false;
    
    protected ?string $plural = '';
    
    protected ?string $singular = '';
    
    protected bool $showInRest = true;
    
    protected $restControllerClass = false;
    
    protected bool $hierarchical = false;
    
    protected ?array $capabilities = [];
    
    protected ?string $description = '';
    
    protected ?bool $showInNavMenus = null;
    
    protected bool $publiclyQueryable = false;
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self
    {
        $this->name = $ymqmyyeuycgmigyo;
        return $this;
    }
    
    public function qeeuwmmksmqiuywg() : ?string
    {
        return $this->plural;
    }
    
    public function muuwuqssqkaieqge(?string $kcumookcwskcyqak) : self
    {
        $this->plural = $kcumookcwskcyqak;
        return $this;
    }
    
    public function giiayuqckuiecosm() : ?string
    {
        return $this->singular;
    }
    
    public function guiaswksukmgageq(?string $sisssumicskyceeg) : self
    {
        $this->singular = $sisssumicskyceeg;
        return $this;
    }
    
    public function kaukkswwacssmugg(?bool $sycugcsamausokky) : void
    {
        $this->showInNavMenus = $sycugcsamausokky;
    }
    
    public function eosmogyiwwkyqyek(bool $wkscusiqqyeeyuqw) : self
    {
        $this->hierarchical = $wkscusiqqyeeyuqw;
        return $this;
    }
    
    public function aewcsqigycuaekym() : bool
    {
        return $this->hierarchical;
    }
    
    public function swwukuywuokaeeoa(bool $ewyaegmkqgqcyuiu) : self
    {
        $this->publiclyQueryable = $ewyaegmkqgqcyuiu;
        return $this;
    }
    
    public function uwaascqoguwkwiaw() : bool
    {
        return $this->showUI;
    }
    
    public function soeowumgcwuiaica(bool $ciooooeuokmogsaq) : self
    {
        $this->showUI = $ciooooeuokmogsaq;
        return $this;
    }
    
    public function wiskakymeaywyeuw($cyiwaggmwimigmcc) : self
    {
        goto uyycwsqcouisceqi;
        euisiqqsgwmegmem:
        return $this;
        goto soqgimommckkgiiw;
        sasqkeaucymqqyes:
        $this->soeowumgcwuiaica(true);
        goto euisiqqsgwmegmem;
        uyycwsqcouisceqi:
        $this->showInMenu = $cyiwaggmwimigmcc;
        goto sasqkeaucymqqyes;
        soqgimommckkgiiw:
    }
    
    public function egockcwgmeocqeqc()
    {
        return $this->showInMenu;
    }
    
    public function wsekoqmcyeuyegam() : self
    {
        goto uumcaooaockeeusm;
        uumcaooaockeeusm:
        $this->zmqimouwawekqymc(true);
        goto ouqimcasmucqeyyo;
        ouqimcasmucqeyyo:
        $this->ckwgqocyuaysggma("\146\145\145\x64\x73", true);
        goto ssiweiyoyasksgms;
        aiomowcyeiymassu:
        return $this->ckwgqocyuaysggma("\167\x69\164\x68\x5f\x66\x72\157\156\164", true);
        goto rsgiiamwiogywmos;
        ssiweiyoyasksgms:
        $this->ckwgqocyuaysggma("\x70\141\x67\x65\163", true);
        goto aiomowcyeiymassu;
        rsgiiamwiogywmos:
    }
    
    public function myysgyqcumekoueo() : self
    {
        return $this->zmqimouwawekqymc(false);
    }
    
    public function iimaygsyckkaemwo(bool $ogicwiwywaocosag) : self
    {
        $this->public = $ogicwiwywaocosag;
        return $this;
    }
    
    public function zmqimouwawekqymc($ioqywyyeioqywogw = true) : self
    {
        goto ecukycksiqeeyuoa;
        ecukycksiqeeyuoa:
        $this->iimaygsyckkaemwo($ioqywyyeioqywogw);
        goto ukwusskgsgkacmsa;
        ukwusskgsgkacmsa:
        $this->ooeieggkeaaqggki($ioqywyyeioqywogw);
        goto owmgcmumcuqawiik;
        owmgcmumcuqawiik:
        return $this->swwukuywuokaeeoa($ioqywyyeioqywogw);
        goto ocqsukugmwakoeka;
        ocqsukugmwakoeka:
    }
    
    public function gucwmccyimoagwcm(string $ukwokcuqauuosmoo) : self
    {
        $this->description = $ukwokcuqauuosmoo;
        return $this;
    }
    
    public function cekoogweeooasayu() : bool
    {
        return $this->public;
    }
    
    public function iwooyissgqockkka(string $uusmaiomayssaecw, string $eqgoocgaqwqcimie) : self
    {
        $this->labels[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $this;
    }
    
    public function aciuwyaykiaeaske(array $iwkyyocymeukcceu) : self
    {
        goto csykccgkakqmgock;
        gqymkgqmgmqkmuus:
        ckayiusouiaqkgsa:
        goto aoqykwgyygqwsmoc;
        aoqykwgyygqwsmoc:
        return $this;
        goto eggsakwewuussuwc;
        csykccgkakqmgock:
        foreach ($iwkyyocymeukcceu as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
            $this->iwooyissgqockkka($uusmaiomayssaecw, $pkyyagewkiyckmwy);
            wesuaykwwuyeeqkk:
        }
        goto gqymkgqmgmqkmuus;
        eggsakwewuussuwc:
    }
    
    public function uikgwcuascgeissw(string $uusmaiomayssaecw) : ?string
    {
        return ManipulateArray::get($this->eoemoqciaweskqkk(), $uusmaiomayssaecw, '');
    }
    
    public function eoemoqciaweskqkk() : ?array
    {
        goto qcigiiqacgoiemqa;
        umosyeioascwoyww:
        awoceaocmuugoawi:
        goto wqgmscukuimomwau;
        wqgmscukuimomwau:
        return $this->labels;
        goto gumoiomiwcueoaim;
        mucycmsamuamwakw:
        $this->jsgkawekewookomk();
        goto umosyeioascwoyww;
        qcigiiqacgoiemqa:
        if ($this->labels) {
            goto awoceaocmuugoawi;
        }
        goto mucycmsamuamwakw;
        gumoiomiwcueoaim:
    }
    
    public function iqoguoscqueomqsk(array $sksmomeiauyqaomi) : self
    {
        goto socgmqisawsmgkyi;
        eamcmmswicuegaso:
        return $this;
        goto qiqgekyeeqokiaai;
        jkumcawosiyygaey:
        cskaysiukqwwaiok:
        goto eamcmmswicuegaso;
        socgmqisawsmgkyi:
        foreach ($sksmomeiauyqaomi as $uusmaiomayssaecw => $eogowigeyucaauig) {
            $this->ockgcoiccyiuuwue($uusmaiomayssaecw, $eogowigeyucaauig);
            wugieaemocyyeaos:
        }
        goto jkumcawosiyygaey;
        qiqgekyeeqokiaai:
    }
    
    public function ggqekkkocygywmoy() : ?array
    {
        goto mqocmwqcoggwmiag;
        wueqcsuguccioeyo:
        $this->ockgcoiccyiuuwue("\x6d\141\x6e\x61\147\x65\x5f\x6f\160\x74\151\x6f\156\163");
        goto aoqgkyoegqssakuq;
        gaqyckqesooysusy:
        return $this->capabilities;
        goto ekmyaiqggooyuciu;
        mqocmwqcoggwmiag:
        if ($this->capabilities) {
            goto okaewmiweigkcmye;
        }
        goto wueqcsuguccioeyo;
        aoqgkyoegqssakuq:
        okaewmiweigkcmye:
        goto gaqyckqesooysusy;
        ekmyaiqggooyuciu:
    }
    
    public function gwaeeegmgggawiyi(string $uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->ggqekkkocygywmoy(), $uusmaiomayssaecw);
    }
    
    public function ockgcoiccyiuuwue(?string $uusmaiomayssaecw = null, string $eogowigeyucaauig = '') : self
    {
        goto giiycggyqyaakmsw;
        ssccmsacioyiqkgw:
        return $this;
        goto yicgcsiewokauegy;
        wckmescqueucsasq:
        goto wmswiyimwcsmqgew;
        goto kisikuaqoaeayiiq;
        yuiyqaywukauayoe:
        wmswiyimwcsmqgew:
        goto ssccmsacioyiqkgw;
        kisikuaqoaeayiiq:
        mqamcimuisqakyym:
        goto eymwskwgmiaigcwo;
        giiycggyqyaakmsw:
        if ($uusmaiomayssaecw) {
            goto mqamcimuisqakyym;
        }
        goto qmockiskiuyoekug;
        eymwskwgmiaigcwo:
        $this->capabilities[$uusmaiomayssaecw] = $eogowigeyucaauig;
        goto yuiyqaywukauayoe;
        qmockiskiuyoekug:
        $this->capabilities[] = $eogowigeyucaauig;
        goto wckmescqueucsasq;
        yicgcsiewokauegy:
    }
    
    public function ckwgqocyuaysggma(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto aikiqgkqagcwgqgw;
        wgogoicgkassusme:
        $this->rewrite[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto sekwgiesmgamusyc;
        sekwgiesmgamusyc:
        return $this;
        goto giqcweisosusycmy;
        eoeioguggcgccggg:
        $this->rewrite = [];
        goto amwcceeeewkecsmq;
        aikiqgkqagcwgqgw:
        if (is_array($this->rewrite)) {
            goto uowgmiscaeysqomk;
        }
        goto eoeioguggcgccggg;
        amwcceeeewkecsmq:
        uowgmiscaeysqomk:
        goto wgogoicgkassusme;
        giqcweisosusycmy:
    }
    
    public function wqmmmaeygqosciii()
    {
        return $this->rewrite;
    }
    
    public function kuggecgwaickowwu(string $uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->wqmmmaeygqosciii(), $uusmaiomayssaecw, null);
    }
    
    public function iosciegmiqwoaauk(array $yesgcwqgyogqwkum)
    {
        goto gscmiuqosuimoigq;
        gyiywuemaogacsoq:
        mwwggwmssgeaaagk:
        goto cqueukswyygmssqa;
        gscmiuqosuimoigq:
        foreach ($yesgcwqgyogqwkum as $uusmaiomayssaecw => $squgkkgwywimowua) {
            $this->ckwgqocyuaysggma($uusmaiomayssaecw, $squgkkgwywimowua);
            ywmysmegwksecsuy:
        }
        goto gyiywuemaogacsoq;
        cqueukswyygmssqa:
        return $this;
        goto ekakmkqymqsiccum;
        ekakmkqymqsiccum:
    }
    
    public function ooeieggkeaaqggki($emmugacswycqccku)
    {
        $this->queryVar = $emmugacswycqccku;
        return $this;
    }
    
    public function kkioqygoooqkgaok(bool $eqmuoqmkmeuwkeao)
    {
        $this->showInRest = $eqmuoqmkmeuwkeao;
        return $this;
    }
    
    public function aaomioeysokikemq() : ?bool
    {
        return $this->showInRest;
    }
    
    public function beuwymyyokugmqyq($wqqqeaseeukusmwc)
    {
        $this->restBase = $wqqqeaseeukusmwc;
        return $this;
    }
    
    public function swimamwaquqowaaq(bool $sqeeuuwcgyoesuqg) : self
    {
        $this->_builtin = $sqeeuuwcgyoesuqg;
        return $this;
    }
    
    public function sogsiwqoswoceqwg() : ?string
    {
        return $this->restControllerClass;
    }
    
    public function mmsigymicuckcewc(string $comiiykswskquwmg) : self
    {
        $this->restControllerClass = $comiiykswskquwmg;
        return $this;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto kuqeasegkegcgakq;
        kuqeasegkegcgakq:
        if ($this->kuggecgwaickowwu("\x73\154\165\147")) {
            goto ygkqsaeqygyqegym;
        }
        goto usyaigaqkosuymko;
        usyaigaqkosuymko:
        $this->ckwgqocyuaysggma("\x73\154\165\x67", $this->aakmagwggmkoiiyu());
        goto qmqkqeuwmyysogke;
        qmqkqeuwmyysogke:
        ygkqsaeqygyqegym:
        goto cccgaqykomecsysa;
        cccgaqykomecsysa:
        $this->jsgkawekewookomk();
        goto omqgyiwasikuqsqs;
        omqgyiwasikuqsqs:
    }
    public abstract function jsgkawekewookomk();
}
