<?php
// File diagnosa untuk InfinityFree
// Upload file ini ke htdocs/ lalu buka: kurniawan.42web.io/diagnosa.php

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Diagnosa InfinityFree</h2>";
echo "<style>body{font-family:monospace;font-size:14px;} .ok{color:green;} .fail{color:red;} .warn{color:orange;} table{border-collapse:collapse;width:100%;} td,th{border:1px solid #ccc;padding:8px;text-align:left;}</style>";

echo "<table>";
echo "<tr><th>Cek</th><th>Hasil</th><th>Status</th></tr>";

// 1. PHP Version
$phpVersion = phpversion();
$phpOk = version_compare($phpVersion, '8.2.0', '>=');
echo "<tr><td>PHP Version</td><td>$phpVersion</td><td class='" . ($phpOk ? 'ok' : 'fail') . "'>" . ($phpOk ? 'OK (>= 8.2)' : 'FAIL (butuh >= 8.2)') . "</td></tr>";

// 2. Required PHP Extensions
$extensions = ['pdo', 'pdo_mysql', 'mbstring', 'openssl', 'tokenizer', 'xml', 'ctype', 'json', 'bcmath', 'curl', 'fileinfo'];
foreach ($extensions as $ext) {
    $loaded = extension_loaded($ext);
    echo "<tr><td>ext-$ext</td><td>" . ($loaded ? 'Loaded' : 'NOT FOUND') . "</td><td class='" . ($loaded ? 'ok' : 'fail') . "'>" . ($loaded ? 'OK' : 'FAIL') . "</td></tr>";
}

// 3. .env file check
$envFile = __DIR__ . '/.env';
$envExists = file_exists($envFile);
echo "<tr><td>.env exists</td><td>" . ($envExists ? 'Yes' : 'No') . "</td><td class='" . ($envExists ? 'ok' : 'fail') . "'>" . ($envExists ? 'OK' : 'FAIL - upload file .env!') . "</td></tr>";

if ($envExists) {
    $envContent = file_get_contents($envFile);

    // Check DB_CONNECTION
    preg_match('/^DB_CONNECTION=(.+)$/m', $envContent, $m);
    $dbConn = $m[1] ?? 'NOT SET';
    $isMysql = ($dbConn === 'mysql');
    echo "<tr><td>DB_CONNECTION</td><td>$dbConn</td><td class='" . ($isMysql ? 'ok' : 'fail') . "'>" . ($isMysql ? 'OK' : 'FAIL - harus mysql!') . "</td></tr>";

    // Check DB_DATABASE
    preg_match('/^DB_DATABASE=(.+)$/m', $envContent, $m);
    $dbName = $m[1] ?? 'NOT SET';
    $hasDb = !in_array($dbName, ['NOT SET', 'isi_nama_database', 'GANTI_DENGAN_NAMA_DATABASE', 'laravel']);
    echo "<tr><td>DB_DATABASE</td><td>$dbName</td><td class='" . ($hasDb ? 'ok' : 'fail') . "'>" . ($hasDb ? 'OK' : 'FAIL - isi nama database MySQL!') . "</td></tr>";

    // Check APP_KEY
    $hasKey = strpos($envContent, 'APP_KEY=base64:') !== false;
    echo "<tr><td>APP_KEY</td><td>" . ($hasKey ? 'Set' : 'NOT SET') . "</td><td class='" . ($hasKey ? 'ok' : 'fail') . "'>" . ($hasKey ? 'OK' : 'FAIL') . "</td></tr>";

    // Check APP_DEBUG
    preg_match('/^APP_DEBUG=(.+)$/m', $envContent, $m);
    $debug = $m[1] ?? 'NOT SET';
    echo "<tr><td>APP_DEBUG</td><td>$debug</td><td>" . ($debug === 'false' ? '<span class="ok">OK (production)</span>' : '<span class="warn">WARN (true = debug mode)</span>') . "</td></tr>";

    // Check SESSION_DRIVER
    preg_match('/^SESSION_DRIVER=(.+)$/m', $envContent, $m);
    $session = $m[1] ?? 'NOT SET';
    echo "<tr><td>SESSION_DRIVER</td><td>$session</td><td class='" . ($session === 'file' ? 'ok' : 'warn') . "'>" . ($session === 'file' ? 'OK' : 'Seharusnya file') . "</td></tr>";
}

