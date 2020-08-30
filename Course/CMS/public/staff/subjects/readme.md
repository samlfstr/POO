# Send and Recieve Data
`First` I created a table and added on that html & php simple table a link called view
. I needed to know dynamically what was the view link of the raw that I clicked. And
 you are doing this by using php super global arrays and on the html side with url
  queries. A `url query` is the part of the url after the question mark `_/page?*=_` * is
   the variable name and = after the equal sign is the value of that variable.
   
```php
<td>
  <a class="action" href="<?php echo url_for('staff\subjects\show.php') ?>">View</a>
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