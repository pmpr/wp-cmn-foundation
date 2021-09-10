<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Page;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Notice;
use WP_Post;

class Page extends Common
{
    
    protected ?string $slug = null;
    
    protected ?string $state = null;
    
    protected ?string $title = null;
    
    protected ?string $option = null;
    
    protected bool $isPrivate = true;
    
    protected bool $hasBreadcrumb = false;
    public function __construct()
    {
        if (!$this->giiuwsmyumqwwiyq()) {
            $this->siosgoymgqsyaisu("{$this->aqcogscycyycgkuq()}_page");
        }
        if (!$this->kwowqyyougwekomi()) {
            $this->kowqseeiwuesqsok(sprintf(__('Page for %s', PR__CMN__FOUNDATION), $this->qcgakseyaikigqco()));
        }
        parent::__construct();
    }
    
    public function aqcogscycyycgkuq() : ?string
    {
        return $this->slug;
    }
    
    public function kwowqyyougwekomi() : ?string
    {
        return $this->state;
    }
    
    public function kowqseeiwuesqsok(?string $iwskiosiswyoiesg) : self
    {
        $this->state = $iwskiosiswyoiesg;
        return $this;
    }
    
    public function wegcaymyqqoyewmw(?string $aaokuekaimigoyue) : self
    {
        $this->slug = $aaokuekaimigoyue;
        return $this;
    }
    
    public function giiuwsmyumqwwiyq() : ?string
    {
        return $this->option;
    }
    
    public function siosgoymgqsyaisu(?string $omkysikckkcieckq) : self
    {
        $this->option = $omkysikckkcieckq;
        return $this;
    }
    
    public function ukguiegqykkoqcuq() : bool
    {
        return $this->isPrivate;
    }
    
    public function qmgkuqsqweecckyo() : bool
    {
        return $this->hasBreadcrumb;
    }
    
    public function qcgakseyaikigqco() : ?string
    {
        return $this->title;
    }
    
    public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self
    {
        $this->title = $meqocwsecsywiiqs;
        return $this;
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('wp', [$this, 'gosmqcmmomkqwmis'])->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea']);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('display_post_states', [$this, 'skwwysggqeeesocg'], 10, 2)->cecaguuoecmccuse("get_{$this->aqcogscycyycgkuq()}_page_permalink", [$this, 'ycqquoiyyuesegsy']);
        if ($this->ukguiegqykkoqcuq()) {
            $this->cecaguuoecmccuse('development_private_pages', [$this, 'uecosaimgwickkaa']);
        }
        if (!$this->qmgkuqsqweecckyo()) {
            $this->cecaguuoecmccuse('can_render_breadcrumb', [$this, 'qwysqkyoeymsyses']);
        }
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
    }
    public function gosmqcmmomkqwmis()
    {
        if ($this->sgeaogakoscmysgc() && $this->ayseokmqycoqaigc()) {
            $this->enqueue();
            $this->cecaguuoecmccuse('page_content_filter', [$this, 'qakiyayqiysiqqeo'], 999, 2);
        }
    }
    public function enqueue()
    {
    }
    
    public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post)
    {
        if ($this->mwikyscisascoeea() == ManipulatePost::mwikyscisascoeea($post)) {
            $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi();
        }
        return $ekcqweaieimsgqoq;
    }
    public function yeyiguyegmmyusea()
    {
        if (!ManipulateAjax::mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc()) {
            ManipulatePage::agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq());
            if ($this->ukguiegqykkoqcuq() && ManipulatePost::uqwgsuysegkweago('page') && ManipulateServer::get('post') == $this->mwikyscisascoeea()) {
                Notice::eumukgqciqgksuiq(__('Sorry, you haven\'t access to edit this page.', PR__CMN__FOUNDATION), 'private-page');
                wp_safe_redirect(wp_get_referer());
                die;
            }
        }
    }
    
    public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string
    {
        return $ewgwqamkygiqaawc;
    }
    
    public function qwysqkyoeymsyses($yciaosuiyeieceug) : bool
    {
        return $yciaosuiyeieceug && !$this->sgeaogakoscmysgc();
    }
    
    public function uecosaimgwickkaa($couiucmsqaieciue)
    {
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        if ($suaemuyiacqyugsm) {
            $couiucmsqaieciue[] = $suaemuyiacqyugsm;
        }
        return $couiucmsqaieciue;
    }
    
    public function mwikyscisascoeea() : int
    {
        return (int) DecoratorOption::get($this->giiuwsmyumqwwiyq(), false);
    }
    
    public function kyqakacqeumicgag()
    {
        return ManipulatePost::get($this->mwikyscisascoeea());
    }
    
    public function ycqquoiyyuesegsy($migiiksoiymissge = '') : string
    {
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        if ($suaemuyiacqyugsm) {
            $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm);
        }
        return $migiiksoiymissge;
    }
    
    public function sgeaogakoscmysgc() : bool
    {
        $suaemuyiacqyugsm = self::mwikyscisascoeea();
        $yeacayasgueouoqc = ManipulatePost::mwikyscisascoeea();
        return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc;
    }
    
    public function yeyowkakmkwikyis() : bool
    {
        return !$this->sgeaogakoscmysgc();
    }
    
    public function ayseokmqycoqaigc() : bool
    {
        $ymqmyyeuycgmigyo = ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc($this));
        return (bool) $this->sscegwueamckwmcy("is_{$ymqmyyeuycgmigyo}_page_enable", true);
    }
}
