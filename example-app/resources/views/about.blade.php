<?
use Asciisd\Zoho\Zohoable;
use Asciisd\Zoho\Facades\ZohoManager;
use Asciisd\Zoho\CriteriaBuilder;

$leads = ZohoManager::useModule('Leads');
$lead = $leads->getRecord('4916906000000322431');
$record = $leads->getRecordInstance();
$leadtest = $lead->getFieldValue("First_Name");
$deals  = ZohoManager::useModule('Deals');
$record = $deals->getRecordInstance();
$record->setFieldValue();
$record->setFieldValue();
$record->setFieldValue();
$record->setFieldValue();

?>
@extends('layouts.app')

@section('title-block')Про нас
@endsection
@section('content')
    <h1><?php echo $leadtest ?></h1>
    <h1>Страница Про нас</h1>

@endsection
