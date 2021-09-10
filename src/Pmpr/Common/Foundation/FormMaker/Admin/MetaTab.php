<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    
    protected ?string $key = "\155\x79\137\x6f\160\164\x69\x6f\x6e";
    
    protected array $menuArgs = ["\x76\151\x65\167\137\x63\141\x70\x61\142\151\x6c\x69\x74\171" => '', "\x70\141\162\145\156\164\137\x73\x6c\x75\147" => '', "\x70\x61\x67\x65\137\164\x69\x74\154\145" => '', "\155\x65\156\x75\x5f\x74\x69\164\x6c\x65" => '', "\143\141\x70\x61\142\151\x6c\x69\x74\171" => "\155\141\156\141\147\x65\137\x6f\x70\x74\151\x6f\156\x73", "\155\x65\x6e\165\137\163\x6c\x75\x67" => '', "\151\143\x6f\x6e\x5f\165\162\x6c" => '', "\x70\x6f\163\151\x74\151\157\156" => null, "\156\145\164\167\157\x72\x6b" => false];
    
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
        goto fomwoaaqqcwyekey;
        eqewkwicumqigsem:
        $this->id = $this->iaqckqwoiseyqaku();
        goto mwegkckwqgiwmasq;
        kykgmsqcyggkoeig:
        parent::__construct();
        goto owakcoywswieyewa;
        mwegkckwqgiwmasq:
        $this->key = $uusmaiomayssaecw;
        goto kykgmsqcyggkoeig;
        owakcoywswieyewa:
        uykugiwiykyccwqs:
        goto wioequuiyigoaass;
        fomwoaaqqcwyekey:
        if (!(is_admin() && class_exists("\103\x4d\x42\x32"))) {
            goto uykugiwiykyccwqs;
        }
        goto eqewkwicumqigsem;
        wioequuiyigoaass:
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
        return "\x63\x6d\157" . rand(1000, 99999);
    }
    
    public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self
    {
        goto komcawukmomgkqog;
        umcsysgcksumioak:
        return $this;
        goto siioyccqcugcmkoy;
        mcoqgkqqocieqygg:
        $this->column = $qgoqiacsiccwoawi;
        goto umcsysgcksumioak;
        caocugyuikeekyom:
        $qgoqiacsiccwoawi = 1;
        goto ouwcsmcycymqmecm;
        komcawukmomgkqog:
        if (!($qgoqiacsiccwoawi > 2 || $qgoqiacsiccwoawi < 1)) {
            goto kswyqgqqygaouiuk;
        }
        goto caocugyuikeekyom;
        ouwcsmcycymqmecm:
        kswyqgqqygaouiuk:
        goto mcoqgkqqocieqygg;
        siioyccqcugcmkoy:
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
        goto owoiuwqgwcseogig;
        meekmmeswcggewek:
        $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\x5f\150\x65\141\144", [$this, "\x75\165\161\161\x6b\147\x79\161\145\153\155\147\171\x63\147\x71"])->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\151\156\x69\x74", [$this, "\171\x65\171\x69\x67\165\171\x65\x67\x6d\155\171\x75\163\x65\141"])->qcsmikeggeemccuu("\141\144\x6d\151\156\137\145\156\x71\x75\145\165\145\137\x73\143\162\151\x70\164\x73", [$this, "\x77\161\161\x63\153\153\x6d\x71\x61\153\151\161\x75\x79\x63\x73"])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}\141\x64\155\x69\x6e\x5f\155\x65\x6e\165", [$this, "\163\x6f\143\143\x6f\x6d\141\x6b\167\145\x71\147\x73\153\151\x63"], 12)->qcsmikeggeemccuu("\x63\155\x62\62\x5f\x72\145\156\144\x65\x72\x5f\157\160\164\151\157\x6e\163\137\x73\x61\166\x65\137\142\x75\x74\164\x6f\156", [$this, "\145\143\171\x79\161\163\x67\x77\x77\x75\x75\153\147\x73\x73\147"]);
        goto vaekgwkiiqmwmoey;
        owoiuwqgwcseogig:
        
        $kiiwewqkgqgqwwue = is_multisite() && $this->agcaegggmmeuammg("\x6e\x65\164\x77\x6f\162\x6b") ? "\156\145\164\x77\157\162\x6b\137" : '';
        goto meekmmeswcggewek;
        vaekgwkiiqmwmoey:
        parent::wigskegsqequoeks();
        goto aqsuuuwagsyyooak;
        aqsuuuwagsyyooak:
    }
    public function yeyiguyegmmyusea()
    {
        goto wgsmemaiyicwmagy;
        ywcgeioasmogicki:
        $this->qaygoqgeieeugsey("\x76\x69\x65\x77\137\x63\141\x70\x61\x62\x69\x6c\151\164\171", $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg("\x63\141\160\141\142\151\x6c\x69\164\171") : false);
        goto aewggukwoeqcwkmw;
        oaymsekakyassacy:
        register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc());
        goto oqaqkwgyiegaoiyk;
        esacgaegcuqsgqua:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\151\145\167\x5f\143\141\160\141\x62\151\154\151\164\x79");
        goto cgiweqsmckusyige;
        esuscykksesgueii:
        $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom == $ewuukoycimkekouc);
        goto akwcamwokuciwqyw;
        oqaqkwgyiegaoiyk:
        sukooaksmwmweysu:
        goto cqumukgqaesgokmu;
        cascyqosimkguayi:
        $ewuukoycimkekouc = $this->agcaegggmmeuammg("\155\145\x6e\x75\x5f\163\x6c\x75\147");
        goto esuscykksesgueii;
        cgiweqsmckusyige:
        if ($eiiwoqgkgmosakem) {
            goto gkwskkyusocmckci;
        }
        goto ywcgeioasmogicki;
        cqumukgqaesgokmu:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\160\x61\x72\x65\156\x74\137\163\154\165\147");
        goto cascyqosimkguayi;
        wgsmemaiyicwmagy:
        if (!$this->agciemoaikwmiugi()) {
            goto sukooaksmwmweysu;
        }
        goto oaymsekakyassacy;
        aewggukwoeqcwkmw:
        gkwskkyusocmckci:
        goto qkowqoyoecgcqokw;
        akwcamwokuciwqyw:
        $this->swqsasqieqqgusew($ewuukoycimkekouc ? $ewuukoycimkekouc : $this->cisyiemkeykgkomc());
        goto esacgaegcuqsgqua;
        qkowqoyoecgcqokw:
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
        goto myuwisogyksycamk;
        meawiqkkayqiiyqa:
        aaouuuqqgueesgum:
        goto wcyacsasikeesgay;
        myuwisogyksycamk:
        $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\x74\141\x62", $cciauwuwuqaywgce, $this);
        goto emmcmeososokueak;
        emmcmeososokueak:
        if (!$cciauwuwuqaywgce instanceof Tab) {
            goto aaouuuqqgueesgum;
        }
        goto awqcicwsamqqsisa;
        wcyacsasikeesgay:
        return $this;
        goto ksuwigakysoscwsi;
        awqcicwsamqqsisa:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto meawiqkkayqiiyqa;
        ksuwigakysoscwsi:
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self
    {
        goto qycyawiweamkwamy;
        swwasksasqwewmck:
        uyowgcocwogyyogy:
        goto aoemiusqwqoimequ;
        qycyawiweamkwamy:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            uackiwuiauimukuk:
        }
        goto swwasksasqwewmck;
        aoemiusqwqoimequ:
        return $this;
        goto ccewmwoameocgeck;
        ccewmwoameocgeck:
    }
    
    public function myomgmiksogoikuc() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    public function qessyiueeiwwgyag()
    {
        goto goismqusymeooqae;
        uscaqiyymkyywsws:
        $this->qigsyyqgewgskemg("\167\162\x61\x70\x20\x63\x6d\142\x32\x2d\157\160\x74\x69\157\156\x73\55\160\x61\x67\145\40\x63\x6d\157\55\157\160\164\x69\x6f\156\163\55\x70\141\x67\145")->qigsyyqgewgskemg($this->cisyiemkeykgkomc());
        goto icecgmamoqwkcgau;
        goismqusymeooqae:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\151\145\x77\137\x63\x61\160\x61\x62\x69\154\x69\164\171");
        goto iicewkmmisuecsku;
        uwckqwwyucaiekeq:
        $kqweykcqkgkmoqay = '';
        goto uscaqiyymkyywsws;
        wycuuweqayggsikk:
        echo $this->iuygowkemiiwqmiw("\x6d\145\164\141\164\x61\142", ["\153\145\171" => $this->cisyiemkeykgkomc(), "\150\157\157\153" => $this->mmsykuomogaqoaye(), "\x74\x61\x62\163" => $iogqeouiuqyewuqe, "\160\141\x67\145" => $this->kyqakacqeumicgag(), "\x63\x6f\x6c\x75\x6d\x6e" => $this->myywwqkyiwawwquy(), "\x6e\x6f\x6e\x63\x65\x73" => [wp_nonce_field("\155\x65\164\x61\55\142\x6f\x78\55\x6f\x72\x64\x65\162", "\155\x65\x74\x61\55\x62\157\170\x2d\x6f\x72\144\145\x72\55\x6e\157\156\x63\145", false, false), wp_nonce_field("\143\154\157\x73\145\144\x70\157\x73\164\x62\157\x78\x65\163", "\x63\154\157\163\x65\x64\x70\x6f\163\x74\142\157\x78\x65\x73\x6e\157\x6e\143\x65", false, false)], "\142\165\164\164\x6f\156\x73" => $qyukicweqoisimwg, "\x63\x6f\x6e\x74\145\x6e\164\163" => $kqweykcqkgkmoqay, "\160\141\147\145\137\164\x69\x74\x6c\145" => esc_html(get_admin_page_title()), "\x63\x6f\x6e\164\x61\151\156\x65\162\137\141\x74\164\162\x73" => $this->ccekeuwwqqoiwuwy()]);
        goto cyciqqkakeosegoe;
        wikqsescmyeeicwg:
        $iogqeouiuqyewuqe = '';
        goto uwckqwwyucaiekeq;
        iicewkmmisuecsku:
        if (!(!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || DecoratorUser::scmcyesmmikkucie($eiiwoqgkgmosakem)))) {
            goto sakgiyogqqymcama;
        }
        goto wikqsescmyeeicwg;
        syimweumwsqgoggc:
        uciscoimiwuqsumg:
        goto usquuksweegcuqom;
        icecgmamoqwkcgau:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($this->equiyaoamqmaeckc());
        goto oicyciugogouuwwi;
        wqyesuemouksaeac:
        sakgiyogqqymcama:
        goto eieckmqqcmcqcyiq;
        oicyciugogouuwwi:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto iocuaqcqoggiqgsw;
            ussceksysakwguwm:
            if (empty($scwwkgcyecqgioqs)) {
                goto ggkemwwsugkckeag;
            }
            goto gqogoecueameuqem;
            aqimmiyqakwgogiw:
            sskygwgyogmqgmqa:
            goto ogaiqagqcemycaoo;
            ogaiqagqcemycaoo:
            ggkemwwsugkckeag:
            goto qqkqawesmskmkgqg;
            sciaeeisgiakmyyw:
            
            $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}\137\x74\141\x62\137\x73\x69\144\145\137\155\x65\164\x61\142\157\170\x65\x73", $cciauwuwuqaywgce->weookicuaacigemm());
            goto ussceksysakwguwm;
            oksseoqyoqqkmooc:
            $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw("\x63\157\x6e\164\x65\156\x74", ["\151\x64" => $aokagokqyuysuksm, "\x63\x6f\154\x75\x6d\x6e" => $qgoqiacsiccwoawi, "\144\x65\163\x63\x72\x69\160\x74\x69\x6f\x6e" => $cciauwuwuqaywgce->meqceykmywmqgoym(), "\x63\x6f\156\x74\x61\x69\x6e\145\162\x5f\141\164\164\x72\x73" => [
                "\x69\x64" => "\x6f\160\x74\55\x63\157\x6e\x74\x65\156\164\x2d{$aokagokqyuysuksm}",
                "\x63\154\x61\x73\x73" => "\157\160\x74\55\x63\157\156\164\145\156\x74",
                
                "\144\141\x74\x61\55\142\x6f\x78\x65\163" => implode("\54", array_keys(ManipulateArray::yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue()))),
            ]]);
            goto cwsscisucgswsugy;
            gqogoecueameuqem:
            foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) {
                goto ogemcuimywmoauai;
                euukqqoeamysgaai:
                $qgoqiacsiccwoawi = 2;
                goto eiuqssqeewecueaw;
                eiuqssqeewecueaw:
                gkqugmqmcaaewcgu:
                goto ucisggckygasmewc;
                ucisggckygasmewc:
                wemkygaugegmuyeq:
                goto waagiwegsgmwumyk;
                gqygesckmymkgeia:
                $qkweikswegyciaie->register($this->cisyiemkeykgkomc());
                goto cugygygwqumqwkmc;
                waagiwegsgmwumyk:
                ocgkcmokykycoqwu:
                goto gswosgeumoekweom;
                scayqcumuauocuco:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}\137\x73\x69\x64\x65\x5f\x6d\145\x74\141\x62\157\170\x65", $qkweikswegyciaie);
                goto iyuyykuuksqgcoco;
                iyuyykuuksqgcoco:
                if (!$qkweikswegyciaie->mukiwuqwmywsckco()) {
                    goto gkqugmqmcaaewcgu;
                }
                goto gqygesckmymkgeia;
                ogemcuimywmoauai:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto wemkygaugegmuyeq;
                }
                goto scayqcumuauocuco;
                cugygygwqumqwkmc:
                $this->omameoyeausyugmw($qkweikswegyciaie, "\x66\x6f\x72\x6d\137\155\x61\153\145\162\x5f\x74\x61\x62\137\163\x69\144\145\x5f\x63\x6f\156\x74\x61\x69\x6e\145\162\137{$aokagokqyuysuksm}", "\163\151\144\x65");
                goto euukqqoeamysgaai;
                gswosgeumoekweom:
            }
            goto aqimmiyqakwgogiw;
            ecouksmuoaagmiwo:
            $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea();
            goto wscqsciugescaoys;
            qqkqawesmskmkgqg:
            $iogqeouiuqyewuqe .= ManipulateHTML::uuccukgasskgimsq("\x61", ["\x69\144" => "\x6f\160\x74\55\x74\x61\x62\x2d{$aokagokqyuysuksm}", "\150\162\x65\x66" => "\x23", "\x63\154\x61\x73\x73" => "\x6e\141\166\x2d\x74\x61\x62\40\157\160\x74\x2d\164\141\x62\40\x70\162\x2d\x74\141\x62", "\144\141\x74\x61\55\157\160\164\x63\x6f\x6e\164\145\x6e\x74" => "\x23\x6f\160\164\55\x63\157\x6e\x74\x65\156\x74\55{$aokagokqyuysuksm}"], [$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()]);
            goto oksseoqyoqqkmooc;
            eiyeuegmoiyouoia:
            ksumissygaeqwiqk:
            goto skemwcqcyaqogacu;
            iocuaqcqoggiqgsw:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto eicsoeicqsmgyoyw;
            }
            goto ecouksmuoaagmiwo;
            cwsscisucgswsugy:
            eicsoeicqsmgyoyw:
            goto eiyeuegmoiyouoia;
            wscqsciugescaoys:
            $qgoqiacsiccwoawi = 1;
            goto sciaeeisgiakmyyw;
            skemwcqcyaqogacu:
        }
        goto syimweumwsqgoggc;
        usquuksweegcuqom:
        $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]);
        goto wycuuweqayggsikk;
        cyciqqkakeosegoe:
        
        $this->once = false;
        goto wqyesuemouksaeac;
        eieckmqqcmcqcyiq:
    }
    
    public function makgumuaykymweaq() : array
    {
        goto seiaqecoeskumemq;
        eoecsiksocyeiayk:
        
        $ywmkwiwkosakssii["\x63\x62"] = $omwmuycmeqcqokom ? "\141\x64\x64\137\163\x75\142\x6d\x65\156\165\x5f\x70\141\x67\x65" : "\141\x64\144\137\x6d\x65\x6e\165\x5f\160\141\147\x65";
        goto gcmcgcuycmoywakk;
        aywscouoieeksess:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x63\141\160\x61\x62\x69\154\x69\164\x79");
        goto gwomwiesykqmmwgo;
        yyqwgugicycyeosk:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x70\x6f\163\x69\164\x69\157\156") === null ? null : intval($this->agcaegggmmeuammg("\x70\157\163\x69\164\x69\x6f\x6e"));
        goto kagywssammsigeky;
        keicyiqusacogocc:
        
        $ywmkwiwkosakssii[] = [$this, "\x71\145\x73\163\171\151\x75\145\145\x69\x77\167\147\x79\141\x67"];
        goto aouikocwycssquau;
        eskmyswgsosamscc:
        
        $cmyoswawcimsecyy = $this->agcaegggmmeuammg("\x70\141\147\x65\137\x74\x69\x74\x6c\x65") ? $this->agcaegggmmeuammg("\x70\x61\147\x65\137\164\151\x74\x6c\145") : $this->qcgakseyaikigqco();
        goto aaiekuiyqeykkgqq;
        kagywssammsigeky:
        caecagokwuouoymy:
        goto eoecsiksocyeiayk;
        qomugkkimygqeioo:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\151\x63\157\156\x5f\x75\162\154") ? $this->agcaegggmmeuammg("\x69\143\x6f\x6e\x5f\x75\x72\x6c") : '';
        goto yyqwgugicycyeosk;
        seiaqecoeskumemq:
        $ywmkwiwkosakssii = [];
        goto ekskakueeqwgwyug;
        ekskakueeqwgwyug:
        
        $omwmuycmeqcqokom = $this->eyqwmckgumyaoams();
        goto swykkkgaawkssqma;
        aucmyygueiuuyygk:
        
        $ywmkwiwkosakssii[] = null;
        goto yossisaqeggqeokq;
        yossisaqeggqeokq:
        goto caecagokwuouoymy;
        goto ckaoqocygksqsoqg;
        gwomwiesykqmmwgo:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\155\145\x6e\165\137\x73\154\165\147") ? $this->agcaegggmmeuammg("\x6d\x65\x6e\x75\137\x73\154\x75\x67") : $this->cisyiemkeykgkomc();
        goto keicyiqusacogocc;
        aouikocwycssquau:
        
        if (!$omwmuycmeqcqokom) {
            goto mumcqaqeakgcquac;
        }
        goto aucmyygueiuuyygk;
        ckycaecsiwgmomgk:
        wgkicouqwayscuio:
        goto asyskswoaqakaicc;
        swykkkgaawkssqma:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\160\141\x72\145\156\164\x5f\x73\154\x75\147") ? $this->agcaegggmmeuammg("\160\141\x72\145\156\x74\137\x73\x6c\x75\x67") : $omwmuycmeqcqokom;
        goto eskmyswgsosamscc;
        qcscwisoukgswcum:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x6d\x65\156\x75\137\164\x69\164\154\x65") ? $this->agcaegggmmeuammg("\155\x65\x6e\x75\137\x74\151\x74\x6c\x65") : $cmyoswawcimsecyy;
        goto aywscouoieeksess;
        asyskswoaqakaicc:
        
        $ywmkwiwkosakssii[] = $cmyoswawcimsecyy;
        goto qcscwisoukgswcum;
        aaiekuiyqeykkgqq:
        
        if (!$omwmuycmeqcqokom) {
            goto wgkicouqwayscuio;
        }
        goto iouqskcmyecqmugo;
        iouqskcmyecqmugo:
        
        $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "\77\160\x6f\x73\164\137\164\171\x70\145\75{$this->kecacgyqmgeeqmme()}" : '';
        goto awcyccimowsskmkc;
        gcmcgcuycmoywakk:
        return $ywmkwiwkosakssii;
        goto cewcquygkawaiscq;
        awcyccimowsskmkc:
        $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc;
        goto ckycaecsiwgmomgk;
        ckaoqocygksqsoqg:
        mumcqaqeakgcquac:
        goto qomugkkimygqeioo;
        cewcquygkawaiscq:
    }
    public function soccomakweqgskic()
    {
        goto qayqouemeyoeqece;
        xkqoueuawceokqwq:
        
        $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\137\160\162\151\x6e\164\x5f\163\x74\171\x6c\145\x73\55{$this->mmsykuomogaqoaye()}", ["\103\x4d\x42\62\137\x68\x6f\x6f\x6b\x75\x70", "\145\x6e\x71\x75\x65\x75\x65\x5f\143\155\x62\x5f\143\163\163"])->qcsmikeggeemccuu("\141\144\144\x5f\155\x65\x74\141\137\142\x6f\x78\145\163\137{$this->mmsykuomogaqoaye()}", [$this, "\x77\141\x63\145\155\x6b\x71\155\151\167\165\161\157\x75\147\x61"])->qcsmikeggeemccuu("\154\x6f\x61\x64\x2d{$this->mmsykuomogaqoaye()}", [$this, "\x6f\x67\153\x69\x69\145\x77\x73\143\145\x6d\141\x71\x6b\167\x67"]);
        goto ayaksmyymwewccuw;
        iwysasakqeoiqkea:
        
        $iaakskwmyqceoscy = $ywmkwiwkosakssii["\x63\x62"]($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6]);
        goto geggqemsocqacmaa;
        qayqouemeyoeqece:
        
        $ywmkwiwkosakssii = $this->makgumuaykymweaq();
        goto iwysasakqeoiqkea;
        ayaksmyymwewccuw:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\146\164\x65\162\137\151\x6e\151\x74\137\150\157\157\x6b", false), $iaakskwmyqceoscy, $this);
        goto skmygcmwwgoaguwo;
        geggqemsocqacmaa:
        $this->oggwewqswcggccae($iaakskwmyqceoscy);
        goto xkqoueuawceokqwq;
        skmygcmwwgoaguwo:
        
        $this->siqqwyaiwgagokug();
        goto imgiueoewusyceem;
        imgiueoewusyceem:
    }
    private function siqqwyaiwgagokug()
    {
        goto aooumysewqkyewii;
        mqsgkwkggseuykio:
        $iaakskwmyqceoscy = $this->mmsykuomogaqoaye();
        goto oiymmoisooaocwyg;
        aooumysewqkyewii:
        $symcuwcoqkwoscsg = $this->eigooueumicckoge();
        goto mqsgkwkggseuykio;
        ieuoockquscyauiy:
        sqqocygqgwkmgwaa:
        goto uumykgkackouocgc;
        kuiqmwsgukiwgguq:
        foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) {
            goto uokioguceweaqqse;
            sgmowmgweoqysoqg:
            
            $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10;
            goto yaceceaiceoeweog;
            assouqamccmauuye:
            icoggwwouyssowey:
            goto ouucymmowsuymakm;
            yaceceaiceoeweog:
            
            $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1;
            goto uycwieawygyekeoi;
            giaoygyymwwoqmgw:
            
            $aiamqeawckcsuaou = str_replace("\133\150\x6f\x6f\153\135", $iaakskwmyqceoscy, $aiamqeawckcsuaou);
            goto sgmowmgweoqysoqg;
            uokioguceweaqqse:
            $ywmkwiwkosakssii = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x61\x72\147\163", 1));
            goto kiyuamyuuoiuwyag;
            kiyuamyuuoiuwyag:
            $aiamqeawckcsuaou = ManipulateArray::get($sqaougiyimwumoqi, "\x61\143\164\x69\157\x6e");
            goto wsqescacigqkgicg;
            ouucymmowsuymakm:
            gwawuyimyyieguwa:
            goto smsmeycaqoqkgciw;
            uycwieawygyekeoi:
            
            $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas);
            goto assouqamccmauuye;
            umcyiqykwoeegomm:
            $sqqewmoeaekuyyas = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x70\x72\x69\157\162\151\x74\171", 10));
            goto cmukqmgyeiqqyoye;
            cmukqmgyeiqqyoye:
            if (!($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi["\141\143\x74\x69\x6f\x6e"], "\55\133\150\x6f\x6f\x6b\135"))) {
                goto icoggwwouyssowey;
            }
            goto giaoygyymwwoqmgw;
            wsqescacigqkgicg:
            $ekiuyucoiagmscgy = ManipulateArray::get($sqaougiyimwumoqi, "\x63\141\154\154\x62\141\x63\x6b");
            goto umcyiqykwoeegomm;
            smsmeycaqoqkgciw:
        }
        goto ieuoockquscyauiy;
        oiymmoisooaocwyg:
        if (!$symcuwcoqkwoscsg) {
            goto mwemsqwigyycweai;
        }
        goto kuiqmwsgukiwgguq;
        uumykgkackouocgc:
        mwemsqwigyycweai:
        goto amesgukaccuckock;
        amesgukaccuckock:
    }
    public function wacemkqmiwuqouga()
    {
        goto wyswgiqmuwyiqama;
        qgaywmweyqweqkme:
        gckukekaicosscko:
        goto gkemwmiykeiyuska;
        sgugyikwqeswcaos:
        foreach ($this->qsqiqgmeoowykuue() as $qkweikswegyciaie) {
            goto wamywgsgswmwgqes;
            eccsqkqyiwqcocym:
            $this->sceiskoouaiqocqo($qkweikswegyciaie, $qkweikswegyciaie->register($this->cisyiemkeykgkomc()), "\x73\x69\144\x65");
            goto weaaqiuymusyaoim;
            yyuwoaymcmgagkek:
            cuawaegesykceuoi:
            goto aaeaawawgiokuoqc;
            wamywgsgswmwgqes:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto eceqwgecqgsugwyi;
            }
            goto eccsqkqyiwqcocym;
            weaaqiuymusyaoim:
            eceqwgecqgsugwyi:
            goto yyuwoaymcmgagkek;
            aaeaawawgiokuoqc:
        }
        goto qgaywmweyqweqkme;
        sgkkuuwoeouqgeqc:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto wymmooqweugwumuo;
            ouqciucssmewqseu:
            $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\x74\x61\x62\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\155\145\x74\141\142\157\x78\145\163", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this);
            goto ooiackiyssimocoy;
            uscaccweyakkqycu:
            if (!$cciauwuwuqaywgce->sekaaukqmiysugws()) {
                goto syqcoysgaociwkmu;
            }
            goto ouqciucssmewqseu;
            mueoecmegwgakkuu:
            foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
                goto eamyyoygceikikcy;
                qskaaemigoqyogiu:
                muqgkcsqkssymyem:
                goto gqocyuqyemgioaok;
                wikycciwekuugqec:
                $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === "\x73\151\144\145" ? "\156\x6f\162\155\141\x6c" : $mgkceomocowocqyo);
                goto qskaaemigoqyogiu;
                gqocyuqyemgioaok:
                kgeomuicikkomkie:
                goto umsqoiumeuayywuy;
                emoekgyaiwksgwoa:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto muqgkcsqkssymyem;
                }
                goto ycumgkeaagawwkss;
                eamyyoygceikikcy:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137\x74\141\x62\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\155\x65\x74\141\142\x6f\170\137{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this);
                goto emoekgyaiwksgwoa;
                ycumgkeaagawwkss:
                $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm();
                goto wikycciwekuugqec;
                umsqoiumeuayywuy:
            }
            goto ccyiauwwmeyoqmme;
            ooiackiyssimocoy:
            
            $uaqusiikkokccqou = ManipulateArray::yaeiiwwyckwugsem($uaqusiikkokccqou);
            goto mueoecmegwgakkuu;
            wymmooqweugwumuo:
            $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc());
            goto uscaccweyakkqycu;
            gwysqygykiqwgugc:
            oeeaaoyyucuuwkuu:
            goto aawgwoyccicqiooa;
            ccyiauwwmeyoqmme:
            oamosmwemmmikgwo:
            goto wigmqayoaagkekug;
            wigmqayoaagkekug:
            syqcoysgaociwkmu:
            goto gwysqygykiqwgugc;
            aawgwoyccicqiooa:
        }
        goto acesmiyysymciaui;
        yywywwmawmmyuwms:
        if (!$ywoucyskcquysiwc) {
            goto skoasiggcqccogqu;
        }
        goto sgkkuuwoeouqgeqc;
        qmiwkumwuqywukmg:
        skoasiggcqccogqu:
        goto sgugyikwqeswcaos;
        acesmiyysymciaui:
        smgugiqksqkmsuys:
        goto qmiwkumwuqywukmg;
        wyswgiqmuwyiqama:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto yywywwmawmmyuwms;
        gkemwmiykeiyuska:
    }
    
    public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = "\x6e\157\162\x6d\141\x6c")
    {
        goto yeiwygkuemkoykis;
        msmcymkewouiuuse:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x79\151\145\x6d\x75\163\147\x71\155\x6f\x79\155\163\147\145\x67"]);
        goto kieygmqycuywqgay;
        bocwykmykkkoioyq:
        $wyicesskmckwqeec = "\160\x6f\x73\x74\x62\157\x78\137\x63\x6c\141\x73\x73\145\x73\x5f{$this->mmsykuomogaqoaye()}\x5f{$aokagokqyuysuksm}";
        goto wmiywmecqmaeagwc;
        uoiooiwsmoysksqm:
        imeagymkkagggkec:
        goto cogiokiwsggickqu;
        wayyqekkqyeoeiwo:
        $this->qcsmikeggeemccuu("\143\x6d\x62\x32\137\x73\x61\x76\145\x5f\157\160\164\x69\x6f\x6e\x73\x2d\x70\x61\x67\x65\x5f\146\x69\x65\154\x64\163\137{$aokagokqyuysuksm}", [$this, "\147\x6f\x79\145\x6d\x69\x6b\157\147\x65\x75\163\x6b\147\x61\163"], 10, 2);
        goto bocwykmykkkoioyq;
        ouasygcguacqoomm:
        if (!$this->uaicqoagkoeacawy($uoeiskamgscgeccq)) {
            goto imeagymkkagggkec;
        }
        goto coqcgqgsuagaoqgo;
        yeiwygkuemkoykis:
        if (!is_array($uoeiskamgscgeccq)) {
            goto qykisyqcgokcuiqs;
        }
        goto koqciqwwomauuqci;
        wuagokiooeiuokqs:
        $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo);
        goto uoiooiwsmoysksqm;
        aaowoieokoumsyqc:
        
        if (!$uoeiskamgscgeccq->meta_box["\143\154\x6f\163\x65\144"]) {
            goto igcyymyqeawqkwgm;
        }
        goto msmcymkewouiuuse;
        kieygmqycuywqgay:
        igcyymyqeawqkwgm:
        goto wuagokiooeiuokqs;
        acewwgmgwegkqkmg:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x65\167\x73\153\x6b\167\165\167\153\x6b\x6b\141\161\x77\147\x6b"]);
        goto ikegeeiesieogisa;
        coqcgqgsuagaoqgo:
        $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea();
        goto wayyqekkqyeoeiwo;
        oyymggqmgsymkyua:
        qykisyqcgokcuiqs:
        goto ouasygcguacqoomm;
        ikegeeiesieogisa:
        qkmoekswwgmogsgg:
        goto aaowoieokoumsyqc;
        wmiywmecqmaeagwc:
        if (!($this->myomgmiksogoikuc() && $mgkceomocowocqyo !== "\163\151\x64\145")) {
            goto qkmoekswwgmogsgg;
        }
        goto acewwgmgwegkqkmg;
        koqciqwwomauuqci:
        $uoeiskamgscgeccq = ManipulateArray::get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea());
        goto oyymggqmgsymkyua;
        cogiokiwsggickqu:
    }
    
    public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo)
    {
        add_meta_box($qkweikswegyciaie->mwikyscisascoeea(), $qkweikswegyciaie->iwqugwigmoiagwec(), [$this, "\141\x75\163\x79\155\155\147\163\153\163\x6f\x71\x77\165\x71\x6b"], $iaakskwmyqceoscy, $mgkceomocowocqyo, $qkweikswegyciaie->yywskysiycwkwsgw());
    }
    public function wqqckkmqakiquycs()
    {
        goto qsqcmociaogwiggs;
        ucwgiecogkaesuko:
        ywqqgwecosgicaim:
        goto cekgqucskcgyoakq;
        wwakqukuoioceyck:
        DecoratorAsset::imsomwwswyoquoqk($eueuqacmukymcyya, $this->miocmcoykayoyyau()->get("\x6d\x75\x6c\164\151\x6f\x70\164\x73\56\152\x73"));
        goto fsaiawesoowogmek;
        cmqkcsayqiqugyce:
        DecoratorAsset::fowiaymccsmewemu($eueuqacmukymcyya, "\x50\x4d\120\x52\117\x70\x74\124\141\x62\163", ["\x6b\145\171" => $this->kyqakacqeumicgag(), "\x70\157\x73\x74\x74\x79\160\x65" => $this->kecacgyqmgeeqmme(), "\x64\x65\x66\x61\x75\154\x74\164\141\x62" => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']);
        goto oeuiyomkweusgawu;
        kwgcqoqewyqaoosk:
        $cciauwuwuqaywgce = reset($ywoucyskcquysiwc);
        goto cmqkcsayqiqugyce;
        qsqcmociaogwiggs:
        if (!$this->csaueuycewaiuaay()) {
            goto ywqqgwecosgicaim;
        }
        goto twuqeqeisoggkkmg;
        oeuiyomkweusgawu:
        kqmyqoqwaoaqgemm:
        goto ucwgiecogkaesuko;
        twuqeqeisoggkkmg:
        if (!$this->myomgmiksogoikuc()) {
            goto kqmyqoqwaoaqgemm;
        }
        goto oouiqmqcowoqqwyi;
        oouiqmqcowoqqwyi:
        $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}\55\141\x64\155\x69\156";
        goto wwakqukuoioceyck;
        fsaiawesoowogmek:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto kwgcqoqewyqaoosk;
        cekgqucskcgyoakq:
    }
    public function uuqqkgyqekmgycgq()
    {
        goto oouomgcseggcugyi;
        oouomgcseggcugyi:
        if (!$this->myomgmiksogoikuc()) {
            goto uquugcsmgsmmwywo;
        }
        goto agwiwkwmowuuscsg;
        qskqawaewmgquwmq:
        ManipulateHTML::awwqwouuoioauoaw("\163\x74\171\x6c\145", ["\x69\144" => "\x70\x72\x2d\x74\141\142\x2d\x63\154\145\x61\x6e\165\x70\x2d\x63\x73\163"], true, $icyaoosaykeskiuu);
        goto ueigayyqqomcisui;
        agwiwkwmowuuscsg:
        $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\x6d\145\x74\x61\164\x61\x62\56\x63\x73\163", ["\x70\x61\147\145" => $this->kyqakacqeumicgag()]);
        goto qskqawaewmgquwmq;
        ueigayyqqomcisui:
        uquugcsmgsmmwywo:
        goto wckioasgmwqugauw;
        wckioasgmwqugauw:
    }
    public function iaggsikquucsoiko()
    {
        ManipulateHTML::awwqwouuoioauoaw("\163\143\162\x69\x70\x74", [], true, "\152\x51\165\145\x72\171\50\144\157\x63\165\x6d\145\x6e\x74\x29\x2e\162\x65\141\144\171\50\146\x75\x6e\x63\x74\151\x6f\156\x28\51\173\160\x6f\163\x74\x62\157\170\145\163\56\x61\x64\x64\x5f\x70\x6f\x73\x74\142\x6f\170\137\164\157\147\147\x6c\145\x73\50\42\160\x6f\x73\x74\142\157\x78\x2d\143\x6f\x6e\x74\141\x69\156\145\x72\42\x29\73\175\x29\73");
    }
    public function ecyyqsgwwuukgssg()
    {
        goto siqwwuiuqwcayisu;
        ecmwimqmggogysoe:
        eokeqaomwmsymuyi:
        goto emmseyuagaaweuek;
        siqwwuiuqwcayisu:
        if (!($this->csaueuycewaiuaay() && $this->ekwgmoqoeywwwccw())) {
            goto eokeqaomwmsymuyi;
        }
        goto uegaugwmyucmooyu;
        uegaugwmyucmooyu:
        echo $this->uaasoaieuoymsgsi();
        goto ecmwimqmggogysoe;
        emmseyuagaaweuek:
    }
    
    private function uaicqoagkoeacawy($uoeiskamgscgeccq)
    {
        
        return isset($uoeiskamgscgeccq->meta_box["\x73\x68\x6f\x77\x5f\157\156"]["\153\x65\x79"]) && $uoeiskamgscgeccq->meta_box["\163\x68\x6f\167\x5f\157\156"]["\x6b\x65\171"] === "\157\160\164\x69\x6f\156\x73\x2d\x70\x61\147\x65" && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box["\x73\x68\157\x77\137\x6f\x6e"]["\166\x61\154\165\145"]);
    }
    
    public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu)
    {
        goto iuwimogikcucogci;
        eqiigmauqkoswiys:
        $this->once = true;
        goto gaweiceicsykweqs;
        cgaoeuasmuicmyoq:
        settings_errors("{$this->cisyiemkeykgkomc()}\55\156\157\164\x69\x63\145\163");
        goto eqiigmauqkoswiys;
        iuwimogikcucogci:
        if (!($this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $sogsqsawoyqmqsqu && !$this->ccauywsgwsesgmua())) {
            goto waiqusgyaeegsqqw;
        }
        goto ccequccokicuawum;
        gaweiceicsykweqs:
        waiqusgyaeegsqqw:
        goto meuckssskyaesage;
        ccequccokicuawum:
        add_settings_error("{$this->cisyiemkeykgkomc()}\x2d\x6e\x6f\164\x69\143\x65\x73", '', __("\x53\x65\x74\x74\151\x6e\x67\x73\x20\125\x70\144\141\x74\x65\x64", PR__CMN__FOUNDATION), "\165\x70\x64\141\164\x65\x64");
        goto cgaoeuasmuicmyoq;
        meuckssskyaesage:
    }
    
    public function uaasoaieuoymsgsi() : ?string
    {
        return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ["\x6e\141\155\145" => "\x73\x75\142\x6d\151\164\x2d\x63\x6d\x62", "\x74\171\160\145" => "\163\x75\x62\155\x69\164", "\143\154\141\163\163" => "\x62\165\x74\164\x6f\x6e\x2d\x70\x72\x69\155\x61\162\x79"]);
    }
    
    public function omeeeegkauuouaka() : string
    {
        return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ["\156\x61\155\145" => "\162\145\x73\x65\x74\x2d\x63\155\x62", "\164\x79\160\x65" => "\142\x75\x74\164\157\156", "\x63\x6c\x61\163\x73" => "\x62\x75\x74\164\157\x6e\x2d\163\145\143\157\x6e\144\x61\x72\x79"]);
    }
    
    public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = []) : string
    {
        return $pkyyagewkiyckmwy ? ManipulateHTML::qgsekwygcgawekeq("\x69\x6e\160\x75\x74", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\143\154\141\x73\163" => "\142\x75\164\x74\x6f\x6e", "\x76\x61\154\165\145" => $pkyyagewkiyckmwy])) : '';
    }
    
    public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\x6f\160\x74\x2d\x68\x69\144\x64\145\x6e";
        return $cmkqisoeyioisqaw;
    }
    
    public function yiemusgqmoymsgeg($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\x63\154\157\163\x65\144";
        return $cmkqisoeyioisqaw;
    }
    public function ogkiiewscemaqkwg()
    {
        $this->cqscqicucmeamkyq("\x61\x64\x64\x5f\155\x65\164\x61\x5f\x62\157\x78\x65\163\x5f{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq("\x61\144\144\x5f\155\145\x74\141\x5f\142\x6f\170\145\163", $this->mmsykuomogaqoaye(), null);
    }
    
    public function ausymmgsksoqwuqk($post, $qkweikswegyciaie)
    {
        goto icuoakkeswccquuo;
        mskkgeiykcaoqosq:
        if ($this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto iwwmukmsgwoesima;
        }
        goto cywcqkecgwkgssgy;
        wyuiuogqiqasaumy:
        ouomuyeqsugykuyk:
        goto gaeewoieegegmwmw;
        egkokuggowqoogwe:
        ucomiwksyqswgwmm:
        goto mugykqoymeugqasw;
        icuoakkeswccquuo:
        
        $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie["\151\144"], $this->cisyiemkeykgkomc());
        goto eqmgcgwcgkuoqyya;
        ceyumqqeccuiuwsw:
        if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto ucomiwksyqswgwmm;
        }
        goto mskkgeiykcaoqosq;
        gaeewoieegegmwmw:
        
        $scegeeyqweaksmki->show_form();
        goto gesqgakoekiukmsa;
        egswwwwgmeecegem:
        $icwicymcioeyeyek = $_POST;
        goto ceyumqqeccuiuwsw;
        cywcqkecgwkgssgy:
        goto ouomuyeqsugykuyk;
        goto egkokuggowqoogwe;
        yewqwkoaeqqegiyi:
        goto ouomuyeqsugykuyk;
        goto soakqssqaoaqkkck;
        mugykqoymeugqasw:
        
        $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek);
        goto yewqwkoaeqqegiyi;
        gesqgakoekiukmsa:
        wugsmyikwkyususo:
        goto ooyikkuecqewakee;
        qesoesykasouikck:
        
        DecoratorOption::delete($this->cisyiemkeykgkomc());
        goto wyuiuogqiqasaumy;
        eqmgcgwcgkuoqyya:
        if (!$scegeeyqweaksmki) {
            goto wugsmyikwkyususo;
        }
        goto egswwwwgmeecegem;
        soakqssqaoaqkkck:
        iwwmukmsgwoesima:
        goto qesoesykasouikck;
        ooyikkuecqewakee:
    }
    
    private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto mmgaoiukskgaskye;
        taisikggaaysayue:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\157\x62\x6a\145\x63\164\137\151\x64");
        goto mouyseuswmcisysg;
        mmgaoiukskgaskye:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto mawaowggkucoosoc;
        mouyseuswmcisysg:
        return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce($_POST[$scegeeyqweaksmki->gwgqcsmomamyqsmy()], $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto iyoiumqkociwggwi;
        mawaowggkucoosoc:
        $ooewkimkcskcwsso = ManipulateArray::get($icwicymcioeyeyek, "\x72\145\163\x65\x74\55\143\x6d\x62");
        goto taisikggaaysayue;
        iyoiumqkociwggwi:
    }
    
    private function negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto asqwcaswskmaiuei;
        kusykiciiukqkwcs:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\x6f\x62\152\145\143\x74\137\x69\144");
        goto qsoicugccmgoaooq;
        qsoicugccmgoaooq:
        return $scegeeyqweaksmki->csgiecsagosuucqo("\163\141\166\145\x5f\146\x69\145\x6c\x64\x73") && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto gwoqwogmyqmaekeq;
        asqwcaswskmaiuei:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto kusykiciiukqkwcs;
        gwoqwogmyqmaekeq:
    }
    
    public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool
    {
        goto awuymmyewogkskka;
        keisauiosaguwkmg:
        qaqeuqcqwyqigguw:
        goto ikigycmycsqieeoi;
        awuymmyewogkskka:
        if ($icwicymcioeyeyek) {
            goto qaqeuqcqwyqigguw;
        }
        goto wqsgwiecyyamgugu;
        wqsgwiecyyamgugu:
        $icwicymcioeyeyek = $_POST;
        goto keisauiosaguwkmg;
        ikigycmycsqieeoi:
        return (bool) ManipulateArray::get($icwicymcioeyeyek, "\x73\x75\142\x6d\x69\164\x2d\143\155\142", false);
        goto memikioiiekcqoqc;
        memikioiiekcqoqc:
    }
    
    public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array
    {
        goto aemgieoigwoaoqey;
        aemgieoigwoaoqey:
        $saouceauqqiwcwas = [];
        goto yuscokykcoymyyiq;
        yuscokykcoymyyiq:
        if (!($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui))) {
            goto yauygqguooyuiick;
        }
        goto wimsassgwgimayck;
        omimqwkiqwicccmw:
        wkeegycggsggcsiy:
        goto msakyecawuskgema;
        amaswgogkauskswc:
        return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas;
        goto bkwacmcewmysqowo;
        wimsassgwgimayck:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) {
            goto qsaomeeimaagqewc;
            ksaecqkkqkqumiyy:
            wuaeweseqayacqis:
            goto aksqawoycgigewoo;
            qsaomeeimaagqewc:
            if (is_object($qkweikswegyciaie)) {
                goto iekcwimcmsemsgmo;
            }
            goto qygwmuiaqciwymgw;
            qygwmuiaqciwymgw:
            $saouceauqqiwcwas[$uusmaiomayssaecw] = CMB2_Boxes::get($qkweikswegyciaie);
            goto oqcoyuausmgccywa;
            oqcoyuausmgccywa:
            iekcwimcmsemsgmo:
            goto ksaecqkkqkqumiyy;
            aksqawoycgigewoo:
        }
        goto omimqwkiqwicccmw;
        msakyecawuskgema:
        yauygqguooyuiick:
        goto amaswgogkauskswc;
        bkwacmcewmysqowo:
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\x70\x61\147\145");
    }
    
    public function __toString()
    {
        return self::uqggkiomyiceyooa();
    }
}
