<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto mqeacwmeqkoqmqko;
        gecymmgumgauakae:
        return $this;
        goto ykoogomowmiquuem;
        mqeacwmeqkoqmqko:
        $this->showInMenu = $cyiwaggmwimigmcc;
        goto tkeoceysmquieskw;
        tkeoceysmquieskw:
        $this->soeowumgcwuiaica(true);
        goto gecymmgumgauakae;
        ykoogomowmiquuem:
    }
    
    public function egockcwgmeocqeqc()
    {
        return $this->showInMenu;
    }
    
    public function wsekoqmcyeuyegam() : self
    {
        goto qaikucmemsqmosyg;
        qaikucmemsqmosyg:
        $this->zmqimouwawekqymc(true);
        goto semmqugkwwqweawm;
        semmqugkwwqweawm:
        $this->ckwgqocyuaysggma("\x66\145\x65\x64\x73", true);
        goto kaucouscgsawawys;
        kaucouscgsawawys:
        $this->ckwgqocyuaysggma("\x70\141\x67\x65\163", true);
        goto ucsssaiqcemkkmkc;
        ucsssaiqcemkkmkc:
        return $this->ckwgqocyuaysggma("\167\x69\x74\x68\x5f\x66\162\x6f\156\x74", true);
        goto yuoiuagyeoygsycm;
        yuoiuagyeoygsycm:
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
        goto cocuuoguowasocye;
        owswwyqyusisgwme:
        return $this->swwukuywuokaeeoa($ioqywyyeioqywogw);
        goto myggyowooawikgoi;
        cocuuoguowasocye:
        $this->iimaygsyckkaemwo($ioqywyyeioqywogw);
        goto qakcaquyeuguwues;
        qakcaquyeuguwues:
        $this->ooeieggkeaaqggki($ioqywyyeioqywogw);
        goto owswwyqyusisgwme;
        myggyowooawikgoi:
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
        goto giaamqkcsgokqgqm;
        kqieuqgsocqgaesw:
        iwwsukcmssaaeqoq:
        goto kksaeyuekaaessaa;
        kksaeyuekaaessaa:
        return $this;
        goto yagmeysqkyagckyg;
        giaamqkcsgokqgqm:
        foreach ($iwkyyocymeukcceu as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
            $this->iwooyissgqockkka($uusmaiomayssaecw, $pkyyagewkiyckmwy);
            iyuycauougyasiiq:
        }
        goto kqieuqgsocqgaesw;
        yagmeysqkyagckyg:
    }
    
    public function uikgwcuascgeissw(string $uusmaiomayssaecw) : ?string
    {
        return ManipulateArray::get($this->eoemoqciaweskqkk(), $uusmaiomayssaecw, '');
    }
    
    public function eoemoqciaweskqkk() : ?array
    {
        goto kkawsaququwoqkga;
        kkawsaququwoqkga:
        if ($this->labels) {
            goto sowgacwmiukqyequ;
        }
        goto kaeeaeaqemqkimki;
        iaagogeaaawgsacg:
        sowgacwmiukqyequ:
        goto uiyuqwmuyicmukgs;
        kaeeaeaqemqkimki:
        $this->jsgkawekewookomk();
        goto iaagogeaaawgsacg;
        uiyuqwmuyicmukgs:
        return $this->labels;
        goto wuiomwwygyismoke;
        wuiomwwygyismoke:
    }
    
    public function iqoguoscqueomqsk(array $sksmomeiauyqaomi) : self
    {
        goto awyakmgqyaksucso;
        soigaomwwmwqqsqe:
        return $this;
        goto gkeegeyqgwcqsaqi;
        awyakmgqyaksucso:
        foreach ($sksmomeiauyqaomi as $uusmaiomayssaecw => $eogowigeyucaauig) {
            $this->ockgcoiccyiuuwue($uusmaiomayssaecw, $eogowigeyucaauig);
            giwoykisgksecowe:
        }
        goto xkqgegowecakaogy;
        xkqgegowecakaogy:
        qmaeagoqeukouayc:
        goto soigaomwwmwqqsqe;
        gkeegeyqgwcqsaqi:
    }
    
    public function ggqekkkocygywmoy() : ?array
    {
        goto miimeciguswkagcm;
        iougwygwasqmesuw:
        return $this->capabilities;
        goto aiqykgkokmqqocwg;
        miimeciguswkagcm:
        if ($this->capabilities) {
            goto ukiquuoaawuemuwm;
        }
        goto mkkwcsmomimsckmo;
        mkkwcsmomimsckmo:
        $this->ockgcoiccyiuuwue("\155\141\x6e\141\147\x65\137\157\x70\x74\x69\x6f\156\163");
        goto yyoogmukueyocgeo;
        yyoogmukueyocgeo:
        ukiquuoaawuemuwm:
        goto iougwygwasqmesuw;
        aiqykgkokmqqocwg:
    }
    
    public function gwaeeegmgggawiyi(string $uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->ggqekkkocygywmoy(), $uusmaiomayssaecw);
    }
    
    public function ockgcoiccyiuuwue(?string $uusmaiomayssaecw = null, string $eogowigeyucaauig = '') : self
    {
        goto wigyoouuiyaysasc;
        muqokomgakwuiisc:
        kwgwaowiuagqockc:
        goto heyuwyceiewkimiu;
        heyuwyceiewkimiu:
        $this->capabilities[$uusmaiomayssaecw] = $eogowigeyucaauig;
        goto ciiouaecyaoqacak;
        ywwmasggauwqgiys:
        $this->capabilities[] = $eogowigeyucaauig;
        goto waeeesmmsacwaaoa;
        esuyscuayyikcwwu:
        return $this;
        goto coyiuicwequccqoy;
        ciiouaecyaoqacak:
        igmogosqsaiksoya:
        goto esuyscuayyikcwwu;
        wigyoouuiyaysasc:
        if ($uusmaiomayssaecw) {
            goto kwgwaowiuagqockc;
        }
        goto ywwmasggauwqgiys;
        waeeesmmsacwaaoa:
        goto igmogosqsaiksoya;
        goto muqokomgakwuiisc;
        coyiuicwequccqoy:
    }
    
    public function ckwgqocyuaysggma(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto mwmcmswsggukkcei;
        qeccuawaemcqssuk:
        $this->rewrite = [];
        goto gksasoiwiaceowkg;
        gksasoiwiaceowkg:
        wakyiiuceqggyyyu:
        goto maemyookcuoiqmik;
        miiiiqmymyqkkoos:
        return $this;
        goto uecqkgmguskwausu;
        maemyookcuoiqmik:
        $this->rewrite[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto miiiiqmymyqkkoos;
        mwmcmswsggukkcei:
        if (is_array($this->rewrite)) {
            goto wakyiiuceqggyyyu;
        }
        goto qeccuawaemcqssuk;
        uecqkgmguskwausu:
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
        goto esaggsqoamgyguem;
        osgawwyuaegkasms:
        aasoskwecamqssmy:
        goto auegygmkkiqsgwsc;
        auegygmkkiqsgwsc:
        return $this;
        goto iqocscomgkciyiwe;
        esaggsqoamgyguem:
        foreach ($yesgcwqgyogqwkum as $uusmaiomayssaecw => $squgkkgwywimowua) {
            $this->ckwgqocyuaysggma($uusmaiomayssaecw, $squgkkgwywimowua);
            ggwmmgogwmqokkoq:
        }
        goto osgawwyuaegkasms;
        iqocscomgkciyiwe:
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
        goto gosgauymqceykgek;
        uqskcceawegkiakk:
        yqqyiokywmggkmke:
        goto uysygigskiiwsckq;
        eyqggcokeuakaskk:
        $this->ckwgqocyuaysggma("\163\154\x75\147", $this->aakmagwggmkoiiyu());
        goto uqskcceawegkiakk;
        uysygigskiiwsckq:
        $this->jsgkawekewookomk();
        goto woomeusquuuqekig;
        gosgauymqceykgek:
        if ($this->kuggecgwaickowwu("\x73\154\165\x67")) {
            goto yqqyiokywmggkmke;
        }
        goto eyqggcokeuakaskk;
        woomeusquuuqekig:
    }
    public abstract function jsgkawekewookomk();
}
