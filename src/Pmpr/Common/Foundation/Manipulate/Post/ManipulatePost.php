<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Post;

use Exception;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Post;
use WP_Post_Type;
use WP_Query;

class ManipulatePost extends Common
{
    
    public static function wugecumwuwwwqyoe($post)
    {
        return DecoratorPost::wugecumwuwwwqyoe(self::mwikyscisascoeea($post, true));
    }
    
    public static function cwucesiiikgqsgui()
    {
        goto smqeqmsuawsimmcs;
        qcciqymcyggowaow:
        qucseiiyqgwmyyik:
        goto sqqmacumauekywma;
        kikyssscmqesqkaa:
        if ($sqeykgyoooqysmca) {
            goto cwycogckouesaesk;
        }
        goto igqswueceimwyksq;
        osuqweqwqukwwaqc:
        $sqeykgyoooqysmca = $typenow;
        goto syoykqauiiuuiaae;
        kicogigewkgmqwym:
        $sqeykgyoooqysmca = ManipulateArray::get($current_screen, self::POST_TYPE);
        goto akggggqgqmmgcaiy;
        qkqqysiiugqceokw:
        goto eqoegikgmweyoeca;
        goto kykyayauiiamcskk;
        kykyayauiiamcskk:
        koqequoesgsqmeye:
        goto osuqweqwqukwwaqc;
        gwkaweoeoyumiagw:
        if ($current_screen) {
            goto myyskgacygigeayu;
        }
        goto qkqqysiiugqceokw;
        wwgsooeeqeiaswoi:
        $sqeykgyoooqysmca = ManipulateServer::ayueggmoqeeukqmq(self::POST_TYPE);
        goto oqcooececqwqwiya;
        imggygaykcwqeeqa:
        return $sqeykgyoooqysmca;
        goto mquqqwyaksscucig;
        akggggqgqmmgcaiy:
        eqoegikgmweyoeca:
        goto oiswowekmymaweog;
        smqeqmsuawsimmcs:
        $sqeykgyoooqysmca = ManipulateArray::get(self::get(), self::POST_TYPE);
        goto kikyssscmqesqkaa;
        wokiacaaeqwoamgu:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto qcciqymcyggowaow;
        syoykqauiiuuiaae:
        goto eqoegikgmweyoeca;
        goto egymseeqcsgsiuqy;
        yisacmyycgcuaimi:
        if (!(!$sqeykgyoooqysmca && $post)) {
            goto qucseiiyqgwmyyik;
        }
        goto wokiacaaeqwoamgu;
        igqswueceimwyksq:
        global $typenow, $current_screen;
        goto weccmykeusmgswkc;
        egymseeqcsgsiuqy:
        myyskgacygigeayu:
        goto kicogigewkgmqwym;
        oqcooececqwqwiya:
        $post = ManipulateServer::ayueggmoqeeukqmq(self::POST);
        goto yisacmyycgcuaimi;
        weccmykeusmgswkc:
        if ($typenow) {
            goto koqequoesgsqmeye;
        }
        goto gwkaweoeoyumiagw;
        sqqmacumauekywma:
        awywowqmgkeiawky:
        goto kckywuggymioosew;
        kckywuggymioosew:
        cwycogckouesaesk:
        goto imggygaykcwqeeqa;
        oiswowekmymaweog:
        if ($sqeykgyoooqysmca) {
            goto awywowqmgkeiawky;
        }
        goto wwgsooeeqeiaswoi;
        mquqqwyaksscucig:
    }
    
    public static function ygqycmmkoiuocoia($post)
    {
        return ManipulateArray::get(self::get($post), "\160\157\x73\x74\x5f\x70\x61\162\x65\156\164");
    }
    
    public static function ekwkywuguceaogsk()
    {
        goto aygaeqqgkosiccik;
        kykqywkcmkkiimqu:
        the_post();
        goto aoquqswgmegqeemm;
        ucgaaaeumkcmsios:
        ygoekseuwuqgsqiw:
        goto gykwuammuiuimcqe;
        ycioskgosgkaocui:
        return $wyoiwuqokyeeuguk;
        goto qumcciymugkuayyo;
        aoquqswgmegqeemm:
        $wyoiwuqokyeeuguk[] = self::get();
        goto qaiqiokieeggcoym;
        aygaeqqgkosiccik:
        $wyoiwuqokyeeuguk = [];
        goto wwuscguquemeomsm;
        qaiqiokieeggcoym:
        goto ccgwgmsawecwassc;
        goto ucgaaaeumkcmsios;
        wwuscguquemeomsm:
        if (!have_posts()) {
            goto osquygowswqqgcqu;
        }
        goto kwkwaqqwaoewgqwc;
        kwkwaqqwaoewgqwc:
        ccgwgmsawecwassc:
        goto weqaocmesamqkcic;
        weqaocmesamqkcic:
        if (!have_posts()) {
            goto ygoekseuwuqgsqiw;
        }
        goto kykqywkcmkkiimqu;
        gykwuammuiuimcqe:
        osquygowswqqgcqu:
        goto ycioskgosgkaocui;
        qumcciymugkuayyo:
    }
    
    public static function cuoieqacocyyookg($post)
    {
        $emeuskyoeemoywwi = self::wgocauqiyqkmkyki($post);
        return floor($emeuskyoeemoywwi / 200);
    }
    
    public static function wgocauqiyqkmkyki($post)
    {
        goto kaeyaqskwuaaagmg;
        iucgiywuayaqoiis:
        
        return count($emeuskyoeemoywwi);
        goto ioamsuyiukoaawiw;
        mkcsuwyggueicysc:
        
        
        $emeuskyoeemoywwi = preg_split("\57\x5b\xa\xd\x9\x20\x5d\x2b\57", $ewgwqamkygiqaawc, 0, PREG_SPLIT_NO_EMPTY);
        goto iucgiywuayaqoiis;
        uayoaukucommuwki:
        
        $ewgwqamkygiqaawc = preg_replace("\57\133\133\x3a\x70\x75\156\x63\x74\x3a\135\133\72\x64\151\x67\x69\x74\x3a\135\x5d\x2f", '', $ewgwqamkygiqaawc);
        goto okemiqakkiysqqyc;
        okemiqakkiysqqyc:
        
        $ewgwqamkygiqaawc = preg_replace("\57\x5b\133\x3a\x73\160\x61\x63\145\x3a\135\135\57", "\40", $ewgwqamkygiqaawc);
        goto mkcsuwyggueicysc;
        mygqkusgqoqgwayy:
        $ewgwqamkygiqaawc = self::souwykwwmyygqyqi($post);
        goto uayoaukucommuwki;
        kaeyaqskwuaaagmg:
        $post = self::get($post);
        goto mygqkusgqoqgwayy;
        ioamsuyiukoaawiw:
    }
    
