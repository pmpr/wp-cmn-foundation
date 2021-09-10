<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto aemgeqcgumiekeea;
        uewgikciuiuosugc:
        $this->register = new RegisterPost();
        goto suqsqqwoamioowew;
        aemgeqcgumiekeea:
        if ($this->register) {
            goto wuwygsqiyuwgyiuk;
        }
        goto uewgikciuiuosugc;
        suqsqqwoamioowew:
        wuwygsqiyuwgyiuk:
        goto cmiqagsewyocigkq;
        cmiqagsewyocigkq:
        return $this->register;
        goto omuwgsgyucywcumi;
        omuwgsgyucywcumi:
    }
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto sccwqccwauwoewuw;
        wumwuakuugyacwka:
        $post = ManipulatePost::get($aokagokqyuysuksm);
        goto giqkswsigocgaoee;
        meguagoagscugsew:
        parent::__construct();
        goto qcqssmkigogcyouq;
        cowuwckyacimcqsm:
        wskqiqgyeykoqasc:
        goto gaecsagiymeucuoc;
        cgiyoeciuqoqksqo:
        $gmawcgiwcmsukeiu = get_class_vars($this);
        goto iseecaeayskgyeiu;
        qcqssmkigogcyouq:
        jaewmeykskaiaace:
        goto ugqcomuioeousygc;
        iseecaeayskgyeiu:
        foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto wywccuaesmeiiyso;
            wywccuaesmeiiyso:
            if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) {
                goto gmaigkymcaycemai;
            }
            goto somiumoieuwcmmyc;
            amqoooqmwikyueea:
            $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            goto aokekokkyiesokcu;
            somiumoieuwcmmyc:
            if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) {
                goto wmkkoskogqkeoqes;
            }
            goto akucicwkeeouaoyi;
            aokekokkyiesokcu:
            skoqcwouicsaeiio:
            goto csuuismscwsokuem;
            iiaqemkciomeagas:
            gmaigkymcaycemai:
            goto amqoooqmwikyueea;
            wuwummwwoskooqyw:
            goto skoqcwouicsaeiio;
            goto iiaqemkciomeagas;
            csuuismscwsokuem:
            oeyiasiguciiogeo:
            goto usogsumoscyqoeig;
            qgickaesisakuiis:
            wmkkoskogqkeoqes:
            goto wuwummwwoskooqyw;
            akucicwkeeouaoyi:
            $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie);
            goto qgickaesisakuiis;
            usogsumoscyqoeig:
        }
        goto mcokakckyeogsgie;
        mcokakckyeogsgie:
        mkeoukmyusisqcwu:
        goto uwkuuycaymkewaqk;
        sccwqccwauwoewuw:
        if (!$aokagokqyuysuksm) {
            goto wskqiqgyeykoqasc;
        }
        goto wumwuakuugyacwka;
        cwcyomuioskkeiou:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(strtolower(ManipulateString::mkwcwqkqeqkqyggc($this)));
        goto iiaaamgqucesscwa;
        uwkuuycaymkewaqk:
        esggayosiosceauc:
        goto kueaeuuecmugkyco;
        muomcgmcoayqykcs:
        if ($this->miwqiiqeegeqcwis()) {
            goto qukyuugwauwwcmao;
        }
        goto cwcyomuioskkeiou;
        kueaeuuecmugkyco:
        goto jaewmeykskaiaace;
        goto cowuwckyacimcqsm;
        cikeosouygiiowwa:
        $qmcuiciekkawmmms = ["\x70\157\x73\x74\x5f\143\157\156\x74\x65\156\x74" => "\x63\157\156\x74\x65\x6e\x74", "\x70\157\x73\164\137\x74\151\x74\154\x65" => "\164\x69\x74\154\145", "\160\157\x73\x74\137\x6e\141\x6d\x65" => "\163\x6c\165\x67"];
        goto cgiyoeciuqoqksqo;
        giqkswsigocgaoee:
        if (!$post) {
            goto esggayosiosceauc;
        }
        goto cikeosouygiiowwa;
        gaecsagiymeucuoc:
        $this->mgoeqkosywwaoqyw();
        goto muomcgmcoayqykcs;
        iiaaamgqucesscwa:
        qukyuugwauwwcmao:
        goto meguagoagscugsew;
        ugqcomuioeousygc:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x69\x6e\151\x74"])->qcsmikeggeemccuu("\x61\146\x74\x65\x72\x5f\163\167\151\164\143\150\137\164\x68\x65\x6d\145", [$this, "\x6b\x6d\x77\141\x75\x61\x61\x63\x6d\x67\x65\x71\x61\153\x71\147"]);
    }
    public function kgquecmsgcouyaya()
    {
        goto mkigwwusauycogeo;
        ewogmgqociikueio:
        $this->cecaguuoecmccuse("\x72\145\x6e\144\x65\162\x5f{$this->miwqiiqeegeqcwis()}\137\143\x68\x69\154\144\x72\x65\156", [$this, "\x75\161\145\167\x63\x75\x75\151\x67\x67\143\x63\x75\161\151\141"], 10, 2);
        goto lsgaicysguweqccw;
        sqemyumsygwsywci:
        if (!method_exists($this, "\165\x71\145\167\x63\165\165\151\x67\x67\143\x63\165\161\x69\x61")) {
            goto ekkwsmagosycuwes;
        }
        goto ewogmgqociikueio;
        mkigwwusauycogeo:
        $this->cecaguuoecmccuse("\x70\x6f\163\164\137\165\x70\x64\x61\x74\x65\144\x5f\x6d\x65\163\163\x61\x67\145\x73", [$this, "\160\x6d\x69\167\153\x77\x6b\171\x67\x61\145\167\x69\x63\x71\163"])->cecaguuoecmccuse("\163\165\x62\164\151\x74\154\145\137\x76\151\145\167\x5f\x73\x75\x70\160\157\x72\164\x65\x64", [$this, "\x6f\167\x79\143\x6d\x65\163\145\145\x69\153\143\141\161\x77\x6b"]);
        goto sqemyumsygwsywci;
        lsgaicysguweqccw:
        ekkwsmagosycuwes:
        goto eosqwowqiuwqowcs;
        eosqwowqiuwqowcs:
    }
    public function init()
    {
        goto casyeyyykgiimmko;
        ewyueqokigysemgu:
        if (!$acqqmqmcquukaqsc) {
            goto eouuqweagyceooya;
        }
        goto gigqowomouqoseqm;
        zwqoeygkiswogcqe:
        if (!(method_exists($this, "\x79\x65\x79\x69\x67\x75\171\x65\147\155\x6d\x79\165\163\x65\141") && is_admin())) {
            goto soyiakkqikmoiocq;
        }
        goto gsoyiigokegkmoki;
        gsoyiigokegkmoki:
        $this->yeyiguyegmmyusea();
        goto gawiwysyuakagyaw;
        yscwicwwogwmouuy:
        gqioicscmcgwkakm:
        goto yqeescckkwigakku;
        yqeescckkwigakku:
        $this->register();
        goto oyyiikasiaaoecis;
        ugaiiouaiewqiowk:
        eouuqweagyceooya:
        goto zwqoeygkiswogcqe;
        casyeyyykgiimmko:
        if ($this->oyeskqayoscwciem()->aoaiwceqgsckygsg()) {
            goto gqioicscmcgwkakm;
        }
        goto omioyaykskkmaaig;
        omioyaykskkmaaig:
        $this->oyeskqayoscwciem()->ckwgqocyuaysggma("\x73\154\165\147", $this->miwqiiqeegeqcwis())->wakugsseussemkka(["\164\151\164\154\x65", "\145\x64\151\164\x6f\162", "\x65\x78\x63\x65\x72\160\164", "\164\150\x75\155\x62\156\x61\151\x6c"]);
        goto yscwicwwogwmouuy;
        gigqowomouqoseqm:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto ugaiiouaiewqiowk;
        gummamsgywaokgig:
        $acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis());
        goto ewyueqokigysemgu;
        oyyiikasiaaoecis:
        global $wp_rewrite;
        goto gummamsgywaokgig;
        gawiwysyuakagyaw:
        soyiakkqikmoiocq:
        goto kuqosogscasgaywu;
        kuqosogscasgaywu:
    }
    public function register()
    {
        goto eqkeyqqwmmcisqac;
        eqkeyqqwmmcisqac:
        $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq();
        goto ugeukowiaigeagwy;
        ksayqqaywugoaemm:
        eacioiukuoyksseo:
        goto yoiesagguwgeoksm;
        ugeukowiaigeagwy:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto yiwuuaookucgwmqo;
        mmqisagoemaccuwg:
        register_post_type($ymqmyyeuycgmigyo, $ywmkwiwkosakssii);
        goto ksayqqaywugoaemm;
        yiwuuaookucgwmqo:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto eacioiukuoyksseo;
        }
        goto mmqisagoemaccuwg;
        yoiesagguwgeoksm:
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
        goto msaqmcugmqimwwmo;
        gwmcagqwciamkige:
        oaqocgwyuyakaeag:
        goto qgomsueoywqqiaea;
        msaqmcugmqimwwmo:
        if (!property_exists($this, $oaukocmsckciqaok)) {
            goto oaqocgwyuyakaeag;
        }
        goto oewywyackmoqssga;
        oewywyackmoqssga:
        $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie);
        goto gwmcagqwciamkige;
        qgomsueoywqqiaea:
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
        goto oommkeyocacugygs;
        mgugkeugqaimsqog:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $view_link;
        goto geeiwiekmemskumu;
        eeaecmiymcuigowe:
        $view_link = sprintf("\40\74\141\40\x68\162\x65\146\75\x22\45\163\42\76\x25\163\x3c\57\x61\x3e", esc_url($migiiksoiymissge), sprintf(__("\x56\x69\x65\167\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto saaawiokacgeeksq;
        wscseoawewqewemo:
        $preview_link = sprintf("\x20\74\141\x20\x74\x61\162\147\x65\x74\75\x22\137\x62\x6c\141\156\153\x22\40\x68\x72\145\146\75\x22\x25\163\42\76\x25\163\x3c\x2f\x61\76", esc_url($preview_permalink), sprintf(__("\x50\162\145\166\x69\145\x77\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto uqeyweoakwiaqmmk;
        fsiosygamoowowke:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $preview_link;
        goto ciqygeyyoukgiowa;
        aoosameuiqeqgoey:
        if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) {
            goto cggekgkgimqweweq;
        }
        goto ggkmskqeumuuiwck;
        oommkeyocacugygs:
        $post = ManipulatePost::get();
        goto wkmkyqgwsimewuse;
        oeygkuuqueoosiyc:
        $wumguikkgaigkoee[$useksmwkuswkwcqg] = [
            0 => '',
            
            1 => sprintf(__("\45\163\40\x75\160\x64\141\x74\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            2 => __("\x43\165\x73\164\157\155\40\146\x69\145\x6c\144\40\x75\x70\144\141\x74\x65\144\56", PR__CMN__FOUNDATION),
            3 => __("\x43\x75\x73\x74\157\155\40\x66\x69\x65\154\x64\x20\144\x65\154\145\164\x65\x64\x2e", PR__CMN__FOUNDATION),
            4 => sprintf(__("\x25\x73\x20\165\x70\144\x61\164\145\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            
            5 => isset($_GET["\x72\x65\166\x69\x73\x69\157\156"]) ? sprintf(__("\x25\x73\40\162\145\x73\x74\x6f\162\x65\x64\40\164\x6f\x20\162\x65\x76\x69\x73\x69\x6f\156\x20\x66\162\x6f\x6d\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\x72\x65\166\x69\163\151\x6f\156"], false)) : false,
            6 => sprintf(__("\x25\x73\40\x70\165\142\154\x69\163\150\x65\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            7 => sprintf(__("\x25\x73\40\163\141\x76\145\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            8 => sprintf(__("\x25\x73\x20\163\x75\142\155\x69\164\x74\x65\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            9 => sprintf(__("\45\x31\x24\x73\40\163\x63\x68\145\x64\165\x6c\145\144\x20\x66\x6f\x72\x3a\40\x3c\163\x74\x72\157\x6e\147\x3e\x25\x32\x24\163\74\x2f\163\x74\x72\x6f\156\147\x3e\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\x4d\x20\152\x2c\x20\x59\x20\100\40\x47\x3a\151", PR__CMN__FOUNDATION), strtotime($post->post_date))),
            10 => sprintf(__("\45\163\40\144\162\141\146\164\x20\x75\x70\x64\x61\x74\x65\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
        ];
        goto yoiagkgmgkyggeae;
        ggkmskqeumuuiwck:
        $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm();
        goto yuymgwoyyoaisqqk;
        yuymgwoyyoaisqqk:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto oeygkuuqueoosiyc;
        yoiagkgmgkyggeae:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post);
        goto eeaecmiymcuigowe;
        wkmkyqgwsimewuse:
        $mksyucucyswaukig = ManipulatePost::gueasuouwqysmomu($post, true);
        goto aoosameuiqeqgoey;
        ikskmqusyosqemgw:
        $preview_permalink = DecoratorQuery::yqymaqmqiqmmmsoo("\x70\162\145\166\151\x65\167", "\x74\x72\x75\x65", $migiiksoiymissge);
        goto wscseoawewqewemo;
        geeiwiekmemskumu:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $view_link;
        goto ikskmqusyosqemgw;
        saaawiokacgeeksq:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $view_link;
        goto mgugkeugqaimsqog;
        qeaqkmcaamigyaqs:
        return $wumguikkgaigkoee;
        goto qagqcqyssacqgaie;
        ciqygeyyoukgiowa:
        cggekgkgimqweweq:
        goto qeaqkmcaamigyaqs;
        uqeyweoakwiaqmmk:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $preview_link;
        goto fsiosygamoowowke;
        qagqcqyssacqgaie:
    }
}
