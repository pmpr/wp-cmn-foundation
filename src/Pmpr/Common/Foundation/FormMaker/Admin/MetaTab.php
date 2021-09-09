<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    
    protected ?string $key = "\x6d\171\x5f\157\x70\164\151\x6f\x6e";
    
    protected array $menuArgs = ["\166\151\145\167\x5f\x63\141\x70\141\142\x69\x6c\x69\x74\171" => '', "\x70\x61\x72\145\x6e\164\x5f\x73\x6c\x75\147" => '', "\160\141\x67\x65\137\164\x69\164\x6c\145" => '', "\155\x65\156\165\137\x74\x69\x74\x6c\145" => '', "\143\x61\x70\141\x62\x69\x6c\x69\164\x79" => "\155\x61\156\141\147\x65\x5f\157\160\164\x69\x6f\156\x73", "\x6d\x65\x6e\165\137\163\154\x75\147" => '', "\151\143\x6f\156\137\x75\162\x6c" => '', "\160\157\x73\151\x74\151\x6f\156" => null, "\156\145\x74\167\157\x72\153" => false];
    
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
        goto myoogmqcuqmugmis;
        ewqsacaiwkosemsi:
        $this->id = $this->iaqckqwoiseyqaku();
        goto qqkikcmwsiyyguky;
        qqkikcmwsiyyguky:
        $this->key = $uusmaiomayssaecw;
        goto mscssyseauumaomu;
        mscssyseauumaomu:
        parent::__construct();
        goto omiaakamcqceimqo;
        myoogmqcuqmugmis:
        if (!(is_admin() && class_exists("\103\115\102\x32"))) {
            goto gqcywcgwcicoygoc;
        }
        goto ewqsacaiwkosemsi;
        omiaakamcqceimqo:
        gqcywcgwcicoygoc:
        goto wkuuagcmguayweko;
        wkuuagcmguayweko:
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
        return "\x63\155\157" . rand(1000, 99999);
    }
    
    public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self
    {
        goto okogmyoucwsokgao;
        mimgksuaeacoiuiy:
        ausuaqqusmwiiaym:
        goto qygqoemegwowoeqq;
        iegysgmuiuoygaks:
        return $this;
        goto yisywkoeacekieom;
        okogmyoucwsokgao:
        if (!($qgoqiacsiccwoawi > 2 || $qgoqiacsiccwoawi < 1)) {
            goto ausuaqqusmwiiaym;
        }
        goto esiwqyggcyagsuca;
        esiwqyggcyagsuca:
        $qgoqiacsiccwoawi = 1;
        goto mimgksuaeacoiuiy;
        qygqoemegwowoeqq:
        $this->column = $qgoqiacsiccwoawi;
        goto iegysgmuiuoygaks;
        yisywkoeacekieom:
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
        goto aoemuiswososoccu;
        mimoekoywouygmqm:
        parent::wigskegsqequoeks();
        goto gooqcgkqkkqkcsok;
        yayasacmgscomuog:
        $this->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\150\145\x61\x64", [$this, "\x75\165\x71\161\153\x67\x79\x71\x65\x6b\x6d\147\171\x63\147\x71"])->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\x69\x6e\151\x74", [$this, "\x79\x65\x79\151\x67\x75\x79\145\147\x6d\x6d\x79\165\x73\x65\x61"])->qcsmikeggeemccuu("\141\144\155\151\x6e\137\145\156\x71\165\145\165\145\137\x73\x63\x72\x69\x70\164\163", [$this, "\167\161\x71\x63\x6b\x6b\x6d\x71\141\x6b\x69\x71\x75\x79\143\x73"])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}\141\144\155\x69\156\x5f\x6d\x65\x6e\x75", [$this, "\163\x6f\143\143\x6f\155\x61\x6b\167\145\161\147\x73\x6b\151\143"], 12)->qcsmikeggeemccuu("\x63\155\x62\x32\x5f\x72\x65\x6e\x64\145\x72\137\x6f\x70\x74\x69\157\x6e\163\x5f\x73\141\x76\145\x5f\142\x75\164\164\157\156", [$this, "\x65\x63\x79\171\161\163\147\167\x77\x75\x75\153\147\x73\x73\x67"]);
        goto mimoekoywouygmqm;
        aoemuiswososoccu:
        
        $kiiwewqkgqgqwwue = is_multisite() && $this->agcaegggmmeuammg("\x6e\x65\164\167\157\162\x6b") ? "\x6e\145\164\167\157\162\x6b\x5f" : '';
        goto yayasacmgscomuog;
        gooqcgkqkkqkcsok:
    }
    public function yeyiguyegmmyusea()
    {
        goto ieeqoiesmqcgiwwq;
        ieeqoiesmqcgiwwq:
        if (!$this->agciemoaikwmiugi()) {
            goto ccoksmmssesgymew;
        }
        goto eassaosgaagwuqsm;
        oaeycwgkkesccuks:
        $ewuukoycimkekouc = $this->agcaegggmmeuammg("\x6d\x65\156\x75\x5f\x73\x6c\165\x67");
        goto cacwcayseciqomcc;
        cowwqaysgqmaoqsc:
        ukaqukigimywiiwi:
        goto mcqcowcieemaiigg;
        kekqkoysooqmwyec:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\160\141\162\x65\x6e\x74\137\163\154\165\147");
        goto oaeycwgkkesccuks;
        qokcmgsaiksicggq:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\166\151\x65\x77\x5f\x63\141\160\141\142\x69\154\151\x74\x79");
        goto ykmseukouigemsau;
        ykmseukouigemsau:
        if ($eiiwoqgkgmosakem) {
            goto ukaqukigimywiiwi;
        }
        goto equmswogycagseum;
        eassaosgaagwuqsm:
        register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc());
        goto ceceaykkukuoseym;
        iuwycqgokgsqwggc:
        $this->swqsasqieqqgusew($ewuukoycimkekouc ? $ewuukoycimkekouc : $this->cisyiemkeykgkomc());
        goto qokcmgsaiksicggq;
        cacwcayseciqomcc:
        $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom == $ewuukoycimkekouc);
        goto iuwycqgokgsqwggc;
        ceceaykkukuoseym:
        ccoksmmssesgymew:
        goto kekqkoysooqmwyec;
        equmswogycagseum:
        $this->qaygoqgeieeugsey("\166\x69\x65\167\137\x63\x61\x70\x61\x62\x69\154\151\x74\x79", $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg("\143\141\x70\x61\142\151\x6c\x69\164\x79") : false);
        goto cowwqaysgqmaoqsc;
        mcqcowcieemaiigg:
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
        goto yeiakoiwkgisccey;
        ykwowwwsoesygaye:
        muowmoeiammyqqwk:
        goto cimekgoakeawwiqw;
        yeiakoiwkgisccey:
        $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\x74\141\142", $cciauwuwuqaywgce, $this);
        goto eiwyikycucisyqce;
        cimekgoakeawwiqw:
        return $this;
        goto iosemuyugiqsieuy;
        eiwyikycucisyqce:
        if (!$cciauwuwuqaywgce instanceof Tab) {
            goto muowmoeiammyqqwk;
        }
        goto gaokwosoeeioeacm;
        gaokwosoeeioeacm:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto ykwowwwsoesygaye;
        iosemuyugiqsieuy:
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self
    {
        goto awwikyuccuiycume;
        aeauuwowyceumwsw:
        return $this;
        goto csgyyqmwikkoguow;
        agkkqqicksyqwkme:
        quwgioumcwcacggc:
        goto aeauuwowyceumwsw;
        awwikyuccuiycume:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            waswmouooiigsoew:
        }
        goto agkkqqicksyqwkme;
        csgyyqmwikkoguow:
    }
    
    public function myomgmiksogoikuc() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    public function qessyiueeiwwgyag()
    {
        goto owakcoywswieyewa;
        caocugyuikeekyom:
        $this->qigsyyqgewgskemg("\167\x72\x61\160\x20\143\155\x62\62\55\157\x70\164\151\x6f\156\x73\x2d\x70\141\x67\145\40\x63\x6d\157\x2d\x6f\x70\164\151\157\156\163\x2d\x70\x61\x67\145")->qigsyyqgewgskemg($this->cisyiemkeykgkomc());
        goto ouwcsmcycymqmecm;
        mcoqgkqqocieqygg:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto swesswaiuuowgomk;
            qqawakqgsmykwgek:
            foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) {
                goto sewcuwkguyyyaukm;
                eakkuqoaieqckuew:
                ewwwmuqwkmoqaamo:
                goto ouceaequykomkkok;
                oegwiwksukciiggi:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}\x5f\x73\151\144\145\x5f\155\x65\164\141\x62\x6f\170\145", $qkweikswegyciaie);
                goto ucciuscgmkuqkcey;
                sewcuwkguyyyaukm:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto qyeiccayywcuysuk;
                }
                goto oegwiwksukciiggi;
                ucciuscgmkuqkcey:
                if (!$qkweikswegyciaie->mukiwuqwmywsckco()) {
                    goto owkqyuockaismaqi;
                }
                goto gaskwaouyigseqea;
                twsomuiummwoyoos:
                $qgoqiacsiccwoawi = 2;
                goto owaceekkekeiukaa;
                oisekmgmugoiyige:
                qyeiccayywcuysuk:
                goto eakkuqoaieqckuew;
                gaskwaouyigseqea:
                $qkweikswegyciaie->register($this->cisyiemkeykgkomc());
                goto mcqcamuuwgkawauc;
                owaceekkekeiukaa:
                owkqyuockaismaqi:
                goto oisekmgmugoiyige;
                mcqcamuuwgkawauc:
                $this->omameoyeausyugmw($qkweikswegyciaie, "\x66\157\162\x6d\137\155\141\153\x65\162\x5f\164\x61\142\137\163\151\x64\145\137\143\x6f\x6e\164\141\151\x6e\145\162\137{$aokagokqyuysuksm}", "\163\x69\144\145");
                goto twsomuiummwoyoos;
                ouceaequykomkkok:
            }
            goto kykeqqgyqqgaawoo;
            gkgemsygssqimikw:
            if (empty($scwwkgcyecqgioqs)) {
                goto uauyemceqgicwcqo;
            }
            goto qqawakqgsmykwgek;
            uykugiwiykyccwqs:
            $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw("\143\x6f\156\x74\145\156\x74", ["\x69\x64" => $aokagokqyuysuksm, "\143\157\x6c\165\x6d\156" => $qgoqiacsiccwoawi, "\x64\x65\163\x63\x72\151\x70\x74\151\x6f\x6e" => $cciauwuwuqaywgce->meqceykmywmqgoym(), "\143\x6f\156\x74\x61\151\156\145\162\137\x61\164\164\x72\x73" => [
                "\x69\144" => "\x6f\x70\x74\55\143\x6f\x6e\164\145\156\164\x2d{$aokagokqyuysuksm}",
                "\143\154\x61\163\x73" => "\x6f\x70\164\x2d\143\157\156\164\145\x6e\164",
                
                "\144\x61\x74\x61\55\x62\157\x78\145\x73" => implode("\x2c", array_keys(ManipulateArray::yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue()))),
            ]]);
            goto fomwoaaqqcwyekey;
            swesswaiuuowgomk:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto gmkmewawayskuusu;
            }
            goto qekmqsisgmoyuqow;
            yiuuiegcgmqwqyqm:
            $qgoqiacsiccwoawi = 1;
            goto gywwsuewqemcisae;
            kykeqqgyqqgaawoo:
            scmwuqwuquascwys:
            goto esyigamqqaoyecyc;
            qekmqsisgmoyuqow:
            $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea();
            goto yiuuiegcgmqwqyqm;
            eqewkwicumqigsem:
            cayqueswawgqycow:
            goto mwegkckwqgiwmasq;
            owaiygkwaeyiiwey:
            $iogqeouiuqyewuqe .= ManipulateHTML::uuccukgasskgimsq("\x61", ["\x69\x64" => "\x6f\160\164\55\164\x61\x62\x2d{$aokagokqyuysuksm}", "\150\x72\x65\146" => "\43", "\x63\x6c\x61\x73\x73" => "\x6e\141\x76\x2d\x74\141\x62\40\x6f\x70\x74\x2d\x74\x61\x62\40\160\x72\x2d\164\141\142", "\x64\141\164\x61\55\x6f\160\164\x63\157\x6e\164\145\x6e\164" => "\43\157\x70\164\x2d\x63\157\156\164\145\156\164\x2d{$aokagokqyuysuksm}"], [$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()]);
            goto uykugiwiykyccwqs;
            gywwsuewqemcisae:
            
            $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}\x5f\x74\141\x62\x5f\163\x69\144\x65\137\x6d\x65\x74\x61\142\x6f\x78\x65\163", $cciauwuwuqaywgce->weookicuaacigemm());
            goto gkgemsygssqimikw;
            esyigamqqaoyecyc:
            uauyemceqgicwcqo:
            goto owaiygkwaeyiiwey;
            fomwoaaqqcwyekey:
            gmkmewawayskuusu:
            goto eqewkwicumqigsem;
            mwegkckwqgiwmasq:
        }
        goto umcsysgcksumioak;
        ouwcsmcycymqmecm:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($this->equiyaoamqmaeckc());
        goto mcoqgkqqocieqygg;
        wioequuiyigoaass:
        if (!(!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || DecoratorUser::scmcyesmmikkucie($eiiwoqgkgmosakem)))) {
            goto kykgmsqcyggkoeig;
        }
        goto kswyqgqqygaouiuk;
        siioyccqcugcmkoy:
        $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]);
        goto owoiuwqgwcseogig;
        vaekgwkiiqmwmoey:
        kykgmsqcyggkoeig:
        goto aqsuuuwagsyyooak;
        umcsysgcksumioak:
        ycwsouyqiyyyyswa:
        goto siioyccqcugcmkoy;
        meekmmeswcggewek:
        
        $this->once = false;
        goto vaekgwkiiqmwmoey;
        kswyqgqqygaouiuk:
        $iogqeouiuqyewuqe = '';
        goto komcawukmomgkqog;
        owoiuwqgwcseogig:
        echo $this->iuygowkemiiwqmiw("\155\145\x74\x61\164\x61\x62", ["\153\x65\171" => $this->cisyiemkeykgkomc(), "\150\x6f\157\153" => $this->mmsykuomogaqoaye(), "\164\x61\x62\x73" => $iogqeouiuqyewuqe, "\x70\x61\147\145" => $this->kyqakacqeumicgag(), "\143\x6f\x6c\165\155\156" => $this->myywwqkyiwawwquy(), "\156\157\x6e\143\145\x73" => [wp_nonce_field("\155\145\164\141\x2d\x62\x6f\170\x2d\157\x72\144\145\162", "\x6d\145\x74\141\55\x62\x6f\170\55\x6f\162\x64\x65\162\55\156\157\156\143\145", false, false), wp_nonce_field("\143\x6c\x6f\163\145\x64\x70\157\x73\x74\x62\x6f\x78\x65\x73", "\x63\154\x6f\163\x65\144\x70\x6f\x73\164\x62\157\170\145\x73\156\157\156\x63\x65", false, false)], "\142\165\x74\x74\157\x6e\x73" => $qyukicweqoisimwg, "\143\x6f\x6e\x74\x65\156\164\x73" => $kqweykcqkgkmoqay, "\160\x61\147\145\137\x74\x69\164\x6c\145" => esc_html(get_admin_page_title()), "\x63\157\156\164\141\151\x6e\145\x72\137\141\164\164\x72\163" => $this->ccekeuwwqqoiwuwy()]);
        goto meekmmeswcggewek;
        owakcoywswieyewa:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\166\x69\x65\167\137\143\x61\x70\141\142\151\154\151\x74\171");
        goto wioequuiyigoaass;
        komcawukmomgkqog:
        $kqweykcqkgkmoqay = '';
        goto caocugyuikeekyom;
        aqsuuuwagsyyooak:
    }
    
    public function makgumuaykymweaq() : array
    {
        goto oaymsekakyassacy;
        wcyacsasikeesgay:
        gkwskkyusocmckci:
        goto ksuwigakysoscwsi;
        aaouuuqqgueesgum:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\155\x65\156\165\137\x73\154\x75\147") ? $this->agcaegggmmeuammg("\155\145\x6e\x75\x5f\x73\x6c\165\147") : $this->cisyiemkeykgkomc();
        goto myuwisogyksycamk;
        ywcgeioasmogicki:
        
        $ywmkwiwkosakssii[] = $cmyoswawcimsecyy;
        goto aewggukwoeqcwkmw;
        oqaqkwgyiegaoiyk:
        
        $omwmuycmeqcqokom = $this->eyqwmckgumyaoams();
        goto cqumukgqaesgokmu;
        esuscykksesgueii:
        
        if (!$omwmuycmeqcqokom) {
            goto sukooaksmwmweysu;
        }
        goto akwcamwokuciwqyw;
        myuwisogyksycamk:
        
        $ywmkwiwkosakssii[] = [$this, "\161\x65\163\163\171\151\165\x65\145\151\x77\x77\x67\171\141\147"];
        goto emmcmeososokueak;
        qkowqoyoecgcqokw:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x63\x61\160\x61\x62\x69\x6c\151\x74\x79");
        goto aaouuuqqgueesgum;
        emmcmeososokueak:
        
        if (!$omwmuycmeqcqokom) {
            goto gkwskkyusocmckci;
        }
        goto awqcicwsamqqsisa;
        esacgaegcuqsgqua:
        $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc;
        goto cgiweqsmckusyige;
        cgiweqsmckusyige:
        sukooaksmwmweysu:
        goto ywcgeioasmogicki;
        akwcamwokuciwqyw:
        
        $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "\x3f\x70\x6f\x73\x74\137\164\x79\x70\x65\x3d{$this->kecacgyqmgeeqmme()}" : '';
        goto esacgaegcuqsgqua;
        awqcicwsamqqsisa:
        
        $ywmkwiwkosakssii[] = null;
        goto meawiqkkayqiiyqa;
        cqumukgqaesgokmu:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\x70\141\162\x65\x6e\164\x5f\163\154\165\147") ? $this->agcaegggmmeuammg("\x70\x61\x72\x65\156\164\x5f\163\x6c\x75\x67") : $omwmuycmeqcqokom;
        goto cascyqosimkguayi;
        meawiqkkayqiiyqa:
        goto wgsmemaiyicwmagy;
        goto wcyacsasikeesgay;
        ksuwigakysoscwsi:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x69\x63\157\156\137\165\x72\x6c") ? $this->agcaegggmmeuammg("\151\x63\157\x6e\137\x75\x72\x6c") : '';
        goto uyowgcocwogyyogy;
        swwasksasqwewmck:
        return $ywmkwiwkosakssii;
        goto aoemiusqwqoimequ;
        uyowgcocwogyyogy:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\160\x6f\163\x69\164\151\x6f\156") === null ? null : intval($this->agcaegggmmeuammg("\160\x6f\x73\x69\164\x69\157\x6e"));
        goto uackiwuiauimukuk;
        cascyqosimkguayi:
        
        $cmyoswawcimsecyy = $this->agcaegggmmeuammg("\x70\x61\147\145\x5f\x74\x69\164\154\x65") ? $this->agcaegggmmeuammg("\x70\x61\x67\x65\x5f\164\x69\164\154\x65") : $this->qcgakseyaikigqco();
        goto esuscykksesgueii;
        uackiwuiauimukuk:
        wgsmemaiyicwmagy:
        goto qycyawiweamkwamy;
        qycyawiweamkwamy:
        
        $ywmkwiwkosakssii["\x63\142"] = $omwmuycmeqcqokom ? "\x61\x64\144\137\x73\165\142\155\145\156\x75\137\160\x61\x67\x65" : "\x61\144\x64\x5f\x6d\145\x6e\x75\137\160\141\x67\x65";
        goto swwasksasqwewmck;
        aewggukwoeqcwkmw:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\155\x65\x6e\165\x5f\164\x69\164\x6c\145") ? $this->agcaegggmmeuammg("\x6d\145\156\x75\137\164\151\x74\x6c\145") : $cmyoswawcimsecyy;
        goto qkowqoyoecgcqokw;
        oaymsekakyassacy:
        $ywmkwiwkosakssii = [];
        goto oqaqkwgyiegaoiyk;
        aoemiusqwqoimequ:
    }
    public function soccomakweqgskic()
    {
        goto ccewmwoameocgeck;
        gkqugmqmcaaewcgu:
        
        $this->siqqwyaiwgagokug();
        goto wemkygaugegmuyeq;
        sskygwgyogmqgmqa:
        
        $this->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\x5f\x70\x72\151\x6e\x74\x5f\x73\164\171\x6c\145\x73\55{$this->mmsykuomogaqoaye()}", ["\x43\115\x42\62\137\150\x6f\157\x6b\x75\x70", "\x65\156\161\165\x65\x75\x65\137\143\155\142\x5f\x63\163\163"])->qcsmikeggeemccuu("\x61\x64\x64\137\x6d\x65\164\141\x5f\142\x6f\170\x65\x73\x5f{$this->mmsykuomogaqoaye()}", [$this, "\x77\141\x63\145\x6d\x6b\161\x6d\x69\x77\x75\161\157\x75\147\141"])->qcsmikeggeemccuu("\x6c\x6f\x61\x64\55{$this->mmsykuomogaqoaye()}", [$this, "\x6f\147\x6b\x69\x69\x65\x77\x73\143\x65\x6d\141\161\153\167\147"]);
        goto ocgkcmokykycoqwu;
        uciscoimiwuqsumg:
        
        $iaakskwmyqceoscy = $ywmkwiwkosakssii["\x63\142"]($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6]);
        goto ksumissygaeqwiqk;
        ksumissygaeqwiqk:
        $this->oggwewqswcggccae($iaakskwmyqceoscy);
        goto sskygwgyogmqgmqa;
        ocgkcmokykycoqwu:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\x66\x74\x65\162\137\x69\156\151\x74\x5f\x68\157\157\153", false), $iaakskwmyqceoscy, $this);
        goto gkqugmqmcaaewcgu;
        ccewmwoameocgeck:
        
        $ywmkwiwkosakssii = $this->makgumuaykymweaq();
        goto uciscoimiwuqsumg;
        wemkygaugegmuyeq:
    }
    private function siqqwyaiwgagokug()
    {
        goto ussceksysakwguwm;
        qqkqawesmskmkgqg:
        ogemcuimywmoauai:
        goto oksseoqyoqqkmooc;
        gqogoecueameuqem:
        $iaakskwmyqceoscy = $this->mmsykuomogaqoaye();
        goto aqimmiyqakwgogiw;
        ogaiqagqcemycaoo:
        foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) {
            goto gqygesckmymkgeia;
            ucisggckygasmewc:
            if (!($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi["\x61\143\x74\x69\157\156"], "\55\133\x68\157\x6f\153\x5d"))) {
                goto iyuyykuuksqgcoco;
            }
            goto waagiwegsgmwumyk;
            gswosgeumoekweom:
            
            $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10;
            goto ggkemwwsugkckeag;
            eiuqssqeewecueaw:
            $sqqewmoeaekuyyas = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x70\x72\x69\x6f\162\x69\x74\x79", 10));
            goto ucisggckygasmewc;
            waagiwegsgmwumyk:
            
            $aiamqeawckcsuaou = str_replace("\133\x68\157\x6f\153\x5d", $iaakskwmyqceoscy, $aiamqeawckcsuaou);
            goto gswosgeumoekweom;
            ecouksmuoaagmiwo:
            scayqcumuauocuco:
            goto wscqsciugescaoys;
            gqygesckmymkgeia:
            $ywmkwiwkosakssii = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x61\x72\x67\x73", 1));
            goto cugygygwqumqwkmc;
            iocuaqcqoggiqgsw:
            iyuyykuuksqgcoco:
            goto ecouksmuoaagmiwo;
            cugygygwqumqwkmc:
            $aiamqeawckcsuaou = ManipulateArray::get($sqaougiyimwumoqi, "\141\x63\164\151\157\x6e");
            goto euukqqoeamysgaai;
            ggkemwwsugkckeag:
            
            $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1;
            goto eicsoeicqsmgyoyw;
            euukqqoeamysgaai:
            $ekiuyucoiagmscgy = ManipulateArray::get($sqaougiyimwumoqi, "\x63\x61\154\x6c\x62\x61\143\x6b");
            goto eiuqssqeewecueaw;
            eicsoeicqsmgyoyw:
            
            $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas);
            goto iocuaqcqoggiqgsw;
            wscqsciugescaoys:
        }
        goto qqkqawesmskmkgqg;
        ussceksysakwguwm:
        $symcuwcoqkwoscsg = $this->eigooueumicckoge();
        goto gqogoecueameuqem;
        aqimmiyqakwgogiw:
        if (!$symcuwcoqkwoscsg) {
            goto sciaeeisgiakmyyw;
        }
        goto ogaiqagqcemycaoo;
        oksseoqyoqqkmooc:
        sciaeeisgiakmyyw:
        goto cwsscisucgswsugy;
        cwsscisucgswsugy:
    }
    public function wacemkqmiwuqouga()
    {
        goto keicyiqusacogocc;
        yyqwgugicycyeosk:
        aaiekuiyqeykkgqq:
        goto kagywssammsigeky;
        aucmyygueiuuyygk:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto cyciqqkakeosegoe;
            wqyesuemouksaeac:
            if (!$cciauwuwuqaywgce->sekaaukqmiysugws()) {
                goto wycuuweqayggsikk;
            }
            goto eieckmqqcmcqcyiq;
            seiaqecoeskumemq:
            wycuuweqayggsikk:
            goto ekskakueeqwgwyug;
            mumcqaqeakgcquac:
            foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
                goto wikqsescmyeeicwg;
                uwckqwwyucaiekeq:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto iicewkmmisuecsku;
                }
                goto uscaqiyymkyywsws;
                uscaqiyymkyywsws:
                $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm();
                goto icecgmamoqwkcgau;
                oicyciugogouuwwi:
                iicewkmmisuecsku:
                goto syimweumwsqgoggc;
                syimweumwsqgoggc:
                goismqusymeooqae:
                goto usquuksweegcuqom;
                icecgmamoqwkcgau:
                $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === "\163\x69\144\145" ? "\x6e\x6f\162\155\x61\154" : $mgkceomocowocqyo);
                goto oicyciugogouuwwi;
                wikqsescmyeeicwg:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137\164\141\x62\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\x6d\145\x74\x61\x62\x6f\170\137{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this);
                goto uwckqwwyucaiekeq;
                usquuksweegcuqom:
            }
            goto caecagokwuouoymy;
            ekskakueeqwgwyug:
            skemwcqcyaqogacu:
            goto swykkkgaawkssqma;
            wgkicouqwayscuio:
            
            $uaqusiikkokccqou = ManipulateArray::yaeiiwwyckwugsem($uaqusiikkokccqou);
            goto mumcqaqeakgcquac;
            caecagokwuouoymy:
            sakgiyogqqymcama:
            goto seiaqecoeskumemq;
            eieckmqqcmcqcyiq:
            $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\x74\141\x62\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\155\145\x74\x61\142\157\170\x65\x73", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this);
            goto wgkicouqwayscuio;
            cyciqqkakeosegoe:
            $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc());
            goto wqyesuemouksaeac;
            swykkkgaawkssqma:
        }
        goto yossisaqeggqeokq;
        ckaoqocygksqsoqg:
        eskmyswgsosamscc:
        goto qomugkkimygqeioo;
        yossisaqeggqeokq:
        eiyeuegmoiyouoia:
        goto ckaoqocygksqsoqg;
        aouikocwycssquau:
        if (!$ywoucyskcquysiwc) {
            goto eskmyswgsosamscc;
        }
        goto aucmyygueiuuyygk;
        qomugkkimygqeioo:
        foreach ($this->qsqiqgmeoowykuue() as $qkweikswegyciaie) {
            goto ckycaecsiwgmomgk;
            aywscouoieeksess:
            iouqskcmyecqmugo:
            goto gwomwiesykqmmwgo;
            ckycaecsiwgmomgk:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto awcyccimowsskmkc;
            }
            goto asyskswoaqakaicc;
            qcscwisoukgswcum:
            awcyccimowsskmkc:
            goto aywscouoieeksess;
            asyskswoaqakaicc:
            $this->sceiskoouaiqocqo($qkweikswegyciaie, $qkweikswegyciaie->register($this->cisyiemkeykgkomc()), "\x73\x69\x64\x65");
            goto qcscwisoukgswcum;
            gwomwiesykqmmwgo:
        }
        goto yyqwgugicycyeosk;
        keicyiqusacogocc:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto aouikocwycssquau;
        kagywssammsigeky:
    }
    
    public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = "\x6e\157\x72\x6d\x61\x6c")
    {
        goto iwysasakqeoiqkea;
        imgiueoewusyceem:
        $this->qcsmikeggeemccuu("\x63\x6d\142\62\137\x73\x61\x76\x65\137\157\160\164\151\157\156\163\55\160\x61\x67\x65\x5f\x66\x69\145\154\x64\x73\x5f{$aokagokqyuysuksm}", [$this, "\147\x6f\x79\145\x6d\151\x6b\157\x67\145\x75\163\x6b\147\x61\x73"], 10, 2);
        goto sqqocygqgwkmgwaa;
        giaoygyymwwoqmgw:
        qayqouemeyoeqece:
        goto sgmowmgweoqysoqg;
        wsqescacigqkgicg:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\171\x69\145\155\x75\163\x67\161\x6d\x6f\x79\155\163\x67\x65\147"]);
        goto umcyiqykwoeegomm;
        icoggwwouyssowey:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\145\167\x73\153\x6b\x77\x75\167\x6b\153\x6b\141\x71\x77\x67\153"]);
        goto uokioguceweaqqse;
        ayaksmyymwewccuw:
        if (!$this->uaicqoagkoeacawy($uoeiskamgscgeccq)) {
            goto qayqouemeyoeqece;
        }
        goto skmygcmwwgoaguwo;
        skmygcmwwgoaguwo:
        $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea();
        goto imgiueoewusyceem;
        uokioguceweaqqse:
        gcmcgcuycmoywakk:
        goto kiyuamyuuoiuwyag;
        geggqemsocqacmaa:
        $uoeiskamgscgeccq = ManipulateArray::get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea());
        goto xkqoueuawceokqwq;
        iwysasakqeoiqkea:
        if (!is_array($uoeiskamgscgeccq)) {
            goto eoecsiksocyeiayk;
        }
        goto geggqemsocqacmaa;
        sqqocygqgwkmgwaa:
        $wyicesskmckwqeec = "\160\157\x73\x74\142\157\170\x5f\x63\154\x61\x73\163\145\x73\137{$this->mmsykuomogaqoaye()}\137{$aokagokqyuysuksm}";
        goto gwawuyimyyieguwa;
        umcyiqykwoeegomm:
        cewcquygkawaiscq:
        goto cmukqmgyeiqqyoye;
        kiyuamyuuoiuwyag:
        
        if (!$uoeiskamgscgeccq->meta_box["\143\x6c\x6f\x73\145\x64"]) {
            goto cewcquygkawaiscq;
        }
        goto wsqescacigqkgicg;
        gwawuyimyyieguwa:
        if (!($this->myomgmiksogoikuc() && $mgkceomocowocqyo !== "\x73\x69\x64\145")) {
            goto gcmcgcuycmoywakk;
        }
        goto icoggwwouyssowey;
        cmukqmgyeiqqyoye:
        $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo);
        goto giaoygyymwwoqmgw;
        xkqoueuawceokqwq:
        eoecsiksocyeiayk:
        goto ayaksmyymwewccuw;
        sgmowmgweoqysoqg:
    }
    
    public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo)
    {
        add_meta_box($qkweikswegyciaie->mwikyscisascoeea(), $qkweikswegyciaie->iwqugwigmoiagwec(), [$this, "\141\165\x73\171\x6d\x6d\x67\163\x6b\x73\157\161\x77\x75\x71\x6b"], $iaakskwmyqceoscy, $mgkceomocowocqyo, $qkweikswegyciaie->yywskysiycwkwsgw());
    }
    public function wqqckkmqakiquycs()
    {
        goto assouqamccmauuye;
        smsmeycaqoqkgciw:
        $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}\55\x61\144\x6d\x69\x6e";
        goto mwemsqwigyycweai;
        mwemsqwigyycweai:
        DecoratorAsset::imsomwwswyoquoqk($eueuqacmukymcyya, $this->miocmcoykayoyyau()->get("\155\165\x6c\x74\x69\157\160\164\x73\x2e\152\163"));
        goto aooumysewqkyewii;
        oiymmoisooaocwyg:
        DecoratorAsset::fowiaymccsmewemu($eueuqacmukymcyya, "\x50\115\x50\x52\117\x70\x74\x54\x61\x62\163", ["\153\x65\x79" => $this->kyqakacqeumicgag(), "\160\x6f\163\164\x74\x79\160\x65" => $this->kecacgyqmgeeqmme(), "\x64\145\146\x61\x75\x6c\x74\164\141\x62" => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']);
        goto kuiqmwsgukiwgguq;
        ouucymmowsuymakm:
        if (!$this->myomgmiksogoikuc()) {
            goto yaceceaiceoeweog;
        }
        goto smsmeycaqoqkgciw;
        assouqamccmauuye:
        if (!$this->csaueuycewaiuaay()) {
            goto uycwieawygyekeoi;
        }
        goto ouucymmowsuymakm;
        kuiqmwsgukiwgguq:
        yaceceaiceoeweog:
        goto ieuoockquscyauiy;
        ieuoockquscyauiy:
        uycwieawygyekeoi:
        goto uumykgkackouocgc;
        mqsgkwkggseuykio:
        $cciauwuwuqaywgce = reset($ywoucyskcquysiwc);
        goto oiymmoisooaocwyg;
        aooumysewqkyewii:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto mqsgkwkggseuykio;
        uumykgkackouocgc:
    }
    public function uuqqkgyqekmgycgq()
    {
        goto smgugiqksqkmsuys;
        oamosmwemmmikgwo:
        ManipulateHTML::awwqwouuoioauoaw("\x73\164\x79\x6c\x65", ["\151\x64" => "\x70\162\x2d\x74\141\142\55\143\x6c\145\141\156\x75\x70\55\143\x73\163"], true, $icyaoosaykeskiuu);
        goto kgeomuicikkomkie;
        kgeomuicikkomkie:
        amesgukaccuckock:
        goto muqgkcsqkssymyem;
        oeeaaoyyucuuwkuu:
        $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\155\145\x74\x61\x74\141\x62\56\x63\163\x73", ["\x70\141\x67\x65" => $this->kyqakacqeumicgag()]);
        goto oamosmwemmmikgwo;
        smgugiqksqkmsuys:
        if (!$this->myomgmiksogoikuc()) {
            goto amesgukaccuckock;
        }
        goto oeeaaoyyucuuwkuu;
        muqgkcsqkssymyem:
    }
    public function iaggsikquucsoiko()
    {
        ManipulateHTML::awwqwouuoioauoaw("\x73\143\x72\x69\160\x74", [], true, "\152\121\x75\145\x72\171\50\x64\157\x63\165\x6d\145\x6e\164\51\x2e\162\x65\x61\x64\171\x28\x66\165\x6e\x63\164\151\x6f\x6e\50\51\173\160\x6f\x73\164\x62\x6f\170\x65\x73\x2e\141\144\144\x5f\x70\157\163\164\x62\157\x78\137\x74\x6f\x67\147\154\x65\x73\x28\42\160\x6f\x73\x74\x62\157\170\x2d\x63\157\156\x74\x61\151\156\x65\x72\42\51\73\x7d\51\x3b");
    }
    public function ecyyqsgwwuukgssg()
    {
        goto emoekgyaiwksgwoa;
        emoekgyaiwksgwoa:
        if (!($this->csaueuycewaiuaay() && $this->ekwgmoqoeywwwccw())) {
            goto eamyyoygceikikcy;
        }
        goto ycumgkeaagawwkss;
        wikycciwekuugqec:
        eamyyoygceikikcy:
        goto qskaaemigoqyogiu;
        ycumgkeaagawwkss:
        echo $this->uaasoaieuoymsgsi();
        goto wikycciwekuugqec;
        qskaaemigoqyogiu:
    }
    
    private function uaicqoagkoeacawy($uoeiskamgscgeccq)
    {
        
        return isset($uoeiskamgscgeccq->meta_box["\x73\150\157\x77\x5f\x6f\156"]["\x6b\x65\171"]) && $uoeiskamgscgeccq->meta_box["\x73\150\157\x77\137\x6f\x6e"]["\x6b\x65\171"] === "\x6f\x70\x74\x69\157\156\163\x2d\160\x61\x67\145" && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box["\x73\x68\x6f\167\x5f\x6f\156"]["\x76\x61\154\165\x65"]);
    }
    
    public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu)
    {
        goto umsqoiumeuayywuy;
        uscaccweyakkqycu:
        $this->once = true;
        goto ouqciucssmewqseu;
        wymmooqweugwumuo:
        settings_errors("{$this->cisyiemkeykgkomc()}\55\x6e\157\x74\151\143\x65\x73");
        goto uscaccweyakkqycu;
        umsqoiumeuayywuy:
        if (!($this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $sogsqsawoyqmqsqu && !$this->ccauywsgwsesgmua())) {
            goto gqocyuqyemgioaok;
        }
        goto syqcoysgaociwkmu;
        ouqciucssmewqseu:
        gqocyuqyemgioaok:
        goto ooiackiyssimocoy;
        syqcoysgaociwkmu:
        add_settings_error("{$this->cisyiemkeykgkomc()}\x2d\x6e\x6f\164\x69\x63\145\x73", '', __("\123\145\164\164\151\x6e\x67\163\x20\125\x70\144\x61\x74\x65\x64", PR__CMN__FOUNDATION), "\x75\160\144\141\164\x65\x64");
        goto wymmooqweugwumuo;
        ooiackiyssimocoy:
    }
    
    public function uaasoaieuoymsgsi() : ?string
    {
        return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ["\156\141\155\145" => "\163\165\142\x6d\151\x74\55\143\x6d\x62", "\x74\x79\160\145" => "\163\165\142\155\151\x74", "\x63\154\x61\163\x73" => "\142\165\x74\x74\157\x6e\55\x70\162\151\155\141\x72\171"]);
    }
    
    public function omeeeegkauuouaka() : string
    {
        return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ["\x6e\141\x6d\x65" => "\x72\145\163\x65\x74\55\x63\155\142", "\164\171\160\x65" => "\x62\x75\164\164\x6f\x6e", "\x63\x6c\x61\163\x73" => "\x62\165\164\x74\157\156\55\163\145\143\x6f\x6e\144\141\162\x79"]);
    }
    
    public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = []) : string
    {
        return $pkyyagewkiyckmwy ? ManipulateHTML::qgsekwygcgawekeq("\151\x6e\x70\165\x74", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\143\154\x61\163\163" => "\x62\165\164\x74\157\156", "\x76\141\x6c\165\x65" => $pkyyagewkiyckmwy])) : '';
    }
    
    public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\157\x70\x74\x2d\x68\x69\x64\x64\x65\156";
        return $cmkqisoeyioisqaw;
    }
    
    public function yiemusgqmoymsgeg($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\x63\x6c\x6f\163\x65\x64";
        return $cmkqisoeyioisqaw;
    }
    public function ogkiiewscemaqkwg()
    {
        $this->cqscqicucmeamkyq("\141\144\144\137\155\145\164\141\137\142\x6f\x78\145\163\137{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq("\141\144\144\137\155\145\164\141\137\142\x6f\x78\145\x73", $this->mmsykuomogaqoaye(), null);
    }
    
    public function ausymmgsksoqwuqk($post, $qkweikswegyciaie)
    {
        goto aawgwoyccicqiooa;
        aawgwoyccicqiooa:
        
        $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie["\x69\x64"], $this->cisyiemkeykgkomc());
        goto skoasiggcqccogqu;
        gckukekaicosscko:
        $icwicymcioeyeyek = $_POST;
        goto cuawaegesykceuoi;
        wamywgsgswmwgqes:
        goto mueoecmegwgakkuu;
        goto eccsqkqyiwqcocym;
        weaaqiuymusyaoim:
        
        $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek);
        goto yyuwoaymcmgagkek;
        sgkkuuwoeouqgeqc:
        
        $scegeeyqweaksmki->show_form();
        goto acesmiyysymciaui;
        yywywwmawmmyuwms:
        mueoecmegwgakkuu:
        goto sgkkuuwoeouqgeqc;
        eccsqkqyiwqcocym:
        ccyiauwwmeyoqmme:
        goto weaaqiuymusyaoim;
        acesmiyysymciaui:
        gwysqygykiqwgugc:
        goto qmiwkumwuqywukmg;
        eceqwgecqgsugwyi:
        if ($this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto wigmqayoaagkekug;
        }
        goto wamywgsgswmwgqes;
        aaeaawawgiokuoqc:
        wigmqayoaagkekug:
        goto wyswgiqmuwyiqama;
        yyuwoaymcmgagkek:
        goto mueoecmegwgakkuu;
        goto aaeaawawgiokuoqc;
        cuawaegesykceuoi:
        if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto ccyiauwwmeyoqmme;
        }
        goto eceqwgecqgsugwyi;
        skoasiggcqccogqu:
        if (!$scegeeyqweaksmki) {
            goto gwysqygykiqwgugc;
        }
        goto gckukekaicosscko;
        wyswgiqmuwyiqama:
        
        DecoratorOption::delete($this->cisyiemkeykgkomc());
        goto yywywwmawmmyuwms;
        qmiwkumwuqywukmg:
    }
    
    private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto sgugyikwqeswcaos;
        qykisyqcgokcuiqs:
        return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce($_POST[$scegeeyqweaksmki->gwgqcsmomamyqsmy()], $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto qkmoekswwgmogsgg;
        qgaywmweyqweqkme:
        $ooewkimkcskcwsso = ManipulateArray::get($icwicymcioeyeyek, "\162\x65\163\145\164\55\143\x6d\x62");
        goto gkemwmiykeiyuska;
        sgugyikwqeswcaos:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto qgaywmweyqweqkme;
        gkemwmiykeiyuska:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\x6f\x62\x6a\145\x63\x74\x5f\151\x64");
        goto qykisyqcgokcuiqs;
        qkmoekswwgmogsgg:
    }
    
    private function negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto igcyymyqeawqkwgm;
        yeiwygkuemkoykis:
        return $scegeeyqweaksmki->csgiecsagosuucqo("\163\141\166\145\x5f\x66\151\x65\154\x64\x73") && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto koqciqwwomauuqci;
        igcyymyqeawqkwgm:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto imeagymkkagggkec;
        imeagymkkagggkec:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\x6f\x62\152\x65\143\164\x5f\151\144");
        goto yeiwygkuemkoykis;
        koqciqwwomauuqci:
    }
    
    public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool
    {
        goto ouasygcguacqoomm;
        coqcgqgsuagaoqgo:
        $icwicymcioeyeyek = $_POST;
        goto wayyqekkqyeoeiwo;
        ouasygcguacqoomm:
        if ($icwicymcioeyeyek) {
            goto oyymggqmgsymkyua;
        }
        goto coqcgqgsuagaoqgo;
        wayyqekkqyeoeiwo:
        oyymggqmgsymkyua:
        goto bocwykmykkkoioyq;
        bocwykmykkkoioyq:
        return (bool) ManipulateArray::get($icwicymcioeyeyek, "\163\165\x62\155\x69\x74\55\143\155\x62", false);
        goto wmiywmecqmaeagwc;
        wmiywmecqmaeagwc:
    }
    
    public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array
    {
        goto ywqqgwecosgicaim;
        qsqcmociaogwiggs:
        if (!($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui))) {
            goto kqmyqoqwaoaqgemm;
        }
        goto twuqeqeisoggkkmg;
        fsaiawesoowogmek:
        return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas;
        goto kwgcqoqewyqaoosk;
        twuqeqeisoggkkmg:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) {
            goto msmcymkewouiuuse;
            uoiooiwsmoysksqm:
            ikegeeiesieogisa:
            goto cogiokiwsggickqu;
            kieygmqycuywqgay:
            $saouceauqqiwcwas[$uusmaiomayssaecw] = CMB2_Boxes::get($qkweikswegyciaie);
            goto wuagokiooeiuokqs;
            msmcymkewouiuuse:
            if (is_object($qkweikswegyciaie)) {
                goto aaowoieokoumsyqc;
            }
            goto kieygmqycuywqgay;
            wuagokiooeiuokqs:
            aaowoieokoumsyqc:
            goto uoiooiwsmoysksqm;
            cogiokiwsggickqu:
        }
        goto oouiqmqcowoqqwyi;
        oouiqmqcowoqqwyi:
        acewwgmgwegkqkmg:
        goto wwakqukuoioceyck;
        wwakqukuoioceyck:
        kqmyqoqwaoaqgemm:
        goto fsaiawesoowogmek;
        ywqqgwecosgicaim:
        $saouceauqqiwcwas = [];
        goto qsqcmociaogwiggs;
        kwgcqoqewyqaoosk:
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\160\x61\x67\x65");
    }
    
    public function __toString()
    {
        return self::uqggkiomyiceyooa();
    }
}
