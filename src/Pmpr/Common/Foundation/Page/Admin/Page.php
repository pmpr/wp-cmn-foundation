<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto qmwcqkmogmmseeaa;
        qmwcqkmogmmseeaa:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            gagmssewkqoakmic:
        }
        goto imycaqewmusocike;
        imycaqewmusocike:
        iugkiwiucuaueycm:
        goto yoowqwwqgyoqusam;
        yoowqwwqgyoqusam:
        return $this;
        goto qccqwqewgsuaassw;
        qccqwqewgsuaassw:
    }
    public function wigskegsqequoeks()
    {
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\160\141\147\145\x5f\x61\x64\155\x69\156\x5f\142\145\146\x6f\162\x65\137{$this->imkyoqyocosuqasu("\x70\x61\x72\145\x6e\164\137\163\x6c\x75\147")}\x5f\164\x61\142\163");
        $this->qcsmikeggeemccuu($iaakskwmyqceoscy, [$this, "\153\x63\x63\x67\145\153\x69\x71\x67\163\x75\167\155\157\x77\157"])->qcsmikeggeemccuu("\141\x64\x6d\x69\156\137\x6d\x65\156\165", [$this, "\145\165\161\x67\167\x69\163\143\167\x67\x71\153\x71\x6b\x65\x63"]);
    }
    public function euqgwiscwgqkqkec()
    {
        goto akweguyeywgimcii;
        qymasoskamceuyga:
        ManipulateMenu::aemwscceysomkuea($ewuukoycimkekouc);
        goto ccysimigeiasqcce;
        akweguyeywgimcii:
        $ewuukoycimkekouc = $this->kooiucqkggeagccu();
        goto qksgckcogweyegiy;
        ccysimigeiasqcce:
        hisossycecaayukk:
        goto waossucmeakmcyqo;
        mcyaaamaeyyuuyqc:
        $ewuukoycimkekouc["\146\x75\x6e\x63\x74\151\157\x6e"] = [$this, "\162\145\x6e\144\x65\x72"];
        goto qymasoskamceuyga;
        qksgckcogweyegiy:
        if (!$ewuukoycimkekouc) {
            goto hisossycecaayukk;
        }
        goto mcyaaamaeyyuuyqc;
        waossucmeakmcyqo:
    }
    public function render()
    {
        goto easmiuiiqscigksi;
        wquciuouwsqeaywy:
        $cciauwuwuqaywgce = null;
        goto qaiqycmkuwkyawoo;
        iicmygykyuguyeku:
        echo $this->iuygowkemiiwqmiw("\x69\156\x64\145\170", ["\164\x61\142\x73" => $ywoucyskcquysiwc, "\160\141\147\145" => $this, "\x61\143\164\151\x6f\156\x73" => $this->ckiimaaecogswcsu(), "\154\x69\163\x74\x5f\164\x61\x62\x6c\145" => $this->waeasakssissiuqg(), "\143\165\162\x72\145\156\164\137\x74\141\x62" => $cciauwuwuqaywgce, "\143\x75\162\162\145\156\164\137\x70\x61\x67\x65\137\154\151\x6e\153" => admin_url("\x61\144\x6d\151\156\56\x70\x68\x70\x3f\x70\141\x67\145\x3d" . $this->imkyoqyocosuqasu("\155\x65\x6e\x75\x5f\163\154\165\x67"))], ["\143\154\x61\163\163" => self::class]);
        goto eamocokcskeaowsy;
        myksuyaasakqyemk:
        if (!is_array($ywoucyskcquysiwc)) {
            goto qicaiiwqkuekisec;
        }
        goto wweeowcauskgueqo;
        uecwikikoegwokma:
        $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm);
        goto iwqggoqaweooecai;
        qaiqycmkuwkyawoo:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto myksuyaasakqyemk;
        wkuiygkkiegeqmks:
        $aokagokqyuysuksm = ManipulateServer::get("\x74\141\x62", key($ywoucyskcquysiwc));
        goto uecwikikoegwokma;
        wweeowcauskgueqo:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($ywoucyskcquysiwc);
        goto wkuiygkkiegeqmks;
        iwqggoqaweooecai:
        qicaiiwqkuekisec:
        goto iicmygykyuguyeku;
        easmiuiiqscigksi:
        $this->suicksywcwiggasc();
        goto wquciuouwsqeaywy;
        eamocokcskeaowsy:
    }
    
    public function kccgekiqgsuwmowo($suaemuyiacqyugsm)
    {
    }
    
    public final function qcsgmgoukiouuscw() : bool
    {
        return ManipulateServer::get(self::PAGE) === $this->imkyoqyocosuqasu("\155\145\156\x75\137\x73\154\x75\x67");
    }
    public function suicksywcwiggasc()
    {
    }
}