// 4. Directory permissions
$dirs = ['storage/framework/sessions', 'storage/framework/cache', 'storage/framework/views', 'storage/logs', 'bootstrap/cache', 'public/images'];
foreach ($dirs as $dir) {
    $path = __DIR__ . '/' . $dir;
    $exists = is_dir($path);
    $writable = $exists && is_writable($path);
    echo "<tr><td>$dir</td><td>" . ($exists ? 'Exists' : 'MISSING') . ($exists ? ', ' . ($writable ? 'Writable' : 'NOT Writable') : '') . "</td><td class='" . ($writable ? 'ok' : ($exists ? 'warn' : 'fail')) . "'>" . ($writable ? 'OK' : ($exists ? 'WARN' : 'FAIL')) . "</td></tr>";
}

// 5. .htaccess check
$htaccess = __DIR__ . '/.htaccess';
$htExists = file_exists($htaccess);
echo "<tr><td>Root .htaccess</td><td>" . ($htExists ? 'Exists' : 'MISSING') . "</td><td class='" . ($htExists ? 'ok' : 'fail') . "'>" . ($htExists ? 'OK' : 'FAIL') . "</td></tr>";

$pubHtaccess = __DIR__ . '/public/.htaccess';
$pubHtExists = file_exists($pubHtaccess);
echo "<tr><td>public/.htaccess</td><td>" . ($pubHtExists ? 'Exists' : 'MISSING') . "</td><td class='" . ($pubHtExists ? 'ok' : 'fail') . "'>" . ($pubHtExists ? 'OK' : 'FAIL') . "</td></tr>";

// 6. Key files
$files = ['vendor/autoload.php', 'bootstrap/app.php', 'public/index.php'];
foreach ($files as $f) {
    $exists = file_exists(__DIR__ . '/' . $f);
    echo "<tr><td>$f</td><td>" . ($exists ? 'Exists' : 'MISSING') . "</td><td class='" . ($exists ? 'ok' : 'fail') . "'>" . ($exists ? 'OK' : 'FAIL - upload!') . "</td></tr>";
}

// 7. Try MySQL connection if .env has mysql config
if ($envExists) {
    preg_match('/^DB_HOST=(.+)$/m', $envContent, $mH);
    preg_match('/^DB_PORT=(.+)$/m', $envContent, $mP);
    preg_match('/^DB_DATABASE=(.+)$/m', $envContent, $mD);
    preg_match('/^DB_USERNAME=(.+)$/m', $envContent, $mU);
    preg_match('/^DB_PASSWORD=(.*)$/m', $envContent, $mPw);

    $host = $mH[1] ?? '';
    $port = $mP[1] ?? '3306';
    $db = $mD[1] ?? '';
    $user = $mU[1] ?? '';
    $pass = $mPw[1] ?? '';

    if ($host && $db && $user && !in_array($db, ['isi_nama_database', 'GANTI_DENGAN_NAMA_DATABASE', 'laravel'])) {
        try {
            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass, [PDO::ATTR_TIMEOUT => 5]);
            $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
            $tableCount = count($tables);
            $tableList = implode(', ', array_slice($tables, 0, 10));
            echo "<tr><td>MySQL Connection</td><td>Connected! Tables: $tableCount ($tableList)</td><td class='ok'>OK</td></tr>";
        } catch (PDOException $e) {
            echo "<tr><td>MySQL Connection</td><td>" . htmlspecialchars($e->getMessage()) . "</td><td class='fail'>FAIL</td></tr>";
        }
    } else {
        echo "<tr><td>MySQL Connection</td><td>Skipped (DB not configured yet)</td><td class='warn'>SKIP</td></tr>";
    }
}

echo "</table>";
echo "<hr><p><em>Selesai diagnosa. " . date('Y-m-d H:i:s') . "</em></p>";
