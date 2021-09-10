<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\x70\141\147\145\x5f\x61\144\x6d\151\x6e\x5f\x62\145\146\x6f\162\145\137{$this->imkyoqyocosuqasu("\x70\x61\x72\x65\x6e\x74\x5f\x73\154\165\147")}\x5f\x74\x61\142\x73");
        $this->qcsmikeggeemccuu($iaakskwmyqceoscy, [$this, "\x6b\143\143\x67\145\153\x69\x71\x67\x73\x75\167\155\x6f\x77\x6f"])->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\x5f\155\145\x6e\x75", [$this, "\145\165\161\147\x77\x69\163\x63\x77\x67\161\153\161\x6b\145\143"]);
    }
    public function euqgwiscwgqkqkec()
    {
        goto ewecawmiqcgeaque;
        oiugacuckwmecqgk:
        $ewuukoycimkekouc["\146\x75\x6e\143\x74\x69\157\156"] = [$this, "\x72\x65\x6e\144\x65\x72"];
        goto wakamsgsammaqwqg;
        ewecawmiqcgeaque:
        $ewuukoycimkekouc = $this->kooiucqkggeagccu();
        goto aogumaeoimukciac;
        wiksqikkuaiyqmcu:
        keemgiqiykwguocw:
        goto quocmskwwaumyiae;
        aogumaeoimukciac:
        if (!$ewuukoycimkekouc) {
            goto keemgiqiykwguocw;
        }
        goto oiugacuckwmecqgk;
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
        qgaiyikuyacyymma:
        $aokagokqyuysuksm = ManipulateServer::get("\164\x61\142", key($ywoucyskcquysiwc));
        goto ycumeemqusckwyoc;
        yukmcqiuugkamaow:
        ukwwiwwkmuqemkic:
        goto wuqwccycokcwgumm;
        wuqwccycokcwgumm:
        echo $this->iuygowkemiiwqmiw("\151\156\x64\x65\170", ["\x74\141\x62\x73" => $ywoucyskcquysiwc, "\x70\x61\x67\145" => $this, "\141\143\164\x69\157\156\x73" => $this->ckiimaaecogswcsu(), "\154\x69\163\164\x5f\164\x61\142\154\x65" => $this->waeasakssissiuqg(), "\143\x75\162\x72\x65\156\x74\137\164\141\x62" => $cciauwuwuqaywgce, "\x63\x75\x72\x72\145\156\164\137\x70\141\147\145\x5f\154\x69\156\153" => admin_url("\141\144\155\151\x6e\56\160\x68\x70\77\160\x61\147\145\75" . $this->imkyoqyocosuqasu("\x6d\145\156\x75\137\163\154\165\x67"))], ["\143\154\141\163\163" => self::class]);
        goto iawwcgswwmcqmcsk;
        ywgieceuausccaoo:
        if (!is_array($ywoucyskcquysiwc)) {
            goto ukwwiwwkmuqemkic;
        }
        goto hwskqqioyiycssus;
        qcsmqummmmyaqseu:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto ywgieceuausccaoo;
        oqeoyeeeogmqagko:
        $this->suicksywcwiggasc();
        goto emiqmswmkkiscuuu;
        ycumeemqusckwyoc:
        $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm);
        goto yukmcqiuugkamaow;
        hwskqqioyiycssus:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($ywoucyskcquysiwc);
        goto qgaiyikuyacyymma;
        iawwcgswwmcqmcsk:
    }
    
    public function kccgekiqgsuwmowo($suaemuyiacqyugsm)
    {
    }
    
    public final function qcsgmgoukiouuscw() : bool
    {
        return ManipulateServer::get(self::PAGE) === $this->imkyoqyocosuqasu("\155\145\x6e\x75\137\x73\154\x75\x67");
    }
    public function suicksywcwiggasc()
    {
    }
}
