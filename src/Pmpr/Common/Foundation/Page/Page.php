<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        eoasqcamsowcwweq:
        parent::__construct();
        goto osysmqqcyasqyscm;
        cqcskimegccygqym:
        iayicqkseeycaaqk:
        goto eoasqcamsowcwweq;
        cayayuqimskqkayc:
        if ($this->kwowqyyougwekomi()) {
            goto iayicqkseeycaaqk;
        }
        goto qgcicekcucaauaka;
        qgcicekcucaauaka:
        $this->kowqseeiwuesqsok(sprintf(__("\120\141\147\145\40\x66\157\162\x20\x25\163", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco()));
        goto cqcskimegccygqym;
        csgcicsyauawamqw:
        $this->siosgoymgqsyaisu("{$this->aqcogscycyycgkuq()}\x5f\160\x61\x67\145");
        goto uyeqsmcyogggskye;
        mcqegwkqsoygamey:
        if ($this->giiuwsmyumqwwiyq()) {
            goto ioawiemsmsyyssyu;
        }
        goto csgcicsyauawamqw;
        uyeqsmcyogggskye:
        ioawiemsmsyyssyu:
        goto cayayuqimskqkayc;
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
        $this->qcsmikeggeemccuu("\167\160", [$this, "\x67\x6f\x73\x6d\x71\x63\155\x6d\x6f\155\x6b\161\167\x6d\x69\x73"])->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\151\156\151\x74"])->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\x5f\151\156\151\164", [$this, "\x79\x65\171\x69\147\165\171\145\x67\x6d\155\171\x75\163\145\141"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        goto mywoocikqmgcqsog;
        osiqkqkuswkomaui:
        yosaemoyeeiykeai:
        goto sescoamicygaiooy;
        swekqaeccossoigy:
        if (!$this->ukguiegqykkoqcuq()) {
            goto aoooaekesimaisms;
        }
        goto omommciksgmosmku;
        mywoocikqmgcqsog:
        $this->cecaguuoecmccuse("\144\151\x73\160\154\x61\x79\x5f\x70\x6f\163\x74\137\163\x74\141\x74\x65\163", [$this, "\163\153\167\167\171\163\x67\x67\161\145\x65\x65\x73\157\x63\x67"], 10, 2)->cecaguuoecmccuse("\x67\x65\164\x5f{$this->aqcogscycyycgkuq()}\137\x70\x61\x67\145\x5f\160\x65\162\x6d\141\x6c\x69\x6e\153", [$this, "\171\x63\x71\161\165\x6f\x69\171\x79\165\145\163\x65\x67\163\x79"]);
        goto swekqaeccossoigy;
        sescoamicygaiooy:
        parent::kgquecmsgcouyaya();
        goto cscgqokcugoeacek;
        kyqsamceokgyseks:
        aoooaekesimaisms:
        goto saoqimsoqwweysso;
        cwwusaokqsuisggk:
        $this->cecaguuoecmccuse("\x63\141\156\137\162\x65\x6e\144\x65\162\137\x62\162\x65\141\144\x63\162\x75\x6d\x62", [$this, "\161\167\x79\x73\161\153\x79\157\x65\171\x6d\x73\x79\x73\x65\x73"]);
        goto osiqkqkuswkomaui;
        saoqimsoqwweysso:
        if ($this->qmgkuqsqweecckyo()) {
            goto yosaemoyeeiykeai;
        }
        goto cwwusaokqsuisggk;
        omommciksgmosmku:
        $this->cecaguuoecmccuse("\x64\145\x76\x65\x6c\157\160\155\145\x6e\164\x5f\x70\162\151\x76\x61\x74\145\x5f\x70\141\147\x65\163", [$this, "\x75\x65\143\157\163\x61\151\155\x67\167\x69\x63\153\x6b\141\141"]);
        goto kyqsamceokgyseks;
        cscgqokcugoeacek:
    }
    public function init()
    {
    }
    public function gosmqcmmomkqwmis()
    {
        goto wgmwswuwumgsyomo;
        omoiwieaiucgikse:
        $this->cecaguuoecmccuse("\160\x61\x67\145\x5f\143\157\156\164\145\x6e\164\137\146\151\x6c\x74\x65\162", [$this, "\161\141\x6b\x69\171\x61\171\x71\151\171\x73\151\161\161\x65\x6f"], 999, 2);
        goto ekeiwcgqeikqiyks;
        wgmwswuwumgsyomo:
        if (!($this->sgeaogakoscmysgc() && $this->ayseokmqycoqaigc())) {
            goto quysmmuogiamswey;
        }
        goto ykmkawakkqkuuaym;
        ykmkawakkqkuuaym:
        $this->enqueue();
        goto omoiwieaiucgikse;
        ekeiwcgqeikqiyks:
        quysmmuogiamswey:
        goto aqwugymawgissagm;
        aqwugymawgissagm:
    }
    public function enqueue()
    {
    }
    
    public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post)
    {
        goto cuyoyqcisqywkqaa;
        ioagaggwicqesuyq:
        return $ekcqweaieimsgqoq;
        goto gcwcoaasoisikiis;
        cwoocwkqsoosaqkm:
        $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi();
        goto iuueumuwsooouiao;
        cuyoyqcisqywkqaa:
        if (!($this->mwikyscisascoeea() == ManipulatePost::mwikyscisascoeea($post))) {
            goto gayuaogckqsomgsy;
        }
        goto cwoocwkqsoosaqkm;
        iuueumuwsooouiao:
        gayuaogckqsomgsy:
        goto ioagaggwicqesuyq;
        gcwcoaasoisikiis:
    }
    public function yeyiguyegmmyusea()
    {
        goto agsmckaiamicsmku;
        umqcguqgqygqossy:
        if (!($this->ukguiegqykkoqcuq() && ManipulatePost::uqwgsuysegkweago("\160\x61\147\145") && ManipulateServer::get("\160\157\163\164") == $this->mwikyscisascoeea())) {
            goto oiwgeqquqqoougyk;
        }
        goto kciusguyocmsuaeu;
        akkyiomimkeoskos:
        die;
        goto cuqiuaqqmiwysuss;
        agsmckaiamicsmku:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc())) {
            goto ikcmyyecwuoacqyg;
        }
        goto cymiymiigkyegwqq;
        kciusguyocmsuaeu:
        Notice::eumukgqciqgksuiq(__("\x53\157\x72\x72\x79\x2c\x20\x79\x6f\165\x20\x68\141\x76\145\x6e\47\x74\40\x61\x63\x63\x65\163\163\40\164\x6f\40\x65\144\151\164\40\x74\150\151\x73\40\x70\x61\x67\145\x2e", PR__CMN__FOUNDATION), "\x70\162\151\x76\141\164\145\55\160\141\147\x65");
        goto eiqaaeeseksuaoso;
        cuqiuaqqmiwysuss:
        oiwgeqquqqoougyk:
        goto symooqoecgcicomq;
        cymiymiigkyegwqq:
        ManipulatePage::agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq());
        goto umqcguqgqygqossy;
        symooqoecgcicomq:
        ikcmyyecwuoacqyg:
        goto ekywgoqskwiummes;
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
        sgwymesyqucmwwkw:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto meywqiioyoucokow;
        meywqiioyoucokow:
        if (!$suaemuyiacqyugsm) {
            goto qacikuseouqsqmwq;
        }
        goto gcmeeeyemkqeacws;
        jsageqqwqkykweig:
        qacikuseouqsqmwq:
        goto weyeyookuqayoakq;
        weyeyookuqayoakq:
        return $couiucmsqaieciue;
        goto mogeeqsawaqyeaaa;
        gcmeeeyemkqeacws:
        $couiucmsqaieciue[] = $suaemuyiacqyugsm;
        goto jsageqqwqkykweig;
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
        ysukiaoekgcswucm:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto ycsockioamocssqc;
        ycsockioamocssqc:
        if (!$suaemuyiacqyugsm) {
            goto qosuyiciqgmakegs;
        }
        goto mcgskyeeqqsyswam;
        aiecqsmqwwceuigs:
        qosuyiciqgmakegs:
        goto yugiaygagouuesgo;
        yugiaygagouuesgo:
        return $migiiksoiymissge;
        goto oyogcgssysygmeam;
        mcgskyeeqqsyswam:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm);
        goto aiecqsmqwwceuigs;
        oyogcgssysygmeam:
    }
    
    public function sgeaogakoscmysgc() : bool
    {
        goto aogemgkeckkmuyus;
        gagmssewkqoakmic:
        return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc;
        goto qmwcqkmogmmseeaa;
        iugkiwiucuaueycm:
        $yeacayasgueouoqc = ManipulatePost::mwikyscisascoeea();
        goto gagmssewkqoakmic;
        aogemgkeckkmuyus:
        $suaemuyiacqyugsm = self::mwikyscisascoeea();
        goto iugkiwiucuaueycm;
        qmwcqkmogmmseeaa:
    }
    
    public function yeyowkakmkwikyis() : bool
    {
        return !$this->sgeaogakoscmysgc();
    }
    
    public function ayseokmqycoqaigc() : bool
    {
        $ymqmyyeuycgmigyo = ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc($this));
        return (bool) $this->sscegwueamckwmcy("\151\163\137{$ymqmyyeuycgmigyo}\x5f\x70\141\147\145\137\x65\x6e\141\x62\x6c\145", true);
    }
}
