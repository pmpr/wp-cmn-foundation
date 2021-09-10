<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    const NEXT_STEP_BUTTON = "\156\145\170\x74\137\x73\164\145\x70\x5f\x62\x75\x74\164\x6f\x6e";
    const PRODUCT_SINGLE_STEPS = "\160\162\157\144\165\x63\164\x5f\x73\x69\156\x67\154\x65\137\163\164\x65\x70\x73";
    
    protected array $steps = [];
    
    protected ?int $product = null;
    
    protected ?MultiStepForm $form = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x69\x6e\x69\164"])->qcsmikeggeemccuu("\x77\160", [$this, "\x65\x6b\x67\145\x65\x63\x6f\141\143\167\155\x73\x75\143\x69\x65"])->qcsmikeggeemccuu("\x77\157\x6f\143\157\x6d\x6d\x65\x72\x63\145\137\163\151\156\147\x6c\145\x5f\x70\162\x6f\144\x75\143\164\137\x73\x75\155\x6d\x61\x72\x79", [$this, "\x69\151\167\151\x69\x79\153\163\x65\141\165\161\x71\x63\x79\161"], 9)->qcsmikeggeemccuu("\167\x6f\157\143\x6f\155\155\x65\x72\143\145\137\x73\x69\156\147\x6c\145\x5f\x70\162\x6f\144\165\x63\164\137\x73\165\x6d\155\x61\162\x79", [$this, "\151\163\163\161\145\167\x65\x73\147\145\x63\145\161\x67\x71\x6b"], 501);
        parent::wigskegsqequoeks();
    }
    public function ekgeecoacwmsucie()
    {
        goto qmgwqgkuucwysswc;
        oykmqmogcwumacqq:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            goto faeciyigcmyieesm;
            qguqeweisuimgyqk:
            cgamwegmkwmmsoow:
            goto eyiigmyweugmgckw;
            qakcamuiqmiscugu:
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            goto qguqeweisuimgyqk;
            faeciyigcmyieesm:
            if (!(ManipulateArray::get($wyeyeaaekyoyimqu, self::TITLE) && ManipulateArray::get($wyeyeaaekyoyimqu, self::TEMPLATE))) {
                goto cgamwegmkwmmsoow;
            }
            goto qakcamuiqmiscugu;
            eyiigmyweugmgckw:
            iukkuoewgiwcoukw:
            goto mgkgeuqasqcaimou;
            mgkgeuqasqcaimou:
        }
        goto icmgwewmusucsooy;
        acyuamggaiuqmsoa:
        if (!($asuggasaseaacmqu && is_array($asuggasaseaacmqu))) {
            goto syycscyugcgsquwm;
        }
        goto oykmqmogcwumacqq;
        qmgwqgkuucwysswc:
        if (!$this->cyeywmmccyoumgku()) {
            goto wcsicmaoskwcaqou;
        }
        goto aiqskweckwoegquq;
        swcqqiyagauaogiy:
        syycscyugcgsquwm:
        goto psqooaaoocusoyag;
        myyuyqequamqekoc:
        $this->enqueue();
        goto swcqqiyagauaogiy;
        icmgwewmusucsooy:
        eeiseascemqaocmo:
        goto myyuyqequamqekoc;
        psqooaaoocusoyag:
        wcsicmaoskwcaqou:
        goto mseiksmausoaqecy;
        aiqskweckwoegquq:
        $asuggasaseaacmqu = ManipulatePost::igawqaomowicuayw(self::PRODUCT_SINGLE_STEPS, $this->aqasygcsqysmmyke());
        goto acyuamggaiuqmsoa;
        mseiksmausoaqecy:
    }
    public function init()
    {
        goto aaoueeomccwsoycq;
        wggkwquawceyksmk:
        MetaBox::cgygmuguceeosoey(self::PRODUCT_SINGLE_STEPS . "\x5f\x66\x6f\162\155", __("\x41\144\144\40\x54\157\40\x43\x61\162\164\x20\x53\164\x65\160\x73", PR__CMN__FOUNDATION), true)->ewweaossowcqywaw($this->qegwqkeqkmgeyouk())->mgieiwsmcswmmiim(self::PRODUCT)->maosyyqsuygkawma()->saemoowcasogykak(IconFontawesomeInterface::ICON_FORWARD_STEP);
        goto ggscugaoyeccwaoq;
        aaoueeomccwsoycq:
        if (!$this->oiomuqiuyskqewke()) {
            goto mmyckscscsmqsqwo;
        }
        goto wggkwquawceyksmk;
        ggscugaoyeccwaoq:
        mmyckscscsmqsqwo:
        goto gciymsqoaosekywi;
        gciymsqoaosekywi:
    }
    
    public function yyoqecggyacaseko() : ?MultiStepForm
    {
        goto ikqqueokumaakwmk;
        ikuyuccwmwasokmy:
        $eaoumsseceiowgsk = new MultiStepForm(ManipulateString::uniqid(5));
        goto gmwcswqmcyogosia;
        ikqqueokumaakwmk:
        if ($this->form) {
            goto caawoosasoogaiwa;
        }
        goto ikuyuccwmwasokmy;
        gikmiimsmmugmewi:
        return $this->form;
        goto ycwkcyukyieusyce;
        oysgkcoiouaikyys:
        caawoosasoogaiwa:
        goto gikmiimsmmugmewi;
        gmwcswqmcyogosia:
        $eaoumsseceiowgsk->iiqoooqcakkaeyiw();
        goto aiegomwmomwugkaa;
        aiegomwmomwugkaa:
        $this->form = $eaoumsseceiowgsk;
        goto oysgkcoiouaikyys;
        ycwkcyukyieusyce:
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
        goto yqysoqweammswcea;
        okcicyakakceigwe:
        ywskqocaomieoeuo:
        goto ymygyumokgcugqco;
        yqysoqweammswcea:
        if (!$this->cyeywmmccyoumgku()) {
            goto ywskqocaomieoeuo;
        }
        goto oesieyemekcikmuo;
        oesieyemekcikmuo:
        ob_start();
        goto okcicyakakceigwe;
        ymygyumokgcugqco:
    }
    public function issqewesgeceqgqk()
    {
        goto smecgcsaskaiyqwg;
        iwcqqisaagoyaoyq:
        $this->esoeigiuggwycwiq();
        goto yeyuwakqagwqqmuc;
        yeyuwakqagwqqmuc:
        if (!$this->yyoqecggyacaseko()->wmoeeiseqeecugmu()) {
            goto cukkwcqimawsesga;
        }
        goto ouakugqyqismmmwq;
        ouakugqyqismmmwq:
        $this->yyoqecggyacaseko()->render(["\145\x63\x68\x6f" => true]);
        goto eseyuoaaskemwycm;
        akccmuykyisokmqm:
        cumkyeqakeicycqy:
        goto qmeuekyqssiomcyy;
        eseyuoaaskemwycm:
        cukkwcqimawsesga:
        goto akccmuykyisokmqm;
        smecgcsaskaiyqwg:
        if (!$this->cyeywmmccyoumgku()) {
            goto cumkyeqakeicycqy;
        }
        goto kwqqookuogugoeoc;
        kwqqookuogugoeoc:
        ob_clean();
        goto iwcqqisaagoyaoyq;
        qmeuekyqssiomcyy:
    }
    
    public function oiomuqiuyskqewke() : bool
    {
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        return $ccamueccusigaaio && is_admin() && (ManipulateServer::get("\x61\143\164\151\157\x6e") == "\x65\144\x69\x74" && ManipulateServer::get(self::POST) == $ccamueccusigaaio || ManipulateServer::ayueggmoqeeukqmq("\141\x63\164\151\157\156") == "\x65\144\x69\164\160\x6f\163\164");
    }
    
    public function syguimaaeugakesm() : Group
    {
        return MetaBox::iseogkiymousogom(self::PRODUCT_SINGLE_STEPS, __("\123\164\145\x70", PR__CMN__FOUNDATION))->mkksewyosgeumwsa(MetaBox::wcwmusaouiqaqeww(self::ENABLE, __("\x45\156\x61\142\x6c\145", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::TITLE, __("\124\151\x74\154\x65", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa(MetaBox::uouyygwcgsmygaee(self::DESCRIPTION, __("\x44\145\x73\x63\x72\x69\160\164\151\157\156", PR__CMN__FOUNDATION))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::ICON))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::TEMPLATE, __("\124\145\155\160\x6c\x61\x74\145", PR__CMN__FOUNDATION), $this->swocoigyikkommyq()))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::NEXT_STEP_BUTTON, __("\116\x65\x78\x74\40\123\164\x65\160\x20\102\165\x74\164\x6f\156\40\124\x69\x74\154\145", PR__CMN__FOUNDATION))->eyygsasuqmommkua(__("\116\x65\170\x74\40\123\x74\145\x70", PR__CMN__FOUNDATION)))->usosgsaaimqcysyk()->awaeegwoiqoisoam([self::TEMPLATE]);
    }
    
    public function cyeywmmccyoumgku() : bool
    {
        goto eaeowkksqokeigsq;
        qcmiieemioisoyyi:
        if (!DecoratorQuery::cukiusasccucgwqc(self::PRODUCT)) {
            goto eyimcucoicmimiao;
        }
        goto mkskmcusskkouyyi;
        eaeowkksqokeigsq:
        $ksaameoqigiaoigg = false;
        goto qcmiieemioisoyyi;
        ccwwqiosmasqqqwu:
        eyimcucoicmimiao:
        goto scmkeeaewmeqguac;
        swuomeuwkcgwekss:
        $ksaameoqigiaoigg = $ccamueccusigaaio && ManipulatePost::mwikyscisascoeea() === $ccamueccusigaaio;
        goto ccwwqiosmasqqqwu;
        scmkeeaewmeqguac:
        return $ksaameoqigiaoigg;
        goto qqeiuucaguymmsws;
        mkskmcusskkouyyi:
        $ccamueccusigaaio = $this->aqasygcsqysmmyke();
        goto swuomeuwkcgwekss;
        qqeiuucaguymmsws:
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
        goto okgweyikqgcceggq;
        ycucsikocgkiesgi:
        return $this;
        goto kquqieqqiieakmoa;
        csisksagguuywuia:
        owqiausosmeaugay:
        goto ycucsikocgkiesgi;
        okgweyikqgcceggq:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            kqueakeekumokwoe:
        }
        goto csisksagguuywuia;
        kquqieqqiieakmoa:
    }
    public function esoeigiuggwycwiq()
    {
        goto swuquosuguoomaeq;
        mweoqymwyuimuakm:
        usakoyequcyysywo:
        goto swwmkisacmieqiae;
        swwmkisacmieqiae:
        eyaesumwwwgisaym:
        goto imqeimsscmwgasys;
        iuikeaqqcukamyqm:
        foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) {
            goto cmcwskwgaiauugws;
            icksskeigsiugace:
            kwmgoowcwggsyokw:
            goto ceyygoicaeoqwwio;
            iywiyewymemgqacq:
            if (!($oqkgomucoyswikgk && $meqocwsecsywiiqs && $qqscaoyqikuyeoaw)) {
                goto gcywqkqkwkcmoawo;
            }
            goto kyaiywcwwmeqwyaw;
            cmcwskwgaiauugws:
            $qqswgiawgeaeoecu = ManipulateArray::gucyquqwoimkiiaq($wyeyeaaekyoyimqu, [self::ENABLE, self::TITLE, self::ICON, self::DESCRIPTION, self::TEMPLATE, self::NEXT_STEP_BUTTON]);
            goto gmoykcyssieuqueu;
            kyaiywcwwmeqwyaw:
            $oyoqqgcsgigcmqqu = new Step($momcykaoccoymeig + 1);
            goto maswyugssquqqggq;
            sskkiisoqmmsocic:
            $this->yyoqecggyacaseko()->mgqggiyywoageqmo($oyoqqgcsgigcmqqu);
            goto siuuokwymeygcosy;
            miyggyguyamiggcm:
            $oyoqqgcsgigcmqqu->saemoowcasogykak($wkaqekwwgqsqwcoi)->gswweykyogmsyawy($meqocwsecsywiiqs)->oguessuismosauuu($mkqqqewsokcswckc . $ewgwqamkygiqaawc)->gucwmccyimoagwcm($mkqqqewsokcswckc);
            goto gwucakcwqkiiqyyg;
            egcycueumoemiuai:
            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $this->rsysgcucogueguuk($qqscaoyqikuyeoaw));
            goto miyggyguyamiggcm;
            mcyamakgwewogwqi:
            $oyoqqgcsgigcmqqu->gwwmcykumqueaosa($mkemseqwyqgsgsek);
            goto aqamaqggiseeioqq;
            gmoykcyssieuqueu:
            [$oqkgomucoyswikgk, $meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $mkqqqewsokcswckc, $qqscaoyqikuyeoaw, $mkemseqwyqgsgsek] = array_values($qqswgiawgeaeoecu);
            goto iywiyewymemgqacq;
            maswyugssquqqggq:
            $mkqqqewsokcswckc = ManipulateHTML::uuccukgasskgimsq("\x70", ["\x63\154\141\x73\163" => "\x66\157\156\164\55\167\x65\x69\x67\x68\x74\55\142\x6f\154\144\x20\x66\x6f\156\x74\x2d\61\67\x20\x74\x65\x78\x74\x2d\155\165\x74\145\144"], $mkqqqewsokcswckc);
            goto egcycueumoemiuai;
            siuuokwymeygcosy:
            gcywqkqkwkcmoawo:
            goto icksskeigsiugace;
            aqamaqggiseeioqq:
            okamgiuocakyggwo:
            goto sskkiisoqmmsocic;
            gwucakcwqkiiqyyg:
            if (!$mkemseqwyqgsgsek) {
                goto okamgiuocakyggwo;
            }
            goto mcyamakgwewogwqi;
            ceyygoicaeoqwwio:
        }
        goto mweoqymwyuimuakm;
        swuquosuguoomaeq:
        $asuggasaseaacmqu = $this->guiyusikssumecwk();
        goto occaiwsgmaykoqey;
        occaiwsgmaykoqey:
        if (!$asuggasaseaacmqu) {
            goto eyaesumwwwgisaym;
        }
        goto iuikeaqqcukamyqm;
        imqeimsscmwgasys:
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
