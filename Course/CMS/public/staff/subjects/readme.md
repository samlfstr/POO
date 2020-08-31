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

























