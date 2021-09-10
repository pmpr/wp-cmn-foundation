<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto mcyaaamaeyyuuyqc;
        easmiuiiqscigksi:
        qksgckcogweyegiy:
        goto wquciuouwsqeaywy;
        qymasoskamceuyga:
        $this->siosgoymgqsyaisu("{$this->aqcogscycyycgkuq()}\137\160\141\147\x65");
        goto ccysimigeiasqcce;
        mcyaaamaeyyuuyqc:
        if ($this->giiuwsmyumqwwiyq()) {
            goto akweguyeywgimcii;
        }
        goto qymasoskamceuyga;
        qicaiiwqkuekisec:
        $this->kowqseeiwuesqsok(sprintf(__("\x50\141\x67\x65\x20\x66\157\x72\x20\x25\x73", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco()));
        goto easmiuiiqscigksi;
        wquciuouwsqeaywy:
        parent::__construct();
        goto qaiqycmkuwkyawoo;
        waossucmeakmcyqo:
        if ($this->kwowqyyougwekomi()) {
            goto qksgckcogweyegiy;
        }
        goto qicaiiwqkuekisec;
        ccysimigeiasqcce:
        akweguyeywgimcii:
        goto waossucmeakmcyqo;
        qaiqycmkuwkyawoo:
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
        $this->qcsmikeggeemccuu("\x77\160", [$this, "\x67\x6f\x73\x6d\161\x63\x6d\x6d\157\155\x6b\x71\167\x6d\151\x73"])->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\151\x6e\x69\x74"])->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\x69\156\151\164", [$this, "\171\145\x79\x69\x67\165\x79\145\147\155\x6d\x79\x75\163\145\141"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        goto wkuiygkkiegeqmks;
        iuqeycyiwoygwgyw:
        parent::kgquecmsgcouyaya();
        goto uesewywycaykwikc;
        iicmygykyuguyeku:
        myksuyaasakqyemk:
        goto eamocokcskeaowsy;
        ekmgygwagiwkumky:
        wweeowcauskgueqo:
        goto iuqeycyiwoygwgyw;
        eamocokcskeaowsy:
        if ($this->qmgkuqsqweecckyo()) {
            goto wweeowcauskgueqo;
        }
        goto iimsyikswgcwgoim;
        uecwikikoegwokma:
        if (!$this->ukguiegqykkoqcuq()) {
            goto myksuyaasakqyemk;
        }
        goto iwqggoqaweooecai;
        iimsyikswgcwgoim:
        $this->cecaguuoecmccuse("\x63\x61\156\x5f\162\145\x6e\x64\x65\162\x5f\142\162\x65\x61\x64\143\162\x75\x6d\x62", [$this, "\161\167\171\x73\161\153\171\x6f\145\x79\155\163\171\x73\145\x73"]);
        goto ekmgygwagiwkumky;
        iwqggoqaweooecai:
        $this->cecaguuoecmccuse("\x64\145\x76\x65\154\157\160\155\145\x6e\164\x5f\160\162\x69\166\x61\164\145\137\x70\x61\147\x65\163", [$this, "\x75\x65\x63\x6f\163\141\x69\155\147\167\151\x63\x6b\x6b\x61\141"]);
        goto iicmygykyuguyeku;
        wkuiygkkiegeqmks:
        $this->cecaguuoecmccuse("\x64\x69\x73\x70\x6c\141\171\x5f\x70\x6f\163\164\137\163\x74\x61\x74\145\x73", [$this, "\163\153\167\167\x79\x73\147\x67\x71\x65\145\145\x73\x6f\143\x67"], 10, 2)->cecaguuoecmccuse("\x67\145\x74\x5f{$this->aqcogscycyycgkuq()}\x5f\x70\141\147\145\137\x70\145\x72\x6d\x61\x6c\x69\x6e\153", [$this, "\x79\143\x71\161\x75\x6f\151\x79\171\165\x65\x73\145\x67\163\x79"]);
        goto uecwikikoegwokma;
        uesewywycaykwikc:
    }
    public function init()
    {
    }
    public function gosmqcmmomkqwmis()
    {
        goto oeqymuiuaeamuiaq;
        ygauwacugsgiowkc:
        aoyicwmkeekascge:
        goto aqcmgyeecacwueei;
        toewskcuygieqowc:
        $this->enqueue();
        goto wwyiqiqummieioym;
        wwyiqiqummieioym:
        $this->cecaguuoecmccuse("\160\x61\x67\145\x5f\x63\x6f\156\x74\145\x6e\x74\137\146\151\x6c\x74\x65\x72", [$this, "\161\x61\153\x69\x79\x61\171\161\151\171\163\x69\161\x71\x65\157"], 999, 2);
        goto ygauwacugsgiowkc;
        oeqymuiuaeamuiaq:
        if (!($this->sgeaogakoscmysgc() && $this->ayseokmqycoqaigc())) {
            goto aoyicwmkeekascge;
        }
        goto toewskcuygieqowc;
        aqcmgyeecacwueei:
    }
    public function enqueue()
    {
    }
    
    public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post)
    {
        goto uuciyisiqccegsom;
        mcsuusyagoowgwgw:
        oqmesosgiggoswyi:
        goto saqyaiwimcywsssm;
        saqyaiwimcywsssm:
        return $ekcqweaieimsgqoq;
        goto qiawywmkckoemwca;
        ougkaggismakkmce:
        $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi();
        goto mcsuusyagoowgwgw;
        uuciyisiqccegsom:
        if (!($this->mwikyscisascoeea() == ManipulatePost::mwikyscisascoeea($post))) {
            goto oqmesosgiggoswyi;
        }
        goto ougkaggismakkmce;
        qiawywmkckoemwca:
    }
    public function yeyiguyegmmyusea()
    {
        goto yyyeguykcgwukkmk;
        kuscwkesakgseqok:
        wp_safe_redirect(wp_get_referer());
        goto qkwwyoieyciisiia;
        miaemkcemygcemoo:
        if (!($this->ukguiegqykkoqcuq() && ManipulatePost::uqwgsuysegkweago("\160\141\147\145") && ManipulateServer::get("\160\157\163\x74") == $this->mwikyscisascoeea())) {
            goto souemeuesekaekys;
        }
        goto caceomqcagkmgegk;
        yyyeguykcgwukkmk:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc())) {
            goto uauwuceiiwyqwico;
        }
        goto gkiaswsaqamiymyq;
        caceomqcagkmgegk:
        Notice::eumukgqciqgksuiq(__("\123\x6f\162\x72\171\54\40\x79\157\165\40\x68\141\166\x65\x6e\47\x74\x20\141\x63\143\x65\x73\x73\x20\x74\157\x20\x65\144\x69\x74\40\x74\150\x69\x73\x20\x70\141\147\x65\56", PR__CMN__FOUNDATION), "\160\x72\151\x76\141\164\x65\x2d\160\x61\147\145");
        goto kuscwkesakgseqok;
        gkiaswsaqamiymyq:
        ManipulatePage::agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq());
        goto miaemkcemygcemoo;
        couaqcoseguwmkgo:
        uauwuceiiwyqwico:
        goto mokuammgeauqqsii;
        oocokogowowwyqiq:
        souemeuesekaekys:
        goto couaqcoseguwmkgo;
        qkwwyoieyciisiia:
        die;
        goto oocokogowowwyqiq;
        mokuammgeauqqsii:
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
        goto yqgqaewysywqmysu;
        acueuwkqyosyekeq:
        $couiucmsqaieciue[] = $suaemuyiacqyugsm;
        goto uuggkkmqccumqayi;
        yqgqaewysywqmysu:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto icmkoqicsywoekgu;
        uuggkkmqccumqayi:
        umeaqogigsmqsqsu:
        goto sogouwugiaaiowsa;
        icmkoqicsywoekgu:
        if (!$suaemuyiacqyugsm) {
            goto umeaqogigsmqsqsu;
        }
        goto acueuwkqyosyekeq;
        sogouwugiaaiowsa:
        return $couiucmsqaieciue;
        goto ygagokmesgacaoqy;
        ygagokmesgacaoqy:
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
        goto akaosumkgioacikc;
        akaosumkgioacikc:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto wukgeggyqimmsokc;
        wukgeggyqimmsokc:
        if (!$suaemuyiacqyugsm) {
            goto ywyusockqwcssooq;
        }
        goto skieiagqacceemsy;
        ywgcoskwgewywecq:
        ywyusockqwcssooq:
        goto gaugyegusygssymo;
        gaugyegusygssymo:
        return $migiiksoiymissge;
        goto ugoueyqkecsooieg;
        skieiagqacceemsy:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm);
        goto ywgcoskwgewywecq;
        ugoueyqkecsooieg:
    }
    
    public function sgeaogakoscmysgc() : bool
    {
        goto scgumooaicmgygws;
        scgumooaicmgygws:
        $suaemuyiacqyugsm = self::mwikyscisascoeea();
        goto wmqymkwokycyykow;
        qwsygiaussesywem:
        return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc;
        goto qyiyukakwoomokqm;
        wmqymkwokycyykow:
        $yeacayasgueouoqc = ManipulatePost::mwikyscisascoeea();
        goto qwsygiaussesywem;
        qyiyukakwoomokqm:
    }
    
    public function yeyowkakmkwikyis() : bool
    {
        return !$this->sgeaogakoscmysgc();
    }
    
    public function ayseokmqycoqaigc() : bool
    {
        $ymqmyyeuycgmigyo = ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc($this));
        return (bool) $this->sscegwueamckwmcy("\151\x73\x5f{$ymqmyyeuycgmigyo}\x5f\160\141\147\145\x5f\x65\156\141\142\154\145", true);
    }
}
