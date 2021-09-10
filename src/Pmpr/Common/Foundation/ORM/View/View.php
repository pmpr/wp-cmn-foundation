<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateMenu;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\Common;
use Pmpr\Common\Foundation\ORM\DB\Model;
use Pmpr\Common\Foundation\ORM\ORM;
use Pmpr\Common\Foundation\ORM\Register;

class View extends Common
{
    
    protected ?string $name = '';
    
    protected array $args = [];
    
    protected ?Model $model = null;
    
    protected array $columns = [];
    
    protected bool $initialized = false;
    
    public function __construct(Model $meywaqqsugaoeyys, $ywmkwiwkosakssii = [])
    {
        goto ggoimgeeuugseiwk;
        eimouyomcoqkmaae:
        $this->name = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        goto kkwqmoeeqygoimwg;
        gimquiiwucueoqkw:
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        goto eimouyomcoqkmaae;
        ggoimgeeuugseiwk:
        $this->model = $meywaqqsugaoeyys;
        goto gimquiiwucueoqkw;
        kkwqmoeeqygoimwg:
        $this->args = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\x79\160\145" => "\143\165\x73\x74\157\155", "\x6d\145\156\165\137\163\x6c\165\x67" => $yyksucsgisomecgg->aakmagwggmkoiiyu(), "\x6d\x65\x6e\165\x5f\x69\143\157\156" => '', "\160\141\147\145\x5f\164\151\x74\154\x65" => '', "\143\x61\160\x61\x62\151\x6c\151\x74\x79" => "\155\x61\x6e\141\147\145\x5f\157\160\x74\151\157\156\163", "\155\145\156\165\137\x74\151\x74\154\x65" => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\160\x61\162\x65\156\x74\137\163\x6c\165\x67" => $yyksucsgisomecgg->egockcwgmeocqeqc(), "\x73\150\x6f\x77\x5f\x69\156\x5f\155\x65\x6e\165" => true, "\155\x65\156\x75\x5f\x70\x6f\163\151\x74\151\x6f\x6e" => null]);
        goto mwqcykaeywsmoumm;
        mwqcykaeywsmoumm:
        parent::__construct();
        goto awgmyaycugswmwae;
        awgmyaycugswmwae:
    }
    public function wigskegsqequoeks()
    {
        goto ywoyioqqyuocoygk;
        aycqgowuwagcgque:
        parent::wigskegsqequoeks();
        goto icuukwkwqeoogyae;
        ywoyioqqyuocoygk:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\x70\141\162\x65\x6e\x74\x5f\x73\154\x75\147");
        goto iauwkeeaqsgweeoo;
        iauwkeeaqsgweeoo:
        $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\x69\x6e\x69\164"])->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\x5f\x69\156\151\x74", [$this, "\x79\x65\x79\151\147\x75\171\145\147\x6d\155\171\x75\x73\145\x61"])->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\155\145\156\x75", [$this, "\145\165\161\x67\167\151\163\143\x77\147\161\153\161\x6b\145\x63"], $wgaiuiysuegayseo ? 11 : 12);
        goto aycqgowuwagcgque;
        icuukwkwqeoogyae:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\141\x64\155\x69\x6e\x5f\151\156\151\x74", [$this, "\x63\x79\153\147\x71\145\153\171\x6b\x79\x6f\143\x6f\x71\147\157"], 11)->cecaguuoecmccuse("\163\143\162\x65\145\156\137\163\145\164\164\x69\156\147\x73", [$this, "\x69\151\165\x73\x73\153\151\143\143\x73\x77\x79\x6f\x63\171\x67"], 10, 2)->cecaguuoecmccuse("\163\x63\x72\x65\x65\156\137\157\x70\x74\x69\x6f\x6e\x73\x5f\x73\x68\x6f\167\137\x73\x63\x72\145\x65\x6e", [$this, "\x6b\x75\171\x6f\143\x79\x79\145\165\155\141\x75\x65\x77\x77\x61"], 10, 2)->cecaguuoecmccuse("\x63\165\x73\x74\157\x6d\x2d\164\x61\x62\x6c\x65\55\x73\x65\x74\x2d\x73\x63\162\145\x65\x6e\55\157\x70\164\151\x6f\156", [$this, "\163\x69\x71\x6b\163\x61\x65\x6b\x67\x67\x6d\161\145\151\143\x73"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function oyeskqayoscwciem() : Register
    {
        return $this->mgogaykgkoogasim()->oyeskqayoscwciem();
    }
    
    public function ukimmgwaaymwayws() : ?bool
    {
        return $this->initialized;
    }
    public function init()
    {
    }
    
    public function qcsgmgoukiouuscw() : bool
    {
        global $pagenow;
        return $pagenow === "\141\x64\x6d\151\x6e\x2e\x70\150\x70" && ManipulateServer::get("\x70\x61\147\145") === $this->aqcogscycyycgkuq();
    }
    
    public function swsoqemyygecmsao() : bool
    {
        return $this->qcsgmgoukiouuscw() && $this->oyeskqayoscwciem()->uwaascqoguwkwiaw();
    }
    public function yeyiguyegmmyusea()
    {
        goto iyyaiuccouqowyga;
        gcogomgmqcgkeceg:
        $this->mqyuagguukgcoeka();
        goto cksomiiqscosigke;
        iyyaiuccouqowyga:
        if (!$this->swsoqemyygecmsao()) {
            goto iwcmgioeaiyuacwi;
        }
        goto ikqagqacuwcgwmqy;
        ugmukcwgcioqgywy:
        iwcmgioeaiyuacwi:
        goto kisccmsaieigisiu;
        ikqagqacuwcgwmqy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\x65\x66\x6f\162\145\x5f\151\x6e\x69\164\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
        goto gcogomgmqcgkeceg;
        cksomiiqscosigke:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\146\x74\145\x72\137\x69\x6e\151\x74\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}"), $this);
        goto ugmukcwgcioqgywy;
        kisccmsaieigisiu:
    }
    
    public function yoqiwysegascakim()
    {
        return $this->imkyoqyocosuqasu("\143\x6f\x6c\165\155\156\x73", []);
    }
    
    public function syskqukmqoycyswc()
    {
        return $this->imkyoqyocosuqasu("\161\165\x65\x72\x69\x65\163", []);
    }
    
    public function gueasuouwqysmomu()
    {
        return $this->imkyoqyocosuqasu("\x74\171\160\145", "\143\165\x73\164\x6f\x6d");
    }
    
    public function mgogaykgkoogasim() : ?Model
    {
        return $this->model;
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function kooiucqkggeagccu() : ?array
    {
        return $this->args;
    }
    
    public function qmgcisuuikgmqcsu() : string
    {
        return $this->ekwwgogmwykqggyi(admin_url("\141\144\155\151\156\56\160\150\x70\77\x70\141\147\145\75" . $this->aqcogscycyycgkuq()));
    }
    
    public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string
    {
        goto mwwygasiagaqsimo;
        eeomcmuiqwgwwuqk:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm);
        goto mseokuecmeoyoggk;
        mseokuecmeoyoggk:
        euoscysqgugsqewc:
        goto uookseqsmsqgweuy;
        wucacaegysmiusai:
        if (!$uoomaookgsyciacm) {
            goto euoscysqgugsqewc;
        }
        goto eeomcmuiqwgwwuqk;
        mwwygasiagaqsimo:
        $uoomaookgsyciacm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\162\155\137\166\x69\145\167\x5f\x6c\151\156\x6b\137\161\165\145\x72\151\145\163"), [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm);
        goto wucacaegysmiusai;
        uookseqsmsqgweuy:
        return $iwywmkygwewiamwm;
        goto yeaqsiqgakskoykg;
        yeaqsiqgakskoykg:
    }
    
    public function aqcogscycyycgkuq()
    {
        return $this->imkyoqyocosuqasu("\155\145\x6e\x75\137\163\x6c\x75\147");
    }
    public function euqgwiscwgqkqkec()
    {
        goto eceeoiwuagocweus;
        ogciikaecauiwgyk:
        iigmgswcogqemgao:
        goto meiqywmwuoogckss;
        okawiaowosqickgq:
        ManipulateMenu::wessoumqogciwogg($wgaiuiysuegayseo, $meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $kuuiuigeacouwmaa);
        goto ogciikaecauiwgyk;
        misiasooemyskoay:
        $aaokuekaimigoyue = $this->aqcogscycyycgkuq();
        goto eomqeimoequmagum;
        eomqeimoequmagum:
        $ewuukoycimkekouc = $this->imkyoqyocosuqasu("\x6d\x65\156\165\x5f\x74\151\x74\154\x65");
        goto cqkyumayoemqsueu;
        wasuquysysmqyegg:
        goto iigmgswcogqemgao;
        goto eqsuaywswuesuika;
        omqyuuomwywmqeiq:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x72\155\x5f\x76\x69\x65\x77\x5f\x61\x64\x64\137\155\145\156\165\137{$this->gueasuouwqysmomu()}"), $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $this->mgogaykgkoogasim());
        goto oysyuiqmsokoykaq;
        geoiegikocwmwosi:
        ManipulateMenu::iyaokukyeukqokqe($meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $this->imkyoqyocosuqasu("\x6d\x65\x6e\165\x5f\x69\x63\157\156"), $this->imkyoqyocosuqasu("\x6d\145\156\x75\x5f\160\x6f\163\x69\164\151\157\x6e"));
        goto wasuquysysmqyegg;
        aeockieewgkequae:
        $ekiuyucoiagmscgy = [$this, "\162\x65\x6e\x64\145\x72"];
        goto omqyuuomwywmqeiq;
        meiqywmwuoogckss:
        ycaqooeeseougumo:
        goto oyeygeykqwcqoeic;
        cqkyumayoemqsueu:
        $meqocwsecsywiiqs = $this->imkyoqyocosuqasu("\x70\x61\147\145\137\x74\x69\164\154\145");
        goto ksqmcugkcmsooeaw;
        eceeoiwuagocweus:
        $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\x73\x68\157\x77\137\151\x6e\137\x6d\x65\x6e\165");
        goto aeockieewgkequae;
        oysyuiqmsokoykaq:
        if (!$cyiwaggmwimigmcc) {
            goto ycaqooeeseougumo;
        }
        goto misiasooemyskoay;
        eqsuaywswuesuika:
        esgyqksmcukeuwyk:
        goto okawiaowosqickgq;
        sukcyismwageqgok:
        $eogowigeyucaauig = $this->imkyoqyocosuqasu("\x63\x61\160\x61\x62\x69\154\151\x74\x79");
        goto ukmgwuiqwgyiouec;
        ksqmcugkcmsooeaw:
        $kuuiuigeacouwmaa = $this->imkyoqyocosuqasu("\x70\157\163\x69\x74\x69\x6f\156");
        goto sukcyismwageqgok;
        qykcggwgkweasuii:
        if ($wgaiuiysuegayseo) {
            goto esgyqksmcukeuwyk;
        }
        goto geoiegikocwmwosi;
        ukmgwuiqwgyiouec:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\x61\162\145\156\164\x5f\163\x6c\x75\147");
        goto qykcggwgkweasuii;
        oyeygeykqwcqoeic:
    }
    public function render()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x72\145\156\144\x65\162\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}"), $this);
    }
    public function mqyuagguukgcoeka()
    {
    }
    
    public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool
    {
        $aaokuekaimigoyue = ManipulateArray::get(explode("\137\x70\141\147\145\x5f", $gcgsqcoqciockquc->id), 1);
        return $aaokuekaimigoyue === $this->aqcogscycyycgkuq();
    }
    public function cykgqekykyocoqgo()
    {
        goto sosqgaswegsomgkw;
        iyawqekeeawqkymm:
        isaacywgkascmcsw:
        goto iumgcesksuawyuyo;
        sigukociqouigous:
        wp_safe_redirect($eeamcawaiqocomwy);
        goto yagscaikmmuagqcu;
        kusuakkwcuqkcqaw:
        $eeamcawaiqocomwy = DecoratorQuery::oiamiqcuyksmmomm(["\160\x61\147\145\156\x75\x6d", "\141\160\x61\147\145", "\x70\x61\x67\x65\144"], wp_get_referer());
        goto sikckcmeiwmyakeu;
        oeogyayooiwqcmia:
        if (!($omkysikckkcieckq == sanitize_key($omkysikckkcieckq))) {
            goto quiguyyimiqeqcwa;
        }
        goto uowiiyqmiaaaaoas;
        vokekoceocuskqsm:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\145\164\x2d\163\x63\x72\x65\145\156\x2d\x6f\x70\x74\151\x6f\156", ORM::class), false, $omkysikckkcieckq, $eqgoocgaqwqcimie);
        goto ooykyoowougqkaso;
        qwosyqcomiosguoa:
        iicaisyekagswmey:
        goto qaqooueskgciuqgc;
        iumgcesksuawyuyo:
        quiguyyimiqeqcwa:
        goto qwosyqcomiosguoa;
        sosqgaswegsomgkw:
        $qiouiwasaauyaaue = ManipulateServer::ayueggmoqeeukqmq("\167\160\137\163\143\x72\145\145\156\x5f\x6f\x70\x74\x69\x6f\x6e\x73", []);
        goto eiegguecasykwmyq;
        qoiyiuoyamwimusy:
        $eqgoocgaqwqcimie = $qiouiwasaauyaaue["\x76\x61\x6c\x75\145"];
        goto oeogyayooiwqcmia;
        maeueeueqoywkiom:
        if (!$mkucggyaiaukqoce) {
            goto iicaisyekagswmey;
        }
        goto jyekikocgagcgywq;
        qiiqceousoicgeee:
        check_admin_referer("\163\143\x72\x65\145\x6e\55\x6f\160\x74\151\x6f\156\x73\55\x6e\x6f\x6e\143\x65", "\163\x63\162\x65\x65\x6e\157\160\x74\151\157\x6e\156\157\x6e\143\x65");
        goto iaywwgssaoecwmeg;
        qaycycmeqkqcumog:
        $eeamcawaiqocomwy = DecoratorQuery::yqymaqmqiqmmmsoo(["\155\157\144\145" => $wmekckkyoiyickmk], $eeamcawaiqocomwy);
        goto ikuwigsmisimaqoc;
        yagscaikmmuagqcu:
        exit;
        goto iyawqekeeawqkymm;
        sckyiekoceuisqyq:
        DecoratorUser::ksmqawcowkmegigw($omkysikckkcieckq, $eqgoocgaqwqcimie, $mkucggyaiaukqoce);
        goto kusuakkwcuqkcqaw;
        jyekikocgagcgywq:
        $omkysikckkcieckq = $qiouiwasaauyaaue["\157\x70\164\151\x6f\x6e"];
        goto qoiyiuoyamwimusy;
        qaqooueskgciuqgc:
        ogwwasqkaageiwwi:
        goto omyquyiguuaociwq;
        uowiiyqmiaaaaoas:
        $omkysikckkcieckq = str_replace("\55", "\137", $omkysikckkcieckq);
        goto vokekoceocuskqsm;
        sikckcmeiwmyakeu:
        if (!($wmekckkyoiyickmk = ManipulateServer::ayueggmoqeeukqmq("\x6d\157\x64\x65"))) {
            goto eomcuogskessyicy;
        }
        goto qaycycmeqkqcumog;
        ikuwigsmisimaqoc:
        eomcuogskessyicy:
        goto sigukociqouigous;
        iaywwgssaoecwmeg:
        $mkucggyaiaukqoce = ManipulateUser::get();
        goto maeueeueqoywkiom;
        eiegguecasykwmyq:
        if (!$qiouiwasaauyaaue) {
            goto ogwwasqkaageiwwi;
        }
        goto qiiqceousoicgeee;
        ooykyoowougqkaso:
        if (!$eqgoocgaqwqcimie) {
            goto isaacywgkascmcsw;
        }
        goto sckyiekoceuisqyq;
        omyquyiguuaociwq:
    }
    
    public function imkyoqyocosuqasu($uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        return ManipulateArray::get($this->kooiucqkggeagccu(), $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    public function kuyocyyeumauewwa($ekcswiguywieeeoc, $gcgsqcoqciockquc) : bool
    {
        return $ekcswiguywieeeoc && $this->mmukyoaoamekoswk($gcgsqcoqciockquc);
    }
    
    public function kkooswakmamasmyg($qeqooyuoiasweuck, $gcgsqcoqciockquc)
    {
        
    }
    
    public function iiusskiccswyocyg($qeqooyuoiasweuck, $gcgsqcoqciockquc) : string
    {
        goto mesesokuoomcioom;
        owismwmeqcmukagu:
        return $qeqooyuoiasweuck;
        goto oiywguooqeasueqq;
        iuwccksomkkouogy:
        ob_start();
        goto cceggewquoaemcwq;
        ioiwoukauoeamuca:
        $qeqooyuoiasweuck .= ob_get_clean();
        goto oqckuigyqswmqcqg;
        oqckuigyqswmqcqg:
        aqwoykqaquewcaki:
        goto owismwmeqcmukagu;
        cceggewquoaemcwq:
        $this->kkooswakmamasmyg($qeqooyuoiasweuck, $gcgsqcoqciockquc);
        goto ioiwoukauoeamuca;
        mesesokuoomcioom:
        
        if (!$this->mmukyoaoamekoswk($gcgsqcoqciockquc)) {
            goto aqwoykqaquewcaki;
        }
        goto iuwccksomkkouogy;
        oiywguooqeasueqq:
    }
    
    public function siqksaekggmqeics($wsayskqwkoauuyks, $omkysikckkcieckq, $eqgoocgaqwqcimie)
    {
        return $wsayskqwkoauuyks;
    }
    
    public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string
    {
        return ManipulateHTML::smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\x63\x6c\x61\163\163" => "\151\x63\x6f\156\x2d\154\147"], true);
    }
}
