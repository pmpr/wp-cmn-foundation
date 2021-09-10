<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto woomeusquuuqekig;
        woomeusquuuqekig:
        $this->showInMenu = $cyiwaggmwimigmcc;
        goto mcwswowewmqqckqw;
        mcwswowewmqqckqw:
        $this->soeowumgcwuiaica(true);
        goto uggeicmsysmmaqqc;
        uggeicmsysmmaqqc:
        return $this;
        goto qawueqwiyeiyecce;
        qawueqwiyeiyecce:
    }
    
    public function egockcwgmeocqeqc()
    {
        return $this->showInMenu;
    }
    
    public function wsekoqmcyeuyegam() : self
    {
        goto oumqmgawoewueoio;
        euyiicoiumuescuk:
        $this->ckwgqocyuaysggma("\160\141\147\x65\x73", true);
        goto gyauoqayaysycwwa;
        msouaocmygwukeos:
        $this->ckwgqocyuaysggma("\146\145\145\x64\163", true);
        goto euyiicoiumuescuk;
        oumqmgawoewueoio:
        $this->zmqimouwawekqymc(true);
        goto msouaocmygwukeos;
        gyauoqayaysycwwa:
        return $this->ckwgqocyuaysggma("\167\151\164\150\137\146\162\157\156\x74", true);
        goto kcgykyaakyymmgca;
        kcgykyaakyymmgca:
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
        goto agokgacocekqqaaw;
        ouggemmeccgmecei:
        return $this->swwukuywuokaeeoa($ioqywyyeioqywogw);
        goto sagesqcycossmmcy;
        agokgacocekqqaaw:
        $this->iimaygsyckkaemwo($ioqywyyeioqywogw);
        goto ugkwawscyiogikmg;
        ugkwawscyiogikmg:
        $this->ooeieggkeaaqggki($ioqywyyeioqywogw);
        goto ouggemmeccgmecei;
        sagesqcycossmmcy:
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
        goto ygyasaouaeomcook;
        yoyuemoqqmcamysy:
        return $this;
        goto iaaakumgaeogkyau;
        kywsoesguwyeukuk:
        kwkumyugkkscqsqa:
        goto yoyuemoqqmcamysy;
        ygyasaouaeomcook:
        foreach ($iwkyyocymeukcceu as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
            $this->iwooyissgqockkka($uusmaiomayssaecw, $pkyyagewkiyckmwy);
            gyeoaqyauigkuyuw:
        }
        goto kywsoesguwyeukuk;
        iaaakumgaeogkyau:
    }
    
    public function uikgwcuascgeissw(string $uusmaiomayssaecw) : ?string
    {
        return ManipulateArray::get($this->eoemoqciaweskqkk(), $uusmaiomayssaecw, '');
    }
    
    public function eoemoqciaweskqkk() : ?array
    {
        goto qwckkegewuioawok;
        qwckkegewuioawok:
        if ($this->labels) {
            goto ywqqcwwikuaqgswy;
        }
        goto gmiqeasocceqcmyy;
        eksiecgiomucusou:
        return $this->labels;
        goto gweewkicumqyakeo;
        gmiqeasocceqcmyy:
        $this->jsgkawekewookomk();
        goto oosmoaqgqegqmecm;
        oosmoaqgqegqmecm:
        ywqqcwwikuaqgswy:
        goto eksiecgiomucusou;
        gweewkicumqyakeo:
    }
    
    public function iqoguoscqueomqsk(array $sksmomeiauyqaomi) : self
    {
        goto eeawuswkssoumcqq;
        wgagciiiyokkccaw:
        return $this;
        goto swusasqsywoymauc;
        eeawuswkssoumcqq:
        foreach ($sksmomeiauyqaomi as $uusmaiomayssaecw => $eogowigeyucaauig) {
            $this->ockgcoiccyiuuwue($uusmaiomayssaecw, $eogowigeyucaauig);
            qsseaomwyuequyuc:
        }
        goto qwycyuqsagqcyeau;
        qwycyuqsagqcyeau:
        ceooomymweuccyke:
        goto wgagciiiyokkccaw;
        swusasqsywoymauc:
    }
    
    public function ggqekkkocygywmoy() : ?array
    {
        goto kgeouqmockmeqamy;
        muymgykqieiyymqq:
        $this->ockgcoiccyiuuwue("\x6d\141\x6e\141\x67\145\x5f\x6f\160\164\151\x6f\156\163");
        goto caiggmogoqgosgka;
        kgeouqmockmeqamy:
        if ($this->capabilities) {
            goto yuqgckkmggeecmcu;
        }
        goto muymgykqieiyymqq;
        caiggmogoqgosgka:
        yuqgckkmggeecmcu:
        goto mggwwmagesiaegsg;
        mggwwmagesiaegsg:
        return $this->capabilities;
        goto aciwauiwiuckcckm;
        aciwauiwiuckcckm:
    }
    
    public function gwaeeegmgggawiyi(string $uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->ggqekkkocygywmoy(), $uusmaiomayssaecw);
    }
    
    public function ockgcoiccyiuuwue(?string $uusmaiomayssaecw = null, string $eogowigeyucaauig = '') : self
    {
        goto omskesmswmwcyqog;
        kysegkcsysgsocum:
        mukmqcgqiyskioqg:
        goto uukawameoimyycmi;
        uukawameoimyycmi:
        $this->capabilities[$uusmaiomayssaecw] = $eogowigeyucaauig;
        goto mwuwcsuwecyqmyme;
        mwuwcsuwecyqmyme:
        qoywwuqkqwgkgomu:
        goto kqoyicwkeiqacumi;
        uiwwogwqcoyqgqws:
        $this->capabilities[] = $eogowigeyucaauig;
        goto lemqkucuseomiegm;
        lemqkucuseomiegm:
        goto qoywwuqkqwgkgomu;
        goto kysegkcsysgsocum;
        kqoyicwkeiqacumi:
        return $this;
        goto euayuoscsqgcwoco;
        omskesmswmwcyqog:
        if ($uusmaiomayssaecw) {
            goto mukmqcgqiyskioqg;
        }
        goto uiwwogwqcoyqgqws;
        euayuoscsqgcwoco:
    }
    
    public function ckwgqocyuaysggma(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto uuocckquiogqceuq;
        eccqqigoouugsysq:
        $this->rewrite[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto qooeamikmycgiyse;
        uuocckquiogqceuq:
        if (is_array($this->rewrite)) {
            goto uommomyecokquyes;
        }
        goto mssgmiumamgawcik;
        mssgmiumamgawcik:
        $this->rewrite = [];
        goto ausccuiqiucusomk;
        qooeamikmycgiyse:
        return $this;
        goto cggoissgmskoycqy;
        ausccuiqiucusomk:
        uommomyecokquyes:
        goto eccqqigoouugsysq;
        cggoissgmskoycqy:
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
        goto sycmggisamuqcmqm;
        eyweqiugyoewuqks:
        return $this;
        goto ecgwiyooacwymoum;
        kqkwquycsmecsyoa:
        waasqesguuugkyki:
        goto eyweqiugyoewuqks;
        sycmggisamuqcmqm:
        foreach ($yesgcwqgyogqwkum as $uusmaiomayssaecw => $squgkkgwywimowua) {
            $this->ckwgqocyuaysggma($uusmaiomayssaecw, $squgkkgwywimowua);
            mksiaogycqumieig:
        }
        goto kqkwquycsmecsyoa;
        ecgwiyooacwymoum:
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
        goto wqgwguwaoomgaiik;
        maeqicokuuskkcac:
        $this->jsgkawekewookomk();
        goto cqgimwmuwikgaguk;
        ucycmogwkmqoqycw:
        oigccucsmoiegsic:
        goto maeqicokuuskkcac;
        wqgwguwaoomgaiik:
        if ($this->kuggecgwaickowwu("\x73\154\165\147")) {
            goto oigccucsmoiegsic;
        }
        goto gyaowmgukagqyoeq;
        gyaowmgukagqyoeq:
        $this->ckwgqocyuaysggma("\163\154\165\x67", $this->aakmagwggmkoiiyu());
        goto ucycmogwkmqoqycw;
        cqgimwmuwikgaguk:
    }
    public abstract function jsgkawekewookomk();
}
