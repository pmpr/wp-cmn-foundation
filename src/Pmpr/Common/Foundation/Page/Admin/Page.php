<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            yyamycyesguwueuw:
        }
        waewaiuiogywqigu:
        return $this;
    }
    public function wigskegsqequoeks()
    {
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("page_admin_before_{$this->imkyoqyocosuqasu('parent_slug')}_tabs");
        $this->qcsmikeggeemccuu($iaakskwmyqceoscy, [$this, 'kccgekiqgsuwmowo'])->qcsmikeggeemccuu('admin_menu', [$this, 'euqgwiscwgqkqkec']);
    }
    public function euqgwiscwgqkqkec()
    {
        $ewuukoycimkekouc = $this->kooiucqkggeagccu();
        if ($ewuukoycimkekouc) {
            $ewuukoycimkekouc['function'] = [$this, 'render'];
            ManipulateMenu::aemwscceysomkuea($ewuukoycimkekouc);
        }
    }
    public function render()
    {
        $this->suicksywcwiggasc();
        $cciauwuwuqaywgce = null;
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        if (is_array($ywoucyskcquysiwc)) {
            
            $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($ywoucyskcquysiwc);
            $aokagokqyuysuksm = ManipulateServer::get('tab', key($ywoucyskcquysiwc));
            $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm);
        }
        echo $this->iuygowkemiiwqmiw('index', ['tabs' => $ywoucyskcquysiwc, 'page' => $this, 'actions' => $this->ckiimaaecogswcsu(), 'list_table' => $this->waeasakssissiuqg(), 'current_tab' => $cciauwuwuqaywgce, 'current_page_link' => admin_url('admin.php?page=' . $this->imkyoqyocosuqasu('menu_slug'))], ['class' => self::class]);
    }
    
    public function kccgekiqgsuwmowo($suaemuyiacqyugsm)
    {
    }
    
    public final function qcsgmgoukiouuscw() : bool
    {
        return ManipulateServer::get(self::PAGE) === $this->imkyoqyocosuqasu('menu_slug');
    }
    public function suicksywcwiggasc()
    {
    }
}
