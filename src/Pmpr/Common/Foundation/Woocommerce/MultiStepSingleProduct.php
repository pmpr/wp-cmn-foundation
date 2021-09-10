<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce;

use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group;
use Pmpr\Common\Foundation\FormMaker\Front\MultiStepForm;
use Pmpr\Common\Foundation\FormMaker\Front\Step;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use WC_Product;
use WC_Product_Simple;
use WC_Product_Variable;

abstract class MultiStepSingleProduct extends Common
{
    const NEXT_STEP_BUTTON = "\x6e\145\x78\164\x5f\x73\x74\x65\x70\137\x62\x75\164\164\x6f\x6e";
    const PRODUCT_SINGLE_STEPS = "\x70\x72\x6f\x64\165\x63\x74\137\163\x69\x6e\x67\154\145\x5f\163\164\145\x70\x73";
    
    protected array $steps = [];
    
    protected ?int $product = null;
    
    protected ?MultiStepForm $form = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\151\156\151\164"])->qcsmikeggeemccuu("\x77\160", [$this, "\x65\153\147\x65\145\143\157\141\x63\x77\155\163\165\143\x69\145"])->qcsmikeggeemccuu("\167\157\157\143\157\155\x6d\145\x72\143\145\x5f\163\x69\x6e\147\x6c\x65\137\160\x72\x6f\144\x75\143\164\137\163\x75\x6d\155\141\162\171", [$this, "\x69\151\x77\x69\151\x79\153\163\x65\141\x75\161\161\x63\x79\161"], 9)->qcsmikeggeemccuu("\x77\157\157\143\x6f\155\x6d\x65\x72\143\x65\137\x73\151\156\147\154\x65\137\x70\x72\157\144\165\x63\x74\137\163\x75\155\x6d\141\162\x79", [$this, "\x69\163\163\161\x65\167\x65\x73\x67\145\x63\x65\x71\147\161\x6b"], 501);
        parent::wigskegsqequoeks();
    }
    public function ekgeecoacwmsucie()
    {
        goto oykmqmogcwumacqq;
        mmyckscscsmqsqwo:
        aiqskweckwoegquq:
        goto aaoueeomccwsoycq;
        psqooaaoocusoyag:
        faeciyigcmyieesm:
        goto mseiksmausoaqecy;
        aaoueeomccwsoycq:
        acyuamggaiuqmsoa:
        goto wggkwquawceyksmk;
        oykmqmogcwumacqq:
        if (!$this->cyeywmmccyoumgku()) {
            goto acyuamggaiuqmsoa;
        }
        goto icmgwewmusucsooy;
        mseiksmausoaqecy:
        $this->enqueue();
        goto mmyckscscsmqsqwo;
        swcqqiyagauaogiy:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            goto eyiigmyweugmgckw;
            eyiigmyweugmgckw:
            if (!(ManipulateArray::get($wyeyeaaekyoyimqu, self::TITLE) && ManipulateArray::get($wyeyeaaekyoyimqu, self::TEMPLATE))) {
                goto qguqeweisuimgyqk;
            }
            goto mgkgeuqasqcaimou;
            mgkgeuqasqcaimou:
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            goto syycscyugcgsquwm;
            syycscyugcgsquwm:
            qguqeweisuimgyqk:
            goto wcsicmaoskwcaqou;
            wcsicmaoskwcaqou:
            qakcamuiqmiscugu:
            goto qmgwqgkuucwysswc;
            qmgwqgkuucwysswc:
        }
        goto psqooaaoocusoyag;
        icmgwewmusucsooy:
        $asuggasaseaacmqu = ManipulatePost::igawqaomowicuayw(self::PRODUCT_SINGLE_STEPS, $this->aqasygcsqysmmyke());
        goto myyuyqequamqekoc;
        myyuyqequamqekoc:
        if (!($asuggasaseaacmqu && is_array($asuggasaseaacmqu))) {
            goto aiqskweckwoegquq;
        }
        goto swcqqiyagauaogiy;
        wggkwquawceyksmk:
    }
    public function init()
    {
        goto gciymsqoaosekywi;
        ikqqueokumaakwmk:
        ggscugaoyeccwaoq:
        goto ikuyuccwmwasokmy;
        caawoosasoogaiwa:
        MetaBox::cgygmuguceeosoey(self::PRODUCT_SINGLE_STEPS . "\137\146\157\162\x6d", __("\x41\x64\x64\x20\124\x6f\x20\103\x61\162\164\40\x53\x74\145\160\163", PR__CMN__FOUNDATION), true)->ewweaossowcqywaw($this->qegwqkeqkmgeyouk())->mgieiwsmcswmmiim(self::PRODUCT)->maosyyqsuygkawma()->saemoowcasogykak(IconFontawesomeInterface::ICON_FORWARD_STEP);
        goto ikqqueokumaakwmk;
        gciymsqoaosekywi:
        if (!$this->oiomuqiuyskqewke()) {
            goto ggscugaoyeccwaoq;
        }
        goto caawoosasoogaiwa;
        ikuyuccwmwasokmy:
    }
    
    public function yyoqecggyacaseko() : ?MultiStepForm
    {
        goto aiegomwmomwugkaa;
        yqysoqweammswcea:
        return $this->form;
        goto oesieyemekcikmuo;
        ycwkcyukyieusyce:
        $this->form = $eaoumsseceiowgsk;
        goto ywskqocaomieoeuo;
        aiegomwmomwugkaa:
        if ($this->form) {
            goto gmwcswqmcyogosia;
        }
        goto oysgkcoiouaikyys;
        oysgkcoiouaikyys:
        $eaoumsseceiowgsk = new MultiStepForm(ManipulateString::uniqid(5));
        goto gikmiimsmmugmewi;
        gikmiimsmmugmewi:
        $eaoumsseceiowgsk->iiqoooqcakkaeyiw();
        goto ycwkcyukyieusyce;
        ywskqocaomieoeuo:
        gmwcswqmcyogosia:
        goto yqysoqweammswcea;
        oesieyemekcikmuo:
    }
    
    public function aqasygcsqysmmyke() : ?int
    {
        return $this->product;
    }
    
    public function yiagkoqoiemmqssu() : ?WC_Product
    {
        return ManipulateWoocommerce::aqasygcsqysmmyke($this->aqasygcsqysmmyke());
    }
    public function iiwiiykseauqqcyq()
    {
        goto ymygyumokgcugqco;
        cukkwcqimawsesga:
        ob_start();
        goto cumkyeqakeicycqy;
        cumkyeqakeicycqy:
        okcicyakakceigwe:
        goto smecgcsaskaiyqwg;
        ymygyumokgcugqco:
        if (!$this->cyeywmmccyoumgku()) {
            goto okcicyakakceigwe;
        }
        goto cukkwcqimawsesga;
        smecgcsaskaiyqwg:
    }
    public function issqewesgeceqgqk()
    {
        goto yeyuwakqagwqqmuc;
        eaeowkksqokeigsq:
        iwcqqisaagoyaoyq:
        goto qcmiieemioisoyyi;
        ouakugqyqismmmwq:
        ob_clean();
        goto eseyuoaaskemwycm;
        eyimcucoicmimiao:
        kwqqookuogugoeoc:
        goto eaeowkksqokeigsq;
        eseyuoaaskemwycm:
        $this->esoeigiuggwycwiq();
        goto akccmuykyisokmqm;
        yeyuwakqagwqqmuc:
        if (!$this->cyeywmmccyoumgku()) {
            goto iwcqqisaagoyaoyq;
        }
        goto ouakugqyqismmmwq;
        qmeuekyqssiomcyy:
        $this->yyoqecggyacaseko()->render(["\145\143\150\157" => true]);
        goto eyimcucoicmimiao;
        akccmuykyisokmqm:
        if (!$this->yyoqecggyacaseko()->wmoeeiseqeecugmu()) {
            goto kwqqookuogugoeoc;
        }
        goto qmeuekyqssiomcyy;
        qcmiieemioisoyyi:
    }
    
    public function oiomuqiuyskqewke() : bool
    {
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        return $ccamueccusigaaio && is_admin() && (ManipulateServer::get("\141\143\164\x69\x6f\156") == "\x65\144\151\164" && ManipulateServer::get(self::POST) == $ccamueccusigaaio || ManipulateServer::ayueggmoqeeukqmq("\141\143\164\151\x6f\x6e") == "\145\x64\151\x74\160\157\x73\164");
    }
    
    public function syguimaaeugakesm() : Group
    {
        return MetaBox::iseogkiymousogom(self::PRODUCT_SINGLE_STEPS, __("\123\164\145\x70", PR__CMN__FOUNDATION))->mkksewyosgeumwsa(MetaBox::wcwmusaouiqaqeww(self::ENABLE, __("\105\156\x61\142\154\145", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::TITLE, __("\124\151\164\154\145", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::DESCRIPTION, __("\x44\145\163\x63\162\151\160\x74\151\157\x6e", PR__CMN__FOUNDATION))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::ICON))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::TEMPLATE, __("\124\145\155\x70\154\x61\x74\145", PR__CMN__FOUNDATION), $this->swocoigyikkommyq()))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::NEXT_STEP_BUTTON, __("\116\145\170\x74\x20\123\x74\x65\160\40\102\165\x74\x74\x6f\156\x20\124\x69\164\x6c\145", PR__CMN__FOUNDATION))->eyygsasuqmommkua(__("\116\145\x78\x74\40\123\x74\145\160", PR__CMN__FOUNDATION)))->usosgsaaimqcysyk()->awaeegwoiqoisoam([self::TEMPLATE]);
    }
    
    public function cyeywmmccyoumgku() : bool
    {
        goto swuomeuwkcgwekss;
        scmkeeaewmeqguac:
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        goto qqeiuucaguymmsws;
        swuomeuwkcgwekss:
        $ksaameoqigiaoigg = false;
        goto ccwwqiosmasqqqwu;
        kqueakeekumokwoe:
        return $ksaameoqigiaoigg;
        goto okgweyikqgcceggq;
        ccwwqiosmasqqqwu:
        if (!DecoratorQuery::cukiusasccucgwqc(self::PRODUCT)) {
            goto mkskmcusskkouyyi;
        }
        goto scmkeeaewmeqguac;
        qqeiuucaguymmsws:
        $ksaameoqigiaoigg = $ccamueccusigaaio && ManipulatePost::mwikyscisascoeea() === $ccamueccusigaaio;
        goto owqiausosmeaugay;
        owqiausosmeaugay:
        mkskmcusskkouyyi:
        goto kqueakeekumokwoe;
        okgweyikqgcceggq:
    }
    
    public function qegwqkeqkmgeyouk() : array
    {
        return [$this->syguimaaeugakesm()];
    }
    
    public function wmoeeiseqeecugmu() : bool
    {
        return !empty($this->guiyusikssumecwk());
    }
    
    public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self
    {
        $this->steps[] = $wyeyeaaekyoyimqu;
        return $this;
    }
    
    public function guiyusikssumecwk() : array
    {
        return $this->steps;
    }
    
    public function maoomkygegkowemi(array $asuggasaseaacmqu) : self
    {
        goto kquqieqqiieakmoa;
        kquqieqqiieakmoa:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            ycucsikocgkiesgi:
        }
        goto usakoyequcyysywo;
        usakoyequcyysywo:
        csisksagguuywuia:
        goto kwmgoowcwggsyokw;
        kwmgoowcwggsyokw:
        return $this;
        goto okamgiuocakyggwo;
        okamgiuocakyggwo:
    }
    public function esoeigiuggwycwiq()
    {
        goto mweoqymwyuimuakm;
        kuwecmygikeyisuq:
        gcywqkqkwkcmoawo:
        goto augwgqgcukgkywiw;
        augwgqgcukgkywiw:
        iuikeaqqcukamyqm:
        goto kmkoiwuimosekikq;
        swwmkisacmieqiae:
        if (!$asuggasaseaacmqu) {
            goto iuikeaqqcukamyqm;
        }
        goto imqeimsscmwgasys;
        imqeimsscmwgasys:
        foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) {
            goto kyaiywcwwmeqwyaw;
            egcycueumoemiuai:
            if (!($oqkgomucoyswikgk && $meqocwsecsywiiqs && $qqscaoyqikuyeoaw)) {
                goto iywiyewymemgqacq;
            }
            goto miyggyguyamiggcm;
            swuquosuguoomaeq:
            cmcwskwgaiauugws:
            goto occaiwsgmaykoqey;
            sskkiisoqmmsocic:
            if (!$mkemseqwyqgsgsek) {
                goto gmoykcyssieuqueu;
            }
            goto siuuokwymeygcosy;
            miyggyguyamiggcm:
            $oyoqqgcsgigcmqqu = new Step($momcykaoccoymeig + 1);
            goto gwucakcwqkiiqyyg;
            eyaesumwwwgisaym:
            iywiyewymemgqacq:
            goto swuquosuguoomaeq;
            maswyugssquqqggq:
            [$oqkgomucoyswikgk, $meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $mkqqqewsokcswckc, $qqscaoyqikuyeoaw, $mkemseqwyqgsgsek] = array_values($qqswgiawgeaeoecu);
            goto egcycueumoemiuai;
            mcyamakgwewogwqi:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $this->rsysgcucogueguuk($qqscaoyqikuyeoaw));
            goto aqamaqggiseeioqq;
            gwucakcwqkiiqyyg:
            $mkqqqewsokcswckc = ManipulateHTML::uuccukgasskgimsq("\160", ["\143\x6c\141\x73\163" => "\x66\157\156\164\x2d\x77\x65\x69\x67\x68\164\x2d\x62\157\x6c\x64\40\146\x6f\156\x74\55\x31\x37\x20\164\145\170\x74\55\155\x75\164\x65\x64"], $mkqqqewsokcswckc);
            goto mcyamakgwewogwqi;
            siuuokwymeygcosy:
            $oyoqqgcsgigcmqqu->gwwmcykumqueaosa($mkemseqwyqgsgsek);
            goto icksskeigsiugace;
            ceyygoicaeoqwwio:
            $this->yyoqecggyacaseko()->mgqggiyywoageqmo($oyoqqgcsgigcmqqu);
            goto eyaesumwwwgisaym;
            kyaiywcwwmeqwyaw:
            $qqswgiawgeaeoecu = ManipulateArray::gucyquqwoimkiiaq($wyeyeaaekyoyimqu, [self::ENABLE, self::TITLE, self::ICON, self::DESCRIPTION, self::TEMPLATE, self::NEXT_STEP_BUTTON]);
            goto maswyugssquqqggq;
            icksskeigsiugace:
            gmoykcyssieuqueu:
            goto ceyygoicaeoqwwio;
            aqamaqggiseeioqq:
            $oyoqqgcsgigcmqqu->saemoowcasogykak($wkaqekwwgqsqwcoi)->gswweykyogmsyawy($meqocwsecsywiiqs)->oguessuismosauuu($mkqqqewsokcswckc . $ewgwqamkygiqaawc)->gucwmccyimoagwcm($mkqqqewsokcswckc);
            goto sskkiisoqmmsocic;
            occaiwsgmaykoqey:
        }
        goto kuwecmygikeyisuq;
        mweoqymwyuimuakm:
        $asuggasaseaacmqu = $this->guiyusikssumecwk();
        goto swwmkisacmieqiae;
        kmkoiwuimosekikq:
    }
    public function enqueue()
    {
        $this->yyoqecggyacaseko()->enqueue();
    }
    
    public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array
    {
        return [];
    }
    
    public abstract function swocoigyikkommyq() : array;
}
