Example AMP page hosted on Heroku
=================================

AMP page is on:
- https://rocky-bastion-25448.herokuapp.com/amp-test.php

Validator is on: 
- https://search.google.com/test/amp?id=Ir4xIY1_2QQnRFWYjo1klw

Structured data validator (currently does NOT pass):
 - https://search.google.com/structured-data/testing-tool#url=https%3A%2F%2Frocky-bastion-25448.herokuapp.com%2Famp-test.php

# Deploying this App yourself

Create anywhere VM with Debian9 (tested `Debian GNU/Linux 9.3 (stretch)` on `amd64`) with following paremeters:

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

Install Heroku toolset (inspired by https://devcenter.heroku.com/articles/getting-started-with-php#set-up):

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


# Using local apache for development

Instal following in your VM:
```bash
apt-get install libapache2-mod-php
```
Ensure that apache has access to your HOME directory
```bash
# as unprivileged user
chmod a+rx ~/
```

Change `DocumentRoot` in your `/etc/apache2/sites-available/000-default.conf`
to your project directory and add permissions there - for example:
```apache
        DocumentRoot /home/ansible/projects/heroku-amp/public_html
        <Directory /home/ansible/projects/heroku-amp/public_html>
                AllowOverride None
                Require all granted
        </Directory>

```

Restart apache:
```bash
systemctl restart apache2
```

Try access using `http://YOUR_VM_IP/`


# Random Notes

Google does not support Publisher type Person:
- https://stackoverflow.com/a/40586036

AMP Test tool does not show images until they are indexed by Google Image bot (?).

Images are created using ImageMagick:
- see `scripts/create_images.sh`
- see official IM guide: http://www.imagemagick.org/Usage/text/#text_operators

To see my indexed page you can try to search world unique random
word `irgzurnuloer` on google.com.

# Bugs

None known.


# Resources

* AMP homepage: https://www.ampproject.org/docs/tutorials/create/basic_markup
* what is `mainEntityOfPage` - huh?
  - http://www.seoskeptic.com/how-to-use-schema-org-v2-0s-mainentityofpage-property/
* Google NewsArticle attributes (including images):
  - https://developers.google.com/search/docs/data-types/article
* Online AMP tester: https://search.google.com/test/amp
* Article on AMP controversy: https://danielmiessler.com/blog/google-amp-not-good-thing/
* ImageMagick - adding text:
  - http://www.imagemagick.org/Usage/text/
* Heroku:
  * [PHP Support](https://devcenter.heroku.com/articles/php-support)


