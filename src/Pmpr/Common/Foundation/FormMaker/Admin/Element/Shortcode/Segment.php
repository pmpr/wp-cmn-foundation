<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        iimsysqcwkkyussk:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto eawmcoqugswqumug;
        syksimggseucuuss:
        $aokagokqyuysuksm = $this->aakmagwggmkoiiyu();
        goto kcgwoyoqauywsgci;
        ycwcgemuqkayueos:
        return $aokagokqyuysuksm;
        goto iuqooeosgqegimwg;
        kcgwoyoqauywsgci:
        eecakgugucgugsqg:
        goto ycwcgemuqkayueos;
        eawmcoqugswqumug:
        if ($aokagokqyuysuksm) {
            goto eecakgugucgugsqg;
        }
        goto syksimggseucuuss;
        iuqooeosgqegimwg:
    }
    public function init()
    {
        parent::init();
        $this->gkoiuyagqcoecigk();
    }
    public function gkoiuyagqcoecigk()
    {
        add_shortcode($this->cisyiemkeykgkomc(), [$this, "\157\x73\x65\141\x63\x71\151\x6d\x65\x63\167\147\147\141\153\x77"]);
        
        add_shortcode("\160\155\x70\x72\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\163\x65\x61\143\161\151\155\x65\x63\x77\147\x67\141\153\167"]);
    }
    
    public function isqsicqgwyyasyke() : array
    {
        return $this->sscegwueamckwmcy("\x73\x68\157\x72\x74\x63\x6f\x64\x65\137\x63\157\154\x75\x6d\x6e\163", []);
    }
    
    public function oseacqimecwggakw($wwgucssaecqekuek) : string
    {
        goto gukiwcokgekkgcyq;
        owucqkqugooiaiuq:
        
        $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek));
        goto ceqqkqeeykoasgqc;
        aaamsqswkwigciaa:
        akiqwgcqoawimqma:
        goto aokywsysguyiycuw;
        oeakkqksiaaywgss:
        $wwgucssaecqekuek = [];
        goto smmuagmgoswiikku;
        qeyuumiikmqaaocu:
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x68\157\x72\x74\x63\157\x64\145\x5f\150\x74\x6d\154"), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this);
        goto iowsyesgugcwswgw;
        ycssququegogusca:
        $ggauoeuaesiymgee = $this->gwquaaaaikcwcges();
        goto yyygiwgsksquqiuq;
        esiwmyaawisewmqa:
        if (!(ManipulateServer::smowememmgeukwki() && !$this->kqeoeeayumeoyaoa())) {
            goto ptasqiqkmgwcsoeq;
        }
        goto ewwuqigwsiisiyka;
        aokywsysguyiycuw:
        $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek);
        goto gasmimewcwoymayo;
        mcosmsucmwgukeqs:
        owykgicqgsqskyke:
        goto ycssququegogusca;
        iaagsosikuuwycqu:
        $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ["\144\x65\146\141\165\x6c\164" => "\x69\x6e\144\x65\170\56\150\x74\x6d\x6c\56\x74\x77\x69\147"]);
        goto isqqsoyqokqugeau;
        kyqwyywqgieaqeki:
        goto ueswooyeceyuuiim;
        goto aaamsqswkwigciaa;
        qumwwuaymkqkkukg:
        $iqyiekoceqqsqoow = ManipulateArray::get($wwgucssaecqekuek, self::LAYOUT, $this->aakmagwggmkoiiyu());
        goto eqwqoyucuckemuqw;
        isqqsoyqokqugeau:
        ueswooyeceyuuiim:
        goto qeyuumiikmqaaocu;
        gasmimewcwoymayo:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\163\x68\x6f\x72\x74\x63\157\x64\145\x5f\x61\164\x74\162\163"), $wwgucssaecqekuek, $this);
        goto owucqkqugooiaiuq;
        smmuagmgoswiikku:
        goto moeciuaugoiwgwgc;
        goto mcosmsucmwgukeqs;
        kamgoauwkoeewyio:
        ptasqiqkmgwcsoeq:
        goto ussewyuewkoismma;
        cmkwkoyucmiyqwqs:
        wp_die(__("\x63\141\156\x6e\157\x74\40\146\x6f\165\156\x64\40\x74\x65\x6d\x70\x6c\141\x74\145\40\x66\157\162\40\x63\x72\x65\x61\x74\145\x20\155\141\162\x6b\x75\x70\x20\x69\156\x20\x73\x68\x6f\x72\164\x63\157\x64\145\40\157\146\72\x20" . self::uqggkiomyiceyooa(), PR__CMN__FOUNDATION));
        goto kyqwyywqgieaqeki;
        ussewyuewkoismma:
        if (is_array($wwgucssaecqekuek)) {
            goto owykgicqgsqskyke;
        }
        goto oeakkqksiaaywgss;
        aiuwkmuqsmwgyimu:
        moeciuaugoiwgwgc:
        goto qumwwuaymkqkkukg;
        yyygiwgsksquqiuq:
        $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek);
        goto aiuwkmuqsmwgyimu;
        ewwuqigwsiisiyka:
        return $nsmgceoqaqogqmuw;
        goto kamgoauwkoeewyio;
        gukiwcokgekkgcyq:
        $nsmgceoqaqogqmuw = '';
        goto esiwmyaawisewmqa;
        eqwqoyucuckemuqw:
        if ($iqyiekoceqqsqoow) {
            goto akiqwgcqoawimqma;
        }
        goto cmkwkoyucmiyqwqs;
        ceqqkqeeykoasgqc:
        $qookweymeqawmcwo["\163\x68\x6f\x72\164\143\157\144\x65\137\156\x61\x6d\145"] = $this->aakmagwggmkoiiyu();
        goto iaagsosikuuwycqu;
        iowsyesgugcwswgw:
    }
    
    public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array
    {
        goto gukikisymyskwkem;
        qcckmmoqsmscecig:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto gaookssioagqcquy;
        wgqgmwayiywaiqie:
        return $wwgucssaecqekuek;
        goto ogcsossuoysoeqiy;
        gaookssioagqcquy:
        mgigqcuwoseciami:
        goto yameeuaoykuuoeqs;
        gukikisymyskwkem:
        $this->ecwgiiuacoaokqkw();
        goto aauueawyeymekmqa;
        aauueawyeymekmqa:
        if ($ikgwqyuyckaewsow) {
            goto mgigqcuwoseciami;
        }
        goto qcckmmoqsmscecig;
        qcmquqkmokioagqk:
        omagoquasyayscka:
        goto wgqgmwayiywaiqie;
        yameeuaoykuuoeqs:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto uoyqmukuwgkgccyg;
            mseaegwmygyisawy:
            yeygiuiosqwooymg:
            goto qyqwegcukwqckggq;
            wkqcmyomiyuykeeq:
            $eqgoocgaqwqcimie = ManipulateArray::get($wwgucssaecqekuek, $aokagokqyuysuksm);
            goto sqkkyawioeawcugy;
            sqkkyawioeawcugy:
            $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus);
            goto cqcsmsmyuyqemcim;
            uoyqmukuwgkgccyg:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto cocikygyuigukeai;
            }
            goto wkqcmyomiyuykeeq;
            cqcsmsmyuyqemcim:
            cocikygyuigukeai:
            goto mseaegwmygyisawy;
            qyqwegcukwqckggq:
        }
        goto qcmquqkmokioagqk;
        ogcsossuoysoeqiy:
    }
    
    public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null)
    {
        goto iukswyicmecaqmsu;
        oukumaiywisqysue:
        if (!$aiowsaccomcoikus->zosqeeykkcqmmkqs()) {
            goto cssqogukqgeaissu;
        }
        goto qguqwygiosouksua;
        ecqcyykogswwckcy:
        if (is_string($eqgoocgaqwqcimie)) {
            goto qgcyeywsoyacqcgw;
        }
        goto qmaiieksomkoyuyi;
        qguqwygiosouksua:
        $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie);
        goto gkqkqkyiikmyoyes;
        qyoggesicagmmmca:
        return $eqgoocgaqwqcimie;
        goto okamwaeykoyomecq;
        kwkymuwcawyykqmy:
        accoqsgicekgsyeo:
        goto qyoggesicagmmmca;
        iquummqymwyukwcq:
        $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie);
        goto wccsuuqokyomaoqs;
        gkqkqkyiikmyoyes:
        cssqogukqgeaissu:
        goto iqwgsigqsoaqemoq;
        iqwgsigqsoaqemoq:
        goto qageqemksoqswcwo;
        goto mkamqcmusuweioak;
        ykkieooomgmyscgg:
        cckmuqueowusaasq:
        goto oukumaiywisqysue;
        iukswyicmecaqmsu:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto accoqsgicekgsyeo;
        }
        goto qsygogogimikogkq;
        qmaiieksomkoyuyi:
        goto qageqemksoqswcwo;
        goto keqamwmqakacwwoe;
        keqamwmqakacwwoe:
        asgyagaekgeoweem:
        goto cqogucaumkswcmmi;
        qsygogogimikogkq:
        if (!$eqgoocgaqwqcimie) {
            goto imqagwsikyoqgmek;
        }
        goto mwuuggcscaiaoueq;
        aacasqsuuqoogeqi:
        imqagwsikyoqgmek:
        goto kwkymuwcawyykqmy;
        mkamqcmusuweioak:
        qgcyeywsoyacqcgw:
        goto iquummqymwyukwcq;
        cqogucaumkswcmmi:
        $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus);
        goto aimekgqcsgskeiss;
        wccsuuqokyomaoqs:
        qageqemksoqswcwo:
        goto aacasqsuuqoogeqi;
        mwuuggcscaiaoueq:
        if ($aiowsaccomcoikus instanceof Group) {
            goto asgyagaekgeoweem;
        }
        goto qesuygwuaaegeswm;
        qesuygwuaaegeswm:
        if ($aiowsaccomcoikus instanceof BSSelect) {
            goto cckmuqueowusaasq;
        }
        goto ecqcyykogswwckcy;
        aimekgqcsgskeiss:
        goto qageqemksoqswcwo;
        goto ykkieooomgmyscgg;
        okamwaeykoyomecq:
    }
    
    public function ocwoiywammqiuggq() : string
    {
        return "\x70\x72\55\x73\150\x6f\x72\x74\x63\157\x64\x65";
    }
    
    public function ccmewsuaqiaegqso($eqgoocgaqwqcimie)
    {
        goto uusmocykkkksqiua;
        uusmocykkkksqiua:
        preg_match("\57\x7b\50\56\52\77\x29\x7d\57", $eqgoocgaqwqcimie, $uammqaqiwgcmeska);
        goto yiamkiackwgqymyq;
        kcyqywycuysksaws:
        cmociugasewqkuem:
        goto qysqycokygquuggm;
        qysqycokygquuggm:
        return $eqgoocgaqwqcimie;
        goto assygwiykikyqiko;
        wwmmyaugeaiumkiw:
        $wywkqkuaaekaokeq = do_shortcode("\133" . $uammqaqiwgcmeska[1] . "\x5d");
        goto mcsoqawmisuqokgy;
        yiamkiackwgqymyq:
        if (!isset($uammqaqiwgcmeska[1])) {
            goto cmociugasewqkuem;
        }
        goto wwmmyaugeaiumkiw;
        mcsoqawmisuqokgy:
        $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $wywkqkuaaekaokeq, $eqgoocgaqwqcimie);
        goto kcyqywycuysksaws;
        assygwiykikyqiko:
    }
    
    public function squkoowcgeokaywq($somsiuiquigiqsmk) : array
    {
        goto ckemesyoeaoqggmc;
        ckemesyoeaoqggmc:
        $oammesyieqmwuwyi = [];
        goto uoaoeecwkiwcyocu;
        omuwgeccqksimyey:
        return $oammesyieqmwuwyi;
        goto koqikcoqcoaguoou;
        cemgcsgywukgwumc:
        mmsaugsyiwoeeook:
        goto omuwgeccqksimyey;
        uoaoeecwkiwcyocu:
        foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) {
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = ManipulateHTML::qgsekwygcgawekeq("\151\155\x67", ["\163\162\143" => $mcqieaigyeeyaksm]);
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
        keccieguacsgccuq:
        preg_match_all("\x2f\x5c\50\50\56\52\77\51\x5c\51\x2f", $icwicymcioeyeyek, $meyiiwcswqmuggyg);
        goto koecgmwauymuscgy;
        mckiewcikccuweas:
        ukykouywmkccqeoq:
        goto ccackosockmyumws;
        eckeooegecygieyk:
        $aqykuigiuwmmcieu = [];
        goto keccieguacsgccuq;
        cgyqyossocsqgaug:
        foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) {
            goto pkuuoegoucsmcciu;
            wgaickycsmcoocym:
            wyqgycaawqceccem:
            goto gisggqiemyiokyck;
            pkuuoegoucsmcciu:
            $uammqaqiwgcmeska = explode("\54", $uammqaqiwgcmeska);
            goto uwyeioqkgkmockse;
            yyyacuumougcsooy:
            ywkiskkeoqykoqaw:
            goto wgaickycsmcoocym;
            uwyeioqkgkmockse:
            foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) {
                goto eawqikuuwwqiawok;
                eymiseesqmwcqkkc:
                $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow);
                goto soqyweewgwukmieu;
                soqyweewgwukmieu:
                omqagaqgauuyyicw:
                goto uekisuecwyiqcmum;
                eawqikuuwwqiawok:
                preg_match("\x2f\x28\133\x5e\75\x5d\x2b\x29\x2f", $igqsaukqcqscimok, $uusmaiomayssaecw);
                goto skuqeisegcaaieqa;
                smweugsusmooiiio:
                if (!isset($eqgoocgaqwqcimie[1])) {
                    goto omqagaqgauuyyicw;
                }
                goto kguqqkyiyiewesws;
                eeoaoaugmmauawuu:
                $uusmaiomayssaecw = $uusmaiomayssaecw[1];
                goto smweugsusmooiiio;
                kguqqkyiyiewesws:
                $uskwgmsuqowaosow = ManipulateArray::get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw);
                goto eymiseesqmwcqkkc;
                uekisuecwyiqcmum:
                iaagwiqkugqsscgc:
                goto iyumqcqimwmcouwy;
                skuqeisegcaaieqa:
                preg_match("\57\x27\x28\133\136\47\135\x2a\51\47\57", $igqsaukqcqscimok, $eqgoocgaqwqcimie);
                goto eeoaoaugmmauawuu;
                iyumqcqimwmcouwy:
            }
            goto yyyacuumougcsooy;
            gisggqiemyiokyck:
        }
        goto mckiewcikccuweas;
        iugaemoyuymuioeg:
    }
    
    public function acgiiomwuewkmgei($eqgoocgaqwqcimie)
    {
        goto oskuaiwgisysakgu;
        mgoeiguueowceuya:
        $eqgoocgaqwqcimie = $aqykuigiuwmmcieu;
        goto owwiiseawccyqagc;
        oskuaiwgisysakgu:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto qcoaaekiwcomokqa;
        }
        goto miywwekqqwcioqgm;
        owwiiseawccyqagc:
        goto uisoqcsgasswqgma;
        goto ycaoqcaoskmiaecy;
        koguuqyauswemwqw:
        if (count($aqykuigiuwmmcieu) <= 1) {
            goto aaiucmuaeceaikis;
        }
        goto mgoeiguueowceuya;
        scoyasauucwmisgg:
        return $eqgoocgaqwqcimie;
        goto gqiusmcakwmqwqoe;
        iccwagsgiwweegyu:
        uisoqcsgasswqgma:
        goto uuiomuugqeygqqsw;
        ycaoqcaoskmiaecy:
        aaiucmuaeceaikis:
        goto awoyigaookcgkick;
        awoyigaookcgkick:
        $eqgoocgaqwqcimie = explode(self::PIPE_SYMBOL, $eqgoocgaqwqcimie);
        goto iccwagsgiwweegyu;
        miywwekqqwcioqgm:
        
        $aqykuigiuwmmcieu = explode(self::COMMA_SYMBOL, $eqgoocgaqwqcimie);
        goto koguuqyauswemwqw;
        uuiomuugqeygqqsw:
        qcoaaekiwcomokqa:
        goto scoyasauucwmisgg;
        gqiusmcakwmqwqoe:
    }
    
    public abstract function gwquaaaaikcwcges() : array;
}
