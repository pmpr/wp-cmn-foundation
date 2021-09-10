<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Register\RegisterPost;
use WP_Post_Type;

class CPT extends Container
{
    
    protected ?int $id = 0;
    
    protected ?string $content = '';
    
    protected ?string $title = '';
    
    protected ?string $slug = '';
    
    protected ?RegisterPost $register = null;
    
    public function aqcogscycyycgkuq() : ?string
    {
        return $this->slug;
    }
    
    public function qcgakseyaikigqco() : ?string
    {
        return $this->title;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        return $this->content;
    }
    
    public function oyeskqayoscwciem() : RegisterPost
    {
        goto ugsyqugoqmsmwmwc;
        iqicywyqosukgyom:
        return $this->register;
        goto mcuskskiayekoamu;
        gaaewsyiiysgawgu:
        $this->register = new RegisterPost();
        goto moqawwqumcaawiac;
        moqawwqumcaawiac:
        isyiocycgikqamoi:
        goto iqicywyqosukgyom;
        ugsyqugoqmsmwmwc:
        if ($this->register) {
            goto isyiocycgikqamoi;
        }
        goto gaaewsyiiysgawgu;
        mcuskskiayekoamu:
    }
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto oiikwqssmywyqmow;
        kayikiwuwkgyiowu:
        $qmcuiciekkawmmms = ["\160\x6f\x73\x74\x5f\x63\157\x6e\x74\x65\156\164" => "\143\x6f\x6e\164\145\156\x74", "\160\x6f\x73\164\x5f\x74\x69\164\154\145" => "\164\151\164\154\145", "\160\157\x73\164\137\156\x61\x6d\x65" => "\163\154\165\147"];
        goto yiqaaumgyoymwmwc;
        uywocaygaeysmcsc:
        ckcwoiecmaaqauqu:
        goto cmqogyywaqmmmwss;
        cmqogyywaqmmmwss:
        parent::__construct();
        goto usqeaouygcuiymaa;
        yiqaaumgyoymwmwc:
        $gmawcgiwcmsukeiu = get_class_vars($this);
        goto iucacumsqyoimoqq;
        oaymugomswyeqgms:
        if (!$post) {
            goto euuqicgakkyoayyo;
        }
        goto kayikiwuwkgyiowu;
        cuiocwuoceciyecw:
        $this->mgoeqkosywwaoqyw();
        goto jaaukakisoqesywi;
        oiikwqssmywyqmow:
        if (!$aokagokqyuysuksm) {
            goto qmeyqewkyigkqaua;
        }
        goto nkaqkoaswwgwkiea;
        scmasgusoqouumgu:
        uwwiiqiikuusuocc:
        goto egsgkaascayskqmu;
        cyqmausswuokwsws:
        qmeyqewkyigkqaua:
        goto cuiocwuoceciyecw;
        iucacumsqyoimoqq:
        foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto igkqkkwwogciekqk;
            qmqooggmccwuiumi:
            if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) {
                goto wsyeeuisawusawwu;
            }
            goto ykkqammyacwiugwo;
            qwgsqwmqmigwwwug:
            $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            goto wkuqsumgkuyygois;
            wgaeaqwwieyaqsyk:
            goto mikouwykeswmseqa;
            goto guaokcsyycsuegkw;
            guaokcsyycsuegkw:
            qecqaigyggikwmeo:
            goto qwgsqwmqmigwwwug;
            igkqkkwwogciekqk:
            if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) {
                goto qecqaigyggikwmeo;
            }
            goto qmqooggmccwuiumi;
            ykkqammyacwiugwo:
            $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie);
            goto ocaayuycwauaaggq;
            ocaayuycwauaaggq:
            wsyeeuisawusawwu:
            goto wgaeaqwwieyaqsyk;
            wicugycksmwmokkm:
            yqowgmmyogcameuo:
            goto uaomcsauseuwaseg;
            wkuqsumgkuyygois:
            mikouwykeswmseqa:
            goto wicugycksmwmokkm;
            uaomcsauseuwaseg:
        }
        goto scmasgusoqouumgu;
        cecukmgemigakuum:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(strtolower(ManipulateString::mkwcwqkqeqkqyggc($this)));
        goto uywocaygaeysmcsc;
        usqeaouygcuiymaa:
        siwmcmcqweiaiyka:
        goto yaewecqgykieauki;
        cyyaeuauwoqoiswy:
        goto siwmcmcqweiaiyka;
        goto cyqmausswuokwsws;
        jaaukakisoqesywi:
        if ($this->miwqiiqeegeqcwis()) {
            goto ckcwoiecmaaqauqu;
        }
        goto cecukmgemigakuum;
        nkaqkoaswwgwkiea:
        $post = ManipulatePost::get($aokagokqyuysuksm);
        goto oaymugomswyeqgms;
        egsgkaascayskqmu:
        euuqicgakkyoayyo:
        goto cyyaeuauwoqoiswy;
        yaewecqgykieauki:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\151\x6e\151\164"])->qcsmikeggeemccuu("\x61\146\164\x65\x72\x5f\x73\167\151\x74\143\150\137\164\150\x65\155\x65", [$this, "\x6b\155\x77\x61\165\141\141\143\155\147\x65\x71\141\x6b\x71\147"]);
    }
    public function kgquecmsgcouyaya()
    {
        goto cueiywyuommyocey;
        kouameayeguwoeos:
        $this->cecaguuoecmccuse("\162\x65\156\x64\x65\x72\x5f{$this->miwqiiqeegeqcwis()}\x5f\x63\x68\x69\154\x64\162\145\x6e", [$this, "\x75\161\x65\167\143\165\x75\x69\147\147\x63\x63\165\161\x69\x61"], 10, 2);
        goto iiokyisowgqqswqo;
        cueiywyuommyocey:
        $this->cecaguuoecmccuse("\160\x6f\x73\x74\x5f\165\x70\x64\141\x74\145\144\x5f\x6d\x65\x73\163\x61\x67\x65\x73", [$this, "\x70\x6d\x69\167\153\167\153\171\147\141\145\167\x69\143\x71\163"])->cecaguuoecmccuse("\163\165\142\164\x69\164\154\145\137\166\151\x65\x77\x5f\163\165\160\x70\x6f\x72\164\145\x64", [$this, "\157\x77\171\x63\155\145\163\145\145\151\153\143\141\x71\167\153"]);
        goto ysayeagkekiusmeu;
        ysayeagkekiusmeu:
        if (!method_exists($this, "\x75\161\145\167\x63\x75\x75\x69\x67\x67\143\x63\x75\x71\x69\141")) {
            goto gimiyacaiomgucuu;
        }
        goto kouameayeguwoeos;
        iiokyisowgqqswqo:
        gimiyacaiomgucuu:
        goto yquqkequgwgqogsk;
        yquqkequgwgqogsk:
    }
    public function init()
    {
        goto qmysagiommykwiei;
        muwqiukyceakceog:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto yyskgqykggakkicm;
        yuiakguqekmiuamu:
        if (!(method_exists($this, "\171\145\x79\x69\147\x75\x79\145\x67\x6d\x6d\x79\165\x73\145\141") && is_admin())) {
            goto igkugseogmcgasoq;
        }
        goto euykeqcoiyuwwayu;
        euykeqcoiyuwwayu:
        $this->yeyiguyegmmyusea();
        goto gsscwykyyykyqaey;
        aomwquymwqgcewis:
        global $wp_rewrite;
        goto mcgyqoauweyweoyy;
        iqyiaauwmwcqocok:
        $this->oyeskqayoscwciem()->ckwgqocyuaysggma("\x73\154\165\147", $this->miwqiiqeegeqcwis())->wakugsseussemkka(["\164\x69\x74\x6c\x65", "\145\144\x69\164\157\x72", "\145\170\x63\145\162\160\x74", "\x74\x68\x75\x6d\142\x6e\x61\x69\154"]);
        goto uwuygoyaaeskeoyy;
        mcgyqoauweyweoyy:
        $acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis());
        goto eqwkisceygagmmwi;
        wmwyyaqogsqssyac:
        $this->register();
        goto aomwquymwqgcewis;
        gsscwykyyykyqaey:
        igkugseogmcgasoq:
        goto ygweqayaqqeweiie;
        uwuygoyaaeskeoyy:
        agmeaqeyawqaaqyk:
        goto wmwyyaqogsqssyac;
        qmysagiommykwiei:
        if ($this->oyeskqayoscwciem()->aoaiwceqgsckygsg()) {
            goto agmeaqeyawqaaqyk;
        }
        goto iqyiaauwmwcqocok;
        yyskgqykggakkicm:
        qcakmuaykqwiqmuu:
        goto yuiakguqekmiuamu;
        eqwkisceygagmmwi:
        if (!$acqqmqmcquukaqsc) {
            goto qcakmuaykqwiqmuu;
        }
        goto muwqiukyceakceog;
        ygweqayaqqeweiie:
    }
    public function register()
    {
        goto wuwygsqiyuwgyiuk;
        uewgikciuiuosugc:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto aecggwmiiueeiwqy;
        }
        goto suqsqqwoamioowew;
        wuwygsqiyuwgyiuk:
        $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq();
        goto aemgeqcgumiekeea;
        aemgeqcgumiekeea:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto uewgikciuiuosugc;
        cmiqagsewyocigkq:
        aecggwmiiueeiwqy:
        goto omuwgsgyucywcumi;
        suqsqqwoamioowew:
        register_post_type($ymqmyyeuycgmigyo, $ywmkwiwkosakssii);
        goto cmiqagsewyocigkq;
        omuwgsgyucywcumi:
    }
    
    public function migkyseymeomymmy() : bool
    {
        return ManipulatePost::sqyyemqmmgmyiaam($this->miwqiiqeegeqcwis());
    }
    public function kmwauaacmgeqakqg()
    {
        $this->register();
        flush_rewrite_rules();
    }
    public function mgoeqkosywwaoqyw()
    {
    }
    
    public function cukiusasccucgwqc() : bool
    {
        return DecoratorQuery::cukiusasccucgwqc($this->miwqiiqeegeqcwis());
    }
    
    public function owycmeseeikcaqwk() : bool
    {
        return !(DecoratorQuery::migkyseymeomymmy() || DecoratorQuery::eyokaicigoeymwoo());
    }
    
    private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie)
    {
        goto mkeoukmyusisqcwu;
        mkeoukmyusisqcwu:
        if (!property_exists($this, $oaukocmsckciqaok)) {
            goto qukyuugwauwwcmao;
        }
        goto oeyiasiguciiogeo;
        wmkkoskogqkeoqes:
        qukyuugwauwwcmao:
        goto gmaigkymcaycemai;
        oeyiasiguciiogeo:
        $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie);
        goto wmkkoskogqkeoqes;
        gmaigkymcaycemai:
    }
    
    public function miwqiiqeegeqcwis() : ?string
    {
        return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
    }
    
    public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array
    {
        return [];
    }
    
    public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array
    {
        goto wywccuaesmeiiyso;
        usogsumoscyqoeig:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $view_link;
        goto esggayosiosceauc;
        cikeosouygiiowwa:
        return $wumguikkgaigkoee;
        goto cgiyoeciuqoqksqo;
        esggayosiosceauc:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $view_link;
        goto wskqiqgyeykoqasc;
        wskqiqgyeykoqasc:
        $preview_permalink = DecoratorQuery::yqymaqmqiqmmmsoo("\160\x72\145\166\x69\145\x77", "\x74\x72\x75\145", $migiiksoiymissge);
        goto jaewmeykskaiaace;
        csuuismscwsokuem:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $view_link;
        goto usogsumoscyqoeig;
        jaewmeykskaiaace:
        $preview_link = sprintf("\x20\74\141\x20\x74\x61\x72\x67\145\x74\75\x22\137\x62\154\x61\x6e\153\42\x20\150\x72\x65\x66\75\42\x25\163\x22\76\45\163\74\x2f\141\76", esc_url($preview_permalink), sprintf(__("\120\162\145\166\151\x65\167\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto sccwqccwauwoewuw;
        giqkswsigocgaoee:
        skoqcwouicsaeiio:
        goto cikeosouygiiowwa;
        akucicwkeeouaoyi:
        if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) {
            goto skoqcwouicsaeiio;
        }
        goto qgickaesisakuiis;
        aokekokkyiesokcu:
        $view_link = sprintf("\x20\x3c\x61\40\150\x72\145\146\75\42\x25\163\42\x3e\45\163\74\x2f\141\x3e", esc_url($migiiksoiymissge), sprintf(__("\x56\x69\x65\167\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto csuuismscwsokuem;
        iiaqemkciomeagas:
        $wumguikkgaigkoee[$useksmwkuswkwcqg] = [
            0 => '',
            
            1 => sprintf(__("\x25\x73\40\165\x70\144\141\164\145\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            2 => __("\x43\x75\x73\164\x6f\x6d\40\146\x69\145\x6c\x64\x20\165\160\144\x61\164\x65\x64\x2e", PR__CMN__FOUNDATION),
            3 => __("\103\x75\163\x74\157\x6d\x20\x66\151\x65\154\x64\x20\144\145\x6c\x65\164\145\144\x2e", PR__CMN__FOUNDATION),
            4 => sprintf(__("\x25\x73\x20\x75\x70\x64\141\x74\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            
            5 => isset($_GET["\x72\x65\x76\151\x73\x69\x6f\156"]) ? sprintf(__("\x25\x73\x20\x72\x65\163\x74\157\162\x65\144\40\x74\x6f\40\162\x65\166\151\x73\151\157\x6e\40\146\x72\157\x6d\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\162\x65\x76\151\163\x69\157\156"], false)) : false,
            6 => sprintf(__("\x25\163\40\160\165\142\154\151\x73\150\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            7 => sprintf(__("\45\163\x20\163\x61\x76\x65\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            8 => sprintf(__("\45\x73\40\163\x75\142\x6d\151\164\164\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            9 => sprintf(__("\x25\61\44\x73\x20\163\143\150\x65\144\x75\154\145\144\40\x66\x6f\162\72\x20\x3c\x73\x74\162\x6f\x6e\147\76\45\x32\x24\x73\74\x2f\x73\x74\162\x6f\x6e\x67\76\56", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\115\x20\x6a\x2c\40\131\x20\100\40\107\x3a\x69", PR__CMN__FOUNDATION), strtotime($post->post_date))),
            10 => sprintf(__("\x25\163\40\x64\x72\x61\x66\x74\x20\x75\160\144\x61\164\x65\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
        ];
        goto amqoooqmwikyueea;
        wuwummwwoskooqyw:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto iiaqemkciomeagas;
        amqoooqmwikyueea:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post);
        goto aokekokkyiesokcu;
        wywccuaesmeiiyso:
        $post = ManipulatePost::get();
        goto somiumoieuwcmmyc;
        wumwuakuugyacwka:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $preview_link;
        goto giqkswsigocgaoee;
        qgickaesisakuiis:
        $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm();
        goto wuwummwwoskooqyw;
        somiumoieuwcmmyc:
        $mksyucucyswaukig = ManipulatePost::gueasuouwqysmomu($post, true);
        goto akucicwkeeouaoyi;
        sccwqccwauwoewuw:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $preview_link;
        goto wumwuakuugyacwka;
        cgiyoeciuqoqksqo:
    }
}
