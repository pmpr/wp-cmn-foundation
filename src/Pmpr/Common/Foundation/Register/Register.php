<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto imeuaeoyequyquyc;
        ymmgouuewwaieawy:
        $this->soeowumgcwuiaica(true);
        goto kwecemikiouwuiwi;
        kwecemikiouwuiwi:
        return $this;
        goto mqeacwmeqkoqmqko;
        imeuaeoyequyquyc:
        $this->showInMenu = $cyiwaggmwimigmcc;
        goto ymmgouuewwaieawy;
        mqeacwmeqkoqmqko:
    }
    
    public function egockcwgmeocqeqc()
    {
        return $this->showInMenu;
    }
    
    public function wsekoqmcyeuyegam() : self
    {
        goto tkeoceysmquieskw;
        gecymmgumgauakae:
        $this->ckwgqocyuaysggma("\146\145\145\144\163", true);
        goto ykoogomowmiquuem;
        ykoogomowmiquuem:
        $this->ckwgqocyuaysggma("\160\141\x67\x65\163", true);
        goto qaikucmemsqmosyg;
        qaikucmemsqmosyg:
        return $this->ckwgqocyuaysggma("\167\151\x74\x68\137\146\x72\157\156\x74", true);
        goto semmqugkwwqweawm;
        tkeoceysmquieskw:
        $this->zmqimouwawekqymc(true);
        goto gecymmgumgauakae;
        semmqugkwwqweawm:
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
        goto kaucouscgsawawys;
        ucsssaiqcemkkmkc:
        $this->ooeieggkeaaqggki($ioqywyyeioqywogw);
        goto yuoiuagyeoygsycm;
        yuoiuagyeoygsycm:
        return $this->swwukuywuokaeeoa($ioqywyyeioqywogw);
        goto cocuuoguowasocye;
        kaucouscgsawawys:
        $this->iimaygsyckkaemwo($ioqywyyeioqywogw);
        goto ucsssaiqcemkkmkc;
        cocuuoguowasocye:
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
        goto myggyowooawikgoi;
        iyuycauougyasiiq:
        return $this;
        goto giaamqkcsgokqgqm;
        myggyowooawikgoi:
        foreach ($iwkyyocymeukcceu as $uusmaiomayssaecw => $pkyyagewkiyckmwy) {
            $this->iwooyissgqockkka($uusmaiomayssaecw, $pkyyagewkiyckmwy);
            owswwyqyusisgwme:
        }
        goto iwwsukcmssaaeqoq;
        iwwsukcmssaaeqoq:
        qakcaquyeuguwues:
        goto iyuycauougyasiiq;
        giaamqkcsgokqgqm:
    }
    
    public function uikgwcuascgeissw(string $uusmaiomayssaecw) : ?string
    {
        return ManipulateArray::get($this->eoemoqciaweskqkk(), $uusmaiomayssaecw, '');
    }
    
    public function eoemoqciaweskqkk() : ?array
    {
        goto kksaeyuekaaessaa;
        sowgacwmiukqyequ:
        kqieuqgsocqgaesw:
        goto kkawsaququwoqkga;
        kksaeyuekaaessaa:
        if ($this->labels) {
            goto kqieuqgsocqgaesw;
        }
        goto yagmeysqkyagckyg;
        yagmeysqkyagckyg:
        $this->jsgkawekewookomk();
        goto sowgacwmiukqyequ;
        kkawsaququwoqkga:
        return $this->labels;
        goto kaeeaeaqemqkimki;
        kaeeaeaqemqkimki:
    }
    
    public function iqoguoscqueomqsk(array $sksmomeiauyqaomi) : self
    {
        goto wuiomwwygyismoke;
        qmaeagoqeukouayc:
        iaagogeaaawgsacg:
        goto giwoykisgksecowe;
        wuiomwwygyismoke:
        foreach ($sksmomeiauyqaomi as $uusmaiomayssaecw => $eogowigeyucaauig) {
            $this->ockgcoiccyiuuwue($uusmaiomayssaecw, $eogowigeyucaauig);
            uiyuqwmuyicmukgs:
        }
        goto qmaeagoqeukouayc;
        giwoykisgksecowe:
        return $this;
        goto awyakmgqyaksucso;
        awyakmgqyaksucso:
    }
    
    public function ggqekkkocygywmoy() : ?array
    {
        goto soigaomwwmwqqsqe;
        soigaomwwmwqqsqe:
        if ($this->capabilities) {
            goto xkqgegowecakaogy;
        }
        goto gkeegeyqgwcqsaqi;
        ukiquuoaawuemuwm:
        xkqgegowecakaogy:
        goto miimeciguswkagcm;
        gkeegeyqgwcqsaqi:
        $this->ockgcoiccyiuuwue("\x6d\x61\156\141\147\145\x5f\157\x70\164\x69\157\x6e\163");
        goto ukiquuoaawuemuwm;
        miimeciguswkagcm:
        return $this->capabilities;
        goto mkkwcsmomimsckmo;
        mkkwcsmomimsckmo:
    }
    
    public function gwaeeegmgggawiyi(string $uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->ggqekkkocygywmoy(), $uusmaiomayssaecw);
    }
    
    public function ockgcoiccyiuuwue(?string $uusmaiomayssaecw = null, string $eogowigeyucaauig = '') : self
    {
        goto aiqykgkokmqqocwg;
        igmogosqsaiksoya:
        goto iougwygwasqmesuw;
        goto wigyoouuiyaysasc;
        ywwmasggauwqgiys:
        $this->capabilities[$uusmaiomayssaecw] = $eogowigeyucaauig;
        goto waeeesmmsacwaaoa;
        muqokomgakwuiisc:
        return $this;
        goto heyuwyceiewkimiu;
        waeeesmmsacwaaoa:
        iougwygwasqmesuw:
        goto muqokomgakwuiisc;
        wigyoouuiyaysasc:
        yyoogmukueyocgeo:
        goto ywwmasggauwqgiys;
        kwgwaowiuagqockc:
        $this->capabilities[] = $eogowigeyucaauig;
        goto igmogosqsaiksoya;
        aiqykgkokmqqocwg:
        if ($uusmaiomayssaecw) {
            goto yyoogmukueyocgeo;
        }
        goto kwgwaowiuagqockc;
        heyuwyceiewkimiu:
    }
    
    public function ckwgqocyuaysggma(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto esuyscuayyikcwwu;
        coyiuicwequccqoy:
        $this->rewrite = [];
        goto wakyiiuceqggyyyu;
        mwmcmswsggukkcei:
        $this->rewrite[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto qeccuawaemcqssuk;
        qeccuawaemcqssuk:
        return $this;
        goto gksasoiwiaceowkg;
        esuyscuayyikcwwu:
        if (is_array($this->rewrite)) {
            goto ciiouaecyaoqacak;
        }
        goto coyiuicwequccqoy;
        wakyiiuceqggyyyu:
        ciiouaecyaoqacak:
        goto mwmcmswsggukkcei;
        gksasoiwiaceowkg:
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
        goto uecqkgmguskwausu;
        uecqkgmguskwausu:
        foreach ($yesgcwqgyogqwkum as $uusmaiomayssaecw => $squgkkgwywimowua) {
            $this->ckwgqocyuaysggma($uusmaiomayssaecw, $squgkkgwywimowua);
            miiiiqmymyqkkoos:
        }
        goto aasoskwecamqssmy;
        aasoskwecamqssmy:
        maemyookcuoiqmik:
        goto ggwmmgogwmqokkoq;
        ggwmmgogwmqokkoq:
        return $this;
        goto esaggsqoamgyguem;
        esaggsqoamgyguem:
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
        goto auegygmkkiqsgwsc;
        gosgauymqceykgek:
        $this->jsgkawekewookomk();
        goto eyqggcokeuakaskk;
        yqqyiokywmggkmke:
        osgawwyuaegkasms:
        goto gosgauymqceykgek;
        auegygmkkiqsgwsc:
        if ($this->kuggecgwaickowwu("\163\154\x75\147")) {
            goto osgawwyuaegkasms;
        }
        goto iqocscomgkciyiwe;
        iqocscomgkciyiwe:
        $this->ckwgqocyuaysggma("\163\154\165\147", $this->aakmagwggmkoiiyu());
        goto yqqyiokywmggkmke;
        eyqggcokeuakaskk:
    }
    public abstract function jsgkawekewookomk();
}
