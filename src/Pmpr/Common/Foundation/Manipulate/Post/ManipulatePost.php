<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto qiagkoiassqawesu;
        saqyqgeqayiqykao:
        goto gkiskesiwecgcuyo;
        goto gauuayyuaimeqgms;
        nisqcoeqcgqqqaai:
        gkiskesiwecgcuyo:
        goto gekgyswocciysksa;
        mswykgiqgmcugqes:
        if ($typenow) {
            goto ciqqmaiawkmiwgmy;
        }
        goto wmqcsqscwmkocacm;
        igikiyqycooasgey:
        if ($sqeykgyoooqysmca) {
            goto imqeiaoiomcusmys;
        }
        goto iwwsckgkuyykggwm;
        qwkmscimkwuuqkyy:
        $sqeykgyoooqysmca = ManipulateArray::get($current_screen, self::POST_TYPE);
        goto nisqcoeqcgqqqaai;
        sywsuomwieouwayw:
        $sqeykgyoooqysmca = ManipulateServer::ayueggmoqeeukqmq(self::POST_TYPE);
        goto wgqeiquyekoaaiqs;
        seygmewkwgggmgqa:
        ykuaoqecgmioscey:
        goto qwkmscimkwuuqkyy;
        iuuekasywyywqcmy:
        return $sqeykgyoooqysmca;
        goto wyowoaggksqmaums;
        gekgyswocciysksa:
        if ($sqeykgyoooqysmca) {
            goto iygyaykccksksmka;
        }
        goto sywsuomwieouwayw;
        koycomwmwaigmeim:
        $sqeykgyoooqysmca = $typenow;
        goto kiewsmqeekaymgeo;
        wiuuqwgymuyoiciu:
        imqeiaoiomcusmys:
        goto iuuekasywyywqcmy;
        wmqcsqscwmkocacm:
        if ($current_screen) {
            goto ykuaoqecgmioscey;
        }
        goto saqyqgeqayiqykao;
        eqsoeagckkeueyoy:
        if (!(!$sqeykgyoooqysmca && $post)) {
            goto qmyawqywcoawoeim;
        }
        goto qewioskiigymoaae;
        wgqeiquyekoaaiqs:
        $post = ManipulateServer::ayueggmoqeeukqmq(self::POST);
        goto eqsoeagckkeueyoy;
        gauuayyuaimeqgms:
        ciqqmaiawkmiwgmy:
        goto koycomwmwaigmeim;
        aeamuikiyeskkkee:
        iygyaykccksksmka:
        goto wiuuqwgymuyoiciu;
        qiagkoiassqawesu:
        $sqeykgyoooqysmca = ManipulateArray::get(self::get(), self::POST_TYPE);
        goto igikiyqycooasgey;
        uscqgqwkeqmmeqay:
        qmyawqywcoawoeim:
        goto aeamuikiyeskkkee;
        kiewsmqeekaymgeo:
        goto gkiskesiwecgcuyo;
        goto seygmewkwgggmgqa;
        iwwsckgkuyykggwm:
        global $typenow, $current_screen;
        goto mswykgiqgmcugqes;
        qewioskiigymoaae:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto uscqgqwkeqmmeqay;
        wyowoaggksqmaums:
    }
    
    public static function ygqycmmkoiuocoia($post)
    {
        return ManipulateArray::get(self::get($post), "\x70\157\163\x74\x5f\160\x61\x72\145\156\x74");
    }
    
    public static function ekwkywuguceaogsk()
    {
        goto wcimeswkkmqyaqoa;
        gmuoosscgmucqgms:
        awomwemokoaommck:
        goto egcmycuugqcugeii;
        uyuqcoucaoqcmwos:
        the_post();
        goto yucmkqgkmoemmkig;
        masysmcwwyggkoae:
        iewmgooekimcooem:
        goto oqucmsieeqcyimuy;
        wcimeswkkmqyaqoa:
        $wyoiwuqokyeeuguk = [];
        goto ggogugoaicomuice;
        yucmkqgkmoemmkig:
        $wyoiwuqokyeeuguk[] = self::get();
        goto mskwaaokyikicquk;
        mskwaaokyikicquk:
        goto awomwemokoaommck;
        goto masysmcwwyggkoae;
        oqucmsieeqcyimuy:
        msykyyqmmqsyqmkg:
        goto csiksyqeyomuyyaw;
        csiksyqeyomuyyaw:
        return $wyoiwuqokyeeuguk;
        goto yqyyymusqwmeiywm;
        egcmycuugqcugeii:
        if (!have_posts()) {
            goto iewmgooekimcooem;
        }
        goto uyuqcoucaoqcmwos;
        ggogugoaicomuice:
        if (!have_posts()) {
            goto msykyyqmmqsyqmkg;
        }
        goto gmuoosscgmucqgms;
        yqyyymusqwmeiywm:
    }
    
    public static function cuoieqacocyyookg($post)
    {
        $emeuskyoeemoywwi = self::wgocauqiyqkmkyki($post);
        return floor($emeuskyoeemoywwi / 200);
    }
    
    public static function wgocauqiyqkmkyki($post)
    {
        goto wugkmusyoygmkqqe;
        icaauuyceicoqeyw:
        
        $ewgwqamkygiqaawc = preg_replace("\57\x5b\x5b\x3a\163\x70\141\x63\145\72\135\135\57", "\40", $ewgwqamkygiqaawc);
        goto kwgcqewsuiemmcgu;
        qqcsmicsiguamkmi:
        
        return count($emeuskyoeemoywwi);
        goto iasmguggqccoqgqg;
        kwgcqewsuiemmcgu:
        
        
        $emeuskyoeemoywwi = preg_split("\x2f\x5b\xa\xd\x9\40\135\53\57", $ewgwqamkygiqaawc, 0, PREG_SPLIT_NO_EMPTY);
        goto qqcsmicsiguamkmi;
        wugkmusyoygmkqqe:
        $post = self::get($post);
        goto oysecwgkqeacouqw;
        akkkmwcmiugmgqim:
        
        $ewgwqamkygiqaawc = preg_replace("\57\133\133\x3a\160\x75\156\x63\x74\72\135\133\72\x64\151\147\x69\x74\72\x5d\x5d\57", '', $ewgwqamkygiqaawc);
        goto icaauuyceicoqeyw;
        oysecwgkqeacouqw:
        $ewgwqamkygiqaawc = self::souwykwwmyygqyqi($post);
        goto akkkmwcmiugmgqim;
        iasmguggqccoqgqg:
    }
    
    public static function mwoyqeeigwqoamiw($ywmkwiwkosakssii = [])
    {
        goto kikyssscmqesqkaa;
        kwkwaqqwaoewgqwc:
        $ksaameoqigiaoigg = [];
        goto weqaocmesamqkcic;
        gwkaweoeoyumiagw:
        $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::INCLUDE);
        goto qkqqysiiugqceokw;
        imggygaykcwqeeqa:
        goto mggoeksacaimyqkg;
        goto mquqqwyaksscucig;
        ygoekseuwuqgsqiw:
        $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi);
        goto ccgwgmsawecwassc;
        oiswowekmymaweog:
        umwakiomkqmysuaw:
        goto wwgsooeeqeiaswoi;
        syoykqauiiuuiaae:
        $gqgemcmoicmgaqie = [];
        goto egymseeqcsgsiuqy;
        wwuscguquemeomsm:
        mggoeksacaimyqkg:
        goto kwkwaqqwaoewgqwc;
        sqqmacumauekywma:
        if ($ooiewiwkegguusum) {
            goto ugoiguwucqucmsyq;
        }
        goto kckywuggymioosew;
        aoquqswgmegqeemm:
        goto smqeqmsuawsimmcs;
        goto qaiqiokieeggcoym;
        ucgaaaeumkcmsios:
        foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
            goto csgaywiswymcaqmy;
            ssausyueecggqcec:
            cuaiomeoucgeaeqy:
            goto yysayeckiesuqcsa;
            sgkcimyicykmyueu:
            $igqsaukqcqscimok = $igqsaukqcqscimok->label;
            goto waywoikgwqugqiay;
            yieucwaowagkucaa:
            $ymqmyyeuycgmigyo = $igqsaukqcqscimok->name;
            goto igyogusiuygqysyi;
            qucseiiyqgwmyyik:
            wmmueeiawggqookk:
            goto awywowqmgkeiawky;
            csgaywiswymcaqmy:
            $igqsaukqcqscimok = self::waaisqccqacqeium($igqsaukqcqscimok);
            goto icmgciksummeugya;
            ukmkckcqukygqosw:
            goto sykguyswkwowkmys;
            goto eawsywkeuwsmmsuu;
            myyskgacygigeayu:
            cykwmywaqcgiikom:
            goto qucseiiyqgwmyyik;
            koqequoesgsqmeye:
            $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok;
            goto myyskgacygigeayu;
            icmgciksummeugya:
            if (!$igqsaukqcqscimok) {
                goto cykwmywaqcgiikom;
            }
            goto yieucwaowagkucaa;
            eqoegikgmweyoeca:
            sykguyswkwowkmys:
            goto koqequoesgsqmeye;
            waywoikgwqugqiay:
            goto sykguyswkwowkmys;
            goto ssausyueecggqcec;
            eawsywkeuwsmmsuu:
            ckocskkiwaikikse:
            goto sgkcimyicykmyueu;
            yysayeckiesuqcsa:
            $igqsaukqcqscimok = ManipulateArray::get($igqsaukqcqscimok->rewrite, self::SLUG, $ymqmyyeuycgmigyo);
            goto eqoegikgmweyoeca;
            igyogusiuygqysyi:
            if ($sogksuscggsicmac === self::LABELS) {
                goto ckocskkiwaikikse;
            }
            goto ccmmogikyswuiyya;
            ccmmogikyswuiyya:
            if ($sogksuscggsicmac === self::SLUGS) {
                goto cuaiomeoucgeaeqy;
            }
            goto ukmkckcqukygqosw;
            awywowqmgkeiawky:
        }
        goto gykwuammuiuimcqe;
        weqaocmesamqkcic:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::LABELS, self::SLUGS])) {
            goto cwycogckouesaesk;
        }
        goto kykqywkcmkkiimqu;
        kckywuggymioosew:
        if ($yemgmmgogcwccuky) {
            goto ycsuucmigqakaesa;
        }
        goto imggygaykcwqeeqa;
        osquygowswqqgcqu:
        ycsuucmigqakaesa:
        goto aygaeqqgkosiccik;
        kykqywkcmkkiimqu:
        $ksaameoqigiaoigg = $oammesyieqmwuwyi;
        goto aoquqswgmegqeemm;
        kikyssscmqesqkaa:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\161\x75\145\162\x79" => [], self::OUTPUT => self::NAMES, self::EXCLUDE => [], self::INCLUDE => []]);
        goto igqswueceimwyksq;
        wwgsooeeqeiaswoi:
        $aqykuigiuwmmcieu = $sogksuscggsicmac;
        goto oqcooececqwqwiya;
        qcciqymcyggowaow:
        $oammesyieqmwuwyi = ManipulateFormat::omaawkkwwyesqwcc($ggauoeuaesiymgee, DecoratorPost::mwoyqeeigwqoamiw($gqgemcmoicmgaqie, $aqykuigiuwmmcieu));
        goto sqqmacumauekywma;
        gykwuammuiuimcqe:
        cimmeauiguggmemk:
        goto ycioskgosgkaocui;
        qkqqysiiugqceokw:
        $yemgmmgogcwccuky = ManipulateArray::get($ywmkwiwkosakssii, self::EXCLUDE);
        goto kykyayauiiamcskk;
        qaiqiokieeggcoym:
        cwycogckouesaesk:
        goto ucgaaaeumkcmsios;
        kicogigewkgmqwym:
        kamgwaowucoswyym:
        goto akggggqgqmmgcaiy;
        akggggqgqmmgcaiy:
        $gqgemcmoicmgaqie = ManipulateFormat::omaawkkwwyesqwcc($gqgemcmoicmgaqie, ["\x70\165\x62\x6c\x69\x63" => true, "\137\142\x75\x69\x6c\164\x69\x6e" => false, "\160\165\x62\154\x69\143\154\x79\x5f\x71\165\145\x72\x79\x61\x62\154\x65" => true]);
        goto oiswowekmymaweog;
        osuqweqwqukwwaqc:
        if (!$ooiewiwkegguusum) {
            goto kamgwaowucoswyym;
        }
        goto syoykqauiiuuiaae;
        mquqqwyaksscucig:
        ugoiguwucqucmsyq:
        goto ygoekseuwuqgsqiw;
        oqcooececqwqwiya:
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::NAMES])) {
            goto ecckggwkscqiewwu;
        }
        goto yisacmyycgcuaimi;
        igqswueceimwyksq:
        $gqgemcmoicmgaqie = ManipulateArray::get($ywmkwiwkosakssii, "\161\165\145\162\171");
        goto weccmykeusmgswkc;
        ycioskgosgkaocui:
        smqeqmsuawsimmcs:
        goto qumcciymugkuayyo;
        weccmykeusmgswkc:
        $sogksuscggsicmac = ManipulateArray::get($ywmkwiwkosakssii, self::OUTPUT);
        goto gwkaweoeoyumiagw;
        kykyayauiiamcskk:
        $ggauoeuaesiymgee = self::DEFAULT_POST_TYPES;
        goto osuqweqwqukwwaqc;
        egymseeqcsgsiuqy:
        goto umwakiomkqmysuaw;
        goto kicogigewkgmqwym;
        wokiacaaeqwoamgu:
        ecckggwkscqiewwu:
        goto qcciqymcyggowaow;
        aygaeqqgkosiccik:
        $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky));
        goto wwuscguquemeomsm;
        ccgwgmsawecwassc:
        goto mggoeksacaimyqkg;
        goto osquygowswqqgcqu;
        qumcciymugkuayyo:
        return $ksaameoqigiaoigg;
        goto kaeyaqskwuaaagmg;
        yisacmyycgcuaimi:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto wokiacaaeqwoamgu;
        kaeyaqskwuaaagmg:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        return DecoratorPost::qcgakseyaikigqco(self::get($post));
    }
    
    public static function cekqoisoaceaqiam($post)
    {
        goto ekieuqyaekgaekem;
        akeeousiaemumwqy:
        cagckkqacmeaemik:
        goto ymmkmyqiigmskumu;
        kmeqemccwyaskwqk:
        array_push($auwuoyyagaiegwae, $myyccyuumcscsagc, get_post_type_archive_feed_link($sqeykgyoooqysmca));
        goto akeeousiaemumwqy;
        iuqesqwcmseaoouo:
        if (!(is_string($ucsmiamgwmayyoco) && !empty($ucsmiamgwmayyoco) && DecoratorOption::get("\x73\x68\157\x77\137\x6f\x6e\x5f\x66\x72\157\156\164") == "\160\x61\x67\x65")) {
            goto kiaeuogcagqymoia;
        }
        goto gyqeokswmeikygki;
        ekieuqyaekgaekem:
        $auwuoyyagaiegwae = [];
        goto uycmykimwqoyykmo;
        cumcsgcamqomeygk:
        $gwiqqkoakiiquksg = self::ycqquoiyyuesegsy($post);
        goto kikyqwgykkiskoik;
        yaggoqgeaucmkmsi:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto weuicwuusquqioeo;
        yuqyccgsmegiicoc:
        
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas($sqeykgyoooqysmca);
        goto igommeoookeycwmc;
        scmqkqwakowggkmu:
        mygqkusgqoqgwayy:
        goto yaggoqgeaucmkmsi;
        iwuiyecakwogaqos:
        gokeooqgmyisigwu:
        goto eceyessoaayaagci;
        sgiswsoiyoowcqsw:
        
        array_push($auwuoyyagaiegwae, self::ycqquoiyyuesegsy($post));
        goto yuqyccgsmegiicoc;
        oekkqiisaauoowkm:
        $ucsmiamgwmayyoco = ManipulatePage::symuoymymumgwkaw();
        goto iuqesqwcmseaoouo;
        gyakkgyocuygkkwi:
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        goto sgiswsoiyoowcqsw;
        gyqeokswmeikygki:
        array_push($auwuoyyagaiegwae, $ucsmiamgwmayyoco);
        goto gcqmmuowwaseagoa;
        weuicwuusquqioeo:
        
        array_push($auwuoyyagaiegwae, DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), get_author_feed_link($qscaoekmoooeuyqg));
        goto mswiyiyqqqqqmccc;
        ymmkmyqiigmskumu:
        
        if (!(self::ucwmcwqmqwaymkkc($post) == "\164\x72\141\x73\x68")) {
            goto gokeooqgmyisigwu;
        }
        goto cumcsgcamqomeygk;
        eceyessoaayaagci:
        
        array_push($auwuoyyagaiegwae, home_url("\x2f"));
        goto oekkqiisaauoowkm;
        uycmykimwqoyykmo:
        $post = self::get($post);
        goto gyakkgyocuygkkwi;
        mswiyiyqqqqqmccc:
        
        $myyccyuumcscsagc = self::mqgeysameoesmuqw($sqeykgyoooqysmca);
        goto ousuggsuweyeqyuo;
        qsocqumaigsayksm:
        return $auwuoyyagaiegwae;
        goto eywcgcyicisgcumk;
        kusaguaukqyawgck:
        array_push($auwuoyyagaiegwae, $gwiqqkoakiiquksg, $gwiqqkoakiiquksg . "\146\145\145\144\57");
        goto iwuiyecakwogaqos;
        kikyqwgykkiskoik:
        $gwiqqkoakiiquksg = str_replace("\x5f\137\x74\162\x61\163\x68\145\144", '', $gwiqqkoakiiquksg);
        goto kusaguaukqyawgck;
        ousuggsuweyeqyuo:
        if (!($myyccyuumcscsagc == true)) {
            goto cagckkqacmeaemik;
        }
        goto kmeqemccwyaskwqk;
        igommeoookeycwmc:
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            goto cyoqykquycmuksqu;
            owcyysasyeaaowwk:
            if (!$uyuaosigqymaqsaa) {
                goto qoukygmscqwwmeci;
            }
            goto eiqwmksumaugsiue;
            eiqwmksumaugsiue:
            foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                goto eykcgaaeakyayico;
                uaguekkygoeqeuoy:
                array_push($auwuoyyagaiegwae, $voccgqswsiwauyow);
                goto ausqcauoasmqoqiq;
                qaugoawikwesmkqo:
                iucgiywuayaqoiis:
                goto swekqcymmemsckim;
                yemeacuywsiqecgm:
                $giqggecqqikcysgq = min($ocqawgquwsqioses, 10);
                goto saaqoyeqicykmmuu;
                ayocomqsygokygku:
                array_push($auwuoyyagaiegwae, $oaeeeywcmcskwwgy);
                goto cyweqwceuyeuqwiq;
                ooweqiekgaaqweig:
                $gaeqamemwmwsyukm = $iwewcwusemqaiggk->count;
                goto cwaaqwgckkmmuayw;
                saaqoyeqicykmmuu:
                $ciyackuwsqkoqese = 2;
                goto eegacceeuuycmssm;
                wgkewusaiaqwwmmk:
                if (!$weyoqgcesqgeusiu) {
                    goto aseackwooioggwyc;
                }
                goto ooweqiekgaaqweig;
                skgmwkqigcucecks:
                goto sakqwiaagsykwauy;
                goto qaugoawikwesmkqo;
                cwaaqwgckkmmuayw:
                $ocqawgquwsqioses = ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu);
                goto yemeacuywsiqecgm;
                eegacceeuuycmssm:
                sakqwiaagsykwauy:
                goto yswsuyqqsygkqcgi;
                eykcgaaeakyayico:
                $voccgqswsiwauyow = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk);
                goto iwsgeyycmqmicaag;
                okwcqgkysyueokie:
                $ciyackuwsqkoqese++;
                goto skgmwkqigcucecks;
                cyweqwceuyeuqwiq:
                ioamsuyiukoaawiw:
                goto okwcqgkysyueokie;
                ausqcauoasmqoqiq:
                $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq();
                goto wgkewusaiaqwwmmk;
                ccyskouwcaewmmuq:
                mkcsuwyggueicysc:
                goto kmgmsagugycgguso;
                swekqcymmemsckim:
                aseackwooioggwyc:
                goto mgsqaweekeiqgcys;
                yswsuyqqsygkqcgi:
                if (!($ciyackuwsqkoqese <= $giqggecqqikcysgq)) {
                    goto iucgiywuayaqoiis;
                }
                goto imgcoqgqsgmwussc;
                mgsqaweekeiqgcys:
                ogasqekksgksomcu:
                goto ccyskouwcaewmmuq;
                iwsgeyycmqmicaag:
                if (!$voccgqswsiwauyow) {
                    goto ogasqekksgksomcu;
                }
                goto uaguekkygoeqeuoy;
                imgcoqgqsgmwussc:
                $oaeeeywcmcskwwgy = $voccgqswsiwauyow . "\x70\141\x67\x65\x2f" . user_trailingslashit($ciyackuwsqkoqese);
                goto ayocomqsygokygku;
                kmgmsagugycgguso:
            }
            goto ksewmguscaqkiiso;
            cyoqykquycmuksqu:
            $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
            goto owcyysasyeaaowwk;
            qkccmuekscemyiqi:
            qoukygmscqwwmeci:
            goto maaqgkcmqkcguscg;
            maaqgkcmqkcguscg:
            uayoaukucommuwki:
            goto mwkyqwwyuoquwycw;
            ksewmguscaqkiiso:
            okemiqakkiysqqyc:
            goto qkccmuekscemyiqi;
            mwkyqwwyuoquwycw:
        }
        goto scmqkqwakowggkmu;
        gcqmmuowwaseagoa:
        kiaeuogcagqymoia:
        goto qsocqumaigsayksm;
        eywcgcyicisgcumk:
    }
    
    public static function keeogscqcgsequyc($useksmwkuswkwcqg)
    {
        goto akkuiemqaogigaqa;
        ccgsasimykggyess:
        $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        goto kkicowiukwoykmms;
        qokggikksgqmecam:
        mcyiwawwcsquwiqq:
        goto smiwewgysqykaqee;
        kkicowiukwoykmms:
        esggoysyykycecyq:
        goto eueuyagcqqwwsick;
        kgqqosqskwaaogyu:
        $wkaqekwwgqsqwcoi = "\141\x64\x6d\x69\156\55{$useksmwkuswkwcqg}";
        goto qokggikksgqmecam;
        smiwewgysqykaqee:
        return $wkaqekwwgqsqwcoi;
        goto uumasiqguewuwcaa;
        emmkqsuswgssikec:
        if (!$mksyucucyswaukig) {
            goto esggoysyykycecyq;
        }
        goto agwoisgcwqooygsg;
        agwoisgcwqooygsg:
        $wkaqekwwgqsqwcoi = $mksyucucyswaukig->menu_icon;
        goto ccgsasimykggyess;
        akkuiemqaogigaqa:
        $wkaqekwwgqsqwcoi = '';
        goto csciwewamgcguguc;
        csciwewamgcguguc:
        $mksyucucyswaukig = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto emmkqsuswgssikec;
        eueuyagcqqwwsick:
        if ($wkaqekwwgqsqwcoi) {
            goto mcyiwawwcsquwiqq;
        }
        goto kgqqosqskwaaogyu;
        uumasiqguewuwcaa:
    }
    
    public static function uikgwcuascgeissw($post = null)
    {
        goto saigoogiqigowuqo;
        ekaasiygiigkuasg:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($post, true);
        goto aaqiykkkmossycmw;
        aswkmiocmcogokyy:
        return sprintf("\x25\x73\x20\55\40\45\x73", $meqocwsecsywiiqs, $useksmwkuswkwcqg);
        goto qyyosiukaswscmuu;
        oeewoegiqgywwmos:
        $meqocwsecsywiiqs = DecoratorPost::qcgakseyaikigqco($post);
        goto ekaasiygiigkuasg;
        aaqiykkkmossycmw:
        if (!$useksmwkuswkwcqg) {
            goto gkwycwegcuicsgas;
        }
        goto ycygwiuuauuwwmyc;
        ywimgeoyusmceogc:
        gkwycwegcuicsgas:
        goto aswkmiocmcogokyy;
        ycygwiuuauuwwmyc:
        $useksmwkuswkwcqg = ManipulateArray::qamwegcyimgcqksw($useksmwkuswkwcqg, "\x6c\141\142\145\x6c\x73\56\x73\x69\x6e\147\165\154\141\162\137\156\x61\x6d\145");
        goto ywimgeoyusmceogc;
        saigoogiqigowuqo:
        $post = self::get($post);
        goto oeewoegiqgywwmos;
        qyyosiukaswscmuu:
    }
    
    public static function wieguyuwywywksac($ywmkwiwkosakssii = [])
    {
        return wp_get_archives(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\x63\x68\x6f" => false, self::TYPE => "\155\x6f\156\x74\150\154\x79", self::ORDER => "\x44\105\123\x43"]));
    }
    
    public static function ccwssmqgyasqqcoc($post, $sqeykgyoooqysmca) : bool
    {
        $post = self::get($post, self::OBJECT, true);
        return $post && self::gueasuouwqysmomu($post) == $sqeykgyoooqysmca;
    }
    
    public static function qeosassuekcieuuy($sqeykgyoooqysmca = null) : bool
    {
        goto uussagskoysuoeiw;
        aqgmwywwecioauqg:
        return $cekoogweeooasayu;
        goto sqgkqqoeksyicmoa;
        yskwigcmaicqamqy:
        gqeeomoukqkowycw:
        goto aqgmwywwecioauqg;
        cqycwggykmmyacuk:
        if (!$sqeykgyoooqysmca) {
            goto gqeeomoukqkowycw;
        }
        goto ugkgqeugmkumauos;
        ugkgqeugmkumauos:
        $cekoogweeooasayu = $sqeykgyoooqysmca->public === true;
        goto yskwigcmaicqamqy;
        uussagskoysuoeiw:
        $cekoogweeooasayu = false;
        goto rkasqqqgemowweeg;
        rkasqqqgemowweeg:
        $sqeykgyoooqysmca = self::waaisqccqacqeium($sqeykgyoooqysmca);
        goto cqycwggykmmyacuk;
        sqgkqqoeksyicmoa:
    }
    
    public static function qkweigiqsaaigqau($post = null) : ?string
    {
        goto wceiwqiccssqgcuw;
        cuockkkkmamkuygc:
        if (!$qscaoekmoooeuyqg) {
            goto mmgissacqioqksmk;
        }
        goto cquyikuyaiskayos;
        cquyikuyaiskayos:
        $eeamcawaiqocomwy = DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg);
        goto kwsusuqioqiaokmk;
        wceiwqiccssqgcuw:
        $eeamcawaiqocomwy = null;
        goto ueoygowuiugooicc;
        mwsmaceeuacaoeas:
        return $eeamcawaiqocomwy;
        goto wwkgimsumqsaicoy;
        ueoygowuiugooicc:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        goto cuockkkkmamkuygc;
        kwsusuqioqiaokmk:
        mmgissacqioqksmk:
        goto mwsmaceeuacaoeas;
        wwkgimsumqsaicoy:
    }
    
    public static function wsiiswmaagmyiaiw($post = null)
    {
        return DecoratorPost::wsiiswmaagmyiaiw(self::mwikyscisascoeea($post));
    }
    
    public static function mqgeysameoesmuqw($useksmwkuswkwcqg) : string
    {
        goto geiwkqgwawsmyeiw;
        seqgigumouyguowy:
        ugiegewmsumyuqmq:
        goto ueocsmuykwyoywui;
        ueocsmuykwyoywui:
        return trailingslashit(DecoratorPost::mqgeysameoesmuqw($useksmwkuswkwcqg));
        goto kawkoccmuqqeamms;
        aesusogymakeuios:
        $useksmwkuswkwcqg = $useksmwkuswkwcqg->name;
        goto seqgigumouyguowy;
        geiwkqgwawsmyeiw:
        if (!$useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto ugiegewmsumyuqmq;
        }
        goto aesusogymakeuios;
        kawkoccmuqqeamms:
    }
    
    public static function insert($useksmwkuswkwcqg, $ywmkwiwkosakssii = []) : ?int
    {
        goto aeamameocikekces;
        acmoiyiogowkkesw:
        uqoowswseqmmisei:
        goto ocsyqkkqkwekgakm;
        uwyuiwkkeuwsykys:
        $sogksuscggsicmac = DecoratorPost::insert($ywmkwiwkosakssii);
        goto acmoiyiogowkkesw;
        ocsyqkkqkwekgakm:
        return $sogksuscggsicmac;
        goto wuucmmcggqqsmakc;
        suqaqoaowamkiymi:
        $ywmkwiwkosakssii[self::POST_TYPE] = $useksmwkuswkwcqg;
        goto wccuioiewmeamewo;
        wccuioiewmeamewo:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\157\163\164\x5f\164\x69\x74\x6c\x65" => '', "\160\x6f\x73\x74\137\x6e\141\x6d\x65" => '', "\160\x6f\163\x74\x5f\143\157\x6e\164\x65\156\x74" => '', "\160\157\163\x74\x5f\163\164\x61\164\165\x73" => '']);
        goto ucwuomcmcoqmyqwm;
        ucwuomcmcoqmyqwm:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, [self::NAME => $ywmkwiwkosakssii["\160\x6f\x73\x74\x5f\156\141\x6d\x65"], self::POSTS_PER_PAGE => 1]);
        goto iomigqssyeeaqgsg;
        ogekauwggisguwkq:
        $ywmkwiwkosakssii["\160\x6f\163\164\137\x61\165\x74\150\x6f\x72"] = ManipulateUser::mwikyscisascoeea();
        goto uwyuiwkkeuwsykys;
        aeamameocikekces:
        $sogksuscggsicmac = null;
        goto suqaqoaowamkiymi;
        iomigqssyeeaqgsg:
        if ($wyoiwuqokyeeuguk) {
            goto uqoowswseqmmisei;
        }
        goto ogekauwggisguwkq;
        wuucmmcggqqsmakc:
    }
    
    public static function sqyyemqmmgmyiaam($sciomagaqmgggsiu = [])
    {
        return DecoratorQuery::moegwqkekcawsggs($sciomagaqmgggsiu);
    }
    
    public static function waoeigwigksoikgu($post, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii["\x70\x6f\163\x74\137\151\x64"] = self::mwikyscisascoeea($post);
        return ManipulateComment::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function iuaacwwygkmcoeiy($qwcmueausqgiwigy, $gqgemcmoicmgaqie)
    {
        goto kcaciomiguuugugi;
        ksmsiiaeokcggegc:
        if (DecoratorUser::ksgkoukcicwkkaum()) {
            goto oouaueaaciqmoaek;
        }
        goto ugqqciuuwaioyowe;
        imsmuoawuiemiisk:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            $qwcmueausqgiwigy[] = $wpdb->prepare("{$wpdb->posts}\56\160\157\163\x74\x5f\164\x69\164\154\145\40\x4c\x49\113\105\x20\x25\163", $aaycmcgqqqsysccs . $wpdb->esc_like($iwewcwusemqaiggk) . $aaycmcgqqqsysccs);
            gmwqisoikakuqicc:
        }
        goto qqewuuoigkoeeocq;
        woaewkuksuiogeoo:
        $qwcmueausqgiwigy = "\40\x41\x4e\104\40" . implode("\x20\x41\116\104\40", $qwcmueausqgiwigy);
        goto acoociuqgmymeggw;
        ikuuqaoiwigcmwyu:
        global $wpdb;
        goto amaoecqeywkkmyoi;
        acoociuqgmymeggw:
        eqooqiomasygymwk:
        goto muisqceosooggyoy;
        scywsowkeyyssgqo:
        oouaueaaciqmoaek:
        goto woaewkuksuiogeoo;
        kwqoqgccuqgigkoc:
        if (!($uyuaosigqymaqsaa && $qwcmueausqgiwigy)) {
            goto eqooqiomasygymwk;
        }
        goto ikuuqaoiwigcmwyu;
        cscciumkmikyqica:
        $qwcmueausqgiwigy = [];
        goto imsmuoawuiemiisk;
        oymoaaossqyocmue:
        $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca["\145\x78\141\143\x74"]) ? '' : "\x25";
        goto cscciumkmikyqica;
        amaoecqeywkkmyoi:
        $qqmmggwcsmymegca = $uyuaosigqymaqsaa;
        goto oymoaaossqyocmue;
        ugqqciuuwaioyowe:
        $qwcmueausqgiwigy[] = "{$wpdb->posts}\x2e\x70\x6f\163\x74\137\160\x61\x73\163\167\x6f\x72\x64\40\x3d\x20\x27\47";
        goto scywsowkeyyssgqo;
        muisqceosooggyoy:
        return $qwcmueausqgiwigy;
        goto wyuyokmygemgqsmk;
        qqewuuoigkoeeocq:
        eemuaaqoyiqiyyoe:
        goto ksmsiiaeokcggegc;
        kcaciomiguuugugi:
        $uyuaosigqymaqsaa = ManipulateArray::get($gqgemcmoicmgaqie->query_vars, "\163\x65\x61\162\x63\x68\x5f\164\x65\x72\155\163");
        goto kwqoqgccuqgigkoc;
        wyuyokmygemgqsmk:
    }
    
    public static function waaisqccqacqeium($useksmwkuswkwcqg = null) : ?WP_Post_Type
    {
        goto siymkkcgeegouiuq;
        kcgismqksoywmcea:
        if ($useksmwkuswkwcqg) {
            goto ycimqmmmgskimkgi;
        }
        goto msyksokkggaqasey;
        agqsiuycgsaoescw:
        return $useksmwkuswkwcqg;
        goto wgceoaueoiiwwuum;
        siymkkcgeegouiuq:
        if ($useksmwkuswkwcqg instanceof WP_Post_Type) {
            goto wmssywakgoiswqey;
        }
        goto kcgismqksoywmcea;
        wgwsicukewmsscec:
        $useksmwkuswkwcqg = DecoratorPost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto gcywkgcegesysuoy;
        amgecmwokwwiiuac:
        ycimqmmmgskimkgi:
        goto wgwsicukewmsscec;
        msyksokkggaqasey:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto amgecmwokwwiiuac;
        gcywkgcegesysuoy:
        wmssywakgoiswqey:
        goto agqsiuycgsaoescw;
        wgceoaueoiiwwuum:
    }
    
    public static function mwikyscisascoeea($post = null, $cwwowqyuwccuykom = false)
    {
        goto suusasmyiceigsyk;
        ocykayyqumgsymkk:
        return $post;
        goto eguuyyiaceyocoge;
        ousiykwqkgeokoqs:
        $post = ManipulateArray::get($post, "\111\104");
        goto qcimcgcggicewoug;
        suusasmyiceigsyk:
        if (is_numeric($post)) {
            goto asmoomkuqyqqywkk;
        }
        goto ousiykwqkgeokoqs;
        sigseymecgiowiii:
        aigiscsuosewiuus:
        goto uwkaawaqoswkcuye;
        uwkcasugwwwwmmqu:
        ycuamgwmgueemuaq:
        goto sigseymecgiowiii;
        iqeuoqeeceiikmse:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto imyoymgguyuiksia;
        }
        goto ksukaiqewqogiqwu;
        weeeiiqqgqoymeke:
        imyoymgguyuiksia:
        goto omaqoumkmmmuuwkq;
        qcimcgcggicewoug:
        if (!(!$post && !$cwwowqyuwccuykom)) {
            goto aigiscsuosewiuus;
        }
        goto iqeuoqeeceiikmse;
        ksukaiqewqogiqwu:
        $post = get_the_ID();
        goto eyuickmcmiiwcgss;
        uwkaawaqoswkcuye:
        asmoomkuqyqqywkk:
        goto ocykayyqumgsymkk;
        eyuickmcmiiwcgss:
        goto ycuamgwmgueemuaq;
        goto weeeiiqqgqoymeke;
        omaqoumkmmmuuwkq:
        $post = DecoratorQuery::keeuqgyooycqoygw();
        goto uwkcasugwwwwmmqu;
        eguuyyiaceyocoge:
    }
    
    public static function emcckouwaoassquc(array $sciomagaqmgggsiu = [])
    {
        goto kyouiqwywyqgkuso;
        kyouiqwywyqgkuso:
        if ($sciomagaqmgggsiu) {
            goto skyscuweykackoci;
        }
        goto smqgoowsgakckqse;
        smqgoowsgakckqse:
        $sciomagaqmgggsiu = self::mwoyqeeigwqoamiw();
        goto oyqsaukeioykugmm;
        oyqsaukeioykugmm:
        skyscuweykackoci:
        goto meeceoqcuuasiiio;
        meeceoqcuuasiiio:
        return self::ciugwooasaqcywas($sciomagaqmgggsiu, ["\160\x6f\163\x74\137\x73\164\x61\164\165\163" => "\x70\165\142\154\x69\x73\x68", "\146\151\145\154\144\x73" => self::IDS]);
        goto iayksyuawioekakq;
        iayksyuawioekakq:
    }
    
    public static function aqcogscycyycgkuq($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\160\157\163\x74\137\156\141\x6d\145", $post, $mgkceomocowocqyo);
    }
    
    public static function qkuksuwkueysueww(string $useksmwkuswkwcqg)
    {
        goto uesmmkgaqoqmaiik;
        iyqaossmgeskkcgg:
        try {
            $gaeqamemwmwsyukm = (int) $wpdb->get_var("\x53\105\x4c\x45\103\x54\40\103\x4f\125\x4e\124\50\143\x6f\155\155\x65\156\x74\137\x49\104\x29\xa\x9\x9\11\x9\x9\106\122\x4f\x4d\x20{$wpdb->comments}\x20\x57\110\105\122\x45\40\x63\157\x6d\x6d\x65\x6e\164\137\x70\157\163\x74\x5f\x49\x44\40\x69\156\x20\50\xa\11\11\11\x9\x9\123\105\x4c\x45\103\x54\40\x49\104\x20\x46\x52\117\x4d\x20{$wpdb->posts}\x20\x57\x48\105\122\x45\40\x70\157\163\x74\x5f\164\x79\x70\145\40\75\x20\47{$useksmwkuswkwcqg}\x27\12\x9\x9\11\x9\11\x41\116\104\x20\160\157\x73\164\x5f\x73\164\x61\164\x75\x73\x20\75\40\x27\160\165\142\154\x69\x73\x68\x27\51\40\x41\x4e\x44\x20\x63\x6f\155\155\145\x6e\x74\137\141\160\160\162\x6f\x76\145\x64\x20\75\40\x27\x31\47");
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto gkweycueymqasawm;
        uesmmkgaqoqmaiik:
        global $wpdb;
        goto wequuyiayswgoosg;
        gkweycueymqasawm:
        return $gaeqamemwmwsyukm;
        goto euceooqmeegmumya;
        wequuyiayswgoosg:
        $gaeqamemwmwsyukm = 0;
        goto iyqaossmgeskkcgg;
        euceooqmeegmumya:
    }
    
    public static function ucwmcwqmqwaymkkc($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam("\160\157\163\x74\137\x73\x74\141\164\165\x73", $post, $mgkceomocowocqyo);
    }
    
    public static function mguqscccckuywsya($post = null, $cwwowqyuwccuykom = false)
    {
        return self::ygwimyogyaqgumam("\x70\157\163\164\137\x61\x75\x74\150\x6f\162", self::mwikyscisascoeea($post, $cwwowqyuwccuykom));
    }
    
    public static function uiuwugwykqocmiec($post = null) : ?int
    {
        return DecoratorHook::sscegwueamckwmcy("\x67\145\164\x5f\x70\x6f\x73\x74\x5f\x77\157\x72\x64\137\143\157\x75\156\164", 0, self::get($post));
    }
    
    public static function gsaceacmqiuqoouo($useksmwkuswkwcqg, $ymqmyyeuycgmigyo, $ywmkwiwkosakssii = [])
    {
        goto igkuwcieaaaimceu;
        igkuwcieaaaimceu:
        $ywmkwiwkosakssii["\x6e\141\x6d\x65"] = $ymqmyyeuycgmigyo;
        goto imgkgmwywoyggiiy;
        imgkgmwywoyggiiy:
        $suuagcecoyuweoqk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto qsqgsggawskeqauc;
        qsqgsggawskeqauc:
        return $suuagcecoyuweoqk ? array_pop($suuagcecoyuweoqk) : '';
        goto kwigmoscuksaeaik;
        kwigmoscuksaeaik:
    }
    
    public static function owicscwgeuqcqaig($useksmwkuswkwcqg = "\x70\157\163\164", $ywmkwiwkosakssii = [])
    {
        goto aookismekyuisiqy;
        siikoyaookakcsya:
        goto cymkauiwaemgisae;
        goto akiaoyqwwgyogmwa;
        usymiywgyuqgsmgo:
        cymkauiwaemgisae:
        goto mweuowgyuuomycug;
        emwuosqcciqgwuec:
        $yiasugywggckywoa["\x70\157\x73\164\x5f\137\x69\x6e"] = $egekuwigiusmwiek;
        goto daaaoeseaeakowis;
        mqqqskweuccusqsg:
        cgwwckgiugakqowu:
        goto egssagkqigycaowo;
        mweuowgyuuomycug:
        $yiasugywggckywoa["\x69\147\156\157\162\145\137\x73\x74\151\x63\x6b\x79\137\x70\157\163\164\x73"] = true;
        goto iuagymwagckgasgy;
        qacmciyceoyqmims:
        ieyqmiueyikwcwso:
        goto ksycyguoaoakaasa;
        ksycyguoaoakaasa:
        if (!(!empty($yiasugywggckywoa["\156\165\155\x62\x65\x72\160\x6f\163\x74\163"]) && empty($yiasugywggckywoa["\160\x6f\163\164\x73\x5f\x70\x65\x72\137\x70\x61\x67\145"]))) {
            goto eqooeogyogusoyci;
        }
        goto eqgewqgayssmyqyi;
        egssagkqigycaowo:
        $yiasugywggckywoa["\160\x6f\x73\164\137\137\x6e\x6f\164\137\151\x6e"] = wp_parse_id_list($yiasugywggckywoa["\x65\x78\x63\x6c\165\144\x65"]);
        goto usymiywgyuqgsmgo;
        akiaoyqwwgyogmwa:
        wwuyacuysiocqcwq:
        goto mygoemwmmmmeswoy;
        qeeiayaggickmsem:
        $yiasugywggckywoa["\143\141\164"] = $yiasugywggckywoa["\143\141\x74\145\147\157\162\171"];
        goto ygyikqcaweccikoy;
        mygoemwmmmmeswoy:
        $egekuwigiusmwiek = wp_parse_id_list($yiasugywggckywoa["\151\x6e\143\154\x75\x64\145"]);
        goto wsocqyukguoqmoou;
        sqigokysuqqoyoqq:
        $yiasugywggckywoa["\x70\x6f\163\x74\x5f\x73\164\x61\x74\x75\163"] = "\141\x74\164\141\x63\150\x6d\145\156\x74" === $yiasugywggckywoa["\160\x6f\163\164\x5f\x74\x79\160\145"] ? "\x69\x6e\x68\x65\x72\x69\164" : "\x70\165\142\154\x69\163\x68";
        goto qacmciyceoyqmims;
        ygyikqcaweccikoy:
        awcgaimyecemucay:
        goto oaquckygauqeycue;
        wsocqyukguoqmoou:
        $yiasugywggckywoa["\x70\x6f\x73\164\163\137\160\145\162\x5f\x70\141\x67\145"] = count($egekuwigiusmwiek);
        goto emwuosqcciqgwuec;
        gogeigmcqokqqiwc:
        return new WP_Query($yiasugywggckywoa);
        goto yieyamwmiyceaysm;
        oaquckygauqeycue:
        if (!empty($yiasugywggckywoa["\151\x6e\143\x6c\165\x64\145"])) {
            goto wwuyacuysiocqcwq;
        }
        goto ouuuiwcmacckekgw;
        uogugagqqgaumeui:
        if (empty($yiasugywggckywoa["\143\141\164\x65\x67\157\162\x79"])) {
            goto awcgaimyecemucay;
        }
        goto qeeiayaggickmsem;
        keqweiemkiakogck:
        if (!empty($yiasugywggckywoa["\x70\x6f\163\x74\x5f\163\164\141\x74\165\163"])) {
            goto ieyqmiueyikwcwso;
        }
        goto sqigokysuqqoyoqq;
        daaaoeseaeakowis:
        goto cymkauiwaemgisae;
        goto mqqqskweuccusqsg;
        isawkmamaukaekcg:
        $yiasugywggckywoa = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto keqweiemkiakogck;
        iuagymwagckgasgy:
        $yiasugywggckywoa["\156\157\x5f\146\157\165\x6e\x64\137\x72\x6f\167\163"] = true;
        goto gogeigmcqokqqiwc;
        ikggeywmqciukyuy:
        eqooeogyogusoyci:
        goto uogugagqqgaumeui;
        eqgewqgayssmyqyi:
        $yiasugywggckywoa["\x70\x6f\x73\164\163\137\x70\145\162\x5f\x70\x61\x67\145"] = $yiasugywggckywoa["\x6e\x75\155\142\x65\162\x70\157\x73\x74\163"];
        goto ikggeywmqciukyuy;
        ouuuiwcmacckekgw:
        if (!empty($yiasugywggckywoa["\145\x78\143\x6c\165\144\x65"])) {
            goto cgwwckgiugakqowu;
        }
        goto siikoyaookakcsya;
        aookismekyuisiqy:
        $ycmguuqqaiisymgg = ["\156\x75\x6d\x62\x65\162\160\157\x73\x74\x73" => 5, "\143\x61\x74\145\x67\157\162\171" => 0, "\x6f\162\x64\x65\x72\x62\171" => "\144\141\164\145", "\157\x72\x64\145\x72" => "\x44\x45\x53\103", "\151\156\x63\x6c\165\x64\x65" => [], "\145\170\x63\x6c\x75\144\145" => [], "\155\x65\x74\x61\137\x6b\145\x79" => '', "\x6d\x65\164\141\x5f\166\141\154\x75\145" => '', "\x70\x6f\x73\164\x5f\164\x79\160\x65" => $useksmwkuswkwcqg, "\163\165\x70\x70\162\x65\x73\163\137\x66\x69\154\x74\x65\162\x73" => true];
        goto isawkmamaukaekcg;
        yieyamwmiyceaysm:
    }
    
    public static function weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, $ywmkwiwkosakssii = [])
    {
        goto wqsikiwycqwksiwy;
        asqikgqmeqysakky:
        if (!(!is_array($uyuaosigqymaqsaa) || is_wp_error($uyuaosigqymaqsaa))) {
            goto qqsoyoesgkwakcwc;
        }
        goto yyckkkysceayoacc;
        umugkkiiiakomyae:
        return $uyuaosigqymaqsaa;
        goto ssseiiwsmacscqkk;
        wqsikiwycqwksiwy:
        $uyuaosigqymaqsaa = DecoratorPost::weescwwgqgiyumyw(self::mwikyscisascoeea($post), $seyqqsmuaiegkeeq, $ywmkwiwkosakssii);
        goto asqikgqmeqysakky;
        yyckkkysceayoacc:
        $uyuaosigqymaqsaa = [];
        goto fgacmumaqamuggaw;
        fgacmumaqamuggaw:
        qqsoyoesgkwakcwc:
        goto umugkkiiiakomyae;
        ssseiiwsmacscqkk:
    }
    
    public static function ekauksssqmmykouq($post = null, $wwgucssaecqekuek = [])
    {
        goto gqkckwmwucyicaom;
        gawoykaumugqiiiw:
        return $qscaoekmoooeuyqg;
        goto oeiyuauoweasyegq;
        sgwggiwoawyysamo:
        $qscaoekmoooeuyqg = ManipulateHTML::uuccukgasskgimsq("\x61", $wwgucssaecqekuek, $ymqmyyeuycgmigyo);
        goto zoeammwiceimsmea;
        giismoqygwoeiucm:
        $wwgucssaecqekuek["\x68\162\x65\x66"] = $qscaoekmoooeuyqg;
        goto usayuwaoekoyeigw;
        gqkckwmwucyicaom:
        $qscaoekmoooeuyqg = self::qkweigiqsaaigqau($post);
        goto ywkowqwiseoaosue;
        zoeammwiceimsmea:
        wsagsuekaoamamwq:
        goto gawoykaumugqiiiw;
        usayuwaoekoyeigw:
        $ymqmyyeuycgmigyo = DecoratorAuthor::igawqaomowicuayw("\x64\151\x73\x70\x6c\x61\171\137\156\x61\155\x65", self::mguqscccckuywsya($post));
        goto sgwggiwoawyysamo;
        ywkowqwiseoaosue:
        if (!$qscaoekmoooeuyqg) {
            goto wsagsuekaoamamwq;
        }
        goto giismoqygwoeiucm;
        oeiyuauoweasyegq:
    }
    
    public static function gueasuouwqysmomu($post = null, $awqscowmskeuymeu = false)
    {
        goto qckuswayaoymsksk;
        imkggwewaoaeaaaa:
        return $useksmwkuswkwcqg;
        goto kegkgqcaoogqqwuy;
        sysqgmqceqakymga:
        $useksmwkuswkwcqg = self::waaisqccqacqeium($useksmwkuswkwcqg);
        goto ckoqcgskyowkgwqc;
        meamgyseweakcwms:
        $useksmwkuswkwcqg = ManipulateArray::get($post, "\x70\157\x73\x74\x5f\164\x79\160\145");
        goto uaequckaaeewaqiy;
        iwgymiqeamaeqqom:
        oeyaaksqsgmecwmm:
        goto aamackwoccmccyks;
        ckoqcgskyowkgwqc:
        cusamwcumoyaccig:
        goto imkggwewaoaeaaaa;
        aamackwoccmccyks:
        if (!(is_array($post) || $post instanceof WP_Post)) {
            goto qyowaswasswaayey;
        }
        goto meamgyseweakcwms;
        eqyccakwmkgmsyik:
        if ($useksmwkuswkwcqg) {
            goto iqayckmwkoaoyusg;
        }
        goto mmmaqiceqwswaica;
        ukamoqcwkkacmkuo:
        iqayckmwkoaoyusg:
        goto osisauycomkeaisq;
        uaequckaaeewaqiy:
        qyowaswasswaayey:
        goto eqyccakwmkgmsyik;
        egoyusisgekiqoye:
        if (!is_numeric($post)) {
            goto oeyaaksqsgmecwmm;
        }
        goto eukasuwuekwugokm;
        qckuswayaoymsksk:
        $useksmwkuswkwcqg = get_post_type();
        goto egoyusisgekiqoye;
        osisauycomkeaisq:
        if (!$awqscowmskeuymeu) {
            goto cusamwcumoyaccig;
        }
        goto sysqgmqceqakymga;
        mmmaqiceqwswaica:
        $useksmwkuswkwcqg = ManipulateServer::get("\160\x6f\163\x74\137\164\x79\x70\x65");
        goto ukamoqcwkkacmkuo;
        eukasuwuekwugokm:
        $post = self::get($post);
        goto iwgymiqeamaeqqom;
        kegkgqcaoogqqwuy:
    }
    
    public static function gamoemyysmgugccu($post = null, $iueymcwwscwqkiyq = "\x61\x6c\154")
    {
        return self::ymgsgecsiqeegseg($post, $iueymcwwscwqkiyq) > 0;
    }
    
    public static function wsqeykgqiemswysa($sqeykgyoooqysmca, $iueymcwwscwqkiyq = "\160\x75\x62\x6c\x69\x73\x68", $yiyimoacecwoqeko = '')
    {
        return ManipulateArray::get(wp_count_posts($sqeykgyoooqysmca, $yiyimoacecwoqeko), $iueymcwwscwqkiyq);
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $useksmwkuswkwcqg, $ywmkwiwkosakssii = [])
    {
        goto qgsqycogyicuiioq;
        sqmqymmecmqykiqs:
        return $wyoiwuqokyeeuguk;
        goto youwoggqmcuggmyy;
        easusuoaqiwgcuui:
        DecoratorHook::ggmgmqswqkgecosg("\x70\x6f\x73\x74\x73\137\163\145\141\162\x63\150", [__CLASS__, "\163\x65\x61\x72\x63\150\102\x79\x54\151\x74\x6c\x65"], 10);
        goto sqmqymmecmqykiqs;
        ameoiemwymmeomqq:
        DecoratorHook::cecaguuoecmccuse("\160\157\163\x74\x73\x5f\x73\x65\141\x72\143\150", [__CLASS__, "\x73\145\141\x72\x63\150\x42\171\124\x69\x74\x6c\145"], 10, 2);
        goto uwmckciqcuwoyemm;
        qgsqycogyicuiioq:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x6f\x72\144\x65\x72" => "\101\x53\103", "\x70\x6f\163\x74\163\x5f\x70\x65\x72\137\x70\x61\x67\145" => 10]);
        goto eycmewmysuymswuk;
        wcykiuessuoeagki:
        $ywmkwiwkosakssii["\x73\165\160\x70\162\x65\163\163\137\x66\151\154\164\x65\x72\x73"] = false;
        goto xeeuigemugoamqao;
        xeeuigemugoamqao:
        ueyscskqyqmwgyqq:
        goto ameoiemwymmeomqq;
        eycmewmysuymswuk:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto ueyscskqyqmwgyqq;
        }
        goto sccqosiycoaosikm;
        sccqosiycoaosikm:
        $ywmkwiwkosakssii["\x73"] = $meqocwsecsywiiqs;
        goto wcykiuessuoeagki;
        uwmckciqcuwoyemm:
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        goto easusuoaqiwgcuui;
        youwoggqmcuggmyy:
    }
    
    public static function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, $mgkceomocowocqyo = [])
    {
        return DecoratorPost::ygwimyogyaqgumam($aiowsaccomcoikus, self::mwikyscisascoeea($post), $mgkceomocowocqyo);
    }
    
    public static function kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg = true)
    {
        goto ocuocqiyuecksmsi;
        ekayucummqeqmwgc:
        if (is_array($uyuaosigqymaqsaa)) {
            goto qqmeumqiyqkoycww;
        }
        goto suicyusecackqaii;
        kusoiyymwykqsgue:
        return $uyuaosigqymaqsaa;
        goto agksaoiusscawcwc;
        iecocimeqmmockam:
        qqmeumqiyqkoycww:
        goto ceogiuqcsqkmysga;
        ocuocqiyuecksmsi:
        $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
        goto ekayucummqeqmwgc;
        gacwuumiuewqgeim:
        goto eewcoeiokouymaic;
        goto iecocimeqmmockam;
        suicyusecackqaii:
        $uyuaosigqymaqsaa = null;
        goto gacwuumiuewqgeim;
        syuoooyaackuoues:
        eewcoeiokouymaic:
        goto kusoiyymwykqsgue;
        uqowsoiyaummsyoy:
        gmycyuqoscismuig:
        goto syuoooyaackuoues;
        iaqwyagqyokkmeoo:
        $uyuaosigqymaqsaa = isset($uyuaosigqymaqsaa[0]) ? $uyuaosigqymaqsaa[0] : null;
        goto uqowsoiyaummsyoy;
        ceogiuqcsqkmysga:
        if (!$qqgsimqiqyaugceg) {
            goto gmycyuqoscismuig;
        }
        goto iaqwyagqyokkmeoo;
        agksaoiusscawcwc:
    }
    
    public static function smqukgcyacswysqa($uusmaiomayssaecw = '', $post = null, $eqgoocgaqwqcimie = '')
    {
        return DecoratorPost::smqukgcyacswysqa($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto gqkuecyoaomqacgk;
        eqwmoigeokkskwuy:
        oayuucaeciioiwqw:
        goto kyicaqywsmawwwuo;
        ukaocimwskuqgqso:
        if (!(!$gioggcykgoikcwiy || DecoratorPost::seewsasmyoyciiee($post))) {
            goto oayuucaeciioiwqw;
        }
        goto quwqksyoiigamkys;
        quwqksyoiigamkys:
        $iayakwckycsumkqa = DecoratorPost::masoymaamekuykso($post);
        goto eqwmoigeokkskwuy;
        gqkuecyoaomqacgk:
        $post = self::get($post);
        goto asgkgomkmykaqeac;
        asgkgomkmykaqeac:
        $iayakwckycsumkqa = null;
        goto ukaocimwskuqgqso;
        kyicaqywsmawwwuo:
        return $iayakwckycsumkqa;
        goto ikqwwkscesmugsuq;
        ikqwwkscesmugsuq:
    }
    
    public static function cagmcswsqkwuasiy($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES)
    {
        goto qycekaqowowqaosm;
        wakcuqwemksmyeos:
        wwcimuywiwqwagoq:
        goto eqyykccckaqyikas;
        kwiuwccmuwwwwcak:
        mioiyawikawqyaay:
        goto wakcuqwemksmyeos;
        iuaikkckoskwuwyw:
        $sogksuscggsicmac = false;
        goto oksiwycekgweuyoc;
        oksiwycekgweuyoc:
        if (!($pagenow == "\145\144\x69\x74\x2e\160\150\160" && is_admin())) {
            goto wwcimuywiwqwagoq;
        }
        goto kwugcgwmcsoswees;
        gwimqwmmuacwkmou:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || is_string($useksmwkuswkwcqg) && $useksmwkuswkwcqg == $sciomagaqmgggsiu)) {
            goto mioiyawikawqyaay;
        }
        goto kswkocesygkuqiiy;
        kwugcgwmcsoswees:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu();
        goto gwimqwmmuacwkmou;
        kswkocesygkuqiiy:
        $sogksuscggsicmac = true;
        goto kwiuwccmuwwwwcak;
        eqyykccckaqyikas:
        return $sogksuscggsicmac;
        goto uwscoaaycokmqegk;
        qycekaqowowqaosm:
        global $pagenow;
        goto iuaikkckoskwuwyw;
        uwscoaaycokmqegk:
    }
    
    public static function ymgsgecsiqeegseg($post = null, $iueymcwwscwqkiyq = "\x61\x70\160\x72\157\x76\x65\144")
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
        goto oqcgimyqwmqgyygw;
        qwkwyciyyigugcms:
        swqycaokmkkykkea:
        goto ceqcqskmksiuosuy;
        yysqgqeoyckgmcsa:
        goto swqycaokmkkykkea;
        goto coaiaawqcaggmemg;
        coaiaawqcaggmemg:
        aoycieuggikeomis:
        goto cauamyimeqmgwick;
        ceqcqskmksiuosuy:
        return $ewgwqamkygiqaawc;
        goto ygygqysoqeimimgm;
        qsweawwuowkoeemg:
        uwgksqcakaieyscy:
        goto wawiggqugqwwacgq;
        ymiiukyiasogueiq:
        goto swqycaokmkkykkea;
        goto qsweawwuowkoeemg;
        oqcgimyqwmqgyygw:
        $post = self::get($post);
        goto oeegykgsgkscwcio;
        qmgqguiisgckwocw:
        if ($egkeamycaysqsoma) {
            goto aoycieuggikeomis;
        }
        goto imsqyecesygwiwkk;
        imsqyecesygwiwkk:
        if ($post) {
            goto uwgksqcakaieyscy;
        }
        goto yysqgqeoyckgmcsa;
        oeegykgsgkscwcio:
        $ewgwqamkygiqaawc = '';
        goto qmgqguiisgckwocw;
        cauamyimeqmgwick:
        $ewgwqamkygiqaawc = DecoratorPost::souwykwwmyygqyqi($post);
        goto ymiiukyiasogueiq;
        wawiggqugqwwacgq:
        $ewgwqamkygiqaawc = ManipulateArray::get($post, "\160\157\x73\x74\137\x63\x6f\x6e\164\x65\x6e\164");
        goto qwkwyciyyigugcms;
        ygygqysoqeimimgm:
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $oyuqkqayqyqysyse = '')
    {
        return DecoratorPost::ksmqawcowkmegigw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse);
    }
    
    public static function mmoaikqueyiwcesm($post, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\160\157\x73\164\137\x70\x61\x72\x65\156\x74"] = self::mwikyscisascoeea($post);
        return self::ciugwooasaqcywas(DecoratorPost::gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function qmmimiesyoyuqeqo($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto xeyusieocqgkowca;
        mmgsqoiukqkyiayw:
        foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) {
            $omwmuycmeqcqokom->children = self::mmoaikqueyiwcesm($omwmuycmeqcqokom, $ywmkwiwkosakssii);
            yoceycuiiwwmscci:
        }
        goto qeyuquwgysuucygo;
        qeyuquwgysuucygo:
        wgyqskiikcoamceq:
        goto kmocumwwsgkgeqay;
        kmocumwwsgkgeqay:
        return $eyagosskwwmgwmog;
        goto wimqsusyesasaism;
        xeyusieocqgkowca:
        $eyagosskwwmgwmog = self::uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto mmgsqoiukqkyiayw;
        wimqsusyesasaism:
    }
    
    public static function ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto qucmewyuwkkwsseo;
        omcseuaowsucussk:
        if ($aqykuigiuwmmcieu == self::LABELS) {
            goto ckqgkowqkggscuoi;
        }
        goto iimqqykwwmqeukai;
        eomwsawiqyuyiiiw:
        qowqokqkiweosuwa:
        goto okeewwyoqawamsoa;
        iimqqykwwmqeukai:
        $sogksuscggsicmac = $wyoiwuqokyeeuguk;
        goto qsaagygqqsmgiesk;
        zkuyggayyoqeeqek:
        $wyoiwuqokyeeuguk = DecoratorPost::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto omcseuaowsucussk;
        wywyyuawikmwceym:
        uockmkmeymgyqsqi:
        goto eomwsawiqyuyiiiw;
        osgkqqqqimmwsmsi:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        goto megauiwcsiuuiquk;
        okeewwyoqawamsoa:
        return $sogksuscggsicmac;
        goto sgguaokgyweasccc;
        megauiwcsiuuiquk:
        $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy("\x67\x65\x74\137\x70\157\163\164\163\137\x61\162\x67\x73", $ywmkwiwkosakssii);
        goto zkuyggayyoqeeqek;
        qucmewyuwkkwsseo:
        $sogksuscggsicmac = [];
        goto kocoameeyqygkwok;
        qymkekiqwouwaoos:
        ckqgkowqkggscuoi:
        goto eceowukgiumqosom;
        kocoameeyqygkwok:
        $ycmguuqqaiisymgg = [self::POST_TYPE => $useksmwkuswkwcqg, self::POSTS_PER_PAGE => -1];
        goto osgkqqqqimmwsmsi;
        eceowukgiumqosom:
        foreach ($wyoiwuqokyeeuguk as $uusmaiomayssaecw => $post) {
            goto aecweaquqmiiimsc;
            aecweaquqmiiimsc:
            $meqocwsecsywiiqs = get_the_title($post);
            goto wkkwgyuaqwiygawe;
            uaeyogsicwkuwcak:
            $sogksuscggsicmac[self::mwikyscisascoeea($post)] = $meqocwsecsywiiqs;
            goto ikwwiueqmmkayyce;
            iwcwuugoguscgqye:
            sigisgiqiuiuqemc:
            goto kymkyymiquekuscq;
            ikwwiueqmmkayyce:
            siiyycmowckwsemw:
            goto iwcwuugoguscgqye;
            wkkwgyuaqwiygawe:
            if (!$meqocwsecsywiiqs) {
                goto siiyycmowckwsemw;
            }
            goto uaeyogsicwkuwcak;
            kymkyymiquekuscq:
        }
        goto wywyyuawikmwceym;
        qsaagygqqsmgiesk:
        goto qowqokqkiweosuwa;
        goto qymkekiqwouwaoos;
        sgguaokgyweasccc:
    }
    
    public static function uamasysiccecccmw($oiegiwogmwmawkeo = "\x70\157\x73\164\x2d\164\150\x75\155\x62\156\x61\151\154", $post = null)
    {
        $eeamcawaiqocomwy = DecoratorPost::uamasysiccecccmw(self::mwikyscisascoeea($post), $oiegiwogmwmawkeo);
        return (string) DecoratorHook::sscegwueamckwmcy("\x70\x6f\x73\x74\x5f\164\150\165\x6d\x62\x6e\141\x69\x6c\137\165\162\x6c", $eeamcawaiqocomwy, $post, $oiegiwogmwmawkeo);
    }
    
    public static function ymuqsscwmcumcama($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST_TYPE => $useksmwkuswkwcqg, "\x70\x6f\163\164\x5f\163\164\141\164\165\163" => "\160\165\x62\154\x69\163\150"]);
        return DecoratorPost::ymuqsscwmcumcama($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function squyiyimquqicqke($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto ssiwoquqiiuysuma;
        mqkwmkuieegmucmg:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\x67\x65\x74\x5f\164\150\145\x5f\x64\141\x74\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto ugaowwakggeccsic;
        okyuswywywsaeias:
        return $ocogsiouoiuuguym;
        goto aeaqgqqqowqykgcc;
        yucmskwuguqgqimc:
        if (!$post) {
            goto cyamaucweckqmscc;
        }
        goto eeieegmqysegumei;
        usyyyguieaqqyswa:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto ousiqsmccumayaes;
        smsymmwykgkakeqk:
        $ocogsiouoiuuguym = DecoratorPost::kugamkssceycoyaq($saqmwwmqiwmkiwaa, false, $post);
        goto mgywqmgswkeyucaq;
        eeieegmqysegumei:
        if ($saqmwwmqiwmkiwaa) {
            goto gyuioyyowaiqcywy;
        }
        goto usyyyguieaqqyswa;
        ousiqsmccumayaes:
        gyuioyyowaiqcywy:
        goto smsymmwykgkakeqk;
        iiukckigywisaego:
        $ocogsiouoiuuguym = null;
        goto yucmskwuguqgqimc;
        ssiwoquqiiuysuma:
        $post = self::get($post);
        goto iiukckigywisaego;
        ugaowwakggeccsic:
        gcaaimgqweguwksg:
        goto agauowggkqsoyqiq;
        mgywqmgswkeyucaq:
        if (!$egkeamycaysqsoma) {
            goto gcaaimgqweguwksg;
        }
        goto mqkwmkuieegmucmg;
        agauowggkqsoyqiq:
        cyamaucweckqmscc:
        goto okyuswywywsaeias;
        aeaqgqqqowqykgcc:
    }
    
    public static function get($post = null, $aqykuigiuwmmcieu = self::OBJECT, $cwwowqyuwccuykom = false)
    {
        goto oieoyiowucgkouoq;
        wcuuyecsiamsaqqy:
        iycimwiaauksigiw:
        goto iimwiesgggauwcqk;
        mwuisiuasugcaywu:
        if ($post) {
            goto iycimwiaauksigiw;
        }
        goto asckqiuugiguuiwe;
        oieoyiowucgkouoq:
        if ($post instanceof WP_Post) {
            goto yuycmoyawueickya;
        }
        goto aiaiswgwmcguoues;
        gomiiockquaqsyuo:
        goto cyomqwmieugiasem;
        goto ciqqeouuygcaiiiq;
        ciqqeouuygcaiiiq:
        cccgemwsykwgemeg:
        goto qgyqamakooyqciyo;
        qgyqamakooyqciyo:
        $post = null;
        goto wioicqyeyqmsckwg;
        wioicqyeyqmsckwg:
        cyomqwmieugiasem:
        goto iiysucwqgweammss;
        iimwiesgggauwcqk:
        $post = DecoratorPost::get($post, $aqykuigiuwmmcieu);
        goto gomiiockquaqsyuo;
        aiaiswgwmcguoues:
        if (!$post && $cwwowqyuwccuykom) {
            goto cccgemwsykwgemeg;
        }
        goto mwuisiuasugcaywu;
        iiysucwqgweammss:
        yuycmoyawueickya:
        goto gaqccucuqyssqkmy;
        gaqccucuqyssqkmy:
        return $post;
        goto gioogyikawiiiyqq;
        asckqiuugiguuiwe:
        $post = ManipulateServer::get(self::POST);
        goto wcuuyecsiamsaqqy;
        gioogyikawiiiyqq:
    }
    
    public static function eqgwuukcqqayesqa($oysoyeaucuawyaky = [], $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST__IN => $oysoyeaucuawyaky, self::ORDERBY => self::POST__IN]);
        return self::ciugwooasaqcywas(self::mwoyqeeigwqoamiw(), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto gggayasokuomgeus;
        equokkeomguewmua:
        $migiiksoiymissge = $ccamueccusigaaio;
        goto cigaaqeauwccoiqa;
        wmsigkymceakwywo:
        woquimckgiecokuo:
        goto equokkeomguewmua;
        gsoskqieucsesaks:
        if ($post) {
            goto ucouymumcuosygii;
        }
        goto guoyescsqcuuymku;
        gggayasokuomgeus:
        $post = self::mwikyscisascoeea($ccamueccusigaaio, $cwwowqyuwccuykom);
        goto cqmkeyweesgwycgy;
        akuskaiiaswmksko:
        goto seggcuqcuiaegeya;
        goto wmsigkymceakwywo;
        yeuqcwawkauowkgu:
        ucouymumcuosygii:
        goto euuaeuyegkksasge;
        cqmkeyweesgwycgy:
        $migiiksoiymissge = '';
        goto gsoskqieucsesaks;
        qwkoeagysgskmuyq:
        return trailingslashit($migiiksoiymissge);
        goto mekmscssquqsgquc;
        euuaeuyegkksasge:
        $migiiksoiymissge = DecoratorPost::ycqquoiyyuesegsy($post, $eoocgqsqmwuegiae);
        goto akuskaiiaswmksko;
        emkqygwcsiyiykiw:
        goto seggcuqcuiaegeya;
        goto yeuqcwawkauowkgu;
        guoyescsqcuuymku:
        if (is_string($ccamueccusigaaio) && ManipulateValidation::wmcwegoisyeeosqu($ccamueccusigaaio)) {
            goto woquimckgiecokuo;
        }
        goto emkqygwcsiyiykiw;
        cigaaqeauwccoiqa:
        seggcuqcuiaegeya:
        goto qwkoeagysgskmuyq;
        mekmscssquqsgquc:
    }
    
    public static function uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii["\x70\x6f\163\x74\137\160\x61\x72\145\156\164"] = 0;
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function oukqamgqowciwoum($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        goto eskmkqowoyogaoko;
        sqecccyugmaiuwsq:
        seqwmeeoiicciigo:
        goto xocaameouysockim;
        iwmassqyauymkwaa:
        if ($saqmwwmqiwmkiwaa) {
            goto seqwmeeoiicciigo;
        }
        goto iccqsmwsmisaayam;
        cioomiusgwycykag:
        koiimcuoyakqsuam:
        goto aeesuccguagwomqw;
        sycecywsiomgcuiq:
        if (!$egkeamycaysqsoma) {
            goto gacasmwcscckymwc;
        }
        goto yaswwoqemsqmawse;
        hwiqmsqyyiscmeiu:
        if (!$post) {
            goto koiimcuoyakqsuam;
        }
        goto iwmassqyauymkwaa;
        yaswwoqemsqmawse:
        $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy("\147\145\x74\137\x74\x68\x65\x5f\155\x6f\144\x69\146\151\145\x64\x5f\x64\141\x74\x65", $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
        goto icwuocgiukckmyyu;
        icwuocgiukckmyyu:
        gacasmwcscckymwc:
        goto cioomiusgwycykag;
        aeesuccguagwomqw:
        return $ocogsiouoiuuguym;
        goto ogisaykaiaeuiika;
        xocaameouysockim:
        $ocogsiouoiuuguym = DecoratorPost::kkkiiqssauymiqsk($saqmwwmqiwmkiwaa, false, $post);
        goto sycecywsiomgcuiq;
        eskmkqowoyogaoko:
        $post = self::get($post);
        goto keygywkiwuoagqsw;
        keygywkiwuoagqsw:
        $ocogsiouoiuuguym = null;
        goto hwiqmsqyyiscmeiu;
        iccqsmwsmisaayam:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto sqecccyugmaiuwsq;
        ogisaykaiaeuiika:
    }
    
    public static function uqwgsuysegkweago($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES, $ccamueccusigaaio = "\142\x6f\x74\x68")
    {
        goto ueiqomqieicasmsi;
        seousiqwmmcaygac:
        $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw();
        goto ukqomyqaykkiygwu;
        wgcewuoaksusicyi:
        weyumyqgceqsimmq:
        goto oeqsgusqqgoioqwu;
        bgsaeeicmsikiwgm:
        mkiyekcyyukamwck:
        goto wmwkgawmkmciaeoi;
        cqoeiqeeukaiioia:
        if (!(is_admin() && $sciomagaqmgggsiu)) {
            goto guwikcacqsmwkyya;
        }
        goto qqecycksisecgwiw;
        okwgeicyaawqyoye:
        switch ($ccamueccusigaaio) {
            case "\x65\x64\151\164":
                $sogksuscggsicmac = in_array($pagenow, ["\160\157\x73\x74\x2e\160\150\x70"]);
                goto kwgwkkkaagkkesik;
            case "\156\145\x77":
                $sogksuscggsicmac = in_array($pagenow, ["\x70\157\x73\x74\55\x6e\145\167\56\x70\x68\x70"]);
                goto kwgwkkkaagkkesik;
            default:
                $sogksuscggsicmac = in_array($pagenow, ["\160\x6f\163\x74\x2e\x70\150\160", "\x70\x6f\x73\x74\55\x6e\145\x77\x2e\x70\150\x70"]);
        }
        goto wgcewuoaksusicyi;
        ueiqomqieicasmsi:
        $sogksuscggsicmac = false;
        goto domskgkmquiwwqcg;
        ueeowwusmsueouao:
        $useksmwkuswkwcqg = self::cwucesiiikgqsgui();
        goto uuauuoykcoseecuu;
        qqecycksisecgwiw:
        global $pagenow;
        goto ueeowwusmsueouao;
        domskgkmquiwwqcg:
        if ($sciomagaqmgggsiu) {
            goto vseyiyomcwkayoio;
        }
        goto seousiqwmmcaygac;
        uuauuoykcoseecuu:
        if (!(is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || $useksmwkuswkwcqg === $sciomagaqmgggsiu)) {
            goto mkiyekcyyukamwck;
        }
        goto okwgeicyaawqyoye;
        ukqomyqaykkiygwu:
        vseyiyomcwkayoio:
        goto cqoeiqeeukaiioia;
        wmwkgawmkmciaeoi:
        guwikcacqsmwkyya:
        goto ssqieyoogiwsyksk;
        ssqieyoogiwsyksk:
        return $sogksuscggsicmac;
        goto siceqsgwyswyguog;
        oeqsgusqqgoioqwu:
        kwgwkkkaagkkesik:
        goto bgsaeeicmsikiwgm;
        siceqsgwyswyguog:
    }
    
    public static function qgisekcaywsmigga(string $useksmwkuswkwcqg, string $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(["\x6d\145\164\141\137\x6b\145\x79" => $gwiwsycaaqgwmewg, "\x6d\145\164\141\x5f\x76\141\x6c\x75\145" => $aucgaecqisksougg, "\160\157\163\x74\x5f\x73\164\x61\164\165\x73" => "\x61\156\x79"], $ywmkwiwkosakssii);
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
}
