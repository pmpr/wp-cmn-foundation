<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Page\Admin;

use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateMenu;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\WPListTable;

abstract class Page extends Common
{
    
    protected array $tabs = [];
    
    protected array $args = [];
    
    protected array $acts = [];
    
    protected ?WPListTable $listTable = null;
    
    public function qiuwgoaekqikgcci($aokagokqyuysuksm) : ?Tab
    {
        return ManipulateArray::get($this->equiyaoamqmaeckc(), $aokagokqyuysuksm, null);
    }
    
    public function imkyoqyocosuqasu($ymqmyyeuycgmigyo)
    {
        return ManipulateArray::get($this->kooiucqkggeagccu(), $ymqmyyeuycgmigyo);
    }
    
    public function kooiucqkggeagccu() : array
    {
        return $this->args;
    }
    
    public function equiyaoamqmaeckc() : array
    {
        return $this->tabs;
    }
    
    public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self
    {
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        return $this;
    }
    
    public function ckiimaaecogswcsu() : array
    {
        return $this->acts;
    }
    
    public function quyawykcegmmwmky(string $mauamegckkwueuuo) : self
    {
        $this->acts[] = $mauamegckkwueuuo;
        return $this;
    }
    
    public function waeasakssissiuqg() : ?WPListTable
    {
        return $this->listTable;
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self
    {
        goto qccqwqewgsuaassw;
        qccqwqewgsuaassw:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            yoowqwwqgyoqusam:
        }
        goto hisossycecaayukk;
        hisossycecaayukk:
        imycaqewmusocike:
        goto akweguyeywgimcii;
        akweguyeywgimcii:
        return $this;
        goto qksgckcogweyegiy;
        qksgckcogweyegiy:
    }
    public function wigskegsqequoeks()
    {
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\x70\x61\x67\145\137\141\x64\x6d\x69\x6e\x5f\142\145\146\157\162\x65\x5f{$this->imkyoqyocosuqasu("\160\x61\x72\x65\x6e\164\137\163\154\165\x67")}\137\164\x61\142\163");
        $this->qcsmikeggeemccuu($iaakskwmyqceoscy, [$this, "\153\x63\143\x67\145\x6b\151\x71\147\163\165\x77\155\x6f\x77\157"])->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\x5f\x6d\x65\156\x75", [$this, "\x65\165\161\147\167\151\163\143\167\147\161\x6b\161\153\x65\x63"]);
    }
    public function euqgwiscwgqkqkec()
    {
        goto qymasoskamceuyga;
        qymasoskamceuyga:
        $ewuukoycimkekouc = $this->kooiucqkggeagccu();
        goto ccysimigeiasqcce;
        waossucmeakmcyqo:
        $ewuukoycimkekouc["\x66\165\156\143\x74\151\157\156"] = [$this, "\x72\x65\156\x64\145\x72"];
        goto qicaiiwqkuekisec;
        ccysimigeiasqcce:
        if (!$ewuukoycimkekouc) {
            goto mcyaaamaeyyuuyqc;
        }
        goto waossucmeakmcyqo;
        easmiuiiqscigksi:
        mcyaaamaeyyuuyqc:
        goto wquciuouwsqeaywy;
        qicaiiwqkuekisec:
        ManipulateMenu::aemwscceysomkuea($ewuukoycimkekouc);
        goto easmiuiiqscigksi;
        wquciuouwsqeaywy:
    }
    public function render()
    {
        goto myksuyaasakqyemk;
        eamocokcskeaowsy:
        $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm);
        goto iimsyikswgcwgoim;
        wweeowcauskgueqo:
        $cciauwuwuqaywgce = null;
        goto wkuiygkkiegeqmks;
        iimsyikswgcwgoim:
        qaiqycmkuwkyawoo:
        goto ekmgygwagiwkumky;
        iwqggoqaweooecai:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($ywoucyskcquysiwc);
        goto iicmygykyuguyeku;
        uecwikikoegwokma:
        if (!is_array($ywoucyskcquysiwc)) {
            goto qaiqycmkuwkyawoo;
        }
        goto iwqggoqaweooecai;
        wkuiygkkiegeqmks:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto uecwikikoegwokma;
        iicmygykyuguyeku:
        $aokagokqyuysuksm = ManipulateServer::get("\164\141\142", key($ywoucyskcquysiwc));
        goto eamocokcskeaowsy;
        ekmgygwagiwkumky:
        echo $this->iuygowkemiiwqmiw("\x69\156\x64\145\x78", ["\164\141\142\163" => $ywoucyskcquysiwc, "\160\x61\x67\x65" => $this, "\x61\143\x74\151\157\156\163" => $this->ckiimaaecogswcsu(), "\x6c\x69\163\164\x5f\x74\141\x62\x6c\x65" => $this->waeasakssissiuqg(), "\143\165\162\162\x65\156\x74\x5f\164\141\142" => $cciauwuwuqaywgce, "\143\x75\162\162\145\156\164\137\x70\x61\x67\145\x5f\x6c\151\x6e\153" => admin_url("\141\x64\x6d\151\156\56\160\150\160\77\160\141\x67\145\x3d" . $this->imkyoqyocosuqasu("\155\145\156\165\137\x73\x6c\x75\147"))], ["\143\x6c\141\x73\163" => self::class]);
        goto iuqeycyiwoygwgyw;
        myksuyaasakqyemk:
        $this->suicksywcwiggasc();
        goto wweeowcauskgueqo;
        iuqeycyiwoygwgyw:
    }
    
    public function kccgekiqgsuwmowo($suaemuyiacqyugsm)
    {
    }
    
    public final function qcsgmgoukiouuscw() : bool
    {
        return ManipulateServer::get(self::PAGE) === $this->imkyoqyocosuqasu("\x6d\x65\x6e\165\x5f\163\x6c\165\x67");
    }
    public function suicksywcwiggasc()
    {
    }
}
