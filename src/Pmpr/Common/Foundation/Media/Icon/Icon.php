<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media\Icon;

use DirectoryIterator;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Common;
use WP_Post;

class Icon extends Common
{
    const IS_ICON = "\x69\163\x5f\151\x63\157\156";
    const ICONS_PATH = "\x69\x6d\x67\57\x73\166\147\x2f\151\143\157\156";
    
    protected ?string $root = null;
    
    public function ikeqsmumgwwuqmkw() : ?string
    {
        return $this->root;
    }
    
    public function __construct()
    {
        $this->root = self::cmewgsgomuwkkoou();
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\165\x63\x71\143\171\x79\x69\x75\151\x77\145\x77\x73\x75\147\153"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x69\143\x6f\x6e\137\x68\164\155\x6c\x5f\162\145\x6e\144\145\x72"), [$this, "\x72\145\156\x64\145\162"], 10, 3);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x65\144\151\x74\x5f\141\164\x74\x61\x63\x68\x6d\145\x6e\164", [$this, "\x63\161\157\x77\165\151\147\x6d\x77\x63\161\x71\x63\143\165\x73"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\151\143\157\156\x5f\x73\166\x67\x32\x62\x61\x73\145\x36\x34"), [$this, "\157\141\165\x65\x73\141\151\157\141\x79\143\x77\171\171\147\171"])->cecaguuoecmccuse("\145\x73\x63\x61\x70\x65\x64\137\x69\x63\157\156\163\137\x64\x72\157\x70\x64\157\x77\x6e", [$this, "\167\x63\x73\171\x63\x6f\163\x6f\x6f\x73\x61\167\143\x6d\143\x75"], 10, 2)->cecaguuoecmccuse("\x61\164\x74\x61\143\150\155\145\156\x74\x5f\x66\151\x65\154\144\x73\x5f\164\x6f\x5f\145\144\151\x74", [$this, "\x77\165\x77\157\x63\x61\157\151\151\145\151\167\x65\171\x79\x6f"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x69\143\x6f\x6e\x5f\x68\x74\x6d\154\137\x66\151\x6c\164\x65\x72"), [$this, "\x77\143\163\151\167\x6b\x63\x79\x65\157\153\141\x6d\151\153\x65"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function kwagkemgawuoacwy($ywmkwiwkosakssii = [])
    {
        return ManipulatePost::qgisekcaywsmigga("\141\164\164\141\143\x68\x6d\145\x6e\x74", self::IS_ICON, 1, $ywmkwiwkosakssii);
    }
    
    public function umqsskakomkwuamy($aiooqyausygaasqm) : bool
    {
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\141\164\x74\141\143\x68\155\145\x6e\x74\x5f\151\x73\x5f\x73\166\x67"), false, $aiooqyausygaasqm);
    }
    
    public function wcsycosoosawcmcu($ykiyyumywksqcisg, $gskuwmeemyeuwogc)
    {
        goto wqmokemugmgoomik;
        kmmyeqikyciayaoc:
        foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) {
            goto qcgowmuiwyiesuqq;
            lwwuwssgsqccisgk:
            eywccamccqiwmygw:
            goto yumawusgeuasmweo;
            syucweceooaayiqm:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($aiooqyausygaasqm);
            goto oeyikqyiqqqsiaog;
            xiyuyqywsaaaeuuk:
            $ykiyyumywksqcisg[$aokagokqyuysuksm] = sprintf($gskuwmeemyeuwogc, ManipulatePost::qcgakseyaikigqco($aiooqyausygaasqm), $wkaqekwwgqsqwcoi);
            goto wyeoumiuesqiuuaa;
            qcgowmuiwyiesuqq:
            if (!$aiooqyausygaasqm instanceof WP_Post) {
                goto yqcsakyqkiowyigs;
            }
            goto syucweceooaayiqm;
            oeyikqyiqqqsiaog:
            $wkaqekwwgqsqwcoi = ManipulateAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, "\164\x77\151\x74\164\145\162", ["\143\154\141\x73\x73" => "\x70\162\x2d\x69\143\157\156\40\151\143\x6f\156\x2d\170\163"], true);
            goto xiyuyqywsaaaeuuk;
            wyeoumiuesqiuuaa:
            yqcsakyqkiowyigs:
            goto lwwuwssgsqccisgk;
            yumawusgeuasmweo:
        }
        goto mogkgqmmcowsmsoc;
        wqmokemugmgoomik:
        $aieaqakyuyewkkwe = $this->kwagkemgawuoacwy();
        goto kmmyeqikyciayaoc;
        bgoqumcuqmceeigi:
        return $ykiyyumywksqcisg;
        goto aisygkoacuuqeymm;
        mogkgqmmcowsmsoc:
        ecsaymiksecmoomi:
        goto bgoqumcuqmceeigi;
        aisygkoacuuqeymm:
    }
    
    public function wuwocaoiieiweyyo($ikgwqyuyckaewsow, $post)
    {
        goto qgiokeecugwacuka;
        imeaooemieqcmgag:
        qwaaukoseakigsgy:
        goto soeawcescakswowc;
        aqwccmsqgqgumymq:
        $ikgwqyuyckaewsow[self::IS_ICON] = ["\154\141\142\145\154" => __("\x55\x73\x65\40\106\x6f\162\40\111\x63\157\x6e", PR__THM__FOUNDATION), "\151\x6e\160\165\x74" => "\x68\x74\x6d\154", "\x68\164\155\154" => MetaBox::wcwmusaouiqaqeww(self::IS_ICON)->iygyugseyaqwywyg($amwuugigousqwmey ? $amwuugigousqwmey : "\x6f\146\146")->render(), "\x68\x65\x6c\x70\163" => __("\x43\x68\x65\143\x6b\x20\x69\x66\x20\x79\x6f\165\40\x77\x61\156\x74\x20\163\150\157\167\x20\x74\150\151\x73\x20\141\x74\164\141\143\x68\x6d\x65\x6e\x74\x20\151\156\x20\x69\x63\x6f\x6e\x20\x6c\x69\x73\x74\56", PR__CMN__FOUNDATION)];
        goto imeaooemieqcmgag;
        qgiokeecugwacuka:
        if (!$this->umqsskakomkwuamy($post)) {
            goto qwaaukoseakigsgy;
        }
        goto uscugymouummumyy;
        soeawcescakswowc:
        return $ikgwqyuyckaewsow;
        goto qmiseemyqgoaemmo;
        uscugymouummumyy:
        $amwuugigousqwmey = ManipulatePost::igawqaomowicuayw(self::IS_ICON, $post, true);
        goto aqwccmsqgqgumymq;
        qmiseemyqgoaemmo:
    }
    
    public function render($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\x74\150\165\x6d\142\x6e\x61\151\154")
    {
        echo $this->wcsiwkcyeokamike($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $oiegiwogmwmawkeo);
    }
    
    public function cqowuigmwcqqccus($post)
    {
        goto cswuqoaewiyacqse;
        eieqmiiuoigqcqko:
        $amwuugigousqwmey = ManipulateServer::ayueggmoqeeukqmq(self::IS_ICON);
        goto gaewyowqcmmuwwyw;
        yimwwgqgoykeoyss:
        ManipulatePost::smqukgcyacswysqa(self::IS_ICON, $post);
        goto ykuwegiykkscuwsy;
        oysiqukyogokmmmm:
        kcwygygoyasciaia:
        goto xkqkamoamikwyksk;
        uecykquakwkkwwqe:
        bgkoceiksggsqacw:
        goto wuqecuowsgggioiw;
        xkqkamoamikwyksk:
        return $post;
        goto skmcgcigmsyaguwq;
        gaewyowqcmmuwwyw:
        if ($amwuugigousqwmey === "\x6f\156") {
            goto bgkoceiksggsqacw;
        }
        goto yimwwgqgoykeoyss;
        wuqecuowsgggioiw:
        ManipulatePost::ksmqawcowkmegigw(self::IS_ICON, $amwuugigousqwmey, $post);
        goto scuugaikcycgagqs;
        scuugaikcycgagqs:
        asugqqyocowiuecu:
        goto oysiqukyogokmmmm;
        sgeemcsaaywgusaq:
        if (!$this->umqsskakomkwuamy($post)) {
            goto kcwygygoyasciaia;
        }
        goto eieqmiiuoigqcqko;
        cswuqoaewiyacqse:
        $post = ManipulatePost::mwikyscisascoeea($post);
        goto sgeemcsaaywgusaq;
        ykuwegiykkscuwsy:
        goto asugqqyocowiuecu;
        goto uecykquakwkkwwqe;
        skmcgcigmsyaguwq:
    }
    
    public function wcsiwkcyeokamike($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\x74\x68\165\x6d\142\156\x61\151\154") : string
    {
        goto kuysqaocycusiooc;
        sucmuewciigceyei:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy("\x77\x70\137\147\145\164\137\141\x74\x74\141\x63\x68\155\x65\x6e\164\137\151\x6d\x61\x67\145\137\141\164\164\162\151\x62\x75\164\145\163", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi, $oiegiwogmwmawkeo);
        goto ceowmegksgcgwuug;
        umgswqiiqagckcoa:
        $nsmgceoqaqogqmuw = ManipulateAttachment::qaeeusqkgwagwaqc($post, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
        goto eakcouagumsyocki;
        kuysqaocycusiooc:
        $post = ManipulatePost::mwikyscisascoeea($wkaqekwwgqsqwcoi, true);
        goto kimegcsekgymucck;
        wkgikmeuqucgkywg:
        goto emscmyekmeyuwqwm;
        goto aowqwmeaismiiwca;
        omeckagooayaagig:
        if ($post) {
            goto rogsumkasqmoigce;
        }
        goto sucmuewciigceyei;
        ceowmegksgcgwuug:
        $nsmgceoqaqogqmuw = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto wkgikmeuqucgkywg;
        kimegcsekgymucck:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\163\x73", "\x70\162\55\151\143\x6f\x6e\40\x69\x63\157\156\x2d{$oiegiwogmwmawkeo}");
        goto omeckagooayaagig;
        uqcuiuamymcyqiis:
        return $nsmgceoqaqogqmuw;
        goto wswskaaocwgkamyc;
        aowqwmeaismiiwca:
        rogsumkasqmoigce:
        goto umgswqiiqagckcoa;
        eakcouagumsyocki:
        emscmyekmeyuwqwm:
        goto uqcuiuamymcyqiis;
        wswskaaocwgkamyc:
    }
    
    public function compress($waoisqguweoociwe)
    {
        goto eckcaeocwsesemcu;
        giocswyqqaimkoki:
        $waoisqguweoociwe = preg_replace("\57\74\x67\x3e\133\x5c\x6e\134\162\x5c\x73\x5d\x2a\x3c\x5c\57\x67\76\x2f", '', $waoisqguweoociwe);
        goto gaemigskmucygamw;
        iwqmyeyaqsuqmsoe:
        $waoisqguweoociwe = str_replace("\x3e\40\74", "\x3e\x3c", $waoisqguweoociwe);
        goto wskswcqwsiamcmgk;
        eckcaeocwsesemcu:
        $waoisqguweoociwe = preg_replace("\x2f\x3c\41\55\55\56\x2a\x2d\55\x3e\x2f", '', $waoisqguweoociwe);
        goto giocswyqqaimkoki;
        iegwsoeawuoiooiw:
        $waoisqguweoociwe = preg_replace("\x2f\134\x74\57", "\x20", $waoisqguweoociwe);
        goto gigyoewaqgumsusc;
        gaemigskmucygamw:
        $waoisqguweoociwe = preg_replace("\x2f\x5c\156\57", "\x20", $waoisqguweoociwe);
        goto iegwsoeawuoiooiw;
        gigyoewaqgumsusc:
        $waoisqguweoociwe = preg_replace("\x2f\x5c\163\x5c\163\53\57", "\x20", $waoisqguweoociwe);
        goto iwqmyeyaqsuqmsoe;
        ouomswygcqoswiou:
        return $waoisqguweoociwe;
        goto eewqaciiuesekwgg;
        wskswcqwsiamcmgk:
        $waoisqguweoociwe = str_replace("\x3b\42", "\42", $waoisqguweoociwe);
        goto ouomswygcqoswiou;
        eewqaciiuesekwgg:
    }
    
    public function smemegymuqekcaui($ycskuuyucyuqisaq) : string
    {
        goto yyqckcwiwgegocsu;
        essygikwcggsgcec:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") {
            goto iwoauisiuicommck;
        }
        goto wmmyckaiiwyokuuq;
        eguiciymwgcukgcw:
        $ciyackuwsqkoqese++;
        goto ukggwygocweoasce;
        meqcckcokmqigmcs:
        goto euysiqmgeyskkooq;
        goto qmuawywgqcaqwoqg;
        guwcsuucwigkukmu:
        return $wayeqowwwmqyscea;
        goto kygiwieeewgocwgs;
        oomsemgiwqioyoqy:
        $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3));
        goto yyesyssasgoyqaas;
        icsgwagqaioccsgg:
        goto wqsmcycoysssooew;
        goto qcqikccascwsikim;
        ecuicaaoiwckckqu:
        uikgsuwekyomyqea:
        goto ieoosusioiaaicgo;
        uwuawieeaomscowi:
        if ($uiymkeeaukcyqqik < 0x7f) {
            goto geieogywagiqyaou;
        }
        goto woumcuokuoeqyaaq;
        gcoyyuwaycukiaey:
        $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto wwqkoggocqusyqum;
        msekqmawsimogskg:
        $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese];
        goto ugmqyekuwwuaoeya;
        wuysmaasqoqeeauk:
        $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq);
        goto kyqcykkugmceeoeo;
        cksesgscmiccmigi:
        oeoagqkakyekmycs:
        goto guwcsuucwigkukmu;
        kyqcykkugmceeoeo:
        $ciyackuwsqkoqese = 0;
        goto ecuicaaoiwckckqu;
        wwqkoggocqusyqum:
        goto euysiqmgeyskkooq;
        goto oiekiiuowauqmceu;
        yyesyssasgoyqaas:
        $ciyackuwsqkoqese += 2;
        goto wsqucoqquuoimgoi;
        ieoosusioiaaicgo:
        if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) {
            goto oeoagqkakyekmycs;
        }
        goto essygikwcggsgcec;
        woumcuokuoeqyaaq:
        if ($uiymkeeaukcyqqik < 0x800) {
            goto owmywoiysicswqys;
        }
        goto gcoyyuwaycukiaey;
        ugmqyekuwwuaoeya:
        goto wqsmcycoysssooew;
        goto csquacyaqsgwkoui;
        csquacyaqsgwkoui:
        iwoauisiuicommck:
        goto cyqkscsqmaaisquy;
        yyqckcwiwgegocsu:
        $wayeqowwwmqyscea = '';
        goto wuysmaasqoqeeauk;
        wsqucoqquuoimgoi:
        wqsmcycoysssooew:
        goto waiwusckekwoeasa;
        joukoqeseemqaiww:
        $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik);
        goto meqcckcokmqigmcs;
        qmuawywgqcaqwoqg:
        owmywoiysicswqys:
        goto owigmucmmkisusqa;
        owigmucmmkisusqa:
        $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto owkicamwkyumewim;
        sqsykywuswmcsuys:
        $ciyackuwsqkoqese += 5;
        goto icsgwagqaioccsgg;
        cyqkscsqmaaisquy:
        $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4));
        goto uwuawieeaomscowi;
        ukggwygocweoasce:
        goto uikgsuwekyomyqea;
        goto cksesgscmiccmigi;
        wmmyckaiiwyokuuq:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25") {
            goto uuaiuucquuomguyi;
        }
        goto msekqmawsimogskg;
        oiekiiuowauqmceu:
        geieogywagiqyaou:
        goto joukoqeseemqaiww;
        waiwusckekwoeasa:
        eowegcwycwiwkukk:
        goto eguiciymwgcukgcw;
        owkicamwkyumewim:
        euysiqmgeyskkooq:
        goto sqsykywuswmcsuys;
        qcqikccascwsikim:
        uuaiuucquuomguyi:
        goto oomsemgiwqioyoqy;
        kygiwieeewgocwgs:
    }
    
    public function oauesaioaycwyygy($waoisqguweoociwe) : string
    {
        goto uawqiywkcgeowkye;
        uawqiywkcgeowkye:
        $waoisqguweoociwe = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($waoisqguweoociwe, true);
        goto igesyssomuuqqoky;
        igesyssomuuqqoky:
        $owyiccmocukoumyy = base64_encode($this->smemegymuqekcaui(rawurlencode($waoisqguweoociwe)));
        goto yimsysqkmmuaskge;
        yimsysqkmmuaskge:
        return "\144\x61\x74\141\x3a\x69\x6d\x61\147\x65\57\163\x76\147\53\170\x6d\x6c\x3b\142\141\x73\145\66\x34\54{$owyiccmocukoumyy}";
        goto yoqmekyaqscyywgw;
        yoqmekyaqscyywgw:
    }
    public function ucqcyyiuiwewsugk()
    {
        goto momssmiweesyaiqm;
        wgusqquuucyeigcw:
        waiqksgggkmmgkms:
        goto ecaiosueicqamwwc;
        scwyoqesmseysyca:
        uiicuwmmeceaccge:
        goto wgusqquuucyeigcw;
        owykgucmwkqsmcsg:
        yeuauqgwkmycsuss:
        goto ecgaykgwooyuawqk;
        mwmkykmeugewswss:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto eiykgwsymemeaowg;
        ciwsqasmaysciuiq:
        $owuckwsseckgeweg = $this->guyeewccesqeokww($mkomwsiykqigmqca);
        goto eiweyioigakomama;
        ecaiosueicqamwwc:
        qiqsuscoooigcqiu:
        goto owykgucmwkqsmcsg;
        eiykgwsymemeaowg:
        if (!$iiaumsgauuyeqksw->uuegkqwagymmusiy($gwgkqsyaesmocmsk, 3)) {
            goto qiqsuscoooigcqiu;
        }
        goto ciwsqasmaysciuiq;
        gkuwksowwuqsosye:
        $gwgkqsyaesmocmsk = __DIR__ . "\57\x49\156\x74\x65\162\x66\x61\143\145\163";
        goto mwmkykmeugewswss;
        imsioswwqucagyiq:
        foreach ($owuckwsseckgeweg as $ymqmyyeuycgmigyo => $ykiyyumywksqcisg) {
            goto aqwiceqiawoaykoo;
            qkowogwggmgksqce:
            $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($gwgkqsyaesmocmsk, "{$oouysqigwayiqgkk}\56\160\x68\x70", $ewgwqamkygiqaawc);
            goto ksowgysucgksmeiu;
            ocmckmgisuwsyuwc:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\151\156\164\145\x72\x66\141\143\145\x2e\x70\x68\x70", ["\156\x61\x6d\x65\x73\x70\x61\x63\x65" => $aiieyweysaukqemc, "\x69\x6e\x74\145\x72\146\x61\x63\x65" => $oouysqigwayiqgkk, "\x69\x63\157\x6e\x73" => $ykiyyumywksqcisg]);
            goto qkowogwggmgksqce;
            ksowgysucgksmeiu:
            iewagmumgcysgkiw:
            goto aeuwgwcuycgqgmcm;
            aqwiceqiawoaykoo:
            if (!(is_array($ykiyyumywksqcisg) && $ykiyyumywksqcisg)) {
                goto iewagmumgcysgkiw;
            }
            goto uwwsqewmquccsqkc;
            iigwkuykiykukwky:
            $aiieyweysaukqemc = str_replace("{$ymqmyyeuycgmigyo}\x5c", '', $egkyssmuqcwaciya) . "\x5c\111\x6e\x74\145\x72\146\x61\x63\x65\x73";
            goto ocmckmgisuwsyuwc;
            uwwsqewmquccsqkc:
            $oouysqigwayiqgkk = "\111\x63\157\x6e" . ucfirst($ymqmyyeuycgmigyo) . "\111\156\164\x65\x72\146\x61\x63\145";
            goto wkemaqyiomkkescs;
            aeuwgwcuycgqgmcm:
            ukwecsumaqaceoke:
            goto ewyccsuswogsksoq;
            wqiwicgmusisugqc:
            $ymqmyyeuycgmigyo = ManipulateString::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
            goto iigwkuykiykukwky;
            wkemaqyiomkkescs:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto wqiwicgmusisugqc;
            ewyccsuswogsksoq:
        }
        goto scwyoqesmseysyca;
        eiweyioigakomama:
        if (!(is_array($owuckwsseckgeweg) && $owuckwsseckgeweg)) {
            goto waiqksgggkmmgkms;
        }
        goto imsioswwqucagyiq;
        gauiaqeaegyowuyg:
        $mkomwsiykqigmqca = $this->ikeqsmumgwwuqmkw() . "\x2f\x61\x73\x73\x65\164\x2f" . self::ICONS_PATH;
        goto gkuwksowwuqsosye;
        momssmiweesyaiqm:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ManipulateSetting::esoowymaimwcuecq())) {
            goto yeuauqgwkmycsuss;
        }
        goto gauiaqeaegyowuyg;
        ecgaykgwooyuawqk:
    }
    
    public function guyeewccesqeokww($mkomwsiykqigmqca, $yuwymayicwwqiske = null) : array
    {
        goto cgkemewmecusmuqy;
        ieccammaemyeuucg:
        return $ykiyyumywksqcisg;
        goto oeisoogqeyacokug;
        skemsssgesqwqkyg:
        foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
            goto bsicsscqymyycqcs;
            yemwoomcwaoeyoag:
            usmwsquyeukawsmo:
            goto agumgemyuquqacsi;
            miocyowiooqceoku:
            awwiymymcoewykws:
            goto ikioiaguwaqkmmyc;
            mkaquyqyuwcaeeqe:
            if (ManipulateFile::oagwcgcemwwykokc($qogsmwakwacwqogk)) {
                goto yacqaemukikwauew;
            }
            goto zwukyqcioqysimss;
            ceyuiecmmywyymqe:
            yacqaemukikwauew:
            goto ycgikgowwaioqugw;
            kaoaegkkmmqwwcqg:
            goto usmwsquyeukawsmo;
            goto ceyuiecmmywyymqe;
            agumgemyuquqacsi:
            sgiqkgawyeuymoks:
            goto miocyowiooqceoku;
            ycgikgowwaioqugw:
            $ykiyyumywksqcisg = array_merge($ykiyyumywksqcisg, $this->guyeewccesqeokww($mkomwsiykqigmqca, $ymqmyyeuycgmigyo));
            goto yemwoomcwaoeyoag;
            ggcmyqsqocygmqck:
            $ykiyyumywksqcisg[$yuwymayicwwqiske][$ymqmyyeuycgmigyo] = "{$yuwymayicwwqiske}\57{$ymqmyyeuycgmigyo}";
            goto kaoaegkkmmqwwcqg;
            oiiwycewowouacmm:
            $mkomwsiykqigmqca = ManipulateFile::scikcaaaiwcsqowm($qogsmwakwacwqogk);
            goto wmqgsukikoasweka;
            zwukyqcioqysimss:
            
            $ymqmyyeuycgmigyo = preg_replace("\x2f\134\56\133\x5e\x2e\x5c\163\135\x7b\x33\x2c\x34\x7d\x24\x2f", '', $ymqmyyeuycgmigyo);
            goto ggcmyqsqocygmqck;
            bsicsscqymyycqcs:
            if (!($qogsmwakwacwqogk instanceof DirectoryIterator && !ManipulateFile::qkuqsuugayciskek($qogsmwakwacwqogk))) {
                goto sgiqkgawyeuymoks;
            }
            goto oiiwycewowouacmm;
            wmqgsukikoasweka:
            $ymqmyyeuycgmigyo = ManipulateFile::mawoacksgosuccme($qogsmwakwacwqogk);
            goto mkaquyqyuwcaeeqe;
            ikioiaguwaqkmmyc:
        }
        goto geuawgeawaosgskq;
        cgkemewmecusmuqy:
        $ykiyyumywksqcisg = [];
        goto qkqkgkyyoogmisko;
        geuawgeawaosgskq:
        yagqeyemyasuakyq:
        goto ieccammaemyeuucg;
        qkqkgkyyoogmisko:
        $ucasskoyoewwmmii = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca);
        goto skemsssgesqwqkyg;
        oeisoogqeyacokug:
    }
}
