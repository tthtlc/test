.DEFAULT_GOAL=help
.PHONY: run build clean help
TARGET = src/CWE_601__GET__CAST-cast_int_sort_of__http_redirect_file_id-sprintf_%d_simple_quote.php


run: $(TARGET) ## Run the test case

build: $(TARGET) ## Build the test case
	php -l '$(TARGET)'

$(TARGET):

clean: ## Clean the test case

help: ## Show this help
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
