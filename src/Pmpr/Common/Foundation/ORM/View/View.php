<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        kkwqmoeeqygoimwg:
        $this->args = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\171\x70\x65" => "\x63\165\x73\164\157\x6d", "\x6d\145\156\165\137\x73\x6c\x75\x67" => $yyksucsgisomecgg->aakmagwggmkoiiyu(), "\155\145\x6e\x75\x5f\x69\x63\x6f\x6e" => '', "\160\141\147\145\137\164\x69\164\154\x65" => '', "\143\141\x70\141\142\x69\154\x69\x74\x79" => "\155\x61\156\x61\x67\x65\x5f\x6f\160\x74\151\x6f\x6e\163", "\x6d\x65\156\x75\x5f\x74\151\x74\154\x65" => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\160\141\162\145\x6e\x74\x5f\163\x6c\x75\147" => $yyksucsgisomecgg->egockcwgmeocqeqc(), "\163\150\157\167\x5f\x69\156\x5f\x6d\145\156\x75" => true, "\155\x65\156\x75\137\160\x6f\x73\x69\164\151\x6f\156" => null]);
        goto mwqcykaeywsmoumm;
        gimquiiwucueoqkw:
        $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem();
        goto eimouyomcoqkmaae;
        ggoimgeeuugseiwk:
        $this->model = $meywaqqsugaoeyys;
        goto gimquiiwucueoqkw;
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
        ywoyioqqyuocoygk:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\141\162\x65\156\x74\x5f\x73\154\x75\147");
        goto iauwkeeaqsgweeoo;
        iauwkeeaqsgweeoo:
        $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\x69\x6e\x69\164"])->qcsmikeggeemccuu("\141\144\x6d\x69\156\x5f\x69\156\151\x74", [$this, "\171\x65\171\x69\x67\165\x79\145\x67\155\155\171\165\163\145\x61"])->qcsmikeggeemccuu("\x61\144\x6d\151\x6e\x5f\155\x65\156\165", [$this, "\x65\x75\161\147\167\x69\163\143\x77\147\161\153\x71\x6b\145\143"], $wgaiuiysuegayseo ? 11 : 12);
        goto aycqgowuwagcgque;
        icuukwkwqeoogyae:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\141\144\x6d\151\156\137\151\x6e\151\x74", [$this, "\143\x79\153\x67\161\145\153\171\153\x79\157\143\157\x71\147\x6f"], 11)->cecaguuoecmccuse("\x73\x63\162\x65\x65\156\x5f\x73\145\x74\164\x69\156\x67\x73", [$this, "\x69\151\165\x73\163\153\x69\143\x63\x73\167\171\x6f\x63\x79\x67"], 10, 2)->cecaguuoecmccuse("\x73\143\x72\145\x65\x6e\137\x6f\x70\164\151\x6f\156\x73\137\163\x68\x6f\167\x5f\163\x63\162\x65\x65\x6e", [$this, "\x6b\x75\x79\x6f\143\x79\171\145\x75\155\x61\x75\x65\x77\x77\141"], 10, 2)->cecaguuoecmccuse("\x63\165\x73\x74\x6f\x6d\x2d\164\141\142\x6c\145\55\163\x65\x74\x2d\x73\143\162\x65\145\x6e\55\157\x70\164\x69\157\156", [$this, "\x73\151\161\x6b\x73\x61\145\153\x67\x67\x6d\161\145\151\x63\x73"], 10, 3);
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
        return $pagenow === "\x61\144\155\x69\x6e\56\160\150\x70" && ManipulateServer::get("\160\141\147\x65") === $this->aqcogscycyycgkuq();
    }
    
    public function swsoqemyygecmsao() : bool
    {
        return $this->qcsgmgoukiouuscw() && $this->oyeskqayoscwciem()->uwaascqoguwkwiaw();
    }
    public function yeyiguyegmmyusea()
    {
        goto iyyaiuccouqowyga;
        cksomiiqscosigke:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\146\164\145\162\137\151\156\151\x74\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
        goto ugmukcwgcioqgywy;
        gcogomgmqcgkeceg:
        $this->mqyuagguukgcoeka();
        goto cksomiiqscosigke;
        ugmukcwgcioqgywy:
        iwcmgioeaiyuacwi:
        goto kisccmsaieigisiu;
        ikqagqacuwcgwmqy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x62\x65\146\157\x72\145\137\151\x6e\x69\164\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}"), $this);
        goto gcogomgmqcgkeceg;
        iyyaiuccouqowyga:
        if (!$this->swsoqemyygecmsao()) {
            goto iwcmgioeaiyuacwi;
        }
        goto ikqagqacuwcgwmqy;
        kisccmsaieigisiu:
    }
    
    public function yoqiwysegascakim()
    {
        return $this->imkyoqyocosuqasu("\143\157\x6c\x75\155\156\x73", []);
    }
    
    public function syskqukmqoycyswc()
    {
        return $this->imkyoqyocosuqasu("\161\165\x65\162\x69\x65\163", []);
    }
    
    public function gueasuouwqysmomu()
    {
        return $this->imkyoqyocosuqasu("\x74\x79\160\x65", "\143\x75\163\x74\x6f\155");
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
        return $this->ekwwgogmwykqggyi(admin_url("\141\x64\x6d\151\156\56\x70\x68\x70\x3f\160\141\x67\x65\75" . $this->aqcogscycyycgkuq()));
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
        mseokuecmeoyoggk:
        euoscysqgugsqewc:
        goto uookseqsmsqgweuy;
        eeomcmuiqwgwwuqk:
        $iwywmkygwewiamwm = DecoratorQuery::yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm);
        goto mseokuecmeoyoggk;
        mwwygasiagaqsimo:
        $uoomaookgsyciacm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x72\x6d\137\166\151\x65\167\x5f\x6c\x69\156\x6b\x5f\x71\x75\x65\162\151\145\x73"), [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm);
        goto wucacaegysmiusai;
        yeaqsiqgakskoykg:
    }
    
    public function aqcogscycyycgkuq()
    {
        return $this->imkyoqyocosuqasu("\x6d\145\156\165\137\x73\154\165\147");
    }
    public function euqgwiscwgqkqkec()
    {
        goto eceeoiwuagocweus;
        omqyuuomwywmqeiq:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x6f\x72\155\137\166\151\145\x77\137\x61\144\x64\x5f\155\x65\x6e\x75\137{$this->gueasuouwqysmomu()}"), $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $this->mgogaykgkoogasim());
        goto oysyuiqmsokoykaq;
        meiqywmwuoogckss:
        ycaqooeeseougumo:
        goto oyeygeykqwcqoeic;
        wasuquysysmqyegg:
        goto iigmgswcogqemgao;
        goto eqsuaywswuesuika;
        oysyuiqmsokoykaq:
        if (!$cyiwaggmwimigmcc) {
            goto ycaqooeeseougumo;
        }
        goto misiasooemyskoay;
        misiasooemyskoay:
        $aaokuekaimigoyue = $this->aqcogscycyycgkuq();
        goto eomqeimoequmagum;
        eomqeimoequmagum:
        $ewuukoycimkekouc = $this->imkyoqyocosuqasu("\155\x65\156\165\137\164\151\164\154\x65");
        goto cqkyumayoemqsueu;
        qykcggwgkweasuii:
        if ($wgaiuiysuegayseo) {
            goto esgyqksmcukeuwyk;
        }
        goto geoiegikocwmwosi;
        cqkyumayoemqsueu:
        $meqocwsecsywiiqs = $this->imkyoqyocosuqasu("\160\x61\147\145\137\x74\x69\164\x6c\x65");
        goto ksqmcugkcmsooeaw;
        ukmgwuiqwgyiouec:
        $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\x61\162\x65\x6e\164\137\x73\154\165\147");
        goto qykcggwgkweasuii;
        ogciikaecauiwgyk:
        iigmgswcogqemgao:
        goto meiqywmwuoogckss;
        eceeoiwuagocweus:
        $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\163\x68\x6f\167\x5f\x69\156\137\x6d\145\x6e\165");
        goto aeockieewgkequae;
        sukcyismwageqgok:
        $eogowigeyucaauig = $this->imkyoqyocosuqasu("\x63\141\160\141\x62\x69\x6c\x69\164\171");
        goto ukmgwuiqwgyiouec;
        geoiegikocwmwosi:
        ManipulateMenu::iyaokukyeukqokqe($meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $this->imkyoqyocosuqasu("\x6d\145\x6e\x75\137\x69\x63\x6f\156"), $this->imkyoqyocosuqasu("\155\145\156\x75\137\160\x6f\x73\x69\x74\151\157\156"));
        goto wasuquysysmqyegg;
        aeockieewgkequae:
        $ekiuyucoiagmscgy = [$this, "\162\145\156\x64\145\162"];
        goto omqyuuomwywmqeiq;
        ksqmcugkcmsooeaw:
        $kuuiuigeacouwmaa = $this->imkyoqyocosuqasu("\160\157\163\x69\x74\151\157\156");
        goto sukcyismwageqgok;
        okawiaowosqickgq:
        ManipulateMenu::wessoumqogciwogg($wgaiuiysuegayseo, $meqocwsecsywiiqs, $ewuukoycimkekouc, $eogowigeyucaauig, $aaokuekaimigoyue, $ekiuyucoiagmscgy, $kuuiuigeacouwmaa);
        goto ogciikaecauiwgyk;
        eqsuaywswuesuika:
        esgyqksmcukeuwyk:
        goto okawiaowosqickgq;
        oyeygeykqwcqoeic:
    }
    public function render()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\162\145\156\144\145\162\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}"), $this);
    }
    public function mqyuagguukgcoeka()
    {
    }
    
    public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool
    {
        $aaokuekaimigoyue = ManipulateArray::get(explode("\137\160\141\147\x65\x5f", $gcgsqcoqciockquc->id), 1);
        return $aaokuekaimigoyue === $this->aqcogscycyycgkuq();
    }
    public function cykgqekykyocoqgo()
    {
        goto sosqgaswegsomgkw;
        qaycycmeqkqcumog:
        $eeamcawaiqocomwy = DecoratorQuery::yqymaqmqiqmmmsoo(["\155\x6f\x64\145" => $wmekckkyoiyickmk], $eeamcawaiqocomwy);
        goto ikuwigsmisimaqoc;
        vokekoceocuskqsm:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\145\x74\x2d\163\x63\x72\x65\x65\x6e\x2d\157\x70\164\x69\157\156", ORM::class), false, $omkysikckkcieckq, $eqgoocgaqwqcimie);
        goto ooykyoowougqkaso;
        sigukociqouigous:
        wp_safe_redirect($eeamcawaiqocomwy);
        goto yagscaikmmuagqcu;
        iaywwgssaoecwmeg:
        $mkucggyaiaukqoce = ManipulateUser::get();
        goto maeueeueqoywkiom;
        iyawqekeeawqkymm:
        isaacywgkascmcsw:
        goto iumgcesksuawyuyo;
        oeogyayooiwqcmia:
        if (!($omkysikckkcieckq == sanitize_key($omkysikckkcieckq))) {
            goto quiguyyimiqeqcwa;
        }
        goto uowiiyqmiaaaaoas;
        qaqooueskgciuqgc:
        ogwwasqkaageiwwi:
        goto omyquyiguuaociwq;
        qiiqceousoicgeee:
        check_admin_referer("\x73\143\162\x65\x65\156\55\157\x70\x74\151\x6f\x6e\x73\55\156\x6f\x6e\x63\x65", "\x73\143\x72\x65\x65\x6e\x6f\160\x74\151\157\x6e\x6e\157\x6e\143\145");
        goto iaywwgssaoecwmeg;
        jyekikocgagcgywq:
        $omkysikckkcieckq = $qiouiwasaauyaaue["\157\160\x74\x69\x6f\156"];
        goto qoiyiuoyamwimusy;
        ikuwigsmisimaqoc:
        eomcuogskessyicy:
        goto sigukociqouigous;
        uowiiyqmiaaaaoas:
        $omkysikckkcieckq = str_replace("\55", "\x5f", $omkysikckkcieckq);
        goto vokekoceocuskqsm;
        maeueeueqoywkiom:
        if (!$mkucggyaiaukqoce) {
            goto iicaisyekagswmey;
        }
        goto jyekikocgagcgywq;
        sikckcmeiwmyakeu:
        if (!($wmekckkyoiyickmk = ManipulateServer::ayueggmoqeeukqmq("\x6d\157\x64\145"))) {
            goto eomcuogskessyicy;
        }
        goto qaycycmeqkqcumog;
        qwosyqcomiosguoa:
        iicaisyekagswmey:
        goto qaqooueskgciuqgc;
        yagscaikmmuagqcu:
        exit;
        goto iyawqekeeawqkymm;
        sosqgaswegsomgkw:
        $qiouiwasaauyaaue = ManipulateServer::ayueggmoqeeukqmq("\x77\x70\x5f\163\x63\x72\145\x65\156\137\x6f\x70\x74\151\157\156\x73", []);
        goto eiegguecasykwmyq;
        iumgcesksuawyuyo:
        quiguyyimiqeqcwa:
        goto qwosyqcomiosguoa;
        kusuakkwcuqkcqaw:
        $eeamcawaiqocomwy = DecoratorQuery::oiamiqcuyksmmomm(["\x70\x61\147\145\156\165\155", "\141\x70\x61\147\145", "\x70\141\x67\145\x64"], wp_get_referer());
        goto sikckcmeiwmyakeu;
        ooykyoowougqkaso:
        if (!$eqgoocgaqwqcimie) {
            goto isaacywgkascmcsw;
        }
        goto sckyiekoceuisqyq;
        sckyiekoceuisqyq:
        DecoratorUser::ksmqawcowkmegigw($omkysikckkcieckq, $eqgoocgaqwqcimie, $mkucggyaiaukqoce);
        goto kusuakkwcuqkcqaw;
        eiegguecasykwmyq:
        if (!$qiouiwasaauyaaue) {
            goto ogwwasqkaageiwwi;
        }
        goto qiiqceousoicgeee;
        qoiyiuoyamwimusy:
        $eqgoocgaqwqcimie = $qiouiwasaauyaaue["\166\x61\154\165\145"];
        goto oeogyayooiwqcmia;
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
        iuwccksomkkouogy:
        ob_start();
        goto cceggewquoaemcwq;
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
        return ManipulateHTML::smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\143\154\141\163\x73" => "\x69\x63\x6f\156\55\x6c\147"], true);
    }
}
