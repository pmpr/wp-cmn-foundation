<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        ggoimgeeuugseiwk:
        $this->model = $meywaqqsugaoeyys;
        goto gimquiiwucueoqkw;
        eimouyomcoqkmaae:
        $this->name = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        goto kkwqmoeeqygoimwg;
        gimquiiwucueoqkw:
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        goto eimouyomcoqkmaae;
        mwqcykaeywsmoumm:
        parent::__construct();
        goto awgmyaycugswmwae;
        kkwqmoeeqygoimwg:
        $this->args = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\x79\160\145" => "\143\165\x73\164\157\x6d", "\x6d\x65\156\x75\x5f\163\154\165\147" => $yyksucsgisomecgg->aakmagwggmkoiiyu(), "\155\145\156\x75\137\x69\143\157\156" => '', "\x70\141\x67\x65\137\164\151\x74\154\145" => '', "\143\141\x70\x61\142\x69\x6c\x69\x74\171" => "\155\141\156\141\x67\145\x5f\157\x70\x74\x69\x6f\156\163", "\x6d\145\156\x75\137\x74\151\164\154\x65" => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\x70\x61\162\145\156\164\x5f\163\x6c\165\147" => $yyksucsgisomecgg->egockcwgmeocqeqc(), "\x73\x68\x6f\167\137\x69\156\x5f\155\x65\x6e\165" => true, "\155\x65\x6e\165\x5f\160\157\x73\151\x74\x69\157\x6e" => null]);
        goto mwqcykaeywsmoumm;
        awgmyaycugswmwae:
    }
    public function wigskegsqequoeks()
    {
        goto ywoyioqqyuocoygk;
        aycqgowuwagcgque:
        parent::wigskegsqequoeks();
        goto icuukwkwqeoogyae;
        ywoyioqqyuocoygk:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\141\x72\x65\x6e\x74\x5f\163\154\x75\147");
        goto iauwkeeaqsgweeoo;
        iauwkeeaqsgweeoo:
        $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\151\156\151\x74"])->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\x5f\x69\x6e\151\164", [$this, "\x79\x65\171\x69\x67\x75\x79\145\147\155\155\171\165\x73\145\x61"])->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\x5f\155\x65\156\165", [$this, "\145\x75\161\147\x77\151\163\x63\x77\x67\161\x6b\161\x6b\x65\x63"], $wgaiuiysuegayseo ? 11 : 12);
        goto aycqgowuwagcgque;
        icuukwkwqeoogyae:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x61\144\155\151\x6e\x5f\151\156\x69\164", [$this, "\143\171\x6b\x67\x71\x65\153\x79\x6b\x79\x6f\x63\157\161\x67\x6f"], 11)->cecaguuoecmccuse("\163\x63\x72\x65\145\156\137\x73\145\164\164\x69\156\147\x73", [$this, "\x69\151\165\163\x73\x6b\151\x63\143\x73\x77\x79\x6f\x63\171\147"], 10, 2)->cecaguuoecmccuse("\x73\x63\162\x65\x65\156\x5f\x6f\x70\x74\151\157\156\163\137\x73\x68\157\x77\137\163\x63\162\x65\x65\x6e", [$this, "\153\x75\171\x6f\143\x79\171\145\165\x6d\x61\165\x65\x77\x77\141"], 10, 2)->cecaguuoecmccuse("\x63\x75\163\164\157\155\x2d\x74\141\142\x6c\145\x2d\x73\145\164\55\x73\x63\162\x65\145\x6e\x2d\157\160\x74\x69\x6f\156", [$this, "\x73\151\161\x6b\x73\141\x65\153\x67\x67\x6d\x71\145\151\x63\x73"], 10, 3);
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
        return $pagenow === "\141\144\x6d\151\x6e\56\x70\x68\160" && ManipulateServer::get("\x70\141\x67\145") === $this->aqcogscycyycgkuq();
    }
    
    public function swsoqemyygecmsao() : bool
    {
        return $this->qcsgmgoukiouuscw() && $this->oyeskqayoscwciem()->uwaascqoguwkwiaw();
    }
    public function yeyiguyegmmyusea()
    {
        goto iyyaiuccouqowyga;
        cksomiiqscosigke:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\146\164\x65\162\137\151\156\151\x74\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}"), $this);
        goto ugmukcwgcioqgywy;
        gcogomgmqcgkeceg:
        $this->mqyuagguukgcoeka();
        goto cksomiiqscosigke;
        ugmukcwgcioqgywy:
        iwcmgioeaiyuacwi:
        goto kisccmsaieigisiu;
        iyyaiuccouqowyga:
        if (!$this->swsoqemyygecmsao()) {
            goto iwcmgioeaiyuacwi;
        }
        goto ikqagqacuwcgwmqy;
        ikqagqacuwcgwmqy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\145\146\x6f\x72\145\x5f\x69\156\151\164\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
        goto gcogomgmqcgkeceg;
        kisccmsaieigisiu:
    }
    
    public function yoqiwysegascakim()
    {
        return $this->imkyoqyocosuqasu("\x63\x6f\x6c\165\155\x6e\163", []);
    }
    
    public function syskqukmqoycyswc()
    {
        return $this->imkyoqyocosuqasu("\x71\165\145\x72\151\x65\x73", []);
    }
    
    public function gueasuouwqysmomu()
    {
        return $this->imkyoqyocosuqasu("\164\171\160\145", "\x63\x75\163\164\157\155");
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
        return $this->ekwwgogmwykqggyi(admin_url("\x61\x64\155\x69\x6e\56\x70\150\x70\x3f\x70\x61\147\145\x3d" . $this->aqcogscycyycgkuq()));
    }
    
    public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string
    {
        goto mwwygasiagaqsimo;
        uookseqsmsqgweuy:
        return $iwywmkygwewiamwm;
        goto yeaqsiqgakskoykg;
        mseokuecmeoyoggk:
        euoscysqgugsqewc:
        goto uookseqsmsqgweuy;
        mwwygasiagaqsimo:
        $uoomaookgsyciacm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\162\x6d\137\166\151\145\x77\137\154\151\x6e\153\137\161\x75\145\x72\151\x65\163"), [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm);
        goto wucacaegysmiusai;
        eeomcmuiqwgwwuqk:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm);
        goto mseokuecmeoyoggk;
        wucacaegysmiusai:
        if (!$uoomaookgsyciacm) {
            goto euoscysqgugsqewc;
        }
        goto eeomcmuiqwgwwuqk;
        yeaqsiqgakskoykg:
    }
    
    public function aqcogscycyycgkuq()
    {
        return $this->imkyoqyocosuqasu("\155\145\156\165\137\163\x6c\x75\x67");
    }
    public function euqgwiscwgqkqkec()
    {
        goto eceeoiwuagocweus;
        ksqmcugkcmsooeaw:
        $kuuiuigeacouwmaa = $this->imkyoqyocosuqasu("\x70\x6f\x73\x69\164\x69\157\156");
        goto sukcyismwageqgok;
        cqkyumayoemqsueu:
        $meqocwsecsywiiqs = $this->imkyoqyocosuqasu("\160\x61\x67\x65\x5f\x74\x69\164\154\145");
        goto ksqmcugkcmsooeaw;
        misiasooemyskoay:
        $aaokuekaimigoyue = $this->aqcogscycyycgkuq();
        goto eomqeimoequmagum;
        oysyuiqmsokoykaq:
        if (!$cyiwaggmwimigmcc) {
            goto ycaqooeeseougumo;
        }
        goto misiasooemyskoay;
        eqsuaywswuesuika:
        esgyqksmcukeuwyk:
        goto okawiaowosqickgq;
        eomqeimoequmagum:
        $ewuukoycimkekouc = $this->imkyoqyocosuqasu("\155\x65\156\165\x5f\x74\151\x74\154\x65");
        goto cqkyumayoemqsueu;
        sukcyismwageqgok:
        $eogowigeyucaauig = $this->imkyoqyocosuqasu("\x63\x61\x70\x61\x62\151\x6c\x69\x74\171");
        goto ukmgwuiqwgyiouec;
        geoiegikocwmwosi:
        ManipulateMenu::iyaokukyeukqokqe($meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $this->imkyoqyocosuqasu("\155\145\x6e\x75\137\151\143\157\156"), $this->imkyoqyocosuqasu("\155\145\x6e\165\x5f\x70\157\163\x69\164\x69\x6f\156"));
        goto wasuquysysmqyegg;
        ogciikaecauiwgyk:
        iigmgswcogqemgao:
        goto meiqywmwuoogckss;
        omqyuuomwywmqeiq:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x72\x6d\x5f\x76\151\x65\x77\137\141\x64\x64\x5f\x6d\x65\156\165\137{$this->gueasuouwqysmomu()}"), $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $this->mgogaykgkoogasim());
        goto oysyuiqmsokoykaq;
        meiqywmwuoogckss:
        ycaqooeeseougumo:
        goto oyeygeykqwcqoeic;
        wasuquysysmqyegg:
        goto iigmgswcogqemgao;
        goto eqsuaywswuesuika;
        qykcggwgkweasuii:
        if ($wgaiuiysuegayseo) {
            goto esgyqksmcukeuwyk;
        }
        goto geoiegikocwmwosi;
        okawiaowosqickgq:
        ManipulateMenu::wessoumqogciwogg($wgaiuiysuegayseo, $meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $kuuiuigeacouwmaa);
        goto ogciikaecauiwgyk;
        aeockieewgkequae:
        $ekiuyucoiagmscgy = [$this, "\x72\x65\156\144\145\162"];
        goto omqyuuomwywmqeiq;
        ukmgwuiqwgyiouec:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\x61\162\145\156\x74\137\x73\x6c\x75\147");
        goto qykcggwgkweasuii;
        eceeoiwuagocweus:
        $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\163\150\157\x77\137\151\x6e\x5f\155\x65\x6e\x75");
        goto aeockieewgkequae;
        oyeygeykqwcqoeic:
    }
    public function render()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x72\145\x6e\144\145\x72\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}"), $this);
    }
    public function mqyuagguukgcoeka()
    {
    }
    
    public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool
    {
        $aaokuekaimigoyue = ManipulateArray::get(explode("\137\x70\x61\147\145\x5f", $gcgsqcoqciockquc->id), 1);
        return $aaokuekaimigoyue === $this->aqcogscycyycgkuq();
    }
    public function cykgqekykyocoqgo()
    {
        goto sosqgaswegsomgkw;
        kusuakkwcuqkcqaw:
        $eeamcawaiqocomwy = DecoratorQuery::oiamiqcuyksmmomm(["\x70\141\147\x65\156\x75\155", "\141\160\x61\x67\x65", "\x70\141\147\x65\144"], wp_get_referer());
        goto sikckcmeiwmyakeu;
        iaywwgssaoecwmeg:
        $mkucggyaiaukqoce = ManipulateUser::get();
        goto maeueeueqoywkiom;
        jyekikocgagcgywq:
        $omkysikckkcieckq = $qiouiwasaauyaaue["\x6f\x70\x74\151\157\x6e"];
        goto qoiyiuoyamwimusy;
        ikuwigsmisimaqoc:
        eomcuogskessyicy:
        goto sigukociqouigous;
        yagscaikmmuagqcu:
        exit;
        goto iyawqekeeawqkymm;
        eiegguecasykwmyq:
        if (!$qiouiwasaauyaaue) {
            goto ogwwasqkaageiwwi;
        }
        goto qiiqceousoicgeee;
        qwosyqcomiosguoa:
        iicaisyekagswmey:
        goto qaqooueskgciuqgc;
        vokekoceocuskqsm:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\164\x2d\x73\143\162\x65\x65\x6e\55\157\x70\164\151\x6f\156", ORM::class), false, $omkysikckkcieckq, $eqgoocgaqwqcimie);
        goto ooykyoowougqkaso;
        sosqgaswegsomgkw:
        $qiouiwasaauyaaue = ManipulateServer::ayueggmoqeeukqmq("\x77\160\137\x73\143\x72\x65\x65\156\x5f\x6f\x70\164\151\x6f\156\163", []);
        goto eiegguecasykwmyq;
        maeueeueqoywkiom:
        if (!$mkucggyaiaukqoce) {
            goto iicaisyekagswmey;
        }
        goto jyekikocgagcgywq;
        sikckcmeiwmyakeu:
        if (!($wmekckkyoiyickmk = ManipulateServer::ayueggmoqeeukqmq("\x6d\157\x64\x65"))) {
            goto eomcuogskessyicy;
        }
        goto qaycycmeqkqcumog;
        sckyiekoceuisqyq:
        DecoratorUser::ksmqawcowkmegigw($omkysikckkcieckq, $eqgoocgaqwqcimie, $mkucggyaiaukqoce);
        goto kusuakkwcuqkcqaw;
        qaqooueskgciuqgc:
        ogwwasqkaageiwwi:
        goto omyquyiguuaociwq;
        iumgcesksuawyuyo:
        quiguyyimiqeqcwa:
        goto qwosyqcomiosguoa;
        qiiqceousoicgeee:
        check_admin_referer("\x73\143\x72\x65\145\156\x2d\157\160\x74\151\157\156\x73\55\156\x6f\156\143\145", "\163\143\x72\x65\x65\x6e\157\160\x74\x69\157\156\x6e\x6f\156\x63\x65");
        goto iaywwgssaoecwmeg;
        ooykyoowougqkaso:
        if (!$eqgoocgaqwqcimie) {
            goto isaacywgkascmcsw;
        }
        goto sckyiekoceuisqyq;
        qoiyiuoyamwimusy:
        $eqgoocgaqwqcimie = $qiouiwasaauyaaue["\166\x61\x6c\165\145"];
        goto oeogyayooiwqcmia;
        qaycycmeqkqcumog:
        $eeamcawaiqocomwy = DecoratorQuery::yqymaqmqiqmmmsoo(["\x6d\157\x64\145" => $wmekckkyoiyickmk], $eeamcawaiqocomwy);
        goto ikuwigsmisimaqoc;
        iyawqekeeawqkymm:
        isaacywgkascmcsw:
        goto iumgcesksuawyuyo;
        oeogyayooiwqcmia:
        if (!($omkysikckkcieckq == sanitize_key($omkysikckkcieckq))) {
            goto quiguyyimiqeqcwa;
        }
        goto uowiiyqmiaaaaoas;
        uowiiyqmiaaaaoas:
        $omkysikckkcieckq = str_replace("\55", "\137", $omkysikckkcieckq);
        goto vokekoceocuskqsm;
        sigukociqouigous:
        wp_safe_redirect($eeamcawaiqocomwy);
        goto yagscaikmmuagqcu;
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
        mesesokuoomcioom:
        
        if (!$this->mmukyoaoamekoswk($gcgsqcoqciockquc)) {
            goto aqwoykqaquewcaki;
        }
        goto iuwccksomkkouogy;
        oqckuigyqswmqcqg:
        aqwoykqaquewcaki:
        goto owismwmeqcmukagu;
        ioiwoukauoeamuca:
        $qeqooyuoiasweuck .= ob_get_clean();
        goto oqckuigyqswmqcqg;
        cceggewquoaemcwq:
        $this->kkooswakmamasmyg($qeqooyuoiasweuck, $gcgsqcoqciockquc);
        goto ioiwoukauoeamuca;
        iuwccksomkkouogy:
        ob_start();
        goto cceggewquoaemcwq;
        owismwmeqcmukagu:
        return $qeqooyuoiasweuck;
        goto oiywguooqeasueqq;
        oiywguooqeasueqq:
    }
    
    public function siqksaekggmqeics($wsayskqwkoauuyks, $omkysikckkcieckq, $eqgoocgaqwqcimie)
    {
        return $wsayskqwkoauuyks;
    }
    
    public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string
    {
        return ManipulateHTML::smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\143\x6c\x61\163\163" => "\x69\x63\157\156\x2d\154\x67"], true);
    }
}
