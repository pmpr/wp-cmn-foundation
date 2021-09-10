<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto qksgckcogweyegiy;
        easmiuiiqscigksi:
        parent::__construct();
        goto wquciuouwsqeaywy;
        qymasoskamceuyga:
        hisossycecaayukk:
        goto ccysimigeiasqcce;
        mcyaaamaeyyuuyqc:
        $this->siosgoymgqsyaisu("{$this->aqcogscycyycgkuq()}\x5f\x70\x61\x67\x65");
        goto qymasoskamceuyga;
        qksgckcogweyegiy:
        if ($this->giiuwsmyumqwwiyq()) {
            goto hisossycecaayukk;
        }
        goto mcyaaamaeyyuuyqc;
        ccysimigeiasqcce:
        if ($this->kwowqyyougwekomi()) {
            goto akweguyeywgimcii;
        }
        goto waossucmeakmcyqo;
        qicaiiwqkuekisec:
        akweguyeywgimcii:
        goto easmiuiiqscigksi;
        waossucmeakmcyqo:
        $this->kowqseeiwuesqsok(sprintf(__("\x50\141\147\145\40\146\157\x72\40\x25\163", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco()));
        goto qicaiiwqkuekisec;
        wquciuouwsqeaywy:
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
        $this->qcsmikeggeemccuu("\167\x70", [$this, "\147\x6f\x73\x6d\x71\143\155\x6d\157\155\153\161\167\155\x69\x73"])->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\151\156\151\164"])->qcsmikeggeemccuu("\x61\144\x6d\x69\156\137\151\156\x69\x74", [$this, "\x79\145\x79\x69\x67\x75\171\x65\x67\x6d\x6d\171\x75\x73\x65\x61"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        goto wweeowcauskgueqo;
        wkuiygkkiegeqmks:
        if (!$this->ukguiegqykkoqcuq()) {
            goto qaiqycmkuwkyawoo;
        }
        goto uecwikikoegwokma;
        iwqggoqaweooecai:
        qaiqycmkuwkyawoo:
        goto iicmygykyuguyeku;
        ekmgygwagiwkumky:
        parent::kgquecmsgcouyaya();
        goto iuqeycyiwoygwgyw;
        iicmygykyuguyeku:
        if ($this->qmgkuqsqweecckyo()) {
            goto myksuyaasakqyemk;
        }
        goto eamocokcskeaowsy;
        eamocokcskeaowsy:
        $this->cecaguuoecmccuse("\143\141\x6e\x5f\x72\x65\x6e\144\145\x72\137\142\162\145\141\x64\x63\x72\x75\155\x62", [$this, "\x71\167\x79\163\161\x6b\171\x6f\145\171\x6d\x73\x79\x73\145\x73"]);
        goto iimsyikswgcwgoim;
        iimsyikswgcwgoim:
        myksuyaasakqyemk:
        goto ekmgygwagiwkumky;
        uecwikikoegwokma:
        $this->cecaguuoecmccuse("\x64\x65\x76\145\x6c\x6f\160\155\145\x6e\164\x5f\x70\x72\x69\x76\x61\x74\x65\x5f\x70\141\x67\x65\x73", [$this, "\x75\145\143\157\x73\141\x69\x6d\x67\x77\x69\143\153\x6b\141\x61"]);
        goto iwqggoqaweooecai;
        wweeowcauskgueqo:
        $this->cecaguuoecmccuse("\144\x69\x73\x70\154\141\171\137\x70\157\x73\164\137\163\164\141\x74\145\163", [$this, "\x73\153\167\167\x79\x73\147\x67\161\x65\x65\x65\163\157\x63\x67"], 10, 2)->cecaguuoecmccuse("\147\145\x74\x5f{$this->aqcogscycyycgkuq()}\x5f\x70\141\x67\x65\x5f\x70\x65\x72\155\x61\154\151\156\153", [$this, "\x79\143\161\x71\165\x6f\151\x79\171\165\x65\x73\x65\x67\x73\x79"]);
        goto wkuiygkkiegeqmks;
        iuqeycyiwoygwgyw:
    }
    public function init()
    {
    }
    public function gosmqcmmomkqwmis()
    {
        goto aoyicwmkeekascge;
        aoyicwmkeekascge:
        if (!($this->sgeaogakoscmysgc() && $this->ayseokmqycoqaigc())) {
            goto uesewywycaykwikc;
        }
        goto oeqymuiuaeamuiaq;
        oeqymuiuaeamuiaq:
        $this->enqueue();
        goto toewskcuygieqowc;
        toewskcuygieqowc:
        $this->cecaguuoecmccuse("\x70\141\147\x65\x5f\143\157\156\x74\145\x6e\164\137\146\x69\154\164\x65\x72", [$this, "\x71\x61\x6b\151\x79\141\x79\161\x69\171\163\151\x71\x71\x65\157"], 999, 2);
        goto wwyiqiqummieioym;
        wwyiqiqummieioym:
        uesewywycaykwikc:
        goto ygauwacugsgiowkc;
        ygauwacugsgiowkc:
    }
    public function enqueue()
    {
    }
    
    public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post)
    {
        goto oqmesosgiggoswyi;
        oqmesosgiggoswyi:
        if (!($this->mwikyscisascoeea() == ManipulatePost::mwikyscisascoeea($post))) {
            goto aqcmgyeecacwueei;
        }
        goto uuciyisiqccegsom;
        mcsuusyagoowgwgw:
        return $ekcqweaieimsgqoq;
        goto saqyaiwimcywsssm;
        ougkaggismakkmce:
        aqcmgyeecacwueei:
        goto mcsuusyagoowgwgw;
        uuciyisiqccegsom:
        $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi();
        goto ougkaggismakkmce;
        saqyaiwimcywsssm:
    }
    public function yeyiguyegmmyusea()
    {
        goto uauwuceiiwyqwico;
        caceomqcagkmgegk:
        wp_safe_redirect(wp_get_referer());
        goto kuscwkesakgseqok;
        yyyeguykcgwukkmk:
        ManipulatePage::agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq());
        goto gkiaswsaqamiymyq;
        qkwwyoieyciisiia:
        qiawywmkckoemwca:
        goto oocokogowowwyqiq;
        oocokogowowwyqiq:
        souemeuesekaekys:
        goto couaqcoseguwmkgo;
        miaemkcemygcemoo:
        Notice::eumukgqciqgksuiq(__("\123\x6f\162\162\x79\54\40\x79\157\165\40\150\141\166\145\156\47\164\x20\141\143\x63\145\163\x73\40\164\157\40\x65\144\151\x74\40\x74\150\x69\163\40\160\x61\147\x65\56", PR__CMN__FOUNDATION), "\160\x72\x69\x76\141\x74\x65\x2d\x70\x61\x67\145");
        goto caceomqcagkmgegk;
        gkiaswsaqamiymyq:
        if (!($this->ukguiegqykkoqcuq() && ManipulatePost::uqwgsuysegkweago("\160\141\x67\x65") && ManipulateServer::get("\x70\x6f\163\x74") == $this->mwikyscisascoeea())) {
            goto qiawywmkckoemwca;
        }
        goto miaemkcemygcemoo;
        kuscwkesakgseqok:
        die;
        goto qkwwyoieyciisiia;
        uauwuceiiwyqwico:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc())) {
            goto souemeuesekaekys;
        }
        goto yyyeguykcgwukkmk;
        couaqcoseguwmkgo:
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
        goto umeaqogigsmqsqsu;
        yqgqaewysywqmysu:
        if (!$suaemuyiacqyugsm) {
            goto mokuammgeauqqsii;
        }
        goto icmkoqicsywoekgu;
        uuggkkmqccumqayi:
        return $couiucmsqaieciue;
        goto sogouwugiaaiowsa;
        icmkoqicsywoekgu:
        $couiucmsqaieciue[] = $suaemuyiacqyugsm;
        goto acueuwkqyosyekeq;
        acueuwkqyosyekeq:
        mokuammgeauqqsii:
        goto uuggkkmqccumqayi;
        umeaqogigsmqsqsu:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto yqgqaewysywqmysu;
        sogouwugiaaiowsa:
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
        goto ywyusockqwcssooq;
        akaosumkgioacikc:
        if (!$suaemuyiacqyugsm) {
            goto ygagokmesgacaoqy;
        }
        goto wukgeggyqimmsokc;
        wukgeggyqimmsokc:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm);
        goto skieiagqacceemsy;
        ywgcoskwgewywecq:
        return $migiiksoiymissge;
        goto gaugyegusygssymo;
        skieiagqacceemsy:
        ygagokmesgacaoqy:
        goto ywgcoskwgewywecq;
        ywyusockqwcssooq:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto akaosumkgioacikc;
        gaugyegusygssymo:
    }
    
    public function sgeaogakoscmysgc() : bool
    {
        goto ugoueyqkecsooieg;
        wmqymkwokycyykow:
        return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc;
        goto qwsygiaussesywem;
        scgumooaicmgygws:
        $yeacayasgueouoqc = ManipulatePost::mwikyscisascoeea();
        goto wmqymkwokycyykow;
        ugoueyqkecsooieg:
        $suaemuyiacqyugsm = self::mwikyscisascoeea();
        goto scgumooaicmgygws;
        qwsygiaussesywem:
    }
    
    public function yeyowkakmkwikyis() : bool
    {
        return !$this->sgeaogakoscmysgc();
    }
    
    public function ayseokmqycoqaigc() : bool
    {
        $ymqmyyeuycgmigyo = ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc($this));
        return (bool) $this->sscegwueamckwmcy("\151\163\x5f{$ymqmyyeuycgmigyo}\137\160\141\x67\x65\137\x65\156\x61\x62\x6c\x65", true);
    }
}
