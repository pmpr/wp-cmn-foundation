<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto socaggiymwmewosi;
        wugmeqgqiukemiyu:
        if ($this->cgugaaoykcyiomuk()) {
            goto iwusoigygwmgscoc;
        }
        goto ocaqsuieiymyomym;
        wqwceyiekwmyksqm:
        parent::__construct();
        goto cgegwqcqwqemsomy;
        socaggiymwmewosi:
        $this->type = "\x73\145\x74\x74\x69\156\147\x73";
        goto wugmeqgqiukemiyu;
        ocaqsuieiymyomym:
        $this->parentMenu = "\x6f\x70\164\151\157\156\163\55\x67\x65\x6e\x65\162\x61\154\x2e\160\150\160";
        goto isekauuwqcsuicuw;
        isekauuwqcsuicuw:
        iwusoigygwmgscoc:
        goto wqwceyiekwmyksqm;
        cgegwqcqwqemsomy:
    }
    
    public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab
    {
        $uqcooyiiyysckskk->kkigeuaeguyueaem('')->ceiqwucmgawwmawo(__("\123\x61\166\x65\x20\103\150\x61\156\147\145\x73", PR__CMN__FOUNDATION));
        return parent::cosqcmekuiigqywc($uqcooyiiyysckskk);
    }
    
    public function mwikyscisascoeea() : ?string
    {
        goto isuocqoeqoaeuksg;
        yoskimkuksecqysw:
        if ($aokagokqyuysuksm) {
            goto wmcumqiwkckkoggy;
        }
        goto wusemuakoqsycogc;
        wusemuakoqsycogc:
        $aokagokqyuysuksm = "{$this->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}";
        goto oosugckaswaggaeu;
        oosugckaswaggaeu:
        wmcumqiwkckkoggy:
        goto ukyguyoqagmmemek;
        isuocqoeqoaeuksg:
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        goto yoskimkuksecqysw;
        ukyguyoqagmmemek:
        return $aokagokqyuysuksm;
        goto oegsgowaacesqmia;
        oegsgowaacesqmia:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x75\160\x64\x61\164\x65\137\157\x70\x74\151\157\156\137{$this->cisyiemkeykgkomc()}", [$this, "\157\x63\x71\141\x71\x73\167\157\x65\171\x73\x63\165\157\141\157"])->qcsmikeggeemccuu("\165\x70\144\141\164\145\x5f\157\160\x74\x69\x6f\x6e\137{$this->cisyiemkeykgkomc()}", [$this, "\x73\x63\155\155\171\155\161\153\x6f\171\143\x6b\x67\x6b\141\x6d"], 10, 2)->qcsmikeggeemccuu("\165\x70\144\x61\x74\x65\137\163\145\164\164\x69\156\x67\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x65\x69\x61\141\x63\145\147\153\x69\x67\x71\x69\x77\x61\x77\147"], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x67\145\x74\137{$this->cisyiemkeykgkomc()}", [$this, "\155\171\x77\x77\x79\145\147\153\x75\x79\155\x6f\x6f\153\145\147"], 10, 2)->cecaguuoecmccuse("\x67\x65\164\137{$this->aakmagwggmkoiiyu()}\137\163\x65\x74\164\151\156\x67", [$this, "\x65\x69\x77\x63\165\x71\151\x67\141\x79\x69\147\x69\x6d\141\x6b"], 10, 2)->cecaguuoecmccuse("\x70\162\145\137\165\x70\x64\141\164\x65\137\157\x70\x74\151\x6f\x6e\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x63\x69\x61\147\143\x6f\x69\x79\145\151\x6f\x61\x67\x67\x73\157"], 50, 3)->cecaguuoecmccuse("\x63\x6d\x62\x32\137\x6f\166\x65\162\162\151\x64\x65\x5f\157\160\164\151\157\156\x5f\147\145\164\137{$this->cisyiemkeykgkomc()}", [$this, "\x6d\155\x65\x71\x73\165\141\161\141\143\167\165\157\x67\171\x61"], 2, 1);
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
        goto asigmmeaiqugsqkc;
        geouuocykkkqocww:
        magkmscoqweasoea:
        goto agcmgqouugawmeoi;
        asigmmeaiqugsqkc:
        $ggauoeuaesiymgee = $this->gecwckciuqqukcko();
        goto yaciickwyewwoisc;
        ccegeescymmmewkw:
        DecoratorOption::add($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto geouuocykkkqocww;
        yaciickwyewwoisc:
        if (!($ggauoeuaesiymgee && !self::mywwyegkuymookeg())) {
            goto wiwcuiguaogckaiq;
        }
        goto kkqkyaokeyacgwmy;
        ssscisokscuimoya:
        if (!($ggauoeuaesiymgee && is_array($ggauoeuaesiymgee))) {
            goto magkmscoqweasoea;
        }
        goto ccegeescymmmewkw;
        iciqgewcyywgeogi:
        $ggauoeuaesiymgee = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\144\x65\146\x61\x75\x6c\164\x5f\163\145\x74\x74\x69\x6e\147\x73", false), $ggauoeuaesiymgee, $this->cisyiemkeykgkomc());
        goto ssscisokscuimoya;
        kkqkyaokeyacgwmy:
        
        $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
        goto iciqgewcyywgeogi;
        agcmgqouugawmeoi:
        wiwcuiguaogckaiq:
        goto ymgwqaqkgeqyawqy;
        ymgwqaqkgeqyawqy:
    }
    
    public function ciagcoiyeioaggso($eqgoocgaqwqcimie, $msqkueqksqwmskak, $omkysikckkcieckq)
    {
        goto ieiwqcegoweqocym;
        ieiwqcegoweqocym:
        if (!($eqgoocgaqwqcimie !== $msqkueqksqwmskak && maybe_serialize($eqgoocgaqwqcimie) !== maybe_serialize($msqkueqksqwmskak))) {
            goto gequckqgoicimsqs;
        }
        goto ccumqyuimgsusysg;
        ccumqyuimgsusysg:
        $eqgoocgaqwqcimie = $this->iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto okyuqywegkecwksm;
        ikmocwuqeagwiwgs:
        return $eqgoocgaqwqcimie;
        goto mweiikiqcmogmseo;
        okyuqywegkecwksm:
        $eqgoocgaqwqcimie = $this->sscegwueamckwmcy("\142\x65\146\x6f\x72\145\x5f\x75\x70\144\x61\164\145\137{$this->cisyiemkeykgkomc()}", $eqgoocgaqwqcimie, $msqkueqksqwmskak);
        goto wwyuwyewyesgassm;
        wwyuwyewyesgassm:
        gequckqgoicimsqs:
        goto ikmocwuqeagwiwgs;
        mweiikiqcmogmseo:
    }
    
    public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak)
    {
        return $eqgoocgaqwqcimie;
    }
    
    public function scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume)
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\163\x61\x76\x65\x64", false), $msqkueqksqwmskak, $uwomkgseoiegeume);
    }
    public function ocqaqswoeyscuoao()
    {
        goto iyusqagsqkwqckuq;
        saccuowkmueeayiy:
        if (!($skacuygeqykiwiwy = ManipulateSetting::cmaecekuqkwmemms(self::PR__CACHE__PATH))) {
            goto wuguamygeweeamsu;
        }
        goto geyyyqkikooemwis;
        equqqsqqkekqgoeo:
        wuguamygeweeamsu:
        goto wgeqammyuqwkeaue;
        geyyyqkikooemwis:
        $this->kcciqwskewsuaemk()->remove($skacuygeqykiwiwy);
        goto mmiwsuygkquswqws;
        iyusqagsqkwqckuq:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x62\145\146\x6f\x72\x65\x5f\x72\x65\155\157\166\145\137\143\x61\x63\x68\145\137\160\141\x74\150"));
        goto saccuowkmueeayiy;
        mmiwsuygkquswqws:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\146\x74\145\162\137\x72\x65\x6d\157\x76\x65\137\x63\141\x63\x68\x65\137\x70\141\164\150"));
        goto equqqsqqkekqgoeo;
        wgeqammyuqwkeaue:
    }
    
    public static function mywwyegkuymookeg()
    {
        goto iiwmqckauigosmuo;
        qiyuyycuoeaseymc:
        $usymaaaeawgmyqig = wp_cache_get($eiockasigaaayoem);
        goto eewgyyewsomeoacy;
        iiwmqckauigosmuo:
        $eiockasigaaayoem = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto qiyuyycuoeaseymc;
        qemqewqykmaeueyg:
        keaooigiqyewgwww:
        goto omycoyymayoiuwyw;
        cquisawesamykiay:
        yiqqoqoyoyukmoow:
        goto ouisawwyqekkwgwm;
        ouisawwyqekkwgwm:
        return $ksaameoqigiaoigg;
        goto swseysyokwyksqcu;
        aoscwomumeoomgyw:
        goto yiqqoqoyoyukmoow;
        goto qemqewqykmaeueyg;
        equwyeuiquwackig:
        
        $ksaameoqigiaoigg = DecoratorOption::get($eiockasigaaayoem);
        goto socyewkiwaeegegq;
        eewgyyewsomeoacy:
        if ($usymaaaeawgmyqig !== false) {
            goto keaooigiqyewgwww;
        }
        goto equwyeuiquwackig;
        omycoyymayoiuwyw:
        $ksaameoqigiaoigg = $usymaaaeawgmyqig;
        goto cquisawesamykiay;
        socyewkiwaeegegq:
        wp_cache_set($eiockasigaaayoem, $ksaameoqigiaoigg);
        goto aoscwomumeoomgyw;
        swseysyokwyksqcu:
    }
    
    public static function eiaacegkigqiwawg($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto mqykmueaoqqiusey;
        qeigaagyemyysqks:
        self::oqyuwccsuskiwgew($qeqooyuoiasweuck);
        goto qieqeemowgauqwci;
        mqykmueaoqqiusey:
        if ($qeqooyuoiasweuck) {
            goto awgccuuuugqkqgoq;
        }
        goto gssqsggigceoaqkg;
        qieqeemowgauqwci:
        return $eqgoocgaqwqcimie;
        goto ywigcekyomqoyqqi;
        gssqsggigceoaqkg:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto ayiaemgweeeaiakm;
        ayiaemgweeeaiakm:
        awgccuuuugqkqgoq:
        goto okocseuucyymsegg;
        okocseuucyymsegg:
        $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto qeigaagyemyysqks;
        ywigcekyomqoyqqi:
    }
    
    public static function oqyuwccsuskiwgew($qeqooyuoiasweuck = null)
    {
        goto kkiomqcmqcsoecag;
        gygqsmoiqagyeguk:
        DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto qqamsqiwmckymggm;
        qqamsqiwmckymggm:
        wp_cache_delete($uusmaiomayssaecw);
        goto iacysqqoouuqasgw;
        kkiomqcmqcsoecag:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto gygqsmoiqagyeguk;
        iacysqqoouuqasgw:
    }
    
    public static function myekoowckeqqeuyq($amakmumgguksgmum, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null) : bool
    {
        goto ogseoooqimcomuyi;
        ekweswemiqiisoys:
        agicwkeiuocqwcog:
        goto iqakeowoosikouai;
        yqciowyyaucoysgy:
        $qeqooyuoiasweuck[$amakmumgguksgmum] = $eqgoocgaqwqcimie;
        goto woociiywkukyomca;
        iqakeowoosikouai:
        if ($qeqooyuoiasweuck) {
            goto qiqgkqkyqugyesaq;
        }
        goto dwoiwsiguwwggeeo;
        ogseoooqimcomuyi:
        if ($qeqooyuoiasweuck) {
            goto agicwkeiuocqwcog;
        }
        goto uakwkocgsmmiqwic;
        oigimmkyumckwick:
        wp_cache_delete($uusmaiomayssaecw);
        goto imqgamcocykmuweu;
        dwoiwsiguwwggeeo:
        $qeqooyuoiasweuck = [];
        goto iwsammigwiwcoggi;
        woociiywkukyomca:
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        goto oigimmkyumckwick;
        uakwkocgsmmiqwic:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto ekweswemiqiisoys;
        imqgamcocykmuweu:
        return DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        goto ggumyqmosmckemum;
        iwsammigwiwcoggi:
        qiqgkqkyqugyesaq:
        goto yqciowyyaucoysgy;
        ggumyqmosmckemum:
    }
    
    public static function yceqggqwokesouww($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        goto kuiqawwoeaeuemcy;
        uoiawymwqmyiiosk:
        if ($amakmumgguksgmum) {
            goto tgousgyiiaiaeack;
        }
        goto wcsiocqmcgkyueoc;
        qoueskwwsaywasai:
        self::myekoowckeqqeuyq($uusmaiomayssaecw, $eqgoocgaqwqcimie);
        goto msmmwgagckyuccii;
        yuuokwoimsawcwwq:
        return $amakmumgguksgmum;
        goto euamqcukmwkycmcs;
        wcsiocqmcgkyueoc:
        $amakmumgguksgmum = $eqgoocgaqwqcimie;
        goto qoueskwwsaywasai;
        kuiqawwoeaeuemcy:
        $amakmumgguksgmum = self::eiwcuqigayigimak($uusmaiomayssaecw, null, $qeqooyuoiasweuck);
        goto uoiawymwqmyiiosk;
        msmmwgagckyuccii:
        tgousgyiiaiaeack:
        goto yuuokwoimsawcwwq;
        euamqcukmwkycmcs:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false, $qeqooyuoiasweuck = null)
    {
        goto uqscqwswiqsgsygk;
        qsgikaecsueeawcg:
        if (is_string($uusmaiomayssaecw)) {
            goto ygcicamkgawkwygs;
        }
        goto wgqaaiuiaegacqug;
        qkouugqimqywiiag:
        ssqmoeeuysgacwme:
        goto qsgikaecsueeawcg;
        smusacowuccegeqc:
        $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        goto qkouugqimqywiiag;
        qougaquyiyoekgme:
        goto aokwwkysaawymggq;
        goto akgccuiekaowwmeq;
        kummicswwkwwkyys:
        ygcicamkgawkwygs:
        goto wwkqmuawuugoiwey;
        uqscqwswiqsgsygk:
        if ($qeqooyuoiasweuck) {
            goto ssqmoeeuysgacwme;
        }
        goto smusacowuccegeqc;
        akgccuiekaowwmeq:
        yckwoyawyoyskqea:
        goto ywamicmegakyokoq;
        wiuiqmkuuuscscoi:
        ywmqqmgacioekiim:
        goto cyiukscucygcyiow;
        aoeqqmeqcaeksamm:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto qougaquyiyoekgme;
        ywamicmegakyokoq:
        $eqgoocgaqwqcimie = $qeqooyuoiasweuck[$uusmaiomayssaecw];
        goto koeamciygeeqewcy;
        cyiukscucygcyiow:
        return $eqgoocgaqwqcimie;
        goto keguueuuiqyowgge;
        wgqaaiuiaegacqug:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto kiuemcsmyusiamwy;
        mukioeqsayqwycgu:
        aokwwkysaawymggq:
        goto wiuiqmkuuuscscoi;
        koeamciygeeqewcy:
        $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === "\x6f\x6e" ? true : $eqgoocgaqwqcimie;
        goto mukioeqsayqwycgu;
        kiuemcsmyusiamwy:
        goto ywmqqmgacioekiim;
        goto kummicswwkwwkyys;
        wwkqmuawuugoiwey:
        if (isset($qeqooyuoiasweuck[$uusmaiomayssaecw])) {
            goto yckwoyawyoyskqea;
        }
        goto aoeqqmeqcaeksamm;
        keguueuuiqyowgge:
    }
    
    public static function wcoqgwyekgsmiueo(array $qiouiwasaauyaaue, string $ymqmyyeuycgmigyo, int $gaeqamemwmwsyukm = 1) : array
    {
        goto oumgmywcokuyaaky;
        oumgmywcokuyaaky:
        $isksgswsmmqgeqmo = ManipulateArray::get($qiouiwasaauyaaue, $ymqmyyeuycgmigyo, []);
        goto macwgscmecoymagu;
        uuowysiecmaqiskc:
        foreach ($isksgswsmmqgeqmo as $momcykaoccoymeig => $omkysikckkcieckq) {
            goto kaaosukiekmqcuas;
            kcgsqowasqeuaoyo:
            ciaocyoemcwmgays:
            goto scywagkqaaqkqyuq;
            yuakcmiumkmoseoy:
            $qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig][self::KEY] = ManipulateString::uniqid();
            goto amicgsowmwecywga;
            oakqwukqiowuwgse:
            if (count($omkysikckkcieckq) >= $gaeqamemwmwsyukm) {
                goto myigiaaggwcoyqmo;
            }
            goto makqoouaaoyeckwu;
            scywagkqaaqkqyuq:
            emqaiyugeiukyqiw:
            goto aeoskcqgogoeieqq;
            ywqgaoiyisukooog:
            $uusmaiomayssaecw = ManipulateArray::get($omkysikckkcieckq, self::KEY);
            goto uicakiyqmsqkkeiq;
            amicgsowmwecywga:
            gkqycsqguoaycowm:
            goto kcgsqowasqeuaoyo;
            kaaosukiekmqcuas:
            $omkysikckkcieckq = array_filter($omkysikckkcieckq);
            goto oakqwukqiowuwgse;
            uicakiyqmsqkkeiq:
            if ($uusmaiomayssaecw) {
                goto gkqycsqguoaycowm;
            }
            goto yuakcmiumkmoseoy;
            makqoouaaoyeckwu:
            unset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig]);
            goto wciqgiyuqauosqsm;
            kkwciycuekqewqak:
            myigiaaggwcoyqmo:
            goto ywqgaoiyisukooog;
            wciqgiyuqauosqsm:
            goto ciaocyoemcwmgays;
            goto kkwciycuekqewqak;
            aeoskcqgogoeieqq:
        }
        goto tiqqwmquwowcwsko;
        oyiakwoikeckycqe:
        mqomgaeswiquiasi:
        goto uyomoigikmsymiku;
        macwgscmecoymagu:
        if (!($qiouiwasaauyaaue && is_array($qiouiwasaauyaaue) && $isksgswsmmqgeqmo && is_array($isksgswsmmqgeqmo))) {
            goto mqomgaeswiquiasi;
        }
        goto uuowysiecmaqiskc;
        tiqqwmquwowcwsko:
        iggmoakswausicmq:
        goto oyiakwoikeckycqe;
        uyomoigikmsymiku:
        return $qiouiwasaauyaaue;
        goto ykcsckmiswouwaim;
        ykcsckmiswouwaim:
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
        goto ycgoekuqouciwkom;
        qsyssqesmcoyuewk:
        return $uqcooyiiyysckskk->csaueuycewaiuaay();
        goto myyyikoweqcgoucw;
        qowqygggoieokiiw:
        if (!$uqcooyiiyysckskk) {
            goto umsiwskkkuuqygqe;
        }
        goto qsyssqesmcoyuewk;
        yqewkyqauqqcyoyy:
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\x70\x61\147\145");
        goto aauewmowygwgwusw;
        ycgoekuqouciwkom:
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        goto qowqygggoieokiiw;
        myyyikoweqcgoucw:
        umsiwskkkuuqygqe:
        goto yqewkyqauqqcyoyy;
        aauewmowygwgwusw:
    }
}
