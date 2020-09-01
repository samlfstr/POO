# Learning about an Object or Class

There are a number fo basic tools available to check the type of object. First of all
 we can check the type of an object wiht the `get_class` function.
 
```php
//  Learning about an Object or Class

 $shop_product = new BookProductClass('Ball','Samuel', 'Foster',50,139);

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