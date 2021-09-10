<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    
    protected ?string $key = "\155\x79\137\x6f\160\164\151\x6f\x6e";
    
    protected array $menuArgs = ["\x76\151\145\x77\137\143\x61\160\141\142\151\x6c\x69\x74\x79" => '', "\x70\x61\162\x65\156\164\137\x73\154\x75\x67" => '', "\x70\141\147\145\137\x74\x69\164\x6c\x65" => '', "\155\145\x6e\165\137\164\151\x74\x6c\145" => '', "\x63\141\x70\x61\142\x69\154\x69\x74\171" => "\x6d\x61\x6e\141\x67\145\137\157\160\x74\x69\x6f\x6e\x73", "\155\x65\156\x75\x5f\x73\x6c\x75\147" => '', "\x69\143\157\156\x5f\x75\x72\x6c" => '', "\160\x6f\163\151\164\151\157\156" => null, "\156\145\164\167\157\162\x6b" => false];
    
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
        goto wioequuiyigoaass;
        ouwcsmcycymqmecm:
        owakcoywswieyewa:
        goto mcoqgkqqocieqygg;
        wioequuiyigoaass:
        if (!(is_admin() && class_exists("\103\115\x42\62"))) {
            goto owakcoywswieyewa;
        }
        goto kswyqgqqygaouiuk;
        kswyqgqqygaouiuk:
        $this->id = $this->iaqckqwoiseyqaku();
        goto komcawukmomgkqog;
        caocugyuikeekyom:
        parent::__construct();
        goto ouwcsmcycymqmecm;
        komcawukmomgkqog:
        $this->key = $uusmaiomayssaecw;
        goto caocugyuikeekyom;
        mcoqgkqqocieqygg:
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
        return "\143\x6d\157" . rand(1000, 99999);
    }
    
    public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self
    {
        goto siioyccqcugcmkoy;
        aqsuuuwagsyyooak:
        return $this;
        goto sukooaksmwmweysu;
        siioyccqcugcmkoy:
        if (!($qgoqiacsiccwoawi > 2 || $qgoqiacsiccwoawi < 1)) {
            goto umcsysgcksumioak;
        }
        goto owoiuwqgwcseogig;
        meekmmeswcggewek:
        umcsysgcksumioak:
        goto vaekgwkiiqmwmoey;
        owoiuwqgwcseogig:
        $qgoqiacsiccwoawi = 1;
        goto meekmmeswcggewek;
        vaekgwkiiqmwmoey:
        $this->column = $qgoqiacsiccwoawi;
        goto aqsuuuwagsyyooak;
        sukooaksmwmweysu:
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
        goto gkwskkyusocmckci;
        gkwskkyusocmckci:
        
        $kiiwewqkgqgqwwue = is_multisite() && $this->agcaegggmmeuammg("\x6e\x65\164\167\157\162\x6b") ? "\156\x65\164\x77\x6f\x72\153\137" : '';
        goto wgsmemaiyicwmagy;
        wgsmemaiyicwmagy:
        $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\137\x68\145\x61\144", [$this, "\165\165\x71\x71\153\x67\x79\x71\145\x6b\155\x67\171\143\147\x71"])->qcsmikeggeemccuu("\x61\x64\155\x69\156\137\x69\x6e\151\x74", [$this, "\x79\x65\171\151\x67\165\171\145\147\x6d\x6d\x79\x75\x73\x65\141"])->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\145\156\161\x75\x65\x75\145\137\163\x63\x72\x69\160\x74\163", [$this, "\167\161\161\143\x6b\x6b\x6d\x71\141\153\x69\x71\x75\171\143\163"])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}\141\x64\x6d\151\x6e\x5f\x6d\x65\156\165", [$this, "\x73\x6f\x63\x63\x6f\x6d\x61\x6b\x77\145\161\147\163\153\151\143"], 12)->qcsmikeggeemccuu("\143\155\x62\x32\x5f\162\145\156\x64\145\162\137\157\160\164\x69\157\x6e\x73\137\x73\141\166\145\137\x62\165\x74\164\157\x6e", [$this, "\145\x63\x79\x79\161\x73\147\x77\x77\165\x75\x6b\147\x73\163\147"]);
        goto oaymsekakyassacy;
        oaymsekakyassacy:
        parent::wigskegsqequoeks();
        goto oqaqkwgyiegaoiyk;
        oqaqkwgyiegaoiyk:
    }
    public function yeyiguyegmmyusea()
    {
        goto esuscykksesgueii;
        awqcicwsamqqsisa:
        cascyqosimkguayi:
        goto meawiqkkayqiiyqa;
        cgiweqsmckusyige:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\x70\141\162\x65\156\x74\x5f\163\x6c\x75\x67");
        goto ywcgeioasmogicki;
        esacgaegcuqsgqua:
        cqumukgqaesgokmu:
        goto cgiweqsmckusyige;
        aewggukwoeqcwkmw:
        $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom == $ewuukoycimkekouc);
        goto qkowqoyoecgcqokw;
        akwcamwokuciwqyw:
        register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc());
        goto esacgaegcuqsgqua;
        emmcmeososokueak:
        $this->qaygoqgeieeugsey("\x76\151\x65\167\137\143\x61\x70\x61\x62\151\x6c\x69\164\171", $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg("\143\x61\160\x61\142\x69\154\x69\164\x79") : false);
        goto awqcicwsamqqsisa;
        ywcgeioasmogicki:
        $ewuukoycimkekouc = $this->agcaegggmmeuammg("\155\x65\x6e\x75\x5f\x73\154\165\147");
        goto aewggukwoeqcwkmw;
        aaouuuqqgueesgum:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\166\151\145\x77\137\143\141\160\x61\142\151\x6c\151\164\x79");
        goto myuwisogyksycamk;
        qkowqoyoecgcqokw:
        $this->swqsasqieqqgusew($ewuukoycimkekouc ? $ewuukoycimkekouc : $this->cisyiemkeykgkomc());
        goto aaouuuqqgueesgum;
        esuscykksesgueii:
        if (!$this->agciemoaikwmiugi()) {
            goto cqumukgqaesgokmu;
        }
        goto akwcamwokuciwqyw;
        myuwisogyksycamk:
        if ($eiiwoqgkgmosakem) {
            goto cascyqosimkguayi;
        }
        goto emmcmeososokueak;
        meawiqkkayqiiyqa:
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
        goto ksuwigakysoscwsi;
        uackiwuiauimukuk:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto qycyawiweamkwamy;
        swwasksasqwewmck:
        return $this;
        goto aoemiusqwqoimequ;
        qycyawiweamkwamy:
        wcyacsasikeesgay:
        goto swwasksasqwewmck;
        ksuwigakysoscwsi:
        $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\164\141\x62", $cciauwuwuqaywgce, $this);
        goto uyowgcocwogyyogy;
        uyowgcocwogyyogy:
        if (!$cciauwuwuqaywgce instanceof Tab) {
            goto wcyacsasikeesgay;
        }
        goto uackiwuiauimukuk;
        aoemiusqwqoimequ:
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self
    {
        goto ksumissygaeqwiqk;
        ksumissygaeqwiqk:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            uciscoimiwuqsumg:
        }
        goto sskygwgyogmqgmqa;
        sskygwgyogmqgmqa:
        ccewmwoameocgeck:
        goto ocgkcmokykycoqwu;
        ocgkcmokykycoqwu:
        return $this;
        goto gkqugmqmcaaewcgu;
        gkqugmqmcaaewcgu:
    }
    
    public function myomgmiksogoikuc() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    public function qessyiueeiwwgyag()
    {
        goto icecgmamoqwkcgau;
        wgkicouqwayscuio:
        $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]);
        goto mumcqaqeakgcquac;
        oicyciugogouuwwi:
        if (!(!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || DecoratorUser::scmcyesmmikkucie($eiiwoqgkgmosakem)))) {
            goto uscaqiyymkyywsws;
        }
        goto syimweumwsqgoggc;
        wqyesuemouksaeac:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto gqogoecueameuqem;
            eiyeuegmoiyouoia:
            scayqcumuauocuco:
            goto skemwcqcyaqogacu;
            oksseoqyoqqkmooc:
            if (empty($scwwkgcyecqgioqs)) {
                goto sciaeeisgiakmyyw;
            }
            goto cwsscisucgswsugy;
            cwsscisucgswsugy:
            foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) {
                goto euukqqoeamysgaai;
                gswosgeumoekweom:
                $this->omameoyeausyugmw($qkweikswegyciaie, "\x66\157\x72\155\137\155\141\153\145\x72\x5f\164\141\142\137\x73\x69\x64\145\137\143\157\x6e\x74\x61\x69\x6e\145\162\x5f{$aokagokqyuysuksm}", "\163\x69\144\x65");
                goto ggkemwwsugkckeag;
                ucisggckygasmewc:
                if (!$qkweikswegyciaie->mukiwuqwmywsckco()) {
                    goto gqygesckmymkgeia;
                }
                goto waagiwegsgmwumyk;
                ecouksmuoaagmiwo:
                iyuyykuuksqgcoco:
                goto wscqsciugescaoys;
                waagiwegsgmwumyk:
                $qkweikswegyciaie->register($this->cisyiemkeykgkomc());
                goto gswosgeumoekweom;
                eicsoeicqsmgyoyw:
                gqygesckmymkgeia:
                goto iocuaqcqoggiqgsw;
                ggkemwwsugkckeag:
                $qgoqiacsiccwoawi = 2;
                goto eicsoeicqsmgyoyw;
                euukqqoeamysgaai:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto cugygygwqumqwkmc;
                }
                goto eiuqssqeewecueaw;
                iocuaqcqoggiqgsw:
                cugygygwqumqwkmc:
                goto ecouksmuoaagmiwo;
                eiuqssqeewecueaw:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}\x5f\x73\x69\x64\145\137\155\145\x74\141\x62\x6f\x78\145", $qkweikswegyciaie);
                goto ucisggckygasmewc;
                wscqsciugescaoys:
            }
            goto eiyeuegmoiyouoia;
            aqimmiyqakwgogiw:
            $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea();
            goto ogaiqagqcemycaoo;
            skemwcqcyaqogacu:
            sciaeeisgiakmyyw:
            goto sakgiyogqqymcama;
            wikqsescmyeeicwg:
            ogemcuimywmoauai:
            goto uwckqwwyucaiekeq;
            ogaiqagqcemycaoo:
            $qgoqiacsiccwoawi = 1;
            goto qqkqawesmskmkgqg;
            qqkqawesmskmkgqg:
            
            $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}\x5f\164\x61\142\137\163\151\144\x65\x5f\x6d\145\164\x61\x62\x6f\x78\x65\x73", $cciauwuwuqaywgce->weookicuaacigemm());
            goto oksseoqyoqqkmooc;
            iicewkmmisuecsku:
            ussceksysakwguwm:
            goto wikqsescmyeeicwg;
            gqogoecueameuqem:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto ussceksysakwguwm;
            }
            goto aqimmiyqakwgogiw;
            goismqusymeooqae:
            $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw("\143\x6f\x6e\164\145\x6e\x74", ["\x69\x64" => $aokagokqyuysuksm, "\x63\157\x6c\165\155\x6e" => $qgoqiacsiccwoawi, "\144\x65\x73\143\162\151\x70\164\151\157\156" => $cciauwuwuqaywgce->meqceykmywmqgoym(), "\143\157\156\x74\x61\x69\156\x65\x72\x5f\141\x74\164\162\163" => ["\151\144" => "\x6f\160\164\x2d\x63\x6f\x6e\164\x65\x6e\164\55{$aokagokqyuysuksm}", "\143\154\x61\163\163" => "\x6f\160\x74\x2d\143\157\x6e\x74\x65\156\164", "\144\141\x74\141\x2d\x62\x6f\x78\145\163" => implode("\x2c", array_keys(ManipulateArray::yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue())))]]);
            goto iicewkmmisuecsku;
            sakgiyogqqymcama:
            $iogqeouiuqyewuqe .= ManipulateHTML::uuccukgasskgimsq("\141", ["\x69\144" => "\157\x70\164\55\164\x61\x62\55{$aokagokqyuysuksm}", "\150\x72\x65\146" => "\43", "\x63\x6c\141\163\x73" => "\x6e\x61\x76\55\164\141\142\40\x6f\160\x74\55\x74\x61\142\x20\x70\162\55\164\x61\x62", "\x64\141\164\x61\55\x6f\160\x74\143\157\156\164\145\x6e\x74" => "\43\x6f\160\164\x2d\x63\157\156\x74\x65\x6e\x74\x2d{$aokagokqyuysuksm}"], [$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()]);
            goto goismqusymeooqae;
            uwckqwwyucaiekeq:
        }
        goto eieckmqqcmcqcyiq;
        syimweumwsqgoggc:
        $iogqeouiuqyewuqe = '';
        goto usquuksweegcuqom;
        wycuuweqayggsikk:
        $this->qigsyyqgewgskemg("\x77\162\141\160\40\143\155\142\62\55\157\x70\x74\151\157\156\163\55\160\141\x67\145\40\x63\155\x6f\55\x6f\160\164\151\157\156\x73\55\160\141\147\145")->qigsyyqgewgskemg($this->cisyiemkeykgkomc());
        goto cyciqqkakeosegoe;
        mumcqaqeakgcquac:
        echo $this->iuygowkemiiwqmiw("\x6d\x65\x74\141\x74\x61\142", ["\153\x65\171" => $this->cisyiemkeykgkomc(), "\150\157\157\153" => $this->mmsykuomogaqoaye(), "\x74\141\142\x73" => $iogqeouiuqyewuqe, "\x70\141\147\145" => $this->kyqakacqeumicgag(), "\x63\157\x6c\165\x6d\156" => $this->myywwqkyiwawwquy(), "\x6e\x6f\156\x63\x65\163" => [wp_nonce_field("\155\x65\164\x61\55\142\157\x78\55\157\x72\x64\x65\162", "\x6d\145\x74\141\55\x62\x6f\170\55\x6f\162\x64\145\x72\x2d\156\x6f\156\143\145", false, false), wp_nonce_field("\143\154\x6f\163\x65\x64\160\157\163\x74\x62\x6f\x78\145\163", "\x63\x6c\157\163\145\x64\160\157\x73\x74\142\x6f\x78\x65\163\x6e\157\156\x63\145", false, false)], "\x62\165\164\164\157\156\x73" => $qyukicweqoisimwg, "\x63\157\156\x74\145\156\x74\163" => $kqweykcqkgkmoqay, "\x70\x61\147\145\137\164\x69\164\154\145" => esc_html(get_admin_page_title()), "\143\x6f\x6e\x74\141\151\x6e\x65\x72\137\141\164\164\162\163" => $this->ccekeuwwqqoiwuwy()]);
        goto caecagokwuouoymy;
        seiaqecoeskumemq:
        uscaqiyymkyywsws:
        goto ekskakueeqwgwyug;
        icecgmamoqwkcgau:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\x69\145\167\137\x63\141\160\141\142\x69\x6c\x69\x74\x79");
        goto oicyciugogouuwwi;
        eieckmqqcmcqcyiq:
        wemkygaugegmuyeq:
        goto wgkicouqwayscuio;
        caecagokwuouoymy:
        
        $this->once = false;
        goto seiaqecoeskumemq;
        usquuksweegcuqom:
        $kqweykcqkgkmoqay = '';
        goto wycuuweqayggsikk;
        cyciqqkakeosegoe:
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($this->equiyaoamqmaeckc());
        goto wqyesuemouksaeac;
        ekskakueeqwgwyug:
    }
    
    public function makgumuaykymweaq() : array
    {
        goto iouqskcmyecqmugo;
        ckycaecsiwgmomgk:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\160\141\x72\145\156\164\137\x73\154\x75\x67") ? $this->agcaegggmmeuammg("\x70\x61\162\x65\156\x74\137\x73\x6c\x75\147") : $omwmuycmeqcqokom;
        goto asyskswoaqakaicc;
        qcscwisoukgswcum:
        
        if (!$omwmuycmeqcqokom) {
            goto swykkkgaawkssqma;
        }
        goto aywscouoieeksess;
        xkqoueuawceokqwq:
        return $ywmkwiwkosakssii;
        goto ayaksmyymwewccuw;
        asyskswoaqakaicc:
        
        $cmyoswawcimsecyy = $this->agcaegggmmeuammg("\x70\141\x67\145\137\164\151\164\154\145") ? $this->agcaegggmmeuammg("\x70\141\x67\145\x5f\164\x69\x74\154\x65") : $this->qcgakseyaikigqco();
        goto qcscwisoukgswcum;
        qayqouemeyoeqece:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x70\x6f\163\x69\164\151\157\x6e") === null ? null : intval($this->agcaegggmmeuammg("\x70\157\163\x69\x74\x69\157\x6e"));
        goto iwysasakqeoiqkea;
        keicyiqusacogocc:
        swykkkgaawkssqma:
        goto aouikocwycssquau;
        iwysasakqeoiqkea:
        aaiekuiyqeykkgqq:
        goto geggqemsocqacmaa;
        cewcquygkawaiscq:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x69\143\157\x6e\x5f\165\162\x6c") ? $this->agcaegggmmeuammg("\151\143\x6f\156\x5f\165\162\154") : '';
        goto qayqouemeyoeqece;
        kagywssammsigeky:
        
        $ywmkwiwkosakssii[] = null;
        goto eoecsiksocyeiayk;
        qomugkkimygqeioo:
        
        $ywmkwiwkosakssii[] = [$this, "\x71\x65\x73\x73\171\151\165\145\x65\151\167\167\147\171\141\x67"];
        goto yyqwgugicycyeosk;
        aywscouoieeksess:
        
        $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "\x3f\x70\157\x73\x74\137\x74\171\x70\x65\75{$this->kecacgyqmgeeqmme()}" : '';
        goto gwomwiesykqmmwgo;
        gcmcgcuycmoywakk:
        eskmyswgsosamscc:
        goto cewcquygkawaiscq;
        gwomwiesykqmmwgo:
        $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc;
        goto keicyiqusacogocc;
        aucmyygueiuuyygk:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x6d\x65\x6e\x75\137\164\x69\164\x6c\145") ? $this->agcaegggmmeuammg("\155\x65\156\x75\137\164\x69\164\x6c\145") : $cmyoswawcimsecyy;
        goto yossisaqeggqeokq;
        awcyccimowsskmkc:
        
        $omwmuycmeqcqokom = $this->eyqwmckgumyaoams();
        goto ckycaecsiwgmomgk;
        eoecsiksocyeiayk:
        goto aaiekuiyqeykkgqq;
        goto gcmcgcuycmoywakk;
        yossisaqeggqeokq:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\143\x61\160\141\x62\151\x6c\151\x74\x79");
        goto ckaoqocygksqsoqg;
        iouqskcmyecqmugo:
        $ywmkwiwkosakssii = [];
        goto awcyccimowsskmkc;
        aouikocwycssquau:
        
        $ywmkwiwkosakssii[] = $cmyoswawcimsecyy;
        goto aucmyygueiuuyygk;
        geggqemsocqacmaa:
        
        $ywmkwiwkosakssii["\x63\x62"] = $omwmuycmeqcqokom ? "\x61\144\x64\137\163\165\x62\x6d\145\156\x75\x5f\160\141\x67\x65" : "\x61\144\144\137\155\x65\156\165\137\160\141\147\145";
        goto xkqoueuawceokqwq;
        ckaoqocygksqsoqg:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x6d\x65\x6e\x75\x5f\x73\154\x75\x67") ? $this->agcaegggmmeuammg("\155\x65\156\165\x5f\163\x6c\165\147") : $this->cisyiemkeykgkomc();
        goto qomugkkimygqeioo;
        yyqwgugicycyeosk:
        
        if (!$omwmuycmeqcqokom) {
            goto eskmyswgsosamscc;
        }
        goto kagywssammsigeky;
        ayaksmyymwewccuw:
    }
    public function soccomakweqgskic()
    {
        goto skmygcmwwgoaguwo;
        sqqocygqgwkmgwaa:
        $this->oggwewqswcggccae($iaakskwmyqceoscy);
        goto gwawuyimyyieguwa;
        uokioguceweaqqse:
        
        $this->siqqwyaiwgagokug();
        goto kiyuamyuuoiuwyag;
        imgiueoewusyceem:
        
        $iaakskwmyqceoscy = $ywmkwiwkosakssii["\x63\x62"]($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6]);
        goto sqqocygqgwkmgwaa;
        icoggwwouyssowey:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\146\x74\145\162\x5f\151\x6e\151\x74\137\150\157\x6f\153", false), $iaakskwmyqceoscy, $this);
        goto uokioguceweaqqse;
        gwawuyimyyieguwa:
        
        $this->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\x5f\x70\x72\x69\x6e\x74\x5f\x73\164\x79\154\145\163\55{$this->mmsykuomogaqoaye()}", ["\103\115\102\62\137\150\x6f\157\x6b\165\x70", "\x65\x6e\161\x75\x65\x75\145\137\143\x6d\x62\137\143\x73\x73"])->qcsmikeggeemccuu("\141\144\144\137\x6d\x65\164\x61\137\x62\x6f\x78\x65\x73\137{$this->mmsykuomogaqoaye()}", [$this, "\x77\x61\143\x65\x6d\x6b\161\155\x69\x77\x75\x71\157\165\147\x61"])->qcsmikeggeemccuu("\154\x6f\x61\x64\x2d{$this->mmsykuomogaqoaye()}", [$this, "\x6f\x67\x6b\151\151\x65\167\x73\x63\x65\x6d\x61\161\x6b\x77\147"]);
        goto icoggwwouyssowey;
        skmygcmwwgoaguwo:
        
        $ywmkwiwkosakssii = $this->makgumuaykymweaq();
        goto imgiueoewusyceem;
        kiyuamyuuoiuwyag:
    }
    private function siqqwyaiwgagokug()
    {
        goto uumykgkackouocgc;
        oamosmwemmmikgwo:
        wsqescacigqkgicg:
        goto kgeomuicikkomkie;
        oeeaaoyyucuuwkuu:
        foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) {
            goto giaoygyymwwoqmgw;
            smsmeycaqoqkgciw:
            
            $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10;
            goto mwemsqwigyycweai;
            aooumysewqkyewii:
            
            $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas);
            goto mqsgkwkggseuykio;
            oiymmoisooaocwyg:
            umcyiqykwoeegomm:
            goto kuiqmwsgukiwgguq;
            sgmowmgweoqysoqg:
            $aiamqeawckcsuaou = ManipulateArray::get($sqaougiyimwumoqi, "\141\143\x74\151\157\x6e");
            goto yaceceaiceoeweog;
            ouucymmowsuymakm:
            
            $aiamqeawckcsuaou = str_replace("\x5b\150\x6f\x6f\153\x5d", $iaakskwmyqceoscy, $aiamqeawckcsuaou);
            goto smsmeycaqoqkgciw;
            yaceceaiceoeweog:
            $ekiuyucoiagmscgy = ManipulateArray::get($sqaougiyimwumoqi, "\143\x61\154\x6c\x62\141\x63\x6b");
            goto uycwieawygyekeoi;
            uycwieawygyekeoi:
            $sqqewmoeaekuyyas = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x70\x72\151\157\162\151\164\171", 10));
            goto assouqamccmauuye;
            mwemsqwigyycweai:
            
            $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1;
            goto aooumysewqkyewii;
            mqsgkwkggseuykio:
            cmukqmgyeiqqyoye:
            goto oiymmoisooaocwyg;
            assouqamccmauuye:
            if (!($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi["\141\143\164\151\157\x6e"], "\55\x5b\150\x6f\x6f\x6b\x5d"))) {
                goto cmukqmgyeiqqyoye;
            }
            goto ouucymmowsuymakm;
            giaoygyymwwoqmgw:
            $ywmkwiwkosakssii = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x61\162\x67\163", 1));
            goto sgmowmgweoqysoqg;
            kuiqmwsgukiwgguq:
        }
        goto oamosmwemmmikgwo;
        smgugiqksqkmsuys:
        if (!$symcuwcoqkwoscsg) {
            goto ieuoockquscyauiy;
        }
        goto oeeaaoyyucuuwkuu;
        uumykgkackouocgc:
        $symcuwcoqkwoscsg = $this->eigooueumicckoge();
        goto amesgukaccuckock;
        amesgukaccuckock:
        $iaakskwmyqceoscy = $this->mmsykuomogaqoaye();
        goto smgugiqksqkmsuys;
        kgeomuicikkomkie:
        ieuoockquscyauiy:
        goto muqgkcsqkssymyem;
        muqgkcsqkssymyem:
    }
    public function wacemkqmiwuqouga()
    {
        goto sgugyikwqeswcaos;
        qgaywmweyqweqkme:
        if (!$ywoucyskcquysiwc) {
            goto eccsqkqyiwqcocym;
        }
        goto gkemwmiykeiyuska;
        imeagymkkagggkec:
        weaaqiuymusyaoim:
        goto yeiwygkuemkoykis;
        qykisyqcgokcuiqs:
        eamyyoygceikikcy:
        goto qkmoekswwgmogsgg;
        sgugyikwqeswcaos:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto qgaywmweyqweqkme;
        gkemwmiykeiyuska:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto ccyiauwwmeyoqmme;
            gckukekaicosscko:
            ycumgkeaagawwkss:
            goto cuawaegesykceuoi;
            skoasiggcqccogqu:
            foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
                goto gqocyuqyemgioaok;
                ouqciucssmewqseu:
                wikycciwekuugqec:
                goto ooiackiyssimocoy;
                uscaccweyakkqycu:
                qskaaemigoqyogiu:
                goto ouqciucssmewqseu;
                syqcoysgaociwkmu:
                $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm();
                goto wymmooqweugwumuo;
                gqocyuqyemgioaok:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137\x74\141\x62\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\x6d\145\x74\141\142\x6f\170\x5f{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this);
                goto umsqoiumeuayywuy;
                umsqoiumeuayywuy:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto qskaaemigoqyogiu;
                }
                goto syqcoysgaociwkmu;
                wymmooqweugwumuo:
                $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === "\x73\x69\x64\145" ? "\x6e\x6f\x72\155\x61\154" : $mgkceomocowocqyo);
                goto uscaccweyakkqycu;
                ooiackiyssimocoy:
            }
            goto gckukekaicosscko;
            aawgwoyccicqiooa:
            
            $uaqusiikkokccqou = ManipulateArray::yaeiiwwyckwugsem($uaqusiikkokccqou);
            goto skoasiggcqccogqu;
            eceqwgecqgsugwyi:
            emoekgyaiwksgwoa:
            goto wamywgsgswmwgqes;
            wigmqayoaagkekug:
            if (!$cciauwuwuqaywgce->sekaaukqmiysugws()) {
                goto mueoecmegwgakkuu;
            }
            goto gwysqygykiqwgugc;
            cuawaegesykceuoi:
            mueoecmegwgakkuu:
            goto eceqwgecqgsugwyi;
            gwysqygykiqwgugc:
            $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\x74\x61\142\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\155\x65\164\x61\142\157\170\x65\163", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this);
            goto aawgwoyccicqiooa;
            ccyiauwwmeyoqmme:
            $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc());
            goto wigmqayoaagkekug;
            wamywgsgswmwgqes:
        }
        goto qykisyqcgokcuiqs;
        qkmoekswwgmogsgg:
        eccsqkqyiwqcocym:
        goto igcyymyqeawqkwgm;
        igcyymyqeawqkwgm:
        foreach ($this->qsqiqgmeoowykuue() as $qkweikswegyciaie) {
            goto wyswgiqmuwyiqama;
            wyswgiqmuwyiqama:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto aaeaawawgiokuoqc;
            }
            goto yywywwmawmmyuwms;
            acesmiyysymciaui:
            yyuwoaymcmgagkek:
            goto qmiwkumwuqywukmg;
            sgkkuuwoeouqgeqc:
            aaeaawawgiokuoqc:
            goto acesmiyysymciaui;
            yywywwmawmmyuwms:
            $this->sceiskoouaiqocqo($qkweikswegyciaie, $qkweikswegyciaie->register($this->cisyiemkeykgkomc()), "\x73\x69\144\x65");
            goto sgkkuuwoeouqgeqc;
            qmiwkumwuqywukmg:
        }
        goto imeagymkkagggkec;
        yeiwygkuemkoykis:
    }
    
    public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = "\x6e\x6f\x72\155\x61\154")
    {
        goto wayyqekkqyeoeiwo;
        kqmyqoqwaoaqgemm:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x79\x69\145\x6d\x75\x73\x67\x71\155\157\171\155\x73\x67\x65\x67"]);
        goto ywqqgwecosgicaim;
        ikegeeiesieogisa:
        $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea();
        goto aaowoieokoumsyqc;
        cogiokiwsggickqu:
        
        if (!$uoeiskamgscgeccq->meta_box["\x63\154\157\x73\145\x64"]) {
            goto ouasygcguacqoomm;
        }
        goto kqmyqoqwaoaqgemm;
        aaowoieokoumsyqc:
        $this->qcsmikeggeemccuu("\143\155\x62\62\x5f\163\141\166\145\137\157\x70\164\x69\157\156\163\x2d\160\141\x67\145\137\146\x69\x65\154\x64\x73\137{$aokagokqyuysuksm}", [$this, "\147\x6f\171\x65\155\151\153\x6f\x67\x65\165\x73\x6b\x67\141\x73"], 10, 2);
        goto msmcymkewouiuuse;
        bocwykmykkkoioyq:
        $uoeiskamgscgeccq = ManipulateArray::get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea());
        goto wmiywmecqmaeagwc;
        wmiywmecqmaeagwc:
        koqciqwwomauuqci:
        goto acewwgmgwegkqkmg;
        msmcymkewouiuuse:
        $wyicesskmckwqeec = "\160\157\163\x74\142\x6f\x78\137\143\154\x61\163\163\145\163\x5f{$this->mmsykuomogaqoaye()}\x5f{$aokagokqyuysuksm}";
        goto kieygmqycuywqgay;
        wayyqekkqyeoeiwo:
        if (!is_array($uoeiskamgscgeccq)) {
            goto koqciqwwomauuqci;
        }
        goto bocwykmykkkoioyq;
        twuqeqeisoggkkmg:
        coqcgqgsuagaoqgo:
        goto oouiqmqcowoqqwyi;
        kieygmqycuywqgay:
        if (!($this->myomgmiksogoikuc() && $mgkceomocowocqyo !== "\x73\151\144\x65")) {
            goto oyymggqmgsymkyua;
        }
        goto wuagokiooeiuokqs;
        ywqqgwecosgicaim:
        ouasygcguacqoomm:
        goto qsqcmociaogwiggs;
        wuagokiooeiuokqs:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x65\167\163\x6b\153\x77\165\167\x6b\153\153\141\x71\x77\x67\153"]);
        goto uoiooiwsmoysksqm;
        acewwgmgwegkqkmg:
        if (!$this->uaicqoagkoeacawy($uoeiskamgscgeccq)) {
            goto coqcgqgsuagaoqgo;
        }
        goto ikegeeiesieogisa;
        uoiooiwsmoysksqm:
        oyymggqmgsymkyua:
        goto cogiokiwsggickqu;
        qsqcmociaogwiggs:
        $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo);
        goto twuqeqeisoggkkmg;
        oouiqmqcowoqqwyi:
    }
    
    public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo)
    {
        add_meta_box($qkweikswegyciaie->mwikyscisascoeea(), $qkweikswegyciaie->iwqugwigmoiagwec(), [$this, "\141\x75\163\x79\155\x6d\147\x73\153\x73\x6f\161\x77\165\x71\x6b"], $iaakskwmyqceoscy, $mgkceomocowocqyo, $qkweikswegyciaie->yywskysiycwkwsgw());
    }
    public function wqqckkmqakiquycs()
    {
        goto kwgcqoqewyqaoosk;
        kwgcqoqewyqaoosk:
        if (!$this->csaueuycewaiuaay()) {
            goto fsaiawesoowogmek;
        }
        goto cmqkcsayqiqugyce;
        ucwgiecogkaesuko:
        DecoratorAsset::imsomwwswyoquoqk($eueuqacmukymcyya, $this->miocmcoykayoyyau()->get("\x6d\165\154\x74\x69\157\x70\164\163\x2e\152\163"));
        goto cekgqucskcgyoakq;
        cmqkcsayqiqugyce:
        if (!$this->myomgmiksogoikuc()) {
            goto wwakqukuoioceyck;
        }
        goto oeuiyomkweusgawu;
        oouomgcseggcugyi:
        DecoratorAsset::fowiaymccsmewemu($eueuqacmukymcyya, "\x50\x4d\120\122\117\160\x74\x54\141\142\x73", ["\153\145\x79" => $this->kyqakacqeumicgag(), "\x70\157\x73\x74\164\171\160\145" => $this->kecacgyqmgeeqmme(), "\x64\x65\x66\141\165\x6c\164\164\141\x62" => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']);
        goto agwiwkwmowuuscsg;
        agwiwkwmowuuscsg:
        wwakqukuoioceyck:
        goto qskqawaewmgquwmq;
        uquugcsmgsmmwywo:
        $cciauwuwuqaywgce = reset($ywoucyskcquysiwc);
        goto oouomgcseggcugyi;
        oeuiyomkweusgawu:
        $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}\55\x61\144\155\x69\x6e";
        goto ucwgiecogkaesuko;
        cekgqucskcgyoakq:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto uquugcsmgsmmwywo;
        qskqawaewmgquwmq:
        fsaiawesoowogmek:
        goto ueigayyqqomcisui;
        ueigayyqqomcisui:
    }
    public function uuqqkgyqekmgycgq()
    {
        goto eokeqaomwmsymuyi;
        ecmwimqmggogysoe:
        wckioasgmwqugauw:
        goto emmseyuagaaweuek;
        uegaugwmyucmooyu:
        ManipulateHTML::awwqwouuoioauoaw("\163\164\171\x6c\x65", ["\x69\x64" => "\160\162\55\164\x61\142\x2d\143\x6c\x65\141\x6e\x75\x70\55\143\x73\x73"], true, $icyaoosaykeskiuu);
        goto ecmwimqmggogysoe;
        eokeqaomwmsymuyi:
        if (!$this->myomgmiksogoikuc()) {
            goto wckioasgmwqugauw;
        }
        goto siqwwuiuqwcayisu;
        siqwwuiuqwcayisu:
        $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\155\x65\164\x61\x74\141\x62\56\143\163\x73", ["\160\141\147\x65" => $this->kyqakacqeumicgag()]);
        goto uegaugwmyucmooyu;
        emmseyuagaaweuek:
    }
    public function iaggsikquucsoiko()
    {
        ManipulateHTML::awwqwouuoioauoaw("\163\x63\162\151\x70\x74", [], true, "\152\x51\x75\x65\162\x79\x28\144\157\x63\165\x6d\145\156\164\51\56\162\145\x61\144\x79\50\146\165\x6e\143\x74\x69\157\156\x28\x29\173\160\157\163\164\142\157\x78\145\163\x2e\x61\144\x64\137\x70\157\x73\164\x62\157\170\x5f\x74\157\147\147\154\145\x73\x28\42\160\x6f\163\164\x62\157\170\55\143\x6f\156\164\141\x69\156\145\162\x22\x29\x3b\175\x29\x3b");
    }
    public function ecyyqsgwwuukgssg()
    {
        goto iuwimogikcucogci;
        cgaoeuasmuicmyoq:
        waiqusgyaeegsqqw:
        goto eqiigmauqkoswiys;
        ccequccokicuawum:
        echo $this->uaasoaieuoymsgsi();
        goto cgaoeuasmuicmyoq;
        iuwimogikcucogci:
        if (!($this->csaueuycewaiuaay() && $this->ekwgmoqoeywwwccw())) {
            goto waiqusgyaeegsqqw;
        }
        goto ccequccokicuawum;
        eqiigmauqkoswiys:
    }
    
    private function uaicqoagkoeacawy($uoeiskamgscgeccq) : bool
    {
        
        return isset($uoeiskamgscgeccq->meta_box["\163\x68\157\x77\137\x6f\x6e"]["\153\x65\x79"]) && $uoeiskamgscgeccq->meta_box["\x73\x68\157\167\137\x6f\156"]["\153\145\171"] === "\x6f\x70\x74\x69\x6f\x6e\x73\55\160\141\147\145" && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box["\163\x68\157\x77\x5f\x6f\x6e"]["\x76\141\x6c\165\x65"]);
    }
    
    public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu)
    {
        goto meuckssskyaesage;
        meuckssskyaesage:
        if (!($this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $sogsqsawoyqmqsqu && !$this->ccauywsgwsesgmua())) {
            goto gaweiceicsykweqs;
        }
        goto ouomuyeqsugykuyk;
        iwwmukmsgwoesima:
        $this->once = true;
        goto wugsmyikwkyususo;
        ouomuyeqsugykuyk:
        add_settings_error("{$this->cisyiemkeykgkomc()}\x2d\x6e\x6f\164\151\x63\145\163", '', __("\123\145\164\164\x69\156\147\163\x20\x55\x70\144\141\x74\x65\x64", PR__CMN__FOUNDATION), "\x75\160\144\x61\164\145\x64");
        goto ucomiwksyqswgwmm;
        wugsmyikwkyususo:
        gaweiceicsykweqs:
        goto icuoakkeswccquuo;
        ucomiwksyqswgwmm:
        settings_errors("{$this->cisyiemkeykgkomc()}\55\156\157\x74\151\143\x65\163");
        goto iwwmukmsgwoesima;
        icuoakkeswccquuo:
    }
    
    public function uaasoaieuoymsgsi() : ?string
    {
        return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ["\156\x61\x6d\145" => "\x73\165\142\x6d\x69\164\x2d\x63\155\x62", "\164\171\160\x65" => "\163\x75\x62\x6d\151\x74", "\143\154\x61\x73\163" => "\142\x75\164\x74\x6f\156\x2d\x70\162\x69\155\x61\162\171"]);
    }
    
    public function omeeeegkauuouaka() : string
    {
        return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ["\156\x61\155\x65" => "\x72\145\x73\145\x74\x2d\143\155\142", "\164\x79\x70\x65" => "\142\165\164\164\157\x6e", "\x63\x6c\x61\163\163" => "\142\165\x74\164\157\x6e\x2d\163\145\x63\x6f\x6e\144\141\162\171"]);
    }
    
    public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = []) : string
    {
        return $pkyyagewkiyckmwy ? ManipulateHTML::qgsekwygcgawekeq("\151\156\x70\x75\164", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\x63\x6c\141\163\x73" => "\x62\165\x74\x74\157\156", "\166\141\x6c\165\x65" => $pkyyagewkiyckmwy])) : '';
    }
    
    public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\x6f\160\x74\55\x68\151\x64\x64\x65\156";
        return $cmkqisoeyioisqaw;
    }
    
    public function yiemusgqmoymsgeg($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\x63\154\x6f\163\145\x64";
        return $cmkqisoeyioisqaw;
    }
    public function ogkiiewscemaqkwg()
    {
        $this->cqscqicucmeamkyq("\x61\144\x64\x5f\x6d\x65\x74\x61\137\x62\157\x78\x65\x73\137{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq("\141\144\x64\137\155\145\164\x61\137\142\157\170\x65\163", $this->mmsykuomogaqoaye(), null);
    }
    
    public function ausymmgsksoqwuqk($post, $qkweikswegyciaie)
    {
        goto cywcqkecgwkgssgy;
        mmgaoiukskgaskye:
        ceyumqqeccuiuwsw:
        goto mawaowggkucoosoc;
        gesqgakoekiukmsa:
        egswwwwgmeecegem:
        goto ooyikkuecqewakee;
        gaeewoieegegmwmw:
        goto ceyumqqeccuiuwsw;
        goto gesqgakoekiukmsa;
        yewqwkoaeqqegiyi:
        if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto egswwwwgmeecegem;
        }
        goto soakqssqaoaqkkck;
        mugykqoymeugqasw:
        $icwicymcioeyeyek = $_POST;
        goto yewqwkoaeqqegiyi;
        mawaowggkucoosoc:
        
        $scegeeyqweaksmki->show_form();
        goto taisikggaaysayue;
        soakqssqaoaqkkck:
        if (!$this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto eqmgcgwcgkuoqyya;
        }
        goto qesoesykasouikck;
        taisikggaaysayue:
        mskkgeiykcaoqosq:
        goto mouyseuswmcisysg;
        wyuiuogqiqasaumy:
        eqmgcgwcgkuoqyya:
        goto gaeewoieegegmwmw;
        ooyikkuecqewakee:
        
        $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek);
        goto mmgaoiukskgaskye;
        egkokuggowqoogwe:
        if (!$scegeeyqweaksmki) {
            goto mskkgeiykcaoqosq;
        }
        goto mugykqoymeugqasw;
        cywcqkecgwkgssgy:
        
        $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie["\151\x64"], $this->cisyiemkeykgkomc());
        goto egkokuggowqoogwe;
        qesoesykasouikck:
        
        DecoratorOption::delete($this->cisyiemkeykgkomc());
        goto wyuiuogqiqasaumy;
        mouyseuswmcisysg:
    }
    
    private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki) : bool
    {
        goto iyoiumqkociwggwi;
        gwoqwogmyqmaekeq:
        return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce(ManipulateServer::ayueggmoqeeukqmq($gaqymcswicmikcuu), $gaqymcswicmikcuu);
        goto qaqeuqcqwyqigguw;
        qsoicugccmgoaooq:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\157\x62\152\x65\143\x74\137\151\144");
        goto gwoqwogmyqmaekeq;
        kusykiciiukqkwcs:
        $ooewkimkcskcwsso = ManipulateArray::get($icwicymcioeyeyek, "\x72\145\163\x65\164\x2d\143\155\x62");
        goto qsoicugccmgoaooq;
        asqwcaswskmaiuei:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $gaqymcswicmikcuu);
        goto kusykiciiukqkwcs;
        iyoiumqkociwggwi:
        $gaqymcswicmikcuu = $this->qiswuqmeyaysqcis($scegeeyqweaksmki);
        goto asqwcaswskmaiuei;
        qaqeuqcqwyqigguw:
    }
    
    private function negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki) : bool
    {
        goto awuymmyewogkskka;
        keisauiosaguwkmg:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\157\142\x6a\145\143\164\x5f\x69\x64");
        goto ikigycmycsqieeoi;
        ikigycmycsqieeoi:
        return $this->oqmggeywwyoaocca($scegeeyqweaksmki, "\x73\141\166\x65\x5f\x66\x69\145\x6c\144\163") && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $gaqymcswicmikcuu);
        goto memikioiiekcqoqc;
        wqsgwiecyyamgugu:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $gaqymcswicmikcuu);
        goto keisauiosaguwkmg;
        awuymmyewogkskka:
        $gaqymcswicmikcuu = $this->qiswuqmeyaysqcis($scegeeyqweaksmki);
        goto wqsgwiecyyamgugu;
        memikioiiekcqoqc:
    }
    
    public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool
    {
        goto wuaeweseqayacqis;
        iekcwimcmsemsgmo:
        $icwicymcioeyeyek = $_POST;
        goto qsaomeeimaagqewc;
        wuaeweseqayacqis:
        if ($icwicymcioeyeyek) {
            goto wkeegycggsggcsiy;
        }
        goto iekcwimcmsemsgmo;
        qygwmuiaqciwymgw:
        return (bool) ManipulateArray::get($icwicymcioeyeyek, "\163\x75\142\x6d\x69\164\x2d\x63\155\142", false);
        goto oqcoyuausmgccywa;
        qsaomeeimaagqewc:
        wkeegycggsggcsiy:
        goto qygwmuiaqciwymgw;
        oqcoyuausmgccywa:
    }
    
    public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array
    {
        goto bkwacmcewmysqowo;
        uqkeqwwaysocgsca:
        return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas;
        goto ccgamisoqiigouye;
        muascwyseakooami:
        ksaecqkkqkqumiyy:
        goto gomegguceiicoocs;
        bkwacmcewmysqowo:
        $saouceauqqiwcwas = [];
        goto ycokoqscowewwsau;
        ekqeaqcmkqoiugms:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) {
            goto aemgieoigwoaoqey;
            aemgieoigwoaoqey:
            if (is_object($qkweikswegyciaie)) {
                goto yauygqguooyuiick;
            }
            goto yuscokykcoymyyiq;
            yuscokykcoymyyiq:
            $saouceauqqiwcwas[$uusmaiomayssaecw] = CMB2_Boxes::get($qkweikswegyciaie);
            goto wimsassgwgimayck;
            omimqwkiqwicccmw:
            aksqawoycgigewoo:
            goto msakyecawuskgema;
            wimsassgwgimayck:
            yauygqguooyuiick:
            goto omimqwkiqwicccmw;
            msakyecawuskgema:
        }
        goto muascwyseakooami;
        ycokoqscowewwsau:
        if (!($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui))) {
            goto amaswgogkauskswc;
        }
        goto ekqeaqcmkqoiugms;
        gomegguceiicoocs:
        amaswgogkauskswc:
        goto uqkeqwwaysocgsca;
        ccgamisoqiigouye:
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\160\x61\147\145");
    }
    
    public function __toString()
    {
        return self::uqggkiomyiceyooa();
    }
}
