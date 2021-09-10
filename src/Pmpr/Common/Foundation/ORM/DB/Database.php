<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Closure;
use Exception;
use Generator;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Database\Query\Processors\Processor;
use Illuminate\Database\QueryException;

class Database extends Common implements ConnectionInterface
{
    use FieldTrait;
    
    protected $db = null;
    
    protected array $configs = [];
    
    protected ?Manager $manager = null;
    
    protected ?int $transactionCount = 0;
    
    public function __construct()
    {
        goto uckusgwkoycmkeam;
        gscyiqmmegqmqcoe:
        $this->db = $wpdb;
        goto mieoguuqiwqioeqa;
        uckusgwkoycmkeam:
        global $wpdb;
        goto gscyiqmmegqmqcoe;
        mieoguuqiwqioeqa:
        parent::__construct();
        goto qosswumywsaeyqus;
        qosswumywsaeyqus:
    }
    
    public function wwiwswsasquukoqs()
    {
        return $this->db;
    }
    
    public function amosaeggmeksgwea() : ?Manager
    {
        return $this->manager;
    }
    public function cymcyywycwkawmsi()
    {
        goto swicauyqusmgeccu;
        icoiqskygugkgmkm:
        $uiewakwqscemywuo = ["\x64\162\151\x76\x65\162" => "\x6d\171\x73\x71\154", "\150\x6f\x73\164" => $ooggeikkseeqyyek->__get("\x64\x62\x68\157\163\164"), "\x64\141\164\141\x62\x61\163\x65" => $ooggeikkseeqyyek->__get("\x64\142\156\141\x6d\x65"), "\165\163\145\x72\156\x61\x6d\x65" => $ooggeikkseeqyyek->__get("\x64\142\165\163\x65\x72"), "\x70\x61\x73\x73\167\157\x72\144" => $ooggeikkseeqyyek->__get("\144\142\x70\141\163\163\x77\x6f\x72\144"), "\x70\x6f\x72\164" => $ooggeikkseeqyyek->options, "\x63\150\x61\x72\163\x65\x74" => $ooggeikkseeqyyek->charset, "\x63\157\x6c\154\141\164\151\157\156" => $ooggeikkseeqyyek->collate, "\160\x72\145\x66\151\170" => $ooggeikkseeqyyek->prefix];
        goto kocaieyauyiqmyiy;
        eekkcooqswqouoei:
        
        $eygsasmqycagyayw->setAsGlobal();
        goto cuayqmasemsqsume;
        gcqssckowmywoesw:
        
        $eygsasmqycagyayw->bootEloquent();
        goto eekkcooqswqouoei;
        cuayqmasemsqsume:
        $this->manager = $eygsasmqycagyayw;
        goto igmawmwssyskqqag;
        maguoggkqamaiuag:
        $eygsasmqycagyayw = new Manager();
        goto icoiqskygugkgmkm;
        swicauyqusmgeccu:
        $ooggeikkseeqyyek = $this->wwiwswsasquukoqs();
        goto maguoggkqamaiuag;
        kocaieyauyiqmyiy:
        
        $eygsasmqycagyayw->addConnection($uiewakwqscemywuo);
        goto gcqssckowmywoesw;
        igmawmwssyskqqag:
    }
    
    public function query() : Builder
    {
        goto iomwkkieqcswkkaw;
        ewsigoeswimiueqe:
        return new Builder($this, $kooimksequwgsyqc, $wgqamiqkugoqsmes);
        goto gaskcgoeywuyukke;
        eussqkkimciywios:
        $wgqamiqkugoqsmes = $this->yokcoiaqqaquwecc();
        goto ewsigoeswimiueqe;
        iomwkkieqcswkkaw:
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        goto eussqkkimciywios;
        gaskcgoeywuyukke:
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->aceaeommyuooiqge("\x6e\x61\x6d\x65");
    }
    
    public function aqoymmcygkssqmmy() : Grammar
    {
        return new Grammar();
    }
    
