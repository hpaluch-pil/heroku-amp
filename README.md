Example AMP page hosted on Heroku
=================================

AMP page is on:
- https://rocky-bastion-25448.herokuapp.com/amp-test.php

Validator is on: 
- https://search.google.com/test/amp?id=Ir4xIY1_2QQnRFWYjo1klw

Structured data validator (currently does NOT pass):
 - https://search.google.com/structured-data/testing-tool#url=https%3A%2F%2Frocky-bastion-25448.herokuapp.com%2Famp-test.php

# Deploying this App yourself

Create anywhere VM with Debian9 (tested Debian GNU/Linux 9.3 (stretch) / amd64 )with following paremeters:

* 20GB disk space (8GB should be enough)
* 512MB or more RAM
* 1xCPU

Install PHP/composer requirements (inspired by https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-debian-8):

```bash
apt-get update
apt-get upgrade
apt-get dist-upgrade
# composer is our addition
apt-get install curl php-cli git composer
```

Install Heroku toolset (inspired by https://devcenter.heroku.com/articles/getting-started-with-php#set-up ):

```bash
# additional requirement - isntalls add-apt-repository command and https transport
sudo apt-get install software-properties-common apt-transport-https
# copy from web page:
sudo add-apt-repository "deb https://cli-assets.heroku.com/branches/stable/apt ./"
curl -L https://cli-assets.heroku.com/apt/release.key | sudo apt-key add -
sudo apt-get update
sudo apt-get install heroku
```

Source code setup:
```bash
mkdir ~/projects
cd ~/projects
git clone https://github.com/hpaluch-pil/heroku-amp.git
cd heroku-amp
heroku login
heroku create
```

How to deploy to Heroku:
```bash
cd to_your_project_directory
git push heroku master
```

Checking/validating:
* Online AMP tester: https://search.google.com/test/amp

# Random Notes

Google does not support Publisher type Person:
- https://stackoverflow.com/a/40586036

# Bugs

* provide required image for whole page
* provide required image for publisher

# Resources

* AMP homepage: https://www.ampproject.org/docs/tutorials/create/basic_markup
* Google NewsArticle attributes (including images):
  - https://developers.google.com/search/docs/data-types/article
* Online AMP tester: https://search.google.com/test/amp
* Article on AMP controversy: https://danielmiessler.com/blog/google-amp-not-good-thing/


