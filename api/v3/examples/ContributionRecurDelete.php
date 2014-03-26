<?php



/*
 
 */
function contribution_recur_delete_example(){
$params = array( 
  'version' => 3,
  'id' => '',
);

  require_once 'api/api.php';
  $result = civicrm_api( 'contribution_recur','delete',$params );

  return $result;
}

/*
 * Function returns array of result expected from previous function
 */
function contribution_recur_delete_expectedresult(){

  $expectedResult = array( 
  'is_error' => 0,
  'version' => 3,
  'count' => 1,
  'values' => 1,
);

  return $expectedResult  ;
}




/*
* This example has been generated from the API test suite. The test that created it is called
* 
* testDeleteContributionRecur and can be found in 
* http://svn.civicrm.org/civicrm/branches/v3.4/tests/phpunit/CiviTest/api/v3/ContributionRecurTest.php
* 
* You can see the outcome of the API tests at 
* http://tests.dev.civicrm.org/trunk/results-api_v3
* and review the wiki at
* http://wiki.civicrm.org/confluence/display/CRMDOC/CiviCRM+Public+APIs
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*/