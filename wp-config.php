<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'plastec');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!z?1z_|RVZq=2|xX;:KY #n)&2e)p[kPAc%ihE`nN7#aj#hPb.+(R/=L0q+[(._c');
define('SECURE_AUTH_KEY',  '2:rj=m4h)Ja:|m|d</;.e3O%~JDGJH>cSg_BJJmL|j9{VO8@>rlW_%G4};20Vc5Q');
define('LOGGED_IN_KEY',    's1m5SryBODC=T#t7-tDo-L|ucZ1iG-EeDF#iLykHXOR)QkDNR?0^Y!c@ lC[rhn;');
define('NONCE_KEY',        'tAE5lKr$}q7O2a8&U0=z{(O S71qB +?dGKRfBHT7ue,Y}8o3a b8cD7llE6cJ[g');
define('AUTH_SALT',        'ZNAzb3sAsbDi& 1K$OcH3d)*DNq*O-$vV/DjQ{^]O-NW~RA$0DB$sWsztOsTXvwL');
define('SECURE_AUTH_SALT', '<@UQ08~-#N<aACa${lOQ:w(Y-eJB6SO)|<;V|V+P`b`dFlWE3FZ+pn.gHK04i99S');
define('LOGGED_IN_SALT',   '7]`R,hV$,%n0AX6l:KxZ^3-H{-,-m2k0Pl|t/Yz[*;]jZ0J!].upEu1+qtLjEw{(');
define('NONCE_SALT',       '@*T*&K!3/9I .jv<yzml-,*E|P1M)f)-wkfB|fL$RV<i]fXO.+gC_RFN,(:zUwru');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
