.DEFAULT_GOAL=help
.PHONY: run build clean help
TARGET = src/CWE_98__object-classicGet__func_FILTER-CLEANING-magic_quotes_filter__require_file_name-sprintf_%s_simple_quote.php


run: $(TARGET) ## Run the test case

build: $(TARGET) ## Build the test case
	php -l '$(TARGET)'

$(TARGET):

clean: ## Clean the test case

help: ## Show this help
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