    public function yokcoiaqqaquwecc() : Processor
    {
        return new Processor();
    }
    
    public function xoiwkmeymocuuwcq($ywmkwiwkosakssii)
    {
        return $this->wwiwswsasquukoqs()->insert_id;
    }
    
    public function tkgawykgecmsaeis() : ?array
    {
        return $this->configs;
    }
    
    public function aceaeommyuooiqge($omkysikckkcieckq = null)
    {
        return ManipulateArray::get($this->tkgawykgecmsaeis(), $omkysikckkcieckq);
    }
    
    public function uawwgkimmooamyay() : ?int
    {
        return $this->transactionCount;
    }
    
    public function iqekeywwkoksagke($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : array
    {
        goto gqaqamewqeaqwcia;
        okuqsqaiwwiigmyu:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        goto ksiwgckusukisueg;
        sgkqgucguyccaaki:
        return (array) $sogksuscggsicmac;
        goto omuemegmkesqgwys;
        ksiwgckusukisueg:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        goto sgkqgucguyccaaki;
        gqaqamewqeaqwcia:
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto okuqsqaiwwiigmyu;
        omuemegmkesqgwys:
    }
    
    private function quauggogguqkokkk($sogksuscggsicmac, $asiqcaccsgscgcyq, $iykmscciaowcagqu)
    {
        goto cmsiuimsiycomyay;
        cmsiuimsiycomyay:
        if (!($sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error)) {
            goto geyiosucqswaeasw;
        }
        goto qmqmskywcgiqgygm;
        ccgsycueagwegqeu:
        geyiosucqswaeasw:
        goto gmeiuoeewucukque;
        qmqmskywcgiqgygm:
        throw new QueryException($asiqcaccsgscgcyq, $iykmscciaowcagqu, new Exception($this->wwiwswsasquukoqs()->last_error));
        goto ccgsycueagwegqeu;
        gmeiuoeewucukque:
    }
    
    public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self
    {
        $this->configs[$uusmaiomayssaecw] = $omkysikckkcieckq;
        return $this;
    }
    
    private function qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, $suckquwcuiuyiogc = false)
    {
        goto yqqseqskcqeqkacm;
        ugkwqaywmwqucoeo:
        $gqgemcmoicmgaqie = str_replace(["\x25", "\x3f"], ["\45\45", "\45\x73"], $gqgemcmoicmgaqie);
        goto syisomgawcsqeemk;
        yqqseqskcqeqkacm:
        $gqgemcmoicmgaqie = str_replace("\x22", "\x60", $gqgemcmoicmgaqie);
        goto ywokggauuiosegog;
        uoewiggumomegksg:
        if (!$iykmscciaowcagqu) {
            goto qywkykqkeeuccoui;
        }
        goto sockocsycmkaeosg;
        asoecuscmsyusmkg:
        qywkykqkeeuccoui:
        goto kwasqmcyiswoaiuu;
        sockocsycmkaeosg:
        $iykmscciaowcagqu = array_map(function ($moyaaaascoeowegu) {
            goto ceaamccscgcmqgka;
            wiaymoucakyaikii:
            sayqggaieocmskko:
            goto ociesuicgmkekcue;
            ymucaguacemwsgsi:
            qmguoqeawegcoeoa:
            goto qiikwossequwiuom;
            ceaamccscgcmqgka:
            if (is_string($moyaaaascoeowegu)) {
                goto qmguoqeawegcoeoa;
            }
            goto omumkeywqqogwwue;
            qiikwossequwiuom:
            $moyaaaascoeowegu = "\47" . esc_sql($moyaaaascoeowegu) . "\47";
            goto gaouaiemokqqgssw;
            gaouaiemokqqgssw:
            ycecaauekkiqacuu:
            goto wqwmuuicoqigqwyc;
            omumkeywqqogwwue:
            if (!($moyaaaascoeowegu === null)) {
                goto sayqggaieocmskko;
            }
            goto igyesgemqesackws;
            igyesgemqesackws:
            $moyaaaascoeowegu = "\x6e\165\154\154";
            goto wiaymoucakyaikii;
            wqwmuuicoqigqwyc:
            return $moyaaaascoeowegu;
            goto oqgymyiwckkwueuw;
            ociesuicgmkekcue:
            goto ycecaauekkiqacuu;
            goto ymucaguacemwsgsi;
            oqgymyiwckkwueuw:
        }, $iykmscciaowcagqu);
        goto ugkwqaywmwqucoeo;
        ywokggauuiosegog:
        $iykmscciaowcagqu = $this->uooqikqsgykeymok($iykmscciaowcagqu);
        goto uoewiggumomegksg;
        kwasqmcyiswoaiuu:
        return $gqgemcmoicmgaqie;
        goto kiskwawumeiiieuk;
        syisomgawcsqeemk:
        $gqgemcmoicmgaqie = vsprintf($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto asoecuscmsyusmkg;
        kiskwawumeiiieuk:
    }
    
    public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null, $yuwymayicwwqiske = true) : ?string
    {
        goto awuwuuuagqysukku;
        ecgwgamiseokmise:
        return $syeseoiyagmgumcy;
        goto qkiyyywwuiuackao;
        awuwuuuagqysukku:
        $syeseoiyagmgumcy = '';
        goto miugmimciywcgswm;
        csaksaisgawusswg:
        kkmuuoscccmokkiw:
        goto ecgwgamiseokmise;
        emeeocqaisksyioq:
        oaqeoqsksuyyggmg:
        goto maggecymmmesqmqs;
        aqekkeqmmewoyawu:
        if (!$yuwymayicwwqiske) {
            goto oaqeoqsksuyyggmg;
        }
        goto mcqwuawosciucemq;
        miugmimciywcgswm:
        if (!$aasascamegmwqmqk) {
            goto kkmuuoscccmokkiw;
        }
        goto aqekkeqmmewoyawu;
        maggecymmmesqmqs:
        $syeseoiyagmgumcy = $syeseoiyagmgumcy . ManipulateString::gumqicgiosoqweoy($aasascamegmwqmqk);
        goto csaksaisgawusswg;
        mcqwuawosciucemq:
        $syeseoiyagmgumcy = $this->wwiwswsasquukoqs()->prefix;
        goto emeeocqaisksyioq;
        qkiyyywwuiuackao:
    }
    
