<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:8889' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ww6A}j1`pFk9K%j(Y> |<0[($5Rgf O~L:wQxWav^}Y8**_bfNA::<X_k1rg,QW(' );
define( 'SECURE_AUTH_KEY',  'gZbVnAC~w `obMr;jjI40w[l+IjOJm}kh}o g{BS&f<A7?PY##d|[~`< |]<!_#x' );
define( 'LOGGED_IN_KEY',    '5~r6bUKs?7<]u@hg&bvg[k6|n~Qrsm+V#JB`1^uS+X-o p^x:*dqOsgyIpeY9[}4' );
define( 'NONCE_KEY',        'PS]//ug;uC>2iN3w<bPVEEMg6Z)Y-69@26ff#plnF):-_lOek~,bEBhA&u&lM;Z9' );
define( 'AUTH_SALT',        'xHRU_;L5<DE8p)^~}v2J2I2%%yog;Y|L1LM8tc4CxF-;v-awb{b 7Ue[GhByBg<P' );
define( 'SECURE_AUTH_SALT', '7r7H=a>9s$*HNsC<VGcn46K-|?bAnd{xcX_[T!anrmoC`UBtwlYDR;gxc:?>kghO' );
define( 'LOGGED_IN_SALT',   ':_2|z%BM~y%:x]mF<n4ofF!i_A6Amg6J;hS8.ovT>3o0}@E8RLyQwDfriyE{Nb3D' );
define( 'NONCE_SALT',       '[X@dpmG%A6o#-vnFhwcdFJ1fK{}Oa@plYDwxDRlLDvwATV}O.kK$$R77EwZQe0((' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
