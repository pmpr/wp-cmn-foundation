<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element\Shortcode;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Segment as BaseClass;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\BSSelect;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

abstract class Segment extends BaseClass
{
    
    protected $target = self::ALL;
    
    protected bool $enableInAmp = true;
    
    public function squsacgomqgkakaw()
    {
        return $this->target;
    }
    
    public function kqeoeeayumeoyaoa() : ?bool
    {
        return $this->enableInAmp;
    }
    
    public function mwikyscisascoeea() : ?string
    {
        goto sgocsssuiwqiauaq;
        weowiucswssseeoi:
        if ($aokagokqyuysuksm) {
            goto uggiuigwgwokwgiq;
        }
        goto gmuwcugusceigoky;
        gmuwcugusceigoky:
        $aokagokqyuysuksm = $this->aakmagwggmkoiiyu();
        goto aaimmucyosywoass;
        aaimmucyosywoass:
        uggiuigwgwokwgiq:
        goto geiamswcamageuyw;
        geiamswcamageuyw:
        return $aokagokqyuysuksm;
        goto awcgwaasyugkmkqy;
        sgocsssuiwqiauaq:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto weowiucswssseeoi;
        awcgwaasyugkmkqy:
    }
    public function init()
    {
        parent::init();
        $this->gkoiuyagqcoecigk();
    }
    public function gkoiuyagqcoecigk()
    {
        add_shortcode($this->cisyiemkeykgkomc(), [$this, "\157\x73\145\x61\143\161\x69\x6d\145\143\167\x67\x67\x61\x6b\x77"]);
        
        add_shortcode("\160\155\160\162\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\163\x65\141\x63\161\x69\x6d\x65\x63\167\147\147\141\x6b\x77"]);
    }
    
    public function isqsicqgwyyasyke() : array
    {
        return $this->sscegwueamckwmcy("\163\150\x6f\162\x74\x63\x6f\144\145\137\143\x6f\154\x75\x6d\156\163", []);
    }
    
    public function oseacqimecwggakw($wwgucssaecqekuek) : string
    {
        goto oskkwqymsyucwaow;
        zwyeiuiuwmomyaui:
        $ggauoeuaesiymgee = $this->gwquaaaaikcwcges();
        goto siuogwuegkksagas;
        uieuqmawsakguqua:
        goto koagmgoqguqqksmy;
        goto kwwuwmyeqcqsikws;
        qoeqoyciommaewgo:
        $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek);
        goto qceciyagaeieoous;
        egceiosgoikqmksy:
        $iqyiekoceqqsqoow = ManipulateArray::get($wwgucssaecqekuek, self::LAYOUT, $this->aakmagwggmkoiiyu());
        goto ekucagwgcssmgqiu;
        kwwuwmyeqcqsikws:
        kgkyaciicuyywmge:
        goto zwyeiuiuwmomyaui;
        sigokuuaiuwmqmuw:
        koagmgoqguqqksmy:
        goto egceiosgoikqmksy;
        aigumokaoqemqcyc:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x68\157\162\164\x63\x6f\144\x65\137\150\x74\x6d\154"), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this);
        goto qmykwwkysceaysea;
        yywiqsiicysqcogw:
        if (is_array($wwgucssaecqekuek)) {
            goto kgkyaciicuyywmge;
        }
        goto iuqayqiqyyyiaeuk;
        qgiesqckowcksacg:
        $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ["\144\145\146\141\165\x6c\x74" => "\x69\156\x64\145\x78\56\150\x74\x6d\154\56\164\x77\x69\147"]);
        goto aokmwkymqcqmyiym;
        gyucwgwoiumceyks:
        $qookweymeqawmcwo["\163\150\x6f\x72\164\143\x6f\144\145\137\x6e\x61\x6d\145"] = $this->aakmagwggmkoiiyu();
        goto qgiesqckowcksacg;
        ygqymamcoygaeaio:
        goto acmaoiqemyycsaka;
        goto mkkyuwckaeosicay;
        ogukuswqqqwgaeui:
        return $nsmgceoqaqogqmuw;
        goto joguwmwqyuewsyiq;
        siuogwuegkksagas:
        $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek);
        goto sigokuuaiuwmqmuw;
        cmeuiweeoykyskow:
        if (!(ManipulateServer::smowememmgeukwki() && !$this->kqeoeeayumeoyaoa())) {
            goto wwgucckkqkmogugq;
        }
        goto ogukuswqqqwgaeui;
        oggaskekyaokouua:
        wp_die(__("\x63\141\x6e\156\157\x74\x20\x66\157\x75\x6e\x64\40\x74\x65\x6d\x70\x6c\141\x74\145\x20\x66\157\x72\40\143\162\x65\141\x74\x65\x20\x6d\x61\162\153\165\160\x20\151\x6e\x20\x73\150\157\x72\x74\143\157\x64\x65\40\x6f\146\72\40" . self::uqggkiomyiceyooa(), PR__CMN__FOUNDATION));
        goto ygqymamcoygaeaio;
        oskkwqymsyucwaow:
        $nsmgceoqaqogqmuw = '';
        goto cmeuiweeoykyskow;
        joguwmwqyuewsyiq:
        wwgucckkqkmogugq:
        goto yywiqsiicysqcogw;
        iuqayqiqyyyiaeuk:
        $wwgucssaecqekuek = [];
        goto uieuqmawsakguqua;
        gyeemskiioowowag:
        
        $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek));
        goto gyucwgwoiumceyks;
        qceciyagaeieoous:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\163\150\157\162\164\143\157\144\x65\x5f\x61\164\164\x72\163"), $wwgucssaecqekuek, $this);
        goto gyeemskiioowowag;
        aokmwkymqcqmyiym:
        acmaoiqemyycsaka:
        goto aigumokaoqemqcyc;
        ekucagwgcssmgqiu:
        if ($iqyiekoceqqsqoow) {
            goto ciwysskisqauwcug;
        }
        goto oggaskekyaokouua;
        mkkyuwckaeosicay:
        ciwysskisqauwcug:
        goto qoeqoyciommaewgo;
        qmykwwkysceaysea:
    }
    
    public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array
    {
        goto caasqyskqsecuawu;
        komwmwgumckimamm:
        return $wwgucssaecqekuek;
        goto geywkoimqymqkyem;
        ckwwkkemmmccgcws:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto gcskwyqqyqmauwow;
        caasqyskqsecuawu:
        $this->ecwgiiuacoaokqkw();
        goto iyomyggaemmmucqq;
        gcskwyqqyqmauwow:
        iuiymememwkaqcuk:
        goto mqogcscwmowgogkm;
        cgueqqgoouykmoes:
        uomaegayqaycamwq:
        goto komwmwgumckimamm;
        mqogcscwmowgogkm:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto yqwgcuuuocyqysso;
            yqwgcuuuocyqysso:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto yssakamqiieugqyk;
            }
            goto miekisauamqswgie;
            ccsemsumseigmmoa:
            yssakamqiieugqyk:
            goto qyogwowwcogugweq;
            amyqwcqwqccgwigq:
            $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus);
            goto ccsemsumseigmmoa;
            qyogwowwcogugweq:
            kqkicmysyusskuua:
            goto eeqaqskwawmqocaa;
            miekisauamqswgie:
            $eqgoocgaqwqcimie = ManipulateArray::get($wwgucssaecqekuek, $aokagokqyuysuksm);
            goto amyqwcqwqccgwigq;
            eeqaqskwawmqocaa:
        }
        goto cgueqqgoouykmoes;
        iyomyggaemmmucqq:
        if ($ikgwqyuyckaewsow) {
            goto iuiymememwkaqcuk;
        }
        goto ckwwkkemmmccgcws;
        geywkoimqymqkyem:
    }
    
    public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null)
    {
        goto ooaiowseiuogqeek;
        iuqooeosgqegimwg:
        sugqcoagaisyeuge:
        goto ptasqiqkmgwcsoeq;
        uguigcssweukyeic:
        $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus);
        goto imycoqycguuasiac;
        syksimggseucuuss:
        $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie);
        goto kcgwoyoqauywsgci;
        imycoqycguuasiac:
        goto ugssgcuiagwkicqq;
        goto ieuwcqiiwigyigag;
        ptasqiqkmgwcsoeq:
        return $eqgoocgaqwqcimie;
        goto owykgicqgsqskyke;
        qmqakowgsqgcqass:
        if ($aiowsaccomcoikus instanceof Group) {
            goto qcuiamcckoceggwu;
        }
        goto iusicoaiyamcoikg;
        iimsysqcwkkyussk:
        goto ugssgcuiagwkicqq;
        goto eawmcoqugswqumug;
        iusicoaiyamcoikg:
        if ($aiowsaccomcoikus instanceof BSSelect) {
            goto iiukuwmwimmiiiim;
        }
        goto gsaascomiaiemesg;
        gsaascomiaiemesg:
        if (is_string($eqgoocgaqwqcimie)) {
            goto ewukmsoywcsagcsg;
        }
        goto egqgieqcwseicqki;
        ooaiowseiuogqeek:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto sugqcoagaisyeuge;
        }
        goto kwigscuqywmmyess;
        uiwemgiowgygaqic:
        $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie);
        goto eecakgugucgugsqg;
        ycwcgemuqkayueos:
        soisuocuwuwaaoig:
        goto iuqooeosgqegimwg;
        kcgwoyoqauywsgci:
        ugssgcuiagwkicqq:
        goto ycwcgemuqkayueos;
        eawmcoqugswqumug:
        ewukmsoywcsagcsg:
        goto syksimggseucuuss;
        egqgieqcwseicqki:
        goto ugssgcuiagwkicqq;
        goto gyessymseyoiocey;
        eecakgugucgugsqg:
        uoeegwsgqyokwwws:
        goto iimsysqcwkkyussk;
        gyessymseyoiocey:
        qcuiamcckoceggwu:
        goto uguigcssweukyeic;
        ikiwkmouiywogyqo:
        if (!$aiowsaccomcoikus->zosqeeykkcqmmkqs()) {
            goto uoeegwsgqyokwwws;
        }
        goto uiwemgiowgygaqic;
        kwigscuqywmmyess:
        if (!$eqgoocgaqwqcimie) {
            goto soisuocuwuwaaoig;
        }
        goto qmqakowgsqgcqass;
        ieuwcqiiwigyigag:
        iiukuwmwimmiiiim:
        goto ikiwkmouiywogyqo;
        owykgicqgsqskyke:
    }
    
    public function ocwoiywammqiuggq() : string
    {
        return "\x70\162\x2d\x73\150\x6f\x72\164\143\x6f\x64\x65";
    }
    
    public function ccmewsuaqiaegqso($eqgoocgaqwqcimie)
    {
        goto akiqwgcqoawimqma;
        ewwuqigwsiisiyka:
        moeciuaugoiwgwgc:
        goto kamgoauwkoeewyio;
        kamgoauwkoeewyio:
        return $eqgoocgaqwqcimie;
        goto ussewyuewkoismma;
        akiqwgcqoawimqma:
        preg_match("\x2f\x7b\x28\x2e\x2a\77\51\175\x2f", $eqgoocgaqwqcimie, $uammqaqiwgcmeska);
        goto ueswooyeceyuuiim;
        esiwmyaawisewmqa:
        $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $wywkqkuaaekaokeq, $eqgoocgaqwqcimie);
        goto ewwuqigwsiisiyka;
        gukiwcokgekkgcyq:
        $wywkqkuaaekaokeq = do_shortcode("\x5b" . $uammqaqiwgcmeska[1] . "\x5d");
        goto esiwmyaawisewmqa;
        ueswooyeceyuuiim:
        if (!isset($uammqaqiwgcmeska[1])) {
            goto moeciuaugoiwgwgc;
        }
        goto gukiwcokgekkgcyq;
        ussewyuewkoismma:
    }
    
    public function squkoowcgeokaywq($somsiuiquigiqsmk) : array
    {
        goto mcosmsucmwgukeqs;
        aiuwkmuqsmwgyimu:
        return $oammesyieqmwuwyi;
        goto qumwwuaymkqkkukg;
        ycssququegogusca:
        foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) {
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = ManipulateHTML::qgsekwygcgawekeq("\x69\x6d\147", ["\x73\x72\143" => $mcqieaigyeeyaksm]);
            smmuagmgoswiikku:
        }
        goto yyygiwgsksquqiuq;
        mcosmsucmwgukeqs:
        $oammesyieqmwuwyi = [];
        goto ycssququegogusca;
        yyygiwgsksquqiuq:
        oeakkqksiaaywgss:
        goto aiuwkmuqsmwgyimu;
        qumwwuaymkqkkukg:
    }
    
    public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array
    {
        return $wwgucssaecqekuek;
    }
    
    public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array
    {
        goto cqcsmsmyuyqemcim;
        cqcsmsmyuyqemcim:
        $aqykuigiuwmmcieu = [];
        goto mseaegwmygyisawy;
        aauueawyeymekmqa:
        eqwqoyucuckemuqw:
        goto qcckmmoqsmscecig;
        mseaegwmygyisawy:
        preg_match_all("\57\134\x28\50\56\x2a\x3f\51\x5c\51\57", $icwicymcioeyeyek, $meyiiwcswqmuggyg);
        goto qyqwegcukwqckggq;
        qyqwegcukwqckggq:
        $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1];
        goto gukikisymyskwkem;
        qcckmmoqsmscecig:
        return $aqykuigiuwmmcieu;
        goto gaookssioagqcquy;
        gukikisymyskwkem:
        foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) {
            goto yeygiuiosqwooymg;
            cocikygyuigukeai:
            foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) {
                goto gasmimewcwoymayo;
                ceqqkqeeykoasgqc:
                $uusmaiomayssaecw = $uusmaiomayssaecw[1];
                goto iaagsosikuuwycqu;
                qeyuumiikmqaaocu:
                $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow);
                goto iowsyesgugcwswgw;
                owucqkqugooiaiuq:
                preg_match("\x2f\47\50\x5b\x5e\x27\x5d\52\51\47\57", $igqsaukqcqscimok, $eqgoocgaqwqcimie);
                goto ceqqkqeeykoasgqc;
                gasmimewcwoymayo:
                preg_match("\x2f\x28\133\x5e\75\135\53\51\x2f", $igqsaukqcqscimok, $uusmaiomayssaecw);
                goto owucqkqugooiaiuq;
                isqqsoyqokqugeau:
                $uskwgmsuqowaosow = ManipulateArray::get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw);
                goto qeyuumiikmqaaocu;
                iaagsosikuuwycqu:
                if (!isset($eqgoocgaqwqcimie[1])) {
                    goto aokywsysguyiycuw;
                }
                goto isqqsoyqokqugeau;
                mgigqcuwoseciami:
                aaamsqswkwigciaa:
                goto omagoquasyayscka;
                iowsyesgugcwswgw:
                aokywsysguyiycuw:
                goto mgigqcuwoseciami;
                omagoquasyayscka:
            }
            goto uoyqmukuwgkgccyg;
            wkqcmyomiyuykeeq:
            cmkwkoyucmiyqwqs:
            goto sqkkyawioeawcugy;
            uoyqmukuwgkgccyg:
            kyqwyywqgieaqeki:
            goto wkqcmyomiyuykeeq;
            yeygiuiosqwooymg:
            $uammqaqiwgcmeska = explode("\54", $uammqaqiwgcmeska);
            goto cocikygyuigukeai;
            sqkkyawioeawcugy:
        }
        goto aauueawyeymekmqa;
        gaookssioagqcquy:
    }
    
    public function acgiiomwuewkmgei($eqgoocgaqwqcimie)
    {
        goto ogcsossuoysoeqiy;
        qageqemksoqswcwo:
        if (count($aqykuigiuwmmcieu) <= 1) {
            goto yameeuaoykuuoeqs;
        }
        goto asgyagaekgeoweem;
        qgcyeywsoyacqcgw:
        yameeuaoykuuoeqs:
        goto imqagwsikyoqgmek;
        imqagwsikyoqgmek:
        $eqgoocgaqwqcimie = explode(self::PIPE_SYMBOL, $eqgoocgaqwqcimie);
        goto accoqsgicekgsyeo;
        asgyagaekgeoweem:
        $eqgoocgaqwqcimie = $aqykuigiuwmmcieu;
        goto cckmuqueowusaasq;
        cckmuqueowusaasq:
        goto qcmquqkmokioagqk;
        goto qgcyeywsoyacqcgw;
        iukswyicmecaqmsu:
        wgqgmwayiywaiqie:
        goto qsygogogimikogkq;
        accoqsgicekgsyeo:
        qcmquqkmokioagqk:
        goto iukswyicmecaqmsu;
        ogcsossuoysoeqiy:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto wgqgmwayiywaiqie;
        }
        goto cssqogukqgeaissu;
        cssqogukqgeaissu:
        
        $aqykuigiuwmmcieu = explode(self::COMMA_SYMBOL, $eqgoocgaqwqcimie);
        goto qageqemksoqswcwo;
        qsygogogimikogkq:
        return $eqgoocgaqwqcimie;
        goto mwuuggcscaiaoueq;
        mwuuggcscaiaoueq:
    }
    
    public abstract function gwquaaaaikcwcges() : array;
}
