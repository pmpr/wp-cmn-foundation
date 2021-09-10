<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto miosmgaacmsgswos;
        miosmgaacmsgswos:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            qeycaskgikeokega:
        }
        goto aeycackeqwkqeokg;
        sqyeywwoeiewwkim:
        return $this;
        goto keemgiqiykwguocw;
        aeycackeqwkqeokg:
        eeaiusyckugwoams:
        goto sqyeywwoeiewwkim;
        keemgiqiykwguocw:
    }
    public function wigskegsqequoeks()
    {
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\x70\141\x67\145\137\x61\144\155\x69\156\x5f\142\145\x66\157\x72\145\137{$this->imkyoqyocosuqasu("\x70\141\162\x65\x6e\164\x5f\163\x6c\165\147")}\137\164\x61\142\163");
        $this->qcsmikeggeemccuu($iaakskwmyqceoscy, [$this, "\153\143\x63\147\x65\153\151\161\147\x73\x75\167\155\157\x77\x6f"])->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\x6d\145\156\165", [$this, "\145\165\x71\147\167\151\x73\x63\x77\x67\x71\153\161\x6b\145\x63"]);
    }
    public function euqgwiscwgqkqkec()
    {
        goto aogumaeoimukciac;
        aogumaeoimukciac:
        $ewuukoycimkekouc = $this->kooiucqkggeagccu();
        goto oiugacuckwmecqgk;
        oiugacuckwmecqgk:
        if (!$ewuukoycimkekouc) {
            goto ewecawmiqcgeaque;
        }
        goto wakamsgsammaqwqg;
        wiksqikkuaiyqmcu:
        ManipulateMenu::aemwscceysomkuea($ewuukoycimkekouc);
        goto quocmskwwaumyiae;
        wakamsgsammaqwqg:
        $ewuukoycimkekouc["\146\x75\156\143\x74\x69\157\156"] = [$this, "\x72\145\x6e\x64\x65\x72"];
        goto wiksqikkuaiyqmcu;
        quocmskwwaumyiae:
        ewecawmiqcgeaque:
        goto ukwwiwwkmuqemkic;
        ukwwiwwkmuqemkic:
    }
    public function render()
    {
        goto emiqmswmkkiscuuu;
        ywgieceuausccaoo:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto hwskqqioyiycssus;
        qgaiyikuyacyymma:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($ywoucyskcquysiwc);
        goto ycumeemqusckwyoc;
        iawwcgswwmcqmcsk:
        echo $this->iuygowkemiiwqmiw("\151\156\x64\x65\x78", ["\x74\x61\142\x73" => $ywoucyskcquysiwc, "\x70\141\147\x65" => $this, "\x61\x63\x74\151\x6f\156\163" => $this->ckiimaaecogswcsu(), "\x6c\151\163\x74\137\164\141\142\154\x65" => $this->waeasakssissiuqg(), "\143\x75\x72\162\x65\156\164\x5f\x74\x61\x62" => $cciauwuwuqaywgce, "\x63\165\x72\162\145\156\164\x5f\160\x61\147\145\x5f\x6c\151\156\x6b" => admin_url("\141\x64\x6d\x69\x6e\56\160\x68\160\77\160\141\147\x65\x3d" . $this->imkyoqyocosuqasu("\x6d\x65\156\x75\x5f\x73\154\165\x67"))], ["\x63\x6c\x61\x73\163" => self::class]);
        goto kwgswyiyuiusquis;
        wuqwccycokcwgumm:
        oqeoyeeeogmqagko:
        goto iawwcgswwmcqmcsk;
        qcsmqummmmyaqseu:
        $cciauwuwuqaywgce = null;
        goto ywgieceuausccaoo;
        emiqmswmkkiscuuu:
        $this->suicksywcwiggasc();
        goto qcsmqummmmyaqseu;
        hwskqqioyiycssus:
        if (!is_array($ywoucyskcquysiwc)) {
            goto oqeoyeeeogmqagko;
        }
        goto qgaiyikuyacyymma;
        yukmcqiuugkamaow:
        $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm);
        goto wuqwccycokcwgumm;
        ycumeemqusckwyoc:
        $aokagokqyuysuksm = ManipulateServer::get("\164\x61\x62", key($ywoucyskcquysiwc));
        goto yukmcqiuugkamaow;
        kwgswyiyuiusquis:
    }
    
    public function kccgekiqgsuwmowo($suaemuyiacqyugsm)
    {
    }
    
    public final function qcsgmgoukiouuscw() : bool
    {
        return ManipulateServer::get(self::PAGE) === $this->imkyoqyocosuqasu("\x6d\x65\156\165\137\x73\x6c\x75\x67");
    }
    public function suicksywcwiggasc()
    {
    }
}
