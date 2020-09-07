# Learning about an Object or Class

There are a number fo basic tools available to check the type of object. First of all
 we can check the type of an object wiht the `get_class` function.
 
```php
//  Learning about an Object or Class
 $shop_product = new BookProductClass('Ball','Samuel', 'Foster',50,139);

//  Note : We are getting the class from the instance.
if (get_class($shop_product) == 'ShopProductClass'){
  echo $shop_product->getSummaryLine();
}else{
  echo "This is not a ShopProduct";
}
```

The `get_class()` function is a very specific tool. We often want a more general
 confirmation of a class type. We may wanna know that if an object belongs to the
  ShopProduct family.
  
  To do that we use simply  `instanceof` keyword.
  
```php
if($shop_product instanceof  BookProductClass){
  echo "It is instance of BookProduct";
}
else{
  echo "It is not instance of BookProduct";
}
```

# Learning about mehods

We can acquire a list of all the methodes in a class using the `get_class_methods
()` function. This requires a class name (`string`)  or an `instance` of that class and
 it returns
 containing the
 names of
 all the methods in the class.
 
```php
  0 => string '__construct' (length=11)
  1 => string 'getProducer' (length=11)
  2 => string 'getSummaryLine' (length=14)
```

And the way we check if the method exists is by using`in_array` function :

```php
$product = new Product();
$method_name = 'getTitle';

if( in_array ($method_name, get_class_methods($product))){
  print $product->$method_name();
}
```

**The Method Exist But Not Callable !**

Well in that case, we can check at the same time if a method exists and callable (`it's
 not private or public`) 
 
 ```php
if(is_callable(array($product, $method))){
  print $product->$getTitle();
}
 ```
 
# Learning about properties

You are doing this by using the `get_class_vars()` function.
It returns an associative array containing all the parameters of a class.

```php

$class_properties =  get_class_vars('ShopProductClass');
var_dump($class_properties);


```
