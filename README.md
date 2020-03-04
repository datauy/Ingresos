# Ingresos
Cuestionario Ingresos

Procedimiento de instalación:

mkdir raya
cd raya/
git init
git remote add d8main https://github.com/datauy/d8main.git
git pull d8main master
cd sites
git clone https://github.com/datauy/raya.git
Crear base vacía.
Cargar base:
mysql -u <usuario mysql> -p <nombre base> < db/database.mysql
cp default.settings.php settings.php
$settings['hash_salt'] = '';
$databases['default']['default'] = array (
  'database' => '',
  'username' => '’,
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$config_directories['sync'] = 'sites/default/files/config_p1zvluQugJYsFtAplWmoVvYnZDqZ0iNw0cIILaPCGiHgTroRVcTdFL1MFaQbVjq3DHVo7awZIA/sync';
mkdir files
chown fernando:www-data files/
chmod g+w files/
