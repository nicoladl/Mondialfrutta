
ifndef D_TARGET
$(error D_TARGET is undefined)
endif

cr: ## clean the target: drush cr
	drush @$(D_TARGET) cr

deploy: ## deploy a specific branch to target site
	cd ../client && gulp build && cd ../docroot
	drush -y -v rsync @local @$(D_TARGET)
	drush -y -v rsync @local:../config/ @$(D_TARGET):../config/
	drush @$(D_TARGET) cr

db-sync: ## sync db
	drush -y -v sql-sync @local @$(D_TARGET)

help:
	@grep -P '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
