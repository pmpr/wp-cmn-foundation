<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto ieuwcqiiwigyigag;
        uiwemgiowgygaqic:
        $aokagokqyuysuksm = $this->aakmagwggmkoiiyu();
        goto eecakgugucgugsqg;
        eecakgugucgugsqg:
        imycoqycguuasiac:
        goto iimsysqcwkkyussk;
        ieuwcqiiwigyigag:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto ikiwkmouiywogyqo;
        ikiwkmouiywogyqo:
        if ($aokagokqyuysuksm) {
            goto imycoqycguuasiac;
        }
        goto uiwemgiowgygaqic;
        iimsysqcwkkyussk:
        return $aokagokqyuysuksm;
        goto eawmcoqugswqumug;
        eawmcoqugswqumug:
    }
    public function init()
    {
        parent::init();
        $this->gkoiuyagqcoecigk();
    }
    public function gkoiuyagqcoecigk()
    {
        add_shortcode($this->cisyiemkeykgkomc(), [$this, "\x6f\x73\145\141\143\161\151\155\x65\x63\x77\x67\147\141\153\x77"]);
        
        add_shortcode("\x70\155\160\162\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\157\x73\x65\141\x63\x71\151\x6d\x65\143\x77\147\x67\141\153\167"]);
    }
    
    public function isqsicqgwyyasyke() : array
    {
        return $this->sscegwueamckwmcy("\x73\150\157\162\x74\143\157\144\x65\x5f\x63\x6f\x6c\165\x6d\156\163", []);
    }
    
    public function oseacqimecwggakw($wwgucssaecqekuek) : string
    {
        goto owykgicqgsqskyke;
        qumwwuaymkqkkukg:
        iuqooeosgqegimwg:
        goto eqwqoyucuckemuqw;
        mcosmsucmwgukeqs:
        $iqyiekoceqqsqoow = ManipulateArray::get($wwgucssaecqekuek, self::LAYOUT, $this->aakmagwggmkoiiyu());
        goto ycssququegogusca;
        smmuagmgoswiikku:
        ycwcgemuqkayueos:
        goto mcosmsucmwgukeqs;
        akiqwgcqoawimqma:
        return $nsmgceoqaqogqmuw;
        goto ueswooyeceyuuiim;
        aiuwkmuqsmwgyimu:
        goto ptasqiqkmgwcsoeq;
        goto qumwwuaymkqkkukg;
        ueswooyeceyuuiim:
        syksimggseucuuss:
        goto gukiwcokgekkgcyq;
        moeciuaugoiwgwgc:
        if (!(ManipulateServer::smowememmgeukwki() && !$this->kqeoeeayumeoyaoa())) {
            goto syksimggseucuuss;
        }
        goto akiqwgcqoawimqma;
        owykgicqgsqskyke:
        $nsmgceoqaqogqmuw = '';
        goto moeciuaugoiwgwgc;
        ycssququegogusca:
        if ($iqyiekoceqqsqoow) {
            goto iuqooeosgqegimwg;
        }
        goto yyygiwgsksquqiuq;
        gukiwcokgekkgcyq:
        if (is_array($wwgucssaecqekuek)) {
            goto kcgwoyoqauywsgci;
        }
        goto esiwmyaawisewmqa;
        gasmimewcwoymayo:
        ptasqiqkmgwcsoeq:
        goto owucqkqugooiaiuq;
        aaamsqswkwigciaa:
        $qookweymeqawmcwo["\x73\150\157\x72\164\143\x6f\x64\145\137\x6e\x61\x6d\x65"] = $this->aakmagwggmkoiiyu();
        goto aokywsysguyiycuw;
        oeakkqksiaaywgss:
        $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek);
        goto smmuagmgoswiikku;
        yyygiwgsksquqiuq:
        wp_die(__("\143\141\x6e\x6e\157\164\x20\x66\157\165\x6e\144\x20\x74\145\x6d\160\x6c\x61\x74\x65\x20\146\x6f\x72\x20\x63\x72\x65\x61\x74\145\40\x6d\x61\x72\x6b\165\160\40\x69\156\40\163\x68\157\x72\x74\x63\x6f\x64\x65\x20\157\x66\x3a\x20" . self::uqggkiomyiceyooa(), PR__CMN__FOUNDATION));
        goto aiuwkmuqsmwgyimu;
        eqwqoyucuckemuqw:
        $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek);
        goto cmkwkoyucmiyqwqs;
        esiwmyaawisewmqa:
        $wwgucssaecqekuek = [];
        goto ewwuqigwsiisiyka;
        ussewyuewkoismma:
        $ggauoeuaesiymgee = $this->gwquaaaaikcwcges();
        goto oeakkqksiaaywgss;
        aokywsysguyiycuw:
        $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ["\x64\145\x66\141\165\154\164" => "\x69\156\x64\x65\170\x2e\x68\164\x6d\x6c\56\x74\167\151\x67"]);
        goto gasmimewcwoymayo;
        cmkwkoyucmiyqwqs:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\163\150\157\162\x74\x63\x6f\x64\x65\x5f\x61\x74\164\x72\163"), $wwgucssaecqekuek, $this);
        goto kyqwyywqgieaqeki;
        owucqkqugooiaiuq:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x68\x6f\162\x74\143\157\144\145\137\150\164\155\x6c"), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this);
        goto ceqqkqeeykoasgqc;
        kyqwyywqgieaqeki:
        
        $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek));
        goto aaamsqswkwigciaa;
        ewwuqigwsiisiyka:
        goto ycwcgemuqkayueos;
        goto kamgoauwkoeewyio;
        kamgoauwkoeewyio:
        kcgwoyoqauywsgci:
        goto ussewyuewkoismma;
        ceqqkqeeykoasgqc:
    }
    
    public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array
    {
        goto sqkkyawioeawcugy;
        gukikisymyskwkem:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto mgigqcuwoseciami;
            uoyqmukuwgkgccyg:
            qeyuumiikmqaaocu:
            goto wkqcmyomiyuykeeq;
            omagoquasyayscka:
            $eqgoocgaqwqcimie = ManipulateArray::get($wwgucssaecqekuek, $aokagokqyuysuksm);
            goto yeygiuiosqwooymg;
            yeygiuiosqwooymg:
            $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus);
            goto cocikygyuigukeai;
            cocikygyuigukeai:
            iowsyesgugcwswgw:
            goto uoyqmukuwgkgccyg;
            mgigqcuwoseciami:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto iowsyesgugcwswgw;
            }
            goto omagoquasyayscka;
            wkqcmyomiyuykeeq:
        }
        goto aauueawyeymekmqa;
        qcckmmoqsmscecig:
        return $wwgucssaecqekuek;
        goto gaookssioagqcquy;
        mseaegwmygyisawy:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qyqwegcukwqckggq;
        sqkkyawioeawcugy:
        $this->ecwgiiuacoaokqkw();
        goto cqcsmsmyuyqemcim;
        cqcsmsmyuyqemcim:
        if ($ikgwqyuyckaewsow) {
            goto iaagsosikuuwycqu;
        }
        goto mseaegwmygyisawy;
        aauueawyeymekmqa:
        isqqsoyqokqugeau:
        goto qcckmmoqsmscecig;
        qyqwegcukwqckggq:
        iaagsosikuuwycqu:
        goto gukikisymyskwkem;
        gaookssioagqcquy:
    }
    
    public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null)
    {
        goto cckmuqueowusaasq;
        qmaiieksomkoyuyi:
        ogcsossuoysoeqiy:
        goto keqamwmqakacwwoe;
        iqwgsigqsoaqemoq:
        qageqemksoqswcwo:
        goto mkamqcmusuweioak;
        accoqsgicekgsyeo:
        if ($aiowsaccomcoikus instanceof BSSelect) {
            goto ogcsossuoysoeqiy;
        }
        goto iukswyicmecaqmsu;
        qsygogogimikogkq:
        goto qcmquqkmokioagqk;
        goto mwuuggcscaiaoueq;
        ykkieooomgmyscgg:
        goto qcmquqkmokioagqk;
        goto oukumaiywisqysue;
        iukswyicmecaqmsu:
        if (is_string($eqgoocgaqwqcimie)) {
            goto cssqogukqgeaissu;
        }
        goto qsygogogimikogkq;
        aimekgqcsgskeiss:
        yameeuaoykuuoeqs:
        goto ykkieooomgmyscgg;
        oukumaiywisqysue:
        cssqogukqgeaissu:
        goto qguqwygiosouksua;
        ecqcyykogswwckcy:
        goto qcmquqkmokioagqk;
        goto qmaiieksomkoyuyi;
        cqogucaumkswcmmi:
        $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie);
        goto aimekgqcsgskeiss;
        qguqwygiosouksua:
        $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie);
        goto gkqkqkyiikmyoyes;
        qesuygwuaaegeswm:
        $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus);
        goto ecqcyykogswwckcy;
        keqamwmqakacwwoe:
        if (!$aiowsaccomcoikus->zosqeeykkcqmmkqs()) {
            goto yameeuaoykuuoeqs;
        }
        goto cqogucaumkswcmmi;
        iquummqymwyukwcq:
        return $eqgoocgaqwqcimie;
        goto wccsuuqokyomaoqs;
        imqagwsikyoqgmek:
        if ($aiowsaccomcoikus instanceof Group) {
            goto wgqgmwayiywaiqie;
        }
        goto accoqsgicekgsyeo;
        mwuuggcscaiaoueq:
        wgqgmwayiywaiqie:
        goto qesuygwuaaegeswm;
        gkqkqkyiikmyoyes:
        qcmquqkmokioagqk:
        goto iqwgsigqsoaqemoq;
        cckmuqueowusaasq:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto asgyagaekgeoweem;
        }
        goto qgcyeywsoyacqcgw;
        qgcyeywsoyacqcgw:
        if (!$eqgoocgaqwqcimie) {
            goto qageqemksoqswcwo;
        }
        goto imqagwsikyoqgmek;
        mkamqcmusuweioak:
        asgyagaekgeoweem:
        goto iquummqymwyukwcq;
        wccsuuqokyomaoqs:
    }
    
    public function ocwoiywammqiuggq() : string
    {
        return "\x70\162\x2d\x73\150\157\162\164\x63\x6f\x64\x65";
    }
    
    public function ccmewsuaqiaegqso($eqgoocgaqwqcimie)
    {
        goto kwkymuwcawyykqmy;
        okamwaeykoyomecq:
        $wywkqkuaaekaokeq = do_shortcode("\x5b" . $uammqaqiwgcmeska[1] . "\x5d");
        goto cmociugasewqkuem;
        kwkymuwcawyykqmy:
        preg_match("\57\x7b\50\x2e\x2a\77\51\x7d\57", $eqgoocgaqwqcimie, $uammqaqiwgcmeska);
        goto qyoggesicagmmmca;
        cmociugasewqkuem:
        $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $wywkqkuaaekaokeq, $eqgoocgaqwqcimie);
        goto uusmocykkkksqiua;
        yiamkiackwgqymyq:
        return $eqgoocgaqwqcimie;
        goto wwmmyaugeaiumkiw;
        uusmocykkkksqiua:
        aacasqsuuqoogeqi:
        goto yiamkiackwgqymyq;
        qyoggesicagmmmca:
        if (!isset($uammqaqiwgcmeska[1])) {
            goto aacasqsuuqoogeqi;
        }
        goto okamwaeykoyomecq;
        wwmmyaugeaiumkiw:
    }
    
    public function squkoowcgeokaywq($somsiuiquigiqsmk) : array
    {
        goto qysqycokygquuggm;
        seoiyskcwgmysyyu:
        return $oammesyieqmwuwyi;
        goto ckemesyoeaoqggmc;
        qysqycokygquuggm:
        $oammesyieqmwuwyi = [];
        goto assygwiykikyqiko;
        mmsaugsyiwoeeook:
        mcsoqawmisuqokgy:
        goto seoiyskcwgmysyyu;
        assygwiykikyqiko:
        foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) {
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = ManipulateHTML::qgsekwygcgawekeq("\151\x6d\x67", ["\163\x72\x63" => $mcqieaigyeeyaksm]);
            kcyqywycuysksaws:
        }
        goto mmsaugsyiwoeeook;
        ckemesyoeaoqggmc:
    }
    
    public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array
    {
        return $wwgucssaecqekuek;
    }
    
    public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array
    {
        goto uwyeioqkgkmockse;
        eckeooegecygieyk:
        uoaoeecwkiwcyocu:
        goto keccieguacsgccuq;
        gisggqiemyiokyck:
        foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) {
            goto eymiseesqmwcqkkc;
            eymiseesqmwcqkkc:
            $uammqaqiwgcmeska = explode("\54", $uammqaqiwgcmeska);
            goto soqyweewgwukmieu;
            iyumqcqimwmcouwy:
            cemgcsgywukgwumc:
            goto pkuuoegoucsmcciu;
            soqyweewgwukmieu:
            foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) {
                goto wyqgycaawqceccem;
                wyqgycaawqceccem:
                preg_match("\x2f\x28\x5b\136\x3d\x5d\53\x29\57", $igqsaukqcqscimok, $uusmaiomayssaecw);
                goto ywkiskkeoqykoqaw;
                omqagaqgauuyyicw:
                if (!isset($eqgoocgaqwqcimie[1])) {
                    goto ukykouywmkccqeoq;
                }
                goto eawqikuuwwqiawok;
                eawqikuuwwqiawok:
                $uskwgmsuqowaosow = ManipulateArray::get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw);
                goto skuqeisegcaaieqa;
                eeoaoaugmmauawuu:
                ukykouywmkccqeoq:
                goto smweugsusmooiiio;
                ywkiskkeoqykoqaw:
                preg_match("\x2f\x27\x28\x5b\x5e\47\135\x2a\51\47\57", $igqsaukqcqscimok, $eqgoocgaqwqcimie);
                goto iaagwiqkugqsscgc;
                skuqeisegcaaieqa:
                $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow);
                goto eeoaoaugmmauawuu;
                iaagwiqkugqsscgc:
                $uusmaiomayssaecw = $uusmaiomayssaecw[1];
                goto omqagaqgauuyyicw;
                smweugsusmooiiio:
                koqikcoqcoaguoou:
                goto kguqqkyiyiewesws;
                kguqqkyiyiewesws:
            }
            goto uekisuecwyiqcmum;
            uekisuecwyiqcmum:
            omuwgeccqksimyey:
            goto iyumqcqimwmcouwy;
            pkuuoegoucsmcciu:
        }
        goto eckeooegecygieyk;
        uwyeioqkgkmockse:
        $aqykuigiuwmmcieu = [];
        goto yyyacuumougcsooy;
        keccieguacsgccuq:
        return $aqykuigiuwmmcieu;
        goto koecgmwauymuscgy;
        wgaickycsmcoocym:
        $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1];
        goto gisggqiemyiokyck;
        yyyacuumougcsooy:
        preg_match_all("\x2f\134\x28\x28\56\x2a\x3f\51\134\x29\x2f", $icwicymcioeyeyek, $meyiiwcswqmuggyg);
        goto wgaickycsmcoocym;
        koecgmwauymuscgy:
    }
    
    public function acgiiomwuewkmgei($eqgoocgaqwqcimie)
    {
        goto iugaemoyuymuioeg;
        iugaemoyuymuioeg:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto ccackosockmyumws;
        }
        goto aaiucmuaeceaikis;
        owwiiseawccyqagc:
        ccackosockmyumws:
        goto ycaoqcaoskmiaecy;
        aaiucmuaeceaikis:
        
        $aqykuigiuwmmcieu = explode(self::COMMA_SYMBOL, $eqgoocgaqwqcimie);
        goto uisoqcsgasswqgma;
        mgoeiguueowceuya:
        mckiewcikccuweas:
        goto owwiiseawccyqagc;
        uisoqcsgasswqgma:
        if (count($aqykuigiuwmmcieu) <= 1) {
            goto cgyqyossocsqgaug;
        }
        goto qcoaaekiwcomokqa;
        oskuaiwgisysakgu:
        goto mckiewcikccuweas;
        goto miywwekqqwcioqgm;
        miywwekqqwcioqgm:
        cgyqyossocsqgaug:
        goto koguuqyauswemwqw;
        koguuqyauswemwqw:
        $eqgoocgaqwqcimie = explode(self::PIPE_SYMBOL, $eqgoocgaqwqcimie);
        goto mgoeiguueowceuya;
        ycaoqcaoskmiaecy:
        return $eqgoocgaqwqcimie;
        goto awoyigaookcgkick;
        qcoaaekiwcomokqa:
        $eqgoocgaqwqcimie = $aqykuigiuwmmcieu;
        goto oskuaiwgisysakgu;
        awoyigaookcgkick:
    }
    
    public abstract function gwquaaaaikcwcges() : array;
}
