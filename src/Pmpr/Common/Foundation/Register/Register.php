<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        uggeicmsysmmaqqc:
        return $this;
        goto qawueqwiyeiyecce;
        mcwswowewmqqckqw:
        $this->soeowumgcwuiaica(true);
        goto uggeicmsysmmaqqc;
        qawueqwiyeiyecce:
    }
    
    public function egockcwgmeocqeqc()
    {
        return $this->showInMenu;
    }
    
    public function wsekoqmcyeuyegam() : self
    {
        goto oumqmgawoewueoio;
        msouaocmygwukeos:
        $this->ckwgqocyuaysggma("\x66\x65\145\144\163", true);
        goto euyiicoiumuescuk;
        gyauoqayaysycwwa:
        return $this->ckwgqocyuaysggma("\x77\x69\x74\150\x5f\x66\x72\x6f\x6e\x74", true);
        goto kcgykyaakyymmgca;
        euyiicoiumuescuk:
        $this->ckwgqocyuaysggma("\x70\141\x67\145\x73", true);
        goto gyauoqayaysycwwa;
        oumqmgawoewueoio:
        $this->zmqimouwawekqymc(true);
        goto msouaocmygwukeos;
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
        ugkwawscyiogikmg:
        $this->ooeieggkeaaqggki($ioqywyyeioqywogw);
        goto ouggemmeccgmecei;
        ouggemmeccgmecei:
        return $this->swwukuywuokaeeoa($ioqywyyeioqywogw);
        goto sagesqcycossmmcy;
        agokgacocekqqaaw:
        $this->iimaygsyckkaemwo($ioqywyyeioqywogw);
        goto ugkwawscyiogikmg;
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
        ygyasaouaeomcook:
        foreach ($iwkyyocymeukcceu as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
            $this->iwooyissgqockkka($uusmaiomayssaecw, $pkyyagewkiyckmwy);
            gyeoaqyauigkuyuw:
        }
        goto kywsoesguwyeukuk;
        kywsoesguwyeukuk:
        kwkumyugkkscqsqa:
        goto yoyuemoqqmcamysy;
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
        gmiqeasocceqcmyy:
        $this->jsgkawekewookomk();
        goto oosmoaqgqegqmecm;
        eksiecgiomucusou:
        return $this->labels;
        goto gweewkicumqyakeo;
        oosmoaqgqegqmecm:
        ywqqcwwikuaqgswy:
        goto eksiecgiomucusou;
        gweewkicumqyakeo:
    }
    
    public function iqoguoscqueomqsk(array $sksmomeiauyqaomi) : self
    {
        goto eeawuswkssoumcqq;
        qwycyuqsagqcyeau:
        ceooomymweuccyke:
        goto wgagciiiyokkccaw;
        wgagciiiyokkccaw:
        return $this;
        goto swusasqsywoymauc;
        eeawuswkssoumcqq:
        foreach ($sksmomeiauyqaomi as $uusmaiomayssaecw => $eogowigeyucaauig) {
            $this->ockgcoiccyiuuwue($uusmaiomayssaecw, $eogowigeyucaauig);
            qsseaomwyuequyuc:
        }
        goto qwycyuqsagqcyeau;
        swusasqsywoymauc:
    }
    
    public function ggqekkkocygywmoy() : ?array
    {
        goto kgeouqmockmeqamy;
        muymgykqieiyymqq:
        $this->ockgcoiccyiuuwue("\155\141\x6e\141\147\145\x5f\x6f\160\164\x69\x6f\156\x73");
        goto caiggmogoqgosgka;
        caiggmogoqgosgka:
        yuqgckkmggeecmcu:
        goto mggwwmagesiaegsg;
        kgeouqmockmeqamy:
        if ($this->capabilities) {
            goto yuqgckkmggeecmcu;
        }
        goto muymgykqieiyymqq;
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
        omskesmswmwcyqog:
        if ($uusmaiomayssaecw) {
            goto mukmqcgqiyskioqg;
        }
        goto uiwwogwqcoyqgqws;
        lemqkucuseomiegm:
        goto qoywwuqkqwgkgomu;
        goto kysegkcsysgsocum;
        uukawameoimyycmi:
        $this->capabilities[$uusmaiomayssaecw] = $eogowigeyucaauig;
        goto mwuwcsuwecyqmyme;
        kysegkcsysgsocum:
        mukmqcgqiyskioqg:
        goto uukawameoimyycmi;
        mwuwcsuwecyqmyme:
        qoywwuqkqwgkgomu:
        goto kqoyicwkeiqacumi;
        uiwwogwqcoyqgqws:
        $this->capabilities[] = $eogowigeyucaauig;
        goto lemqkucuseomiegm;
        kqoyicwkeiqacumi:
        return $this;
        goto euayuoscsqgcwoco;
        euayuoscsqgcwoco:
    }
    
    public function ckwgqocyuaysggma(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto uuocckquiogqceuq;
        mssgmiumamgawcik:
        $this->rewrite = [];
        goto ausccuiqiucusomk;
        eccqqigoouugsysq:
        $this->rewrite[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto qooeamikmycgiyse;
        ausccuiqiucusomk:
        uommomyecokquyes:
        goto eccqqigoouugsysq;
        uuocckquiogqceuq:
        if (is_array($this->rewrite)) {
            goto uommomyecokquyes;
        }
        goto mssgmiumamgawcik;
        qooeamikmycgiyse:
        return $this;
        goto cggoissgmskoycqy;
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
        kqkwquycsmecsyoa:
        waasqesguuugkyki:
        goto eyweqiugyoewuqks;
        eyweqiugyoewuqks:
        return $this;
        goto ecgwiyooacwymoum;
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
        gyaowmgukagqyoeq:
        $this->ckwgqocyuaysggma("\x73\154\165\x67", $this->aakmagwggmkoiiyu());
        goto ucycmogwkmqoqycw;
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
        cqgimwmuwikgaguk:
    }
    public abstract function jsgkawekewookomk();
}
