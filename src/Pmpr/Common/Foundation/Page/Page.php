<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto ayayswaesiscymcw;
        iayicqkseeycaaqk:
        kmccaesicogsgcmk:
        goto mcqegwkqsoygamey;
        ioawiemsmsyyssyu:
        $this->siosgoymgqsyaisu("{$this->aqcogscycyycgkuq()}\x5f\x70\x61\147\145");
        goto iayicqkseeycaaqk;
        mcqegwkqsoygamey:
        if ($this->kwowqyyougwekomi()) {
            goto ewucaygocgykeweg;
        }
        goto csgcicsyauawamqw;
        csgcicsyauawamqw:
        $this->kowqseeiwuesqsok(sprintf(__("\120\141\147\x65\40\x66\157\162\40\x25\163", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco()));
        goto uyeqsmcyogggskye;
        ayayswaesiscymcw:
        if ($this->giiuwsmyumqwwiyq()) {
            goto kmccaesicogsgcmk;
        }
        goto ioawiemsmsyyssyu;
        cayayuqimskqkayc:
        parent::__construct();
        goto qgcicekcucaauaka;
        uyeqsmcyogggskye:
        ewucaygocgykeweg:
        goto cayayuqimskqkayc;
        qgcicekcucaauaka:
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
        $this->qcsmikeggeemccuu("\167\160", [$this, "\x67\157\163\155\x71\x63\155\155\157\155\x6b\x71\x77\x6d\151\163"])->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x69\156\x69\164"])->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\x69\156\x69\164", [$this, "\171\x65\171\x69\x67\x75\x79\145\x67\155\x6d\x79\165\163\145\141"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        goto osysmqqcyasqyscm;
        kyqsamceokgyseks:
        eoasqcamsowcwweq:
        goto saoqimsoqwweysso;
        omommciksgmosmku:
        $this->cecaguuoecmccuse("\x63\141\x6e\x5f\x72\x65\x6e\x64\145\162\x5f\142\162\145\141\x64\143\x72\165\155\x62", [$this, "\161\167\171\x73\161\x6b\x79\x6f\145\171\x6d\x73\x79\x73\x65\163"]);
        goto kyqsamceokgyseks;
        osysmqqcyasqyscm:
        $this->cecaguuoecmccuse("\x64\151\163\x70\x6c\x61\171\x5f\x70\x6f\163\164\x5f\x73\164\141\x74\145\x73", [$this, "\163\x6b\x77\x77\x79\163\147\x67\161\145\145\145\163\x6f\143\147"], 10, 2)->cecaguuoecmccuse("\x67\145\x74\x5f{$this->aqcogscycyycgkuq()}\x5f\x70\x61\147\145\137\160\145\162\x6d\141\x6c\x69\156\153", [$this, "\171\x63\x71\x71\165\157\x69\171\171\165\x65\163\x65\147\163\x79"]);
        goto aoooaekesimaisms;
        mywoocikqmgcqsog:
        cqcskimegccygqym:
        goto swekqaeccossoigy;
        yosaemoyeeiykeai:
        $this->cecaguuoecmccuse("\144\x65\x76\x65\154\157\160\155\145\x6e\164\x5f\160\x72\151\166\x61\x74\x65\137\160\141\x67\145\x73", [$this, "\165\x65\143\157\163\x61\151\x6d\147\x77\151\x63\x6b\153\141\141"]);
        goto mywoocikqmgcqsog;
        swekqaeccossoigy:
        if ($this->qmgkuqsqweecckyo()) {
            goto eoasqcamsowcwweq;
        }
        goto omommciksgmosmku;
        saoqimsoqwweysso:
        parent::kgquecmsgcouyaya();
        goto cwwusaokqsuisggk;
        aoooaekesimaisms:
        if (!$this->ukguiegqykkoqcuq()) {
            goto cqcskimegccygqym;
        }
        goto yosaemoyeeiykeai;
        cwwusaokqsuisggk:
    }
    public function init()
    {
    }
    public function gosmqcmmomkqwmis()
    {
        goto sescoamicygaiooy;
        cscgqokcugoeacek:
        $this->enqueue();
        goto quysmmuogiamswey;
        quysmmuogiamswey:
        $this->cecaguuoecmccuse("\x70\x61\147\145\137\143\157\x6e\164\x65\x6e\x74\x5f\x66\x69\x6c\x74\145\x72", [$this, "\161\x61\x6b\x69\x79\141\171\x71\151\171\163\151\161\161\x65\157"], 999, 2);
        goto wgmwswuwumgsyomo;
        sescoamicygaiooy:
        if (!($this->sgeaogakoscmysgc() && $this->ayseokmqycoqaigc())) {
            goto osiqkqkuswkomaui;
        }
        goto cscgqokcugoeacek;
        wgmwswuwumgsyomo:
        osiqkqkuswkomaui:
        goto ykmkawakkqkuuaym;
        ykmkawakkqkuuaym:
    }
    public function enqueue()
    {
    }
    
    public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post)
    {
        goto ekeiwcgqeikqiyks;
        ekeiwcgqeikqiyks:
        if (!($this->mwikyscisascoeea() == ManipulatePost::mwikyscisascoeea($post))) {
            goto omoiwieaiucgikse;
        }
        goto aqwugymawgissagm;
        cuyoyqcisqywkqaa:
        return $ekcqweaieimsgqoq;
        goto cwoocwkqsoosaqkm;
        gayuaogckqsomgsy:
        omoiwieaiucgikse:
        goto cuyoyqcisqywkqaa;
        aqwugymawgissagm:
        $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi();
        goto gayuaogckqsomgsy;
        cwoocwkqsoosaqkm:
    }
    public function yeyiguyegmmyusea()
    {
        goto gcwcoaasoisikiis;
        eiqaaeeseksuaoso:
        ioagaggwicqesuyq:
        goto akkyiomimkeoskos;
        oiwgeqquqqoougyk:
        ManipulatePage::agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq());
        goto ikcmyyecwuoacqyg;
        kciusguyocmsuaeu:
        iuueumuwsooouiao:
        goto eiqaaeeseksuaoso;
        gcwcoaasoisikiis:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc())) {
            goto ioagaggwicqesuyq;
        }
        goto oiwgeqquqqoougyk;
        ikcmyyecwuoacqyg:
        if (!($this->ukguiegqykkoqcuq() && ManipulatePost::uqwgsuysegkweago("\160\x61\147\145") && ManipulateServer::get("\160\x6f\x73\164") == $this->mwikyscisascoeea())) {
            goto iuueumuwsooouiao;
        }
        goto agsmckaiamicsmku;
        agsmckaiamicsmku:
        Notice::eumukgqciqgksuiq(__("\x53\157\162\162\x79\x2c\40\171\x6f\x75\x20\150\x61\166\145\156\x27\164\x20\x61\143\x63\145\163\x73\x20\x74\157\40\145\144\x69\164\40\164\x68\x69\163\x20\160\141\147\x65\56", PR__CMN__FOUNDATION), "\x70\x72\151\x76\141\164\145\x2d\160\x61\x67\145");
        goto cymiymiigkyegwqq;
        umqcguqgqygqossy:
        die;
        goto kciusguyocmsuaeu;
        cymiymiigkyegwqq:
        wp_safe_redirect(wp_get_referer());
        goto umqcguqgqygqossy;
        akkyiomimkeoskos:
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
        goto symooqoecgcicomq;
        sgwymesyqucmwwkw:
        cuqiuaqqmiwysuss:
        goto meywqiioyoucokow;
        ekywgoqskwiummes:
        if (!$suaemuyiacqyugsm) {
            goto cuqiuaqqmiwysuss;
        }
        goto qacikuseouqsqmwq;
        symooqoecgcicomq:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto ekywgoqskwiummes;
        qacikuseouqsqmwq:
        $couiucmsqaieciue[] = $suaemuyiacqyugsm;
        goto sgwymesyqucmwwkw;
        meywqiioyoucokow:
        return $couiucmsqaieciue;
        goto gcmeeeyemkqeacws;
        gcmeeeyemkqeacws:
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
        goto weyeyookuqayoakq;
        weyeyookuqayoakq:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto mogeeqsawaqyeaaa;
        qosuyiciqgmakegs:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm);
        goto ysukiaoekgcswucm;
        ysukiaoekgcswucm:
        jsageqqwqkykweig:
        goto ycsockioamocssqc;
        ycsockioamocssqc:
        return $migiiksoiymissge;
        goto mcgskyeeqqsyswam;
        mogeeqsawaqyeaaa:
        if (!$suaemuyiacqyugsm) {
            goto jsageqqwqkykweig;
        }
        goto qosuyiciqgmakegs;
        mcgskyeeqqsyswam:
    }
    
    public function sgeaogakoscmysgc() : bool
    {
        goto aiecqsmqwwceuigs;
        aiecqsmqwwceuigs:
        $suaemuyiacqyugsm = self::mwikyscisascoeea();
        goto yugiaygagouuesgo;
        yugiaygagouuesgo:
        $yeacayasgueouoqc = ManipulatePost::mwikyscisascoeea();
        goto oyogcgssysygmeam;
        oyogcgssysygmeam:
        return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc;
        goto aogemgkeckkmuyus;
        aogemgkeckkmuyus:
    }
    
    public function yeyowkakmkwikyis() : bool
    {
        return !$this->sgeaogakoscmysgc();
    }
    
    public function ayseokmqycoqaigc() : bool
    {
        $ymqmyyeuycgmigyo = ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc($this));
        return (bool) $this->sscegwueamckwmcy("\151\163\x5f{$ymqmyyeuycgmigyo}\137\160\x61\147\x65\137\x65\156\141\142\x6c\x65", true);
    }
}
