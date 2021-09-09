<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        kkwqmoeeqygoimwg:
        $this->args = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\x79\160\145" => "\x63\165\163\164\x6f\155", "\x6d\x65\156\x75\x5f\163\x6c\165\147" => $yyksucsgisomecgg->aakmagwggmkoiiyu(), "\155\145\x6e\165\137\151\x63\x6f\156" => '', "\160\x61\x67\x65\x5f\164\x69\x74\154\145" => '', "\x63\x61\x70\141\142\151\x6c\x69\x74\x79" => "\x6d\x61\x6e\141\x67\x65\137\x6f\x70\x74\x69\x6f\156\x73", "\155\x65\x6e\x75\x5f\x74\151\x74\x6c\145" => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\x70\x61\162\x65\x6e\164\137\163\154\165\147" => $yyksucsgisomecgg->egockcwgmeocqeqc(), "\163\150\157\167\x5f\x69\156\137\155\x65\x6e\165" => true, "\155\145\156\165\x5f\160\x6f\x73\x69\164\151\157\156" => null]);
        goto mwqcykaeywsmoumm;
        mwqcykaeywsmoumm:
        parent::__construct();
        goto awgmyaycugswmwae;
        ggoimgeeuugseiwk:
        $this->model = $meywaqqsugaoeyys;
        goto gimquiiwucueoqkw;
        gimquiiwucueoqkw:
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        goto eimouyomcoqkmaae;
        awgmyaycugswmwae:
    }
    public function wigskegsqequoeks()
    {
        goto ywoyioqqyuocoygk;
        ywoyioqqyuocoygk:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\141\x72\x65\x6e\164\137\163\x6c\165\x67");
        goto iauwkeeaqsgweeoo;
        iauwkeeaqsgweeoo:
        $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\151\156\x69\x74"])->qcsmikeggeemccuu("\141\144\x6d\151\156\137\x69\x6e\x69\x74", [$this, "\171\145\x79\151\x67\165\x79\145\x67\x6d\155\x79\x75\163\x65\x61"])->qcsmikeggeemccuu("\x61\144\x6d\151\156\137\x6d\145\156\165", [$this, "\x65\x75\161\147\167\x69\x73\143\x77\147\161\153\161\153\x65\x63"], $wgaiuiysuegayseo ? 11 : 12);
        goto aycqgowuwagcgque;
        aycqgowuwagcgque:
        parent::wigskegsqequoeks();
        goto icuukwkwqeoogyae;
        icuukwkwqeoogyae:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x61\x64\x6d\x69\156\137\151\156\151\x74", [$this, "\143\171\x6b\x67\161\145\x6b\x79\x6b\x79\157\x63\x6f\161\147\x6f"], 11)->cecaguuoecmccuse("\x73\x63\x72\145\145\156\137\163\145\164\164\x69\156\147\x73", [$this, "\151\151\x75\x73\x73\153\x69\x63\143\x73\167\171\x6f\x63\171\x67"], 10, 2)->cecaguuoecmccuse("\x73\x63\162\x65\145\156\137\157\160\164\x69\157\156\163\137\163\150\157\x77\137\x73\143\x72\x65\145\156", [$this, "\153\x75\171\157\143\171\171\145\x75\155\x61\x75\x65\x77\167\x61"], 10, 2)->cecaguuoecmccuse("\x63\165\x73\164\x6f\155\x2d\164\x61\x62\x6c\x65\55\x73\145\x74\55\x73\143\162\x65\145\156\55\x6f\x70\x74\151\x6f\x6e", [$this, "\x73\x69\161\x6b\x73\x61\145\x6b\x67\147\x6d\x71\145\x69\x63\163"], 10, 3);
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
        return $pagenow === "\x61\144\x6d\x69\156\x2e\x70\150\x70" && ManipulateServer::get("\160\141\147\145") === $this->aqcogscycyycgkuq();
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
        iyyaiuccouqowyga:
        if (!$this->swsoqemyygecmsao()) {
            goto iwcmgioeaiyuacwi;
        }
        goto ikqagqacuwcgwmqy;
        gcogomgmqcgkeceg:
        $this->mqyuagguukgcoeka();
        goto cksomiiqscosigke;
        cksomiiqscosigke:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\x66\164\145\162\x5f\151\x6e\151\x74\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}"), $this);
        goto ugmukcwgcioqgywy;
        ikqagqacuwcgwmqy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\x65\146\157\x72\145\137\x69\x6e\x69\164\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}"), $this);
        goto gcogomgmqcgkeceg;
        kisccmsaieigisiu:
    }
    
    public function yoqiwysegascakim()
    {
        return $this->imkyoqyocosuqasu("\x63\157\x6c\165\x6d\156\163", []);
    }
    
    public function syskqukmqoycyswc()
    {
        return $this->imkyoqyocosuqasu("\161\165\x65\162\x69\x65\x73", []);
    }
    
    public function gueasuouwqysmomu()
    {
        return $this->imkyoqyocosuqasu("\164\x79\160\145", "\x63\x75\x73\x74\157\x6d");
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
        return $this->ekwwgogmwykqggyi(admin_url("\141\144\x6d\x69\156\x2e\160\x68\x70\77\x70\x61\147\145\75" . $this->aqcogscycyycgkuq()));
    }
    
    public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string
    {
        goto mwwygasiagaqsimo;
        wucacaegysmiusai:
        if (!$uoomaookgsyciacm) {
            goto euoscysqgugsqewc;
        }
        goto eeomcmuiqwgwwuqk;
        eeomcmuiqwgwwuqk:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm);
        goto mseokuecmeoyoggk;
        mseokuecmeoyoggk:
        euoscysqgugsqewc:
        goto uookseqsmsqgweuy;
        uookseqsmsqgweuy:
        return $iwywmkygwewiamwm;
        goto yeaqsiqgakskoykg;
        mwwygasiagaqsimo:
        $uoomaookgsyciacm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x72\x6d\x5f\x76\151\x65\x77\x5f\x6c\151\156\153\137\x71\x75\145\x72\151\145\163"), [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm);
        goto wucacaegysmiusai;
        yeaqsiqgakskoykg:
    }
    
    public function aqcogscycyycgkuq()
    {
        return $this->imkyoqyocosuqasu("\155\x65\x6e\165\137\163\154\x75\147");
    }
    public function euqgwiscwgqkqkec()
    {
        goto eceeoiwuagocweus;
        qykcggwgkweasuii:
        if ($wgaiuiysuegayseo) {
            goto esgyqksmcukeuwyk;
        }
        goto geoiegikocwmwosi;
        eceeoiwuagocweus:
        $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\163\150\x6f\167\137\x69\x6e\x5f\155\145\x6e\x75");
        goto aeockieewgkequae;
        ukmgwuiqwgyiouec:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\x70\141\x72\145\x6e\x74\x5f\163\154\x75\x67");
        goto qykcggwgkweasuii;
        eqsuaywswuesuika:
        esgyqksmcukeuwyk:
        goto okawiaowosqickgq;
        sukcyismwageqgok:
        $eogowigeyucaauig = $this->imkyoqyocosuqasu("\143\x61\x70\141\x62\151\x6c\x69\x74\171");
        goto ukmgwuiqwgyiouec;
        oysyuiqmsokoykaq:
        if (!$cyiwaggmwimigmcc) {
            goto ycaqooeeseougumo;
        }
        goto misiasooemyskoay;
        ksqmcugkcmsooeaw:
        $kuuiuigeacouwmaa = $this->imkyoqyocosuqasu("\x70\x6f\x73\x69\x74\x69\157\156");
        goto sukcyismwageqgok;
        aeockieewgkequae:
        $ekiuyucoiagmscgy = [$this, "\x72\x65\x6e\144\x65\162"];
        goto omqyuuomwywmqeiq;
        cqkyumayoemqsueu:
        $meqocwsecsywiiqs = $this->imkyoqyocosuqasu("\160\x61\x67\145\137\164\x69\x74\x6c\145");
        goto ksqmcugkcmsooeaw;
        omqyuuomwywmqeiq:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\162\x6d\137\166\x69\x65\x77\137\x61\x64\144\x5f\x6d\145\x6e\x75\x5f{$this->gueasuouwqysmomu()}"), $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $this->mgogaykgkoogasim());
        goto oysyuiqmsokoykaq;
        wasuquysysmqyegg:
        goto iigmgswcogqemgao;
        goto eqsuaywswuesuika;
        misiasooemyskoay:
        $aaokuekaimigoyue = $this->aqcogscycyycgkuq();
        goto eomqeimoequmagum;
        meiqywmwuoogckss:
        ycaqooeeseougumo:
        goto oyeygeykqwcqoeic;
        eomqeimoequmagum:
        $ewuukoycimkekouc = $this->imkyoqyocosuqasu("\155\145\x6e\x75\137\x74\x69\x74\154\x65");
        goto cqkyumayoemqsueu;
        okawiaowosqickgq:
        ManipulateMenu::wessoumqogciwogg($wgaiuiysuegayseo, $meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $kuuiuigeacouwmaa);
        goto ogciikaecauiwgyk;
        ogciikaecauiwgyk:
        iigmgswcogqemgao:
        goto meiqywmwuoogckss;
        geoiegikocwmwosi:
        ManipulateMenu::iyaokukyeukqokqe($meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $this->imkyoqyocosuqasu("\x6d\145\x6e\165\137\x69\x63\157\156"), $this->imkyoqyocosuqasu("\x6d\x65\x6e\165\x5f\160\x6f\x73\151\164\x69\157\x6e"));
        goto wasuquysysmqyegg;
        oyeygeykqwcqoeic:
    }
    public function render()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x72\145\156\x64\145\162\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
    }
    public function mqyuagguukgcoeka()
    {
    }
    
    public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool
    {
        $aaokuekaimigoyue = ManipulateArray::get(explode("\137\x70\x61\x67\x65\x5f", $gcgsqcoqciockquc->id), 1);
        return $aaokuekaimigoyue === $this->aqcogscycyycgkuq();
    }
    public function cykgqekykyocoqgo()
    {
        goto sosqgaswegsomgkw;
        qiiqceousoicgeee:
        check_admin_referer("\163\x63\162\145\145\x6e\55\157\160\164\x69\157\x6e\x73\55\156\157\156\x63\145", "\x73\x63\162\x65\x65\x6e\x6f\160\164\151\x6f\x6e\x6e\157\156\x63\x65");
        goto iaywwgssaoecwmeg;
        sigukociqouigous:
        wp_safe_redirect($eeamcawaiqocomwy);
        goto yagscaikmmuagqcu;
        iyawqekeeawqkymm:
        isaacywgkascmcsw:
        goto iumgcesksuawyuyo;
        jyekikocgagcgywq:
        $omkysikckkcieckq = $qiouiwasaauyaaue["\x6f\x70\164\151\x6f\x6e"];
        goto qoiyiuoyamwimusy;
        eiegguecasykwmyq:
        if (!$qiouiwasaauyaaue) {
            goto ogwwasqkaageiwwi;
        }
        goto qiiqceousoicgeee;
        qwosyqcomiosguoa:
        iicaisyekagswmey:
        goto qaqooueskgciuqgc;
        qaqooueskgciuqgc:
        ogwwasqkaageiwwi:
        goto omyquyiguuaociwq;
        oeogyayooiwqcmia:
        if (!($omkysikckkcieckq == sanitize_key($omkysikckkcieckq))) {
            goto quiguyyimiqeqcwa;
        }
        goto uowiiyqmiaaaaoas;
        uowiiyqmiaaaaoas:
        $omkysikckkcieckq = str_replace("\55", "\137", $omkysikckkcieckq);
        goto vokekoceocuskqsm;
        sosqgaswegsomgkw:
        $qiouiwasaauyaaue = ManipulateServer::ayueggmoqeeukqmq("\x77\160\x5f\x73\x63\x72\145\x65\156\x5f\x6f\x70\x74\151\x6f\156\163", []);
        goto eiegguecasykwmyq;
        iumgcesksuawyuyo:
        quiguyyimiqeqcwa:
        goto qwosyqcomiosguoa;
        iaywwgssaoecwmeg:
        $mkucggyaiaukqoce = ManipulateUser::get();
        goto maeueeueqoywkiom;
        qaycycmeqkqcumog:
        $eeamcawaiqocomwy = DecoratorQuery::yqymaqmqiqmmmsoo(["\155\157\144\145" => $wmekckkyoiyickmk], $eeamcawaiqocomwy);
        goto ikuwigsmisimaqoc;
        kusuakkwcuqkcqaw:
        $eeamcawaiqocomwy = DecoratorQuery::oiamiqcuyksmmomm(["\x70\x61\x67\145\156\165\155", "\141\160\x61\147\145", "\160\x61\x67\145\144"], wp_get_referer());
        goto sikckcmeiwmyakeu;
        sikckcmeiwmyakeu:
        if (!($wmekckkyoiyickmk = ManipulateServer::ayueggmoqeeukqmq("\155\157\144\x65"))) {
            goto eomcuogskessyicy;
        }
        goto qaycycmeqkqcumog;
        maeueeueqoywkiom:
        if (!$mkucggyaiaukqoce) {
            goto iicaisyekagswmey;
        }
        goto jyekikocgagcgywq;
        sckyiekoceuisqyq:
        DecoratorUser::ksmqawcowkmegigw($omkysikckkcieckq, $eqgoocgaqwqcimie, $mkucggyaiaukqoce);
        goto kusuakkwcuqkcqaw;
        ikuwigsmisimaqoc:
        eomcuogskessyicy:
        goto sigukociqouigous;
        ooykyoowougqkaso:
        if (!$eqgoocgaqwqcimie) {
            goto isaacywgkascmcsw;
        }
        goto sckyiekoceuisqyq;
        vokekoceocuskqsm:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x65\x74\55\x73\x63\162\145\x65\x6e\x2d\x6f\x70\164\x69\157\x6e", ORM::class), false, $omkysikckkcieckq, $eqgoocgaqwqcimie);
        goto ooykyoowougqkaso;
        qoiyiuoyamwimusy:
        $eqgoocgaqwqcimie = $qiouiwasaauyaaue["\166\141\x6c\x75\x65"];
        goto oeogyayooiwqcmia;
        yagscaikmmuagqcu:
        exit;
        goto iyawqekeeawqkymm;
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
        oqckuigyqswmqcqg:
        aqwoykqaquewcaki:
        goto owismwmeqcmukagu;
        iuwccksomkkouogy:
        ob_start();
        goto cceggewquoaemcwq;
        owismwmeqcmukagu:
        return $qeqooyuoiasweuck;
        goto oiywguooqeasueqq;
        cceggewquoaemcwq:
        $this->kkooswakmamasmyg($qeqooyuoiasweuck, $gcgsqcoqciockquc);
        goto ioiwoukauoeamuca;
        mesesokuoomcioom:
        
        if (!$this->mmukyoaoamekoswk($gcgsqcoqciockquc)) {
            goto aqwoykqaquewcaki;
        }
        goto iuwccksomkkouogy;
        ioiwoukauoeamuca:
        $qeqooyuoiasweuck .= ob_get_clean();
        goto oqckuigyqswmqcqg;
        oiywguooqeasueqq:
    }
    
    public function siqksaekggmqeics($wsayskqwkoauuyks, $omkysikckkcieckq, $eqgoocgaqwqcimie)
    {
        return $wsayskqwkoauuyks;
    }
    
    public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string
    {
        return ManipulateHTML::smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\x63\x6c\141\x73\x73" => "\x69\143\157\156\55\154\x67"], true);
    }
}
