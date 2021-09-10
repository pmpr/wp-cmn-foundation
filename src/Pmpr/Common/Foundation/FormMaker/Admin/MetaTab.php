<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin;

use Pmpr\Common\Foundation\Decorator\DecoratorAsset;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Traits\AttributeTrait;
use CMB2_Boxes;

class MetaTab extends Common
{
    use AttributeTrait;
    
    protected ?string $id = null;
    
    protected bool $hide = false;
    
    protected bool $once = false;
    
    protected bool $regKey = true;
    
    protected ?string $hook = null;
    
    protected ?string $topMenu = null;
    
    protected ?string $postsSlug = null;
    
    protected ?string $key = 'my_option';
    
    protected array $menuArgs = ['view_capability' => '', 'parent_slug' => '', 'page_title' => '', 'menu_title' => '', 'capability' => 'manage_options', 'menu_slug' => '', 'icon_url' => '', 'position' => null, 'network' => false];
    
    protected array $tabs = [];
    
    protected int $column = 1;
    
    protected $saveText = false;
    
    protected $resetText = false;
    
    protected array $load = [];
    
    protected ?string $title = '';
    
    protected ?string $page = null;
    
    protected ?array $metaBoxes = [];
    
    public function __construct($uusmaiomayssaecw = null)
    {
        if (is_admin() && class_exists('CMB2')) {
            $this->id = $this->iaqckqwoiseyqaku();
            $this->key = $uusmaiomayssaecw;
            parent::__construct();
        }
    }
    
    public function qsqiqgmeoowykuue() : ?array
    {
        return $this->metaBoxes;
    }
    
    public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self
    {
        $this->metaBoxes[$qkweikswegyciaie->mwikyscisascoeea()] = $qkweikswegyciaie;
        return $this;
    }
    
    public function swqsasqieqqgusew(?string $suaemuyiacqyugsm) : self
    {
        $this->page = $suaemuyiacqyugsm;
        return $this;
    }
    
    public function kyqakacqeumicgag() : ?string
    {
        return $this->page;
    }
    
    public function ecogksqmogoywequ(bool $caeimyuwaykuuaay) : self
    {
        $this->hide = $caeimyuwaykuuaay;
        return $this;
    }
    
    public function ekwgmoqoeywwwccw() : bool
    {
        return $this->hide;
    }
    
    public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self
    {
        $this->title = $meqocwsecsywiiqs;
        return $this;
    }
    
    public function qcgakseyaikigqco() : ?string
    {
        return $this->title;
    }
    
    public function licekmysugkqeoay() : array
    {
        return $this->menuArgs;
    }
    
    public function qaygoqgeieeugsey($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->menuArgs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $this;
    }
    
    public function mmsykuomogaqoaye() : ?string
    {
        return $this->hook;
    }
    
    public function oggwewqswcggccae(?string $iaakskwmyqceoscy) : self
    {
        $this->hook = $iaakskwmyqceoscy;
        return $this;
    }
    
    public function ceiqwucmgawwmawo($ioeaaqcyogamwwqc) : self
    {
        $this->saveText = $ioeaaqcyogamwwqc;
        return $this;
    }
    
    public function kusoyyuwiukiokww()
    {
        return $this->saveText;
    }
    
    public function kkigeuaeguyueaem($kqkwemukaemqoyas) : self
    {
        $this->resetText = $kqkwemukaemqoyas;
        return $this;
    }
    
    public function occsuagsiuuimcoy()
    {
        return $this->resetText;
    }
    
    public function eigooueumicckoge() : array
    {
        return $this->load;
    }
    
