<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        waossucmeakmcyqo:
        $this->kowqseeiwuesqsok(sprintf(__("\120\x61\x67\x65\x20\146\x6f\x72\x20\x25\163", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco()));
        goto qicaiiwqkuekisec;
        qicaiiwqkuekisec:
        akweguyeywgimcii:
        goto easmiuiiqscigksi;
        easmiuiiqscigksi:
        parent::__construct();
        goto wquciuouwsqeaywy;
        ccysimigeiasqcce:
        if ($this->kwowqyyougwekomi()) {
            goto akweguyeywgimcii;
        }
        goto waossucmeakmcyqo;
        mcyaaamaeyyuuyqc:
        $this->siosgoymgqsyaisu("{$this->aqcogscycyycgkuq()}\x5f\x70\x61\147\x65");
        goto qymasoskamceuyga;
        qymasoskamceuyga:
        hisossycecaayukk:
        goto ccysimigeiasqcce;
        qksgckcogweyegiy:
        if ($this->giiuwsmyumqwwiyq()) {
            goto hisossycecaayukk;
        }
        goto mcyaaamaeyyuuyqc;
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
        $this->qcsmikeggeemccuu("\x77\160", [$this, "\x67\x6f\x73\155\161\143\155\x6d\157\x6d\153\x71\167\x6d\151\163"])->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\151\156\x69\x74"])->qcsmikeggeemccuu("\141\x64\155\151\156\137\151\x6e\x69\x74", [$this, "\x79\x65\171\151\147\165\x79\x65\x67\x6d\x6d\x79\165\163\x65\x61"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        goto wweeowcauskgueqo;
        iwqggoqaweooecai:
        qaiqycmkuwkyawoo:
        goto iicmygykyuguyeku;
        eamocokcskeaowsy:
        $this->cecaguuoecmccuse("\143\x61\156\137\x72\x65\x6e\x64\x65\x72\x5f\142\x72\x65\x61\x64\x63\x72\x75\155\142", [$this, "\161\x77\x79\x73\161\x6b\171\157\145\x79\155\163\171\x73\145\163"]);
        goto iimsyikswgcwgoim;
        iimsyikswgcwgoim:
        myksuyaasakqyemk:
        goto ekmgygwagiwkumky;
        wkuiygkkiegeqmks:
        if (!$this->ukguiegqykkoqcuq()) {
            goto qaiqycmkuwkyawoo;
        }
        goto uecwikikoegwokma;
        iicmygykyuguyeku:
        if ($this->qmgkuqsqweecckyo()) {
            goto myksuyaasakqyemk;
        }
        goto eamocokcskeaowsy;
        uecwikikoegwokma:
        $this->cecaguuoecmccuse("\144\x65\x76\x65\x6c\x6f\160\155\x65\x6e\164\137\160\162\x69\x76\141\x74\x65\x5f\x70\x61\x67\x65\x73", [$this, "\165\x65\x63\x6f\x73\x61\x69\155\147\167\151\143\153\x6b\x61\141"]);
        goto iwqggoqaweooecai;
        wweeowcauskgueqo:
        $this->cecaguuoecmccuse("\144\151\163\160\x6c\x61\171\x5f\x70\x6f\163\x74\x5f\x73\164\x61\x74\x65\x73", [$this, "\x73\153\167\167\171\163\x67\x67\161\145\145\x65\x73\x6f\143\147"], 10, 2)->cecaguuoecmccuse("\x67\x65\x74\137{$this->aqcogscycyycgkuq()}\x5f\160\x61\x67\x65\x5f\160\145\162\x6d\141\x6c\151\x6e\153", [$this, "\x79\x63\161\x71\165\157\151\171\171\165\145\x73\x65\x67\x73\171"]);
        goto wkuiygkkiegeqmks;
        ekmgygwagiwkumky:
        parent::kgquecmsgcouyaya();
        goto iuqeycyiwoygwgyw;
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
        wwyiqiqummieioym:
        uesewywycaykwikc:
        goto ygauwacugsgiowkc;
        toewskcuygieqowc:
        $this->cecaguuoecmccuse("\x70\141\147\145\x5f\x63\157\156\x74\x65\156\164\x5f\x66\x69\154\164\145\x72", [$this, "\161\141\153\151\171\x61\171\161\151\x79\x73\x69\x71\161\145\x6f"], 999, 2);
        goto wwyiqiqummieioym;
        oeqymuiuaeamuiaq:
        $this->enqueue();
        goto toewskcuygieqowc;
        ygauwacugsgiowkc:
    }
    public function enqueue()
    {
    }
    
    public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post)
    {
        goto oqmesosgiggoswyi;
        ougkaggismakkmce:
        aqcmgyeecacwueei:
        goto mcsuusyagoowgwgw;
        mcsuusyagoowgwgw:
        return $ekcqweaieimsgqoq;
        goto saqyaiwimcywsssm;
        oqmesosgiggoswyi:
        if (!($this->mwikyscisascoeea() == ManipulatePost::mwikyscisascoeea($post))) {
            goto aqcmgyeecacwueei;
        }
        goto uuciyisiqccegsom;
        uuciyisiqccegsom:
        $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi();
        goto ougkaggismakkmce;
        saqyaiwimcywsssm:
    }
    public function yeyiguyegmmyusea()
    {
        goto uauwuceiiwyqwico;
        yyyeguykcgwukkmk:
        ManipulatePage::agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq());
        goto gkiaswsaqamiymyq;
        qkwwyoieyciisiia:
        qiawywmkckoemwca:
        goto oocokogowowwyqiq;
        uauwuceiiwyqwico:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc())) {
            goto souemeuesekaekys;
        }
        goto yyyeguykcgwukkmk;
        gkiaswsaqamiymyq:
        if (!($this->ukguiegqykkoqcuq() && ManipulatePost::uqwgsuysegkweago("\160\x61\x67\145") && ManipulateServer::get("\x70\x6f\x73\164") == $this->mwikyscisascoeea())) {
            goto qiawywmkckoemwca;
        }
        goto miaemkcemygcemoo;
        miaemkcemygcemoo:
        Notice::eumukgqciqgksuiq(__("\123\157\162\162\171\54\x20\171\x6f\165\x20\150\141\x76\x65\156\47\164\40\141\143\x63\145\163\x73\40\x74\157\x20\x65\144\151\x74\x20\164\150\151\x73\x20\x70\141\147\x65\56", PR__CMN__FOUNDATION), "\160\x72\x69\166\x61\164\145\55\x70\x61\x67\145");
        goto caceomqcagkmgegk;
        kuscwkesakgseqok:
        die;
        goto qkwwyoieyciisiia;
        oocokogowowwyqiq:
        souemeuesekaekys:
        goto couaqcoseguwmkgo;
        caceomqcagkmgegk:
        wp_safe_redirect(wp_get_referer());
        goto kuscwkesakgseqok;
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
        icmkoqicsywoekgu:
        $couiucmsqaieciue[] = $suaemuyiacqyugsm;
        goto acueuwkqyosyekeq;
        yqgqaewysywqmysu:
        if (!$suaemuyiacqyugsm) {
            goto mokuammgeauqqsii;
        }
        goto icmkoqicsywoekgu;
        acueuwkqyosyekeq:
        mokuammgeauqqsii:
        goto uuggkkmqccumqayi;
        umeaqogigsmqsqsu:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto yqgqaewysywqmysu;
        uuggkkmqccumqayi:
        return $couiucmsqaieciue;
        goto sogouwugiaaiowsa;
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
        ywgcoskwgewywecq:
        return $migiiksoiymissge;
        goto gaugyegusygssymo;
        ywyusockqwcssooq:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto akaosumkgioacikc;
        akaosumkgioacikc:
        if (!$suaemuyiacqyugsm) {
            goto ygagokmesgacaoqy;
        }
        goto wukgeggyqimmsokc;
        skieiagqacceemsy:
        ygagokmesgacaoqy:
        goto ywgcoskwgewywecq;
        wukgeggyqimmsokc:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm);
        goto skieiagqacceemsy;
        gaugyegusygssymo:
    }
    
    public function sgeaogakoscmysgc() : bool
    {
        goto ugoueyqkecsooieg;
        wmqymkwokycyykow:
        return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc;
        goto qwsygiaussesywem;
        ugoueyqkecsooieg:
        $suaemuyiacqyugsm = self::mwikyscisascoeea();
        goto scgumooaicmgygws;
        scgumooaicmgygws:
        $yeacayasgueouoqc = ManipulatePost::mwikyscisascoeea();
        goto wmqymkwokycyykow;
        qwsygiaussesywem:
    }
    
    public function yeyowkakmkwikyis() : bool
    {
        return !$this->sgeaogakoscmysgc();
    }
    
    public function ayseokmqycoqaigc() : bool
    {
        $ymqmyyeuycgmigyo = ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc($this));
        return (bool) $this->sscegwueamckwmcy("\x69\163\137{$ymqmyyeuycgmigyo}\x5f\x70\141\147\x65\x5f\x65\x6e\141\x62\154\145", true);
    }
}
