# Send and Recieve Data

`First` I created a table and added on that html & php simple table a link called view
. I needed to know dynamically what was the view link of the raw that I clicked. And
you are doing this by using php super global arrays and on the html side with url
queries. A `url query` is the part of the url after the question mark `_/page?*=_` * is
the variable name and = after the equal sign is the value of that variable.

```html
<td>
  <a class="action" href="<?php echo url_for('staff\subjects\show.php?id=') . subject['id']; ?>">View</a>
</td>
```

And to take the value from another script all you have to do is :

```php
<?php 
   // Get id from url
   $id = $_GET['id'];
?>
```

But there is a `problem` when you do that and in the url there is no `?id` naturally it
returns an error. Because get recieves nothing.

Solution using the null coalessing operator :

```php
<?php 
   // isset or null then 1 else equals to itself
   $id = $_GET['id'] ?? '1';
?>
```

# Url encode

The common problem with it is that, some time it may happen that we need to pass some string to URL, what happens is that when we use characters below it may be interpreted by the browser as it was url parameter even it is not the case.

To prevent that happening php gives us two builtin function

`urlencode` and `rawurlencode`

after the `question mark ?` or in the url query part you use the first one, simple one urlencode :

###### `note :` after the encode we dont need to decode cause it is done and saved in to $_GET super global variable automatically by php itself.

```html
<a href="show.php?name=.<?php echo urlencode('John Doe'); ?>">Handling Space</a>
<br/>
<a href="show.php?name=.<?php echo urlencode('John&Doe'); ?>">Handling & Sign</a>
<br/>
<a href="show.php?name=.<?php echo urlencode('!#34John **Doe'); ?>">Crazy Characters</a>
```

# CRUD - Create

I've named the file that I use for creating **`new.php`**.

New.php file has a bootstrap form where each input has a class of `form-group`

Code :

````html
<div class="form-group">
  <label for="menu_name">Menu Name</label>
  <input type="text" class="form-control" id="menu_name" placeholder="Menu Name">
  <small id="menu_help" class="form-text text-muted">Please provide a menu name    </small>
</div>
````

Other cool staff :

````html
<div class="input-group mb-one-half">
  <div class="input-group-prepend">
    <label class="input-group-text" 
for="input-group-select"> Position </label>
  </div>
  <select id="input-group-select">
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
````

Image :

![ScreenClip](https://user-images.githubusercontent.com/28195113/93888713-0a660f00-fcf1-11ea-8ab1-c790c15ee99a.png)

# CRUD - Edit

`Create` and `Edit` files are almost identical. To fill the edit file you are using url queries. You pulling the data from data base for the appropriate row.

$_POST super global array store values of form inputs as key value paires.

> php > 7.0

````php
$name = $_POST['name'] ?? "";
````

$_GET super global array store takes values from the url. Like url queries.


> When you refresh the page it returns the same `post` request.
>
> But when you select the url and press enter it returns a `get` request.
>
> You can control that process by creating functions to check whether a button submitted or not.

````php
// if submitted returns post
function is_post_request(){
  return $_SERVER['REQUEST_METHOD'] == "POST";
}
// if url selected and pressed enter returns get
function is_get_request(){
  return $_SERVER['REQUEST_METHOD'] == "GET";
}
````

And you can use that property to redirect the user if nothing is submitted.

````php
if (is_post_request()) {
  $name = $_POST['menu_name'] ?? "";
  $position = $_POST['position'] ?? "";
  $visible = $_POST['visible'] ?? 0;

  echo "Name : " . $name . "<br>";
  echo "Position : " . $position . "<br>";
  echo "Visible : " . $visible . "<br>";
}else{
  redirect_to(url_for('/staff/subjects/new.php'));
}
````
