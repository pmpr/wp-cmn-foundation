<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    
    protected ?string $capabilityType = "\x70\x6f\163\x74";
    
    protected ?bool $excludeFromSearch = null;
    
    protected string $_editLink = "\x70\157\163\x74\56\x70\150\x70\77\160\157\163\x74\x3d\45\144";
    
    public function jsgkawekewookomk() : self
    {
        goto waeeesmmsacwaaoa;
        waeeesmmsacwaaoa:
        $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg();
        goto muqokomgakwuiisc;
        heyuwyceiewkimiu:
        $this->labels = ["\156\x61\155\145" => _x($kcumookcwskcyqak, "\x70\157\x73\164\x20\164\x79\x70\145\x20\147\145\x6e\145\162\141\x6c\x20\156\x61\155\x65", PR__CMN__FOUNDATION), "\x61\144\x64\x5f\x6e\145\x77" => sprintf(__("\101\x64\144\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\141\162\x63\150\151\166\145\163" => sprintf(__("\45\163\x20\141\x72\x63\150\151\x76\145\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x6e\145\167\x5f\x69\x74\x65\155" => sprintf(__("\116\x65\167\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\145\x64\x69\x74\137\151\164\x65\155" => sprintf(__("\x45\144\x69\164\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\155\145\156\x75\x5f\x6e\141\x6d\x65" => _x($kcumookcwskcyqak, "\141\144\x6d\151\156\40\x6d\145\156\x75", PR__CMN__FOUNDATION), "\166\151\145\167\x5f\151\164\145\155" => sprintf(__("\126\151\x65\167\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\141\154\154\x5f\151\164\x65\155\x73" => sprintf(__("\101\154\154\40\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\156\157\164\x5f\146\x6f\x75\x6e\144" => sprintf(__("\x4e\157\x20\45\163\40\146\x6f\x75\x6e\144\x2e", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\141\164\x74\162\151\142\x75\164\x65\163" => sprintf(__("\x25\163\40\141\x74\x74\162\151\142\x75\164\145\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\166\151\145\167\137\x69\x74\145\155\163" => sprintf(__("\x56\151\145\167\40\45\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x69\x74\x65\155\x73\x5f\154\x69\163\x74" => sprintf(__("\45\x73\x20\154\x69\x73\164", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\165\160\144\x61\x74\145\x5f\x69\164\145\155" => sprintf(__("\x55\160\144\x61\x74\x65\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\162\x65\155\157\x76\x65\x5f\x69\x74\145\x6d" => sprintf(__("\122\145\x6d\157\x76\145\40\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\163\x65\141\x72\143\150\137\x69\x74\145\x6d\x73" => sprintf(__("\123\x65\141\162\143\150\40\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\141\144\x64\x5f\156\145\167\x5f\x69\164\x65\x6d" => sprintf(__("\101\x64\x64\x20\x4e\145\167\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\151\x74\145\155\137\x75\160\144\141\164\145\144" => sprintf(__("\45\x73\x20\165\x70\x64\141\164\x65\144", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\151\156\147\165\154\141\162\x5f\156\141\155\x65" => _x($sisssumicskyceeg, "\x70\x6f\x73\164\40\164\171\160\x65\40\x73\151\156\147\165\154\141\x72\x20\156\x61\155\145", PR__CMN__FOUNDATION), "\x70\154\x75\x72\141\154\x5f\x6e\x61\155\145" => _x($kcumookcwskcyqak, "\160\157\163\x74\40\x74\171\160\x65\40\160\x6c\x75\x72\141\x6c\40\156\x61\x6d\145", PR__CMN__FOUNDATION), "\x69\164\x65\x6d\137\x70\165\x62\154\x69\163\x68\x65\x64" => sprintf(__("\45\x73\40\160\x75\142\x6c\151\x73\150\145\144", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x69\x74\x65\155\137\x73\143\x68\x65\144\165\x6c\x65\x64" => sprintf(__("\45\163\40\x73\143\x68\x65\x64\165\154\145\144", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x66\145\x61\x74\165\x72\145\144\x5f\151\x6d\x61\x67\x65" => sprintf(__("\x25\163\40\151\155\x61\147\145", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\156\x61\x6d\x65\137\x61\144\155\x69\156\x5f\142\141\162" => _x($sisssumicskyceeg, "\x61\144\x64\x20\x6e\145\167\x20\157\156\40\x61\x64\155\x69\x6e\x20\142\x61\x72", PR__CMN__FOUNDATION), "\151\x6e\163\145\x72\164\x5f\x69\156\x74\157\137\x69\164\145\155" => sprintf(__("\120\165\x74\x20\x69\x6e\x74\x6f\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x66\x69\x6c\x74\145\162\x5f\151\x74\145\155\163\137\x6c\151\x73\x74" => sprintf(__("\106\151\154\164\145\x72\x20\x25\163\40\154\x69\x73\164", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\160\x61\162\x65\x6e\164\137\151\x74\145\155\137\x63\157\x6c\157\156" => sprintf(__("\x50\141\162\145\x6e\x74\40\45\x73\72", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x73\x65\164\137\146\x65\x61\164\x75\162\x65\x64\137\x69\x6d\141\147\x65" => sprintf(__("\x53\x65\x74\40\x25\x73\40\x69\x6d\x61\147\145", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x6e\x6f\164\x5f\x66\x6f\165\x6e\144\137\x69\156\137\164\x72\x61\x73\x68" => sprintf(__("\116\x6f\x20\45\x73\40\x66\x6f\165\156\144\40\x69\156\40\124\x72\x61\163\x68\x2e", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x75\x73\145\x5f\x66\x65\x61\164\165\162\x65\x64\137\151\155\141\x67\145" => sprintf(__("\x55\x73\145\x20\x61\163\x20\x25\x73\x20\x69\x6d\x61\x67\x65", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\165\x70\x6c\x6f\x61\144\145\144\x5f\164\x6f\x5f\x74\150\x69\163\137\151\x74\145\x6d" => sprintf(__("\125\x70\x6c\157\x61\x64\x65\x64\40\164\157\40\164\x68\151\x73\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\162\x65\155\157\166\145\137\146\x65\141\164\165\x72\145\144\137\151\x6d\141\x67\145" => sprintf(__("\122\145\155\x6f\166\x65\40\x25\x73\x20\x69\x6d\141\147\x65", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x69\x74\x65\x6d\x73\x5f\154\x69\x73\x74\x5f\x6e\141\166\x69\147\141\x74\x69\157\156" => sprintf(__("\x25\x73\x20\160\141\x67\151\156\141\164\x69\x6f\156", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x69\164\145\155\137\162\x65\166\145\x72\x74\x65\x64\137\x74\157\137\x64\162\x61\x66\x74" => sprintf(__("\45\x73\x20\162\145\166\145\x72\164\x65\144\x20\x74\157\x20\144\x72\141\x66\164", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x69\x74\145\155\137\x70\x75\142\154\151\163\x68\145\144\137\160\x72\x69\x76\141\x74\145\x6c\171" => sprintf(__("\45\x73\40\160\x75\x62\x6c\151\x73\x68\145\144\x20\x70\x72\151\x76\141\x74\145\154\x79", PR__CMN__FOUNDATION), $sisssumicskyceeg)];
        goto ciiouaecyaoqacak;
        ciiouaecyaoqacak:
        return $this;
        goto esuyscuayyikcwwu;
        muqokomgakwuiisc:
        $sisssumicskyceeg = $this->giiayuqckuiecosm();
        goto heyuwyceiewkimiu;
        esuyscuayyikcwwu:
    }
    
    public function zmqimouwawekqymc($ioqywyyeioqywogw = true) : self
    {
        $this->esgmeqiuqsaomgmw($ioqywyyeioqywogw);
        return parent::zmqimouwawekqymc($ioqywyyeioqywogw);
    }
    
    public function sqmeiugqckukykos(bool $cysoimgmicegeqyu) : self
    {
        goto coyiuicwequccqoy;
        wakyiiuceqggyyyu:
        $this->soeowumgcwuiaica(true);
        goto mwmcmswsggukkcei;
        mwmcmswsggukkcei:
        return $this;
        goto qeccuawaemcqssuk;
        coyiuicwequccqoy:
        $this->showInAdminBar = $cysoimgmicegeqyu;
        goto wakyiiuceqggyyyu;
        qeccuawaemcqssuk:
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
        goto gksasoiwiaceowkg;
        maemyookcuoiqmik:
        $this->soeowumgcwuiaica(true);
        goto miiiiqmymyqkkoos;
        gksasoiwiaceowkg:
        $this->menuPosition = $ukekeygkycawmkyc;
        goto maemyookcuoiqmik;
        miiiiqmymyqkkoos:
        return $this;
        goto uecqkgmguskwausu;
        uecqkgmguskwausu:
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
        goto esaggsqoamgyguem;
        esaggsqoamgyguem:
        foreach ($ckgaeiyesoqoemic as $kyiucqqkqiwkoksc) {
            $this->musuokisgmmamoua($kyiucqqkqiwkoksc);
            ggwmmgogwmqokkoq:
        }
        goto osgawwyuaegkasms;
        osgawwyuaegkasms:
        aasoskwecamqssmy:
        goto auegygmkkiqsgwsc;
        auegygmkkiqsgwsc:
        return $this;
        goto iqocscomgkciyiwe;
        iqocscomgkciyiwe:
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
        goto eyqggcokeuakaskk;
        eyqggcokeuakaskk:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            $this->acqyqaaeeogkosoq($kesssewsiegssiya);
            gosgauymqceykgek:
        }
        goto uqskcceawegkiakk;
        uqskcceawegkiakk:
        yqqyiokywmggkmke:
        goto uysygigskiiwsckq;
        uysygigskiiwsckq:
        return $this;
        goto woomeusquuuqekig;
        woomeusquuuqekig:
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
