## Getting Set Up

Dossier is setup as an API-driven application, so you'll notice there is a
public folder and an API folder. The public folder will contain all the
application code (i.e. - HTML, Javascript, CSS, etc). The API folder contains
the Slim API that will be the datasource that feeds the application. The setup
has been created this way so those 2 folders can be setup on different
VirtualHosts and the API can stand alone.

### Composer

Composer is used to manage all the back end dependencies, a composer.json is
included in the project. Once composer is installed, you can install all the
dependencies by using ```composer install``` or ```composer update``` when
things change.

More information about composer can be found at http://getcomposer.org

### Bower

Bower is used to manage all the front end dependencies and can be installed with
```npm install bower -g```. There is a bower.json file that will work similar to
composer.json and will download all the dependencies. To install all the
packages that are in bower.json simply run ```bower install```. To install a
package that is not in bower.json, run ```bower install <package> --save```. The
--save flag is optional, when included it will add that package to the
bower.json file, otherwise it will just install the dependency. You can search
for packages using ```bower search <packagae>``` and that will indicate which
packages can be installed for the term you searched.

More information about Bower can be found at http://bower.io
