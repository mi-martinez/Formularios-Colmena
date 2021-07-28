<?php
require __DIR__ . '/vendor/autoload.php';
$hubSpot = \HubSpot\Factory::createWithApiKey('86ac45a4-9bab-4fcc-a27a-055df47a3418');

$filter = new \HubSpot\Client\Crm\Contacts\Model\Filter();
$filter
    ->setOperator('EQ')
    ->setPropertyName('email')
    ->setValue('caol.dev@gmail.com');

$filterGroup = new \HubSpot\Client\Crm\Contacts\Model\FilterGroup();
$filterGroup->setFilters([$filter]);

$searchRequest = new \HubSpot\Client\Crm\Contacts\Model\PublicObjectSearchRequest();
$searchRequest->setFilterGroups([$filterGroup]);

// @var CollectionResponseWithTotalSimplePublicObject $contactsPage
$contactsPage = $hubSpot->crm()->contacts()->searchApi()->doSearch($searchRequest);
print($contactsPage);

?>