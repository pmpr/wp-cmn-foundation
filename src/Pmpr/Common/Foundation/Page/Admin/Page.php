<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto qeycaskgikeokega;
        miosmgaacmsgswos:
        qyiyukakwoomokqm:
        goto aeycackeqwkqeokg;
        aeycackeqwkqeokg:
        return $this;
        goto sqyeywwoeiewwkim;
        qeycaskgikeokega:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            eeaiusyckugwoams:
        }
        goto miosmgaacmsgswos;
        sqyeywwoeiewwkim:
    }
    public function wigskegsqequoeks()
    {
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\160\x61\x67\x65\137\x61\144\x6d\151\156\137\142\x65\x66\157\162\x65\137{$this->imkyoqyocosuqasu("\x70\141\162\145\156\x74\x5f\x73\154\165\147")}\137\164\x61\x62\163");
        $this->qcsmikeggeemccuu($iaakskwmyqceoscy, [$this, "\x6b\x63\x63\147\145\x6b\x69\x71\x67\x73\165\x77\x6d\157\x77\x6f"])->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\155\145\156\x75", [$this, "\x65\x75\x71\147\x77\x69\x73\143\167\147\161\x6b\x71\153\145\x63"]);
    }
    public function euqgwiscwgqkqkec()
    {
        goto ewecawmiqcgeaque;
        wiksqikkuaiyqmcu:
        keemgiqiykwguocw:
        goto quocmskwwaumyiae;
        oiugacuckwmecqgk:
        $ewuukoycimkekouc["\x66\x75\156\x63\x74\151\157\x6e"] = [$this, "\162\x65\x6e\x64\145\162"];
        goto wakamsgsammaqwqg;
        aogumaeoimukciac:
        if (!$ewuukoycimkekouc) {
            goto keemgiqiykwguocw;
        }
        goto oiugacuckwmecqgk;
        ewecawmiqcgeaque:
        $ewuukoycimkekouc = $this->kooiucqkggeagccu();
        goto aogumaeoimukciac;
        wakamsgsammaqwqg:
        ManipulateMenu::aemwscceysomkuea($ewuukoycimkekouc);
        goto wiksqikkuaiyqmcu;
        quocmskwwaumyiae:
    }
    public function render()
    {
        goto oqeoyeeeogmqagko;
        emiqmswmkkiscuuu:
        $cciauwuwuqaywgce = null;
        goto qcsmqummmmyaqseu;
        ywgieceuausccaoo:
        if (!is_array($ywoucyskcquysiwc)) {
            goto ukwwiwwkmuqemkic;
        }
        goto hwskqqioyiycssus;
        hwskqqioyiycssus:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($ywoucyskcquysiwc);
        goto qgaiyikuyacyymma;
        oqeoyeeeogmqagko:
        $this->suicksywcwiggasc();
        goto emiqmswmkkiscuuu;
        wuqwccycokcwgumm:
        echo $this->iuygowkemiiwqmiw("\151\x6e\x64\x65\x78", ["\x74\x61\x62\163" => $ywoucyskcquysiwc, "\x70\141\x67\145" => $this, "\141\x63\164\151\x6f\x6e\163" => $this->ckiimaaecogswcsu(), "\154\151\x73\164\x5f\x74\x61\x62\154\x65" => $this->waeasakssissiuqg(), "\x63\x75\162\162\x65\x6e\164\137\164\x61\x62" => $cciauwuwuqaywgce, "\143\165\162\x72\x65\x6e\164\x5f\x70\141\x67\x65\137\154\151\156\153" => admin_url("\x61\144\x6d\x69\156\x2e\x70\x68\160\77\160\x61\147\145\x3d" . $this->imkyoqyocosuqasu("\155\145\x6e\x75\x5f\163\154\165\x67"))], ["\143\154\141\163\163" => self::class]);
        goto iawwcgswwmcqmcsk;
        qgaiyikuyacyymma:
        $aokagokqyuysuksm = ManipulateServer::get("\x74\x61\142", key($ywoucyskcquysiwc));
        goto ycumeemqusckwyoc;
        qcsmqummmmyaqseu:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto ywgieceuausccaoo;
        yukmcqiuugkamaow:
        ukwwiwwkmuqemkic:
        goto wuqwccycokcwgumm;
        ycumeemqusckwyoc:
        $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm);
        goto yukmcqiuugkamaow;
        iawwcgswwmcqmcsk:
    }
    
    public function kccgekiqgsuwmowo($suaemuyiacqyugsm)
    {
    }
    
    public final function qcsgmgoukiouuscw() : bool
    {
        return ManipulateServer::get(self::PAGE) === $this->imkyoqyocosuqasu("\155\145\x6e\165\x5f\x73\x6c\165\x67");
    }
    public function suicksywcwiggasc()
    {
    }
}
