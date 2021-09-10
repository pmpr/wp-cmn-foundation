<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto mcqegwkqsoygamey;
        cayayuqimskqkayc:
        if ($this->kwowqyyougwekomi()) {
            goto iayicqkseeycaaqk;
        }
        goto qgcicekcucaauaka;
        uyeqsmcyogggskye:
        ioawiemsmsyyssyu:
        goto cayayuqimskqkayc;
        cqcskimegccygqym:
        iayicqkseeycaaqk:
        goto eoasqcamsowcwweq;
        mcqegwkqsoygamey:
        if ($this->giiuwsmyumqwwiyq()) {
            goto ioawiemsmsyyssyu;
        }
        goto csgcicsyauawamqw;
        eoasqcamsowcwweq:
        parent::__construct();
        goto osysmqqcyasqyscm;
        csgcicsyauawamqw:
        $this->siosgoymgqsyaisu("{$this->aqcogscycyycgkuq()}\x5f\x70\x61\x67\x65");
        goto uyeqsmcyogggskye;
        qgcicekcucaauaka:
        $this->kowqseeiwuesqsok(sprintf(__("\x50\141\147\x65\x20\x66\x6f\162\40\x25\x73", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco()));
        goto cqcskimegccygqym;
        osysmqqcyasqyscm:
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
        $this->qcsmikeggeemccuu("\167\160", [$this, "\x67\x6f\x73\x6d\x71\143\x6d\x6d\x6f\x6d\x6b\x71\167\x6d\x69\x73"])->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x69\156\151\164"])->qcsmikeggeemccuu("\141\144\x6d\x69\156\137\x69\x6e\x69\164", [$this, "\171\x65\171\151\147\165\171\x65\147\x6d\155\171\165\x73\x65\x61"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        goto mywoocikqmgcqsog;
        swekqaeccossoigy:
        if (!$this->ukguiegqykkoqcuq()) {
            goto aoooaekesimaisms;
        }
        goto omommciksgmosmku;
        omommciksgmosmku:
        $this->cecaguuoecmccuse("\x64\145\166\x65\154\x6f\160\x6d\145\156\x74\137\x70\x72\151\166\141\164\145\x5f\x70\x61\x67\145\163", [$this, "\x75\x65\x63\157\x73\141\151\x6d\x67\167\151\143\153\153\x61\141"]);
        goto kyqsamceokgyseks;
        cwwusaokqsuisggk:
        $this->cecaguuoecmccuse("\143\141\156\137\162\145\x6e\x64\145\x72\x5f\x62\x72\145\x61\x64\143\x72\x75\155\142", [$this, "\x71\x77\x79\163\161\x6b\171\157\x65\171\x6d\163\171\163\145\x73"]);
        goto osiqkqkuswkomaui;
        osiqkqkuswkomaui:
        yosaemoyeeiykeai:
        goto sescoamicygaiooy;
        saoqimsoqwweysso:
        if ($this->qmgkuqsqweecckyo()) {
            goto yosaemoyeeiykeai;
        }
        goto cwwusaokqsuisggk;
        sescoamicygaiooy:
        parent::kgquecmsgcouyaya();
        goto cscgqokcugoeacek;
        mywoocikqmgcqsog:
        $this->cecaguuoecmccuse("\x64\151\x73\160\154\141\171\137\x70\157\163\x74\137\x73\x74\x61\x74\x65\x73", [$this, "\163\x6b\167\x77\x79\163\147\x67\x71\x65\145\x65\163\x6f\143\147"], 10, 2)->cecaguuoecmccuse("\147\145\x74\x5f{$this->aqcogscycyycgkuq()}\137\160\141\147\x65\137\x70\145\x72\155\x61\154\151\156\x6b", [$this, "\x79\143\161\161\165\x6f\x69\171\x79\x75\145\163\145\x67\x73\171"]);
        goto swekqaeccossoigy;
        kyqsamceokgyseks:
        aoooaekesimaisms:
        goto saoqimsoqwweysso;
        cscgqokcugoeacek:
    }
    public function init()
    {
    }
    public function gosmqcmmomkqwmis()
    {
        goto wgmwswuwumgsyomo;
        ekeiwcgqeikqiyks:
        quysmmuogiamswey:
        goto aqwugymawgissagm;
        omoiwieaiucgikse:
        $this->cecaguuoecmccuse("\160\141\147\x65\137\143\x6f\x6e\164\145\156\164\137\x66\x69\x6c\164\145\162", [$this, "\x71\x61\153\151\x79\141\171\x71\x69\x79\163\x69\x71\x71\x65\x6f"], 999, 2);
        goto ekeiwcgqeikqiyks;
        wgmwswuwumgsyomo:
        if (!($this->sgeaogakoscmysgc() && $this->ayseokmqycoqaigc())) {
            goto quysmmuogiamswey;
        }
        goto ykmkawakkqkuuaym;
        ykmkawakkqkuuaym:
        $this->enqueue();
        goto omoiwieaiucgikse;
        aqwugymawgissagm:
    }
    public function enqueue()
    {
    }
    
    public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post)
    {
        goto cuyoyqcisqywkqaa;
        iuueumuwsooouiao:
        gayuaogckqsomgsy:
        goto ioagaggwicqesuyq;
        cwoocwkqsoosaqkm:
        $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi();
        goto iuueumuwsooouiao;
        ioagaggwicqesuyq:
        return $ekcqweaieimsgqoq;
        goto gcwcoaasoisikiis;
        cuyoyqcisqywkqaa:
        if (!($this->mwikyscisascoeea() == ManipulatePost::mwikyscisascoeea($post))) {
            goto gayuaogckqsomgsy;
        }
        goto cwoocwkqsoosaqkm;
        gcwcoaasoisikiis:
    }
    public function yeyiguyegmmyusea()
    {
        goto agsmckaiamicsmku;
        symooqoecgcicomq:
        ikcmyyecwuoacqyg:
        goto ekywgoqskwiummes;
        cymiymiigkyegwqq:
        ManipulatePage::agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq());
        goto umqcguqgqygqossy;
        cuqiuaqqmiwysuss:
        oiwgeqquqqoougyk:
        goto symooqoecgcicomq;
        agsmckaiamicsmku:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc())) {
            goto ikcmyyecwuoacqyg;
        }
        goto cymiymiigkyegwqq;
        umqcguqgqygqossy:
        if (!($this->ukguiegqykkoqcuq() && ManipulatePost::uqwgsuysegkweago("\160\141\147\145") && ManipulateServer::get("\x70\157\x73\x74") == $this->mwikyscisascoeea())) {
            goto oiwgeqquqqoougyk;
        }
        goto kciusguyocmsuaeu;
        kciusguyocmsuaeu:
        Notice::eumukgqciqgksuiq(__("\x53\x6f\162\x72\171\54\x20\171\x6f\x75\x20\150\x61\166\145\156\x27\164\x20\141\143\x63\145\163\163\40\164\x6f\40\145\144\151\x74\x20\x74\150\151\x73\x20\160\141\x67\x65\x2e", PR__CMN__FOUNDATION), "\160\162\x69\x76\x61\x74\145\x2d\x70\141\x67\145");
        goto eiqaaeeseksuaoso;
        akkyiomimkeoskos:
        die;
        goto cuqiuaqqmiwysuss;
        eiqaaeeseksuaoso:
        wp_safe_redirect(wp_get_referer());
        goto akkyiomimkeoskos;
        ekywgoqskwiummes:
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
        goto sgwymesyqucmwwkw;
        gcmeeeyemkqeacws:
        $couiucmsqaieciue[] = $suaemuyiacqyugsm;
        goto jsageqqwqkykweig;
        sgwymesyqucmwwkw:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto meywqiioyoucokow;
        meywqiioyoucokow:
        if (!$suaemuyiacqyugsm) {
            goto qacikuseouqsqmwq;
        }
        goto gcmeeeyemkqeacws;
        weyeyookuqayoakq:
        return $couiucmsqaieciue;
        goto mogeeqsawaqyeaaa;
        jsageqqwqkykweig:
        qacikuseouqsqmwq:
        goto weyeyookuqayoakq;
        mogeeqsawaqyeaaa:
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
        goto ysukiaoekgcswucm;
        mcgskyeeqqsyswam:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm);
        goto aiecqsmqwwceuigs;
        aiecqsmqwwceuigs:
        qosuyiciqgmakegs:
        goto yugiaygagouuesgo;
        ycsockioamocssqc:
        if (!$suaemuyiacqyugsm) {
            goto qosuyiciqgmakegs;
        }
        goto mcgskyeeqqsyswam;
        yugiaygagouuesgo:
        return $migiiksoiymissge;
        goto oyogcgssysygmeam;
        ysukiaoekgcswucm:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto ycsockioamocssqc;
        oyogcgssysygmeam:
    }
    
    public function sgeaogakoscmysgc() : bool
    {
        goto aogemgkeckkmuyus;
        aogemgkeckkmuyus:
        $suaemuyiacqyugsm = self::mwikyscisascoeea();
        goto iugkiwiucuaueycm;
        gagmssewkqoakmic:
        return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc;
        goto qmwcqkmogmmseeaa;
        iugkiwiucuaueycm:
        $yeacayasgueouoqc = ManipulatePost::mwikyscisascoeea();
        goto gagmssewkqoakmic;
        qmwcqkmogmmseeaa:
    }
    
    public function yeyowkakmkwikyis() : bool
    {
        return !$this->sgeaogakoscmysgc();
    }
    
    public function ayseokmqycoqaigc() : bool
    {
        $ymqmyyeuycgmigyo = ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc($this));
        return (bool) $this->sscegwueamckwmcy("\151\x73\137{$ymqmyyeuycgmigyo}\137\160\x61\x67\145\x5f\145\x6e\x61\142\154\x65", true);
    }
}
