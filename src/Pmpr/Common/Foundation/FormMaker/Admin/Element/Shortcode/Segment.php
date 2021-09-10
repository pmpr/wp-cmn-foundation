<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto iimsysqcwkkyussk;
        eawmcoqugswqumug:
        if ($aokagokqyuysuksm) {
            goto eecakgugucgugsqg;
        }
        goto syksimggseucuuss;
        kcgwoyoqauywsgci:
        eecakgugucgugsqg:
        goto ycwcgemuqkayueos;
        ycwcgemuqkayueos:
        return $aokagokqyuysuksm;
        goto iuqooeosgqegimwg;
        iimsysqcwkkyussk:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto eawmcoqugswqumug;
        syksimggseucuuss:
        $aokagokqyuysuksm = $this->aakmagwggmkoiiyu();
        goto kcgwoyoqauywsgci;
        iuqooeosgqegimwg:
    }
    public function init()
    {
        parent::init();
        $this->gkoiuyagqcoecigk();
    }
    public function gkoiuyagqcoecigk()
    {
        add_shortcode($this->cisyiemkeykgkomc(), [$this, "\157\x73\x65\x61\143\161\x69\155\145\143\167\147\x67\141\x6b\x77"]);
        
        add_shortcode("\x70\155\x70\162\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\x73\x65\x61\143\x71\x69\155\x65\143\167\x67\147\x61\x6b\x77"]);
    }
    
    public function isqsicqgwyyasyke() : array
    {
        return $this->sscegwueamckwmcy("\163\x68\x6f\162\164\x63\x6f\x64\x65\x5f\143\x6f\154\x75\155\156\163", []);
    }
    
    public function oseacqimecwggakw($wwgucssaecqekuek) : string
    {
        goto gukiwcokgekkgcyq;
        oeakkqksiaaywgss:
        $wwgucssaecqekuek = [];
        goto smmuagmgoswiikku;
        yyygiwgsksquqiuq:
        $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek);
        goto aiuwkmuqsmwgyimu;
        ussewyuewkoismma:
        if (is_array($wwgucssaecqekuek)) {
            goto owykgicqgsqskyke;
        }
        goto oeakkqksiaaywgss;
        mcosmsucmwgukeqs:
        owykgicqgsqskyke:
        goto ycssququegogusca;
        gasmimewcwoymayo:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\x73\x68\x6f\162\164\143\157\144\145\137\141\164\164\162\x73"), $wwgucssaecqekuek, $this);
        goto owucqkqugooiaiuq;
        cmkwkoyucmiyqwqs:
        wp_die(__("\x63\141\x6e\x6e\x6f\x74\x20\x66\x6f\x75\x6e\144\40\x74\x65\155\160\154\x61\164\145\x20\146\x6f\x72\40\x63\x72\x65\x61\x74\x65\40\155\141\162\153\x75\160\40\151\156\x20\163\x68\x6f\162\x74\143\x6f\144\145\x20\157\x66\72\x20" . self::uqggkiomyiceyooa(), PR__CMN__FOUNDATION));
        goto kyqwyywqgieaqeki;
        smmuagmgoswiikku:
        goto moeciuaugoiwgwgc;
        goto mcosmsucmwgukeqs;
        aiuwkmuqsmwgyimu:
        moeciuaugoiwgwgc:
        goto qumwwuaymkqkkukg;
        ceqqkqeeykoasgqc:
        $qookweymeqawmcwo["\x73\x68\157\x72\164\143\x6f\x64\145\137\156\x61\x6d\145"] = $this->aakmagwggmkoiiyu();
        goto iaagsosikuuwycqu;
        kamgoauwkoeewyio:
        ptasqiqkmgwcsoeq:
        goto ussewyuewkoismma;
        aokywsysguyiycuw:
        $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek);
        goto gasmimewcwoymayo;
        esiwmyaawisewmqa:
        if (!(ManipulateServer::smowememmgeukwki() && !$this->kqeoeeayumeoyaoa())) {
            goto ptasqiqkmgwcsoeq;
        }
        goto ewwuqigwsiisiyka;
        ewwuqigwsiisiyka:
        return $nsmgceoqaqogqmuw;
        goto kamgoauwkoeewyio;
        iaagsosikuuwycqu:
        $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ["\144\x65\x66\x61\165\154\x74" => "\151\x6e\x64\x65\x78\x2e\x68\x74\x6d\x6c\x2e\x74\167\x69\x67"]);
        goto isqqsoyqokqugeau;
        isqqsoyqokqugeau:
        ueswooyeceyuuiim:
        goto qeyuumiikmqaaocu;
        qumwwuaymkqkkukg:
        $iqyiekoceqqsqoow = ManipulateArray::get($wwgucssaecqekuek, self::LAYOUT, $this->aakmagwggmkoiiyu());
        goto eqwqoyucuckemuqw;
        kyqwyywqgieaqeki:
        goto ueswooyeceyuuiim;
        goto aaamsqswkwigciaa;
        eqwqoyucuckemuqw:
        if ($iqyiekoceqqsqoow) {
            goto akiqwgcqoawimqma;
        }
        goto cmkwkoyucmiyqwqs;
        ycssququegogusca:
        $ggauoeuaesiymgee = $this->gwquaaaaikcwcges();
        goto yyygiwgsksquqiuq;
        aaamsqswkwigciaa:
        akiqwgcqoawimqma:
        goto aokywsysguyiycuw;
        qeyuumiikmqaaocu:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\150\x6f\162\164\143\157\x64\145\137\150\x74\155\154"), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this);
        goto iowsyesgugcwswgw;
        owucqkqugooiaiuq:
        
        $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek));
        goto ceqqkqeeykoasgqc;
        gukiwcokgekkgcyq:
        $nsmgceoqaqogqmuw = '';
        goto esiwmyaawisewmqa;
        iowsyesgugcwswgw:
    }
    
    public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array
    {
        goto gukikisymyskwkem;
        gukikisymyskwkem:
        $this->ecwgiiuacoaokqkw();
        goto aauueawyeymekmqa;
        qcmquqkmokioagqk:
        omagoquasyayscka:
        goto wgqgmwayiywaiqie;
        aauueawyeymekmqa:
        if ($ikgwqyuyckaewsow) {
            goto mgigqcuwoseciami;
        }
        goto qcckmmoqsmscecig;
        qcckmmoqsmscecig:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto gaookssioagqcquy;
        yameeuaoykuuoeqs:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto uoyqmukuwgkgccyg;
            sqkkyawioeawcugy:
            $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus);
            goto cqcsmsmyuyqemcim;
            cqcsmsmyuyqemcim:
            cocikygyuigukeai:
            goto mseaegwmygyisawy;
            uoyqmukuwgkgccyg:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto cocikygyuigukeai;
            }
            goto wkqcmyomiyuykeeq;
            mseaegwmygyisawy:
            yeygiuiosqwooymg:
            goto qyqwegcukwqckggq;
            wkqcmyomiyuykeeq:
            $eqgoocgaqwqcimie = ManipulateArray::get($wwgucssaecqekuek, $aokagokqyuysuksm);
            goto sqkkyawioeawcugy;
            qyqwegcukwqckggq:
        }
        goto qcmquqkmokioagqk;
        wgqgmwayiywaiqie:
        return $wwgucssaecqekuek;
        goto ogcsossuoysoeqiy;
        gaookssioagqcquy:
        mgigqcuwoseciami:
        goto yameeuaoykuuoeqs;
        ogcsossuoysoeqiy:
    }
    
    public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null)
    {
        goto iukswyicmecaqmsu;
        aacasqsuuqoogeqi:
        imqagwsikyoqgmek:
        goto kwkymuwcawyykqmy;
        qmaiieksomkoyuyi:
        goto qageqemksoqswcwo;
        goto keqamwmqakacwwoe;
        iquummqymwyukwcq:
        $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie);
        goto wccsuuqokyomaoqs;
        mwuuggcscaiaoueq:
        if ($aiowsaccomcoikus instanceof Group) {
            goto asgyagaekgeoweem;
        }
        goto qesuygwuaaegeswm;
        qsygogogimikogkq:
        if (!$eqgoocgaqwqcimie) {
            goto imqagwsikyoqgmek;
        }
        goto mwuuggcscaiaoueq;
        oukumaiywisqysue:
        if (!$aiowsaccomcoikus->zosqeeykkcqmmkqs()) {
            goto cssqogukqgeaissu;
        }
        goto qguqwygiosouksua;
        ykkieooomgmyscgg:
        cckmuqueowusaasq:
        goto oukumaiywisqysue;
        qesuygwuaaegeswm:
        if ($aiowsaccomcoikus instanceof BSSelect) {
            goto cckmuqueowusaasq;
        }
        goto ecqcyykogswwckcy;
        aimekgqcsgskeiss:
        goto qageqemksoqswcwo;
        goto ykkieooomgmyscgg;
        gkqkqkyiikmyoyes:
        cssqogukqgeaissu:
        goto iqwgsigqsoaqemoq;
        cqogucaumkswcmmi:
        $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus);
        goto aimekgqcsgskeiss;
        ecqcyykogswwckcy:
        if (is_string($eqgoocgaqwqcimie)) {
            goto qgcyeywsoyacqcgw;
        }
        goto qmaiieksomkoyuyi;
        iqwgsigqsoaqemoq:
        goto qageqemksoqswcwo;
        goto mkamqcmusuweioak;
        wccsuuqokyomaoqs:
        qageqemksoqswcwo:
        goto aacasqsuuqoogeqi;
        qguqwygiosouksua:
        $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie);
        goto gkqkqkyiikmyoyes;
        kwkymuwcawyykqmy:
        accoqsgicekgsyeo:
        goto qyoggesicagmmmca;
        iukswyicmecaqmsu:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto accoqsgicekgsyeo;
        }
        goto qsygogogimikogkq;
        mkamqcmusuweioak:
        qgcyeywsoyacqcgw:
        goto iquummqymwyukwcq;
        qyoggesicagmmmca:
        return $eqgoocgaqwqcimie;
        goto okamwaeykoyomecq;
        keqamwmqakacwwoe:
        asgyagaekgeoweem:
        goto cqogucaumkswcmmi;
        okamwaeykoyomecq:
    }
    
    public function ocwoiywammqiuggq() : string
    {
        return "\160\x72\x2d\x73\150\x6f\x72\164\x63\157\x64\x65";
    }
    
    public function ccmewsuaqiaegqso($eqgoocgaqwqcimie)
    {
        goto uusmocykkkksqiua;
        wwmmyaugeaiumkiw:
        $wywkqkuaaekaokeq = do_shortcode("\x5b" . $uammqaqiwgcmeska[1] . "\x5d");
        goto mcsoqawmisuqokgy;
        kcyqywycuysksaws:
        cmociugasewqkuem:
        goto qysqycokygquuggm;
        qysqycokygquuggm:
        return $eqgoocgaqwqcimie;
        goto assygwiykikyqiko;
        yiamkiackwgqymyq:
        if (!isset($uammqaqiwgcmeska[1])) {
            goto cmociugasewqkuem;
        }
        goto wwmmyaugeaiumkiw;
        mcsoqawmisuqokgy:
        $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $wywkqkuaaekaokeq, $eqgoocgaqwqcimie);
        goto kcyqywycuysksaws;
        uusmocykkkksqiua:
        preg_match("\x2f\173\50\56\x2a\x3f\51\x7d\x2f", $eqgoocgaqwqcimie, $uammqaqiwgcmeska);
        goto yiamkiackwgqymyq;
        assygwiykikyqiko:
    }
    
    public function squkoowcgeokaywq($somsiuiquigiqsmk) : array
    {
        goto ckemesyoeaoqggmc;
        omuwgeccqksimyey:
        return $oammesyieqmwuwyi;
        goto koqikcoqcoaguoou;
        ckemesyoeaoqggmc:
        $oammesyieqmwuwyi = [];
        goto uoaoeecwkiwcyocu;
        cemgcsgywukgwumc:
        mmsaugsyiwoeeook:
        goto omuwgeccqksimyey;
        uoaoeecwkiwcyocu:
        foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) {
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = ManipulateHTML::qgsekwygcgawekeq("\x69\155\147", ["\x73\x72\x63" => $mcqieaigyeeyaksm]);
            seoiyskcwgmysyyu:
        }
        goto cemgcsgywukgwumc;
        koqikcoqcoaguoou:
    }
    
    public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array
    {
        return $wwgucssaecqekuek;
    }
    
    public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array
    {
        goto eckeooegecygieyk;
        ccackosockmyumws:
        return $aqykuigiuwmmcieu;
        goto iugaemoyuymuioeg;
        koecgmwauymuscgy:
        $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1];
        goto cgyqyossocsqgaug;
        cgyqyossocsqgaug:
        foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) {
            goto pkuuoegoucsmcciu;
            yyyacuumougcsooy:
            ywkiskkeoqykoqaw:
            goto wgaickycsmcoocym;
            pkuuoegoucsmcciu:
            $uammqaqiwgcmeska = explode("\54", $uammqaqiwgcmeska);
            goto uwyeioqkgkmockse;
            wgaickycsmcoocym:
            wyqgycaawqceccem:
            goto gisggqiemyiokyck;
            uwyeioqkgkmockse:
            foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) {
                goto eawqikuuwwqiawok;
                kguqqkyiyiewesws:
                $uskwgmsuqowaosow = ManipulateArray::get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw);
                goto eymiseesqmwcqkkc;
                eawqikuuwwqiawok:
                preg_match("\57\50\133\x5e\75\135\x2b\51\x2f", $igqsaukqcqscimok, $uusmaiomayssaecw);
                goto skuqeisegcaaieqa;
                smweugsusmooiiio:
                if (!isset($eqgoocgaqwqcimie[1])) {
                    goto omqagaqgauuyyicw;
                }
                goto kguqqkyiyiewesws;
                soqyweewgwukmieu:
                omqagaqgauuyyicw:
                goto uekisuecwyiqcmum;
                eymiseesqmwcqkkc:
                $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow);
                goto soqyweewgwukmieu;
                eeoaoaugmmauawuu:
                $uusmaiomayssaecw = $uusmaiomayssaecw[1];
                goto smweugsusmooiiio;
                uekisuecwyiqcmum:
                iaagwiqkugqsscgc:
                goto iyumqcqimwmcouwy;
                skuqeisegcaaieqa:
                preg_match("\57\x27\50\133\x5e\x27\x5d\52\x29\x27\57", $igqsaukqcqscimok, $eqgoocgaqwqcimie);
                goto eeoaoaugmmauawuu;
                iyumqcqimwmcouwy:
            }
            goto yyyacuumougcsooy;
            gisggqiemyiokyck:
        }
        goto mckiewcikccuweas;
        eckeooegecygieyk:
        $aqykuigiuwmmcieu = [];
        goto keccieguacsgccuq;
        mckiewcikccuweas:
        ukykouywmkccqeoq:
        goto ccackosockmyumws;
        keccieguacsgccuq:
        preg_match_all("\57\134\50\x28\x2e\52\77\x29\134\x29\x2f", $icwicymcioeyeyek, $meyiiwcswqmuggyg);
        goto koecgmwauymuscgy;
        iugaemoyuymuioeg:
    }
    
    public function acgiiomwuewkmgei($eqgoocgaqwqcimie)
    {
        goto oskuaiwgisysakgu;
        koguuqyauswemwqw:
        if (count($aqykuigiuwmmcieu) <= 1) {
            goto aaiucmuaeceaikis;
        }
        goto mgoeiguueowceuya;
        awoyigaookcgkick:
        $eqgoocgaqwqcimie = explode(self::PIPE_SYMBOL, $eqgoocgaqwqcimie);
        goto iccwagsgiwweegyu;
        uuiomuugqeygqqsw:
        qcoaaekiwcomokqa:
        goto scoyasauucwmisgg;
        owwiiseawccyqagc:
        goto uisoqcsgasswqgma;
        goto ycaoqcaoskmiaecy;
        scoyasauucwmisgg:
        return $eqgoocgaqwqcimie;
        goto gqiusmcakwmqwqoe;
        oskuaiwgisysakgu:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto qcoaaekiwcomokqa;
        }
        goto miywwekqqwcioqgm;
        ycaoqcaoskmiaecy:
        aaiucmuaeceaikis:
        goto awoyigaookcgkick;
        iccwagsgiwweegyu:
        uisoqcsgasswqgma:
        goto uuiomuugqeygqqsw;
        miywwekqqwcioqgm:
        
        $aqykuigiuwmmcieu = explode(self::COMMA_SYMBOL, $eqgoocgaqwqcimie);
        goto koguuqyauswemwqw;
        mgoeiguueowceuya:
        $eqgoocgaqwqcimie = $aqykuigiuwmmcieu;
        goto owwiiseawccyqagc;
        gqiusmcakwmqwqoe:
    }
    
    public abstract function gwquaaaaikcwcges() : array;
}
