load 'deploy' if respond_to?(:namespace) # cap2 differentiator

require 'capifony_symfony2'
load 'app/config/deploy'

set :shared_files,      ["app/config/parameters.yml"]
set :shared_children,   ["app/logs", "web/uploads", "vendor"]
