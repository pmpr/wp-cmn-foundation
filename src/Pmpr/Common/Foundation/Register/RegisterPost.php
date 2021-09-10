<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Register;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class RegisterPost extends Register
{
    
    protected ?array $supports = [];
    
    protected bool $canExport = true;
    
    protected ?array $taxonomies = [];
    
    protected ?string $menuIcon = null;
    
    protected ?bool $mapMetaCap = null;
    
    protected bool $hasArchive = false;
    
    protected $registerMetaBoxCb = null;
    
    protected ?int $menuPosition = null;
    
    protected ?string $mainTaxonomy = '';
    
    protected ?bool $showInAdminBar = null;
    
    protected ?bool $deleteWithUser = null;
    
    protected ?string $capabilityType = 'post';
    
    protected ?bool $excludeFromSearch = null;
    
    protected string $_editLink = 'post.php?post=%d';
    
    public function jsgkawekewookomk() : self
    {
        $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg();
        $sisssumicskyceeg = $this->giiayuqckuiecosm();
        $this->labels = ['name' => _x($kcumookcwskcyqak, 'post type general name', PR__CMN__FOUNDATION), 'add_new' => sprintf(__('Add %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'archives' => sprintf(__('%s archives', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'new_item' => sprintf(__('New %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'edit_item' => sprintf(__('Edit %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'menu_name' => _x($kcumookcwskcyqak, 'admin menu', PR__CMN__FOUNDATION), 'view_item' => sprintf(__('View %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'all_items' => sprintf(__('All %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'not_found' => sprintf(__('No %s found.', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'attributes' => sprintf(__('%s attributes', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'view_items' => sprintf(__('View %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'items_list' => sprintf(__('%s list', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'update_item' => sprintf(__('Update %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'remove_item' => sprintf(__('Remove %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'search_items' => sprintf(__('Search %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'add_new_item' => sprintf(__('Add New %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'item_updated' => sprintf(__('%s updated', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'singular_name' => _x($sisssumicskyceeg, 'post type singular name', PR__CMN__FOUNDATION), 'plural_name' => _x($kcumookcwskcyqak, 'post type plural name', PR__CMN__FOUNDATION), 'item_published' => sprintf(__('%s published', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'item_scheduled' => sprintf(__('%s scheduled', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'featured_image' => sprintf(__('%s image', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'name_admin_bar' => _x($sisssumicskyceeg, 'add new on admin bar', PR__CMN__FOUNDATION), 'insert_into_item' => sprintf(__('Put into %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'filter_items_list' => sprintf(__('Filter %s list', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'parent_item_colon' => sprintf(__('Parent %s:', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'set_featured_image' => sprintf(__('Set %s image', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'not_found_in_trash' => sprintf(__('No %s found in Trash.', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'use_featured_image' => sprintf(__('Use as %s image', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'uploaded_to_this_item' => sprintf(__('Uploaded to this %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'remove_featured_image' => sprintf(__('Remove %s image', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'items_list_navigation' => sprintf(__('%s pagination', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'item_reverted_to_draft' => sprintf(__('%s reverted to draft', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'item_published_privately' => sprintf(__('%s published privately', PR__CMN__FOUNDATION), $sisssumicskyceeg)];
        return $this;
    }
    
    public function zmqimouwawekqymc($ioqywyyeioqywogw = true) : self
    {
        $this->esgmeqiuqsaomgmw($ioqywyyeioqywogw);
        return parent::zmqimouwawekqymc($ioqywyyeioqywogw);
    }
    
    public function sqmeiugqckukykos(bool $cysoimgmicegeqyu) : self
    {
        $this->showInAdminBar = $cysoimgmicegeqyu;
        $this->soeowumgcwuiaica(true);
        return $this;
    }
    
    public function usawymkcmeicimyy(?bool $oaekgiowwoqkecwg) : self
    {
        $this->excludeFromSearch = $oaekgiowwoqkecwg;
        return $this;
    }
    
    public function qyyikeaseoskcacm() : ?string
    {
        return $this->menuIcon;
    }
    
    public function yioesawwewqaigow(?string $uuisoqqiumgmmkeg) : self
    {
        $this->menuIcon = $uuisoqqiumgmmkeg;
        return $this;
    }
    
    public function ckaeqgiaiqwsccke(int $ukekeygkycawmkyc) : self
    {
        $this->menuPosition = $ukekeygkycawmkyc;
        $this->soeowumgcwuiaica(true);
        return $this;
    }
    
    public function cwueseysoqeewkao() : ?string
    {
        return $this->capabilityType;
    }
    
    public function hsgasemokseccoao(string $eoaqkowmmukgimgw) : self
    {
        $this->capabilityType = $eoaqkowmmukgimgw;
        return $this;
    }
    
    public function kwksqwkmuuoakaqg(bool $kkkcueiayauaeqmy) : self
    {
        $this->mapMetaCap = $kkkcueiayauaeqmy;
        return $this;
    }
    
    public function aoaiwceqgsckygsg() : array
    {
        return $this->supports;
    }
    
    public function wakugsseussemkka(array $ckgaeiyesoqoemic) : self
    {
        foreach ($ckgaeiyesoqoemic as $kyiucqqkqiwkoksc) {
            $this->musuokisgmmamoua($kyiucqqkqiwkoksc);
            mwqcykaeywsmoumm:
        }
        kkwqmoeeqygoimwg:
        return $this;
    }
    
    public function musuokisgmmamoua(string $kyiucqqkqiwkoksc) : self
    {
        $this->supports[] = $kyiucqqkqiwkoksc;
        return $this;
    }
    
    public function gcuqugwgqcuyqses(string $kyiucqqkqiwkoksc) : self
    {
        ManipulateArray::gyciysooayoqiisg($this->supports, $kyiucqqkqiwkoksc);
        return $this;
    }
    
    public function yaiqmmqwucikagko(callable $ogkmiyymscemkimk) : self
    {
        $this->registerMetaBoxCb = $ogkmiyymscemkimk;
        return $this;
    }
    
    public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self
    {
        $this->taxonomies[] = $kesssewsiegssiya;
        return $this;
    }
    
    public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self
    {
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            $this->acqyqaaeeogkosoq($kesssewsiegssiya);
            ywoyioqqyuocoygk:
        }
        awgmyaycugswmwae:
        return $this;
    }
    
    public function esgmeqiuqsaomgmw(bool $auiemgkycsemicim) : self
    {
        $this->hasArchive = $auiemgkycsemicim;
        return $this;
    }
    
    public function swgooqsswqymimkw(bool $qcaaaeuoacoiweqq) : self
    {
        $this->canExport = $qcaaaeuoacoiweqq;
        return $this;
    }
    
    public function eugmaekicaygmcyi(bool $eawksymqiosoiuce) : self
    {
        $this->deleteWithUser = $eawksymqiosoiuce;
        return $this;
    }
    
    public function agywwgmoyucciqyu(string $edit_link) : self
    {
        $this->_editLink = $edit_link;
        return $this;
    }
    
    public function kyoawugmkeiysiyu() : ?string
    {
        return $this->mainTaxonomy;
    }
    
    public function ioguemyoyecgggsq(?string $ucgkgasuuyeayqie) : self
    {
        $this->mainTaxonomy = $ucgkgasuuyeayqie;
        return $this;
    }
}
