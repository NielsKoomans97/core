<h1>KoCore</h1>
<p>This is the core codebase for website projects. Entirely based on Laravel.</p>
<br>
<h3><b>Basic information</b></h3>
<p>
    The base consists of a container view which can be extended upon. It contains the component shortcode to the header and footer component. The stylesheets and scripts are dynamically added to the header from two JSON based config files.
</p>
<br>
<h3><b>First steps</b></h3>

* 1: Clone the git repository with

```
    git clone https://github.com/NielsKoomans97/core.git
```

* 2: Open a terminal window inside the cloned folder
* 3: Install the composer and node packages required for the site to work with

```
    composer install
```
and
```
    npm install
```
* 4: Find the .env.example file in the root folder, and remove the .example part from the file name
* 5: Generate a new key with
```
    php artisan key:generate
```
* 6: Run any needed migrations with
```
    php artisan migrate:fresh --seed (add --seed if there are seeders present)
```

<b>Congratulations, we now have a working clone of the core.</b>
