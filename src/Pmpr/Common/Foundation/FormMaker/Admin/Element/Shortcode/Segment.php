<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        syksimggseucuuss:
        $aokagokqyuysuksm = $this->aakmagwggmkoiiyu();
        goto kcgwoyoqauywsgci;
        iimsysqcwkkyussk:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto eawmcoqugswqumug;
        ycwcgemuqkayueos:
        return $aokagokqyuysuksm;
        goto iuqooeosgqegimwg;
        eawmcoqugswqumug:
        if ($aokagokqyuysuksm) {
            goto eecakgugucgugsqg;
        }
        goto syksimggseucuuss;
        kcgwoyoqauywsgci:
        eecakgugucgugsqg:
        goto ycwcgemuqkayueos;
        iuqooeosgqegimwg:
    }
    public function init()
    {
        parent::init();
        $this->gkoiuyagqcoecigk();
    }
    public function gkoiuyagqcoecigk()
    {
        add_shortcode($this->cisyiemkeykgkomc(), [$this, "\157\163\x65\141\x63\161\x69\x6d\x65\x63\167\x67\147\141\153\x77"]);
        
        add_shortcode("\160\155\x70\x72\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\163\145\x61\x63\161\x69\x6d\x65\x63\167\x67\147\141\x6b\167"]);
    }
    
    public function isqsicqgwyyasyke() : array
    {
        return $this->sscegwueamckwmcy("\163\150\157\x72\164\143\157\x64\x65\137\143\x6f\154\x75\x6d\156\163", []);
    }
    
    public function oseacqimecwggakw($wwgucssaecqekuek) : string
    {
        goto gukiwcokgekkgcyq;
        gasmimewcwoymayo:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\163\x68\x6f\x72\164\143\157\x64\x65\137\x61\164\x74\x72\163"), $wwgucssaecqekuek, $this);
        goto owucqkqugooiaiuq;
        oeakkqksiaaywgss:
        $wwgucssaecqekuek = [];
        goto smmuagmgoswiikku;
        isqqsoyqokqugeau:
        ueswooyeceyuuiim:
        goto qeyuumiikmqaaocu;
        ycssququegogusca:
        $ggauoeuaesiymgee = $this->gwquaaaaikcwcges();
        goto yyygiwgsksquqiuq;
        cmkwkoyucmiyqwqs:
        wp_die(__("\143\141\x6e\x6e\157\x74\40\146\157\x75\x6e\x64\x20\164\145\x6d\160\x6c\x61\x74\x65\40\x66\x6f\x72\40\x63\162\145\141\164\x65\x20\x6d\x61\162\153\165\160\x20\x69\156\40\163\x68\157\162\x74\143\x6f\x64\x65\x20\157\x66\72\x20" . self::uqggkiomyiceyooa(), PR__CMN__FOUNDATION));
        goto kyqwyywqgieaqeki;
        smmuagmgoswiikku:
        goto moeciuaugoiwgwgc;
        goto mcosmsucmwgukeqs;
        aaamsqswkwigciaa:
        akiqwgcqoawimqma:
        goto aokywsysguyiycuw;
        owucqkqugooiaiuq:
        
        $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek));
        goto ceqqkqeeykoasgqc;
        ceqqkqeeykoasgqc:
        $qookweymeqawmcwo["\163\150\x6f\162\x74\x63\157\144\145\x5f\156\x61\155\145"] = $this->aakmagwggmkoiiyu();
        goto iaagsosikuuwycqu;
        kyqwyywqgieaqeki:
        goto ueswooyeceyuuiim;
        goto aaamsqswkwigciaa;
        eqwqoyucuckemuqw:
        if ($iqyiekoceqqsqoow) {
            goto akiqwgcqoawimqma;
        }
        goto cmkwkoyucmiyqwqs;
        gukiwcokgekkgcyq:
        $nsmgceoqaqogqmuw = '';
        goto esiwmyaawisewmqa;
        aiuwkmuqsmwgyimu:
        moeciuaugoiwgwgc:
        goto qumwwuaymkqkkukg;
        iaagsosikuuwycqu:
        $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ["\144\145\x66\141\165\154\x74" => "\151\x6e\x64\145\170\x2e\150\x74\x6d\154\56\164\167\151\147"]);
        goto isqqsoyqokqugeau;
        qeyuumiikmqaaocu:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\150\x6f\162\164\143\157\x64\145\x5f\x68\x74\x6d\154"), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this);
        goto iowsyesgugcwswgw;
        mcosmsucmwgukeqs:
        owykgicqgsqskyke:
        goto ycssququegogusca;
        qumwwuaymkqkkukg:
        $iqyiekoceqqsqoow = ManipulateArray::get($wwgucssaecqekuek, self::LAYOUT, $this->aakmagwggmkoiiyu());
        goto eqwqoyucuckemuqw;
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
        ussewyuewkoismma:
        if (is_array($wwgucssaecqekuek)) {
            goto owykgicqgsqskyke;
        }
        goto oeakkqksiaaywgss;
        yyygiwgsksquqiuq:
        $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek);
        goto aiuwkmuqsmwgyimu;
        kamgoauwkoeewyio:
        ptasqiqkmgwcsoeq:
        goto ussewyuewkoismma;
        iowsyesgugcwswgw:
    }
    
    public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array
    {
        goto gukikisymyskwkem;
        yameeuaoykuuoeqs:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto uoyqmukuwgkgccyg;
            uoyqmukuwgkgccyg:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto cocikygyuigukeai;
            }
            goto wkqcmyomiyuykeeq;
            mseaegwmygyisawy:
            yeygiuiosqwooymg:
            goto qyqwegcukwqckggq;
            sqkkyawioeawcugy:
            $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus);
            goto cqcsmsmyuyqemcim;
            cqcsmsmyuyqemcim:
            cocikygyuigukeai:
            goto mseaegwmygyisawy;
            wkqcmyomiyuykeeq:
            $eqgoocgaqwqcimie = ManipulateArray::get($wwgucssaecqekuek, $aokagokqyuysuksm);
            goto sqkkyawioeawcugy;
            qyqwegcukwqckggq:
        }
        goto qcmquqkmokioagqk;
        gukikisymyskwkem:
        $this->ecwgiiuacoaokqkw();
        goto aauueawyeymekmqa;
        qcckmmoqsmscecig:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto gaookssioagqcquy;
        gaookssioagqcquy:
        mgigqcuwoseciami:
        goto yameeuaoykuuoeqs;
        aauueawyeymekmqa:
        if ($ikgwqyuyckaewsow) {
            goto mgigqcuwoseciami;
        }
        goto qcckmmoqsmscecig;
        qcmquqkmokioagqk:
        omagoquasyayscka:
        goto wgqgmwayiywaiqie;
        wgqgmwayiywaiqie:
        return $wwgucssaecqekuek;
        goto ogcsossuoysoeqiy;
        ogcsossuoysoeqiy:
    }
    
    public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null)
    {
        goto iukswyicmecaqmsu;
        keqamwmqakacwwoe:
        asgyagaekgeoweem:
        goto cqogucaumkswcmmi;
        iqwgsigqsoaqemoq:
        goto qageqemksoqswcwo;
        goto mkamqcmusuweioak;
        aimekgqcsgskeiss:
        goto qageqemksoqswcwo;
        goto ykkieooomgmyscgg;
        mkamqcmusuweioak:
        qgcyeywsoyacqcgw:
        goto iquummqymwyukwcq;
        ecqcyykogswwckcy:
        if (is_string($eqgoocgaqwqcimie)) {
            goto qgcyeywsoyacqcgw;
        }
        goto qmaiieksomkoyuyi;
        gkqkqkyiikmyoyes:
        cssqogukqgeaissu:
        goto iqwgsigqsoaqemoq;
        kwkymuwcawyykqmy:
        accoqsgicekgsyeo:
        goto qyoggesicagmmmca;
        wccsuuqokyomaoqs:
        qageqemksoqswcwo:
        goto aacasqsuuqoogeqi;
        qmaiieksomkoyuyi:
        goto qageqemksoqswcwo;
        goto keqamwmqakacwwoe;
        qsygogogimikogkq:
        if (!$eqgoocgaqwqcimie) {
            goto imqagwsikyoqgmek;
        }
        goto mwuuggcscaiaoueq;
        qyoggesicagmmmca:
        return $eqgoocgaqwqcimie;
        goto okamwaeykoyomecq;
        aacasqsuuqoogeqi:
        imqagwsikyoqgmek:
        goto kwkymuwcawyykqmy;
        qguqwygiosouksua:
        $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie);
        goto gkqkqkyiikmyoyes;
        mwuuggcscaiaoueq:
        if ($aiowsaccomcoikus instanceof Group) {
            goto asgyagaekgeoweem;
        }
        goto qesuygwuaaegeswm;
        iukswyicmecaqmsu:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto accoqsgicekgsyeo;
        }
        goto qsygogogimikogkq;
        oukumaiywisqysue:
        if (!$aiowsaccomcoikus->zosqeeykkcqmmkqs()) {
            goto cssqogukqgeaissu;
        }
        goto qguqwygiosouksua;
        ykkieooomgmyscgg:
        cckmuqueowusaasq:
        goto oukumaiywisqysue;
        iquummqymwyukwcq:
        $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie);
        goto wccsuuqokyomaoqs;
        cqogucaumkswcmmi:
        $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus);
        goto aimekgqcsgskeiss;
        qesuygwuaaegeswm:
        if ($aiowsaccomcoikus instanceof BSSelect) {
            goto cckmuqueowusaasq;
        }
        goto ecqcyykogswwckcy;
        okamwaeykoyomecq:
    }
    
    public function ocwoiywammqiuggq() : string
    {
        return "\160\162\55\x73\x68\x6f\162\164\143\x6f\x64\x65";
    }
    
    public function ccmewsuaqiaegqso($eqgoocgaqwqcimie)
    {
        goto uusmocykkkksqiua;
        qysqycokygquuggm:
        return $eqgoocgaqwqcimie;
        goto assygwiykikyqiko;
        mcsoqawmisuqokgy:
        $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $wywkqkuaaekaokeq, $eqgoocgaqwqcimie);
        goto kcyqywycuysksaws;
        yiamkiackwgqymyq:
        if (!isset($uammqaqiwgcmeska[1])) {
            goto cmociugasewqkuem;
        }
        goto wwmmyaugeaiumkiw;
        wwmmyaugeaiumkiw:
        $wywkqkuaaekaokeq = do_shortcode("\x5b" . $uammqaqiwgcmeska[1] . "\135");
        goto mcsoqawmisuqokgy;
        kcyqywycuysksaws:
        cmociugasewqkuem:
        goto qysqycokygquuggm;
        uusmocykkkksqiua:
        preg_match("\x2f\x7b\x28\56\x2a\x3f\x29\x7d\x2f", $eqgoocgaqwqcimie, $uammqaqiwgcmeska);
        goto yiamkiackwgqymyq;
        assygwiykikyqiko:
    }
    
    public function squkoowcgeokaywq($somsiuiquigiqsmk) : array
    {
        goto ckemesyoeaoqggmc;
        uoaoeecwkiwcyocu:
        foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) {
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = ManipulateHTML::qgsekwygcgawekeq("\x69\155\147", ["\163\162\143" => $mcqieaigyeeyaksm]);
            seoiyskcwgmysyyu:
        }
        goto cemgcsgywukgwumc;
        ckemesyoeaoqggmc:
        $oammesyieqmwuwyi = [];
        goto uoaoeecwkiwcyocu;
        cemgcsgywukgwumc:
        mmsaugsyiwoeeook:
        goto omuwgeccqksimyey;
        omuwgeccqksimyey:
        return $oammesyieqmwuwyi;
        goto koqikcoqcoaguoou;
        koqikcoqcoaguoou:
    }
    
    public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array
    {
        return $wwgucssaecqekuek;
    }
    
    public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array
    {
        goto eckeooegecygieyk;
        cgyqyossocsqgaug:
        foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) {
            goto pkuuoegoucsmcciu;
            pkuuoegoucsmcciu:
            $uammqaqiwgcmeska = explode("\54", $uammqaqiwgcmeska);
            goto uwyeioqkgkmockse;
            uwyeioqkgkmockse:
            foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) {
                goto eawqikuuwwqiawok;
                eeoaoaugmmauawuu:
                $uusmaiomayssaecw = $uusmaiomayssaecw[1];
                goto smweugsusmooiiio;
                soqyweewgwukmieu:
                omqagaqgauuyyicw:
                goto uekisuecwyiqcmum;
                kguqqkyiyiewesws:
                $uskwgmsuqowaosow = ManipulateArray::get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw);
                goto eymiseesqmwcqkkc;
                eymiseesqmwcqkkc:
                $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow);
                goto soqyweewgwukmieu;
                smweugsusmooiiio:
                if (!isset($eqgoocgaqwqcimie[1])) {
                    goto omqagaqgauuyyicw;
                }
                goto kguqqkyiyiewesws;
                skuqeisegcaaieqa:
                preg_match("\x2f\x27\50\x5b\136\47\x5d\x2a\51\x27\x2f", $igqsaukqcqscimok, $eqgoocgaqwqcimie);
                goto eeoaoaugmmauawuu;
                uekisuecwyiqcmum:
                iaagwiqkugqsscgc:
                goto iyumqcqimwmcouwy;
                eawqikuuwwqiawok:
                preg_match("\x2f\x28\x5b\x5e\75\135\53\51\x2f", $igqsaukqcqscimok, $uusmaiomayssaecw);
                goto skuqeisegcaaieqa;
                iyumqcqimwmcouwy:
            }
            goto yyyacuumougcsooy;
            wgaickycsmcoocym:
            wyqgycaawqceccem:
            goto gisggqiemyiokyck;
            yyyacuumougcsooy:
            ywkiskkeoqykoqaw:
            goto wgaickycsmcoocym;
            gisggqiemyiokyck:
        }
        goto mckiewcikccuweas;
        koecgmwauymuscgy:
        $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1];
        goto cgyqyossocsqgaug;
        keccieguacsgccuq:
        preg_match_all("\x2f\x5c\50\50\x2e\x2a\x3f\51\x5c\x29\57", $icwicymcioeyeyek, $meyiiwcswqmuggyg);
        goto koecgmwauymuscgy;
        eckeooegecygieyk:
        $aqykuigiuwmmcieu = [];
        goto keccieguacsgccuq;
        ccackosockmyumws:
        return $aqykuigiuwmmcieu;
        goto iugaemoyuymuioeg;
        mckiewcikccuweas:
        ukykouywmkccqeoq:
        goto ccackosockmyumws;
        iugaemoyuymuioeg:
    }
    
    public function acgiiomwuewkmgei($eqgoocgaqwqcimie)
    {
        goto oskuaiwgisysakgu;
        mgoeiguueowceuya:
        $eqgoocgaqwqcimie = $aqykuigiuwmmcieu;
        goto owwiiseawccyqagc;
        uuiomuugqeygqqsw:
        qcoaaekiwcomokqa:
        goto scoyasauucwmisgg;
        ycaoqcaoskmiaecy:
        aaiucmuaeceaikis:
        goto awoyigaookcgkick;
        awoyigaookcgkick:
        $eqgoocgaqwqcimie = explode(self::PIPE_SYMBOL, $eqgoocgaqwqcimie);
        goto iccwagsgiwweegyu;
        owwiiseawccyqagc:
        goto uisoqcsgasswqgma;
        goto ycaoqcaoskmiaecy;
        oskuaiwgisysakgu:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto qcoaaekiwcomokqa;
        }
        goto miywwekqqwcioqgm;
        iccwagsgiwweegyu:
        uisoqcsgasswqgma:
        goto uuiomuugqeygqqsw;
        scoyasauucwmisgg:
        return $eqgoocgaqwqcimie;
        goto gqiusmcakwmqwqoe;
        miywwekqqwcioqgm:
        
        $aqykuigiuwmmcieu = explode(self::COMMA_SYMBOL, $eqgoocgaqwqcimie);
        goto koguuqyauswemwqw;
        koguuqyauswemwqw:
        if (count($aqykuigiuwmmcieu) <= 1) {
            goto aaiucmuaeceaikis;
        }
        goto mgoeiguueowceuya;
        gqiusmcakwmqwqoe:
    }
    
    public abstract function gwquaaaaikcwcges() : array;
}
