<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto eawmcoqugswqumug;
        kcgwoyoqauywsgci:
        $aokagokqyuysuksm = $this->aakmagwggmkoiiyu();
        goto ycwcgemuqkayueos;
        ycwcgemuqkayueos:
        iimsysqcwkkyussk:
        goto iuqooeosgqegimwg;
        iuqooeosgqegimwg:
        return $aokagokqyuysuksm;
        goto ptasqiqkmgwcsoeq;
        syksimggseucuuss:
        if ($aokagokqyuysuksm) {
            goto iimsysqcwkkyussk;
        }
        goto kcgwoyoqauywsgci;
        eawmcoqugswqumug:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto syksimggseucuuss;
        ptasqiqkmgwcsoeq:
    }
    public function init()
    {
        parent::init();
        $this->gkoiuyagqcoecigk();
    }
    public function gkoiuyagqcoecigk()
    {
        add_shortcode($this->cisyiemkeykgkomc(), [$this, "\157\x73\x65\141\143\161\x69\155\x65\143\x77\x67\147\x61\153\167"]);
        
        add_shortcode("\x70\155\x70\162\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\163\x65\x61\x63\x71\x69\155\x65\143\x77\x67\x67\141\153\x77"]);
    }
    
    public function isqsicqgwyyasyke() : array
    {
        return $this->sscegwueamckwmcy("\x73\150\x6f\162\164\x63\157\144\145\137\143\x6f\x6c\165\x6d\156\163", []);
    }
    
    public function oseacqimecwggakw($wwgucssaecqekuek) : string
    {
        goto esiwmyaawisewmqa;
        kyqwyywqgieaqeki:
        wp_die(__("\143\141\156\156\x6f\x74\40\146\x6f\165\156\x64\40\x74\x65\x6d\160\x6c\x61\x74\x65\40\146\157\162\40\x63\x72\145\x61\164\145\x20\x6d\141\162\x6b\x75\x70\40\151\x6e\x20\x73\150\157\x72\164\x63\x6f\x64\x65\x20\157\x66\x3a\x20" . self::uqggkiomyiceyooa(), PR__CMN__FOUNDATION));
        goto aaamsqswkwigciaa;
        esiwmyaawisewmqa:
        $nsmgceoqaqogqmuw = '';
        goto ewwuqigwsiisiyka;
        kamgoauwkoeewyio:
        return $nsmgceoqaqogqmuw;
        goto ussewyuewkoismma;
        gasmimewcwoymayo:
        $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek);
        goto owucqkqugooiaiuq;
        qumwwuaymkqkkukg:
        akiqwgcqoawimqma:
        goto eqwqoyucuckemuqw;
        ewwuqigwsiisiyka:
        if (!(ManipulateServer::smowememmgeukwki() && !$this->kqeoeeayumeoyaoa())) {
            goto owykgicqgsqskyke;
        }
        goto kamgoauwkoeewyio;
        mcosmsucmwgukeqs:
        goto akiqwgcqoawimqma;
        goto ycssququegogusca;
        aiuwkmuqsmwgyimu:
        $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek);
        goto qumwwuaymkqkkukg;
        iaagsosikuuwycqu:
        $qookweymeqawmcwo["\163\x68\157\x72\164\143\157\144\145\x5f\x6e\141\x6d\x65"] = $this->aakmagwggmkoiiyu();
        goto isqqsoyqokqugeau;
        ycssququegogusca:
        moeciuaugoiwgwgc:
        goto yyygiwgsksquqiuq;
        cmkwkoyucmiyqwqs:
        if ($iqyiekoceqqsqoow) {
            goto ueswooyeceyuuiim;
        }
        goto kyqwyywqgieaqeki;
        qeyuumiikmqaaocu:
        gukiwcokgekkgcyq:
        goto iowsyesgugcwswgw;
        aaamsqswkwigciaa:
        goto gukiwcokgekkgcyq;
        goto aokywsysguyiycuw;
        iowsyesgugcwswgw:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x68\x6f\162\x74\143\157\x64\145\x5f\x68\164\x6d\x6c"), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this);
        goto mgigqcuwoseciami;
        ceqqkqeeykoasgqc:
        
        $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek));
        goto iaagsosikuuwycqu;
        aokywsysguyiycuw:
        ueswooyeceyuuiim:
        goto gasmimewcwoymayo;
        isqqsoyqokqugeau:
        $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ["\144\x65\146\x61\165\154\164" => "\x69\x6e\144\x65\170\56\150\164\155\154\x2e\x74\x77\151\x67"]);
        goto qeyuumiikmqaaocu;
        yyygiwgsksquqiuq:
        $ggauoeuaesiymgee = $this->gwquaaaaikcwcges();
        goto aiuwkmuqsmwgyimu;
        eqwqoyucuckemuqw:
        $iqyiekoceqqsqoow = ManipulateArray::get($wwgucssaecqekuek, self::LAYOUT, $this->aakmagwggmkoiiyu());
        goto cmkwkoyucmiyqwqs;
        owucqkqugooiaiuq:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\x73\x68\x6f\162\x74\143\157\144\x65\137\x61\x74\164\x72\163"), $wwgucssaecqekuek, $this);
        goto ceqqkqeeykoasgqc;
        oeakkqksiaaywgss:
        if (is_array($wwgucssaecqekuek)) {
            goto moeciuaugoiwgwgc;
        }
        goto smmuagmgoswiikku;
        ussewyuewkoismma:
        owykgicqgsqskyke:
        goto oeakkqksiaaywgss;
        smmuagmgoswiikku:
        $wwgucssaecqekuek = [];
        goto mcosmsucmwgukeqs;
        mgigqcuwoseciami:
    }
    
    public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array
    {
        goto aauueawyeymekmqa;
        wgqgmwayiywaiqie:
        yeygiuiosqwooymg:
        goto ogcsossuoysoeqiy;
        qcmquqkmokioagqk:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto wkqcmyomiyuykeeq;
            mseaegwmygyisawy:
            uoyqmukuwgkgccyg:
            goto qyqwegcukwqckggq;
            cqcsmsmyuyqemcim:
            $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus);
            goto mseaegwmygyisawy;
            qyqwegcukwqckggq:
            cocikygyuigukeai:
            goto gukikisymyskwkem;
            sqkkyawioeawcugy:
            $eqgoocgaqwqcimie = ManipulateArray::get($wwgucssaecqekuek, $aokagokqyuysuksm);
            goto cqcsmsmyuyqemcim;
            wkqcmyomiyuykeeq:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto uoyqmukuwgkgccyg;
            }
            goto sqkkyawioeawcugy;
            gukikisymyskwkem:
        }
        goto wgqgmwayiywaiqie;
        gaookssioagqcquy:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto yameeuaoykuuoeqs;
        aauueawyeymekmqa:
        $this->ecwgiiuacoaokqkw();
        goto qcckmmoqsmscecig;
        qcckmmoqsmscecig:
        if ($ikgwqyuyckaewsow) {
            goto omagoquasyayscka;
        }
        goto gaookssioagqcquy;
        ogcsossuoysoeqiy:
        return $wwgucssaecqekuek;
        goto cssqogukqgeaissu;
        yameeuaoykuuoeqs:
        omagoquasyayscka:
        goto qcmquqkmokioagqk;
        cssqogukqgeaissu:
    }
    
    public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null)
    {
        goto qsygogogimikogkq;
        qesuygwuaaegeswm:
        if ($aiowsaccomcoikus instanceof Group) {
            goto cckmuqueowusaasq;
        }
        goto ecqcyykogswwckcy;
        iqwgsigqsoaqemoq:
        qageqemksoqswcwo:
        goto mkamqcmusuweioak;
        ykkieooomgmyscgg:
        goto asgyagaekgeoweem;
        goto oukumaiywisqysue;
        wccsuuqokyomaoqs:
        $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie);
        goto aacasqsuuqoogeqi;
        qyoggesicagmmmca:
        iukswyicmecaqmsu:
        goto okamwaeykoyomecq;
        aacasqsuuqoogeqi:
        asgyagaekgeoweem:
        goto kwkymuwcawyykqmy;
        gkqkqkyiikmyoyes:
        $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie);
        goto iqwgsigqsoaqemoq;
        qguqwygiosouksua:
        if (!$aiowsaccomcoikus->zosqeeykkcqmmkqs()) {
            goto qageqemksoqswcwo;
        }
        goto gkqkqkyiikmyoyes;
        qmaiieksomkoyuyi:
        if (is_string($eqgoocgaqwqcimie)) {
            goto imqagwsikyoqgmek;
        }
        goto keqamwmqakacwwoe;
        keqamwmqakacwwoe:
        goto asgyagaekgeoweem;
        goto cqogucaumkswcmmi;
        kwkymuwcawyykqmy:
        accoqsgicekgsyeo:
        goto qyoggesicagmmmca;
        cqogucaumkswcmmi:
        cckmuqueowusaasq:
        goto aimekgqcsgskeiss;
        aimekgqcsgskeiss:
        $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus);
        goto ykkieooomgmyscgg;
        iquummqymwyukwcq:
        imqagwsikyoqgmek:
        goto wccsuuqokyomaoqs;
        oukumaiywisqysue:
        qgcyeywsoyacqcgw:
        goto qguqwygiosouksua;
        mkamqcmusuweioak:
        goto asgyagaekgeoweem;
        goto iquummqymwyukwcq;
        qsygogogimikogkq:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto iukswyicmecaqmsu;
        }
        goto mwuuggcscaiaoueq;
        okamwaeykoyomecq:
        return $eqgoocgaqwqcimie;
        goto cmociugasewqkuem;
        ecqcyykogswwckcy:
        if ($aiowsaccomcoikus instanceof BSSelect) {
            goto qgcyeywsoyacqcgw;
        }
        goto qmaiieksomkoyuyi;
        mwuuggcscaiaoueq:
        if (!$eqgoocgaqwqcimie) {
            goto accoqsgicekgsyeo;
        }
        goto qesuygwuaaegeswm;
        cmociugasewqkuem:
    }
    
    public function ocwoiywammqiuggq() : string
    {
        return "\x70\162\x2d\x73\150\157\x72\x74\x63\157\x64\145";
    }
    
    public function ccmewsuaqiaegqso($eqgoocgaqwqcimie)
    {
        goto yiamkiackwgqymyq;
        mcsoqawmisuqokgy:
        $wywkqkuaaekaokeq = do_shortcode("\133" . $uammqaqiwgcmeska[1] . "\135");
        goto kcyqywycuysksaws;
        wwmmyaugeaiumkiw:
        if (!isset($uammqaqiwgcmeska[1])) {
            goto uusmocykkkksqiua;
        }
        goto mcsoqawmisuqokgy;
        kcyqywycuysksaws:
        $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $wywkqkuaaekaokeq, $eqgoocgaqwqcimie);
        goto qysqycokygquuggm;
        qysqycokygquuggm:
        uusmocykkkksqiua:
        goto assygwiykikyqiko;
        assygwiykikyqiko:
        return $eqgoocgaqwqcimie;
        goto mmsaugsyiwoeeook;
        yiamkiackwgqymyq:
        preg_match("\57\x7b\50\56\x2a\x3f\51\175\57", $eqgoocgaqwqcimie, $uammqaqiwgcmeska);
        goto wwmmyaugeaiumkiw;
        mmsaugsyiwoeeook:
    }
    
    public function squkoowcgeokaywq($somsiuiquigiqsmk) : array
    {
        goto uoaoeecwkiwcyocu;
        koqikcoqcoaguoou:
        return $oammesyieqmwuwyi;
        goto ukykouywmkccqeoq;
        cemgcsgywukgwumc:
        foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) {
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = ManipulateHTML::qgsekwygcgawekeq("\x69\155\147", ["\163\162\143" => $mcqieaigyeeyaksm]);
            ckemesyoeaoqggmc:
        }
        goto omuwgeccqksimyey;
        omuwgeccqksimyey:
        seoiyskcwgmysyyu:
        goto koqikcoqcoaguoou;
        uoaoeecwkiwcyocu:
        $oammesyieqmwuwyi = [];
        goto cemgcsgywukgwumc;
        ukykouywmkccqeoq:
    }
    
    public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array
    {
        return $wwgucssaecqekuek;
    }
    
    public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array
    {
        goto keccieguacsgccuq;
        keccieguacsgccuq:
        $aqykuigiuwmmcieu = [];
        goto koecgmwauymuscgy;
        ccackosockmyumws:
        wyqgycaawqceccem:
        goto iugaemoyuymuioeg;
        cgyqyossocsqgaug:
        $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1];
        goto mckiewcikccuweas;
        mckiewcikccuweas:
        foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) {
            goto uwyeioqkgkmockse;
            yyyacuumougcsooy:
            foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) {
                goto skuqeisegcaaieqa;
                soqyweewgwukmieu:
                $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow);
                goto uekisuecwyiqcmum;
                smweugsusmooiiio:
                $uusmaiomayssaecw = $uusmaiomayssaecw[1];
                goto kguqqkyiyiewesws;
                eymiseesqmwcqkkc:
                $uskwgmsuqowaosow = ManipulateArray::get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw);
                goto soqyweewgwukmieu;
                iyumqcqimwmcouwy:
                omqagaqgauuyyicw:
                goto pkuuoegoucsmcciu;
                kguqqkyiyiewesws:
                if (!isset($eqgoocgaqwqcimie[1])) {
                    goto eawqikuuwwqiawok;
                }
                goto eymiseesqmwcqkkc;
                uekisuecwyiqcmum:
                eawqikuuwwqiawok:
                goto iyumqcqimwmcouwy;
                skuqeisegcaaieqa:
                preg_match("\x2f\50\133\136\75\x5d\x2b\x29\57", $igqsaukqcqscimok, $uusmaiomayssaecw);
                goto eeoaoaugmmauawuu;
                eeoaoaugmmauawuu:
                preg_match("\57\x27\x28\x5b\x5e\47\x5d\x2a\51\47\57", $igqsaukqcqscimok, $eqgoocgaqwqcimie);
                goto smweugsusmooiiio;
                pkuuoegoucsmcciu:
            }
            goto wgaickycsmcoocym;
            uwyeioqkgkmockse:
            $uammqaqiwgcmeska = explode("\x2c", $uammqaqiwgcmeska);
            goto yyyacuumougcsooy;
            wgaickycsmcoocym:
            iaagwiqkugqsscgc:
            goto gisggqiemyiokyck;
            gisggqiemyiokyck:
            ywkiskkeoqykoqaw:
            goto eckeooegecygieyk;
            eckeooegecygieyk:
        }
        goto ccackosockmyumws;
        iugaemoyuymuioeg:
        return $aqykuigiuwmmcieu;
        goto aaiucmuaeceaikis;
        koecgmwauymuscgy:
        preg_match_all("\57\x5c\x28\x28\x2e\x2a\x3f\x29\134\x29\57", $icwicymcioeyeyek, $meyiiwcswqmuggyg);
        goto cgyqyossocsqgaug;
        aaiucmuaeceaikis:
    }
    
    public function acgiiomwuewkmgei($eqgoocgaqwqcimie)
    {
        goto miywwekqqwcioqgm;
        ycaoqcaoskmiaecy:
        goto qcoaaekiwcomokqa;
        goto awoyigaookcgkick;
        gqiusmcakwmqwqoe:
        return $eqgoocgaqwqcimie;
        goto cqwsyoowkeoomees;
        miywwekqqwcioqgm:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto oskuaiwgisysakgu;
        }
        goto koguuqyauswemwqw;
        iccwagsgiwweegyu:
        $eqgoocgaqwqcimie = explode(self::PIPE_SYMBOL, $eqgoocgaqwqcimie);
        goto uuiomuugqeygqqsw;
        mgoeiguueowceuya:
        if (count($aqykuigiuwmmcieu) <= 1) {
            goto uisoqcsgasswqgma;
        }
        goto owwiiseawccyqagc;
        koguuqyauswemwqw:
        
        $aqykuigiuwmmcieu = explode(self::COMMA_SYMBOL, $eqgoocgaqwqcimie);
        goto mgoeiguueowceuya;
        owwiiseawccyqagc:
        $eqgoocgaqwqcimie = $aqykuigiuwmmcieu;
        goto ycaoqcaoskmiaecy;
        awoyigaookcgkick:
        uisoqcsgasswqgma:
        goto iccwagsgiwweegyu;
        scoyasauucwmisgg:
        oskuaiwgisysakgu:
        goto gqiusmcakwmqwqoe;
        uuiomuugqeygqqsw:
        qcoaaekiwcomokqa:
        goto scoyasauucwmisgg;
        cqwsyoowkeoomees:
    }
    
    public abstract function gwquaaaaikcwcges() : array;
}
