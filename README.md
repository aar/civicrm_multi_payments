CiviCRM - OASIS Fork
===================

This is the fork of CiviCRM specific to the OASIS project. The primary reason for this fork was to allow duplicate transaction ID's for a contribution.

### Current Release

*   2013-08-29: **7.x-4.2.6-1.0**

### Other Releases

*   None**


### Version syntax definition

    A.B-C.D.E-F.G

*   **A** = Drupal Major Version
*   **B** = Drupal Minor Version
*   **C** = CiviCRM Major Version
*   **D** = CiviCRM Minor Version
*   **E** = CiviCRM Patched Version
*   **F** = OASIS Fork Major Version
*   **G** = OASIS Fork Minor Version

When creating dev branches, end the OASIS fork minor version in "x".
Example: `7.x-4.2.6-1.x`

Important Dev Note
======================
When merging any changes into `master` that will be then be a production release must be saved and committed as a patch file. This will allow us to merge into future version of CiviCRM and keep track of our importan customizations/fixes. If you fail to do this, it is probable that changes will be lost during CiviCRM release merging.

Eventually we'll want to merge the Forked [CiviCRM 4.2 LTS](https://github.com/CiviCRM42/civicrm42-core) repo into this repo to gain the benefit community fixes specific to the 4.2 CiviCRM release.