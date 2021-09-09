<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto asmiwssgmoaaoswm;
        qmgcgicaaqquoicw:
        yiemweuwugqwcooa:
        goto yaiiekwggusgygac;
        uwkammcmgokwweew:
        $this->kowqseeiwuesqsok(sprintf(__("\x50\x61\x67\145\x20\146\x6f\x72\40\45\x73", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco()));
        goto qmgcgicaaqquoicw;
        qswoscmyiawaeaek:
        ymoaemsamquwomcs:
        goto uackuyqecwisyieg;
        yaiiekwggusgygac:
        parent::__construct();
        goto gmmeasywcygwkugq;
        uackuyqecwisyieg:
        if ($this->kwowqyyougwekomi()) {
            goto yiemweuwugqwcooa;
        }
        goto uwkammcmgokwweew;
        akcksasayaumouky:
        $this->siosgoymgqsyaisu("{$this->aqcogscycyycgkuq()}\137\160\x61\x67\x65");
        goto qswoscmyiawaeaek;
        asmiwssgmoaaoswm:
        if ($this->giiuwsmyumqwwiyq()) {
            goto ymoaemsamquwomcs;
        }
        goto akcksasayaumouky;
        gmmeasywcygwkugq:
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
        $this->qcsmikeggeemccuu("\167\x70", [$this, "\x67\157\x73\x6d\x71\143\155\155\x6f\155\153\161\167\x6d\x69\x73"])->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\x69\156\x69\x74"])->qcsmikeggeemccuu("\x61\144\155\151\156\137\151\x6e\x69\x74", [$this, "\171\145\171\151\x67\x75\x79\145\x67\x6d\x6d\171\x75\163\145\x61"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        goto yciwiygwyqaeoqwo;
        gkcakkuoeioaieee:
        if ($this->qmgkuqsqweecckyo()) {
            goto wsymmqucieigkeac;
        }
        goto cwcwemecykowqwui;
        kmokokcqewwcwyws:
        if (!$this->ukguiegqykkoqcuq()) {
            goto eiumaaaqmcqiuqgs;
        }
        goto mwqsmcweqikkcksk;
        cqgwyoacewoaecik:
        eiumaaaqmcqiuqgs:
        goto gkcakkuoeioaieee;
        cwcwemecykowqwui:
        $this->cecaguuoecmccuse("\143\141\x6e\x5f\x72\145\x6e\x64\145\x72\137\142\162\x65\141\x64\143\162\x75\x6d\142", [$this, "\x71\x77\171\163\x71\153\x79\x6f\145\x79\x6d\x73\171\163\145\163"]);
        goto sacesysuwmcykeuo;
        ycisoqiyiiyqqwwm:
        parent::kgquecmsgcouyaya();
        goto uyowaccwwyusqkuc;
        mwqsmcweqikkcksk:
        $this->cecaguuoecmccuse("\x64\x65\166\x65\x6c\157\x70\x6d\x65\156\164\x5f\x70\x72\x69\x76\x61\x74\x65\137\160\x61\x67\x65\163", [$this, "\x75\145\x63\x6f\x73\x61\x69\x6d\x67\x77\x69\143\153\153\141\141"]);
        goto cqgwyoacewoaecik;
        yciwiygwyqaeoqwo:
        $this->cecaguuoecmccuse("\144\151\163\x70\154\141\171\x5f\x70\x6f\163\x74\x5f\163\x74\141\164\145\163", [$this, "\x73\153\167\x77\171\163\x67\147\161\x65\145\145\163\157\x63\x67"], 10, 2)->cecaguuoecmccuse("\x67\145\164\137{$this->aqcogscycyycgkuq()}\137\x70\x61\147\145\137\160\x65\x72\x6d\x61\154\x69\156\153", [$this, "\x79\143\x71\x71\x75\x6f\151\171\171\x75\x65\163\x65\147\x73\171"]);
        goto kmokokcqewwcwyws;
        sacesysuwmcykeuo:
        wsymmqucieigkeac:
        goto ycisoqiyiiyqqwwm;
        uyowaccwwyusqkuc:
    }
    public function init()
    {
    }
    public function gosmqcmmomkqwmis()
    {
        goto sesyqeyukqeuwckk;
        cyyaquqmmceukggi:
        $this->enqueue();
        goto ogyiiuogeeaywkic;
        scmoqmqikogqcuew:
        usimgkkmqgmqiqug:
        goto iuiuisqqeosykycg;
        sesyqeyukqeuwckk:
        if (!($this->sgeaogakoscmysgc() && $this->ayseokmqycoqaigc())) {
            goto usimgkkmqgmqiqug;
        }
        goto cyyaquqmmceukggi;
        ogyiiuogeeaywkic:
        $this->cecaguuoecmccuse("\160\x61\x67\145\x5f\x63\157\156\164\x65\156\164\137\x66\x69\x6c\164\x65\162", [$this, "\x71\x61\153\151\171\x61\171\161\x69\x79\163\x69\x71\161\145\157"], 999, 2);
        goto scmoqmqikogqcuew;
        iuiuisqqeosykycg:
    }
    public function enqueue()
    {
    }
    
    public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post)
    {
        goto saikcqqkyoeikuyo;
        saikcqqkyoeikuyo:
        if (!($this->mwikyscisascoeea() == ManipulatePost::mwikyscisascoeea($post))) {
            goto giqwqyiaiemgguye;
        }
        goto acgausemsusqaeas;
        ackamyewsisqcmia:
        giqwqyiaiemgguye:
        goto guqgkmaoggceoumc;
        acgausemsusqaeas:
        $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi();
        goto ackamyewsisqcmia;
        guqgkmaoggceoumc:
        return $ekcqweaieimsgqoq;
        goto mkeogqemimomcgsm;
        mkeogqemimomcgsm:
    }
    public function yeyiguyegmmyusea()
    {
        goto giyaooswwsuyuema;
        giyaooswwsuyuema:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc())) {
            goto ecsskqmyqyuamyym;
        }
        goto oieimyigeaywmmco;
        syekaumywgekyoca:
        die;
        goto wimcauwoukmwgcwc;
        cmqkuqqmciawcqaq:
        Notice::eumukgqciqgksuiq(__("\123\x6f\x72\162\171\54\40\171\x6f\x75\40\150\141\166\x65\x6e\47\164\x20\141\143\x63\x65\x73\163\x20\164\x6f\x20\x65\x64\151\164\x20\x74\150\151\163\40\x70\141\x67\x65\x2e", PR__CMN__FOUNDATION), "\x70\162\151\166\141\x74\x65\55\x70\x61\x67\145");
        goto sgcuekgueuimciki;
        oieimyigeaywmmco:
        ManipulatePage::agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq());
        goto wwwcacoscyqesksm;
        sgcuekgueuimciki:
        wp_safe_redirect(wp_get_referer());
        goto syekaumywgekyoca;
        wwwcacoscyqesksm:
        if (!($this->ukguiegqykkoqcuq() && ManipulatePost::uqwgsuysegkweago("\x70\x61\147\x65") && ManipulateServer::get("\x70\x6f\x73\164") == $this->mwikyscisascoeea())) {
            goto cumykwakewgamugu;
        }
        goto cmqkuqqmciawcqaq;
        qwaqsogsaaegoiko:
        ecsskqmyqyuamyym:
        goto wwkekusquqscgmsm;
        wimcauwoukmwgcwc:
        cumykwakewgamugu:
        goto qwaqsogsaaegoiko;
        wwkekusquqscgmsm:
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
        goto ismooqwiqgmegcue;
        akqwmskmmcamuwkm:
        if (!$suaemuyiacqyugsm) {
            goto ooiysqkgmiqmkgeq;
        }
        goto cqsiewasswyayuyk;
        cqsiewasswyayuyk:
        $couiucmsqaieciue[] = $suaemuyiacqyugsm;
        goto gyayocggoaickkqq;
        ucoeooiewkkwwyuy:
        return $couiucmsqaieciue;
        goto iuwaekscacmamkeu;
        gyayocggoaickkqq:
        ooiysqkgmiqmkgeq:
        goto ucoeooiewkkwwyuy;
        ismooqwiqgmegcue:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto akqwmskmmcamuwkm;
        iuwaekscacmamkeu:
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
        goto qakaoeiwgeuckeka;
        gwqyuyucgguaisyg:
        sewcwygikycqyqmu:
        goto simsoqkqsiqmwsaa;
        gacweccyqemocmky:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm);
        goto gwqyuyucgguaisyg;
        qakaoeiwgeuckeka:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto qyowkusecoyawauc;
        qyowkusecoyawauc:
        if (!$suaemuyiacqyugsm) {
            goto sewcwygikycqyqmu;
        }
        goto gacweccyqemocmky;
        simsoqkqsiqmwsaa:
        return $migiiksoiymissge;
        goto saekawmmwcmsyyaq;
        saekawmmwcmsyyaq:
    }
    
    public function sgeaogakoscmysgc() : bool
    {
        goto gocmieowkqeqwcks;
        gocmieowkqeqwcks:
        $suaemuyiacqyugsm = self::mwikyscisascoeea();
        goto ucaocaceeuqiggso;
        qqaecgmomioggcyu:
        return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc;
        goto iwaausiukycagkau;
        ucaocaceeuqiggso:
        $yeacayasgueouoqc = ManipulatePost::mwikyscisascoeea();
        goto qqaecgmomioggcyu;
        iwaausiukycagkau:
    }
    
    public function yeyowkakmkwikyis() : bool
    {
        return !$this->sgeaogakoscmysgc();
    }
    
    public function ayseokmqycoqaigc() : bool
    {
        $ymqmyyeuycgmigyo = ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc($this));
        return (bool) $this->sscegwueamckwmcy("\x69\163\137{$ymqmyyeuycgmigyo}\x5f\160\x61\x67\x65\x5f\145\156\x61\x62\x6c\145", true);
    }
}
