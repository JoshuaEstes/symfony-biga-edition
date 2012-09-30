set :application, "ApplicationName"
set :domain,      "example.com"
set :deploy_to,   "/var/www/#{domain}"
set :app_path,    "app"
set :repository,  "http://github.com/username/reponame.git"

# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, `subversion` or `none`
set :scm,         :git

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain                         # This may be the same as your `Web` server
role :db,         domain, :primary => true       # This is where Rails migrations will run

set  :keep_releases,  3
