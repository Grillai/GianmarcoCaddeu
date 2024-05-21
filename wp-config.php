<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'beta1' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+B[:6s;$zesF+ft24><Jv(a&Y`zzf>t|@j@qN@vygg/wAnq#O]7p{GLom$s`xee:' );
define( 'SECURE_AUTH_KEY',  '|u$G-Bw`;yZ!vM.fyhCN%^`):1?mT2O#i,2)ej;Ngg wYX|h!`d;#ylDh|<-GAk|' );
define( 'LOGGED_IN_KEY',    'POot7eJMf#d5oUv$4o}I_ |vs]:T%;<+P $69qf)!E#/IPGPs4SIY%b.imOiLVZy' );
define( 'NONCE_KEY',        'V%{Z<.6cr;##`zgIG+@Iv?fGwb`0~+VAP6$jd(Wan2%3%gt/`l*2tSI}[!DE!@(Y' );
define( 'AUTH_SALT',        '(>qX|61-^n|O)3.?B=vC-UZ0EE^K1hh;6s/lfr$!L:0&QAu)/ke~ 8:sY0-]??k:' );
define( 'SECURE_AUTH_SALT', 'l4f1Ws(eP|jQU!Y.W0l$r?QemosZ)7h(-GFk~irz-HmLzHKr45F{vil<AR%EBpr)' );
define( 'LOGGED_IN_SALT',   '3V)BL40[X.l{lI%L:!hl`kWGY%I[9wpggB(+2j0/y:mh7-j{Y/V4.Z`8-dtDdyZo' );
define( 'NONCE_SALT',       '?jQC8u$e?oq~!1LC]rD,k5uo&Mgqm`nbV4$LQX8U0?13?pE(~TNJ_#G/Q_GP:rye' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli sviluppatori di temi e plugin di utilizzare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungi qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