    public function getPdo() : self
    {
        return $this;
    }
    
    public function raw($eqgoocgaqwqcimie) : Expression
    {
        return new Expression($eqgoocgaqwqcimie);
    }
    
    public function table($aasascamegmwqmqk, $aikcyecgesuiaacw = null) : Builder
    {
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk);
        
        return $this->query()->from($aasascamegmwqmqk);
    }
    
    public function insert($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : bool
    {
        
        return $this->statement($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function update($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        return $this->niiwccguwykyacek($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function delete($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        return $this->niiwccguwykyacek($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function statement($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : bool
    {
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, true);
        
        return $this->unprepared($gmyoogwqukkgwiwk);
    }
    
    public function affectingStatement($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        goto gyskcwykkyakeims;
        mcagemacuqyskogs:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        goto aamgqoqyyooimqkm;
        ossakckwskyqusmm:
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        goto mcagemacuqyskogs;
        aamgqoqyyooimqkm:
        return intval($sogksuscggsicmac);
        goto cimascmiesomqgqs;
        gyskcwykkyakeims:
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, true);
        goto ossakckwskyqusmm;
        cimascmiesomqgqs:
    }
    
    public function select($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true) : array
    {
        goto easuiqiooiwgswmm;
        easuiqiooiwgswmm:
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto saiuoomgskwgyeya;
        saiuoomgskwgyeya:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_results($gqgemcmoicmgaqie);
        goto kuuawiosmkgqsscy;
        kwocaqggwcksesce:
        return $sogksuscggsicmac;
        goto momuweiasiwskekw;
        kuuawiosmkgqsscy:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto kwocaqggwcksesce;
        momuweiasiwskekw:
    }
    
    public function cursor($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
    }
    
    public function selectOne($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
        goto qaewauyekqucciyc;
        bgakaasgwwygosyi:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_row($gqgemcmoicmgaqie);
        goto aucwccaiqwsmyuaq;
        agyooskogigyayws:
        return $sogksuscggsicmac;
        goto iiiwsgameuomumgw;
        aucwccaiqwsmyuaq:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto agyooskogigyayws;
        qaewauyekqucciyc:
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto bgakaasgwwygosyi;
        iiiwsgameuomumgw:
    }
    
    public function unprepared($gqgemcmoicmgaqie) : bool
    {
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gqgemcmoicmgaqie);
        return $sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error;
    }
    
    public function prepareBindings(array $iykmscciaowcagqu) : array
    {
        goto mmcikqikqecaeswu;
        ywsywoumuaykkeaa:
        foreach ($iykmscciaowcagqu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto mciumqyyossyiuyk;
            omemqagskckoeoog:
            egwgyekaiqomyeaa:
            goto aeuosggumiiwoesm;
            mciumqyyossyiuyk:
            
            if (is_bool($eqgoocgaqwqcimie)) {
                goto kssuqmsgmaaeqigw;
            }
            goto acaeigkmigikeuyu;
            omgcsmsikaggaooc:
            okycquokqoamsquy:
            goto wykuosegisygosiq;
            cqeoguiqiymkyweo:
            
            $iykmscciaowcagqu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->format($ocogsiouoiuuguym);
            goto omgcsmsikaggaooc;
            gsgyayuaekgyoumc:
            goto scockmiqikwwkqse;
            goto omemqagskckoeoog;
            acaeigkmigikeuyu:
            if (is_scalar($eqgoocgaqwqcimie)) {
                goto cgwokqwakqcmiieo;
            }
            goto kqyeukywmgismyaq;
            kqyeukywmgismyaq:
            if (!$eqgoocgaqwqcimie instanceof \DateTime) {
                goto okycquokqoamsquy;
            }
            goto mukwsuuuqcgesmwc;
            wykuosegisygosiq:
            goto egwgyekaiqomyeaa;
            goto ugikgkwuwmgymgus;
            sqmqwqeoygcmqcim:
            uwusswwekqcsisus:
            goto syykqmkiyoekqsek;
            mukwsuuuqcgesmwc:
            
            
            
            
            $ocogsiouoiuuguym = $kooimksequwgsyqc->getDateFormat();
            goto cqeoguiqiymkyweo;
            uyksacasqywyessc:
            $iykmscciaowcagqu[$uusmaiomayssaecw] = intval($eqgoocgaqwqcimie);
            goto sqmqwqeoygcmqcim;
            wyqmeyoaggwuioak:
            kssuqmsgmaaeqigw:
            goto uyksacasqywyessc;
            ugikgkwuwmgymgus:
            cgwokqwakqcmiieo:
            goto gsgyayuaekgyoumc;
            syykqmkiyoekqsek:
            scockmiqikwwkqse:
            goto aiqekkyauwswayyq;
            aeuosggumiiwoesm:
            goto uwusswwekqcsisus;
            goto wyqmeyoaggwuioak;
            aiqekkyauwswayyq:
        }
        goto wsqiqkiucakewgou;
        yaumwqeommqigswq:
        return $iykmscciaowcagqu;
        goto wiiqigwgyuiuksia;
        wsqiqkiucakewgou:
        mcukocaaoyuugoeu:
        goto yaumwqeommqigswq;
        mmcikqikqecaeswu:
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        goto ywsywoumuaykkeaa;
        wiiqigwgyuiuksia:
    }
    
    public function transaction(Closure $ekiuyucoiagmscgy, $mogwwoaswuuykekc = 1)
    {
        
        $this->beginTransaction();
        try {
            goto mqoygcuqwacgycek;
            mqoygcuqwacgycek:
            $icwicymcioeyeyek = $ekiuyucoiagmscgy();
            goto agyycikucwgmysee;
            aiukiwqmikscoswm:
            return $icwicymcioeyeyek;
            goto mcmkqgkwyqoiikcq;
            agyycikucwgmysee:
            
            $this->commit();
            goto aiukiwqmikscoswm;
            mcmkqgkwyqoiikcq:
        } catch (Exception $iewosgggaueeyymg) {
            
            $this->rollBack();
            throw $iewosgggaueeyymg;
        }
    }
    
    public function beginTransaction()
    {
        goto gskacikgkwcuauko;
        kwiuqqwamsimqgme:
        $this->transactionCount++;
        goto qmegcmqemmywoqas;
        qmegcmqemmywoqas:
        ssyukuseoymackeo:
        goto giooasyeqwaaocea;
        gskacikgkwcuauko:
        
        $ammuiskickemgqgc = $this->unprepared("\x53\124\x41\122\124\x20\124\122\x41\x4e\123\x41\103\124\x49\x4f\x4e\73");
        goto yyieomeeqycmikqw;
        yyieomeeqycmikqw:
        if (!(false !== $ammuiskickemgqgc)) {
            goto ssyukuseoymackeo;
        }
        goto kwiuqqwamsimqgme;
        giooasyeqwaaocea:
    }
    
    public function commit()
    {
        goto qgyoesyiasqimcoe;
        kkwqmewaksmokuqy:
        
        $ammuiskickemgqgc = $this->unprepared("\103\x4f\x4d\x4d\111\x54\x3b");
        goto gsgkayokisiesciy;
        ascogkesqmuuaesq:
        $this->transactionCount--;
        goto askukaucmocewkgg;
        kiemqsgcmouqscao:
        seieguyaaiqismgo:
        goto wssaaemscmmiomee;
        qgyoesyiasqimcoe:
        if (!($this->transactionCount >= 1)) {
            goto seieguyaaiqismgo;
        }
        goto kkwqmewaksmokuqy;
        askukaucmocewkgg:
        uueywyysiicuauem:
        goto kiemqsgcmouqscao;
        gsgkayokisiesciy:
        if (!(false !== $ammuiskickemgqgc)) {
            goto uueywyysiicuauem;
        }
        goto ascogkesqmuuaesq;
        wssaaemscmmiomee:
    }
    
    public function rollBack()
    {
        goto iusaeoimukymskgs;
        meoweqcaaosoomeu:
        $this->transactionCount--;
        goto ywmoieqkigsykequ;
        ywmoieqkigsykequ:
        meqmcgmksqiqcoyq:
        goto iaousaauoawkqkkg;
        iaousaauoawkqkkg:
        euskosgaksmimgug:
        goto kkwucaoumyayagcq;
        asciaakaoygususy:
        
        $ammuiskickemgqgc = $this->unprepared("\x52\117\114\x4c\102\x41\x43\113\73");
        goto eaggoasiwogmquwc;
        eaggoasiwogmquwc:
        if (!(false !== $ammuiskickemgqgc)) {
            goto meqmcgmksqiqcoyq;
        }
        goto meoweqcaaosoomeu;
        iusaeoimukymskgs:
        if (!($this->transactionCount >= 1)) {
            goto euskosgaksmimgug;
        }
        goto asciaakaoygususy;
        kkwucaoumyayagcq:
    }
    
    public function transactionLevel() : ?int
    {
        return $this->transactionCount;
    }
    
    public function pretend(Closure $ekiuyucoiagmscgy) : array
    {
        return [];
    }
    
    public function getDatabaseName()
    {
        return $this->wwiwswsasquukoqs()->__get("\144\142\156\x61\x6d\145");
    }
}
