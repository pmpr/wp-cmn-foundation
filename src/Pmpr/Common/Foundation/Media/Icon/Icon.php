<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media\Icon;

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
    const IS_ICON = "\151\163\x5f\151\x63\x6f\x6e";
    const ICONS_PATH = "\x69\155\x67\57\163\x76\147\57\x69\143\157\x6e";
    
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
        $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\x75\143\161\x63\x79\x79\x69\x75\151\x77\x65\167\163\165\x67\153"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\151\143\x6f\156\137\150\x74\155\154\x5f\162\145\x6e\x64\x65\x72"), [$this, "\162\x65\156\x64\145\x72"], 10, 3);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x65\144\151\164\x5f\141\x74\x74\141\143\150\155\x65\x6e\164", [$this, "\143\x71\x6f\x77\165\x69\147\x6d\x77\x63\161\x71\143\x63\x75\x73"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\151\x63\x6f\x6e\x5f\163\166\147\62\142\141\163\x65\66\x34"), [$this, "\x6f\x61\x75\x65\x73\x61\x69\157\141\x79\x63\167\171\x79\x67\171"])->cecaguuoecmccuse("\145\163\143\x61\160\x65\144\x5f\151\143\157\156\x73\x5f\x64\x72\x6f\x70\x64\157\167\156", [$this, "\167\143\163\171\143\157\163\x6f\x6f\163\141\167\x63\x6d\143\165"], 10, 2)->cecaguuoecmccuse("\x61\x74\x74\141\x63\x68\155\x65\x6e\164\137\146\151\145\154\144\163\x5f\x74\157\137\145\x64\151\x74", [$this, "\x77\x75\167\x6f\x63\x61\x6f\x69\x69\x65\x69\167\x65\x79\x79\x6f"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\151\143\157\x6e\x5f\x68\164\x6d\x6c\x5f\x66\151\x6c\164\x65\162"), [$this, "\x77\x63\163\x69\167\153\143\x79\145\157\x6b\x61\x6d\x69\x6b\x65"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function kwagkemgawuoacwy($ywmkwiwkosakssii = [])
    {
        return ManipulatePost::qgisekcaywsmigga("\x61\x74\x74\x61\x63\x68\155\145\x6e\164", self::IS_ICON, 1, $ywmkwiwkosakssii);
    }
    
    public function umqsskakomkwuamy($aiooqyausygaasqm) : bool
    {
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\141\164\164\x61\x63\150\x6d\145\156\x74\137\151\x73\x5f\x73\166\147"), false, $aiooqyausygaasqm);
    }
    
    public function wcsycosoosawcmcu($ykiyyumywksqcisg, $gskuwmeemyeuwogc)
    {
        goto wqmokemugmgoomik;
        kmmyeqikyciayaoc:
        foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) {
            goto qcgowmuiwyiesuqq;
            syucweceooaayiqm:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($aiooqyausygaasqm);
            goto oeyikqyiqqqsiaog;
            oeyikqyiqqqsiaog:
            $wkaqekwwgqsqwcoi = ManipulateAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, "\x74\x77\x69\x74\164\145\162", ["\x63\x6c\141\x73\x73" => "\160\x72\55\x69\x63\x6f\156\x20\x69\143\157\x6e\55\x78\x73"], true);
            goto xiyuyqywsaaaeuuk;
            lwwuwssgsqccisgk:
            eywccamccqiwmygw:
            goto yumawusgeuasmweo;
            wyeoumiuesqiuuaa:
            yqcsakyqkiowyigs:
            goto lwwuwssgsqccisgk;
            qcgowmuiwyiesuqq:
            if (!$aiooqyausygaasqm instanceof WP_Post) {
                goto yqcsakyqkiowyigs;
            }
            goto syucweceooaayiqm;
            xiyuyqywsaaaeuuk:
            $ykiyyumywksqcisg[$aokagokqyuysuksm] = sprintf($gskuwmeemyeuwogc, ManipulatePost::qcgakseyaikigqco($aiooqyausygaasqm), $wkaqekwwgqsqwcoi);
            goto wyeoumiuesqiuuaa;
            yumawusgeuasmweo:
        }
        goto mogkgqmmcowsmsoc;
        bgoqumcuqmceeigi:
        return $ykiyyumywksqcisg;
        goto aisygkoacuuqeymm;
        wqmokemugmgoomik:
        $aieaqakyuyewkkwe = $this->kwagkemgawuoacwy();
        goto kmmyeqikyciayaoc;
        mogkgqmmcowsmsoc:
        ecsaymiksecmoomi:
        goto bgoqumcuqmceeigi;
        aisygkoacuuqeymm:
    }
    
    public function wuwocaoiieiweyyo($ikgwqyuyckaewsow, $post)
    {
        goto qgiokeecugwacuka;
        aqwccmsqgqgumymq:
        $ikgwqyuyckaewsow[self::IS_ICON] = ["\x6c\x61\142\145\x6c" => __("\x55\163\x65\x20\106\x6f\162\x20\111\x63\157\156", PR__THM__FOUNDATION), "\x69\156\160\165\x74" => "\150\164\x6d\154", "\x68\x74\x6d\x6c" => MetaBox::wcwmusaouiqaqeww(self::IS_ICON)->iygyugseyaqwywyg($amwuugigousqwmey ? $amwuugigousqwmey : "\157\x66\146")->render(), "\x68\145\154\x70\x73" => __("\103\150\x65\x63\153\x20\x69\146\x20\x79\157\x75\x20\x77\x61\156\164\x20\x73\150\157\167\x20\x74\150\151\163\40\141\x74\164\141\143\150\155\x65\156\x74\x20\151\156\x20\x69\x63\157\156\x20\x6c\151\163\x74\x2e", PR__CMN__FOUNDATION)];
        goto imeaooemieqcmgag;
        soeawcescakswowc:
        return $ikgwqyuyckaewsow;
        goto qmiseemyqgoaemmo;
        uscugymouummumyy:
        $amwuugigousqwmey = ManipulatePost::igawqaomowicuayw(self::IS_ICON, $post, true);
        goto aqwccmsqgqgumymq;
        imeaooemieqcmgag:
        qwaaukoseakigsgy:
        goto soeawcescakswowc;
        qgiokeecugwacuka:
        if (!$this->umqsskakomkwuamy($post)) {
            goto qwaaukoseakigsgy;
        }
        goto uscugymouummumyy;
        qmiseemyqgoaemmo:
    }
    
    public function render($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\164\x68\165\x6d\x62\156\x61\x69\154")
    {
        echo $this->wcsiwkcyeokamike($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $oiegiwogmwmawkeo);
    }
    
    public function cqowuigmwcqqccus($post)
    {
        goto cswuqoaewiyacqse;
        ykuwegiykkscuwsy:
        goto asugqqyocowiuecu;
        goto uecykquakwkkwwqe;
        yimwwgqgoykeoyss:
        ManipulatePost::smqukgcyacswysqa(self::IS_ICON, $post);
        goto ykuwegiykkscuwsy;
        uecykquakwkkwwqe:
        bgkoceiksggsqacw:
        goto wuqecuowsgggioiw;
        scuugaikcycgagqs:
        asugqqyocowiuecu:
        goto oysiqukyogokmmmm;
        oysiqukyogokmmmm:
        kcwygygoyasciaia:
        goto xkqkamoamikwyksk;
        sgeemcsaaywgusaq:
        if (!$this->umqsskakomkwuamy($post)) {
            goto kcwygygoyasciaia;
        }
        goto eieqmiiuoigqcqko;
        xkqkamoamikwyksk:
        return $post;
        goto skmcgcigmsyaguwq;
        wuqecuowsgggioiw:
        ManipulatePost::ksmqawcowkmegigw(self::IS_ICON, $amwuugigousqwmey, $post);
        goto scuugaikcycgagqs;
        gaewyowqcmmuwwyw:
        if ($amwuugigousqwmey === "\157\x6e") {
            goto bgkoceiksggsqacw;
        }
        goto yimwwgqgoykeoyss;
        cswuqoaewiyacqse:
        $post = ManipulatePost::mwikyscisascoeea($post);
        goto sgeemcsaaywgusaq;
        eieqmiiuoigqcqko:
        $amwuugigousqwmey = ManipulateServer::ayueggmoqeeukqmq(self::IS_ICON);
        goto gaewyowqcmmuwwyw;
        skmcgcigmsyaguwq:
    }
    
    public function wcsiwkcyeokamike($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = "\164\150\x75\155\x62\156\x61\x69\154") : string
    {
        goto kuysqaocycusiooc;
        eakcouagumsyocki:
        emscmyekmeyuwqwm:
        goto uqcuiuamymcyqiis;
        wkgikmeuqucgkywg:
        goto emscmyekmeyuwqwm;
        goto aowqwmeaismiiwca;
        kuysqaocycusiooc:
        $post = ManipulatePost::mwikyscisascoeea($wkaqekwwgqsqwcoi, true);
        goto kimegcsekgymucck;
        sucmuewciigceyei:
        $wwgucssaecqekuek = $this->sscegwueamckwmcy("\x77\160\x5f\147\x65\x74\x5f\141\164\x74\141\x63\150\155\x65\x6e\x74\x5f\151\155\x61\147\x65\137\x61\x74\x74\162\x69\142\165\x74\145\163", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi, $oiegiwogmwmawkeo);
        goto ceowmegksgcgwuug;
        kimegcsekgymucck:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\x73\163", "\160\162\55\151\143\157\x6e\x20\x69\143\157\156\x2d{$oiegiwogmwmawkeo}");
        goto omeckagooayaagig;
        aowqwmeaismiiwca:
        rogsumkasqmoigce:
        goto umgswqiiqagckcoa;
        omeckagooayaagig:
        if ($post) {
            goto rogsumkasqmoigce;
        }
        goto sucmuewciigceyei;
        uqcuiuamymcyqiis:
        return $nsmgceoqaqogqmuw;
        goto wswskaaocwgkamyc;
        ceowmegksgcgwuug:
        $nsmgceoqaqogqmuw = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto wkgikmeuqucgkywg;
        umgswqiiqagckcoa:
        $nsmgceoqaqogqmuw = ManipulateAttachment::qaeeusqkgwagwaqc($post, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
        goto eakcouagumsyocki;
        wswskaaocwgkamyc:
    }
    
    public function compress($waoisqguweoociwe)
    {
        goto eckcaeocwsesemcu;
        iegwsoeawuoiooiw:
        $waoisqguweoociwe = preg_replace("\57\x5c\x74\57", "\40", $waoisqguweoociwe);
        goto gigyoewaqgumsusc;
        gaemigskmucygamw:
        $waoisqguweoociwe = preg_replace("\57\134\156\x2f", "\40", $waoisqguweoociwe);
        goto iegwsoeawuoiooiw;
        giocswyqqaimkoki:
        $waoisqguweoociwe = preg_replace("\x2f\74\x67\x3e\x5b\134\156\134\162\134\163\x5d\x2a\74\x5c\x2f\147\76\57", '', $waoisqguweoociwe);
        goto gaemigskmucygamw;
        ouomswygcqoswiou:
        return $waoisqguweoociwe;
        goto eewqaciiuesekwgg;
        eckcaeocwsesemcu:
        $waoisqguweoociwe = preg_replace("\x2f\x3c\41\55\55\x2e\52\55\x2d\76\57", '', $waoisqguweoociwe);
        goto giocswyqqaimkoki;
        iwqmyeyaqsuqmsoe:
        $waoisqguweoociwe = str_replace("\x3e\40\x3c", "\76\x3c", $waoisqguweoociwe);
        goto wskswcqwsiamcmgk;
        gigyoewaqgumsusc:
        $waoisqguweoociwe = preg_replace("\x2f\134\163\x5c\x73\x2b\x2f", "\x20", $waoisqguweoociwe);
        goto iwqmyeyaqsuqmsoe;
        wskswcqwsiamcmgk:
        $waoisqguweoociwe = str_replace("\x3b\42", "\42", $waoisqguweoociwe);
        goto ouomswygcqoswiou;
        eewqaciiuesekwgg:
    }
    
    public function smemegymuqekcaui($ycskuuyucyuqisaq) : string
    {
        goto yyqckcwiwgegocsu;
        sqsykywuswmcsuys:
        $ciyackuwsqkoqese += 5;
        goto icsgwagqaioccsgg;
        kyqcykkugmceeoeo:
        $ciyackuwsqkoqese = 0;
        goto ecuicaaoiwckckqu;
        joukoqeseemqaiww:
        $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik);
        goto meqcckcokmqigmcs;
        oomsemgiwqioyoqy:
        $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3));
        goto yyesyssasgoyqaas;
        ecuicaaoiwckckqu:
        uikgsuwekyomyqea:
        goto ieoosusioiaaicgo;
        qmuawywgqcaqwoqg:
        owmywoiysicswqys:
        goto owigmucmmkisusqa;
        ukggwygocweoasce:
        goto uikgsuwekyomyqea;
        goto cksesgscmiccmigi;
        guwcsuucwigkukmu:
        return $wayeqowwwmqyscea;
        goto kygiwieeewgocwgs;
        wwqkoggocqusyqum:
        goto euysiqmgeyskkooq;
        goto oiekiiuowauqmceu;
        csquacyaqsgwkoui:
        iwoauisiuicommck:
        goto cyqkscsqmaaisquy;
        icsgwagqaioccsgg:
        goto wqsmcycoysssooew;
        goto qcqikccascwsikim;
        ugmqyekuwwuaoeya:
        goto wqsmcycoysssooew;
        goto csquacyaqsgwkoui;
        qcqikccascwsikim:
        uuaiuucquuomguyi:
        goto oomsemgiwqioyoqy;
        yyqckcwiwgegocsu:
        $wayeqowwwmqyscea = '';
        goto wuysmaasqoqeeauk;
        owkicamwkyumewim:
        euysiqmgeyskkooq:
        goto sqsykywuswmcsuys;
        gcoyyuwaycukiaey:
        $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto wwqkoggocqusyqum;
        wmmyckaiiwyokuuq:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\45") {
            goto uuaiuucquuomguyi;
        }
        goto msekqmawsimogskg;
        waiwusckekwoeasa:
        eowegcwycwiwkukk:
        goto eguiciymwgcukgcw;
        wuysmaasqoqeeauk:
        $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq);
        goto kyqcykkugmceeoeo;
        woumcuokuoeqyaaq:
        if ($uiymkeeaukcyqqik < 0x800) {
            goto owmywoiysicswqys;
        }
        goto gcoyyuwaycukiaey;
        ieoosusioiaaicgo:
        if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) {
            goto oeoagqkakyekmycs;
        }
        goto essygikwcggsgcec;
        wsqucoqquuoimgoi:
        wqsmcycoysssooew:
        goto waiwusckekwoeasa;
        cksesgscmiccmigi:
        oeoagqkakyekmycs:
        goto guwcsuucwigkukmu;
        yyesyssasgoyqaas:
        $ciyackuwsqkoqese += 2;
        goto wsqucoqquuoimgoi;
        uwuawieeaomscowi:
        if ($uiymkeeaukcyqqik < 0x7f) {
            goto geieogywagiqyaou;
        }
        goto woumcuokuoeqyaaq;
        cyqkscsqmaaisquy:
        $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4));
        goto uwuawieeaomscowi;
        meqcckcokmqigmcs:
        goto euysiqmgeyskkooq;
        goto qmuawywgqcaqwoqg;
        msekqmawsimogskg:
        $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese];
        goto ugmqyekuwwuaoeya;
        essygikwcggsgcec:
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == "\x25" && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == "\x75") {
            goto iwoauisiuicommck;
        }
        goto wmmyckaiiwyokuuq;
        owigmucmmkisusqa:
        $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
        goto owkicamwkyumewim;
        oiekiiuowauqmceu:
        geieogywagiqyaou:
        goto joukoqeseemqaiww;
        eguiciymwgcukgcw:
        $ciyackuwsqkoqese++;
        goto ukggwygocweoasce;
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
        return "\x64\141\164\x61\72\151\x6d\x61\x67\x65\x2f\163\x76\x67\53\170\155\154\73\142\x61\x73\x65\66\64\x2c{$owyiccmocukoumyy}";
        goto yoqmekyaqscyywgw;
        yoqmekyaqscyywgw:
    }
    public function ucqcyyiuiwewsugk()
    {
        goto momssmiweesyaiqm;
        ciwsqasmaysciuiq:
        $owuckwsseckgeweg = $this->guyeewccesqeokww($mkomwsiykqigmqca);
        goto eiweyioigakomama;
        gkuwksowwuqsosye:
        $gwgkqsyaesmocmsk = __DIR__ . "\57\x49\156\164\145\162\x66\141\143\x65\x73";
        goto mwmkykmeugewswss;
        momssmiweesyaiqm:
        if (!(!ManipulateAjax::mcgoysmkqsqooceq() && ManipulateSetting::esoowymaimwcuecq())) {
            goto yeuauqgwkmycsuss;
        }
        goto gauiaqeaegyowuyg;
        imsioswwqucagyiq:
        foreach ($owuckwsseckgeweg as $ymqmyyeuycgmigyo => $ykiyyumywksqcisg) {
            goto aqwiceqiawoaykoo;
            qkowogwggmgksqce:
            $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($gwgkqsyaesmocmsk, "{$oouysqigwayiqgkk}\x2e\160\150\160", $ewgwqamkygiqaawc);
            goto ksowgysucgksmeiu;
            aeuwgwcuycgqgmcm:
            ukwecsumaqaceoke:
            goto ewyccsuswogsksoq;
            wqiwicgmusisugqc:
            $ymqmyyeuycgmigyo = ManipulateString::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
            goto iigwkuykiykukwky;
            aqwiceqiawoaykoo:
            if (!(is_array($ykiyyumywksqcisg) && $ykiyyumywksqcisg)) {
                goto iewagmumgcysgkiw;
            }
            goto uwwsqewmquccsqkc;
            wkemaqyiomkkescs:
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
            goto wqiwicgmusisugqc;
            ksowgysucgksmeiu:
            iewagmumgcysgkiw:
            goto aeuwgwcuycgqgmcm;
            iigwkuykiykukwky:
            $aiieyweysaukqemc = str_replace("{$ymqmyyeuycgmigyo}\x5c", '', $egkyssmuqcwaciya) . "\134\111\x6e\x74\x65\x72\146\141\143\x65\163";
            goto ocmckmgisuwsyuwc;
            ocmckmgisuwsyuwc:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x69\x6e\x74\x65\162\x66\x61\x63\145\x2e\160\150\160", ["\156\141\155\145\163\160\141\143\145" => $aiieyweysaukqemc, "\151\156\x74\145\162\x66\141\x63\145" => $oouysqigwayiqgkk, "\151\143\157\156\x73" => $ykiyyumywksqcisg]);
            goto qkowogwggmgksqce;
            uwwsqewmquccsqkc:
            $oouysqigwayiqgkk = "\x49\143\157\156" . ucfirst($ymqmyyeuycgmigyo) . "\111\x6e\164\x65\x72\146\141\143\x65";
            goto wkemaqyiomkkescs;
            ewyccsuswogsksoq:
        }
        goto scwyoqesmseysyca;
        gauiaqeaegyowuyg:
        $mkomwsiykqigmqca = $this->ikeqsmumgwwuqmkw() . "\x2f\x61\x73\163\x65\x74\57" . self::ICONS_PATH;
        goto gkuwksowwuqsosye;
        eiweyioigakomama:
        if (!(is_array($owuckwsseckgeweg) && $owuckwsseckgeweg)) {
            goto waiqksgggkmmgkms;
        }
        goto imsioswwqucagyiq;
        owykgucmwkqsmcsg:
        yeuauqgwkmycsuss:
        goto ecgaykgwooyuawqk;
        ecaiosueicqamwwc:
        qiqsuscoooigcqiu:
        goto owykgucmwkqsmcsg;
        mwmkykmeugewswss:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto eiykgwsymemeaowg;
        scwyoqesmseysyca:
        uiicuwmmeceaccge:
        goto wgusqquuucyeigcw;
        wgusqquuucyeigcw:
        waiqksgggkmmgkms:
        goto ecaiosueicqamwwc;
        eiykgwsymemeaowg:
        if (!$iiaumsgauuyeqksw->uuegkqwagymmusiy($gwgkqsyaesmocmsk, 3)) {
            goto qiqsuscoooigcqiu;
        }
        goto ciwsqasmaysciuiq;
        ecgaykgwooyuawqk:
    }
    
    public function guyeewccesqeokww($mkomwsiykqigmqca, $yuwymayicwwqiske = null)
    {
        goto cgkemewmecusmuqy;
        skemsssgesqwqkyg:
        foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
            goto bsicsscqymyycqcs;
            yemwoomcwaoeyoag:
            usmwsquyeukawsmo:
            goto agumgemyuquqacsi;
            oiiwycewowouacmm:
            $mkomwsiykqigmqca = $qogsmwakwacwqogk->scikcaaaiwcsqowm();
            goto wmqgsukikoasweka;
            bsicsscqymyycqcs:
            if ($qogsmwakwacwqogk->qkuqsuugayciskek()) {
                goto sgiqkgawyeuymoks;
            }
            goto oiiwycewowouacmm;
            ycgikgowwaioqugw:
            $ykiyyumywksqcisg = array_merge($ykiyyumywksqcisg, $this->guyeewccesqeokww($mkomwsiykqigmqca, $ymqmyyeuycgmigyo));
            goto yemwoomcwaoeyoag;
            mkaquyqyuwcaeeqe:
            if ($qogsmwakwacwqogk->oagwcgcemwwykokc()) {
                goto yacqaemukikwauew;
            }
            goto zwukyqcioqysimss;
            miocyowiooqceoku:
            awwiymymcoewykws:
            goto ikioiaguwaqkmmyc;
            zwukyqcioqysimss:
            
            $ymqmyyeuycgmigyo = preg_replace("\x2f\134\56\x5b\136\56\x5c\x73\135\173\x33\x2c\x34\x7d\44\x2f", '', $ymqmyyeuycgmigyo);
            goto ggcmyqsqocygmqck;
            wmqgsukikoasweka:
            $ymqmyyeuycgmigyo = $qogsmwakwacwqogk->mawoacksgosuccme();
            goto mkaquyqyuwcaeeqe;
            kaoaegkkmmqwwcqg:
            goto usmwsquyeukawsmo;
            goto ceyuiecmmywyymqe;
            agumgemyuquqacsi:
            sgiqkgawyeuymoks:
            goto miocyowiooqceoku;
            ceyuiecmmywyymqe:
            yacqaemukikwauew:
            goto ycgikgowwaioqugw;
            ggcmyqsqocygmqck:
            $ykiyyumywksqcisg[$yuwymayicwwqiske][$ymqmyyeuycgmigyo] = "{$yuwymayicwwqiske}\x2f{$ymqmyyeuycgmigyo}";
            goto kaoaegkkmmqwwcqg;
            ikioiaguwaqkmmyc:
        }
        goto geuawgeawaosgskq;
        geuawgeawaosgskq:
        yagqeyemyasuakyq:
        goto ieccammaemyeuucg;
        cgkemewmecusmuqy:
        $ykiyyumywksqcisg = [];
        goto qkqkgkyyoogmisko;
        qkqkgkyyoogmisko:
        $ucasskoyoewwmmii = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca);
        goto skemsssgesqwqkyg;
        ieccammaemyeuucg:
        return $ykiyyumywksqcisg;
        goto oeisoogqeyacokug;
        oeisoogqeyacokug:
    }
}
