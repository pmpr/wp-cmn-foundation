<?php
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\ConnectionInterface; use Illuminate\Database\ConnectionResolverInterface; class Resolver extends Common implements ConnectionResolverInterface { public function connection($vPl9z = null) { return Database::getInstance(); } public function getDefaultConnection() { } public function setDefaultConnection($vPl9z) { } }
