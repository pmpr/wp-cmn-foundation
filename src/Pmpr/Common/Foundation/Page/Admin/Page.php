<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto wymmeymakykomoeg;
        oqsykugcsggakmoy:
        return $this;
        goto oekessmycksmemam;
        ksqaeuyiiiuuouoi:
        eqakckaqmkweciao:
        goto oqsykugcsggakmoy;
        wymmeymakykomoeg:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            oagkkuowwccmeaoc:
        }
        goto ksqaeuyiiiuuouoi;
        oekessmycksmemam:
    }
    public function wigskegsqequoeks()
    {
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\160\141\x67\x65\137\x61\x64\x6d\x69\x6e\137\142\145\146\157\x72\x65\137{$this->imkyoqyocosuqasu("\x70\141\162\145\x6e\x74\x5f\163\x6c\x75\147")}\137\164\141\x62\x73");
        $this->qcsmikeggeemccuu($iaakskwmyqceoscy, [$this, "\x6b\143\x63\x67\145\x6b\x69\161\x67\x73\165\x77\155\x6f\x77\157"])->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\137\x6d\145\x6e\165", [$this, "\x65\x75\161\x67\167\x69\x73\x63\167\x67\x71\153\x71\153\x65\x63"]);
    }
    public function euqgwiscwgqkqkec()
    {
        goto kmccaesicogsgcmk;
        kmccaesicogsgcmk:
        $ewuukoycimkekouc = $this->kooiucqkggeagccu();
        goto ewucaygocgykeweg;
        ioawiemsmsyyssyu:
        ManipulateMenu::aemwscceysomkuea($ewuukoycimkekouc);
        goto iayicqkseeycaaqk;
        ayayswaesiscymcw:
        $ewuukoycimkekouc["\146\165\156\143\x74\x69\157\156"] = [$this, "\x72\x65\x6e\144\145\x72"];
        goto ioawiemsmsyyssyu;
        iayicqkseeycaaqk:
        gwaiikaaqgaoigay:
        goto mcqegwkqsoygamey;
        ewucaygocgykeweg:
        if (!$ewuukoycimkekouc) {
            goto gwaiikaaqgaoigay;
        }
        goto ayayswaesiscymcw;
        mcqegwkqsoygamey:
    }
    public function render()
    {
        goto uyeqsmcyogggskye;
        osysmqqcyasqyscm:
        $aokagokqyuysuksm = ManipulateServer::get("\x74\x61\142", key($ywoucyskcquysiwc));
        goto aoooaekesimaisms;
        yosaemoyeeiykeai:
        csgcicsyauawamqw:
        goto mywoocikqmgcqsog;
        mywoocikqmgcqsog:
        echo $this->iuygowkemiiwqmiw("\x69\156\x64\x65\170", ["\164\x61\142\x73" => $ywoucyskcquysiwc, "\x70\x61\x67\x65" => $this, "\x61\x63\164\151\157\156\x73" => $this->ckiimaaecogswcsu(), "\x6c\151\x73\164\x5f\164\141\142\x6c\145" => $this->waeasakssissiuqg(), "\x63\165\x72\162\x65\x6e\x74\137\164\141\x62" => $cciauwuwuqaywgce, "\143\165\162\x72\x65\156\x74\137\160\141\x67\x65\x5f\x6c\151\x6e\x6b" => admin_url("\141\144\x6d\x69\156\x2e\x70\150\160\77\x70\x61\x67\x65\75" . $this->imkyoqyocosuqasu("\155\x65\x6e\165\x5f\163\x6c\x75\x67"))], ["\143\x6c\141\x73\163" => self::class]);
        goto swekqaeccossoigy;
        cqcskimegccygqym:
        if (!is_array($ywoucyskcquysiwc)) {
            goto csgcicsyauawamqw;
        }
        goto eoasqcamsowcwweq;
        eoasqcamsowcwweq:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($ywoucyskcquysiwc);
        goto osysmqqcyasqyscm;
        cayayuqimskqkayc:
        $cciauwuwuqaywgce = null;
        goto qgcicekcucaauaka;
        aoooaekesimaisms:
        $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm);
        goto yosaemoyeeiykeai;
        qgcicekcucaauaka:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto cqcskimegccygqym;
        uyeqsmcyogggskye:
        $this->suicksywcwiggasc();
        goto cayayuqimskqkayc;
        swekqaeccossoigy:
    }
    
    public function kccgekiqgsuwmowo($suaemuyiacqyugsm)
    {
    }
    
    public final function qcsgmgoukiouuscw() : bool
    {
        return ManipulateServer::get(self::PAGE) === $this->imkyoqyocosuqasu("\155\145\156\165\137\x73\154\x75\147");
    }
    public function suicksywcwiggasc()
    {
    }
}