    public static function mwoyqeeigwqoamiw($ywmkwiwkosakssii = [])
    {
        goto maaqgkcmqkcguscg;
        gyakkgyocuygkkwi:
        $gqgemcmoicmgaqie = [];
        goto sgiswsoiyoowcqsw;
        kmeqemccwyaskwqk:
        $oammesyieqmwuwyi = ManipulateFormat::omaawkkwwyesqwcc($ggauoeuaesiymgee, DecoratorPost::mwoyqeeigwqoamiw($gqgemcmoicmgaqie, $aqykuigiuwmmcieu));
        goto akeeousiaemumwqy;
        yuqyccgsmegiicoc:
        sakqwiaagsykwauy:
        goto igommeoookeycwmc;
        gcqmmuowwaseagoa:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::LABELS, self::SLUGS])) {
            goto ksewmguscaqkiiso;
        }
        goto qsocqumaigsayksm;
        eywcgcyicisgcumk:
        goto qkccmuekscemyiqi;
        goto esggoysyykycecyq;
        akeeousiaemumwqy:
        if ($ooiewiwkegguusum) {
            goto iwsgeyycmqmicaag;
        }
        goto ymmkmyqiigmskumu;
        mwkyqwwyuoquwycw:
        $gqgemcmoicmgaqie = ManipulateArray::get($ywmkwiwkosakssii, "\161\165\x65\x72\x79");
        goto cagckkqacmeaemik;
        oekkqiisaauoowkm:
        $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky));
        goto iuqesqwcmseaoouo;
        scmqkqwakowggkmu:
        aseackwooioggwyc:
        goto yaggoqgeaucmkmsi;
        iuqesqwcmseaoouo:
        eykcgaaeakyayico:
        goto gyqeokswmeikygki;
        kiaeuogcagqymoia:
        $yemgmmgogcwccuky = ManipulateArray::get($ywmkwiwkosakssii, self::EXCLUDE);
        goto ekieuqyaekgaekem;
        akkuiemqaogigaqa:
        ausqcauoasmqoqiq:
        goto csciwewamgcguguc;
        eceyessoaayaagci:
        uaguekkygoeqeuoy:
        goto oekkqiisaauoowkm;
        mswiyiyqqqqqmccc:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto ousuggsuweyeqyuo;
        kikyqwgykkiskoik:
        iwsgeyycmqmicaag:
        goto kusaguaukqyawgck;
        esggoysyykycecyq:
        ksewmguscaqkiiso:
        goto mcyiwawwcsquwiqq;
        maaqgkcmqkcguscg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\161\x75\x65\x72\x79" => [], self::OUTPUT => self::NAMES, self::EXCLUDE => [], self::INCLUDE => []]);
        goto mwkyqwwyuoquwycw;
        emmkqsuswgssikec:
        return $ksaameoqigiaoigg;
        goto agwoisgcwqooygsg;
        ousuggsuweyeqyuo:
        ogasqekksgksomcu:
        goto kmeqemccwyaskwqk;
        gyqeokswmeikygki:
        $ksaameoqigiaoigg = [];
        goto gcqmmuowwaseagoa;
        csciwewamgcguguc:
        qkccmuekscemyiqi:
        goto emmkqsuswgssikec;
        iwuiyecakwogaqos:
        goto eykcgaaeakyayico;
        goto eceyessoaayaagci;
        cumcsgcamqomeygk:
        goto eykcgaaeakyayico;
        goto kikyqwgykkiskoik;
        cagckkqacmeaemik:
        $sogksuscggsicmac = ManipulateArray::get($ywmkwiwkosakssii, self::OUTPUT);
        goto gokeooqgmyisigwu;
        weuicwuusquqioeo:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::NAMES])) {
            goto ogasqekksgksomcu;
        }
        goto mswiyiyqqqqqmccc;
        yaggoqgeaucmkmsi:
        $aqykuigiuwmmcieu = $sogksuscggsicmac;
        goto weuicwuusquqioeo;
        mcyiwawwcsquwiqq:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto eegacceeuuycmssm;
            okwcqgkysyueokie:
            goto ooweqiekgaaqweig;
            goto skgmwkqigcucecks;
            ccyskouwcaewmmuq:
            $igqsaukqcqscimok = ManipulateArray::get($igqsaukqcqscimok->rewrite, self::SLUG, $ymqmyyeuycgmigyo);
            goto kmgmsagugycgguso;
            cyweqwceuyeuqwiq:
            if ($sogksuscggsicmac === self::SLUGS) {
                goto yemeacuywsiqecgm;
            }
            goto okwcqgkysyueokie;
            skgmwkqigcucecks:
            cwaaqwgckkmmuayw:
            goto qaugoawikwesmkqo;
            imgcoqgqsgmwussc:
            $ymqmyyeuycgmigyo = $igqsaukqcqscimok->name;
            goto ayocomqsygokygku;
            eegacceeuuycmssm:
            $igqsaukqcqscimok = self::waaisqccqacqeium($igqsaukqcqscimok);
            goto yswsuyqqsygkqcgi;
            cyoqykquycmuksqu:
            saaqoyeqicykmmuu:
            goto owcyysasyeaaowwk;
            qoukygmscqwwmeci:
            $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok;
            goto cyoqykquycmuksqu;
            swekqcymmemsckim:
            goto ooweqiekgaaqweig;
            goto mgsqaweekeiqgcys;
            kmgmsagugycgguso:
            ooweqiekgaaqweig:
            goto qoukygmscqwwmeci;
            owcyysasyeaaowwk:
            wgkewusaiaqwwmmk:
            goto eiqwmksumaugsiue;
            ayocomqsygokygku:
            if ($sogksuscggsicmac === self::LABELS) {
                goto cwaaqwgckkmmuayw;
            }
            goto cyweqwceuyeuqwiq;
            mgsqaweekeiqgcys:
            yemeacuywsiqecgm:
            goto ccyskouwcaewmmuq;
            qaugoawikwesmkqo:
            $igqsaukqcqscimok = $igqsaukqcqscimok->label;
            goto swekqcymmemsckim;
            yswsuyqqsygkqcgi:
            if (!$igqsaukqcqscimok) {
                goto saaqoyeqicykmmuu;
            }
            goto imgcoqgqsgmwussc;
            eiqwmksumaugsiue:
        }
        goto akkuiemqaogigaqa;
        uycmykimwqoyykmo:
        if (!$ooiewiwkegguusum) {
            goto sakqwiaagsykwauy;
        }
        goto gyakkgyocuygkkwi;
        sgiswsoiyoowcqsw:
        goto aseackwooioggwyc;
        goto yuqyccgsmegiicoc;
        ekieuqyaekgaekem:
        $ggauoeuaesiymgee = self::DEFAULT_POST_TYPES;
        goto uycmykimwqoyykmo;
        gokeooqgmyisigwu:
        $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::INCLUDE);
        goto kiaeuogcagqymoia;
        qsocqumaigsayksm:
        $ksaameoqigiaoigg = $oammesyieqmwuwyi;
        goto eywcgcyicisgcumk;
        igommeoookeycwmc:
        $gqgemcmoicmgaqie = ManipulateFormat::omaawkkwwyesqwcc($gqgemcmoicmgaqie, ["\x70\165\142\154\x69\143" => true, "\137\x62\165\x69\x6c\164\x69\x6e" => false, "\160\165\x62\x6c\151\x63\x6c\x79\137\161\x75\145\x72\x79\x61\x62\x6c\145" => true]);
        goto scmqkqwakowggkmu;
        ymmkmyqiigmskumu:
        if ($yemgmmgogcwccuky) {
            goto uaguekkygoeqeuoy;
        }
        goto cumcsgcamqomeygk;
        kusaguaukqyawgck:
        $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi);
        goto iwuiyecakwogaqos;
        agwoisgcwqooygsg:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        return DecoratorPost::qcgakseyaikigqco(self::get($post));
    }
    
    public static function cekqoisoaceaqiam($post)
    {
        goto wccuioiewmeamewo;
        amaoecqeywkkmyoi:
        $gwiqqkoakiiquksg = str_replace("\137\x5f\164\x72\x61\163\150\145\144", '', $gwiqqkoakiiquksg);
        goto oymoaaossqyocmue;
        qqewuuoigkoeeocq:
        $ucsmiamgwmayyoco = ManipulatePage::symuoymymumgwkaw();
        goto ksmsiiaeokcggegc;
        ikuuqaoiwigcmwyu:
        $gwiqqkoakiiquksg = self::ycqquoiyyuesegsy($post);
        goto amaoecqeywkkmyoi;
        oouaueaaciqmoaek:
        if (!($myyccyuumcscsagc == true)) {
            goto uqoowswseqmmisei;
        }
        goto eqooqiomasygymwk;
        kwqoqgccuqgigkoc:
        
        if (!(self::ucwmcwqmqwaymkkc($post) == "\164\x72\x61\x73\150")) {
            goto aeamameocikekces;
        }
        goto ikuuqaoiwigcmwyu;
        eqooqiomasygymwk:
        array_push($auwuoyyagaiegwae, $myyccyuumcscsagc, get_post_type_archive_feed_link($sqeykgyoooqysmca));
        goto kcaciomiguuugugi;
        ocsyqkkqkwekgakm:
        ccgsasimykggyess:
        goto wuucmmcggqqsmakc;
        imsmuoawuiemiisk:
        
        array_push($auwuoyyagaiegwae, home_url("\57"));
        goto qqewuuoigkoeeocq;
        ksmsiiaeokcggegc:
        if (!(is_string($ucsmiamgwmayyoco) && !empty($ucsmiamgwmayyoco) && DecoratorOption::get("\x73\x68\x6f\167\x5f\x6f\x6e\137\x66\162\157\156\164") == "\160\x61\147\x65")) {
            goto suqaqoaowamkiymi;
        }
        goto ugqqciuuwaioyowe;
        cscciumkmikyqica:
        aeamameocikekces:
        goto imsmuoawuiemiisk;
        oymoaaossqyocmue:
        array_push($auwuoyyagaiegwae, $gwiqqkoakiiquksg, $gwiqqkoakiiquksg . "\146\x65\145\144\x2f");
        goto cscciumkmikyqica;
        scywsowkeyyssgqo:
        suqaqoaowamkiymi:
        goto woaewkuksuiogeoo;
        eemuaaqoyiqiyyoe:
        
        array_push($auwuoyyagaiegwae, DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), get_author_feed_link($qscaoekmoooeuyqg));
        goto gmwqisoikakuqicc;
        iomigqssyeeaqgsg:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto ogekauwggisguwkq;
        wccuioiewmeamewo:
        $auwuoyyagaiegwae = [];
        goto ucwuomcmcoqmyqwm;
        wuucmmcggqqsmakc:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto eemuaaqoyiqiyyoe;
        ogekauwggisguwkq:
        
        array_push($auwuoyyagaiegwae, self::ycqquoiyyuesegsy($post));
        goto uwyuiwkkeuwsykys;
        woaewkuksuiogeoo:
        return $auwuoyyagaiegwae;
        goto acoociuqgmymeggw;
        uwyuiwkkeuwsykys:
        
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas($sqeykgyoooqysmca);
        goto acmoiyiogowkkesw;
        ucwuomcmcoqmyqwm:
        $post = self::get($post);
        goto iomigqssyeeaqgsg;
        kcaciomiguuugugi:
        uqoowswseqmmisei:
        goto kwqoqgccuqgigkoc;
        gmwqisoikakuqicc:
        
        $myyccyuumcscsagc = self::mqgeysameoesmuqw($sqeykgyoooqysmca);
        goto oouaueaaciqmoaek;
        acmoiyiogowkkesw:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto wwkgimsumqsaicoy;
            wwkgimsumqsaicoy:
            $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
            goto ugiegewmsumyuqmq;
            ueocsmuykwyoywui:
            kkicowiukwoykmms:
            goto kawkoccmuqqeamms;
            seqgigumouyguowy:
            mwsmaceeuacaoeas:
            goto ueocsmuykwyoywui;
            aesusogymakeuios:
            eueuyagcqqwwsick:
            goto seqgigumouyguowy;
            ugiegewmsumyuqmq:
            if (!$uyuaosigqymaqsaa) {
                goto mwsmaceeuacaoeas;
            }
            goto geiwkqgwawsmyeiw;
            geiwkqgwawsmyeiw:
            foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                goto oeewoegiqgywwmos;
                cqycwggykmmyacuk:
                if (!($ciyackuwsqkoqese <= $giqggecqqikcysgq)) {
                    goto qokggikksgqmecam;
                }
                goto ugkgqeugmkumauos;
                aqgmwywwecioauqg:
                smiwewgysqykaqee:
                goto sqgkqqoeksyicmoa;
                aaqiykkkmossycmw:
                array_push($auwuoyyagaiegwae, $voccgqswsiwauyow);
                goto ycygwiuuauuwwmyc;
                aswkmiocmcogokyy:
                $gaeqamemwmwsyukm = $iwewcwusemqaiggk->count;
                goto qyyosiukaswscmuu;
                ueoygowuiugooicc:
                gkwycwegcuicsgas:
                goto cuockkkkmamkuygc;
                yskwigcmaicqamqy:
                array_push($auwuoyyagaiegwae, $oaeeeywcmcskwwgy);
                goto aqgmwywwecioauqg;
                ugkgqeugmkumauos:
                $oaeeeywcmcskwwgy = $voccgqswsiwauyow . "\160\x61\147\145\x2f" . user_trailingslashit($ciyackuwsqkoqese);
                goto yskwigcmaicqamqy;
                gqeeomoukqkowycw:
                $giqggecqqikcysgq = min($ocqawgquwsqioses, 10);
                goto uussagskoysuoeiw;
                sqgkqqoeksyicmoa:
                $ciyackuwsqkoqese++;
                goto mmgissacqioqksmk;
                ywimgeoyusmceogc:
                if (!$weyoqgcesqgeusiu) {
                    goto gkwycwegcuicsgas;
                }
                goto aswkmiocmcogokyy;
                oeewoegiqgywwmos:
                $voccgqswsiwauyow = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk);
                goto ekaasiygiigkuasg;
                mmgissacqioqksmk:
                goto uumasiqguewuwcaa;
                goto wceiwqiccssqgcuw;
                cuockkkkmamkuygc:
                saigoogiqigowuqo:
                goto cquyikuyaiskayos;
                wceiwqiccssqgcuw:
                qokggikksgqmecam:
                goto ueoygowuiugooicc;
                rkasqqqgemowweeg:
                uumasiqguewuwcaa:
                goto cqycwggykmmyacuk;
                cquyikuyaiskayos:
                kgqqosqskwaaogyu:
                goto kwsusuqioqiaokmk;
                ycygwiuuauuwwmyc:
                $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq();
                goto ywimgeoyusmceogc;
                uussagskoysuoeiw:
                $ciyackuwsqkoqese = 2;
                goto rkasqqqgemowweeg;
                ekaasiygiigkuasg:
                if (!$voccgqswsiwauyow) {
                    goto saigoogiqigowuqo;
                }
                goto aaqiykkkmossycmw;
                qyyosiukaswscmuu:
                $ocqawgquwsqioses = ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu);
                goto gqeeomoukqkowycw;
                kwsusuqioqiaokmk:
            }
            goto aesusogymakeuios;
            kawkoccmuqqeamms:
        }
        goto ocsyqkkqkwekgakm;
        ugqqciuuwaioyowe:
        array_push($auwuoyyagaiegwae, $ucsmiamgwmayyoco);
        goto scywsowkeyyssgqo;
        acoociuqgmymeggw:
    }
    
    public static function keeogscqcgsequyc($useksmwkuswkwcqg)
    {
        goto ycimqmmmgskimkgi;
        agqsiuycgsaoescw:
        wyuyokmygemgqsmk:
        goto wgceoaueoiiwwuum;
        kcgismqksoywmcea:
        $wkaqekwwgqsqwcoi = $mksyucucyswaukig->menu_icon;
        goto msyksokkggaqasey;
        msyksokkggaqasey:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto amgecmwokwwiiuac;
        wmssywakgoiswqey:
        $mksyucucyswaukig = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto siymkkcgeegouiuq;
        wgwsicukewmsscec:
        if ($wkaqekwwgqsqwcoi) {
            goto wyuyokmygemgqsmk;
        }
        goto gcywkgcegesysuoy;
        wgceoaueoiiwwuum:
        return $wkaqekwwgqsqwcoi;
        goto imyoymgguyuiksia;
        amgecmwokwwiiuac:
        muisqceosooggyoy:
        goto wgwsicukewmsscec;
        siymkkcgeegouiuq:
        if (!$mksyucucyswaukig) {
            goto muisqceosooggyoy;
        }
        goto kcgismqksoywmcea;
        gcywkgcegesysuoy:
        $wkaqekwwgqsqwcoi = "\x61\x64\x6d\151\156\x2d{$useksmwkuswkwcqg}";
        goto agqsiuycgsaoescw;
        ycimqmmmgskimkgi:
        $wkaqekwwgqsqwcoi = '';
        goto wmssywakgoiswqey;
        imyoymgguyuiksia:
    }
    
    public static function uikgwcuascgeissw($post = null)
    {
        goto aigiscsuosewiuus;
        qcimcgcggicewoug:
        $useksmwkuswkwcqg = ManipulateArray::qamwegcyimgcqksw($useksmwkuswkwcqg, "\154\x61\142\x65\154\x73\x2e\163\x69\156\x67\x75\x6c\x61\x72\137\x6e\141\x6d\x65");
        goto iqeuoqeeceiikmse;
        aigiscsuosewiuus:
        $post = self::get($post);
        goto asmoomkuqyqqywkk;
        asmoomkuqyqqywkk:
        $meqocwsecsywiiqs = DecoratorPost::qcgakseyaikigqco($post);
        goto suusasmyiceigsyk;
        ksukaiqewqogiqwu:
        return sprintf("\x25\x73\x20\x2d\40\x25\x73", $meqocwsecsywiiqs, $useksmwkuswkwcqg);
        goto eyuickmcmiiwcgss;
        iqeuoqeeceiikmse:
        ycuamgwmgueemuaq:
        goto ksukaiqewqogiqwu;
        ousiykwqkgeokoqs:
        if (!$useksmwkuswkwcqg) {
            goto ycuamgwmgueemuaq;
        }
        goto qcimcgcggicewoug;
        suusasmyiceigsyk:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($post, true);
        goto ousiykwqkgeokoqs;
        eyuickmcmiiwcgss:
    }
    
    public static function wieguyuwywywksac($ywmkwiwkosakssii = [])
    {
        return wp_get_archives(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\x63\x68\x6f" => false, self::TYPE => "\155\157\156\x74\150\154\x79", self::ORDER => "\104\x45\x53\103"]));
    }
    
    public static function ccwssmqgyasqqcoc($post, $sqeykgyoooqysmca) : bool
    {
        $post = self::get($post, self::OBJECT, true);
        return $post && self::gueasuouwqysmomu($post) == $sqeykgyoooqysmca;
    }
    
    public static function qeosassuekcieuuy($sqeykgyoooqysmca = null) : bool
    {
        goto omaqoumkmmmuuwkq;
        ocykayyqumgsymkk:
        weeeiiqqgqoymeke:
        goto eguuyyiaceyocoge;
        uwkaawaqoswkcuye:
        $cekoogweeooasayu = $sqeykgyoooqysmca->public === true;
        goto ocykayyqumgsymkk;
        uwkcasugwwwwmmqu:
        $sqeykgyoooqysmca = self::waaisqccqacqeium($sqeykgyoooqysmca);
        goto sigseymecgiowiii;
        eguuyyiaceyocoge:
        return $cekoogweeooasayu;
        goto skyscuweykackoci;
        omaqoumkmmmuuwkq:
        $cekoogweeooasayu = false;
        goto uwkcasugwwwwmmqu;
        sigseymecgiowiii:
        if (!$sqeykgyoooqysmca) {
            goto weeeiiqqgqoymeke;
        }
        goto uwkaawaqoswkcuye;
        skyscuweykackoci:
    }
    
    public static function qkweigiqsaaigqau($post = null) : ?string
    {
        goto smqgoowsgakckqse;
        smqgoowsgakckqse:
        $eeamcawaiqocomwy = null;
        goto oyqsaukeioykugmm;
        oyqsaukeioykugmm:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto meeceoqcuuasiiio;
        uesmmkgaqoqmaiik:
        kyouiqwywyqgkuso:
        goto wequuyiayswgoosg;
        meeceoqcuuasiiio:
        if (!$qscaoekmoooeuyqg) {
            goto kyouiqwywyqgkuso;
        }
        goto iayksyuawioekakq;
        wequuyiayswgoosg:
        return $eeamcawaiqocomwy;
        goto iyqaossmgeskkcgg;
        iayksyuawioekakq:
        $eeamcawaiqocomwy = DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg);
        goto uesmmkgaqoqmaiik;
        iyqaossmgeskkcgg:
    }
    
    public static function wsiiswmaagmyiaiw($post = null)
    {
        return DecoratorPost::wsiiswmaagmyiaiw(self::mwikyscisascoeea($post));
    }
    
    public static function mqgeysameoesmuqw($useksmwkuswkwcqg) : string
    {
        goto euceooqmeegmumya;
        qsqgsggawskeqauc:
        return trailingslashit(DecoratorPost::mqgeysameoesmuqw($useksmwkuswkwcqg));
        goto kwigmoscuksaeaik;
        euceooqmeegmumya:
        if (!$useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto gkweycueymqasawm;
        }
        goto igkuwcieaaaimceu;
        igkuwcieaaaimceu:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->name;
        goto imgkgmwywoyggiiy;
        imgkgmwywoyggiiy:
        gkweycueymqasawm:
        goto qsqgsggawskeqauc;
        kwigmoscuksaeaik:
    }
    
    public static function insert($useksmwkuswkwcqg, $ywmkwiwkosakssii = []) : ?int
    {
        goto eqooeogyogusoyci;
        keqweiemkiakogck:
        ieyqmiueyikwcwso:
        goto sqigokysuqqoyoqq;
        wwuyacuysiocqcwq:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, [self::NAME => $ywmkwiwkosakssii["\x70\157\163\x74\x5f\156\x61\x6d\x65"], self::POSTS_PER_PAGE => 1]);
        goto cgwwckgiugakqowu;
        sqigokysuqqoyoqq:
        return $sogksuscggsicmac;
        goto qacmciyceoyqmims;
        eqooeogyogusoyci:
        $sogksuscggsicmac = null;
        goto awcgaimyecemucay;
        cymkauiwaemgisae:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x6f\163\x74\137\x74\151\x74\154\145" => '', "\x70\157\163\x74\x5f\156\x61\x6d\145" => '', "\x70\x6f\x73\164\137\143\157\156\x74\145\156\164" => '', "\x70\x6f\163\x74\137\163\164\141\x74\x75\163" => '']);
        goto wwuyacuysiocqcwq;
        isawkmamaukaekcg:
        $sogksuscggsicmac = DecoratorPost::insert($ywmkwiwkosakssii);
        goto keqweiemkiakogck;
        cgwwckgiugakqowu:
        if ($wyoiwuqokyeeuguk) {
            goto ieyqmiueyikwcwso;
        }
        goto aookismekyuisiqy;
        aookismekyuisiqy:
        $ywmkwiwkosakssii["\160\x6f\x73\x74\x5f\141\x75\x74\150\x6f\162"] = ManipulateUser::mwikyscisascoeea();
        goto isawkmamaukaekcg;
        awcgaimyecemucay:
        $ywmkwiwkosakssii[self::POST_TYPE] = $useksmwkuswkwcqg;
        goto cymkauiwaemgisae;
        qacmciyceoyqmims:
    }
    
    public static function sqyyemqmmgmyiaam($sciomagaqmgggsiu = [])
    {
        return DecoratorQuery::moegwqkekcawsggs($sciomagaqmgggsiu);
    }
    
    public static function waoeigwigksoikgu($post, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii["\160\157\163\x74\x5f\151\x64"] = self::mwikyscisascoeea($post);
        return ManipulateComment::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function iuaacwwygkmcoeiy($qwcmueausqgiwigy, $gqgemcmoicmgaqie)
    {
        goto qeeiayaggickmsem;
        emwuosqcciqgwuec:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto ikggeywmqciukyuy;
        }
        goto daaaoeseaeakowis;
        ouuuiwcmacckekgw:
        $qqmmggwcsmymegca = $uyuaosigqymaqsaa;
        goto siikoyaookakcsya;
        mweuowgyuuomycug:
        return $qwcmueausqgiwigy;
        goto iuagymwagckgasgy;
        daaaoeseaeakowis:
        $qwcmueausqgiwigy[] = "{$wpdb->posts}\56\160\157\163\x74\x5f\160\x61\x73\x73\x77\x6f\x72\144\40\x3d\x20\x27\47";
        goto mqqqskweuccusqsg;
        mqqqskweuccusqsg:
        ikggeywmqciukyuy:
        goto egssagkqigycaowo;
        usymiywgyuqgsmgo:
        uogugagqqgaumeui:
        goto mweuowgyuuomycug;
        oaquckygauqeycue:
        global $wpdb;
        goto ouuuiwcmacckekgw;
        wsocqyukguoqmoou:
        ksycyguoaoakaasa:
        goto emwuosqcciqgwuec;
        akiaoyqwwgyogmwa:
        $qwcmueausqgiwigy = [];
        goto mygoemwmmmmeswoy;
        mygoemwmmmmeswoy:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            $qwcmueausqgiwigy[] = $wpdb->prepare("{$wpdb->posts}\56\160\x6f\x73\x74\137\164\151\164\x6c\x65\40\x4c\111\x4b\105\40\x25\163", $aaycmcgqqqsysccs . $wpdb->esc_like($iwewcwusemqaiggk) . $aaycmcgqqqsysccs);
            eqgewqgayssmyqyi:
        }
        goto wsocqyukguoqmoou;
        ygyikqcaweccikoy:
        if (!($uyuaosigqymaqsaa && $qwcmueausqgiwigy)) {
            goto uogugagqqgaumeui;
        }
        goto oaquckygauqeycue;
        siikoyaookakcsya:
        $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\170\141\143\x74"]) ? '' : "\x25";
        goto akiaoyqwwgyogmwa;
        qeeiayaggickmsem:
        $uyuaosigqymaqsaa = ManipulateArray::get($gqgemcmoicmgaqie->query_vars, "\x73\145\141\162\x63\150\137\x74\x65\162\x6d\163");
        goto ygyikqcaweccikoy;
        egssagkqigycaowo:
        $qwcmueausqgiwigy = "\40\101\x4e\104\x20" . implode("\x20\101\116\104\x20", $qwcmueausqgiwigy);
        goto usymiywgyuqgsmgo;
        iuagymwagckgasgy:
    }
    
    public static function waaisqccqacqeium($useksmwkuswkwcqg = null) : ?WP_Post_Type
    {
        goto qqsoyoesgkwakcwc;
        umugkkiiiakomyae:
        yieyamwmiyceaysm:
        goto ssseiiwsmacscqkk;
        ssseiiwsmacscqkk:
        return $useksmwkuswkwcqg;
        goto wsagsuekaoamamwq;
        wqsikiwycqwksiwy:
        if ($useksmwkuswkwcqg) {
            goto gogeigmcqokqqiwc;
        }
        goto asqikgqmeqysakky;
        qqsoyoesgkwakcwc:
        if ($useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto yieyamwmiyceaysm;
        }
        goto wqsikiwycqwksiwy;
        fgacmumaqamuggaw:
        $useksmwkuswkwcqg = DecoratorPost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto umugkkiiiakomyae;
        asqikgqmeqysakky:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto yyckkkysceayoacc;
        yyckkkysceayoacc:
        gogeigmcqokqqiwc:
        goto fgacmumaqamuggaw;
        wsagsuekaoamamwq:
    }
    
    public static function mwikyscisascoeea($post = null, $cwwowqyuwccuykom = false)
    {
        goto sgwggiwoawyysamo;
        oeyaaksqsgmecwmm:
        $post = get_the_ID();
        goto qyowaswasswaayey;
        qckuswayaoymsksk:
        ywkowqwiseoaosue:
        goto egoyusisgekiqoye;
        iwgymiqeamaeqqom:
        return $post;
        goto aamackwoccmccyks;
        zoeammwiceimsmea:
        $post = ManipulateArray::get($post, "\x49\104");
        goto gawoykaumugqiiiw;
        eukasuwuekwugokm:
        usayuwaoekoyeigw:
        goto iwgymiqeamaeqqom;
        sgwggiwoawyysamo:
        if (is_numeric($post)) {
            goto usayuwaoekoyeigw;
        }
        goto zoeammwiceimsmea;
        oeiyuauoweasyegq:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto gqkckwmwucyicaom;
        }
        goto oeyaaksqsgmecwmm;
        egoyusisgekiqoye:
        giismoqygwoeiucm:
        goto eukasuwuekwugokm;
        qyowaswasswaayey:
        goto ywkowqwiseoaosue;
        goto iqayckmwkoaoyusg;
        gawoykaumugqiiiw:
        if (!(!$post && !$cwwowqyuwccuykom)) {
            goto giismoqygwoeiucm;
        }
        goto oeiyuauoweasyegq;
        cusamwcumoyaccig:
        $post = DecoratorQuery::keeuqgyooycqoygw();
        goto qckuswayaoymsksk;
        iqayckmwkoaoyusg:
        gqkckwmwucyicaom:
        goto cusamwcumoyaccig;
        aamackwoccmccyks:
    }
    
    public static function emcckouwaoassquc(array $sciomagaqmgggsiu = [])
    {
        goto uaequckaaeewaqiy;
        uaequckaaeewaqiy:
        if ($sciomagaqmgggsiu) {
            goto meamgyseweakcwms;
        }
        goto eqyccakwmkgmsyik;
        ukamoqcwkkacmkuo:
        return self::ciugwooasaqcywas($sciomagaqmgggsiu, ["\160\x6f\x73\x74\x5f\x73\164\x61\x74\x75\163" => "\160\x75\x62\x6c\151\163\150", "\146\151\145\x6c\x64\x73" => self::IDS]);
        goto osisauycomkeaisq;
        mmmaqiceqwswaica:
        meamgyseweakcwms:
        goto ukamoqcwkkacmkuo;
        eqyccakwmkgmsyik:
        $sciomagaqmgggsiu = self::mwoyqeeigwqoamiw();
        goto mmmaqiceqwswaica;
        osisauycomkeaisq:
    }
    
    public static function aqcogscycyycgkuq($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\160\x6f\163\164\137\x6e\x61\155\145", $post, $mgkceomocowocqyo);
    }
    
    public static function qkuksuwkueysueww(string $useksmwkuswkwcqg)
    {
        goto sysqgmqceqakymga;
        sysqgmqceqakymga:
        global $wpdb;
        goto ckoqcgskyowkgwqc;
        kegkgqcaoogqqwuy:
        return $gaeqamemwmwsyukm;
        goto ueyscskqyqmwgyqq;
        imkggwewaoaeaaaa:
        try {
            $gaeqamemwmwsyukm = (int) $wpdb->get_var("\x53\105\x4c\105\103\x54\x20\103\x4f\125\116\124\x28\x63\157\155\x6d\145\x6e\164\x5f\111\x44\51\xa\x9\11\11\x9\11\x46\122\x4f\115\40{$wpdb->comments}\x20\x57\x48\105\x52\105\x20\143\157\x6d\155\145\x6e\x74\137\160\157\x73\164\137\111\104\40\x69\156\x20\50\12\11\11\x9\x9\x9\x53\x45\x4c\x45\x43\x54\40\111\104\x20\106\122\x4f\x4d\x20{$wpdb->posts}\x20\x57\x48\x45\x52\105\x20\x70\157\163\x74\137\x74\171\x70\145\x20\75\40\47{$useksmwkuswkwcqg}\47\12\x9\11\x9\x9\11\101\116\x44\40\x70\x6f\x73\x74\x5f\x73\x74\141\164\165\163\x20\x3d\x20\x27\160\165\142\x6c\x69\x73\150\47\x29\40\x41\116\104\40\143\157\x6d\155\x65\156\164\137\141\160\160\162\157\166\145\x64\x20\x3d\x20\x27\61\47");
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto kegkgqcaoogqqwuy;
        ckoqcgskyowkgwqc:
        $gaeqamemwmwsyukm = 0;
        goto imkggwewaoaeaaaa;
        ueyscskqyqmwgyqq:
    }
    
    public static function ucwmcwqmqwaymkkc($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\x70\x6f\163\x74\x5f\x73\x74\141\x74\x75\163", $post, $mgkceomocowocqyo);
    }
    
    public static function mguqscccckuywsya($post = null, $cwwowqyuwccuykom = false)
    {
        return self::ygwimyogyaqgumam("\160\157\x73\164\137\141\x75\x74\x68\x6f\162", self::mwikyscisascoeea($post, $cwwowqyuwccuykom));
    }
    
    public static function uiuwugwykqocmiec($post = null) : ?int
    {
        return DecoratorHook::sscegwueamckwmcy("\147\x65\164\137\160\157\x73\x74\x5f\x77\x6f\162\x64\137\x63\157\165\156\x74", 0, self::get($post));
    }
    
    public static function gsaceacmqiuqoouo($useksmwkuswkwcqg, $ymqmyyeuycgmigyo, $ywmkwiwkosakssii = [])
    {
        goto qgsqycogyicuiioq;
        eycmewmysuymswuk:
        $suuagcecoyuweoqk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto sccqosiycoaosikm;
        sccqosiycoaosikm:
        return $suuagcecoyuweoqk ? array_pop($suuagcecoyuweoqk) : '';
        goto wcykiuessuoeagki;
        qgsqycogyicuiioq:
        $ywmkwiwkosakssii["\156\141\155\145"] = $ymqmyyeuycgmigyo;
        goto eycmewmysuymswuk;
        wcykiuessuoeagki:
    }
    
    public static function owicscwgeuqcqaig($useksmwkuswkwcqg = "\160\x6f\163\x74", $ywmkwiwkosakssii = [])
    {
        goto gmycyuqoscismuig;
        ceogiuqcsqkmysga:
        if (empty($yiasugywggckywoa["\x63\141\x74\145\x67\x6f\162\x79"])) {
            goto uwmckciqcuwoyemm;
        }
        goto iaqwyagqyokkmeoo;
        agksaoiusscawcwc:
        goto easusuoaqiwgcuui;
        goto oayuucaeciioiwqw;
        asgkgomkmykaqeac:
        $yiasugywggckywoa["\x70\x6f\x73\164\163\137\x70\145\x72\x5f\x70\x61\x67\145"] = count($egekuwigiusmwiek);
        goto ukaocimwskuqgqso;
        ekayucummqeqmwgc:
        xeeuigemugoamqao:
        goto suicyusecackqaii;
        ikqwwkscesmugsuq:
        easusuoaqiwgcuui:
        goto mioiyawikawqyaay;
        gacwuumiuewqgeim:
        $yiasugywggckywoa["\160\x6f\163\x74\163\x5f\x70\x65\x72\137\x70\141\x67\145"] = $yiasugywggckywoa["\x6e\165\x6d\142\x65\162\160\x6f\163\164\x73"];
        goto iecocimeqmmockam;
        iaqwyagqyokkmeoo:
        $yiasugywggckywoa["\x63\x61\164"] = $yiasugywggckywoa["\x63\141\164\x65\x67\157\162\171"];
        goto uqowsoiyaummsyoy;
        kusoiyymwykqsgue:
        if (!empty($yiasugywggckywoa["\x65\x78\143\154\x75\144\x65"])) {
            goto youwoggqmcuggmyy;
        }
        goto agksaoiusscawcwc;
        eqwmoigeokkskwuy:
        youwoggqmcuggmyy:
        goto kyicaqywsmawwwuo;
        ukaocimwskuqgqso:
        $yiasugywggckywoa["\x70\x6f\163\164\x5f\x5f\151\x6e"] = $egekuwigiusmwiek;
        goto quwqksyoiigamkys;
        syuoooyaackuoues:
        if (!empty($yiasugywggckywoa["\x69\156\143\154\165\144\145"])) {
            goto sqmqymmecmqykiqs;
        }
        goto kusoiyymwykqsgue;
        wwcimuywiwqwagoq:
        $yiasugywggckywoa["\x6e\x6f\137\146\x6f\165\156\144\137\x72\x6f\x77\x73"] = true;
        goto qycekaqowowqaosm;
        suicyusecackqaii:
        if (!(!empty($yiasugywggckywoa["\x6e\x75\x6d\x62\145\162\x70\157\163\164\x73"]) && empty($yiasugywggckywoa["\160\x6f\163\x74\x73\137\x70\x65\x72\x5f\x70\141\x67\x65"]))) {
            goto ameoiemwymmeomqq;
        }
        goto gacwuumiuewqgeim;
        qycekaqowowqaosm:
        return new WP_Query($yiasugywggckywoa);
        goto iuaikkckoskwuwyw;
        oayuucaeciioiwqw:
        sqmqymmecmqykiqs:
        goto gqkuecyoaomqacgk;
        quwqksyoiigamkys:
        goto easusuoaqiwgcuui;
        goto eqwmoigeokkskwuy;
        ocuocqiyuecksmsi:
        $yiasugywggckywoa["\x70\157\163\x74\137\x73\164\141\x74\165\163"] = "\x61\x74\x74\x61\143\150\155\x65\x6e\164" === $yiasugywggckywoa["\x70\157\x73\x74\x5f\164\x79\x70\x65"] ? "\151\x6e\150\x65\162\151\164" : "\160\165\142\x6c\x69\163\x68";
        goto ekayucummqeqmwgc;
        eewcoeiokouymaic:
        if (!empty($yiasugywggckywoa["\160\157\x73\x74\x5f\163\x74\141\x74\x75\x73"])) {
            goto xeeuigemugoamqao;
        }
        goto ocuocqiyuecksmsi;
        qqmeumqiyqkoycww:
        $yiasugywggckywoa = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto eewcoeiokouymaic;
        uqowsoiyaummsyoy:
        uwmckciqcuwoyemm:
        goto syuoooyaackuoues;
        mioiyawikawqyaay:
        $yiasugywggckywoa["\151\x67\x6e\x6f\x72\x65\137\x73\164\151\143\x6b\x79\x5f\x70\157\x73\164\x73"] = true;
        goto wwcimuywiwqwagoq;
        gqkuecyoaomqacgk:
        $egekuwigiusmwiek = wp_parse_id_list($yiasugywggckywoa["\151\x6e\x63\154\165\144\x65"]);
        goto asgkgomkmykaqeac;
        gmycyuqoscismuig:
        $ycmguuqqaiisymgg = ["\x6e\165\155\x62\x65\x72\x70\x6f\x73\x74\x73" => 5, "\143\141\164\x65\x67\x6f\x72\x79" => 0, "\157\x72\x64\145\162\142\171" => "\x64\141\x74\145", "\157\x72\x64\145\162" => "\x44\105\123\x43", "\151\156\143\x6c\165\x64\145" => [], "\145\170\143\154\x75\x64\x65" => [], "\155\x65\164\141\137\x6b\145\171" => '', "\155\145\x74\x61\x5f\166\141\x6c\x75\x65" => '', "\160\157\x73\x74\137\x74\171\160\145" => $useksmwkuswkwcqg, "\163\x75\x70\x70\162\145\163\163\137\x66\x69\x6c\x74\145\162\x73" => true];
        goto qqmeumqiyqkoycww;
        iecocimeqmmockam:
        ameoiemwymmeomqq:
        goto ceogiuqcsqkmysga;
        kyicaqywsmawwwuo:
        $yiasugywggckywoa["\x70\157\x73\164\137\x5f\156\x6f\164\x5f\151\x6e"] = wp_parse_id_list($yiasugywggckywoa["\x65\x78\x63\154\x75\x64\145"]);
        goto ikqwwkscesmugsuq;
        iuaikkckoskwuwyw:
    }
    
    public static function weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, $ywmkwiwkosakssii = [])
    {
        goto kwugcgwmcsoswees;
        wakcuqwemksmyeos:
        return $uyuaosigqymaqsaa;
        goto eqyykccckaqyikas;
        kwugcgwmcsoswees:
        $uyuaosigqymaqsaa = DecoratorPost::weescwwgqgiyumyw(self::mwikyscisascoeea($post), $seyqqsmuaiegkeeq, $ywmkwiwkosakssii);
        goto gwimqwmmuacwkmou;
        kswkocesygkuqiiy:
        $uyuaosigqymaqsaa = [];
        goto kwiuwccmuwwwwcak;
        kwiuwccmuwwwwcak:
        oksiwycekgweuyoc:
        goto wakcuqwemksmyeos;
        gwimqwmmuacwkmou:
        if (!(!is_array($uyuaosigqymaqsaa) || is_wp_error($uyuaosigqymaqsaa))) {
            goto oksiwycekgweuyoc;
        }
        goto kswkocesygkuqiiy;
        eqyykccckaqyikas:
    }
    
    public static function ekauksssqmmykouq($post = null, $wwgucssaecqekuek = [])
    {
        goto swqycaokmkkykkea;
        uwgksqcakaieyscy:
        $wwgucssaecqekuek["\x68\162\145\146"] = $qscaoekmoooeuyqg;
        goto oqcgimyqwmqgyygw;
        swqycaokmkkykkea:
        $qscaoekmoooeuyqg = self::qkweigiqsaaigqau($post);
        goto aoycieuggikeomis;
        imsqyecesygwiwkk:
        return $qscaoekmoooeuyqg;
        goto yysqgqeoyckgmcsa;
        oqcgimyqwmqgyygw:
        $ymqmyyeuycgmigyo = DecoratorAuthor::igawqaomowicuayw("\144\x69\x73\x70\154\x61\171\137\x6e\x61\155\x65", self::mguqscccckuywsya($post));
        goto oeegykgsgkscwcio;
        qmgqguiisgckwocw:
        uwscoaaycokmqegk:
        goto imsqyecesygwiwkk;
        oeegykgsgkscwcio:
        $qscaoekmoooeuyqg = ManipulateHTML::uuccukgasskgimsq("\141", $wwgucssaecqekuek, $ymqmyyeuycgmigyo);
        goto qmgqguiisgckwocw;
        aoycieuggikeomis:
        if (!$qscaoekmoooeuyqg) {
            goto uwscoaaycokmqegk;
        }
        goto uwgksqcakaieyscy;
        yysqgqeoyckgmcsa:
    }
    
    public static function gueasuouwqysmomu($post = null, $awqscowmskeuymeu = false)
    {
        goto wawiggqugqwwacgq;
        qeyuquwgysuucygo:
        $useksmwkuswkwcqg = ManipulateServer::get("\x70\157\x73\164\x5f\x74\x79\x70\x65");
        goto kmocumwwsgkgeqay;
        mmgsqoiukqkyiayw:
        if ($useksmwkuswkwcqg) {
            goto ymiiukyiasogueiq;
        }
        goto qeyuquwgysuucygo;
        ygygqysoqeimimgm:
        coaiaawqcaggmemg:
        goto wgyqskiikcoamceq;
        uockmkmeymgyqsqi:
        $useksmwkuswkwcqg = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto sigisgiqiuiuqemc;
        siiyycmowckwsemw:
        return $useksmwkuswkwcqg;
        goto aecweaquqmiiimsc;
        wimqsusyesasaism:
        if (!$awqscowmskeuymeu) {
            goto qsweawwuowkoeemg;
        }
        goto uockmkmeymgyqsqi;
        kmocumwwsgkgeqay:
        ymiiukyiasogueiq:
        goto wimqsusyesasaism;
        ceqcqskmksiuosuy:
        $post = self::get($post);
        goto ygygqysoqeimimgm;
        xeyusieocqgkowca:
        cauamyimeqmgwick:
        goto mmgsqoiukqkyiayw;
        qwkwyciyyigugcms:
        if (!is_numeric($post)) {
            goto coaiaawqcaggmemg;
        }
        goto ceqcqskmksiuosuy;
        yoceycuiiwwmscci:
        $useksmwkuswkwcqg = ManipulateArray::get($post, "\160\157\163\x74\x5f\164\171\x70\x65");
        goto xeyusieocqgkowca;
        sigisgiqiuiuqemc:
        qsweawwuowkoeemg:
        goto siiyycmowckwsemw;
        wawiggqugqwwacgq:
        $useksmwkuswkwcqg = get_post_type();
        goto qwkwyciyyigugcms;
        wgyqskiikcoamceq:
        if (!(is_array($post) || $post instanceof WP_Post)) {
            goto cauamyimeqmgwick;
        }
        goto yoceycuiiwwmscci;
        aecweaquqmiiimsc:
    }
    
    public static function gamoemyysmgugccu($post = null, $iueymcwwscwqkiyq = "\x61\154\154")
    {
        return self::ymgsgecsiqeegseg($post, $iueymcwwscwqkiyq) > 0;
    }
    
    public static function wsqeykgqiemswysa($sqeykgyoooqysmca, $iueymcwwscwqkiyq = "\x70\165\x62\154\151\163\x68", $yiyimoacecwoqeko = '')
    {
        return ManipulateArray::get(wp_count_posts($sqeykgyoooqysmca, $yiyimoacecwoqeko), $iueymcwwscwqkiyq);
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $useksmwkuswkwcqg, $ywmkwiwkosakssii = [])
    {
        goto uaeyogsicwkuwcak;
        iwcwuugoguscgqye:
        $ywmkwiwkosakssii["\x73"] = $meqocwsecsywiiqs;
        goto kymkyymiquekuscq;
        kocoameeyqygkwok:
        DecoratorHook::ggmgmqswqkgecosg("\x70\x6f\x73\164\163\137\163\145\141\x72\x63\x68", [__CLASS__, "\163\x65\x61\x72\x63\x68\x42\171\124\x69\x74\154\x65"], 10);
        goto osgkqqqqimmwsmsi;
        qowqokqkiweosuwa:
        DecoratorHook::cecaguuoecmccuse("\x70\157\x73\x74\x73\137\163\145\141\x72\x63\x68", [__CLASS__, "\x73\145\141\162\143\x68\x42\171\124\151\x74\154\145"], 10, 2);
        goto qucmewyuwkkwsseo;
        uaeyogsicwkuwcak:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\157\162\144\x65\x72" => "\101\x53\x43", "\x70\x6f\163\x74\163\137\x70\x65\162\137\x70\x61\147\145" => 10]);
        goto ikwwiueqmmkayyce;
        kymkyymiquekuscq:
        $ywmkwiwkosakssii["\163\165\160\x70\162\x65\x73\163\137\x66\151\154\164\x65\x72\x73"] = false;
        goto ckqgkowqkggscuoi;
        ckqgkowqkggscuoi:
        wkkwgyuaqwiygawe:
        goto qowqokqkiweosuwa;
        osgkqqqqimmwsmsi:
        return $wyoiwuqokyeeuguk;
        goto megauiwcsiuuiquk;
        qucmewyuwkkwsseo:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto kocoameeyqygkwok;
        ikwwiueqmmkayyce:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto wkkwgyuaqwiygawe;
        }
        goto iwcwuugoguscgqye;
        megauiwcsiuuiquk:
    }
    
    public static function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, $mgkceomocowocqyo = [])
    {
        return DecoratorPost::ygwimyogyaqgumam($aiowsaccomcoikus, self::mwikyscisascoeea($post), $mgkceomocowocqyo);
    }
    
    public static function kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg = true)
    {
        goto qsaagygqqsmgiesk;
        gcaaimgqweguwksg:
        iimqqykwwmqeukai:
        goto cyamaucweckqmscc;
        sgguaokgyweasccc:
        $uyuaosigqymaqsaa = isset($uyuaosigqymaqsaa[0]) ? $uyuaosigqymaqsaa[0] : null;
        goto gyuioyyowaiqcywy;
        eceowukgiumqosom:
        $uyuaosigqymaqsaa = null;
        goto wywyyuawikmwceym;
        qymkekiqwouwaoos:
        if (is_array($uyuaosigqymaqsaa)) {
            goto omcseuaowsucussk;
        }
        goto eceowukgiumqosom;
        okeewwyoqawamsoa:
        if (!$qqgsimqiqyaugceg) {
            goto zkuyggayyoqeeqek;
        }
        goto sgguaokgyweasccc;
        cyamaucweckqmscc:
        return $uyuaosigqymaqsaa;
        goto ssiwoquqiiuysuma;
        wywyyuawikmwceym:
        goto iimqqykwwmqeukai;
        goto eomwsawiqyuyiiiw;
        gyuioyyowaiqcywy:
        zkuyggayyoqeeqek:
        goto gcaaimgqweguwksg;
        eomwsawiqyuyiiiw:
        omcseuaowsucussk:
        goto okeewwyoqawamsoa;
        qsaagygqqsmgiesk:
        $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
        goto qymkekiqwouwaoos;
        ssiwoquqiiuysuma:
    }
    
    public static function smqukgcyacswysqa($uusmaiomayssaecw = '', $post = null, $eqgoocgaqwqcimie = '')
    {
        return DecoratorPost::smqukgcyacswysqa($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto yucmskwuguqgqimc;
        eeieegmqysegumei:
        $iayakwckycsumkqa = null;
        goto usyyyguieaqqyswa;
        ousiqsmccumayaes:
        $iayakwckycsumkqa = DecoratorPost::masoymaamekuykso($post);
        goto smsymmwykgkakeqk;
        mgywqmgswkeyucaq:
        return $iayakwckycsumkqa;
        goto mqkwmkuieegmucmg;
        smsymmwykgkakeqk:
        iiukckigywisaego:
        goto mgywqmgswkeyucaq;
        usyyyguieaqqyswa:
        if (!(!$gioggcykgoikcwiy || DecoratorPost::seewsasmyoyciiee($post))) {
            goto iiukckigywisaego;
        }
        goto ousiqsmccumayaes;
        yucmskwuguqgqimc:
        $post = self::get($post);
        goto eeieegmqysegumei;
        mqkwmkuieegmucmg:
    }
    
    public static function cagmcswsqkwuasiy($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES)
    {
        goto okyuswywywsaeias;
        okyuswywywsaeias:
        global $pagenow;
        goto aeaqgqqqowqykgcc;
        iycimwiaauksigiw:
        if (!($pagenow == "\x65\144\151\164\x2e\160\150\x70" && is_admin())) {
            goto agauowggkqsoyqiq;
        }
        goto cccgemwsykwgemeg;
        oieoyiowucgkouoq:
        ugaowwakggeccsic:
        goto aiaiswgwmcguoues;
        aeaqgqqqowqykgcc:
        $sogksuscggsicmac = false;
        goto iycimwiaauksigiw;
        yuycmoyawueickya:
        $sogksuscggsicmac = true;
        goto oieoyiowucgkouoq;
        aiaiswgwmcguoues:
        agauowggkqsoyqiq:
        goto mwuisiuasugcaywu;
        cccgemwsykwgemeg:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto cyomqwmieugiasem;
        cyomqwmieugiasem:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || is_string($useksmwkuswkwcqg) && $useksmwkuswkwcqg == $sciomagaqmgggsiu)) {
            goto ugaowwakggeccsic;
        }
        goto yuycmoyawueickya;
        mwuisiuasugcaywu:
        return $sogksuscggsicmac;
        goto asckqiuugiguuiwe;
        asckqiuugiguuiwe:
    }
    
    public static function ymgsgecsiqeegseg($post = null, $iueymcwwscwqkiyq = "\x61\160\160\162\157\x76\145\x64")
    {
        $egkygecqiowwuuuu = DecoratorPost::ymgsgecsiqeegseg(self::mwikyscisascoeea($post));
        return ManipulateArray::get($egkygecqiowwuuuu, $iueymcwwscwqkiyq, 0);
    }
    
    public static function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $omasqoksqewuwwkq = false)
    {
        return DecoratorPost::giwmekimakcaawsq(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq);
    }
    
    public static function igawqaomowicuayw($uusmaiomayssaecw = '', $post = null, bool $cuyooiakswegosog = true)
    {
        return DecoratorPost::igawqaomowicuayw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function souwykwwmyygqyqi($post = null, $egkeamycaysqsoma = true) : ?string
    {
        goto ciqqeouuygcaiiiq;
        gaqccucuqyssqkmy:
        goto wcuuyecsiamsaqqy;
        goto gioogyikawiiiyqq;
        wioicqyeyqmsckwg:
        if ($egkeamycaysqsoma) {
            goto iimwiesgggauwcqk;
        }
        goto iiysucwqgweammss;
        gggayasokuomgeus:
        $ewgwqamkygiqaawc = ManipulateArray::get($post, "\160\157\x73\x74\x5f\143\x6f\x6e\164\x65\x6e\x74");
        goto cqmkeyweesgwycgy;
        seggcuqcuiaegeya:
        $ewgwqamkygiqaawc = DecoratorPost::souwykwwmyygqyqi($post);
        goto ucouymumcuosygii;
        iiysucwqgweammss:
        if ($post) {
            goto gomiiockquaqsyuo;
        }
        goto gaqccucuqyssqkmy;
        qgyqamakooyqciyo:
        $ewgwqamkygiqaawc = '';
        goto wioicqyeyqmsckwg;
        ucouymumcuosygii:
        goto wcuuyecsiamsaqqy;
        goto woquimckgiecokuo;
        gsoskqieucsesaks:
        return $ewgwqamkygiqaawc;
        goto guoyescsqcuuymku;
        woquimckgiecokuo:
        gomiiockquaqsyuo:
        goto gggayasokuomgeus;
        gioogyikawiiiyqq:
        iimwiesgggauwcqk:
        goto seggcuqcuiaegeya;
        cqmkeyweesgwycgy:
        wcuuyecsiamsaqqy:
        goto gsoskqieucsesaks;
        ciqqeouuygcaiiiq:
        $post = self::get($post);
        goto qgyqamakooyqciyo;
        guoyescsqcuuymku:
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $oyuqkqayqyqysyse = '')
    {
        return DecoratorPost::ksmqawcowkmegigw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse);
    }
    
    public static function mmoaikqueyiwcesm($post, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\x70\157\163\x74\x5f\160\x61\162\x65\x6e\164"] = self::mwikyscisascoeea($post);
        return self::ciugwooasaqcywas(DecoratorPost::gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function qmmimiesyoyuqeqo($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto euuaeuyegkksasge;
        akuskaiiaswmksko:
        foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) {
            $omwmuycmeqcqokom->children = self::mmoaikqueyiwcesm($omwmuycmeqcqokom, $ywmkwiwkosakssii);
            yeuqcwawkauowkgu:
        }
        goto wmsigkymceakwywo;
        euuaeuyegkksasge:
        $eyagosskwwmgwmog = self::uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto akuskaiiaswmksko;
        wmsigkymceakwywo:
        emkqygwcsiyiykiw:
        goto equokkeomguewmua;
        equokkeomguewmua:
        return $eyagosskwwmgwmog;
        goto cigaaqeauwccoiqa;
        cigaaqeauwccoiqa:
    }
    
    public static function ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto xocaameouysockim;
        kwgwkkkaagkkesik:
        iccqsmwsmisaayam:
        goto weyumyqgceqsimmq;
        sycecywsiomgcuiq:
        $ycmguuqqaiisymgg = [self::POST_TYPE => $useksmwkuswkwcqg, self::POSTS_PER_PAGE => -1];
        goto yaswwoqemsqmawse;
        weyumyqgceqsimmq:
        foreach ($wyoiwuqokyeeuguk as $uusmaiomayssaecw => $post) {
            goto gacasmwcscckymwc;
            eskmkqowoyogaoko:
            $sogksuscggsicmac[self::mwikyscisascoeea($post)] = $meqocwsecsywiiqs;
            goto keygywkiwuoagqsw;
            koiimcuoyakqsuam:
            if (!$meqocwsecsywiiqs) {
                goto seqwmeeoiicciigo;
            }
            goto eskmkqowoyogaoko;
            gacasmwcscckymwc:
            $meqocwsecsywiiqs = get_the_title($post);
            goto koiimcuoyakqsuam;
            hwiqmsqyyiscmeiu:
            mekmscssquqsgquc:
            goto iwmassqyauymkwaa;
            keygywkiwuoagqsw:
            seqwmeeoiicciigo:
            goto hwiqmsqyyiscmeiu;
            iwmassqyauymkwaa:
        }
        goto mkiyekcyyukamwck;
        yaswwoqemsqmawse:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto icwuocgiukckmyyu;
        mkiyekcyyukamwck:
        qwkoeagysgskmuyq:
        goto guwikcacqsmwkyya;
        ogisaykaiaeuiika:
        $sogksuscggsicmac = $wyoiwuqokyeeuguk;
        goto vseyiyomcwkayoio;
        xocaameouysockim:
        $sogksuscggsicmac = [];
        goto sycecywsiomgcuiq;
        cioomiusgwycykag:
        $wyoiwuqokyeeuguk = DecoratorPost::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto aeesuccguagwomqw;
        ueiqomqieicasmsi:
        return $sogksuscggsicmac;
        goto domskgkmquiwwqcg;
        guwikcacqsmwkyya:
        sqecccyugmaiuwsq:
        goto ueiqomqieicasmsi;
        icwuocgiukckmyyu:
        $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\147\145\164\x5f\x70\157\x73\164\x73\x5f\x61\162\147\x73", $ywmkwiwkosakssii);
        goto cioomiusgwycykag;
        vseyiyomcwkayoio:
        goto sqecccyugmaiuwsq;
        goto kwgwkkkaagkkesik;
        aeesuccguagwomqw:
        if ($aqykuigiuwmmcieu == self::LABELS) {
            goto iccqsmwsmisaayam;
        }
        goto ogisaykaiaeuiika;
        domskgkmquiwwqcg:
    }
    
    public static function uamasysiccecccmw($oiegiwogmwmawkeo = "\160\x6f\x73\164\x2d\x74\150\x75\155\x62\x6e\141\151\154", $post = null)
    {
        $eeamcawaiqocomwy = DecoratorPost::uamasysiccecccmw(self::mwikyscisascoeea($post), $oiegiwogmwmawkeo);
        return (string) DecoratorHook::sscegwueamckwmcy("\160\157\163\164\x5f\x74\150\x75\155\x62\x6e\141\151\154\137\165\x72\154", $eeamcawaiqocomwy, $post, $oiegiwogmwmawkeo);
    }
    
    public static function ymuqsscwmcumcama($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST_TYPE => $useksmwkuswkwcqg, "\x70\157\x73\x74\x5f\163\x74\x61\164\x75\163" => "\x70\x75\142\154\x69\x73\150"]);
        return DecoratorPost::ymuqsscwmcumcama($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function squyiyimquqicqke($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto qqecycksisecgwiw;
        qqecycksisecgwiw:
        $post = self::get($post);
        goto ueeowwusmsueouao;
        qmsmcsoqgumsigme:
        cqoeiqeeukaiioia:
        goto uucqywaoqssqggug;
        ssqieyoogiwsyksk:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\145\x74\137\164\150\145\x5f\144\141\164\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto siceqsgwyswyguog;
        uuauuoykcoseecuu:
        if (!$post) {
            goto cqoeiqeeukaiioia;
        }
        goto okwgeicyaawqyoye;
        uucqywaoqssqggug:
        return $ocogsiouoiuuguym;
        goto kaaweieegskiqqgm;
        wmwkgawmkmciaeoi:
        if (!$egkeamycaysqsoma) {
            goto ukqomyqaykkiygwu;
        }
        goto ssqieyoogiwsyksk;
        wgcewuoaksusicyi:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto oeqsgusqqgoioqwu;
        bgsaeeicmsikiwgm:
        $ocogsiouoiuuguym = DecoratorPost::kugamkssceycoyaq($saqmwwmqiwmkiwaa, false, $post);
        goto wmwkgawmkmciaeoi;
        okwgeicyaawqyoye:
        if ($saqmwwmqiwmkiwaa) {
            goto seousiqwmmcaygac;
        }
        goto wgcewuoaksusicyi;
        oeqsgusqqgoioqwu:
        seousiqwmmcaygac:
        goto bgsaeeicmsikiwgm;
        siceqsgwyswyguog:
        ukqomyqaykkiygwu:
        goto qmsmcsoqgumsigme;
        ueeowwusmsueouao:
        $ocogsiouoiuuguym = null;
        goto uuauuoykcoseecuu;
        kaaweieegskiqqgm:
    }
    
    public static function get($post = null, $aqykuigiuwmmcieu = self::OBJECT, $cwwowqyuwccuykom = false)
    {
        goto yagoqwkegiyqceoe;
        eyimaakssauckmgk:
        gqcsicosskykmgiu:
        goto ceoicyukguaouuwa;
        ceoicyukguaouuwa:
        return $post;
        goto ygeaissawcacmmyu;
        yysqwceyageaeieo:
        $post = null;
        goto umuwmuiugqisoyek;
        ygiwsaegqoeaocqi:
        $post = DecoratorPost::get($post, $aqykuigiuwmmcieu);
        goto wwkeoqicoeqmsuui;
        skuwwwayeyemggoe:
        $post = ManipulateServer::get(self::POST);
        goto ieywgqsawwkgiamc;
        oywouymwcigkauye:
        if (!$post && $cwwowqyuwccuykom) {
            goto igegouiwyasqgwwc;
        }
        goto iaekkeskykqsyiim;
        umuwmuiugqisoyek:
        mamieseosscguoye:
        goto eyimaakssauckmgk;
        ieywgqsawwkgiamc:
        kgkweawaqmqomkuc:
        goto ygiwsaegqoeaocqi;
        yagoqwkegiyqceoe:
        if ($post instanceof WP_Post) {
            goto gqcsicosskykmgiu;
        }
        goto oywouymwcigkauye;
        iaekkeskykqsyiim:
        if ($post) {
            goto kgkweawaqmqomkuc;
        }
        goto skuwwwayeyemggoe;
        wwkeoqicoeqmsuui:
        goto mamieseosscguoye;
        goto iswuimkowigsiwmi;
        iswuimkowigsiwmi:
        igegouiwyasqgwwc:
        goto yysqwceyageaeieo;
        ygeaissawcacmmyu:
    }
    
    public static function eqgwuukcqqayesqa($oysoyeaucuawyaky = [], $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST__IN => $oysoyeaucuawyaky, self::ORDERBY => self::POST__IN]);
        return self::ciugwooasaqcywas(self::mwoyqeeigwqoamiw(), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto ukmmkgmcooowqksi;
        ukmmkgmcooowqksi:
        $post = self::mwikyscisascoeea($ccamueccusigaaio, $cwwowqyuwccuykom);
        goto sisumqgocskwyago;
        makigymuacqucieo:
        ymgyewqwqmcukmyu:
        goto yygauekecaiessss;
        sisumqgocskwyago:
        $migiiksoiymissge = '';
        goto miyyiuaokyesyygy;
        miyyiuaokyesyygy:
        if ($post) {
            goto wmgqacaeeuokysey;
        }
        goto iocmmwiqausgmkcu;
        yygauekecaiessss:
        return trailingslashit($migiiksoiymissge);
        goto faiesskquaeiqqom;
        ewmmuusmqgceimky:
        wmgqacaeeuokysey:
        goto eoiysyeyuwwugsee;
        usuwmkwcsukckuee:
        goto ymgyewqwqmcukmyu;
        goto ewmmuusmqgceimky;
        iocmmwiqausgmkcu:
        if (is_string($ccamueccusigaaio) && ManipulateValidation::wmcwegoisyeeosqu($ccamueccusigaaio)) {
            goto wecuakwyikeqwyac;
        }
        goto usuwmkwcsukckuee;
        qaewuekauiwkuwoa:
        wecuakwyikeqwyac:
        goto qgumkmmmeaoskamq;
        qgumkmmmeaoskamq:
        $migiiksoiymissge = $ccamueccusigaaio;
        goto makigymuacqucieo;
        eoqgquwgcgkugouq:
        goto ymgyewqwqmcukmyu;
        goto qaewuekauiwkuwoa;
        eoiysyeyuwwugsee:
        $migiiksoiymissge = DecoratorPost::ycqquoiyyuesegsy($post, $eoocgqsqmwuegiae);
        goto eoqgquwgcgkugouq;
        faiesskquaeiqqom:
    }
    
    public static function uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\x70\x6f\x73\x74\137\160\141\162\145\156\x74"] = 0;
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function oukqamgqowciwoum($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto iqkgeamgsuwqkckg;
        mumcqcssasmyqmca:
        syauycikyosiscgs:
        goto iiugkqmswuikwcuo;
        ewqwyuuyegqukcmw:
        wayoumqqasqeowsk:
        goto suuocycsksmcsqsm;
        iiugkqmswuikwcuo:
        iqiwskswayisages:
        goto sweyywawiwkgsqkw;
        iqkgeamgsuwqkckg:
        $post = self::get($post);
        goto wgiakoeckyswemak;
        uiyuycigkskokcco:
        if (!$post) {
            goto iqiwskswayisages;
        }
        goto suqyiooacuiiqcuk;
        sweyywawiwkgsqkw:
        return $ocogsiouoiuuguym;
        goto wycsycuaymkqqgce;
        iygakaaakekgyeqy:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto ewqwyuuyegqukcmw;
        giuwumskimssakwo:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\x67\145\164\137\x74\150\145\137\155\157\144\151\146\x69\x65\144\x5f\144\141\x74\145", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto mumcqcssasmyqmca;
        suqyiooacuiiqcuk:
        if ($saqmwwmqiwmkiwaa) {
            goto wayoumqqasqeowsk;
        }
        goto iygakaaakekgyeqy;
        yaioeuewuagwmaym:
        if (!$egkeamycaysqsoma) {
            goto syauycikyosiscgs;
        }
        goto giuwumskimssakwo;
        suuocycsksmcsqsm:
        $ocogsiouoiuuguym = DecoratorPost::kkkiiqssauymiqsk($saqmwwmqiwmkiwaa, false, $post);
        goto yaioeuewuagwmaym;
        wgiakoeckyswemak:
        $ocogsiouoiuuguym = null;
        goto uiyuycigkskokcco;
        wycsycuaymkqqgce:
    }
    
    public static function uqwgsuysegkweago($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES, $ccamueccusigaaio = "\142\x6f\x74\150")
    {
        goto sckagcuweuycciog;
        ieiwqquomwgcgasg:
        csmwsuakqgukaqkm:
        goto kemyesuyqgygsgmc;
        gasqiqwuuokswuak:
        aocacgkcisiuosug:
        goto ieiwqquomwgcgasg;
        yimcyeuemqyssysu:
        if ($sciomagaqmgggsiu) {
            goto ggwgiusgggqqckqw;
        }
        goto towiyceuykgmeooc;
        aoasseeyymigiuqg:
        ioecigquiawyecis:
        goto gasqiqwuuokswuak;
        sckagcuweuycciog:
        $sogksuscggsicmac = false;
        goto yimcyeuemqyssysu;
        ciusceaiyqsgwesy:
        ggwgiusgggqqckqw:
        goto agmoeimoggkkmamk;
        kqgkgyyskmmomkuy:
        global $pagenow;
        goto mkmcaqquqsycicwk;
        towiyceuykgmeooc:
        $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw();
        goto ciusceaiyqsgwesy;
        agmoeimoggkkmamk:
        if (!(is_admin() && $sciomagaqmgggsiu)) {
            goto csmwsuakqgukaqkm;
        }
        goto kqgkgyyskmmomkuy;
        quwawmyimwumqiik:
        aikomgoeseyekwqa:
        goto aoasseeyymigiuqg;
        kemyesuyqgygsgmc:
        return $sogksuscggsicmac;
        goto yuaeosigaqocaswy;
        iyeukmoycqcoeoww:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || $useksmwkuswkwcqg === $sciomagaqmgggsiu)) {
            goto aocacgkcisiuosug;
        }
        goto cgmkwykqsuikugio;
        cgmkwykqsuikugio:
        switch ($ccamueccusigaaio) {
            case "\145\144\x69\x74":
                $sogksuscggsicmac = in_array($pagenow, ["\160\x6f\x73\164\56\x70\x68\160"]);
                goto ioecigquiawyecis;
            case "\156\x65\167":
                $sogksuscggsicmac = in_array($pagenow, ["\x70\x6f\x73\164\55\x6e\145\x77\56\160\x68\160"]);
                goto ioecigquiawyecis;
            default:
                $sogksuscggsicmac = in_array($pagenow, ["\x70\157\163\x74\56\x70\150\x70", "\160\157\163\x74\x2d\156\145\x77\x2e\x70\150\160"]);
        }
        goto quwawmyimwumqiik;
        mkmcaqquqsycicwk:
        $useksmwkuswkwcqg = self::cwucesiiikgqsgui();
        goto iyeukmoycqcoeoww;
        yuaeosigaqocaswy:
    }
    
    public static function qgisekcaywsmigga(string $useksmwkuswkwcqg, string $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(["\x6d\x65\164\141\x5f\153\x65\171" => $gwiwsycaaqgwmewg, "\155\x65\164\x61\x5f\x76\141\x6c\x75\x65" => $aucgaecqisksougg, "\x70\x6f\x73\164\137\163\x74\141\164\165\163" => "\141\x6e\x79"], $ywmkwiwkosakssii);
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
}
