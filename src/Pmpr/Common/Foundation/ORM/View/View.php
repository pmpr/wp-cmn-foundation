<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        mwqcykaeywsmoumm:
        parent::__construct();
        goto awgmyaycugswmwae;
        eimouyomcoqkmaae:
        $this->name = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        goto kkwqmoeeqygoimwg;
        gimquiiwucueoqkw:
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        goto eimouyomcoqkmaae;
        kkwqmoeeqygoimwg:
        $this->args = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\171\160\x65" => "\143\x75\163\x74\157\155", "\x6d\x65\x6e\165\137\x73\154\x75\147" => $yyksucsgisomecgg->aakmagwggmkoiiyu(), "\155\x65\156\165\x5f\x69\x63\157\x6e" => '', "\160\x61\x67\x65\137\164\x69\x74\154\x65" => '', "\x63\x61\160\141\x62\x69\154\151\x74\x79" => "\155\141\156\141\x67\145\137\x6f\x70\164\x69\x6f\156\163", "\155\145\156\165\137\164\x69\x74\154\x65" => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\x70\141\x72\145\156\x74\137\x73\x6c\165\x67" => $yyksucsgisomecgg->egockcwgmeocqeqc(), "\x73\150\x6f\x77\137\151\156\137\155\145\156\165" => true, "\155\145\x6e\165\x5f\160\157\163\151\x74\151\x6f\x6e" => null]);
        goto mwqcykaeywsmoumm;
        ggoimgeeuugseiwk:
        $this->model = $meywaqqsugaoeyys;
        goto gimquiiwucueoqkw;
        awgmyaycugswmwae:
    }
    public function wigskegsqequoeks()
    {
        goto ywoyioqqyuocoygk;
        iauwkeeaqsgweeoo:
        $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\x69\x6e\x69\x74"])->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\151\x6e\x69\164", [$this, "\x79\x65\171\x69\147\x75\x79\x65\147\x6d\x6d\171\165\x73\145\141"])->qcsmikeggeemccuu("\x61\144\155\151\x6e\137\155\145\156\x75", [$this, "\x65\165\x71\147\167\151\x73\x63\167\x67\161\x6b\161\153\x65\x63"], $wgaiuiysuegayseo ? 11 : 12);
        goto aycqgowuwagcgque;
        ywoyioqqyuocoygk:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\x70\x61\162\x65\156\164\x5f\x73\x6c\x75\x67");
        goto iauwkeeaqsgweeoo;
        aycqgowuwagcgque:
        parent::wigskegsqequoeks();
        goto icuukwkwqeoogyae;
        icuukwkwqeoogyae:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x61\144\x6d\x69\156\137\151\156\151\x74", [$this, "\143\x79\153\x67\161\145\x6b\x79\153\171\x6f\143\157\x71\147\157"], 11)->cecaguuoecmccuse("\163\x63\162\145\x65\156\x5f\x73\x65\x74\x74\151\156\x67\163", [$this, "\151\x69\x75\x73\163\x6b\151\143\143\163\x77\171\x6f\x63\x79\147"], 10, 2)->cecaguuoecmccuse("\x73\x63\162\x65\145\156\137\x6f\160\x74\151\157\156\x73\137\x73\150\157\x77\137\163\x63\x72\145\x65\156", [$this, "\153\165\171\157\143\x79\171\145\165\155\141\165\145\x77\167\141"], 10, 2)->cecaguuoecmccuse("\143\165\163\x74\157\155\55\x74\x61\x62\154\x65\x2d\x73\145\164\55\163\143\162\x65\145\x6e\x2d\157\160\x74\151\157\156", [$this, "\163\151\161\153\163\x61\x65\x6b\x67\x67\155\161\145\x69\143\x73"], 10, 3);
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
        return $pagenow === "\x61\x64\x6d\x69\156\56\160\x68\x70" && ManipulateServer::get("\160\x61\x67\145") === $this->aqcogscycyycgkuq();
    }
    
    public function swsoqemyygecmsao() : bool
    {
        return $this->qcsgmgoukiouuscw() && $this->oyeskqayoscwciem()->uwaascqoguwkwiaw();
    }
    public function yeyiguyegmmyusea()
    {
        goto iyyaiuccouqowyga;
        ugmukcwgcioqgywy:
        iwcmgioeaiyuacwi:
        goto kisccmsaieigisiu;
        ikqagqacuwcgwmqy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\145\x66\x6f\162\145\x5f\x69\156\x69\x74\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
        goto gcogomgmqcgkeceg;
        cksomiiqscosigke:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\x66\x74\145\x72\137\x69\156\x69\164\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
        goto ugmukcwgcioqgywy;
        gcogomgmqcgkeceg:
        $this->mqyuagguukgcoeka();
        goto cksomiiqscosigke;
        iyyaiuccouqowyga:
        if (!$this->swsoqemyygecmsao()) {
            goto iwcmgioeaiyuacwi;
        }
        goto ikqagqacuwcgwmqy;
        kisccmsaieigisiu:
    }
    
    public function yoqiwysegascakim()
    {
        return $this->imkyoqyocosuqasu("\143\x6f\x6c\165\x6d\x6e\x73", []);
    }
    
    public function syskqukmqoycyswc()
    {
        return $this->imkyoqyocosuqasu("\161\x75\x65\x72\151\x65\163", []);
    }
    
    public function gueasuouwqysmomu()
    {
        return $this->imkyoqyocosuqasu("\x74\171\160\x65", "\143\x75\163\164\157\x6d");
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
        return $this->ekwwgogmwykqggyi(admin_url("\141\x64\155\151\156\x2e\x70\x68\x70\x3f\x70\141\147\145\x3d" . $this->aqcogscycyycgkuq()));
    }
    
    public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string
    {
        goto mwwygasiagaqsimo;
        wucacaegysmiusai:
        if (!$uoomaookgsyciacm) {
            goto euoscysqgugsqewc;
        }
        goto eeomcmuiqwgwwuqk;
        uookseqsmsqgweuy:
        return $iwywmkygwewiamwm;
        goto yeaqsiqgakskoykg;
        mwwygasiagaqsimo:
        $uoomaookgsyciacm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x72\x6d\x5f\x76\x69\145\167\x5f\x6c\x69\x6e\153\137\161\165\x65\162\x69\x65\163"), [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm);
        goto wucacaegysmiusai;
        mseokuecmeoyoggk:
        euoscysqgugsqewc:
        goto uookseqsmsqgweuy;
        eeomcmuiqwgwwuqk:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm);
        goto mseokuecmeoyoggk;
        yeaqsiqgakskoykg:
    }
    
    public function aqcogscycyycgkuq()
    {
        return $this->imkyoqyocosuqasu("\x6d\145\156\x75\x5f\163\x6c\165\147");
    }
    public function euqgwiscwgqkqkec()
    {
        goto eceeoiwuagocweus;
        eceeoiwuagocweus:
        $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\163\x68\x6f\167\137\151\156\x5f\155\x65\156\x75");
        goto aeockieewgkequae;
        misiasooemyskoay:
        $aaokuekaimigoyue = $this->aqcogscycyycgkuq();
        goto eomqeimoequmagum;
        aeockieewgkequae:
        $ekiuyucoiagmscgy = [$this, "\x72\x65\x6e\x64\x65\x72"];
        goto omqyuuomwywmqeiq;
        cqkyumayoemqsueu:
        $meqocwsecsywiiqs = $this->imkyoqyocosuqasu("\x70\141\x67\x65\x5f\x74\151\x74\x6c\145");
        goto ksqmcugkcmsooeaw;
        geoiegikocwmwosi:
        ManipulateMenu::iyaokukyeukqokqe($meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $this->imkyoqyocosuqasu("\x6d\x65\156\x75\137\x69\143\x6f\x6e"), $this->imkyoqyocosuqasu("\x6d\x65\156\x75\137\x70\157\163\151\x74\151\x6f\156"));
        goto wasuquysysmqyegg;
        omqyuuomwywmqeiq:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x72\x6d\137\166\151\145\x77\x5f\141\x64\x64\x5f\x6d\145\x6e\x75\137{$this->gueasuouwqysmomu()}"), $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $this->mgogaykgkoogasim());
        goto oysyuiqmsokoykaq;
        oysyuiqmsokoykaq:
        if (!$cyiwaggmwimigmcc) {
            goto ycaqooeeseougumo;
        }
        goto misiasooemyskoay;
        ukmgwuiqwgyiouec:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\141\x72\x65\x6e\x74\x5f\x73\x6c\165\x67");
        goto qykcggwgkweasuii;
        eomqeimoequmagum:
        $ewuukoycimkekouc = $this->imkyoqyocosuqasu("\155\145\x6e\165\137\x74\x69\164\154\145");
        goto cqkyumayoemqsueu;
        eqsuaywswuesuika:
        esgyqksmcukeuwyk:
        goto okawiaowosqickgq;
        sukcyismwageqgok:
        $eogowigeyucaauig = $this->imkyoqyocosuqasu("\x63\141\x70\141\x62\151\154\151\x74\171");
        goto ukmgwuiqwgyiouec;
        meiqywmwuoogckss:
        ycaqooeeseougumo:
        goto oyeygeykqwcqoeic;
        qykcggwgkweasuii:
        if ($wgaiuiysuegayseo) {
            goto esgyqksmcukeuwyk;
        }
        goto geoiegikocwmwosi;
        ksqmcugkcmsooeaw:
        $kuuiuigeacouwmaa = $this->imkyoqyocosuqasu("\160\x6f\163\x69\164\x69\157\x6e");
        goto sukcyismwageqgok;
        wasuquysysmqyegg:
        goto iigmgswcogqemgao;
        goto eqsuaywswuesuika;
        okawiaowosqickgq:
        ManipulateMenu::wessoumqogciwogg($wgaiuiysuegayseo, $meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $kuuiuigeacouwmaa);
        goto ogciikaecauiwgyk;
        ogciikaecauiwgyk:
        iigmgswcogqemgao:
        goto meiqywmwuoogckss;
        oyeygeykqwcqoeic:
    }
    public function render()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\162\145\x6e\144\x65\162\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}"), $this);
    }
    public function mqyuagguukgcoeka()
    {
    }
    
    public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool
    {
        $aaokuekaimigoyue = ManipulateArray::get(explode("\x5f\x70\x61\147\145\x5f", $gcgsqcoqciockquc->id), 1);
        return $aaokuekaimigoyue === $this->aqcogscycyycgkuq();
    }
    public function cykgqekykyocoqgo()
    {
        goto sosqgaswegsomgkw;
        kusuakkwcuqkcqaw:
        $eeamcawaiqocomwy = DecoratorQuery::oiamiqcuyksmmomm(["\x70\x61\x67\145\156\x75\x6d", "\141\160\141\x67\x65", "\x70\141\147\x65\144"], wp_get_referer());
        goto sikckcmeiwmyakeu;
        maeueeueqoywkiom:
        if (!$mkucggyaiaukqoce) {
            goto iicaisyekagswmey;
        }
        goto jyekikocgagcgywq;
        qoiyiuoyamwimusy:
        $eqgoocgaqwqcimie = $qiouiwasaauyaaue["\166\141\x6c\x75\x65"];
        goto oeogyayooiwqcmia;
        eiegguecasykwmyq:
        if (!$qiouiwasaauyaaue) {
            goto ogwwasqkaageiwwi;
        }
        goto qiiqceousoicgeee;
        qaycycmeqkqcumog:
        $eeamcawaiqocomwy = DecoratorQuery::yqymaqmqiqmmmsoo(["\155\x6f\144\x65" => $wmekckkyoiyickmk], $eeamcawaiqocomwy);
        goto ikuwigsmisimaqoc;
        sikckcmeiwmyakeu:
        if (!($wmekckkyoiyickmk = ManipulateServer::ayueggmoqeeukqmq("\155\157\x64\x65"))) {
            goto eomcuogskessyicy;
        }
        goto qaycycmeqkqcumog;
        sigukociqouigous:
        wp_safe_redirect($eeamcawaiqocomwy);
        goto yagscaikmmuagqcu;
        vokekoceocuskqsm:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\145\164\55\163\143\162\x65\145\156\55\157\x70\164\x69\157\x6e", ORM::class), false, $omkysikckkcieckq, $eqgoocgaqwqcimie);
        goto ooykyoowougqkaso;
        iumgcesksuawyuyo:
        quiguyyimiqeqcwa:
        goto qwosyqcomiosguoa;
        qwosyqcomiosguoa:
        iicaisyekagswmey:
        goto qaqooueskgciuqgc;
        ooykyoowougqkaso:
        if (!$eqgoocgaqwqcimie) {
            goto isaacywgkascmcsw;
        }
        goto sckyiekoceuisqyq;
        yagscaikmmuagqcu:
        exit;
        goto iyawqekeeawqkymm;
        sckyiekoceuisqyq:
        DecoratorUser::ksmqawcowkmegigw($omkysikckkcieckq, $eqgoocgaqwqcimie, $mkucggyaiaukqoce);
        goto kusuakkwcuqkcqaw;
        qaqooueskgciuqgc:
        ogwwasqkaageiwwi:
        goto omyquyiguuaociwq;
        sosqgaswegsomgkw:
        $qiouiwasaauyaaue = ManipulateServer::ayueggmoqeeukqmq("\167\160\x5f\163\143\x72\x65\145\x6e\x5f\157\x70\164\151\x6f\x6e\163", []);
        goto eiegguecasykwmyq;
        iaywwgssaoecwmeg:
        $mkucggyaiaukqoce = ManipulateUser::get();
        goto maeueeueqoywkiom;
        qiiqceousoicgeee:
        check_admin_referer("\x73\x63\162\x65\x65\x6e\55\x6f\x70\164\151\157\156\163\55\x6e\157\x6e\x63\x65", "\x73\x63\x72\x65\145\156\x6f\x70\x74\151\157\156\156\x6f\x6e\x63\x65");
        goto iaywwgssaoecwmeg;
        iyawqekeeawqkymm:
        isaacywgkascmcsw:
        goto iumgcesksuawyuyo;
        jyekikocgagcgywq:
        $omkysikckkcieckq = $qiouiwasaauyaaue["\x6f\x70\164\x69\x6f\x6e"];
        goto qoiyiuoyamwimusy;
        ikuwigsmisimaqoc:
        eomcuogskessyicy:
        goto sigukociqouigous;
        oeogyayooiwqcmia:
        if (!($omkysikckkcieckq == sanitize_key($omkysikckkcieckq))) {
            goto quiguyyimiqeqcwa;
        }
        goto uowiiyqmiaaaaoas;
        uowiiyqmiaaaaoas:
        $omkysikckkcieckq = str_replace("\55", "\x5f", $omkysikckkcieckq);
        goto vokekoceocuskqsm;
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
        cceggewquoaemcwq:
        $this->kkooswakmamasmyg($qeqooyuoiasweuck, $gcgsqcoqciockquc);
        goto ioiwoukauoeamuca;
        ioiwoukauoeamuca:
        $qeqooyuoiasweuck .= ob_get_clean();
        goto oqckuigyqswmqcqg;
        iuwccksomkkouogy:
        ob_start();
        goto cceggewquoaemcwq;
        owismwmeqcmukagu:
        return $qeqooyuoiasweuck;
        goto oiywguooqeasueqq;
        oqckuigyqswmqcqg:
        aqwoykqaquewcaki:
        goto owismwmeqcmukagu;
        oiywguooqeasueqq:
    }
    
    public function siqksaekggmqeics($wsayskqwkoauuyks, $omkysikckkcieckq, $eqgoocgaqwqcimie)
    {
        return $wsayskqwkoauuyks;
    }
    
    public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string
    {
        return ManipulateHTML::smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\143\154\x61\163\163" => "\x69\143\157\156\55\154\147"], true);
    }
}
