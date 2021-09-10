<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        gimquiiwucueoqkw:
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        goto eimouyomcoqkmaae;
        ggoimgeeuugseiwk:
        $this->model = $meywaqqsugaoeyys;
        goto gimquiiwucueoqkw;
        mwqcykaeywsmoumm:
        parent::__construct();
        goto awgmyaycugswmwae;
        kkwqmoeeqygoimwg:
        $this->args = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\x79\160\x65" => "\x63\x75\163\164\157\x6d", "\x6d\x65\156\165\137\x73\154\165\x67" => $yyksucsgisomecgg->aakmagwggmkoiiyu(), "\155\x65\156\165\137\x69\143\157\156" => '', "\x70\141\x67\x65\x5f\x74\151\x74\154\x65" => '', "\143\x61\160\141\142\x69\154\151\x74\171" => "\x6d\141\156\141\x67\145\137\x6f\160\164\x69\x6f\156\163", "\x6d\x65\x6e\165\137\x74\151\x74\154\145" => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\x70\141\x72\145\156\x74\137\163\154\165\147" => $yyksucsgisomecgg->egockcwgmeocqeqc(), "\x73\150\157\167\x5f\151\x6e\137\155\145\156\x75" => true, "\155\x65\156\x75\x5f\160\157\163\151\x74\x69\x6f\156" => null]);
        goto mwqcykaeywsmoumm;
        eimouyomcoqkmaae:
        $this->name = $meywaqqsugaoeyys->miwqiiqeegeqcwis();
        goto kkwqmoeeqygoimwg;
        awgmyaycugswmwae:
    }
    public function wigskegsqequoeks()
    {
        goto ywoyioqqyuocoygk;
        aycqgowuwagcgque:
        parent::wigskegsqequoeks();
        goto icuukwkwqeoogyae;
        iauwkeeaqsgweeoo:
        $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\151\x6e\151\x74"])->qcsmikeggeemccuu("\141\144\155\151\156\x5f\x69\x6e\151\164", [$this, "\171\145\171\x69\147\x75\171\145\147\155\x6d\x79\165\163\x65\141"])->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\x6d\145\x6e\x75", [$this, "\145\x75\x71\147\x77\151\163\x63\x77\147\161\x6b\x71\153\x65\143"], $wgaiuiysuegayseo ? 11 : 12);
        goto aycqgowuwagcgque;
        ywoyioqqyuocoygk:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\141\162\x65\156\164\x5f\x73\154\165\147");
        goto iauwkeeaqsgweeoo;
        icuukwkwqeoogyae:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x61\144\x6d\151\156\137\151\x6e\151\164", [$this, "\143\x79\153\147\x71\145\x6b\171\153\171\x6f\x63\157\161\147\157"], 11)->cecaguuoecmccuse("\x73\x63\162\x65\x65\156\137\163\x65\164\x74\151\x6e\147\163", [$this, "\x69\x69\x75\163\163\153\151\143\143\163\167\x79\157\x63\x79\147"], 10, 2)->cecaguuoecmccuse("\x73\x63\162\x65\145\x6e\x5f\157\160\164\151\x6f\x6e\x73\137\163\x68\x6f\x77\137\163\143\162\145\145\156", [$this, "\153\165\x79\157\143\x79\x79\x65\165\155\141\x75\x65\167\167\141"], 10, 2)->cecaguuoecmccuse("\x63\x75\163\164\157\155\55\x74\x61\142\154\145\x2d\x73\x65\164\55\x73\x63\162\145\145\x6e\55\157\160\x74\x69\157\156", [$this, "\163\151\161\x6b\x73\x61\x65\153\x67\x67\155\161\145\x69\143\x73"], 10, 3);
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
        return $pagenow === "\x61\x64\x6d\x69\x6e\x2e\x70\150\x70" && ManipulateServer::get("\160\141\x67\145") === $this->aqcogscycyycgkuq();
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
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\x66\164\x65\x72\x5f\151\x6e\151\x74\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}"), $this);
        goto ugmukcwgcioqgywy;
        gcogomgmqcgkeceg:
        $this->mqyuagguukgcoeka();
        goto cksomiiqscosigke;
        ugmukcwgcioqgywy:
        iwcmgioeaiyuacwi:
        goto kisccmsaieigisiu;
        ikqagqacuwcgwmqy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x62\145\x66\x6f\162\145\137\x69\x6e\x69\x74\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
        goto gcogomgmqcgkeceg;
        kisccmsaieigisiu:
    }
    
    public function yoqiwysegascakim()
    {
        return $this->imkyoqyocosuqasu("\x63\157\154\x75\x6d\x6e\x73", []);
    }
    
    public function syskqukmqoycyswc()
    {
        return $this->imkyoqyocosuqasu("\161\165\145\162\151\x65\163", []);
    }
    
    public function gueasuouwqysmomu()
    {
        return $this->imkyoqyocosuqasu("\164\x79\x70\x65", "\143\165\163\164\157\155");
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
        return $this->ekwwgogmwykqggyi(admin_url("\x61\144\x6d\151\x6e\56\x70\150\x70\77\x70\141\x67\x65\75" . $this->aqcogscycyycgkuq()));
    }
    
    public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string
    {
        goto mwwygasiagaqsimo;
        mwwygasiagaqsimo:
        $uoomaookgsyciacm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\162\155\x5f\x76\x69\x65\167\x5f\154\x69\156\x6b\137\x71\165\145\162\x69\x65\x73"), [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm);
        goto wucacaegysmiusai;
        eeomcmuiqwgwwuqk:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm);
        goto mseokuecmeoyoggk;
        uookseqsmsqgweuy:
        return $iwywmkygwewiamwm;
        goto yeaqsiqgakskoykg;
        mseokuecmeoyoggk:
        euoscysqgugsqewc:
        goto uookseqsmsqgweuy;
        wucacaegysmiusai:
        if (!$uoomaookgsyciacm) {
            goto euoscysqgugsqewc;
        }
        goto eeomcmuiqwgwwuqk;
        yeaqsiqgakskoykg:
    }
    
    public function aqcogscycyycgkuq()
    {
        return $this->imkyoqyocosuqasu("\155\x65\156\165\137\163\x6c\165\147");
    }
    public function euqgwiscwgqkqkec()
    {
        goto eceeoiwuagocweus;
        eqsuaywswuesuika:
        esgyqksmcukeuwyk:
        goto okawiaowosqickgq;
        omqyuuomwywmqeiq:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x72\155\137\166\151\145\167\137\141\144\x64\x5f\155\145\156\x75\137{$this->gueasuouwqysmomu()}"), $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $this->mgogaykgkoogasim());
        goto oysyuiqmsokoykaq;
        sukcyismwageqgok:
        $eogowigeyucaauig = $this->imkyoqyocosuqasu("\143\x61\160\141\x62\151\154\x69\x74\x79");
        goto ukmgwuiqwgyiouec;
        okawiaowosqickgq:
        ManipulateMenu::wessoumqogciwogg($wgaiuiysuegayseo, $meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $kuuiuigeacouwmaa);
        goto ogciikaecauiwgyk;
        wasuquysysmqyegg:
        goto iigmgswcogqemgao;
        goto eqsuaywswuesuika;
        cqkyumayoemqsueu:
        $meqocwsecsywiiqs = $this->imkyoqyocosuqasu("\x70\141\147\145\x5f\x74\x69\x74\x6c\145");
        goto ksqmcugkcmsooeaw;
        ogciikaecauiwgyk:
        iigmgswcogqemgao:
        goto meiqywmwuoogckss;
        aeockieewgkequae:
        $ekiuyucoiagmscgy = [$this, "\x72\x65\x6e\144\x65\162"];
        goto omqyuuomwywmqeiq;
        geoiegikocwmwosi:
        ManipulateMenu::iyaokukyeukqokqe($meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $this->imkyoqyocosuqasu("\x6d\145\156\x75\x5f\151\x63\157\x6e"), $this->imkyoqyocosuqasu("\x6d\145\156\165\x5f\160\157\163\x69\164\151\157\x6e"));
        goto wasuquysysmqyegg;
        meiqywmwuoogckss:
        ycaqooeeseougumo:
        goto oyeygeykqwcqoeic;
        ukmgwuiqwgyiouec:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\x61\x72\145\x6e\164\x5f\163\x6c\165\x67");
        goto qykcggwgkweasuii;
        misiasooemyskoay:
        $aaokuekaimigoyue = $this->aqcogscycyycgkuq();
        goto eomqeimoequmagum;
        eceeoiwuagocweus:
        $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\163\x68\157\167\137\x69\x6e\x5f\x6d\145\156\x75");
        goto aeockieewgkequae;
        oysyuiqmsokoykaq:
        if (!$cyiwaggmwimigmcc) {
            goto ycaqooeeseougumo;
        }
        goto misiasooemyskoay;
        qykcggwgkweasuii:
        if ($wgaiuiysuegayseo) {
            goto esgyqksmcukeuwyk;
        }
        goto geoiegikocwmwosi;
        ksqmcugkcmsooeaw:
        $kuuiuigeacouwmaa = $this->imkyoqyocosuqasu("\160\157\163\151\164\x69\x6f\156");
        goto sukcyismwageqgok;
        eomqeimoequmagum:
        $ewuukoycimkekouc = $this->imkyoqyocosuqasu("\x6d\x65\156\x75\x5f\x74\x69\164\x6c\x65");
        goto cqkyumayoemqsueu;
        oyeygeykqwcqoeic:
    }
    public function render()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x72\145\156\144\145\162\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
    }
    public function mqyuagguukgcoeka()
    {
    }
    
    public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool
    {
        $aaokuekaimigoyue = ManipulateArray::get(explode("\137\x70\141\x67\x65\137", $gcgsqcoqciockquc->id), 1);
        return $aaokuekaimigoyue === $this->aqcogscycyycgkuq();
    }
    public function cykgqekykyocoqgo()
    {
        goto sosqgaswegsomgkw;
        uowiiyqmiaaaaoas:
        $omkysikckkcieckq = str_replace("\x2d", "\x5f", $omkysikckkcieckq);
        goto vokekoceocuskqsm;
        qaycycmeqkqcumog:
        $eeamcawaiqocomwy = DecoratorQuery::yqymaqmqiqmmmsoo(["\155\x6f\x64\x65" => $wmekckkyoiyickmk], $eeamcawaiqocomwy);
        goto ikuwigsmisimaqoc;
        iyawqekeeawqkymm:
        isaacywgkascmcsw:
        goto iumgcesksuawyuyo;
        ikuwigsmisimaqoc:
        eomcuogskessyicy:
        goto sigukociqouigous;
        qaqooueskgciuqgc:
        ogwwasqkaageiwwi:
        goto omyquyiguuaociwq;
        jyekikocgagcgywq:
        $omkysikckkcieckq = $qiouiwasaauyaaue["\157\x70\164\151\157\x6e"];
        goto qoiyiuoyamwimusy;
        ooykyoowougqkaso:
        if (!$eqgoocgaqwqcimie) {
            goto isaacywgkascmcsw;
        }
        goto sckyiekoceuisqyq;
        yagscaikmmuagqcu:
        exit;
        goto iyawqekeeawqkymm;
        eiegguecasykwmyq:
        if (!$qiouiwasaauyaaue) {
            goto ogwwasqkaageiwwi;
        }
        goto qiiqceousoicgeee;
        sosqgaswegsomgkw:
        $qiouiwasaauyaaue = ManipulateServer::ayueggmoqeeukqmq("\167\x70\x5f\x73\x63\162\x65\x65\156\x5f\x6f\160\164\x69\157\156\x73", []);
        goto eiegguecasykwmyq;
        maeueeueqoywkiom:
        if (!$mkucggyaiaukqoce) {
            goto iicaisyekagswmey;
        }
        goto jyekikocgagcgywq;
        qiiqceousoicgeee:
        check_admin_referer("\163\143\162\x65\x65\x6e\x2d\x6f\x70\164\151\x6f\156\x73\x2d\x6e\x6f\156\x63\145", "\163\143\x72\x65\145\x6e\x6f\x70\x74\151\x6f\x6e\156\157\156\143\x65");
        goto iaywwgssaoecwmeg;
        qoiyiuoyamwimusy:
        $eqgoocgaqwqcimie = $qiouiwasaauyaaue["\166\x61\154\165\x65"];
        goto oeogyayooiwqcmia;
        kusuakkwcuqkcqaw:
        $eeamcawaiqocomwy = DecoratorQuery::oiamiqcuyksmmomm(["\160\141\x67\145\x6e\165\155", "\x61\x70\141\x67\x65", "\x70\x61\147\145\x64"], wp_get_referer());
        goto sikckcmeiwmyakeu;
        vokekoceocuskqsm:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x65\x74\55\163\x63\162\x65\x65\x6e\x2d\x6f\x70\x74\151\157\x6e", ORM::class), false, $omkysikckkcieckq, $eqgoocgaqwqcimie);
        goto ooykyoowougqkaso;
        iaywwgssaoecwmeg:
        $mkucggyaiaukqoce = ManipulateUser::get();
        goto maeueeueqoywkiom;
        iumgcesksuawyuyo:
        quiguyyimiqeqcwa:
        goto qwosyqcomiosguoa;
        oeogyayooiwqcmia:
        if (!($omkysikckkcieckq == sanitize_key($omkysikckkcieckq))) {
            goto quiguyyimiqeqcwa;
        }
        goto uowiiyqmiaaaaoas;
        sckyiekoceuisqyq:
        DecoratorUser::ksmqawcowkmegigw($omkysikckkcieckq, $eqgoocgaqwqcimie, $mkucggyaiaukqoce);
        goto kusuakkwcuqkcqaw;
        sigukociqouigous:
        wp_safe_redirect($eeamcawaiqocomwy);
        goto yagscaikmmuagqcu;
        qwosyqcomiosguoa:
        iicaisyekagswmey:
        goto qaqooueskgciuqgc;
        sikckcmeiwmyakeu:
        if (!($wmekckkyoiyickmk = ManipulateServer::ayueggmoqeeukqmq("\x6d\157\144\x65"))) {
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
        oqckuigyqswmqcqg:
        aqwoykqaquewcaki:
        goto owismwmeqcmukagu;
        mesesokuoomcioom:
        
        if (!$this->mmukyoaoamekoswk($gcgsqcoqciockquc)) {
            goto aqwoykqaquewcaki;
        }
        goto iuwccksomkkouogy;
        cceggewquoaemcwq:
        $this->kkooswakmamasmyg($qeqooyuoiasweuck, $gcgsqcoqciockquc);
        goto ioiwoukauoeamuca;
        owismwmeqcmukagu:
        return $qeqooyuoiasweuck;
        goto oiywguooqeasueqq;
        iuwccksomkkouogy:
        ob_start();
        goto cceggewquoaemcwq;
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
        return ManipulateHTML::smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\x63\x6c\141\163\163" => "\x69\x63\157\x6e\x2d\154\147"], true);
    }
}
