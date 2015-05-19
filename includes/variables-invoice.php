<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * User set variables for Klarna Invoice
 */
$this->enabled     = $this->get_option( 'enabled' );
$this->testmode    = $this->get_option( 'testmode' );
$this->title       = $this->get_option( 'title' );
$this->description = $this->get_option( 'description' );

// Sweden
$this->eid_se    = $this->get_option( 'eid_se' );
$this->secret_se = $this->get_option( 'secret_se' );

// Norway
$this->eid_no    = $this->get_option( 'eid_no' );
$this->secret_no = $this->get_option( 'secret_no' );

// Finland
$this->eid_fi    = $this->get_option( 'eid_fi' );
$this->secret_fi = $this->get_option( 'secret_fi' );

// Denmark
$this->eid_dk    = $this->get_option( 'eid_dk' );
$this->secret_dk = $this->get_option( 'secret_dk' );

// Germany
$this->eid_de    = $this->get_option( 'eid_de' );
$this->secret_de = $this->get_option( 'secret_de' );

// Netherlands
$this->eid_nl    = $this->get_option( 'eid_nl' );
$this->secret_nl = $this->get_option( 'secret_nl' );

// Austria
$this->eid_at    = $this->get_option( 'eid_at' );
$this->secret_at = $this->get_option( 'secret_at' );

// Lower and upper treshold
$this->lower_threshold = $this->get_option( 'lower_threshold' );
$this->upper_threshold = $this->get_option( 'upper_threshold' );

// Monthly cost widget
$this->show_monthly_cost            = $this->get_option( 'show_monthly_cost' );
$this->show_monthly_cost_prio       = $this->get_option( 'show_monthly_cost_prio', 15 );
$this->lower_threshold_monthly_cost = $this->get_option( 'lower_threshold_monthly_cost', 0 );
$this->upper_threshold_monthly_cost = $this->get_option( 'upper_threshold_monthly_cost', 10000000 );

$this->invoice_fee_id = $this->get_option( 'invoice_fee_id', 0 );

$this->de_consent_terms        = $this->get_option( 'de_consent_terms' );
$this->ship_to_billing_address = $this->get_option( 'ship_to_billing_address' );

// Authorized countries
$this->authorized_countries = array();
if ( ! empty( $this->eid_se ) ) {
	$this->authorized_countries[] = 'SE';
}
if ( ! empty( $this->eid_no ) ) {
	$this->authorized_countries[] = 'NO';
}
if ( ! empty( $this->eid_fi ) ) {
	$this->authorized_countries[] = 'FI';
}
if ( ! empty( $this->eid_dk ) ) {
	$this->authorized_countries[] = 'DK';
}
if ( ! empty( $this->eid_de ) ) {
	$this->authorized_countries[] = 'DE';
}
if ( ! empty( $this->eid_nl ) ) {
	$this->authorized_countries[] = 'NL';
}
if ( ! empty( $this->eid_at ) ) {
	$this->authorized_countries[] = 'AT';
}