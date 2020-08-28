# Autoload
---

**First** think that I did was to create 3 directories
```

Autoload
  Project
   ->Adress.php
   ->Age.php
  Shared
   ->autoload.php

```
The **obejctive** is to use classes without having to include them in (any)index.php
 file.
 
```php

 include "Shared/autoload.php";

```
 
 And the reason I created the `shared` directory is to use just one line of code to get
  access to the **autoload.php** file. Otherwise I'd need to duplicate the autoload
   function in every class. The code inside **autoload.php** class (`easy to understand`) :
   
   You write the name of the function in **spl_autoload_register()**.
   
   And autoload() has 1 parameter **$class_name** the rest of it is just the
    calculation of
    the full path.
   The **project/** directory is where you keep all the classes.
  
```php

spl_autoload_register('autoload');

function autoload($class_name){
 $path = "project/";
 $extention = '.php';
 $full_path = $path.$class_name.$extention;

 include_once $full_path;
}

```
   