<?
use Asciisd\Zoho\Zohoable;
use Asciisd\Zoho\Facades\ZohoManager;
use Asciisd\Zoho\CriteriaBuilder;

$leads = ZohoManager::useModule('Leads');
$lead = $leads->getRecord('4916906000000322431');
$record = $leads->getRecordInstance();
$leadtest = $lead->getFieldValue("First_Name");
?>
@extends('layouts.app')

@section('title-block')Про нас
@endsection
@section('content')
    <h1><?php echo $leadtest ?></h1>
    <h1>Страница Про нас</h1>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

@endsection
