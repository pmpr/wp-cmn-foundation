<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        suqsqqwoamioowew:
        wuwygsqiyuwgyiuk:
        goto cmiqagsewyocigkq;
        cmiqagsewyocigkq:
        return $this->register;
        goto omuwgsgyucywcumi;
        aemgeqcgumiekeea:
        if ($this->register) {
            goto wuwygsqiyuwgyiuk;
        }
        goto uewgikciuiuosugc;
        uewgikciuiuosugc:
        $this->register = new RegisterPost();
        goto suqsqqwoamioowew;
        omuwgsgyucywcumi:
    }
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto sccwqccwauwoewuw;
        sccwqccwauwoewuw:
        if (!$aokagokqyuysuksm) {
            goto wskqiqgyeykoqasc;
        }
        goto wumwuakuugyacwka;
        cikeosouygiiowwa:
        $qmcuiciekkawmmms = ["\160\157\x73\164\137\143\x6f\156\164\145\156\x74" => "\143\157\156\x74\145\156\x74", "\160\157\163\x74\137\164\151\164\154\145" => "\164\x69\164\154\x65", "\160\x6f\163\x74\x5f\x6e\x61\155\145" => "\x73\x6c\165\x67"];
        goto cgiyoeciuqoqksqo;
        giqkswsigocgaoee:
        if (!$post) {
            goto esggayosiosceauc;
        }
        goto cikeosouygiiowwa;
        kueaeuuecmugkyco:
        goto jaewmeykskaiaace;
        goto cowuwckyacimcqsm;
        uwkuuycaymkewaqk:
        esggayosiosceauc:
        goto kueaeuuecmugkyco;
        cgiyoeciuqoqksqo:
        $gmawcgiwcmsukeiu = get_class_vars($this);
        goto iseecaeayskgyeiu;
        cowuwckyacimcqsm:
        wskqiqgyeykoqasc:
        goto gaecsagiymeucuoc;
        wumwuakuugyacwka:
        $post = ManipulatePost::get($aokagokqyuysuksm);
        goto giqkswsigocgaoee;
        muomcgmcoayqykcs:
        if ($this->miwqiiqeegeqcwis()) {
            goto qukyuugwauwwcmao;
        }
        goto cwcyomuioskkeiou;
        gaecsagiymeucuoc:
        $this->mgoeqkosywwaoqyw();
        goto muomcgmcoayqykcs;
        iiaaamgqucesscwa:
        qukyuugwauwwcmao:
        goto meguagoagscugsew;
        iseecaeayskgyeiu:
        foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto wywccuaesmeiiyso;
            wuwummwwoskooqyw:
            goto skoqcwouicsaeiio;
            goto iiaqemkciomeagas;
            aokekokkyiesokcu:
            skoqcwouicsaeiio:
            goto csuuismscwsokuem;
            csuuismscwsokuem:
            oeyiasiguciiogeo:
            goto usogsumoscyqoeig;
            wywccuaesmeiiyso:
            if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) {
                goto gmaigkymcaycemai;
            }
            goto somiumoieuwcmmyc;
            akucicwkeeouaoyi:
            $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie);
            goto qgickaesisakuiis;
            somiumoieuwcmmyc:
            if (!isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) {
                goto wmkkoskogqkeoqes;
            }
            goto akucicwkeeouaoyi;
            qgickaesisakuiis:
            wmkkoskogqkeoqes:
            goto wuwummwwoskooqyw;
            amqoooqmwikyueea:
            $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            goto aokekokkyiesokcu;
            iiaqemkciomeagas:
            gmaigkymcaycemai:
            goto amqoooqmwikyueea;
            usogsumoscyqoeig:
        }
        goto mcokakckyeogsgie;
        cwcyomuioskkeiou:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(strtolower(ManipulateString::mkwcwqkqeqkqyggc($this)));
        goto iiaaamgqucesscwa;
        meguagoagscugsew:
        parent::__construct();
        goto qcqssmkigogcyouq;
        qcqssmkigogcyouq:
        jaewmeykskaiaace:
        goto ugqcomuioeousygc;
        mcokakckyeogsgie:
        mkeoukmyusisqcwu:
        goto uwkuuycaymkewaqk;
        ugqcomuioeousygc:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu("\141\146\164\x65\x72\x5f\163\x77\151\164\x63\150\137\164\150\x65\155\x65", [$this, "\x6b\x6d\167\x61\165\x61\x61\143\x6d\x67\x65\161\x61\153\x71\147"]);
    }
    public function kgquecmsgcouyaya()
    {
        goto mkigwwusauycogeo;
        ewogmgqociikueio:
        $this->cecaguuoecmccuse("\x72\x65\x6e\x64\145\162\137{$this->miwqiiqeegeqcwis()}\137\143\150\151\154\144\x72\x65\x6e", [$this, "\x75\161\145\167\x63\165\x75\151\x67\147\x63\143\165\x71\x69\x61"], 10, 2);
        goto lsgaicysguweqccw;
        sqemyumsygwsywci:
        if (!method_exists($this, "\x75\161\x65\167\143\x75\x75\151\x67\147\143\143\x75\161\151\141")) {
            goto ekkwsmagosycuwes;
        }
        goto ewogmgqociikueio;
        lsgaicysguweqccw:
        ekkwsmagosycuwes:
        goto eosqwowqiuwqowcs;
        mkigwwusauycogeo:
        $this->cecaguuoecmccuse("\160\157\x73\x74\x5f\165\x70\x64\x61\164\145\x64\137\x6d\x65\163\163\141\x67\x65\163", [$this, "\x70\x6d\151\167\153\x77\153\171\147\x61\x65\x77\151\143\x71\x73"])->cecaguuoecmccuse("\163\x75\142\164\x69\x74\x6c\x65\137\166\151\145\x77\137\x73\x75\x70\160\x6f\x72\x74\145\x64", [$this, "\x6f\167\171\x63\155\145\163\x65\x65\151\153\143\141\x71\x77\153"]);
        goto sqemyumsygwsywci;
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
        gigqowomouqoseqm:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto ugaiiouaiewqiowk;
        gawiwysyuakagyaw:
        soyiakkqikmoiocq:
        goto kuqosogscasgaywu;
        yqeescckkwigakku:
        $this->register();
        goto oyyiikasiaaoecis;
        omioyaykskkmaaig:
        $this->oyeskqayoscwciem()->ckwgqocyuaysggma("\163\x6c\x75\147", $this->miwqiiqeegeqcwis())->wakugsseussemkka(["\x74\151\x74\154\x65", "\x65\144\x69\x74\x6f\162", "\145\170\143\x65\162\160\x74", "\x74\150\165\x6d\142\x6e\141\x69\x6c"]);
        goto yscwicwwogwmouuy;
        oyyiikasiaaoecis:
        global $wp_rewrite;
        goto gummamsgywaokgig;
        casyeyyykgiimmko:
        if ($this->oyeskqayoscwciem()->aoaiwceqgsckygsg()) {
            goto gqioicscmcgwkakm;
        }
        goto omioyaykskkmaaig;
        zwqoeygkiswogcqe:
        if (!(method_exists($this, "\171\x65\171\x69\x67\165\171\145\x67\155\155\171\165\163\x65\141") && is_admin())) {
            goto soyiakkqikmoiocq;
        }
        goto gsoyiigokegkmoki;
        yscwicwwogwmouuy:
        gqioicscmcgwkakm:
        goto yqeescckkwigakku;
        gummamsgywaokgig:
        $acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis());
        goto ewyueqokigysemgu;
        gsoyiigokegkmoki:
        $this->yeyiguyegmmyusea();
        goto gawiwysyuakagyaw;
        ugaiiouaiewqiowk:
        eouuqweagyceooya:
        goto zwqoeygkiswogcqe;
        kuqosogscasgaywu:
    }
    public function register()
    {
        goto eqkeyqqwmmcisqac;
        mmqisagoemaccuwg:
        register_post_type($ymqmyyeuycgmigyo, $ywmkwiwkosakssii);
        goto ksayqqaywugoaemm;
        ugeukowiaigeagwy:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto yiwuuaookucgwmqo;
        yiwuuaookucgwmqo:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto eacioiukuoyksseo;
        }
        goto mmqisagoemaccuwg;
        eqkeyqqwmmcisqac:
        $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq();
        goto ugeukowiaigeagwy;
        ksayqqaywugoaemm:
        eacioiukuoyksseo:
        goto yoiesagguwgeoksm;
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
        oewywyackmoqssga:
        $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie);
        goto gwmcagqwciamkige;
        msaqmcugmqimwwmo:
        if (!property_exists($this, $oaukocmsckciqaok)) {
            goto oaqocgwyuyakaeag;
        }
        goto oewywyackmoqssga;
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
        ggkmskqeumuuiwck:
        $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm();
        goto yuymgwoyyoaisqqk;
        fsiosygamoowowke:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $preview_link;
        goto ciqygeyyoukgiowa;
        wkmkyqgwsimewuse:
        $mksyucucyswaukig = ManipulatePost::gueasuouwqysmomu($post, true);
        goto aoosameuiqeqgoey;
        mgugkeugqaimsqog:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $view_link;
        goto geeiwiekmemskumu;
        yuymgwoyyoaisqqk:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto oeygkuuqueoosiyc;
        ciqygeyyoukgiowa:
        cggekgkgimqweweq:
        goto qeaqkmcaamigyaqs;
        oeygkuuqueoosiyc:
        $wumguikkgaigkoee[$useksmwkuswkwcqg] = [
            0 => '',
            
            1 => sprintf(__("\x25\163\40\165\x70\144\x61\x74\x65\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            2 => __("\103\x75\x73\x74\157\x6d\x20\x66\151\x65\x6c\x64\40\165\160\x64\141\x74\x65\x64\56", PR__CMN__FOUNDATION),
            3 => __("\103\x75\x73\164\157\155\x20\146\x69\x65\x6c\144\x20\144\x65\154\145\164\145\144\56", PR__CMN__FOUNDATION),
            4 => sprintf(__("\x25\x73\40\x75\160\144\141\x74\145\x64\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            
            5 => isset($_GET["\x72\x65\166\x69\163\x69\x6f\x6e"]) ? sprintf(__("\x25\x73\40\x72\x65\163\x74\157\x72\145\x64\x20\164\x6f\40\162\145\166\x69\163\x69\x6f\156\40\146\x72\157\x6d\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET["\x72\x65\x76\x69\163\x69\x6f\x6e"], false)) : false,
            6 => sprintf(__("\45\x73\40\x70\165\x62\x6c\x69\x73\x68\x65\144\56", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            7 => sprintf(__("\x25\x73\x20\163\141\x76\145\x64\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            8 => sprintf(__("\45\x73\40\163\165\x62\155\151\x74\164\x65\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
            9 => sprintf(__("\45\61\44\163\x20\x73\x63\150\145\144\165\x6c\x65\x64\x20\146\157\162\x3a\40\74\x73\164\x72\157\x6e\x67\76\45\x32\x24\x73\74\x2f\163\x74\162\x6f\x6e\147\76\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__("\x4d\40\x6a\x2c\40\x59\x20\100\x20\107\x3a\151", PR__CMN__FOUNDATION), strtotime($post->post_date))),
            10 => sprintf(__("\x25\x73\x20\x64\x72\x61\x66\x74\40\x75\160\x64\x61\x74\145\144\x2e", PR__CMN__FOUNDATION), $sisssumicskyceeg),
        ];
        goto yoiagkgmgkyggeae;
        saaawiokacgeeksq:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $view_link;
        goto mgugkeugqaimsqog;
        oommkeyocacugygs:
        $post = ManipulatePost::get();
        goto wkmkyqgwsimewuse;
        aoosameuiqeqgoey:
        if (!($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name)) {
            goto cggekgkgimqweweq;
        }
        goto ggkmskqeumuuiwck;
        ikskmqusyosqemgw:
        $preview_permalink = DecoratorQuery::yqymaqmqiqmmmsoo("\160\162\145\x76\151\145\167", "\x74\x72\x75\x65", $migiiksoiymissge);
        goto wscseoawewqewemo;
        wscseoawewqewemo:
        $preview_link = sprintf("\40\74\141\40\164\141\162\147\145\x74\75\x22\137\142\154\x61\156\153\42\x20\150\x72\x65\x66\75\x22\x25\163\x22\x3e\x25\x73\x3c\x2f\141\x3e", esc_url($preview_permalink), sprintf(__("\120\162\x65\166\x69\x65\167\40\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto uqeyweoakwiaqmmk;
        qeaqkmcaamigyaqs:
        return $wumguikkgaigkoee;
        goto qagqcqyssacqgaie;
        eeaecmiymcuigowe:
        $view_link = sprintf("\40\74\141\x20\x68\x72\145\146\75\42\45\x73\x22\x3e\x25\x73\74\57\141\76", esc_url($migiiksoiymissge), sprintf(__("\126\151\x65\167\40\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg));
        goto saaawiokacgeeksq;
        geeiwiekmemskumu:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $view_link;
        goto ikskmqusyosqemgw;
        uqeyweoakwiaqmmk:
        $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $preview_link;
        goto fsiosygamoowowke;
        yoiagkgmgkyggeae:
        $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post);
        goto eeaecmiymcuigowe;
        qagqcqyssacqgaie:
    }
}
