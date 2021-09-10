<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto eecakgugucgugsqg;
        iimsysqcwkkyussk:
        if ($aokagokqyuysuksm) {
            goto uiwemgiowgygaqic;
        }
        goto eawmcoqugswqumug;
        kcgwoyoqauywsgci:
        return $aokagokqyuysuksm;
        goto ycwcgemuqkayueos;
        eecakgugucgugsqg:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto iimsysqcwkkyussk;
        eawmcoqugswqumug:
        $aokagokqyuysuksm = $this->aakmagwggmkoiiyu();
        goto syksimggseucuuss;
        syksimggseucuuss:
        uiwemgiowgygaqic:
        goto kcgwoyoqauywsgci;
        ycwcgemuqkayueos:
    }
    public function init()
    {
        parent::init();
        $this->gkoiuyagqcoecigk();
    }
    public function gkoiuyagqcoecigk()
    {
        add_shortcode($this->cisyiemkeykgkomc(), [$this, "\157\163\145\x61\x63\x71\x69\x6d\145\143\x77\147\x67\141\153\x77"]);
        
        add_shortcode("\160\x6d\160\x72\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\x73\x65\x61\x63\161\151\x6d\145\x63\167\x67\x67\141\x6b\167"]);
    }
    
    public function isqsicqgwyyasyke() : array
    {
        return $this->sscegwueamckwmcy("\x73\150\157\x72\x74\x63\x6f\144\x65\137\x63\157\x6c\x75\155\156\163", []);
    }
    
    public function oseacqimecwggakw($wwgucssaecqekuek) : string
    {
        goto ueswooyeceyuuiim;
        qumwwuaymkqkkukg:
        if ($iqyiekoceqqsqoow) {
            goto moeciuaugoiwgwgc;
        }
        goto eqwqoyucuckemuqw;
        iaagsosikuuwycqu:
        akiqwgcqoawimqma:
        goto isqqsoyqokqugeau;
        yyygiwgsksquqiuq:
        owykgicqgsqskyke:
        goto aiuwkmuqsmwgyimu;
        gukiwcokgekkgcyq:
        if (!(ManipulateServer::smowememmgeukwki() && !$this->kqeoeeayumeoyaoa())) {
            goto iuqooeosgqegimwg;
        }
        goto esiwmyaawisewmqa;
        ussewyuewkoismma:
        $wwgucssaecqekuek = [];
        goto oeakkqksiaaywgss;
        aaamsqswkwigciaa:
        $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek);
        goto aokywsysguyiycuw;
        oeakkqksiaaywgss:
        goto owykgicqgsqskyke;
        goto smmuagmgoswiikku;
        aiuwkmuqsmwgyimu:
        $iqyiekoceqqsqoow = ManipulateArray::get($wwgucssaecqekuek, self::LAYOUT, $this->aakmagwggmkoiiyu());
        goto qumwwuaymkqkkukg;
        ueswooyeceyuuiim:
        $nsmgceoqaqogqmuw = '';
        goto gukiwcokgekkgcyq;
        kyqwyywqgieaqeki:
        moeciuaugoiwgwgc:
        goto aaamsqswkwigciaa;
        smmuagmgoswiikku:
        ptasqiqkmgwcsoeq:
        goto mcosmsucmwgukeqs;
        esiwmyaawisewmqa:
        return $nsmgceoqaqogqmuw;
        goto ewwuqigwsiisiyka;
        eqwqoyucuckemuqw:
        wp_die(__("\143\x61\156\156\157\164\40\x66\157\165\156\x64\40\x74\x65\x6d\160\x6c\141\164\145\40\x66\x6f\162\x20\143\162\145\141\x74\145\40\x6d\141\x72\x6b\x75\160\40\x69\x6e\x20\163\x68\157\x72\x74\143\x6f\x64\145\40\x6f\x66\x3a\40" . self::uqggkiomyiceyooa(), PR__CMN__FOUNDATION));
        goto cmkwkoyucmiyqwqs;
        owucqkqugooiaiuq:
        $qookweymeqawmcwo["\x73\150\157\162\164\x63\x6f\144\x65\137\x6e\141\x6d\145"] = $this->aakmagwggmkoiiyu();
        goto ceqqkqeeykoasgqc;
        gasmimewcwoymayo:
        
        $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek));
        goto owucqkqugooiaiuq;
        ycssququegogusca:
        $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek);
        goto yyygiwgsksquqiuq;
        ewwuqigwsiisiyka:
        iuqooeosgqegimwg:
        goto kamgoauwkoeewyio;
        ceqqkqeeykoasgqc:
        $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ["\144\145\x66\141\165\154\164" => "\151\156\x64\145\170\56\x68\164\x6d\x6c\x2e\x74\167\x69\147"]);
        goto iaagsosikuuwycqu;
        isqqsoyqokqugeau:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x68\x6f\x72\164\x63\157\144\x65\x5f\150\x74\155\x6c"), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this);
        goto qeyuumiikmqaaocu;
        kamgoauwkoeewyio:
        if (is_array($wwgucssaecqekuek)) {
            goto ptasqiqkmgwcsoeq;
        }
        goto ussewyuewkoismma;
        cmkwkoyucmiyqwqs:
        goto akiqwgcqoawimqma;
        goto kyqwyywqgieaqeki;
        aokywsysguyiycuw:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\x73\x68\157\x72\x74\x63\x6f\x64\x65\x5f\x61\x74\x74\162\x73"), $wwgucssaecqekuek, $this);
        goto gasmimewcwoymayo;
        mcosmsucmwgukeqs:
        $ggauoeuaesiymgee = $this->gwquaaaaikcwcges();
        goto ycssququegogusca;
        qeyuumiikmqaaocu:
    }
    
    public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array
    {
        goto qyqwegcukwqckggq;
        aauueawyeymekmqa:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qcckmmoqsmscecig;
        qcckmmoqsmscecig:
        iowsyesgugcwswgw:
        goto gaookssioagqcquy;
        gukikisymyskwkem:
        if ($ikgwqyuyckaewsow) {
            goto iowsyesgugcwswgw;
        }
        goto aauueawyeymekmqa;
        yameeuaoykuuoeqs:
        mgigqcuwoseciami:
        goto qcmquqkmokioagqk;
        qcmquqkmokioagqk:
        return $wwgucssaecqekuek;
        goto wgqgmwayiywaiqie;
        gaookssioagqcquy:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto cocikygyuigukeai;
            wkqcmyomiyuykeeq:
            $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus);
            goto sqkkyawioeawcugy;
            cocikygyuigukeai:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto yeygiuiosqwooymg;
            }
            goto uoyqmukuwgkgccyg;
            uoyqmukuwgkgccyg:
            $eqgoocgaqwqcimie = ManipulateArray::get($wwgucssaecqekuek, $aokagokqyuysuksm);
            goto wkqcmyomiyuykeeq;
            sqkkyawioeawcugy:
            yeygiuiosqwooymg:
            goto cqcsmsmyuyqemcim;
            cqcsmsmyuyqemcim:
            omagoquasyayscka:
            goto mseaegwmygyisawy;
            mseaegwmygyisawy:
        }
        goto yameeuaoykuuoeqs;
        qyqwegcukwqckggq:
        $this->ecwgiiuacoaokqkw();
        goto gukikisymyskwkem;
        wgqgmwayiywaiqie:
    }
    
    public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null)
    {
        goto accoqsgicekgsyeo;
        qesuygwuaaegeswm:
        if (is_string($eqgoocgaqwqcimie)) {
            goto cckmuqueowusaasq;
        }
        goto ecqcyykogswwckcy;
        aacasqsuuqoogeqi:
        imqagwsikyoqgmek:
        goto kwkymuwcawyykqmy;
        cqogucaumkswcmmi:
        goto cssqogukqgeaissu;
        goto aimekgqcsgskeiss;
        mwuuggcscaiaoueq:
        if ($aiowsaccomcoikus instanceof BSSelect) {
            goto asgyagaekgeoweem;
        }
        goto qesuygwuaaegeswm;
        kwkymuwcawyykqmy:
        return $eqgoocgaqwqcimie;
        goto qyoggesicagmmmca;
        keqamwmqakacwwoe:
        $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus);
        goto cqogucaumkswcmmi;
        iqwgsigqsoaqemoq:
        cckmuqueowusaasq:
        goto mkamqcmusuweioak;
        wccsuuqokyomaoqs:
        qgcyeywsoyacqcgw:
        goto aacasqsuuqoogeqi;
        iquummqymwyukwcq:
        cssqogukqgeaissu:
        goto wccsuuqokyomaoqs;
        gkqkqkyiikmyoyes:
        goto cssqogukqgeaissu;
        goto iqwgsigqsoaqemoq;
        iukswyicmecaqmsu:
        if (!$eqgoocgaqwqcimie) {
            goto qgcyeywsoyacqcgw;
        }
        goto qsygogogimikogkq;
        ecqcyykogswwckcy:
        goto cssqogukqgeaissu;
        goto qmaiieksomkoyuyi;
        qsygogogimikogkq:
        if ($aiowsaccomcoikus instanceof Group) {
            goto qageqemksoqswcwo;
        }
        goto mwuuggcscaiaoueq;
        oukumaiywisqysue:
        $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie);
        goto qguqwygiosouksua;
        mkamqcmusuweioak:
        $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie);
        goto iquummqymwyukwcq;
        aimekgqcsgskeiss:
        asgyagaekgeoweem:
        goto ykkieooomgmyscgg;
        qguqwygiosouksua:
        ogcsossuoysoeqiy:
        goto gkqkqkyiikmyoyes;
        qmaiieksomkoyuyi:
        qageqemksoqswcwo:
        goto keqamwmqakacwwoe;
        accoqsgicekgsyeo:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto imqagwsikyoqgmek;
        }
        goto iukswyicmecaqmsu;
        ykkieooomgmyscgg:
        if (!$aiowsaccomcoikus->zosqeeykkcqmmkqs()) {
            goto ogcsossuoysoeqiy;
        }
        goto oukumaiywisqysue;
        qyoggesicagmmmca:
    }
    
    public function ocwoiywammqiuggq() : string
    {
        return "\160\162\x2d\x73\x68\x6f\x72\164\x63\157\x64\145";
    }
    
    public function ccmewsuaqiaegqso($eqgoocgaqwqcimie)
    {
        goto cmociugasewqkuem;
        kcyqywycuysksaws:
        return $eqgoocgaqwqcimie;
        goto qysqycokygquuggm;
        uusmocykkkksqiua:
        if (!isset($uammqaqiwgcmeska[1])) {
            goto okamwaeykoyomecq;
        }
        goto yiamkiackwgqymyq;
        yiamkiackwgqymyq:
        $wywkqkuaaekaokeq = do_shortcode("\x5b" . $uammqaqiwgcmeska[1] . "\x5d");
        goto wwmmyaugeaiumkiw;
        wwmmyaugeaiumkiw:
        $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $wywkqkuaaekaokeq, $eqgoocgaqwqcimie);
        goto mcsoqawmisuqokgy;
        mcsoqawmisuqokgy:
        okamwaeykoyomecq:
        goto kcyqywycuysksaws;
        cmociugasewqkuem:
        preg_match("\x2f\173\x28\56\52\x3f\x29\x7d\x2f", $eqgoocgaqwqcimie, $uammqaqiwgcmeska);
        goto uusmocykkkksqiua;
        qysqycokygquuggm:
    }
    
    public function squkoowcgeokaywq($somsiuiquigiqsmk) : array
    {
        goto seoiyskcwgmysyyu;
        uoaoeecwkiwcyocu:
        assygwiykikyqiko:
        goto cemgcsgywukgwumc;
        cemgcsgywukgwumc:
        return $oammesyieqmwuwyi;
        goto omuwgeccqksimyey;
        ckemesyoeaoqggmc:
        foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) {
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = ManipulateHTML::qgsekwygcgawekeq("\151\x6d\147", ["\163\x72\x63" => $mcqieaigyeeyaksm]);
            mmsaugsyiwoeeook:
        }
        goto uoaoeecwkiwcyocu;
        seoiyskcwgmysyyu:
        $oammesyieqmwuwyi = [];
        goto ckemesyoeaoqggmc;
        omuwgeccqksimyey:
    }
    
    public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array
    {
        return $wwgucssaecqekuek;
    }
    
    public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array
    {
        goto gisggqiemyiokyck;
        gisggqiemyiokyck:
        $aqykuigiuwmmcieu = [];
        goto eckeooegecygieyk;
        mckiewcikccuweas:
        return $aqykuigiuwmmcieu;
        goto ccackosockmyumws;
        koecgmwauymuscgy:
        foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) {
            goto iyumqcqimwmcouwy;
            iyumqcqimwmcouwy:
            $uammqaqiwgcmeska = explode("\x2c", $uammqaqiwgcmeska);
            goto pkuuoegoucsmcciu;
            yyyacuumougcsooy:
            ukykouywmkccqeoq:
            goto wgaickycsmcoocym;
            pkuuoegoucsmcciu:
            foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) {
                goto omqagaqgauuyyicw;
                skuqeisegcaaieqa:
                $uusmaiomayssaecw = $uusmaiomayssaecw[1];
                goto eeoaoaugmmauawuu;
                eeoaoaugmmauawuu:
                if (!isset($eqgoocgaqwqcimie[1])) {
                    goto iaagwiqkugqsscgc;
                }
                goto smweugsusmooiiio;
                eawqikuuwwqiawok:
                preg_match("\x2f\47\x28\133\x5e\x27\135\52\51\x27\x2f", $igqsaukqcqscimok, $eqgoocgaqwqcimie);
                goto skuqeisegcaaieqa;
                omqagaqgauuyyicw:
                preg_match("\x2f\x28\x5b\x5e\75\x5d\53\x29\57", $igqsaukqcqscimok, $uusmaiomayssaecw);
                goto eawqikuuwwqiawok;
                kguqqkyiyiewesws:
                $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow);
                goto eymiseesqmwcqkkc;
                eymiseesqmwcqkkc:
                iaagwiqkugqsscgc:
                goto soqyweewgwukmieu;
                smweugsusmooiiio:
                $uskwgmsuqowaosow = ManipulateArray::get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw);
                goto kguqqkyiyiewesws;
                soqyweewgwukmieu:
                ywkiskkeoqykoqaw:
                goto uekisuecwyiqcmum;
                uekisuecwyiqcmum:
            }
            goto uwyeioqkgkmockse;
            uwyeioqkgkmockse:
            wyqgycaawqceccem:
            goto yyyacuumougcsooy;
            wgaickycsmcoocym:
        }
        goto cgyqyossocsqgaug;
        cgyqyossocsqgaug:
        koqikcoqcoaguoou:
        goto mckiewcikccuweas;
        keccieguacsgccuq:
        $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1];
        goto koecgmwauymuscgy;
        eckeooegecygieyk:
        preg_match_all("\57\134\x28\50\56\52\x3f\x29\134\x29\x2f", $icwicymcioeyeyek, $meyiiwcswqmuggyg);
        goto keccieguacsgccuq;
        ccackosockmyumws:
    }
    
    public function acgiiomwuewkmgei($eqgoocgaqwqcimie)
    {
        goto qcoaaekiwcomokqa;
        ycaoqcaoskmiaecy:
        $eqgoocgaqwqcimie = explode(self::PIPE_SYMBOL, $eqgoocgaqwqcimie);
        goto awoyigaookcgkick;
        owwiiseawccyqagc:
        iugaemoyuymuioeg:
        goto ycaoqcaoskmiaecy;
        uuiomuugqeygqqsw:
        return $eqgoocgaqwqcimie;
        goto scoyasauucwmisgg;
        koguuqyauswemwqw:
        $eqgoocgaqwqcimie = $aqykuigiuwmmcieu;
        goto mgoeiguueowceuya;
        awoyigaookcgkick:
        aaiucmuaeceaikis:
        goto iccwagsgiwweegyu;
        oskuaiwgisysakgu:
        
        $aqykuigiuwmmcieu = explode(self::COMMA_SYMBOL, $eqgoocgaqwqcimie);
        goto miywwekqqwcioqgm;
        miywwekqqwcioqgm:
        if (count($aqykuigiuwmmcieu) <= 1) {
            goto iugaemoyuymuioeg;
        }
        goto koguuqyauswemwqw;
        mgoeiguueowceuya:
        goto aaiucmuaeceaikis;
        goto owwiiseawccyqagc;
        qcoaaekiwcomokqa:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto uisoqcsgasswqgma;
        }
        goto oskuaiwgisysakgu;
        iccwagsgiwweegyu:
        uisoqcsgasswqgma:
        goto uuiomuugqeygqqsw;
        scoyasauucwmisgg:
    }
    
    public abstract function gwquaaaaikcwcges() : array;
}
