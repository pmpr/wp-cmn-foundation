<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\FormMaker\Admin\MetaTab;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class Setting extends Page
{
    
    protected array $defaults = [];
    
    public function __construct()
    {
        goto imqgamcocykmuweu;
        uoiawymwqmyiiosk:
        parent::__construct();
        goto wcsiocqmcgkyueoc;
        ggumyqmosmckemum:
        if ($this->cgugaaoykcyiomuk()) {
            goto oigimmkyumckwick;
        }
        goto tgousgyiiaiaeack;
        tgousgyiiaiaeack:
        $this->parentMenu = "\x6f\160\x74\151\157\156\x73\55\147\x65\156\145\162\x61\x6c\x2e\x70\150\x70";
        goto kuiqawwoeaeuemcy;
        imqgamcocykmuweu:
        $this->type = "\163\145\x74\164\151\x6e\147\x73";
        goto ggumyqmosmckemum;
        kuiqawwoeaeuemcy:
        oigimmkyumckwick:
        goto uoiawymwqmyiiosk;
        wcsiocqmcgkyueoc:
    }
    
    public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab
    {
        $uqcooyiiyysckskk->kkigeuaeguyueaem('')->ceiqwucmgawwmawo(__("\x53\141\166\145\x20\103\x68\x61\x6e\x67\145\163", PR__CMN__FOUNDATION));
        return parent::cosqcmekuiigqywc($uqcooyiiyysckskk);
    }
    
    public function mwikyscisascoeea() : ?string
    {
        goto msmmwgagckyuccii;
        ssqmoeeuysgacwme:
        qoueskwwsaywasai:
        goto yckwoyawyoyskqea;
        yuuokwoimsawcwwq:
        if ($aokagokqyuysuksm) {
            goto qoueskwwsaywasai;
        }
        goto euamqcukmwkycmcs;
        euamqcukmwkycmcs:
        $aokagokqyuysuksm = "{$this->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}";
        goto ssqmoeeuysgacwme;
        yckwoyawyoyskqea:
        return $aokagokqyuysuksm;
        goto aokwwkysaawymggq;
        msmmwgagckyuccii:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto yuuokwoimsawcwwq;
        aokwwkysaawymggq:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\165\160\144\141\164\145\137\x6f\x70\164\x69\x6f\x6e\x5f{$this->cisyiemkeykgkomc()}", [$this, "\157\143\x71\x61\x71\163\x77\157\x65\x79\163\x63\165\157\x61\157"])->qcsmikeggeemccuu("\165\160\x64\141\164\145\x5f\x6f\160\164\x69\157\x6e\x5f{$this->cisyiemkeykgkomc()}", [$this, "\163\x63\x6d\155\171\155\161\x6b\x6f\x79\x63\x6b\x67\153\141\155"], 10, 2)->qcsmikeggeemccuu("\x75\160\x64\141\164\145\137\163\145\x74\164\151\156\147\137{$this->cisyiemkeykgkomc()}", [$this, "\x65\x69\x61\141\x63\x65\x67\x6b\151\147\x71\x69\x77\x61\167\147"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\147\145\x74\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x6d\x79\167\167\171\x65\147\153\x75\x79\x6d\x6f\157\x6b\x65\x67"], 10, 2)->cecaguuoecmccuse("\147\x65\164\137{$this->aakmagwggmkoiiyu()}\137\x73\145\164\164\151\x6e\x67", [$this, "\x65\151\x77\x63\x75\x71\x69\147\141\x79\151\147\x69\x6d\x61\153"], 10, 2)->cecaguuoecmccuse("\160\x72\145\x5f\x75\160\144\141\164\x65\137\157\160\164\151\x6f\x6e\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x63\151\x61\147\x63\157\x69\171\145\x69\x6f\x61\x67\147\163\157"], 50, 3)->cecaguuoecmccuse("\143\x6d\142\62\137\157\x76\x65\162\162\151\144\x65\x5f\157\160\x74\x69\x6f\156\137\147\x65\x74\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x6d\155\145\161\163\165\141\x71\141\143\167\x75\x6f\147\x79\141"], 2, 1);
        parent::kgquecmsgcouyaya();
    }
    
    public function gecwckciuqqukcko() : array
    {
        return $this->defaults;
    }
    
    public function syuyisqgcskmaymc($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->defaults[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $eqgoocgaqwqcimie;
    }
    private function wascmggskiyiaogs()
    {
        goto uqscqwswiqsgsygk;
        qkouugqimqywiiag:
        
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto qsgikaecsueeawcg;
        smusacowuccegeqc:
        if (!($ggauoeuaesiymgee && !self::mywwyegkuymookeg())) {
            goto ywmqqmgacioekiim;
        }
        goto qkouugqimqywiiag;
        wgqaaiuiaegacqug:
        if (!($ggauoeuaesiymgee && is_array($ggauoeuaesiymgee))) {
            goto ygcicamkgawkwygs;
        }
        goto kiuemcsmyusiamwy;
        qsgikaecsueeawcg:
        $ggauoeuaesiymgee = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\144\x65\146\141\165\x6c\164\x5f\163\145\x74\x74\x69\156\147\x73", false), $ggauoeuaesiymgee, $this->cisyiemkeykgkomc());
        goto wgqaaiuiaegacqug;
        kummicswwkwwkyys:
        ygcicamkgawkwygs:
        goto wwkqmuawuugoiwey;
        wwkqmuawuugoiwey:
        ywmqqmgacioekiim:
        goto aoeqqmeqcaeksamm;
        kiuemcsmyusiamwy:
        DecoratorOption::add($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto kummicswwkwwkyys;
        uqscqwswiqsgsygk:
        $ggauoeuaesiymgee = $this->gecwckciuqqukcko();
        goto smusacowuccegeqc;
        aoeqqmeqcaeksamm:
    }
    
    public function ciagcoiyeioaggso($eqgoocgaqwqcimie, $msqkueqksqwmskak, $omkysikckkcieckq)
    {
        goto akgccuiekaowwmeq;
        akgccuiekaowwmeq:
        if (!($eqgoocgaqwqcimie !== $msqkueqksqwmskak && maybe_serialize($eqgoocgaqwqcimie) !== maybe_serialize($msqkueqksqwmskak))) {
            goto qougaquyiyoekgme;
        }
        goto ywamicmegakyokoq;
        koeamciygeeqewcy:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy("\142\145\x66\157\x72\x65\x5f\x75\x70\x64\141\x74\x65\137{$this->cisyiemkeykgkomc()}", $eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto mukioeqsayqwycgu;
        ywamicmegakyokoq:
        $eqgoocgaqwqcimie = $this->iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto koeamciygeeqewcy;
        mukioeqsayqwycgu:
        qougaquyiyoekgme:
        goto wiuiqmkuuuscscoi;
        wiuiqmkuuuscscoi:
        return $eqgoocgaqwqcimie;
        goto cyiukscucygcyiow;
        cyiukscucygcyiow:
    }
    
    public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak)
    {
        return $eqgoocgaqwqcimie;
    }
    
    public function scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume)
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x73\141\x76\x65\x64", false), $msqkueqksqwmskak, $uwomkgseoiegeume);
    }
    public function ocqaqswoeyscuoao()
    {
        goto iggmoakswausicmq;
        ciaocyoemcwmgays:
        keguueuuiqyowgge:
        goto kaaosukiekmqcuas;
        emqaiyugeiukyqiw:
        if (!($skacuygeqykiwiwy = ManipulateSetting::cmaecekuqkwmemms(self::PR__CACHE__PATH))) {
            goto keguueuuiqyowgge;
        }
        goto gkqycsqguoaycowm;
        gkqycsqguoaycowm:
        $this->kcciqwskewsuaemk()->remove($skacuygeqykiwiwy);
        goto myigiaaggwcoyqmo;
        myigiaaggwcoyqmo:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\146\164\145\x72\x5f\x72\x65\155\x6f\x76\145\x5f\143\x61\143\150\x65\137\160\x61\164\x68"));
        goto ciaocyoemcwmgays;
        iggmoakswausicmq:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\142\x65\x66\157\162\x65\137\162\145\155\157\166\145\x5f\x63\141\143\x68\145\137\160\141\164\150"));
        goto emqaiyugeiukyqiw;
        kaaosukiekmqcuas:
    }
    
    public static function mywwyegkuymookeg()
    {
        goto wciqgiyuqauosqsm;
        uicakiyqmsqkkeiq:
        
        $ksaameoqigiaoigg = DecoratorOption::get($eiockasigaaayoem);
        goto yuakcmiumkmoseoy;
        yuakcmiumkmoseoy:
        wp_cache_set($eiockasigaaayoem, $ksaameoqigiaoigg);
        goto amicgsowmwecywga;
        scywagkqaaqkqyuq:
        $ksaameoqigiaoigg = $usymaaaeawgmyqig;
        goto aeoskcqgogoeieqq;
        wciqgiyuqauosqsm:
        $eiockasigaaayoem = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto kkwciycuekqewqak;
        amicgsowmwecywga:
        goto makqoouaaoyeckwu;
        goto kcgsqowasqeuaoyo;
        aeoskcqgogoeieqq:
        makqoouaaoyeckwu:
        goto mqomgaeswiquiasi;
        ywqgaoiyisukooog:
        if ($usymaaaeawgmyqig !== false) {
            goto oakqwukqiowuwgse;
        }
        goto uicakiyqmsqkkeiq;
        mqomgaeswiquiasi:
        return $ksaameoqigiaoigg;
        goto oumgmywcokuyaaky;
        kkwciycuekqewqak:
        $usymaaaeawgmyqig = wp_cache_get($eiockasigaaayoem);
        goto ywqgaoiyisukooog;
        kcgsqowasqeuaoyo:
        oakqwukqiowuwgse:
        goto scywagkqaaqkqyuq;
        oumgmywcokuyaaky:
    }
    
    public static function eiaacegkigqiwawg($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto uuowysiecmaqiskc;
        uyomoigikmsymiku:
        $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto ykcsckmiswouwaim;
        tiqqwmquwowcwsko:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto oyiakwoikeckycqe;
        umsiwskkkuuqygqe:
        return $eqgoocgaqwqcimie;
        goto ycgoekuqouciwkom;
        ykcsckmiswouwaim:
        self::oqyuwccsuskiwgew($qeqooyuoiasweuck);
        goto umsiwskkkuuqygqe;
        uuowysiecmaqiskc:
        if ($qeqooyuoiasweuck) {
            goto macwgscmecoymagu;
        }
        goto tiqqwmquwowcwsko;
        oyiakwoikeckycqe:
        macwgscmecoymagu:
        goto uyomoigikmsymiku;
        ycgoekuqouciwkom:
    }
    
    public static function oqyuwccsuskiwgew($qeqooyuoiasweuck = null)
    {
        goto qowqygggoieokiiw;
        qowqygggoieokiiw:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto qsyssqesmcoyuewk;
        myyyikoweqcgoucw:
        wp_cache_delete($uusmaiomayssaecw);
        goto yqewkyqauqqcyoyy;
        qsyssqesmcoyuewk:
        DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto myyyikoweqcgoucw;
        yqewkyqauqqcyoyy:
    }
    
    public static function myekoowckeqqeuyq($amakmumgguksgmum, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null) : bool
    {
        goto kkkoguowckoiqywi;
        cewyikqkeycuswys:
        if ($qeqooyuoiasweuck) {
            goto qmyeykyyqksyekuo;
        }
        goto qmkooikkcycouowk;
        camycossgaakcsiw:
        qmyeykyyqksyekuo:
        goto uaikkeuicmuuwccc;
        cgkoamymiwyauswk:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto awsgaesauouewgmi;
        quimoymcisyaqaug:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto qgqgsigokaomqkqe;
        awsgaesauouewgmi:
        wp_cache_delete($uusmaiomayssaecw);
        goto owooskgowayymosm;
        qmkooikkcycouowk:
        $qeqooyuoiasweuck = [];
        goto camycossgaakcsiw;
        uaikkeuicmuuwccc:
        $qeqooyuoiasweuck[$amakmumgguksgmum] = $eqgoocgaqwqcimie;
        goto cgkoamymiwyauswk;
        owooskgowayymosm:
        return DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto omcwcawuuiowsyiy;
        kkkoguowckoiqywi:
        if ($qeqooyuoiasweuck) {
            goto aauewmowygwgwusw;
        }
        goto quimoymcisyaqaug;
        qgqgsigokaomqkqe:
        aauewmowygwgwusw:
        goto cewyikqkeycuswys;
        omcwcawuuiowsyiy:
    }
    
    public static function yceqggqwokesouww($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto qekoeuskqquikiqa;
        sewqywuuoqaqgake:
        if ($amakmumgguksgmum) {
            goto uyiqkeoaoeesewkm;
        }
        goto oucegyaesucoaqcs;
        nsqquyqqqiceasgu:
        self::myekoowckeqqeuyq($uusmaiomayssaecw, $eqgoocgaqwqcimie);
        goto eooqoiuqayocqmqi;
        qekoeuskqquikiqa:
        $amakmumgguksgmum = self::eiwcuqigayigimak($uusmaiomayssaecw, null, $qeqooyuoiasweuck);
        goto sewqywuuoqaqgake;
        eooqoiuqayocqmqi:
        uyiqkeoaoeesewkm:
        goto gqmaowmomwymiiec;
        gqmaowmomwymiiec:
        return $amakmumgguksgmum;
        goto kywsgoqgqmmmmucg;
        oucegyaesucoaqcs:
        $amakmumgguksgmum = $eqgoocgaqwqcimie;
        goto nsqquyqqqiceasgu;
        kywsgoqgqmmmmucg:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false, $qeqooyuoiasweuck = null)
    {
        goto osskoqmmegqyksau;
        oykemeioosgeaqek:
        if (is_string($uusmaiomayssaecw)) {
            goto gqsemgkumwsooguq;
        }
        goto ewyywyaciesugmeu;
        ewyywyaciesugmeu:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto qqiomqmmgsgygyes;
        cgwqkgmqqyaqaeos:
        return $eqgoocgaqwqcimie;
        goto amaeeaeauswgoqic;
        wuaysaycmsuciagi:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto ugyeckwkgkiyiwqm;
        aymokcegeqgeuqai:
        auuoqiusumqggosg:
        goto caqyccimywimqwgw;
        wsgseaeaeuemmick:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto smisquuawsuaggqc;
        ugyeckwkgkiyiwqm:
        oekmmkgkgsuawkis:
        goto oykemeioosgeaqek;
        smisquuawsuaggqc:
        goto yimkweiuueksywey;
        goto aymokcegeqgeuqai;
        soqckwiemegiyosg:
        yimkweiuueksywey:
        goto ugyyuyequeekycsm;
        goicgikimugciika:
        gqsemgkumwsooguq:
        goto qcyamgiikmwuwsyu;
        qcyamgiikmwuwsyu:
        if (isset($qeqooyuoiasweuck[$uusmaiomayssaecw])) {
            goto auuoqiusumqggosg;
        }
        goto wsgseaeaeuemmick;
        osskoqmmegqyksau:
        if ($qeqooyuoiasweuck) {
            goto oekmmkgkgsuawkis;
        }
        goto wuaysaycmsuciagi;
        ugyyuyequeekycsm:
        ocuoiqskoseeoski:
        goto cgwqkgmqqyaqaeos;
        caqyccimywimqwgw:
        $eqgoocgaqwqcimie = $qeqooyuoiasweuck[$uusmaiomayssaecw];
        goto ssammmsycciagimy;
        ssammmsycciagimy:
        $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\157\x6e" ? true : $eqgoocgaqwqcimie;
        goto soqckwiemegiyosg;
        qqiomqmmgsgygyes:
        goto ocuoiqskoseeoski;
        goto goicgikimugciika;
        amaeeaeauswgoqic:
    }
    
    public static function wcoqgwyekgsmiueo(array $qiouiwasaauyaaue, string $ymqmyyeuycgmigyo, int $gaeqamemwmwsyukm = 1) : array
    {
        goto cmmckyaaioecwuse;
        wywkeewykggksckc:
        ackussqqoyomekeg:
        goto yiksaemwukcmqoks;
        ayqcwceyiiosgcka:
        if (!($qiouiwasaauyaaue && is_array($qiouiwasaauyaaue) && $isksgswsmmqgeqmo && is_array($isksgswsmmqgeqmo))) {
            goto ackussqqoyomekeg;
        }
        goto oeuquoqswksgymuw;
        yiksaemwukcmqoks:
        return $qiouiwasaauyaaue;
        goto wekseqwmumkkcsoc;
        oeuquoqswksgymuw:
        foreach ($isksgswsmmqgeqmo as $momcykaoccoymeig => $omkysikckkcieckq) {
            goto esyaossmykieskyg;
            umcgmioomggsuigo:
            unset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig]);
            goto secykwwqaoeuywim;
            kqkmsuoqweqqoiiq:
            $uusmaiomayssaecw = ManipulateArray::get($omkysikckkcieckq, self::KEY);
            goto uimggymiocacgyky;
            ogooawuumwuweeos:
            qiockgemuekykiuy:
            goto gkmimeqyqisqsosw;
            igwsysyakwoosysi:
            sweymqcmesceysqo:
            goto eeimuiikicqykmwa;
            esyaossmykieskyg:
            $omkysikckkcieckq = array_filter($omkysikckkcieckq);
            goto cwcsikiqeagwcocm;
            cwcsikiqeagwcocm:
            if (count($omkysikckkcieckq) >= $gaeqamemwmwsyukm) {
                goto iucqiqsagamegsmc;
            }
            goto umcgmioomggsuigo;
            yguaqcewwsageswq:
            $qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig][self::KEY] = ManipulateString::uniqid();
            goto igwsysyakwoosysi;
            uimggymiocacgyky:
            if ($uusmaiomayssaecw) {
                goto sweymqcmesceysqo;
            }
            goto yguaqcewwsageswq;
            emoiiiemgaasikyg:
            iucqiqsagamegsmc:
            goto kqkmsuoqweqqoiiq;
            secykwwqaoeuywim:
            goto uqgkoksouqicqiiy;
            goto emoiiiemgaasikyg;
            eeimuiikicqykmwa:
            uqgkoksouqicqiiy:
            goto ogooawuumwuweeos;
            gkmimeqyqisqsosw:
        }
        goto iyekaawoaqcqsssa;
        cmmckyaaioecwuse:
        $isksgswsmmqgeqmo = ManipulateArray::get($qiouiwasaauyaaue, $ymqmyyeuycgmigyo, []);
        goto ayqcwceyiiosgcka;
        iyekaawoaqcqsssa:
        qwacmyuwycyqmwkq:
        goto wywkeewykggksckc;
        wekseqwmumkkcsoc:
    }
    
    public function mmeqsuaqacwuogya($gcaqwmmqioouwccc)
    {
        return $gcaqwmmqioouwccc;
    }
    
    public function gcmaamyeggyiugae() : bool
    {
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        return $uqcooyiiyysckskk && $uqcooyiiyysckskk->imyagkswqcsocsoi();
    }
    
    public function eaiyegoagkgeowae() : bool
    {
        goto cwigquaouceygaas;
        cwigquaouceygaas:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto gykiuseauawoywsy;
        meqocakwgoyugmso:
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\160\141\147\145");
        goto coysugskuiuggwke;
        gaagiucqcsoauoye:
        return $uqcooyiiyysckskk->csaueuycewaiuaay();
        goto cmcmwummuiemewaw;
        cmcmwummuiemewaw:
        cscoykmeocmcwkkc:
        goto meqocakwgoyugmso;
        gykiuseauawoywsy:
        if (!$uqcooyiiyysckskk) {
            goto cscoykmeocmcwkkc;
        }
        goto gaagiucqcsoauoye;
        coysugskuiuggwke:
    }
}
