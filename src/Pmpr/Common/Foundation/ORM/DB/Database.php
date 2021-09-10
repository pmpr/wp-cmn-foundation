<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        global $wpdb;
        $this->db = $wpdb;
        parent::__construct();
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
        $ooggeikkseeqyyek = $this->wwiwswsasquukoqs();
        $eygsasmqycagyayw = new Manager();
        $uiewakwqscemywuo = ['driver' => 'mysql', 'host' => $ooggeikkseeqyyek->__get('dbhost'), 'database' => $ooggeikkseeqyyek->__get('dbname'), 'username' => $ooggeikkseeqyyek->__get('dbuser'), 'password' => $ooggeikkseeqyyek->__get('dbpassword'), 'port' => $ooggeikkseeqyyek->options, 'charset' => $ooggeikkseeqyyek->charset, 'collation' => $ooggeikkseeqyyek->collate, 'prefix' => $ooggeikkseeqyyek->prefix];
        
        $eygsasmqycagyayw->addConnection($uiewakwqscemywuo);
        
        $eygsasmqycagyayw->bootEloquent();
        
        $eygsasmqycagyayw->setAsGlobal();
        $this->manager = $eygsasmqycagyayw;
    }
    
    public function query() : Builder
    {
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        $wgqamiqkugoqsmes = $this->yokcoiaqqaquwecc();
        return new Builder($this, $kooimksequwgsyqc, $wgqamiqkugoqsmes);
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->aceaeommyuooiqge('name');
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
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        return (array) $sogksuscggsicmac;
    }
    
    private function quauggogguqkokkk($sogksuscggsicmac, $asiqcaccsgscgcyq, $iykmscciaowcagqu)
    {
        if ($sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error) {
            throw new QueryException($asiqcaccsgscgcyq, $iykmscciaowcagqu, new Exception($this->wwiwswsasquukoqs()->last_error));
        }
    }
    
    public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self
    {
        $this->configs[$uusmaiomayssaecw] = $omkysikckkcieckq;
        return $this;
    }
    
    private function qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, $suckquwcuiuyiogc = false)
    {
        $gqgemcmoicmgaqie = str_replace('"', '`', $gqgemcmoicmgaqie);
        $iykmscciaowcagqu = $this->uooqikqsgykeymok($iykmscciaowcagqu);
        if ($iykmscciaowcagqu) {
            $iykmscciaowcagqu = array_map(function ($moyaaaascoeowegu) {
                if (is_string($moyaaaascoeowegu)) {
                    $moyaaaascoeowegu = "'" . esc_sql($moyaaaascoeowegu) . "'";
                } else {
                    if ($moyaaaascoeowegu === null) {
                        $moyaaaascoeowegu = "null";
                    }
                }
                return $moyaaaascoeowegu;
            }, $iykmscciaowcagqu);
            $gqgemcmoicmgaqie = str_replace(['%', '?'], ['%%', '%s'], $gqgemcmoicmgaqie);
            $gqgemcmoicmgaqie = vsprintf($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        }
        return $gqgemcmoicmgaqie;
    }
    
    public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null, $yuwymayicwwqiske = true) : ?string
    {
        $syeseoiyagmgumcy = '';
        if ($aasascamegmwqmqk) {
            if ($yuwymayicwwqiske) {
                $syeseoiyagmgumcy = $this->wwiwswsasquukoqs()->prefix;
            }
            $syeseoiyagmgumcy = $syeseoiyagmgumcy . ManipulateString::gumqicgiosoqweoy($aasascamegmwqmqk);
        }
        return $syeseoiyagmgumcy;
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
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, true);
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        return intval($sogksuscggsicmac);
    }
    
    public function select($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true) : array
    {
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_results($gqgemcmoicmgaqie);
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        return $sogksuscggsicmac;
    }
    
    public function cursor($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
    }
    
    public function selectOne($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_row($gqgemcmoicmgaqie);
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        return $sogksuscggsicmac;
    }
    
    public function unprepared($gqgemcmoicmgaqie) : bool
    {
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gqgemcmoicmgaqie);
        return $sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error;
    }
    
    public function prepareBindings(array $iykmscciaowcagqu) : array
    {
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        foreach ($iykmscciaowcagqu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            
            if (is_bool($eqgoocgaqwqcimie)) {
                $iykmscciaowcagqu[$uusmaiomayssaecw] = intval($eqgoocgaqwqcimie);
            } else {
                if (is_scalar($eqgoocgaqwqcimie)) {
                    goto uukumskkeggaowck;
                } else {
                    if ($eqgoocgaqwqcimie instanceof \DateTime) {
                        
                        
                        
                        
                        $ocogsiouoiuuguym = $kooimksequwgsyqc->getDateFormat();
                        
                        $iykmscciaowcagqu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->format($ocogsiouoiuuguym);
                    }
                }
            }
            uukumskkeggaowck:
        }
        eequksumcoogyoem:
        return $iykmscciaowcagqu;
    }
    
    public function transaction(Closure $ekiuyucoiagmscgy, $mogwwoaswuuykekc = 1)
    {
        
        $this->beginTransaction();
        try {
            $icwicymcioeyeyek = $ekiuyucoiagmscgy();
            
            $this->commit();
            return $icwicymcioeyeyek;
        } catch (Exception $iewosgggaueeyymg) {
            
            $this->rollBack();
            throw $iewosgggaueeyymg;
        }
    }
    
    public function beginTransaction()
    {
        
        $ammuiskickemgqgc = $this->unprepared("START TRANSACTION;");
        if (false !== $ammuiskickemgqgc) {
            $this->transactionCount++;
        }
    }
    
    public function commit()
    {
        if ($this->transactionCount >= 1) {
            
            $ammuiskickemgqgc = $this->unprepared("COMMIT;");
            if (false !== $ammuiskickemgqgc) {
                $this->transactionCount--;
            }
        }
    }
    
    public function rollBack()
    {
        if ($this->transactionCount >= 1) {
            
            $ammuiskickemgqgc = $this->unprepared("ROLLBACK;");
            if (false !== $ammuiskickemgqgc) {
                $this->transactionCount--;
            }
        }
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
        return $this->wwiwswsasquukoqs()->__get('dbname');
    }
}
