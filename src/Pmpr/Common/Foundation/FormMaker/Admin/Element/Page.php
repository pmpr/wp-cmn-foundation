<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\FormMaker\Admin\MetaTab;
use Exception;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Page extends Element
{
    
    protected ?string $type = '';
    
    protected ?string $label = '';
    
    protected ?string $pageTitle = '';
    
    protected ?string $menuTitle = '';
    
    protected ?MetaTab $metaTab = null;
    
    protected ?string $parentMenu = '';
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('cmb2_admin_init', [$this, 'icwmkesyskgskquu'], 12)->qcsmikeggeemccuu('admin_enqueue_scripts', [$this, 'euywywgssiqosooc']);
        parent::wigskegsqequoeks();
    }
    
    public function eaiyegoagkgeowae()
    {
        $suaemuyiacqyugsm = ManipulateServer::get('page', false);
        return $suaemuyiacqyugsm && $suaemuyiacqyugsm === self::symcgieuakksimmu()->cisyiemkeykgkomc();
    }
    public function imsomwwswyoquoqk()
    {
        
    }
    public function myyikeyuuomqoyew()
    {
        
    }
    
    public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self
    {
        $this->aeqcqgsamsqomowm()->sikqggwmmykuiymy($qkweikswegyciaie);
        return $this;
    }
    
    public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self
    {
        $this->aeqcqgsamsqomowm()->aucimgwswmgaocae($cciauwuwuqaywgce);
        return $this;
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self
    {
        $this->aeqcqgsamsqomowm()->ciwuiwsyckiiogwo($ywoucyskcquysiwc);
        return $this;
    }
    
    public function gueasuouwqysmomu() : ?string
    {
        return $this->type;
    }
    
    public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self
    {
        $this->type = $sqeykgyoooqysmca;
        return $this;
    }
    
    public function aeqcqgsamsqomowm() : ?MetaTab
    {
        return $this->metaTab;
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        return $this->label;
    }
    
    public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self
    {
        $this->label = $pkyyagewkiyckmwy;
        return $this;
    }
    
    public function mmqossqsksemasay() : ?string
    {
        return $this->pageTitle;
    }
    
    public function cowekeaeqoiuokue(?string $cmyoswawcimsecyy) : self
    {
        $this->pageTitle = $cmyoswawcimsecyy;
        return $this;
    }
    
    public function kigkkuoayyscqiuq() : ?string
    {
        return $this->menuTitle;
    }
    
    public function wweqioyisauoyoga(?string $kuysccmeoqgaiumc) : self
    {
        $this->menuTitle = $kuysccmeoqgaiumc;
        return $this;
    }
    
    public function cgugaaoykcyiomuk() : ?string
    {
        return $this->parentMenu;
    }
    
    public function gyiwwuiiqgqmocmy(?string $cicseccwqcweeksc) : self
    {
        $this->parentMenu = $cicseccwqcweeksc;
        return $this;
    }
    
    public function icwmkesyskgskquu() : ?bool
    {
        try {
            if (!ManipulateAjax::mcgoysmkqsqooceq()) {
                $uqcooyiiyysckskk = MetaTab::ocmycskcuiawkecq($this->cisyiemkeykgkomc());
                $uqcooyiiyysckskk->gswweykyogmsyawy($this->qcgakseyaikigqco())->ikqkaioeswqeaqkw($this->cgugaaoykcyiomuk())->qigsyyqgewgskemg('pr-page pr-metabox-page')->qaygoqgeieeugsey('page_title', $this->mmqossqsksemasay())->qaygoqgeieeugsey('menu_title', $this->kigkkuoayyscqiuq())->qaygoqgeieeugsey('capability', $this->gwaeeegmgggawiyi())->qaygoqgeieeugsey('view_capability', $this->gwaeeegmgggawiyi());
                $this->cosqcmekuiigqywc($uqcooyiiyysckskk);
                $this->metaTab = $uqcooyiiyysckskk;
                if ($uqcooyiiyysckskk->csaueuycewaiuaay()) {
                    $this->ecwgiiuacoaokqkw();
                    $ywoucyskcquysiwc = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->cisyiemkeykgkomc()}_tabs"), [], $uqcooyiiyysckskk);
                    if ($ywoucyskcquysiwc) {
                        $uqcooyiiyysckskk->ciwuiwsyckiiogwo($ywoucyskcquysiwc);
                    }
                    self::asimeyiqqkeawyoq();
                }
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            
        }
        return parent::icwmkesyskgskquu();
    }
    
    public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab
    {
        return $uqcooyiiyysckskk;
    }
    
    public function suegwaomueaiseeo() : ?string
    {
        $eeamcawaiqocomwy = null;
        $omwmuycmeqcqokom = $this->cgugaaoykcyiomuk();
        $ugwmmoaywcoucski = admin_url($omwmuycmeqcqokom);
        if ($ugwmmoaywcoucski) {
            $eeamcawaiqocomwy = add_query_arg(['page' => $this->cisyiemkeykgkomc()], $ugwmmoaywcoucski);
        }
        return $eeamcawaiqocomwy;
    }
    public function euywywgssiqosooc()
    {
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        if ($uqcooyiiyysckskk && $uqcooyiiyysckskk->csaueuycewaiuaay()) {
            $this->imsomwwswyoquoqk();
            $this->myyikeyuuomqoyew();
        }
    }
}
