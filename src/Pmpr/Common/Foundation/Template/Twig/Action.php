<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Decorator\DecoratorWidget;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\ManipulateWidget;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateTemplate;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\WPSetting;
use WP_Post;
use WP_Term;

class Action extends Callback
{
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\164\167\151\147\137\162\x65\156\144\x65\162\137\x66\x69\154\145\x6e\x61\x6d\145"), [$this, "\157\x6f\161\x65\x6b\155\x67\163\x71\x6f\x6d\163\141\153\x69\x6f"]);
        parent::kgquecmsgcouyaya();
    }
    public function aqiicausqkomqkqy()
    {
        goto igyikaemwiwqyeqq;
        gsaiaaeooukaeygk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x65\143\150\x6f", function ($sociqikgoyemqaac) {
            echo $sociqikgoyemqaac;
        });
        goto kokqmecseosgceak;
        aumygwwssywsogem:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x75\156\151\x71\x69\x64", function () {
            return uniqid();
        });
        goto gsaiaaeooukaeygk;
        igyikaemwiwqyeqq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\145\x78\164\162\141\143\164", function (&$mgkceomocowocqyo, $uomewyckeuqoqocu) {
            foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
                $mgkceomocowocqyo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
                suaiaeakuwkeaggc:
            }
            caqisoicuegsemyy:
        }, ["\x6e\x65\x65\x64\x73\137\143\157\x6e\x74\x65\x78\164" => true]);
        goto uwkuaykqqqkwgcey;
        ceyyuykckoayuosu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x61\154\154\137\x75\163\x65\x72\137\146\165\156\143", function ($akemggqscawwikim, ...$qookweymeqawmcwo) {
            return call_user_func($akemggqscawwikim, ...$qookweymeqawmcwo);
        });
        goto aumygwwssywsogem;
        kokqmecseosgceak:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\156\165\x6d\x62\145\162", function ($eqgoocgaqwqcimie) {
            return is_numeric($eqgoocgaqwqcimie);
        });
        goto swmkwwkoguyyoogq;
        uwkuaykqqqkwgcey:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x62\141\x73\x65\156\x61\x6d\145", function ($mkomwsiykqigmqca) {
            return basename($mkomwsiykqigmqca);
        });
        goto ceyyuykckoayuosu;
        swmkwwkoguyyoogq:
    }
    public function sqmuqsscmimwqoki()
    {
        goto aumiwewkmkcyqsic;
        ieaumiwogamciyeq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\164\150\x65\x5f\143\157\x6e\164\x65\x6e\164", function ($post) {
            return ManipulatePost::souwykwwmyygqyqi($post);
        });
        goto wycaemkqgqoqamga;
        yoikmmqgsuecwqse:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\164\150\x65\x5f\144\x61\x74\145", function ($saqmwwmqiwmkiwaa = '', $post = null) {
            return ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post);
        });
        goto emwgmewoyckawiaa;
        uwcgosckamuosimw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\137\x69\x64", function ($mksyucucyswaukig) {
            goto mkcqgkuwwkekeyea;
            iyyoksuqkyayycyo:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($mksyucucyswaukig);
            goto qyauskeceyuommay;
            mkcqgkuwwkekeyea:
            $aokagokqyuysuksm = '';
            goto ymuwkueqksmiucek;
            egkscycmsoysyukk:
            ugkuauswwusmgeak:
            goto cwogqueiqawomkuc;
            cwogqueiqawomkuc:
            goto qsiiueeogkusyayq;
            goto waekkoqkywowucqm;
            waekkoqkywowucqm:
            mkuuaucmumoqmogc:
            goto iyyoksuqkyayycyo;
            askmmowgaoaeucmg:
            if ($mksyucucyswaukig instanceof WP_Term) {
                goto mkuuaucmumoqmogc;
            }
            goto mcamcymgukiawmca;
            gquwcimccausouey:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($mksyucucyswaukig);
            goto kwocuyyugaqsicqy;
            caeuciiioaqyuyug:
            $aokagokqyuysuksm = $mksyucucyswaukig;
            goto egkscycmsoysyukk;
            kwocuyyugaqsicqy:
            wecwoieqkcmgyemy:
            goto ckcsasciyamuyeak;
            ckcsasciyamuyeak:
            return $aokagokqyuysuksm;
            goto rayeowssukccumsa;
            mcamcymgukiawmca:
            if (!is_numeric($mksyucucyswaukig)) {
                goto ugkuauswwusmgeak;
            }
            goto caeuciiioaqyuyug;
            qyauskeceyuommay:
            qsiiueeogkusyayq:
            goto skuiqymemkkmcasa;
            ymuwkueqksmiucek:
            if ($mksyucucyswaukig instanceof WP_Post) {
                goto aoquaueqscawcquu;
            }
            goto askmmowgaoaeucmg;
            mgqoggoasugsqoqm:
            aoquaueqscawcquu:
            goto gquwcimccausouey;
            skuiqymemkkmcasa:
            goto wecwoieqkcmgyemy;
            goto mgqoggoasugsqoqm;
            rayeowssukccumsa:
        });
        goto quycsusswssyiqek;
        ycuksimueyoeugmi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x70\x6f\x73\164\137\x63\x6c\x61\163\163", function ($egkyssmuqcwaciya, $post = null) {
            post_class($egkyssmuqcwaciya, $post);
        });
        goto iayqwwsmsuwaykyw;
        cmogamoiwugoaaoo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\x74\150\145\137\x70\x6f\163\x74\137\164\150\x75\155\x62\156\x61\151\154\x5f\x75\x72\x6c", function ($post, $oiegiwogmwmawkeo = "\160\157\x73\x74\55\x74\x68\165\155\x62\x6e\141\x69\x6c") {
            return ManipulatePost::uamasysiccecccmw($oiegiwogmwmawkeo, $post);
        });
        goto ycuksimueyoeugmi;
        kycuyyawyykwayum:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\x5f\x61\164\x74\x61\143\x68\x6d\x65\156\x74", function ($post = null) {
            return ManipulateAttachment::aauyuieeeaakygki($post);
        });
        goto qayscesoyiskoeko;
        qayscesoyiskoeko:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\x5f\x70\141\147\x65", function ($suaemuyiacqyugsm = null) {
            return is_page($suaemuyiacqyugsm);
        });
        goto ymaiyayeueqekkqu;
        aumiwewkmkcyqsic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\x5f\147\145\x74\x5f\x61\164\x74\x61\x63\150\x6d\145\x6e\x74\x5f\x75\162\x6c", function ($qssimkkaqkwceqqs) {
            return DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
        });
        goto ukwaqucywiqsqcmw;
        iksqmycekaokseuk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\x70\157\x73\164", function ($post = null) {
            return ManipulatePost::get($post);
        });
        goto yoikmmqgsuecwqse;
        gsscqquysycuswow:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\x5f\164\151\164\x6c\x65", function ($mksyucucyswaukig) {
            return ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig);
        });
        goto uwcgosckamuosimw;
        meacamomoigoocks:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\x61\x73\x5f\160\157\163\x74\137\164\x68\x75\x6d\142\x6e\141\x69\x6c", function ($post) {
            return DecoratorPost::oaqimsyggeyyceig($post);
        });
        goto wmgmwseuygieasiq;
        kmgimueiaqoamoiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\x70\x6f\163\x74\x5f\x74\x79\x70\x65\137\157\142\152\145\x63\164", function ($post) {
            return ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post));
        });
        goto uyesmwqkkaeqyqsw;
        wycaemkqgqoqamga:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x74\x68\x65\137\x63\157\x6e\x74\x65\x6e\164", function ($yauwwygqkmsmamik = '', $ecckicuukiesgaig = false) {
            return the_content($yauwwygqkmsmamik, $ecckicuukiesgaig);
        });
        goto osuwwuwykkyioics;
        waqwicwqkgsgaosm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\x5f\147\x65\x74\137\x61\x74\164\141\143\150\155\x65\156\x74\x5f\x69\155\x61\x67\x65\137\165\162\154", function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = '') {
            goto iuaauoycciukeqaw;
            iuaauoycciukeqaw:
            if ($oiegiwogmwmawkeo) {
                goto oggqgmiqwuceekqm;
            }
            goto amegcwiaikcwyuws;
            soooekmauiwsaemc:
            return $eeamcawaiqocomwy;
            goto msokmumgqigwgwwc;
            amegcwiaikcwyuws:
            $eeamcawaiqocomwy = DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
            goto emcskqgacoswgmog;
            guouwiieuysyiewm:
            oggqgmiqwuceekqm:
            goto ycsgumakqqweigca;
            emcskqgacoswgmog:
            goto iiyuccyiiyoguicm;
            goto guouwiieuysyiewm;
            uismokoooeicygyy:
            iiyuccyiiyoguicm:
            goto soooekmauiwsaemc;
            ycsgumakqqweigca:
            $eeamcawaiqocomwy = DecoratorAttachment::iaykyouimqoikagg($qssimkkaqkwceqqs, $oiegiwogmwmawkeo);
            goto uismokoooeicygyy;
            msokmumgqigwgwwc:
        });
        goto kmgimueiaqoamoiq;
        yygiyieeyuuqucke:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\160\141\147\x69\156\x61\164\x69\x6f\156\137\154\x69\155\151\164", function () {
            return ManipulateSetting::omkaowmygoqwsywq();
        });
        goto ksaoceiosgkgkeua;
        ouiwcwgymiycmesy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\150\145\x5f\x74\x69\x74\x6c\145", function () {
            return the_title();
        });
        goto yamoqmeywqamiyee;
        quycsusswssyiqek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x74\x68\x65\x5f\160\157\x73\164\x5f\x74\x68\165\155\x62\x6e\x61\151\x6c", function ($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee = []) {
            return DecoratorPost::smwweookeqkiiygs($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        goto cmogamoiwugoaaoo;
        aimoueqqomiogmwe:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\x69\x6d\x61\x67\x65", function ($post = null) {
            return ManipulateAttachment::qecqsmowoqmwgagu($post);
        });
        goto osgggiswqmmcauic;
        yumwmakewcuceeeq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\137\x63\141\x74\145\x67\157\x72\x79\137\154\151\x6e\x6b", function ($guwumyyyakswawas) {
            return get_category_link($guwumyyyakswawas);
        });
        goto iksqmycekaokseuk;
        ukwaqucywiqsqcmw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\160\x6f\163\x74\x5f\155\x65\164\141", function ($uusmaiomayssaecw, $post, $cuyooiakswegosog = true) {
            return ManipulatePost::igawqaomowicuayw($uusmaiomayssaecw, $post, $cuyooiakswegosog);
        });
        goto waqwicwqkgsgaosm;
        woimcikoqmikiiuo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\x70\x65\162\x6d\x61\x6c\x69\x6e\x6b", function ($post, $cwwowqyuwccuykom = false) {
            return ManipulatePost::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom);
        });
        goto yygiyieeyuuqucke;
        osgggiswqmmcauic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\137\x70\x6f\x73\x74", function ($post = null, $cwwowqyuwccuykom = false) {
            return ManipulatePost::get($post, self::OBJECT, $cwwowqyuwccuykom) instanceof WP_Post;
        });
        goto kycuyyawyykwayum;
        osuwwuwykkyioics:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\137\143\165\163\x74\x6f\x6d\x5f\160\x6f\x73\164\x5f\x74\x79\x70\145\x5f\163\x69\x6e\147\x6c\145", function () {
            return is_singular(ManipulatePost::mwoyqeeigwqoamiw());
        });
        goto aimoueqqomiogmwe;
        ymaiyayeueqekkqu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x70\x6f\163\164\x5f\163\164\141\164\x75\x73", function ($post = null) {
            return get_post_status($post);
        });
        goto yumwmakewcuceeeq;
        ksaoceiosgkgkeua:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\141\x76\x65\x5f\x70\x6f\x73\x74\x73", function () {
            return ManipulatePost::ekwkywuguceaogsk();
        });
        goto wesmogqcyeemwqaq;
        wesmogqcyeemwqaq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\150\x65\137\x70\157\x73\x74", "\164\150\145\137\x70\157\x73\x74");
        goto ieaumiwogamciyeq;
        eisoouawyymkasou:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x65\x64\x69\x74\137\154\x69\156\x6b", function ($mksyucucyswaukig) {
            goto mkuwumgwoyasswam;
            cmqcmgwesykwwosy:
            $iwywmkygwewiamwm = ManipulateTerm::yyykkcyiksewsoqy($mksyucucyswaukig);
            goto ygqwqqiowseokqyy;
            mkuwumgwoyasswam:
            $iwywmkygwewiamwm = "\43";
            goto mrocimywqwigwumc;
            skaswwgougcyyewo:
            return $iwywmkygwewiamwm;
            goto gqyooycgsagyyeia;
            mrocimywqwigwumc:
            if ($mksyucucyswaukig instanceof WP_Post) {
                goto ioymoeauqmugekqw;
            }
            goto eeuyyauaomyugqso;
            eeuyyauaomyugqso:
            if (!$mksyucucyswaukig instanceof WP_Term) {
                goto acaseyakoigmukmc;
            }
            goto cmqcmgwesykwwosy;
            cckaqseuwsokgqky:
            goto oesewmcmiyceckae;
            goto aakueiomkcyiiows;
            iauiowaaqsooooco:
            $iwywmkygwewiamwm = DecoratorPost::yyykkcyiksewsoqy($mksyucucyswaukig);
            goto cwsmkieawokgkqso;
            cwsmkieawokgkqso:
            oesewmcmiyceckae:
            goto skaswwgougcyyewo;
            aakueiomkcyiiows:
            ioymoeauqmugekqw:
            goto iauiowaaqsooooco;
            ygqwqqiowseokqyy:
            acaseyakoigmukmc:
            goto cckaqseuwsokgqky;
            gqyooycgsagyyeia:
        });
        goto gsscqquysycuswow;
        uyesmwqkkaeqyqsw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\160\157\163\164\137\164\171\x70\x65", function ($post) {
            return ManipulatePost::gueasuouwqysmomu($post);
        });
        goto meacamomoigoocks;
        emwgmewoyckawiaa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\x74\x68\x65\x5f\164\151\x74\x6c\145", function ($post = 0) {
            return ManipulatePost::qcgakseyaikigqco($post);
        });
        goto ouiwcwgymiycmesy;
        wmgmwseuygieasiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x68\141\x73\x5f\145\x78\143\x65\x72\160\164", function ($post) {
            return DecoratorPost::seewsasmyoyciiee($post);
        });
        goto woimcikoqmikiiuo;
        yamoqmeywqamiyee:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\x5f\x74\x68\145\x5f\145\x78\143\x65\x72\x70\164", function ($post = null) {
            return ManipulatePost::masoymaamekuykso($post);
        });
        goto eisoouawyymkasou;
        iayqwwsmsuwaykyw:
    }
    public function ugugagoguiycqeys()
    {
        goto osksqmgkikamgaui;
        kakwaaemoyyusiek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\x69\x63\157\156", function ($wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false) {
            return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        });
        goto usqgeieewckcwumm;
        qyggcimqgyscmcci:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\137\x74\x65\155\160\154\141\164\145", [$this, "\x79\x69\x79\161\145\x63\x61\167\151\x6f\171\157\x73\157\141\x77"]);
        goto mwsogcaisqkoyoyo;
        ocwegqcikuwygcos:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x72\145\141\x74\x65", function ($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $muiegiugiocacqkm = true, $ewgwqamkygiqaawc = '') {
            return ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc);
        });
        goto qmesaeogykqacemy;
        qmesaeogykqacemy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\141\156\137\x6c\x61\172\x79\x5f\154\x6f\141\144", function () {
            return $this->sscegwueamckwmcy("\x63\x61\x6e\x5f\154\x61\x7a\x79\x5f\154\x6f\x61\x64", true);
        });
        goto cycukssoyewuiyyw;
        cycukssoyewuiyyw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\141\x72\x64\x5f\142\157\x74\164\x6f\155\137\155\x61\x72\x67\151\156", function ($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg = 6) {
            $giwamsoicooomueg = ManipulateHTML::sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg);
            return $giwamsoicooomueg;
        });
        goto oaogeakeuqgouywe;
        oaogeakeuqgouywe:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\x70\137\x73\x65\x74\x74\151\156\x67", function ($uusmaiomayssaecw, $ggauoeuaesiymgee = false) {
            return WPSetting::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        });
        goto igcusescocaiyqki;
        wagqsecuquyukiwc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\165\156\x73\145\x74", function ($uomewyckeuqoqocu, $uusmaiomayssaecw) {
            ManipulateArray::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            return $uomewyckeuqoqocu;
        });
        goto ziqysygmaasemyem;
        usqgeieewckcwumm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\x73\x70\x69\x6e\x6e\145\162", function ($ywmkwiwkosakssii = []) {
            return ManipulateHTML::kqmkicmuscsgqeoi($ywmkwiwkosakssii);
        });
        goto qyggcimqgyscmcci;
        igcusescocaiyqki:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\137\x75\x72\x6c", function ($eeamcawaiqocomwy) {
            return ManipulateValidation::wmcwegoisyeeosqu($eeamcawaiqocomwy);
        });
        goto kakwaaemoyyusiek;
        osksqmgkikamgaui:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\141\x6e\x5f\163\150\x6f\167\x5f\157\x6e\137\147\162\x69\144", function ($momcykaoccoymeig = 1, $ywmkwiwkosakssii = []) {
            goto aweayueuaeoasyms;
            moeqauuausuqygiq:
            return rtrim($aqykuigiuwmmcieu);
            goto kmmwmccqeuasieoy;
            yoosmuokogseueas:
            qkueegaowuyiimgw:
            goto moeqauuausuqygiq;
            ygywqwksoumccysq:
            $uasyiiacieyekiia = ["\x78\163", "\x73\x6d", "\155\144", "\154\147", "\170\154"];
            goto cecomsiewwckuwqy;
            aweayueuaeoasyms:
            $aqykuigiuwmmcieu = '';
            goto wyokakscicekiums;
            cgsuikiqggkikaae:
            gaqweioagqyciyaw:
            goto yoosmuokogseueas;
            wyokakscicekiums:
            if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) {
                goto qkueegaowuyiimgw;
            }
            goto ygywqwksoumccysq;
            cecomsiewwckuwqy:
            foreach ($uasyiiacieyekiia as $ycuyiqagsmgikago) {
                goto gmskkukiiwweocwi;
                gukawqgamokyceki:
                $ycuyiqagsmgikago .= "\x2d";
                goto mckkqgseimcgkcgu;
                uyqsoayeaaumkace:
                swuwwcumqwckimwy:
                goto ooayswecmkkqgskg;
                yeiwocswikqkwyew:
                $ycuyiqagsmgikago = '';
                goto uyqsoayeaaumkace;
                ooayswecmkkqgskg:
                if (is_numeric($uuyoeicyoayimaoa) && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                    goto qsqwywcesyquykqq;
                }
                goto cskesgswygwiqoim;
                keaaqaugoyquwsos:
                qsqwywcesyquykqq:
                goto ieacisiumswqewsq;
                sucgyiymguwououy:
                scioecswaikeacmy:
                goto kcqewweqqqmekuwi;
                mckkqgseimcgkcgu:
                goto swuwwcumqwckimwy;
                goto syqysaawasmesiqs;
                kskqckgmygiwqucm:
                kqscgsuaugsiwiwi:
                goto sucgyiymguwououy;
                cskesgswygwiqoim:
                $aqykuigiuwmmcieu .= "\40\144\55{$ycuyiqagsmgikago}\x62\154\157\143\x6b";
                goto guyeaeiscmgksacs;
                ieacisiumswqewsq:
                $aqykuigiuwmmcieu .= "\40\x64\x2d{$ycuyiqagsmgikago}\x6e\x6f\156\x65";
                goto kskqckgmygiwqucm;
                gmskkukiiwweocwi:
                $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, $ycuyiqagsmgikago, false);
                goto uqamuckwuksquqia;
                guyeaeiscmgksacs:
                goto kqscgsuaugsiwiwi;
                goto keaaqaugoyquwsos;
                syqysaawasmesiqs:
                uyaweoaaqsagsqyi:
                goto yeiwocswikqkwyew;
                uqamuckwuksquqia:
                if ($ycuyiqagsmgikago == "\170\x73") {
                    goto uyaweoaaqsagsqyi;
                }
                goto gukawqgamokyceki;
                kcqewweqqqmekuwi:
            }
            goto cgsuikiqggkikaae;
            kmmwmccqeuasieoy:
        });
        goto wagqsecuquyukiwc;
        ziqysygmaasemyem:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\141\144\144\x5f\x6c\x6f\143\x61\164\x69\x6f\x6e", function ($qqscaoyqikuyeoaw = '', $skikiykssoocmmik = false, $ymqmyyeuycgmigyo = null, $post = null) {
            ManipulateTemplate::kikcumcscysmmuos($qqscaoyqikuyeoaw, $skikiykssoocmmik, $ymqmyyeuycgmigyo, $post);
        });
        goto ocwegqcikuwygcos;
        mwsogcaisqkoyoyo:
    }
    public function render()
    {
        goto mqckeqywkyewukku;
        mqckeqywkyewukku:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\162\x65\x6e\x64\145\x72\137\x75\x73\145\x72\137\x64\x61\x74\141", [$this, "\x6f\x65\x61\x69\147\143\151\163\153\x65\167\x73\x69\x69\145\143"]);
        goto koyswyqcemwusuku;
        mqaemqqgquyscwgg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\162\x65\x6e\144\x65\x72\137\160\x6f\x73\164\137\144\x61\164\141", function ($aiowsaccomcoikus = "\164\151\164\154\x65", $ccamueccusigaaio = null, $ywmkwiwkosakssii = []) {
            goto qiagugckeckokcas;
            aaksksikokoywwqw:
            switch ($aiowsaccomcoikus) {
                case self::IMAGE:
                    goto iwcyguueicgkqmiq;
                    aiqouoismmsiakak:
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        goto msmyywuowokwiswe;
                    }
                    goto qiygeqkamwuomgie;
                    iwcyguueicgkqmiq:
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\163\151\172\145", "\x74\x68\165\x6d\x62\x6e\141\x69\x6c");
                    goto qswoesemmkuisiak;
                    qswoesemmkuisiak:
                    $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, "\x61\164\x74\162\x73", []);
                    goto wyaiukacimqqkwso;
                    aysgkuigyuqqcuae:
                    goto uaewuiuogmissaks;
                    goto ykyauiwkesygwwyq;
                    wgcwoaukyqokqegs:
                    goto ciuaqmasmqyeioiy;
                    goto agwuqimeueqcgeig;
                    ykyauiwkesygwwyq:
                    msmyywuowokwiswe:
                    goto kwacykquqegccocg;
                    wyaiukacimqqkwso:
                    $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\163", "\151\x6d\147\55\163\151\x7a\x65\x20\163\151\172\x65\55{$oiegiwogmwmawkeo}");
                    goto aiqouoismmsiakak;
                    qiygeqkamwuomgie:
                    $icwicymcioeyeyek = DecoratorPost::smwweookeqkiiygs($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    goto aysgkuigyuqqcuae;
                    qaiqkuwcooimcsyc:
                    uaewuiuogmissaks:
                    goto wgcwoaukyqokqegs;
                    kwacykquqegccocg:
                    $icwicymcioeyeyek = ManipulateAttachment::qaeeusqkgwagwaqc($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    goto qaiqkuwcooimcsyc;
                    agwuqimeueqcgeig:
                case "\x69\x6d\x61\x67\145\x5f\165\162\154":
                case "\x69\155\141\147\145\137\163\162\143":
                    goto ywgasekuusqmywou;
                    ccuiyiguswiossui:
                    eeemieuggkqicmcm:
                    goto kouykoaqsyamwkow;
                    wcgeeoqqamawayyk:
                    $icwicymcioeyeyek = DecoratorPost::uamasysiccecccmw($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    goto ewmswgookyygmeck;
                    iussoiiiygmaqoey:
                    $icwicymcioeyeyek = DecoratorAttachment::iaykyouimqoikagg($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    goto ccuiyiguswiossui;
                    ewmswgookyygmeck:
                    goto eeemieuggkqicmcm;
                    goto kmoguoggeuugwcuk;
                    uumsakwagcmcusai:
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        goto ioawqeykaygmcusq;
                    }
                    goto wcgeeoqqamawayyk;
                    ywgasekuusqmywou:
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\163\151\x7a\145", "\164\150\165\155\x62\x6e\x61\x69\154");
                    goto uumsakwagcmcusai;
                    kouykoaqsyamwkow:
                    goto ciuaqmasmqyeioiy;
                    goto miigyyocoaqouyws;
                    kmoguoggeuugwcuk:
                    ioawqeykaygmcusq:
                    goto iussoiiiygmaqoey;
                    miigyyocoaqouyws:
                case self::NAME:
                case self::TITLE:
                    $icwicymcioeyeyek = ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio);
                    goto ciuaqmasmqyeioiy;
                case "\144\x61\164\145":
                case "\x74\151\155\x65":
                case "\144\x61\x74\x65\164\151\x6d\x65":
                    goto yymmsiqcoeikoges;
                    iiymmyommkikmyqa:
                    $icwicymcioeyeyek = $this->eciukqcoqmyacwow(ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $ccamueccusigaaio, false), $saqmwwmqiwmkiwaa, $somiuasmmwkuceag);
                    goto oicqseawwmwcgsua;
                    mycaymeeoakigqwk:
                    cwaksqcggwcaucmo:
                    goto wosiwcgiequysoiq;
                    yymmsiqcoeikoges:
                    switch ($aiowsaccomcoikus) {
                        case "\144\141\x74\x65\164\151\155\145":
                            $ggauoeuaesiymgee = ManipulateSetting::yoaaussmackoisuw();
                            goto oyiogyamekukoqce;
                        case "\164\x69\155\x65":
                            $ggauoeuaesiymgee = ManipulateSetting::isiuiegyqiomccsw();
                            goto oyiogyamekukoqce;
                        case "\144\141\164\x65":
                        default:
                            $ggauoeuaesiymgee = ManipulateSetting::uyomwmskouyyqyyq();
                            goto oyiogyamekukoqce;
                    }
                    goto mycaymeeoakigqwk;
                    cqkkmgicucyoeqca:
                    $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, "\x66\x6f\x72\x6d\x61\x74", $ggauoeuaesiymgee);
                    goto iiymmyommkikmyqa;
                    oicqseawwmwcgsua:
                    goto ciuaqmasmqyeioiy;
                    goto mqkkmgeccukekuus;
                    wosiwcgiequysoiq:
                    oyiogyamekukoqce:
                    goto ecicsgkwsukqmquo;
                    ecicsgkwsukqmquo:
                    $somiuasmmwkuceag = ManipulateArray::get($ywmkwiwkosakssii, "\x6c\157\143\x61\154\145", "\146\141");
                    goto cqkkmgicucyoeqca;
                    mqkkmgeccukekuus:
                case self::URL:
                case self::PERMALINK:
                    $icwicymcioeyeyek = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio);
                    goto ciuaqmasmqyeioiy;
                case "\x64\145\x73\x63":
                case self::DESCRIPTION:
                    goto agosuskgagmqkcqq;
                    oqsgqmmoqoyoicia:
                    goto ciuaqmasmqyeioiy;
                    goto mqycugoiuasmyycy;
                    cwuiegmgmaoasqys:
                    $icwicymcioeyeyek = ManipulatePost::masoymaamekuykso($ccamueccusigaaio, $gioggcykgoikcwiy);
                    goto oqsgqmmoqoyoicia;
                    agosuskgagmqkcqq:
                    $gioggcykgoikcwiy = ManipulateArray::get($ywmkwiwkosakssii, "\x63\x68\x65\143\x6b", true);
                    goto cwuiegmgmaoasqys;
                    mqycugoiuasmyycy:
            }
            goto kcsegweogmaqiwco;
            aosyiicmoiuswsce:
            return rawurldecode($icwicymcioeyeyek);
            goto eisakkewoaeqqeqi;
            scmyekuemcoeeggy:
            iiieosoykaeycaks:
            goto ykocaswauweieysc;
            coomeqeooeuaagwm:
            if (!$ccamueccusigaaio) {
                goto imyyokaecggauwca;
            }
            goto gkkywuycqkawqiuq;
            gkkywuycqkawqiuq:
            $cwwowqyuwccuykom = true;
            goto swoiuaaoaceaaeou;
            eqewaacwikyoaswc:
            $post = ManipulatePost::get($ccamueccusigaaio, self::OBJECT, $cwwowqyuwccuykom);
            goto mqkmsmceakcwuykg;
            kcsegweogmaqiwco:
            aiouimmkquyuwagk:
            goto sqigasuoiqyqqokc;
            mqkmsmceakcwuykg:
            if (!$post) {
                goto iiieosoykaeycaks;
            }
            goto semsywguyogigssk;
            qiagugckeckokcas:
            $cwwowqyuwccuykom = false;
            goto coomeqeooeuaagwm;
            swoiuaaoaceaaeou:
            imyyokaecggauwca:
            goto eqewaacwikyoaswc;
            semsywguyogigssk:
            $ccamueccusigaaio = $post;
            goto scmyekuemcoeeggy;
            ykocaswauweieysc:
            $icwicymcioeyeyek = null;
            goto aaksksikokoywwqw;
            sqigasuoiqyqqokc:
            ciuaqmasmqyeioiy:
            goto aosyiicmoiuswsce;
            eisakkewoaeqqeqi:
        });
        goto aisciyiooggegcwa;
        koyswyqcemwusuku:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x72\145\x6e\x64\x65\162\x5f\x61\x75\164\x68\157\162\137\x64\141\x74\x61", [$this, "\x6f\145\141\x69\147\x63\x69\163\153\x65\x77\163\x69\x69\x65\x63"]);
        goto mqaemqqgquyscwgg;
        aisciyiooggegcwa:
    }
    public function comment()
    {
        goto cymkyayecqkecsso;
        gueqcauquesmkqym:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\x63\x6f\x6d\155\145\156\164\137\x6c\x69\x6e\153", function ($aqqmosqmsuueyaes = null, $ywmkwiwkosakssii = []) {
            return get_comment_link($aqqmosqmsuueyaes, $ywmkwiwkosakssii);
        });
        goto wwiiieggesogkwky;
        oosoeecugcecmoqu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\145\144\x69\x74\x5f\143\x6f\x6d\x6d\145\156\x74\137\154\x69\156\153", function ($cmwygeyygwqaemaq = null, $caacssaumiqeaoaw = '', $miisqgccsqqcscia = '') {
            return edit_comment_link($cmwygeyygwqaemaq, $caacssaumiqeaoaw, $miisqgccsqqcscia);
        });
        goto kssaskooygaesyuq;
        esiuqyuiuagocqce:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\x63\x6f\x6d\x6d\145\156\x74\163\x5f\156\x75\x6d\142\x65\162\137\x74\145\170\x74", function ($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku) {
            return get_comments_number_text($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku);
        });
        goto syicggsyayqwywma;
        qqsiesyooukcuege:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\x63\157\155\155\x65\x6e\x74", function ($aokagokqyuysuksm = null) {
            return ManipulateComment::get($aokagokqyuysuksm);
        });
        goto goiywqywgesicwsm;
        iuamoyacomwmyswu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\157\155\155\145\x6e\x74\137\x72\x65\x70\x6c\x79\137\154\151\x6e\x6b", function ($ywmkwiwkosakssii = [], $aqqmosqmsuueyaes = null, $post = null) {
            return get_comment_reply_link($ywmkwiwkosakssii, $aqqmosqmsuueyaes, $post);
        });
        goto oosoeecugcecmoqu;
        ykmiqawqiommeyic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\157\x6d\155\x65\156\164\x5f\143\x6c\141\163\163", function ($cmkqisoeyioisqaw, $aqqmosqmsuueyaes) {
            return comment_class($cmkqisoeyioisqaw, $aqqmosqmsuueyaes);
        });
        goto esaoimegkqmoakoo;
        moicgacciggecuie:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x63\x6f\x6d\x6d\145\156\164\137\144\141\164\145", function ($saqmwwmqiwmkiwaa = '', $aokagokqyuysuksm = null, $egkeamycaysqsoma = true) {
            return ManipulateComment::squyiyimquqicqke($aokagokqyuysuksm, $saqmwwmqiwmkiwaa, $egkeamycaysqsoma);
        });
        goto qqsiesyooukcuege;
        syicggsyayqwywma:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\x70\162\145\166\151\x6f\x75\163\137\x63\157\x6d\155\145\156\164\163\x5f\x6c\151\x6e\x6b", function ($pkyyagewkiyckmwy = '') {
            return get_previous_comments_link($pkyyagewkiyckmwy);
        });
        goto ykmiqawqiommeyic;
        wwiiieggesogkwky:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\x63\157\155\x6d\145\156\x74\137\164\x69\155\x65", function ($saqmwwmqiwmkiwaa = '', $eqwyacwmcqusmwoq = false, $mcmaiqckgiuqayau = true) {
            return get_comment_time($saqmwwmqiwmkiwaa, $eqwyacwmcqusmwoq, $mcmaiqckgiuqayau);
        });
        goto moicgacciggecuie;
        goiywqywgesicwsm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\x63\x6f\x6d\155\x65\x6e\x74\x5f\x74\x65\170\164", function ($aokagokqyuysuksm = null, $ywmkwiwkosakssii = []) {
            return get_comment_text($aokagokqyuysuksm, $ywmkwiwkosakssii);
        });
        goto iuamoyacomwmyswu;
        cymkyayecqkecsso:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x6f\155\x6d\x65\156\x74\x5f\151\x64\x5f\x66\151\x65\x6c\x64\163", function ($aokagokqyuysuksm = 0) {
            return comment_id_fields($aokagokqyuysuksm);
        });
        goto gueqcauquesmkqym;
        muiiokquumgiyaas:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\143\157\x6d\x6d\x65\156\164\x5f\x61\x75\164\150\x6f\162", function ($aqqmosqmsuueyaes = 0) {
            return ManipulateComment::mguqscccckuywsya($aqqmosqmsuueyaes);
        });
        goto esiuqyuiuagocqce;
        somoaammcamiswiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\x5f\143\x6f\x6d\x6d\145\x6e\164\137\141\x75\x74\x68\157\162\137\x6c\151\156\153", function ($aqqmosqmsuueyaes = 0) {
            return get_comment_author_link($aqqmosqmsuueyaes);
        });
        goto muiiokquumgiyaas;
        kssaskooygaesyuq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\x6e\x65\170\x74\x5f\143\157\155\155\x65\x6e\x74\163\137\x6c\151\156\x6b", function ($pkyyagewkiyckmwy = '', $kmsquaeucgusuyio = 0) {
            return get_next_comments_link($pkyyagewkiyckmwy, $kmsquaeucgusuyio);
        });
        goto somoaammcamiswiq;
        esaoimegkqmoakoo:
    }
    public function mkukcsqosmkeeask()
    {
        goto yyicwymeasmimggy;
        yyicwymeasmimggy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\x64\x6d\x69\156\x5f\165\x72\x6c", function ($mkomwsiykqigmqca, $aaceqemaqqeckueq = "\x61\144\x6d\151\x6e") {
            return admin_url($mkomwsiykqigmqca, $aaceqemaqqeckueq);
        });
        goto oyoiceikawwqskai;
        muoeugawocmikiua:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x75\162\162\145\x6e\x74\137\165\x73\x65\x72\x5f\x63\x61\156", function ($gkswkiicccswksiq) {
            return current_user_can($gkswkiicccswksiq);
        });
        goto bgwomyaccmauskgm;
        mqsoccawiacgogca:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x73\141\x6e\x69\164\x69\172\145\x5f\164\151\x74\x6c\145", function ($cmwygeyygwqaemaq) {
            return sanitize_title($cmwygeyygwqaemaq);
        });
        goto muoeugawocmikiua;
        bgwomyaccmauskgm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\x5f\165\163\145\162\x5f\x6c\157\147\x67\x65\x64\x5f\151\156", function () {
            return DecoratorUser::ksgkoukcicwkkaum();
        });
        goto cmsgsoqiskwwqywg;
        ekkswyasyksokemg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\x70\x5f\x6e\x6f\x6e\x63\x65\x5f\x66\151\145\154\144", function ($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm = true) {
            return wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm, false);
        });
        goto mqsoccawiacgogca;
        oyoiceikawwqskai:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\x5f\154\157\147\x6f\165\x74\137\x75\x72\x6c", function ($gwqgmkqcgwwmweom = '') {
            return wp_logout_url($gwqgmkqcgwwmweom);
        });
        goto ekkswyasyksokemg;
        cmsgsoqiskwwqywg:
    }
    public function eeoeyakoiycwiuoa()
    {
        goto mkiiuusasqaucucm;
        qcykwgwoyuuqiicc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\142\x6f\144\171\x5f\143\154\x61\163\163", "\142\x6f\144\171\137\143\154\x61\x73\x73");
        goto iwosowoeugcumagm;
        mcegmykimgwocisg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x68\x65\x63\x6b\145\x64", function ($gmeoaiyogiokeeau, $yeacayasgueouoqc = true) {
            goto ucewekmmuygqecqk;
            oqikauiqoeuyoeyc:
            return checked($gmeoaiyogiokeeau, $yeacayasgueouoqc, false);
            goto cseseucmsoywsecu;
            qkkocwikmsocekwq:
            qcqyawqiwksyicok:
            goto oqikauiqoeuyoeyc;
            ayymceqgcuqkqkmo:
            if (in_array($gmeoaiyogiokeeau, $yeacayasgueouoqc)) {
                goto iqmymqqskgsgsiku;
            }
            goto gkskumckoocyioge;
            gkskumckoocyioge:
            $yeacayasgueouoqc = null;
            goto ycogsiaoceaiaosi;
            asqimcomuseoqiue:
            qyeiyecmaomycoks:
            goto qkkocwikmsocekwq;
            quikiokiqwkqsqys:
            $yeacayasgueouoqc = $gmeoaiyogiokeeau;
            goto asqimcomuseoqiue;
            ucewekmmuygqecqk:
            if (!is_array($yeacayasgueouoqc)) {
                goto qcqyawqiwksyicok;
            }
            goto ayymceqgcuqkqkmo;
            ycogsiaoceaiaosi:
            goto qyeiyecmaomycoks;
            goto kqeemeukmoukyeiw;
            kqeemeukmoukyeiw:
            iqmymqqskgsgsiku:
            goto quikiokiqwkqsqys;
            cseseucmsoywsecu:
        });
        goto wwwsqwyegoowkmik;
        iaawmomcqiokucac:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x62\154\157\x67\x69\x6e\x66\x6f", function ($ekcswiguywieeeoc) {
            return get_bloginfo($ekcswiguywieeeoc);
        });
        goto uwsmweegoueoawau;
        mggqockcmokwiwuq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\144\x79\x6e\x61\155\x69\x63\137\x73\151\x64\x65\x62\141\x72", function ($momcykaoccoymeig) {
            DecoratorWidget::esuiacmywcmmsmao($momcykaoccoymeig);
        });
        goto egyksgscyqmieque;
        gekkisqyegwkwcmg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\163\x75\x62\x6d\151\164\137\x62\x75\164\x74\157\156", function () {
            return submit_button();
        });
        goto caicmucqkokaecsg;
        gyuiwqyyauwqokmc:
        $this->comment();
        goto oeqaiwecuckgoyky;
        gsyagiygoyamakyu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\144\x64\x5f\164\x68\151\143\x6b\142\157\x78", function () {
            add_thickbox();
        });
        goto ucgagqogckeuiewi;
        iwosowoeugcumagm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\137\156\x61\166\x5f\x6d\145\156\x75", "\167\x70\x5f\x6e\x61\166\137\x6d\x65\156\165");
        goto auuqmasiciwyueek;
        uaysaomocomaomaw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x68\157\155\x65\137\x75\x72\x6c", function ($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) {
            return ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
        });
        goto kcyaqgaosmmscquy;
        swowyqmmmawuumkq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x64\157\137\155\145\x74\x61\137\x62\157\x78\x65\163", function ($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig = null) {
            do_meta_boxes($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig);
        });
        goto ygiycusyssyegauq;
        uwsmweegoueoawau:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\160\x6f\x73\164\x5f\164\x79\160\145\x5f\141\x72\x63\150\151\x76\x65\137\154\x69\156\153", function ($useksmwkuswkwcqg) {
            return ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg);
        });
        goto uaysaomocomaomaw;
        coegigeuyugiwuou:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\164\x65\162\155\x5f\x74\151\164\154\x65", function ($iwewcwusemqaiggk) {
            return ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
        });
        goto ecikykuqgeaqamwk;
        cgckkkoaumakemuc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\141\144\155\151\156", function () {
            return is_admin();
        });
        goto qiuouckkycciwuyo;
        eusygaeoggqeuuki:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\137\x6f\x70\x74\151\x6f\x6e", function ($omkysikckkcieckq, $ggauoeuaesiymgee = false) {
            return DecoratorOption::get($omkysikckkcieckq, $ggauoeuaesiymgee);
        });
        goto skqiqqeyqokasmeg;
        ykaymqwyewgaouaw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\137\x61\x64\155\151\156\137\163\145\x61\x72\143\x68\x5f\161\x75\x65\x72\x79", function () {
            _admin_search_query();
        });
        goto sceeeykswowqeqyi;
        weyegmawkwggekgi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\164\x65\x72\155", function ($post = null, $kesssewsiegssiya = '', $qqgsimqiqyaugceg = true) {
            return ManipulatePost::kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg);
        });
        goto eeusamaykaysmgoq;
        mkiiuusasqaucucm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\x70\137\150\x65\141\144", "\167\x70\137\150\x65\x61\x64");
        goto scoaiameyouasusa;
        eeusamaykaysmgoq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\137\164\145\x72\155\137\x6c\x69\156\x6b", function ($iwewcwusemqaiggk, $kesssewsiegssiya = '') {
            return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        });
        goto wqgmqkugcksgscke;
        cgcymuikeqwuqaks:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\137\146\162\x6f\156\x74\x5f\x70\141\147\x65", function () {
            return DecoratorQuery::takycgcamoacksqw();
        });
        goto ykaymqwyewgaouaw;
        skqiqqeyqokasmeg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\160\141\147\145\x5f\x62\x79\x5f\x70\x61\164\x68", function ($mkomwsiykqigmqca) {
            return ManipulatePage::ssacaeeassumyuws($mkomwsiykqigmqca);
        });
        goto cgckkkoaumakemuc;
        sceeeykswowqeqyi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\x5f\x61\162\x63\x68\x69\x76\145", function () {
            return DecoratorQuery::migkyseymeomymmy() || ManipulatePage::okiaumcqquyioqcy();
        });
        goto swowyqmmmawuumkq;
        kcyaqgaosmmscquy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\163\145\x6c\145\143\x74\x65\144", function ($ymmmmaiuoocagigk, $yeacayasgueouoqc = true) {
            goto msqiamqqoiceauwy;
            pmmcyycmwceweqck:
            $yeacayasgueouoqc = null;
            goto eakgamsscsuususi;
            qwyuoiycqcaaakcq:
            return selected($ymmmmaiuoocagigk, $yeacayasgueouoqc, false);
            goto ukswuuooigiykaso;
            eakgamsscsuususi:
            goto kascwigwmyyywwom;
            goto coskskmacukoewgo;
            imuyoescowgckyyc:
            $yeacayasgueouoqc = $ymmmmaiuoocagigk;
            goto uiookuuakyqyuagw;
            coskskmacukoewgo:
            aamogomsaksgcsig:
            goto imuyoescowgckyyc;
            yeqcqmakwyuoaayk:
            soewwyoqiysyqsmm:
            goto qwyuoiycqcaaakcq;
            uiookuuakyqyuagw:
            kascwigwmyyywwom:
            goto yeqcqmakwyuoaayk;
            msqiamqqoiceauwy:
            if (!is_array($yeacayasgueouoqc)) {
                goto soewwyoqiysyqsmm;
            }
            goto iawimoagycsccyqw;
            iawimoagycsccyqw:
            if (in_array($ymmmmaiuoocagigk, $yeacayasgueouoqc)) {
                goto aamogomsaksgcsig;
            }
            goto pmmcyycmwceweqck;
            ukswuuooigiykaso:
        });
        goto mcegmykimgwocisg;
        usgcuuuscucqesug:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\x61\165\164\150\x6f\x72\137\160\157\x73\164\x73\137\165\162\x6c", function ($wwumyikyegkqweeo, $wsaeqskqmwoamkum = '') {
            return DecoratorAuthor::mkaiaewoyaimieqg($wwumyikyegkqweeo, $wsaeqskqmwoamkum);
        });
        goto omoayecymwmcysyw;
        ucgagqogckeuiewi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\163\x65\x61\x72\143\x68\x5f\x71\165\145\162\171", function ($sekkmwqwqwcayiwg = true) {
            return get_search_query($sekkmwqwqwcayiwg);
        });
        goto weecgesamaiayuqo;
        qoceommegsyqswsi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\160\x61\147\x65\144", function () {
            return DecoratorQuery::sgeaogakoscmysgc();
        });
        goto agukockguesiwmim;
        omoayecymwmcysyw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\x5f\x64\162\157\160\144\157\167\x6e\x5f\143\x61\164\145\147\x6f\162\x69\145\x73", function ($ywmkwiwkosakssii) {
            wp_dropdown_categories($ywmkwiwkosakssii);
        });
        goto weyegmawkwggekgi;
        qmiugaqisqiwooio:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x74\x68\x65\137\x61\165\164\x68\x6f\x72\137\x6d\145\x74\x61", function ($aiowsaccomcoikus, $mkucggyaiaukqoce = false) {
            return DecoratorAuthor::igawqaomowicuayw($aiowsaccomcoikus, ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce));
        });
        goto usgcuuuscucqesug;
        mgykqueoqmyucwky:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\164\x65\162\x6d\x5f\143\x68\151\x6c\x64\x72\145\156", function ($iwewcwusemqaiggk, $ywmkwiwkosakssii = []) {
            return ManipulateTerm::mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii);
        });
        goto coegigeuyugiwuou;
        ykeaeieyycoeqccm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\x73\x65\x61\162\143\150\137\x66\x6f\162\x6d", "\x67\x65\164\137\163\x65\141\x72\143\150\137\146\x6f\162\155");
        goto auguaocagomuuqqk;
        wqgmqkugcksgscke:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\x65\162\x6d\x5f\144\145\x73\143\162\x69\x70\x74\151\x6f\156", function ($iwewcwusemqaiggk = 0) {
            return term_description($iwewcwusemqaiggk);
        });
        goto mgykqueoqmyucwky;
        scoaiameyouasusa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\x5f\x66\157\157\x74\145\162", "\167\x70\x5f\x66\157\157\x74\145\162");
        goto qcykwgwoyuuqiicc;
        ommomcekkekaceme:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\137\147\145\164\x5f\x61\x74\164\141\x63\x68\155\x65\156\164\137\151\x6d\141\x67\x65", function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = "\164\150\165\155\142\156\141\151\x6c", $wisgiwskwawciiee = []) {
            return ManipulateAttachment::qaeeusqkgwagwaqc($qssimkkaqkwceqqs, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        goto ugguwkkgqoyseuma;
        oeqaiwecuckgoyky:
        $this->mkukcsqosmkeeask();
        goto ywiwqkssuiiukwuk;
        ygiycusyssyegauq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\x68\x65\x5f\167\x69\x64\147\x65\x74", function ($assameyusgwogmce, $owgumcsyqsamiemg = [], $ywmkwiwkosakssii = []) {
            DecoratorWidget::assameyusgwogmce($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii);
        });
        goto qoceommegsyqswsi;
        wwwsqwyegoowkmik:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\141\160\160\154\171\x5f\146\x69\x6c\164\x65\x72\163", function ($scwiymciagumsuiw, ...$qookweymeqawmcwo) {
            return $this->sscegwueamckwmcy($scwiymciagumsuiw, ...$qookweymeqawmcwo);
        });
        goto igygkagcaiiiumqo;
        agukockguesiwmim:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\137\x74\141\170", function ($kesssewsiegssiya = null) {
            return DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya);
        });
        goto iaawmomcqiokucac;
        egyksgscyqmieque:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\137\141\143\x74\x69\166\145\x5f\x73\x69\x64\x65\142\x61\x72", function ($momcykaoccoymeig) {
            return DecoratorWidget::ooksqgokuwcmoqcu($momcykaoccoymeig);
        });
        goto cgcymuikeqwuqaks;
        qicikuqekgkawwqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\x66\x6f\x72\x6d\141\x74\x5f\x66\x72\157\155\137\155\x69\155\x65\137\164\171\160\x65", function ($qiwqkoiamayyqase) {
            goto ymcqmgsqsggscmsi;
            goyyumqwuiywaimq:
            return $sqeykgyoooqysmca;
            goto oqycocwaiqmyaeow;
            gcmiayguaqqeiese:
            oggiokiewaqggaoc:
            goto goyyumqwuiywaimq;
            ymcqmgsqsggscmsi:
            $sqeykgyoooqysmca = '';
            goto qawgegcsiawquqcm;
            ukgsemksqoiukgoc:
            ocwqeygqmqgawqqy:
            goto wkigieqkikmiqqgw;
            geakuimqwgsiaask:
            if (!(strpos($qiwqkoiamayyqase, "\160\144\x66") !== false)) {
                goto ocwqeygqmqgawqqy;
            }
            goto aoqycegeggwwkwya;
            aoqycegeggwwkwya:
            $sqeykgyoooqysmca = "\160\144\x66";
            goto ukgsemksqoiukgoc;
            ekeokeoweycsyqos:
            uqimycsoiocokgyi:
            goto wcowkmqskaouuqsm;
            wcowkmqskaouuqsm:
            $sqeykgyoooqysmca = "\151\x6d\141\147\145";
            goto gcmiayguaqqeiese;
            qawgegcsiawquqcm:
            if (strpos($qiwqkoiamayyqase, "\151\x6d\x61\x67\x65") !== false) {
                goto uqimycsoiocokgyi;
            }
            goto geakuimqwgsiaask;
            wkigieqkikmiqqgw:
            goto oggiokiewaqggaoc;
            goto ekeokeoweycsyqos;
            oqycocwaiqmyaeow:
        });
        goto ommomcekkekaceme;
        igygkagcaiiiumqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x65\144\151\164\x6f\162", function ($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck = []) {
            return wp_editor($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck);
        });
        goto qicikuqekgkawwqo;
        qiuouckkycciwuyo:
        $this->sqmuqsscmimwqoki();
        goto gyuiwqyyauwqokmc;
        ugguwkkgqoyseuma:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\141\x76\x61\164\x61\x72", function ($mkucggyaiaukqoce, $oiegiwogmwmawkeo = 96, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '') {
            return ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, $gkykacccamuwowwc, $ggauoeuaesiymgee);
        });
        goto qmiugaqisqiwooio;
        auguaocagomuuqqk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x6f\x6d\155\x65\156\164\x73\x5f\164\145\x6d\x70\154\x61\x74\145", "\x63\157\155\155\x65\x6e\x74\x73\x5f\164\x65\155\160\x6c\141\x74\145");
        goto mggqockcmokwiwuq;
        auuqmasiciwyueek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\x61\163\x5f\x6e\x61\166\137\155\145\156\165", "\x68\141\x73\x5f\x6e\x61\x76\x5f\155\x65\156\165");
        goto ykeaeieyycoeqccm;
        caicmucqkokaecsg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x64\x6f\137\163\145\164\164\x69\156\x67\163\137\x73\x65\143\x74\x69\x6f\x6e\x73", function ($awcmekyiwwkeyisq) {
            return do_settings_sections($awcmekyiwwkeyisq);
        });
        goto gsyagiygoyamakyu;
        weecgesamaiayuqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\144\x6f\137\141\143\x74\x69\157\156", function ($aiamqeawckcsuaou, ...$qookweymeqawmcwo) {
            $this->cqscqicucmeamkyq($aiamqeawckcsuaou, ...$qookweymeqawmcwo);
        });
        goto eusygaeoggqeuuki;
        ecikykuqgeaqamwk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\137\137", function ($cmwygeyygwqaemaq, $mokawwccycoiqeka = "\x64\x65\x66\141\x75\x6c\x74") {
            return __($cmwygeyygwqaemaq, $mokawwccycoiqeka);
        });
        goto gekkisqyegwkwcmg;
        ywiwqkssuiiukwuk:
    }
    public function iemaakgqgqosiecm()
    {
        goto imucwaggwqomwwki;
        yiuwiekcyyquyuak:
        $this->aqiicausqkomqkqy();
        goto sgmqeqeuscaaegqk;
        wuaokqmoyoikkkyu:
        $this->eeoeyakoiycwiuoa();
        goto sgguiaisyueoswkk;
        wawmuaweemsioqms:
        $this->ugugagoguiycqeys();
        goto wuaokqmoyoikkkyu;
        imucwaggwqomwwki:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\x64\144\x5f\x74\167\x69\x67\137\146\165\x6e\x63\164\151\157\156\x73"), $this->yyyewgugioamwckw());
        goto yiuwiekcyyquyuak;
        sgmqeqeuscaaegqk:
        $this->render();
        goto wawmuaweemsioqms;
        sgguiaisyueoswkk:
    }
    
    public function ooqekmgsqomsakio($wkcwykowmmmwioqs)
    {
        goto kqsyesawkomqwaqy;
        kqsyesawkomqwaqy:
        if (!(!is_admin() || ManipulateAjax::mcgoysmkqsqooceq())) {
            goto aqkukemyueoyscqi;
        }
        goto kgquoqwyggyuiggk;
        ggyieuweamgwmwem:
        $wksoawcgagcgoask = self::mqucqomkmisceawy(str_replace(self::AT_SYMBOL, '', $yeacayasgueouoqc));
        goto wiiuaaemwsioueik;
        mmmcsikmcyocmgiw:
        $cqygeiuceemyuywc = ManipulateString::wiecmkiugmyyqiqc($yeacayasgueouoqc, "{$woqmauweeqyeyymc->aqkmwawoaaigkoyq()}\x2f{$wksoawcgagcgoask->gueasuouwqysmomu()}\x2f{$ymqmyyeuycgmigyo}", $wkcwykowmmmwioqs);
        goto ueqmgcsqwciauqes;
        kuyiowwueugqewic:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $wkcwykowmmmwioqs);
        goto uikweusiocekgoey;
        ueqmgcsqwciauqes:
        if (!$this->yyyewgugioamwckw()->exists($cqygeiuceemyuywc)) {
            goto mueeqqskseeiykwg;
        }
        goto wqyygmuggeegmuua;
        acuusyssiosuysmg:
        cmsgueemsueayawi:
        goto sgyickkqymqecksi;
        yguemqosugisymku:
        if (!($yeacayasgueouoqc && $yeacayasgueouoqc !== $woqmauweeqyeyymc->aqkmwawoaaigkoyq())) {
            goto wmiakgoosqcoaeki;
        }
        goto osmmmeymmeueymog;
        uoykoouwyqwskyqs:
        wymawskeqaagkwuo:
        goto umquossmsyaiciag;
        awqycuuoeeoioskq:
        mueeqqskseeiykwg:
        goto uoykoouwyqwskyqs;
        swekyeqkosmecgsk:
        $woqmauweeqyeyymc = self::qmkyymgaecsmakqq("{$mumucmmgemqwqiia->get_theme_root()}\57{$mumucmmgemqwqiia->get_stylesheet()}");
        goto ykemuogoaemeuaoy;
        uikweusiocekgoey:
        $yeacayasgueouoqc = ManipulateArray::get($uomewyckeuqoqocu, 0);
        goto ggyieuweamgwmwem;
        ggooeiyqcockogcy:
        iumuosccokuokwiw:
        goto acuusyssiosuysmg;
        gegweammscwsquwi:
        if (!is_string($ymqmyyeuycgmigyo)) {
            goto wymawskeqaagkwuo;
        }
        goto mmmcsikmcyocmgiw;
        wqyygmuggeegmuua:
        $wkcwykowmmmwioqs = $cqygeiuceemyuywc;
        goto awqycuuoeeoioskq;
        osmmmeymmeueymog:
        $ymqmyyeuycgmigyo = ManipulateArray::get(explode("\x5f\137", $yeacayasgueouoqc), 2, $yeacayasgueouoqc);
        goto gegweammscwsquwi;
        cqkgaiiysokkuwsm:
        $mumucmmgemqwqiia = wp_get_theme();
        goto swekyeqkosmecgsk;
        aqiiysigquiqsgeg:
        return $wkcwykowmmmwioqs;
        goto kiqaiwiwmeesaagy;
        sgyickkqymqecksi:
        aqkukemyueoyscqi:
        goto aqiiysigquiqsgeg;
        wiiuaaemwsioueik:
        if (!$wksoawcgagcgoask) {
            goto cmsgueemsueayawi;
        }
        goto cqkgaiiysokkuwsm;
        ykemuogoaemeuaoy:
        if (!$woqmauweeqyeyymc) {
            goto iumuosccokuokwiw;
        }
        goto yguemqosugisymku;
        umquossmsyaiciag:
        wmiakgoosqcoaeki:
        goto ggooeiyqcockogcy;
        kgquoqwyggyuiggk:
        $wkcwykowmmmwioqs = ManipulateFile::cgwcgscqeqauaagi($wkcwykowmmmwioqs);
        goto kuyiowwueugqewic;
        kiqaiwiwmeesaagy:
    }
    public function oeaigciskewsiiec($aiowsaccomcoikus = "\156\141\x6d\x65", $mkucggyaiaukqoce = null, $ywmkwiwkosakssii = [])
    {
        goto uukskyequmqsieuk;
        uaymiioykwgkmoeo:
        switch ($aiowsaccomcoikus) {
            case "\165\x72\x6c":
                $icwicymcioeyeyek = DecoratorAuthor::mkaiaewoyaimieqg($mkucggyaiaukqoce);
                goto eickyskkcemimcqy;
            case "\156\141\x6d\x65":
                $icwicymcioeyeyek = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\144\151\x73\160\154\x61\x79\137\x6e\141\155\x65");
                goto eickyskkcemimcqy;
            case "\x61\x76\x61\x74\x61\x72":
                goto ikusickyaccgogwg;
                qqcciieyaqwkcasi:
                goto eickyskkcemimcqy;
                goto oyskccqkmomukcoi;
                icageksksqqgmqom:
                $icwicymcioeyeyek = ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, __("\x55\163\145\162\40\101\166\141\164\x61\x72", PR__THM__PMPR));
                goto qqcciieyaqwkcasi;
                ikusickyaccgogwg:
                $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\172\x65", 64);
                goto icageksksqqgmqom;
                oyskccqkmomukcoi:
        }
        goto yemciswoecayuoga;
        eqkakgkyqqaewqiu:
        $icwicymcioeyeyek = null;
        goto iqcwoosugwmkmcas;
        iqgqagswgiwgksco:
        sckwuwwueomkksag:
        goto swcmoacumikkuwma;
        uukskyequmqsieuk:
        $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce, true);
        goto eaqoyysesmoykmqa;
        eaqoyysesmoykmqa:
        if ($mkucggyaiaukqoce) {
            goto euosgyacescsiqgc;
        }
        goto ckicaukcwwiukieg;
        yemciswoecayuoga:
        eygwumawcmyaisee:
        goto mumegakqsumekgcs;
        swcmoacumikkuwma:
        return $icwicymcioeyeyek;
        goto agugmwweyecagkue;
        iqcwoosugwmkmcas:
        if (!$mkucggyaiaukqoce) {
            goto sckwuwwueomkksag;
        }
        goto uaymiioykwgkmoeo;
        ckicaukcwwiukieg:
        $mkucggyaiaukqoce = ManipulatePost::mguqscccckuywsya($mkucggyaiaukqoce);
        goto ooeaciyoeskuouqi;
        mumegakqsumekgcs:
        eickyskkcemimcqy:
        goto iqgqagswgiwgksco;
        ooeaciyoeskuouqi:
        euosgyacescsiqgc:
        goto eqkakgkyqqaewqiu;
        agugmwweyecagkue:
    }
    
    public function yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc = null, $ccamueccusigaaio = null, $cwwowqyuwccuykom = false)
    {
        goto wassuqquwikiawos;
        ycmmugqamooccaoe:
        weiwkwaagqqcwkoq:
        goto ykassqsuwccwksyg;
        hosygawmqsywcsuu:
        kmqyoeosqckuaqsi:
        goto eewacyseykeqcsgi;
        igyukcioksgyuumo:
        foreach ($ccamueccusigaaio as $igqsaukqcqscimok) {
            goto icguisyymukwkoac;
            icguisyymukwkoac:
            if (!($aqykuigiuwmmcieu = $this->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc, $igqsaukqcqscimok, true))) {
                goto ccaecemqggkcesym;
            }
            goto wwcyucesakwqmigu;
            caeywemyokumoaki:
            queqqoyiueiikgus:
            goto eeaeuuuiukckywcg;
            ioqaysioauoiookm:
            ccaecemqggkcesym:
            goto caeywemyokumoaki;
            wwcyucesakwqmigu:
            goto sqmwqsayaqygocqo;
            goto ioqaysioauoiookm;
            eeaeuuuiukckywcg:
        }
        goto egqeaugqciqqaais;
        mueuscommwusykqi:
        return $aqykuigiuwmmcieu;
        goto eiyiymqwqgyqcgkw;
        qaioiokqgaomscqo:
        makewcmuowqeuqqo:
        goto iiqwwquosouwiqma;
        mmukumekuuysequy:
        $eyoesceegakeygsi = $this->yyyewgugioamwckw();
        goto cecwiqciigmgyoem;
        kegqauaaamqicscy:
        iyseosekyuousmcs:
        goto scowusmowqywueme;
        auiosgoysmeuswoi:
        $aqykuigiuwmmcieu = null;
        goto yuqwoywsqguaiooq;
        wsycuswmoucikqam:
        $aqykuigiuwmmcieu = preg_replace("\x2f\x28{$ymqmyyeuycgmigyo}\50\x3f\41\56\x2a{$ymqmyyeuycgmigyo}\x29\51\x2f", $qqscaoyqikuyeoaw, $yeacayasgueouoqc);
        goto ekkyqawesagkmqwi;
        ugqqumgemgqkgowm:
        tguuykuocgscwigs:
        goto woeskwkwwgwgmowo;
        iiqwwquosouwiqma:
        $aqykuigiuwmmcieu = $this->yiyqecawioyosoaw("\151\x6e\x64\x65\170", $aqykuigiuwmmcieu);
        goto qgqckcyimogeucws;
        wqwogycsmygawouy:
        if ($qqscaoyqikuyeoaw !== "\x69\156\144\145\x78" && !$cwwowqyuwccuykom) {
            goto makewcmuowqeuqqo;
        }
        goto auiosgoysmeuswoi;
        egqeaugqciqqaais:
        sqmwqsayaqygocqo:
        goto qumgeeowggyeimes;
        myskascmmkymmmgm:
        if (!$ccamueccusigaaio) {
            goto tguuykuocgscwigs;
        }
        goto mgcieuiwescwqymy;
        cecwiqciigmgyoem:
        if ($eyoesceegakeygsi->exists($qqscaoyqikuyeoaw)) {
            goto kmqyoeosqckuaqsi;
        }
        goto uwqqmumicaygiukc;
        iekkoiwkmagacmui:
        kaeuoeawkcwsycoe:
        goto uaqawigsyseeuymm;
        wgaqwowmmwgqcgio:
        $ekwsasieesaqcsiw .= "\164\167\151\x67";
        goto ycmmugqamooccaoe;
        uaqawigsyseeuymm:
        if (!$aqykuigiuwmmcieu) {
            goto quumaygcyqkgwyaq;
        }
        goto qawsuswmossykiuo;
        qwuqiimucosmgmei:
        $ekwsasieesaqcsiw = "\56";
        goto comoagswmewckyoi;
        kaukomgswmysiuus:
        if (!(!$aqykuigiuwmmcieu || !$eyoesceegakeygsi->exists($aqykuigiuwmmcieu))) {
            goto owawwqcgcwwygkcy;
        }
        goto wqwogycsmygawouy;
        gguiykqamegqmqki:
        ocqcqsmmqaiiayis:
        goto igyukcioksgyuumo;
        mwomsussaikumyme:
        if (!$yeacayasgueouoqc) {
            goto yckakqcyqksckiwg;
        }
        goto myskascmmkymmmgm;
        ykassqsuwccwksyg:
        $ymqmyyeuycgmigyo = substr($ymqmyyeuycgmigyo, 0, strpos($ymqmyyeuycgmigyo, $ekwsasieesaqcsiw));
        goto wsycuswmoucikqam;
        wassuqquwikiawos:
        $aqykuigiuwmmcieu = null;
        goto mmukumekuuysequy;
        woeskwkwwgwgmowo:
        $ymqmyyeuycgmigyo = basename($yeacayasgueouoqc);
        goto esyeigyikuqioumu;
        yuqwoywsqguaiooq:
        goto egkyuaemcsesciio;
        goto qaioiokqgaomscqo;
        scowusmowqywueme:
        goto kaeuoeawkcwsycoe;
        goto hosygawmqsywcsuu;
        iqumoawsgyyywwsq:
        quumaygcyqkgwyaq:
        goto mueuscommwusykqi;
        uyyomesiccsqemog:
        $qqscaoyqikuyeoaw = untrailingslashit($qqscaoyqikuyeoaw) . "\57{$ccamueccusigaaio}";
        goto ekswgqyowkoaksqi;
        wyqumeogqqakouyw:
        owawwqcgcwwygkcy:
        goto aeeoymcoceusaems;
        ekswgqyowkoaksqi:
        goto saugoksiwmswowqy;
        goto gguiykqamegqmqki;
        comoagswmewckyoi:
        if (!preg_match("\x2f\134\x2e\133\60\x2d\x39\x61\x2d\172\x5d\53\44\57\x69", $qqscaoyqikuyeoaw)) {
            goto weiwkwaagqqcwkoq;
        }
        goto wgaqwowmmwgqcgio;
        yweawggqmecqgaqe:
        $yeacayasgueouoqc = str_replace("\x2f\57", "\x2f", $yeacayasgueouoqc);
        goto mwomsussaikumyme;
        wcoywkwsguoyysay:
        eyyqgqyikeoiuusw:
        goto yweawggqmecqgaqe;
        uwqqmumicaygiukc:
        if ($yeacayasgueouoqc) {
            goto eyyqgqyikeoiuusw;
        }
        goto oiiiwwmwokesyqwo;
        qumgeeowggyeimes:
        saugoksiwmswowqy:
        goto ugqqumgemgqkgowm;
        aeeoymcoceusaems:
        if (!$aqykuigiuwmmcieu) {
            goto iyseosekyuousmcs;
        }
        goto ycqcgecgwiaioguy;
        qawsuswmossykiuo:
        $aqykuigiuwmmcieu = $this->ooqekmgsqomsakio($aqykuigiuwmmcieu);
        goto iqumoawsgyyywwsq;
        ekkyqawesagkmqwi:
        yimaquocemaqgkew:
        goto souoecscwyauueko;
        eewacyseykeqcsgi:
        $aqykuigiuwmmcieu = $qqscaoyqikuyeoaw;
        goto iekkoiwkmagacmui;
        ycqcgecgwiaioguy:
        $aqykuigiuwmmcieu = $this->sscegwueamckwmcy("\164\x68\145\155\145\137\x74\145\x6d\160\154\141\164\x65\x5f\x72\145\x71\x75\x69\x72\x65\155\x65\156\164\163", $aqykuigiuwmmcieu);
        goto kegqauaaamqicscy;
        oiiiwwmwokesyqwo:
        $yeacayasgueouoqc = $eyoesceegakeygsi->yyewsaiwmyggmumg();
        goto wcoywkwsguoyysay;
        esyeigyikuqioumu:
        if (!($ymqmyyeuycgmigyo && !$aqykuigiuwmmcieu)) {
            goto yimaquocemaqgkew;
        }
        goto qwuqiimucosmgmei;
        qgqckcyimogeucws:
        egkyuaemcsesciio:
        goto wyqumeogqqakouyw;
        souoecscwyauueko:
        yckakqcyqksckiwg:
        goto kaukomgswmysiuus;
        mgcieuiwescwqymy:
        if (is_array($ccamueccusigaaio)) {
            goto ocqcqsmmqaiiayis;
        }
        goto uyyomesiccsqemog;
        eiyiymqwqgyqcgkw:
    }
}
