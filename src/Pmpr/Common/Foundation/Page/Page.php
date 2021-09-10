<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        qksgckcogweyegiy:
        if ($this->giiuwsmyumqwwiyq()) {
            goto hisossycecaayukk;
        }
        goto mcyaaamaeyyuuyqc;
        qicaiiwqkuekisec:
        akweguyeywgimcii:
        goto easmiuiiqscigksi;
        waossucmeakmcyqo:
        $this->kowqseeiwuesqsok(sprintf(__("\120\x61\x67\x65\x20\146\x6f\162\x20\45\x73", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco()));
        goto qicaiiwqkuekisec;
        mcyaaamaeyyuuyqc:
        $this->siosgoymgqsyaisu("{$this->aqcogscycyycgkuq()}\x5f\x70\x61\147\x65");
        goto qymasoskamceuyga;
        ccysimigeiasqcce:
        if ($this->kwowqyyougwekomi()) {
            goto akweguyeywgimcii;
        }
        goto waossucmeakmcyqo;
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
        $this->qcsmikeggeemccuu("\x77\x70", [$this, "\x67\x6f\163\x6d\x71\x63\155\x6d\x6f\x6d\x6b\x71\x77\155\x69\x73"])->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\151\x6e\151\164"])->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\137\x69\156\151\x74", [$this, "\171\145\171\151\147\165\x79\x65\147\155\x6d\171\165\163\x65\x61"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        goto wweeowcauskgueqo;
        iwqggoqaweooecai:
        qaiqycmkuwkyawoo:
        goto iicmygykyuguyeku;
        uecwikikoegwokma:
        $this->cecaguuoecmccuse("\x64\x65\x76\145\154\157\160\155\145\x6e\164\137\x70\162\151\x76\x61\x74\145\x5f\x70\141\x67\x65\x73", [$this, "\165\x65\x63\x6f\x73\141\151\x6d\x67\167\151\143\x6b\153\141\x61"]);
        goto iwqggoqaweooecai;
        iicmygykyuguyeku:
        if ($this->qmgkuqsqweecckyo()) {
            goto myksuyaasakqyemk;
        }
        goto eamocokcskeaowsy;
        ekmgygwagiwkumky:
        parent::kgquecmsgcouyaya();
        goto iuqeycyiwoygwgyw;
        wweeowcauskgueqo:
        $this->cecaguuoecmccuse("\144\x69\163\160\154\141\171\x5f\x70\157\x73\164\137\163\x74\x61\x74\x65\x73", [$this, "\x73\153\x77\x77\x79\x73\147\147\x71\145\145\145\x73\157\143\147"], 10, 2)->cecaguuoecmccuse("\147\145\x74\137{$this->aqcogscycyycgkuq()}\x5f\160\141\x67\145\137\x70\145\162\x6d\141\x6c\151\x6e\153", [$this, "\171\143\161\x71\x75\157\151\x79\x79\x75\x65\163\145\x67\163\x79"]);
        goto wkuiygkkiegeqmks;
        wkuiygkkiegeqmks:
        if (!$this->ukguiegqykkoqcuq()) {
            goto qaiqycmkuwkyawoo;
        }
        goto uecwikikoegwokma;
        iimsyikswgcwgoim:
        myksuyaasakqyemk:
        goto ekmgygwagiwkumky;
        eamocokcskeaowsy:
        $this->cecaguuoecmccuse("\x63\141\x6e\x5f\162\145\156\144\145\162\137\142\162\x65\x61\x64\143\x72\165\155\142", [$this, "\161\167\171\163\x71\153\171\x6f\x65\x79\155\163\x79\163\x65\x73"]);
        goto iimsyikswgcwgoim;
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
        $this->cecaguuoecmccuse("\x70\141\147\x65\x5f\x63\157\x6e\164\x65\156\x74\x5f\146\151\x6c\164\145\x72", [$this, "\x71\141\153\x69\171\141\x79\x71\151\x79\x73\x69\161\x71\x65\x6f"], 999, 2);
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
        mcsuusyagoowgwgw:
        return $ekcqweaieimsgqoq;
        goto saqyaiwimcywsssm;
        oqmesosgiggoswyi:
        if (!($this->mwikyscisascoeea() == ManipulatePost::mwikyscisascoeea($post))) {
            goto aqcmgyeecacwueei;
        }
        goto uuciyisiqccegsom;
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
        kuscwkesakgseqok:
        die;
        goto qkwwyoieyciisiia;
        qkwwyoieyciisiia:
        qiawywmkckoemwca:
        goto oocokogowowwyqiq;
        yyyeguykcgwukkmk:
        ManipulatePage::agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq());
        goto gkiaswsaqamiymyq;
        gkiaswsaqamiymyq:
        if (!($this->ukguiegqykkoqcuq() && ManipulatePost::uqwgsuysegkweago("\x70\x61\x67\x65") && ManipulateServer::get("\160\x6f\163\x74") == $this->mwikyscisascoeea())) {
            goto qiawywmkckoemwca;
        }
        goto miaemkcemygcemoo;
        oocokogowowwyqiq:
        souemeuesekaekys:
        goto couaqcoseguwmkgo;
        caceomqcagkmgegk:
        wp_safe_redirect(wp_get_referer());
        goto kuscwkesakgseqok;
        miaemkcemygcemoo:
        Notice::eumukgqciqgksuiq(__("\x53\157\162\162\171\x2c\x20\171\x6f\x75\x20\x68\x61\166\145\156\x27\x74\40\141\x63\143\145\x73\163\x20\x74\x6f\x20\x65\x64\151\x74\x20\164\x68\151\163\40\160\x61\147\x65\56", PR__CMN__FOUNDATION), "\x70\162\151\166\x61\164\145\x2d\x70\141\x67\145");
        goto caceomqcagkmgegk;
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
        umeaqogigsmqsqsu:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto yqgqaewysywqmysu;
        uuggkkmqccumqayi:
        return $couiucmsqaieciue;
        goto sogouwugiaaiowsa;
        icmkoqicsywoekgu:
        $couiucmsqaieciue[] = $suaemuyiacqyugsm;
        goto acueuwkqyosyekeq;
        acueuwkqyosyekeq:
        mokuammgeauqqsii:
        goto uuggkkmqccumqayi;
        yqgqaewysywqmysu:
        if (!$suaemuyiacqyugsm) {
            goto mokuammgeauqqsii;
        }
        goto icmkoqicsywoekgu;
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
        skieiagqacceemsy:
        ygagokmesgacaoqy:
        goto ywgcoskwgewywecq;
        ywyusockqwcssooq:
        $suaemuyiacqyugsm = $this->mwikyscisascoeea();
        goto akaosumkgioacikc;
        wukgeggyqimmsokc:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm);
        goto skieiagqacceemsy;
        akaosumkgioacikc:
        if (!$suaemuyiacqyugsm) {
            goto ygagokmesgacaoqy;
        }
        goto wukgeggyqimmsokc;
        ywgcoskwgewywecq:
        return $migiiksoiymissge;
        goto gaugyegusygssymo;
        gaugyegusygssymo:
    }
    
    public function sgeaogakoscmysgc() : bool
    {
        goto ugoueyqkecsooieg;
        scgumooaicmgygws:
        $yeacayasgueouoqc = ManipulatePost::mwikyscisascoeea();
        goto wmqymkwokycyykow;
        ugoueyqkecsooieg:
        $suaemuyiacqyugsm = self::mwikyscisascoeea();
        goto scgumooaicmgygws;
        wmqymkwokycyykow:
        return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc;
        goto qwsygiaussesywem;
        qwsygiaussesywem:
    }
    
    public function yeyowkakmkwikyis() : bool
    {
        return !$this->sgeaogakoscmysgc();
    }
    
    public function ayseokmqycoqaigc() : bool
    {
        $ymqmyyeuycgmigyo = ManipulateString::kwuyaykukcmaqggg(ManipulateString::mkwcwqkqeqkqyggc($this));
        return (bool) $this->sscegwueamckwmcy("\151\163\137{$ymqmyyeuycgmigyo}\x5f\160\141\147\145\137\145\156\141\x62\x6c\x65", true);
    }
}
