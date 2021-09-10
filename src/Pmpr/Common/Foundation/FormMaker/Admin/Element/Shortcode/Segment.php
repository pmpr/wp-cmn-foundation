<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        eawmcoqugswqumug:
        $aokagokqyuysuksm = $this->aakmagwggmkoiiyu();
        goto syksimggseucuuss;
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
        add_shortcode($this->cisyiemkeykgkomc(), [$this, "\157\163\x65\141\x63\x71\151\x6d\145\143\x77\x67\x67\141\153\x77"]);
        
        add_shortcode("\x70\155\160\162\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\163\x65\x61\x63\161\x69\x6d\145\x63\167\147\147\x61\x6b\x77"]);
    }
    
    public function isqsicqgwyyasyke() : array
    {
        return $this->sscegwueamckwmcy("\163\150\x6f\162\164\x63\x6f\144\x65\137\143\157\x6c\165\155\156\x73", []);
    }
    
    public function oseacqimecwggakw($wwgucssaecqekuek) : string
    {
        goto ueswooyeceyuuiim;
        oeakkqksiaaywgss:
        goto owykgicqgsqskyke;
        goto smmuagmgoswiikku;
        smmuagmgoswiikku:
        ptasqiqkmgwcsoeq:
        goto mcosmsucmwgukeqs;
        eqwqoyucuckemuqw:
        wp_die(__("\x63\141\x6e\x6e\157\x74\40\146\x6f\x75\x6e\x64\x20\164\x65\155\x70\x6c\141\x74\x65\40\146\x6f\162\40\x63\162\x65\141\164\145\x20\x6d\x61\162\153\165\x70\x20\x69\x6e\x20\163\150\x6f\162\x74\x63\x6f\144\145\40\157\146\72\x20" . self::uqggkiomyiceyooa(), PR__CMN__FOUNDATION));
        goto cmkwkoyucmiyqwqs;
        iaagsosikuuwycqu:
        akiqwgcqoawimqma:
        goto isqqsoyqokqugeau;
        yyygiwgsksquqiuq:
        owykgicqgsqskyke:
        goto aiuwkmuqsmwgyimu;
        kyqwyywqgieaqeki:
        moeciuaugoiwgwgc:
        goto aaamsqswkwigciaa;
        aokywsysguyiycuw:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\x73\150\157\x72\164\x63\x6f\144\145\137\x61\x74\x74\x72\163"), $wwgucssaecqekuek, $this);
        goto gasmimewcwoymayo;
        aaamsqswkwigciaa:
        $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek);
        goto aokywsysguyiycuw;
        isqqsoyqokqugeau:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x68\x6f\x72\164\143\x6f\x64\x65\137\x68\164\x6d\154"), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this);
        goto qeyuumiikmqaaocu;
        gasmimewcwoymayo:
        
        $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek));
        goto owucqkqugooiaiuq;
        cmkwkoyucmiyqwqs:
        goto akiqwgcqoawimqma;
        goto kyqwyywqgieaqeki;
        ceqqkqeeykoasgqc:
        $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ["\x64\145\x66\141\165\x6c\164" => "\x69\156\144\x65\x78\x2e\150\164\x6d\154\x2e\x74\x77\151\x67"]);
        goto iaagsosikuuwycqu;
        ewwuqigwsiisiyka:
        iuqooeosgqegimwg:
        goto kamgoauwkoeewyio;
        aiuwkmuqsmwgyimu:
        $iqyiekoceqqsqoow = ManipulateArray::get($wwgucssaecqekuek, self::LAYOUT, $this->aakmagwggmkoiiyu());
        goto qumwwuaymkqkkukg;
        qumwwuaymkqkkukg:
        if ($iqyiekoceqqsqoow) {
            goto moeciuaugoiwgwgc;
        }
        goto eqwqoyucuckemuqw;
        mcosmsucmwgukeqs:
        $ggauoeuaesiymgee = $this->gwquaaaaikcwcges();
        goto ycssququegogusca;
        gukiwcokgekkgcyq:
        if (!(ManipulateServer::smowememmgeukwki() && !$this->kqeoeeayumeoyaoa())) {
            goto iuqooeosgqegimwg;
        }
        goto esiwmyaawisewmqa;
        owucqkqugooiaiuq:
        $qookweymeqawmcwo["\x73\150\157\162\x74\143\x6f\x64\x65\137\156\x61\x6d\145"] = $this->aakmagwggmkoiiyu();
        goto ceqqkqeeykoasgqc;
        esiwmyaawisewmqa:
        return $nsmgceoqaqogqmuw;
        goto ewwuqigwsiisiyka;
        ycssququegogusca:
        $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek);
        goto yyygiwgsksquqiuq;
        ussewyuewkoismma:
        $wwgucssaecqekuek = [];
        goto oeakkqksiaaywgss;
        ueswooyeceyuuiim:
        $nsmgceoqaqogqmuw = '';
        goto gukiwcokgekkgcyq;
        kamgoauwkoeewyio:
        if (is_array($wwgucssaecqekuek)) {
            goto ptasqiqkmgwcsoeq;
        }
        goto ussewyuewkoismma;
        qeyuumiikmqaaocu:
    }
    
    public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array
    {
        goto qyqwegcukwqckggq;
        qyqwegcukwqckggq:
        $this->ecwgiiuacoaokqkw();
        goto gukikisymyskwkem;
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
            sqkkyawioeawcugy:
            yeygiuiosqwooymg:
            goto cqcsmsmyuyqemcim;
            uoyqmukuwgkgccyg:
            $eqgoocgaqwqcimie = ManipulateArray::get($wwgucssaecqekuek, $aokagokqyuysuksm);
            goto wkqcmyomiyuykeeq;
            cqcsmsmyuyqemcim:
            omagoquasyayscka:
            goto mseaegwmygyisawy;
            cocikygyuigukeai:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto yeygiuiosqwooymg;
            }
            goto uoyqmukuwgkgccyg;
            mseaegwmygyisawy:
        }
        goto yameeuaoykuuoeqs;
        gukikisymyskwkem:
        if ($ikgwqyuyckaewsow) {
            goto iowsyesgugcwswgw;
        }
        goto aauueawyeymekmqa;
        aauueawyeymekmqa:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto qcckmmoqsmscecig;
        qcckmmoqsmscecig:
        iowsyesgugcwswgw:
        goto gaookssioagqcquy;
        wgqgmwayiywaiqie:
    }
    
    public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null)
    {
        goto accoqsgicekgsyeo;
        aacasqsuuqoogeqi:
        imqagwsikyoqgmek:
        goto kwkymuwcawyykqmy;
        qmaiieksomkoyuyi:
        qageqemksoqswcwo:
        goto keqamwmqakacwwoe;
        gkqkqkyiikmyoyes:
        goto cssqogukqgeaissu;
        goto iqwgsigqsoaqemoq;
        ecqcyykogswwckcy:
        goto cssqogukqgeaissu;
        goto qmaiieksomkoyuyi;
        iukswyicmecaqmsu:
        if (!$eqgoocgaqwqcimie) {
            goto qgcyeywsoyacqcgw;
        }
        goto qsygogogimikogkq;
        wccsuuqokyomaoqs:
        qgcyeywsoyacqcgw:
        goto aacasqsuuqoogeqi;
        iquummqymwyukwcq:
        cssqogukqgeaissu:
        goto wccsuuqokyomaoqs;
        iqwgsigqsoaqemoq:
        cckmuqueowusaasq:
        goto mkamqcmusuweioak;
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
        cqogucaumkswcmmi:
        goto cssqogukqgeaissu;
        goto aimekgqcsgskeiss;
        oukumaiywisqysue:
        $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie);
        goto qguqwygiosouksua;
        qsygogogimikogkq:
        if ($aiowsaccomcoikus instanceof Group) {
            goto qageqemksoqswcwo;
        }
        goto mwuuggcscaiaoueq;
        qguqwygiosouksua:
        ogcsossuoysoeqiy:
        goto gkqkqkyiikmyoyes;
        qesuygwuaaegeswm:
        if (is_string($eqgoocgaqwqcimie)) {
            goto cckmuqueowusaasq;
        }
        goto ecqcyykogswwckcy;
        mkamqcmusuweioak:
        $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie);
        goto iquummqymwyukwcq;
        aimekgqcsgskeiss:
        asgyagaekgeoweem:
        goto ykkieooomgmyscgg;
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
        return "\160\x72\55\163\150\x6f\x72\x74\x63\x6f\144\x65";
    }
    
    public function ccmewsuaqiaegqso($eqgoocgaqwqcimie)
    {
        goto cmociugasewqkuem;
        mcsoqawmisuqokgy:
        okamwaeykoyomecq:
        goto kcyqywycuysksaws;
        uusmocykkkksqiua:
        if (!isset($uammqaqiwgcmeska[1])) {
            goto okamwaeykoyomecq;
        }
        goto yiamkiackwgqymyq;
        yiamkiackwgqymyq:
        $wywkqkuaaekaokeq = do_shortcode("\x5b" . $uammqaqiwgcmeska[1] . "\x5d");
        goto wwmmyaugeaiumkiw;
        cmociugasewqkuem:
        preg_match("\x2f\x7b\50\56\x2a\77\x29\x7d\x2f", $eqgoocgaqwqcimie, $uammqaqiwgcmeska);
        goto uusmocykkkksqiua;
        kcyqywycuysksaws:
        return $eqgoocgaqwqcimie;
        goto qysqycokygquuggm;
        wwmmyaugeaiumkiw:
        $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $wywkqkuaaekaokeq, $eqgoocgaqwqcimie);
        goto mcsoqawmisuqokgy;
        qysqycokygquuggm:
    }
    
    public function squkoowcgeokaywq($somsiuiquigiqsmk) : array
    {
        goto seoiyskcwgmysyyu;
        ckemesyoeaoqggmc:
        foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) {
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = ManipulateHTML::qgsekwygcgawekeq("\151\155\x67", ["\163\162\143" => $mcqieaigyeeyaksm]);
            mmsaugsyiwoeeook:
        }
        goto uoaoeecwkiwcyocu;
        seoiyskcwgmysyyu:
        $oammesyieqmwuwyi = [];
        goto ckemesyoeaoqggmc;
        uoaoeecwkiwcyocu:
        assygwiykikyqiko:
        goto cemgcsgywukgwumc;
        cemgcsgywukgwumc:
        return $oammesyieqmwuwyi;
        goto omuwgeccqksimyey;
        omuwgeccqksimyey:
    }
    
    public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array
    {
        return $wwgucssaecqekuek;
    }
    
    public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array
    {
        goto gisggqiemyiokyck;
        keccieguacsgccuq:
        $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1];
        goto koecgmwauymuscgy;
        gisggqiemyiokyck:
        $aqykuigiuwmmcieu = [];
        goto eckeooegecygieyk;
        cgyqyossocsqgaug:
        koqikcoqcoaguoou:
        goto mckiewcikccuweas;
        eckeooegecygieyk:
        preg_match_all("\x2f\x5c\50\x28\x2e\x2a\77\x29\x5c\x29\57", $icwicymcioeyeyek, $meyiiwcswqmuggyg);
        goto keccieguacsgccuq;
        koecgmwauymuscgy:
        foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) {
            goto iyumqcqimwmcouwy;
            pkuuoegoucsmcciu:
            foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) {
                goto omqagaqgauuyyicw;
                kguqqkyiyiewesws:
                $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow);
                goto eymiseesqmwcqkkc;
                eymiseesqmwcqkkc:
                iaagwiqkugqsscgc:
                goto soqyweewgwukmieu;
                eawqikuuwwqiawok:
                preg_match("\x2f\47\x28\133\136\x27\x5d\x2a\51\x27\x2f", $igqsaukqcqscimok, $eqgoocgaqwqcimie);
                goto skuqeisegcaaieqa;
                eeoaoaugmmauawuu:
                if (!isset($eqgoocgaqwqcimie[1])) {
                    goto iaagwiqkugqsscgc;
                }
                goto smweugsusmooiiio;
                soqyweewgwukmieu:
                ywkiskkeoqykoqaw:
                goto uekisuecwyiqcmum;
                skuqeisegcaaieqa:
                $uusmaiomayssaecw = $uusmaiomayssaecw[1];
                goto eeoaoaugmmauawuu;
                smweugsusmooiiio:
                $uskwgmsuqowaosow = ManipulateArray::get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw);
                goto kguqqkyiyiewesws;
                omqagaqgauuyyicw:
                preg_match("\x2f\50\x5b\136\x3d\135\53\51\x2f", $igqsaukqcqscimok, $uusmaiomayssaecw);
                goto eawqikuuwwqiawok;
                uekisuecwyiqcmum:
            }
            goto uwyeioqkgkmockse;
            uwyeioqkgkmockse:
            wyqgycaawqceccem:
            goto yyyacuumougcsooy;
            iyumqcqimwmcouwy:
            $uammqaqiwgcmeska = explode("\54", $uammqaqiwgcmeska);
            goto pkuuoegoucsmcciu;
            yyyacuumougcsooy:
            ukykouywmkccqeoq:
            goto wgaickycsmcoocym;
            wgaickycsmcoocym:
        }
        goto cgyqyossocsqgaug;
        mckiewcikccuweas:
        return $aqykuigiuwmmcieu;
        goto ccackosockmyumws;
        ccackosockmyumws:
    }
    
    public function acgiiomwuewkmgei($eqgoocgaqwqcimie)
    {
        goto qcoaaekiwcomokqa;
        iccwagsgiwweegyu:
        uisoqcsgasswqgma:
        goto uuiomuugqeygqqsw;
        oskuaiwgisysakgu:
        
        $aqykuigiuwmmcieu = explode(self::COMMA_SYMBOL, $eqgoocgaqwqcimie);
        goto miywwekqqwcioqgm;
        owwiiseawccyqagc:
        iugaemoyuymuioeg:
        goto ycaoqcaoskmiaecy;
        uuiomuugqeygqqsw:
        return $eqgoocgaqwqcimie;
        goto scoyasauucwmisgg;
        miywwekqqwcioqgm:
        if (count($aqykuigiuwmmcieu) <= 1) {
            goto iugaemoyuymuioeg;
        }
        goto koguuqyauswemwqw;
        koguuqyauswemwqw:
        $eqgoocgaqwqcimie = $aqykuigiuwmmcieu;
        goto mgoeiguueowceuya;
        mgoeiguueowceuya:
        goto aaiucmuaeceaikis;
        goto owwiiseawccyqagc;
        qcoaaekiwcomokqa:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto uisoqcsgasswqgma;
        }
        goto oskuaiwgisysakgu;
        ycaoqcaoskmiaecy:
        $eqgoocgaqwqcimie = explode(self::PIPE_SYMBOL, $eqgoocgaqwqcimie);
        goto awoyigaookcgkick;
        awoyigaookcgkick:
        aaiucmuaeceaikis:
        goto iccwagsgiwweegyu;
        scoyasauucwmisgg:
    }
    
    public abstract function gwquaaaaikcwcges() : array;
}
