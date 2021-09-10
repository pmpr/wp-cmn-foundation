<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    
    protected ?string $capabilityType = "\x70\157\163\164";
    
    protected ?bool $excludeFromSearch = null;
    
    protected string $_editLink = "\x70\157\x73\164\x2e\160\150\x70\77\160\x6f\163\x74\x3d\45\x64";
    
    public function jsgkawekewookomk() : self
    {
        goto uowgmiscaeysqomk;
        amwcceeeewkecsmq:
        return $this;
        goto wgogoicgkassusme;
        uowgmiscaeysqomk:
        $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg();
        goto aikiqgkqagcwgqgw;
        eoeioguggcgccggg:
        $this->labels = ["\x6e\141\155\x65" => _x($kcumookcwskcyqak, "\x70\157\163\164\x20\x74\x79\160\x65\40\x67\x65\156\x65\162\x61\x6c\40\156\x61\155\145", PR__CMN__FOUNDATION), "\141\x64\144\137\156\145\167" => sprintf(__("\101\x64\144\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\141\162\x63\x68\x69\166\x65\x73" => sprintf(__("\x25\x73\x20\141\x72\143\150\151\x76\145\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x6e\x65\x77\137\151\x74\145\x6d" => sprintf(__("\116\145\x77\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\145\144\151\x74\137\x69\x74\x65\155" => sprintf(__("\105\x64\151\x74\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\155\x65\x6e\165\137\156\141\x6d\x65" => _x($kcumookcwskcyqak, "\x61\144\155\151\156\x20\x6d\x65\x6e\165", PR__CMN__FOUNDATION), "\166\x69\145\167\137\151\x74\145\x6d" => sprintf(__("\126\151\x65\x77\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x61\154\x6c\x5f\x69\x74\145\155\163" => sprintf(__("\x41\154\x6c\x20\45\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x6e\x6f\164\137\x66\157\165\x6e\x64" => sprintf(__("\x4e\x6f\x20\45\163\40\146\157\165\156\x64\x2e", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x61\x74\164\162\x69\142\x75\x74\x65\163" => sprintf(__("\45\x73\40\x61\x74\164\x72\x69\142\165\164\x65\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\166\151\x65\167\x5f\x69\164\145\155\163" => sprintf(__("\x56\x69\x65\x77\x20\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x69\164\145\155\163\137\154\x69\x73\x74" => sprintf(__("\x25\163\x20\x6c\x69\x73\x74", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\165\160\144\x61\x74\145\x5f\x69\164\145\155" => sprintf(__("\x55\x70\x64\141\x74\x65\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\162\x65\155\157\166\145\137\x69\164\145\155" => sprintf(__("\x52\x65\x6d\x6f\166\x65\40\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\163\145\x61\162\143\150\x5f\151\164\145\x6d\x73" => sprintf(__("\x53\x65\x61\x72\143\150\x20\45\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x61\x64\144\x5f\x6e\145\x77\x5f\x69\x74\145\155" => sprintf(__("\x41\144\x64\40\116\x65\x77\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x69\x74\145\155\137\x75\160\144\141\x74\x65\x64" => sprintf(__("\x25\x73\x20\165\160\144\x61\x74\x65\144", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\151\x6e\x67\165\x6c\141\x72\137\156\141\x6d\145" => _x($sisssumicskyceeg, "\160\x6f\163\164\40\x74\x79\160\x65\40\163\151\156\147\165\154\141\162\x20\156\x61\155\x65", PR__CMN__FOUNDATION), "\160\x6c\x75\162\x61\x6c\x5f\x6e\141\x6d\145" => _x($kcumookcwskcyqak, "\160\x6f\163\164\x20\x74\x79\160\x65\x20\x70\154\x75\162\x61\154\40\156\x61\x6d\x65", PR__CMN__FOUNDATION), "\151\x74\145\x6d\137\160\x75\x62\154\151\x73\x68\x65\x64" => sprintf(__("\x25\x73\x20\x70\165\142\x6c\x69\163\150\x65\x64", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\151\164\145\155\x5f\x73\143\150\145\144\x75\x6c\x65\144" => sprintf(__("\x25\x73\40\x73\143\x68\x65\144\165\x6c\x65\x64", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\146\145\x61\x74\x75\162\145\x64\x5f\151\155\141\147\x65" => sprintf(__("\45\x73\x20\151\x6d\141\147\145", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x6e\141\x6d\x65\x5f\x61\x64\155\x69\x6e\137\x62\141\162" => _x($sisssumicskyceeg, "\141\144\144\x20\x6e\x65\x77\x20\x6f\x6e\40\x61\144\x6d\151\x6e\40\142\141\162", PR__CMN__FOUNDATION), "\151\156\x73\x65\162\164\137\151\156\x74\157\x5f\151\164\145\155" => sprintf(__("\120\x75\164\40\151\x6e\164\x6f\x20\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x66\x69\x6c\x74\x65\x72\x5f\x69\x74\145\x6d\x73\137\x6c\151\163\164" => sprintf(__("\x46\151\154\164\x65\162\40\45\163\x20\154\x69\x73\x74", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x70\141\x72\145\156\164\x5f\x69\164\145\155\137\143\x6f\154\157\x6e" => sprintf(__("\x50\x61\162\145\156\x74\x20\45\x73\72", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x73\145\x74\x5f\146\145\x61\x74\x75\x72\x65\144\x5f\x69\x6d\x61\147\145" => sprintf(__("\x53\x65\x74\40\45\x73\40\x69\x6d\141\x67\x65", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\156\157\164\137\x66\157\x75\156\x64\x5f\x69\156\137\x74\x72\141\x73\150" => sprintf(__("\116\157\x20\x25\x73\40\146\157\x75\x6e\x64\x20\151\156\x20\x54\x72\141\163\150\x2e", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x75\x73\145\x5f\x66\x65\141\x74\x75\162\145\144\x5f\151\155\x61\x67\145" => sprintf(__("\x55\x73\145\x20\141\x73\40\45\x73\x20\x69\155\x61\147\x65", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\165\x70\154\x6f\141\x64\x65\144\137\x74\157\x5f\164\x68\x69\x73\137\151\x74\x65\155" => sprintf(__("\x55\160\x6c\157\141\144\x65\144\x20\164\x6f\40\164\x68\151\x73\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\162\x65\155\x6f\166\x65\137\146\x65\x61\164\x75\x72\x65\x64\x5f\151\155\141\147\145" => sprintf(__("\x52\x65\155\157\x76\145\x20\x25\163\40\x69\x6d\141\147\x65", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\151\164\145\155\x73\x5f\x6c\x69\x73\164\x5f\x6e\141\166\x69\147\141\x74\151\x6f\x6e" => sprintf(__("\45\163\40\160\141\x67\151\x6e\x61\x74\151\x6f\x6e", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x69\164\x65\x6d\137\x72\145\x76\145\x72\164\145\144\137\x74\157\x5f\144\x72\141\146\x74" => sprintf(__("\45\x73\40\x72\145\166\x65\x72\x74\x65\144\40\164\157\40\144\x72\x61\146\164", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\151\x74\145\x6d\x5f\160\x75\x62\154\151\x73\150\x65\144\137\160\162\151\x76\x61\164\x65\154\171" => sprintf(__("\45\x73\40\x70\x75\142\154\x69\163\150\x65\144\x20\x70\x72\151\166\x61\164\x65\154\x79", PR__CMN__FOUNDATION), $sisssumicskyceeg)];
        goto amwcceeeewkecsmq;
        aikiqgkqagcwgqgw:
        $sisssumicskyceeg = $this->giiayuqckuiecosm();
        goto eoeioguggcgccggg;
        wgogoicgkassusme:
    }
    
    public function zmqimouwawekqymc($ioqywyyeioqywogw = true) : self
    {
        $this->esgmeqiuqsaomgmw($ioqywyyeioqywogw);
        return parent::zmqimouwawekqymc($ioqywyyeioqywogw);
    }
    
    public function sqmeiugqckukykos(bool $cysoimgmicegeqyu) : self
    {
        goto sekwgiesmgamusyc;
        mwwggwmssgeaaagk:
        return $this;
        goto ywmysmegwksecsuy;
        sekwgiesmgamusyc:
        $this->showInAdminBar = $cysoimgmicegeqyu;
        goto giqcweisosusycmy;
        giqcweisosusycmy:
        $this->soeowumgcwuiaica(true);
        goto mwwggwmssgeaaagk;
        ywmysmegwksecsuy:
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
        goto gscmiuqosuimoigq;
        gscmiuqosuimoigq:
        $this->menuPosition = $ukekeygkycawmkyc;
        goto gyiywuemaogacsoq;
        cqueukswyygmssqa:
        return $this;
        goto ekakmkqymqsiccum;
        gyiywuemaogacsoq:
        $this->soeowumgcwuiaica(true);
        goto cqueukswyygmssqa;
        ekakmkqymqsiccum:
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
        goto usyaigaqkosuymko;
        cccgaqykomecsysa:
        return $this;
        goto omqgyiwasikuqsqs;
        qmqkqeuwmyysogke:
        ygkqsaeqygyqegym:
        goto cccgaqykomecsysa;
        usyaigaqkosuymko:
        foreach ($ckgaeiyesoqoemic as $kyiucqqkqiwkoksc) {
            $this->musuokisgmmamoua($kyiucqqkqiwkoksc);
            kuqeasegkegcgakq:
        }
        goto qmqkqeuwmyysogke;
        omqgyiwasikuqsqs:
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
        goto gqksqioaokkkeicw;
        gqksqioaokkkeicw:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            $this->acqyqaaeeogkosoq($kesssewsiegssiya);
            acqukmwaqqocyway:
        }
        goto imeuaeoyequyquyc;
        imeuaeoyequyquyc:
        cuiumaykueaccekc:
        goto ymmgouuewwaieawy;
        ymmgouuewwaieawy:
        return $this;
        goto kwecemikiouwuiwi;
        kwecemikiouwuiwi:
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
