#!/usr/bin/env bash

# Import/set all the variables.
SCRIPT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
DOCROOT=${SCRIPT_DIR}/../docroot
source ${SCRIPT_DIR}/variables.sh

# Install the site.
cd ${DOCROOT} && drush si ${PROFILE_NAME} -y --account-mail=${ACCOUNT_MAIL} --site-mail=${ACCOUNT_MAIL} --account-name=${ACCOUNT_NAME} --account-pass=${ACCOUNT_PASS}
cd ${DOCROOT} && drush cset -y system.site uuid ${SITE_ID}

# Import the configuration from configuration manager.
cd ${DOCROOT} && drush cim sync -y
cd ${DOCROOT} && drush mi --all
