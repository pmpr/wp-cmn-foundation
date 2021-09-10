<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Register;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class RegisterPost extends Register
{
    
    protected ?array $supports = [];
    
    protected bool $canExport = true;
    
    protected ?array $taxonomies = [];
    
    protected ?string $menuIcon = null;
    
    protected ?bool $mapMetaCap = null;
    
    protected bool $hasArchive = false;
    
    protected $registerMetaBoxCb = null;
    
    protected ?int $menuPosition = null;
    
    protected ?string $mainTaxonomy = '';
    
    protected ?bool $showInAdminBar = null;
    
    protected ?bool $deleteWithUser = null;
    
    protected ?string $capabilityType = "\x70\157\x73\164";
    
    protected ?bool $excludeFromSearch = null;
    
    protected string $_editLink = "\160\157\163\164\56\x70\x68\x70\77\x70\157\163\x74\x3d\45\x64";
    
    public function jsgkawekewookomk() : self
    {
        goto ywwmasggauwqgiys;
        waeeesmmsacwaaoa:
        $sisssumicskyceeg = $this->giiayuqckuiecosm();
        goto muqokomgakwuiisc;
        ywwmasggauwqgiys:
        $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg();
        goto waeeesmmsacwaaoa;
        muqokomgakwuiisc:
        $this->labels = ["\x6e\x61\x6d\x65" => _x($kcumookcwskcyqak, "\x70\157\163\x74\40\x74\171\160\x65\40\x67\145\x6e\145\162\141\x6c\x20\x6e\141\155\x65", PR__CMN__FOUNDATION), "\141\144\x64\x5f\156\145\167" => sprintf(__("\x41\x64\x64\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\141\162\x63\x68\x69\166\145\163" => sprintf(__("\x25\x73\x20\x61\x72\143\150\x69\166\145\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x6e\x65\x77\137\151\164\x65\x6d" => sprintf(__("\x4e\x65\167\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\145\144\151\x74\x5f\x69\164\145\x6d" => sprintf(__("\x45\144\x69\x74\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\155\x65\x6e\165\x5f\156\141\155\145" => _x($kcumookcwskcyqak, "\141\144\155\151\x6e\x20\x6d\x65\x6e\x75", PR__CMN__FOUNDATION), "\166\151\145\x77\x5f\x69\164\x65\x6d" => sprintf(__("\x56\x69\x65\167\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x61\154\154\x5f\x69\x74\x65\x6d\x73" => sprintf(__("\101\x6c\x6c\40\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x6e\x6f\x74\137\146\x6f\x75\x6e\144" => sprintf(__("\116\157\40\x25\163\40\146\x6f\x75\156\144\56", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\141\x74\164\x72\x69\142\165\x74\x65\x73" => sprintf(__("\45\163\40\141\164\x74\162\151\142\165\164\x65\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\166\x69\145\x77\x5f\151\164\x65\155\x73" => sprintf(__("\x56\151\x65\167\40\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x69\164\145\155\163\137\154\151\163\164" => sprintf(__("\x25\163\40\x6c\151\x73\164", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x75\x70\144\141\164\x65\x5f\x69\164\145\155" => sprintf(__("\125\x70\x64\141\164\145\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x72\145\x6d\x6f\166\145\x5f\151\164\145\155" => sprintf(__("\x52\x65\155\x6f\x76\x65\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\145\141\x72\x63\x68\x5f\151\164\x65\x6d\163" => sprintf(__("\x53\145\141\162\x63\x68\40\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\141\144\144\x5f\x6e\x65\x77\x5f\x69\164\x65\155" => sprintf(__("\101\x64\x64\x20\x4e\x65\x77\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x69\x74\x65\x6d\137\165\x70\144\x61\164\x65\144" => sprintf(__("\x25\163\40\x75\160\144\x61\164\145\144", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\x69\156\x67\x75\x6c\x61\162\137\x6e\141\155\145" => _x($sisssumicskyceeg, "\x70\x6f\x73\164\x20\x74\x79\x70\x65\x20\163\151\156\x67\165\x6c\x61\162\x20\156\141\155\x65", PR__CMN__FOUNDATION), "\x70\154\165\162\141\x6c\x5f\156\141\x6d\145" => _x($kcumookcwskcyqak, "\160\157\163\x74\x20\x74\x79\x70\145\40\160\154\165\x72\x61\x6c\40\x6e\141\155\145", PR__CMN__FOUNDATION), "\151\164\145\155\137\x70\165\x62\154\151\x73\150\x65\x64" => sprintf(__("\x25\x73\40\x70\x75\x62\154\151\x73\150\145\144", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x69\x74\x65\x6d\x5f\163\x63\x68\x65\144\x75\154\145\144" => sprintf(__("\x25\x73\40\x73\143\150\145\x64\165\154\145\x64", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x66\145\x61\164\x75\x72\x65\144\x5f\x69\155\x61\x67\145" => sprintf(__("\45\x73\x20\151\155\x61\147\145", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\156\x61\155\145\137\x61\x64\155\x69\156\x5f\142\x61\x72" => _x($sisssumicskyceeg, "\x61\x64\x64\x20\156\145\x77\40\x6f\156\40\141\144\155\x69\x6e\40\x62\141\162", PR__CMN__FOUNDATION), "\151\x6e\x73\x65\162\x74\137\151\156\164\x6f\x5f\x69\x74\x65\x6d" => sprintf(__("\120\165\x74\40\151\156\x74\157\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\146\x69\x6c\164\x65\x72\137\151\x74\x65\x6d\x73\x5f\154\151\x73\x74" => sprintf(__("\106\x69\x6c\164\145\162\40\x25\163\x20\x6c\x69\x73\164", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x70\x61\162\145\x6e\x74\137\151\x74\x65\x6d\x5f\x63\x6f\154\x6f\x6e" => sprintf(__("\120\141\x72\x65\x6e\x74\40\45\163\72", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x73\145\164\x5f\146\145\141\x74\x75\162\x65\x64\137\151\155\x61\147\145" => sprintf(__("\x53\x65\x74\x20\45\x73\40\x69\155\141\x67\x65", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x6e\x6f\164\137\x66\x6f\x75\x6e\144\137\x69\156\x5f\164\x72\x61\x73\x68" => sprintf(__("\116\x6f\x20\x25\163\x20\146\x6f\x75\156\144\40\x69\x6e\40\x54\162\141\x73\150\x2e", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\165\163\145\x5f\x66\145\141\164\x75\x72\x65\x64\x5f\151\x6d\x61\x67\145" => sprintf(__("\125\x73\x65\x20\x61\163\x20\x25\163\x20\x69\x6d\141\147\x65", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x75\x70\x6c\157\x61\144\145\x64\137\164\x6f\137\x74\150\151\163\x5f\x69\164\x65\155" => sprintf(__("\x55\160\154\157\141\x64\145\x64\40\164\157\40\164\x68\x69\x73\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\162\145\x6d\157\166\145\x5f\146\x65\x61\164\165\x72\x65\x64\137\x69\x6d\141\x67\145" => sprintf(__("\122\145\155\x6f\166\145\x20\x25\163\40\151\x6d\x61\147\x65", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x69\x74\145\155\x73\x5f\154\x69\163\x74\x5f\x6e\141\166\x69\147\x61\x74\x69\x6f\156" => sprintf(__("\45\x73\x20\160\x61\x67\151\x6e\x61\164\151\x6f\156", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\151\164\x65\x6d\x5f\162\145\x76\x65\162\x74\x65\144\137\x74\157\x5f\x64\162\141\146\x74" => sprintf(__("\x25\x73\x20\x72\x65\166\x65\x72\x74\x65\x64\40\164\157\x20\x64\x72\x61\x66\164", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x69\164\x65\155\x5f\160\165\142\154\x69\163\150\x65\144\x5f\x70\x72\151\x76\141\x74\145\x6c\x79" => sprintf(__("\x25\x73\40\160\x75\x62\154\151\163\x68\x65\x64\x20\x70\162\x69\166\x61\164\145\154\171", PR__CMN__FOUNDATION), $sisssumicskyceeg)];
        goto heyuwyceiewkimiu;
        heyuwyceiewkimiu:
        return $this;
        goto ciiouaecyaoqacak;
        ciiouaecyaoqacak:
    }
    
    public function zmqimouwawekqymc($ioqywyyeioqywogw = true) : self
    {
        $this->esgmeqiuqsaomgmw($ioqywyyeioqywogw);
        return parent::zmqimouwawekqymc($ioqywyyeioqywogw);
    }
    
    public function sqmeiugqckukykos(bool $cysoimgmicegeqyu) : self
    {
        goto esuyscuayyikcwwu;
        wakyiiuceqggyyyu:
        return $this;
        goto mwmcmswsggukkcei;
        coyiuicwequccqoy:
        $this->soeowumgcwuiaica(true);
        goto wakyiiuceqggyyyu;
        esuyscuayyikcwwu:
        $this->showInAdminBar = $cysoimgmicegeqyu;
        goto coyiuicwequccqoy;
        mwmcmswsggukkcei:
    }
    
    public function usawymkcmeicimyy(?bool $oaekgiowwoqkecwg) : self
    {
        $this->excludeFromSearch = $oaekgiowwoqkecwg;
        return $this;
    }
    
    public function qyyikeaseoskcacm() : ?string
    {
        return $this->menuIcon;
    }
    
    public function yioesawwewqaigow(?string $uuisoqqiumgmmkeg) : self
    {
        $this->menuIcon = $uuisoqqiumgmmkeg;
        return $this;
    }
    
    public function ckaeqgiaiqwsccke(int $ukekeygkycawmkyc) : self
    {
        goto qeccuawaemcqssuk;
        qeccuawaemcqssuk:
        $this->menuPosition = $ukekeygkycawmkyc;
        goto gksasoiwiaceowkg;
        maemyookcuoiqmik:
        return $this;
        goto miiiiqmymyqkkoos;
        gksasoiwiaceowkg:
        $this->soeowumgcwuiaica(true);
        goto maemyookcuoiqmik;
        miiiiqmymyqkkoos:
    }
    
    public function cwueseysoqeewkao() : ?string
    {
        return $this->capabilityType;
    }
    
    public function hsgasemokseccoao(string $eoaqkowmmukgimgw) : self
    {
        $this->capabilityType = $eoaqkowmmukgimgw;
        return $this;
    }
    
    public function kwksqwkmuuoakaqg(bool $kkkcueiayauaeqmy) : self
    {
        $this->mapMetaCap = $kkkcueiayauaeqmy;
        return $this;
    }
    
    public function aoaiwceqgsckygsg() : array
    {
        return $this->supports;
    }
    
    public function wakugsseussemkka(array $ckgaeiyesoqoemic) : self
    {
        goto ggwmmgogwmqokkoq;
        ggwmmgogwmqokkoq:
        foreach ($ckgaeiyesoqoemic as $kyiucqqkqiwkoksc) {
            $this->musuokisgmmamoua($kyiucqqkqiwkoksc);
            aasoskwecamqssmy:
        }
        goto esaggsqoamgyguem;
        osgawwyuaegkasms:
        return $this;
        goto auegygmkkiqsgwsc;
        esaggsqoamgyguem:
        uecqkgmguskwausu:
        goto osgawwyuaegkasms;
        auegygmkkiqsgwsc:
    }
    
    public function musuokisgmmamoua(string $kyiucqqkqiwkoksc) : self
    {
        $this->supports[] = $kyiucqqkqiwkoksc;
        return $this;
    }
    
    public function gcuqugwgqcuyqses(string $kyiucqqkqiwkoksc) : self
    {
        ManipulateArray::gyciysooayoqiisg($this->supports, $kyiucqqkqiwkoksc);
        return $this;
    }
    
    public function yaiqmmqwucikagko(callable $ogkmiyymscemkimk) : self
    {
        $this->registerMetaBoxCb = $ogkmiyymscemkimk;
        return $this;
    }
    
    public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self
    {
        $this->taxonomies[] = $kesssewsiegssiya;
        return $this;
    }
    
    public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self
    {
        goto gosgauymqceykgek;
        gosgauymqceykgek:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            $this->acqyqaaeeogkosoq($kesssewsiegssiya);
            yqqyiokywmggkmke:
        }
        goto eyqggcokeuakaskk;
        uqskcceawegkiakk:
        return $this;
        goto uysygigskiiwsckq;
        eyqggcokeuakaskk:
        iqocscomgkciyiwe:
        goto uqskcceawegkiakk;
        uysygigskiiwsckq:
    }
    
    public function esgmeqiuqsaomgmw(bool $auiemgkycsemicim) : self
    {
        $this->hasArchive = $auiemgkycsemicim;
        return $this;
    }
    
    public function swgooqsswqymimkw(bool $qcaaaeuoacoiweqq) : self
    {
        $this->canExport = $qcaaaeuoacoiweqq;
        return $this;
    }
    
    public function eugmaekicaygmcyi(bool $eawksymqiosoiuce) : self
    {
        $this->deleteWithUser = $eawksymqiosoiuce;
        return $this;
    }
    
    public function agywwgmoyucciqyu(string $edit_link) : self
    {
        $this->_editLink = $edit_link;
        return $this;
    }
    
    public function kyoawugmkeiysiyu() : ?string
    {
        return $this->mainTaxonomy;
    }
    
    public function ioguemyoyecgggsq(?string $ucgkgasuuyeayqie) : self
    {
        $this->mainTaxonomy = $ucgkgasuuyeayqie;
        return $this;
    }
}
