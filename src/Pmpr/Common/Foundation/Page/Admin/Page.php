<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        akweguyeywgimcii:
        return $this;
        goto qksgckcogweyegiy;
        hisossycecaayukk:
        imycaqewmusocike:
        goto akweguyeywgimcii;
        qksgckcogweyegiy:
    }
    public function wigskegsqequoeks()
    {
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\x70\x61\x67\145\x5f\141\x64\155\x69\156\x5f\x62\x65\146\157\x72\x65\137{$this->imkyoqyocosuqasu("\160\x61\162\x65\x6e\164\137\163\x6c\165\x67")}\x5f\164\141\142\x73");
        $this->qcsmikeggeemccuu($iaakskwmyqceoscy, [$this, "\153\x63\143\x67\145\x6b\151\161\x67\x73\x75\x77\x6d\x6f\x77\157"])->qcsmikeggeemccuu("\141\x64\155\151\x6e\x5f\x6d\145\156\165", [$this, "\145\165\161\x67\167\151\163\x63\167\x67\161\153\x71\153\x65\143"]);
    }
    public function euqgwiscwgqkqkec()
    {
        goto qymasoskamceuyga;
        easmiuiiqscigksi:
        mcyaaamaeyyuuyqc:
        goto wquciuouwsqeaywy;
        qymasoskamceuyga:
        $ewuukoycimkekouc = $this->kooiucqkggeagccu();
        goto ccysimigeiasqcce;
        qicaiiwqkuekisec:
        ManipulateMenu::aemwscceysomkuea($ewuukoycimkekouc);
        goto easmiuiiqscigksi;
        waossucmeakmcyqo:
        $ewuukoycimkekouc["\146\165\x6e\143\164\x69\x6f\156"] = [$this, "\x72\145\156\144\x65\x72"];
        goto qicaiiwqkuekisec;
        ccysimigeiasqcce:
        if (!$ewuukoycimkekouc) {
            goto mcyaaamaeyyuuyqc;
        }
        goto waossucmeakmcyqo;
        wquciuouwsqeaywy:
    }
    public function render()
    {
        goto myksuyaasakqyemk;
        iwqggoqaweooecai:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($ywoucyskcquysiwc);
        goto iicmygykyuguyeku;
        iimsyikswgcwgoim:
        qaiqycmkuwkyawoo:
        goto ekmgygwagiwkumky;
        myksuyaasakqyemk:
        $this->suicksywcwiggasc();
        goto wweeowcauskgueqo;
        iicmygykyuguyeku:
        $aokagokqyuysuksm = ManipulateServer::get("\164\141\x62", key($ywoucyskcquysiwc));
        goto eamocokcskeaowsy;
        ekmgygwagiwkumky:
        echo $this->iuygowkemiiwqmiw("\x69\x6e\x64\145\170", ["\x74\141\142\163" => $ywoucyskcquysiwc, "\160\141\147\145" => $this, "\141\143\164\151\157\156\163" => $this->ckiimaaecogswcsu(), "\x6c\151\163\x74\x5f\164\141\142\x6c\145" => $this->waeasakssissiuqg(), "\x63\x75\x72\x72\x65\x6e\x74\x5f\164\141\x62" => $cciauwuwuqaywgce, "\x63\165\x72\x72\145\x6e\x74\x5f\x70\x61\x67\x65\137\154\x69\156\153" => admin_url("\141\x64\x6d\151\x6e\x2e\x70\x68\160\x3f\160\x61\x67\145\x3d" . $this->imkyoqyocosuqasu("\155\145\156\165\x5f\163\154\165\147"))], ["\143\x6c\x61\163\x73" => self::class]);
        goto iuqeycyiwoygwgyw;
        eamocokcskeaowsy:
        $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm);
        goto iimsyikswgcwgoim;
        wkuiygkkiegeqmks:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto uecwikikoegwokma;
        wweeowcauskgueqo:
        $cciauwuwuqaywgce = null;
        goto wkuiygkkiegeqmks;
        uecwikikoegwokma:
        if (!is_array($ywoucyskcquysiwc)) {
            goto qaiqycmkuwkyawoo;
        }
        goto iwqggoqaweooecai;
        iuqeycyiwoygwgyw:
    }
    
    public function kccgekiqgsuwmowo($suaemuyiacqyugsm)
    {
    }
    
    public final function qcsgmgoukiouuscw() : bool
    {
        return ManipulateServer::get(self::PAGE) === $this->imkyoqyocosuqasu("\x6d\145\156\165\137\163\154\165\147");
    }
    public function suicksywcwiggasc()
    {
    }
}
