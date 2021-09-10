<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger;

use Exception;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Monolog\Handler\StreamHandler;
use Monolog\Logger as MonologLogger;

class Engine extends Common
{
    const INFO_CODE = 200;
    const ERROR_CODE = 400;
    const DEBUG_CODE = 100;
    const ALERT_CODE = 550;
    const NOTICE_CODE = 250;
    const WARNING_CODE = 300;
    const CRITICAL_CODE = 500;
    const EMERGENCY_CODE = 600;
    const FILE_EXTENSION = '.log';
    
    protected array $channels = [];
    
    public function eqosmaiseggiwsqi()
    {
        return ManipulateFile::cmaecekuqkwmemms(self::PR__LOG__PATH);
    }
    
    public function oquccoakoiimcoyk() : array
    {
        return $this->channels;
    }
    
    public function meyuyyociockkgow($ymqmyyeuycgmigyo)
    {
        $esmqigouaegaycwg = self::symcgieuakksimmu()->oquccoakoiimcoyk();
        return ManipulateArray::get($esmqigouaegaycwg, $ymqmyyeuycgmigyo, false);
    }
    
    public function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self
    {
        try {
            $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::FILE_EXTENSION) . self::FILE_EXTENSION;
            $acqcekoeswseswws = $this->eqosmaiseggiwsqi() . '/' . $wkcwykowmmmwioqs;
            if (!$this->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) {
                $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($acqcekoeswseswws, "Start Log for: " . $ymqmyyeuycgmigyo . PHP_EOL);
            }
            
            if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk())) {
                $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]);
            } else {
                throw new Exception("{$wkcwykowmmmwioqs} cannot add to logger list: Channel {$ymqmyyeuycgmigyo} is already exist in channel list.");
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            wp_die(__('Something is wrong in addChannel on logger.', PR__CMN__FOUNDATION));
        }
        return $this;
    }
    
    public function kukckykeywuqakmu($esmqigouaegaycwg)
    {
        foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) {
            $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs);
            aegysmeecgcgayyw:
        }
        gaomwagkcciesyqy:
    }
    
    public function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string
    {
        $qogsmwakwacwqogk = null;
        $iwcsiuuqeaaaeees = self::meyuyyociockkgow($ymqmyyeuycgmigyo);
        if ($iwcsiuuqeaaaeees instanceof MonologLogger) {
            
            $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers();
            if (is_array($qgysocqcuoqmacuo) && $qgysocqcuoqmacuo) {
                $umawqwoyymwaicas = ManipulateArray::get($qgysocqcuoqmacuo, 0);
                if ($umawqwoyymwaicas instanceof StreamHandler) {
                    
                    $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl();
                }
            }
        }
        return $qogsmwakwacwqogk;
    }
    
    public function uimukyawykswgwsm($ymqmyyeuycgmigyo, $iqaosyayeiuaisqi, $uamcoiueqaamsqma, $mgkceomocowocqyo = [])
    {
        
        $xwwgygqkqwuaqwsa = MonologLogger::getLevels();
        if (in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa)) {
            
            $eawuoscsaksyqwiw = self::getChannel($ymqmyyeuycgmigyo);
            if ($eawuoscsaksyqwiw instanceof MonologLogger) {
                $iqaosyayeiuaisqi = MonologLogger::eueeseywswqsawac($iqaosyayeiuaisqi);
                $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi);
                if ($iqaosyayeiuaisqi) {
                    $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo);
                } else {
                    
                    $eawuoscsaksyqwiw->error($uamcoiueqaamsqma, $mgkceomocowocqyo);
                }
            }
        }
    }
}
