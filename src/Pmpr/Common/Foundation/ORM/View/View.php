<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        kkwqmoeeqygoimwg:
        $this->args = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\171\160\x65" => "\x63\x75\163\x74\x6f\x6d", "\x6d\x65\x6e\x75\137\163\154\165\147" => $yyksucsgisomecgg->aakmagwggmkoiiyu(), "\x6d\x65\156\165\137\151\143\x6f\x6e" => '', "\160\141\x67\x65\137\164\151\164\x6c\145" => '', "\x63\x61\160\141\x62\x69\154\151\x74\171" => "\x6d\x61\x6e\x61\x67\145\x5f\x6f\x70\164\151\x6f\156\163", "\155\x65\156\x75\137\x74\x69\164\x6c\145" => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\160\x61\x72\145\x6e\164\137\163\154\165\x67" => $yyksucsgisomecgg->egockcwgmeocqeqc(), "\163\150\157\x77\137\151\156\x5f\155\x65\156\x75" => true, "\x6d\145\156\165\137\160\157\163\151\x74\151\x6f\x6e" => null]);
        goto mwqcykaeywsmoumm;
        eimouyomcoqkmaae:
        $this->name = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        goto kkwqmoeeqygoimwg;
        gimquiiwucueoqkw:
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        goto eimouyomcoqkmaae;
        ggoimgeeuugseiwk:
        $this->model = $meywaqqsugaoeyys;
        goto gimquiiwucueoqkw;
        mwqcykaeywsmoumm:
        parent::__construct();
        goto awgmyaycugswmwae;
        awgmyaycugswmwae:
    }
    public function wigskegsqequoeks()
    {
        goto ywoyioqqyuocoygk;
        ywoyioqqyuocoygk:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\x61\x72\x65\x6e\164\137\x73\x6c\x75\147");
        goto iauwkeeaqsgweeoo;
        iauwkeeaqsgweeoo:
        $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\151\156\151\x74"])->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\x69\x6e\151\164", [$this, "\x79\x65\x79\151\147\165\x79\145\x67\155\x6d\x79\165\163\x65\x61"])->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\x5f\155\145\156\165", [$this, "\x65\x75\161\147\167\x69\163\x63\167\147\161\153\161\153\x65\143"], $wgaiuiysuegayseo ? 11 : 12);
        goto aycqgowuwagcgque;
        aycqgowuwagcgque:
        parent::wigskegsqequoeks();
        goto icuukwkwqeoogyae;
        icuukwkwqeoogyae:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\141\144\155\151\x6e\x5f\x69\156\x69\x74", [$this, "\143\171\153\x67\161\145\153\171\153\x79\x6f\x63\157\x71\x67\x6f"], 11)->cecaguuoecmccuse("\163\x63\x72\x65\x65\x6e\x5f\163\145\164\x74\151\x6e\x67\x73", [$this, "\x69\x69\x75\163\163\153\x69\143\x63\163\x77\x79\157\143\171\x67"], 10, 2)->cecaguuoecmccuse("\163\x63\x72\145\145\156\137\x6f\x70\x74\151\157\156\x73\137\163\x68\157\167\x5f\x73\x63\x72\x65\x65\x6e", [$this, "\x6b\x75\171\157\143\x79\171\145\x75\155\141\x75\145\167\167\x61"], 10, 2)->cecaguuoecmccuse("\x63\165\163\x74\157\x6d\x2d\164\x61\142\154\x65\55\163\x65\x74\x2d\x73\143\162\145\x65\x6e\x2d\x6f\160\164\x69\157\156", [$this, "\163\x69\x71\x6b\x73\x61\145\153\x67\147\x6d\x71\145\151\143\x73"], 10, 3);
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
        return $pagenow === "\141\144\155\151\156\x2e\160\150\160" && ManipulateServer::get("\x70\141\147\x65") === $this->aqcogscycyycgkuq();
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
        cksomiiqscosigke:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\146\x74\x65\x72\x5f\151\156\x69\x74\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
        goto ugmukcwgcioqgywy;
        ikqagqacuwcgwmqy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x62\x65\x66\157\162\145\137\151\x6e\x69\x74\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}"), $this);
        goto gcogomgmqcgkeceg;
        kisccmsaieigisiu:
    }
    
    public function yoqiwysegascakim()
    {
        return $this->imkyoqyocosuqasu("\x63\157\x6c\x75\155\156\x73", []);
    }
    
    public function syskqukmqoycyswc()
    {
        return $this->imkyoqyocosuqasu("\161\165\x65\x72\151\145\163", []);
    }
    
    public function gueasuouwqysmomu()
    {
        return $this->imkyoqyocosuqasu("\x74\x79\160\x65", "\x63\x75\x73\164\157\x6d");
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
        return $this->ekwwgogmwykqggyi(admin_url("\x61\144\155\x69\156\x2e\x70\150\160\77\x70\x61\x67\x65\75" . $this->aqcogscycyycgkuq()));
    }
    
    public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string
    {
        goto mwwygasiagaqsimo;
        mseokuecmeoyoggk:
        euoscysqgugsqewc:
        goto uookseqsmsqgweuy;
        eeomcmuiqwgwwuqk:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm);
        goto mseokuecmeoyoggk;
        uookseqsmsqgweuy:
        return $iwywmkygwewiamwm;
        goto yeaqsiqgakskoykg;
        wucacaegysmiusai:
        if (!$uoomaookgsyciacm) {
            goto euoscysqgugsqewc;
        }
        goto eeomcmuiqwgwwuqk;
        mwwygasiagaqsimo:
        $uoomaookgsyciacm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\162\x6d\137\166\151\145\x77\137\x6c\x69\x6e\x6b\137\x71\165\x65\162\x69\x65\163"), [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm);
        goto wucacaegysmiusai;
        yeaqsiqgakskoykg:
    }
    
    public function aqcogscycyycgkuq()
    {
        return $this->imkyoqyocosuqasu("\x6d\x65\x6e\x75\137\163\154\165\x67");
    }
    public function euqgwiscwgqkqkec()
    {
        goto eceeoiwuagocweus;
        meiqywmwuoogckss:
        ycaqooeeseougumo:
        goto oyeygeykqwcqoeic;
        aeockieewgkequae:
        $ekiuyucoiagmscgy = [$this, "\x72\145\x6e\x64\x65\162"];
        goto omqyuuomwywmqeiq;
        qykcggwgkweasuii:
        if ($wgaiuiysuegayseo) {
            goto esgyqksmcukeuwyk;
        }
        goto geoiegikocwmwosi;
        omqyuuomwywmqeiq:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\x72\155\x5f\x76\151\x65\x77\x5f\x61\144\x64\137\155\145\156\165\x5f{$this->gueasuouwqysmomu()}"), $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $this->mgogaykgkoogasim());
        goto oysyuiqmsokoykaq;
        cqkyumayoemqsueu:
        $meqocwsecsywiiqs = $this->imkyoqyocosuqasu("\x70\141\147\x65\137\x74\151\x74\154\145");
        goto ksqmcugkcmsooeaw;
        geoiegikocwmwosi:
        ManipulateMenu::iyaokukyeukqokqe($meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $this->imkyoqyocosuqasu("\155\x65\x6e\165\x5f\x69\143\157\156"), $this->imkyoqyocosuqasu("\155\145\156\x75\x5f\160\x6f\163\x69\x74\151\x6f\156"));
        goto wasuquysysmqyegg;
        ksqmcugkcmsooeaw:
        $kuuiuigeacouwmaa = $this->imkyoqyocosuqasu("\160\157\x73\151\164\x69\157\156");
        goto sukcyismwageqgok;
        eomqeimoequmagum:
        $ewuukoycimkekouc = $this->imkyoqyocosuqasu("\155\145\156\x75\x5f\x74\151\164\154\x65");
        goto cqkyumayoemqsueu;
        misiasooemyskoay:
        $aaokuekaimigoyue = $this->aqcogscycyycgkuq();
        goto eomqeimoequmagum;
        sukcyismwageqgok:
        $eogowigeyucaauig = $this->imkyoqyocosuqasu("\143\x61\x70\x61\142\x69\x6c\x69\x74\x79");
        goto ukmgwuiqwgyiouec;
        oysyuiqmsokoykaq:
        if (!$cyiwaggmwimigmcc) {
            goto ycaqooeeseougumo;
        }
        goto misiasooemyskoay;
        wasuquysysmqyegg:
        goto iigmgswcogqemgao;
        goto eqsuaywswuesuika;
        ogciikaecauiwgyk:
        iigmgswcogqemgao:
        goto meiqywmwuoogckss;
        ukmgwuiqwgyiouec:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\x70\x61\162\x65\156\164\x5f\163\154\x75\x67");
        goto qykcggwgkweasuii;
        eqsuaywswuesuika:
        esgyqksmcukeuwyk:
        goto okawiaowosqickgq;
        eceeoiwuagocweus:
        $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\x73\x68\x6f\x77\x5f\x69\156\137\x6d\x65\156\x75");
        goto aeockieewgkequae;
        okawiaowosqickgq:
        ManipulateMenu::wessoumqogciwogg($wgaiuiysuegayseo, $meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $kuuiuigeacouwmaa);
        goto ogciikaecauiwgyk;
        oyeygeykqwcqoeic:
    }
    public function render()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\162\145\156\144\145\x72\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
    }
    public function mqyuagguukgcoeka()
    {
    }
    
    public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool
    {
        $aaokuekaimigoyue = ManipulateArray::get(explode("\x5f\160\141\147\145\137", $gcgsqcoqciockquc->id), 1);
        return $aaokuekaimigoyue === $this->aqcogscycyycgkuq();
    }
    public function cykgqekykyocoqgo()
    {
        goto sosqgaswegsomgkw;
        qwosyqcomiosguoa:
        iicaisyekagswmey:
        goto qaqooueskgciuqgc;
        vokekoceocuskqsm:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\145\164\x2d\x73\143\162\145\145\x6e\55\x6f\x70\x74\151\157\x6e", ORM::class), false, $omkysikckkcieckq, $eqgoocgaqwqcimie);
        goto ooykyoowougqkaso;
        iaywwgssaoecwmeg:
        $mkucggyaiaukqoce = ManipulateUser::get();
        goto maeueeueqoywkiom;
        kusuakkwcuqkcqaw:
        $eeamcawaiqocomwy = DecoratorQuery::oiamiqcuyksmmomm(["\x70\141\x67\x65\156\x75\155", "\x61\x70\x61\147\145", "\160\x61\147\145\144"], wp_get_referer());
        goto sikckcmeiwmyakeu;
        sigukociqouigous:
        wp_safe_redirect($eeamcawaiqocomwy);
        goto yagscaikmmuagqcu;
        uowiiyqmiaaaaoas:
        $omkysikckkcieckq = str_replace("\55", "\x5f", $omkysikckkcieckq);
        goto vokekoceocuskqsm;
        yagscaikmmuagqcu:
        exit;
        goto iyawqekeeawqkymm;
        qiiqceousoicgeee:
        check_admin_referer("\x73\143\x72\145\145\156\55\x6f\x70\164\151\157\x6e\163\x2d\x6e\157\156\x63\x65", "\163\143\162\x65\145\156\x6f\160\x74\x69\157\156\x6e\157\x6e\x63\x65");
        goto iaywwgssaoecwmeg;
        qoiyiuoyamwimusy:
        $eqgoocgaqwqcimie = $qiouiwasaauyaaue["\166\141\154\x75\x65"];
        goto oeogyayooiwqcmia;
        qaycycmeqkqcumog:
        $eeamcawaiqocomwy = DecoratorQuery::yqymaqmqiqmmmsoo(["\x6d\x6f\x64\x65" => $wmekckkyoiyickmk], $eeamcawaiqocomwy);
        goto ikuwigsmisimaqoc;
        maeueeueqoywkiom:
        if (!$mkucggyaiaukqoce) {
            goto iicaisyekagswmey;
        }
        goto jyekikocgagcgywq;
        sckyiekoceuisqyq:
        DecoratorUser::ksmqawcowkmegigw($omkysikckkcieckq, $eqgoocgaqwqcimie, $mkucggyaiaukqoce);
        goto kusuakkwcuqkcqaw;
        sikckcmeiwmyakeu:
        if (!($wmekckkyoiyickmk = ManipulateServer::ayueggmoqeeukqmq("\155\157\144\x65"))) {
            goto eomcuogskessyicy;
        }
        goto qaycycmeqkqcumog;
        eiegguecasykwmyq:
        if (!$qiouiwasaauyaaue) {
            goto ogwwasqkaageiwwi;
        }
        goto qiiqceousoicgeee;
        sosqgaswegsomgkw:
        $qiouiwasaauyaaue = ManipulateServer::ayueggmoqeeukqmq("\167\x70\137\x73\143\x72\145\145\x6e\x5f\157\160\164\151\157\x6e\163", []);
        goto eiegguecasykwmyq;
        iumgcesksuawyuyo:
        quiguyyimiqeqcwa:
        goto qwosyqcomiosguoa;
        ooykyoowougqkaso:
        if (!$eqgoocgaqwqcimie) {
            goto isaacywgkascmcsw;
        }
        goto sckyiekoceuisqyq;
        oeogyayooiwqcmia:
        if (!($omkysikckkcieckq == sanitize_key($omkysikckkcieckq))) {
            goto quiguyyimiqeqcwa;
        }
        goto uowiiyqmiaaaaoas;
        iyawqekeeawqkymm:
        isaacywgkascmcsw:
        goto iumgcesksuawyuyo;
        ikuwigsmisimaqoc:
        eomcuogskessyicy:
        goto sigukociqouigous;
        jyekikocgagcgywq:
        $omkysikckkcieckq = $qiouiwasaauyaaue["\x6f\160\x74\151\157\x6e"];
        goto qoiyiuoyamwimusy;
        qaqooueskgciuqgc:
        ogwwasqkaageiwwi:
        goto omyquyiguuaociwq;
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
        cceggewquoaemcwq:
        $this->kkooswakmamasmyg($qeqooyuoiasweuck, $gcgsqcoqciockquc);
        goto ioiwoukauoeamuca;
        oqckuigyqswmqcqg:
        aqwoykqaquewcaki:
        goto owismwmeqcmukagu;
        iuwccksomkkouogy:
        ob_start();
        goto cceggewquoaemcwq;
        mesesokuoomcioom:
        
        if (!$this->mmukyoaoamekoswk($gcgsqcoqciockquc)) {
            goto aqwoykqaquewcaki;
        }
        goto iuwccksomkkouogy;
        ioiwoukauoeamuca:
        $qeqooyuoiasweuck .= ob_get_clean();
        goto oqckuigyqswmqcqg;
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
        return ManipulateHTML::smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\143\x6c\141\x73\x73" => "\151\x63\x6f\x6e\x2d\x6c\x67"], true);
    }
}
