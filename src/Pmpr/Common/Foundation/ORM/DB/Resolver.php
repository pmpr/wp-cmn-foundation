<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\ConnectionResolverInterface;

class Resolver extends Common implements ConnectionResolverInterface
{
    
    public function connection($ymqmyyeuycgmigyo = null) : ConnectionInterface
    {
        return Database::symcgieuakksimmu();
    }
    
    public function getDefaultConnection()
    {
    }
    
    public function setDefaultConnection($ymqmyyeuycgmigyo)
    {
    }
}
