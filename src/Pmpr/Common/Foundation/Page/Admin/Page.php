<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        qeycaskgikeokega:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            eeaiusyckugwoams:
        }
        goto miosmgaacmsgswos;
        aeycackeqwkqeokg:
        return $this;
        goto sqyeywwoeiewwkim;
        sqyeywwoeiewwkim:
    }
    public function wigskegsqequoeks()
    {
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\x70\x61\147\145\x5f\x61\144\155\x69\x6e\137\x62\145\x66\157\162\x65\137{$this->imkyoqyocosuqasu("\x70\x61\x72\x65\156\164\137\x73\x6c\165\147")}\137\164\141\x62\163");
        $this->qcsmikeggeemccuu($iaakskwmyqceoscy, [$this, "\153\x63\x63\x67\x65\x6b\151\x71\147\163\x75\x77\x6d\x6f\x77\x6f"])->qcsmikeggeemccuu("\141\144\x6d\151\x6e\137\x6d\x65\156\x75", [$this, "\145\165\161\147\167\151\163\143\x77\x67\x71\x6b\x71\x6b\145\143"]);
    }
    public function euqgwiscwgqkqkec()
    {
        goto ewecawmiqcgeaque;
        aogumaeoimukciac:
        if (!$ewuukoycimkekouc) {
            goto keemgiqiykwguocw;
        }
        goto oiugacuckwmecqgk;
        wiksqikkuaiyqmcu:
        keemgiqiykwguocw:
        goto quocmskwwaumyiae;
        ewecawmiqcgeaque:
        $ewuukoycimkekouc = $this->kooiucqkggeagccu();
        goto aogumaeoimukciac;
        wakamsgsammaqwqg:
        ManipulateMenu::aemwscceysomkuea($ewuukoycimkekouc);
        goto wiksqikkuaiyqmcu;
        oiugacuckwmecqgk:
        $ewuukoycimkekouc["\146\165\156\x63\164\151\x6f\x6e"] = [$this, "\x72\x65\156\144\x65\162"];
        goto wakamsgsammaqwqg;
        quocmskwwaumyiae:
    }
    public function render()
    {
        goto oqeoyeeeogmqagko;
        qgaiyikuyacyymma:
        $aokagokqyuysuksm = ManipulateServer::get("\x74\x61\x62", key($ywoucyskcquysiwc));
        goto ycumeemqusckwyoc;
        emiqmswmkkiscuuu:
        $cciauwuwuqaywgce = null;
        goto qcsmqummmmyaqseu;
        hwskqqioyiycssus:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($ywoucyskcquysiwc);
        goto qgaiyikuyacyymma;
        ycumeemqusckwyoc:
        $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm);
        goto yukmcqiuugkamaow;
        yukmcqiuugkamaow:
        ukwwiwwkmuqemkic:
        goto wuqwccycokcwgumm;
        oqeoyeeeogmqagko:
        $this->suicksywcwiggasc();
        goto emiqmswmkkiscuuu;
        wuqwccycokcwgumm:
        echo $this->iuygowkemiiwqmiw("\x69\x6e\144\x65\x78", ["\x74\141\x62\163" => $ywoucyskcquysiwc, "\160\141\147\x65" => $this, "\141\x63\x74\x69\x6f\x6e\x73" => $this->ckiimaaecogswcsu(), "\154\x69\163\x74\x5f\x74\x61\142\154\145" => $this->waeasakssissiuqg(), "\143\x75\162\x72\x65\x6e\x74\137\x74\x61\x62" => $cciauwuwuqaywgce, "\143\x75\162\x72\x65\x6e\x74\137\160\141\147\145\137\x6c\151\x6e\x6b" => admin_url("\141\144\x6d\151\x6e\x2e\160\x68\160\77\x70\x61\x67\145\75" . $this->imkyoqyocosuqasu("\155\145\x6e\165\137\163\154\165\x67"))], ["\x63\154\141\163\163" => self::class]);
        goto iawwcgswwmcqmcsk;
        qcsmqummmmyaqseu:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto ywgieceuausccaoo;
        ywgieceuausccaoo:
        if (!is_array($ywoucyskcquysiwc)) {
            goto ukwwiwwkmuqemkic;
        }
        goto hwskqqioyiycssus;
        iawwcgswwmcqmcsk:
    }
    
    public function kccgekiqgsuwmowo($suaemuyiacqyugsm)
    {
    }
    
    public final function qcsgmgoukiouuscw() : bool
    {
        return ManipulateServer::get(self::PAGE) === $this->imkyoqyocosuqasu("\155\145\x6e\x75\x5f\x73\154\165\147");
    }
    public function suicksywcwiggasc()
    {
    }
}
