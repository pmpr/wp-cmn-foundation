<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        gimquiiwucueoqkw:
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        goto eimouyomcoqkmaae;
        mwqcykaeywsmoumm:
        parent::__construct();
        goto awgmyaycugswmwae;
        eimouyomcoqkmaae:
        $this->name = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        goto kkwqmoeeqygoimwg;
        kkwqmoeeqygoimwg:
        $this->args = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\x79\160\145" => "\143\165\163\164\x6f\x6d", "\x6d\145\x6e\165\137\x73\154\165\x67" => $yyksucsgisomecgg->aakmagwggmkoiiyu(), "\155\x65\156\x75\137\151\x63\157\x6e" => '', "\x70\x61\x67\x65\137\164\x69\164\x6c\x65" => '', "\143\141\x70\x61\142\x69\x6c\151\x74\x79" => "\155\141\x6e\x61\147\145\x5f\x6f\x70\x74\x69\157\x6e\x73", "\155\145\x6e\165\x5f\x74\x69\164\154\x65" => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\160\141\162\145\156\164\x5f\163\x6c\x75\x67" => $yyksucsgisomecgg->egockcwgmeocqeqc(), "\x73\x68\157\x77\x5f\151\156\x5f\155\145\x6e\x75" => true, "\155\x65\x6e\x75\x5f\x70\157\x73\x69\x74\151\157\x6e" => null]);
        goto mwqcykaeywsmoumm;
        awgmyaycugswmwae:
    }
    public function wigskegsqequoeks()
    {
        goto ywoyioqqyuocoygk;
        ywoyioqqyuocoygk:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\x70\141\x72\145\156\x74\137\x73\x6c\x75\147");
        goto iauwkeeaqsgweeoo;
        aycqgowuwagcgque:
        parent::wigskegsqequoeks();
        goto icuukwkwqeoogyae;
        iauwkeeaqsgweeoo:
        $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x69\156\151\164"])->qcsmikeggeemccuu("\x61\144\155\151\x6e\x5f\x69\x6e\x69\164", [$this, "\171\x65\x79\x69\x67\x75\x79\x65\x67\x6d\x6d\x79\x75\163\x65\x61"])->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\155\x65\x6e\x75", [$this, "\145\x75\161\x67\167\151\x73\143\x77\147\x71\x6b\x71\x6b\145\143"], $wgaiuiysuegayseo ? 11 : 12);
        goto aycqgowuwagcgque;
        icuukwkwqeoogyae:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\141\144\x6d\151\156\137\151\x6e\151\164", [$this, "\143\171\153\147\x71\145\153\x79\x6b\171\x6f\143\x6f\x71\147\157"], 11)->cecaguuoecmccuse("\x73\143\162\145\x65\x6e\x5f\x73\145\x74\x74\x69\156\147\163", [$this, "\151\x69\x75\x73\163\x6b\x69\143\x63\x73\167\x79\x6f\x63\171\x67"], 10, 2)->cecaguuoecmccuse("\x73\x63\x72\145\145\156\137\x6f\x70\x74\x69\x6f\x6e\163\x5f\x73\x68\157\167\137\x73\x63\x72\x65\x65\x6e", [$this, "\153\x75\x79\x6f\x63\x79\171\x65\165\155\x61\x75\145\167\167\x61"], 10, 2)->cecaguuoecmccuse("\143\165\163\164\157\x6d\x2d\164\x61\x62\x6c\145\x2d\x73\x65\164\55\163\x63\x72\145\x65\156\55\x6f\x70\x74\x69\x6f\x6e", [$this, "\163\151\x71\x6b\x73\x61\x65\153\x67\147\155\161\145\151\143\x73"], 10, 3);
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
        return $pagenow === "\x61\x64\155\x69\156\x2e\160\150\x70" && ManipulateServer::get("\160\x61\147\x65") === $this->aqcogscycyycgkuq();
    }
    
    public function swsoqemyygecmsao() : bool
    {
        return $this->qcsgmgoukiouuscw() && $this->oyeskqayoscwciem()->uwaascqoguwkwiaw();
    }
    public function yeyiguyegmmyusea()
    {
        goto iyyaiuccouqowyga;
        iyyaiuccouqowyga:
        if (!$this->swsoqemyygecmsao()) {
            goto iwcmgioeaiyuacwi;
        }
        goto ikqagqacuwcgwmqy;
        cksomiiqscosigke:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\146\164\x65\162\x5f\151\x6e\x69\x74\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
        goto ugmukcwgcioqgywy;
        ugmukcwgcioqgywy:
        iwcmgioeaiyuacwi:
        goto kisccmsaieigisiu;
        gcogomgmqcgkeceg:
        $this->mqyuagguukgcoeka();
        goto cksomiiqscosigke;
        ikqagqacuwcgwmqy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x62\x65\x66\x6f\162\145\137\x69\156\x69\164\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}"), $this);
        goto gcogomgmqcgkeceg;
        kisccmsaieigisiu:
    }
    
    public function yoqiwysegascakim()
    {
        return $this->imkyoqyocosuqasu("\x63\157\x6c\165\155\156\163", []);
    }
    
    public function syskqukmqoycyswc()
    {
        return $this->imkyoqyocosuqasu("\161\165\x65\x72\x69\x65\x73", []);
    }
    
    public function gueasuouwqysmomu()
    {
        return $this->imkyoqyocosuqasu("\164\171\160\145", "\143\165\x73\164\x6f\155");
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
        return $this->ekwwgogmwykqggyi(admin_url("\x61\144\x6d\x69\x6e\x2e\160\150\x70\x3f\160\x61\147\x65\x3d" . $this->aqcogscycyycgkuq()));
    }
    
    public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string
    {
        goto mwwygasiagaqsimo;
        mwwygasiagaqsimo:
        $uoomaookgsyciacm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\162\155\137\x76\151\x65\167\x5f\x6c\x69\156\153\x5f\161\165\145\x72\151\145\x73"), [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm);
        goto wucacaegysmiusai;
        eeomcmuiqwgwwuqk:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm);
        goto mseokuecmeoyoggk;
        wucacaegysmiusai:
        if (!$uoomaookgsyciacm) {
            goto euoscysqgugsqewc;
        }
        goto eeomcmuiqwgwwuqk;
        uookseqsmsqgweuy:
        return $iwywmkygwewiamwm;
        goto yeaqsiqgakskoykg;
        mseokuecmeoyoggk:
        euoscysqgugsqewc:
        goto uookseqsmsqgweuy;
        yeaqsiqgakskoykg:
    }
    
    public function aqcogscycyycgkuq()
    {
        return $this->imkyoqyocosuqasu("\x6d\x65\x6e\x75\137\163\x6c\165\147");
    }
    public function euqgwiscwgqkqkec()
    {
        goto eceeoiwuagocweus;
        eqsuaywswuesuika:
        esgyqksmcukeuwyk:
        goto okawiaowosqickgq;
        misiasooemyskoay:
        $aaokuekaimigoyue = $this->aqcogscycyycgkuq();
        goto eomqeimoequmagum;
        okawiaowosqickgq:
        ManipulateMenu::wessoumqogciwogg($wgaiuiysuegayseo, $meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $kuuiuigeacouwmaa);
        goto ogciikaecauiwgyk;
        cqkyumayoemqsueu:
        $meqocwsecsywiiqs = $this->imkyoqyocosuqasu("\160\141\x67\145\x5f\x74\x69\x74\154\x65");
        goto ksqmcugkcmsooeaw;
        wasuquysysmqyegg:
        goto iigmgswcogqemgao;
        goto eqsuaywswuesuika;
        geoiegikocwmwosi:
        ManipulateMenu::iyaokukyeukqokqe($meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $this->imkyoqyocosuqasu("\x6d\x65\x6e\x75\137\x69\143\157\156"), $this->imkyoqyocosuqasu("\x6d\x65\156\165\x5f\160\157\x73\151\x74\x69\x6f\x6e"));
        goto wasuquysysmqyegg;
        oysyuiqmsokoykaq:
        if (!$cyiwaggmwimigmcc) {
            goto ycaqooeeseougumo;
        }
        goto misiasooemyskoay;
        aeockieewgkequae:
        $ekiuyucoiagmscgy = [$this, "\162\145\156\144\x65\162"];
        goto omqyuuomwywmqeiq;
        omqyuuomwywmqeiq:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\157\162\x6d\x5f\166\x69\x65\x77\x5f\141\144\x64\137\155\x65\156\165\x5f{$this->gueasuouwqysmomu()}"), $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $this->mgogaykgkoogasim());
        goto oysyuiqmsokoykaq;
        eceeoiwuagocweus:
        $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\163\150\x6f\x77\x5f\x69\x6e\x5f\155\145\156\165");
        goto aeockieewgkequae;
        meiqywmwuoogckss:
        ycaqooeeseougumo:
        goto oyeygeykqwcqoeic;
        sukcyismwageqgok:
        $eogowigeyucaauig = $this->imkyoqyocosuqasu("\x63\x61\x70\141\x62\x69\154\151\164\x79");
        goto ukmgwuiqwgyiouec;
        qykcggwgkweasuii:
        if ($wgaiuiysuegayseo) {
            goto esgyqksmcukeuwyk;
        }
        goto geoiegikocwmwosi;
        eomqeimoequmagum:
        $ewuukoycimkekouc = $this->imkyoqyocosuqasu("\x6d\145\x6e\165\x5f\x74\151\164\154\x65");
        goto cqkyumayoemqsueu;
        ksqmcugkcmsooeaw:
        $kuuiuigeacouwmaa = $this->imkyoqyocosuqasu("\160\x6f\x73\151\x74\x69\157\156");
        goto sukcyismwageqgok;
        ukmgwuiqwgyiouec:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\x70\x61\162\x65\x6e\x74\137\163\x6c\165\x67");
        goto qykcggwgkweasuii;
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
        $aaokuekaimigoyue = ManipulateArray::get(explode("\x5f\x70\x61\147\x65\x5f", $gcgsqcoqciockquc->id), 1);
        return $aaokuekaimigoyue === $this->aqcogscycyycgkuq();
    }
    public function cykgqekykyocoqgo()
    {
        goto sosqgaswegsomgkw;
        eiegguecasykwmyq:
        if (!$qiouiwasaauyaaue) {
            goto ogwwasqkaageiwwi;
        }
        goto qiiqceousoicgeee;
        qwosyqcomiosguoa:
        iicaisyekagswmey:
        goto qaqooueskgciuqgc;
        sigukociqouigous:
        wp_safe_redirect($eeamcawaiqocomwy);
        goto yagscaikmmuagqcu;
        maeueeueqoywkiom:
        if (!$mkucggyaiaukqoce) {
            goto iicaisyekagswmey;
        }
        goto jyekikocgagcgywq;
        jyekikocgagcgywq:
        $omkysikckkcieckq = $qiouiwasaauyaaue["\x6f\160\164\x69\x6f\156"];
        goto qoiyiuoyamwimusy;
        oeogyayooiwqcmia:
        if (!($omkysikckkcieckq == sanitize_key($omkysikckkcieckq))) {
            goto quiguyyimiqeqcwa;
        }
        goto uowiiyqmiaaaaoas;
        qaqooueskgciuqgc:
        ogwwasqkaageiwwi:
        goto omyquyiguuaociwq;
        kusuakkwcuqkcqaw:
        $eeamcawaiqocomwy = DecoratorQuery::oiamiqcuyksmmomm(["\x70\x61\147\x65\156\x75\x6d", "\x61\160\141\x67\x65", "\160\x61\x67\x65\144"], wp_get_referer());
        goto sikckcmeiwmyakeu;
        sosqgaswegsomgkw:
        $qiouiwasaauyaaue = ManipulateServer::ayueggmoqeeukqmq("\x77\x70\137\x73\143\x72\145\x65\156\x5f\x6f\x70\x74\151\x6f\x6e\x73", []);
        goto eiegguecasykwmyq;
        yagscaikmmuagqcu:
        exit;
        goto iyawqekeeawqkymm;
        iyawqekeeawqkymm:
        isaacywgkascmcsw:
        goto iumgcesksuawyuyo;
        qiiqceousoicgeee:
        check_admin_referer("\163\x63\162\145\145\156\55\x6f\x70\x74\151\x6f\156\163\x2d\x6e\157\x6e\143\x65", "\x73\x63\162\x65\145\156\x6f\x70\164\x69\157\x6e\x6e\157\156\143\x65");
        goto iaywwgssaoecwmeg;
        ikuwigsmisimaqoc:
        eomcuogskessyicy:
        goto sigukociqouigous;
        qoiyiuoyamwimusy:
        $eqgoocgaqwqcimie = $qiouiwasaauyaaue["\166\x61\x6c\165\145"];
        goto oeogyayooiwqcmia;
        iaywwgssaoecwmeg:
        $mkucggyaiaukqoce = ManipulateUser::get();
        goto maeueeueqoywkiom;
        ooykyoowougqkaso:
        if (!$eqgoocgaqwqcimie) {
            goto isaacywgkascmcsw;
        }
        goto sckyiekoceuisqyq;
        iumgcesksuawyuyo:
        quiguyyimiqeqcwa:
        goto qwosyqcomiosguoa;
        sckyiekoceuisqyq:
        DecoratorUser::ksmqawcowkmegigw($omkysikckkcieckq, $eqgoocgaqwqcimie, $mkucggyaiaukqoce);
        goto kusuakkwcuqkcqaw;
        uowiiyqmiaaaaoas:
        $omkysikckkcieckq = str_replace("\x2d", "\137", $omkysikckkcieckq);
        goto vokekoceocuskqsm;
        vokekoceocuskqsm:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x65\x74\55\163\143\x72\x65\145\x6e\55\x6f\160\x74\151\x6f\x6e", ORM::class), false, $omkysikckkcieckq, $eqgoocgaqwqcimie);
        goto ooykyoowougqkaso;
        qaycycmeqkqcumog:
        $eeamcawaiqocomwy = DecoratorQuery::yqymaqmqiqmmmsoo(["\155\x6f\144\x65" => $wmekckkyoiyickmk], $eeamcawaiqocomwy);
        goto ikuwigsmisimaqoc;
        sikckcmeiwmyakeu:
        if (!($wmekckkyoiyickmk = ManipulateServer::ayueggmoqeeukqmq("\155\x6f\144\x65"))) {
            goto eomcuogskessyicy;
        }
        goto qaycycmeqkqcumog;
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
        ioiwoukauoeamuca:
        $qeqooyuoiasweuck .= ob_get_clean();
        goto oqckuigyqswmqcqg;
        mesesokuoomcioom:
        
        if (!$this->mmukyoaoamekoswk($gcgsqcoqciockquc)) {
            goto aqwoykqaquewcaki;
        }
        goto iuwccksomkkouogy;
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
        oiywguooqeasueqq:
    }
    
    public function siqksaekggmqeics($wsayskqwkoauuyks, $omkysikckkcieckq, $eqgoocgaqwqcimie)
    {
        return $wsayskqwkoauuyks;
    }
    
    public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string
    {
        return ManipulateHTML::smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\143\x6c\141\163\163" => "\x69\x63\x6f\x6e\x2d\154\x67"], true);
    }
}
