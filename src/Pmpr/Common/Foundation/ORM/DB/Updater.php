<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Connection;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\ORM\DB\Field\Foreign;
use Exception;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder as SchemaBuilder;
use Illuminate\Database\Schema\ColumnDefinition;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Pmpr\Common\Foundation\ORM\Register;

class Updater extends Common
{
    use FieldTrait;
    
    protected array $schema = [];
    
    protected ?Database $database = null;
    
    protected ?Register $register = null;
    
    protected ?SchemaBuilder $builder = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\141\x64\x6d\151\156\x5f\151\156\151\164", [$this, "\x63\x75\143\161\x67\x77\155\157\x73\145\x71\x61\x6b\x67\157\145"]);
        parent::wigskegsqequoeks();
    }
    
    public function ysgiswuowuciwqaq() : ?Connection
    {
        goto uecycmeaoqgqcomm;
        siiwoymcomqegmya:
        if (!($this->skckwsgymkimyuwo() && $this->skckwsgymkimyuwo()->amosaeggmeksgwea())) {
            goto gquyeowwseuycuoq;
        }
        goto wkokasiqoeycyukq;
        qioeuukaqkcsiiwk:
        return $mgcmmwqwguicsews;
        goto cycwiouaowuswkmk;
        uecycmeaoqgqcomm:
        $mgcmmwqwguicsews = null;
        goto siiwoymcomqegmya;
        cgqmyikikqgmksgg:
        gquyeowwseuycuoq:
        goto qioeuukaqkcsiiwk;
        wkokasiqoeycyukq:
        
        $mgcmmwqwguicsews = $this->skckwsgymkimyuwo()->amosaeggmeksgwea()->getConnection();
        goto cgqmyikikqgmksgg;
        cycwiouaowuswkmk:
    }
    
    public function cokoiaeeomgssqgy() : ?string
    {
        return $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy($this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), false);
    }
    
    public function gqaysymikgeawkqa() : ?SchemaBuilder
    {
        goto sguosuigwgwkikgs;
        amkeeqecmwsmwqma:
        return $this->builder;
        goto vkmscascaoysaqoc;
        wgkamcmqescgqcyw:
        aoiwocgacociakoy:
        goto amkeeqecmwsmwqma;
        sguosuigwgwkikgs:
        if (!(!$this->builder && $this->ysgiswuowuciwqaq())) {
            goto aoiwocgacociakoy;
        }
        goto ycyueqmkqyycmaus;
        ycyueqmkqyycmaus:
        
        $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder();
        goto wgkamcmqescgqcyw;
        vkmscascaoysaqoc:
    }
    
    public function skckwsgymkimyuwo() : ?Database
    {
        return $this->database;
    }
    
    public function uwyqgmcuomgeccgy(?Database $wyeookkecoymuauy) : self
    {
        $this->database = $wyeookkecoymuauy;
        return $this;
    }
    
    public function oyeskqayoscwciem() : ?Register
    {
        return $this->register;
    }
    
    public function yuaecocyyyqqgsyw(Register $yyksucsgisomecgg) : self
    {
        $this->register = $yyksucsgisomecgg;
        return $this;
    }
    
    public function aceaeommyuooiqge($omkysikckkcieckq) : ?string
    {
        goto ioqmgaeuiicymgky;
        ioqmgaeuiicymgky:
        $uiewakwqscemywuo = null;
        goto ywmcuouqguawueqm;
        gkoaywyuyqemyiqw:
        
        $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq);
        goto gcgsyyiismkwoyck;
        ywmcuouqguawueqm:
        if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) {
            goto soskeqqausokwugo;
        }
        goto gkoaywyuyqemyiqw;
        gcgsyyiismkwoyck:
        soskeqqausokwugo:
        goto aswikmsouwkequca;
        aswikmsouwkequca:
        return $uiewakwqscemywuo;
        goto ycgsmkkioyqqawyk;
        ycgsmkkioyqqawyk:
    }
    public function cucqgwmoseqakgoe()
    {
        try {
            goto qywueycgouwamkso;
            qywueycgouwamkso:
            $ikgwqyuyckaewsow = $this->oyeskqayoscwciem()->aeosueemgsygqese();
            goto wecgakiimqymkmiy;
            wecgakiimqymkmiy:
            $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
            goto uggisigeswwyqmqi;
            uggisigeswwyqmqi:
            
            $iygikoguosecwqgw = $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk);
            goto qaykqsyoyscaqsce;
            qaykqsyoyscaqsce:
            $iygikoguosecwqgw ? $this->update($ikgwqyuyckaewsow, $aasascamegmwqmqk) : $this->create($ikgwqyuyckaewsow, $aasascamegmwqmqk);
            goto cuqwswgmwuwmgkwe;
            cuqwswgmwuwmgkwe:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    
    public function update($ikgwqyuyckaewsow, $cgomysauusagiwqu)
    {
        goto emyuskcwqyscewue;
        wygeysociiyqokyk:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto gcykaeaisuqiqyqi;
            yomuicigicmugscy:
            igosooeimygcmois:
            goto cyssqgqaoaasmogc;
            swkeqqkqioecmgia:
            
            $uwqmqcmssaeieiqa[] = ["\141\143\164\151\157\x6e" => "\101\x44\104", "\143\157\154\165\155\156" => $aokagokqyuysuksm];
            goto yomuicigicmugscy;
            cyssqgqaoaasmogc:
            okacwwwygceucqsg:
            goto geqwascicmuguaom;
            gcykaeaisuqiqyqi:
            if (!($aiowsaccomcoikus instanceof Field && !in_array($aiowsaccomcoikus->mwikyscisascoeea(), $wkkweuacukumqmya))) {
                goto igosooeimygcmois;
            }
            goto swkeqqkqioecmgia;
            geqwascicmuguaom:
        }
        goto qyguqmkmyqeyqaac;
        oogmmeccymcuwwac:
        mcguyegywqyasmii:
        goto wygeysociiyqokyk;
        yiskaoskyyiswkki:
        
        $wkkweuacukumqmya = $this->gqaysymikgeawkqa()->getColumnListing($cgomysauusagiwqu);
        goto akieywkiweasukyw;
        qckqeqqcoawmwwqw:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto kcesecosoiwocymi;
            umosyyqqcuqiscco:
            omagsowousaeaiou:
            goto qauuogkoosmuggas;
            kcesecosoiwocymi:
            if (in_array($qgoqiacsiccwoawi, $uwomkgseoiegeume)) {
                goto omagsowousaeaiou;
            }
            goto ckyamgmuoswcaiak;
            qauuogkoosmuggas:
            qkygewgkycsuawgm:
            goto wwcougcmsuqogqyc;
            ckyamgmuoswcaiak:
            $uwqmqcmssaeieiqa[] = ["\x61\143\x74\151\157\156" => "\x44\122\117\120", "\143\157\154\165\155\156" => $qgoqiacsiccwoawi];
            goto umosyyqqcuqiscco;
            wwcougcmsuqogqyc:
        }
        goto yqywgkymmowyggqa;
        qoqgokiaagioccqg:
        foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) {
            goto mwmwmswiueocaeug;
            gcgwqksqskumiumq:
            ysykemiscamquoce:
            goto emiugswuagoacakq;
            mwmwmswiueocaeug:
            if (!($aiowsaccomcoikus instanceof Foreign && $aiowsaccomcoikus->iueigwuckeaswyuu())) {
                goto oaimckymswkqoysq;
            }
            goto ukugqakgsqqmgege;
            awcgiyqmoemqumeg:
            oaimckymswkqoysq:
            goto gcgwqksqskumiumq;
            ukugqakgsqqmgege:
            ManipulateArray::unset($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo);
            goto awcgiyqmoemqumeg;
            emiugswuagoacakq:
        }
        goto oeukmyymqaaakksa;
        csuwemcoeyqemwks:
        sort($wkkweuacukumqmya);
        goto wcmsamoqaogoouey;
        ccqagygkoaagksyw:
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
        goto oguigickaoqigcoi;
        qmugciukukckmeiu:
        iceuoqgyqsmywqqq:
        goto akieyasekuwqeugc;
        alomqucgmacieuoa:
        if (!$cgomysauusagiwqu) {
            goto eugisyswkecacase;
        }
        goto yiskaoskyyiswkki;
        oyciiqiqoqkgoqec:
        if (!ManipulateSetting::esoowymaimwcuecq()) {
            goto mcguyegywqyasmii;
        }
        goto qckqeqqcoawmwwqw;
        qyguqmkmyqeyqaac:
        qgoaooycwyiyycoa:
        goto igeoagaweewiscas;
        akieyasekuwqeugc:
        eugisyswkecacase:
        goto gqwcuusyiggisuok;
        ookeyiumgkqqucia:
        $uwomkgseoiegeume = array_keys($ikgwqyuyckaewsow);
        goto ioocowswsiqoyaai;
        ioocowswsiqoyaai:
        sort($uwomkgseoiegeume);
        goto csuwemcoeyqemwks;
        igeoagaweewiscas:
        $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $ikgwqyuyckaewsow) {
            foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) {
                goto emuckswusmmeuwma;
                emuckswusmmeuwma:
                $qgoqiacsiccwoawi = $ocyscigwmouqaiia["\143\x6f\x6c\165\x6d\x6e"];
                goto cgyikucmysgcmweu;
                kaocmesokyiikyci:
                ugseakwywkuwgyug:
                goto yikyagqossasyqcu;
                sswmkkcyawawqwwg:
                switch ($aiamqeawckcsuaou) {
                    case "\x41\x44\x44":
                    case "\115\x4f\104\111\x46\x59":
                        goto mumeawggkmqsowae;
                        kyiewmuguyyccsca:
                        ckaggwgwsyowuuem:
                        goto ecimugmwcawqmyaa;
                        yeiawaisoceoysau:
                        eecyiiwsqomoggmq:
                        goto kyiewmuguyyccsca;
                        kwcyggeukmgacqsy:
                        $aiowsaccomcoikus = $ikgwqyuyckaewsow[$qgoqiacsiccwoawi];
                        goto isqokqgukyemmqcg;
                        isqokqgukyemmqcg:
                        if (!$aiowsaccomcoikus instanceof Field) {
                            goto eecyiiwsqomoggmq;
                        }
                        goto gemuuqmegqkkgeua;
                        gemuuqmegqkkgeua:
                        $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus, $aiamqeawckcsuaou === "\115\x4f\104\111\106\131");
                        goto yeiawaisoceoysau;
                        ecimugmwcawqmyaa:
                        goto okaiokeeaqccisaq;
                        goto msieagoikksumcwa;
                        mumeawggkmqsowae:
                        if (!isset($ikgwqyuyckaewsow[$qgoqiacsiccwoawi])) {
                            goto ckaggwgwsyowuuem;
                        }
                        goto kwcyggeukmgacqsy;
                        msieagoikksumcwa:
                    case "\x41\104\104\40\111\116\x44\105\x58":
                    case "\104\x52\117\x50\x20\111\x4e\x44\105\x58":
                        goto imwcikaiagkakiic;
                        ymkoykouaqiusygo:
                        
                        $aasascamegmwqmqk->index($qgoqiacsiccwoawi);
                        goto eeoiyiuccooeigmk;
                        eeoiyiuccooeigmk:
                        ygywowuyoygiiqaq:
                        goto owkyiywsooiwewgw;
                        owkyiywsooiwewgw:
                        goto okaiokeeaqccisaq;
                        goto wqyymgoekecmskmm;
                        uooisauooikkciom:
                        if (!($aiamqeawckcsuaou == "\101\104\104\x20\111\116\104\x45\130")) {
                            goto ygywowuyoygiiqaq;
                        }
                        goto ymkoykouaqiusygo;
                        imwcikaiagkakiic:
                        
                        $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi);
                        goto uooisauooikkciom;
                        wqyymgoekecmskmm:
                    case "\104\122\117\120":
                        
                        $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi);
                        goto okaiokeeaqccisaq;
                }
                goto kaocmesokyiikyci;
                agwsusimqmoesgck:
                yoeqaicysswwgkmm:
                goto kqiakyymyiosoeia;
                cgyikucmysgcmweu:
                $aiamqeawckcsuaou = $ocyscigwmouqaiia["\x61\143\164\x69\157\x6e"];
                goto sswmkkcyawawqwwg;
                yikyagqossasyqcu:
                okaiokeeaqccisaq:
                goto agwsusimqmoesgck;
                kqiakyymyiosoeia:
            }
            qgyeyyagaeyoequw:
        };
        goto ccqagygkoaagksyw;
        wcmsamoqaogoouey:
        if (!(json_encode($uwomkgseoiegeume) != json_encode($wkkweuacukumqmya))) {
            goto iceuoqgyqsmywqqq;
        }
        goto oyciiqiqoqkgoqec;
        oeukmyymqaaakksa:
        twusqqkmqgswisei:
        goto ookeyiumgkqqucia;
        akieywkiweasukyw:
        ManipulateArray::gyciysooayoqiisg($wkkweuacukumqmya, ["\x69\144"]);
        goto qoqgokiaagioccqg;
        yqywgkymmowyggqa:
        cywmgwogisiyymoi:
        goto oogmmeccymcuwwac;
        emyuskcwqyscewue:
        $uwqmqcmssaeieiqa = [];
        goto alomqucgmacieuoa;
        oguigickaoqigcoi:
        
        $this->gqaysymikgeawkqa()->table($aasascamegmwqmqk, $ekiuyucoiagmscgy);
        goto qmugciukukckmeiu;
        gqwcuusyiggisuok:
    }
    
    public function create($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo)
    {
        $this->gqaysymikgeawkqa()->create($ymqmyyeuycgmigyo, function (Blueprint &$aasascamegmwqmqk) use($ikgwqyuyckaewsow) {
            goto qogyssukouuesqis;
            ogaqcigmoyoqcsws:
            ikoaokuwokyiigsu:
            goto egmauuemqqqqsgic;
            mgkaweokcicgiegg:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus);
                kquqgyygaeiwkeko:
            }
            goto ukcoymqsgmcwokoq;
            ukcoymqsgmcwokoq:
            sqkmkmcmocigewua:
            goto degewusuggmqqeso;
            kkoukeoyauekomau:
            if ($aasascamegmwqmqk->collation) {
                goto ikoaokuwokyiigsu;
            }
            goto wgeqwaisweikegck;
            wgeqwaisweikegck:
            $aasascamegmwqmqk->collation = $this->aceaeommyuooiqge("\143\157\154\154\x61\164\x69\157\156");
            goto ogaqcigmoyoqcsws;
            qogyssukouuesqis:
            
            $aasascamegmwqmqk->bigIncrements(self::ID);
            goto kkoukeoyauekomau;
            agwyiymkkwmywcsw:
            $aasascamegmwqmqk->charset = $this->aceaeommyuooiqge("\x63\150\x61\x72\x73\x65\x74");
            goto qkeyoeyiuqeyicqa;
            qkeyoeyiuqeyicqa:
            aouauysuwimgygie:
            goto mgkaweokcicgiegg;
            egmauuemqqqqsgic:
            if ($aasascamegmwqmqk->charset) {
                goto aouauysuwimgygie;
            }
            goto agwyiymkkwmywcsw;
            degewusuggmqqeso:
        });
    }
    
    public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Field $aiowsaccomcoikus, $vkgsqsqqqgyaqkog = false) : Blueprint
    {
        goto quowmcomwmsmugqe;
        saoickmcegceesyw:
        $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca);
        goto quumuskukkcuuciu;
        sgqackwokosksyua:
        aywsyyewoswacqqy:
        goto kiwacoqesuqmyiiu;
        gammkicacakosigu:
        
        $keuuiqywyuiuegkq->unique();
        goto qkusmocauegwwqwy;
        yaieemqskkgmcqou:
        
        $keuuiqywyuiuegkq->autoIncrement();
        goto cmqmcaowowcccgka;
        oeyoiicmckkgoyqg:
        uckqwisqmyeuegei:
        goto owkgksuymewqqiwu;
        kimwcesmkuqqyamq:
        oeoyiakocyacqsys:
        goto cegokyqcmuuwyoey;
        quumuskukkcuuciu:
        if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) {
            goto eosiakwgiemwwqwy;
        }
        goto iiwuqoagoqgmwwiq;
        meueuqeagkwkoiuk:
        if (!($kokmwkcqkgkewiuw = $aiowsaccomcoikus->yuwwmewqqauckiky())) {
            goto uokwiwsewewgcocy;
        }
        goto cseucimaukwaskwk;
        cegokyqcmuuwyoey:
        if (!$vkgsqsqqqgyaqkog) {
            goto osamucgweicwoiqy;
        }
        goto yayicayasmkmsemm;
        ecoygmauwycmweyq:
        gucokiskmccmsaac:
        goto meueuqeagkwkoiuk;
        caeiwemymyceqqei:
        qyeomiwmooookysu:
        goto ogwmeoaswuqwamim;
        ekykiumoyeyamsew:
        goemggymkikoquwi:
        goto caccouegecmukqci;
        quowmcomwmsmugqe:
        $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
        goto ycqcgaauyqmkwskc;
        yayicayasmkmsemm:
        
        $keuuiqywyuiuegkq->change();
        goto qcgekwgksmkoamik;
        qkusmocauegwwqwy:
        
        $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo);
        goto qwwmqqkoeuywmqys;
        kiwacoqesuqmyiiu:
        mogweaaaqocouiug:
        goto aimwoikqsqkyicsu;
        kucymsiiugmiooyo:
        uokwiwsewewgcocy:
        goto auakugikcequsiia;
        ciksycqiaaueqaaq:
        
        $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug);
        goto ecoygmauwycmweyq;
        kqkcowkuqsuemmmc:
        goto oeoyiakocyacqsys;
        goto caeiwemymyceqqei;
        imquocywcscomayo:
        if (!$aiowsaccomcoikus->kweqqkiwiugikyam()) {
            goto ywyceqcyssuuyauc;
        }
        goto gammkicacakosigu;
        esewmcieucesaqcw:
        switch ($sqeykgyoooqysmca) {
            case "\x4a\123\117\116":
            case "\101\x52\x52\x41\x59":
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo);
                goto mogweaaaqocouiug;
            case "\106\x4f\x52\x45\111\x47\116":
                goto eseyciuwmwyauuio;
                skeyqsaqsiwgiyog:
                goto mogweaaaqocouiug;
                goto awwgggeiaceyecco;
                qseiiaweiykcwacy:
                yqaqgsyaqomgoowq:
                goto kewsuqsoqkyikkis;
                swqkecoseauacwio:
                return $aasascamegmwqmqk;
                goto ksiuacaiaiauywae;
                yuyyeiiewiuogceo:
                mmgqsmogqmouuskw:
                goto ugomsuwwuqsskuqc;
                kcieymewycqwegis:
                wqiwmousomaigmgm:
                goto swqkecoseauacwio;
                wgicusccasmuiosy:
                qmawgkeuyyqwcmok:
                goto oaqqykskqqqqsqem;
                gsiegqomuuccaoos:
                goaaoqkgsieiyuqm:
                goto kcieymewycqwegis;
                owssugkggmiascii:
                if (!($smgycasaqmgcaekq = $aiowsaccomcoikus->giqekaueqsgsmkgo())) {
                    goto qmawgkeuyyqwcmok;
                }
                goto mqcgsiaawwkqmksi;
                ayeysmcoemkcsegm:
                if (!$aiowsaccomcoikus->ygswmewosceowmya()) {
                    goto wqiwmousomaigmgm;
                }
                goto cwccggguqewowygo;
                csoecqymkecmuueu:
                if (!$gsmssqouaueqkeui instanceof Model) {
                    goto goaaoqkgsieiyuqm;
                }
                goto iyaawicgsuuoykiq;
                oaqqykskqqqqsqem:
                if (!($muegsmmicsqsgucm = $aiowsaccomcoikus->ucqugkkuiooayqie())) {
                    goto mmgqsmogqmouuskw;
                }
                goto yoeoiuuuqakicgam;
                iyaawicgsuuoykiq:
                $usymcioagieycusu = $this->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto ammqgccmiuwcaeuq;
                ugomsuwwuqsskuqc:
                suycyuwkgakgikqw:
                goto skeyqsaqsiwgiyog;
                uikqgasygyaeqcac:
                $this->create([self::geqyygqiwiqusekc($usymcioagieycusu . self::_ID)->qkwyekmiceaogwci(false), self::geqyygqiwiqusekc($wkwywcemusswkgwk . self::_ID)->qkwyekmiceaogwci(false)], $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\137{$wkwywcemusswkgwk}", false));
                goto gsiegqomuuccaoos;
                mqcgsiaawwkqmksi:
                
                $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq);
                goto wgicusccasmuiosy;
                kygqagmyyqysywkm:
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo);
                goto aqakqumsuimkkkus;
                ammqgccmiuwcaeuq:
                $wkwywcemusswkgwk = $gsmssqouaueqkeui->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto skeqeeuuemswqgwu;
                aqakqumsuimkkkus:
                if (!($koegqoagisewcica = $aiowsaccomcoikus->miosasgcmguoamem())) {
                    goto yqaqgsyaqomgoowq;
                }
                goto qkeogqcekgawsgwe;
                cwccggguqewowygo:
                $gsmssqouaueqkeui = $aiowsaccomcoikus->uecyuoauykiqqkey()::symcgieuakksimmu();
                goto csoecqymkecmuueu;
                kkyumyewcymikswk:
                if (!$aiowsaccomcoikus->iueigwuckeaswyuu()) {
                    goto uemgoaamkymwuiko;
                }
                goto ayeysmcoemkcsegm;
                mqcoyamukmaoqwmw:
                
                $aasascamegmwqmqk->bigInteger($ymqmyyeuycgmigyo)->unsigned();
                goto kygqagmyyqysywkm;
                qkeogqcekgawsgwe:
                
                $keuuiqywyuiuegkq->on($koegqoagisewcica);
                goto qseiiaweiykcwacy;
                oqiqyekweaomiwgy:
                cyomeoyuoqywoysa:
                goto owssugkggmiascii;
                ksiuacaiaiauywae:
                uemgoaamkymwuiko:
                goto mqcoyamukmaoqwmw;
                yeecswicmoyiqssi:
                
                $keuuiqywyuiuegkq->references($ykqcceqiqygieeks);
                goto oqiqyekweaomiwgy;
                kewsuqsoqkyikkis:
                if (!($ykqcceqiqygieeks = $aiowsaccomcoikus->syccewqoeggkkgke())) {
                    goto cyomeoyuoqywoysa;
                }
                goto yeecswicmoyiqssi;
                skeqeeuuemswqgwu:
                $yuwymayicwwqiske = $this->oyeskqayoscwciem()->ogqgmqymcwsqikme();
                goto uikqgasygyaeqcac;
                yoeoiuuuqakicgam:
                
                $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm);
                goto yuyyeiiewiuogceo;
                eseyciuwmwyauuio:
                if (!$aiowsaccomcoikus instanceof Foreign) {
                    goto suycyuwkgakgikqw;
                }
                goto kkyumyewcymikswk;
                awwgggeiaceyecco:
            case "\x53\x45\x54":
            case "\x45\x4e\125\x4d":
                goto oemkgkauqekgkumy;
                mmmgeukkswewyuoa:
                $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue);
                goto ygegasgiwgmswaog;
                mswucuuigmosimuo:
                goto mogweaaaqocouiug;
                goto ayuwkwsuioumscca;
                iuoayeiykmokiiys:
                if (!ManipulateArray::wuoqgcwmkicakygs($qiouiwasaauyaaue)) {
                    goto ayeqwsqywosymiwu;
                }
                goto mmmgeukkswewyuoa;
                ygegasgiwgmswaog:
                ayeqwsqywosymiwu:
                goto qiaaqckmooiayuae;
                oemkgkauqekgkumy:
                $qiouiwasaauyaaue = $aiowsaccomcoikus->gkwkqmwweiawigae();
                goto iuoayeiykmokiiys;
                qiaaqckmooiayuae:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue);
                goto mswucuuigmosimuo;
                ayuwkwsuioumscca:
            case "\106\114\117\x41\x54":
            case "\104\117\125\102\114\x45":
            case "\x44\105\x43\x49\x4d\x41\114":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aiowsaccomcoikus->siamswkmsqckqgeu());
                goto mogweaaaqocouiug;
            case "\x54\x49\115\105":
            case "\104\x41\x54\x45\124\x49\x4d\x45":
            case "\124\111\115\105\123\x54\101\115\120":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0);
                goto mogweaaaqocouiug;
            case "\x43\110\x41\x52":
            case "\x53\124\x52\111\116\x47":
            case "\126\101\x52\x43\110\101\x52":
                goto agicooogqyeyoyqi;
                ykgkuccgawoyquga:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq);
                goto cecoqgqcckqoouwy;
                wcuqgoiokweuwycq:
                goto mogweaaaqocouiug;
                goto caskecmuwociuumq;
                cmwaakkwwqameeec:
                gswoagoguesomwyc:
                goto ykgkuccgawoyquga;
                wesooeakucoqmisw:
                goto ecomecoqggyssmsk;
                goto cmwaakkwwqameeec;
                osoukeawsoyqmwgo:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto wesooeakucoqmisw;
                cecoqgqcckqoouwy:
                ecomecoqggyssmsk:
                goto wcuqgoiokweuwycq;
                agicooogqyeyoyqi:
                if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) {
                    goto gswoagoguesomwyc;
                }
                goto osoukeawsoyqmwgo;
                caskecmuwociuumq:
            default:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto mogweaaaqocouiug;
        }
        goto sgqackwokosksyua;
        awwyuikkmaaomkqc:
        gesaagokeamiwuws:
        goto imquocywcscomayo;
        aqyweyyyygygswmy:
        
        $keuuiqywyuiuegkq->unsigned();
        goto awwyuikkmaaomkqc;
        owkgksuymewqqiwu:
        if (!$aiowsaccomcoikus->qumigiaaeieaemgy()) {
            goto gesaagokeamiwuws;
        }
        goto aqyweyyyygygswmy;
        soqakmcacqiqamku:
        if (!($guuwoyaeoeeaauug = $aiowsaccomcoikus->ogmguwgoqkqkkisa())) {
            goto gucokiskmccmsaac;
        }
        goto ciksycqiaaueqaaq;
        iiwuqoagoqgmwwiq:
        $keuuiqywyuiuegkq = null;
        goto esewmcieucesaqcw;
        semwcosqeukmgoey:
        
        $keuuiqywyuiuegkq->default($ggauoeuaesiymgee);
        goto oeyoiicmckkgoyqg;
        qcgekwgksmkoamik:
        osamucgweicwoiqy:
        goto ekykiumoyeyamsew;
        aimwoikqsqkyicsu:
        if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) {
            goto goemggymkikoquwi;
        }
        goto qiggceewmyagkisq;
        ogwmeoaswuqwamim:
        
        $keuuiqywyuiuegkq->nullable(true);
        goto kimwcesmkuqqyamq;
        ycqcgaauyqmkwskc:
        $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu();
        goto gkaayykiiqqogeiw;
        qiggceewmyagkisq:
        if (!$aiowsaccomcoikus->oikqausqaykqkmqi()) {
            goto qcgyuksgqucyquwi;
        }
        goto yaieemqskkgmcqou;
        qwsmwwskogygagea:
        $qgciuiagkkguykgs = ManipulateString::snake2camel($sqeykgyoooqysmca);
        goto saoickmcegceesyw;
        igsweakykqomoqgi:
        
        $keuuiqywyuiuegkq->nullable(false);
        goto kqkcowkuqsuemmmc;
        cmqmcaowowcccgka:
        qcgyuksgqucyquwi:
        goto imcseqowgomyokwi;
        caccouegecmukqci:
        eosiakwgiemwwqwy:
        goto osouwwksqimikqqo;
        cseucimaukwaskwk:
        
        $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw);
        goto kucymsiiugmiooyo;
        auakugikcequsiia:
        if ($aiowsaccomcoikus->yseywyqacmugimme()) {
            goto qyeomiwmooookysu;
        }
        goto igsweakykqomoqgi;
        imcseqowgomyokwi:
        if (!(($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae()) !== false)) {
            goto uckqwisqmyeuegei;
        }
        goto semwcosqeukmgoey;
        gkaayykiiqqogeiw:
        $ykiwomimkkuiigoq = $aiowsaccomcoikus->qamkswcgsoeggmau();
        goto qwsmwwskogygagea;
        qwwmqqkoeuywmqys:
        ywyceqcyssuuyauc:
        goto soqakmcacqiqamku;
        osouwwksqimikqqo:
        return $aasascamegmwqmqk;
        goto icsukicuomwmqiyc;
        icsukicuomwmqiyc:
    }
}
