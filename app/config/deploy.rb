set :application, "example"

set :domain,   "#{application}.com"
set :port,     22
set :user,     ""
set :deploy_to, "/var/www/#{domain}"

set :scm,         :git
set :repository,  "git@github.com:username/repo.git"
set :branch,      "master"

set :model_manager,    "doctrine"
set :use_composer,     true
set :update_vendors,   false
set :interactive_mode, true

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain                         # This may be the same as your `Web` server
role :db,         domain, :primary => true       # This is where Symfony2 migrations will run

set  :keep_releases,  3

# Be more verbose by uncommenting the following line
logger.level = Logger::MAX_LEVEL
