<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Register;


class RegisterTaxonomy extends Register
{
    
    protected ?array $objectType = [];
    
    protected bool $singleValue = true;
    
    protected bool $dropdown = true;
    
    protected $metaBoxCb = null;
    
    protected ?bool $showTagcloude = null;
    
    protected ?string $defaultTerm = null;
    
    protected ?bool $showInQuickEdit = null;
    
    protected bool $showInAdminColumn = false;
    
    protected $metaBoxSanitizeCb = null;
    
    protected $updateCountCallback = null;
    public function __construct()
    {
        $this->hierarchical = true;
        $this->ckwgqocyuaysggma('hierarchical', false);
        $this->ykuiociqyewiqyog('_update_post_term_count');
    }
    
    public function aaamyckgicycisqq() : ?array
    {
        return $this->objectType;
    }
    
    public function kukswgcoysaeescm(?string $mqyaskyaekmkegmg) : self
    {
        $this->objectType[] = $mqyaskyaekmkegmg;
        return $this;
    }
    
    public function jsgkawekewookomk() : self
    {
        $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg();
        $sisssumicskyceeg = $this->giiayuqckuiecosm();
        $this->labels = ['name' => _x($kcumookcwskcyqak, 'taxonomy general name', PR__CMN__FOUNDATION), 'menu_name' => $kcumookcwskcyqak, 'edit_item' => sprintf(__('Edit %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'all_items' => sprintf(__('All %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'not_found' => sprintf(__('No %s found.', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'update_item' => sprintf(__('Update %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'parent_item' => sprintf(__('Parent %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'search_items' => sprintf(__('Search %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'add_new_item' => sprintf(__('Add New %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'singular_name' => _x($sisssumicskyceeg, 'taxonomy singular name', PR__CMN__FOUNDATION), 'new_item_name' => sprintf(__('New %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'popular_items' => sprintf(__('Popular %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'parent_item_colon' => sprintf(__('Parent %s', PR__CMN__FOUNDATION), $sisssumicskyceeg), 'add_or_remove_items' => sprintf(__('Add or remove %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'choose_from_most_used' => sprintf(__('Choose from the most used %s', PR__CMN__FOUNDATION), $kcumookcwskcyqak), 'separate_items_with_commas' => sprintf(__('Separate %s with commas', PR__CMN__FOUNDATION), $kcumookcwskcyqak)];
        return $this;
    }
    
    public function ickqomquaqgqywkw(bool $qyucoagsiyeieyiu) : self
    {
        $this->singleValue = $qyucoagsiyeieyiu;
        return $this;
    }
    
    public function yesqcwicqyewqaco() : bool
    {
        return $this->singleValue;
    }
    
    public function oyyqeqoaumkqgccq(bool $gmksciycsesoouoi) : self
    {
        $this->dropdown = $gmksciycsesoouoi;
        return $this;
    }
    
    public function suyyiewcaissamks() : bool
    {
        return $this->dropdown;
    }
    
    public function msckacgsuwwakaey($usyakqeaquiiyocq) : self
    {
        $this->metaBoxCb = $usyakqeaquiiyocq;
        return $this;
    }
    
    public function aeguuokqgmcmsqws(?string $omaeqcgaiaisiciq) : self
    {
        $this->defaultTerm = $omaeqcgaiaisiciq;
        return $this;
    }
    
    public function wqockewwqeywgogw(?bool $qwussygmwiueacsy) : self
    {
        $this->showTagcloude = $qwussygmwiueacsy;
        return $this;
    }
    
    public function wiewcwmcsecmqmgs(?bool $wgekuymcmeccyiqq) : self
    {
        $this->showInQuickEdit = $wgekuymcmeccyiqq;
        return $this;
    }
    
    public function gwkwegiquiisoucg($wsocgiuqgmyamuoq) : self
    {
        $this->metaBoxSanitizeCb = $wsocgiuqgmyamuoq;
        return $this;
    }
    
    public function kayuyeomskgoseuo(bool $emawwccgosaksiem) : self
    {
        $this->showInAdminColumn = $emawwccgosaksiem;
        return $this;
    }
    
    public function ykuiociqyewiqyog(?string $cmqiaeqeiiggaqoe) : self
    {
        $this->updateCountCallback = $cmqiaeqeiiggaqoe;
        return $this;
    }
    
    public function ggqekkkocygywmoy() : ?array
    {
        return $this->capabilities;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        if (!$this->ggqekkkocygywmoy()) {
            $this->iqoguoscqueomqsk(['manage_terms' => 'manage_categories', 'edit_terms' => 'manage_categories', 'delete_terms' => 'manage_categories', 'assign_terms' => 'edit_posts']);
        }
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
    }
}
