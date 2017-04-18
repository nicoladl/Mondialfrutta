.PONY: cc revert install deploy help
.DEFAULT_GOAL := help


DRY =

cr: ## clean the target: drush cr
	drush @$(D_TARGET) cr

install: ## install the site with profile cgt and enable all the features
	drush @$(D_TARGET) si cgt --locale=en --account-mail=$(MAIL) --account-name=$(NAME) --account-pass=$(PASS) --site-name=$(SITE)
	drush @$(D_TARGET) en articles -y
	drush @$(D_TARGET) en configuration -y
	drush @$(D_TARGET) en field_bases -y
	drush @$(D_TARGET) en news -y
	drush @$(D_TARGET) en search_tag_leaf -y


enable: ## enable all the modules
	drush @$(D_TARGET) en -y block translation dblog field field_sql_storage field_ui file filter image list locale menu node number options path php system taxonomy text user
	drush @$(D_TARGET) en -y admin_menu adminimal_admin_menu module_filter ctools page_manager views_content features entityreference field_collection field_group link references references_dialog f_blocco_lancio f_blocco_logo f_blocco_semplice f_blocco_slider f_caratteristica f_d_configuration f_feature_modello f_fields_base f_homepage f_languages f_media f_modello f_real_caratteristica f_tax_applicazione f_tax_brand f_tax_famiglia f_tax_vocabolario entity_translation i18n i18n_menu i18n_node i18n_string i18n_translation diff entity image_field_caption pathauto strongarm token transliteration panels apachesolr_access apachesolr apachesolr_term apachesolr_search facetapi metatag jquery_update variable views views_bulk_operations views_ui

revert: ## force the use of the features
	drush @$(D_TARGET) fra -y
	drush @$(D_TARGET) updatedb -y
	drush @$(D_TARGET) cc all

basic-auth: ## make new htaccess with basic auth
	cp .htaccess-basic-auth .htaccess

no-basic-auth: ## make new htaccess without basic auth
	cp .htaccess-no-basic-auth .htaccess

deploy: ## deploy a specific branch to target site
	@echo "Deploy to --> $(D_TARGET)"
	drush $(DRY) -v rsync @dev @$(D_TARGET)

help:
	@grep -P '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'