    public function agcaegggmmeuammg($uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->licekmysugkqeoay(), $uusmaiomayssaecw);
    }
    
    public function ecmssiawmckmucas(bool $msykisgooaaamcio) : self
    {
        $this->regKey = $msykisgooaaamcio;
        return $this;
    }
    
    public function agciemoaikwmiugi() : bool
    {
        return $this->regKey;
    }
    
    public function iaqckqwoiseyqaku() : string
    {
        return 'cmo' . rand(1000, 99999);
    }
    
    public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self
    {
        if ($qgoqiacsiccwoawi > 2 || $qgoqiacsiccwoawi < 1) {
            $qgoqiacsiccwoawi = 1;
        }
        $this->column = $qgoqiacsiccwoawi;
        return $this;
    }
    
    public function myywwqkyiwawwquy() : int
    {
        return $this->column;
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        return $this->key;
    }
    
    public function gcgmwakaoecqcuwo(?string $uusmaiomayssaecw) : self
    {
        $this->key = $uusmaiomayssaecw;
        return $this;
    }
    public function wigskegsqequoeks()
    {
        
        $kiiwewqkgqgqwwue = is_multisite() && $this->agcaegggmmeuammg('network') ? 'network_' : '';
        $this->qcsmikeggeemccuu('admin_head', [$this, 'uuqqkgyqekmgycgq'])->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu('admin_enqueue_scripts', [$this, 'wqqckkmqakiquycs'])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}admin_menu", [$this, 'soccomakweqgskic'], 12)->qcsmikeggeemccuu('cmb2_render_options_save_button', [$this, 'ecyyqsgwwuukgssg']);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        if ($this->agciemoaikwmiugi()) {
            register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc());
        }
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg('parent_slug');
        $ewuukoycimkekouc = $this->agcaegggmmeuammg('menu_slug');
        $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom == $ewuukoycimkekouc);
        $this->swqsasqieqqgusew($ewuukoycimkekouc ? $ewuukoycimkekouc : $this->cisyiemkeykgkomc());
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg('view_capability');
        if (!$eiiwoqgkgmosakem) {
            $this->qaygoqgeieeugsey('view_capability', $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg('capability') : false);
        }
    }
    
    public function ccauywsgwsesgmua() : bool
    {
        return $this->once;
    }
    
    public function ikqkaioeswqeaqkw(?string $uwkoaemcqekeqqkw) : self
    {
        $this->topMenu = $uwkoaemcqekeqqkw;
        return $this;
    }
    
    public function eyqwmckgumyaoams() : ?string
    {
        return $this->topMenu;
    }
    
    public function aeecsqoyykuekais(?string $sgeeumkioegwiymu) : self
    {
        $this->postsSlug = $sgeeumkioegwiymu;
        return $this;
    }
    
    public function kecacgyqmgeeqmme() : ?string
    {
        return $this->postsSlug;
    }
    
    public function equiyaoamqmaeckc() : array
    {
        return $this->tabs;
    }
    
    public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self
    {
        $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}_{$cciauwuwuqaywgce->cisyiemkeykgkomc()}_tab", $cciauwuwuqaywgce, $this);
        if ($cciauwuwuqaywgce instanceof Tab) {
            $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        }
        return $this;
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self
    {
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            qkcsykuocwuyaice:
        }
        oocuemosmeeekgas:
        return $this;
    }
    
    public function myomgmiksogoikuc() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    public function qessyiueeiwwgyag()
    {
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg('view_capability');
        if (!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || DecoratorUser::scmcyesmmikkucie($eiiwoqgkgmosakem))) {
            $iogqeouiuqyewuqe = '';
            $kqweykcqkgkmoqay = '';
            $this->qigsyyqgewgskemg('wrap cmb2-options-page cmo-options-page')->qigsyyqgewgskemg($this->cisyiemkeykgkomc());
            $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($this->equiyaoamqmaeckc());
            foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
                if ($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik()) {
                    $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea();
                    $qgoqiacsiccwoawi = 1;
                    
                    $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}_tab_side_metaboxes", $cciauwuwuqaywgce->weookicuaacigemm());
                    if (!empty($scwwkgcyecqgioqs)) {
                        foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) {
                            if ($qkweikswegyciaie instanceof MetaBox) {
                                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}_side_metaboxe", $qkweikswegyciaie);
                                if ($qkweikswegyciaie->mukiwuqwmywsckco()) {
                                    $qkweikswegyciaie->register($this->cisyiemkeykgkomc());
                                    $this->omameoyeausyugmw($qkweikswegyciaie, "form_maker_tab_side_container_{$aokagokqyuysuksm}", 'side');
                                    $qgoqiacsiccwoawi = 2;
                                }
                            }
                            aoquoewagkseayug:
                        }
                        qiaimmucomukkeka:
                    }
                    $iogqeouiuqyewuqe .= ManipulateHTML::uuccukgasskgimsq('a', ['id' => "opt-tab-{$aokagokqyuysuksm}", 'href' => '#', 'class' => 'nav-tab opt-tab pr-tab', 'data-optcontent' => "#opt-content-{$aokagokqyuysuksm}"], [$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()]);
                    $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw('content', ['id' => $aokagokqyuysuksm, 'column' => $qgoqiacsiccwoawi, 'description' => $cciauwuwuqaywgce->meqceykmywmqgoym(), 'container_attrs' => ['id' => "opt-content-{$aokagokqyuysuksm}", 'class' => 'opt-content', 'data-boxes' => implode(',', array_keys(ManipulateArray::yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue())))]]);
                }
                egsycocugqyyswsi:
            }
            uoeasoimegouymka:
            $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]);
            echo $this->iuygowkemiiwqmiw('metatab', ['key' => $this->cisyiemkeykgkomc(), 'hook' => $this->mmsykuomogaqoaye(), 'tabs' => $iogqeouiuqyewuqe, 'page' => $this->kyqakacqeumicgag(), 'column' => $this->myywwqkyiwawwquy(), 'nonces' => [wp_nonce_field('meta-box-order', 'meta-box-order-nonce', false, false), wp_nonce_field('closedpostboxes', 'closedpostboxesnonce', false, false)], 'buttons' => $qyukicweqoisimwg, 'contents' => $kqweykcqkgkmoqay, 'page_title' => esc_html(get_admin_page_title()), 'container_attrs' => $this->ccekeuwwqqoiwuwy()]);
            
            $this->once = false;
        }
    }
    
    public function makgumuaykymweaq() : array
    {
        $ywmkwiwkosakssii = [];
        
        $omwmuycmeqcqokom = $this->eyqwmckgumyaoams();
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg('parent_slug') ? $this->agcaegggmmeuammg('parent_slug') : $omwmuycmeqcqokom;
        
        $cmyoswawcimsecyy = $this->agcaegggmmeuammg('page_title') ? $this->agcaegggmmeuammg('page_title') : $this->qcgakseyaikigqco();
        
        if ($omwmuycmeqcqokom) {
            
            $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "?post_type={$this->kecacgyqmgeeqmme()}" : '';
            $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc;
        }
        
        $ywmkwiwkosakssii[] = $cmyoswawcimsecyy;
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg('menu_title') ? $this->agcaegggmmeuammg('menu_title') : $cmyoswawcimsecyy;
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg('capability');
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg('menu_slug') ? $this->agcaegggmmeuammg('menu_slug') : $this->cisyiemkeykgkomc();
        
        $ywmkwiwkosakssii[] = [$this, 'qessyiueeiwwgyag'];
        
        if (!$omwmuycmeqcqokom) {
            
            $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg('icon_url') ? $this->agcaegggmmeuammg('icon_url') : '';
            
            $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg('position') === null ? null : intval($this->agcaegggmmeuammg('position'));
        } else {
            
            $ywmkwiwkosakssii[] = null;
        }
        
        $ywmkwiwkosakssii['cb'] = $omwmuycmeqcqokom ? 'add_submenu_page' : 'add_menu_page';
        return $ywmkwiwkosakssii;
    }
    public function soccomakweqgskic()
    {
        
        $ywmkwiwkosakssii = $this->makgumuaykymweaq();
        
        $iaakskwmyqceoscy = $ywmkwiwkosakssii['cb']($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6]);
        $this->oggwewqswcggccae($iaakskwmyqceoscy);
        
        $this->qcsmikeggeemccuu("admin_print_styles-{$this->mmsykuomogaqoaye()}", ['CMB2_hookup', 'enqueue_cmb_css'])->qcsmikeggeemccuu("add_meta_boxes_{$this->mmsykuomogaqoaye()}", [$this, 'wacemkqmiwuqouga'])->qcsmikeggeemccuu("load-{$this->mmsykuomogaqoaye()}", [$this, 'ogkiiewscemaqkwg']);
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('after_init_hook', false), $iaakskwmyqceoscy, $this);
        
        $this->siqqwyaiwgagokug();
    }
    private function siqqwyaiwgagokug()
    {
        $symcuwcoqkwoscsg = $this->eigooueumicckoge();
        $iaakskwmyqceoscy = $this->mmsykuomogaqoaye();
        if ($symcuwcoqkwoscsg) {
            foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) {
                $ywmkwiwkosakssii = intval(ManipulateArray::get($sqaougiyimwumoqi, 'args', 1));
                $aiamqeawckcsuaou = ManipulateArray::get($sqaougiyimwumoqi, 'action');
                $ekiuyucoiagmscgy = ManipulateArray::get($sqaougiyimwumoqi, 'callback');
                $sqqewmoeaekuyyas = intval(ManipulateArray::get($sqaougiyimwumoqi, 'priority', 10));
                if ($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi['action'], '-[hook]')) {
                    
                    $aiamqeawckcsuaou = str_replace('[hook]', $iaakskwmyqceoscy, $aiamqeawckcsuaou);
                    
                    $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10;
                    
                    $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1;
                    
                    $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas);
                }
                ciucewqgyoiouesq:
            }
            osuscoaaomwcqkew:
        }
    }
    public function wacemkqmiwuqouga()
    {
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        if ($ywoucyskcquysiwc) {
            foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
                $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc());
                if ($cciauwuwuqaywgce->sekaaukqmiysugws()) {
                    $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}_tab_{$cciauwuwuqaywgce->cisyiemkeykgkomc()}_metaboxes", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this);
                    
                    $uaqusiikkokccqou = ManipulateArray::yaeiiwwyckwugsem($uaqusiikkokccqou);
                    foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
                        $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}_tab_{$cciauwuwuqaywgce->cisyiemkeykgkomc()}_metabox_{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this);
                        if ($qkweikswegyciaie instanceof MetaBox) {
                            $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm();
                            $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === 'side' ? 'normal' : $mgkceomocowocqyo);
                        }
                        oyiuemaaykgkqqam:
                    }
                    ussceseaimqywuiy:
                }
                mkomygccqkmkumsi:
            }
            cgmgqucewwssmicq:
        }
        foreach ($this->qsqiqgmeoowykuue() as $qkweikswegyciaie) {
            if ($qkweikswegyciaie instanceof MetaBox) {
                $this->sceiskoouaiqocqo($qkweikswegyciaie, $qkweikswegyciaie->register($this->cisyiemkeykgkomc()), 'side');
            }
            sqmoqymckwsogsqg:
        }
        gqmewagyagamokok:
    }
    
    public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = 'normal')
    {
        if (is_array($uoeiskamgscgeccq)) {
            $uoeiskamgscgeccq = ManipulateArray::get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea());
        }
        if ($this->uaicqoagkoeacawy($uoeiskamgscgeccq)) {
            $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea();
            $this->qcsmikeggeemccuu("cmb2_save_options-page_fields_{$aokagokqyuysuksm}", [$this, 'goyemikogeuskgas'], 10, 2);
            $wyicesskmckwqeec = "postbox_classes_{$this->mmsykuomogaqoaye()}_{$aokagokqyuysuksm}";
            if ($this->myomgmiksogoikuc() && $mgkceomocowocqyo !== 'side') {
                $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, 'ewskkwuwkkkaqwgk']);
            }
            
            if ($uoeiskamgscgeccq->meta_box['closed']) {
                $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, 'yiemusgqmoymsgeg']);
            }
            $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo);
        }
    }
    
    public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo)
    {
        add_meta_box($qkweikswegyciaie->mwikyscisascoeea(), $qkweikswegyciaie->iwqugwigmoiagwec(), [$this, 'ausymmgsksoqwuqk'], $iaakskwmyqceoscy, $mgkceomocowocqyo, $qkweikswegyciaie->yywskysiycwkwsgw());
    }
    public function wqqckkmqakiquycs()
    {
        if ($this->csaueuycewaiuaay()) {
            if ($this->myomgmiksogoikuc()) {
                $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}-admin";
                DecoratorAsset::imsomwwswyoquoqk($eueuqacmukymcyya, $this->miocmcoykayoyyau()->get('multiopts.js'));
                $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
                $cciauwuwuqaywgce = reset($ywoucyskcquysiwc);
                DecoratorAsset::fowiaymccsmewemu($eueuqacmukymcyya, 'PMPROptTabs', ['key' => $this->kyqakacqeumicgag(), 'posttype' => $this->kecacgyqmgeeqmme(), 'defaulttab' => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']);
            }
        }
    }
    public function uuqqkgyqekmgycgq()
    {
        if ($this->myomgmiksogoikuc()) {
            $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw('metatab.css', ['page' => $this->kyqakacqeumicgag()]);
            ManipulateHTML::awwqwouuoioauoaw('style', ['id' => 'pr-tab-cleanup-css'], true, $icyaoosaykeskiuu);
        }
    }
    public function iaggsikquucsoiko()
    {
        ManipulateHTML::awwqwouuoioauoaw('script', [], true, 'jQuery(document).ready(function(){postboxes.add_postbox_toggles("postbox-container");});');
    }
    public function ecyyqsgwwuukgssg()
    {
        if ($this->csaueuycewaiuaay() && $this->ekwgmoqoeywwwccw()) {
            echo $this->uaasoaieuoymsgsi();
        }
    }
    
    private function uaicqoagkoeacawy($uoeiskamgscgeccq) : bool
    {
        
        return isset($uoeiskamgscgeccq->meta_box['show_on']['key']) && $uoeiskamgscgeccq->meta_box['show_on']['key'] === 'options-page' && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box['show_on']['value']);
    }
    
    public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu)
    {
        if ($this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $sogsqsawoyqmqsqu && !$this->ccauywsgwsesgmua()) {
            add_settings_error("{$this->cisyiemkeykgkomc()}-notices", '', __('Settings Updated', PR__CMN__FOUNDATION), 'updated');
            settings_errors("{$this->cisyiemkeykgkomc()}-notices");
            $this->once = true;
        }
    }
    
    public function uaasoaieuoymsgsi() : ?string
    {
        return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ['name' => 'submit-cmb', 'type' => 'submit', 'class' => 'button-primary']);
    }
    
    public function omeeeegkauuouaka() : string
    {
        return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ['name' => 'reset-cmb', 'type' => 'button', 'class' => 'button-secondary']);
    }
    
    public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = []) : string
    {
        return $pkyyagewkiyckmwy ? ManipulateHTML::qgsekwygcgawekeq('input', ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ['class' => 'button', 'value' => $pkyyagewkiyckmwy])) : '';
    }
    
    public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = 'opt-hidden';
        return $cmkqisoeyioisqaw;
    }
    
    public function yiemusgqmoymsgeg($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = 'closed';
        return $cmkqisoeyioisqaw;
    }
    public function ogkiiewscemaqkwg()
    {
        $this->cqscqicucmeamkyq("add_meta_boxes_{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq('add_meta_boxes', $this->mmsykuomogaqoaye(), null);
    }
    
    public function ausymmgsksoqwuqk($post, $qkweikswegyciaie)
    {
        
        $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie['id'], $this->cisyiemkeykgkomc());
        if ($scegeeyqweaksmki) {
            $icwicymcioeyeyek = $_POST;
            if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) {
                
                $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek);
            } else {
                if ($this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) {
                    
                    DecoratorOption::delete($this->cisyiemkeykgkomc());
                }
            }
            
            $scegeeyqweaksmki->show_form();
        }
    }
    
    private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki) : bool
    {
        $gaqymcswicmikcuu = $this->qiswuqmeyaysqcis($scegeeyqweaksmki);
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $gaqymcswicmikcuu);
        $ooewkimkcskcwsso = ManipulateArray::get($icwicymcioeyeyek, 'reset-cmb');
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, 'object_id');
        return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce(ManipulateServer::ayueggmoqeeukqmq($gaqymcswicmikcuu), $gaqymcswicmikcuu);
    }
    
    private function negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki) : bool
    {
        $gaqymcswicmikcuu = $this->qiswuqmeyaysqcis($scegeeyqweaksmki);
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $gaqymcswicmikcuu);
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, 'object_id');
        return $this->oqmggeywwyoaocca($scegeeyqweaksmki, 'save_fields') && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $gaqymcswicmikcuu);
    }
    
    public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool
    {
        if (!$icwicymcioeyeyek) {
            $icwicymcioeyeyek = $_POST;
        }
        return (bool) ManipulateArray::get($icwicymcioeyeyek, 'submit-cmb', false);
    }
    
    public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array
    {
        $saouceauqqiwcwas = [];
        if ($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui)) {
            foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) {
                if (!is_object($qkweikswegyciaie)) {
                    $saouceauqqiwcwas[$uusmaiomayssaecw] = CMB2_Boxes::get($qkweikswegyciaie);
                }
                ceiwqkyquikcemmo:
            }
            uycesqqkoeamocgm:
        }
        return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas;
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return $this->cisyiemkeykgkomc() === ManipulateServer::get('page');
    }
    
    public function __toString()
    {
        return self::uqggkiomyiceyooa();
    }
}
