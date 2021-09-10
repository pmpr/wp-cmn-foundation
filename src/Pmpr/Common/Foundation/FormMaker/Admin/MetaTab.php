<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    
    protected ?string $key = "\x6d\x79\137\x6f\x70\164\x69\157\x6e";
    
    protected array $menuArgs = ["\x76\x69\x65\x77\x5f\x63\141\160\141\142\x69\154\x69\x74\x79" => '', "\x70\x61\x72\145\156\x74\137\x73\x6c\x75\147" => '', "\x70\x61\147\x65\137\x74\151\164\x6c\145" => '', "\155\145\x6e\x75\x5f\164\151\x74\x6c\145" => '', "\143\141\x70\141\x62\x69\154\151\164\171" => "\x6d\141\156\x61\147\145\137\157\x70\x74\151\x6f\156\x73", "\x6d\x65\x6e\x75\x5f\163\154\x75\x67" => '', "\x69\x63\157\156\137\x75\162\154" => '', "\x70\x6f\x73\151\x74\x69\x6f\x6e" => null, "\x6e\145\164\167\x6f\162\x6b" => false];
    
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
        mwegkckwqgiwmasq:
        $this->key = $uusmaiomayssaecw;
        goto kykgmsqcyggkoeig;
        eqewkwicumqigsem:
        $this->id = $this->iaqckqwoiseyqaku();
        goto mwegkckwqgiwmasq;
        fomwoaaqqcwyekey:
        if (!(is_admin() && class_exists("\x43\115\x42\62"))) {
            goto uykugiwiykyccwqs;
        }
        goto eqewkwicumqigsem;
        kykgmsqcyggkoeig:
        parent::__construct();
        goto owakcoywswieyewa;
        owakcoywswieyewa:
        uykugiwiykyccwqs:
        goto wioequuiyigoaass;
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
        return "\143\x6d\x6f" . rand(1000, 99999);
    }
    
    public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self
    {
        goto komcawukmomgkqog;
        caocugyuikeekyom:
        $qgoqiacsiccwoawi = 1;
        goto ouwcsmcycymqmecm;
        mcoqgkqqocieqygg:
        $this->column = $qgoqiacsiccwoawi;
        goto umcsysgcksumioak;
        komcawukmomgkqog:
        if (!($qgoqiacsiccwoawi > 2 || $qgoqiacsiccwoawi < 1)) {
            goto kswyqgqqygaouiuk;
        }
        goto caocugyuikeekyom;
        ouwcsmcycymqmecm:
        kswyqgqqygaouiuk:
        goto mcoqgkqqocieqygg;
        umcsysgcksumioak:
        return $this;
        goto siioyccqcugcmkoy;
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
        vaekgwkiiqmwmoey:
        parent::wigskegsqequoeks();
        goto aqsuuuwagsyyooak;
        meekmmeswcggewek:
        $this->qcsmikeggeemccuu("\141\144\x6d\151\x6e\x5f\x68\145\141\x64", [$this, "\165\165\161\x71\x6b\147\171\x71\145\x6b\x6d\x67\x79\143\147\161"])->qcsmikeggeemccuu("\141\144\155\x69\x6e\137\x69\156\151\x74", [$this, "\171\145\171\151\147\x75\x79\x65\x67\155\155\171\x75\163\145\x61"])->qcsmikeggeemccuu("\141\144\155\x69\156\137\x65\156\161\x75\x65\x75\145\137\x73\143\x72\x69\x70\x74\163", [$this, "\167\161\x71\143\153\153\x6d\x71\x61\x6b\151\161\165\x79\x63\163"])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}\x61\x64\x6d\151\156\137\155\x65\x6e\x75", [$this, "\163\x6f\x63\x63\x6f\155\x61\x6b\x77\x65\x71\147\x73\153\x69\x63"], 12)->qcsmikeggeemccuu("\x63\x6d\x62\62\137\x72\145\x6e\x64\x65\x72\x5f\157\160\164\x69\157\x6e\x73\x5f\163\x61\x76\x65\137\142\165\x74\164\x6f\156", [$this, "\145\143\x79\x79\x71\163\147\167\167\165\x75\x6b\147\x73\163\147"]);
        goto vaekgwkiiqmwmoey;
        owoiuwqgwcseogig:
        
        $kiiwewqkgqgqwwue = is_multisite() && $this->agcaegggmmeuammg("\156\145\164\x77\x6f\x72\x6b") ? "\156\145\x74\x77\x6f\x72\x6b\x5f" : '';
        goto meekmmeswcggewek;
        aqsuuuwagsyyooak:
    }
    public function yeyiguyegmmyusea()
    {
        goto wgsmemaiyicwmagy;
        cgiweqsmckusyige:
        if ($eiiwoqgkgmosakem) {
            goto gkwskkyusocmckci;
        }
        goto ywcgeioasmogicki;
        ywcgeioasmogicki:
        $this->qaygoqgeieeugsey("\166\x69\145\167\x5f\x63\x61\160\x61\x62\x69\x6c\151\x74\x79", $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg("\143\141\x70\x61\x62\x69\154\151\x74\x79") : false);
        goto aewggukwoeqcwkmw;
        oaymsekakyassacy:
        register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc());
        goto oqaqkwgyiegaoiyk;
        esacgaegcuqsgqua:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\151\145\167\137\143\x61\x70\x61\x62\x69\x6c\x69\164\x79");
        goto cgiweqsmckusyige;
        akwcamwokuciwqyw:
        $this->swqsasqieqqgusew($ewuukoycimkekouc ? $ewuukoycimkekouc : $this->cisyiemkeykgkomc());
        goto esacgaegcuqsgqua;
        cqumukgqaesgokmu:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\160\x61\x72\145\x6e\x74\137\x73\x6c\x75\x67");
        goto cascyqosimkguayi;
        wgsmemaiyicwmagy:
        if (!$this->agciemoaikwmiugi()) {
            goto sukooaksmwmweysu;
        }
        goto oaymsekakyassacy;
        cascyqosimkguayi:
        $ewuukoycimkekouc = $this->agcaegggmmeuammg("\155\145\x6e\x75\x5f\163\154\x75\147");
        goto esuscykksesgueii;
        oqaqkwgyiegaoiyk:
        sukooaksmwmweysu:
        goto cqumukgqaesgokmu;
        aewggukwoeqcwkmw:
        gkwskkyusocmckci:
        goto qkowqoyoecgcqokw;
        esuscykksesgueii:
        $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom == $ewuukoycimkekouc);
        goto akwcamwokuciwqyw;
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
        wcyacsasikeesgay:
        return $this;
        goto ksuwigakysoscwsi;
        myuwisogyksycamk:
        $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\x74\141\x62", $cciauwuwuqaywgce, $this);
        goto emmcmeososokueak;
        meawiqkkayqiiyqa:
        aaouuuqqgueesgum:
        goto wcyacsasikeesgay;
        emmcmeososokueak:
        if (!$cciauwuwuqaywgce instanceof Tab) {
            goto aaouuuqqgueesgum;
        }
        goto awqcicwsamqqsisa;
        awqcicwsamqqsisa:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto meawiqkkayqiiyqa;
        ksuwigakysoscwsi:
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self
    {
        goto qycyawiweamkwamy;
        aoemiusqwqoimequ:
        return $this;
        goto ccewmwoameocgeck;
        swwasksasqwewmck:
        uyowgcocwogyyogy:
        goto aoemiusqwqoimequ;
        qycyawiweamkwamy:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            uackiwuiauimukuk:
        }
        goto swwasksasqwewmck;
        ccewmwoameocgeck:
    }
    
    public function myomgmiksogoikuc() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    public function qessyiueeiwwgyag()
    {
        goto goismqusymeooqae;
        cyciqqkakeosegoe:
        
        $this->once = false;
        goto wqyesuemouksaeac;
        wycuuweqayggsikk:
        echo $this->iuygowkemiiwqmiw("\155\145\164\x61\164\x61\142", ["\x6b\x65\171" => $this->cisyiemkeykgkomc(), "\x68\157\157\153" => $this->mmsykuomogaqoaye(), "\x74\x61\x62\x73" => $iogqeouiuqyewuqe, "\160\x61\147\x65" => $this->kyqakacqeumicgag(), "\x63\x6f\154\x75\155\156" => $this->myywwqkyiwawwquy(), "\x6e\x6f\x6e\x63\x65\163" => [wp_nonce_field("\155\145\164\141\x2d\142\157\170\55\157\x72\144\145\162", "\155\x65\x74\141\55\x62\157\170\x2d\x6f\x72\144\x65\162\x2d\156\157\156\143\145", false, false), wp_nonce_field("\143\154\x6f\x73\145\144\x70\x6f\x73\x74\142\157\x78\x65\x73", "\143\154\157\x73\x65\x64\160\x6f\163\164\142\157\x78\x65\163\x6e\157\x6e\143\x65", false, false)], "\142\165\x74\164\157\x6e\x73" => $qyukicweqoisimwg, "\x63\157\156\x74\145\156\x74\163" => $kqweykcqkgkmoqay, "\x70\141\x67\x65\137\164\x69\164\x6c\x65" => esc_html(get_admin_page_title()), "\x63\x6f\x6e\x74\x61\x69\x6e\x65\162\137\x61\x74\x74\162\x73" => $this->ccekeuwwqqoiwuwy()]);
        goto cyciqqkakeosegoe;
        wqyesuemouksaeac:
        sakgiyogqqymcama:
        goto eieckmqqcmcqcyiq;
        wikqsescmyeeicwg:
        $iogqeouiuqyewuqe = '';
        goto uwckqwwyucaiekeq;
        uwckqwwyucaiekeq:
        $kqweykcqkgkmoqay = '';
        goto uscaqiyymkyywsws;
        uscaqiyymkyywsws:
        $this->qigsyyqgewgskemg("\x77\162\x61\160\x20\143\x6d\142\62\x2d\157\x70\164\x69\x6f\156\163\55\160\141\147\x65\40\x63\x6d\157\x2d\x6f\x70\x74\x69\157\156\163\55\x70\141\x67\x65")->qigsyyqgewgskemg($this->cisyiemkeykgkomc());
        goto icecgmamoqwkcgau;
        iicewkmmisuecsku:
        if (!(!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || DecoratorUser::scmcyesmmikkucie($eiiwoqgkgmosakem)))) {
            goto sakgiyogqqymcama;
        }
        goto wikqsescmyeeicwg;
        oicyciugogouuwwi:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto iocuaqcqoggiqgsw;
            eiyeuegmoiyouoia:
            ksumissygaeqwiqk:
            goto skemwcqcyaqogacu;
            iocuaqcqoggiqgsw:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto eicsoeicqsmgyoyw;
            }
            goto ecouksmuoaagmiwo;
            ogaiqagqcemycaoo:
            ggkemwwsugkckeag:
            goto qqkqawesmskmkgqg;
            ussceksysakwguwm:
            if (empty($scwwkgcyecqgioqs)) {
                goto ggkemwwsugkckeag;
            }
            goto gqogoecueameuqem;
            oksseoqyoqqkmooc:
            $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw("\143\x6f\x6e\164\145\156\164", ["\151\x64" => $aokagokqyuysuksm, "\x63\x6f\x6c\165\x6d\156" => $qgoqiacsiccwoawi, "\x64\145\x73\143\162\151\160\x74\151\157\156" => $cciauwuwuqaywgce->meqceykmywmqgoym(), "\x63\x6f\156\x74\x61\x69\x6e\x65\x72\x5f\141\164\x74\x72\x73" => [
                "\151\144" => "\157\x70\x74\x2d\x63\x6f\156\164\x65\156\164\x2d{$aokagokqyuysuksm}",
                "\x63\x6c\x61\163\163" => "\x6f\x70\x74\x2d\x63\157\156\x74\145\156\164",
                
                "\x64\141\x74\x61\55\142\x6f\170\145\163" => implode("\54", array_keys(ManipulateArray::yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue()))),
            ]]);
            goto cwsscisucgswsugy;
            gqogoecueameuqem:
            foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) {
                goto ogemcuimywmoauai;
                cugygygwqumqwkmc:
                $this->omameoyeausyugmw($qkweikswegyciaie, "\x66\x6f\x72\155\x5f\155\x61\x6b\145\162\137\164\x61\142\137\x73\151\144\145\137\143\157\156\x74\x61\x69\156\x65\x72\137{$aokagokqyuysuksm}", "\x73\151\144\145");
                goto euukqqoeamysgaai;
                scayqcumuauocuco:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}\x5f\x73\x69\144\145\137\x6d\145\x74\141\142\157\x78\145", $qkweikswegyciaie);
                goto iyuyykuuksqgcoco;
                ogemcuimywmoauai:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto wemkygaugegmuyeq;
                }
                goto scayqcumuauocuco;
                euukqqoeamysgaai:
                $qgoqiacsiccwoawi = 2;
                goto eiuqssqeewecueaw;
                gqygesckmymkgeia:
                $qkweikswegyciaie->register($this->cisyiemkeykgkomc());
                goto cugygygwqumqwkmc;
                waagiwegsgmwumyk:
                ocgkcmokykycoqwu:
                goto gswosgeumoekweom;
                ucisggckygasmewc:
                wemkygaugegmuyeq:
                goto waagiwegsgmwumyk;
                eiuqssqeewecueaw:
                gkqugmqmcaaewcgu:
                goto ucisggckygasmewc;
                iyuyykuuksqgcoco:
                if (!$qkweikswegyciaie->mukiwuqwmywsckco()) {
                    goto gkqugmqmcaaewcgu;
                }
                goto gqygesckmymkgeia;
                gswosgeumoekweom:
            }
            goto aqimmiyqakwgogiw;
            qqkqawesmskmkgqg:
            $iogqeouiuqyewuqe .= ManipulateHTML::uuccukgasskgimsq("\x61", ["\x69\144" => "\157\160\164\55\164\141\x62\55{$aokagokqyuysuksm}", "\x68\162\145\x66" => "\43", "\x63\x6c\141\163\163" => "\x6e\141\166\x2d\164\141\x62\x20\157\160\164\55\x74\141\142\x20\x70\162\x2d\164\x61\x62", "\x64\141\x74\x61\x2d\x6f\160\164\143\x6f\x6e\164\x65\156\x74" => "\43\157\160\x74\55\x63\x6f\x6e\x74\145\156\x74\x2d{$aokagokqyuysuksm}"], [$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()]);
            goto oksseoqyoqqkmooc;
            sciaeeisgiakmyyw:
            
            $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}\x5f\164\141\x62\137\163\x69\144\145\x5f\x6d\145\164\x61\x62\x6f\170\x65\x73", $cciauwuwuqaywgce->weookicuaacigemm());
            goto ussceksysakwguwm;
            cwsscisucgswsugy:
            eicsoeicqsmgyoyw:
            goto eiyeuegmoiyouoia;
            ecouksmuoaagmiwo:
            $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea();
            goto wscqsciugescaoys;
            wscqsciugescaoys:
            $qgoqiacsiccwoawi = 1;
            goto sciaeeisgiakmyyw;
            aqimmiyqakwgogiw:
            sskygwgyogmqgmqa:
            goto ogaiqagqcemycaoo;
            skemwcqcyaqogacu:
        }
        goto syimweumwsqgoggc;
        icecgmamoqwkcgau:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($this->equiyaoamqmaeckc());
        goto oicyciugogouuwwi;
        usquuksweegcuqom:
        $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]);
        goto wycuuweqayggsikk;
        syimweumwsqgoggc:
        uciscoimiwuqsumg:
        goto usquuksweegcuqom;
        goismqusymeooqae:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\x69\x65\167\x5f\143\141\160\141\x62\151\x6c\x69\x74\x79");
        goto iicewkmmisuecsku;
        eieckmqqcmcqcyiq:
    }
    
    public function makgumuaykymweaq() : array
    {
        goto seiaqecoeskumemq;
        aywscouoieeksess:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\143\141\160\x61\142\151\x6c\151\x74\171");
        goto gwomwiesykqmmwgo;
        aaiekuiyqeykkgqq:
        
        if (!$omwmuycmeqcqokom) {
            goto wgkicouqwayscuio;
        }
        goto iouqskcmyecqmugo;
        eskmyswgsosamscc:
        
        $cmyoswawcimsecyy = $this->agcaegggmmeuammg("\160\x61\x67\145\137\164\x69\164\x6c\x65") ? $this->agcaegggmmeuammg("\160\141\x67\x65\137\x74\x69\x74\154\145") : $this->qcgakseyaikigqco();
        goto aaiekuiyqeykkgqq;
        yyqwgugicycyeosk:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x70\x6f\x73\151\164\x69\157\x6e") === null ? null : intval($this->agcaegggmmeuammg("\x70\x6f\163\151\x74\x69\x6f\156"));
        goto kagywssammsigeky;
        qcscwisoukgswcum:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\155\145\156\x75\137\164\151\x74\x6c\145") ? $this->agcaegggmmeuammg("\155\145\156\165\137\x74\x69\x74\154\145") : $cmyoswawcimsecyy;
        goto aywscouoieeksess;
        qomugkkimygqeioo:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x69\x63\157\156\x5f\165\x72\x6c") ? $this->agcaegggmmeuammg("\151\143\157\156\137\165\x72\154") : '';
        goto yyqwgugicycyeosk;
        ekskakueeqwgwyug:
        
        $omwmuycmeqcqokom = $this->eyqwmckgumyaoams();
        goto swykkkgaawkssqma;
        eoecsiksocyeiayk:
        
        $ywmkwiwkosakssii["\x63\x62"] = $omwmuycmeqcqokom ? "\x61\144\144\137\x73\165\x62\x6d\x65\156\x75\137\160\x61\147\145" : "\141\144\144\137\155\145\156\x75\137\x70\141\147\x65";
        goto gcmcgcuycmoywakk;
        seiaqecoeskumemq:
        $ywmkwiwkosakssii = [];
        goto ekskakueeqwgwyug;
        yossisaqeggqeokq:
        goto caecagokwuouoymy;
        goto ckaoqocygksqsoqg;
        awcyccimowsskmkc:
        $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc;
        goto ckycaecsiwgmomgk;
        ckycaecsiwgmomgk:
        wgkicouqwayscuio:
        goto asyskswoaqakaicc;
        gcmcgcuycmoywakk:
        return $ywmkwiwkosakssii;
        goto cewcquygkawaiscq;
        swykkkgaawkssqma:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\x70\x61\162\x65\x6e\x74\137\163\x6c\x75\x67") ? $this->agcaegggmmeuammg("\160\141\x72\x65\x6e\164\x5f\x73\154\165\147") : $omwmuycmeqcqokom;
        goto eskmyswgsosamscc;
        kagywssammsigeky:
        caecagokwuouoymy:
        goto eoecsiksocyeiayk;
        gwomwiesykqmmwgo:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\155\145\x6e\165\137\x73\x6c\x75\x67") ? $this->agcaegggmmeuammg("\x6d\x65\156\x75\x5f\x73\154\165\147") : $this->cisyiemkeykgkomc();
        goto keicyiqusacogocc;
        iouqskcmyecqmugo:
        
        $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "\x3f\160\157\x73\164\x5f\x74\171\160\x65\x3d{$this->kecacgyqmgeeqmme()}" : '';
        goto awcyccimowsskmkc;
        aouikocwycssquau:
        
        if (!$omwmuycmeqcqokom) {
            goto mumcqaqeakgcquac;
        }
        goto aucmyygueiuuyygk;
        aucmyygueiuuyygk:
        
        $ywmkwiwkosakssii[] = null;
        goto yossisaqeggqeokq;
        ckaoqocygksqsoqg:
        mumcqaqeakgcquac:
        goto qomugkkimygqeioo;
        asyskswoaqakaicc:
        
        $ywmkwiwkosakssii[] = $cmyoswawcimsecyy;
        goto qcscwisoukgswcum;
        keicyiqusacogocc:
        
        $ywmkwiwkosakssii[] = [$this, "\161\x65\163\163\171\x69\165\x65\x65\151\167\x77\x67\x79\141\147"];
        goto aouikocwycssquau;
        cewcquygkawaiscq:
    }
    public function soccomakweqgskic()
    {
        goto qayqouemeyoeqece;
        geggqemsocqacmaa:
        $this->oggwewqswcggccae($iaakskwmyqceoscy);
        goto xkqoueuawceokqwq;
        qayqouemeyoeqece:
        
        $ywmkwiwkosakssii = $this->makgumuaykymweaq();
        goto iwysasakqeoiqkea;
        ayaksmyymwewccuw:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\146\164\145\x72\137\x69\156\151\x74\x5f\x68\157\x6f\153", false), $iaakskwmyqceoscy, $this);
        goto skmygcmwwgoaguwo;
        iwysasakqeoiqkea:
        
        $iaakskwmyqceoscy = $ywmkwiwkosakssii["\143\142"]($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6]);
        goto geggqemsocqacmaa;
        skmygcmwwgoaguwo:
        
        $this->siqqwyaiwgagokug();
        goto imgiueoewusyceem;
        xkqoueuawceokqwq:
        
        $this->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\x70\162\x69\156\x74\137\x73\164\x79\154\145\163\x2d{$this->mmsykuomogaqoaye()}", ["\x43\115\102\x32\x5f\150\x6f\157\x6b\x75\x70", "\x65\156\x71\165\145\x75\145\x5f\143\155\x62\x5f\143\163\163"])->qcsmikeggeemccuu("\141\x64\x64\x5f\155\145\164\141\x5f\142\157\x78\x65\163\137{$this->mmsykuomogaqoaye()}", [$this, "\167\x61\x63\x65\155\x6b\161\x6d\151\167\165\161\x6f\x75\x67\141"])->qcsmikeggeemccuu("\x6c\x6f\x61\144\x2d{$this->mmsykuomogaqoaye()}", [$this, "\x6f\x67\x6b\151\151\x65\x77\x73\143\145\155\x61\161\153\167\147"]);
        goto ayaksmyymwewccuw;
        imgiueoewusyceem:
    }
    private function siqqwyaiwgagokug()
    {
        goto aooumysewqkyewii;
        aooumysewqkyewii:
        $symcuwcoqkwoscsg = $this->eigooueumicckoge();
        goto mqsgkwkggseuykio;
        ieuoockquscyauiy:
        sqqocygqgwkmgwaa:
        goto uumykgkackouocgc;
        oiymmoisooaocwyg:
        if (!$symcuwcoqkwoscsg) {
            goto mwemsqwigyycweai;
        }
        goto kuiqmwsgukiwgguq;
        mqsgkwkggseuykio:
        $iaakskwmyqceoscy = $this->mmsykuomogaqoaye();
        goto oiymmoisooaocwyg;
        kuiqmwsgukiwgguq:
        foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) {
            goto uokioguceweaqqse;
            wsqescacigqkgicg:
            $ekiuyucoiagmscgy = ManipulateArray::get($sqaougiyimwumoqi, "\143\x61\x6c\154\x62\x61\x63\x6b");
            goto umcyiqykwoeegomm;
            uycwieawygyekeoi:
            
            $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas);
            goto assouqamccmauuye;
            cmukqmgyeiqqyoye:
            if (!($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi["\x61\143\164\151\x6f\156"], "\x2d\133\150\157\157\153\x5d"))) {
                goto icoggwwouyssowey;
            }
            goto giaoygyymwwoqmgw;
            ouucymmowsuymakm:
            gwawuyimyyieguwa:
            goto smsmeycaqoqkgciw;
            uokioguceweaqqse:
            $ywmkwiwkosakssii = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x61\162\x67\x73", 1));
            goto kiyuamyuuoiuwyag;
            umcyiqykwoeegomm:
            $sqqewmoeaekuyyas = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x70\162\x69\x6f\162\151\x74\171", 10));
            goto cmukqmgyeiqqyoye;
            kiyuamyuuoiuwyag:
            $aiamqeawckcsuaou = ManipulateArray::get($sqaougiyimwumoqi, "\x61\x63\x74\151\157\156");
            goto wsqescacigqkgicg;
            yaceceaiceoeweog:
            
            $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1;
            goto uycwieawygyekeoi;
            sgmowmgweoqysoqg:
            
            $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10;
            goto yaceceaiceoeweog;
            assouqamccmauuye:
            icoggwwouyssowey:
            goto ouucymmowsuymakm;
            giaoygyymwwoqmgw:
            
            $aiamqeawckcsuaou = str_replace("\x5b\x68\157\x6f\x6b\135", $iaakskwmyqceoscy, $aiamqeawckcsuaou);
            goto sgmowmgweoqysoqg;
            smsmeycaqoqkgciw:
        }
        goto ieuoockquscyauiy;
        uumykgkackouocgc:
        mwemsqwigyycweai:
        goto amesgukaccuckock;
        amesgukaccuckock:
    }
    public function wacemkqmiwuqouga()
    {
        goto wyswgiqmuwyiqama;
        sgkkuuwoeouqgeqc:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto wymmooqweugwumuo;
            wigmqayoaagkekug:
            syqcoysgaociwkmu:
            goto gwysqygykiqwgugc;
            ccyiauwwmeyoqmme:
            oamosmwemmmikgwo:
            goto wigmqayoaagkekug;
            ouqciucssmewqseu:
            $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137\164\141\x62\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\x6d\145\x74\x61\142\x6f\170\x65\x73", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this);
            goto ooiackiyssimocoy;
            gwysqygykiqwgugc:
            oeeaaoyyucuuwkuu:
            goto aawgwoyccicqiooa;
            uscaccweyakkqycu:
            if (!$cciauwuwuqaywgce->sekaaukqmiysugws()) {
                goto syqcoysgaociwkmu;
            }
            goto ouqciucssmewqseu;
            wymmooqweugwumuo:
            $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc());
            goto uscaccweyakkqycu;
            ooiackiyssimocoy:
            
            $uaqusiikkokccqou = ManipulateArray::yaeiiwwyckwugsem($uaqusiikkokccqou);
            goto mueoecmegwgakkuu;
            mueoecmegwgakkuu:
            foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
                goto eamyyoygceikikcy;
                ycumgkeaagawwkss:
                $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm();
                goto wikycciwekuugqec;
                gqocyuqyemgioaok:
                kgeomuicikkomkie:
                goto umsqoiumeuayywuy;
                wikycciwekuugqec:
                $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === "\x73\151\144\145" ? "\156\x6f\162\155\141\154" : $mgkceomocowocqyo);
                goto qskaaemigoqyogiu;
                emoekgyaiwksgwoa:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto muqgkcsqkssymyem;
                }
                goto ycumgkeaagawwkss;
                eamyyoygceikikcy:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\x74\x61\x62\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\x6d\x65\164\141\142\157\x78\x5f{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this);
                goto emoekgyaiwksgwoa;
                qskaaemigoqyogiu:
                muqgkcsqkssymyem:
                goto gqocyuqyemgioaok;
                umsqoiumeuayywuy:
            }
            goto ccyiauwwmeyoqmme;
            aawgwoyccicqiooa:
        }
        goto acesmiyysymciaui;
        wyswgiqmuwyiqama:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto yywywwmawmmyuwms;
        yywywwmawmmyuwms:
        if (!$ywoucyskcquysiwc) {
            goto skoasiggcqccogqu;
        }
        goto sgkkuuwoeouqgeqc;
        qgaywmweyqweqkme:
        gckukekaicosscko:
        goto gkemwmiykeiyuska;
        acesmiyysymciaui:
        smgugiqksqkmsuys:
        goto qmiwkumwuqywukmg;
        qmiwkumwuqywukmg:
        skoasiggcqccogqu:
        goto sgugyikwqeswcaos;
        sgugyikwqeswcaos:
        foreach ($this->qsqiqgmeoowykuue() as $qkweikswegyciaie) {
            goto wamywgsgswmwgqes;
            weaaqiuymusyaoim:
            eceqwgecqgsugwyi:
            goto yyuwoaymcmgagkek;
            yyuwoaymcmgagkek:
            cuawaegesykceuoi:
            goto aaeaawawgiokuoqc;
            wamywgsgswmwgqes:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto eceqwgecqgsugwyi;
            }
            goto eccsqkqyiwqcocym;
            eccsqkqyiwqcocym:
            $this->sceiskoouaiqocqo($qkweikswegyciaie, $qkweikswegyciaie->register($this->cisyiemkeykgkomc()), "\x73\x69\144\145");
            goto weaaqiuymusyaoim;
            aaeaawawgiokuoqc:
        }
        goto qgaywmweyqweqkme;
        gkemwmiykeiyuska:
    }
    
    public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = "\156\x6f\x72\x6d\x61\x6c")
    {
        goto yeiwygkuemkoykis;
        wayyqekkqyeoeiwo:
        $this->qcsmikeggeemccuu("\x63\155\x62\62\x5f\x73\141\166\145\x5f\x6f\160\164\x69\x6f\x6e\x73\55\x70\x61\147\x65\x5f\x66\x69\145\x6c\144\163\x5f{$aokagokqyuysuksm}", [$this, "\147\x6f\171\145\155\151\x6b\157\x67\x65\x75\163\x6b\x67\x61\163"], 10, 2);
        goto bocwykmykkkoioyq;
        uoiooiwsmoysksqm:
        imeagymkkagggkec:
        goto cogiokiwsggickqu;
        msmcymkewouiuuse:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\171\x69\x65\x6d\165\163\147\x71\155\157\171\155\163\147\145\147"]);
        goto kieygmqycuywqgay;
        ikegeeiesieogisa:
        qkmoekswwgmogsgg:
        goto aaowoieokoumsyqc;
        coqcgqgsuagaoqgo:
        $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea();
        goto wayyqekkqyeoeiwo;
        bocwykmykkkoioyq:
        $wyicesskmckwqeec = "\160\157\x73\x74\x62\x6f\x78\137\143\x6c\x61\163\x73\x65\163\x5f{$this->mmsykuomogaqoaye()}\137{$aokagokqyuysuksm}";
        goto wmiywmecqmaeagwc;
        yeiwygkuemkoykis:
        if (!is_array($uoeiskamgscgeccq)) {
            goto qykisyqcgokcuiqs;
        }
        goto koqciqwwomauuqci;
        acewwgmgwegkqkmg:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x65\x77\163\x6b\153\x77\x75\x77\153\x6b\x6b\141\x71\167\x67\x6b"]);
        goto ikegeeiesieogisa;
        koqciqwwomauuqci:
        $uoeiskamgscgeccq = ManipulateArray::get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea());
        goto oyymggqmgsymkyua;
        kieygmqycuywqgay:
        igcyymyqeawqkwgm:
        goto wuagokiooeiuokqs;
        wuagokiooeiuokqs:
        $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo);
        goto uoiooiwsmoysksqm;
        aaowoieokoumsyqc:
        
        if (!$uoeiskamgscgeccq->meta_box["\x63\154\x6f\x73\x65\x64"]) {
            goto igcyymyqeawqkwgm;
        }
        goto msmcymkewouiuuse;
        wmiywmecqmaeagwc:
        if (!($this->myomgmiksogoikuc() && $mgkceomocowocqyo !== "\x73\x69\144\x65")) {
            goto qkmoekswwgmogsgg;
        }
        goto acewwgmgwegkqkmg;
        oyymggqmgsymkyua:
        qykisyqcgokcuiqs:
        goto ouasygcguacqoomm;
        ouasygcguacqoomm:
        if (!$this->uaicqoagkoeacawy($uoeiskamgscgeccq)) {
            goto imeagymkkagggkec;
        }
        goto coqcgqgsuagaoqgo;
        cogiokiwsggickqu:
    }
    
    public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo)
    {
        add_meta_box($qkweikswegyciaie->mwikyscisascoeea(), $qkweikswegyciaie->iwqugwigmoiagwec(), [$this, "\141\165\x73\171\x6d\155\x67\163\x6b\163\x6f\161\167\165\161\153"], $iaakskwmyqceoscy, $mgkceomocowocqyo, $qkweikswegyciaie->yywskysiycwkwsgw());
    }
    public function wqqckkmqakiquycs()
    {
        goto qsqcmociaogwiggs;
        kwgcqoqewyqaoosk:
        $cciauwuwuqaywgce = reset($ywoucyskcquysiwc);
        goto cmqkcsayqiqugyce;
        ucwgiecogkaesuko:
        ywqqgwecosgicaim:
        goto cekgqucskcgyoakq;
        oeuiyomkweusgawu:
        kqmyqoqwaoaqgemm:
        goto ucwgiecogkaesuko;
        twuqeqeisoggkkmg:
        if (!$this->myomgmiksogoikuc()) {
            goto kqmyqoqwaoaqgemm;
        }
        goto oouiqmqcowoqqwyi;
        wwakqukuoioceyck:
        DecoratorAsset::imsomwwswyoquoqk($eueuqacmukymcyya, $this->miocmcoykayoyyau()->get("\x6d\x75\x6c\x74\x69\x6f\160\x74\x73\56\x6a\163"));
        goto fsaiawesoowogmek;
        qsqcmociaogwiggs:
        if (!$this->csaueuycewaiuaay()) {
            goto ywqqgwecosgicaim;
        }
        goto twuqeqeisoggkkmg;
        fsaiawesoowogmek:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto kwgcqoqewyqaoosk;
        oouiqmqcowoqqwyi:
        $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}\x2d\141\144\155\x69\x6e";
        goto wwakqukuoioceyck;
        cmqkcsayqiqugyce:
        DecoratorAsset::fowiaymccsmewemu($eueuqacmukymcyya, "\120\115\120\x52\117\160\164\124\141\x62\163", ["\x6b\145\x79" => $this->kyqakacqeumicgag(), "\x70\157\x73\164\x74\x79\160\x65" => $this->kecacgyqmgeeqmme(), "\144\145\x66\x61\165\x6c\164\164\141\142" => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']);
        goto oeuiyomkweusgawu;
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
        agwiwkwmowuuscsg:
        $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\155\145\x74\141\164\141\x62\x2e\x63\163\163", ["\160\x61\x67\x65" => $this->kyqakacqeumicgag()]);
        goto qskqawaewmgquwmq;
        ueigayyqqomcisui:
        uquugcsmgsmmwywo:
        goto wckioasgmwqugauw;
        qskqawaewmgquwmq:
        ManipulateHTML::awwqwouuoioauoaw("\163\x74\x79\x6c\x65", ["\x69\x64" => "\160\x72\55\x74\x61\x62\55\143\154\145\x61\x6e\165\x70\x2d\143\163\163"], true, $icyaoosaykeskiuu);
        goto ueigayyqqomcisui;
        wckioasgmwqugauw:
    }
    public function iaggsikquucsoiko()
    {
        ManipulateHTML::awwqwouuoioauoaw("\163\143\162\x69\x70\164", [], true, "\152\x51\x75\145\162\171\50\144\157\143\165\x6d\x65\156\x74\51\x2e\x72\x65\141\x64\171\x28\x66\x75\x6e\x63\164\151\x6f\156\x28\51\173\x70\157\163\164\x62\x6f\x78\145\163\x2e\141\144\144\137\x70\157\x73\164\142\x6f\x78\x5f\x74\x6f\x67\147\154\x65\163\x28\42\160\157\x73\164\142\x6f\170\x2d\143\x6f\156\164\x61\151\156\x65\162\42\x29\73\175\51\x3b");
    }
    public function ecyyqsgwwuukgssg()
    {
        goto siqwwuiuqwcayisu;
        siqwwuiuqwcayisu:
        if (!($this->csaueuycewaiuaay() && $this->ekwgmoqoeywwwccw())) {
            goto eokeqaomwmsymuyi;
        }
        goto uegaugwmyucmooyu;
        ecmwimqmggogysoe:
        eokeqaomwmsymuyi:
        goto emmseyuagaaweuek;
        uegaugwmyucmooyu:
        echo $this->uaasoaieuoymsgsi();
        goto ecmwimqmggogysoe;
        emmseyuagaaweuek:
    }
    
    private function uaicqoagkoeacawy($uoeiskamgscgeccq)
    {
        
        return isset($uoeiskamgscgeccq->meta_box["\x73\x68\157\167\137\x6f\156"]["\x6b\145\x79"]) && $uoeiskamgscgeccq->meta_box["\163\x68\157\167\137\157\x6e"]["\x6b\145\171"] === "\x6f\x70\x74\x69\157\x6e\x73\55\x70\141\x67\145" && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box["\163\150\157\167\x5f\157\156"]["\166\141\x6c\165\x65"]);
    }
    
    public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu)
    {
        goto iuwimogikcucogci;
        eqiigmauqkoswiys:
        $this->once = true;
        goto gaweiceicsykweqs;
        gaweiceicsykweqs:
        waiqusgyaeegsqqw:
        goto meuckssskyaesage;
        cgaoeuasmuicmyoq:
        settings_errors("{$this->cisyiemkeykgkomc()}\55\156\157\x74\x69\x63\x65\x73");
        goto eqiigmauqkoswiys;
        ccequccokicuawum:
        add_settings_error("{$this->cisyiemkeykgkomc()}\x2d\x6e\157\164\151\x63\145\163", '', __("\123\145\164\x74\x69\x6e\147\163\40\x55\x70\144\141\164\x65\144", PR__CMN__FOUNDATION), "\165\x70\144\x61\164\x65\144");
        goto cgaoeuasmuicmyoq;
        iuwimogikcucogci:
        if (!($this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $sogsqsawoyqmqsqu && !$this->ccauywsgwsesgmua())) {
            goto waiqusgyaeegsqqw;
        }
        goto ccequccokicuawum;
        meuckssskyaesage:
    }
    
    public function uaasoaieuoymsgsi() : ?string
    {
        return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ["\156\141\x6d\145" => "\163\165\x62\x6d\151\x74\55\143\155\142", "\x74\x79\160\x65" => "\x73\165\x62\x6d\x69\164", "\x63\x6c\x61\x73\x73" => "\142\165\x74\164\x6f\156\55\160\162\151\x6d\141\162\x79"]);
    }
    
    public function omeeeegkauuouaka() : string
    {
        return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ["\x6e\x61\x6d\145" => "\162\145\x73\145\164\x2d\x63\155\142", "\164\x79\160\x65" => "\x62\165\164\164\x6f\x6e", "\143\154\x61\163\163" => "\142\165\164\164\x6f\x6e\55\163\x65\x63\157\x6e\144\x61\x72\x79"]);
    }
    
    public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = []) : string
    {
        return $pkyyagewkiyckmwy ? ManipulateHTML::qgsekwygcgawekeq("\x69\156\160\165\164", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\x63\154\141\x73\x73" => "\x62\165\164\x74\x6f\x6e", "\x76\141\x6c\x75\145" => $pkyyagewkiyckmwy])) : '';
    }
    
    public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\157\160\164\x2d\x68\x69\144\x64\x65\156";
        return $cmkqisoeyioisqaw;
    }
    
    public function yiemusgqmoymsgeg($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\143\x6c\x6f\x73\145\144";
        return $cmkqisoeyioisqaw;
    }
    public function ogkiiewscemaqkwg()
    {
        $this->cqscqicucmeamkyq("\141\x64\x64\x5f\x6d\x65\164\x61\x5f\142\x6f\x78\x65\163\x5f{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq("\x61\144\144\137\155\x65\164\141\x5f\142\157\170\x65\163", $this->mmsykuomogaqoaye(), null);
    }
    
    public function ausymmgsksoqwuqk($post, $qkweikswegyciaie)
    {
        goto icuoakkeswccquuo;
        egswwwwgmeecegem:
        $icwicymcioeyeyek = $_POST;
        goto ceyumqqeccuiuwsw;
        egkokuggowqoogwe:
        ucomiwksyqswgwmm:
        goto mugykqoymeugqasw;
        cywcqkecgwkgssgy:
        goto ouomuyeqsugykuyk;
        goto egkokuggowqoogwe;
        eqmgcgwcgkuoqyya:
        if (!$scegeeyqweaksmki) {
            goto wugsmyikwkyususo;
        }
        goto egswwwwgmeecegem;
        mskkgeiykcaoqosq:
        if ($this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto iwwmukmsgwoesima;
        }
        goto cywcqkecgwkgssgy;
        yewqwkoaeqqegiyi:
        goto ouomuyeqsugykuyk;
        goto soakqssqaoaqkkck;
        ceyumqqeccuiuwsw:
        if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto ucomiwksyqswgwmm;
        }
        goto mskkgeiykcaoqosq;
        qesoesykasouikck:
        
        DecoratorOption::delete($this->cisyiemkeykgkomc());
        goto wyuiuogqiqasaumy;
        soakqssqaoaqkkck:
        iwwmukmsgwoesima:
        goto qesoesykasouikck;
        mugykqoymeugqasw:
        
        $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek);
        goto yewqwkoaeqqegiyi;
        wyuiuogqiqasaumy:
        ouomuyeqsugykuyk:
        goto gaeewoieegegmwmw;
        icuoakkeswccquuo:
        
        $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie["\151\x64"], $this->cisyiemkeykgkomc());
        goto eqmgcgwcgkuoqyya;
        gesqgakoekiukmsa:
        wugsmyikwkyususo:
        goto ooyikkuecqewakee;
        gaeewoieegegmwmw:
        
        $scegeeyqweaksmki->show_form();
        goto gesqgakoekiukmsa;
        ooyikkuecqewakee:
    }
    
    private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto mmgaoiukskgaskye;
        mouyseuswmcisysg:
        return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce($_POST[$scegeeyqweaksmki->gwgqcsmomamyqsmy()], $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto iyoiumqkociwggwi;
        taisikggaaysayue:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\x6f\142\152\x65\x63\164\x5f\x69\144");
        goto mouyseuswmcisysg;
        mawaowggkucoosoc:
        $ooewkimkcskcwsso = ManipulateArray::get($icwicymcioeyeyek, "\162\145\163\145\164\55\x63\155\x62");
        goto taisikggaaysayue;
        mmgaoiukskgaskye:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto mawaowggkucoosoc;
        iyoiumqkociwggwi:
    }
    
    private function negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto asqwcaswskmaiuei;
        kusykiciiukqkwcs:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\157\x62\152\145\x63\x74\137\151\144");
        goto qsoicugccmgoaooq;
        qsoicugccmgoaooq:
        return $scegeeyqweaksmki->csgiecsagosuucqo("\163\141\166\x65\137\146\151\x65\x6c\144\x73") && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto gwoqwogmyqmaekeq;
        asqwcaswskmaiuei:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto kusykiciiukqkwcs;
        gwoqwogmyqmaekeq:
    }
    
    public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool
    {
        goto awuymmyewogkskka;
        ikigycmycsqieeoi:
        return (bool) ManipulateArray::get($icwicymcioeyeyek, "\163\x75\142\x6d\x69\164\x2d\143\155\142", false);
        goto memikioiiekcqoqc;
        wqsgwiecyyamgugu:
        $icwicymcioeyeyek = $_POST;
        goto keisauiosaguwkmg;
        keisauiosaguwkmg:
        qaqeuqcqwyqigguw:
        goto ikigycmycsqieeoi;
        awuymmyewogkskka:
        if ($icwicymcioeyeyek) {
            goto qaqeuqcqwyqigguw;
        }
        goto wqsgwiecyyamgugu;
        memikioiiekcqoqc:
    }
    
    public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array
    {
        goto aemgieoigwoaoqey;
        aemgieoigwoaoqey:
        $saouceauqqiwcwas = [];
        goto yuscokykcoymyyiq;
        msakyecawuskgema:
        yauygqguooyuiick:
        goto amaswgogkauskswc;
        wimsassgwgimayck:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) {
            goto qsaomeeimaagqewc;
            qsaomeeimaagqewc:
            if (is_object($qkweikswegyciaie)) {
                goto iekcwimcmsemsgmo;
            }
            goto qygwmuiaqciwymgw;
            oqcoyuausmgccywa:
            iekcwimcmsemsgmo:
            goto ksaecqkkqkqumiyy;
            ksaecqkkqkqumiyy:
            wuaeweseqayacqis:
            goto aksqawoycgigewoo;
            qygwmuiaqciwymgw:
            $saouceauqqiwcwas[$uusmaiomayssaecw] = CMB2_Boxes::get($qkweikswegyciaie);
            goto oqcoyuausmgccywa;
            aksqawoycgigewoo:
        }
        goto omimqwkiqwicccmw;
        amaswgogkauskswc:
        return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas;
        goto bkwacmcewmysqowo;
        yuscokykcoymyyiq:
        if (!($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui))) {
            goto yauygqguooyuiick;
        }
        goto wimsassgwgimayck;
        omimqwkiqwicccmw:
        wkeegycggsggcsiy:
        goto msakyecawuskgema;
        bkwacmcewmysqowo:
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\x70\141\x67\145");
    }
    
    public function __toString()
    {
        return self::uqggkiomyiceyooa();
    }
}
