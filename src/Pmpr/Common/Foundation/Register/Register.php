<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        mcwswowewmqqckqw:
        $this->soeowumgcwuiaica(true);
        goto uggeicmsysmmaqqc;
        uggeicmsysmmaqqc:
        return $this;
        goto qawueqwiyeiyecce;
        woomeusquuuqekig:
        $this->showInMenu = $cyiwaggmwimigmcc;
        goto mcwswowewmqqckqw;
        qawueqwiyeiyecce:
    }
    
    public function egockcwgmeocqeqc()
    {
        return $this->showInMenu;
    }
    
    public function wsekoqmcyeuyegam() : self
    {
        goto oumqmgawoewueoio;
        gyauoqayaysycwwa:
        return $this->ckwgqocyuaysggma("\x77\151\164\150\x5f\146\162\157\156\x74", true);
        goto kcgykyaakyymmgca;
        euyiicoiumuescuk:
        $this->ckwgqocyuaysggma("\x70\141\x67\145\163", true);
        goto gyauoqayaysycwwa;
        oumqmgawoewueoio:
        $this->zmqimouwawekqymc(true);
        goto msouaocmygwukeos;
        msouaocmygwukeos:
        $this->ckwgqocyuaysggma("\x66\x65\145\x64\163", true);
        goto euyiicoiumuescuk;
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
        agokgacocekqqaaw:
        $this->iimaygsyckkaemwo($ioqywyyeioqywogw);
        goto ugkwawscyiogikmg;
        ouggemmeccgmecei:
        return $this->swwukuywuokaeeoa($ioqywyyeioqywogw);
        goto sagesqcycossmmcy;
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
        kywsoesguwyeukuk:
        kwkumyugkkscqsqa:
        goto yoyuemoqqmcamysy;
        yoyuemoqqmcamysy:
        return $this;
        goto iaaakumgaeogkyau;
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
        oosmoaqgqegqmecm:
        ywqqcwwikuaqgswy:
        goto eksiecgiomucusou;
        gmiqeasocceqcmyy:
        $this->jsgkawekewookomk();
        goto oosmoaqgqegqmecm;
        gweewkicumqyakeo:
    }
    
    public function iqoguoscqueomqsk(array $sksmomeiauyqaomi) : self
    {
        goto eeawuswkssoumcqq;
        qwycyuqsagqcyeau:
        ceooomymweuccyke:
        goto wgagciiiyokkccaw;
        eeawuswkssoumcqq:
        foreach ($sksmomeiauyqaomi as $uusmaiomayssaecw => $eogowigeyucaauig) {
            $this->ockgcoiccyiuuwue($uusmaiomayssaecw, $eogowigeyucaauig);
            qsseaomwyuequyuc:
        }
        goto qwycyuqsagqcyeau;
        wgagciiiyokkccaw:
        return $this;
        goto swusasqsywoymauc;
        swusasqsywoymauc:
    }
    
    public function ggqekkkocygywmoy() : ?array
    {
        goto kgeouqmockmeqamy;
        kgeouqmockmeqamy:
        if ($this->capabilities) {
            goto yuqgckkmggeecmcu;
        }
        goto muymgykqieiyymqq;
        mggwwmagesiaegsg:
        return $this->capabilities;
        goto aciwauiwiuckcckm;
        caiggmogoqgosgka:
        yuqgckkmggeecmcu:
        goto mggwwmagesiaegsg;
        muymgykqieiyymqq:
        $this->ockgcoiccyiuuwue("\155\141\156\141\147\145\137\x6f\x70\x74\151\157\x6e\x73");
        goto caiggmogoqgosgka;
        aciwauiwiuckcckm:
    }
    
    public function gwaeeegmgggawiyi(string $uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->ggqekkkocygywmoy(), $uusmaiomayssaecw);
    }
    
    public function ockgcoiccyiuuwue(?string $uusmaiomayssaecw = null, string $eogowigeyucaauig = '') : self
    {
        goto omskesmswmwcyqog;
        mwuwcsuwecyqmyme:
        qoywwuqkqwgkgomu:
        goto kqoyicwkeiqacumi;
        uukawameoimyycmi:
        $this->capabilities[$uusmaiomayssaecw] = $eogowigeyucaauig;
        goto mwuwcsuwecyqmyme;
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
        kysegkcsysgsocum:
        mukmqcgqiyskioqg:
        goto uukawameoimyycmi;
        euayuoscsqgcwoco:
    }
    
    public function ckwgqocyuaysggma(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto uuocckquiogqceuq;
        mssgmiumamgawcik:
        $this->rewrite = [];
        goto ausccuiqiucusomk;
        uuocckquiogqceuq:
        if (is_array($this->rewrite)) {
            goto uommomyecokquyes;
        }
        goto mssgmiumamgawcik;
        eccqqigoouugsysq:
        $this->rewrite[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto qooeamikmycgiyse;
        ausccuiqiucusomk:
        uommomyecokquyes:
        goto eccqqigoouugsysq;
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
        sycmggisamuqcmqm:
        foreach ($yesgcwqgyogqwkum as $uusmaiomayssaecw => $squgkkgwywimowua) {
            $this->ckwgqocyuaysggma($uusmaiomayssaecw, $squgkkgwywimowua);
            mksiaogycqumieig:
        }
        goto kqkwquycsmecsyoa;
        eyweqiugyoewuqks:
        return $this;
        goto ecgwiyooacwymoum;
        kqkwquycsmecsyoa:
        waasqesguuugkyki:
        goto eyweqiugyoewuqks;
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
        ucycmogwkmqoqycw:
        oigccucsmoiegsic:
        goto maeqicokuuskkcac;
        wqgwguwaoomgaiik:
        if ($this->kuggecgwaickowwu("\163\x6c\165\x67")) {
            goto oigccucsmoiegsic;
        }
        goto gyaowmgukagqyoeq;
        gyaowmgukagqyoeq:
        $this->ckwgqocyuaysggma("\163\x6c\165\147", $this->aakmagwggmkoiiyu());
        goto ucycmogwkmqoqycw;
        maeqicokuuskkcac:
        $this->jsgkawekewookomk();
        goto cqgimwmuwikgaguk;
        cqgimwmuwikgaguk:
    }
    public abstract function jsgkawekewookomk();
}
